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

    handleSubmit(event) {
        event.preventDefault();
        alert("A name was submitted: " + this.state.value);
    }

    render() {
        return (
            <form onSubmit={this.handleSubmit}>
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

                <button type="submit" className="btn btn-secondary">Add</button>
            </form>
        );
    }
}

export default AddTaskForm;
