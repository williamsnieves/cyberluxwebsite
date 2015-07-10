var FilterList = React.createClass({

	handleChange: function(e){
		
		console.log(e.target.checked);
		if(e.target.checked){
			$(APP).trigger('last');			
		}else{
			$(APP).trigger('default');
		}
	},

	render: function() {
		return (
			<li>				
				<h4>Filtrar por</h4>
				<input onChange={this.handleChange} id="lastNews"type="checkbox" />
				<label for="lastNews">Últimas Noticias</label>				
			</li>						
		);
	}

});

var FilterListMobile = React.createClass({

	handleChange: function(e){
		
		console.log(e.target.checked);
		if(e.target.checked){
			$(APP).trigger('last');			
		}else{
			$(APP).trigger('default');
		}
	},
	handlerSearch: function(e){		
		var inputSearch = $("#search-news");		
		if(inputSearch != ""){
			$(APP).trigger('search', [inputSearch.val()]);
		}
	},

	render: function() {
		return (			
			<li>				
				<h4>Filtrar por</h4>
				<input onChange={this.handleChange} id="lastNews"type="checkbox" />
				<label for="lastNews">Últimas Noticias</label>						
		         <form action="" className="relative-form">
		           <span onClick={this.handlerSearch} className="icon-search search-icon"></span>
		           <input id="search-news" type="text" placeholder="Palabra clave" className="input custom-search" />				            
		         </form>
		        
			</li>						
		);
	}

});

