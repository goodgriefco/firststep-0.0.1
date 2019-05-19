import React, { Component } from "react";

class TaskGroupListRow extends Component {
    constructor(props) {
        super(props);

        this.state = {
            checked: props.task.is_complete
        };

        this.handleClick = this.handleClick.bind(this);
    }

    async handleClick() {
        const { task } = this.props;

        await axios
            .post(`/api/task/${task.id}/complete`)
            .then(res => console.log('wee',res));

        this.setState(prevState => ({
            checked: !prevState.checked
        }));
    }

    render() {
        const { task } = this.props;

        return (
            <li className="form-check pl-0 my-3">
                <label className="custom-control overflow-checkbox">
                    <input
                        type="checkbox"
                        className="overflow-control-input"
                        onClick={this.handleClick}
                        value={task.is_complete}
                        defaultChecked={task.is_complete}
                    />
                    <span className="overflow-control-indicator" />
                    <span className="overflow-control-description">
                        {task.title}
                    </span>
                </label>
            </li>
        );
    }
}

export default TaskGroupListRow;
