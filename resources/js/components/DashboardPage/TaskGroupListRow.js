import React, { Component } from "react";

class TaskGroupListRow extends Component {
    render() {
        const { task } = this.props;

        return (
            <li className="form-check pl-0 my-3">
                <label className="custom-control overflow-checkbox">
                    <input type="checkbox" className="overflow-control-input" />
                    <span className="overflow-control-indicator"></span>
                    <span className="overflow-control-description">{task.title}</span>
                </label>
            </li>
        );
    }
}

export default TaskGroupListRow;
