import React, { Component } from "react";

class TaskGroupHeader extends Component {
    constructor(props) {
        super(props);

        this.state = {
            headerText: ''
        };
    }

    async componentDidMount() {
        const { groupId } = this.props;
        // Load async data.
        let taskgroup = await axios.get(`/api/taskgroup/${groupId}`);

        this.setState({ headerText: taskgroup.data.task_group.title});
    }

    render() {
        const {
            headerText,
            canCollapse,
            isCollapsed,
            handleCollapse,
            groupId
        } = this.props;

        const iconConstant = isCollapsed ? "expand_more" : "expand_less";

        return (
            <div className="border-bottom">
                {canCollapse ? (
                    <a
                        data-toggle="collapse"
                        href={`#group-${groupId}`}
                        className="text-dark d-flex justify-content-between text-decoration-none"
                        // @TODO - aria controls?
                        onClick={handleCollapse}
                    >
                        <h3>{this.state.headerText}</h3>
                        <i className="material-icons">{iconConstant}</i>
                    </a>
                ) : (
                    <h3>{headerText}</h3>
                )}
            </div>
        );
    }
}

export default TaskGroupHeader;
