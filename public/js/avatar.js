var Avatar = React.createClass({

		getDefaultProps: function(){
			return {
				path: "https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Pac_Man.svg/250px-Pac_Man.svg.png"
			}
		},
	
		render: function() {
			return (
				<div>
					<img src={this.props.path} />
				</div>
			);
		}
	
	});
	
	React.render(<Avatar />, document.getElementById('avatarReact'));