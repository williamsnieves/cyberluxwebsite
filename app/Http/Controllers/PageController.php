<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

use App\Models\Page;
use App\Models\Node;
use App\Models\News;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;

class PageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()	{

		return view('pages.home');
	}

	public function test()	{

		return view('test');
	}

	public function about(){

		//$pages = Page::where('name','nosotros')->get();					
		$pages = Page::with('nodes')->where('name','nosotros')->get();
		/*$pagesInstance = new Page();	
		$pages = $pagesInstance->nodes()->where('name','nosotros')->get();*/
		//dd($pages);

		return view('pages.about')->with(array("pages" => $pages));
	}

	public function products(){
		$brands = Brand::all();
		return view('pages.products')->with(array("brands" => $brands));
	}

	public function news(){
		return view('pages.news');
	}

	public function locations(){
		$pages = Page::with('nodes')->where('name','sedes')->get();
		return view('pages.locations')->with(array("pages" => $pages));
	}

	public function gallery(){
		return view('pages.gallery');
	}

	public function contact(){
		return view('pages.contact');
	}

	public function storecontact(ContactFormRequest $request){
		
		\Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('info@cyberluxdevenezuela.com.ve');
        $message->to('info@cyberluxdevenezuela.com.ve', 'Admin')->subject('Contacto cyberlux');
    });

  		return redirect('contact')->with('message', 'Gracias por contactarnos!!!');

	}

	public function social(){
		$pages = Page::with('nodes')->where('name','social')->get();
		return view('pages.social')->with(array("pages" => $pages));
	}

	public function showNews($slug){		
		//$detailsnews = News::where('slug', '=', $slug)->firstOrFail();
		$detailsnews = News::with('galleries')->with('typenews')->where('slug', '=', $slug)->firstOrFail();
				
		return view('pages.detailnews')->with(array("detailsnews" => $detailsnews));
	}

	public function newsdetail($id){
		switch ($id) {
			case '1':
				return view('pages.news1');
				break;
			case '2':			
				return view('pages.news2');
				break;
			case '3':			
				return view('pages.news3');
				break;
		}
	}

	public function typeProducts($name){
		switch ($name) {
			case 'cyberlux':
				return view('pages.brownproducts');
				break;
			
			case 'frigilux':
				return view('pages.whiteproducts');
				break;
		}
	}

	public function categoryProducts($brand){
		$categories = Category::whereHas('brands', function($q) use ($brand){
			$q->where('name', '=', $brand);
		})->with('images')->with('brands')->get();

		$brands = Brand::where('name', '=', $brand)->get();

		//return $brands;
		return view('pages.categoryproducts')->with(array("categories" => $categories, "brands" => $brands));
		
	}


	public function getAllNews(Request $request){
		$input = $request->input('search');     	 

		if(!isset($input)){			
			//$detailsnews = News::with('galleries')->with('typenews')->get();
			$detailsnews = News::with('galleries')->with('typenews')->paginate(10)->setPath('/news/list/all');
		}else if($input == 'last'){
			$detailsnews = News::with('galleries')->with('typenews')->take(10)->orderBy('created_at', 'desc')->get();
		}else if($input == 'productos'){
			$detailsnews = $this->getFilterNews($input);			
		}else if($input == 'corporativas'){
			$detailsnews = $this->getFilterNews($input);
		}else if($input == 'eventos'){
			$detailsnews = $this->getFilterNews($input);
		}else{
			$detailsnews = News::with('galleries')->with('typenews')->where('title', 'LIKE', "%$input%")->paginate(10);
		}


		return $detailsnews;
	}

	public function getFilterNews($filterword){		
		$detailsnewsfilter = News::whereHas('typenews', function($q) use ($filterword){
			$q->where('name', '=', $filterword);
		})->paginate(10);
		return $detailsnewsfilter;
	}

	public function listProducts($brand,$slug){

		$products = Product::whereHas('categories', function($q) use ($slug){
			$q->where('slug', '=', $slug);
		})->with('categories')->with('images')->paginate(10);

		$category = Category::where('slug', '=', $slug)->get();

		//return $category;
		return view('pages.listproducts')->with(array("products" => $products, 'category' => $category, 'brand'=>$brand));

	}

	public function detailProducts($brand,$slug,$slugdetail){

		$product = ProductDetail::whereHas('products', function($q) use ($slugdetail){
			$q->where('slug', '=', $slugdetail)->with('categories');
		})->with('images')->with('products')->get();

		$category = Category::find($product[0]->products->categories_id);
		
		return view('pages.detailproducts')->with(array("productdetail" => $product, "category" => $category));
	}

	public function televisors($name, $product){
		return view('pages.televisores');
	}

	public function search(Request $request){
		//print_r($request->input("search"));

		$term = $request->input("search");

		$news = News::where('title', 'LIKE', "%$term%")->select('title','slug')->get();

		$products = Product::where('name', 'LIKE', "%$term%")->select('name','slug')->get();

		$pages = Page::where('title', 'LIKE', "%$term%")->select('name','title')->get();

		/*$news->push(["label" => "news"]);
		$products->push(["label" => "products"]);
		$pages->push(["label" => "pages"]);*/

		//$results = array_unique(array_merge($news, $products));

		$newsarray = $news->toArray();		
		$productssarray = $products->toArray();
		$pagesarray = $pages->toArray();

		$results = array_merge($newsarray, $productssarray, $pagesarray);
		return \Response::json($results);

		/*$results = (object) array_merge(get_object_vars($news), get_object_vars($products));*/
		return $results;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
