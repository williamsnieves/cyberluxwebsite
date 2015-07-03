var NewsList = React.createClass({

	render: function() {
		
		var displayNews = function(news){
			return {				
				news: news.title
			};
		}
		return (
			<div>{this.props.news.map(displayNews)}</div>
		);
	}

});