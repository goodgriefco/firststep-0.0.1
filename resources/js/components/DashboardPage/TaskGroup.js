import React, { Component } from "react";
import TaskGroupHeader from "./TaskGroupHeader";
import TaskGroupList from "./TaskGroupList";
import './TaskGroup.scss';

class TaskGroup extends Component {
    constructor(props) {
        super(props);

        this.state = {
            isCollapsed: false
        };

        this.toggleCollapse = this.toggleCollapse.bind(this);
    }

    // Keeps track of collapsed state to help determine which collapse icon to use.
    toggleCollapse() {
        this.setState(prevState => ({
            isCollapsed: !prevState.isCollapsed
        }));
    }

    render() {
        const { headerText, canCollapse, groupId, tasks } = this.props;
        const { isCollapsed } = this.state;

        return (
            <div className="container my-3">
                <TaskGroupHeader
                    canCollapse={canCollapse}
                    headerText={headerText}
                    isCollapsed={isCollapsed}
                    handleCollapse={this.toggleCollapse}
                    groupId={groupId}
                />
                <TaskGroupList groupId={groupId} tasks={tasks} />
            </div>
        );
    }
}

export default TaskGroup;
