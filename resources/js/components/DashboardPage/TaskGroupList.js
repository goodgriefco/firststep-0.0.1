import React, { Component } from "react";
import TaskGroupListRow from "./TaskGroupListRow";
import AddTaskForm from "./Forms/AddTaskForm";

class TaskGroupList extends Component {
    render() {
        const { groupId, tasks, addTask } = this.props;

        return (
            <div>
                <ul
                    className="list-unstyled m-0 collapse show"
                    id={`group-${groupId}`}
                >
                    {tasks.map((task, idx) => (
                        <TaskGroupListRow key={idx} task={task} />
                    ))}
                </ul>

                <a
                    className="btn btn-secondary"
                    data-toggle="collapse"
                    href="#collapseExample"
                    role="button"
                    aria-expanded="false"
                    aria-controls="collapseExample"
                >
                    Add Task
                </a>
                <div className="container my-4 collapse" id="collapseExample">
                    <AddTaskForm
                        addTaskHandler={addTask}
                        groupId={groupId}
                    />
                </div>
            </div>
        );
    }
}

export default TaskGroupList;
