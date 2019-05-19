import React, { Component } from "react";
import TaskGroupListRow from './TaskGroupListRow';

class TaskGroupList extends Component {
    render() {
        const { groupId, tasks } = this.props;

        return (
            <ul className="list-unstyled m-0 collapse show" id={`group-${groupId}`}>
                {tasks.map((task, idx) => (
                    <TaskGroupListRow key={idx} task={task} />
                ))}
            </ul>
        );
    }
}

export default TaskGroupList;
