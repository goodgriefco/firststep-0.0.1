import React, { Component } from "react";
import TaskGroup from "./TaskGroup";

class DashboardPage extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        const fakeGroups = [
            {
                id: "header1",
                headerText: "Fake group header",
                canCollapse: true,
                tasks: [
                    {
                        title: "Task Title BLAHHH",
                        status: "done"
                    },
                    {
                        title: "2 Task Title",
                        status: "done"
                    },
                    {
                        title: "3 Task Title",
                        status: "done"
                    }
                ]
            },
            {
                id: "header2",
                headerText: "Another Fake group header",
                canCollapse: true,
                tasks: [
                    {
                        title: "Task Title BLAHHH",
                        status: "done"
                    },
                    {
                        title: "2 Task Title",
                        status: "done"
                    },
                    {
                        title: "3 Task Title",
                        status: "done"
                    }
                ]
            }
        ];

        return (
            <div>
                <div className="container text-center my-4">
                    <h3>Welcome, [NAME]</h3>
                </div>
                {fakeGroups.map((group, idx) => (
                    <TaskGroup
                        key={idx}
                        canCollapse={group.canCollapse}
                        headerText={group.headerText}
                        tasks={group.tasks}
                        groupId={group.id} // @TODO - can we just use key?
                    />
                ))}
            </div>
        );
    }
}

export default DashboardPage;
