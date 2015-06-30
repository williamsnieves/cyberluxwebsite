var TaskApp = React.createClass({

	getInitialState: function() {
        return {
            items: ['hola'],
            task: ''
        };
    },

    addTask: function(e){
    	var items = this.state.items.concat([this.state.task]);
    	var task =  '';

    	this.setState({items, task})
    	e.preventDefault();
    },

    onChange: function(e){
    	var task = e.target.value;
    	this.setState({task})
    },

	render: function() {
		return (
			<div>
				<h1>My tasks</h1>
				<TaskList items={this.state.items} />

				<form onSubmit={this.addTask}>
					<input onChange={this.onChange} value={this.state.task}/>
					<button>add task</button>
				</form>
			</div>
		);
	}

});

React.render(<TaskApp />, document.getElementById('tasksReact'));