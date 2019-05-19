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
        const { headerText, canCollapse, groupId, group } = this.props;
        const { isCollapsed } = this.state;
        console.log('TaskGroup');
        console.log(group);
        return (
            <div className="container my-3">
                <TaskGroupHeader
                    canCollapse={true}
                    headerText="something"
                    isCollapsed={false}
                    handleCollapse={this.toggleCollapse}
                    groupId={group[0]}
                />
                <TaskGroupList groupId={group[0]} tasks={group[1]} />
            </div>
        );
    }
}

export default TaskGroup;
