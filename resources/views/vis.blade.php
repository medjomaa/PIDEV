@extends('dashboard')
@section('title', 'Gym Performance Dashboard: Insights and Trends')

@section('content')
<title>Admin Dashboard</title>
<style>
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap");

body {
    background-image: url("https://www.teahub.io/photos/full/36-364691_wallpaper-of-abstract-red-line-light-background-digital.jpg");
    color: #fff; /* Keep text color for better contrast */
    font-family: 'Roboto', sans-serif; /* Ensures typography consistency */

    /* Background properties for full coverage */
    background-size: cover; /* Scale the background to be as large as possible */
    background-position: center; /* Center the background image */
    background-repeat: no-repeat; /* Do not repeat the background */
    background-attachment: fixed; /* Optional: Makes the background fixed during scroll */

    /* Ensures the background covers the entire viewport */
    min-height: 100vh; /* Minimum height is 100% of the viewport height */
    width: 100vw; /* Width is 100% of the viewport width */
    position: relative; /* Relative positioning for layered elements */
    display: flex;
    align-items: center; /* Centers content vertically */
    justify-content: center; /* Centers content horizontally */
}


.dashboard-header {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    background: rgba(27, 27, 50, 0.85); /* Dark theme for header */
    border-bottom: 2px solid #007bff;
}

.user-info {
    display: flex;
    align-items: center;
}

.user-profile-image {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 10px;
}

.user-name {
    font-size: 18px;
    font-weight: bold;
}

.date-picker-container {
    display: flex;
    align-items: center;
}

.date-picker-container form {
    display: flex;
    background: #495057;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
}

.date-picker-container label {
    color: #fff;
    margin-right: 10px;
    font-size: 16px;
}

.date-picker-container input[type="date"] {
    background-color: transparent;
    color: #fff;
    border: none;
    padding: 8px;
    cursor: pointer;
}

.date-picker-container button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    margin-left: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.date-picker-container button:hover {
    background-color: #0056b3;
}

.content-header {
    text-align: center;
    padding: 20px;
    background: rgba(27, 27, 50, 0.85);
    margin-top: 20px;
    font-size: 24px;
}

@media (max-width: 768px) {
    .dashboard-header {
        flex-direction: column;
        align-items: center;
    }
    .date-picker-container form {
        flex-direction: column;
    }
    .date-picker-container button {
        margin-top: 10px;
    }
}

.graph-description{
    color: #ffe5e5;
}
.graph-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
.graph-item {
    width: 30%;
    padding: 10px;
    box-sizing: border-box;
}
.graph-item.large {
    width: 60%;
    flex: 100%;
}
.graph-box {
    background: rgba(27, 27, 50, 0.85);
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
    padding: 20px;
    margin-bottom: 20px;
    cursor: pointer;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background: rgba(27, 27, 50, 0.85); /* Light background for modal */
}

.modal-content {
  background: rgba(27, 27, 50, 0.85); 
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}
    .info-section {
        background: rgba(27, 27, 50, 0.85);/* White background for clarity */
        padding: 20px;
        margin: 20px 0; /* Added margin for spacing */
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    .current-date, .additional-info {
        margin-bottom: 20px;
    }

    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap");
* {
  box-sizing: border-box;
}

:root {
  --app-bg-dark: #01081f;
  --app-bg-before: linear-gradient(
    180deg,
    rgba(1, 8, 31, 0) 0%,
    rgba(1, 8, 31, 1) 100%
  );
  --app-bg-before-2: linear-gradient(
    0deg,
    rgba(1, 8, 31, 0) 0%,
    rgba(1, 8, 31, 1) 100%
  );
  --app-bg-light: #151c32;
  --app-logo: #3d7eff;
  --nav-link: #5e6a81;
  --nav-link-active: #fff;
  --list-item-hover: #0c1635;
  --main-color: #fff;
  --secondary-color: #5e6a81;
  --color-light: rgba(52, 129, 210, 0.2);
  --warning-bg: #ffe5e5;
  --warning-icon: #ff8181;
  --applicant-bg: #e3fff1;
  --applicant-icon: #61e1a1;
  --close-bg: #fff8e5;
  --close-icon: #fdbc64;
  --draft-bg: #fed8b3;
  --draft-icon: #e9780e;
}









.chart-row {
  display: flex;
  justify-content: space-between;
  margin: 0 -8px;
}
.chart-row.three .chart-container-wrapper {
    width: calc(33.33% - 10px); /* Adjust width to fit three items per row accounting for some margin */
    height: 300px; /* Example fixed height */
    margin: 5px; /* Added margin for spacing between charts */
}
.chart-row.three .chart-container-wrapper .chart-container {
  justify-content: space-between;
}
.chart-row.two .big {
  flex: 1;
  max-width: 77.7%;
}
.chart-row.two .big .chart-container {
  flex-direction: column;
}
.chart-row.two .small {
  width: 33.3%;
}
.chart-row.two .small .chart-container {
  flex-direction: column;
}
.chart-row.two .small .chart-container + .chart-container {
  margin-top: 16px;
}

.line-chart {
  width: 100%;
  margin-top: 24px;
}

.chart-container {
  width: 100%;
  height: 80%;
  border-radius: 10px;
  background: rgba(27, 27, 50, 0.85);
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
  padding: 16px;
  display: flex;
  align-items: center;
}
.chart-container.applicants {
  max-height: 336px;
  overflow-y: auto;
}

.chart-container-wrapper {
  padding: 8px;
}

.chart-info-wrapper {
  flex-shrink: 0;
  flex-basis: 120px;
}
.chart-info-wrapper h2 {
  color: var(--secondary-color);
  font-size: 12px;
  line-height: 16px;
  font-weight: 600;
  text-transform: uppercase;
  margin: 0 0 8px 0;
}
.chart-info-wrapper span {
  color: var(--main-color);
  font-size: 24px;
  line-height: 32px;
  font-weight: 500;
}

.chart-svg {
  position: relative;
  max-width: 90px;
  min-width: 40px;
  flex: 1;
}

.circle-bg {
  fill: none;
  stroke: #eee;
  stroke-width: 1.2;
}

.circle {
  fill: none;
  stroke-width: 1.6;
  stroke-linecap: round;
  -webkit-animation: progress 1s ease-out forwards;
          animation: progress 1s ease-out forwards;
}

.circular-chart.orange .circle {
  stroke: #ff9f00;
}
.circular-chart.orange .circle-bg {
  stroke: #776547;
}
.circular-chart.blue .circle {
  stroke: #00cfde;
}
.circular-chart.blue .circle-bg {
  stroke: #557b88;
}
.circular-chart.pink .circle {
  stroke: #ff7dcb;
}
.circular-chart.pink .circle-bg {
  stroke: #6f5684;
}

.percentage {
  fill: #fff;
  font-size: 0.5em;
  text-anchor: middle;
  font-weight: 400;
}

@-webkit-keyframes progress {
  0% {
    stroke-dasharray: 0 100;
  }
}

@keyframes progress {
  0% {
    stroke-dasharray: 0 100;
  }
}
.chart-container-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  margin-bottom: 12px;
}
.chart-container-header h2 {
  margin: 0;
  color: var(--main-color);
  font-size: 12px;
  line-height: 16px;
  opacity: 0.8;
}
.chart-container-header span {
  color: var(--app-logo);
  font-size: 12px;
  line-height: 16px;
}

.acquisitions-bar {
  width: 100%;
  height: 4px;
  border-radius: 4px;
  margin-top: 16px;
  margin-bottom: 8px;
  display: flex;
}

.bar-progress {
  height: 4px;
  display: inline-block;
}
.bar-progress.applications {
  background-color: #ff7dcb;
}
.bar-progress.shortlisted {
  background-color: #00cfde;
}
.bar-progress.on-hold {
  background-color: #fdac42;
}
.bar-progress.rejected {
  background-color: #ff5c5c;
}

.progress-bar-info {
  display: flex;
  align-items: center;
  margin-top: 8px;
  width: 100%;
}

.progress-color {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin-right: 8px;
}
.progress-color.applications {
  background-color: #ff7dcb;
}
.progress-color.shortlisted {
  background-color: #00cfde;
}
.progress-color.on-hold {
  background-color: #fdac42;
}
.progress-color.rejected {
  background-color: #ff5c5c;
}

.progress-type {
  color: var(--secondary-color);
  font-size: 12px;
  line-height: 16px;
}

.progress-amount {
  color: var(--secondary-color);
  font-size: 12px;
  line-height: 16px;
  margin-left: auto;
}

.applicant-line {
  display: flex;
  align-items: center;
  width: 100%;
  margin-top: 12px;
}
.applicant-line img {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  -o-object-fit: cover;
     object-fit: cover;
  margin-right: 10px;
  flex-shrink: 0;
}

.applicant-info span {
  color: var(--main-color);
  font-size: 14px;
  line-height: 16px;
}
.applicant-info p {
  margin: 4px 0;
  font-size: 12px;
  line-height: 16px;
  color: var(--secondary-color);
}

.profile-box {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
}
.profile-box:before {
  content: "";
  position: absolute;
  top: 100%;
  height: 48px;
  width: 100%;
  background-image: var(--app-bg-before-2);
  z-index: 1;
}

.profile-photo-wrapper {
  width: 80px;
  height: 80px;
  overflow: hidden;
  border-radius: 50%;
  margin-bottom: 16px;
}
.profile-photo-wrapper img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

.profile-text,
.profile-subtext {
  font-size: 12px;
  line-height: 16px;
  color: var(--secondary-color);
  margin: 0 0 8px 0;
}

.profile-text {
  font-weight: 600;
}

.app-right-section-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 16px;
  margin-top: 16px;
}
.app-right-section-header h2 {
  font-size: 14px;
  line-height: 24px;
  color: var(--secondary-color);
}
.app-right-section-header span {
  display: inline-block;
  color: var(--secondary-color);
  position: relative;
}
.app-right-section-header span.notification-active:before {
  content: "";
  position: absolute;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background-color: var(--app-logo);
  top: -1px;
  right: -1px;
  box-shadow: 0 0 0 2px var(--app-bg-dark);
}

.message-line {
  display: flex;
  align-items: center;
  padding: 8px 16px;
  margin-bottom: 8px;
}
.message-line:hover {
  background-color: var(--list-item-hover);
}
.message-line img {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  -o-object-fit: cover;
     object-fit: cover;
  margin-right: 8px;
}

.message-text-wrapper {
  max-width: calc(100% - 48px);
}

.message-text {
  font-size: 14px;
  line-height: 16px;
  color: var(--main-color);
  margin: 0;
  opacity: 0.8;
  width: 100%;
}

.message-subtext {
  font-size: 12px;
  line-height: 16px;
  color: var(--secondary-color);
  margin: 4px 0 0 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  width: 100%;
}

.activity-line {
  padding: 8px 16px;
  display: flex;
  align-items: flex-start;
  margin-bottom: 8px;
}

.activity-link {
  font-size: 12px;
  line-height: 16px;
  color: var(--app-logo);
  text-decoration: underline;
}

.activity-text {
  font-size: 12px;
  line-height: 16px;
  color: var(--secondary-color);
  width: 100%;
  margin: 0;
}
.activity-text strong {
  color: #fff;
  opacity: 0.4;
  font-weight: 500;
}

.activity-icon {
  border-radius: 8px;
  width: 32px;
  height: 32px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-shrink: 0;
  margin-right: 8px;
}
.activity-icon.warning {
  background-color: var(--warning-bg);
  color: var(--warning-icon);
}
.activity-icon.applicant {
  background-color: var(--applicant-bg);
  color: var(--applicant-icon);
}
.activity-icon.close {
  background-color: var(--close-bg);
  color: var(--close-icon);
}
.activity-icon.draft {
  background-color: var(--draft-bg);
  color: var(--draft-icon);
}

.action-buttons {
  display: flex;
  align-items: center;
}

.menu-button {
  width: 40px;
  height: 40px;
  margin-left: 8px;
  display: none;
  justify-content: center;
  align-items: center;
  padding: 0;
  background-color: var(--app-bg-dark);
  border: none;
  color: var(--main-color);
  border-radius: 4px;
}

.close-menu {
  position: absolute;
  top: 16px;
  right: 16px;
  display: none;
  align-items: center;
  justify-content: center;
  border: none;
  background-color: transparent;
  padding: 0;
  color: var(--main-color);
  cursor: pointer;
}

@media screen and (max-width: 1350px) {
  .app-right {
    flex-basis: 240px;
    width: 240px;
  }

  .app-left {
    flex-basis: 200px;
  }
}
@media screen and (max-width: 1200px) {
  .app-right {
    position: absolute;
    opacity: 0;
    top: 0;
    z-index: 2;
    height: 100%;
    width: 320px;
    right: -100%;
    box-shadow: 0 0 10px 5px rgba(1, 8, 31, 0.4);
  }
  .app-right .close-right {
    position: absolute;
    top: 16px;
    right: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    background-color: transparent;
    padding: 0;
    color: var(--main-color);
    cursor: pointer;
  }

  .app-main .open-right-area {
    display: flex;
    color: var(--main-color);
  }
}
@media screen and (max-width: 1180px) {
  .chart-row.two {
    flex-direction: column;
  }

  .chart-row.two .big {
    max-width: 100%;
  }

  .chart-row.two .small {
    display: flex;
    justify-content: space-between;
    width: 100%;
  }
  .chart-row.two .small .chart-container {
    width: calc(50% - 8px);
  }
  .chart-row.two .small .chart-container.applicants {
    margin-top: 0;
  }
}
@media screen and (max-width: 920px) {
  .menu-button {
    display: flex;
  }

  .app-left {
    position: absolute;
    opacity: 0;
    top: 0;
    z-index: 2;
    height: 100%;
    width: 320px;
    right: -100%;
    box-shadow: 0 0 10px 5px rgba(1, 8, 31, 0.4);
  }

  .close-menu {
    display: flex;
  }
}
@media screen and (max-width: 650px) {
  .chart-row.three {
    flex-direction: column;
  }

  .chart-row.three .chart-container-wrapper {
    width: 100%;
  }

  .chart-svg {
    min-height: 60px;
    min-width: 40px;
  }
}
@media screen and (max-width: 520px) {
  .chart-row.two .small {
    flex-direction: column;
  }

  .chart-row.two .small .chart-container {
    width: 100%;
  }
  .chart-row.two .small .chart-container.applicants {
    margin-top: 16px;
  }

  .main-header-line h1 {
    font-size: 14px;
  }
}
.sentiment-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.sentiment-details {
    display: flex;
    justify-content: space-around; /* This already helps in spreading the circles */
    width: 100%;
    gap: 100px; /* Adds more space between each sentiment if needed */
}

.sentiment {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 5px; /* Adjusts space between the SVG and the text */
}

.circular-chart .percentage-icon {
    font-size: 20px; /* Keeping the emoji/icon size relatively large for visibility */
    fill: white;
}

.sentiment .percentage-text {
    color: white; /* Use color for HTML elements */
    font-weight: bold; /* Optional: Makes the text bold for visibility */
    /* Add any additional styling here */
}



/* Ensure the feedback-icon class is adjusted if used for additional styling */
.feedback-icon {
    font-size: 24px; /* Adjust the size of the emojis/icons as needed */
    /* Removed margin-right as it's not used in the modified structure */
}

/* Additional color styling for circles based on sentiment */
.circular-chart .circle {
    /* Use stroke to set circle color if needed */
}

.sentiment-positive .circle {
    stroke: #4CAF50; /* Green */
}

.sentiment-negative .circle {
    stroke: #F44336; /* Red */
}

.sentiment-neutral .circle {
    stroke: #FFC107; /* Amber */
}
.equipment-quality-section {
    font-size: 1.2em; /* Increase the text size for better readability */
    padding: 30px; /* Add more padding for a larger appearance */
}
.equipment-quality-section .chart-container {
    display: flex;
    flex-direction: column; /* Ensures content within .chart-container stacks vertically */
}

.equipment-quality-section {
    font-size: 0.8em; /* Adjust font size for smaller overall appearance */
    padding: 15px; /* Reduce padding to decrease container size */
    max-width: 300px; /* Set a maximum width for the container */
    margin: auto; /* Center the container */
}

.progress-bar-info {
    display: flex; /* Use flexbox for inline arrangement */
    align-items: left; /* Align items vertically in the center */
    justify-content: start; /* Align content to the start */
    gap: 8px; /* Space between items */
    margin-bottom: 8px; /* Space between each category */
}

.progress-color {
    display: inline-block;
    width: 15px; /* Slightly larger for visibility */
    height: 15px; /* Slightly larger for visibility */
    border-radius: 50%;
}
.custom-alert-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Dim the background */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000; /* Ensure it's on top of other content */
}

.custom-alert {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 90%;
    max-width: 400px; /* Adjust based on your preference */
}

.custom-alert p {
    margin: 0 0 20px 0;
}

.custom-alert button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.custom-alert button:hover {
    background-color: #0056b3;
}

/* New Styles */
/* CSS for aligning the Manage Users button */
.admin-users-button {
    margin-left: auto; /* Aligns the button to the right within its container */
    padding: 10px; /* Provides padding around the button */
}

/* Style modifications for the button for a consistent look and feel */
.admin-users-button a.btn {
    background-color: #007bff; /* Primary blue for the button */
    color: white; /* White text color */
    padding: 10px 15px; /* Padding inside the button */
    text-decoration: none; /* Removes underline from links */
    border-radius: 5px; /* Rounded corners for the button */
    font-weight: bold; /* Makes the button text bold */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25); /* Subtle shadow for 3D effect */
    transition: background-color 0.3s ease; /* Smooth transition for hover effect */
}

.admin-users-button a.btn:hover {
    background-color: #0056b3; /* Darker blue on hover */
}



</style>

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
@if(session('error'))
<div id="customAlert" class="custom-alert-overlay">
    <div class="custom-alert">
        <p>{{ session('error') }}</p>
        <button onclick="closeCustomAlert()">Close</button>
    </div>
</div>
@endif

<div class="content-header">
    <h1>Welcome to the Gym Performance Dashboard</h1>
</div>

<div class="dashboard-header">
    <div class="user-info">
        @if($userImage)
            <img src="{{ $userImage }}" alt="User Profile Image" class="user-profile-image">
        @else
            <i class="fas fa-user-circle" style="font-size: 40px; color: #fff;"></i>
        @endif
        <div class="user-name">{{ $userName }}</div>
    </div>
     <!-- Button to go to Admin Users Page -->
     @if (Auth::user()->isAdmin1())
     <div class="admin-users-button">
        <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Manage Users</a>
    </div>
    @endif
    <div class="date-picker-container">
        <form action="{{ route('dashboard') }}" method="get">
            <label for="datePicker">Select Date:</label>
            <input type="date" id="datePicker" name="date" value="{{ $selectedDate ?? '' }}">
            <button type="submit">Load Data</button>
        </form>
    </div>

   
</div>




<div class="chart-row three"> <!-- Updated class to accommodate all charts -->
    <!-- Male vs Total Users Percentage -->
    <div class="chart-container-wrapper">
        <div class="chart-container">
            <div class="chart-info-wrapper">
                <h2>Male Users</h2>
                <span>{{ number_format($malePercentage, 2) }}%</span>
            </div>
            <div class="chart-svg">
                <svg viewBox="0 0 36 36" class="circular-chart blue">
                    <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                    <path class="circle" stroke-dasharray="{{ $malePercentage }}, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                    <text x="18" y="20.35" class="percentage">{{ number_format($malePercentage, 2) }}%</text>
                </svg>
            </div>
        </div>
    </div>

    <!-- Female vs Total Users Percentage -->
    <div class="chart-container-wrapper">
        <div class="chart-container">
            <div class="chart-info-wrapper">
                <h2>Female Users</h2>
                <span>{{ number_format($femalePercentage, 2) }}%</span>
            </div>
            <div class="chart-svg">
                <svg viewBox="0 0 36 36" class="circular-chart pink">
                    <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                    <path class="circle" stroke-dasharray="{{ $femalePercentage }}, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                    <text x="18" y="20.35" class="percentage">{{ number_format($femalePercentage, 2) }}%</text>
                </svg>
            </div>
        </div>
    </div>

    <!-- Feedback Sentiment Analysis -->
    <div class="chart-container-wrapper">
    <div class="chart-container">
        <div class="chart-info-wrapper sentiment-wrapper">
            <h2>Feedback Sentiment</h2>
            <div class="sentiment-details">
                <!-- Positive Sentiment -->
                <div class="sentiment sentiment-positive">
                    <svg width="60" height="50" viewBox="0 0 36 36" class="circular-chart">
                        <path class="circle-bg"
                            d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831">
                        </path>
                        <path class="circle"
                            stroke-dasharray="{{ $positivePercentage }}, 100"
                            d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831">
                        </path>
                        <text x="18" y="20" class="percentage-icon" text-anchor="middle" alignment-baseline="central">😊</text>
                    </svg>
                    <div class="percentage-text">{{ number_format($positivePercentage, 2) }}%</div>
                </div>


                <!-- Negative Sentiment -->
                <div class="sentiment sentiment-negative">
                    <svg width="60" height="50" viewBox="0 0 36 36" class="circular-chart">
                        <path class="circle-bg"
                            d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831">
                        </path>
                        <path class="circle"
                            stroke-dasharray="{{ $negativePercentage }}, 100"
                            d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831">
                        </path>
                        <text x="18" y="20" class="percentage-icon" text-anchor="middle" alignment-baseline="central">😠</text>
                    </svg>
                    <div class="percentage-text">{{ number_format($negativePercentage, 2) }}%</div>
                </div>

                <!-- Neutral Sentiment -->
                <div class="sentiment sentiment-neutral">
                    <svg width="60" height="50" viewBox="0 0 36 36" class="circular-chart">
                        <path class="circle-bg"
                            d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831">
                        </path>
                        <path class="circle"
                            stroke-dasharray="{{ $neutralPercentage }}, 100"
                            d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831">
                        </path>
                        <rect x="10" y="17" width="16" height="6" fill="white" /> 
                        <text x="18" y="20" class="percentage-icon" text-anchor="middle" alignment-baseline="central">😐</text>
                    </svg>
                    <div class="percentage-text">{{ number_format($neutralPercentage, 2) }}%</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="chart-container-wrapper small equipment-quality-section">
    <div class="chart-container">
        <div class="chart-container-header">
            <h2>Equipment Quality and Availability:</h2>
        </div>
        <div class="acquisitions-bar">
            <span class="bar-progress rejected" style="width:{{ number_format($poorqp, 2) }}%;"></span>
            <span class="bar-progress on-hold" style="width:{{ number_format($fairqp, 2) }}%;"></span>
            <span class="bar-progress shortlisted" style="width:{{ number_format($goodqp, 2) }}%;"></span>
            <span class="bar-progress applications" style="width:{{ number_format($excellentqp, 2) }}%;"></span>
        </div>
        <div class="progress-bar-info">
            <div><span class="progress-color applications"></span></div>
            <div><span class="progress-type">Excellent</span></div>
            <div><span class="progress-amount">{{ number_format($excellentqp, 2) }}%</span></div>
        </div>
        <div class="progress-bar-info">
            <div><span class="progress-color shortlisted"></span></div>
            <div><span class="progress-type">Good</span></div>
            <div><span class="progress-amount">{{ number_format($goodqp, 2) }}%</span></div>
        </div>
        <div class="progress-bar-info">
            <div><span class="progress-color on-hold"></span></div>
            <div><span class="progress-type">Fair</span></div>
            <div><span class="progress-amount">{{ number_format($fairqp, 2) }}%</span></div>
        </div>
        <div class="progress-bar-info">
            <div><span class="progress-color rejected"></span></div>
            <div><span class="progress-type">Poor</span></div>
            <div><span class="progress-amount">{{ number_format($poorqp, 2) }}%</span></div>
        </div>
    </div>
</div>
</div>
<!-- more -->


<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">    
</header>

<!-- Added info-section here -->
<!-- <div class="info-section">
    <div class="date-picker-container">
        <form action="{{ route('dashboard') }}" method="get">
            <label for="datePicker">Select Date:</label>
            <input type="date" id="datePicker" name="date" value="{{ $selectedDate ?? '' }}">
            <button type="submit">Load Data</button>
        </form>
    </div>
</div> -->
<!-- End of info-section -->

<div class="graph-container">
    @foreach($graphJSON as $index => $graph)
    <div class="graph-item">
        <div class="graph-box" onclick="openModal('modal-{{ $index }}')">
            <div class="graph-content">
                <div id="graph-{{ $index }}"></div>
            </div>
            
            <div class="graph-description">{{ $graph['description'] }}</div>
        </div>
    </div>
    <!-- Modal for each graph -->
    <div id="modal-{{ $index }}" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal-{{ $index }}')">&times;</span>
            <div id="modal-graph-{{ $index }}"></div>
        </div>
    </div>
    @endforeach
    <div class="footer-text">
    © 2024 Gym Dashboard. All rights reserved.
</div>



</div>

<script>
    var graphs = @json($graphJSON);
    
    graphs.forEach(function(graph, index) {
        var data = graph.data;
        var layout = Object.assign({}, graph.layout, {autosize: true});
        Plotly.newPlot('graph-' + index, data, layout);

        // Duplicate the graph in the modal with the same layout adjustments
        Plotly.newPlot('modal-graph-' + index, data, layout);
    });

    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'block';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            event.target.style.display = 'none';
        }
    }
 function loadDataForSelectedDate() {
    var selectedDate = document.getElementById('datePicker').value;
    
    // Fetch data for the selected date
    fetch(`/api/visualizations?date=${selectedDate}`)
    .then(response => response.json())
    .then(data => {
        const graphsContainer = document.getElementById('graphsContainer');
        graphsContainer.innerHTML = ''; // Clear existing graphs

        if (data.message) {
            // If the response contains a 'message' key, display it
            graphsContainer.innerHTML = `<p>${data.message}</p>`;
        } else {
            // Otherwise, proceed to create and append graphs based on the data received
            data.forEach((graphData, index) => {
                var graphDiv = document.createElement('div');
                graphDiv.id = 'graph-' + index;
                graphsContainer.appendChild(graphDiv);

                Plotly.newPlot('graph-' + index, graphData.data, graphData.layout);
            });
        }
    })
    .catch(error => console.error('Error loading data:', error));
}

function closeCustomAlert() {
    document.getElementById('customAlert').style.display = 'none';
}
</script>
@endsection
