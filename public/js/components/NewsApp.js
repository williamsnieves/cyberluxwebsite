var protocol,host, base_url, APP;

APP = {};

protocol = window.location.protocol;
host = window.location.host;

base_url = host;
var NewsApp = React.createClass({

	getInitialState: function(){
		return {
			news: []
		}
	},

	builtPaginator:function(result){

		var urlpagination = protocol+"//"+base_url+"/news/list/all?page=";

		var nextLink = result.next_page_url || "#";
		var prevLink = result.prev_page_url || "#";	
		
		$("#pagination").append("<li><a href='"+prevLink+"' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>");
		$("#pagination").append("<li><a href='"+nextLink+"' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>");

		for(var i=1; i <= result.last_page; i++){
			if(i == 1)
				$("<li class='active line-news'><a href='"+urlpagination+i+"'>"+i+"</a></li>").insertBefore(".pagination > li:last-child" );
			else
				$("<li class='line-news'><a href='"+urlpagination+i+"'>"+i+"</a></li>").insertBefore(".pagination > li:last-child" );
		}	
	},

	updatePaginator: function(result){
		var urlpagination = protocol+"//"+base_url+"/news/list/all?page=";
		$(".pagination").children().remove();

		var nextLink = result.next_page_url || "#";
		var prevLink = result.prev_page_url || "#";	

		$("#pagination").append("<li><a href='"+prevLink+"' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>");
		$("#pagination").append("<li><a href='"+nextLink+"' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>");

		for(var i=1; i <= result.last_page; i++){
			if(i == result.current_page )
				$("<li class='active line-news'><a href='"+urlpagination+i+"'>"+i+"</a></li>").insertBefore(".pagination > li:last-child" );
			else
				$("<li class='line-news'><a href='"+urlpagination+i+"'>"+i+"</a></li>").insertBefore(".pagination > li:last-child" );
		}

	},

	removePaginator: function(){
		$(".pagination").children().remove();
	},

	getPagination: function(){
		var self = this;
		$("#pagination > li > a").on('click', function(e){
	        e.preventDefault();
	        var page = $(this).attr('href').split('page=')[1];	
	        $(this).parent().siblings().removeClass('active');
	        $(this).parent().toggleClass('active');
	        $(this).parent().siblings().removeClass('active');			        

	        self.getNews(page);
		})
	},

	filterHandler: function(filterParam){
		var url;
		console.log(filterParam);

		if(filterParam == 'last')
			$("#pagination").hide();
		else
			$("#pagination").show();

		if(filterParam != undefined){
			url = protocol+"//"+base_url+"/news/list/all?search="+filterParam;
			var self = this;
			$.getJSON(url, function(result){				
				
				if(result.last_page > 0 && result.last_page <= 10)
					$("#pagination").hide();
				else if(result.last_page > 10)
					$("#pagination").show();
				else
					$("#pagination").hide();

				if(filterParam != 'last'){
					if(!result.data || !result.data.length){
						self.setState({
							news: []
						})
						return;				
					}
				}else{
					if(!result || !result.length){
						self.setState({
							news: []
						})
						return;				
					}
				}							
				

				self.removePaginator();
				self.builtPaginator(result);
				self.getPagination();
				
				if(filterParam != 'last'){
					var news = result.data.map(function(newsparam){
						return {
							title: newsparam.title,
							slug: newsparam.slug,
							created: newsparam.created_at,
							summary: newsparam.summary
						}
					});
				}else{
					var news = result.map(function(newsparam){
						return {
							title: newsparam.title,
							slug: newsparam.slug,
							created: newsparam.created_at,
							summary: newsparam.summary
						}
					});
				}
				

				self.setState({
					news: news
				})
			})
		}else{
			url = protocol+"//"+base_url+"/news/list/all";
			var self = this;
			$.getJSON(url, function(result){
				console.log(result);
				if(!result.data || !result.data.length){
					return;
				}

				self.removePaginator();
				self.builtPaginator(result);
				self.getPagination();
				

				var news = result.data.map(function(newsparam){
					return {
						title: newsparam.title,
						slug: newsparam.slug,
						created: newsparam.created_at,
						summary: newsparam.summary
					}
				});

				self.setState({
					news: news
				})
			})
		}
	},

	getNews: function(page){
		var self = this;
		$.ajax({
			url:  protocol+"//"+base_url+"/news/list/all?page="+page,
			type: 'get',
			beforeSend: function(){
				//loader
			},
			success: function(result){
				//off loader
				console.log(result);
				var news = result.data.map(function(newsparam){
					return {
						title: newsparam.title,
						slug: newsparam.slug,
						created: newsparam.created_at,
						summary: newsparam.summary
					}
				});				

				self.updatePaginator(result);
				self.getPagination();

				self.setState({
					news: news
				})
			}
		})
	},

	componentDidMount: function(){		
		
		var self = this;
		$(APP).on('last', function(e){
			self.filterHandler('last');
		});

		$(APP).on('products', function(e){
			self.filterHandler('productos');
		});

		$(APP).on('corporate', function(e){
			self.filterHandler('corporativas');
		});

		$(APP).on('events', function(e){
			self.filterHandler('eventos');
		});

		$(APP).on('search', function(e, param){			
			self.filterHandler(param);
		});

		$(APP).on('default', function(e){			
			self.filterHandler();
		});


		this.filterHandler();

		
		/*var url = protocol+"//"+base_url+"/news/list/all";
		var self = this;
		$.getJSON(url, function(result){
			console.log(result);
			if(!result || !result.length){
				return;
			}	

			var news = result.map(function(newsparam){
				return {
					title: newsparam.title,
					summary: newsparam.summary
				}
			});

			self.setState({
				news: news
			})
		})*/

	},

	componentDidUpdate: function(){
		var newsHeight = $("#newsContentDesktop").height();

		$(".wrapper-filter-news").height(newsHeight + (newsHeight / 2));

	},

	render: function() {

		return (
			<NewsList news={this.state.news} />
		);
	}

});
var size = $(window).width();

console.log(size);

if(size < 992)
	React.render(<NewsApp />, document.getElementById("container-news-mobile"));
else
	React.render(<NewsApp />, document.getElementById("container-news"));