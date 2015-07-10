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

var FilterContainerMobile = React.createClass({

	render: function() {
		return (
			<ul className="col-md-12 list-filter">
				<FilterListMobile/>
				<FilterSearchMobile/>
			</ul>
		);
	}

});

var size = $(window).width();

if(size < 992)
	React.render(<FilterContainerMobile/>, document.getElementById('filterbuttons-mobile'));
else
	React.render(<FilterContainer/>, document.getElementById('filterbuttons'));

