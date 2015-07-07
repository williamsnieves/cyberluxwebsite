var protocol,host, base_url;
protocol = window.location.protocol;
host = window.location.host;
base_url = host;
var NewsList = React.createClass({

	render: function() {
		
		var displayNews = function(news){
			/*return {				
				news: news.summary
			};*/
			var url = protocol+"//"+base_url+"/news/";
			var now = moment(news.created).locale('es').format("LL");
			return (
                <div>
					<a href={url+news.slug}>					
						<h2>
							{news.title}
						</h2>
					</a>
					<p>
						{news.summary}
					</p>
					<span class="date-news">
						{now}
					</span>
				</div>
            );
		}
		return (
			<div>{this.props.news.map(displayNews)}</div>
		);
	}

});