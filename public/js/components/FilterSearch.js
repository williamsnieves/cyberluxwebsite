var FilterSearch = React.createClass({
	handlerChange: function(e){	
		console.log(e.target.checked);
		if(e.target.checked){
			var dataType = $(e.target).attr("data-type");
			switch(dataType){
				case 'products':
					$(APP).trigger('products');
					break;
				case 'corporate':
					$(APP).trigger('corporate');
					break;
				case 'events':
					$(APP).trigger('events');
					break;
			}			
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
				<h5>Categoría</h5>

				<form action="" className="form-horizontal">							
					<table className="table-list-filter">
						<tr>
							<td><input onChange={this.handlerChange} data-type="products" id="lastNewsProd"type="checkbox" /></td>
							<td><label for="lastNewsProd">Noticias de Productos</label>	</td>
						</tr>
						<tr>
							<td><input onChange={this.handlerChange} data-type="corporate" id="lastNewsCoorp"type="checkbox" /></td>
							<td><label for="lastNewsCoorp">Noticias Corporativas</label></td>
						</tr>
						<tr>
							<td><input onChange={this.handlerChange} data-type="events" id="lastEve"type="checkbox" /></td>
							<td><label for="lastEve">Eventos recientes</label></td>
						</tr>
					</table>					
					
				</form>
				<form action="" className="relative-form form-search-news">
			        <span onClick={this.handlerSearch} className="icon-search search-icon"></span>
			        <input id="search-news" type="text" placeholder="Palabra clave" className="input custom-search" />				            
			    </form>
			</li>
		);
	}

});


var FilterSearchMobile = React.createClass({
	handlerChange: function(e){	
		console.log(e.target.checked);
		if(e.target.checked){
			var dataType = $(e.target).attr("data-type");
			switch(dataType){
				case 'products':
					$(APP).trigger('products');
					break;
				case 'corporate':
					$(APP).trigger('corporate');
					break;
				case 'events':
					$(APP).trigger('events');
					break;
			}			
		}else{
			$(APP).trigger('default');
		}
	},
	render: function() {
		return (			
			<li>				
				<h5>Categoría</h5>

				<form action="" className="form-horizontal">							
					<table >
						<tr>
							<td><input onChange={this.handlerChange} data-type="products" id="lastNewsProd"type="checkbox" /></td>
							<td><label for="lastNewsProd">Noticias de Productos</label>	</td>
						</tr>
						<tr>
							<td><input onChange={this.handlerChange} data-type="corporate" id="lastNewsCoorp"type="checkbox" /></td>
							<td><label for="lastNewsCoorp">Noticias Corporativas</label></td>
						</tr>
						<tr>
							<td><input onChange={this.handlerChange} data-type="events" id="lastEve"type="checkbox" /></td>
							<td><label for="lastEve">Eventos recientes</label></td>
						</tr>
					</table>					
					
				</form>
			</li>
		);
	}

});