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

	filterHandler: function(filterParam){
		var url;
		console.log(filterParam);

		if(filterParam != undefined){
			url = protocol+"//"+base_url+"/news/list/all?search="+filterParam;
			var self = this;
			$.getJSON(url, function(result){
				console.log("filtro ",result);
				if(!result || !result.length){
					self.setState({
						news: []
					})
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
			})
		}else{
			url = protocol+"//"+base_url+"/news/list/all";
			var self = this;
			$.getJSON(url, function(result){
				console.log(result);
				if(!result.data || !result.data.length){
					return;
				}

				console.log($(".pagination > li:first-child"));

				console.log("res", result.total);

				var urlpagination = result.next_page_url.substring(0, 20);

				$(".pagination > li:first-child a").attr("href", result.prev_page_url);
				$(".pagination > li:last-child a").attr("href", result.next_page_url);

				for(var i=1; i <= result.total; i++){
					if(i == 1)
						$("<li class='active line-news'><a href='"+urlpagination+i+"'>"+i+"</a></li>").insertBefore(".pagination > li:last-child" );
					else
						$("<li class='line-news'><a href='"+urlpagination+i+"'>"+i+"</a></li>").insertBefore(".pagination > li:last-child" );
				}

				//$("ul.pagination li").first().siblings().append("<li><a href='#'>1</a></li>");

				
				/*$("<li><a href='#'>1</a></li>").insertBefore(".pagination > li:last-child" );
				$("<li><a href='#'>2</a></li>").insertBefore(".pagination > li:last-child" );*/

				var news = result.data.map(function(newsparam){
					return {
						title: newsparam.title,
						summary: newsparam.summary
					}
				});

				self.setState({
					news: news
				})
			})
		}
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

	render: function() {
		return (
			<NewsList news={this.state.news} />
		);
	}

});

React.render(<NewsApp />, document.getElementById("container-news"));