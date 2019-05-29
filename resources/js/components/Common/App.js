import React, { Component } from "react";
import { render } from 'react-dom';
import LandingPage from '../LandingPage';
import DashboardPage from '../DashboardPage';
import FAQPage from "../FAQPage";

import './Common.scss';

if (document.getElementById("landingpage")) {
    render(<LandingPage />, document.getElementById("landingpage"));
}

if (document.getElementById("dashboardpage")) {
    render(<DashboardPage />, document.getElementById("dashboardpage"));
}

if (document.getElementById("faqpage")) {
    render(<FAQPage />, document.getElementById("faqpage"));
}
