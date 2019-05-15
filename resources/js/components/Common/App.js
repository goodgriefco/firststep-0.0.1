import React, { Component } from "react";
import { render } from 'react-dom';
import LandingPage from '../LandingPage';
import DashboardPage from '../DashboardPage';

if (document.getElementById("landingpage")) {
    render(<LandingPage />, document.getElementById("landingpage"));
}

if (document.getElementById("dashboardpage")) {
    render(<DashboardPage />, document.getElementById("dashboardpage"));
}
