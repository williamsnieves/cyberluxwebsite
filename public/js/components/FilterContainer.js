var FilterContainer = React.createClass({

	render: function() {
		return (
			<ul className="col-md-12 list-filter">
				<FilterList/>
				<FilterSearch/>
			</ul>
		);
	}

});

React.render(<FilterContainer/>, document.getElementById('filterbuttons'));
