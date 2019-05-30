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
                                    The Checklist
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
                                <h4 className="font-italic">
                                    How does it work?
                                </h4>
                                <p>
                                    First, create an account and answer a few,
                                    short questions to help us personalize your
                                    experience. Then, you can access your free
                                    dashboard. We instantly create a
                                    comprehensive checklist to walk you through
                                    the entire experience after a loss. We’ll
                                    keep you on track, share useful resources
                                    and assist in decision making.{" "}
                                </p>
                                <h4 className="font-italic">
                                    Why do I have to fill out the questions when
                                    I sign up?
                                </h4>
                                <p>
                                    The intake questions allow us to provide a
                                    personalized checklist for you. Depending on
                                    timing and preferences your experience can
                                    vary widely. You can always change your
                                    preferences by going to “my preferences” on
                                    the left side of your checklist.{" "}
                                </p>
                                <h4 className="font-italic">
                                    How does the concierge work?
                                </h4>
                                <p>
                                    Our concierge is a live human that can
                                    answer questions and direct you to
                                    resources. Find the concierge here. The
                                    concierge is available live 9-5pm EST
                                    Monday-Friday. If outside these hours, our
                                    concierge will follow up with you within 24
                                    hours (usually sooner!)
                                </p>
                                <h4 className="font-italic">
                                    I forgot my password and/or username. How do
                                    I find it?
                                </h4>
                                <p>
                                    No problem! Click the “sign in” button on
                                    the homepage and then click “ forgot
                                    password” on the bottom of the pop up
                                    screen. Still having trouble logging in?
                                    Message our concierge. Available live 9-5pm
                                    EST M-F. If outside these hours, our
                                    concierge will follow up with you within 24
                                    hours.
                                </p>
                                <h4 className="font-italic">
                                    What if I don’t want to make an account. How
                                    else can I use Good Grief?
                                </h4>
                                <p>
                                    Our content is accessible with or without an
                                    account. Check out articles that cover the
                                    entire end of life experience [here]
                                </p>
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
                                    Contacting Us
                                </button>
                            </h5>
                        </div>
                        <div
                            id="collapseTwo"
                            className="collapse"
                            aria-labelledby="headingTwo"
                            data-parent="#accordion"
                        >
                            <div className="card-body container">
                                <h4 className="font-italic">
                                    I’m trying to get in touch with you. What’s
                                    the best way to reach out?
                                </h4>
                                <p>We love meeting new people!</p>

                                <p>
                                    Looking for job opportunities? Email:{" "}
                                    <a href="mail:to">alyssa@goodgrief.co</a>
                                </p>
                                <p>
                                    Interested in investing in or partnering
                                    with Good Grief? Email:{" "}
                                    <a href="mail:to">liz@goodgrief.co</a>
                                </p>
                                <p>
                                    Media inquiry? Email:{" "}
                                    <a href="mail:to">liz@goodgrief.co</a>
                                </p>
                                <p>
                                    Questions, ideas, thoughts? Email:{" "}
                                    <a href="mail:to">hello@goodgrief.co</a>
                                </p>
                                <p>
                                    How can I stay in the know about Good Grief?
                                    Sign up for our
                                </p>
                                <ul>
                                    <li>[newsletter]</li>
                                    <li>[Follow us on Facebook and]</li>
                                    <li>[Instagram]</li>
                                </ul>
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
                                    About us
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
                                <h4 className="font-italic">
                                    Why did you start this company?
                                </h4>
                                <p>
                                    We’ve been in your shoes before. We saw how
                                    the current offerings are often overpriced,
                                    confusing and primarily offline. We built
                                    Good Grief based on your needs. Our company
                                    isn’t designed for the industry; it’s
                                    designed for you.
                                </p>
                                <h4 className="font-italic">
                                    How is this free? How do you make money?
                                </h4>
                                <p>
                                    We believe in offering exceptional free
                                    services for our users. Funeral planning is
                                    an expensive time as it is. As we grow, we
                                    will offer paid features but the checklist
                                    will always be free. We do not take any
                                    funds from service providers meaning our
                                    guidance is not influenced by sponsors or
                                    advertisers.
                                </p>
                                <h4 className="font-italic">
                                    Why are you a benefit corporation?
                                </h4>
                                <p>
                                    We are a mission driven for profit company.
                                    A Benefit Corporation is a legal designation
                                    that allows us to maintain our mission to
                                    serve grieving families through capital
                                    raises, changes in leadership or anything
                                    else. Learn more about Benefit Corporations{" "}
                                    {/* @TODO - Add aria tags? */}
                                    <a
                                        href="https://benefitcorp.net/"
                                        target="_blank"
                                    >
                                        here
                                    </a>
                                    .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default FAQPage;
