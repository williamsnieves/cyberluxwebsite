var FilterList = React.createClass({

	render: function() {
		return (
			<li>				
				<h4>Filtrar por</h4>
				<input id="lastNews"type="checkbox" />
				<label for="lastNews">Últimas Noticias</label>
			</li>
			<li>				
				<h5>Categoría</h5>

				<form action="" class="form-horizontal">							
					<table class="table-list-filter">
						<tr>
							<td><input id="lastNewsProd"type="checkbox" /></td>
							<td><label for="lastNewsProd">Noticias de Productos</label>	</td>
						</tr>
						<tr>
							<td><input id="lastNewsCoorp"type="checkbox" /></td>
							<td><label for="lastNewsCoorp">Noticias Corporativas</label></td>
						</tr>
						<tr>
							<td><input id="lastEve"type="checkbox" /></td>
							<td><label for="lastEve">Eventos recientes</label></td>
						</tr>
					</table>					
					
				</form>
				<form action="" class="relative-form form-search-news">
		            <span class="icon-search search-icon"></span>
		            <input type="text" placeholder="Palabra clave" class="input custom-search" />				            
		        </form>
			</li>
		);
	}

});

React.render(<FilterList/>, document.getElementsByClassName('list-filter'));
