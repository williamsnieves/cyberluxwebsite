@extends('base')
@section('title')
	Cyberlux - Noticias
@endsection
@section('content')
<div class="container-fluid">
	<div class="row elavation-desktop">
		<div class="col-xs-12 wrapper-news wrapper-news-mobile">
			<h1>noticias</h1>
			<div id="container-news-mobile">					
					

			</div>

			<nav>
			  <ul id="pagination" class="pagination">
			    
			  </ul>
			</nav>
			
			
			<section class="col-xs-12 filter-tool" id="filterbuttons-mobile" style="position:fixed; bottom:0;">
				
			</section>
		</div>

		<section class="col-md-12 wrapper-news-desktop">
			<div class="col-md-4 wrapper-filter-news">
				<div class="col-md-12" id="filterbuttons">
						
				</div>
				
			</div>
			<div class="col-md-8 wrapper-news" id="newsContentDesktop">
				<h1>noticias</h1>
				<div id="container-news">					
					

				</div>

				<nav>
				  <ul id="pagination" class="pagination">
				    
				  </ul>
				</nav>
				
			</div>

			<div id="avatarReact">
				
			</div>
			
		</section>
	</div>
</div>
@endsection
@section('footerscript')
<script>
	/*$('.pagination li.line-news a').on('click', function(e){
    e.preventDefault();
    var url = $(this).attr('href');
    alert(url);*/
    /*$.post(url, $('#search').serialize(), function(data){
        $('#posts').html(data);
    });*/


</script>
<script type="text/jsx" src="{{ URL::to('/') }}/js/components/FilterList.js"></script>
<script type="text/jsx" src="{{ URL::to('/') }}/js/components/FilterSearch.js"></script>
<script type="text/jsx" src="{{ URL::to('/') }}/js/components/FilterContainer.js"></script>
<script type="text/jsx" src="{{ URL::to('/') }}/js/components/NewsList.js"></script>
<script type="text/jsx" src="{{ URL::to('/') }}/js/components/NewsApp.js"></script>


<script>

/*for(var i=0; i<10;i++){
	$domelement = "<div><p>provando "+(i+1)+" </p></div>";
	$('#container-news').append($domelement);
}*/


</script>
@endsection