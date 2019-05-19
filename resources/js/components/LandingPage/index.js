import React, { Component } from "react";

class LandingPage extends Component {
    constructor(props) {
        super(props);

        this.state = {
            authenticated: window.getFromBackend.userName || null
        }
    }

    render() {
        const { authenticated } = this.state;

        return (
            <div className="container-fluid">
                <div className="container p-5 border-bottom">
                    <p className="text-center font-weight-light mb-4 lead">
                        The first thing to do when a loved one dies.
                    </p>
                    <p className="text-center font-weight-light mb-4">
                        A checklist to get you through your first week.
                    </p>
                    <div className="text-center">
                        {/* @TODO - make into it's own component with authentication logic handling */}
                        {authenticated ? (
                                <div>
                                    <a className="btn btn-secondary btn-lg bg-success" href="/dashboard" role="button">Go to Your Dashboard</a>
                                </div>
                            ) : (
                                <div>
                                    <a
                                        className="btn btn-secondary bg-success btn-lg"
                                        href="/register"
                                        role="button"
                                    >
                                        Create Checklist
                                    </a>
                                    <small className="form-text text-muted m-3">
                                        Already a member?{" "}
                                        <a href="/login">Sign In</a>
                                    </small>
                                </div>
                            )}
                    </div>
                </div>
                <div className="container p-5 border-bottom">
                    <h2 className="text-center font-weight-light mb-4">
                        How It Works:
                    </h2>
                    <div className="steps">
                        <div className="row no-gutters py-4">
                            <div className="col">
                                <h2>1. First you do this thing</h2>
                            </div>
                            <div className="col">
                                <img
                                    src="https://via.placeholder.com/500x200"
                                    className="rounded mx-auto d-block"
                                    alt="..."
                                />
                            </div>
                        </div>
                        <div className="row no-gutters py-4">
                            <div className="col">
                                <h2>2. Then this thing</h2>
                            </div>
                            <div className="col">
                                <img
                                    src="https://via.placeholder.com/500x200"
                                    className="rounded mx-auto d-block"
                                    alt="..."
                                />
                            </div>
                        </div>
                        <div className="row no-gutters py-4">
                            <div className="col">
                                <h2>3. And then this thing</h2>
                            </div>
                            <div className="col">
                                <img
                                    src="https://via.placeholder.com/500x200"
                                    className="rounded mx-auto d-block"
                                    alt="..."
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div className="container p-5">
                    <h2 className="text-left font-weight-light mb-4">
                        About Us
                    </h2>
                    <p className="text-left font-weight-light mb-4">
                        The nail technician pushed my cuticles back ... turns my
                        hand over, stretches the skin on my palm and says, "I
                        see your daughters and their daughters." That night in a
                        dream, the first girl emerges from a slit in my stomach.
                        The scar heals into a smile. The man I love pulls the
                        stitches out with his fingernails. We leave black
                        sutures curling on the side of the bath.
                    </p>
                </div>
            </div>
        );
    }
}

export default LandingPage;
// render(<LandingPage />, document.getElementById("react-content"));
