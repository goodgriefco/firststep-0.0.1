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

        const { groupId } = this.props;
        const container = document.querySelector("#dashboardpage");
        const userId = container.dataset.userId;
        const addTaskForm = document.getElementById(`add-task-form-${groupId}`);
        const taskTitle = addTaskForm.elements[`title-${groupId}`].value;

        let task = await axios
            .post(`/api/user/${userId}/tasks`, { title: taskTitle, groupId: groupId })
            .then(res => {
                if (res.data.message = 'success') {
                    this.props.addTaskHandler();
                }
            });
    }

    render() {
        const { groupId } = this.props;

        return (
            <form id={`add-task-form-${groupId}`} onSubmit={this.handleSubmit}>
                <div className="form-group">
                    <label>
                        Task Title:
                        <input
                            id={`title-${groupId}`}
                            name={`title-${groupId}`}
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
