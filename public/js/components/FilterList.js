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

