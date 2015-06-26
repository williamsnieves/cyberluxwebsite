<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Page;
use App\Models\Node;

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
		return view('pages.products');
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

	public function storecontact(Request $request){
		
		\Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('wj@wjgilmore.com');
        $message->to('williamsnieves@gmail.com', 'Admin')->subject('TODOParrot Feedback');
    });

  		return redirect('contact')->with('message', 'Gracias por contactarnos!!!');

	}

	public function social(){
		$pages = Page::with('nodes')->where('name','social')->get();
		return view('pages.social')->with(array("pages" => $pages));
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


	public function televisors($name, $product){
		return view('pages.televisores');
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
