import React, { Component } from "react";
import { map } from "lodash";
import TaskGroup from "./TaskGroup";
import AddTaskForm from "./Forms/AddTaskForm";

class DashboardPage extends Component {
    constructor(props) {
        super(props);

        this.state = { tasks: [] };
        this.handleAddTask = this.handleAddTask.bind(this);
    }

    async componentDidMount() {
        const container = document.querySelector("#dashboardpage");
        const userId = container.dataset.userId;
        const userName = container.dataset.userName;

        // Load async data.
        let tasks = await axios.get(`/api/user/${userId}/tasks`);

        // Parse the results for ease of use.
        tasks = tasks.data;

        this.setState({ tasks, userName });
    }

    async handleAddTask() {
        const container = document.querySelector("#dashboardpage");
        const userId = container.dataset.userId;
        const userName = container.dataset.userName;

        // Load async data.
        let tasks = await axios.get(`/api/user/${userId}/tasks`);

        // Parse the results for ease of use.
        tasks = tasks.data;

        this.setState({ tasks, userName });
    }

    submiyAddTask() {
        console.log("submitAddTask");
    }

    render() {
        const { tasks } = this.state;

        // Helper
        const groupBy = key => array =>
            array.reduce((objectsByKeyValue, obj) => {
                const value = obj[key];
                objectsByKeyValue[value] = (
                    objectsByKeyValue[value] || []
                ).concat(obj);
                return objectsByKeyValue;
            }, {});

        const groupByGroupId = groupBy('group_id');
        const tasksByGroup = groupByGroupId(tasks);

        return (
            <div>
                <div className="container text-center my-4">
                    <h3>Welcome, {this.state.userName}</h3>
                </div>
                {Object.entries(tasksByGroup).map((group, idx) => {
                    return (
                        <div className="container" key={idx}>
                            <TaskGroup
                                canCollapse={true}
                                headerText="group header"
                                group={group}
                                groupId="3" // @TODO - can we just use key?
                                addTask={this.handleAddTask}
                            />
                        </div>
                    );
                })}
            </div>
        );
    }
}

export default DashboardPage;
