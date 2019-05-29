import React, { Component } from "react";

class FAQPage extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="container">
                <h1>Frequently Asked Questions</h1>
                <div id="accordion">
                    <div className="card">
                        <div className="card-header" id="headingOne">
                            <h5 className="mb-0">
                                <button
                                    className="btn btn-link"
                                    data-toggle="collapse"
                                    data-target="#collapseOne"
                                    aria-expanded="true"
                                    aria-controls="collapseOne"
                                >
                                    How does it work?
                                </button>
                            </h5>
                        </div>

                        <div
                            id="collapseOne"
                            className="collapse show"
                            aria-labelledby="headingOne"
                            data-parent="#accordion"
                        >
                            <div className="card-body">
                                First, create an account and answer a few, short
                                questions to help us personalize your
                                experience. Then, you can access your free
                                dashboard. We instantly create a comprehensive
                                checklist to walk you through the entire
                                experience after a loss. We’ll keep you on
                                track, share useful resources and assist in
                                decision making.
                            </div>
                        </div>
                    </div>
                    <div className="card">
                        <div className="card-header" id="headingTwo">
                            <h5 className="mb-0">
                                <button
                                    className="btn btn-link collapsed"
                                    data-toggle="collapse"
                                    data-target="#collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="collapseTwo"
                                >
                                    Why do I have to fill out the questions when
                                    I sign up?
                                </button>
                            </h5>
                        </div>
                        <div
                            id="collapseTwo"
                            className="collapse"
                            aria-labelledby="headingTwo"
                            data-parent="#accordion"
                        >
                            <div className="card-body">
                                The intake questions allow us to provide a
                                personalized checklist for you. Depending on
                                timing and preferences your experience can vary
                                widely. You can always change your preferences
                                by going to “my preferences” on the left side of
                                your checklist.
                            </div>
                        </div>
                    </div>
                    <div className="card">
                        <div className="card-header" id="headingThree">
                            <h5 className="mb-0">
                                <button
                                    className="btn btn-link collapsed"
                                    data-toggle="collapse"
                                    data-target="#collapseThree"
                                    aria-expanded="false"
                                    aria-controls="collapseThree"
                                >
                                    How does the concierge work?
                                </button>
                            </h5>
                        </div>
                        <div
                            id="collapseThree"
                            className="collapse"
                            aria-labelledby="headingThree"
                            data-parent="#accordion"
                        >
                            <div className="card-body">
                                Our concierge is a live human that can answer
                                questions and direct you to resources. Find the
                                concierge here. The concierge is available live
                                9-5pm EST Monday-Friday. If outside these hours,
                                our concierge will follow up with you within 24
                                hours (usually sooner!)
                            </div>
                        </div>
                    </div>
                    <div className="card">
                        <div className="card-header" id="headingFour">
                            <h5 className="mb-0">
                                <button
                                    className="btn btn-link collapsed"
                                    data-toggle="collapse"
                                    data-target="#collapseFour"
                                    aria-expanded="false"
                                    aria-controls="collapseFour"
                                >
                                    I forgot my password and/or username. How do
                                    I find it?
                                </button>
                            </h5>
                        </div>
                        <div
                            id="collapseFour"
                            className="collapse"
                            aria-labelledby="headingFour"
                            data-parent="#accordion"
                        >
                            <div className="card-body">
                                No problem! Click the “sign in” button on the
                                homepage and then click “ forgot password” on
                                the bottom of the pop up screen. Still having
                                trouble logging in? Message our concierge.
                                Available live 9-5pm EST M-F. If outside these
                                hours, our concierge will follow up with you
                                within 24 hours.
                            </div>
                        </div>
                    </div>
                    <div className="card">
                        <div className="card-header" id="headingFive">
                            <h5 className="mb-0">
                                <button
                                    className="btn btn-link collapsed"
                                    data-toggle="collapse"
                                    data-target="#collapseFive"
                                    aria-expanded="false"
                                    aria-controls="collapseFive"
                                >
                                    What if I don’t want to make an account. How
                                    else can I use Good Grief?
                                </button>
                            </h5>
                        </div>
                        <div
                            id="collapseFive"
                            className="collapse"
                            aria-labelledby="headingFive"
                            data-parent="#accordion"
                        >
                            {/* @TODO - Link to content hub/block. See MVP content. */}
                            <div className="card-body">
                                Our content is accessible with or without an
                                account. Check out articles that cover the
                                entire end of life experience here.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default FAQPage;
