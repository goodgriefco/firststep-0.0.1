import React, { Component } from "react";

class AddTaskForm extends React.Component {
    constructor(props) {
        super(props);
        this.state = { value: "" };

        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleChange(event) {
        this.setState({ value: event.target.value });
    }

    async handleSubmit(event) {
        event.preventDefault();

        const container = document.querySelector("#dashboardpage");
        const userId = container.dataset.userId;
        // const addTaskForm = document.querySelector(".add-task-form");
        const addTaskForm = document.getElementById('add-task-form');
        const taskTitle = addTaskForm.elements["title"].value;

        // Load async data.
        let task = await axios
            .post(`/api/user/${userId}/tasks`, { title: taskTitle })
            .then(res => {
                if (res.data.message = 'success') {
                    this.props.addTaskHandler();
                }
            });
    }

    render() {
        return (
            <form id="add-task-form" onSubmit={this.handleSubmit}>
                <div className="form-group">
                    <label>
                        Task Title:
                        <input
                            id="title"
                            name="title"
                            maxLength="255"
                            type="text"
                            className="form-control"
                            autoComplete="off"
                            value={this.state.value}
                            onChange={this.handleChange}
                        />
                    </label>
                </div>

                <button type="submit" className="btn btn-secondary">
                    Add
                </button>
            </form>
        );
    }
}

export default AddTaskForm;
