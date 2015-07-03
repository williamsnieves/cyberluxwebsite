var protocol,host, base_url;

protocol = window.location.protocol;
host = window.location.host;

base_url = host;
var NewsApp = React.createClass({

	getInitialState: function(){
		return {
			news: []
		}
	},

	componentDidMount: function(){
		
		var url = protocol+"//"+base_url+"/news/list/all";
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
		})

	},

	render: function() {
		return (
			<NewsList news={this.state.news} />
		);
	}

});

React.render(<NewsApp />, document.getElementById("container-news"));