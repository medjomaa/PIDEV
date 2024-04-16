
@extends('dashboard')
@section('title', 'Power Gym - Feedback')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;700&display=swap" rel="stylesheet">
    <title>Training</title>
    <style>
 @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('https://images.pexels.com/photos/3207527/pexels-photo-3207527.jpeg?cs=srgb&dl=pexels-%C5%82ukasz-martenka-3207527.jpg&fm=jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: #ffffff; /* Ensures text is white for visibility */
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
    text-align: center;
}

.left-sections, .body-sections, .recommendation-section {
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
    color: #ffffff; /* Text color changed to white */
    margin: 20px auto; /* Centered with auto margins */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); /* Soft white shadow for depth */
    width: 95%; /* Increased width for a wider layout */
    box-sizing: border-box;
}
.left-sections li, .body-sections li, .recommendation-section li {
    cursor: pointer; /* Changes the cursor to a pointer to indicate the item is clickable */
}

.left-sections li:hover, .body-sections li:hover, .recommendation-section li:hover {
    background-color: rgba(255, 255, 255, 0.2); /* Optional: adds a slight highlight to the item on hover */
    color: #FFF; /* Optional: changes text color to white on hover */
}

.exercise-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; /* Adjusts the spacing between items */
    margin-top: 20px;
}
.exercise-guide {
    text-align: center;
    margin: 20px 0; /* Adjust as needed */
}

.exercise-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; /* Adjust space between items */
    margin-top: 20px;
}

.body-part {
    width: calc(33.333% - 20px); /* Adjusts for three items per row, subtracting margins */
    margin: 10px; /* Provides space around items */
    text-align: center;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    padding: 20px;
    border-radius: 10px; /* Rounded corners */
    color: #FFFFFF; /* White text */
}

@media (max-width: 768px) {
    .body-part {
        width: 100%; /* Full width on smaller screens */
        margin-bottom: 20px; /* Space between items vertically */
    }
}

.body-part {
    width: calc(33.333% - 20px); /* Sets width to a third minus some margin */
    margin: 10px; /* Provides some space around each item */
    text-align: center; /* Center-aligns the text within */
}

.body-part h3{
color: #DC143C;
} .body-part ul {
    color: #87CEEB; /* Ensures text is white for visibility */
}

.body-part ul {
    list-style: none; /* Removes the default list styling */
    padding: 0; /* Removes default padding */
}

.body-part ul li {
    padding: 5px 0; /* Adds vertical padding to list items */
}

@media (max-width: 768px) {
    .body-part {
        width: 100%; /* Each body part takes full width on smaller screens */
        margin: 10px 0; /* Adjusts margin for vertical spacing */
    }
}


/* Ensures links within the .left-sections are also white */
.left-sections a {
    color: #FFFFFF;
    text-decoration: underline; /* Optional: adds underlining to make links stand out */
}

/* Additional styles remain unchanged */

.recommendation-action:hover {
/* A darker shade of red on hover */
    transform: scale(1.05); /* Slightly enlarges the div on hover */
}

.recommendation-action p {
    margin: 0; /* Removes default paragraph margin */
    font-weight: bold; /* Makes the text bold */
}

.container {
    padding: 20px;
    max-width: 1200px;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.2); /* Darker background for more emphasis on black */
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(255, 0, 0, 0.7); /* More intense red shadow for a striking effect */
    margin: 20px auto;
    box-sizing: border-box;
}

.body {
    background-image: url('https://wallpapercave.com/wp/wp9142703.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.content {
    position: relative;
    text-align: center;
    width: 100%;
    margin: 20px auto;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    overflow-y: auto;
}

.banner h1 {
    color: #FFD700; /* Darker yellow for a richer appearance */
    margin-bottom: 15px;
}

.banner p {
    margin-bottom: 10px;
    color: #FF4500; /* A darker red for better harmony with the theme */
    font-size: 16px;
}

.body-sections p {
    color: #FF6347; /* A shade of red that leans towards the theme's color palette */
}

.login-link {
    background-color: #2B2B2B; /* Even darker gray to blend with the black/red theme */
    color: #B22222; /* A deeper red to maintain the contrast but stay within theme */
    font-weight: bold;
}

.banner p {
    display: inline-block;
    background-color: #202020; /* Near black for a deeper contrast */
    color: #FFA500; /* A darker shade of yellow for text */
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease; /* Smooth transition for all changes */
    text-decoration: none;
    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.7); /* Darker shadow for text */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5); /* Deeper shadow for more depth */
    border: none;
    font-weight: bold;
}

.banner p:hover, .banner p:hover {
    background-color: #202020; /* Slightly brighter red for hover effect */
    color: #FF4500; /* Darker yellow for text, providing strong contrast on hover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.7); /* Even more pronounced shadow for a "pop" effect */
    transform: translateY(-2px); /* Slight upward movement for interactivity */
}


.processing p, .recommendation-action p {
    text-align: center;
    cursor: pointer;
    color: #E6E6FA; /* Soft gray for text, providing contrast without stark white */
}

#load {
  position:absolute;
  width:600px;
  height:36px;
  left:50%;
  top:40%;
  margin-left:-300px;
  overflow:visible;
  -webkit-user-select:none;
  -moz-user-select:none;
  -ms-user-select:none;
  user-select:none;
  cursor:default;
}

#load div {
  position:absolute;
  width:20px;
  height:36px;
  opacity:0;
  font-family:Helvetica, Arial, sans-serif;
  animation:move 2s linear infinite;
  -o-animation:move 2s linear infinite;
  -moz-animation:move 2s linear infinite;
  -webkit-animation:move 2s linear infinite;
  transform:rotate(180deg);
  -o-transform:rotate(180deg);
  -moz-transform:rotate(180deg);
  -webkit-transform:rotate(180deg);
  color:rgb(173,216,230);
}

#load div:nth-child(2) {
  animation-delay:0.2s;
  -o-animation-delay:0.2s;
  -moz-animation-delay:0.2s;
  -webkit-animation-delay:0.2s;
}
#load div:nth-child(3) {
  animation-delay:0.4s;
  -o-animation-delay:0.4s;
  -webkit-animation-delay:0.4s;
  -webkit-animation-delay:0.4s;
}
#load div:nth-child(4) {
  animation-delay:0.6s;
  -o-animation-delay:0.6s;
  -moz-animation-delay:0.6s;
  -webkit-animation-delay:0.6s;
}
#load div:nth-child(5) {
  animation-delay:0.8s;
  -o-animation-delay:0.8s;
  -moz-animation-delay:0.8s;
  -webkit-animation-delay:0.8s;
}
#load div:nth-child(6) {
  animation-delay:1s;
  -o-animation-delay:1s;
  -moz-animation-delay:1s;
  -webkit-animation-delay:1s;
}
#load div:nth-child(7) {
  animation-delay:1.2s;
  -o-animation-delay:1.2s;
  -moz-animation-delay:1.2s;
  -webkit-animation-delay:1.2s;
}

@keyframes move {
  0% {
    left:0;
    opacity:0;
  }
	35% {
		left: 41%; 
		-moz-transform:rotate(0deg);
		-webkit-transform:rotate(0deg);
		-o-transform:rotate(0deg);
		transform:rotate(0deg);
		opacity:1;
	}
	65% {
		left:59%; 
		-moz-transform:rotate(0deg); 
		-webkit-transform:rotate(0deg); 
		-o-transform:rotate(0deg);
		transform:rotate(0deg); 
		opacity:1;
	}
	100% {
		left:100%; 
		-moz-transform:rotate(-180deg); 
		-webkit-transform:rotate(-180deg); 
		-o-transform:rotate(-180deg); 
		transform:rotate(-180deg);
		opacity:0;
	}
}

@-moz-keyframes move {
	0% {
		left:0; 
		opacity:0;
	}
	35% {
		left:41%; 
		-moz-transform:rotate(0deg); 
		transform:rotate(0deg);
		opacity:1;
	}
	65% {
		left:59%; 
		-moz-transform:rotate(0deg); 
		transform:rotate(0deg);
		opacity:1;
	}
	100% {
		left:100%; 
		-moz-transform:rotate(-180deg); 
		transform:rotate(-180deg);
		opacity:0;
	}
}

@-webkit-keyframes move {
	0% {
		left:0; 
		opacity:0;
	}
	35% {
		left:41%; 
		-webkit-transform:rotate(0deg); 
		transform:rotate(0deg); 
		opacity:1;
	}
	65% {
		left:59%; 
		-webkit-transform:rotate(0deg); 
		transform:rotate(0deg); 
		opacity:1;
	}
	100% {
		left:100%;
		-webkit-transform:rotate(-180deg); 
		transform:rotate(-180deg); 
		opacity:0;
	}
}

@-o-keyframes move {
	0% {
		left:0; 
		opacity:0;
	}
	35% {
		left:41%; 
		-o-transform:rotate(0deg); 
		transform:rotate(0deg); 
		opacity:1;
	}
	65% {
		left:59%; 
		-o-transform:rotate(0deg); 
		transform:rotate(0deg); 
		opacity:1;
	}
	100% {
		left:100%; 
		-o-transform:rotate(-180deg); 
		transform:rotate(-180deg); 
		opacity:0;
	}
}
 article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}

audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
html {
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
body {
  margin: 0;
}
a {
  background: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}

dfn {
  font-style: italic;
}

mark {
  background: #ff0;
  color: #000;
}
small {
  font-size: 80%;
}
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
input {
  line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
legend {
  border: 0;
  padding: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td,
th {
  padding: 0;
}
*,
*:after,
*:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  *behavior: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/behaviors/box-sizing/boxsizing.php);
}
@media all and (max-width: 800px) {
  #toolbar,
  #admin-menu {
    display: none;
  }
  html body.toolbar,
  html body.admin-menu {
    padding-top: 0 !important;
    margin-top: 0 !important;
  }
}
.btn-default,
.phase-week-day .day-link a {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  display: inline-block;
  outline: none;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 12px;
  height: 34px;
  line-height: 34px;
  padding: 0 2em;
  color: #fff;
  border: 0;
  background: #000;
  text-transform: uppercase;
}
.btn-default:hover,
.phase-week-day .day-link a:hover {
  text-decoration: none;
  background: #f01616;
}
.btn-default:active,
.phase-week-day .day-link a:active {
  color: #fff;
}
.btn-light {
  background: #efefef;
  color: #000;
}
.btn-light:hover,
.btn-light:active {
  background: #efefef;
}
.btn-small {
  font-size: 10px;
  font-size: 0.625rem;
  padding: 0 15px;
}
.btn-big {
  font-size: 13px;
  font-size: 0.8125rem;
  height: 46px;
  line-height: 44px;
  padding: 0 15px;
}
.btn-yellow,
.phase-week-day .day-link a {
  background: #fff200;
  color: #000;
}
.b-content-placed {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  padding: 20px;
  margin: 0 0 20px;
}
.b-content-placed .b-content-placed--title,
.b-content-placed .b-content-placed--subtitle {
  display: block;
  text-transform: uppercase;
}
.b-content-placed .b-content-placed--title {
  font-size: 24px;
  font-size: 1.5rem;
  line-height: 29px;
  margin: 0 0 10px;
}
.b-content-placed .b-content-placed--subtitle {
  font-size: 13px;
  font-size: 0.8125rem;
  margin: 0 0 5px;
}
.b-content-placed .b-content-placed--subtitle .el--val {
  text-transform: none;
}
.b-content-placed .b-content-placed--content {
  border-top: 1px solid rgba(0, 0, 0, 0.3);
  border-bottom: 1px solid rgba(0, 0, 0, 0.3);
  padding: 12px 0;
}
.b-content-placed .b-content-placed-list-title {
  font-size: 12px;
  font-size: 0.75rem;
  display: inline-block;
  text-transform: uppercase;
  padding: 0 7px;
  font-weight: 700;
}
.b-content-placed .b-content-placed-list-title.b--bg-black {
  color: #fff;
}
.b-content-placed .b-content-placed--items-list {
  margin: 11px 0 0;
}
.b-content-placed .b-content-placed--list-item {
  padding: 0 0 20px;
  line-height: 22px;
}
.b-content-placed .b-content-placed--list-item:last-child {
  padding-bottom: 9px;
}
.b-recommended--incontent .block__title,
.b-recommended--incontent
  .node-type-recipe
  .field--name-field-directions
  .field-label,
.node-type-recipe
  .field--name-field-directions
  .b-recommended--incontent
  .field-label {
  font-size: 16px;
  font-size: 1rem;
  line-height: 26px;
  color: #f01616;
  margin-bottom: 18px;
}
.b-recommended--incontent .b-recommended-items-list {
  margin: 0;
  padding: 0;
  list-style: none;
}
.b-recommended--incontent .b-recommended-item {
  padding: 0 0 10px;
  overflow: hidden;
  line-height: 1;
}
.b-recommended--incontent .b-recommended-thumb {
  float: left;
  margin: 0 10px 0 0;
  line-height: 0;
}
.b-recommended--incontent .b-recommended-title {
  font-size: 11px;
  font-size: 0.6875rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  line-height: 15px;
  text-transform: uppercase;
}
.b-recommended--incontent .b-recommended-item-link {
  color: #000;
}
.b-recommended--incontent .b-recommended-item-link:hover {
  color: #f01616;
}
.b-workout-day-summary-info {
  border-bottom: 1px solid #dedede;
  text-align: center;
  padding: 16px 0;
  margin: 0 10px;
  line-height: normal;
  color: #666;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
}
.b-workout-day-summary-info .b-workout-day-summary--items {
  display: inline-block;
  width: 27.33%;
  border-left: 1px solid #f4f4f4;
  border-right: 1px solid #f4f4f4;
  position: relative;
  padding: 0 0 15px;
  text-align: center;
}
.b-workout-day-summary-info .b-workout-day-summary--items:last-child,
.b-workout-day-summary-info .b-workout-day-summary--items:first-child {
  border: 0;
}
.b-workout-day-summary-info .b-workout-day-summary--label,
.b-workout-day-summary-info .b-workout-day-summary--value {
  display: block;
}
.b-workout-day-summary-info .b-workout-day-summary--label {
  font-size: 10px;
  font-size: 0.625rem;
  font-weight: 600;
  text-transform: lowercase;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
}
.b-workout-day-summary-info .b-workout-day-summary--value {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 20px;
  font-size: 1.25rem;
}
.b-workout-day-summary-info .b-workout-day-summary-workouts-equipment--yes,
.b-workout-day-summary-info .b-workout-day-summary-workouts-equipment--x {
  color: transparent;
}
.b-workout-day-summary-info .b-workout-day-summary-workouts-equipment--yes {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/y.svg)
    50% 50% no-repeat;
}
.b-workout-day-summary-info .b-workout-day-summary-workouts-equipment--x {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/x.svg)
    50% 50% no-repeat;
}
select,
input,
textarea {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  border: 1px solid #e1e1e1;
  color: #848074;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 12px;
  padding: 0 10px;
  height: 38px;
  line-height: 32px;
}
select:focus,
input:focus,
textarea:focus {
  border-color: #a6a6a6;
  outline: none;
}
select {
  background: #fff;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
  border: 1px solid #000;
  color: #000;
  font-family: Helvetica, Arial, sans-serif;
  line-height: 30px;
}
.b-select--custom {
  border: 1px solid #000;
  background: #fff;
  overflow-x: hidden;
  position: relative;
  display: inline-block;
}
.b-select--custom:after,
.b-select--custom:before {
  content: "";
  display: block;
  border-color: #fff transparent transparent transparent;
  border-width: 5px;
  right: 11px;
  top: 13px;
  border-style: solid;
  height: 0;
  width: 0;
  position: absolute;
}
.b-select--custom:before {
  border-color: #000 transparent transparent transparent;
  border-width: 6px;
  right: 10px;
  top: 14px;
}
.el-select--custom {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  position: relative;
  background: transparent;
  z-index: 2;
  width: 105%;
}
.select--replaced,
.custom-select,
select.replaced {
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  -ms-border-radius: 6px;
  -o-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0px 1px #d0d0d0, inset 0 -1px 1px #929292;
  -moz-box-shadow: 0px 1px #d0d0d0, inset 0 -1px 1px #929292;
  box-shadow: 0px 1px #d0d0d0, inset 0 -1px 1px #929292;
  -webkit-background-clip: padding;
  -moz-background-clip: padding;
  background-clip: padding-box;
  font-family: Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 12px;
  font-size: 0.75rem;
  line-height: 16px;
  height: 38px;
  padding: 8px 9px 8px 10px;
  border: 2px solid #d8d8d8;
  border-bottom: 0;
  background: #f7f7f7;
  background-image: -webkit-gradient(
    linear,
    50% 100%,
    50% 0%,
    color-stop(0%, #ffffff),
    color-stop(50%, #ffffff),
    color-stop(51%, #f7f7f7),
    color-stop(100%, #f7f7f7)
  );
  background-image: -webkit-linear-gradient(
    bottom,
    #ffffff 0%,
    #ffffff 50%,
    #f7f7f7 51%,
    #f7f7f7 100%
  );
  background-image: -moz-linear-gradient(
    bottom,
    #ffffff 0%,
    #ffffff 50%,
    #f7f7f7 51%,
    #f7f7f7 100%
  );
  background-image: -o-linear-gradient(
    bottom,
    #ffffff 0%,
    #ffffff 50%,
    #f7f7f7 51%,
    #f7f7f7 100%
  );
  background-image: linear-gradient(
    bottom,
    #ffffff 0%,
    #ffffff 50%,
    #f7f7f7 51%,
    #f7f7f7 100%
  );
  -webkit-appearance: none;
  width: 100%;
  color: #000;
  overflow: hidden;
}
.select--replaced:after,
.custom-select:after,
select.replaced:after {
  content: "";
  position: absolute;
  top: 12px;
  right: 10px;
  border-color: #1aafec transparent transparent transparent;
  border-style: solid;
  border-width: 7px;
  border-top-width: 11px;
  height: 0;
  width: 0;
}
.custom-select-container {
  position: relative;
  display: block !important;
  height: 38px;
  width: 100%;
}
.custom-select-container .select--replaced,
.custom-select-container select.replaced {
  position: relative;
  z-index: 10;
  filter: alpha(opacity=0);
  opacity: 0;
  height: 38px;
}
.custom-select-container .custom-select {
  position: absolute;
  top: 0;
  float: left;
  left: 0;
  display: block;
  height: 38px;
  width: 100%;
}
.custom-select-container .custom-select span {
  display: block;
  height: 20px;
  overflow: hidden;
  white-space: nowrap;
  width: 97%;
}
select:focus,
option:focus,
select:active,
option:active,
select::-moz-focus-inner,
option::-moz-focus-inner {
  outline: none;
  border: none;
}
fieldset {
  margin-left: 0;
  margin-right: 0;
  padding: 10px;
  border-color: #a6a6a6;
}
legend {
  font-size: 18px;
  font-size: 1.125rem;
  padding: 0 0.8em;
  color: #000;
}
input[type="submit"],
input[type="button"] {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  display: inline-block;
  outline: none;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 12px;
  height: 34px;
  line-height: 34px;
  padding: 0 2em;
  color: #fff;
  border: 0;
  background: #000;
  text-transform: uppercase;
}
input[type="submit"]:hover,
input[type="button"]:hover {
  text-decoration: none;
  background: #f01616;
}
input[type="submit"]:active,
input[type="button"]:active {
  color: #fff;
}
label {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 13px;
  font-size: 0.8125rem;
  line-height: 1;
  text-transform: uppercase;
  margin: 0 0 12px;
}
label.option {
  text-transform: none;
  font-size: 15px;
  font-size: 0.9375rem;
}
@media (min-width: 1024px) {
  .desktop-hidden {
    display: none;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .tablet-hidden {
    display: none;
  }
}
@media (min-width: 0) and (max-width: 767px) {
  .mobile-hidden {
    display: none;
  }
}
.b--d-block {
  display: block;
}
.b--fl {
  display: block;
  float: left;
}
.b--fr {
  display: block;
  float: right;
}
.b--bg-yellow {
  background: #fff200;
}
.b--bg-black {
  background: #000;
}
.b--ta-c {
  text-align: center;
}
.icon,
.svg-icon {
  display: inline-block;
}
.list-reset--total {
  margin: 0;
  padding: 0;
  list-style: none;
}
.b-videos-list {
  margin: 0;
  padding: 0;
  list-style: none;
  overflow: hidden;
}
.b-videos-list .b-videos-list--item {
  width: 47.36842%;
  float: left;
  margin-right: 5.26316%;
  margin-bottom: 18px;
}
.b-videos-list .b-videos-list--item:nth-child(2n) {
  margin-right: 0;
}
@media (min-width: 480px) and (max-width: 768px) {
  .b-videos-list .b-videos-list--item {
    width: 32.20339%;
    float: left;
    margin-right: 1.69492%;
  }
  .b-videos-list .b-videos-list--item:nth-child(2n) {
    margin-right: 1.69492%;
  }
  .b-videos-list .b-videos-list--item:nth-child(3n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
  .b-videos-list .b-videos-list--item:nth-child(3n + 1) {
    clear: both;
  }
}
@media (min-width: 1024px) {
  .b-videos-list .b-videos-list--item {
    width: 32.20339%;
    float: left;
    margin-right: 1.69492%;
  }
  .b-videos-list .b-videos-list--item:nth-child(2n) {
    margin-right: 1.69492%;
  }
  .b-videos-list .b-videos-list--item:nth-child(3n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
  .b-videos-list .b-videos-list--item:nth-child(3n + 1) {
    clear: both;
  }
}
@media (min-width: 1440px) {
  .b-videos-list .b-videos-list--item {
    width: 32.20339%;
    float: left;
    margin-right: 1.69492%;
  }
}
.b-videos-list .b-videos-list--item--image {
  margin: 0 0 10px;
  line-height: 0;
  position: relative;
}
.b-videos-list .b-videos-list--item--image:after {
  content: "";
  display: block;
  position: absolute;
  bottom: 15px;
  left: 19px;
  border-color: transparent transparent transparent #fff;
  border-style: solid;
  border-width: 5px 0 5px 10px;
  height: 0;
  width: 0;
}
@media (min-width: 768px) {
  .b-videos-list .b-videos-list--item--image:after {
    bottom: 16px;
    border-width: 8px 0 8px 12px;
  }
}
.b-videos-list .b-videos-list--item--image:before {
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  -o-border-radius: 2px;
  border-radius: 2px;
  background: rgba(0, 0, 0, 0.8);
  content: "";
  display: block;
  position: absolute;
  bottom: 8px;
  left: 7px;
  height: 25px;
  width: 31px;
}
@media (min-width: 768px) {
  .b-videos-list .b-videos-list--item--image:before {
    height: 32px;
    width: 32px;
  }
}
.b-videos-list .b-videos-list--item--image img {
  width: 100%;
}
.b-videos-list .b-videos-list--item--title,
.b-videos-list .b-videos-list--item--series-title {
  font-size: 10px;
  font-size: 0.625rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
  line-height: 14px;
  display: block;
  text-transform: uppercase;
}
@media (min-width: 1024px) {
  .b-videos-list .b-videos-list--item--title,
  .b-videos-list .b-videos-list--item--series-title {
    font-size: 12px;
    font-size: 0.75rem;
    line-height: 17px;
  }
}
@media (min-width: 1440px) {
  .b-videos-list .b-videos-list--item--title,
  .b-videos-list .b-videos-list--item--series-title {
    font-size: 16px;
    font-size: 1rem;
    line-height: 22px;
  }
  .has-skin .b-videos-list .b-videos-list--item--title,
  .has-skin .b-videos-list .b-videos-list--item--series-title {
    font-size: 12px;
    font-size: 0.75rem;
    line-height: 17px;
  }
}
.b-videos-list .b-videos-list--item--link {
  color: #000;
}
.b-videos-list .b-videos-list--item--link:hover {
  color: #f01616;
}
.b-nodes-list {
  width: 100%;
  clear: both;
  overflow: hidden;
  margin: 0 0 20px;
}
.b-nodes-list .nodes-list--link {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  color: #000;
  text-transform: uppercase;
}
.b-nodes-list .nodes-list--link:hover {
  color: #f01616;
}
.b-nodes-list .nodes-list--title {
  font-size: 13px;
  font-size: 0.8125rem;
  line-height: 1.30769em;
  display: block;
  font-weight: 900;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .b-nodes-list .nodes-list--title {
    font-size: 10px;
    font-size: 0.625rem;
    line-height: 1.3em;
  }
}
.b-nodes-list .nodes-list--thumbnail {
  margin: 0 0 6px;
  line-height: 0;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .b-nodes-list .nodes-list--thumbnail {
    margin-bottom: 8px;
  }
}
.b-nodes-list .nodes-list--thumbnail img {
  width: 100%;
}
.b-nodes-list .nodes-list--item {
  margin-bottom: 20px;
  overflow: hidden;
}
.b-nodes-list .nodes-list {
  margin: 0;
  padding: 0;
  list-style: none;
}
@media (min-width: 0) and (max-width: 767px) {
  .b-nodes-list .nodes-list .nodes-list--item:last-child {
    margin-bottom: 0;
  }
  .b-nodes-list .nodes-list.nodes-list--three-items .nodes-list--thumbnail,
  .b-nodes-list .nodes-list.nodes-list--four-items .nodes-list--thumbnail {
    float: left;
    margin: 0 10px 0 0;
    width: 47.33333%;
  }
  .b-nodes-list .nodes-list.nodes-list--three-items .nodes-list--title,
  .b-nodes-list .nodes-list.nodes-list--four-items .nodes-list--title {
    font-size: 11px;
    font-size: 0.6875rem;
    line-height: 1.36364em;
  }
}
@media (min-width: 768px) {
  .b-nodes-list .nodes-list .nodes-list--item {
    float: left;
  }
  .b-nodes-list .nodes-list.nodes-list--two-items .nodes-list--item {
    width: 48.7%;
    margin-right: 1.3%;
  }
  .b-nodes-list
    .nodes-list.nodes-list--two-items
    .nodes-list--item:nth-child(2n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
  .b-nodes-list .nodes-list.nodes-list--three-items .nodes-list--item {
    width: 31.5%;
    margin-right: 2.7%;
  }
  .b-nodes-list
    .nodes-list.nodes-list--three-items
    .nodes-list--item:nth-child(3n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .b-nodes-list .nodes-list.nodes-list--four-items .nodes-list--item {
    width: 47.90576%;
    margin-right: 3.9267%;
  }
  .b-nodes-list
    .nodes-list.nodes-list--four-items
    .nodes-list--item:nth-child(2n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
}
@media (min-width: 1024px) {
  .b-nodes-list .nodes-list.nodes-list--four-items .nodes-list--item {
    width: 23.43499%;
    margin-right: 1.92616%;
  }
  .b-nodes-list
    .nodes-list.nodes-list--four-items
    .nodes-list--item:nth-child(4n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
}
img,
video,
iframe,
object,
embed {
  max-width: 100%;
}
img {
  height: auto;
}
.image--left {
  float: left;
}
.image--right {
  float: right;
}
@media (min-width: 0) and (max-width: 1023px) {
  .node--full--content .media-image {
    height: auto !important;
  }
}
@media (min-width: 1024px) {
  .node--full--content .img--full-width,
  .node--full--content video,
  .node--full--content iframe,
  .node--full--content embed {
    width: 100%;
  }
}
.node--full--content .img--full-width {
  height: auto !important;
  width: 100% !important;
}
.b--channel-videos-top--series-logo,
.channel-videos--list--series-logo,
.video--series-logo {
  margin: 3px 13px 0 10px;
  line-height: 1;
  width: 40px;
  float: left;
}
@media (min-width: 480px) and (max-width: 768px) {
  .b--channel-videos-top--series-logo,
  .channel-videos--list--series-logo,
  .video--series-logo {
    width: 88px;
    margin: 0 15px 0 0;
  }
}
@media (min-width: 768px) and (max-width: 1024px) {
  .b--channel-videos-top--series-logo,
  .channel-videos--list--series-logo,
  .video--series-logo {
    width: 62px;
    margin-left: 0;
  }
}
@media (min-width: 1024px) {
  .b--channel-videos-top--series-logo,
  .channel-videos--list--series-logo,
  .video--series-logo {
    width: 88px;
    margin: 0 15px 0 0;
  }
}
.b-workout-program-header,
.node--big-teaser--content,
.b-image-text-overlay--bg-black {
  background: #000;
  background: rgba(0, 0, 0, 0.55);
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
}
.l-popup--content {
  display: none;
  background: #efefef;
  position: fixed;
  left: 0;
  top: 50%;
  width: 100%;
  z-index: 9999;
}
.l-popup--content.opened {
  display: block;
}
.l-popup--content--inner {
  padding: 52px 26px 70px;
}
.l-popup--close {
  position: absolute;
  top: 28px;
  right: 28px;
  width: 27px;
  height: 26px;
}
.l-popup--close .icon,
.l-popup--close .svg-icon {
  cursor: pointer;
}
.svg-icon {
  background-repeat: no-repeat;
  background-image: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/sprites/icons/icons.png);
}
.svg-carousel-next-icon {
  background-position: 0 0;
}
.svg-carousel-next-icon-dims {
  width: 21px;
  height: 32px;
}
.svg-carousel-prev-icon {
  background-position: 0 -32px;
}
.svg-carousel-prev-icon-dims {
  width: 21px;
  height: 32px;
}
.svg-clock-icon,
.block--menu-menu-top-main .menu .item-latest .icon,
.svg-clock-icon\:regular {
  background-position: 0 -64px;
}
.svg-clock-icon-dims,
.l-region--off-canvas-left .menu--icons .item-latest .icon,
.l-region--off-canvas-left .menu--icons .item-latest .icon:hover,
.left-drawer .menu--icons .item-latest .icon,
.left-drawer .menu--icons .item-latest .icon:hover,
.block--menu-menu-top-main .menu .item-latest .icon {
  width: 20px;
  height: 20px;
}
.svg-clock-icon:active,
.block--menu-menu-top-main .menu .item-latest .icon:active,
.svg-clock-icon\:active,
.block--menu-menu-top-main .menu .item-latest.active .icon,
.block--menu-menu-top-main .menu .item-latest.active .icon:hover,
.block--menu-menu-top-main .menu .item-latest.active-trail .icon,
.block--menu-menu-top-main .menu .item-latest.active-trail .icon:hover,
.block--menu-menu-top-main .menu .item-latest.active-trail:hover .icon,
.block--menu-menu-top-main .menu .item-latest.active-trail:hover .icon:hover {
  background-position: 0 -84px;
}
.svg-clock-icon-dims:active,
.l-region--off-canvas-left .menu--icons .item-latest .icon:active,
.left-drawer .menu--icons .item-latest .icon:active,
.block--menu-menu-top-main .menu .item-latest .icon:active,
.svg-clock-icon\:active-dims {
  width: 20px;
  height: 20px;
}
.svg-clock-icon:hover,
.block--menu-menu-top-main .menu .item-latest .icon:hover,
.svg-clock-icon\:hover,
.l-region--off-canvas-left .menu--icons .item-latest .icon,
.l-region--off-canvas-left .menu--icons .item-latest .icon:hover,
.left-drawer .menu--icons .item-latest .icon,
.left-drawer .menu--icons .item-latest .icon:hover,
.block--menu-menu-top-main .menu .item-latest:hover .icon,
.block--menu-menu-top-main .menu .item-latest:hover .icon:hover {
  background-position: 0 -104px;
}
.svg-clock-icon-dims:hover,
.l-region--off-canvas-left .menu--icons .item-latest .icon:hover,
.left-drawer .menu--icons .item-latest .icon:hover,
.block--menu-menu-top-main .menu .item-latest .icon:hover,
.svg-clock-icon\:hover-dims {
  width: 20px;
  height: 20px;
}
.svg-close-icon {
  background-position: 0 -124px;
}
.svg-close-icon-dims {
  width: 27px;
  height: 26px;
}
.svg-collaps-menu-icon,
.menu--dropdown .expanded.opened .expander .icon {
  background-position: 0 -150px;
}
.svg-collaps-menu-icon-dims {
  width: 10px;
  height: 6px;
}
.svg-dumbbell-icon {
  background-position: 0 -156px;
}
.svg-dumbbell-icon-dims {
  width: 31px;
  height: 18px;
}
.svg-expand-menu-icon {
  background-position: 0 -174px;
}
.svg-expand-menu-icon-dims {
  width: 10px;
  height: 6px;
}
.svg-facebook-icon {
  background-position: 0 -180px;
}
.svg-facebook-icon-dims {
  width: 14px;
  height: 26px;
}
.svg-gplus-icon,
.svg-gplus-icon\:regular {
  background-position: 0 -206px;
}
.svg-gplus-icon-dims {
  width: 22px;
  height: 19px;
}
.svg-gplus-icon:hover,
.svg-gplus-icon\:hover {
  background-position: 0 -225px;
}
.svg-gplus-icon-dims:hover,
.svg-gplus-icon\:hover-dims {
  width: 22px;
  height: 19px;
}
.svg-hamburger-icon {
  background-position: 0 -244px;
}
.svg-hamburger-icon-dims {
  width: 27px;
  height: 17px;
}
.svg-instagram-icon {
  background-position: 0 -261px;
}
.svg-instagram-icon-dims {
  width: 28px;
  height: 28px;
}
.svg-mf-icon {
  background-position: 0 -289px;
}
.svg-mf-icon-dims {
  width: 28px;
  height: 31px;
}
.svg-newsletters-icon,
.block--menu-menu-top-main .menu .item-newsletters .icon,
.svg-newsletters-icon\:regular {
  background-position: 0 -320px;
}
.svg-newsletters-icon-dims,
.l-region--off-canvas-left .menu--icons .item-newsletters .icon,
.l-region--off-canvas-left .menu--icons .item-newsletters .icon:hover,
.left-drawer .menu--icons .item-newsletters .icon,
.left-drawer .menu--icons .item-newsletters .icon:hover,
.block--menu-menu-top-main .menu .item-newsletters .icon {
  width: 23px;
  height: 19px;
}
.svg-newsletters-icon:active,
.block--menu-menu-top-main .menu .item-newsletters .icon:active,
.svg-newsletters-icon\:active,
.block--menu-menu-top-main .menu .item-newsletters.active .icon,
.block--menu-menu-top-main .menu .item-newsletters.active .icon:hover,
.block--menu-menu-top-main .menu .item-newsletters.active-trail .icon,
.block--menu-menu-top-main .menu .item-newsletters.active-trail .icon:hover,
.block--menu-menu-top-main .menu .item-newsletters.active-trail:hover .icon,
.block--menu-menu-top-main
  .menu
  .item-newsletters.active-trail:hover
  .icon:hover {
  background-position: 0 -339px;
}
.svg-newsletters-icon-dims:active,
.l-region--off-canvas-left .menu--icons .item-newsletters .icon:active,
.left-drawer .menu--icons .item-newsletters .icon:active,
.block--menu-menu-top-main .menu .item-newsletters .icon:active,
.svg-newsletters-icon\:active-dims {
  width: 23px;
  height: 19px;
}
.svg-newsletters-icon:hover,
.block--menu-menu-top-main .menu .item-newsletters .icon:hover,
.svg-newsletters-icon\:hover,
.l-region--off-canvas-left .menu--icons .item-newsletters .icon,
.l-region--off-canvas-left .menu--icons .item-newsletters .icon:hover,
.left-drawer .menu--icons .item-newsletters .icon,
.left-drawer .menu--icons .item-newsletters .icon:hover,
.block--menu-menu-top-main .menu .item-newsletters:hover .icon,
.block--menu-menu-top-main .menu .item-newsletters:hover .icon:hover {
  background-position: 0 -358px;
}
.svg-newsletters-icon-dims:hover,
.l-region--off-canvas-left .menu--icons .item-newsletters .icon:hover,
.left-drawer .menu--icons .item-newsletters .icon:hover,
.block--menu-menu-top-main .menu .item-newsletters .icon:hover,
.svg-newsletters-icon\:hover-dims {
  width: 23px;
  height: 19px;
}
.svg-photo-icon,
.svg-photo-icon\:regular {
  background-position: 0 -377px;
}
.svg-photo-icon-dims {
  width: 20px;
  height: 16px;
}
.svg-photo-icon:hover,
.svg-photo-icon\:hover {
  background-position: 0 -393px;
}
.svg-photo-icon-dims:hover,
.svg-photo-icon\:hover-dims {
  width: 20px;
  height: 16px;
}
.svg-pinterest-icon {
  background-position: 0 -409px;
}
.svg-pinterest-icon-dims {
  width: 22px;
  height: 22px;
}
.svg-rss-icon {
  background-position: 0 -431px;
}
.svg-rss-icon-dims {
  width: 56px;
  height: 56px;
}
.svg-search-icon,
.svg-search-icon\:regular {
  background-position: 0 -487px;
}
.svg-search-icon-dims {
  width: 18px;
  height: 19px;
}
.svg-search-icon:hover,
.svg-search-icon\:hover {
  background-position: 0 -506px;
}
.svg-search-icon-dims:hover,
.svg-search-icon\:hover-dims {
  width: 18px;
  height: 19px;
}
.svg-share-icon,
.svg-share-icon\:regular {
  background-position: 0 -525px;
}
.svg-share-icon-dims {
  width: 16px;
  height: 17px;
}
.svg-share-icon:hover,
.svg-share-icon\:hover {
  background-position: 0 -542px;
}
.svg-share-icon-dims:hover,
.svg-share-icon\:hover-dims {
  width: 16px;
  height: 17px;
}
.svg-star-icon,
.svg-star-icon\:regular {
  background-position: 0 -559px;
}
.svg-star-icon-dims {
  width: 20px;
  height: 19px;
}
.svg-star-icon:hover,
.svg-star-icon\:hover {
  background-position: 0 -578px;
}
.svg-star-icon-dims:hover,
.svg-star-icon\:hover-dims {
  width: 20px;
  height: 19px;
}
.svg-store-icon,
.block--menu-menu-top-main .menu .item-store .icon,
.svg-store-icon\:regular {
  background-position: 0 -597px;
}
.svg-store-icon-dims,
.l-region--off-canvas-left .menu--icons .item-store .icon,
.l-region--off-canvas-left .menu--icons .item-store .icon:hover,
.left-drawer .menu--icons .item-store .icon,
.left-drawer .menu--icons .item-store .icon:hover,
.block--menu-menu-top-main .menu .item-store .icon {
  width: 26px;
  height: 16px;
}
.svg-store-icon:active,
.block--menu-menu-top-main .menu .item-store .icon:active,
.svg-store-icon\:active,
.block--menu-menu-top-main .menu .item-store.active .icon,
.block--menu-menu-top-main .menu .item-store.active .icon:hover,
.block--menu-menu-top-main .menu .item-store.active-trail .icon,
.block--menu-menu-top-main .menu .item-store.active-trail .icon:hover,
.block--menu-menu-top-main .menu .item-store.active-trail:hover .icon,
.block--menu-menu-top-main .menu .item-store.active-trail:hover .icon:hover,
.headroom--not-top .block--menu-menu-top-main .menu .item-store:hover .icon,
.headroom--not-top
  .block--menu-menu-top-main
  .menu
  .item-store:hover
  .icon:hover {
  background-position: 0 -613px;
}
.svg-store-icon-dims:active,
.l-region--off-canvas-left .menu--icons .item-store .icon:active,
.left-drawer .menu--icons .item-store .icon:active,
.block--menu-menu-top-main .menu .item-store .icon:active,
.svg-store-icon\:active-dims {
  width: 26px;
  height: 16px;
}
.svg-store-icon:hover,
.block--menu-menu-top-main .menu .item-store .icon:hover,
.svg-store-icon\:hover,
.l-region--off-canvas-left .menu--icons .item-store .icon,
.l-region--off-canvas-left .menu--icons .item-store .icon:hover,
.left-drawer .menu--icons .item-store .icon,
.left-drawer .menu--icons .item-store .icon:hover,
.headroom--not-top .block--menu-menu-top-main .menu .item-store .icon,
.block--menu-menu-top-main .menu .item-store:hover .icon,
.block--menu-menu-top-main .menu .item-store:hover .icon:hover {
  background-position: 0 -629px;
}
.svg-store-icon-dims:hover,
.l-region--off-canvas-left .menu--icons .item-store .icon:hover,
.left-drawer .menu--icons .item-store .icon:hover,
.block--menu-menu-top-main .menu .item-store .icon:hover,
.svg-store-icon\:hover-dims {
  width: 26px;
  height: 16px;
}
.svg-twitter-black-icon,
.svg-twitter-black-icon\:regular {
  background-position: 0 -645px;
}
.svg-twitter-black-icon-dims {
  width: 23px;
  height: 19px;
}
.svg-twitter-black-icon:hover,
.svg-twitter-black-icon\:hover {
  background-position: 0 -664px;
}
.svg-twitter-black-icon-dims:hover,
.svg-twitter-black-icon\:hover-dims {
  width: 23px;
  height: 19px;
}
.svg-twitter-icon {
  background-position: 0 -683px;
}
.svg-twitter-icon-dims {
  width: 17px;
  height: 13px;
}
.svg-twitter-icon-white {
  background-position: 0 -696px;
}
.svg-twitter-icon-white-dims {
  width: 17px;
  height: 13px;
}
.svg-video-icon,
.block--menu-menu-top-main .menu .item-videos .icon,
.svg-video-icon\:regular {
  background-position: 0 -709px;
}
.svg-video-icon-dims,
.l-region--off-canvas-left .menu--icons .item-videos .icon,
.l-region--off-canvas-left .menu--icons .item-videos .icon:hover,
.left-drawer .menu--icons .item-videos .icon,
.left-drawer .menu--icons .item-videos .icon:hover,
.block--menu-menu-top-main .menu .item-videos .icon {
  width: 28px;
  height: 15px;
}
.svg-video-icon:active,
.block--menu-menu-top-main .menu .item-videos .icon:active,
.svg-video-icon\:active,
.block--menu-menu-top-main .menu .item-videos.active .icon,
.block--menu-menu-top-main .menu .item-videos.active .icon:hover,
.block--menu-menu-top-main .menu .item-videos.active-trail .icon,
.block--menu-menu-top-main .menu .item-videos.active-trail .icon:hover,
.block--menu-menu-top-main .menu .item-videos.active-trail:hover .icon,
.block--menu-menu-top-main .menu .item-videos.active-trail:hover .icon:hover,
.headroom--not-top .block--menu-menu-top-main .menu .item-videos:hover .icon,
.headroom--not-top
  .block--menu-menu-top-main
  .menu
  .item-videos:hover
  .icon:hover {
  background-position: 0 -724px;
}
.svg-video-icon-dims:active,
.l-region--off-canvas-left .menu--icons .item-videos .icon:active,
.left-drawer .menu--icons .item-videos .icon:active,
.block--menu-menu-top-main .menu .item-videos .icon:active,
.svg-video-icon\:active-dims {
  width: 28px;
  height: 15px;
}
.svg-video-icon:hover,
.block--menu-menu-top-main .menu .item-videos .icon:hover,
.svg-video-icon\:hover,
.l-region--off-canvas-left .menu--icons .item-videos .icon,
.l-region--off-canvas-left .menu--icons .item-videos .icon:hover,
.left-drawer .menu--icons .item-videos .icon,
.left-drawer .menu--icons .item-videos .icon:hover,
.headroom--not-top .block--menu-menu-top-main .menu .item-videos .icon,
.block--menu-menu-top-main .menu .item-videos:hover .icon,
.block--menu-menu-top-main .menu .item-videos:hover .icon:hover {
  background-position: 0 -739px;
}
.svg-video-icon-dims:hover,
.l-region--off-canvas-left .menu--icons .item-videos .icon:hover,
.left-drawer .menu--icons .item-videos .icon:hover,
.block--menu-menu-top-main .menu .item-videos .icon:hover,
.svg-video-icon\:hover-dims {
  width: 28px;
  height: 15px;
}
.svg-youtube-icon,
.svg-youtube-icon\:regular {
  background-position: 0 -754px;
}
.svg-youtube-icon-dims {
  width: 23px;
  height: 23px;
}
.svg-youtube-icon:hover,
.svg-youtube-icon\:hover {
  background-position: 0 -777px;
}
.svg-youtube-icon-dims:hover,
.svg-youtube-icon\:hover-dims {
  width: 23px;
  height: 23px;
}
.svg-icon {
  background-repeat: no-repeat;
  background-image: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/sprites/icons/icons.svg);
}
.svg-carousel-next-icon {
  background-position: 0 0;
}
.svg-carousel-next-icon-dims {
  width: 21px;
  height: 32px;
}
.svg-carousel-prev-icon {
  background-position: 0 -32px;
}
.svg-carousel-prev-icon-dims {
  width: 21px;
  height: 32px;
}
.svg-clock-icon,
.block--menu-menu-top-main .menu .item-latest .icon,
.svg-clock-icon\:regular {
  background-position: 0 -64px;
}
.svg-clock-icon-dims,
.l-region--off-canvas-left .menu--icons .item-latest .icon,
.l-region--off-canvas-left .menu--icons .item-latest .icon:hover,
.left-drawer .menu--icons .item-latest .icon,
.left-drawer .menu--icons .item-latest .icon:hover,
.block--menu-menu-top-main .menu .item-latest .icon {
  width: 20px;
  height: 20px;
}
.svg-clock-icon:active,
.block--menu-menu-top-main .menu .item-latest .icon:active,
.svg-clock-icon\:active,
.block--menu-menu-top-main .menu .item-latest.active .icon,
.block--menu-menu-top-main .menu .item-latest.active .icon:hover,
.block--menu-menu-top-main .menu .item-latest.active-trail .icon,
.block--menu-menu-top-main .menu .item-latest.active-trail .icon:hover,
.block--menu-menu-top-main .menu .item-latest.active-trail:hover .icon,
.block--menu-menu-top-main .menu .item-latest.active-trail:hover .icon:hover {
  background-position: 0 -84px;
}
.svg-clock-icon-dims:active,
.l-region--off-canvas-left .menu--icons .item-latest .icon:active,
.left-drawer .menu--icons .item-latest .icon:active,
.block--menu-menu-top-main .menu .item-latest .icon:active,
.svg-clock-icon\:active-dims {
  width: 20px;
  height: 20px;
}
.svg-clock-icon:hover,
.block--menu-menu-top-main .menu .item-latest .icon:hover,
.svg-clock-icon\:hover,
.l-region--off-canvas-left .menu--icons .item-latest .icon,
.l-region--off-canvas-left .menu--icons .item-latest .icon:hover,
.left-drawer .menu--icons .item-latest .icon,
.left-drawer .menu--icons .item-latest .icon:hover,
.block--menu-menu-top-main .menu .item-latest:hover .icon,
.block--menu-menu-top-main .menu .item-latest:hover .icon:hover {
  background-position: 0 -104px;
}
.svg-clock-icon-dims:hover,
.l-region--off-canvas-left .menu--icons .item-latest .icon:hover,
.left-drawer .menu--icons .item-latest .icon:hover,
.block--menu-menu-top-main .menu .item-latest .icon:hover,
.svg-clock-icon\:hover-dims {
  width: 20px;
  height: 20px;
}
.svg-close-icon {
  background-position: 0 -124px;
}
.svg-close-icon-dims {
  width: 27px;
  height: 26px;
}
.svg-collaps-menu-icon,
.menu--dropdown .expanded.opened .expander .icon {
  background-position: 0 -150px;
}
.svg-collaps-menu-icon-dims {
  width: 10px;
  height: 6px;
}
.svg-dumbbell-icon {
  background-position: 0 -156px;
}
.svg-dumbbell-icon-dims {
  width: 31px;
  height: 18px;
}
.svg-expand-menu-icon {
  background-position: 0 -174px;
}
.svg-expand-menu-icon-dims {
  width: 10px;
  height: 6px;
}
.svg-facebook-icon {
  background-position: 0 -180px;
}
.svg-facebook-icon-dims {
  width: 14px;
  height: 26px;
}
.svg-gplus-icon,
.svg-gplus-icon\:regular {
  background-position: 0 -206px;
}
.svg-gplus-icon-dims {
  width: 22px;
  height: 19px;
}
.svg-gplus-icon:hover,
.svg-gplus-icon\:hover {
  background-position: 0 -225px;
}
.svg-gplus-icon-dims:hover,
.svg-gplus-icon\:hover-dims {
  width: 22px;
  height: 19px;
}
.svg-hamburger-icon {
  background-position: 0 -244px;
}
.svg-hamburger-icon-dims {
  width: 27px;
  height: 17px;
}
.svg-instagram-icon {
  background-repeat: no-repeat;
  background-image: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/instagram_sprite.png);
  background-position: left top;
}
.svg-instagram-icon:hover {
  background-position: left -27px;
}
.svg-instagram-icon-dims {
  width: 28px;
  height: 28px;
}
.svg-mf-icon {
  background-position: 0 -289px;
}
.svg-mf-icon-dims {
  width: 28px;
  height: 31px;
}
.svg-newsletters-icon,
.block--menu-menu-top-main .menu .item-newsletters .icon,
.svg-newsletters-icon\:regular {
  background-position: 0 -320px;
}
.svg-newsletters-icon-dims,
.l-region--off-canvas-left .menu--icons .item-newsletters .icon,
.l-region--off-canvas-left .menu--icons .item-newsletters .icon:hover,
.left-drawer .menu--icons .item-newsletters .icon,
.left-drawer .menu--icons .item-newsletters .icon:hover,
.block--menu-menu-top-main .menu .item-newsletters .icon {
  width: 23px;
  height: 19px;
}
.svg-newsletters-icon:active,
.block--menu-menu-top-main .menu .item-newsletters .icon:active,
.svg-newsletters-icon\:active,
.block--menu-menu-top-main .menu .item-newsletters.active .icon,
.block--menu-menu-top-main .menu .item-newsletters.active .icon:hover,
.block--menu-menu-top-main .menu .item-newsletters.active-trail .icon,
.block--menu-menu-top-main .menu .item-newsletters.active-trail .icon:hover,
.block--menu-menu-top-main .menu .item-newsletters.active-trail:hover .icon,
.block--menu-menu-top-main
  .menu
  .item-newsletters.active-trail:hover
  .icon:hover {
  background-position: 0 -339px;
}
.svg-newsletters-icon-dims:active,
.l-region--off-canvas-left .menu--icons .item-newsletters .icon:active,
.left-drawer .menu--icons .item-newsletters .icon:active,
.block--menu-menu-top-main .menu .item-newsletters .icon:active,
.svg-newsletters-icon\:active-dims {
  width: 23px;
  height: 19px;
}
.svg-newsletters-icon:hover,
.block--menu-menu-top-main .menu .item-newsletters .icon:hover,
.svg-newsletters-icon\:hover,
.l-region--off-canvas-left .menu--icons .item-newsletters .icon,
.l-region--off-canvas-left .menu--icons .item-newsletters .icon:hover,
.left-drawer .menu--icons .item-newsletters .icon,
.left-drawer .menu--icons .item-newsletters .icon:hover,
.block--menu-menu-top-main .menu .item-newsletters:hover .icon,
.block--menu-menu-top-main .menu .item-newsletters:hover .icon:hover {
  background-position: 0 -358px;
}
.svg-newsletters-icon-dims:hover,
.l-region--off-canvas-left .menu--icons .item-newsletters .icon:hover,
.left-drawer .menu--icons .item-newsletters .icon:hover,
.block--menu-menu-top-main .menu .item-newsletters .icon:hover,
.svg-newsletters-icon\:hover-dims {
  width: 23px;
  height: 19px;
}
.svg-photo-icon,
.svg-photo-icon\:regular {
  background-position: 0 -377px;
}
.svg-photo-icon-dims {
  width: 20px;
  height: 16px;
}
.svg-photo-icon:hover,
.svg-photo-icon\:hover {
  background-position: 0 -393px;
}
.svg-photo-icon-dims:hover,
.svg-photo-icon\:hover-dims {
  width: 20px;
  height: 16px;
}
.svg-pinterest-icon {
  background-position: 0 -409px;
}
.svg-pinterest-icon-dims {
  width: 22px;
  height: 22px;
}
.svg-rss-icon {
  background-position: 0 -431px;
}
.svg-rss-icon-dims {
  width: 56px;
  height: 56px;
}
.svg-search-icon,
.svg-search-icon\:regular {
  background-position: 0 -487px;
}
.svg-search-icon-dims {
  width: 18px;
  height: 19px;
}
.svg-search-icon:hover,
.svg-search-icon\:hover {
  background-position: 0 -506px;
}
.svg-search-icon-dims:hover,
.svg-search-icon\:hover-dims {
  width: 18px;
  height: 19px;
}
.svg-share-icon,
.svg-share-icon\:regular {
  background-position: 0 -525px;
}
.svg-share-icon-dims {
  width: 16px;
  height: 17px;
}
.svg-share-icon:hover,
.svg-share-icon\:hover {
  background-position: 0 -542px;
}
.svg-share-icon-dims:hover,
.svg-share-icon\:hover-dims {
  width: 16px;
  height: 17px;
}
.svg-star-icon,
.svg-star-icon\:regular {
  background-position: 0 -559px;
}
.svg-star-icon-dims {
  width: 20px;
  height: 19px;
}
.svg-star-icon:hover,
.svg-star-icon\:hover {
  background-position: 0 -578px;
}
.svg-star-icon-dims:hover,
.svg-star-icon\:hover-dims {
  width: 20px;
  height: 19px;
}
.svg-store-icon,
.block--menu-menu-top-main .menu .item-store .icon,
.svg-store-icon\:regular {
  background-position: 0 -597px;
}
.svg-store-icon-dims,
.l-region--off-canvas-left .menu--icons .item-store .icon,
.l-region--off-canvas-left .menu--icons .item-store .icon:hover,
.left-drawer .menu--icons .item-store .icon,
.left-drawer .menu--icons .item-store .icon:hover,
.block--menu-menu-top-main .menu .item-store .icon {
  width: 26px;
  height: 16px;
}
.svg-store-icon:active,
.block--menu-menu-top-main .menu .item-store .icon:active,
.svg-store-icon\:active,
.block--menu-menu-top-main .menu .item-store.active .icon,
.block--menu-menu-top-main .menu .item-store.active .icon:hover,
.block--menu-menu-top-main .menu .item-store.active-trail .icon,
.block--menu-menu-top-main .menu .item-store.active-trail .icon:hover,
.block--menu-menu-top-main .menu .item-store.active-trail:hover .icon,
.block--menu-menu-top-main .menu .item-store.active-trail:hover .icon:hover,
.headroom--not-top .block--menu-menu-top-main .menu .item-store:hover .icon,
.headroom--not-top
  .block--menu-menu-top-main
  .menu
  .item-store:hover
  .icon:hover {
  background-position: 0 -613px;
}
.svg-store-icon-dims:active,
.l-region--off-canvas-left .menu--icons .item-store .icon:active,
.left-drawer .menu--icons .item-store .icon:active,
.block--menu-menu-top-main .menu .item-store .icon:active,
.svg-store-icon\:active-dims {
  width: 26px;
  height: 16px;
}
.svg-store-icon:hover,
.block--menu-menu-top-main .menu .item-store .icon:hover,
.svg-store-icon\:hover,
.l-region--off-canvas-left .menu--icons .item-store .icon,
.l-region--off-canvas-left .menu--icons .item-store .icon:hover,
.left-drawer .menu--icons .item-store .icon,
.left-drawer .menu--icons .item-store .icon:hover,
.headroom--not-top .block--menu-menu-top-main .menu .item-store .icon,
.block--menu-menu-top-main .menu .item-store:hover .icon,
.block--menu-menu-top-main .menu .item-store:hover .icon:hover {
  background-position: 0 -629px;
}
.svg-store-icon-dims:hover,
.l-region--off-canvas-left .menu--icons .item-store .icon:hover,
.left-drawer .menu--icons .item-store .icon:hover,
.block--menu-menu-top-main .menu .item-store .icon:hover,
.svg-store-icon\:hover-dims {
  width: 26px;
  height: 16px;
}
.svg-twitter-black-icon,
.svg-twitter-black-icon\:regular {
  background-position: 0 -645px;
}
.svg-twitter-black-icon-dims {
  width: 23px;
  height: 19px;
}
.svg-twitter-black-icon:hover,
.svg-twitter-black-icon\:hover {
  background-position: 0 -664px;
}
.svg-twitter-black-icon-dims:hover,
.svg-twitter-black-icon\:hover-dims {
  width: 23px;
  height: 19px;
}
.svg-twitter-icon {
  background-position: 0 -683px;
}
.svg-twitter-icon-dims {
  width: 17px;
  height: 13px;
}
.svg-twitter-icon-white {
  background-position: 0 -696px;
}
.svg-twitter-icon-white-dims {
  width: 17px;
  height: 13px;
}
.svg-video-icon,
.block--menu-menu-top-main .menu .item-videos .icon,
.svg-video-icon\:regular {
  background-position: 0 -709px;
}
.svg-video-icon-dims,
.l-region--off-canvas-left .menu--icons .item-videos .icon,
.l-region--off-canvas-left .menu--icons .item-videos .icon:hover,
.left-drawer .menu--icons .item-videos .icon,
.left-drawer .menu--icons .item-videos .icon:hover,
.block--menu-menu-top-main .menu .item-videos .icon {
  width: 28px;
  height: 15px;
}
.svg-video-icon:active,
.block--menu-menu-top-main .menu .item-videos .icon:active,
.svg-video-icon\:active,
.block--menu-menu-top-main .menu .item-videos.active .icon,
.block--menu-menu-top-main .menu .item-videos.active .icon:hover,
.block--menu-menu-top-main .menu .item-videos.active-trail .icon,
.block--menu-menu-top-main .menu .item-videos.active-trail .icon:hover,
.block--menu-menu-top-main .menu .item-videos.active-trail:hover .icon,
.block--menu-menu-top-main .menu .item-videos.active-trail:hover .icon:hover,
.headroom--not-top .block--menu-menu-top-main .menu .item-videos:hover .icon,
.headroom--not-top
  .block--menu-menu-top-main
  .menu
  .item-videos:hover
  .icon:hover {
  background-position: 0 -724px;
}
.svg-video-icon-dims:active,
.l-region--off-canvas-left .menu--icons .item-videos .icon:active,
.left-drawer .menu--icons .item-videos .icon:active,
.block--menu-menu-top-main .menu .item-videos .icon:active,
.svg-video-icon\:active-dims {
  width: 28px;
  height: 15px;
}
.svg-video-icon:hover,
.block--menu-menu-top-main .menu .item-videos .icon:hover,
.svg-video-icon\:hover,
.l-region--off-canvas-left .menu--icons .item-videos .icon,
.l-region--off-canvas-left .menu--icons .item-videos .icon:hover,
.left-drawer .menu--icons .item-videos .icon,
.left-drawer .menu--icons .item-videos .icon:hover,
.headroom--not-top .block--menu-menu-top-main .menu .item-videos .icon,
.block--menu-menu-top-main .menu .item-videos:hover .icon,
.block--menu-menu-top-main .menu .item-videos:hover .icon:hover {
  background-position: 0 -739px;
}
.svg-video-icon-dims:hover,
.l-region--off-canvas-left .menu--icons .item-videos .icon:hover,
.left-drawer .menu--icons .item-videos .icon:hover,
.block--menu-menu-top-main .menu .item-videos .icon:hover,
.svg-video-icon\:hover-dims {
  width: 28px;
  height: 15px;
}
.svg-youtube-icon,
.svg-youtube-icon\:regular {
  background-position: 0 -754px;
}
.svg-youtube-icon-dims {
  width: 23px;
  height: 23px;
}
.svg-youtube-icon:hover,
.svg-youtube-icon\:hover {
  background-position: 0 -777px;
}
.svg-youtube-icon-dims:hover,
.svg-youtube-icon\:hover-dims {
  width: 23px;
  height: 23px;
}
table {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 11px;
  font-size: 0.6875rem;
  width: 100%;
  border: 0;
  border-collapse: collapse;
}
th {
  background: #fff;
  font-weight: 900;
  text-transform: uppercase;
}
.field--name-body table,
.table-styled {
  margin: 10px 0 20px;
}
.field--name-body table tr,
.table-styled tr {
  border-bottom: 1px solid #e5e5e5;
}
.field--name-body table tr:last-child,
.table-styled tr:last-child {
  border-bottom: 0;
}
.field--name-body table td,
.field--name-body table th,
.table-styled td,
.table-styled th {
  text-align: center;
  border: 0;
  border-right: 1px solid #e5e5e5;
}
.field--name-body table td:last-child,
.field--name-body table th:last-child,
.table-styled td:last-child,
.table-styled th:last-child {
  border-right: 0;
}
.field--name-body table td,
.table-styled td {
  line-height: 16px;
  padding: 5px 10px;
}
.field--name-body table th,
.table-styled th {
  line-height: 1em;
  padding: 0 5px 10px;
}
.mobile-table-wrapper {
  width: 100%;
  overflow-x: scroll;
}
@font-face {
  font-family: "Polaris";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Medium.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Medium.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Medium.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Medium.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Medium.svg)
      format("svg");
  font-weight: 600;
  font-style: normal;
}
@font-face {
  font-family: "Polaris";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-MediumItalic.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-MediumItalic.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-MediumItalic.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-MediumItalic.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-MediumItalic.svg)
      format("svg");
  font-weight: 600;
  font-style: italic;
}
@font-face {
  font-family: "Polaris";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Bold.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Bold.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Bold.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Bold.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Bold.svg)
      format("svg");
  font-weight: 700;
  font-style: normal;
}
@font-face {
  font-family: "Polaris";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-BoldItalic.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-BoldItalic.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-BoldItalic.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-BoldItalic.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-BoldItalic.svg)
      format("svg");
  font-weight: 700;
  font-style: italic;
}
@font-face {
  font-family: "Polaris";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Book.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Book.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Book.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Book.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Book.svg)
      format("svg");
  font-weight: 400;
  font-style: normal;
}
@font-face {
  font-family: "Polaris";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-BookItalic.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-BookItalic.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-BookItalic.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-BookItalic.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-BookItalic.svg)
      format("svg");
  font-weight: 400;
  font-style: italic;
}
@font-face {
  font-family: "Polaris";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Heavy.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Heavy.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Heavy.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Heavy.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Heavy.svg)
      format("svg");
  font-weight: 900;
  font-style: normal;
}
@font-face {
  font-family: "Polaris";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-HeavyItalic.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-HeavyItalic.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-HeavyItalic.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-HeavyItalic.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-HeavyItalic.svg)
      format("svg");
  font-weight: 900;
  font-style: italic;
}
@font-face {
  font-family: "Polaris";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Light.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Light.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Light.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Light.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-Light.svg)
      format("svg");
  font-weight: 200;
  font-style: normal;
}
@font-face {
  font-family: "Polaris";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-LightItalic.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-LightItalic.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-LightItalic.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-LightItalic.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris/Polaris-LightItalic.svg)
      format("svg");
  font-weight: 200;
  font-style: italic;
}
@font-face {
  font-family: "Polaris Condensed";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Medium.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Medium.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Medium.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Medium.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Medium.svg)
      format("svg");
  font-weight: 600;
  font-style: normal;
}
@font-face {
  font-family: "Polaris Condensed";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-MediumItalic.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-MediumItalic.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-MediumItalic.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-MediumItalic.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-MediumItalic.svg)
      format("svg");
  font-weight: 600;
  font-style: italic;
}
@font-face {
  font-family: "Polaris Condensed";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Bold.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Bold.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Bold.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Bold.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Bold.svg)
      format("svg");
  font-weight: 700;
  font-style: normal;
}
@font-face {
  font-family: "Polaris Condensed";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-BoldItalic.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-BoldItalic.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-BoldItalic.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-BoldItalic.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-BoldItalic.svg)
      format("svg");
  font-weight: 700;
  font-style: italic;
}
@font-face {
  font-family: "Polaris Condensed";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Book.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Book.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Book.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Book.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Book.svg)
      format("svg");
  font-weight: 400;
  font-style: normal;
}
@font-face {
  font-family: "Polaris Condensed";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-BookItalic.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-BookItalic.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-BookItalic.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-BookItalic.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-BookItalic.svg)
      format("svg");
  font-weight: 400;
  font-style: italic;
}
@font-face {
  font-family: "Polaris Condensed";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/Polaris-Heavy.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/Polaris-Heavy.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Heavy.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/Polaris-Heavy.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Heavy.svg)
      format("svg");
  font-weight: 900;
  font-style: normal;
}
@font-face {
  font-family: "Polaris Condensed";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-HeavyItalic.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-HeavyItalic.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-HeavyItalic.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-HeavyItalic.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-HeavyItalic.svg)
      format("svg");
  font-weight: 900;
  font-style: italic;
}
@font-face {
  font-family: "Polaris Condensed";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Light.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Light.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Light.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Light.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-Light.svg)
      format("svg");
  font-weight: 200;
  font-style: normal;
}
@font-face {
  font-family: "Polaris Condensed";
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-LightItalic.eot);
  src: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-LightItalic.eot?#iefix)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-LightItalic.woff)
      format("woff"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-LightItalic.eot)
      format("embedded-opentype"),
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/css/fonts/polaris-condensed/PolarisCondensed-LightItalic.svg)
      format("svg");
  font-weight: 200;
  font-style: italic;
}
* html {
  font-size: 100%;
}
html {
  font-size: 16px;
  line-height: 1.8125em;
}
body {
  font-family: Helvetica, Arial, sans-serif;
  color: #000;
}
a {
  color: #09c;
  text-decoration: none;
}
a:hover {
  color: #000;
}
h1,
.alpha,
h2,
.beta,
.b-today-workouts--title,
.b-trainer-challenge--title,
.block__title,
.node-type-recipe .field--name-field-directions .field-label,
h3,
.gamma,
.node-exercise--full .field--name-field-exercise-steps .field-label,
.phase-week-header,
h4,
.delta,
h5,
.epsilon,
h6,
.zeta {
  margin-top: 0em;
  padding-top: 0em;
  padding-bottom: 0em;
  margin-bottom: 0.3625em;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
}
h1 a,
.alpha a,
h2 a,
.beta a,
.b-today-workouts--title a,
.b-trainer-challenge--title a,
.block__title a,
.node-type-recipe .field--name-field-directions .field-label a,
h3 a,
.gamma a,
.node-exercise--full .field--name-field-exercise-steps .field-label a,
.phase-week-header a,
h4 a,
.delta a,
h5 a,
.epsilon a,
h6 a,
.zeta a {
  color: inherit;
  text-decoration: none;
}
h1,
.alpha {
  font-size: 35px;
  font-size: 2.1875rem;
  line-height: 39px;
  text-transform: uppercase;
}
h2,
.beta,
.b-today-workouts--title,
.b-trainer-challenge--title,
.block__title,
.node-type-recipe .field--name-field-directions .field-label,
h3,
.gamma,
.node-exercise--full .field--name-field-exercise-steps .field-label,
.phase-week-header {
  font-size: 18px;
  font-size: 1.125rem;
  text-transform: uppercase;
}
h3,
.gamma,
.node-exercise--full .field--name-field-exercise-steps .field-label,
.phase-week-header {
  color: #f01616;
}
h4,
.delta {
  font-size: 16px;
  font-size: 1rem;
}
h5,
.epsilon {
  font-size: 14px;
  font-size: 0.875rem;
}
h6,
.zeta {
  font-size: 14px;
  font-size: 0.875rem;
}
p {
  margin: 0;
  margin-top: 0em;
  padding-top: 0em;
  padding-bottom: 0em;
  margin-bottom: 1.8125em;
}
blockquote {
  font-size: 24px;
  font-size: 1.5rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: italic;
  line-height: 29px;
  padding: 20px 0;
  border-top: 1px solid #dedede;
  border-bottom: 1px solid #dedede;
  position: relative;
  margin: 20px 0;
}
blockquote:after,
blockquote:before {
  position: absolute;
}
blockquote:after {
  content: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAXCAQAAABdAYziAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAACcSURBVDjL7ZJBFYMwEESHvhiIhWiJBSxgAQ1YQAJIaCwgoZUAEpZLC9mwmQPXdjjx/vszh2wjHVrYmTGCUAePWIEJYPSB2/mrv6cmaiaHGcvnR9/rgAWgVL6fl1XOrOIFQukJe8nTKtGkduuzEE1qtwa6GXJVt/Z086DX1lchVum1NdLNqNW8daKbiurW8jUpdQgYjht5YyvOjdAdmWGMY7AsZX8AAAAldEVYdGRhdGU6Y3JlYXRlADIwMTQtMDgtMTJUMDg6NDQ6MzArMDA6MDBCwTgcAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE0LTA4LTEyVDA4OjQ0OjMwKzAwOjAwM5yAoAAAAABJRU5ErkJggg==");
  bottom: 15px;
  right: 4px;
}
blockquote:before {
  content: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAXCAQAAABdAYziAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAACWSURBVDjL7dLBDYMwEATABdGAW6AFWqAFanFPtIBbSAmhBChh80gMB2fvI88o689Jo9M+fA1xyYT+mBMeUEr7AjfmbAyUesWZZ+Jt0aml0ZDvdGrxKTudnhRlZ0Ez9aToLGrGRXYW9U2T7Kzo/b98Z1U7ABHBXEzC8JlWrFI5sJZIqS1GqAht8XX+q7+52mFHqtgOKH0BPGq989B6s/sAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTQtMDgtMTJUMDg6NDQ6NTErMDA6MDAi2TovAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE0LTA4LTEyVDA4OjQ0OjUxKzAwOjAwU4SCkwAAAABJRU5ErkJggg==");
  top: 17px;
  left: 4px;
}
blockquote p {
  margin: 0;
  display: block;
  background: #fff200;
  padding: 8px 30px 12px 40px;
}
blockquote.blockquote--left {
  float: left;
  margin-right: 16px;
}
@media (min-width: 1440px) {
  blockquote.blockquote--left {
    margin-right: 30px;
  }
  .has-skin blockquote.blockquote--left {
    margin-right: 16px;
  }
}
blockquote.blockquote--right {
  float: right;
  margin-left: 16px;
}
@media (min-width: 1440px) {
  blockquote.blockquote--right {
    margin-left: 30px;
  }
  .has-skin blockquote.blockquote--right {
    margin-left: 16px;
  }
}
blockquote.blockquote--left,
blockquote.blockquote--right {
  width: 300px;
}
@media (min-width: 0) and (max-width: 1024px) {
  blockquote.blockquote--left,
  blockquote.blockquote--right {
    width: 100%;
    float: none;
    margin-right: 0;
    margin-left: 0;
  }
}
@media (min-width: 1440px) {
  blockquote.blockquote--left,
  blockquote.blockquote--right {
    width: 566px;
  }
  .has-skin blockquote.blockquote--left,
  .has-skin blockquote.blockquote--right {
    width: 300px;
  }
}
q {
  font-style: italic;
}
.node-type-workout-routine #fancybox-content > div,
.node-type-workout-program #fancybox-content > div {
  overflow: hidden !important;
}
.node-type-workout-routine #fancybox-wrap,
.node-type-workout-program #fancybox-wrap {
  box-sizing: content-box;
}
@media (min-width: 768px) {
  .b-jump-index {
    display: none;
  }
}
.b-jump-index--list {
  font-size: 17px;
  font-size: 1.0625rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  padding: 8px 0 14px;
  margin: 4px 0 0;
  border-bottom: 1px solid #dedede;
  overflow: hidden;
  text-transform: uppercase;
}
.b-jump-index--title {
  font-size: 11px;
  font-size: 0.6875rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
  display: block;
  text-align: center;
  text-transform: uppercase;
  line-height: 15px;
}
.b-jump-index--list-item {
  list-style-type: none;
  float: left;
  width: 11.111111%;
  padding: 0;
  margin: 0;
  line-height: 36px;
}
.b-topics-index {
  position: relative;
}
@media (min-width: 768px) {
  .b-topics-index {
    margin-right: -6%;
  }
}
.b-topics-letter-wrapper {
  border-bottom: 1px solid #dedede;
  padding: 0 0 13px;
}
.b-topics-letter-wrapper .topics-letter {
  font-size: 15px;
  font-size: 0.9375rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
  display: block;
  padding: 13px 0 7px;
}
.b-topics-column {
  padding: 0;
  margin: 0;
  list-style: none;
}
@media (min-width: 768px) {
  .b-topics-column {
    display: inline-table;
    width: 29%;
    margin: 0 3% 0 0;
  }
}
.b-topics-column:last-child .b-topics-letter-wrapper {
  border-bottom: 0;
  padding-bottom: 0;
}
.b-topics-list {
  padding: 0;
  list-style: none;
}
.b-topics--list-item {
  font-size: 13px;
  font-size: 0.8125rem;
  line-height: 24px;
}
.b-topics--list-item a {
  color: #000;
}
.form-text,
.form-select,
.form-textarea {
  width: 100%;
}
.form-textarea {
  min-height: 190px;
  resize: none;
}
.form-checkbox,
.form-radio {
  margin-right: 5px;
}
@media (min-width: 1024px) {
  .form-container--two-cols {
    overflow: hidden;
  }
  .form-container--two-cols .form-item,
  .form-container--two-cols .form-actions {
    width: 48.27586%;
    float: left;
    margin-right: 3.44828%;
  }
  .form-container--two-cols .form-item:nth-child(2n),
  .form-container--two-cols .form-actions:nth-child(2n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
}
.contact-form .resizable-textarea .grippie {
  display: none;
}
.contact-form .form-actions {
  padding: 12px 0 0;
}
@media (min-width: 1024px) {
  .contact-form .form-actions {
    padding-top: 2px;
  }
}
.contact-form .form-submit {
  width: 100%;
}
@media (min-width: 1024px) {
  .contact-form .form-submit {
    width: 47.24409%;
    margin-left: auto;
    display: block;
    margin-right: auto;
  }
}
@media (min-width: 1024px) {
  .contact-form .form-item-cid {
    width: 48.27586%;
  }
}
#webform-anchor-link {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  display: inline-block;
  outline: none;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 12px;
  height: 34px;
  line-height: 34px;
  padding: 0 2em;
  color: #fff;
  border: 0;
  background: #000;
  text-transform: uppercase;
  display: block;
  height: 46px;
  line-height: 46px;
  width: auto;
  margin: 20px 10px;
}
#webform-anchor-link:hover {
  text-decoration: none;
  background: #f01616;
}
#webform-anchor-link:active {
  color: #fff;
}
@media (min-width: 480px) {
  #webform-anchor-link {
    width: 73%;
    margin-left: auto;
    margin-right: auto;
  }
}
@media (min-width: 768px) {
  #webform-anchor-link {
    width: 300px;
    position: absolute;
    bottom: -85px;
    left: 50%;
    margin-left: -300px;
  }
}
.webform-client-form .form-actions {
  text-align: center;
}
.webform-client-form .form-submit {
  height: 46px;
  line-height: 46px;
  width: 100%;
}
@media (min-width: 480px) {
  .webform-client-form .form-submit {
    width: 73%;
  }
}
@media (min-width: 1024px) {
  .webform-client-form .form-submit {
    width: 300px;
  }
}
@media (min-width: 0) and (max-width: 1023px) {
  .webform-layout-box.equal.child-width-2 > * {
    width: 100%;
  }
}
@media (min-width: 1024px) {
  .webform-client-form .form-item {
    width: 48.27586%;
  }
  .webform-layout-box.equal.child-width-2 > * {
    width: 48.27586%;
    float: left;
    margin-right: 3.44828%;
  }
  .webform-layout-box.equal.child-width-2 > *:nth-child(2n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
}
.webform-client-form .webform-component-markup {
  font-size: 13px;
  font-size: 0.8125rem;
  line-height: 1.30769em;
  width: 100%;
}
.webform-client-form .webform-component-markup .markup--more-link {
  color: #09c;
  cursor: pointer;
}
.webform-client-form .webform-component-markup .markup--more-link:hover {
  color: #000;
}
.ajax-pager--load-more {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/ajax-loader.gif)
    50% 50% no-repeat;
  display: block;
  width: 100%;
  height: 60px;
  clear: both;
  text-indent: -1000em;
  overflow: hidden;
}
.js #block-maf-channels-maf-channels-fake-pager a {
  visibility: hidden;
}
#block-maf-channels-maf-channels-fake-pager {
  min-height: 20px;
  width: 100%;
}
.block--maf-nodes-maf-nodes-breadcrumbs {
  font-size: 10px;
  font-size: 0.625rem;
  color: #666;
  border-top: 1px solid #dedede;
  padding: 12px 0;
  text-align: center;
}
.block--maf-nodes-maf-nodes-breadcrumbs a {
  color: #666;
}
.block--carousel--latest {
  padding: 15px 0 55px;
  overflow: hidden;
  position: relative;
}
.block--carousel--latest .block--title {
  font-size: 11px;
  font-size: 0.6875rem;
  color: #fff;
  font-weight: 700;
  text-align: center;
  margin: 0 0 7px;
}
.block--carousel--latest .carousel--nav {
  width: 100%;
  text-align: center;
  padding: 0 0 25px;
  margin: 0 0 20px;
  border-bottom: 1px solid #a6a6a6;
}
.block--carousel--latest .carousel--prev,
.block--carousel--latest .carousel--next {
  -webkit-border-radius: 26px;
  -moz-border-radius: 26px;
  -ms-border-radius: 26px;
  -o-border-radius: 26px;
  border-radius: 26px;
  background: #f01616;
  display: inline-block !important;
  width: 52px;
  height: 52px;
  text-align: center;
}
.block--carousel--latest .carousel--prev.disabled,
.block--carousel--latest .carousel--next.disabled {
  background: #363636;
}
.block--carousel--latest .carousel--prev.disabled .icon,
.block--carousel--latest .carousel--next.disabled .icon {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=10);
  opacity: 0.1;
}
.block--carousel--latest .carousel--prev .icon,
.block--carousel--latest .carousel--next .icon {
  position: relative;
  top: 10px;
  left: 2px;
}
.block--carousel--latest .carousel--prev {
  margin-right: 15px;
}
.block--carousel--latest .carousel--prev .icon {
  left: -3px;
}
.block--carousel--latest .carousel--back {
  font-size: 16px;
  font-size: 1rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
  color: #f01616;
  display: block;
  line-height: 20px;
  text-transform: uppercase;
  position: absolute;
  text-align: center;
  bottom: 20px;
  left: 0;
  width: 100%;
}
.block--carousel--latest .carousel--back:hover {
  color: #fff;
}
.block--carousel--latest .caroufredsel_wrapper {
  margin: 0 !important;
}
.block--carousel--latest .carousel--items {
  width: 100%;
}
.block--carousel--latest .carousel--items--list {
  padding: 0;
  width: 10000px;
}
.block--carousel--latest .carousel--item {
  display: block;
  float: left;
  margin: 0;
}
@media (min-width: 0) and (max-width: 768px) {
  .block--carousel--latest .carousel--item img {
    width: 100%;
  }
}
.block--carousel--latest .carousel--item--last {
  height: 100%;
}
.block--carousel--latest .carousel--item-link {
  display: block;
  color: #fff;
}
.block--carousel--latest .carousel--item-link:hover {
  color: #f01616;
}
.block--carousel--latest .carousel--item-title {
  font-size: 16px;
  font-size: 1rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  letter-spacing: 0.02rem;
  text-transform: uppercase;
  line-height: 20px;
  display: block;
}
.block--carousel--latest .carousel--item--last-link {
  font-size: 18px;
  font-size: 1.125rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
  color: #f01616;
  line-height: 20px;
  text-transform: uppercase;
  display: block;
  position: relative;
  top: 50%;
  left: 50%;
  margin: -21px 0 0 -40px;
  width: 80px;
  text-align: center;
}
.block--carousel--latest .carousel--item--last-link:hover {
  color: #fff;
}
@media (min-width: 480px) {
  .block--carousel--latest .carousel--nav {
    width: 155px;
    float: left;
    padding-bottom: 0;
    margin-bottom: 0;
    text-align: left;
    border: 0;
  }
  .block--carousel--latest .block--title {
    text-align: left;
    margin: 0 0 20px;
  }
  .block--carousel--latest .carousel--back {
    font-size: 18px;
    font-size: 1.125rem;
    border-top: 1px solid #a6a6a6;
    padding: 17px 0 0;
    margin: 15px 0 0;
    position: static;
    text-align: left;
  }
  .block--carousel--latest .carousel--items {
    width: 100%;
    padding-left: 180px;
  }
}
@media (min-width: 480px) and (max-width: 767px) {
  .block--carousel--latest .carousel--prev,
  .block--carousel--latest .carousel--next {
    width: 43px;
    height: 43px;
  }
  .block--carousel--latest .carousel--prev .icon,
  .block--carousel--latest .carousel--next .icon {
    top: 6px;
  }
  .block--carousel--latest .carousel--prev {
    margin-right: 5%;
  }
}
@media (min-width: 768px) {
  .block--carousel--latest {
    padding-bottom: 45px;
  }
  .block--carousel--latest .carousel--nav {
    width: 21%;
    float: left;
    margin-right: 0;
  }
  .block--carousel--latest .carousel--item {
    margin: 0 15px 0 0;
  }
  .block--carousel--latest .carousel--items {
    width: 74.57627%;
    float: right;
    margin-right: 0;
    *margin-left: -1em;
    padding-left: 0;
  }
}
@media (min-width: 1024px) {
  .block--carousel--latest .carousel--nav {
    width: 15.25424%;
    float: left;
    margin-right: 1.69492%;
  }
  .block--carousel--latest .carousel--items {
    width: 83.05085%;
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
}
.b-collection-carousel .b-collection-carousel--items > .field-item {
  display: block;
  float: left;
}
.b-collection-carousel .pagination {
  text-align: center;
}
.b-collection-carousel .pagination a {
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
  background: #ccc;
  width: 8px;
  height: 8px;
  margin: 0 5px 0 0;
  display: inline-block;
}
.b-collection-carousel .pagination a.selected {
  background: #000;
  cursor: default;
}
.b-collection-carousel .pagination a span {
  display: none;
}
.b--channel-videos-top--video {
  margin: 0 -10px 5px;
}
@media (min-width: 768px) {
  .b--channel-videos-top--video {
    margin: 0 0 15px;
  }
}
.b--channel-videos-top--video .video--wrapper {
  width: 100%;
  position: relative;
  padding: 56.23209% 0 0;
}
.b--channel-videos-top--video .ami-aol-player {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/ajax-loader.gif)
    50% 50% no-repeat;
}
.b--channel-videos-top--video .ami-aol-player,
.b--channel-videos-top--video .fmvps-wrapper,
.b--channel-videos-top--video .fmvps-limited-mode,
.b--channel-videos-top--video video,
.b--channel-videos-top--video object,
.b--channel-videos-top--video #adaptvDiv0 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100% !important;
  height: 100%;
}
@media (min-width: 0) and (max-width: 480px) {
  .b--channel-videos-top--series-logo {
    margin-left: 0;
  }
}
.b--channel-videos-top--link {
  color: #000;
}
.b--channel-videos-top--link:hover {
  color: #f01616;
}
.b--channel-videos-top--title {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
  font-size: 16px;
  font-size: 1rem;
  line-height: 20px;
  display: block;
  text-transform: uppercase;
  margin: 0 0 5px;
}
@media (min-width: 768px) {
  .b--channel-videos-top--title {
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 26px;
  }
}
.b--channel-videos-top--subtitle {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  display: none;
}
@media (min-width: 1024px) {
  .b--channel-videos-top--subtitle {
    font-size: 13px;
    font-size: 0.8125rem;
    line-height: 17px;
    color: #666;
    display: block;
  }
}
.block--channel-videos {
  border-bottom: 1px solid #e5e5e5;
  margin: 0 -10px 20px;
  padding: 0 10px;
}
@media (min-width: 768px) {
  .block--channel-videos {
    margin: 0 0 20px;
    padding: 0;
  }
}
.block--channel-videos--title {
  position: relative;
  line-height: 36px;
  margin-bottom: 10px;
}
@media (min-width: 768px) {
  .block--channel-videos--title {
    font-size: 20px;
    font-size: 1.25rem;
    margin-bottom: 18px;
  }
}
.block--channel-videos--title .btn-more-videos {
  color: #000;
  position: absolute;
  right: 0;
  top: 0;
}
.channel-videos--list-subtitle {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  display: none;
}
@media (min-width: 1024px) {
  .channel-videos--list-subtitle {
    font-size: 13px;
    font-size: 0.8125rem;
    line-height: 17px;
    color: #666;
    display: block;
  }
}
.channel-videos--list {
  margin: 0;
  padding: 0;
}
.channel-videos--item-link--black {
  color: #000;
}
.channel-videos--item-link--black:hover {
  color: #f01616;
}
.channel-videos--list--image {
  margin: 0 0 8px;
  line-height: 0;
}
@media (min-width: 1440px) {
  .channel-videos--list--image {
    margin-bottom: 5px;
  }
  .has-skin .channel-videos--list--image {
    margin-bottom: 8px;
  }
}
.channel-videos--list-title,
.channel-videos--list-series-title {
  font-size: 10px;
  font-size: 0.625rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  line-height: 14px;
  display: block;
  text-transform: uppercase;
}
@media (min-width: 1440px) {
  .channel-videos--list-title,
  .channel-videos--list-series-title {
    font-size: 16px;
    font-size: 1rem;
    line-height: 22px;
  }
  .has-skin .channel-videos--list-title,
  .has-skin .channel-videos--list-series-title {
    font-size: 10px;
    font-size: 0.625rem;
    line-height: 14px;
  }
}
.channel-videos--list-series-title {
  margin-bottom: 3px;
}
.channel-videos--list-item {
  list-style: none;
}
.channel-videos--list-item:nth-child(n + 2) {
  width: 47.36842%;
  float: left;
  margin-right: 5.26316%;
  margin-bottom: 30px;
}
@media (min-width: 480px) and (max-width: 768px) {
  .channel-videos--list-item:nth-child(n + 2) {
    width: 23.72881%;
    float: left;
    margin-right: 1.69492%;
    margin-bottom: 20px;
  }
}
@media (min-width: 1024px) {
  .channel-videos--list-item:nth-child(n + 2) {
    width: 23.72881%;
    float: left;
    margin-right: 1.69492%;
    margin-bottom: 20px;
  }
}
@media (min-width: 768px) {
  .channel-videos--list-item:nth-child(n + 2) .channel-videos--list-subtitle {
    font-size: 10px;
    font-size: 0.625rem;
    line-height: 13px;
  }
}
.channel-videos--list-item:nth-child(n + 2) .channel-videos--list--image {
  position: relative;
}
.channel-videos--list-item:nth-child(n + 2) .channel-videos--list--image:after {
  content: "";
  display: block;
  position: absolute;
  bottom: 15px;
  left: 19px;
  border-color: transparent transparent transparent #fff;
  border-style: solid;
  border-width: 5px 0 5px 10px;
  height: 0;
  width: 0;
}
@media (min-width: 768px) {
  .channel-videos--list-item:nth-child(n + 2)
    .channel-videos--list--image:after {
    bottom: 16px;
    border-width: 8px 0 8px 12px;
  }
}
.channel-videos--list-item:nth-child(n + 2)
  .channel-videos--list--image:before {
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  -o-border-radius: 2px;
  border-radius: 2px;
  background: rgba(0, 0, 0, 0.8);
  content: "";
  display: block;
  position: absolute;
  bottom: 8px;
  left: 7px;
  height: 25px;
  width: 31px;
}
@media (min-width: 768px) {
  .channel-videos--list-item:nth-child(n + 2)
    .channel-videos--list--image:before {
    height: 32px;
    width: 32px;
  }
}
.channel-videos--list-item:nth-child(n + 2) .channel-videos--list--image img {
  width: 100%;
}
.channel-videos--list-item:nth-child(3) {
  margin-right: 0;
}
@media (min-width: 480px) and (max-width: 768px) {
  .channel-videos--list-item:nth-child(3) {
    margin-right: 1.69492%;
  }
}
@media (min-width: 1024px) {
  .channel-videos--list-item:nth-child(3) {
    margin-right: 1.69492%;
  }
}
.channel-videos--list-item:last-child {
  margin-right: 0;
}
.channel-videos--list-item:first-child {
  margin: 0 -10px 12px;
  overflow: hidden;
}
@media (min-width: 480px) {
  .channel-videos--list-item:first-child {
    margin: 0 0 17px;
  }
}
.channel-videos--list-item:first-child .channel-videos--list--image {
  margin-bottom: 5px;
  position: relative;
}
@media (min-width: 480px) {
  .channel-videos--list-item:first-child .channel-videos--list--image {
    margin-bottom: 20px;
  }
}
.channel-videos--list-item:first-child .channel-videos--list--image:after {
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -15px 0 0 -13px;
  border-color: transparent transparent transparent #fff;
  border-style: solid;
  border-width: 15px 0 15px 25px;
  height: 0;
  width: 0;
}
@media (min-width: 768px) {
  .channel-videos--list-item:first-child .channel-videos--list--image:after {
    margin: -31px 0 0 -26px;
    border-width: 31px 0 31px 52px;
  }
}
.channel-videos--list-item:first-child .channel-videos--list-title {
  font-size: 16px;
  font-size: 1rem;
  line-height: 20px;
  font-weight: 900;
  margin-left: 10px;
}
@media (min-width: 768px) {
  .channel-videos--list-item:first-child .channel-videos--list-title {
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 26px;
    margin-left: 0;
  }
}
#contest_popup,
#contest_popup * {
  box-sizing: initial;
}
.VoteForMe,
.ThanksForTheVote {
  left: 421px;
  height: 19px;
  line-height: 20px;
}
@media (min-width: 1023px) {
  .view-ami-contest-entry-vote .view-content ul,
  .view-ami-contest-entry-vote .view-content ol {
    width: 80% !important;
    min-width: 520px;
  }
}
.view-ami-contest-entry-vote .view-content ul li,
.view-ami-contest-entry-vote .view-content ol li {
  margin-left: 0;
}
@media (min-width: 0) and (max-width: 480px) {
  .view-ami-contest-entry-vote .view-content ul li,
  .view-ami-contest-entry-vote .view-content ol li {
    float: none;
    margin: 0 0 10px;
    width: 80%;
    margin-left: 10%;
  }
}
@media (min-width: 480px) {
  .view-ami-contest-entry-vote .view-content ul li,
  .view-ami-contest-entry-vote .view-content ol li {
    min-width: 195px;
    width: 49%;
  }
  .view-ami-contest-entry-vote .view-content ul li:nth-child(2n),
  .view-ami-contest-entry-vote .view-content ol li:nth-child(2n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
    clear: right;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .view-ami-contest-entry-vote .view-content ul li,
  .view-ami-contest-entry-vote .view-content ol li {
    margin: 0 0 10px;
  }
}
.view-ami-contest-entry-vote .view-content .ami-contest-phase-imageset {
  width: 50%;
  display: inline-block;
}
.view-ami-contest-entry-vote
  .view-content
  .ami-contest-phase-imageset
  .content {
  height: auto !important;
}
.view-ami-contest-entry-vote
  .view-content
  .ami-contest-phase-imageset
  .content
  img {
  width: 100% !important;
  height: auto !important;
  margin-bottom: -11px;
}
.view-ami-contest-entry-vote
  .view-content
  .ami-contest-phase-imageset.index-1
  .content
  img {
  border-top: #000 1px solid;
}
.view-ami-contest-entry-vote .view-content .ami-contest-phase-imageset.theonly {
  width: 100%;
}
.view-ami-contest-entry-vote
  .view-content
  .fivestar-contest-vote-wide
  .fivestar-widget
  .star
  .copy,
.view-ami-contest-entry-vote
  .view-content
  .fivestar-contest-vote-wide
  .fivestar-widget
  .on
  .copy {
  bottom: 21px;
}
@media (min-width: 768px) {
  .js .view-ami-contest-entry-vote .pager {
    display: none;
  }
}
.view-ami-contest-entry-vote .pager li {
  display: inline-block;
  line-height: 38px;
  padding: 0 5px;
}
@media (min-width: 0) and (max-width: 480px) {
  .view-ami-contest-entry-vote .pager li {
    padding: 0 4px;
  }
}
.view-ami-contest-entry-vote .pager li a {
  color: #000;
  display: block;
}
.view-ami-contest-entry-vote .pager .pager-previous a,
.view-ami-contest-entry-vote .pager .pager-next a {
  padding: 0;
  width: 40px;
  margin: 0 10px 0 0;
  background: #000
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/pager-next-prev.png)
    5px 0 no-repeat;
  text-indent: -16px;
}
.view-ami-contest-entry-vote .pager .pager-next {
  margin: 0 -10px 0 10px;
}
.view-ami-contest-entry-vote .pager .pager-next a {
  background-position: 17px -40px;
}
.view-display-id-block_1 {
  line-height: 0;
}
.view-display-id-block_1 p {
  margin-bottom: 0;
}
.view-ami-contest-entry-vote
  .view-content
  div.contest-entry-ami-contest-model-search {
  width: auto;
  margin: 0 auto;
}
#contest_popup .AdBaner,
#contest_popup .Thumb,
#contest_popup .LeftSection {
  overflow: hidden;
}
@media (min-width: 0) and (max-width: 768px) {
  #contest_popup {
    width: 290px;
    height: 410px;
    overflow-y: auto;
    overflow-x: hidden;
  }
  #contest_popup #PopupWrapper {
    width: 282px;
    height: 500px !important;
  }
  #contest_popup #PopupWrapper .ClosePopup {
    top: 4px;
    right: -10px;
  }
  #contest_popup #PopupWrapper .AdBaner {
    display: none;
  }
  #contest_popup #PopupWrapper .AdBaner iframe {
    display: none;
  }
  #contest_popup #PopupWrapper .Sponsor {
    width: 270px;
    margin-left: 8px;
    height: 47px;
    margin-top: 0;
    margin-bottom: 0;
  }
  #contest_popup #PopupWrapper .VoteForMe,
  #contest_popup #PopupWrapper .ThanksForTheVote {
    width: 256px;
    left: 8px;
    top: 565px;
    margin-bottom: 20px;
  }
  #contest_popup #PopupWrapper .Gallery {
    width: 290px;
  }
  #contest_popup #PopupWrapper .Gallery .LeftSection {
    width: 270px;
    top: 105px;
    left: 8px;
    z-index: 1;
  }
  #contest_popup #PopupWrapper .Gallery .RightSection {
    position: absolute;
    width: 270px;
    height: auto;
    left: 8px;
    top: 600px;
    z-index: 2;
  }
  #contest_popup #PopupWrapper .Gallery .RightSection h1.Name {
    border-top: none;
    padding: 0 0 6px 0;
    width: 260px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 22px;
    font-size: 1.375rem;
    line-height: 24px;
    line-height: 1.5rem;
  }
  #contest_popup #PopupWrapper .Gallery .loadingBar {
    left: 0px;
    top: -100px;
  }
  #contest_popup #PopupWrapper .Thumb {
    width: 270px;
    top: 470px;
    left: 8px;
    overflow: hidden;
    overflow-x: auto;
  }
  #contest_popup #PopupWrapper .Thumb .BeforeSection,
  #contest_popup #PopupWrapper .Thumb .AfterSection {
    position: static;
    height: auto;
    min-width: inherit;
    max-width: 124px;
    overflow: hidden;
  }
  #contest_popup #PopupWrapper .Thumb .BeforeSection > p,
  #contest_popup #PopupWrapper .Thumb .AfterSection > p {
    position: static;
    left: initial;
    top: initial;
    margin: -7px 5px -10px;
  }
  #contest_popup.youtube {
    height: 410px;
  }
  #contest_popup.youtube #PopupWrapper {
    height: 540px !important;
  }
  #contest_popup.youtube #PopupWrapper .Sponsor {
    margin-top: 10px;
    margin-bottom: 0;
  }
  #contest_popup.youtube #PopupWrapper .ClosePopup {
    top: -6px;
  }
  #contest_popup.youtube #PopupWrapper .Info {
    position: relative;
    width: 282px;
    top: 107px;
    left: 0;
  }
  #contest_popup.youtube #PopupWrapper .Info h1.Name {
    padding: 0 0 6px 0;
    margin-top: 10px;
    width: 260px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 22;
    font-size: 22;
    line-height: 24;
    line-height: 24;
  }
  #contest_popup.youtube #PopupWrapper .Gallery .RightSection {
    left: 9px;
    top: 594px;
  }
  #contest_popup.youtube #PopupWrapper .Gallery .RightSection iframe {
    margin-bottom: 20px;
  }
  #contest_popup.youtube #PopupWrapper .Gallery .RightSection .Essay {
    width: 260px;
    height: 150px !important;
    margin-bottom: 18px;
  }
  #contest_popup.youtube
    #PopupWrapper
    .Gallery
    .RightSection
    .Essay
    .jspContainer {
    width: 260px;
    height: 150px !important;
  }
  #contest_popup.youtube #PopupWrapper .Gallery .RightSection .VoteForMe,
  #contest_popup.youtube
    #PopupWrapper
    .Gallery
    .RightSection
    .ThanksForTheVote {
    width: 187px;
    margin: -100px 0 20px 0;
    position: relative;
    top: 0;
    left: 0;
  }
  .AdBanerMobile {
    display: none;
  }
}
@media only screen and (min-width: 0) and (max-width: 768px) and (min-width: 320px) and (max-width: 768px) {
  .AdBanerMobile {
    display: block;
  }
}
@media (min-width: 0) and (max-width: 768px) and (max-width: 768px) and (min-width: 0) {
  #overlayM {
    overflow-y: auto;
    overflow-x: hidden;
  }
  #contest_popup {
    width: 100% !important;
    height: auto !important;
    left: 0 !important;
    top: 50px !important;
    border: none !important;
  }
  #contest_popup #PopupWrapper {
    width: 100% !important;
    margin: 0;
  }
  #contest_popup #PopupWrapper .ClosePopup {
    top: 4px !important;
    right: 0 !important;
  }
  .AdBanerMobile {
    width: 320px !important;
  }
  #contest_popup #PopupWrapper .Sponsor {
    width: 100% !important;
    margin-left: 0 !important;
    height: 47px !important;
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  #contest_popup #PopupWrapper .Gallery {
    width: 100% !important;
    height: auto !important;
  }
  #contest_popup #PopupWrapper .Gallery .LeftSection {
    width: 100% !important;
    height: auto !important;
    position: static !important;
    display: block;
    margin: 0 auto;
  }
  #contest_popup #PopupWrapper .Gallery .RightSection {
    position: static !important;
    width: 100% !important;
    height: auto !important;
    margin-top: 10px !important;
  }
  #contest_popup #PopupWrapper .Gallery .RightSection h1.Name {
    width: 100% !important;
  }
  #contest_popup #PopupWrapper .Thumb {
    width: 100% !important;
    overflow: hidden !important;
    overflow-x: auto !important;
    position: static !important;
  }
  #contest_popup #PopupWrapper .VoteForMe,
  #contest_popup #PopupWrapper .ThanksForTheVote {
    width: 100% !important;
    margin-bottom: 20px !important;
    position: static !important;
  }
  #contest_popup.youtube #PopupWrapper .Info {
    position: static !important;
    width: 100% !important;
    height: auto !important;
  }
  #contest_popup.youtube #PopupWrapper .Gallery .RightSection .Essay {
    width: 100% !important;
    height: auto !important;
    margin: 0 !important;
    padding: 0 !important;
  }
  #contest_popup.youtube #PopupWrapper .Gallery .RightSection .Essay div {
    padding: 0 15px 18px 5px;
  }
  #contest_popup.youtube #PopupWrapper .Gallery .RightSection .VoteForMe,
  #contest_popup.youtube
    #PopupWrapper
    .Gallery
    .RightSection
    .ThanksForTheVote {
    margin: 0 !important;
    padding: 0 !important;
  }
}
@media (min-width: 1023px) {
  .theonly .view-ami-contest-entry-vote .view-content ul li,
  .theonly .view-ami-contest-entry-vote .view-content ol li {
    min-width: 155px;
    width: 30%;
    margin-right: 5%;
  }
  .theonly .view-ami-contest-entry-vote .view-content ul li:nth-child(2n),
  .theonly .view-ami-contest-entry-vote .view-content ol li:nth-child(2n) {
    clear: none;
    float: left;
    margin-right: 5%;
  }
  .theonly .view-ami-contest-entry-vote .view-content ul li:nth-child(3n),
  .theonly .view-ami-contest-entry-vote .view-content ol li:nth-child(3n) {
    clear: right;
    float: right;
    margin-right: 0;
  }
}
@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .Thumb {
    width: 353px;
    top: 467px;
  }
  .AdBaner {
    width: 718px !important;
  }
  .AdBaner iframe {
    max-width: 105%;
    width: 750px;
  }
  .Gallery .LeftSection {
    height: 348px !important;
  }
}
#block-maf-gigya-maf-gigya-comments {
  overflow: hidden;
}
#block-maf-gigya-maf-gigya-comments .block__title,
#block-maf-gigya-maf-gigya-comments
  .node-type-recipe
  .field--name-field-directions
  .field-label,
.node-type-recipe
  .field--name-field-directions
  #block-maf-gigya-maf-gigya-comments
  .field-label {
  color: #f01616;
  margin: 0 0 12px;
}
#block-maf-gigya-maf-gigya-comments .gig-comments-container {
  width: auto !important;
  max-width: 635px;
}
#block-maf-gigya-maf-gigya-comments .gig-comments-linksContainer li {
  line-height: 1;
}
#block-maf-gigya-maf-gigya-comments .gig-composebox-post {
  font-size: 12px;
  font-size: 0.75rem;
  background: #000;
  border: 0;
  text-transform: uppercase;
  padding: 0 22px;
}
#block-maf-gigya-maf-gigya-comments .gig-composebox-post:hover {
  background: #f01616;
}
.b-gigya-share--list--item a.google-plusone,
.b-gigya-share--list--item a.print,
.b-gigya-share--list--item a.print-a,
.b-gigya-share--list--item a.comments {
  text-indent: -119988px;
  overflow: hidden;
  text-align: left;
}
.block--maf-gigya-maf-gigya-sharebar {
  text-align: center;
  margin: 0 0 10px;
}
@media (min-width: 768px) {
  .block--maf-gigya-maf-gigya-sharebar {
    position: absolute;
    top: 0;
    left: 0;
    width: 46px;
  }
}
.block--maf-gigya-maf-gigya-sharebar .counter {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 15px;
  font-size: 0.9375rem;
  text-transform: uppercase;
  text-align: center;
  display: inline-block;
}
@media (min-width: 0) and (max-width: 767px) {
  .block--maf-gigya-maf-gigya-sharebar .counter {
    height: 20px;
    overflow: hidden;
    line-height: 16px;
    position: relative;
    top: 2px;
    left: -2px;
  }
}
@media (min-width: 768px) {
  .block--maf-gigya-maf-gigya-sharebar .counter {
    border-bottom: 1px solid #dedede;
    margin: 0 0 18px;
    display: block;
  }
  .block--maf-gigya-maf-gigya-sharebar .counter:after,
  .block--maf-gigya-maf-gigya-sharebar .counter:before {
    content: "";
    display: block;
    border-color: #fff transparent transparent transparent;
    border-width: 7px;
    left: 16px;
    top: 29px;
    border-style: solid;
    height: 0;
    width: 0;
    position: absolute;
  }
  .block--maf-gigya-maf-gigya-sharebar .counter:before {
    border-color: #dedede transparent transparent transparent;
    border-width: 8px;
    left: 15px;
    top: 30px;
  }
}
.b-gigya-share--items-list {
  margin: 0;
  padding: 0;
  list-style: none;
  display: inline-block;
}
.b-gigya-share--list--item {
  -webkit-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -o-transition: all 300ms linear;
  transition: all 300ms linear;
  display: inline-block;
  height: 20px;
  overflow: hidden;
  padding: 0 2px 0 0;
}
@media (min-width: 768px) {
  .b-gigya-share--list--item {
    padding: 0;
    display: block;
    margin: 0 0 10px;
  }
}
.b-gigya-share--list--item.last {
  border-left: 1px solid #dedede;
  margin: 0 0 0 -9px;
  padding: 0 0 0 12px;
}
@media (min-width: 0) and (max-width: 480px) {
  .b-gigya-share--list--item.last {
    display: none;
  }
}
@media (min-width: 768px) {
  .b-gigya-share--list--item.last {
    padding: 10px 0 0;
    margin: 0;
    border-left: 0;
    border-top: 1px solid #dedede;
    height: 32px;
  }
}
.b-gigya-share--list--item.el-invisible {
  height: 0;
  margin: 0;
}
.b-gigya-share--list--item a {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 10px;
  font-size: 0.625rem;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  -o-border-radius: 2px;
  border-radius: 2px;
  background: #00aced
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/sprites/share-icons-sprite.svg)
    no-repeat 0 0;
  display: block;
  width: 81px;
  height: 20px;
  line-height: 20px;
  text-transform: uppercase;
  color: #fff;
  padding: 0 0 0 28px;
  text-align: left;
}
@media (min-width: 768px) {
  .b-gigya-share--list--item a {
    text-indent: -119988px;
    overflow: hidden;
    text-align: left;
    width: 32px;
  }
}
.b-gigya-share--list--item a:hover {
  background-color: #228fbd;
}
.b-gigya-share--list--item a.facebook-like {
  background-position: 6px -58px;
  background-color: #3b5998;
}
@media (min-width: 768px) {
  .b-gigya-share--list--item a.facebook-like {
    background-position: 10px -58px;
    padding: 0;
  }
}
.b-gigya-share--list--item a.facebook-like:hover {
  background-color: #314b82;
}
.b-gigya-share--list--item a.twitter-tweet {
  background-position: 6px -428px;
}
@media (min-width: 768px) {
  .b-gigya-share--list--item a.twitter-tweet {
    background-position: 9px -428px;
    padding: 0;
  }
}
.b-gigya-share--list--item a.google-plusone {
  width: 32px;
  background-position: 0 -124px;
  background-color: transparent;
  padding: 0;
}
.b-gigya-share--list--item a.google-plusone:hover {
  background-color: transparent;
}
.b-gigya-share--list--item a.print,
.b-gigya-share--list--item a.print-a {
  width: 32px;
  background-position: 9px -366px;
  display: none;
}
@media (min-width: 768px) {
  .b-gigya-share--list--item a.print,
  .b-gigya-share--list--item a.print-a {
    display: block;
  }
}
.b-gigya-share--list--item a.popup {
  display: none;
}
@media (min-width: 768px) {
  .b-gigya-share--list--item a.popup {
    display: block;
    background-color: #b7b7b7;
    background-position: 10px -304px;
    padding: 0;
  }
}
.b-gigya-share--list--item a.popup:hover {
  background-color: #98999a;
}
.b-gigya-share--list--item a.popup.opened {
  background-position: 10px -247px;
}
.b-gigya-share--list--item a.comments {
  background-position: 10px 5px;
  background-color: #000;
  width: 30px;
  padding: 0;
}
@media (min-width: 768px) {
  .b-gigya-share--list--item a.comments {
    width: 32px;
  }
}
.b-gigya-share--list--item a.comments:hover {
  background-color: #f01616;
}
.block--maf-homepage-maf-homepage-top {
  position: relative;
}
.block--maf-homepage-maf-homepage-top .block__title,
.block--maf-homepage-maf-homepage-top
  .node-type-recipe
  .field--name-field-directions
  .field-label,
.node-type-recipe
  .field--name-field-directions
  .block--maf-homepage-maf-homepage-top
  .field-label {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 11px;
  font-size: 0.6875rem;
  line-height: 1;
  background: #f01616;
  color: #fff;
  position: absolute;
  top: 0;
  left: 0;
  padding: 6px 8px 8px;
  z-index: 1;
}
.block--maf-homepage-maf-homepage-top .node--big-teaser {
  margin-bottom: 10px;
}
.block--maf-homepage-maf-homepage-top .node--big-teaser--channel-link {
  font-size: 10px;
  font-size: 0.625rem;
}
@media (min-width: 768px) {
  .block--maf-homepage-maf-homepage-top .node--big-teaser--channel-link {
    font-size: 12px;
    font-size: 0.75rem;
  }
}
@media (min-width: 1440px) {
  .block--maf-homepage-maf-homepage-top .node--big-teaser--channel-link {
    font-size: 13px;
    font-size: 0.8125rem;
  }
  .has-skin
    .block--maf-homepage-maf-homepage-top
    .node--big-teaser--channel-link {
    font-size: 12px;
    font-size: 0.75rem;
  }
}
.block--maf-homepage-maf-homepage-top .node--big-teaser--channel-link a:hover {
  color: #fff;
}
.block--maf-homepage-maf-homepage-top .node--big-teaser--title {
  font-size: 16px;
  font-size: 1rem;
  line-height: 20px;
  display: block;
  overflow: hidden;
  max-height: 40px;
}
.block--maf-homepage-maf-homepage-top .node--big-teaser--title a:hover {
  color: #f01616;
}
.block--maf-homepage-maf-homepage-top .node--big-teaser--image-big {
  position: relative;
  overflow: hidden;
}
@media (min-width: 0) and (max-width: 479px) {
  .block--maf-homepage-maf-homepage-top .node--big-teaser--image-big img {
    width: auto;
    max-width: none;
    height: 180px;
  }
}
@media (min-width: 480px) and (max-width: 767px) {
  .block--maf-homepage-maf-homepage-top .node--big-teaser--image-big img {
    width: 100%;
    height: auto;
  }
}
.block--maf-homepage-maf-homepage-top .block--maf-homepage--small-item {
  font-size: 10px;
  font-size: 0.625rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
  line-height: 13px;
  color: #000;
  text-transform: uppercase;
  display: block;
  width: 32.20339%;
  float: left;
  margin-right: 1.69492%;
  margin-bottom: 33px;
}
.block--maf-homepage-maf-homepage-top .block--maf-homepage--small-item:hover {
  color: #f01616;
}
.block--maf-homepage-maf-homepage-top
  .block--maf-homepage--small-item:last-child {
  margin-right: 0;
}
.block--maf-homepage-maf-homepage-top .block--maf-homepage--small-item img {
  margin-bottom: 7px;
}
@media (min-width: 768px) {
  .block--maf-homepage-maf-homepage-top {
    overflow: hidden;
    margin-bottom: 20px;
  }
  .block--maf-homepage-maf-homepage-top .block__title,
  .block--maf-homepage-maf-homepage-top
    .node-type-recipe
    .field--name-field-directions
    .field-label,
  .node-type-recipe
    .field--name-field-directions
    .block--maf-homepage-maf-homepage-top
    .field-label {
    left: 25px;
    padding: 8px 10px 10px;
  }
  .block--maf-homepage-maf-homepage-top .node--big-teaser--title {
    font-size: 30px;
    font-size: 1.875rem;
    line-height: 38px;
    margin-bottom: 13px;
    display: block;
    overflow: hidden;
    max-height: 76px;
  }
  .block--maf-homepage-maf-homepage-top .node--big-teaser {
    margin-bottom: 30px;
  }
  .block--maf-homepage-maf-homepage-top .node--big-teaser--image-big {
    height: auto;
    position: relative;
    overflow: hidden;
    border-left: 6px solid #f01616;
  }
  .block--maf-homepage-maf-homepage-top .node--big-teaser--content {
    left: 6px;
    padding-right: 370px;
  }
  .block--maf-homepage-maf-homepage-top .node--big-teaser--content .field {
    font-size: 13px;
    font-size: 0.8125rem;
    font-family: "Polaris", Helvetica, Arial, sans-serif;
    font-weight: 600;
    font-style: normal;
    line-height: 17px;
  }
  .block--maf-homepage-maf-homepage-top .block--maf-homepage--small-item {
    font-size: 13px;
    font-size: 0.8125rem;
    line-height: 17px;
    margin-bottom: 0;
  }
  .block--maf-homepage-maf-homepage-top .block--maf-homepage--small-item img {
    width: 100%;
    margin: 0 0 3px;
  }
  .block--maf-homepage-maf-homepage-top .l-content-fullwidth--pushed {
    overflow: hidden;
    border-bottom: 1px solid #e5e5e5;
    padding-bottom: 19px;
  }
  .block--maf-homepage-maf-homepage-top
    .l-content-fullwidth--pushed
    .node--teaser:last-child {
    padding: 0;
    margin: 0;
    border: 0;
  }
  .block--maf-homepage-maf-homepage-top
    .l-content-fullwidth--pushed
    .node--teaser:first-child {
    margin-top: 20px;
  }
}
@media (min-width: 768px) and (min-width: 768px) and (max-width: 1024px) {
  .block--maf-homepage-maf-homepage-top .node--big-teaser--title {
    font-size: 22px;
    font-size: 1.375rem;
    line-height: 27px;
    display: block;
    overflow: hidden;
    max-height: 54px;
  }
}
@media (min-width: 768px) and (min-width: 1440px) {
  .block--maf-homepage-maf-homepage-top .node--big-teaser--content .field {
    font-size: 16px;
    font-size: 1rem;
  }
  .has-skin
    .block--maf-homepage-maf-homepage-top
    .node--big-teaser--content
    .field {
    font-size: 13px;
    font-size: 0.8125rem;
  }
}
@media (min-width: 768px) and (min-width: 1440px) {
  .block--maf-homepage-maf-homepage-top .block--maf-homepage--small-item {
    font-size: 16px;
    font-size: 1rem;
    line-height: 22px;
  }
  .has-skin
    .block--maf-homepage-maf-homepage-top
    .block--maf-homepage--small-item {
    font-size: 13px;
    font-size: 0.8125rem;
    line-height: 17px;
  }
}
@media (min-width: 1440px) {
  .block--maf-homepage-maf-homepage-top .block__title,
  .block--maf-homepage-maf-homepage-top
    .node-type-recipe
    .field--name-field-directions
    .field-label,
  .node-type-recipe
    .field--name-field-directions
    .block--maf-homepage-maf-homepage-top
    .field-label {
    font-size: 13px;
    font-size: 0.8125rem;
  }
  .has-skin .block--maf-homepage-maf-homepage-top .block__title,
  .has-skin
    .block--maf-homepage-maf-homepage-top
    .node-type-recipe
    .field--name-field-directions
    .field-label,
  .node-type-recipe
    .field--name-field-directions
    .has-skin
    .block--maf-homepage-maf-homepage-top
    .field-label {
    font-size: 11px;
    font-size: 0.6875rem;
  }
  .block--maf-homepage-maf-homepage-top .node--big-teaser--title {
    font-size: 34px;
    font-size: 2.125rem;
    display: block;
    overflow: hidden;
    max-height: 76px;
  }
  .has-skin .block--maf-homepage-maf-homepage-top .node--big-teaser--title {
    font-size: 30px;
    font-size: 1.875rem;
  }
}
.b-mostpopular--item {
  overflow: hidden;
  margin: 0 0 20px;
}
.b-mostpopular--link {
  color: #000;
}
.b-mostpopular--link:hover {
  color: #f01616;
}
.b-mostpopular--image {
  display: block;
  float: left;
  margin: 0 10px 0 0;
  line-height: 0;
}
.b-mostpopular--promo-title {
  font-size: 11px;
  font-size: 0.6875rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  line-height: 1.36364em;
  text-transform: uppercase;
  display: block;
}
.section-homepage
  .l-region--sidebar-second
  .block--maf-mostpopular-3
  .block__title,
.section-homepage
  .l-region--sidebar-second
  .block--maf-mostpopular-3
  .node-type-recipe
  .field--name-field-directions
  .field-label,
.node-type-recipe
  .field--name-field-directions
  .section-homepage
  .l-region--sidebar-second
  .block--maf-mostpopular-3
  .field-label,
.right-drawer .block--maf-mostpopular-3 .block__title,
.right-drawer
  .block--maf-mostpopular-3
  .node-type-recipe
  .field--name-field-directions
  .field-label,
.node-type-recipe
  .field--name-field-directions
  .right-drawer
  .block--maf-mostpopular-3
  .field-label {
  border-top: 1px solid #dedede;
  font-size: 13px;
  font-size: 0.8125rem;
  text-align: center;
  padding: 5px 0;
  margin: 15px 0 2px;
  color: #f01616;
}
.right-drawer .block--maf-mostpopular-3 .block__title,
.right-drawer
  .block--maf-mostpopular-3
  .node-type-recipe
  .field--name-field-directions
  .field-label,
.node-type-recipe
  .field--name-field-directions
  .right-drawer
  .block--maf-mostpopular-3
  .field-label {
  padding: 0;
  margin: 0 0 2px;
}
.right-drawer .b-today-workouts--additional {
  margin-left: -8px;
  margin-right: -8px;
}
.block--sailthru-basic-newsletter .form-item.form-type-item {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 13px;
  font-size: 0.8125rem;
  line-height: 1.30769em;
}
.block--sailthru-basic-newsletter .sailthru-basic-newsletter-form {
  padding: 0 0 5px;
}
.block--sailthru-basic-newsletter label {
  display: none;
}
.block--sailthru-basic-newsletter .form-item {
  display: inline;
}
.block--sailthru-basic-newsletter .form-text {
  width: 180px;
  height: 34px;
  line-height: 34px;
}
.block--sailthru-basic-newsletter .form-submit {
  width: 106px;
  padding: 0;
  float: right;
}
.block--newsletters--popup .l-popup--content--inner {
  padding-bottom: 50px;
}
.block--newsletters--popup .l-popup--top-bar {
  display: none;
}
.block--newsletters--popup .sailthru-newsletters-form {
  overflow: hidden;
  max-width: 920px;
  clear: both;
  overflow: hidden;
  margin: 0 auto;
}
.block--newsletters--popup .sailthru-newsletters-form #edit-newsletters--2 {
  float: left;
  margin: 15px 23px 0 0;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  #edit-newsletters--2
  .form-item {
  width: 135px;
  float: left;
  margin-right: 17px;
  position: relative;
  text-align: center;
}
@media (min-width: 1024px) {
  .block--newsletters--popup
    .sailthru-newsletters-form
    #edit-newsletters--2
    .form-item {
    width: 132px;
  }
}
.block--newsletters--popup
  .sailthru-newsletters-form
  #edit-newsletters--2
  .form-item.checked
  .option:after {
  background-image: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/input-check.svg);
  background-repeat: no-repeat;
  background-position: 50%;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  #edit-newsletters--2
  .form-item-newsletters-build
  .option {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/newsletter_build.svg)
    50% 0 no-repeat;
  background-size: contain;
  max-width: 132px;
  margin: 0 auto;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  #edit-newsletters--2
  .form-item-newsletters-build
  .option
  .newsletter-build {
  padding: 140px 0 0;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  #edit-newsletters--2
  .form-item-newsletters-burn
  .option {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/newsletter_burn.svg)
    50% 0 no-repeat;
  background-size: contain;
  max-width: 132px;
  margin: 0 auto;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  #edit-newsletters--2
  .form-item-newsletters-burn
  .option
  .newsletter-burn {
  padding: 140px 0 0;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  #edit-newsletters--2
  .form-item-newsletters-mafh
  .option {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/newsletter_mafh.svg)
    50% 0 no-repeat;
  background-size: contain;
  max-width: 132px;
  margin: 0 auto;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  #edit-newsletters--2
  .form-item-newsletters-mafh
  .option
  .newsletter-mafh {
  padding: 140px 0 0;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  #edit-newsletters--2
  .form-checkbox {
  display: none;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  #edit-newsletters--2
  .option {
  display: block;
  position: relative;
  padding: 0 0 53px;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  #edit-newsletters--2
  .option:after {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  content: "";
  display: block;
  position: absolute;
  bottom: 15px;
  left: 50%;
  background-color: #000;
  width: 26px;
  height: 25px;
  margin: 0 0 0 -13px;
}
.block--newsletters--popup .sailthru-newsletters-form #edit-header-link {
  color: #f01616;
  margin: 0;
}
.block--newsletters--popup .sailthru-newsletters-form #edit-header-html {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 1.57143em;
  margin: 0 0 4px;
}
.block--newsletters--popup .sailthru-newsletters-form #edit-header-html label {
  font-weight: 900;
  font-size: 35px;
  font-size: 2.1875rem;
  line-height: 1em;
  margin: 0 0 17px;
}
.block--newsletters--popup .sailthru-newsletters-form .newsletter-description,
.block--newsletters--popup .sailthru-newsletters-form .sample_link {
  display: none;
}
.block--newsletters--popup .sailthru-newsletters-form .title {
  font-size: 10px;
  font-size: 0.625rem;
  text-transform: uppercase;
  font-weight: 700;
  line-height: 1.2em;
}
.block--newsletters--popup .sailthru-newsletters-form .text {
  position: relative;
  padding: 130px 0 0;
}
@media (min-width: 1024px) {
  .block--newsletters--popup .sailthru-newsletters-form .text {
    padding: 190px 0 0;
  }
}
.block--newsletters--popup .sailthru-newsletters-form .form-type-textfield {
  position: relative;
  display: inline-block;
  float: left;
  width: 100%;
  padding-right: 88px;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  .form-type-textfield:after,
.block--newsletters--popup
  .sailthru-newsletters-form
  .form-type-textfield:before {
  background: #000;
  content: "";
  display: block;
  width: 3px;
  height: 7px;
  position: absolute;
  bottom: 0;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  .form-type-textfield:after {
  right: 0;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  .form-type-textfield:before {
  left: 0;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  .form-type-textfield
  .form-text {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
  -webkit-appearance: none;
  background: #efefef;
  border: 0;
  border-bottom: 3px solid #000;
  color: #858585;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  .form-type-textfield:after {
  right: 88px;
}
.block--newsletters--popup .sailthru-newsletters-form .form-text {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 17px;
  font-size: 1.0625rem;
  padding-bottom: 7px;
  height: 35px;
  width: 300px;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .block--newsletters--popup .sailthru-newsletters-form .form-text {
    width: 285px;
  }
}
.block--newsletters--popup .sailthru-newsletters-form .form-submit {
  font-size: 18px;
  font-size: 1.125rem;
  line-height: 34px;
  height: 36px;
  padding: 0;
  width: 86px;
  float: left;
  margin-left: -75px;
  position: relative;
  text-transform: capitalize;
  top: 15px;
  font-weight: 700;
}
.block--newsletters--popup .sailthru-newsletters-form .email-field {
  float: left;
  padding: 15px 0 0;
  margin: 0 0 0 440px;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .block--newsletters--popup .sailthru-newsletters-form .email-field {
    margin-left: 325px;
  }
}
.block--newsletters--popup
  .sailthru-newsletters-form
  #edit-right-checkboxes
  .form-item {
  margin: 0;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  #edit-right-checkboxes
  .form-checkbox {
  height: auto;
}
.block--newsletters--popup
  .sailthru-newsletters-form
  #edit-right-checkboxes
  .title {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 1.57143em;
  text-transform: none;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .block--newsletters--popup
    .sailthru-newsletters-form
    #edit-right-checkboxes
    .title {
    font-size: 11px;
    font-size: 0.6875rem;
  }
}
.block--newsletters--popup
  .sailthru-newsletters-form
  #edit-right-checkboxes
  strong {
  text-transform: uppercase;
}
.block--newsletters--popup .b-popup-form-links {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 600;
  font-style: normal;
  font-size: 11px;
  font-size: 0.6875rem;
  color: #aaaaaa;
}
.block--newsletters--popup .b-popup-form-links a {
  padding: 0 5px;
  color: #02abea;
}
.block--newsletters--popup .b-popup-form-links a:hover {
  color: #000;
}
.block--newsletters--popup .b-popup-form-links a:first-child {
  padding-left: 0;
}
.block--popup {
  position: absolute;
  top: 40px;
  right: 38px;
}
@media (min-width: 1024px) {
  .block--popup {
    top: 50px;
    right: 58px;
  }
}
.block--popup .l-popup--open {
  border-right: 1px solid #e5e5e5;
  border-left: 1px solid #e5e5e5;
  display: block;
  width: 39px;
  height: 40px;
  line-height: 44px;
  text-align: center;
}
@media (min-width: 1024px) {
  .block--popup .l-popup--open {
    height: 54px;
    width: 59px;
    line-height: 62px;
  }
}
.block--popup .l-popup--open .icon {
  cursor: pointer;
  position: relative;
  z-index: 1;
}
.block--popup .l-popup--open .icon.active::after {
  content: " ";
  display: block;
  position: absolute;
  bottom: -15px;
  left: 0;
  border-color: transparent transparent #efefef;
  border-style: solid;
  border-width: 0 10px 11px;
  height: 0;
  width: 0;
}
.block--popup .l-popup--content {
  top: 83px;
}
@media (min-width: 1024px) {
  .block--popup .l-popup--content {
    top: 104px;
  }
}
.block--popup .l-popup--content .block__title,
.block--popup
  .l-popup--content
  .node-type-recipe
  .field--name-field-directions
  .field-label,
.node-type-recipe
  .field--name-field-directions
  .block--popup
  .l-popup--content
  .field-label {
  font-size: 56px;
  font-size: 3.5rem;
  color: #dcdcdc;
  text-align: center;
  margin: 0 0 49px;
  line-height: 1em;
}
.block--social-links--popup .links-list--social {
  padding: 0;
  margin: 0 auto -40px;
  max-width: 915px;
  overflow: hidden;
  text-align: center;
}
.block--social-links--popup .links-list--social .list-item {
  display: inline-block;
  width: 225px;
  list-style: none;
  margin: 0 0 40px;
  vertical-align: middle;
  text-align: left;
}
.block--social-links--popup .links-list--social .list-item a {
  font-size: 13px;
  font-size: 0.8125rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 600;
  font-style: normal;
  color: #02abea;
  line-height: 1.38462em;
  display: block;
  height: 46px;
  padding: 5px 15px 0 0;
}
.block--social-links--popup .links-list--social .list-item a:hover {
  color: #000;
}
.block--social-links--popup .links-list--social .list-item .icon {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  background: #000;
  width: 47px;
  height: 46px;
  vertical-align: middle;
  margin: -5px 10px 0 0;
  display: block;
  float: left;
  line-height: 58px;
  text-align: center;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .block--social-links--popup .b-share-icon {
    -webkit-transform: scale(0.85);
    -moz-transform: scale(0.85);
    -ms-transform: scale(0.85);
    -o-transform: scale(0.85);
    transform: scale(0.85);
    top: 2px;
  }
}
.b-social-links--slide-out {
  position: absolute;
  top: 50px;
  right: 117px;
  width: 216px;
  overflow: hidden;
  z-index: 1;
  display: none;
}
@media (min-width: 1440px) {
  .b-social-links--slide-out {
    display: block;
  }
}
.links-list--social--slide-out .list-item,
.links-list--social--mobile .list-item {
  display: block;
  float: left;
  border-left: 1px solid #e5e5e5;
  height: 54px;
  padding: 14px 15px;
}
.links-list--social--slide-out a,
.links-list--social--mobile a {
  display: block;
  width: 23px;
  height: 23px;
  overflow: hidden;
  position: relative;
  margin: 2px 0 0;
}
.links-list--social--slide-out .facebook-link,
.links-list--social--mobile .facebook-link {
  background: #000;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
}
.links-list--social--slide-out .facebook-link .svg-facebook-icon,
.links-list--social--mobile .facebook-link .svg-facebook-icon {
  -webkit-transform: scale(0.7);
  -moz-transform: scale(0.7);
  -ms-transform: scale(0.7);
  -o-transform: scale(0.7);
  transform: scale(0.7);
  margin: 1px 0 0 7px;
}
.links-list--social--slide-out .facebook-link:hover,
.links-list--social--mobile .facebook-link:hover {
  background: #3b5998;
}
.links-list--social--slide-out .gplus-link,
.links-list--social--mobile .gplus-link {
  margin-top: 3px;
}
.links-list--social--mobile {
  margin-top: -2px;
}
.links-list--social--mobile .list-item {
  border: 0;
}
.links-list--social--mobile .list-item:first-child {
  padding-left: 9px;
}
.block--maf-ads-maf-ads-taboola
  .thumbs-2r
  .videoCube.syndicatedItem:hover
  .video-title,
.block--maf-ads-maf-ads-taboola .thumbs-2r .videoCube a:hover .video-title,
.block--maf-ads-maf-ads-taboola
  .text-links-2c
  .trc_rbox_div
  .videoCube.trc_tl_right_col:hover
  .video-title,
.block--maf-ads-maf-ads-taboola
  .text-links-2c
  .trc_rbox_div
  .videoCube.trc_tl_right_col:hover
  .item-label-href,
.block--maf-ads-maf-ads-taboola
  .text-links-2c
  .trc_rbox_div
  .videoCube.horizontal:hover
  .video-title,
.block--maf-ads-maf-ads-taboola
  .text-links-2c
  .trc_rbox_div
  .videoCube.horizontal:hover
  .item-label-href {
  text-decoration: none;
  color: #f01616;
}
.block--maf-ads-maf-ads-taboola .trc_rbox_header .trc_rbox_header_span {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
  font-size: 16px;
  font-size: 1rem;
  color: #f01616;
  text-transform: uppercase;
  padding: 0 0 16px;
  display: block;
}
.block--maf-ads-maf-ads-taboola
  .text-links-2c
  .trc_rbox_div
  .videoCube.trc_tl_right_col,
.block--maf-ads-maf-ads-taboola
  .text-links-2c
  .trc_rbox_div
  .videoCube.horizontal {
  line-height: 17px;
}
@media (min-width: 1200px) {
  .block--maf-ads-maf-ads-taboola #taboola-below-main-column {
    float: left;
    clear: none;
    width: 67%;
    border-right: 1px solid #e5e5e5;
    padding-right: 25px;
  }
  .has-skin .block--maf-ads-maf-ads-taboola #taboola-below-main-column {
    float: none;
    clear: inherit;
    width: inherit;
    border-right: 0;
    padding-right: 0;
  }
  .block--maf-ads-maf-ads-taboola #taboola-text-2-columns-mix {
    float: right;
    clear: none;
    width: 31%;
  }
  .has-skin .block--maf-ads-maf-ads-taboola #taboola-text-2-columns-mix {
    float: none;
    clear: inherit;
    width: inherit;
  }
  .block--maf-ads-maf-ads-taboola
    .text-links-2c
    .trc_rbox_div
    .videoCube.horizontal {
    width: 98%;
    float: none;
  }
  .has-skin
    .block--maf-ads-maf-ads-taboola
    .text-links-2c
    .trc_rbox_div
    .videoCube.horizontal {
    width: 48%;
    float: left;
  }
  .block--maf-ads-maf-ads-taboola
    .text-links-2c
    .trc_rbox_header_span
    .trc_header_right_column {
    display: none;
  }
  .has-skin
    .block--maf-ads-maf-ads-taboola
    .text-links-2c
    .trc_rbox_header_span
    .trc_header_right_column {
    display: inline;
  }
  .block--maf-ads-maf-ads-taboola
    .text-links-2c
    .trc_rbox_div
    .videoCube.trc_tl_right_col {
    margin-left: 0;
  }
  .has-skin
    .block--maf-ads-maf-ads-taboola
    .text-links-2c
    .trc_rbox_div
    .videoCube.trc_tl_right_col {
    margin-left: auto;
    float: none;
  }
}
.b-today-workouts {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
}
.b-today-workouts .node--teaser--channel-link {
  display: block;
  color: #f01616;
  text-align: center;
  padding: 7px 0;
}
.b-today-workouts--title {
  border-top: 1px solid #dedede;
  border-bottom: 1px solid #dedede;
  font-size: 38px;
  font-size: 2.375rem;
  line-height: 1em;
  text-align: center;
  padding: 0 0 8px;
  margin: 0 0 3px;
  display: block;
}
.b-today-workouts--title-text {
  background: #fff200;
  line-height: 25px;
  display: inline-block;
  height: 33px;
}
.b-today-workouts--items-list {
  border: 1px solid #dedede;
  margin: 0;
  padding: 0;
  list-style: none;
  text-align: center;
}
.b-today-workouts--list-item {
  border-bottom: 1px solid #dedede;
  padding: 25px;
}
.b-today-workouts--list-item:last-child {
  border: 0;
}
.b-today-workouts--skill-type {
  font-size: 11px;
  font-size: 0.6875rem;
  color: #ccc;
  display: block;
  font-weight: 700;
  text-transform: uppercase;
  line-height: 17px;
}
.b-today-workouts--skill-type a {
  padding: 0 5px;
  color: #ccc;
}
.b-today-workouts--skill-type a:hover {
  color: #000;
}
.b-today-workouts--exs-title {
  display: block;
  line-height: 22px;
}
.b-today-workouts--exs-title a {
  color: #000;
}
.b-today-workouts--exs-title a:hover {
  color: #f01616;
}
.b-today-workouts--additional {
  margin: 12px 0;
  overflow: hidden;
  color: #666;
  text-align: center;
}
.b-today-workouts--additional .b-teaser-additional-fields--items {
  float: none;
  display: inline-block;
  padding: 0 10px;
}
.right-drawer .b-today-workouts--additional .b-teaser-additional-fields--items {
  padding: 0 5px;
}
.b-today-workouts--additional .b-teaser-additional-fields--label {
  line-height: 10px;
}
.b-today-workouts--start-link {
  background: #fff200;
  width: 100%;
}
.b-today-workouts--start-link:hover {
  background: #000;
  color: #fff;
}
.b-trainer-challenge--title {
  display: block;
  border-top: 1px solid #dedede;
  border-bottom: 1px solid #dedede;
  font-size: 38px;
  font-size: 2.375rem;
  line-height: 1em;
  text-align: center;
  padding: 0 0 8px;
  margin: 0 0 3px;
}
.b-trainer-challenge--title-text {
  background: #fff200;
  line-height: 25px;
  display: inline-block;
  height: 33px;
}
.b-trainer-challenge--header {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 1.28571em;
  border-bottom: 1px solid #dedede;
  padding: 10px 0;
}
.b-trainer-challenge--header img {
  float: left;
  margin: 0 12px 0 0;
}
.b-trainer-challenge--header p {
  margin: 0;
}
.b-trainer-challenge--items-list {
  margin: 0;
  padding: 0;
  list-style: none;
}
.b-trainer-challenge--list-item .b-workout-part--item {
  padding-top: 10px;
}
.b-trainer-challenge--list-item .b-workout-part--description {
  width: 135px;
}
.b-trainer-challenge--list-item .b-workout-part--media {
  width: 100px;
}
.b-trainer-challenge--list-item .b-workout-part--instructions {
  font-size: 15px;
  font-size: 0.9375rem;
  width: 65px;
  float: right;
}
.b-trainer-challenge--list-item .b-workout-part--instructions--item {
  display: block;
  width: 100%;
  border: 0;
  margin: 3px 0 7px;
}
.b-trainer-challenge--list-item .b-workout-part--instructions--suf {
  font-family: Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-size: 7px;
  font-size: 0.4375rem;
  line-height: 12px;
  text-transform: uppercase;
}
.b-workout-part--description,
.b-workout-part--media,
.b-workout-part--instructions {
  float: left;
}
.block--maf-nodes-maf-nodes-workouts-parts {
  clear: both;
  width: 100%;
}
.b-workout-part--items {
  overflow: hidden;
  margin: 0 0 20px;
}
.b-workout-part--title {
  border-bottom: 1px solid #dedede;
  padding: 0 0 15px;
  margin: 0;
  color: #000;
}
.b-workout-part--subtitle {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 17px;
  font-size: 1.0625rem;
  display: block;
  text-transform: none;
}
.b-workout-part--item {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  border-bottom: 1px solid #dedede;
  overflow: hidden;
  padding: 10px 0 10px;
}
@media (min-width: 1024px) {
  .b-workout-part--item {
    padding-top: 20px;
  }
}
.b-workout-part--description {
  width: 47.33%;
}
@media (min-width: 1024px) {
  .b-workout-part--description {
    width: 32.39153%;
  }
}
.b-workout-part--media {
  width: 38.33%;
}
.b-workout-part--media .exercise-thumb {
  display: block;
  margin: 0 0 0 4%;
}
.b-workout-part--media .exercise-thumb--with-play {
  position: relative;
}
.b-workout-part--media .exercise-thumb--with-play:before {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  font-size: 10px;
  font-size: 0.625rem;
  color: #fff;
  content: "PLAY";
  display: block;
  background: #000;
  background: rgba(0, 0, 0, 0.4);
  width: 48px;
  height: 19px;
  position: absolute;
  bottom: 7px;
  left: 0;
  padding: 0 0 0 15px;
  line-height: 20px;
}
.b-workout-part--media .exercise-thumb--with-play:after {
  content: "";
  position: absolute;
  bottom: 12px;
  left: 6px;
  border-color: transparent transparent transparent #fff;
  border-style: solid;
  border-width: 5px 0 5px 6px;
  height: 0;
  width: 0;
}
.b-workout-part--media img {
  width: 100px;
}
@media (min-width: 1024px) {
  .b-workout-part--media {
    width: 24.69135%;
  }
}
.b-workout-part--instructions {
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 1em;
  color: #666;
  width: 14.33%;
  text-align: center;
}
@media (min-width: 1024px) {
  .b-workout-part--instructions {
    width: 42.9171%;
    text-align: left;
    font-size: 20px;
    font-size: 1.25rem;
  }
}
.b-workout-part--instructions--item {
  margin: 0 0 10px;
}
.b-workout-part--instructions--item:last-child {
  margin: 0;
}
@media (min-width: 1024px) {
  .b-workout-part--instructions--item {
    display: inline-block;
    border-left: 1px solid #f4f4f4;
    border-right: 1px solid #f4f4f4;
    text-align: center;
    width: 31.9%;
    margin-bottom: 20px;
  }
  .b-workout-part--instructions--item:first-child,
  .b-workout-part--instructions--item:last-child {
    border: 0;
  }
}
.b-workout-part--instructions--suf {
  font-size: 7px;
  font-size: 0.4375rem;
  display: block;
  text-transform: uppercase;
}
@media (min-width: 1024px) {
  .b-workout-part--instructions--suf {
    font-size: 10px;
    font-size: 0.625rem;
    text-transform: lowercase;
    line-height: 26px;
  }
}
.b-workout-part--exercise-count {
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 22px;
  text-transform: uppercase;
  color: #f01616;
}
.b-workout-part--promo-title {
  text-transform: uppercase;
  font-size: 12px;
  font-size: 0.75rem;
  line-height: 16px;
  display: block;
  margin: 0 0 3px;
  font-weight: 900;
}
.b-workout-part--equipment {
  font-size: 11px;
  font-size: 0.6875rem;
  line-height: 15px;
  display: block;
  font-weight: 600;
}
.b-workout-part--how-to {
  font-size: 11px;
  font-size: 0.6875rem;
  line-height: 20px;
  position: relative;
  top: -5px;
  font-weight: 600;
}
.b-workout-part--how-to:after {
  content: "";
  position: absolute;
  top: 4px;
  right: -8px;
  border-color: transparent transparent transparent #00aeef;
  border-style: solid;
  border-width: 4px 0 4px 4px;
  height: 0;
  width: 0;
}
.b-workout-part--how-to:hover:after {
  border-color: transparent transparent transparent #000;
}
.b-workout-part--how-to a {
  color: #00aeef;
}
.b-workout-part--how-to a:hover {
  color: #000;
}
.b-workout-part--editorial-details {
  font-size: 10px;
  font-size: 0.625rem;
  line-height: 16px;
  color: #666;
  clear: both;
}
@media (min-width: 1024px) {
  .b-workout-part--editorial-details {
    width: 35.9171%;
    float: right;
    clear: none;
  }
}
@media (min-width: 768px) and (max-width: 1440px) {
  #fancybox-content .ami-aol-player,
  #fancybox-content .fmvps-wrapper,
  #fancybox-content .fmvps-wrapper > div,
  #fancybox-content .fmvps-limited-mode,
  #fancybox-content video,
  #fancybox-content object,
  .b-workout-part--video .ami-aol-player,
  .b-workout-part--video .fmvps-wrapper,
  .b-workout-part--video .fmvps-wrapper > div,
  .b-workout-part--video .fmvps-limited-mode,
  .b-workout-part--video video,
  .b-workout-part--video object {
    width: 760px !important;
    height: 428px !important;
  }
}
@media (min-width: 480px) and (max-width: 767px) {
  #fancybox-content .ami-aol-player,
  #fancybox-content .fmvps-wrapper,
  #fancybox-content .fmvps-wrapper > div,
  #fancybox-content .fmvps-limited-mode,
  #fancybox-content video,
  #fancybox-content object,
  .b-workout-part--video .ami-aol-player,
  .b-workout-part--video .fmvps-wrapper,
  .b-workout-part--video .fmvps-wrapper > div,
  .b-workout-part--video .fmvps-limited-mode,
  .b-workout-part--video video,
  .b-workout-part--video object {
    width: 460px !important;
    height: 259px !important;
  }
}
@media (min-width: 0) and (max-width: 480px) {
  #fancybox-content .ami-aol-player,
  #fancybox-content .fmvps-wrapper,
  #fancybox-content .fmvps-wrapper > div,
  #fancybox-content .fmvps-limited-mode,
  #fancybox-content video,
  #fancybox-content object,
  .b-workout-part--video .ami-aol-player,
  .b-workout-part--video .fmvps-wrapper,
  .b-workout-part--video .fmvps-wrapper > div,
  .b-workout-part--video .fmvps-limited-mode,
  .b-workout-part--video video,
  .b-workout-part--video object {
    width: 300px !important;
    height: 169px !important;
  }
}
#fancybox-content .fmvps-player-poster,
.b-workout-part--video .fmvps-player-poster {
  height: 100% !important;
}
.b-workouts-channel--top {
  overflow: hidden;
  padding: 0 0 10px;
  margin: 0 0 20px;
  border-bottom: 1px solid #dedede;
}
@media (min-width: 768px) {
  .b-workouts-channel--top {
    padding: 0;
  }
}
.b-workouts-channel--top--title {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 1.35714em;
  text-align: center;
  display: block;
  margin: 0 0 10px;
}
@media (min-width: 768px) {
  .b-workouts-channel--top--title {
    border-bottom: 1px solid #dedede;
    padding: 0 0 8px;
    margin: 0 0 20px;
  }
}
@media (min-width: 1024px) {
  .b-workouts-channel--top--title {
    font-size: 17px;
    font-size: 1.0625rem;
    line-height: 1.41176em;
  }
}
.b-workouts-channel--top--jump-menus {
  overflow: hidden;
  border-top: 1px solid #dedede;
  padding: 10px 0 0;
}
.b-workouts-channel--top--jump-menu {
  width: 100%;
  margin: 0 0 9px;
}
@media (min-width: 768px) {
  .b-workouts-channel--top--jump-menu {
    width: 49.15254%;
    float: left;
    margin-right: 1.69492%;
  }
  .b-workouts-channel--top--jump-menu:nth-child(2n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
}
.b-workouts-channel--top-sections {
  overflow: hidden;
  margin: 0 auto;
  text-align: center;
}
.b-workouts-channel--top-sections .b--fl,
.b-workouts-channel--top-sections .b--fr {
  margin-top: 5px;
}
.b-workouts-channel--top-sections .b--fl {
  width: 18.57291%;
  text-align: right;
  padding: 0 10px 0 0;
}
.b-workouts-channel--top-sections .b--fr {
  width: 18.65625%;
  text-align: left;
}
.b-workouts-channel--top--main-image {
  margin: 0;
  text-align: center;
  display: inline-block;
  width: 50%;
}
@media (min-width: 1024px) {
  .b-workouts-channel--top--main-image {
    width: 41%;
  }
}
.b-workouts-channel--top--main-image object {
  width: 100%;
  display: block;
  height: auto;
  position: relative;
  padding-top: 100%;
}
.b-workouts-channel--top--main-image svg {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
}
.b-workouts-channel--top--section-title {
  font-size: 9px;
  font-size: 0.5625rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
  font-size: 1.2vw;
  line-height: 1em;
  margin-bottom: 2em;
  margin-bottom: 2vw;
}
@media (min-width: 1024px) {
  .b-workouts-channel--top--section-title {
    font-size: 16px;
    font-size: 1rem;
  }
}
@media (min-width: 1440px) {
  .has-skin .b-workouts-channel--top--section-title {
    margin-bottom: 20px;
  }
}
.b-workouts-channel--top--section-title a {
  color: #000;
}
.b-workouts-channel--top--section-title a:hover {
  color: #f01616;
}
.b-workouts-channel--top--section-title a.active {
  color: #f01616;
}
#rear_deltoids,
#soleus_muscle,
#triceps,
#traps,
#lats,
#mid_back,
#low_back,
#glutes,
#hamstring,
#calves,
#quads,
#abs,
#forearms,
#biceps,
#chest,
#shoulders,
#neck {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -webkit-transition: opacity, 0.3s, linear;
  -moz-transition: opacity, 0.3s, linear;
  -o-transition: opacity, 0.3s, linear;
  transition: opacity, 0.3s, linear;
}
#rear_deltoids:hover,
#rear_deltoids.active,
#soleus_muscle:hover,
#soleus_muscle.active,
#triceps:hover,
#triceps.active,
#traps:hover,
#traps.active,
#lats:hover,
#lats.active,
#mid_back:hover,
#mid_back.active,
#low_back:hover,
#low_back.active,
#glutes:hover,
#glutes.active,
#hamstring:hover,
#hamstring.active,
#calves:hover,
#calves.active,
#quads:hover,
#quads.active,
#abs:hover,
#abs.active,
#forearms:hover,
#forearms.active,
#biceps:hover,
#biceps.active,
#chest:hover,
#chest.active,
#shoulders:hover,
#shoulders.active,
#neck:hover,
#neck.active {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
  cursor: pointer;
}
.block__title,
.node-type-recipe .field--name-field-directions .field-label {
  display: block;
}
.l-region--off-canvas-left .block,
.left-drawer .block {
  border-bottom: 1px solid #b6b6b6;
  margin: 0 0 15px;
}
.l-region--off-canvas-left .block:last-child,
.left-drawer .block:last-child {
  border-bottom: 0;
}
.l-region--off-canvas-left .block:first-child,
.left-drawer .block:first-child {
  margin-top: 12px;
}
.l-region--off-canvas-left .block__title,
.l-region--off-canvas-left
  .node-type-recipe
  .field--name-field-directions
  .field-label,
.node-type-recipe
  .field--name-field-directions
  .l-region--off-canvas-left
  .field-label,
.left-drawer .block__title,
.left-drawer .node-type-recipe .field--name-field-directions .field-label,
.node-type-recipe .field--name-field-directions .left-drawer .field-label {
  font-size: 12px;
  font-size: 0.75rem;
  color: #f01616;
  padding: 0 0 0 9px;
}
.l-region--footer .block__title,
.l-region--footer .node-type-recipe .field--name-field-directions .field-label,
.node-type-recipe .field--name-field-directions .l-region--footer .field-label {
  font-size: 11px;
  font-size: 0.6875rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  color: #d5d5d5;
  margin-bottom: 7px;
}
.block--maf-homepage-maf-homepage-ads-first,
.block--maf-homepage-maf-homepage-ads-second,
.block--maf-homepage-maf-homepage-ads-third {
  border-bottom: 1px solid #e5e5e5;
  line-height: 1;
  text-align: center;
  padding: 0 0 18px;
  margin: 0 0 20px;
}
@media (min-width: 0) and (max-width: 768px) {
  .l-page--topics-details .block--maf-channels {
    margin: 0 -10px;
    padding: 0 10px;
    border-bottom: 1px solid #e5e5e5;
    margin-bottom: 20px;
    padding-bottom: 4px;
  }
  .l-page--topics-details .block--maf-channels-maf-channels-third,
  .l-page--topics-details .block--maf-channels-maf-channels-fake-pager {
    border-bottom: 0;
    margin-bottom: 0;
  }
}
.l-region--sidebar-second .block {
  margin: 0 0 15px;
}
.l-region--sidebar-second .block:last-child {
  margin: 0;
}
.l-region--sidebar-second .block--dfp {
  margin: 0;
}
.l-region--sidebar-second .block__title,
.l-region--sidebar-second
  .node-type-recipe
  .field--name-field-directions
  .field-label,
.node-type-recipe
  .field--name-field-directions
  .l-region--sidebar-second
  .field-label {
  font-size: 16px;
  font-size: 1rem;
  line-height: 1.5625em;
  color: #f01616;
  margin: 0 0 12px;
}
#dfp-ad-right_rail_first {
  margin: 0 0 15px;
}
#dfp-ad-mobile_top,
#dfp-ad-mobile_above_footer {
  margin: 0 auto 10px;
  height: 50px;
  overflow: hidden;
  text-align: center;
  width: 320px;
  position: relative;
}
#dfp-ad-mobile_top .amobeeIframe,
#dfp-ad-mobile_above_footer .amobeeIframe {
  min-height: 9999px;
}
.l-region--fixed-pos-bottom {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  z-index: 100;
  height: 50px;
  text-align: center;
  overflow: hidden;
}
.snapjs-left .l-region--fixed-pos-bottom,
.snapjs-right .l-region--fixed-pos-bottom {
  display: none;
}
#block-dfp-mobile-box,
#block-dfp-mobile-box--1,
#block-dfp-mobile-box--2 {
  display: none;
}
@media (min-width: 0) and (max-width: 767px) {
  #block-dfp-mobile-box,
  #block-dfp-mobile-box--1,
  #block-dfp-mobile-box--2 {
    display: block;
    margin: 0 -10px 10px;
    text-align: center;
  }
  #block-dfp-mobile-box .block__title,
  #block-dfp-mobile-box
    .node-type-recipe
    .field--name-field-directions
    .field-label,
  .node-type-recipe
    .field--name-field-directions
    #block-dfp-mobile-box
    .field-label,
  #block-dfp-mobile-box--1 .block__title,
  #block-dfp-mobile-box--1
    .node-type-recipe
    .field--name-field-directions
    .field-label,
  .node-type-recipe
    .field--name-field-directions
    #block-dfp-mobile-box--1
    .field-label,
  #block-dfp-mobile-box--2 .block__title,
  #block-dfp-mobile-box--2
    .node-type-recipe
    .field--name-field-directions
    .field-label,
  .node-type-recipe
    .field--name-field-directions
    #block-dfp-mobile-box--2
    .field-label {
    font-size: 11px;
    font-size: 0.6875rem;
    font-family: Helvetica, Arial, sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #666;
    line-height: 15px;
    text-align: center;
    padding: 0 0 3px 0;
    text-transform: none;
  }
}
#dfp-ad-mobile_below_content {
  text-align: center;
  overflow: hidden;
  max-width: 320px;
  text-align: center;
  position: relative;
  margin: 0 auto;
}
@media (min-width: 768px) {
  #dfp-ad-mobile_below_content {
    display: none;
  }
}
#dfp-ad-mobile_below_content .amobeeIframe {
  height: 255px !important;
  width: auto !important;
  overflow: hidden;
  margin: 0 auto;
}
#dfp-ad-mobile_below_content .amobeeIframe::-webkit-scrollbar {
  display: none;
}
#dfp-ad-mobile_below_content .amobeeIframe::scrollbar {
  display: none;
}
@media (min-width: 768px) {
  #block-dfp-mobile-top {
    display: none;
  }
}
.b-off-canvas-region--top {
  background: #000;
  color: #fff;
  padding: 17px 0 22px 10px;
}
.b-off-canvas-region--top .block__title,
.b-off-canvas-region--top
  .node-type-recipe
  .field--name-field-directions
  .field-label,
.node-type-recipe
  .field--name-field-directions
  .b-off-canvas-region--top
  .field-label {
  margin: 0;
  padding: 0;
  text-align: center;
}
.block--search-form .block__content {
  background: #000;
  padding: 17px 0 22px 10px;
}
.block--search-form .form-type-textfield {
  position: relative;
  display: inline-block;
  margin: 0 7px 0 0;
}
.block--search-form .form-type-textfield:after,
.block--search-form .form-type-textfield:before {
  background: #ccc;
  content: "";
  display: block;
  width: 2px;
  height: 7px;
  position: absolute;
  bottom: 0;
}
.block--search-form .form-type-textfield:after {
  right: 0;
}
.block--search-form .form-type-textfield:before {
  left: 0;
}
.block--search-form .form-type-textfield .form-text {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
  -webkit-appearance: none;
  background: #000;
  border: 0;
  border-bottom: 2px solid #ccc;
  color: #fff;
}
.block--search-form .form-type-textfield ::-webkit-input-placeholder {
  color: #fff;
}
.block--search-form .form-type-textfield :-moz-placeholder {
  color: #fff;
}
.block--search-form .form-type-textfield ::-moz-placeholder {
  color: #fff;
}
.block--search-form .form-type-textfield :-ms-input-placeholder {
  color: #fff;
}
.block--search-form .form-text {
  font-family: Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-size: 16px;
  font-size: 1rem;
  line-height: 30px;
  height: 30px;
  width: 164px;
}
.block--search-form .form-submit {
  background: #474747;
  padding: 0 11px;
}
.block--search--popup {
  right: 0;
}
.block--search--popup .l-popup--open {
  border-right: 0;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .block--search--popup .b-search-icon {
    -webkit-transform: scale(0.85);
    -moz-transform: scale(0.85);
    -ms-transform: scale(0.85);
    -o-transform: scale(0.85);
    transform: scale(0.85);
    top: 3px;
  }
}
.block--search--popup .search-block-form {
  width: 490px;
  margin: 0 auto;
  padding: 23px 0 0;
}
.block--search--popup .search-block-form label {
  display: none;
}
.block--search--popup .search-block-form .form-type-textfield {
  position: relative;
  display: inline-block;
  float: left;
  width: 100%;
  padding-right: 88px;
}
.block--search--popup .search-block-form .form-type-textfield:after,
.block--search--popup .search-block-form .form-type-textfield:before {
  background: #000;
  content: "";
  display: block;
  width: 3px;
  height: 7px;
  position: absolute;
  bottom: 0;
}
.block--search--popup .search-block-form .form-type-textfield:after {
  right: 0;
}
.block--search--popup .search-block-form .form-type-textfield:before {
  left: 0;
}
.block--search--popup .search-block-form .form-type-textfield .form-text {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
  -webkit-appearance: none;
  background: #efefef;
  border: 0;
  border-bottom: 3px solid #000;
  color: #858585;
}
.block--search--popup .search-block-form .form-type-textfield:after {
  right: 88px;
}
.block--search--popup .search-block-form .form-text {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 20px;
  font-size: 1.25rem;
  padding-bottom: 7px;
  height: 35px;
  width: 382px;
}
.block--search--popup .search-block-form .form-submit {
  font-size: 18px;
  font-size: 1.125rem;
  text-transform: uppercase;
  line-height: 44px;
  height: 45px;
  padding: 0;
  width: 67px;
  float: left;
  margin-left: -67px;
  position: relative;
}
.block--search--popup .b-search--popup--links-list .menu {
  text-align: center;
  padding: 0;
  margin: 40px 0 0;
}
.block--search--popup .b-search--popup--links-list .menu li {
  list-style-type: none;
}
.block--search--popup .b-search--popup--links-list .menu li,
.block--search--popup .b-search--popup--links-list .menu li li {
  margin: 0px;
  padding: 0px;
  display: inline;
}
.block--search--popup .b-search--popup--links-list .menu li a {
  font-size: 13px;
  font-size: 0.8125rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 600;
  font-style: normal;
  color: #02abea;
  line-height: 1.38462em;
  padding: 0 15px;
}
.block--search--popup .b-search--popup--links-list .menu li a:hover {
  color: #000;
}
.l-region--off-canvas-left .menu--icons a,
.left-drawer .menu--icons a {
  border-top: 1px solid #dedede;
}
.l-region--off-canvas-left .menu--icons a:hover,
.l-region--off-canvas-left .menu--icons a.active,
.left-drawer .menu--icons a:hover,
.left-drawer .menu--icons a.active {
  background-color: #f0f0f0;
  border-left: 3px solid #f01616;
  padding-left: 6px;
}
.l-region--off-canvas-left .menu--icons .icon,
.left-drawer .menu--icons .icon {
  -webkit-transform: scale(0.87);
  -moz-transform: scale(0.87);
  -ms-transform: scale(0.87);
  -o-transform: scale(0.87);
  transform: scale(0.87);
  background-repeat: no-repeat;
  background-image: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/sprites/icons/icons.svg);
  margin: 0 10px -4px 0;
}
.l-region--off-canvas-left .menu--icons .item-latest .icon,
.l-region--off-canvas-left .menu--icons .item-latest .icon:hover,
.left-drawer .menu--icons .item-latest .icon,
.left-drawer .menu--icons .item-latest .icon:hover {
  margin-right: 16px;
}
.l-region--off-canvas-left .menu--icons .item-newsletters .icon,
.l-region--off-canvas-left .menu--icons .item-newsletters .icon:hover,
.left-drawer .menu--icons .item-newsletters .icon,
.left-drawer .menu--icons .item-newsletters .icon:hover {
  margin-right: 16px;
}
.l-region--off-canvas-left .menu--icons .item-store,
.left-drawer .menu--icons .item-store {
  background-color: #fdf105;
  background-position: 5px 50%;
  background-repeat: no-repeat;
  background-image: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/gnc-link-logo.png);
  background-image: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/gnc-link-logo.svg);
  display: block;
  overflow: hidden;
  text-indent: -9999em;
}
.l-region--off-canvas-left .menu--icons .item-store:hover,
.left-drawer .menu--icons .item-store:hover {
  background-color: #fdf105;
  border-left: 0;
}
.l-region--off-canvas-left .menu--icons .item-store .icon,
.l-region--off-canvas-left .menu--icons .item-store .icon:hover,
.left-drawer .menu--icons .item-store .icon,
.left-drawer .menu--icons .item-store .icon:hover {
  margin-right: 14px;
}
.l-region--off-canvas-left .menu--secondary a,
.left-drawer .menu--secondary a {
  font-weight: 400;
}
.l-region--footer .menu {
  margin: 0;
  padding: 0;
}
.l-region--footer .menu li {
  list-style: none;
  line-height: 21px;
}
.l-region--footer .menu li a {
  color: #929292;
}
.block--menu-menu-top-main {
  float: left;
}
.block--menu-menu-top-main .menu {
  margin: 0;
  padding: 0;
  border: 0;
  /* *zoom: expression(
    this.runtimeStyle.zoom= "1",
    this.appendChild(document.createElement("br")) .style.cssText=
      "clear:both;font:0/0 serif"
  );
  *zoom: 1; */
}
.block--menu-menu-top-main .menu:before,
.block--menu-menu-top-main .menu:after {
  content: ".";
  display: block;
  height: 0;
  overflow: hidden;
}
.block--menu-menu-top-main .menu:after {
  clear: both;
}
.block--menu-menu-top-main .menu li {
  list-style-image: none;
  list-style-type: none;
  margin-left: 0;
  white-space: nowrap;
  display: inline;
  float: left;
}
.block--menu-menu-top-main .menu a {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
  font-size: 9px;
  font-size: 0.5625rem;
  color: #666;
  border-right: 1px solid #e5e5e5;
  line-height: 39px;
  height: 39px;
  padding: 0 20px;
  text-transform: uppercase;
  display: block;
}
.block--menu-menu-top-main .menu a:hover {
  color: #000;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .block--menu-menu-top-main .menu a {
    padding: 0 15px;
  }
}
.block--menu-menu-top-main .menu a.mafh {
  font-size: 0;
  background: transparent
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/mafh_menu_logo.png)
    no-repeat 50% 3px;
  background-size: 85px;
  width: 130px;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .block--menu-menu-top-main .menu a.mafh {
    background-size: 65px;
    background-position: right 3px;
    width: 80px;
    padding-right: 0;
  }
}
@media (min-width: 1024px) {
  .block--menu-menu-top-main .menu a {
    font-size: 12px;
    font-size: 0.75rem;
    line-height: 50px;
    height: 50px;
  }
}
@media (min-width: 1440px) {
  .block--menu-menu-top-main .menu a {
    padding: 0 30px;
  }
}
.block--menu-menu-top-main .menu a.active,
.block--menu-menu-top-main .menu a.active-trail {
  color: #f01616;
}
.block--menu-menu-top-main .menu .icon {
  margin: 0 10px -3px 0;
  background-position: 0 0;
  position: relative;
  background-repeat: no-repeat;
  background-image: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/sprites/icons/icons.svg);
}
@media (min-width: 768px) and (max-width: 1023px) {
  .block--menu-menu-top-main .menu .icon {
    transform: scale(0.87);
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .block--menu-menu-top-main .menu .item-latest .icon {
    bottom: -2px;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .block--menu-menu-top-main .menu .item-newsletters .icon {
    bottom: -2px;
  }
}
@media (min-width: 1024px) {
  .block--menu-menu-top-main .menu .item-videos .icon {
    bottom: 1px;
  }
}
.headroom--not-top .block--menu-menu-top-main .menu .item-videos .icon {
  bottom: 0;
}
.block--menu-menu-top-main .menu .item-store {
  background-color: #fdf105;
  background-position: 50%;
  background-repeat: no-repeat;
  background-image: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/gnc-link-logo.png);
  background-image: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/gnc-link-logo.svg);
  width: 119px;
  height: 23px;
  display: block;
  overflow: hidden;
  text-indent: -9999em;
  margin: 14px 0 0 30px;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .block--menu-menu-top-main .menu .item-store {
    margin: 8px 0 0 20px;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .block--menu-menu-top-main .menu .item-store .icon {
    bottom: -2px;
  }
}
.block--menu-menu-top-main .menu .last a {
  border: 0;
}
.block--menu-menu-top-main .menu .first a {
  padding-left: 0;
}
.block--main-menu .menu {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
  padding: 0;
  margin: 0;
}
.block--main-menu .menu-item.collapsed {
  background: none;
  list-style: none;
}
.block--main-menu a {
  display: block;
  text-transform: uppercase;
  font-size: 0.77778em;
  line-height: 43px;
  padding: 0 0 0 9px;
  color: #000;
}
.block--main-menu a:hover {
  color: #f01616;
}
.block--main-menu a.active,
.block--main-menu a.active-trail {
  color: #f01616;
}
#block-maf-header-blocks-maf-header-blocks-canvas-left
  .block--main-menu
  a.mafh {
  font-size: 0;
  background: transparent
    url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/mafh_menu_logo.png)
    no-repeat 5px 0;
  background-size: 85px;
}
.menu--dropdown .expanded {
  position: relative;
}
.menu--dropdown .expanded .menu {
  display: none;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 600;
  font-style: normal;
  z-index: 10000;
}
.menu--dropdown .expanded .menu a {
  text-transform: none;
}
.menu--dropdown .expanded .expander {
  border-left: 1px solid #dedede;
  width: 40px;
  height: 43px;
  display: block;
  position: absolute;
  top: 1px;
  right: 0;
}
.menu--dropdown .expanded .expander .icon {
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -3px 0 0 -5px;
}
.menu--dropdown .expanded.opened .menu {
  display: block;
}
.menu--dropdown .expanded.opened .expander .icon {
  background-repeat: no-repeat;
  background-image: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/sprites/icons/icons.svg);
}
.l-region--off-canvas-left .menu--dropdown a,
.left-drawer .menu--dropdown a {
  border-top: 1px solid #dedede;
}
@media (min-width: 768px) {
  /* .block--main-menu .menu {
    margin: 0;
    padding: 0;
    border: 0;
    *zoom: expression(
      this.runtimeStyle.zoom= "1",
      this.appendChild(document.createElement("br")) .style.cssText=
        "clear:both;font:0/0 serif"
    );
    *zoom: 1;
  } */
  .block--main-menu .menu:before,
  .block--main-menu .menu:after {
    content: ".";
    display: block;
    height: 0;
    overflow: hidden;
  }
  .block--main-menu .menu:after {
    clear: both;
  }
  .block--main-menu .menu li {
    list-style-image: none;
    list-style-type: none;
    margin-left: 0;
    white-space: nowrap;
    display: inline;
    float: left;
  }
  .block--main-menu a {
    font-size: 12px;
    font-size: 0.75rem;
    line-height: 36px;
    height: 40px;
    padding: 0 12px;
  }
  .block--main-menu a.mafh {
    font-size: 0;
    background: transparent
      url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/mafh_menu_logo.png)
      no-repeat 0 0;
    width: 100px;
    background-size: 100px;
  }
  .block--main-menu .first a {
    padding-left: 0;
  }
  .menu--dropdown .expanded .menu {
    -webkit-box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.35);
    -moz-box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.35);
    box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.35);
    background: #fff;
    min-width: 160px;
  }
  .menu--dropdown .expanded .menu .menu-item {
    display: block;
    float: none;
  }
  .menu--dropdown .expanded .menu a {
    font-size: 14px;
    font-size: 0.875rem;
    border-top: 0;
    line-height: 32px;
    height: 32px;
    padding: 0 24px 0 14px;
  }
  .menu--dropdown .expanded .menu a:hover {
    background: #f0f0f0;
    color: #000;
  }
  .menu--dropdown .expanded .menu a.active {
    color: #f01616;
  }
  .menu--dropdown .expanded:hover > .menu {
    display: block;
    position: absolute;
    left: 0;
    top: 40px;
  }
  .menu--dropdown .expanded .expander {
    display: none;
  }
  .menu--dropdown .expanded.menu-depth-2:hover .menu {
    top: 0;
    left: 160px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .block--main-menu a {
    font-size: 17px;
    font-size: 1.0625rem;
    line-height: 50px;
    height: 53px;
    padding: 0 15px;
  }
}
@media (min-width: 768px) and (min-width: 1440px) {
  .block--main-menu a {
    padding: 0 22px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .menu--dropdown .expanded:hover > .menu {
    top: 52px;
  }
}
@media (max-width: 1440px) and (min-width: 1025px) {
  .block--main-menu a.mafh {
    display: block;
  }
}
.block--guides-menu .menu {
  margin: 0;
  padding: 0;
  list-style: none;
}
.block--guides-menu .menu-item {
  padding: 0 10px 10px;
}
.block--guides-menu a {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 12px;
  font-size: 0.75rem;
  color: #666;
  display: block;
  background: #f0f0f0;
  padding: 10px 110px 38px 15px;
  line-height: 1.41667em;
  text-transform: uppercase;
}
.block--mobile-select-menu .block__title,
.block--mobile-select-menu
  .node-type-recipe
  .field--name-field-directions
  .field-label,
.node-type-recipe
  .field--name-field-directions
  .block--mobile-select-menu
  .field-label {
  font-size: 12px;
  font-size: 0.75rem;
  font-weight: 400;
  color: #000;
  padding: 0 0 0 9px;
  margin-top: -9px;
}
.block--mobile-select-menu .b-select--custom {
  margin: 0 0 0 9px;
  width: 242px;
  border-right-width: 2px;
}
.block--mobile-select-menu .footer-links {
  line-height: 0;
  padding: 15px 0 14px 9px;
}
.block--mobile-select-menu .footer-links a {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 600;
  font-style: normal;
  font-size: 11px;
  font-size: 0.6875rem;
  display: inline-block;
  border-right: 1px solid #dedede;
  padding: 0 8px 0 0;
  margin: 0 6px 0 0;
  line-height: 10px;
  color: #00aeef;
}
.block--mobile-select-menu .footer-links a:hover {
  color: #fff;
}
.block--mobile-select-menu .footer-links a:last-child {
  margin: 0;
  padding: 0;
  border: 0;
}
@media (min-width: 768px) {
  .node-type-exercise .l-main {
    border-top: 1px solid #dedede;
    padding-top: 12px;
  }
}
.node-type-exercise .node-full--header {
  border-top: 1px solid #dedede;
  margin: 10px -10px 0;
}
@media (min-width: 768px) {
  .node-type-exercise .node-full--header {
    border-top: 0;
    margin: -12px 0 0 -24px;
  }
}
.node-type-exercise .b-node-full-title {
  font-size: 20px;
  font-size: 1.25rem;
  line-height: 1.2em;
  border-bottom: 1px solid #dedede;
  margin: 0 0 15px;
  padding: 0 0 18px;
}
@media (min-width: 768px) {
  .node-type-exercise .b-node-full-title {
    border: 0;
    font-size: 23px;
    font-size: 1.4375rem;
    line-height: 1.13043em;
    padding: 0;
  }
}
@media (min-width: 1024px) {
  .node-type-exercise .b-node-full-title {
    font-size: 35px;
    font-size: 2.1875rem;
    line-height: 1.11429em;
    margin-bottom: 30px;
  }
}
.group-ex-summary {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: notmal;
  font-size: 12px;
  font-size: 0.75rem;
  color: #000;
  text-transform: uppercase;
  line-height: 1.83333em;
  margin: 0 0 20px;
  overflow: hidden;
}
.group-ex-summary a {
  color: #f01616;
  text-transform: uppercase;
}
.group-ex-summary a:hover {
  text-decoration: underline;
}
.group-ex-summary .field--label-inline .field__label,
.group-ex-summary .field--label-inline .field__items,
.group-ex-summary .field--label-inline .field__item {
  display: inline;
  float: none;
}
.group-ex-summary .field--label-inline .field__label {
  margin-right: 4px;
}
.group-ex-summary .field--label-inline .field__item {
  word-spacing: 3px;
}
@media (min-width: 1024px) {
  .group-ex-summary .field {
    width: 49.15254%;
    float: left;
    margin-right: 1.69492%;
  }
  .group-ex-summary .field:nth-child(2n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
}
.node-exercise--full .node--full--video-big {
  border-color: transparent;
}
.node-exercise--full .field--name-field-exercise-steps {
  margin: 0 0 20px;
}
.node-exercise--full .field--name-field-exercise-steps .field-label {
  margin-bottom: 16px;
}
.node-exercise--full .field--name-field-exercise-steps .field-item {
  position: relative;
  overflow: hidden;
}
@media (min-width: 768px) {
  .node-exercise--full .field--name-field-exercise-steps .field-item {
    padding: 0 0 20px;
  }
}
@media (min-width: 1024px) {
  .node-exercise--full .field--name-field-exercise-steps .field-item {
    width: 32.20339%;
    float: left;
    margin-right: 1.69492%;
  }
  .node-exercise--full
    .field--name-field-exercise-steps
    .field-item:nth-child(3n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
}
.node-exercise--full .field--name-field-exercise-steps .exercise-number {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 19px;
  font-size: 1.1875rem;
  display: block;
  position: absolute;
  top: 3px;
  left: 10px;
  z-index: 1;
  color: #f01616;
}
@media (min-width: 768px) {
  .node-exercise--full .field--name-field-exercise-steps .exercise-number {
    top: 5px;
  }
}
.node-exercise--full
  .field--name-field-exercise-steps
  .field--name-field-step-image
  img {
  border: 1px solid #dedede;
  width: 100%;
  height: 100%;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .node-exercise--full
    .field--name-field-exercise-steps
    .field--name-field-step-image
    img {
    width: 183px;
    height: 183px;
    float: left;
    margin: 3px 12px 0 0;
  }
}
.node-exercise--full .field--name-field-exercise-steps .field--type-text-long {
  font-size: 15px;
  font-size: 0.9375rem;
  line-height: 1.66667em;
}
@media (min-width: 768px) {
  .node-exercise--full
    .field--name-field-exercise-steps
    .field--type-text-long {
    font-size: 14px;
    font-size: 0.875rem;
    line-height: 1.42857em;
    padding: 0 0 0 193px;
  }
}
@media (min-width: 1024px) {
  .node-exercise--full
    .field--name-field-exercise-steps
    .field--type-text-long {
    padding: 0;
  }
}
@media (min-width: 1440px) {
  .node-exercise--full
    .field--name-field-exercise-steps
    .field--type-text-long {
    font-size: 15px;
    font-size: 0.9375rem;
    line-height: 1.66667em;
  }
  .has-skin
    .node-exercise--full
    .field--name-field-exercise-steps
    .field--type-text-long {
    font-size: 14px;
    font-size: 0.875rem;
    line-height: 1.42857em;
  }
}
.block--maf-nodes-maf-nodes-exercise-related-items {
  margin-bottom: 20px;
}
.block--maf-nodes-maf-nodes-exercise-related-items
  .field--name-field-related-exercises
  .field-item,
.block--maf-nodes-maf-nodes-exercise-related-items
  .field--name-field-progression
  .field-item {
  padding: 9px 0;
}
@media (min-width: 768px) and (max-width: 1440px) {
  .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-related-exercises
    .field-item,
  .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-progression
    .field-item {
    width: 49.15254%;
    float: left;
    margin-right: 1.69492%;
  }
  .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-related-exercises
    .field-item:nth-child(2n),
  .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-progression
    .field-item:nth-child(2n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
}
@media (min-width: 1440px) {
  .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-related-exercises
    .field-item,
  .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-progression
    .field-item {
    width: 32.20339%;
    float: left;
    margin-right: 1.69492%;
  }
  .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-related-exercises
    .field-item:nth-child(3n),
  .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-progression
    .field-item:nth-child(3n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
  .has-skin
    .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-related-exercises
    .field-item,
  .has-skin
    .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-progression
    .field-item {
    width: 49.15254%;
    float: left;
    margin-right: 1.69492%;
  }
  .has-skin
    .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-related-exercises
    .field-item:nth-child(2n),
  .has-skin
    .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-progression
    .field-item:nth-child(2n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
}
.block--maf-nodes-maf-nodes-exercise-related-items
  .field--name-field-related-workouts
  .field-item {
  margin-bottom: 10px;
}
@media (min-width: 0) and (max-width: 1023px) {
  .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-related-workouts
    .field-item {
    width: 47.36842%;
    float: left;
    margin-right: 5.26316%;
  }
  .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-related-workouts
    .field-item:nth-child(2n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
}
@media (min-width: 1024px) {
  .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-related-workouts
    .field-item {
    width: 32.20339%;
    float: left;
    margin-right: 1.69492%;
  }
  .block--maf-nodes-maf-nodes-exercise-related-items
    .field--name-field-related-workouts
    .field-item:nth-child(3n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
}
.block--maf-nodes-maf-nodes-exercise-related-items
  .field--name-field-related-workouts
  .field-item
  strong {
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 1.21429em;
  font-weight: 400;
  display: block;
}
.block--maf-nodes-maf-nodes-exercise-related-items
  .field--name-field-related-workouts
  .field-item
  img {
  width: 100%;
}
@media (min-width: 0) and (max-width: 767px) {
  .owl-carousel {
    display: block;
  }
}
.ami_slideshow {
  margin: 0 0 15px;
}
.ami_slideshow .owl-carousel {
  display: block;
}
.ami-slideshow-slide {
  text-align: center;
}
.ami-slideshow-container--wrapper {
  position: relative;
}
@media (min-width: 0) and (max-width: 767px) {
  .ami-slideshow-container--wrapper {
    margin: 0 -10px 14px;
  }
}
.ami-slideshow-pin-btn {
  float: right;
  margin: 0 0 -28px;
  position: relative;
  z-index: 1;
  top: 10px;
  right: 10px;
}
.ami-slideshow-slide-meta {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  line-height: 1.6em;
  margin: 0 0 15px;
  text-align: left;
}
@media (min-width: 0) and (max-width: 767px) {
  .ami-slideshow-slide-meta {
    padding-left: 10px;
  }
}
.ami-slideshow-slide-meta .count {
  font-size: 12px;
  font-size: 0.75rem;
  font-weight: 700;
  display: inline-block;
  position: relative;
  margin: 0 10px 0 0;
  top: -2px;
}
.ami-slideshow-slide-meta .count::after {
  content: "|";
  color: #dedede;
  right: -6px;
  position: relative;
}
.ami-slideshow-slide-title {
  font-size: 18px;
  font-size: 1.125rem;
  font-weight: 900;
  color: #f01616;
  text-transform: uppercase;
  display: inline;
}
.ami-slideshow-separate-container {
  position: relative;
}
.container h2 {
    color: #FF2400; /* Scarlet red for attention-grabbing titles */
    font-size: 1.2em; /* Larger font size for headers */
    font-weight: bold; /* Bold for emphasis */
    margin-bottom: 0.5em; /* Space below the header before the paragraph text starts */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Subtle shadow for depth */
    text-transform: uppercase; /* UPPERCASE letters for added impact */
    letter-spacing: 1.5px; /* Slightly more space between letters */
}

.container p {
    color: #D3D3D3; /* Light gray for readability against dark backgrounds */
    font-size: 1em; /* Standard size for paragraph text */
    line-height: 1.6; /* Enhanced line height for better readability */
    margin-top: 0; /* Aligns closely with the bottom of the h2 */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Softer shadow for subtle depth */
    padding: 0 1em; /* Padding on the sides for better text alignment */
}

.ami-slideshow-separate-item {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -webkit-transition: opacity 0.3s;
  -moz-transition: opacity 0.3s;
  -o-transition: opacity 0.3s;
  transition: opacity 0.3s;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
}
.ami-slideshow-separate-item.active {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
  position: relative;
  z-index: 100;
}
.ami-slideshow-slide-photo-credit {
  font-size: 10px;
  font-size: 0.625rem;
  color: #888888;
  text-align: right;
  line-height: 1;
  padding: 0 24px 5px 0;
}
.owl-buttons,
.fake-owl-buttons {
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  margin-top: -41px;
}
@media (min-width: 0) and (max-width: 767px) {
  .owl-buttons,
  .fake-owl-buttons {
    margin-top: -12px;
  }
}
.owl-prev,
.owl-next,
.fake-owl-prev,
.fake-owl-next {
  font: 0/0 serif;
  text-shadow: none;
  color: transparent;
  background: #000;
  background: rgba(0, 0, 0, 0.7);
  border: 6px solid rgba(255, 255, 255, 0.2);
  background-clip: padding-box;
  position: absolute;
  top: 0;
  display: block;
  width: 47px;
  height: 83px;
}
@media (min-width: 1024px) {
  .owl-prev,
  .owl-next,
  .fake-owl-prev,
  .fake-owl-next {
    width: 50px;
  }
}
@media (min-width: 0) and (max-width: 767px) {
  .owl-prev,
  .owl-next,
  .fake-owl-prev,
  .fake-owl-next {
    width: 44px;
    height: 71px;
  }
}
.owl-prev::after,
.owl-next::after,
.fake-owl-prev::after,
.fake-owl-next::after {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=60);
  opacity: 0.6;
  background-repeat: no-repeat;
  background-image: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/sprites/icons/icons.svg);
  display: inline-block;
  content: "";
  top: 21px;
  position: absolute;
}
@media (min-width: 0) and (max-width: 767px) {
  .owl-prev::after,
  .owl-next::after,
  .fake-owl-prev::after,
  .fake-owl-next::after {
    top: 14px;
  }
}
.owl-prev:hover,
.owl-next:hover,
.fake-owl-prev:hover,
.fake-owl-next:hover {
  background: #000;
  border: 6px solid rgba(255, 255, 255, 0.7);
}
.owl-prev:hover::after,
.owl-next:hover::after,
.fake-owl-prev:hover::after,
.fake-owl-next:hover::after {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
}
.owl-prev,
.fake-owl-prev {
  left: 0;
  border-left: 0;
}
.owl-prev::after,
.fake-owl-prev::after {
  width: 21px;
  height: 32px;
  background-position: 0 -32px;
  right: 10px;
}
@media (min-width: 1024px) {
  .owl-prev::after,
  .fake-owl-prev::after {
    right: 13px;
  }
}
.owl-prev.disabled,
.fake-owl-prev.disabled {
  display: none;
}
.owl-prev:hover,
.fake-owl-prev:hover {
  border-left: 0;
}
.owl-next,
.fake-owl-next {
  right: 0;
  border-right: 0;
}
.owl-next::after,
.fake-owl-next::after {
  background-position: 0 0;
  width: 21px;
  height: 32px;
  left: 10px;
}
@media (min-width: 1024px) {
  .owl-next::after,
  .fake-owl-next::after {
    left: 13px;
  }
}
.owl-next:hover,
.fake-owl-next:hover {
  border-right: 0;
}
.b-node-gallery--gnc-link {
  margin: 1.6em 0;
}
.slide-type-netseer {
  height: 100%;
  background: #ccc;
  position: relative;
  overflow: hidden;
}
.slide-type-netseer .ami-slideshow-slide-meta {
  visibility: hidden;
}
.slide-type-netseer .ami-slideshow-slide-netseer-code {
  position: absolute;
  left: 50%;
  top: 50%;
  margin: -140px 0 0 -172px;
}
.netseer-ads-placeholder {
  display: none;
}
.slide-type-slide .netseer_image_banner {
  left: 0 !important;
}
.owl-carousel {
  display: block;
}
.node-photo-gallery
  .ami_slideshow
  .gallery-top-bar
  .gallery-counters
  .count.invisible {
  visibility: hidden;
}
.node-photo-gallery .ami_slideshow .thumb-2,
.node-photo-gallery .ami_slideshow .thumb-5 {
  display: none;
}
.b-newsstand-related--header {
  font-size: 13px;
  font-size: 0.8125rem;
}
@media (min-width: 1024px) {
  .b-newsstand-related--header {
    font-size: 18px;
    font-size: 1.125rem;
  }
}
.b-newsstand-related--list {
  margin: 0 0 12px;
  padding: 0;
  list-style: none;
  width: 48.36842%;
  float: left;
}
@media (min-width: 1024px) {
  .b-newsstand-related--list {
    width: 55.36842%;
  }
}
.b-newsstand-related--list-item {
  margin: 0 0 15px;
}
.b-newsstand-related--list-item:last-child {
  margin: 0;
}
.b-newsstand-related--item-title {
  font-size: 13px;
  font-size: 0.8125rem;
  line-height: 1.30769em;
  display: block;
  margin: 0;
}
.b-newsstand-related--item-title a {
  color: #000;
}
.b-newsstand-related--item-title a:hover {
  color: #f01616;
}
@media (min-width: 1024px) {
  .b-newsstand-related--item-title {
    font-size: 18px;
    font-size: 1.125rem;
  }
}
.b-newsstand-related--item-desc {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 13px;
  font-size: 0.8125rem;
  line-height: 22px;
  color: #666;
  display: none;
}
@media (min-width: 1024px) {
  .b-newsstand-related--item-desc {
    display: block;
  }
}
.b-newsstand-related--buttons {
  border-top: 1px solid #dedede;
  width: 100%;
  clear: both;
  padding: 14px 0 0;
}
.b-newsstand-related--buttons a {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  display: inline-block;
  outline: none;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 12px;
  height: 34px;
  line-height: 34px;
  padding: 0 2em;
  color: #fff;
  border: 0;
  background: #00aeef;
  text-transform: uppercase;
  height: 30px;
  line-height: 30px;
  display: block;
  float: left;
  width: 49%;
  padding: 0;
}
.b-newsstand-related--buttons a:hover {
  text-decoration: none;
  background: #f01616;
}
.b-newsstand-related--buttons a:active {
  color: #fff;
}
@media (min-width: 0) and (max-width: 480px) {
  .b-newsstand-related--buttons a {
    font-size: 10px;
    font-size: 0.625rem;
  }
}
.b-newsstand-related--buttons a:last-child {
  float: right;
}
@media (min-width: 1024px) {
  .b-newsstand-related--buttons {
    width: 55.36842%;
    clear: none;
    overflow: hidden;
  }
}
.b-newsstand-other {
  clear: both;
  overflow: hidden;
}
.b-newsstand-other--list {
  margin: 0;
  padding: 0;
  list-style: none;
}
.b-newsstand-other--title {
  margin: 12px 0 15px;
}
.b-newsstand-other--list-item {
  font-size: 13px;
  font-size: 0.8125rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  line-height: 16px;
  width: 46%;
  float: left;
  margin: 0 8% 15px 0;
  text-align: center;
}
.b-newsstand-other--list-item:nth-child(2n) {
  margin-right: 0;
}
.b-newsstand-other--list-item a {
  color: #000;
}
.b-newsstand-other--list-item a:hover {
  color: #f01616;
}
.b-newsstand-other--list-item img {
  display: block;
  margin: 0 auto 4px;
}
@media (min-width: 1024px) {
  .b-newsstand-other--list-item {
    width: 21.4%;
    margin-right: 4.5%;
    margin-bottom: 20px;
  }
  .b-newsstand-other--list-item:nth-child(2n) {
    margin-right: 4.5%;
  }
  .b-newsstand-other--list-item:nth-child(4n) {
    margin-right: 0;
  }
}
.node-type-newsstand .l-content--inner {
  position: relative;
}
.node-type-newsstand .node-full--header {
  border-bottom: 1px solid #dedede;
  margin: 15px 0 5px;
}
@media (min-width: 1024px) {
  .node-type-newsstand .node-full--header {
    margin: 0 0 10px;
  }
}
.node-type-newsstand .node--full--content {
  width: 42%;
  float: right;
}
@media (min-width: 1024px) {
  .node-type-newsstand .node--full--content {
    text-align: right;
  }
  .node-type-newsstand .node--full--content img {
    max-width: 100%;
    width: inherit;
    margin: 10px 0 0;
  }
}
.node-type-newsstand .node__links {
  display: none;
}
@media (min-width: 0) and (max-width: 479px) {
  .node-type-recipe .b-node--image-overlay {
    background: #4c4c4c;
    color: #fff;
    margin: 0;
    padding: 12px 10px;
  }
}
@media (min-width: 480px) and (max-width: 767px) {
  .node-type-recipe .b-node--image-overlay {
    padding: 12px 0;
  }
}
@media (min-width: 768px) {
  .node-type-recipe .b-node--image-overlay {
    padding-left: 0;
  }
}
.node-type-recipe .b-node--image-overlay--items {
  width: auto;
  margin-right: 3.5%;
}
@media (min-width: 0) and (max-width: 479px) {
  .node-type-recipe .b-node--image-overlay--items {
    border: 0;
    text-align: left;
    padding: 0;
    margin-right: 5px;
  }
  .node-type-recipe
    .b-node--image-overlay--items
    .b-node--image-overlay--label {
    font-size: 9px;
    font-size: 0.5625rem;
    position: static;
    color: #fff200;
    font-weight: 900;
    text-transform: uppercase;
  }
  .node-type-recipe
    .b-node--image-overlay--items
    .b-node--image-overlay--value {
    font-size: 20px;
    font-size: 1.25rem;
    font-weight: 200;
    text-transform: none;
  }
}
@media (min-width: 480px) and (max-width: 767px) {
  .node-type-recipe
    .b-node--image-overlay--items
    .b-node--image-overlay--label {
    font-size: 9px;
    font-size: 0.5625rem;
    font-weight: 900;
    margin: 0;
  }
  .node-type-recipe
    .b-node--image-overlay--items
    .b-node--image-overlay--value {
    font-size: 30px;
    font-size: 1.875rem;
    font-weight: 200;
    text-transform: none;
  }
}
@media (min-width: 768px) {
  .node-type-recipe .b-node--image-overlay--items:last-child {
    margin-right: 0;
  }
  .node-type-recipe
    .b-node--image-overlay--items
    .b-node--image-overlay--value {
    font-size: 28px;
    font-size: 1.75rem;
    text-transform: none;
  }
}
@media (min-width: 1024px) {
  .node-type-recipe
    .b-node--image-overlay--items
    .b-node--image-overlay--value {
    font-size: 36px;
    font-size: 2.25rem;
  }
}
@media (min-width: 1440px) {
  .node-type-recipe
    .b-node--image-overlay--items
    .b-node--image-overlay--value {
    font-size: 60px;
    font-size: 3.75rem;
    line-height: 1;
    margin-bottom: 10px;
  }
  .has-skin
    .node-type-recipe
    .b-node--image-overlay--items
    .b-node--image-overlay--value {
    font-size: 30px;
    font-size: 1.875rem;
    margin-bottom: 0;
    line-height: inherit;
  }
}
.node-type-recipe .b-node--full-body-content {
  overflow: hidden;
}
.node-type-recipe .field--name-field-directions .field-label {
  color: #f01616;
}
.node-type-recipe .field--name-field-directions .field-item {
  margin: 0 0 5px;
}
@media (min-width: 480px) {
  .block--maf-nodes-maf-nodes-recipe-yellow-box {
    float: right;
    width: 300px;
    margin: 0 0 0 5px;
  }
  .b-content-placed-wrapper--centered
    .block--maf-nodes-maf-nodes-recipe-yellow-box {
    float: none;
    margin: 0 auto 20px;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .block--maf-nodes-maf-nodes-recipe-yellow-box {
    width: 188px;
  }
  .block--maf-nodes-maf-nodes-recipe-yellow-box
    .b-content-placed
    .b-content-placed--title {
    font-size: 15px;
    font-size: 0.9375rem;
    line-height: 17px;
  }
  .block--maf-nodes-maf-nodes-recipe-yellow-box
    .b-content-placed
    .b-content-placed--subtitle {
    font-size: 9px;
    font-size: 0.5625rem;
    line-height: 14px;
  }
  .block--maf-nodes-maf-nodes-recipe-yellow-box
    .b-content-placed
    .b-content-placed--list-item {
    font-size: 11px;
    font-size: 0.6875rem;
    line-height: 15px;
    padding-bottom: 10px;
  }
  .block--maf-nodes-maf-nodes-recipe-yellow-box
    .b-content-placed
    .b-content-placed-list-title {
    font-size: 9px;
    font-size: 0.5625rem;
    line-height: 22px;
  }
}
.block--maf-nodes-maf-nodes-recipe-yellow-box .recipe-prep-time,
.block--maf-nodes-maf-nodes-recipe-yellow-box .recipe-cook-time {
  letter-spacing: -0.5px;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .block--maf-nodes-maf-nodes-recipe-yellow-box .recipe-prep-time,
  .block--maf-nodes-maf-nodes-recipe-yellow-box .recipe-cook-time {
    font-size: 7px;
    font-size: 0.4375rem;
    letter-spacing: 0;
  }
}
.block--maf-nodes-maf-nodes-recipe-yellow-box .b-content-placed--item-quantity {
  font-weight: 700;
}
.page-node.node-type-sponsorship-one .l-main {
  border-top: 0;
  padding-top: 0;
}
.node-type-sponsorship-one .node-full--header {
  border: 0;
  margin: 0;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .node-type-sponsorship-one .l-region--top-main {
    padding-right: 350px;
  }
  .node-type-sponsorship-one .sidebar-wrapper-sticky {
    margin-top: -55px !important;
  }
  .node-type-sponsorship-one
    #block-maf-sponsorship-one-maf-sponsorship-one-parts {
    padding-top: 10px;
  }
  .node-type-sponsorship-one .node--big-teaser--title {
    font-size: 22px;
    font-size: 1.375rem;
    line-height: 25px;
    max-height: 50px;
  }
  .node-type-sponsorship-one .node--big-teaser--content .field {
    font-size: 11px;
    font-size: 0.6875rem;
    max-height: 17px;
  }
  .node-type-sponsorship-one .node--big-teaser--channel-link {
    display: none;
  }
}
.b-sponsorship-nav {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
  font-size: 13px;
  font-size: 0.8125rem;
  line-height: 1.30769em;
  text-align: center;
  text-transform: uppercase;
}
.b-sponsorship-nav.desktop-hidden {
  text-align: left;
  margin: 0;
}
.b-sponsorship-nav a {
  color: #000;
  padding: 0 30px;
  border-right: 1px solid #e5e5e5;
  display: inline-block;
  height: 11px;
  line-height: 9px;
}
.b-sponsorship-nav a:hover {
  color: #f01616;
}
.b-sponsorship-nav a.active {
  color: #f01616;
  cursor: default;
}
.b-sponsorship-nav .links {
  list-style-type: none;
}
.b-sponsorship-nav .links,
.b-sponsorship-nav .links li {
  margin: 0px;
  padding: 0px;
  display: inline;
}
.b-sponsorship-nav .links .last a {
  padding-right: 0;
  border-right: 0;
}
.b-sponsorship-one-html {
  margin: 20px 0;
  overflow: hidden;
  width: 100%;
  clear: both;
}
.node--full--video-big {
  margin: 0 -10px 20px;
  position: relative;
}
@media (min-width: 768px) {
  .node--full--video-big {
    margin-left: -24px;
    margin-right: -362px;
    padding-right: 326px;
    border-right: 12px solid #f01616;
  }
}
.node--full--video-big .video--wrapper {
  width: 100%;
  position: relative;
  padding: 56.60203% 0 0;
}
.node--full--video-big .ami-aol-player {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/ajax-loader.gif)
    50% 50% no-repeat;
}
.node--full--video-big .ami-aol-player,
.node--full--video-big .fmvps-wrapper,
.node--full--video-big .fmvps-limited-mode,
.node--full--video-big video,
.node--full--video-big object,
.node--full--video-big #adaptvDiv0 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100% !important;
  height: 100%;
}
.node-type-workout-program .l-main.l-main,
.node-type-workout-program .node-full--header {
  border-top: 0;
}
.node-type-workout-program .b-node-full-section {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
}
@media (min-width: 768px) {
  .node-type-workout-program .node--big-teaser--image-big {
    border-right: 12px solid #f01616;
  }
}
@media (min-width: 0) and (max-width: 519px) {
  .node-type-workout-program .node--big-teaser--image-big {
    overflow: hidden;
  }
  .node-type-workout-program .node--big-teaser--image-big img {
    height: 180px;
    max-width: none;
    width: auto;
    position: relative;
    left: 50%;
    margin: 0 0 0 -259px;
  }
}
.node-type-workout-program .b-nod-full-subtitle {
  margin-bottom: 0;
  padding: 0 90px 0 0;
}
@media (min-width: 1024px) {
  .node-type-workout-program .b-nod-full-subtitle {
    padding: 0 200px 0 0;
  }
}
.node-type-workout-program .b-recommended--incontent {
  width: 100%;
}
@media (min-width: 1024px) {
  .node-type-workout-program .b-recommended--incontent {
    width: 295px;
    margin: 0 0 18px 12px;
  }
}
.node-type-workout-program .b-workout-day-summary-info {
  border-top: 1px solid #dedede;
  clear: both;
  margin: 0 0 4px;
}
@media (min-width: 768px) {
  .node-type-workout-program .b-workout-day-summary-info {
    text-align: left;
  }
  .node-type-workout-program
    .b-workout-day-summary-info
    .b-workout-day-summary--items {
    width: 17.33%;
  }
}
@media (min-width: 1024px) {
  .node-type-workout-program
    .b-workout-day-summary-info
    .b-workout-day-summary--items {
    width: 11.33%;
  }
}
.node-type-workout-program .b-workout-part--item {
  width: 100%;
}
.node-type-workout-program .pager {
  border: 0;
  margin: 20px 0;
}
@media (min-width: 0) and (max-width: 767px) {
  .node-type-workout-program .block--maf-gigya-maf-gigya-sharebar {
    border-top: 1px solid #dedede;
    clear: both;
    padding: 20px 0 0;
  }
}
.block--maf-workout-program {
  position: relative;
}
.b-workout-program-top {
  position: relative;
  margin: 0 0 0 -10px;
}
.b-workout-program-summary {
  position: absolute;
  top: 60px;
  left: 25px;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 13px;
  font-size: 0.8125rem;
  line-height: 22px;
  color: #fff;
  text-transform: uppercase;
  max-width: 215px;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .b-workout-program-summary {
    top: 47px;
    font-size: 11px;
    font-size: 0.6875rem;
    line-height: 22px;
    max-width: 220px;
  }
}
.b-workout-program-summary a {
  color: #fff;
}
.b-workout-program-summary strong {
  color: #fff200;
}
.b-workout-program-summary.el-attached {
  border-top: 1px solid #dedede;
  border-bottom: 1px solid #dedede;
  position: static;
  color: #000;
  max-width: none;
  padding: 16px 0;
  margin: 0 0 15px;
}
.b-workout-program-summary.el-attached a {
  color: #000;
}
.b-workout-program-summary.el-attached strong {
  color: #666;
}
.b-workout-program-header {
  right: 0;
  padding: 17px 10px 14px;
  width: auto;
}
@media (min-width: 768px) {
  .b-workout-program-header {
    right: 338px;
    padding: 24px 23px 19px;
  }
}
@media (min-width: 1024px) {
  .b-workout-program-header {
    min-height: 125px;
  }
}
.b-workout-program-header .page-title {
  line-height: 36px;
  color: #fff;
  display: block;
  overflow: hidden;
  max-height: 40px;
}
@media (min-width: 0) and (max-width: 767px) {
  .b-workout-program-header .page-title {
    font-size: 16px;
    font-size: 1rem;
    line-height: 20px;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .b-workout-program-header .page-title {
    font-size: 22px;
    font-size: 1.375rem;
    line-height: 25px;
    display: block;
    overflow: hidden;
    max-height: 50px;
  }
}
@media (min-width: 1024px) {
  .b-workout-program-header .page-title {
    display: block;
    overflow: hidden;
    max-height: 108px;
    padding-right: 90px;
  }
}
.b-workout-program-header .page-title a,
.b-workout-program-header .page-title a.active {
  color: #fff;
}
.b-program-sponsored {
  width: 80px;
  margin: 24px 10px 0 0;
}
@media (min-width: 1024px) {
  .b-program-sponsored {
    margin: 0;
    position: absolute;
    bottom: 40px;
    right: 0px;
  }
}
.b-program-sponsored.el-attached {
  margin-top: 5px;
  margin-bottom: 18px;
}
.b-program-sponsored .b-label {
  font-size: 11px;
  font-size: 0.6875rem;
  line-height: 15px;
  color: #666;
  margin: 0 0 5px;
  text-align: right;
}
@media (min-width: 1024px) {
  .b-program-sponsored .b-label {
    color: #fff;
  }
}
.b-workout-program-subheader .start-button,
.b-start-button--bottom .start-button {
  margin: 20px auto;
  width: 194px;
  display: block;
}
.b-workout-program-subheader {
  padding: 20px 10px 0 0;
  position: relative;
}
@media (min-width: 1024px) {
  .b-workout-program-subheader {
    padding-bottom: 25px;
    min-height: 98px;
  }
}
@media (min-width: 0) and (max-width: 767px) {
  .b-workout-program-subheader .start-button {
    clear: both;
  }
}
@media (min-width: 1024px) {
  .b-workout-program-subheader .start-button {
    position: absolute;
    top: 27px;
    right: 0;
    margin: 0;
  }
}
.b-wrokout-program-phases {
  clear: both;
}
@media (min-width: 1024px) {
  .b-wrokout-program-phases {
    padding: 0 0 0 67px;
  }
}
.phase-title {
  border-bottom: 1px solid #dedede;
  padding: 0 0 15px;
  margin: 0 0 6px;
}
.phase-subtitle {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 17px;
  font-size: 1.0625rem;
  display: block;
  text-transform: none;
  color: #000;
}
.phase-week {
  margin: 0 0 7px;
}
.phase-week-header {
  color: #000;
  margin: 0 0 14px;
}
.phase-week-header .week-subtitle {
  font-weight: 400;
  text-transform: none;
  display: block;
}
.phase-week-days {
  overflow: hidden;
}
.phase-week-day {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  background: #000;
  color: #fff;
  display: block;
  padding: 7px 10px 10px;
  margin: 0 0 10px;
  text-transform: uppercase;
  overflow: hidden;
}
@media (min-width: 1024px) {
  .phase-week-day {
    float: left;
    width: 13.333%;
    margin-right: 1.1041%;
    height: 149px;
    position: relative;
  }
  .phase-week-day:last-child {
    margin-right: 0;
  }
}
.phase-week-day .day-title,
.phase-week-day .day-subtitle {
  display: block;
  float: left;
}
@media (min-width: 1024px) {
  .phase-week-day .day-title,
  .phase-week-day .day-subtitle {
    float: none;
    text-align: center;
  }
}
.phase-week-day .day-title {
  font-size: 20px;
  font-size: 1.25rem;
  font-weight: 900;
  position: relative;
  margin: 0 0 20px;
  line-height: 23px;
}
.phase-week-day .day-title:after {
  content: "";
  height: 1px;
  width: 26px;
  background: #fff;
  bottom: -10px;
  left: 0;
  position: absolute;
}
@media (min-width: 1024px) {
  .phase-week-day .day-title:after {
    left: 50%;
    margin: 0 0 0 -13px;
  }
}
.phase-week-day .day-subtitle {
  font-size: 10px;
  font-size: 0.625rem;
  clear: left;
  line-height: 14px;
}
@media (min-width: 1024px) {
  .phase-week-day .day-subtitle {
    margin: 0 -7px;
  }
}
.phase-week-day .day-link {
  float: right;
  margin: -30px 0 0;
}
@media (min-width: 1024px) {
  .phase-week-day .day-link {
    position: absolute;
    bottom: 10px;
    left: 50%;
    margin: 0 0 0 -28px;
  }
}
.phase-week-day .day-link a {
  font-size: 11px;
  font-size: 0.6875rem;
  height: 20px;
  line-height: 20px;
  width: 56px;
  padding: 0 0 0 5px;
  position: relative;
  text-align: left;
}
.phase-week-day .day-link a:after {
  border-color: transparent transparent transparent #000;
  border-style: solid;
  border-width: 4px 0 4px 4px;
  height: 0;
  width: 0;
  content: "";
  position: absolute;
  right: 5px;
  top: 6px;
}
.b-workout-program-day-exercises {
  margin: 0 0 16px;
}
.b-workout-program-days-nenu {
  clear: both;
  padding: 20px 0;
}
@media (min-width: 0) and (max-width: 1023px) {
  .b-workout-program-days-nenu {
    border-bottom: 1px solid #dedede;
    margin: 0 10px 16px 0;
  }
}
.b-workout-program-day-title {
  font-size: 23px;
  font-size: 1.4375rem;
  line-height: 26px;
  color: #000;
  margin: 0 0 18px;
}
.b-workout-program-day-title span {
  text-transform: none;
}
.node--teaser--image-big,
.node--big-teaser--image-big,
.node--full--image-big,
.node--teaser--image-big {
  margin: 0;
  line-height: 0;
}
.node--teaser--channel-link,
.node--teaser--channel-link,
.node--big-teaser--channel-link {
  text-transform: uppercase;
  display: block;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
  line-height: 1;
  letter-spacing: 0.03rem;
}
.node--teaser--channel-link a,
.node--teaser--channel-link a,
.node--big-teaser--channel-link a {
  color: #f01616;
}
.node--teaser--channel-link a:hover,
.node--teaser--channel-link a:hover,
.node--big-teaser--channel-link a:hover {
  color: #000;
}
.node--teaser .node__links,
.node--teaser--content .field,
.node--big-teaser--content .field,
.b-node-full-author,
#block-maf-nodes-maf-nodes-next-prev {
  display: none;
}
.node--teaser {
  margin: 0 0 16px;
  overflow: hidden;
  position: relative;
  clear: both;
}
@media (min-width: 768px) {
  .node--teaser {
    border-bottom: 1px solid #e5e5e5;
    padding: 0 0 20px;
    margin: 0 0 20px;
  }
}
.node--teaser .node-readmore {
  position: absolute;
  bottom: 20px;
  right: 0;
  margin: 0;
}
.node--teaser .node-readmore a {
  padding: 0;
  min-width: 83px;
}
.node--teaser--image-big {
  width: 140px;
  margin-right: 12px;
}
@media (min-width: 480px) and (max-width: 768px) {
  .node--teaser--image-big {
    width: 280px;
  }
}
@media (min-width: 768px) and (max-width: 1024px) {
  .node--teaser--image-big {
    width: 189px;
  }
}
.node--teaser--title {
  font-size: 13px;
  font-size: 0.8125rem;
  line-height: 17px;
  display: block;
}
.node--teaser--title a:hover {
  color: #f01616;
}
@media (min-width: 480px) and (max-width: 768px) {
  .node--teaser--title {
    font-size: 16px;
    font-size: 1rem;
    line-height: 19px;
  }
}
@media (min-width: 768px) and (max-width: 1024px) {
  .node--teaser--title {
    font-size: 16px;
    font-size: 1rem;
    line-height: 19px;
  }
}
.node--teaser--channel-link {
  font-size: 10px;
  font-size: 0.625rem;
  margin: 0 0 1px;
}
@media (min-width: 0) and (max-width: 480px) {
  .node--teaser--channel-link {
    line-height: 1.3em;
  }
}
.l-page--sweeps .node--teaser--channel-link {
  display: none;
}
@media (min-width: 1024px) {
  .node--teaser .node__links {
    display: block;
  }
  .node--teaser--image-big {
    width: 280px;
    margin-right: 17px;
  }
  .node--teaser--content .field {
    display: block;
    font-size: 13px;
    font-size: 0.8125rem;
    font-family: "Polaris", Helvetica, Arial, sans-serif;
    font-weight: 400;
    font-style: normal;
    line-height: 17px;
    display: block;
    overflow: hidden;
    max-height: 34px;
    color: #666;
  }
  .node--teaser--title {
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 24px;
    display: block;
    overflow: hidden;
    max-height: 48px;
  }
  .node--teaser--channel-link {
    font-size: 12px;
    font-size: 0.75rem;
    margin: 0 0 5px;
  }
  .node--teaser--channel-link a:hover {
    color: #000;
  }
}
@media (min-width: 1024px) and (min-width: 1440px) {
  .node--teaser--content .field {
    font-size: 16px;
    font-size: 1rem;
    line-height: 20px;
    display: block;
    overflow: hidden;
    max-height: 40px;
  }
  .has-skin .node--teaser--content .field {
    font-size: 13px;
    font-size: 0.8125rem;
    line-height: 17px;
    display: block;
    overflow: hidden;
    max-height: 34px;
  }
}
@media (min-width: 1024px) and (min-width: 1440px) {
  .node--teaser--title {
    font-size: 26px;
    font-size: 1.625rem;
    line-height: 32px;
    display: block;
    overflow: hidden;
    max-height: 64px;
  }
  .has-skin .node--teaser--title {
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 24px;
    display: block;
    overflow: hidden;
    max-height: 48px;
  }
}
@media (min-width: 1024px) and (min-width: 1440px) {
  .node--teaser--channel-link {
    font-size: 13px;
    font-size: 0.8125rem;
  }
  .has-skin .node--teaser--channel-link {
    font-size: 12px;
    font-size: 0.75rem;
  }
}
.node--big-teaser {
  position: relative;
  margin: 0 -10px 12px;
}
.node--big-teaser--content .field {
  font-size: 13px;
  font-size: 0.8125rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 600;
  font-style: normal;
  line-height: 17px;
  color: #fff;
}
.node--big-teaser--title {
  font-size: 16px;
  font-size: 1rem;
  color: #fff;
  margin: 4px 10px 10px;
  line-height: 20px;
  display: block;
  overflow: hidden;
  max-height: 40px;
}
.node--big-teaser--title a:hover {
  color: #f01616;
}
.node--big-teaser--channel-link {
  font-size: 10px;
  font-size: 0.625rem;
  margin: 10px 10px 0;
}
.node--big-teaser--channel-link a:hover {
  color: #fff;
}
@media (min-width: 768px) {
  .node--big-teaser {
    margin: 0 0 20px;
  }
  .node--big-teaser--content .field {
    display: block;
    overflow: hidden;
    max-height: 34px;
    margin: 0 16px 12px;
  }
  .node--big-teaser--title {
    font-size: 22px;
    font-size: 1.375rem;
    line-height: 27px;
    display: block;
    overflow: hidden;
    max-height: 54px;
    margin: 6px 16px 5px;
  }
  .node--big-teaser--channel-link {
    font-size: 12px;
    font-size: 0.75rem;
    margin: 19px 16px 0;
  }
}
@media (min-width: 768px) and (min-width: 1440px) {
  .node--big-teaser--content .field {
    font-size: 16px;
    font-size: 1rem;
    line-height: 20px;
    display: block;
    overflow: hidden;
    max-height: 40px;
  }
  .has-skin .node--big-teaser--content .field {
    font-size: 13px;
    font-size: 0.8125rem;
    line-height: 17px;
    display: block;
    overflow: hidden;
    max-height: 34px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .node--big-teaser--title {
    font-size: 30px;
    font-size: 1.875rem;
    line-height: 38px;
    display: block;
    overflow: hidden;
    max-height: 76px;
  }
}
@media (min-width: 768px) and (min-width: 1440px) {
  .node--big-teaser--title {
    font-size: 34px;
    font-size: 2.125rem;
  }
  .has-skin .node--big-teaser--title {
    font-size: 30px;
    font-size: 1.875rem;
  }
}
@media (min-width: 768px) and (min-width: 1440px) {
  .node--big-teaser--channel-link {
    font-size: 13px;
    font-size: 0.8125rem;
  }
  .has-skin .node--big-teaser--channel-link {
    font-size: 12px;
    font-size: 0.75rem;
  }
}
@media (min-width: 768px) {
  .page-node .l-main {
    border-top: 1px solid #dedede;
    padding-top: 12px;
  }
}
.node-full--header {
  border-top: 1px solid #dedede;
  margin: 10px -10px 0;
  padding-left: 10px;
}
@media (min-width: 768px) {
  .node-full--header {
    border-top: 0;
    margin: -12px 0 0 -24px;
    padding-left: 24px;
  }
}
.b-node-full-section {
  font-size: 11px;
  font-size: 0.6875rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  background: #fff200;
  display: inline-block;
  line-height: 28px;
  padding: 0 10px;
  text-transform: uppercase;
  margin: 0 0 16px;
  position: relative;
  top: -2px;
  left: -10px;
}
@media (min-width: 768px) {
  .b-node-full-section {
    padding-left: 24px;
    left: -24px;
  }
}
.b-node-full-section .nodes-channel {
  color: #000;
  display: block;
}
.b-node-full-section .nodes-channel:hover {
  color: #f01616;
}
.b-node-full-title {
  font-size: 23px;
  font-size: 1.4375rem;
  line-height: 26px;
  margin-bottom: 14px;
}
@media (min-width: 768px) {
  .b-node-full-title {
    font-size: 23px;
    font-size: 1.4375rem;
    line-height: 26px;
  }
}
@media (min-width: 1024px) {
  .b-node-full-title {
    font-size: 35px;
    font-size: 2.1875rem;
    line-height: 39px;
  }
}
.b-nod-full-subtitle {
  font-size: 14px;
  font-size: 0.875rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 600;
  font-style: normal;
  line-height: 19px;
  margin: 0 0 20px;
  text-transform: none;
}
@media (min-width: 1024px) {
  .b-nod-full-subtitle {
    font-size: 18px;
    font-size: 1.125rem;
    line-height: 22px;
  }
}
.mafh-page .b-node-full-author {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/mafh_logo.png)
    right center no-repeat;
  display: block;
  min-height: 50px;
}
@media (min-width: 0) and (max-width: 767px) {
  .mafh-page .b-node-full-author {
    background: transparent;
  }
}
@media (min-width: 0) and (max-width: 767px) {
  .mafh-page .node-full--header {
    background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/mafh_logo.png)
      right top no-repeat;
    display: block;
    min-height: 50px;
  }
}
.b-node-full-author {
  font-size: 11px;
  font-size: 0.6875rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  border: 1px solid #dedede;
  border-right: 0;
  border-left: 0;
  overflow: hidden;
  line-height: 50px;
  text-transform: uppercase;
  margin: 20px 0;
}
.el-attached .b-node-full-author {
  display: block;
}
.b-node-full-author img {
  float: left;
  margin: 0 10px 0 0;
}
.b-node-full-author .b-node-full-author--twitter-link {
  display: inline-block;
  position: relative;
  left: 18px;
}
.b-node-full-author .b-node-full-author--twitter-link .svg-icon {
  margin-bottom: -2px;
}
.b-node-full-author .b-node-full-author--twitter-link:before {
  content: "|";
  color: #e7e7e7;
  position: absolute;
  top: 0;
  left: -12px;
}
@media (min-width: 768px) {
  .b-node-full-author {
    display: block;
    margin: 0 0 20px;
  }
}
.node-author-twitter-link {
  font-size: 12px;
  font-size: 0.75rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  text-transform: none;
  color: #000;
}
.node-author-twitter-link:hover {
  color: #09c;
}
@media (min-width: 768px) {
  #block-maf-nodes-maf-nodes-next-prev {
    display: block;
    position: absolute;
    left: 0;
    right: 0;
    z-index: 1;
  }
}
.node-story-nav--link {
  background: #000;
  border: 3px solid rgba(255, 255, 255, 0.8);
  background-clip: padding-box;
  position: absolute;
  bottom: -168px;
  display: block;
  overflow: hidden;
  width: 0;
  padding-left: 28px;
  -webkit-transition: width 0.5s;
  -moz-transition: width 0.5s;
  -o-transition: width 0.5s;
  transition: width 0.5s;
}
.node-story-nav--link:after,
.node-story-nav--link:before {
  content: "";
  display: block;
  border-color: transparent #000 transparent transparent;
  border-width: 7px;
  left: 6px;
  top: 42px;
  border-style: solid;
  height: 0;
  width: 0;
  position: absolute;
}
.node-story-nav--link:before {
  border-color: transparent #fff transparent transparent;
  border-width: 15px;
  left: -10px;
  top: 34px;
}
.node-story-nav--link .node-story-nav--link--inner {
  display: block;
  width: 439px;
  height: 98px;
  padding: 9px 9px 9px 0;
  overflow: hidden;
}
.node-story-nav--link:hover {
  width: 469px;
}
.node-story-nav--link--prev {
  -webkit-border-radius: 0 2px 2px 0;
  -moz-border-radius: 0 2px 2px 0;
  -ms-border-radius: 0 2px 2px 0;
  -o-border-radius: 0 2px 2px 0;
  border-radius: 0 2px 2px 0;
  left: -24px;
  border-left: 0;
}
.node-story-nav--link--next {
  -webkit-border-radius: 2px 0 0 2px;
  -moz-border-radius: 2px 0 0 2px;
  -ms-border-radius: 2px 0 0 2px;
  -o-border-radius: 2px 0 0 2px;
  border-radius: 2px 0 0 2px;
  right: -12px;
  border-right: 0;
}
.node-story-nav--link--next:before {
  border-color: transparent transparent transparent #fff;
  right: -9px;
  left: auto;
}
.node-story-nav--link--next:after {
  border-color: transparent transparent transparent #000;
  right: 7px;
  left: auto;
}
.node-story-nav--link--next:hover .node-story-nav--link--inner {
  margin-left: -19px;
}
.node-story-nav--image {
  display: block;
  float: left;
  width: 140px;
  height: 80px;
  margin: 0 10px 0 0;
}
.node-story-nav--title {
  font-size: 14px;
  font-size: 0.875rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  line-height: 20px;
  color: #afafaf;
  text-transform: uppercase;
  display: block;
  overflow: hidden;
  max-height: 78px;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
}
.node-story-nav--title:hover {
  color: #fff;
}
.node-story-nav--title--summary {
  font-size: 11px;
  font-size: 0.6875rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
  color: #fff;
  display: block;
  line-height: 1;
  margin: 0 0 8px;
}
.node-story-nav--title--summary:hover {
  color: #f01616;
}
.node--full--image-big {
  margin: 0 -10px 20px;
  position: relative;
  text-align: center;
  overflow: hidden;
}
@media (min-width: 768px) {
  .node--full--image-big {
    margin-left: -24px;
    margin-right: -362px;
    padding-right: 326px;
    border-right: 12px solid #f01616;
  }
}
.node--full--image-big .content,
.node--full--image-big .field--name-field-form-image .field__item.even {
  width: 100%;
  position: relative;
  padding: 56.33028% 0 0;
}
.node--full--image-big img {
  position: absolute;
  top: 0;
  left: 0;
  max-width: none;
  height: 100%;
}
.node--full--image-big img.node-img--portrait {
  left: auto;
}
@media (min-width: 768px) {
  .node-type-webform .node--full--image-big {
    margin-bottom: 75px;
  }
}
.node--full--content .field--name-body,
.node--full--content .ami-slideshow-slide-description {
  line-height: 1.6em;
}
.node--full--content .field--name-body p,
.node--full--content .ami-slideshow-slide-description p {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  margin-bottom: 1.6em;
}
.b-node-full-topics {
  font-size: 11px;
  font-size: 0.6875rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  border: 1px solid #dedede;
  border-right: 0;
  border-left: 0;
  overflow: hidden;
  line-height: 20px;
  text-transform: uppercase;
  margin: 0 0 20px;
  padding: 10px 0;
}
.b-node-full-topics--field-label {
  display: inline-block;
  margin: 0 5px 0 0;
}
.b-node-full-topics--list {
  margin: 0;
  padding: 0;
  display: inline;
}
.b-node-full-topics--list-item {
  list-style: none;
  display: inline-block;
  padding: 0 8px 0 0;
  margin: 0;
}
.b-sponsored-header--image {
  padding: 0 10px 12px;
  display: none;
}
@media (min-width: 768px) {
  .b-sponsored-header--image {
    padding-left: 24px;
  }
}
@media (min-width: 768px) {
  .b-sponsored-header--desktop-image {
    display: block;
  }
}
@media (min-width: 0) and (max-width: 767px) {
  .b-sponsored-header--mobile-image {
    display: block;
  }
}
.b-node-relate-article {
  font-size: 18px;
  font-size: 1.125rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 900;
  font-style: normal;
  line-height: 20px;
  border-top: 1px solid #dedede;
  border-bottom: 1px solid #dedede;
  overflow: hidden;
  display: block;
  width: 100%;
  clear: both;
  padding: 20px 0;
  margin: 20px 0;
  text-transform: uppercase;
}
@media (min-width: 768px) and (max-width: 1024px) {
  .b-node-relate-article {
    font-size: 13px;
    font-size: 0.8125rem;
    line-height: 18px;
  }
}
.b-node-relate-article a {
  color: #000;
}
.b-node-relate-article a:hover {
  color: #f01616;
}
.b-node-relate-article img {
  width: 190px;
  float: left;
  margin: 0 12px 0 0;
}
@media (min-width: 480px) and (max-width: 767px) {
  .b-node-relate-article img {
    width: 368px;
  }
}
@media (min-width: 1440px) {
  .b-node-relate-article img {
    width: 288px;
  }
  .has-skin .b-node-relate-article img {
    width: 190px;
  }
}
.b-node--image-overlay {
  border-bottom: 1px solid #dedede;
  text-align: center;
  padding: 16px 0;
  margin: 0 10px;
  line-height: normal;
  color: #666;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
}
@media (min-width: 480px) {
  .b-node--image-overlay {
    background: #000;
    background: rgba(0, 0, 0, 0.5);
    position: absolute;
    bottom: 0;
    left: 0;
    margin: 0;
    width: 100%;
    border: 0;
    color: #fff;
  }
}
@media (min-width: 768px) {
  .b-node--image-overlay {
    padding: 14px 326px 12px 0;
  }
}
@media (min-width: 1024px) {
  .b-node--image-overlay {
    padding-top: 18px;
  }
}
.b-node--image-overlay--items {
  display: inline-block;
  width: 27.33%;
  border-left: 1px solid #f4f4f4;
  border-right: 1px solid #f4f4f4;
  position: relative;
  padding: 0 0 15px;
  text-align: center;
}
.b-node--image-overlay--items:last-child,
.b-node--image-overlay--items:first-child {
  border: 0;
}
@media (min-width: 480px) {
  .b-node--image-overlay--items {
    text-align: left;
    border: 0;
    padding: 0;
  }
}
@media (min-width: 1024px) and (max-width: 1440px) {
  .b-node--image-overlay--items {
    width: 32.33%;
  }
}
@media (min-width: 1440px) {
  .has-skin .b-node--image-overlay--items {
    width: 32.33%;
  }
}
.b-node--image-overlay--label,
.b-node--image-overlay--value {
  display: block;
}
.b-node--image-overlay--label {
  font-size: 10px;
  font-size: 0.625rem;
  font-weight: 600;
  text-transform: lowercase;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
}
@media (min-width: 480px) {
  .b-node--image-overlay--label {
    font-size: 8px;
    font-size: 0.5rem;
    font-weight: 700;
    position: static;
    color: #ebdf05;
    text-transform: uppercase;
    margin-bottom: 10px;
  }
}
@media (min-width: 1024px) {
  .b-node--image-overlay--label {
    font-size: 13px;
    font-size: 0.8125rem;
  }
}
.b-node--image-overlay--value {
  font-family: "Polaris Condensed", Helvetica, Arial, sans-serif;
  font-weight: 200;
  font-style: normal;
  font-size: 20px;
  font-size: 1.25rem;
}
@media (min-width: 480px) {
  .b-node--image-overlay--value {
    font-size: 31px;
    font-size: 1.9375rem;
    text-transform: uppercase;
  }
}
@media (min-width: 1024px) {
  .b-node--image-overlay--value {
    font-size: 55px;
    font-size: 3.4375rem;
  }
}
.b-node--image-overlay-workouts-equipment--yes,
.b-node--image-overlay-workouts-equipment--x {
  color: transparent;
}
.b-node--image-overlay-workouts-equipment--yes {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/large_y.svg)
    0 50% no-repeat;
  background-size: 35px;
}
@media (min-width: 0) and (max-width: 479px) {
  .b-node--image-overlay-workouts-equipment--yes {
    background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/y.svg)
      50% 50% no-repeat;
  }
}
@media (min-width: 480px) and (max-width: 1023px) {
  .b-node--image-overlay-workouts-equipment--yes {
    background-size: 20px;
  }
}
.b-node--image-overlay-workouts-equipment--x {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/large_x.svg)
    2px 50% no-repeat;
  background-size: 26px;
}
@media (min-width: 0) and (max-width: 479px) {
  .b-node--image-overlay-workouts-equipment--x {
    background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/x.svg)
      50% 50% no-repeat;
  }
}
@media (min-width: 480px) and (max-width: 1023px) {
  .b-node--image-overlay-workouts-equipment--x {
    background-size: 15px;
  }
}
.node--video--teaser .node--teaser--image-big {
  position: relative;
}
.node--video--teaser .node--teaser--image-big:after {
  content: "";
  display: block;
  position: absolute;
  bottom: 15px;
  left: 19px;
  border-color: transparent transparent transparent #fff;
  border-style: solid;
  border-width: 5px 0 5px 10px;
  height: 0;
  width: 0;
  z-index: 2;
}
@media (min-width: 768px) {
  .node--video--teaser .node--teaser--image-big:after {
    bottom: 16px;
    border-width: 8px 0 8px 12px;
  }
}
.node--video--teaser .node--teaser--image-big:before {
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  -o-border-radius: 2px;
  border-radius: 2px;
  background: rgba(0, 0, 0, 0.5);
  content: "";
  display: block;
  position: absolute;
  bottom: 8px;
  left: 7px;
  height: 25px;
  width: 31px;
  z-index: 1;
}
@media (min-width: 768px) {
  .node--video--teaser .node--teaser--image-big:before {
    height: 32px;
    width: 32px;
  }
}
.b-teaser-additional-fields {
  line-height: normal;
  color: #666;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  overflow: hidden;
  padding: 0 83px 0 0;
  margin: 10px 0 0;
}
.b-teaser-additional-fields--items {
  display: block;
  float: left;
  border-left: 1px solid #f4f4f4;
  border-right: 1px solid #f4f4f4;
  padding: 0 12px;
  text-align: center;
}
.b-teaser-additional-fields--items:last-child,
.b-teaser-additional-fields--items:first-child {
  border: 0;
}
.b-teaser-additional-fields--label,
.b-teaser-additional-fields--value {
  display: block;
}
.b-teaser-additional-fields--label {
  font-size: 10px;
  font-size: 0.625rem;
  font-weight: 600;
  text-transform: lowercase;
}
.b-teaser-additional-fields--value {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 20px;
  font-size: 1.25rem;
}
@media (min-width: 1024px) and (max-width: 1440px) {
  .b-teaser-additional-fields--value {
    font-size: 18px;
    font-size: 1.125rem;
  }
}
.l-region--sidebar-second .b-teaser-additional-fields--value,
.right-drawer .b-teaser-additional-fields--value {
  font-size: 14px;
  font-size: 0.875rem;
}
.b-teaser-additional-fields-equipment-x,
.b-teaser-additional-fields-equipment-yes {
  text-indent: -119988px;
  overflow: hidden;
  text-align: left;
}
.b-teaser-additional-fields-equipment-x {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/x.svg)
    50% 60% no-repeat;
}
.l-region--sidebar-second .b-teaser-additional-fields-equipment-x,
.right-drawer .b-teaser-additional-fields-equipment-x {
  background-position: 50% 48%;
}
.b-teaser-additional-fields-equipment-yes {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/y.svg)
    50% no-repeat;
}
.node--workout-routine--teaser .b-teaser-additional-fields,
.node--recipe--teaser .b-teaser-additional-fields {
  display: none;
}
@media (min-width: 1024px) {
  .node--workout-routine--teaser .b-teaser-additional-fields,
  .node--recipe--teaser .b-teaser-additional-fields {
    display: block;
    position: absolute;
    left: 297px;
    bottom: 18px;
    margin: 0;
  }
}
.node--recipe--teaser .b-teaser-additional-fields--items {
  padding: 0 10px;
}
@media (min-width: 1440px) {
  .node--recipe--teaser .b-teaser-additional-fields {
    width: 100%;
    background: #fff;
    padding-top: 1px;
  }
}
.block--maf-ads-maf-ads-taboola {
  width: 100%;
  clear: both;
  overflow: hidden;
}
@media (min-width: 768px) {
  .b-node--full-body-content,
  .b-workout-program-day-content {
    padding: 0 0 0 67px;
    position: relative;
    min-height: 210px;
  }
}
.sailthru-newsletters-page-form .sailthru-header-html {
  margin: 0 0 25px;
}
.sailthru-newsletters-page-form #edit-big-checkboxes {
  overflow: hidden;
}
@media (min-width: 1024px) {
  .sailthru-newsletters-page-form #edit-big-checkboxes {
    padding: 0 14%;
  }
}
.sailthru-newsletters-page-form #edit-big-checkboxes .form-item {
  width: 26.36842%;
  float: left;
  margin-right: 9.26316%;
  position: relative;
  text-align: center;
}
.sailthru-newsletters-page-form #edit-big-checkboxes .form-item:nth-child(2n) {
  float: right;
  margin-right: 0;
  *margin-left: -1em;
}
.sailthru-newsletters-page-form
  #edit-big-checkboxes
  .form-item.checked
  .option:after {
  background-image: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/input-check.svg);
  background-repeat: no-repeat;
  background-position: 50%;
}
.sailthru-newsletters-page-form #edit-big-checkboxes .form-checkbox {
  display: none;
}
.sailthru-newsletters-page-form #edit-big-checkboxes .newsletter-description,
.sailthru-newsletters-page-form #edit-big-checkboxes .sample_link {
  display: none;
}
.sailthru-newsletters-page-form #edit-big-checkboxes .description {
  margin: 0;
}
.sailthru-newsletters-page-form #edit-big-checkboxes .title {
  font-size: 10px;
  font-size: 0.625rem;
  text-transform: uppercase;
  font-weight: 700;
}
.sailthru-newsletters-page-form #edit-big-checkboxes .text {
  position: relative;
  padding: 100% 0 0;
}
@media (min-width: 454px) {
  .sailthru-newsletters-page-form #edit-big-checkboxes .text {
    padding: 190px 0 0;
  }
}
.sailthru-newsletters-page-form #edit-big-checkboxes .newsletter-image {
  position: absolute;
  top: 0;
  left: 0;
}
@media (min-width: 454px) {
  .sailthru-newsletters-page-form #edit-big-checkboxes .newsletter-image {
    left: 50%;
    margin: 0 0 0 -95px;
  }
  .sailthru-newsletters-page-form #edit-big-checkboxes .newsletter-image img {
    width: 190px;
  }
}
.sailthru-newsletters-page-form #edit-big-checkboxes .option {
  display: block;
  position: relative;
  padding: 0 0 53px;
}
.sailthru-newsletters-page-form #edit-big-checkboxes .option:after {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  content: "";
  display: block;
  position: absolute;
  bottom: 15px;
  left: 50%;
  background-color: #000;
  width: 26px;
  height: 25px;
  margin: 0 0 0 -13px;
}
.sailthru-newsletters-page-form .form-item-big-checkboxes-build .option {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/newsletter_build.svg)
    50% 0 no-repeat;
  background-size: contain;
  max-width: 132px;
  margin: 0 auto;
}
.sailthru-newsletters-page-form
  .form-item-big-checkboxes-build
  .option
  .newsletter-build {
  padding: 140px 0 0;
}
.sailthru-newsletters-page-form .form-item-big-checkboxes-burn .option {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/newsletter_burn.svg)
    50% 0 no-repeat;
  background-size: contain;
  max-width: 132px;
  margin: 0 auto;
}
.sailthru-newsletters-page-form
  .form-item-big-checkboxes-burn
  .option
  .newsletter-burn {
  padding: 140px 0 0;
}
.sailthru-newsletters-page-form .form-item-big-checkboxes-mafh .option {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/newsletter_mafh.svg)
    50% 0 no-repeat;
  background-size: contain;
  max-width: 132px;
  margin: 0 auto;
}
.sailthru-newsletters-page-form
  .form-item-big-checkboxes-mafh
  .option
  .newsletter-mafh {
  padding: 140px 0 0;
}
.sailthru-newsletters-page-form #edit-small-checkboxes {
  margin-bottom: 15px;
}
.sailthru-newsletters-page-form #edit-small-checkboxes .form-item {
  margin: 0;
}
.sailthru-newsletters-page-form #edit-small-checkboxes .form-checkbox {
  height: auto;
}
.sailthru-newsletters-page-form #edit-small-checkboxes .title {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 1.57143em;
  text-transform: none;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .sailthru-newsletters-page-form #edit-small-checkboxes .title {
    font-size: 11px;
    font-size: 0.6875rem;
  }
}
.sailthru-newsletters-page-form #edit-small-checkboxes strong {
  text-transform: uppercase;
}
.sailthru-newsletters-page-form .privacyPol {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 600;
  font-style: normal;
  font-size: 11px;
  font-size: 0.6875rem;
  display: block;
  text-align: center;
  margin: 5px 0;
  clear: both;
  width: 100%;
}
.sailthru-newsletters-page-form .form-item-current-subscriber {
  margin-bottom: 5px;
}
.sailthru-newsletters-page-form .form-item-current-subscriber .form-checkbox {
  float: left;
  margin-top: -7px;
}
.sailthru-newsletters-page-form .form-item-current-subscriber .option {
  font-size: 13px;
  font-size: 0.8125rem;
  line-height: 1.61538em;
  display: block;
}
.sailthru-newsletters-page-form .signUpSub {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 13px;
  font-size: 0.8125rem;
  line-height: 1.61538em;
}
.sailthru-newsletters-page-form .form-submit {
  display: block;
  width: 100%;
  margin: 20px 0 5px;
}
@media (min-width: 1024px) {
  .sailthru-newsletters-page-form .form-submit {
    width: 300px;
    margin: 20px auto 5px;
  }
}
.sailthru-newsletters-page-form .extra-fields {
  overflow: hidden;
}
@media (min-width: 1024px) {
  .sailthru-newsletters-page-form .extra-fields .firstname-field,
  .sailthru-newsletters-page-form .extra-fields .lastname-field,
  .sailthru-newsletters-page-form .extra-fields .email-field,
  .sailthru-newsletters-page-form .extra-fields .form-type-select,
  .sailthru-newsletters-page-form .extra-fields .zip-field {
    float: left;
    width: 45.5%;
    margin-right: 5%;
  }
  .sailthru-newsletters-page-form .extra-fields .lastname-field,
  .sailthru-newsletters-page-form .extra-fields .zip-field {
    margin-right: 0;
  }
  .sailthru-newsletters-page-form .extra-fields .email-field {
    clear: both;
  }
}
.sailthru-newsletters-page-form .extra-fields .required-item {
  font-size: 13px;
  font-size: 0.8125rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  color: #666;
  display: block;
  float: left;
  clear: both;
  width: 100%;
  position: relative;
  padding: 0 0 0 15px;
}
.sailthru-newsletters-page-form .extra-fields .required-item::after {
  content: "*";
  color: #f01616;
  position: absolute;
  top: 0;
  left: 8px;
}
#areasOfInterest {
  font-size: 13px;
  font-size: 0.8125rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  margin: 0 0 22px;
}
#areasOfInterest .title {
  font-size: 13px;
  font-size: 0.8125rem;
  line-height: 1em;
  margin: 0 8px 0 0;
  display: inline-block;
}
#areasOfInterest .option {
  text-transform: capitalize;
  position: relative;
  top: 2px;
}
#areasOfInterest .form-checkbox {
  margin-right: 10px;
}
.not-found-page-header {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  padding: 0 0 18px;
}
@media (min-width: 0) and (max-width: 768px) {
  .not-found-page-header {
    font-size: 14px;
    font-size: 0.875rem;
    line-height: 1.35714em;
    margin-top: 6px;
  }
  .not-found-page-header .not-found-page--title {
    font-size: 23px;
    font-size: 1.4375rem;
    line-height: 1.13043em;
    padding: 0 10px;
  }
}
@media (min-width: 0) and (max-width: 767px) {
  .page-not-found .node--full--image-big {
    border-right: 3px solid #f01616;
  }
}
@media (min-width: 768px) {
  .page-not-found .node--full--image-big {
    margin-right: -12px;
    padding-right: 0;
  }
}
.page-not-found .node--full--image-big img {
  width: 100%;
  position: static;
}
.page-not-found .b-nodes-list .block__title,
.page-not-found
  .b-nodes-list
  .node-type-recipe
  .field--name-field-directions
  .field-label,
.node-type-recipe
  .field--name-field-directions
  .page-not-found
  .b-nodes-list
  .field-label {
  color: #f01616;
  border-bottom: 1px solid #dedede;
  padding: 0 0 16px;
  margin: 0 0 21px;
}
@media (min-width: 768px) and (max-width: 1023px) {
  .page-not-found .b-nodes-list .block__title,
  .page-not-found
    .b-nodes-list
    .node-type-recipe
    .field--name-field-directions
    .field-label,
  .node-type-recipe
    .field--name-field-directions
    .page-not-found
    .b-nodes-list
    .field-label {
    font-size: 14px;
    font-size: 0.875rem;
  }
}
.page-not-found .b-nodes-list .nodes-list--item {
  float: none;
}
.page-not-found .b-nodes-list .nodes-list--thumbnail {
  width: 47.33333%;
  float: left;
  margin: 0 10px 0 0;
}
@media (min-width: 768px) {
  .page-not-found .b-nodes-list .nodes-list--thumbnail {
    width: 100%;
    margin: 0;
    float: none;
  }
}
.page-not-found .b-nodes-list .nodes-list--title {
  font-size: 11px;
  font-size: 0.6875rem;
  line-height: 1.36364em;
}
@media (min-width: 768px) {
  .page-not-found .b-nodes-list .nodes-list--title {
    font-size: 18px;
    font-size: 1.125rem;
    line-height: 1.11111em;
    display: block;
    overflow: hidden;
    max-height: 40px;
  }
}
@media (min-width: 768px) {
  .page-not-found .columns .column {
    width: 31.03448%;
    float: left;
    margin-right: 3.44828%;
  }
  .page-not-found .columns .column:nth-child(3n) {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .page-not-found .columns {
    padding: 0 48px 0 36px;
  }
}
.page-search .sidebar-wrapper-sticky {
  margin-top: 10px !important;
}
@media (min-width: 768px) {
  .page-search .l-content {
    border-top: 1px solid #dedede;
    padding-top: 10px;
  }
}
.page-search .l-content .search-form label {
  display: none;
}
.page-search .l-content .search-form .form-type-textfield {
  position: relative;
  display: inline-block;
  float: left;
  width: 100%;
  padding-right: 88px;
}
.page-search .l-content .search-form .form-type-textfield:after,
.page-search .l-content .search-form .form-type-textfield:before {
  background: #000;
  content: "";
  display: block;
  width: 3px;
  height: 7px;
  position: absolute;
  bottom: 0;
}
.page-search .l-content .search-form .form-type-textfield:after {
  right: 0;
}
.page-search .l-content .search-form .form-type-textfield:before {
  left: 0;
}
.page-search .l-content .search-form .form-type-textfield .form-text {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
  -webkit-appearance: none;
  background: #fff;
  border: 0;
  border-bottom: 3px solid #000;
  color: #000;
}
.page-search .l-content .search-form .form-type-textfield:after {
  right: 88px;
}
.page-search .l-content .search-form .form-text {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 20px;
  font-size: 1.25rem;
  padding-bottom: 7px;
  height: 43px;
}
.page-search .l-content .search-form .form-submit {
  font-size: 18px;
  font-size: 1.125rem;
  text-transform: uppercase;
  line-height: 42px;
  height: 43px;
  padding: 0;
  width: 67px;
  float: left;
  margin-left: -67px;
  position: relative;
}
.page-search .l-content .ds-search-extra {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 11px;
  font-size: 0.6875rem;
  line-height: 1.36364em;
  text-transform: uppercase;
  width: 100%;
  overflow: hidden;
  margin: 0 0 20px;
  padding: 0 0 17px;
  border-bottom: 1px solid #dedede;
  clear: both;
}
.page-search .l-content .spelling-suggestions {
  clear: both;
  overflow: hidden;
}
.page-search .l-content .spelling-suggestions .form-item {
  margin: 0 0 12px;
}
.page-search .l-content .spelling-suggestions dt {
  float: left;
  margin: 0 5px 0 0;
  position: relative;
}
.page-search .l-content .spelling-suggestions dt::after {
  content: ":";
}
.l-page--channel .page-title,
.l-page--topics .page-title,
.page-authors .page-title,
.page-videos .page-title,
.l-page--exercise-videos .page-title,
.page-workouts .page-title {
  font-size: 26px;
  font-size: 1.625rem;
  text-align: center;
  line-height: inherit;
  border-top: 1px solid #dedede;
  border-bottom: 1px solid #dedede;
  min-height: 22px;
  margin: 12px 0 10px;
  overflow: hidden;
  position: relative;
}
.l-page--channel .page-title .page-title-text,
.l-page--topics .page-title .page-title-text,
.page-authors .page-title .page-title-text,
.page-videos .page-title .page-title-text,
.l-page--exercise-videos .page-title .page-title-text,
.page-workouts .page-title .page-title-text {
  position: relative;
  z-index: 1;
}
.l-page--channel .page-title:after,
.l-page--topics .page-title:after,
.page-authors .page-title:after,
.page-videos .page-title:after,
.l-page--exercise-videos .page-title:after,
.page-workouts .page-title:after {
  content: "";
  display: block;
  position: absolute;
  background: #fff200;
  top: 5px;
  bottom: 5px;
  left: 0;
  right: 0;
}
@media (min-width: 0) and (max-width: 768px) {
  .l-page--channel.l-page--sweeps .page-title,
  .page-taxonomy-term-63 .l-page--channel .page-title,
  .page-taxonomy-term-2011 .l-page--channel .page-title,
  .page-taxonomy-term-70 .l-page--channel .page-title,
  .page-taxonomy-term-16 .l-page--channel .page-title,
  .l-page--channel.page-workouts-workout-programs .page-title,
  .l-page--topics.l-page--sweeps .page-title,
  .page-taxonomy-term-63 .l-page--topics .page-title,
  .page-taxonomy-term-2011 .l-page--topics .page-title,
  .page-taxonomy-term-70 .l-page--topics .page-title,
  .page-taxonomy-term-16 .l-page--topics .page-title,
  .l-page--topics.page-workouts-workout-programs .page-title,
  .page-authors.l-page--sweeps .page-title,
  .page-taxonomy-term-63 .page-authors .page-title,
  .page-taxonomy-term-2011 .page-authors .page-title,
  .page-taxonomy-term-70 .page-authors .page-title,
  .page-taxonomy-term-16 .page-authors .page-title,
  .page-authors.page-workouts-workout-programs .page-title,
  .page-videos.l-page--sweeps .page-title,
  .page-taxonomy-term-63 .page-videos .page-title,
  .page-taxonomy-term-2011 .page-videos .page-title,
  .page-taxonomy-term-70 .page-videos .page-title,
  .page-taxonomy-term-16 .page-videos .page-title,
  .page-videos.page-workouts-workout-programs .page-title,
  .l-page--exercise-videos.l-page--sweeps .page-title,
  .page-taxonomy-term-63 .l-page--exercise-videos .page-title,
  .page-taxonomy-term-2011 .l-page--exercise-videos .page-title,
  .page-taxonomy-term-70 .l-page--exercise-videos .page-title,
  .page-taxonomy-term-16 .l-page--exercise-videos .page-title,
  .l-page--exercise-videos.page-workouts-workout-programs .page-title,
  .page-workouts.l-page--sweeps .page-title,
  .page-taxonomy-term-63 .page-workouts .page-title,
  .page-taxonomy-term-2011 .page-workouts .page-title,
  .page-taxonomy-term-70 .page-workouts .page-title,
  .page-taxonomy-term-16 .page-workouts .page-title,
  .page-workouts.page-workouts-workout-programs .page-title {
    font-size: 20px;
    font-size: 1.25rem;
    min-height: 18px;
    line-height: 1em;
  }
  .l-page--channel.l-page--sweeps .page-title-text,
  .page-taxonomy-term-63 .l-page--channel .page-title-text,
  .page-taxonomy-term-2011 .l-page--channel .page-title-text,
  .page-taxonomy-term-70 .l-page--channel .page-title-text,
  .page-taxonomy-term-16 .l-page--channel .page-title-text,
  .l-page--channel.page-workouts-workout-programs .page-title-text,
  .l-page--topics.l-page--sweeps .page-title-text,
  .page-taxonomy-term-63 .l-page--topics .page-title-text,
  .page-taxonomy-term-2011 .l-page--topics .page-title-text,
  .page-taxonomy-term-70 .l-page--topics .page-title-text,
  .page-taxonomy-term-16 .l-page--topics .page-title-text,
  .l-page--topics.page-workouts-workout-programs .page-title-text,
  .page-authors.l-page--sweeps .page-title-text,
  .page-taxonomy-term-63 .page-authors .page-title-text,
  .page-taxonomy-term-2011 .page-authors .page-title-text,
  .page-taxonomy-term-70 .page-authors .page-title-text,
  .page-taxonomy-term-16 .page-authors .page-title-text,
  .page-authors.page-workouts-workout-programs .page-title-text,
  .page-videos.l-page--sweeps .page-title-text,
  .page-taxonomy-term-63 .page-videos .page-title-text,
  .page-taxonomy-term-2011 .page-videos .page-title-text,
  .page-taxonomy-term-70 .page-videos .page-title-text,
  .page-taxonomy-term-16 .page-videos .page-title-text,
  .page-videos.page-workouts-workout-programs .page-title-text,
  .l-page--exercise-videos.l-page--sweeps .page-title-text,
  .page-taxonomy-term-63 .l-page--exercise-videos .page-title-text,
  .page-taxonomy-term-2011 .l-page--exercise-videos .page-title-text,
  .page-taxonomy-term-70 .l-page--exercise-videos .page-title-text,
  .page-taxonomy-term-16 .l-page--exercise-videos .page-title-text,
  .l-page--exercise-videos.page-workouts-workout-programs .page-title-text,
  .page-workouts.l-page--sweeps .page-title-text,
  .page-taxonomy-term-63 .page-workouts .page-title-text,
  .page-taxonomy-term-2011 .page-workouts .page-title-text,
  .page-taxonomy-term-70 .page-workouts .page-title-text,
  .page-taxonomy-term-16 .page-workouts .page-title-text,
  .page-workouts.page-workouts-workout-programs .page-title-text {
    margin-left: 0;
    margin-top: -4px;
    display: block;
  }
}
@media (min-width: 0) and (max-width: 767px) {
  .l-page--exercise-videos.l-page--exercise-videos--index .page-title,
  .page-workouts .page-title,
  .l-page--exercise-videos-taxonomy .page-title {
    font-size: 28px;
    font-size: 1.75rem;
    min-height: 19px;
    line-height: 24px;
    margin-bottom: 6px;
  }
  .l-page--exercise-videos.l-page--exercise-videos--index .page-title-text,
  .page-workouts .page-title-text,
  .l-page--exercise-videos-taxonomy .page-title-text {
    margin-left: 0;
    margin-top: -5px;
    display: block;
  }
}
@media (min-width: 768px) {
  .l-page--channel .l-content--header,
  .l-page--topics .l-content--header,
  .page-authors .l-content--header,
  .page-videos .l-content--header,
  .page-workouts .l-content--header,
  .l-page--exercise-videos .l-content--header {
    border-top: 1px solid #dedede;
    border-bottom: 1px solid #dedede;
    position: relative;
    overflow: hidden;
    display: table;
    width: 100%;
    margin: 0 0 20px;
  }
  .l-page--channel .l-content--header:after,
  .l-page--topics .l-content--header:after,
  .page-authors .l-content--header:after,
  .page-videos .l-content--header:after,
  .page-workouts .l-content--header:after,
  .l-page--exercise-videos .l-content--header:after {
    content: "";
    display: block;
    position: absolute;
    background: #fff200;
    top: 8px;
    bottom: 8px;
    left: 0;
    right: 0;
  }
  .l-page--channel .page-title,
  .l-page--topics .page-title,
  .page-authors .page-title,
  .page-videos .page-title,
  .page-workouts .page-title,
  .l-page--exercise-videos .page-title {
    font-size: 57px;
    font-size: 3.5625rem;
    float: left;
    margin: 0;
    border: 0;
    min-height: 37px;
    line-height: 29px;
    white-space: nowrap;
  }
  .l-page--channel .page-title:after,
  .l-page--topics .page-title:after,
  .page-authors .page-title:after,
  .page-videos .page-title:after,
  .page-workouts .page-title:after,
  .l-page--exercise-videos .page-title:after {
    display: none;
  }
  .l-page--channel .page-title-text,
  .l-page--topics .page-title-text,
  .page-authors .page-title-text,
  .page-videos .page-title-text,
  .page-workouts .page-title-text,
  .l-page--exercise-videos .page-title-text {
    margin-left: -1px;
  }
  .l-page--channel.l-page--exercise-videos--index .page-title,
  .l-page--topics.l-page--exercise-videos--index .page-title,
  .page-authors.l-page--exercise-videos--index .page-title,
  .page-videos.l-page--exercise-videos--index .page-title,
  .page-workouts.l-page--exercise-videos--index .page-title,
  .l-page--exercise-videos.l-page--exercise-videos--index .page-title {
    text-align: center;
    width: 100%;
  }
  .page-workouts .l-content--header,
  .l-page--exercise-videos-taxonomy .l-content--header {
    display: block;
    margin-bottom: 15px;
  }
  .page-workouts .page-title,
  .l-page--exercise-videos-taxonomy .page-title {
    float: none;
  }
}
@media (min-width: 768px) and (min-width: 768px) and (max-width: 1024px) {
  .l-page--channel .page-title,
  .l-page--topics .page-title,
  .page-authors .page-title,
  .page-videos .page-title,
  .page-workouts .page-title,
  .l-page--exercise-videos .page-title {
    font-size: 46px;
    font-size: 2.875rem;
    min-height: 35px;
    line-height: 25px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-page--channel .page-title,
  .l-page--topics .page-title,
  .page-authors .page-title,
  .page-videos .page-title,
  .page-workouts .page-title,
  .l-page--exercise-videos .page-title {
    font-size: 76px;
    font-size: 4.75rem;
    min-height: 51px;
    line-height: 36px;
  }
}
@media (min-width: 768px) and (min-width: 768px) and (max-width: 1440px) {
  .l-page--channel.l-page--sweeps .page-title,
  .l-page--channel.l-page--exercise-videos--index .page-title,
  .page-taxonomy-term-63 .l-page--channel .page-title,
  .page-taxonomy-term-16 .l-page--channel .page-title,
  .page-taxonomy-term-70 .l-page--channel .page-title,
  .l-page--topics.l-page--sweeps .page-title,
  .l-page--topics.l-page--exercise-videos--index .page-title,
  .page-taxonomy-term-63 .l-page--topics .page-title,
  .page-taxonomy-term-16 .l-page--topics .page-title,
  .page-taxonomy-term-70 .l-page--topics .page-title,
  .page-authors.l-page--sweeps .page-title,
  .page-authors.l-page--exercise-videos--index .page-title,
  .page-taxonomy-term-63 .page-authors .page-title,
  .page-taxonomy-term-16 .page-authors .page-title,
  .page-taxonomy-term-70 .page-authors .page-title,
  .page-videos.l-page--sweeps .page-title,
  .page-videos.l-page--exercise-videos--index .page-title,
  .page-taxonomy-term-63 .page-videos .page-title,
  .page-taxonomy-term-16 .page-videos .page-title,
  .page-taxonomy-term-70 .page-videos .page-title,
  .page-workouts.l-page--sweeps .page-title,
  .page-workouts.l-page--exercise-videos--index .page-title,
  .page-taxonomy-term-63 .page-workouts .page-title,
  .page-taxonomy-term-16 .page-workouts .page-title,
  .page-taxonomy-term-70 .page-workouts .page-title,
  .l-page--exercise-videos.l-page--sweeps .page-title,
  .l-page--exercise-videos.l-page--exercise-videos--index .page-title,
  .page-taxonomy-term-63 .l-page--exercise-videos .page-title,
  .page-taxonomy-term-16 .l-page--exercise-videos .page-title,
  .page-taxonomy-term-70 .l-page--exercise-videos .page-title {
    font-size: 48px;
    font-size: 3rem;
    min-height: 34px;
    line-height: 26px;
  }
  .l-page--channel.l-page--sweeps .page-title-text,
  .l-page--channel.l-page--exercise-videos--index .page-title-text,
  .page-taxonomy-term-63 .l-page--channel .page-title-text,
  .page-taxonomy-term-16 .l-page--channel .page-title-text,
  .page-taxonomy-term-70 .l-page--channel .page-title-text,
  .l-page--topics.l-page--sweeps .page-title-text,
  .l-page--topics.l-page--exercise-videos--index .page-title-text,
  .page-taxonomy-term-63 .l-page--topics .page-title-text,
  .page-taxonomy-term-16 .l-page--topics .page-title-text,
  .page-taxonomy-term-70 .l-page--topics .page-title-text,
  .page-authors.l-page--sweeps .page-title-text,
  .page-authors.l-page--exercise-videos--index .page-title-text,
  .page-taxonomy-term-63 .page-authors .page-title-text,
  .page-taxonomy-term-16 .page-authors .page-title-text,
  .page-taxonomy-term-70 .page-authors .page-title-text,
  .page-videos.l-page--sweeps .page-title-text,
  .page-videos.l-page--exercise-videos--index .page-title-text,
  .page-taxonomy-term-63 .page-videos .page-title-text,
  .page-taxonomy-term-16 .page-videos .page-title-text,
  .page-taxonomy-term-70 .page-videos .page-title-text,
  .page-workouts.l-page--sweeps .page-title-text,
  .page-workouts.l-page--exercise-videos--index .page-title-text,
  .page-taxonomy-term-63 .page-workouts .page-title-text,
  .page-taxonomy-term-16 .page-workouts .page-title-text,
  .page-taxonomy-term-70 .page-workouts .page-title-text,
  .l-page--exercise-videos.l-page--sweeps .page-title-text,
  .l-page--exercise-videos.l-page--exercise-videos--index .page-title-text,
  .page-taxonomy-term-63 .l-page--exercise-videos .page-title-text,
  .page-taxonomy-term-16 .l-page--exercise-videos .page-title-text,
  .page-taxonomy-term-70 .l-page--exercise-videos .page-title-text {
    margin-left: 0;
    margin-top: 0;
  }
}
@media (min-width: 768px) {
  .l-page--topics-details .l-content--header {
    border-top: 0;
  }
  .l-page--topics-details .l-content--header:after {
    display: none;
  }
  .l-page--topics-details .page-title-text {
    margin-left: 0;
  }
}
.l-page--topics-details .page-title {
  font-size: 20px;
  font-size: 1.25rem;
  line-height: 25px;
  text-transform: none;
  min-height: inherit;
  border-top: 0;
  text-align: left;
  padding: 0 90px 12px 0;
  margin-bottom: 18px;
}
.l-page--topics-details .page-title:after {
  display: none;
}
@media (min-width: 768px) {
  .l-page--topics-details .page-title {
    font-size: 18px;
    font-size: 1.125rem;
    line-height: 29px;
    margin-bottom: 0;
    float: none;
  }
}
@media (min-width: 1024px) {
  .l-page--topics-details .page-title {
    font-size: 24px;
    font-size: 1.5rem;
  }
}
.l-page--topics-details .view-all-topics-link {
  display: block;
  float: right;
  font-size: 10px;
  font-size: 0.625rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  text-transform: uppercase;
  margin: -52px 0 0;
  position: relative;
}
@media (min-width: 768px) {
  .l-page--topics-details .view-all-topics-link {
    margin-top: -34px;
  }
}
.page-contact .page-title,
.page-newsletters .page-title {
  font-size: 23px;
  font-size: 1.4375rem;
  line-height: 26px;
  margin: 14px 0 8px 0;
}
@media (min-width: 1024px) {
  .page-contact .page-title,
  .page-newsletters .page-title {
    font-size: 35px;
    font-size: 2.1875rem;
    line-height: 39px;
    margin: -7px 0 20px;
  }
}
.page-description--channel {
  font-size: 10px;
  font-size: 0.625rem;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 600;
  font-style: normal;
  line-height: 14px;
  text-transform: uppercase;
  text-align: center;
  display: block;
  margin: 0 0 15px;
}
@media (min-width: 768px) {
  .page-description--channel {
    vertical-align: middle;
    position: relative;
    z-index: 1;
    display: table-cell;
    width: 100%;
    text-align: left;
    padding-left: 10px;
    padding-top: 2px;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .page-description--channel {
    font-size: 9px;
    font-size: 0.5625rem;
    padding-top: 0;
  }
}
.pager {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 12px;
  font-size: 0.75rem;
  text-transform: uppercase;
  border: 1px solid #dedede;
  border-left: 0;
  border-right: 0;
  margin: 0;
  padding: 0;
}
.pager__item {
  display: inline-block;
  line-height: 38px;
  padding: 0 5px;
}
@media (min-width: 0) and (max-width: 480px) {
  .pager__item {
    padding: 0 4px;
  }
}
.pager__item a {
  color: #000;
  display: block;
}
.pager__item--first,
.pager__item--last {
  display: none;
}
.pager__item--previous,
.pager__item--next {
  background: #000;
  padding: 0;
  width: 96px;
  margin: 0 10px 0 0;
}
.pager__item--previous a,
.pager__item--next a {
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/pager-next-prev.png)
    0 0 no-repeat;
  color: #fff;
}
.pager__item--next {
  margin: 0 0 0 10px;
}
.pager__item--next a {
  background-position: 100% -40px;
}
@media (min-width: 0) and (max-width: 480px) {
  .node-type-workout-program .pager__item--previous,
  .node-type-workout-program .pager__item--next {
    margin: 0;
  }
}
.pager__item--current {
  font-weight: normal;
}
.b-author-teaser {
  border-bottom: 1px solid #e5e5e5;
  padding: 0 0 20px;
  margin: 0 0 20px;
  overflow: hidden;
  position: relative;
  min-height: 55px;
}
.b-author-teaser--author-image,
.b-author-full--author-image {
  float: left;
  margin: 0 10px 0 0;
  line-height: 0;
}
.b-author-teaser--author-image {
  width: 100px;
}
.b-author-teaser--title {
  font-size: 13px;
  font-size: 0.8125rem;
  line-height: 18px;
}
.b-author-teaser--title a:hover {
  color: #f01616;
}
@media (min-width: 1024px) {
  .b-author-teaser--title {
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 24px;
    display: inline;
  }
}
@media (min-width: 1440px) {
  .b-author-teaser--title {
    font-size: 26px;
    font-size: 1.625rem;
    line-height: 32px;
  }
  .has-skin .b-author-teaser--title {
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 24px;
  }
}
.b-author-teaser--twitter-link {
  display: inline-block;
  position: relative;
}
.b-author-teaser--twitter-link .svg-icon {
  margin-bottom: -2px;
}
@media (min-width: 1024px) {
  .b-author-teaser--twitter-link {
    left: 18px;
    top: -3px;
  }
  .b-author-teaser--twitter-link:before {
    content: "|";
    color: #e7e7e7;
    position: absolute;
    top: 0;
    left: -12px;
  }
}
@media (min-width: 1024px) {
  .field--name-field-twitter-link {
    display: none;
  }
  .field--name-field-twitter-link.el-attached {
    display: inline;
  }
  .field--name-field-twitter-link.el-attached .field__items,
  .field--name-field-twitter-link.el-attached .field__item {
    display: inline;
  }
}
.b-author-certifications {
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 11px;
  font-size: 0.6875rem;
  line-height: 13px;
  color: #666;
}
.b-author-certifications ul {
  list-style-type: none;
}
.b-author-certifications ul,
.b-author-certifications ul li {
  margin: 0px;
  padding: 0px;
  display: inline;
}
.b-author-certifications ul li:after {
  content: ",";
}
.b-author-certifications ul li:last-child:after {
  content: "";
}
.b-author-certifications ul li.last:after {
  content: "";
}
.b-author-certifications a {
  color: #666;
}
@media (min-width: 1024px) {
  .b-author-certifications {
    font-size: 13px;
    font-size: 0.8125rem;
    line-height: 17px;
  }
}
@media (min-width: 1440px) {
  .b-author-certifications {
    font-size: 16px;
    font-size: 1rem;
  }
  .has-skin .b-author-certifications {
    font-size: 13px;
    font-size: 0.8125rem;
  }
}
.b-author-full .b-author-certifications {
  font-weight: 700;
}
.b-author--profile-link {
  position: absolute;
  right: 0;
  bottom: 20px;
}
.b-author-full {
  border-bottom: 1px solid #dedede;
  padding: 20px 0 0;
  margin: 0 0 20px;
  overflow: hidden;
}
.b-author-full .field--name-field-twitter-link {
  padding: 25px 0 15px 0;
  clear: both;
  text-align: center;
  display: block;
}
@media (min-width: 480px) {
  .b-author-full .field--name-field-twitter-link {
    clear: none;
    text-align: left;
    padding: 10px 0 28px;
  }
}
@media (min-width: 1024px) {
  .b-author-full {
    padding-top: 0;
  }
  .b-author-full .field--name-field-body {
    clear: both;
  }
  .b-author-full .field--name-field-body p:last-child {
    margin-bottom: 15px;
  }
  .b-author-full .b-author-certifications {
    font-size: 17px;
    font-size: 1.0625rem;
    line-height: 1.41176em;
  }
}
.b-author-full--author-image {
  width: 80px;
}
@media (min-width: 480px) {
  .b-author-full--author-image {
    width: 102px;
    margin-right: 20px;
  }
}
@media (min-width: 1024px) {
  .b-author-full--author-image {
    width: 158px;
    margin-bottom: 14px;
  }
}
.b-author-full--title {
  font-size: 23px;
  font-size: 1.4375rem;
  line-height: 1.2em;
  position: relative;
  top: -5px;
  margin-bottom: 3px;
}
@media (min-width: 1024px) {
  .b-author-full--title {
    font-size: 35px;
    font-size: 2.1875rem;
    line-height: 1.11429em;
    top: -9px;
    margin-bottom: 0;
  }
}
.b-author-full--twitter-link {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  display: inline-block;
  outline: none;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  font-family: "Polaris", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 12px;
  height: 34px;
  line-height: 34px;
  padding: 0 2em;
  color: #fff;
  border: 0;
  background: #00aeef;
  text-transform: uppercase;
  height: 36px;
  line-height: 36px;
  text-transform: none;
  padding: 0 10px;
}
.b-author-full--twitter-link:hover {
  text-decoration: none;
  background: #f01616;
}
.b-author-full--twitter-link:active {
  color: #fff;
}
.b-author-full--twitter-link a {
  color: #fff;
}
.b-author-full--twitter-link .svg-icon {
  margin: 0 5px 0 0;
  position: relative;
  top: 2px;
}
.page-node .ui-accordion .ui-accordion-header {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
  font-size: 17px;
  font-size: 1.0625rem;
  background: none;
  border-left: 0;
  border-right: 0;
  border-color: #dedede;
  font-weight: 700;
  text-transform: none;
  color: #000;
  margin: 0 0 -1px;
  padding: 9px 0;
}
.page-node .ui-accordion .ui-accordion-header .ui-accordion-header-icon {
  background: none;
  right: 0;
  left: auto;
  top: 0;
  border-left: 1px solid #dedede;
  height: 41px;
  width: 41px;
  margin: 0;
}
.page-node .ui-accordion .ui-accordion-header .ui-accordion-header-icon:after {
  -webkit-transform: rotate(270deg);
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -o-transform: rotate(270deg);
  transform: rotate(270deg);
  background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/svg-icons/expand-menu-icon.svg)
    0 0 no-repeat;
  content: "";
  position: absolute;
  top: 50%;
  right: 50%;
  width: 10px;
  height: 6px;
  margin: -3px -5px 0 0;
}
.page-node .ui-accordion .ui-accordion-header.ui-state-active {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
  background: none;
}
.page-node .ui-accordion .ui-accordion-header.ui-state-active .ui-icon:after {
  -webkit-transform: rotate(0);
  -moz-transform: rotate(0);
  -ms-transform: rotate(0);
  -o-transform: rotate(0);
  transform: rotate(0);
}
.page-node .ui-accordion .ui-accordion-header.ui-state-hover {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
  background: none;
}
.page-node .ui-accordion .ui-accordion-content {
  font-family: Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-style: normal;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 1.42857em;
  border: 0;
  padding: 0;
  margin: 20px 0;
}
.page-node .ui-widget-content a {
  color: #00aeef;
}
.page-node .ui-widget-content a:hover {
  color: #000;
}
.l-page {
  -webkit-box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.35);
  -moz-box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.35);
  box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.35);
  background: #fff;
}
.l-drawer {
  background: #fff;
}
@media (min-width: 768px) {
  .l-page {
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
  }
}
@media (min-width: 0) and (max-width: 767px) {
  .headroom {
    -webkit-transition: -webkit-transform 200ms linear;
    -moz-transition: -moz-transform 200ms linear;
    -o-transition: -o-transform 200ms linear;
    transition: transform 200ms linear;
  }
  .headroom--pinned {
    -webkit-transform: translateY(0%);
    -moz-transform: translateY(0%);
    -ms-transform: translateY(0%);
    -o-transform: translateY(0%);
    transform: translateY(0%);
  }
  .headroom--unpinned {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
  }
}
.l-header {
  background: #fff;
  height: 56px;
}
@media (min-width: 0) and (max-width: 767px) {
  .l-header {
    -webkit-box-shadow: 1px 0 2px 1px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 1px 0 2px 1px rgba(0, 0, 0, 0.3);
    box-shadow: 1px 0 2px 1px rgba(0, 0, 0, 0.3);
  }
}
.l-branding--site-logo img {
  width: 153px;
}
@media (min-width: 768px) {
  .l-header {
    border-top: 3px solid #b6b6b6;
    border-bottom: 2px solid #f01616;
    height: 85px;
  }
  .l-header--inner {
    position: relative;
  }
  .l-branding--site-logo {
    margin: 16px 0 0 10px;
  }
  .l-branding--site-logo img {
    width: 174px;
  }
  .l-region--header {
    position: relative;
  }
  .l-region--navigation {
    position: absolute;
    top: 39px;
    left: 0;
  }
  .l-region--navigation > .block {
    border-top: 1px solid #e5e5e5;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header {
    height: 109px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-branding--site-logo img {
    width: 230px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-branding--site-logo {
    margin: 22px 0 0 10px;
  }
}
@media (min-width: 768px) and (min-width: 768px) and (max-width: 1023px) {
  .l-region--navigation {
    left: 26.5%;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-region--navigation {
    top: 50px;
  }
}
@media (min-width: 768px) and (min-width: 1440px) {
  .l-region--navigation {
    left: 21%;
  }
}
@media (min-width: 768px) {
  .l-header {
    -webkit-transition: margin 0.2s linear;
    -moz-transition: margin 0.2s linear;
    -o-transition: margin 0.2s linear;
    transition: margin 0.2s linear;
  }
  .l-header.headroom--top {
    position: absolute;
  }
  .l-header.headroom--not-top {
    top: -57px;
    margin-top: 57px;
    height: 44px;
  }
  .l-header.headroom--not-top .l-branding {
    width: 78px;
  }
  .l-header.headroom--not-top .l-branding--site-logo {
    margin-top: 3px;
    margin-left: 24px;
  }
  .l-header.headroom--not-top .site-logo {
    background: url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/logo-small.svg);
    display: block;
    width: 29px;
    height: 33px;
    background-size: 100%;
  }
  .l-header.headroom--not-top .site-logo img {
    display: none;
  }
  .l-header.headroom--not-top .l-region--header {
    width: 92px;
    float: right;
    padding: 0;
  }
  .l-header.headroom--not-top .l-region--header .menu a {
    font-size: 0;
    color: transparent;
    padding: 0 12px;
    height: 39px;
    border-left: 1px solid #e5e5e5;
  }
  .l-header.headroom--not-top .l-region--header .menu a .icon {
    margin: 0 0 -8px 0;
  }
  .l-header.headroom--not-top .l-region--header .menu a.item-store {
    position: absolute;
    left: -170px;
    top: 8px;
    font-size: 12px;
    border-right: 0 !important;
    margin: 0;
    height: 23px;
  }
  .l-header.headroom--not-top .l-region--header .menu a.item-store .icon {
    margin: 0 3px -1px 0;
  }
  .l-header.headroom--not-top .l-region--header .menu .last a {
    border-left: 0;
    border-right: 1px solid #e5e5e5;
  }
  .l-header.headroom--not-top .l-region--header .menu .item-latest,
  .l-header.headroom--not-top .l-region--header .menu .item-newsletters {
    display: none;
  }
  .l-header.headroom--not-top .block--main-menu > .menu > li > a {
    padding: 0 8px;
  }
  .l-header.headroom--not-top .block--main-menu > .menu > li.first > a {
    padding-left: 0;
  }
  .l-header.headroom--not-top .l-region--navigation {
    border: 0;
    float: left;
    width: auto;
    top: 0;
    left: 75px;
    padding: 0;
  }
  .l-header.headroom--not-top .l-region--navigation > .block {
    border: 0;
  }
  .l-header.headroom--not-top .block--popup .l-popup--content {
    top: 42px;
  }
  .l-header.headroom--not-top .block--social-links--popup,
  .l-header.headroom--not-top .block--search--popup {
    top: 0;
  }
  .l-header.headroom--not-top .block--social-links--popup .l-popup--open,
  .l-header.headroom--not-top .block--search--popup .l-popup--open {
    height: 39px;
  }
  .l-header.headroom--not-top .block--social-links--popup {
    right: 91px;
  }
  .l-header.headroom--not-top .block--social-links--popup .l-popup--open {
    width: 46px;
  }
  .l-header.headroom--not-top .b-social-links--slide-out {
    top: 0;
    right: 166px;
  }
  .l-header.headroom--not-top .b-social-links--slide-out .list-item {
    height: 39px;
  }
  .l-header.headroom--not-top .block--search--popup {
    right: 0;
  }
  .l-header.headroom--not-top .links-list--social--slide-out a {
    margin-top: 1px;
  }
  .l-header.headroom--not-top .links-list--social--slide-out .gplus-link {
    margin-top: 2px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header.headroom--not-top {
    height: 57px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header.headroom--not-top .l-branding--site-logo {
    margin-top: 5px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header.headroom--not-top .site-logo {
    width: 35px;
    height: 40px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header.headroom--not-top .l-region--header {
    width: 112px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header.headroom--not-top .l-region--header .menu a {
    height: 52px;
    width: 54px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header.headroom--not-top .l-region--header .menu a .icon {
    margin: 0 0 -8px 0;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header.headroom--not-top .l-region--header .menu a.item-store {
    width: 119px;
    left: -186px;
    top: 15px;
  }
}
@media (min-width: 768px) and (min-width: 1440px) {
  .l-header.headroom--not-top .l-region--header .menu a.item-store {
    left: -404px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header.headroom--not-top .l-region--header .menu a.item-store .icon {
    margin: 0 4px -2px 0;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header.headroom--not-top .block--main-menu > .menu > li > a {
    padding: 0 12px;
  }
}
@media (min-width: 768px) and (min-width: 1440px) {
  .l-header.headroom--not-top .block--main-menu > .menu > li > a {
    padding: 0 20px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header.headroom--not-top .l-region--navigation {
    left: 70px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header.headroom--not-top .block--popup .l-popup--content {
    top: 52px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header.headroom--not-top .block--social-links--popup .l-popup--open,
  .l-header.headroom--not-top .block--search--popup .l-popup--open {
    height: 52px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header.headroom--not-top .block--social-links--popup {
    right: 111px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header.headroom--not-top .block--social-links--popup .l-popup--open {
    width: 54px;
  }
  .l-header.headroom--not-top .block--social-links--popup .l-popup--open .icon {
    top: -1px;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-header.headroom--not-top .b-social-links--slide-out .list-item {
    height: 52px;
  }
}
@media (max-width: 1024px) and (min-width: 768px) {
  .l-region--navigation,
  .l-region--header {
    padding: 0 0 0 245px;
  }
  .l-header.headroom--not-top .l-region--header,
  .l-header.headroom--not-top .l-region--navigation {
    padding: 0;
  }
  .block--main-menu a {
    font-size: 15px;
    font-size: 0.9375rem;
    padding: 0 10px;
  }
}
@media (max-width: 768px) {
  .l-header .l-region--navigation,
  .l-header .l-region--header {
    padding: 0;
    width: 75%;
  }
  .l-header .block--main-menu a {
    font-size: 12px;
    font-size: 0.75rem;
    padding: 0 7px;
  }
  .l-header .block--main-menu a.mafh {
    font-size: 0;
    background: transparent
      url(/sites/muscleandfitness.com/themes/custom/musclefitness3/images/mafh_menu_logo.png)
      no-repeat -3px 0;
    background-size: 75px;
  }
  .l-header .l-region--navigation {
    left: 25%;
  }
  .l-header .l-branding {
    width: 25%;
  }
  .l-header.headroom--not-top .l-region--navigation {
    left: 60px;
  }
  .l-header.headroom--not-top .block--main-menu > .menu > li > a {
    padding: 0 8px;
    font-size: 10px;
    font-size: 0.625rem;
  }
  .l-header.headroom--not-top .block--main-menu > .menu > li > a.mafh {
    font-size: 0;
  }
}
@media (min-width: 768px) {
  .l-sub-header {
    font-family: "Polaris", Helvetica, Arial, sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 9px;
    font-size: 0.5625rem;
    padding: 0;
    background: #000;
    color: #fff200;
    text-transform: uppercase;
  }
  .l-sub-header .block__title,
  .l-sub-header .node-type-recipe .field--name-field-directions .field-label,
  .node-type-recipe .field--name-field-directions .l-sub-header .field-label {
    font-size: 9px;
    font-size: 0.5625rem;
    float: left;
    margin: 0 26px 0 0;
    font-weight: 700;
  }
  .l-sub-header a {
    color: #ccc;
  }
  .l-sub-header a:hover {
    color: #fff;
  }
  .l-sub-header .menu {
    margin: 0;
    padding: 0;
    border: 0;
    /* *zoom: expression(
      this.runtimeStyle.zoom= "1",
      this.appendChild(document.createElement("br")) .style.cssText=
        "clear:both;font:0/0 serif"
    );
    *zoom: 1; */
  }
  .l-sub-header .menu:before,
  .l-sub-header .menu:after {
    content: ".";
    display: block;
    height: 0;
    overflow: hidden;
  }
  .l-sub-header .menu:after {
    clear: both;
  }
  .l-sub-header .menu li {
    list-style-image: none;
    list-style-type: none;
    margin-left: 0;
    white-space: nowrap;
    display: inline;
    float: left;
  }
  .l-sub-header .menu li {
    padding: 0 10px;
  }
  .l-sub-header .menu li.first {
    padding-left: 0;
  }
  .l-sub-header .menu li.last {
    padding-right: 0;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-sub-header .block__title,
  .l-sub-header .node-type-recipe .field--name-field-directions .field-label,
  .node-type-recipe .field--name-field-directions .l-sub-header .field-label {
    font-size: 12px;
    font-size: 0.75rem;
  }
}
@media (min-width: 768px) and (min-width: 1024px) {
  .l-sub-header {
    font-size: 11px;
    font-size: 0.6875rem;
    padding: 3px 0 4px;
  }
  .l-sub-header .menu li {
    padding: 0 14px;
  }
}
.l-leaderboard {
  text-align: center;
  overflow: hidden;
}
#dfp-ad-top_banner {
  display: none;
}
@media (min-width: 768px) {
  #dfp-ad-top_banner {
    display: block;
    margin: 10px 0;
  }
  #dfp-ad-top_banner > div {
    margin: 0 auto;
  }
}
.l-bottomboard {
  background: #000;
}
@media (min-width: 0) and (max-width: 767px) {
  .sidebar-wrapper-sticky {
    display: none !important;
  }
}
@media (min-width: 768px) {
  .l-region--sidebar-second {
    display: block;
  }
  .sidebar-wrapper-sticky {
    margin-left: -326px !important;
    display: block;
  }
  .sidebar-wrapper-sticky .l-region--sidebar-second {
    width: 326px !important;
    margin-left: 0 !important;
  }
  .sidebar--inner {
    background: #fff;
    -webkit-box-shadow: 0 2px 2px -2px rgba(0, 0, 0, 0.35);
    -moz-box-shadow: 0 2px 2px -2px rgba(0, 0, 0, 0.35);
    box-shadow: 0 2px 2px -2px rgba(0, 0, 0, 0.35);
    border: 1px solid #e7e7e7;
    padding: 12px;
  }
  .sidebar--inner.autofix_sb.fixed.bottom {
    position: fixed;
    bottom: 20px;
    left: auto !important;
  }
  .section-homepage .sidebar--inner {
    margin-top: 20px;
  }
}
.l-footer {
  font-size: 12px;
  font-size: 0.75rem;
  background: #1f1f1f;
  color: #929292;
  text-align: center;
}
@media (min-width: 0) and (max-width: 768px) {
  .l-footer {
    padding-bottom: 50px;
  }
}
.l-footer .l-footer--inner {
  margin-top: 12px;
  margin-bottom: 12px;
}
.l-footer .block {
  display: none;
}
.l-footer .block--maf-footer-maf-footer-copyright {
  display: block;
  color: #fff;
}
.l-footer .block--maf-footer-maf-footer-copyright p {
  margin: 0;
  line-height: 14px;
}
.l-footer a:hover {
  color: #fff;
}
@media (min-width: 768px) {
  .l-footer {
    border-bottom: 5px solid #000;
    font-family: "Polaris", Helvetica, Arial, sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 11px;
    font-size: 0.6875rem;
    text-align: left;
  }
  .l-footer .block {
    width: 24.05063%;
    float: left;
    margin-right: 1.26582%;
    display: block;
    margin-bottom: 40px;
  }
  .l-footer .block-count-4,
  .l-footer .block-count-5 {
    float: right;
    margin-right: 0;
    *margin-left: -1em;
    margin-bottom: 0;
  }
  .l-footer .block-count-4 .block__title,
  .l-footer
    .block-count-4
    .node-type-recipe
    .field--name-field-directions
    .field-label,
  .node-type-recipe
    .field--name-field-directions
    .l-footer
    .block-count-4
    .field-label,
  .l-footer .block-count-4 .block__content,
  .l-footer .block-count-5 .block__title,
  .l-footer
    .block-count-5
    .node-type-recipe
    .field--name-field-directions
    .field-label,
  .node-type-recipe
    .field--name-field-directions
    .l-footer
    .block-count-5
    .field-label,
  .l-footer .block-count-5 .block__content {
    margin-left: -20px;
  }
  .l-footer .block-count-4 p,
  .l-footer .block-count-5 p {
    line-height: 18px;
  }
  .l-footer .block-count-6 {
    width: 74.68354%;
    margin-bottom: 0;
  }
  .l-footer .block-count-5 .block__title,
  .l-footer
    .block-count-5
    .node-type-recipe
    .field--name-field-directions
    .field-label,
  .node-type-recipe
    .field--name-field-directions
    .l-footer
    .block-count-5
    .field-label {
    font-family: "Polaris", Helvetica, Arial, sans-serif;
    font-weight: 700;
    font-style: normal;
    text-transform: none;
    color: #929292;
    line-height: 1.1em;
    margin: 0 0 15px -20px;
  }
  .l-footer .block--maf-footer-maf-footer-copyright {
    color: #929292;
    margin: 27px 0 10px;
  }
  .l-footer .block--maf-footer-maf-footer-copyright p {
    margin: 0;
  }
  .block--maf-footer-maf-footer-sites-block .footer-links {
    line-height: 0;
  }
  .block--maf-footer-maf-footer-sites-block .footer-links a {
    display: inline-block;
    border-right: 1px solid #00aeef;
    padding: 0 8px 0 0;
    margin: 0 6px 0 0;
    line-height: 10px;
    color: #00aeef;
  }
  .block--maf-footer-maf-footer-sites-block .footer-links a:hover {
    color: #fff;
  }
  .block--maf-footer-maf-footer-sites-block .footer-links a:last-child {
    margin: 0;
    padding: 0;
    border: 0;
  }
  .b-select {
    display: block;
    width: 242px;
    border: 2px solid #000;
    margin-bottom: 35px;
  }
  .block--maf-footer-maf-footer-ami a {
    color: #00aeef;
  }
  .block--maf-footer-maf-footer-ami a:hover {
    color: #fff;
  }
}
@media (min-width: 768px) and (min-width: 768px) and (max-width: 1024px) {
  .block--maf-footer-maf-footer-sites-block {
    font-size: 9px;
    font-size: 0.5625rem;
    white-space: nowrap;
  }
}
@media (min-width: 768px) and (min-width: 768px) and (max-width: 1024px) {
  .b-select {
    width: 95%;
  }
}
@media print {
  html,
  .js body {
    overflow: visible;
  }
  .l-header,
  .l-page {
    position: static;
  }
  .l-branding--site-logo {
    margin: 10px 0 auto;
    float: none;
    text-align: center;
    border: 0;
  }
  .l-branding--site-logo img {
    width: 161px;
    height: 47px;
    border: 0;
    outline: none;
  }
  .l-branding--site-logo a {
    border: 0;
    outline: none;
  }
  .l-off-canvas,
  .l-sub-header,
  .l-leaderboard,
  .l-bottomboard,
  .l-footer,
  .l-region--breadcrumbs,
  .sidebar-wrapper-sticky,
  .l-region--sidebar-second,
  .l-region--header,
  .l-region--navigation,
  .socbar-wrapper-sticky,
  #block-maf-gigya-maf-gigya-sharebar,
  #block-maf-nodes-maf-nodes-topics,
  #block-maf-ads-maf-ads-taboola,
  #block-maf-gigya-maf-gigya-comments,
  #block-maf-nodes-maf-nodes-next-prev,
  .l-off-canvas-show {
    display: none !important;
  }
  .l-content--inner {
    display: block;
    padding: 0;
  }
}
body.page-gnc-coupons .sidebar-wrapper-sticky .l-region--sidebar-second {
  position: static;
}
body.page-gnc-coupons .l-content .gnc-c {
  position: relative !important;
}
body.page-gnc-coupons .l-content h3 {
  color: #000000;
  text-transform: none;
  font-weight: bold;
  margin-bottom: 16px;
}
body.page-gnc-coupons ul.gnc-coups-list {
  margin: 0 0 0 60px;
  padding: 0;
  list-style: none;
}
body.page-gnc-coupons ul.gnc-coups-list li {
  margin: 0 0 10px 0;
  padding: 15px 20px;
  list-style: none;
  border: 4px solid #dadada;
}
body.page-gnc-coupons ul.gnc-coups-list li p.link {
  margin: 0 0 0 30px;
  float: right;
  padding: 10px 25px;
  background: #be0002;
  border-radius: 2px;
}
body.page-gnc-coupons ul.gnc-coups-list li p.link a {
  color: #ffffff;
}
body.page-gnc-coupons ul.gnc-coups-list li p.link.bottom {
  display: none;
}
body.page-gnc-coupons ul.gnc-coups-list li p.link.st-expired {
  background: #dadada;
}
body.page-gnc-coupons ul.gnc-coups-list li p.link.st-expired a {
  color: #000000;
}
body.page-gnc-coupons ul.gnc-coups-list li h4 {
  font-family: "Polaris Condensed", Helvetica, Arial, sans-serif;
  font-weight: 700;
  font-size: 21px;
}
body.page-gnc-coupons ul.gnc-coups-list li p.description {
  margin: 0;
}
body.page-gnc-coupons ul.gnc-coups-list li p.expire {
  font-family: "Polaris Condensed", Helvetica, Arial, sans-serif;
  margin: 0;
  font-size: 14px;
}
@media only screen and (min-width: 320px) and (max-width: 767px) {
  body.page-gnc-coupons .block--maf-gigya-maf-gigya-sharebar {
    display: none;
  }
  body.page-gnc-coupons ul.gnc-coups-list {
    margin: 0;
  }
  body.page-gnc-coupons ul.gnc-coups-list li p.link {
    float: none;
    text-align: center;
    margin: 15px 0 0 0;
  }
  body.page-gnc-coupons ul.gnc-coups-list li p.link.top {
    display: none;
  }
  body.page-gnc-coupons ul.gnc-coups-list li p.link.bottom {
    display: block;
  }
  .fluid-width-video-wrapper object {
    height: auto !important;
  }
}
@media only screen and (min-width: 480px) and (max-width: 1023px) {
  .b-node--full-body-content .fluid-width-video-wrapper,
  .b-node--full-body-content [id*="adaptvDiv"],
  .b-node--full-body-content [id*="SmartPlayer_"],
  .block--maf-sponsorship-one .fluid-width-video-wrapper,
  .block--maf-sponsorship-one [id*="adaptvDiv"],
  .block--maf-sponsorship-one [id*="SmartPlayer_"],
  .node--full--content .fluid-width-video-wrapper,
  .node--full--content [id*="adaptvDiv"],
  .node--full--content [id*="SmartPlayer_"],
  .b-sponsorship-one-html .fluid-width-video-wrapper,
  .b-sponsorship-one-html [id*="adaptvDiv"],
  .b-sponsorship-one-html [id*="SmartPlayer_"] {
    max-height: 270px;
    min-height: 270px !important;
    padding: 0 !important;
    min-width: 100%;
  }
  .b-node--full-body-content .fluid-width-video-wrapper object,
  .b-node--full-body-content [id*="adaptvDiv"] object,
  .b-node--full-body-content [id*="SmartPlayer_"] object,
  .block--maf-sponsorship-one .fluid-width-video-wrapper object,
  .block--maf-sponsorship-one [id*="adaptvDiv"] object,
  .block--maf-sponsorship-one [id*="SmartPlayer_"] object,
  .node--full--content .fluid-width-video-wrapper object,
  .node--full--content [id*="adaptvDiv"] object,
  .node--full--content [id*="SmartPlayer_"] object,
  .b-sponsorship-one-html .fluid-width-video-wrapper object,
  .b-sponsorship-one-html [id*="adaptvDiv"] object,
  .b-sponsorship-one-html [id*="SmartPlayer_"] object {
    min-height: 270px !important;
  }
  .b--channel-videos-top--video .fmvps-wrapper,
  .b--channel-videos-top--video video,
  .b--channel-videos-top--video #adaptvDiv0,
  .node--full--video-big video {
    height: 100% !important;
    max-height: 350px;
    min-height: 270px;
  }
  .node--full--video-big .ami-aol-player,
  .b--channel-videos-top--video .ami-aol-player {
    max-height: 350px;
  }
}
@media only screen and (min-width: 1024px) {
  .b-node--full-body-content object[id*="FiveMin"],
  .b-node--full-body-content [id*="SmartPlayer"],
  .block--maf-sponsorship-one object[id*="FiveMin"],
  .block--maf-sponsorship-one [id*="SmartPlayer"],
  .node--full--content object[id*="FiveMin"],
  .node--full--content [id*="SmartPlayer"],
  .b-sponsorship-one-html object[id*="FiveMin"],
  .b-sponsorship-one-html [id*="SmartPlayer"] {
    max-width: 100%;
    min-width: 100%;
    min-height: 550px !important;
    max-height: 550px;
    padding: 0 !important;
  }
  .b-node--full-body-content object[id*="FiveMin"],
  .block--maf-sponsorship-one object[id*="FiveMin"],
  .node--full--content object[id*="FiveMin"],
  .b-sponsorship-one-html object[id*="FiveMin"] {
    min-height: 550px !important;
    max-height: 550px;
  }
  .has-skin .b-node--full-body-content object[id*="FiveMin"],
  .has-skin .b-node--full-body-content [id*="SmartPlayer"],
  .has-skin .block--maf-sponsorship-one object[id*="FiveMin"],
  .has-skin .block--maf-sponsorship-one [id*="SmartPlayer"],
  .has-skin .node--full--content object[id*="FiveMin"],
  .has-skin .node--full--content [id*="SmartPlayer"],
  .has-skin .b-sponsorship-one-html object[id*="FiveMin"],
  .has-skin .b-sponsorship-one-html [id*="SmartPlayer"] {
    min-height: 350px !important;
    max-height: 350px;
    padding: 0 !important;
  }
}
@media only screen and (max-width: 480px) {
  .b-node--full-body-content .fluid-width-video-wrapper,
  .b-node--full-body-content [id*="adaptvDiv"],
  .b-node--full-body-content [id*="SmartPlayer_"],
  .block--maf-sponsorship-one .fluid-width-video-wrapper,
  .block--maf-sponsorship-one [id*="adaptvDiv"],
  .block--maf-sponsorship-one [id*="SmartPlayer_"],
  .node--full--content .fluid-width-video-wrapper,
  .node--full--content [id*="adaptvDiv"],
  .node--full--content [id*="SmartPlayer_"],
  .b-sponsorship-one-html .fluid-width-video-wrapper,
  .b-sponsorship-one-html [id*="adaptvDiv"],
  .b-sponsorship-one-html [id*="SmartPlayer_"] {
    min-height: 180px !important;
    max-height: 180px;
    padding: 0 !important;
  }
  .b-node--full-body-content .fluid-width-video-wrapper object,
  .b-node--full-body-content [id*="adaptvDiv"] object,
  .b-node--full-body-content [id*="SmartPlayer_"] object,
  .block--maf-sponsorship-one .fluid-width-video-wrapper object,
  .block--maf-sponsorship-one [id*="adaptvDiv"] object,
  .block--maf-sponsorship-one [id*="SmartPlayer_"] object,
  .node--full--content .fluid-width-video-wrapper object,
  .node--full--content [id*="adaptvDiv"] object,
  .node--full--content [id*="SmartPlayer_"] object,
  .b-sponsorship-one-html .fluid-width-video-wrapper object,
  .b-sponsorship-one-html [id*="adaptvDiv"] object,
  .b-sponsorship-one-html [id*="SmartPlayer_"] object {
    min-height: 180px !important;
  }
  .b--channel-videos-top--video .fmvps-wrapper,
  .b--channel-videos-top--video video,
  .b--channel-videos-top--video #adaptvDiv0,
  .node--full--video-big video {
    height: 100% !important;
    max-height: 180px;
  }
  .node--full--video-big .ami-aol-player,
  .b--channel-videos-top--video .ami-aol-player {
    max-height: 180px;
  }
}
body.page-gnc-coupons .l-main:before {
  content: "";
  display: block;
  background-image: url("/sites/muscleandfitness.com/modules/custom/maf_gnc/images/GNC-Header.png");
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center center;
}
@media (min-width: 1024px) {
  body.page-gnc-coupons .l-main:before {
    height: 115px;
  }
}
@media (min-width: 767px) and (max-width: 1023px) {
  body.page-gnc-coupons .l-main:before {
    height: 100px;
  }
}
@media (min-width: 320px) and (max-width: 767px) {
  body.page-gnc-coupons .l-main:before {
    height: 80px;
  }
}
body.has-skin .owl-item .ami-slideshow-slide-image {
  max-width: 637px !important;
  float: left !important;
}
body.has-skin .owl-item {
  height: auto !important;
}
@media print {
  #block-maf-ads-maf-ads-taboola,
  .ntvExpandable {
    display: none;
  }
}
.body-sections p {
    text-align: center; /* Keeps the text centered */
    margin-top: 20px; /* Adds some space above the paragraph */
    font-size: 22px; /* Increases the font size for greater visibility */
    font-weight: bold; /* Makes the text bolder for emphasis */
    font-family: 'Arial Black', Gadget, sans-serif; /* Uses a strong, impactful font */
    color: #FFD700; /* Bright gold color */
    text-transform: uppercase; /* Transforms the text to uppercase for more impact */
    letter-spacing: 1px; /* Increases spacing between letters for better readability */
    line-height: 1.5; /* Adjusts line height for better readability */
    text-shadow: 0px 0px 3px #FFD700, /* Horizontal and vertical shadow with gold color */
                 0px 0px 7px #FFD700, /* Larger blur radius for a glow effect */
                 0px 0px 7px #FFA500, /* Slightly darker shade for depth */
                 0px 0px 7px #FFA500; /* Even larger blur radius for extended glow */
}



#exerciseModal {
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgba(0,0,0,0.5); /* Transparent background */
    display: flex; /* Center vertically and horizontally */
    justify-content: center;
    align-items: center;
}

.modal-content {
    display: block;
    max-width: 80%;
    max-height: 80%;
    box-shadow: 0 4px 8px rgba(0,0,0,0.3); /* Shadow */
}

.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
}
.scroll-arrow {
    position: fixed;
    right: 20px;
    bottom: 20px;
    font-size: 24px;
    cursor: pointer;
    z-index: 1000;
    background: linear-gradient(135deg, #ff0000, white); /* Gradient from red to black */
    color: #fff;
    padding: 10px;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0,0,0,0.5);
    transition: transform 0.3s, background-color 0.3s;
}

.scroll-arrow:hover {
    background-color: #b20000; /* Darker red on hover */
    transform: scale(1.1); /* Slightly enlarge on hover */
}
.video-instruction-section {
    background-color: #f8f9fa; /* Light background for better readability */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    margin-top: 20px; /* Adds space between sections */
    text-align: center; /* Centers the text for better focus */
}

.video-instruction-section h2 {
    color: #333; /* Dark color for headline */
    margin-bottom: 10px;
}

.video-instruction-section p {
    color: #666; /* Lighter text color for instructions */
    font-size: 16px; /* Adequate font size for readability */
    line-height: 1.6; /* Improved line height for better readability */
}

    </style>
</head>
<body>
<div id="scrollArrow" class="scroll-arrow" onclick="toggleScroll()">&#8595;</div> <!-- Initially showing the down arrow -->

<div class="left-sections">
    @auth
        <p>Welcome back, <strong>{{ Auth::user()->name }}</strong>! Your next challenge awaits.</p>
    @else
        @if(Auth::guest())
            <p>Please <a href="{{ route('login') }}" class="login-link">login</a> or <a href="{{ route('register') }}" class="register-link">register</a> to see your dashboard and receive personalized recommendations.</p>
        @else
            <p>Welcome, <strong>guest</strong>! <a href="{{ route('register') }}" class="register-link">Register</a> to track your progress and receive personalized recommendations.</p>
        @endif
    @endauth
    <div class="container">
        <div class="welcome-section">
            <h2>🌟 Embark on Your Personal Fitness Odyssey</h2>
            <p>Dive deep into a world where fitness meets personalization. Each workout, meticulously crafted, targets every inch of your body, paving the way for growth, learning, and an exhilarating journey. Are you geared up to embark?</p>
        </div>
        <div class="exercise-section">
            <h2>🏋️ Ultimate Exercise Compendium</h2>
            <div class="exercise-grid">
                <!-- Biceps -->
                <div class="body-part">
                    <h3>Biceps - Sculpt your arms to perfection:</h3>
                    <ul>
                    <li data-exercise-img="{{ asset('exercices/Barbell-Curl-06.jpg') }}">Barbell Curl - The classic arm builder.</li>
                    <li data-exercise-img="{{ asset('exercices/Dumbbell-Hammer-Curl.jpg') }}">Dumbbell Hammer Curl - For a stronger, more resilient bicep.</li>
                    <li data-exercise-img="{{ asset('exercices/Concentration-Curl.jpg') }}">Concentration Curl - Zero in on muscle growth.</li>
                    </ul>
                </div>
                <!-- Triceps -->
                <div class="body-part">
        <h3>Triceps - Carve out your back arms:</h3>
        <ul>
            <li data-exercise-img="{{ asset('exercices/Tricep-Dips.jpg') }}">Tricep Dips - Elevate your arm strength.</li>
            <li data-exercise-img="{{ asset('exercices/Skull-Crushers.jpg') }}">Skull Crushers - A skull-braving path to power.</li>
            <li data-exercise-img="{{ asset('exercices/Overhead-Tricep-Extension.jpg') }}">Overhead Tricep Extension - Reach for the stars, and tone those triceps.</li>
        </ul>
    </div>
    <!-- Quads -->
    <div class="body-part">
        <h3>Quads - The pillars of strength:</h3>
        <ul>
            <li data-exercise-img="{{ asset('exercices/Squats.jpg') }}">Squats - The foundation of lower body power.</li>
            <li data-exercise-img="{{ asset('exercices/Leg-Press.jpg') }}">Leg Press - Push your limits.</li>
            <li data-exercise-img="{{ asset('exercices/Lunges.jpg') }}">Lunges - Step into stronger legs.</li>
        </ul>
    </div>
    <!-- Shoulders -->
    <div class="body-part">
        <h3>Shoulders - Broaden your horizons:</h3>
        <ul>
            <li data-exercise-img="{{ asset('exercices/Shoulder-Press.jpg') }}">Shoulder Press - Push the world away.</li>
            <li data-exercise-img="{{ asset('exercices/Lateral-Raise.jpg') }}">Lateral Raise - Broaden and build.</li>
            <li data-exercise-img="{{ asset('exercices/Front-Raise.jpg') }}">Front Raise - Lift and sculpt.</li>
        </ul>
    </div>
    <!-- Chest -->
    <div class="body-part">
        <h3>Chest - Build a shield of strength:</h3>
        <ul>
            <li data-exercise-img="{{ asset('exercices/Bench-Press.jpg') }}">Bench Press - The cornerstone of chest development.</li>
            <li data-exercise-img="{{ asset('exercices/decline-Bench-Press.jpg') }}">Decline Bench Press - Aim higher with each press.</li>
            <li data-exercise-img="{{ asset('exercices/Chest-Fly.jpg') }}">Chest Fly - Spread your wings.</li>
        </ul>
    </div>
    <!-- Forearms -->
    <div class="body-part">
        <h3>Forearms - Grip the force:</h3>
        <ul>
            <li data-exercise-img="{{ asset('exercices/Wrist-Curls.jpg') }}">Wrist Curls - Curl towards strength.</li>
            <li data-exercise-img="{{ asset('exercices/Reverse-Wrist-Curls.jpg') }}">Reverse Wrist Curls - Defy the ordinary.</li>
            <li data-exercise-img="{{ asset('exercices/Farmers-Walk.jpg') }}">Farmer's Walk - Carry your way to grit.</li>
        </ul>
    </div>
    <!-- Abs -->
    <div class="body-part">
        <h3>Abs - Core strength for a solid foundation:</h3>
        <ul>
            <li data-exercise-img="{{ asset('exercices/sits.jpg') }}">Sit Ups - The ultimate test of endurance.</li>
            <li data-exercise-img="{{ asset('exercices/Russian-Twists.jpg') }}">Abdominal Twist - Twist into a stronger core.</li>
            <li data-exercise-img="{{ asset('exercices/Leg-Raises.jpg') }}">Hanging Knee Raise - Elevate your core strength.</li>
        </ul>
    </div>
    <!-- Calves -->
    <div class="body-part">
        <h3>Calves - Leap higher and stand stronger:</h3>
        <ul>
            <li data-exercise-img="{{ asset('exercices/Calf-Raises.jpg') }}">Calf Raises - Rise up on strength.</li>
            <li data-exercise-img="{{ asset('exercices/Seated-Calf-Raises.jpg') }}">Seated Calf Raises - Sit into your strength.</li>
            <li data-exercise-img="{{ asset('exercices/Jump-Rope.jpg') }}">Standing Barbell Calf Raise - Bounce into endurance.</li>
        </ul>
    </div>
             <!-- Hamstrings -->
<div class="body-part">
    <h3>Hamstring - Power in every step:</h3>
    <ul>
        <li data-exercise-img="{{ asset('exercices/Deadlifts.jpg') }}">Deadlifts - Lift your way to power.</li>
        <li data-exercise-img="{{ asset('exercices/Leg-Curls.jpg') }}">Leg Curls - Curl into stronger hamstrings.</li>
        <li data-exercise-img="{{ asset('exercices/Glute-Ham-Raise.jpg') }}">Glute-Ham Raise - Raise into resilience.</li>
    </ul>
</div>
<!-- Back -->
<div class="body-part">
    <h3>Back - Your pillar of strength:</h3>
    <ul>
        <li data-exercise-img="{{ asset('exercices/Barbell-Row.jpg') }}">Barbell Row - Perfect for overall back development.</li>
        <li data-exercise-img="{{ asset('exercices/Incline-Dumbbell-Row.jpg') }}">Incline Dumbbell Row - Focus on the upper back and traps.</li>
        <li data-exercise-img="{{ asset('exercices/Wide-Grip-Pull-Ups.jpg') }}">Wide Grip Pull-Ups - Enhance back width and strength.</li>
    </ul>
</div>


<!-- Lats -->
<div class="body-part">
    <h3>Glutes - Foundation of power:</h3>
    <ul>
        <li data-exercise-img="{{ asset('exercices/Step-Ups.jpg') }}">Step Ups - Elevate your glute training.</li>
        <li data-exercise-img="{{ asset('exercices/Squats.jpg') }}">Squats - Deepen your strength foundation.</li>
        <li data-exercise-img="{{ asset('exercices/Dumbbell-Lunges.jpg') }}">Dumbbell Lunges - Step into a stronger lower body.</li>
    </ul>
</div>
<!-- Traps -->
<div class="body-part">
    <h3>Traps - The mountain of might:</h3>
    <ul>
        <li data-exercise-img="{{ asset('exercices/Shrugs.jpg') }}">Shrugs - Shrug into sheer power.</li>
        <li data-exercise-img="{{ asset('exercices/Upright-Rows.jpg') }}">Upright Rows - Lift into strength.</li>
        <li data-exercise-img="{{ asset('exercices/Cable.jpg') }}">Cable Row - Pull into posture and power.</li>
    </ul>
</div>
            </div>
        </div>
        <div class="content">
    <div class="banner">
        <h1>Your Customized Fitness Recommendations</h1>

        <div id="getRecommendation" class="recommendation-action">
            <p>Click here to receive your personalized workout recommendation.</p>
        </div>

        <div id="processing" class="processing" style="display: none;">
</br></br></br></br>
          <div id="load">
              <div>G</div>
              <div>N</div>
              <div>I</div>
              <div>D</div>
              <div>A</div>
              <div>O</div>
              <div>L</div>
            </div>
          </div>

        <div id="recommendationResult" style="display: none;">
            @if(isset($recommendations['recommendations']))
                @if(is_string($recommendations['recommendations']))
                    <p>{{ $recommendations['recommendations'] }}</p>
                @else
                    @foreach($recommendations['recommendations'] as $recommendation)
                        <p>{{ $recommendation }}</p>
                    @endforeach
                @endif

                @if(isset($user_id))
                    <a href="{{ url('/entrainement/' . $user_id) }}">View Your Training Plan</a>
                @endif
            @else
                <p>Recommendations are not available at the moment.</p>
            @endif
        </div>
    </div>
</div>
<div id="exerciseModal" style="display:none;">
    <span class="close">&times;</span>
    <img class="modal-content" id="exerciseImg">
</div>


</div>

<div class="body-sections">
<div class="video-instruction-section">
    <h2>Interactive Exercise Tutorials</h2>
    <p>Select a muscle group from the list below to view a dedicated video tutorial. Each tutorial provides expert guidance to help you perform exercises correctly and safely.</p></div>
<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100%" viewBox="0 0 473.37009 493.9" id="Layer_1" xml:space="preserve">
  <defs id="defs2466"></defs>
  <path d="m 430.92433,492.3 c -6.9,0 -8,-4.9 -8.7,-8.5 l -0.1,-0.5 c -0.7,-3 1.1,-6.4 3,-10 1.2,-2.2 2.3,-4.4 3,-6.6 1.7,-5.5 0.5,-19.4 0,-24.6 v -0.4 c -0.2,-3.3 0.7,-4.6 1.6,-5.6 0.6,-0.7 0.7,-1 0.5,-2.2 -0.4,-1.6 -0.4,-4.2 -0.2,-7.5 0.1,-6.1 0.2,-14.4 -2.1,-19.4 -0.7,-1.7 -1.9,-4.4 -3.3,-7.8 -5,-11.7 -14.1,-33.3 -17.6,-37.4 -4.5,-5.5 -6.1,-9.5 -6.7,-17.9 -0.4,-4.1 -1.6,-5 -4.2,-6.8 -1.7,-1.2 -3.9,-2.7 -6.3,-5.3 -3.4,-3.6 -4,-6.2 -4.6,-8.1 -0.5,-1.9 -0.9,-3.2 -3.6,-5.2 -5.7,-4.2 -9.8,-14.3 -11.1,-17.6 -3.4,0 -11.7,0.1 -15.1,0.2 0,5.2 0.1,21.5 0,26.7 -0.1,3.2 1.1,7.9 2.8,13.7 1.3,5.1 3,11.5 4.5,19.1 2.3,12.4 -0.2,16.1 -2.2,18.9 -0.6,1 -1.1,1.6 -1.2,2.4 -0.6,2.9 1.5,32.9 3,53.3 0.5,0 1.1,0.1 1.6,0.4 1.5,0.5 2.4,1.8 3.6,3.4 0.6,0.7 1.2,1.5 1.8,2.2 2.7,2.8 9.1,9.8 11.2,14.1 2.5,5.2 -1.2,7.8 -6.9,11.5 l -0.9,0.6 c -1.7,1.2 -4.5,3.3 -7.6,5.8 -8.6,6.7 -19.2,15.1 -24.6,16 -1.3,0.2 -2.9,0.4 -4.5,0.4 -7.2,0 -14.9,-2.8 -15.7,-8.3 -1,-6.3 2.1,-11.5 7.2,-12.4 1.5,-0.2 2.4,-0.2 3.2,-0.2 0.1,0 0.1,0 0.2,0 0.1,-0.2 0.2,-0.7 0.4,-0.8 1.1,-2.8 2.9,-7 4,-9.1 0.4,-0.8 0.4,-1.1 0.4,-2.4 0,-1 -0.1,-2.5 0,-5 0.2,-4.6 2.1,-6.7 3.3,-7.5 -0.1,-1.2 -0.2,-3.6 -0.5,-6.7 -0.4,-4.1 -1.3,-10.4 -5.2,-26.7 -2.4,-10.2 -8.3,-35.2 -9,-46.7 -0.2,-3.6 0.1,-6.7 0.4,-9.2 0.5,-4.5 0.7,-7.8 -1.8,-12.3 -3.8,-6.6 -3.9,-13.4 -3.9,-19.3 0,-1.3 0,-2.5 -0.1,-3.8 -0.2,-6.3 -1.7,-11.5 -2.7,-12.5 -2.1,-0.1 -15.1,-1.3 -15.8,-5.7 -0.2,-1.6 0.4,-13.8 1.9,-39.8 0.9,-14.9 1.7,-30.4 1.9,-37.8 0.4,-11.2 2.4,-15.7 3.6,-18.6 0.7,-1.6 1.1,-2.5 1.1,-4 0,-2.9 0.6,-5 1.1,-6.6 0.2,-0.9 0.5,-1.8 0.4,-2.1 -0.2,-0.6 -0.7,-1.7 -1.3,-3 -2.1,6.8 -6.6,17.1 -9.6,22.1 -6.3,10.3 -14,23.4 -14.9,26.1 -1,2.5 -0.7,4.6 -0.5,6.6 0,0.4 0.1,0.7 0.1,1 0.2,2.4 0,7.8 -0.7,10.7 -0.4,1.5 -1.3,3.2 -2.2,4.7 -0.9,1.5 -1.7,3 -1.8,3.9 -0.1,1.2 -0.5,3.4 -0.9,5 -0.1,0.6 -0.2,1.3 -0.4,1.8 0.6,1 2.4,3.9 3.6,5.5 1.5,1.8 2.8,3.8 2.1,6 -0.4,1.1 -1.3,1.8 -2.6,2.1 -0.2,0.6 -0.7,1.2 -1.6,1.7 -0.6,0.4 -1.2,0.5 -1.9,0.5 -0.2,0 -0.4,0 -0.6,0 -0.4,0.5 -1.1,1 -2.2,1.3 -0.4,0.1 -0.6,0.1 -1,0.1 -0.9,0 -1.6,-0.4 -2.2,-0.6 -0.7,0.4 -1.7,0.6 -2.5,0.6 -0.9,0 -1.6,-0.2 -2.2,-0.5 -1.7,-1 -8.1,-7.8 -9,-10.3 -0.5,-1.5 -0.4,-4.1 -0.2,-7.9 0.1,-1.8 0.1,-3.6 0.1,-4.7 -0.2,-3.3 0,-4.2 0.5,-6.2 v -0.1 c 0.2,-1 1.2,-2.4 2.9,-5.3 2.1,-3.4 5.6,-9.1 5.7,-11.3 0.1,-3.5 0.7,-10.3 2.3,-16.4 0.4,-1.5 1,-2.8 1.6,-4.5 2.1,-5.3 5,-12.6 5.3,-27.6 0.4,-15.9 6.2,-28.8 8.9,-35 0.6,-1.2 1.1,-2.6 1.2,-2.9 0.2,-1.2 0.2,-4.9 0.2,-8.4 0,-2.4 0,-5.1 0.1,-7.2 0.2,-5 2.6,-12.8 3.2,-14.7 -0.2,-1 -1.1,-3.9 -3.2,-7.5 -2.8,-5 -6.7,-14.9 -1,-26.1 3.6,-7 9.6,-10.4 14,-12.9 2.2,-1.2 4,-2.3 4.7,-3.3 1.2,-1.8 2.4,-3.4 3.3,-4.4 -3.2,-2.1 -4.9,-6.7 -5.3,-9.8 -0.1,-0.7 -0.1,-1.5 -0.2,-2.2 -0.1,-2.2 -0.4,-3.9 -2.1,-6.8 -1.8,-2.9 -1,-5.2 -0.5,-6.3 -2.9,-1.3 -3.9,-3.8 -3,-7.4 0.7,-3.2 0.7,-3.4 0.9,-11.9 v -0.2 c 0.1,-7.3 2.9,-24.3 25.5,-24.3 0.9,0 1.7,0 2.5,0.1 19.9,1.1 22.5,14.5 22.1,22.2 -0.1,3 -0.5,6.2 -0.7,9.6 -0.5,5.3 -1.1,10.9 -0.9,16.4 0.4,7.9 5.8,11.2 18,15.5 10.2,3.6 13.7,10 14.9,12.4 0,0.1 0.1,0.1 0.1,0.2 2.8,0.9 11,3.9 14.6,13.5 1.9,5.2 3.2,7.3 4.7,10 1.6,2.6 3.3,5.5 6.1,11.8 5.2,11.9 4.5,22.8 4.2,25.4 0.9,1.5 3.3,6.3 3.8,10.8 0.1,1.6 0.2,2.9 0.2,4.2 0,3.2 0.1,6.1 2.3,11.2 3.8,8.4 3.3,25.7 1.6,39.2 -1.9,15.4 -1.9,30.2 -0.7,32.7 1.7,3.4 3.2,9.8 2.5,15.1 -0.1,1.3 -0.1,2.4 -0.1,3.4 0,2.4 0,4.4 -2.7,8.5 -1.5,2.2 -2.9,3.9 -4,5.2 -1.1,1.2 -2.2,2.5 -2.1,3 1.1,2.7 3.2,20.3 3.2,21.6 0,1.7 -1.2,2.3 -1.9,2.6 0.2,2.4 1.9,10 7.3,14.7 4.2,3.8 5.6,5.9 8.1,10.4 1.6,2.7 3.6,6.4 7.4,11.9 8.3,12.4 8.9,25.7 9.4,34.5 0.1,1.7 0.1,3.3 0.2,4.5 0.6,6.6 6.1,33.6 7.4,40.1 2.5,0 4.5,1.3 5.6,3.6 1.5,3.2 4.6,6.4 8.6,9 4.4,2.8 8.1,10 6.9,17.5 -0.5,3.2 -2.3,6 -4,8.7 -2.1,3.4 -4.2,6.8 -4.1,10.7 v 1.2 c 0.2,7 0.5,11.3 -7,18.9 -7.8,7.9 -16.4,9.3 -23.9,10.1 -0.6,-0.4 -1.1,-0.2 -1.7,-0.2 z m -48.7,-334.5 c -1.1,3.2 -2.7,8.3 -3.2,11.9 -0.9,5.3 1,12.4 1.6,13.2 0.1,0.1 0.4,0.4 0.7,0.5 1.1,0.7 2.7,1.7 3.9,4.5 0.2,0.6 0.9,1.6 1.5,2.8 2.7,5.2 7.2,13.8 8.3,21.4 0.6,4.2 1.2,9.6 1.7,13.8 0,-0.1 0,-0.2 0,-0.4 0,-1.1 0,-2.4 0.1,-3.9 0.1,-5.5 0.2,-13 -1.2,-18 -1.9,-6.4 -3.9,-13.5 -4,-23.1 -0.1,-7.8 -1.1,-11.8 -1.3,-12.8 l -8.1,-9.9 z" id="path3" style="fill:#ffffff"></path>
  <path d="m 322.82433,3.1 c 0.9,0 1.6,0 2.4,0.1 18.2,1 20.9,12.6 20.6,20.6 -0.2,8 -2.1,17.1 -1.6,26.2 0.5,9.1 7,12.6 19.1,16.9 11.9,4.2 14.1,12.4 14.7,12.5 0.6,0.1 10.3,2.4 14.1,12.6 3.8,10.3 5.1,8.9 10.9,21.9 5.7,13 4,25 4,25 0,0 3.3,5.6 3.8,10.7 0.6,5.1 -0.6,8.3 2.7,15.9 3.3,7.5 3.3,23.6 1.5,38.4 -1.8,14.8 -2.1,30.5 -0.6,33.5 1.5,3 3,9.2 2.4,14.2 -0.6,5 0.7,5.8 -2.6,11.2 -3.3,5.3 -7,7.4 -6.2,9.7 0.9,2.3 3,19.4 3,21 0,1.5 -1.9,0.7 -1.9,1.9 0,1.2 1.2,10.6 7.9,16.4 6.7,5.8 5.6,7.5 15.3,22 9.7,14.4 8.6,30.8 9.4,38.4 0.7,7.5 7.6,41.6 7.6,41.6 0,0 0.5,-0.1 1.2,-0.1 1.2,0 3.2,0.4 4.2,2.7 1.7,3.6 5.1,7 9.2,9.7 4.1,2.6 7.3,9.4 6.2,15.9 -1.1,6.4 -8.5,12 -8.1,19.8 0.2,7.6 0.9,11.4 -6.4,19.1 -7.4,7.5 -15.5,8.9 -23,9.7 -0.6,0 -1.1,0.1 -1.6,0.1 -5.9,0 -6.4,-4 -7.3,-7.8 -0.9,-4.1 4.2,-9.8 6.1,-15.7 1.9,-5.9 0.5,-20.5 0,-25.6 -0.5,-5.1 2.9,-3.9 1.9,-8 -0.9,-4.1 1.2,-19.2 -2.4,-27.3 -3.6,-8.1 -16.6,-39.9 -21.1,-45.4 -4.5,-5.5 -5.7,-9.2 -6.3,-16.9 -0.6,-7.6 -4.5,-6.2 -11.1,-13.1 -6.4,-6.9 -1.9,-8.7 -8.5,-13.6 -6.4,-4.9 -10.9,-18 -10.9,-18 -2.9,0 -17.7,0.2 -17.7,0.2 0,0 0.2,22 0,28.3 -0.2,6.2 4.2,16.9 7.3,33.1 3,16.3 -2.7,16.5 -3.4,20.8 -0.9,4.2 3.2,55.4 3.2,55.4 0,0 0.4,-0.1 1,-0.1 0.4,0 0.9,0 1.5,0.2 1.5,0.5 2.9,3.2 4.9,5.1 1.9,2.1 8.9,9.5 10.8,13.7 2.1,4.2 -0.9,6 -7.2,10.2 -6.2,4.2 -24.6,20.3 -31.7,21.6 -1.3,0.2 -2.7,0.4 -4.1,0.4 -6.4,0 -13.5,-2.5 -14.2,-6.9 -0.9,-5.5 1.7,-9.8 5.8,-10.6 4.1,-0.7 3.8,0.7 5,-2.1 1.1,-2.8 2.9,-6.9 3.9,-9.1 1,-2.1 0.2,-2.3 0.5,-8 0.2,-5.7 3.3,-6.8 3.3,-6.8 0,0 -0.1,-3.2 -0.6,-7.6 -0.5,-4.5 -1.5,-11.2 -5.3,-26.8 -3.8,-15.7 -8.3,-36.5 -8.9,-46.5 -0.6,-10 2.7,-14.4 -1.7,-22.2 -4.4,-7.6 -3.5,-15.9 -3.8,-22.3 -0.2,-6.4 -1.9,-14.1 -3.9,-14.1 -1.9,0 -14.1,-1.7 -14.5,-4.4 -0.5,-2.7 3.3,-60.2 3.9,-77.2 0.6,-17 4.9,-17.6 4.9,-22.6 0,-5 1.9,-7.5 1.3,-9.2 -0.6,-1.7 -3.3,-7 -3.3,-7 -0.6,5 -6.4,19.4 -10.4,26 -3.9,6.4 -13.8,23.1 -15.1,26.4 -1.3,3.3 -0.7,5.9 -0.5,8.3 0.2,2.3 0,7.4 -0.6,10.1 -0.7,2.7 -3.8,6.7 -4.1,8.9 -0.2,2.2 -1.3,7 -1.2,7.3 0,0.2 2.4,4.2 4,6.2 1.5,1.9 2.2,3.3 1.8,4.5 -0.4,1.1 -1.9,1.2 -2.3,1.2 -0.1,0 -0.1,0 -0.1,0 0,0 0.2,1.1 -1,1.8 -0.4,0.2 -0.9,0.2 -1.2,0.2 -0.9,0 -1.6,-0.4 -1.6,-0.4 0.1,1 -0.7,1.5 -1.7,1.7 -0.1,0 -0.4,0.1 -0.5,0.1 -1.1,0 -2.1,-1 -2.1,-1 -0.2,0.4 -1.5,1 -2.5,1 -0.5,0 -1,-0.1 -1.5,-0.4 -1.5,-0.9 -7.6,-7.4 -8.3,-9.5 -0.7,-2.1 0.1,-9.2 -0.1,-12.3 -0.2,-3.2 0,-3.8 0.5,-5.8 0.5,-2.1 8.5,-12.9 8.6,-16.9 0.2,-4 0.9,-10.4 2.3,-16.2 1.5,-5.6 6.4,-12.6 6.9,-32.4 0.5,-19.8 9.7,-35.3 10.1,-37.6 0.4,-2.3 0.2,-10.3 0.4,-15.8 0.2,-5.5 3.3,-14.7 3.3,-14.7 0,0 -0.7,-3.5 -3.4,-8.4 -2.7,-4.9 -6.2,-14.2 -0.9,-24.5 5.3,-10.3 16.1,-12.4 18.6,-16.2 2.4,-3.8 4.6,-5.8 4.6,-5.8 -3.8,-0.7 -6,-6.1 -6.4,-9.3 -0.5,-3.3 0,-5.5 -2.6,-9.5 -2.6,-4.1 1.5,-5.8 -0.7,-6.8 -2.3,-0.9 -3.3,-2.4 -2.6,-5.7 0.7,-3.3 0.7,-3.8 0.9,-12.5 0,-9.3 3.5,-23.7 23.8,-23.7 m 73.4,232.6 c 0.5,0 1.8,-4.9 1.8,-10.1 0,-5.7 0.7,-15.9 -1.2,-22.3 -1.9,-6.4 -3.8,-13.2 -3.9,-22.6 -0.1,-9.4 -1.5,-13.5 -1.5,-13.5 l -9.8,-12.6 c 0,0 -3.3,9.2 -4.2,14.9 -0.9,5.7 1.1,13.5 1.9,14.4 0.9,1.1 2.9,1.3 4.4,4.7 1.5,3.3 8.3,14.7 9.5,23.7 1.2,9.1 2.6,22.2 2.9,23.2 0.1,0.2 0.1,0.2 0.1,0.2 M 322.82433,0 V 3.2 0 c -10,0 -17.4,3.2 -22.1,9.5 -4,5.5 -5,11.9 -5,16.4 v 0.2 c -0.1,8.5 -0.1,8.7 -0.9,11.5 -1,4.5 0.6,7 2.7,8.4 -0.5,1.6 -0.6,3.8 1.1,6.6 1.6,2.5 1.7,3.9 1.8,6.1 0,0.6 0.1,1.5 0.2,2.2 0.4,2.7 1.7,7 4.6,9.8 -0.7,1 -1.6,2.1 -2.3,3.3 -0.5,0.7 -2.4,1.8 -4.1,2.8 -4.5,2.5 -10.8,6.1 -14.6,13.6 -6.1,11.8 -1.9,22.3 1,27.6 1.7,3 2.6,5.6 2.9,6.7 -0.7,2.6 -2.9,9.8 -3,14.7 -0.1,2.2 -0.1,4.7 -0.1,7.3 0,3.2 0,6.8 -0.2,8 -0.1,0.4 -0.6,1.6 -1.1,2.5 -2.8,6.3 -8.6,19.4 -9,35.6 -0.4,14.6 -3.2,21.7 -5.2,27 -0.6,1.7 -1.2,3.2 -1.7,4.7 -1.7,6.3 -2.2,13.2 -2.4,16.8 -0.1,1.8 -3.6,7.6 -5.5,10.4 -1.9,3.2 -2.8,4.6 -3.2,5.8 v 0.1 c -0.5,2.2 -0.7,3.3 -0.6,6.7 0.1,1.1 0,2.9 -0.1,4.6 -0.1,4.1 -0.2,6.8 0.4,8.5 1,2.9 7.8,10.2 9.7,11.3 0.9,0.5 1.8,0.7 2.9,0.7 0.7,0 1.6,-0.1 2.4,-0.4 0.6,0.2 1.5,0.5 2.3,0.5 0.5,0 1,-0.1 1.5,-0.2 1,-0.4 1.7,-0.7 2.2,-1.2 1,0 1.9,-0.2 2.7,-0.7 0.9,-0.5 1.5,-1.1 1.8,-1.7 1.5,-0.5 2.4,-1.5 2.9,-2.8 1.1,-3.2 -1.1,-5.9 -2.3,-7.5 -1,-1.2 -2.4,-3.5 -3.2,-4.7 0.1,-0.4 0.1,-0.8 0.2,-1.2 0.4,-1.7 0.7,-3.8 0.9,-5.1 0.1,-0.6 1.1,-2.3 1.6,-3.3 1,-1.7 1.9,-3.4 2.4,-5.1 0.9,-3 1,-8.6 0.7,-11.2 0,-0.4 -0.1,-0.7 -0.1,-1.1 -0.2,-1.9 -0.4,-3.6 0.4,-5.8 0.7,-2.1 6.8,-12.5 14.8,-25.9 1.9,-3.3 4.5,-8.7 6.7,-14 -0.1,0.9 -0.1,1.7 -0.1,2.7 0,1.1 -0.2,1.8 -1,3.4 -1.3,3 -3.4,7.7 -3.8,19.2 -0.2,7.4 -1.1,22.8 -1.9,37.8 -1.7,29.1 -2.2,38.5 -1.8,40.2 0.5,2.7 3.2,4.4 9.1,5.7 2.5,0.6 5.5,1 7.3,1.2 0.7,1.7 1.7,6.1 1.9,11.1 0,1.2 0.1,2.4 0.1,3.8 0.1,5.8 0.1,13.1 4.1,20 2.3,4.1 2.1,6.9 1.6,11.3 -0.2,2.7 -0.6,5.7 -0.4,9.5 0.7,11.7 6.6,36.8 9,47 3.9,16.2 4.9,22.5 5.2,26.5 0.2,2.4 0.4,4.5 0.5,5.8 -1.5,1.3 -3,3.8 -3.2,8.1 -0.1,2.5 -0.1,4.1 0,5.1 0,1.2 0,1.2 -0.2,1.7 -1,2.2 -2.8,6.2 -4,9.1 -0.6,0 -1.5,0.1 -2.5,0.2 -5.8,1 -9.5,7 -8.4,14.1 0.5,3.2 2.9,5.8 6.8,7.5 2.9,1.3 6.8,2.1 10.6,2.1 1.7,0 3.3,-0.1 4.7,-0.5 5.3,-1.1 14.2,-7.8 25.3,-16.4 3.2,-2.4 5.8,-4.6 7.5,-5.7 l 0.9,-0.6 c 5.6,-3.8 10.4,-7 7.4,-13.6 -2.2,-4.5 -8.7,-11.7 -11.4,-14.5 -0.6,-0.6 -1.1,-1.3 -1.7,-2.1 -1.3,-1.7 -2.6,-3.3 -4.5,-3.9 -0.2,-0.1 -0.4,-0.1 -0.6,-0.1 -1.5,-19.4 -3.4,-48.6 -2.9,-51.7 0.1,-0.5 0.4,-1 1,-1.8 2.5,-3.6 4.6,-8 2.4,-20 -1.5,-7.5 -3.2,-14.1 -4.5,-19.2 -1.6,-5.8 -2.8,-10.4 -2.7,-13.4 0.1,-4.9 0,-18.9 0,-25.3 3.5,0 9.1,-0.1 12.4,-0.1 1.6,4.1 5.6,13.2 11.2,17.4 2.4,1.8 2.7,2.7 3,4.4 0.5,2.1 1.2,4.9 5,8.9 2.7,2.8 4.9,4.4 6.6,5.6 2.7,1.8 3.3,2.3 3.6,5.7 0.6,7.8 1.8,12.4 7,18.7 3.3,4 12.4,25.4 17.4,36.9 1.5,3.4 2.6,6.1 3.3,7.8 2.1,4.7 2.1,12.9 1.9,18.8 0,3.6 -0.1,6.2 0.2,7.9 0.1,0.4 0.1,0.5 0.1,0.6 0,0.1 -0.1,0.2 -0.2,0.4 -1.1,1.3 -2.2,3.2 -1.8,6.7 v 0.4 c 0.4,4.6 1.7,18.9 0.1,24 -0.6,2.1 -1.8,4.2 -2.9,6.3 -2.1,3.8 -4,7.4 -3.2,11 l 0.1,0.5 c 0.9,3.6 2.1,9.7 10.3,9.7 0.6,0 1.2,0 1.9,-0.1 7.8,-0.8 16.8,-2.3 24.9,-10.6 7.9,-8.1 7.8,-12.9 7.4,-20.2 v -1.2 c -0.1,-3.4 1.8,-6.6 3.9,-9.8 1.8,-2.9 3.6,-6 4.2,-9.4 1.2,-7.4 -2.1,-15.5 -7.6,-19.1 -3.8,-2.4 -6.7,-5.3 -8,-8.3 -1.1,-2.4 -3.2,-4 -5.7,-4.5 -1.6,-8 -6.6,-32.7 -7.2,-38.7 -0.1,-1.2 -0.2,-2.7 -0.2,-4.5 -0.4,-8.5 -1.1,-22.6 -9.6,-35.3 -3.6,-5.5 -5.8,-9.1 -7.3,-11.8 -2.6,-4.4 -4,-6.8 -8.5,-10.8 -4.4,-3.9 -6.1,-9.7 -6.6,-12.6 1.5,-1 1.8,-2.6 1.8,-3.4 0,-1.3 -1.9,-17.5 -3,-21.6 0.4,-0.5 1,-1.2 1.6,-1.9 1.2,-1.3 2.7,-3.2 4.1,-5.5 2.7,-4.1 2.8,-6.3 2.9,-9.2 0,-1 0,-1.9 0.1,-3.2 0.6,-5.5 -0.9,-12.4 -2.7,-16 -1,-2.2 -1,-15.9 1,-31.7 0.9,-6.6 3,-29 -1.7,-40 -2.1,-4.9 -2.2,-7.5 -2.2,-10.6 0,-1.3 0,-2.8 -0.2,-4.4 -0.5,-4.5 -2.7,-9.1 -3.8,-10.9 0.2,-3.4 0.7,-14.2 -4.4,-25.7 -2.8,-6.4 -4.7,-9.5 -6.2,-12 -1.6,-2.6 -2.8,-4.6 -4.6,-9.7 -3.5,-9.6 -11.5,-13.1 -14.9,-14.3 -1.5,-2.6 -5.3,-9.1 -15.7,-12.8 -12.8,-4.5 -16.6,-7.7 -16.9,-14.1 -0.2,-5.3 0.2,-10.9 0.9,-16.3 0.4,-3.4 0.6,-6.6 0.7,-9.7 0.5,-14.3 -8,-23.1 -23.7,-23.9 -1,0 -1.8,-0.1 -2.7,-0.1 l 0,0 z m 59,182 c -0.7,-1.6 -2.1,-7.5 -1.3,-12 0.4,-2.6 1.3,-5.9 2.2,-8.9 l 5.8,7.5 c 0.4,1.2 1.1,5.1 1.2,12 0.1,7.3 1.2,13.1 2.6,18.2 -1.5,-3.4 -3.2,-6.4 -4.4,-8.9 -0.6,-1.2 -1.1,-2.2 -1.3,-2.8 -1.5,-3.2 -3.3,-4.4 -4.4,-5.1 -0.1,0.1 -0.3,0 -0.4,0 l 0,0 z" id="path5" style="fill:#231f20"></path>
  <path d="m 154.92433,491.9 c -0.5,0 -1,0 -1.5,0 -9.2,-0.2 -16.2,-1.9 -21.2,-3.3 -2.9,-0.7 -5.3,-1.3 -7,-1.3 0,0 -0.5,0 -0.7,0 -5.2,0 -14.8,-2.4 -18.8,-5.5 -4.5,-3.4 -2.4,-7.4 -1.5,-9.6 0.1,-0.2 0.2,-0.5 0.4,-0.6 0.5,-1.2 1.5,-5.8 2.2,-9.6 0.6,-2.9 1.2,-6 1.7,-7.9 1.3,-5.3 4.6,-5.9 5.2,-6.1 0.1,-1.1 1,-11.3 -2.2,-21.6 -1.9,-6.3 -3.3,-12.4 -4.5,-17.6 -1.2,-5.5 -2.3,-10.6 -3.9,-15.1 -0.7,-2.1 -1.7,-3.5 -2.8,-5 -2.099996,-2.9 -4.399996,-6.3 -4.999996,-14.1 -0.5,-5.7 0.2,-14.1 1.1,-21.1 -0.4,1 -0.9,2.1 -1.3,3.3 -3.9,9.5 -18.5,37.3 -24.7,48.2 -6.2,10.8 -7.8,19.1 -7.7,20.6 0.1,1 1.6,3.3 3,5.7 1.1,1.7 2.3,3.6 3.4,5.7 2.8,5 5.1,7.4 9.2,9.6 7.5,3.9 10.7,6.9 10.6,9.8 -0.2,4.2 -4,9.1 -13.8,10 -0.9,0.1 -1.7,0.1 -2.7,0.1 -9.6,0 -18.5,-4.7 -21.9,-6.6 l -0.1,-0.1 c -4.1,-2.2 -7.7,-4.1 -15.3,-6.3 -8.1,-2.3 -11.7,-6.4 -10.7,-12.5 0.4,-2.7 1.9,-4.9 3.4,-6.9 1.5,-2.2 3,-4.4 3.6,-7.4 1.1,-5.7 5,-7.4 6.9,-8.1 0.2,-0.1 0.5,-0.2 0.6,-0.2 1.8,-3.6 16.4,-41.6 17.2,-45.2 0.2,-1 0.1,-1.9 0,-3.3 -0.1,-1.8 -0.4,-4.4 0.2,-8.3 1.1,-6.9 11.1,-26.1 13,-29.1 1.5,-2.3 3.9,-8.4 4.6,-10.1 -1.2,-0.5 -2.8,-1.6 -2.9,-3.5 -0.1,-0.9 -1.8,-2.8 -2.4,-3 -2.1,-1.2 -11.2,-6.8 -14.3,-10.1 l -10.8,13.7 c -0.7,0.9 -1.9,1.6 -3.2,1.6 l -18.5,1.1 c -0.1,0 -0.1,0 -0.2,0 -1,0 -2.2,-0.4 -3,-1 l -10.7,-7.6 c -0.8,-0.6 -1.6,-1.8 -1.8,-2.9 l -4.5,-22.2 c -0.2,-1.1 0.1,-2.5 1,-3.5 l 13.2,-14.8 c 0.7,-0.7 1.8,-1.5 2.8,-1.7 l 9.3,-1.9 c 0.5,-0.1 1.1,-0.1 1.5,-0.1 0.6,0 1.1,0 1.6,0.1 l 4.6,1 c 0.6,0.1 1.6,0.2 2.2,0.2 l 2.2,0.1 c -0.4,-3.2 -2.2,-16.6 -4.6,-34.5 -2.6,-18.2 -0.5,-39.3 -0.5,-39.6 0,-0.6 0.1,-1.7 0.1,-2.3 0,-0.4 0,-9.1 0.1,-12 0,-1.3 -0.2,-3.2 -0.8,-6.2 -0.7,-4.1 -1.9,-10.2 -3,-20.2 -1.2,-10.9 0.6,-19.2 2.2,-25.9 1,-4 1.7,-7.5 1.5,-10.4 -0.6,-9.1 4.9,-19.3 12.6,-23.9 4,-2.3 8,-3.6 11.3,-4.7 1.9,-0.6 4.2,-1.5 4.7,-1.9 1.8,-2.4 5.3,-5.2 9.8,-8 1.8,-1.1 3.8,-2.2 5.6,-3 1.9,-1 4.6,-2.3 5,-2.9 0.6,-1.5 1.9,-6.3 1.9,-7.4 -0.2,-0.4 -1,-1.5 -1.6,-2.2 -0.8,-1.2 -1.9,-2.4 -2.6,-3.6 -1.3,-2.4 -2.9,-11.1 -3.2,-13.8 0,-0.4 -0.1,-0.8 -0.2,-1.5 -1,-5.6 -3.8,-20.5 9.5,-28.9 6.1,-3.8 13.399996,-6 20.499996,-6 7.8,0 14.6,2.6 18.1,6.8 3.9,4.6 4.4,9.7 4.7,13.8 0.1,1.9 0.4,3.5 0.7,4.7 1.5,3.4 1.2,4.5 0.7,6.4 -0.1,0.4 -0.2,1 -0.4,1.6 l -0.1,0.5 c -0.2,1.5 -0.2,1.5 0.1,3.5 0.1,0.7 0.4,1.8 0.7,3.2 1.5,6.7 0,10.6 -1.5,14.5 -0.6,1.6 -1.2,3.3 -1.7,5.1 -1.7,7.5 -6.8,8.6 -8,8.7 l -0.1,3.6 c 0,0.1 0.1,0.6 0.4,0.6 0.1,0.1 3,2.3 4.7,5.5 0.2,0.4 0.4,0.7 0.6,1.1 0.5,1 0.5,1 2.1,1.6 l 1.2,0.5 c 4.9,2.1 9.3,4.4 11.1,10.9 1.1,3.9 0.7,5.7 0.5,7.4 -0.2,1.5 -0.5,3 0.1,6.3 1.3,7.5 1.5,12.6 1.6,19.1 v 2.4 c 0.2,11.8 -5.5,17.4 -6.6,18.2 0.4,0.6 1.3,2.9 1,7.2 -0.5,5.6 -0.7,20.9 -0.7,21 0,0.5 0.1,1.5 0.2,1.8 l 0.1,0.6 c 1.8,6.3 0.7,21.9 -1,34.5 -1.8,12.5 2.3,38.2 2.4,38.5 0,0.2 0.4,0.7 0.6,0.9 0.1,0.1 0.5,0.2 0.8,0.2 0.6,0 1,-0.9 1.2,-1.5 0.5,-1.3 1.7,-2.1 3.2,-2.1 1.1,0 2.4,0.4 3.5,0.7 0.6,0.2 1.5,0.5 1.8,0.5 1.6,0 11.3,1.3 12.5,2.1 0.6,0.4 1,1 1.1,1.5 0.1,0.2 0.2,0.5 0.4,0.6 4.9,6.7 5,7.2 5,7.7 0.1,0.6 0.8,2.1 1.6,3.2 0.6,1 0.8,2.3 0.6,3.4 l -1,4.2 c -0.2,0.8 -0.7,2.1 -1.3,2.8 -1.6,1.9 -3.8,4.4 -5.5,4.4 -14.7,0 -16.1,-0.9 -16.8,-1.3 -0.4,-0.1 -1.5,-0.5 -2.2,-0.7 -2.2,-0.6 -4.6,-1.2 -6.1,-2.4 -0.2,0.2 -0.6,0.6 -1,0.9 -1.8,1.8 -4,4 -6.2,4 h 0.3 c -0.5,0 -1,-0.1 -1.3,-0.1 0.2,0.7 0.5,1.6 0.8,2.4 4.6,14.4 7.8,24.6 7.8,27.1 0,2.1 -0.9,2.9 -1.7,3.3 0,0.1 0,0.2 0.1,0.5 0.8,3.8 0,13.6 -1.1,17.2 -1.1,3.4 -3.4,14 -3.4,16.5 0,0.6 0,2.2 0.1,4.7 0.4,9.7 1.1,32.7 0.4,47.4 -0.8,17.7 5.1,35.8 6.4,37.5 0.1,0.1 0.7,0.5 1.3,0.7 1.8,1 4.5,2.3 5.1,6 0.4,1.7 1.9,2.8 4.6,4.5 1.8,1.2 3.9,2.4 5.7,4.4 4.2,4.2 15.8,12.3 19.9,13.4 2.9,0.8 5.5,3.3 6.2,6.2 0.6,2.2 0.2,4.2 -1.1,5.6 -2.3,2.6 -12.7,6.9 -26.6,6.9 l 0,0 z" id="path7" style="fill:#ffffff"></path>
  <path d="m 108.42433,10.4 c 7.2,0 13.6,2.2 16.9,6.2 5.5,6.4 3.6,14.1 5.2,18.1 1.7,4 0.7,4.1 0.2,7 -0.6,2.9 -0.5,1.7 0.8,7.8 1.9,8.7 -1.6,12.3 -3.2,18.8 -1.7,7.3 -6.8,7.5 -6.8,7.5 -0.6,0 -1.2,0.6 -1.2,1.2 l -0.1,3.9 c 0,0.6 0.4,1.6 1,1.9 0,0 2.8,2.1 4.4,5 1.6,2.8 0.7,2.2 4.6,3.8 5,2.2 8.6,4.2 10.2,9.8 1.8,6.9 -0.7,6.2 0.6,13.6 1.5,8.3 1.5,13.5 1.7,21.2 0.2,12 -6.1,17 -6.1,17 -0.5,0.4 -0.7,1.2 -0.4,1.8 0,0 1.2,1.9 0.8,6.3 -0.5,5.7 -0.7,21.1 -0.7,21.1 0,0.6 0.1,1.7 0.4,2.3 0,0 0,0 0.1,0.6 1.7,5.9 0.7,20.9 -1.1,33.9 -1.8,13 2.4,39 2.4,39 0.1,0.6 0.6,1.6 1.2,1.9 0,0 0.8,0.6 1.8,0.6 1,0 1.9,-0.5 2.7,-2.4 0.2,-0.7 1,-1.1 1.7,-1.1 1.7,0 4,1.2 5.2,1.2 1.8,0 10.9,1.3 11.7,1.8 0.5,0.2 0.5,1 1.1,1.7 0.6,0.7 4.6,6.3 4.7,6.9 0.1,1.3 1.9,3.9 1.9,3.9 0.4,0.6 0.6,1.6 0.4,2.2 l -1,4.2 c -0.1,0.6 -0.6,1.6 -1,2.2 0,0 -2.9,3.8 -4.2,3.8 -1.3,0 -14.7,0 -15.7,-1 -1,-1 -7.5,-1.6 -9,-3.9 0,-0.1 -0.1,-0.1 -0.2,-0.1 -1.1,0 -4.6,5.3 -7.3,5.3 h -0.1 c -1.7,-0.1 -2.7,-0.5 -3.2,-0.5 -0.4,0 -0.4,0.2 -0.2,1 0.5,1.7 9,27.2 9,30.5 0,3.3 -2.3,0.6 -1.5,4.1 0.8,3.5 0,13.1 -1.1,16.4 -1.1,3.3 -3.5,14.1 -3.5,17 0,2.9 1.3,33.8 0.5,52 -0.9,18.2 5.5,37.4 6.8,38.7 1.3,1.3 5.3,1.8 6.1,6 0.7,4.1 6.3,5.3 10.8,9.7 4.5,4.4 16.3,12.6 20.6,13.8 4.4,1.2 6.8,6.7 4.4,9.2 -2.3,2.5 -11.9,6.7 -25.9,6.7 -0.5,0 -1,0 -1.5,0 -14.4,-0.2 -23.3,-4.6 -28.3,-4.6 -0.1,0 -0.1,0 -0.2,0 -0.1,0 -0.2,0 -0.5,0 -5,0 -14.2,-2.4 -18,-5.2 -3.8,-2.9 -1.7,-6.1 -0.6,-8.4 1.1,-2.3 2.7,-13.1 3.9,-17.7 1.2,-4.6 4,-4.9 4,-4.9 0.6,0 1.2,-0.6 1.3,-1.3 0,0 1.2,-10.9 -2.3,-22.3 -3.9,-12.6 -5.1,-23.6 -8.4,-32.8 -2.2,-6.2 -6.799996,-7.3 -7.799996,-18.7 -1,-11.4 3,-34 3,-34 0,-0.4 0.1,-0.5 0,-0.5 0,0 -0.1,0.1 -0.2,0.5 0,0 -2.3,6.3 -6.1,15.8 -3.8,9.5 -18.3,37 -24.5,48 -6.2,10.9 -8,19.4 -7.9,21.6 0.1,2.2 3.6,6.6 6.7,12 3,5.5 5.8,8 9.8,10.2 4.1,2.2 9.8,5.5 9.7,8.4 -0.1,2.9 -2.6,7.5 -12.4,8.5 -0.8,0.1 -1.7,0.1 -2.4,0.1 -9,0 -17.1,-4.2 -21,-6.3 -4.2,-2.3 -7.9,-4.2 -15.8,-6.6 -7.9,-2.4 -10.3,-6 -9.6,-10.8 0.7,-4.9 5.8,-7.9 7,-14.3 1.2,-6.4 6.2,-6.7 7.2,-7.5 1,-0.9 16.9,-43 17.6,-45.9 0.7,-2.9 -0.7,-5.1 0.2,-11.7 0.9,-6.6 10.9,-25.6 12.8,-28.5 1.9,-2.9 4.9,-10.8 4.9,-10.8 0.2,-0.6 -0.1,-1.3 -0.7,-1.5 0,0 -2.2,-0.6 -2.3,-2.3 -0.1,-1.7 -2.4,-3.9 -3.2,-4.2 -0.7,-0.4 -14.3,-8.9 -14.7,-10.7 -0.1,-0.4 -0.1,-0.4 -0.1,-0.4 0,-0.1 -0.1,-0.1 -0.1,-0.1 -0.1,0 -0.5,0.2 -0.7,0.5 l -11.7,14.6 c -0.4,0.5 -1.3,1 -1.9,1 l -18.3,1.1 h -0.1 c -0.6,0 -1.6,-0.2 -2.1,-0.6 l -10.7,-7.6 c -0.5,-0.4 -1.1,-1.2 -1.2,-1.9 l -4.5,-22.2 c -0.1,-0.6 0.1,-1.6 0.6,-2.1 l 13.2,-14.8 c 0.5,-0.5 1.3,-1 1.9,-1.1 l 9.3,-1.9 c 0.4,-0.1 0.7,-0.1 1.1,-0.1 0.5,0 0.8,0 1.2,0.1 l 4.6,1 c 0.6,0.1 1.7,0.2 2.4,0.4 l 2.8,0.1 c 0,0 0,0 0.1,0 0.6,0 1.1,-0.5 1,-1.1 0,0 -1.8,-14.6 -4.7,-35.2 -2.4,-18.3 -0.5,-39.3 -0.5,-39.3 0.1,-0.6 0.1,-1.7 0.1,-2.4 0,0 0,-9.1 0.1,-12 0.1,-3.4 -1.9,-9.1 -3.9,-26.6 -1.9,-17.5 4.2,-28 3.6,-36.3 -0.5,-8.3 4.5,-18.1 11.9,-22.3 7.4,-4.2 14.9,-5.1 16.4,-7 1.5,-1.9 4.7,-4.7 9.3,-7.5 4.6,-2.8 10.6,-5.1 11.2,-6.7 0.6,-1.5 2.4,-7.4 2.1,-8.5 -0.3,-1.1 -3.2,-4 -4.2,-6.2 -1,-2.2 -2.8,-10.4 -3,-13.2 -0.4,-3.2 -5.3,-20 8.5,-28.9 6.7,-4.3 13.699996,-6 20.199996,-6 m 0,-3.1 0,0 c -7.5,0 -15.099996,2.2 -21.399996,6.2 -14.1,9 -11.2,25.3 -10.2,30.6 0.1,0.5 0.2,1.1 0.2,1.3 0.2,2.9 1.9,11.7 3.4,14.4 0.7,1.3 1.7,2.7 2.7,3.9 0.4,0.5 0.9,1.1 1.2,1.6 -0.2,1.5 -1.1,4.7 -1.7,6.1 -0.7,0.6 -2.8,1.7 -4.4,2.4 -1.8,1 -3.8,1.9 -5.7,3.2 -4.5,2.8 -8.3,5.7 -10.2,8.3 -0.6,0.4 -2.4,1 -4,1.6 -3.2,1 -7.3,2.4 -11.5,4.9 -8.3,4.9 -14.1,15.7 -13.5,25.4 0.1,2.8 -0.6,6.1 -1.5,10.1 -1.6,6.8 -3.4,15.2 -2.2,26.4 1.1,10 2.3,16.1 3,20.3 0.5,2.9 0.8,4.7 0.8,5.8 -0.1,2.9 -0.1,11.8 -0.1,12.1 0,0.6 0,1.6 -0.1,2.1 -0.1,0.9 -2.1,21.6 0.5,39.9 2.2,15.4 3.8,27.6 4.4,32.7 h -0.2 c -0.5,0 -1.5,-0.1 -1.9,-0.2 l -4.6,-1 c -0.7,-0.1 -1.5,-0.2 -1.9,-0.2 -0.5,0 -1.1,0 -1.8,0.1 l -9.3,1.9 c -1.3,0.2 -2.8,1.1 -3.8,2.2 l -13,14.6 c -1.09999998,1.2 -1.69999998,3.2 -1.29999998,4.9 L 4.724334,310.8 c 0.2,1.5 1.3,2.9 2.4,3.9 l 10.7,7.6 c 1.1,0.7 2.5,1.2 3.9,1.2 0.1,0 0.2,0 0.4,0 l 18.5,-1.1 c 1.6,-0.1 3.3,-1 4.2,-2.2 l 9.7,-12.3 c 1.2,1 3,2.3 5.7,4.1 3.5,2.4 7,4.6 7.7,4.9 0.5,0.4 1.5,1.5 1.7,1.9 0.2,1.8 1.2,3.2 2.6,4 -1.1,2.7 -2.8,6.8 -3.9,8.5 -1.9,3 -12,22.6 -13.2,29.8 -0.6,4 -0.4,6.7 -0.2,8.6 0.1,1.3 0.1,2.1 0,2.8 -0.7,2.6 -14.2,38.5 -16.9,44.3 l 0,0 c -1.9,0.8 -6.6,2.7 -7.9,9.3 -0.5,2.7 -1.9,4.7 -3.4,6.8 -1.6,2.2 -3.2,4.5 -3.6,7.5 -1.1,6.9 2.9,11.8 11.8,14.3 7.5,2.2 10.9,4 15.1,6.2 l 0.1,0.1 c 3.4,1.8 12.5,6.7 22.6,6.7 1,0 1.8,0 2.8,-0.1 10.9,-1 15.1,-6.6 15.3,-11.5 0.2,-4.6 -5.3,-8.1 -11.4,-11.3 -3.2,-1.7 -5.7,-3.6 -8.5,-8.9 -1.2,-2.1 -2.4,-4 -3.5,-5.7 -1.2,-1.8 -2.7,-4.1 -2.8,-5 0,-1.1 1.2,-8.6 7.5,-19.7 5.2,-9.1 16.3,-30 22.1,-42.3 -0.2,4.1 -0.4,8.1 -0.1,11.3 0.6,8.1 3.2,11.8 5.2,14.8 1.099996,1.6 1.899996,2.8 2.599996,4.6 1.6,4.5 2.7,9.6 3.9,14.9 1.2,5.3 2.6,11.4 4.5,17.7 2.7,8.5 2.4,16.9 2.2,19.9 -1.6,0.6 -4.1,2.3 -5.3,6.9 -0.5,2.1 -1.1,5 -1.7,8 -0.6,3.3 -1.6,8.1 -2.1,9.2 -0.1,0.2 -0.2,0.4 -0.2,0.6 -1.1,2.2 -3.599996,7.4 1.8,11.5 4.2,3.3 14.2,5.8 19.8,5.8 0.2,0 0.4,0 0.5,0 h 0.1 c 1.5,0 3.9,0.6 6.6,1.3 5.2,1.3 12.3,3 21.6,3.3 0.5,0 1,0 1.5,0 13.6,0 24.7,-4 28.2,-7.7 1.7,-1.8 2.3,-4.4 1.5,-7.2 -1,-3.5 -3.9,-6.4 -7.4,-7.3 -3.5,-1 -14.9,-8.6 -19.3,-13 -1.9,-1.9 -4.1,-3.4 -5.9,-4.5 -2.3,-1.5 -3.8,-2.4 -3.9,-3.5 -0.8,-4.4 -4.1,-6.1 -5.9,-7 -0.2,-0.1 -0.6,-0.4 -0.8,-0.5 -1.6,-3 -6.8,-20.3 -6.1,-36.4 0.7,-14.7 0,-37.6 -0.4,-47.5 -0.1,-2.3 -0.1,-4.1 -0.1,-4.6 0,-2.4 2.3,-12.8 3.4,-16 1.2,-3.6 1.9,-13.1 1.2,-17.5 1,-0.9 1.5,-2.2 1.5,-4 0,-2.3 -2.1,-9.5 -7.9,-27.6 0,-0.1 -0.1,-0.2 -0.1,-0.4 2.7,-0.4 4.9,-2.6 6.7,-4.4 1.7,1 3.8,1.5 5.5,1.9 0.6,0.1 1.3,0.4 1.7,0.5 1,0.9 3.4,1.6 17.6,1.6 0.7,0 2.9,0 6.8,-5 0.7,-0.9 1.3,-2.3 1.6,-3.4 l 1,-4.2 c 0.4,-1.5 0,-3.4 -0.8,-4.6 -0.6,-0.8 -1.2,-2.1 -1.3,-2.5 -0.1,-0.9 -0.2,-1.6 -5.3,-8.4 -0.1,-0.1 -0.1,-0.2 -0.2,-0.4 -0.2,-0.5 -0.7,-1.5 -1.7,-2.1 -1.8,-1.1 -11.9,-2.2 -13.2,-2.3 -0.2,0 -1,-0.2 -1.3,-0.4 -1.2,-0.4 -2.6,-0.8 -4,-0.8 -2.1,0 -3.6,1 -4.5,2.7 -0.7,-5 -3.8,-26.2 -2.2,-37 1.7,-11.9 2.9,-28.2 1,-35.1 l -0.1,-0.6 c -0.1,-0.4 -0.2,-1.1 -0.2,-1.5 0,-0.1 0.2,-15.4 0.7,-21 0.2,-3.3 -0.2,-5.6 -0.6,-6.9 2.1,-2.2 6.4,-8 6.2,-18.6 v -2.4 c -0.1,-6.6 -0.2,-11.8 -1.7,-19.3 -0.6,-3 -0.4,-4.4 -0.1,-5.8 0.2,-1.8 0.6,-3.9 -0.5,-8.1 -1.9,-7.2 -7,-9.8 -12,-11.9 -0.5,-0.2 -0.9,-0.4 -1.2,-0.5 -0.3,-0.1 -0.7,-0.4 -1,-0.5 -0.1,-0.1 -0.1,-0.2 -0.2,-0.4 -0.1,-0.2 -0.4,-0.6 -0.6,-1.1 -1.6,-2.8 -4,-5 -4.9,-5.7 l 0.1,-2.1 c 2.3,-0.7 6.4,-2.9 8,-9.6 0.4,-1.8 1,-3.3 1.6,-4.9 1.6,-4 3.2,-8.3 1.6,-15.3 -0.4,-1.5 -0.6,-2.4 -0.7,-3.2 -0.4,-1.7 -0.4,-1.7 -0.1,-2.8 l 0.1,-0.5 c 0.1,-0.6 0.2,-1 0.4,-1.5 0.6,-2.3 0.7,-3.8 -0.7,-7.4 -0.4,-1 -0.5,-2.6 -0.7,-4.2 -0.4,-4.1 -0.8,-9.7 -5.1,-14.7 -5,-4 -12,-6.6 -20.4,-6.6 l 0,0 0,0 z" id="path9" style="fill:#231f20"></path>
  <path d="m 26.224334,437.7 c 0,0 0.2,5.9 9.6,8.3 9.4,2.3 10.7,2.8 15.8,7.4 5.1,4.6 11.9,9.1 21.7,8.6 10,-0.5 5.3,-2.2 7.6,-4.9 2.3,-2.7 4,-3.3 5.7,-3.5 1.6,-0.2 -2.7,-4 -6.6,-6.2 -3.9,-2.2 -8.1,-4.2 -10.3,-8.6 -2.2,-4.4 -6.3,-10.7 -7,-12.1 -0.7,-1.4 -1.1,-1.9 -3.5,-1.9 -2.4,0 -5.1,2.4 -6.2,2.9 -1.1,0.5 -4.6,-0.9 -7.5,-0.6 -2.9,0.2 -4.6,4.5 -7,1.8 -2.3,-2.7 -1.7,-3.9 -1,-6 0.7,-2.1 2.8,-3.4 2.8,-5 0,-1.6 -6.6,2.2 -7,4.4 -0.5,2.2 -2.3,7.5 0.8,12.5 3.2,5.1 4.5,6.4 6.1,8.1 1.6,1.7 -4.6,0.1 -7,-2.7 -2.5,-2.8 -4.9,-5.2 -4.9,-6.3 0,-1.1 -2.1,3.8 -2.1,3.8 z" id="path11" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g13">
    <path d="m 141.1,396.5 -2.2,-2.3 c 0,-0.1 0.7,-25.9 1.7,-32.9 0.7,-5.8 1,-14.8 1.1,-19.2 0,-1.1 0,-1.9 0.1,-2.4 0.1,-2.8 1.5,-6.4 1.5,-6.6 l 2.3,0.9 c 0,0 -1.2,3.4 -1.3,5.8 0,0.5 0,1.3 -0.1,2.3 -0.1,4.7 -0.4,13.6 -1.1,19.5 -1,7.1 -2,34.8 -2,34.9 z" id="path15" style="fill:#231f20"></path>
  </g>
  <path d="m 131.22433,293.8 c 0,0 -5.1,-15.5 -7.2,-23.7 -2.2,-8.1 -9.3,-24.4 -14.4,-29 0,0 6.3,2.1 10.7,11.5 4.4,9.5 12.6,35.5 13.5,39.3 0.7,3.9 -1.7,3.2 -2.6,1.9 z" id="path17" style="fill:#231f20"></path>
  <path d="m 115.32433,445.3 c 0,0 0.6,6.9 0.1,8.5 -0.5,1.6 -1,3 0.8,4.2 1.7,1.2 2.8,1.3 9.7,-2.9 6.9,-4.4 10.4,-8.3 12.6,-9.8 2.2,-1.5 5.6,0.6 6.3,1.8 0.8,1.2 1.8,5.8 4.6,7.8 2.8,2 8.3,5.6 11.7,8.6 3.4,2.9 12.9,8 16,9.6 3.3,1.6 5.9,3.6 6.1,8.3 0.1,4.6 -5.6,6.8 -13.1,8.6 -7.5,1.8 -18.7,2.9 -27.2,1.5 -8.6,-1.5 -15.3,-3.9 -17.2,-4.1 -2.1,-0.1 -10.3,0.1 -14.4,-2.3 -4.1,-2.4 -8.3,-2.9 -8,-7.2 0.2,-4.2 1.9,-8.3 2.3,-11.4 0.4,-3.1 2.8,-13.4 4.1,-15.1 1.3,-1.7 3.2,-2.3 3.2,-2.3 0,0 0.6,-7.7 2.4,-3.8 z" id="path19" style="fill:#231f20"></path>
  <path d="m 110.62433,459.8 c 0,0 10.8,12.9 14.4,15.7 3.8,2.8 -1.2,1 -5.6,0.5 -4.4,-0.5 -11.8,-3.5 -12.4,-6.1 -0.7,-2.5 0.2,-6.4 1.5,-6.6 1.1,-0.1 3.4,3.2 5.9,5.3 2.6,2.3 -4.6,-6 -3.8,-8.8 z" id="path21" style="fill:#ffffff"></path>
  <path d="m 126.82433,466.4 15.1,9.7 c 1.1,-0.6 2.2,-1.2 3.2,-1.7 l -14.2,-9.1 c -1.3,0.4 -2.7,0.7 -4.1,1.1 z" id="path23" style="fill:#ffffff"></path>
  <path d="m 121.22433,468 c 0,0 15.2,10.8 15.7,11.1 0.2,0.1 1.9,-1 3.9,-2.2 l -15.5,-10 c -2.4,0.6 -4.1,1.1 -4.1,1.1 z" id="path25" style="fill:#ffffff"></path>
  <path d="m 136.82433,464.5 c -0.4,-0.2 -2.1,0.1 -4.2,0.6 l 14,9 c 2.9,-0.9 4.1,-1.1 5.3,-1.1 1.3,-0.2 -13.8,-7.9 -15.1,-8.5 z" id="path27" style="fill:#ffffff"></path>
  <path d="m 179.52433,476.4 c 0,0 -1.3,2.7 -6.1,3 -4.7,0.4 -7.3,0.5 -8.9,0.7 -1.6,0.2 0.5,2.1 3.8,2.4 3.3,0.4 5,0.4 5,0.4 0,0 -7.3,3.3 -14.7,3.5 -7.4,0.2 -16.2,-0.4 -22,-3.2 -5.8,-2.8 -9,-3.4 -14.3,-4.2 -5.2,-1 -13.2,-4.4 -14.8,-5.8 -1.6,-1.5 -2.2,-0.2 -1.9,0.5 0.2,0.7 1.5,3.3 7.9,5.3 6.4,2 11.4,2.5 14.1,3.6 2.7,1.1 13.2,7.7 27.8,7.7 14.6,0 22.1,-3.5 25,-7 2.8,-3.2 0.6,-6 -0.9,-6.9 z" id="path29" style="fill:#ffffff"></path>
  <path d="m 122.82433,459.8 c 0,0 0.7,-0.2 1.9,-0.8 0.6,-0.2 1.3,-0.6 2.2,-1 0.9,-0.4 1.7,-0.9 2.8,-1.5 0.2,-0.1 0.5,-0.2 0.9,-0.4 0.4,-0.1 0.7,-0.1 1.1,-0.2 0.7,0 1.5,0 2.1,0.2 0.7,0.1 1.3,0.4 2.1,0.7 0.7,0.2 1.3,0.6 1.9,1 0.6,0.4 1.3,0.7 1.9,1.1 0.6,0.4 1.3,0.7 1.9,1.2 1.2,0.8 2.4,1.7 3.8,2.7 1.2,0.8 2.4,1.8 3.6,2.7 1.2,1 2.4,1.7 3.6,2.4 1.2,0.9 2.3,1.5 3.5,2.1 0.2,0.1 0.6,0.4 0.9,0.5 0.2,0.1 0.6,0.2 0.8,0.4 0.6,0.2 1.1,0.5 1.6,0.7 0.5,0.1 1.1,0.4 1.5,0.4 0.5,0 0.9,0.1 1.3,0 0.9,-0.1 1.6,-0.5 2.2,-0.7 0.2,-0.2 0.5,-0.4 0.7,-0.5 0.1,-0.2 0.4,-0.4 0.5,-0.5 0.2,-0.4 0.2,-0.5 0.2,-0.5 0,0 -0.1,0.1 -0.2,0.5 -0.1,0.1 -0.2,0.4 -0.4,0.6 -0.1,0.2 -0.4,0.4 -0.6,0.6 -0.6,0.4 -1.2,0.9 -2.2,1.1 -0.5,0.1 -1,0.1 -1.6,0.2 -0.4,0 -0.5,-0.1 -0.8,-0.1 -0.2,-0.1 -0.5,0 -0.8,-0.2 -1.1,-0.4 -2.3,-0.7 -3.5,-1.3 -0.6,-0.2 -1.2,-0.6 -1.8,-0.8 -0.6,-0.2 -1.2,-0.7 -1.8,-1.1 -1.2,-0.7 -2.6,-1.5 -3.8,-2.4 -1.2,-0.9 -2.4,-1.7 -3.8,-2.7 -1.2,-0.9 -2.4,-1.8 -3.6,-2.7 -1.2,-0.9 -2.4,-1.7 -3.6,-2.4 -0.6,-0.4 -1.2,-0.7 -1.8,-1 -0.6,-0.2 -1.2,-0.6 -1.7,-0.7 -0.6,-0.2 -1.1,-0.2 -1.7,-0.2 -0.2,0 -0.5,0.1 -0.7,0.1 -0.2,0 -0.5,0.2 -0.9,0.2 -1,0.4 -2.1,0.9 -2.9,1.1 -0.8,0.2 -1.7,0.5 -2.3,0.7 -1.7,0.3 -2.5,0.5 -2.5,0.5 z" id="path31" style="fill:#ffffff"></path>
  <path d="m 152.82433,458.3 c 0,0 -7.2,-5.1 -10.6,-8.9 0.1,0 1.9,5.7 10.6,8.9 z" id="path33" style="fill:#ffffff"></path>
  <g transform="translate(-81.275666,-143.2)" id="g35">
    <path d="m 160.3,474.9 c -1.7,0 -2.3,-1.9 -3.6,-5.8 -0.4,-1 -0.7,-2.2 -1,-2.7 -0.1,0 -0.5,-0.1 -0.6,-0.1 -1.1,-0.1 -2.7,-1.9 -3.4,-4.1 l 2.7,0.7 c 0.1,0.1 0.6,0.1 1,0.2 0.8,0.1 2.2,0.2 2.9,1.5 0.4,0.6 0.7,1.7 1.3,3.4 0.4,1 0.8,2.6 1.2,3.5 0.5,-0.2 1.1,-0.5 1.7,-0.7 1.2,-0.5 2.8,-1.2 4.9,-2.1 4.6,-1.9 11.1,-2.7 19.6,-2.6 5.5,0.1 16.6,-2.2 23.3,-3.6 2.4,-0.5 4.2,-0.9 5.5,-1.1 3,-0.5 3.8,-1.2 3.8,-1.2 0,0 -0.1,0.1 -0.2,0.4 l 1.7,1.2 c -0.2,1 -0.2,1.9 -4.9,2.7 -1.1,0.2 -2.9,0.6 -5.3,1.1 -7.2,1.5 -18.1,3.8 -23.9,3.6 -8.1,-0.1 -14.1,0.6 -18.3,2.3 -2.1,0.9 -3.6,1.6 -4.7,2.1 -2,1 -2.9,1.3 -3.7,1.3 z" id="path37" style="fill:#231f20"></path>
  </g>
  <path d="m 57.624334,359 c 0,0 0.1,1.2 0.2,3 0,0.9 0,1.9 0.1,3 0,1.1 0,2.2 0.1,3.4 0,0.6 0.1,1.1 0.1,1.7 0.1,0.5 0.1,1.1 0.2,1.6 0.1,1 0.4,1.9 0.7,2.7 0.1,0.4 0.4,0.7 0.6,1 0.2,0.2 0.4,0.5 0.6,0.7 0.2,0.2 0.4,0.2 0.5,0.4 0.1,0.1 0.2,0.1 0.2,0.1 0,0 -0.1,0 -0.2,0 -0.1,0 -0.4,0 -0.7,-0.1 -0.2,-0.1 -0.6,-0.2 -1,-0.5 -0.1,-0.1 -0.4,-0.2 -0.6,-0.4 -0.1,-0.1 -0.4,-0.4 -0.5,-0.5 -0.4,-0.4 -0.7,-0.9 -1,-1.3 -0.3,-0.4 -0.5,-1.1 -0.7,-1.6 -0.4,-1.1 -0.6,-2.4 -0.6,-3.6 0,-0.6 0,-1.2 0,-1.8 0,-0.6 0.1,-1.2 0.2,-1.7 0.1,-1.1 0.4,-2.2 0.7,-3 0.5,-2 1.1,-3.1 1.1,-3.1 z" id="path39" style="fill:#231f20"></path>
  <path d="m 65.424334,372.3 c 0,0 1.7,-1.9 4,-5.1 0.6,-0.7 1.2,-1.6 1.8,-2.4 0.6,-0.9 1.3,-1.8 1.9,-2.8 0.6,-1 1.3,-2.1 1.9,-3.2 0.6,-1.1 1.2,-2.2 1.7,-3.3 0.5,-1.1 0.8,-2.3 1.2,-3.4 0.2,-1.2 0.6,-2.4 0.8,-3.5 0.1,-0.6 0.2,-1.1 0.4,-1.7 0.1,-0.6 0.1,-1.1 0.1,-1.6 0.1,-0.5 0.1,-1.1 0.1,-1.6 0,-0.5 0,-1 0,-1.5 0,-0.5 -0.1,-0.9 -0.1,-1.3 0,-0.4 -0.2,-0.9 -0.2,-1.2 -0.1,-0.7 -0.5,-1.3 -0.7,-1.8 -0.2,-0.5 -0.5,-0.9 -0.7,-1.1 -0.1,-0.2 -0.2,-0.4 -0.2,-0.4 0,0 0.1,0.1 0.4,0.4 0.2,0.2 0.6,0.5 1,1 0.4,0.5 0.8,1 1.1,1.8 0.1,0.4 0.4,0.7 0.5,1.2 0.1,0.5 0.2,1 0.4,1.5 0.1,0.5 0.1,1 0.2,1.6 0,0.5 0.1,1.1 0.1,1.7 0,0.6 0,1.2 0,1.7 0,0.6 -0.1,1.2 -0.2,1.8 -0.1,1.2 -0.4,2.4 -0.7,3.6 -0.2,1.3 -0.7,2.6 -1.2,3.8 -0.5,1.2 -1.2,2.4 -1.8,3.5 -0.6,1.1 -1.5,2.2 -2.2,3.2 -0.7,1 -1.5,1.9 -2.2,2.8 -0.7,0.9 -1.5,1.6 -2.1,2.3 -3.1,2.5 -5.3,4 -5.3,4 z" id="path41" style="fill:#231f20"></path>
  <path d="m 111.82433,346.7 c 0,0 -0.1,2.4 -0.2,6.1 -0.1,1.8 -0.1,3.9 -0.2,6.2 0,1.1 -0.1,2.3 -0.1,3.5 0,1.2 -0.1,2.4 -0.1,3.6 0,1.2 -0.1,2.4 -0.1,3.6 0,1.2 -0.1,2.3 -0.1,3.5 0,1.1 0,2.2 0,3.3 0,1.1 -0.1,2.1 0,2.9 0.1,3.6 0,6.1 0,6.1 0,0 -0.5,-2.4 -1,-6.1 -0.1,-1 -0.2,-1.9 -0.2,-2.9 -0.1,-1.1 -0.1,-2.2 -0.2,-3.3 -0.1,-1.1 -0.1,-2.3 -0.1,-3.5 0,-1.2 0,-2.4 0,-3.6 0,-1.2 0.1,-2.4 0.2,-3.6 0.1,-1.2 0.1,-2.4 0.2,-3.5 0.1,-1.1 0.2,-2.2 0.4,-3.3 0.1,-1.1 0.2,-2.1 0.4,-2.9 0.2,-1.8 0.6,-3.3 0.9,-4.4 0,-1.1 0.2,-1.7 0.2,-1.7 z" id="path43" style="fill:#231f20"></path>
  <path d="m 121.52433,443.7 c 0,0 -0.2,14.3 -0.5,15.5 -0.1,1.3 1.8,-0.4 1.8,-0.4 0,0 -0.3,-13.3 -1.3,-15.1 z" id="path45" style="fill:#231f20"></path>
  <path d="m 41.324334,200.3 c 0,0 -0.1,0.9 -0.2,2.2 -0.1,1.3 -0.2,3.4 -0.2,5.7 0,1.2 0,2.4 0,3.8 0.1,1.3 0.1,2.8 0.4,4.2 0,0.7 0.1,1.5 0.2,2.2 0.1,0.7 0.2,1.5 0.4,2.3 0.2,1.5 0.7,3 1.2,4.5 l 0.8,2.2 c 0.4,0.7 0.7,1.3 1,2.1 0.7,1.3 1.6,2.6 2.4,3.8 0.9,1.2 1.7,2.4 2.4,3.5 0.7,1.2 1.5,2.3 1.9,3.4 0.6,1.1 1,2.1 1.3,3 0.2,1 0.5,1.8 0.5,2.4 0.1,0.7 0,1.2 0,1.6 0,0.4 0,0.6 0,0.6 0,0 0,-0.2 0,-0.6 0,-0.4 0,-1 -0.1,-1.6 -0.1,-0.7 -0.4,-1.5 -0.7,-2.3 -0.4,-0.9 -0.8,-1.8 -1.5,-2.8 -0.6,-1.1 -1.3,-2.1 -2.1,-3.2 -0.7,-1.1 -1.7,-2.2 -2.5,-3.4 -0.8,-1.2 -1.8,-2.4 -2.7,-3.8 -0.4,-0.7 -0.7,-1.5 -1.1,-2.2 l -0.8,-2.3 c -0.5,-1.6 -0.8,-3 -1.2,-4.6 -0.1,-0.7 -0.2,-1.6 -0.4,-2.3 -0.1,-0.7 -0.2,-1.6 -0.2,-2.3 -0.1,-1.5 -0.1,-2.9 -0.1,-4.4 0,-1.3 0.1,-2.7 0.1,-3.9 0.1,-1.2 0.2,-2.3 0.4,-3.3 0.1,-1 0.2,-1.8 0.4,-2.4 0.2,-1.2 0.4,-2.1 0.4,-2.1 z" id="path47" style="fill:#231f20"></path>
  <path d="m 48.824334,179.9 c 0,0 0.7,0.7 1.9,2.2 0.6,0.7 1.2,1.6 1.9,2.7 0.7,1.1 1.6,2.3 2.3,3.6 0.4,0.7 0.7,1.5 1.2,2.2 0.4,0.7 0.7,1.6 1.1,2.4 0.7,1.7 1.3,3.4 1.9,5.3 0.6,1.8 1,3.9 1.3,5.8 0.1,1 0.2,2.1 0.4,3 0.1,1.1 0.1,2.1 0.2,3.2 0.1,1.1 0,2.1 0,3.2 v 1.6 l -0.1,1.5 c -0.1,2.1 -0.4,4 -0.5,6 -0.4,3.9 -0.7,7.4 -1.1,10.4 -0.4,3 -0.7,5.6 -0.8,7.4 -0.2,1.8 -0.4,2.8 -0.4,2.8 0,0 0,-1 0,-2.8 0,-1.8 0,-4.4 0.1,-7.4 0.1,-3 0.2,-6.7 0.5,-10.4 0.1,-1.9 0.2,-3.9 0.4,-6 l 0.1,-1.6 v -1.5 c 0,-1 0.1,-2.1 0,-3 0,-1 -0.1,-2.1 -0.1,-3 -0.1,-1 -0.2,-1.9 -0.4,-3 -0.1,-1 -0.4,-1.9 -0.5,-2.9 -0.1,-1 -0.5,-1.9 -0.6,-2.8 -0.2,-1 -0.5,-1.8 -0.7,-2.7 -0.2,-0.8 -0.6,-1.7 -0.9,-2.5 -0.2,-0.9 -0.6,-1.6 -1,-2.4 -0.4,-0.7 -0.6,-1.5 -1,-2.2 -0.6,-1.3 -1.3,-2.7 -1.9,-3.8 -0.6,-1.1 -1.2,-2.1 -1.7,-2.8 -1,-1.7 -1.6,-2.5 -1.6,-2.5 z" id="path49" style="fill:#231f20"></path>
  <path d="m 37.924334,435.2 c -0.6,0 0,1.3 1,1.9 0,0 10.7,10.1 11.7,10.3 0.2,0 1.6,0 3.2,0 l -13.6,-12.4 c -1.3,0.1 -2.1,0.2 -2.3,0.2 z" id="path51" style="fill:#ffffff"></path>
  <path d="m 41.824334,435.1 13.6,12.3 c 1,0 2.1,-0.1 3,-0.1 l -13.5,-12.3 c -0.9,0.1 -2,0.1 -3.1,0.1 z" id="path53" style="fill:#ffffff"></path>
  <path d="m 50.124334,435.4 c -0.4,-0.2 -1.6,-0.4 -3.2,-0.4 l 13.4,12.1 c 2.1,-0.1 3.8,-0.2 4.1,-0.2 0.9,-0.2 -13.1,-10.7 -14.3,-11.5 z" id="path55" style="fill:#ffffff"></path>
  <path d="m 31.424334,450.6 c 0,0 1.6,0.9 6.4,1.5 4.9,0.6 6.6,0.6 11.3,3.9 4.7,3.3 8.9,7.5 13.2,8.4 4.4,0.8 18.6,0.4 19.9,-0.4 1.3,-0.8 0.2,-3.4 1.5,-6.1 1.1,-2.7 3.3,-3.6 4,-3.2 0.8,0.5 1,3.9 -0.2,6.3 -1.1,2.3 -7.7,6.7 -18.5,6.1 -10.8,-0.6 -19.2,-8.3 -23.1,-9.6 -3.7,-1.4 -15.9,-5.1 -14.5,-6.9 z" id="path57" style="fill:#231f20"></path>
  <path d="m 53.024334,430.1 c 0,0 0.5,0 1.2,0.4 0.4,0.1 0.9,0.4 1.3,0.7 0.5,0.2 1.1,0.7 1.6,1.2 0.5,0.5 1.1,1.1 1.6,1.7 0.5,0.6 1.1,1.2 1.7,1.9 1.2,1.3 2.4,2.7 3.6,4.1 1.2,1.5 2.4,2.8 3.6,4.1 0.6,0.6 1.2,1.2 1.7,1.8 0.6,0.5 1.1,1.1 1.7,1.2 0.7,0.1 1.3,0.4 1.8,0.4 0.2,0 0.5,0 0.7,0.1 0.2,0 0.5,0 0.6,0 0.4,0 0.7,-0.1 1,-0.1 0.2,0 0.4,-0.1 0.4,-0.1 0,0 -0.1,0 -0.4,0.1 -0.2,0.1 -0.5,0.2 -1,0.2 -0.2,0 -0.5,0.1 -0.7,0.1 -0.2,0 -0.5,0 -0.8,0 -0.6,0.1 -1.2,0 -1.9,-0.1 -0.9,-0.2 -1.5,-0.7 -2.2,-1.2 -0.6,-0.5 -1.3,-1.1 -1.9,-1.7 -1.3,-1.2 -2.5,-2.7 -3.8,-4 -1.2,-1.5 -2.4,-2.9 -3.5,-4.2 -0.5,-0.7 -1.1,-1.3 -1.6,-1.9 -0.5,-0.6 -1,-1.2 -1.5,-1.7 -0.5,-0.5 -1,-1 -1.3,-1.3 -0.5,-0.4 -0.8,-0.6 -1.2,-0.9 -0.2,-0.7 -0.7,-0.8 -0.7,-0.8 z" id="path59" style="fill:#ffffff"></path>
  <g transform="translate(-81.275666,-143.2)" id="g61">
    <path d="m 127.4,568.3 c -1.1,0 -2.2,0 -3,-0.2 -3.6,-0.5 -3.9,-2.8 -3.8,-5 0.2,-2.3 0.2,-4 0.2,-4 l 1.7,0.1 c 0,0 -0.1,1.7 -0.4,4.1 -0.1,2.1 0.1,2.8 2.3,3.2 2.4,0.4 7.9,0.1 12.3,-0.9 1.1,-0.2 1.9,-0.5 2.7,-0.6 2.3,-0.6 3.2,-0.7 4.1,-0.6 l -0.4,1.7 c -0.6,-0.1 -1.3,0 -3.4,0.6 -0.7,0.1 -1.6,0.4 -2.7,0.6 -2.8,0.6 -6.6,1 -9.6,1 z" id="path63" style="fill:#231f20"></path>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g65">
    <path d="m 158.3,472.9 c -0.1,-0.4 -3.2,-9.1 -2.6,-16 l 2.4,0.2 c -0.6,6.3 2.3,14.9 2.3,14.9 l -2.1,0.9 z" id="path67" style="fill:#231f20"></path>
  </g>
  <path d="m 70.624334,253.7 c 0.5,1.9 1,3.8 1.6,5.5 0.2,0.8 0.5,1.6 0.7,2.3 0.5,0 0.8,0 1.3,0.1 -0.2,-0.8 -0.5,-1.8 -0.6,-2.7 -0.5,-1.7 -0.9,-3.5 -1.2,-5.5 -0.2,-1 -0.5,-1.9 -0.6,-2.9 -0.2,-1 -0.4,-1.9 -0.6,-2.9 -0.4,-1.9 -0.9,-4 -1.2,-6.1 -0.4,-2.1 -0.6,-4 -1,-6.1 -0.2,-1.9 -0.4,-4 -0.6,-5.8 -0.2,-1.9 -0.2,-3.8 -0.4,-5.6 -0.1,-1.8 -0.1,-3.4 -0.1,-5 0,-1.6 -0.1,-2.9 0,-4.2 0,-1.2 0,-2.3 0.1,-3.3 0.1,-0.9 0.1,-1.6 0.2,-2.1 0.1,-0.5 0.2,-0.7 0.4,-0.6 0,0 -0.2,0.1 -0.4,0.6 -0.1,0.2 -0.2,0.5 -0.2,0.8 -0.1,0.4 -0.2,0.7 -0.2,1.2 -0.1,0.9 -0.4,1.9 -0.5,3.3 -0.1,0.6 -0.1,1.3 -0.2,1.9 0,0.7 -0.1,1.5 -0.1,2.2 -0.1,1.6 -0.1,3.3 -0.1,5 0,1.8 -0.1,3.6 0.1,5.6 0,1 0.1,1.9 0.1,2.9 0.1,1 0.1,2.1 0.2,3 0.2,2.1 0.6,4.1 0.9,6.2 0.4,2.1 0.8,4.1 1.2,6.1 0.1,2.3 0.7,4.2 1.2,6.1 z" id="path69" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g71">
    <rect width="1.2" height="13.6" x="89.300003" y="422.39999" transform="matrix(-0.04493956,-0.999,0.999,-0.04493956,-334.8682,538.3043)" id="rect73" style="fill:#231f20"></rect>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g75">
    <rect width="1.2" height="14" x="95.900002" y="447.5" transform="matrix(-0.2032,-0.9791,0.9791,-0.2032,-328.8984,641.4067)" id="rect77" style="fill:#231f20"></rect>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g79">
    <polygon points="110.1,415.2 97.3,413.6 99.5,412.8 110.4,414 " id="polygon81" style="fill:#231f20"></polygon>
  </g>
  <path d="m 45.424334,284.7 c 0,0 -1.5,1.9 0.4,4.7 1.8,2.8 6.1,8.5 6.6,9.5 0.5,1 0.7,2.6 0.7,2.6 0,0 -6.7,-8.3 -8.1,-10.4 -1.5,-2.1 -2.7,-5.8 0.4,-6.4 z" id="path83" style="fill:#231f20"></path>
  <path d="m 46.324334,301.5 c 0,0 2.1,-0.6 2.6,-0.6 0.5,0 1.2,0.9 1.8,1.2 0.5,0.4 1.7,0.5 2.2,0.4 0.5,-0.1 0.5,1.8 0.5,1.8 0,0 -1.6,0.2 -3.2,-0.4 -1.6,-0.7 -2.2,-0.7 -3.4,-0.6 -1.3,0.3 -2.7,-1.6 -0.5,-1.8 z" id="path85" style="fill:#231f20"></path>
  <path d="m 39.624334,286.2 c 0,0 0,0.5 0.1,1.1 0.1,0.4 0.1,0.7 0.2,1.2 0.1,0.5 0.2,1 0.5,1.6 0.1,0.2 0.2,0.6 0.4,0.9 0.1,0.2 0.4,0.6 0.5,0.9 0.1,0.2 0.4,0.6 0.5,1 0.2,0.2 0.4,0.6 0.6,0.9 0.2,0.2 0.4,0.6 0.6,1 0.2,0.2 0.5,0.6 0.8,0.9 0.5,0.6 1.1,1.2 1.7,1.7 1.2,1.2 2.3,2.4 3.4,3.5 0.5,0.6 1,1.1 1.5,1.5 0.5,0.4 1.1,0.5 1.7,0.6 0.4,0.1 0.6,0.1 1,0.5 0.4,0.2 0.4,0.7 0.4,1 0,0.5 0.1,1 0.2,1.2 0.1,0.7 0.4,1.1 0.4,1.1 0,0 0,-0.1 -0.1,-0.2 -0.1,-0.1 -0.2,-0.4 -0.5,-0.7 -0.2,-0.4 -0.4,-0.7 -0.5,-1.2 -0.1,-0.5 -0.4,-0.5 -1,-0.6 -0.2,0 -0.6,0 -1,-0.1 -0.4,0 -0.9,-0.2 -1.1,-0.4 -0.7,-0.5 -1.2,-1 -1.8,-1.5 -1.1,-1.1 -2.3,-2.2 -3.5,-3.4 -0.6,-0.6 -1.1,-1.2 -1.7,-1.8 -0.2,-0.4 -0.5,-0.6 -0.8,-1 -0.2,-0.4 -0.5,-0.7 -0.6,-1.1 -0.2,-0.4 -0.4,-0.7 -0.6,-1 -0.1,-0.4 -0.2,-0.7 -0.5,-1.1 -0.1,-0.4 -0.2,-0.7 -0.4,-1 -0.1,-0.4 -0.1,-0.7 -0.2,-1 -0.1,-0.6 -0.2,-1.2 -0.2,-1.7 -0.1,-0.5 0,-1 0,-1.3 0,-0.3 0.1,-0.6 0.1,-0.9 -0.1,-0.5 -0.1,-0.6 -0.1,-0.6 z" id="path87" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g89">
    <path d="m 201.2,359.2 c -1,0 -2.1,0 -3.3,-0.1 -4.1,-0.4 -12.8,-2.7 -21.1,-4.9 -5.6,-1.5 -11.3,-3 -15.5,-3.9 C 150.8,348 143,350 143,350 l -0.4,-1.6 c 0.4,-0.1 8.3,-2.1 18.9,0.2 4.2,1 10.1,2.4 15.7,3.9 8.4,2.2 17,4.5 20.9,4.9 7.3,0.6 8.9,-1 9,-1.1 l 1.2,1 c -0.8,1.1 -3.1,1.9 -7.1,1.9 z" id="path91" style="fill:#231f20"></path>
  </g>
  <path d="m 75.224334,105.6 c 0,0 0.1,0.2 0.4,0.7 0.3,0.5 0.5,1.2 0.7,2.2 0.1,0.5 0.2,1.1 0.4,1.6 0.1,0.6 0.4,1.2 0.4,1.9 0.1,0.7 0.2,1.5 0.4,2.2 0.1,0.9 0.1,1.6 0.1,2.6 0.1,1.7 0,3.6 -0.1,5.7 -0.1,1 -0.4,2.1 -0.5,3 -0.1,0.5 -0.1,1.1 -0.2,1.6 -0.1,0.5 -0.2,1.1 -0.4,1.6 -0.5,2.1 -0.8,4.2 -1.3,6.4 -0.4,2.2 -0.6,4.4 -0.2,6.4 0.1,1 0.5,1.9 1,2.9 0.5,0.8 1.2,1.7 1.9,2.4 0.4,0.4 0.9,0.7 1.2,1 0.5,0.4 0.8,0.7 1.3,1 0.4,0.2 0.8,0.5 1.3,0.7 0.5,0.2 1,0.5 1.5,0.7 1.9,0.9 3.8,1.6 5.7,2.1 1.8,0.5 3.6,0.9 5.3,1.1 1.7,0.2 3.3,0.4 4.6,0.5 1.299996,0 2.599996,0 3.599996,0 1,-0.1 1.8,-0.1 2.3,-0.2 0.5,-0.1 0.9,-0.1 0.9,-0.1 0,0 -0.2,0.1 -0.7,0.2 -0.5,0.2 -1.3,0.4 -2.3,0.6 -1,0.2 -2.2,0.4 -3.599996,0.5 -0.7,0 -1.5,0 -2.3,0.1 -0.8,0 -1.7,0 -2.6,-0.1 -1.7,-0.1 -3.6,-0.4 -5.6,-0.7 -1.9,-0.4 -4,-1 -6.1,-1.8 -0.5,-0.2 -1.1,-0.5 -1.6,-0.7 -0.5,-0.2 -1.1,-0.5 -1.6,-0.9 -0.6,-0.4 -1,-0.6 -1.5,-1 -0.5,-0.4 -1,-0.7 -1.3,-1.2 -0.8,-0.9 -1.7,-1.8 -2.3,-2.9 -0.6,-1.1 -1.1,-2.4 -1.2,-3.6 -0.4,-2.6 0,-5 0.4,-7.2 0.4,-2.3 1,-4.5 1.5,-6.6 0.1,-0.5 0.2,-1.1 0.4,-1.6 0.1,-0.5 0.2,-1 0.4,-1.5 0.2,-1 0.5,-1.9 0.6,-2.9 0.1,-1 0.2,-1.9 0.4,-2.8 0.1,-0.9 0.1,-1.8 0.2,-2.7 0,-0.9 0.1,-1.7 0,-2.4 0,-0.7 -0.1,-1.5 -0.1,-2.2 0,-0.7 -0.1,-1.3 -0.1,-1.9 -0.1,-0.6 -0.1,-1.2 -0.2,-1.7 -0.1,-1 -0.2,-1.8 -0.5,-2.3 -0.5,-0.4 -0.6,-0.7 -0.6,-0.7 z" id="path93" style="fill:#231f20"></path>
  <path d="m 109.52433,151.9 c 0,0 0.1,0 0.2,-0.1 0.2,-0.1 0.5,-0.2 0.7,-0.5 0.4,-0.2 0.6,-0.6 1.1,-0.9 0.4,-0.4 0.7,-0.8 1.2,-1.3 0.1,-0.2 0.4,-0.6 0.6,-0.8 0.2,-0.2 0.4,-0.6 0.6,-1 0.4,-0.7 0.7,-1.3 1,-2.2 0.2,-0.7 0.6,-1.6 0.9,-2.3 0.2,-0.9 0.4,-1.7 0.5,-2.6 0.1,-0.8 0.1,-1.7 0.2,-2.5 0,-0.5 0,-0.9 0,-1.3 0,-0.4 0,-0.9 0,-1.2 -0.1,-1.7 -0.2,-3.2 -0.5,-4.5 -0.4,-2.7 -0.7,-4.5 -0.7,-4.5 0,0 1,1.6 1.8,4.2 0.4,1.3 0.9,2.9 1.1,4.6 0.1,0.9 0.2,1.8 0.2,2.7 0,1 0,1.8 -0.1,2.8 -0.1,1 -0.4,1.9 -0.6,2.8 l -0.2,0.7 -0.2,0.6 c -0.2,0.4 -0.4,0.8 -0.6,1.2 -0.4,0.9 -0.9,1.5 -1.3,2.2 -0.4,0.7 -1.1,1.2 -1.5,1.7 -0.5,0.5 -1.1,0.9 -1.6,1.2 -0.5,0.2 -1,0.6 -1.3,0.7 -0.4,0.1 -0.7,0.2 -0.9,0.2 -0.5,0.1 -0.6,0.1 -0.6,0.1 z" id="path95" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g97">
    <path d="m 181.2,298.5 c -8.4,0.4 -18.8,-4 -19.3,-4.1 l 0.5,-1.1 c 0.1,0 14,5.8 22.2,3.6 8.3,-2.2 12,-4.4 13.6,-15.2 l 1.2,0.1 c -1.6,11.4 -5.8,13.8 -14.4,16.1 -1.4,0.3 -2.5,0.6 -3.8,0.6 z" id="path99" style="fill:#231f20"></path>
  </g>
  <path d="m 119.32433,150.6 c 0,0 7.3,3.2 10.9,3.6 3.6,0.6 5.2,0.1 8.1,-1.8 2.8,-1.9 2.4,3 -1.1,3.4 -1.9,0.3 -7.3,3.7 -17.9,-5.2 z" id="path101" style="fill:#231f20"></path>
  <path d="m 134.52433,111.7 c 0,0 9.4,13.7 8.3,25.7 -1.1,12 2.4,3.9 2.1,-3.6 -0.5,-7.6 -5.2,-18.5 -10.4,-22.1 z" id="path103" style="fill:#231f20"></path>
  <path d="m 108.32433,96.8 c 0,0 0.2,0.6 0.4,1.6 0.1,0.5 0.2,1 0.4,1.6 0,0.2 0.1,0.6 0.2,0.8 0.1,0.4 0.1,0.6 0.2,1 0.1,0.4 0.1,0.6 0.2,1 0.1,0.2 0.1,0.6 0.2,0.8 0.1,0.2 0.1,0.6 0.2,0.9 0.1,0.2 0.1,0.5 0.1,0.7 0.2,0.9 0.4,1.6 0.4,1.6 0,0 -0.5,-0.5 -1,-1.3 -0.1,-0.2 -0.2,-0.5 -0.4,-0.7 -0.1,-0.2 -0.2,-0.5 -0.4,-0.8 -0.2,-0.6 -0.4,-1.2 -0.6,-1.9 -0.1,-0.6 -0.2,-1.3 -0.2,-1.9 0,-0.6 0,-1.2 0,-1.7 0.1,-1 0.3,-1.7 0.3,-1.7 z" id="path105" style="fill:#231f20"></path>
  <path d="m 70.224334,86.7 c 0,0 0.1,0 0.4,0 0.3,0 0.7,0 1.2,0 0.5,0 1.1,0.1 1.8,0.2 0.7,0.1 1.6,0.2 2.3,0.6 0.4,0.1 0.9,0.2 1.3,0.5 0.5,0.2 0.8,0.4 1.3,0.6 0.5,0.2 1,0.5 1.5,0.7 0.2,0.1 0.5,0.2 0.7,0.4 l 0.4,0.2 h 0.1 c -0.1,0 0,0 0,0 l 0.1,0.1 c 0.5,0.2 1,0.5 1.5,0.8 0.2,0.1 0.5,0.2 0.7,0.4 l 0.7,0.2 c 0.5,0.2 1,0.4 1.6,0.5 0.5,0.1 1.1,0.4 1.6,0.5 1.1,0.2 2.2,0.5 3.4,0.7 1.1,0.2 2.2,0.5 3.3,0.8 0.5,0.1 1.1,0.4 1.6,0.5 0.5,0.2 1,0.5 1.5,0.6 1,0.4 1.7,0.8 2.6,1.3 1.599996,0.9 2.799996,1.6 3.599996,2.2 0.9,0.5 1.3,0.9 1.3,0.9 0,0 -0.1,0 -0.4,-0.1 -0.2,-0.1 -0.7,-0.1 -1.1,-0.4 -1,-0.4 -2.3,-0.8 -3.999996,-1.5 -0.9,-0.4 -1.7,-0.7 -2.6,-1 -0.5,-0.1 -0.9,-0.4 -1.5,-0.5 -0.5,-0.1 -1,-0.2 -1.5,-0.4 -1,-0.2 -2.1,-0.4 -3.3,-0.6 -1.1,-0.2 -2.3,-0.5 -3.4,-0.7 -0.6,-0.1 -1.2,-0.4 -1.7,-0.5 -0.6,-0.1 -1.1,-0.4 -1.7,-0.6 -1.2,-0.5 -2.1,-1.1 -3,-1.7 -0.2,-0.1 -0.5,-0.4 -0.7,-0.5 -0.2,-0.1 -0.4,-0.2 -0.6,-0.5 -0.4,-0.2 -0.9,-0.6 -1.2,-0.8 -0.8,-0.5 -1.7,-1 -2.4,-1.2 -0.7,-0.4 -1.5,-0.6 -2.2,-0.8 -0.6,-0.2 -1.2,-0.4 -1.7,-0.5 -0.5,-0.1 -0.9,-0.2 -1.1,-0.2 -0.1,-0.1 -0.4,-0.2 -0.4,-0.2 z" id="path107" style="fill:#231f20"></path>
  <path d="m 120.62433,76.5 c 0,0 -0.7,7.7 -1,11.8 -0.2,4.2 -1.6,12.1 -3.3,15.2 -1.6,3 2.8,-0.2 4.7,-13.8 1.9,-13.6 1.9,-13.6 1.9,-13.6 0,0 -2,-0.3 -2.3,0.4 z" id="path109" style="fill:#231f20"></path>
  <path d="m 129.32433,94.6 c 0,0 -0.5,0.7 -1.3,1.6 -0.2,0.2 -0.5,0.5 -0.7,0.7 -0.2,0.2 -0.5,0.5 -0.9,0.7 -0.2,0.2 -0.6,0.5 -0.8,0.6 -0.2,0.2 -0.6,0.4 -1,0.6 -0.4,0.1 -0.6,0.4 -1,0.5 -0.4,0.1 -0.6,0.2 -1,0.4 -0.2,0.1 -0.6,0.2 -0.9,0.2 -0.2,0.1 -0.5,0.1 -0.7,0.1 -1,0.1 -1.6,0.1 -1.6,0.1 0,0 0.6,-0.4 1.6,-0.7 0.2,-0.1 0.5,-0.1 0.7,-0.4 0.2,-0.1 0.5,-0.2 0.9,-0.4 0.2,-0.1 0.6,-0.2 0.8,-0.5 0.2,-0.1 0.6,-0.4 0.8,-0.5 0.2,-0.1 0.6,-0.4 0.9,-0.5 0.2,-0.2 0.6,-0.4 0.8,-0.6 0.2,-0.1 0.5,-0.4 0.8,-0.6 0.2,-0.2 0.5,-0.4 0.7,-0.5 0.5,-0.4 0.9,-0.6 1.1,-0.8 0.6,0.1 0.8,0 0.8,0 z" id="path111" style="fill:#231f20"></path>
  <path d="m 87.124334,66.2 c 0,0 -0.9,9.6 -0.7,17.7 0,0 -2.4,-7.9 -1,-14.9 1.4,-7 1.7,-2.8 1.7,-2.8 z" id="path113" style="fill:#231f20"></path>
  <path d="m 115.52433,154.6 c 0,0 0.1,0.2 0.2,0.6 0.1,0.5 0.4,1.1 0.5,1.9 0.1,0.9 0.2,1.8 0.4,3 0,0.6 0.1,1.2 0,1.9 0,0.7 -0.1,1.3 -0.1,2.1 -0.1,0.7 -0.2,1.5 -0.4,2.3 -0.1,0.4 -0.1,0.7 -0.1,1.1 0,0.4 -0.1,0.7 -0.1,1.2 0,1.6 0.1,3.3 0.2,5.1 0.1,1.8 0.4,3.6 0.4,5.7 0,1 -0.1,2.1 -0.4,3 -0.2,1 -0.7,2.2 -1.6,3 -0.5,0.4 -1,0.7 -1.6,1 l -0.2,0.1 0,0 h -0.1 -0.1 l -0.4,0.1 -0.7,0.2 -0.7,0.2 -0.8,0.1 c -0.2,0 -0.6,0.1 -0.8,0.1 h -0.9 c -0.6,0 -1,-0.2 -1.6,-0.2 -0.5,-0.1 -0.8,-0.2 -1.3,-0.4 -0.5,-0.1 -0.8,-0.1 -1.3,-0.2 -0.5,0 -0.8,-0.1 -1.3,-0.1 -0.8,-0.1 -1.7,0 -2.6,0 h -0.699996 -0.7 c -0.5,0 -0.8,0 -1.3,-0.1 -1.8,-0.2 -3.5,-1 -4.5,-2.2 -1.1,-1.2 -1.6,-2.6 -1.8,-3.8 -0.2,-1.2 -0.2,-2.3 -0.1,-3.2 0,-0.9 0.2,-1.5 0.4,-1.9 0.1,-0.5 0.2,-0.6 0.2,-0.6 0,0 0,0.2 -0.1,0.7 0,0.5 -0.1,1.1 -0.1,1.9 0,0.8 0.1,1.8 0.5,2.9 0.4,1.1 1,2.2 1.9,3.2 1,0.8 2.3,1.5 3.8,1.5 0.4,0 0.7,0 1.2,0 h 0.6 0.599996 c 0.9,0 1.8,-0.1 2.8,-0.1 0.5,0 1,0 1.5,0 0.5,0 1,0.1 1.5,0.2 0.5,0.1 1,0.2 1.5,0.2 0.4,0.1 0.8,0.2 1.2,0.2 h 0.6 c 0.2,0 0.4,0 0.6,-0.1 l 0.6,-0.1 0.7,-0.2 c 1,-0.2 1.7,-0.5 2.2,-1 1.1,-1 1.3,-2.9 1.3,-4.6 0,-1.8 0,-3.6 -0.1,-5.5 -0.1,-1.8 -0.1,-3.6 0,-5.3 0,-0.5 0.1,-0.9 0.1,-1.2 0.1,-0.5 0.1,-0.8 0.2,-1.2 0.2,-0.7 0.4,-1.5 0.5,-2.2 0.2,-1.3 0.5,-2.7 0.5,-3.9 0,-1.2 0,-2.2 0,-3 0.1,-1.5 -0.2,-2.4 -0.2,-2.4 z" id="path115" style="fill:#231f20"></path>
  <path d="m 98.824334,169.5 c 0,0 0.5,-0.1 1.199996,-0.4 0.8,-0.2 1.9,-0.4 3.4,-0.5 0.4,0 0.7,0 1.1,-0.1 0.4,0 0.7,0 1.2,0 0.9,0 1.7,0.1 2.6,0.2 1.8,0.4 3.6,0.8 5.3,1.9 0.9,0.6 1.6,1.5 2.1,2.6 0.2,0.5 0.2,1.2 0.2,1.6 0,0.5 0,0.9 0.1,1.3 0.1,1.8 0,3.5 -0.4,5 -0.1,0.7 -0.5,1.3 -0.7,1.9 -0.2,0.5 -0.6,1 -1,1.2 -0.4,0.2 -0.6,0.5 -0.7,0.6 -0.2,0.1 -0.2,0.1 -0.2,0.1 0,0 0.1,-0.1 0.2,-0.2 0.1,-0.1 0.4,-0.4 0.6,-0.7 0.2,-0.4 0.4,-0.7 0.6,-1.3 0.1,-0.5 0.2,-1.1 0.4,-1.8 0.1,-1.3 0,-2.9 -0.2,-4.6 -0.1,-0.9 -0.2,-1.8 -0.4,-2.4 -0.2,-0.6 -0.8,-1.2 -1.5,-1.7 -1.3,-1 -3,-1.5 -4.7,-1.9 -0.5,-0.1 -0.9,-0.1 -1.2,-0.2 -0.4,-0.1 -0.7,-0.1 -1.2,-0.2 -0.7,-0.1 -1.5,-0.1 -2.2,-0.2 -1.3,-0.1 -2.6,-0.1 -3.3,-0.1 -0.799996,-0.1 -1.299996,-0.1 -1.299996,-0.1 z" id="path117" style="fill:#231f20"></path>
  <path d="m 75.124334,153 c 0,0 0.5,-0.1 1.2,0 0.4,0.1 0.9,0.1 1.5,0.4 0.2,0.1 0.6,0.2 0.9,0.4 0.2,0.1 0.6,0.4 0.8,0.6 0.2,0.2 0.5,0.5 0.8,0.7 0.2,0.2 0.5,0.6 0.7,1 0.5,0.7 0.8,1.5 1.2,2.2 0.4,0.7 0.7,1.6 1.2,2.2 0.5,0.6 1.1,1 1.9,1.2 0.8,0.2 1.7,0.2 2.6,0.4 0.5,0 0.9,0.1 1.3,0.2 l 0.7,0.2 c 0.2,0.1 0.5,0.2 0.6,0.2 0.8,0.4 1.6,1 2.1,1.6 0.6,0.6 1,1.3 1.2,1.9 0.2,0.6 0.4,1.3 0.4,1.9 0,0.6 -0.1,1.1 -0.2,1.5 -0.1,0.2 -0.1,0.4 -0.2,0.5 -0.1,0.1 -0.1,0.2 -0.2,0.2 -0.1,0.1 -0.2,0.2 -0.2,0.2 0,0 0.1,-0.1 0.2,-0.2 0.1,-0.1 0.1,-0.2 0.2,-0.4 0.1,-0.1 0.1,-0.2 0.1,-0.5 0.1,-0.4 0.1,-0.9 0,-1.3 -0.1,-0.5 -0.2,-1.1 -0.6,-1.7 -0.6,-1.2 -1.7,-2.3 -3.2,-2.9 -0.1,-0.1 -0.4,-0.1 -0.6,-0.2 l -0.6,-0.1 c -0.4,-0.1 -0.8,-0.1 -1.2,-0.1 -1,0 -1.8,-0.1 -2.8,-0.4 -1,-0.3 -1.9,-0.8 -2.6,-1.7 -0.6,-0.9 -0.9,-1.7 -1.2,-2.4 -0.1,-0.4 -0.4,-0.7 -0.5,-1.1 -0.1,-0.4 -0.4,-0.7 -0.5,-1.1 -0.2,-0.4 -0.4,-0.6 -0.6,-1 -0.2,-0.2 -0.5,-0.5 -0.7,-0.7 -0.2,-0.2 -0.5,-0.4 -0.7,-0.6 -0.2,-0.2 -0.5,-0.4 -0.7,-0.5 -0.5,-0.2 -1,-0.4 -1.3,-0.5 -0.3,-0.1 -0.7,-0.1 -0.9,-0.1 -0.1,0 -0.1,0 -0.1,0 z" id="path119" style="fill:#231f20"></path>
  <path d="m 134.62433,159.2 c 0,0 0,0.5 -0.1,1.3 0,0.4 -0.1,1 -0.2,1.6 -0.1,0.6 -0.2,1.2 -0.6,1.9 -0.2,0.7 -0.6,1.5 -1,2.2 -0.2,0.6 -0.4,1.3 -0.4,2.2 0,0.9 0.1,1.7 0.2,2.7 0,1 0,2.1 -0.1,3 -0.1,1 -0.5,2.1 -0.7,2.9 -0.2,0.9 -0.6,1.8 -1,2.7 -0.2,0.5 -0.4,0.8 -0.7,1.3 -0.4,0.5 -1,0.8 -1.5,1 -0.5,0.1 -1,0 -1.3,0 -0.2,0 -0.4,0 -0.6,-0.1 -0.2,0 -0.4,-0.1 -0.5,-0.1 -0.7,-0.1 -1.3,-0.2 -1.9,-0.5 -0.6,-0.2 -1.1,-0.4 -1.5,-0.5 -0.7,-0.4 -1.2,-0.6 -1.2,-0.6 0,0 0.5,0.1 1.3,0.2 0.4,0.1 1,0.1 1.5,0.1 0.6,0.1 1.2,0.1 1.9,0.1 0.1,0 0.4,0 0.6,0 0.1,0 0.4,0 0.5,0 0.4,0 0.7,0 1,-0.1 0.2,-0.1 0.4,-0.2 0.6,-0.5 0.1,-0.2 0.4,-0.6 0.5,-1 0.2,-0.8 0.5,-1.7 0.8,-2.5 0.4,-1 0.5,-1.7 0.6,-2.7 0.4,-1.7 0.1,-3.5 0.1,-5.5 0,-1 0.2,-1.9 0.7,-2.8 0.1,-0.2 0.2,-0.4 0.4,-0.6 0.1,-0.1 0.2,-0.4 0.4,-0.5 0.2,-0.2 0.4,-0.6 0.6,-1 0.4,-0.6 0.6,-1.2 0.8,-1.7 0.2,-0.5 0.4,-1 0.6,-1.3 0,-0.7 0.2,-1.2 0.2,-1.2 z" id="path121" style="fill:#231f20"></path>
  <path d="m 122.82433,164.6 c 0,0 1.3,0 3.2,0.4 1,0.2 2.1,0.5 3.2,1 0.6,0.2 1.1,0.6 1.7,1.1 0.5,0.5 1,1.1 1.1,1.9 0,0.6 0.1,1.2 0.1,1.9 0,0.7 0,1.3 -0.1,1.9 0,0.6 -0.2,1.2 -0.2,1.7 -0.1,0.5 -0.2,1.1 -0.4,1.5 -0.4,1 -0.7,1.7 -1,2.2 -0.4,0.5 -0.5,0.7 -0.5,0.7 0,0 0.1,-0.2 0.4,-0.8 0.1,-0.2 0.1,-0.6 0.2,-1 0.1,-0.4 0.1,-0.9 0.2,-1.2 0.1,-0.5 0.1,-1 0.2,-1.5 0,-0.5 0.1,-1.1 0.1,-1.7 0,-0.6 0,-1.2 0,-1.8 0,-0.6 -0.1,-1.2 -0.1,-1.8 -0.1,-0.4 -0.4,-0.9 -0.7,-1.2 -0.3,-0.3 -0.8,-0.7 -1.3,-1 -1,-0.6 -2.1,-1 -2.9,-1.3 -0.8,-0.4 -1.7,-0.6 -2.2,-0.7 -0.6,-0.1 -1,-0.3 -1,-0.3 z" id="path123" style="fill:#231f20"></path>
  <path d="m 122.82433,199.5 c 0,0 0.1,0 0.4,-0.2 0.2,-0.1 0.5,-0.4 0.8,-0.7 0.3,-0.3 0.7,-0.7 1.1,-1.2 0.4,-0.5 0.7,-1.1 1.1,-1.8 0.1,-0.4 0.2,-0.7 0.5,-1.1 0.1,-0.2 0.1,-0.4 0.2,-0.6 0,-0.2 0.1,-0.4 0.1,-0.6 0.2,-0.9 0.5,-1.7 0.7,-2.7 0.2,-1 0.4,-1.9 0.5,-2.9 0.1,-1 0.2,-2.1 0.1,-2.9 0,-0.5 -0.1,-1 -0.2,-1.3 -0.1,-0.2 -0.1,-0.4 -0.2,-0.6 l -0.1,-0.1 c 0,0 -0.1,-0.2 -0.1,-0.4 -0.1,-0.2 0,-0.6 0.1,-1 0.4,-0.5 0.6,-0.5 0.7,-0.7 0.2,-0.1 0.4,-0.2 0.5,-0.5 0.4,-0.4 0.6,-0.6 0.7,-1.1 0.5,-0.8 0.7,-1.6 1,-2.5 0.1,-0.5 0.2,-0.9 0.2,-1.2 0.1,-0.4 0.1,-0.7 0.2,-1.2 0.2,-1.6 0.2,-2.9 0.2,-3.8 0,-1 0,-1.5 0,-1.5 0,0 0,0.1 0.1,0.4 0,0.2 0.1,0.6 0.2,1.1 0.1,0.5 0.1,1 0.2,1.7 0,0.6 0.1,1.3 0.1,2.2 0,0.4 0,0.8 -0.1,1.3 0,0.5 -0.1,1 -0.2,1.3 -0.1,0.8 -0.4,1.9 -0.8,2.9 -0.2,0.5 -0.5,1 -1,1.5 -0.2,0.2 -0.4,0.4 -0.6,0.6 -0.2,0.1 -0.5,0.4 -0.4,0.4 0.1,-0.1 0,-0.4 0.1,0 0.1,0.1 0.2,0.5 0.4,0.7 0.2,0.6 0.4,1.2 0.4,1.7 0.1,1.2 0,2.3 -0.2,3.3 -0.1,1.1 -0.4,2.1 -0.7,3 -0.1,0.5 -0.2,1 -0.4,1.5 -0.1,0.5 -0.4,1 -0.5,1.3 -0.1,0.2 -0.1,0.5 -0.2,0.6 -0.1,0.2 -0.2,0.4 -0.4,0.6 -0.2,0.4 -0.4,0.7 -0.6,1.1 -0.5,0.6 -0.8,1.3 -1.5,1.7 -0.5,0.5 -1,0.9 -1.3,1.1 -0.5,0.5 -1.1,0.6 -1.1,0.6 z" id="path125" style="fill:#231f20"></path>
  <path d="m 125.42433,210.5 c 0,0 0.1,-0.4 0.4,-1.2 0.1,-0.4 0.2,-0.9 0.4,-1.3 0.1,-0.5 0.1,-1.1 0.4,-1.7 0.1,-0.6 0.1,-1.3 0.2,-2.1 0,-0.7 0.1,-1.5 0,-2.3 0,-0.9 -0.1,-1.6 -0.1,-2.4 0,-0.8 -0.1,-1.7 -0.1,-2.5 0,-0.8 0.1,-1.8 0.2,-2.7 0.1,-0.8 0.4,-1.7 0.6,-2.5 0.5,-1.6 1,-3 1.3,-4.2 0.2,-0.6 0.4,-1.2 0.5,-1.7 0.1,-0.5 0.1,-1 0.1,-1.3 0,-0.2 0,-0.4 0,-0.5 0,-0.1 0,-0.2 -0.1,-0.4 0,-0.2 -0.1,-0.4 -0.1,-0.4 0,0 0,0.1 0.1,0.2 0.1,0.2 0.2,0.5 0.4,0.9 0.1,0.4 0.1,0.9 0.1,1.5 0,0.5 0,1.1 -0.1,1.8 -0.2,1.3 -0.5,2.8 -0.8,4.4 -0.1,0.7 -0.4,1.6 -0.4,2.4 0,0.8 -0.1,1.6 -0.1,2.4 0,0.9 0,1.7 0,2.6 v 0.6 0.6 c 0,0.5 0,0.8 0,1.2 0,0.9 -0.1,1.6 -0.2,2.4 -0.1,0.7 -0.4,1.5 -0.5,2.1 -0.2,0.6 -0.4,1.2 -0.6,1.7 -0.2,0.5 -0.4,1 -0.6,1.3 -0.8,0.8 -1,1.1 -1,1.1 z" id="path127" style="fill:#231f20"></path>
  <path d="m 116.02433,196.6 c 0,0 -0.1,0 -0.4,0.1 -0.1,0 -0.2,0 -0.5,0 -0.1,0 -0.4,0 -0.6,-0.1 -0.2,-0.1 -0.5,-0.2 -0.6,-0.5 -0.2,-0.2 -0.4,-0.5 -0.5,-0.7 -0.1,-0.2 -0.1,-0.6 -0.1,-0.9 0,-0.1 0,-0.2 0,-0.5 l 0.1,-0.4 c 0.1,-0.4 0.2,-0.6 0.5,-1 0.2,-0.2 0.6,-0.5 0.8,-0.6 0.7,-0.1 1.2,0.1 1.6,0.4 0.4,0.3 0.6,0.6 0.6,0.8 0.1,0.2 0,0.4 0,0.4 0,0 -0.1,-0.1 -0.2,-0.2 -0.1,-0.1 -0.4,-0.4 -0.7,-0.4 -0.1,0 -0.4,-0.1 -0.5,-0.1 -0.1,0 -0.4,0 -0.5,0.1 -0.1,0.1 -0.2,0.1 -0.4,0.2 -0.1,0.1 -0.1,0.2 -0.2,0.5 l -0.1,0.4 v 0.2 c 0,0.2 -0.1,0.5 0,0.6 0,0.1 0,0.4 0.1,0.5 0,0.1 0.1,0.2 0.2,0.4 0.1,0.1 0.2,0.2 0.4,0.2 0.1,0.1 0.2,0.1 0.4,0.2 0.4,0.4 0.6,0.4 0.6,0.4 z" id="path129" style="fill:#231f20"></path>
  <path d="m 72.424334,171 c 0,0 0.1,0.4 0.5,1 0.1,0.4 0.4,0.7 0.5,1.2 0.2,0.5 0.5,1 0.7,1.5 0.2,0.5 0.6,1.1 1,1.7 0.4,0.6 0.7,1.2 1.1,1.8 0.4,0.6 0.8,1.2 1.3,1.8 0.5,0.6 1.1,1.1 1.6,1.7 0.5,0.5 1.2,1 1.8,1.5 0.6,0.4 1.3,0.9 1.9,1.2 1.3,0.7 2.6,1.3 3.6,1.8 0.6,0.2 1.1,0.6 1.5,0.8 0.4,0.2 0.7,0.6 1,0.9 0.3,0.3 0.4,0.5 0.5,0.6 0.1,0.1 0.1,0.2 0.1,0.2 0,0 -0.1,-0.1 -0.2,-0.2 -0.1,-0.1 -0.4,-0.4 -0.6,-0.5 -0.2,-0.2 -0.6,-0.4 -1.1,-0.6 -0.5,-0.2 -1,-0.4 -1.5,-0.6 -1.1,-0.5 -2.4,-0.9 -3.9,-1.6 -0.7,-0.4 -1.5,-0.7 -2.1,-1.2 -0.7,-0.5 -1.3,-0.9 -1.9,-1.5 -0.6,-0.6 -1.3,-1.1 -1.7,-1.8 -0.5,-0.6 -1,-1.3 -1.3,-1.9 -0.4,-0.7 -0.7,-1.3 -1.1,-1.9 -0.2,-0.6 -0.6,-1.2 -0.7,-1.8 -0.5,-1.1 -0.7,-2.2 -0.8,-2.8 -0.2,-1 -0.2,-1.3 -0.2,-1.3 z" id="path131" style="fill:#231f20"></path>
  <path d="m 69.124334,174.8 c 0,0 1.1,8.7 5.6,14.9 -0.1,0.1 -6.5,-5.4 -5.6,-14.9 z" id="path133" style="fill:#231f20"></path>
  <path d="m 102.52433,155.9 c 0,0 0.7,-0.2 1.8,-0.5 1.1,-0.2 2.6,-0.4 4,-0.2 0.4,0 0.7,0.1 1.1,0.1 0.4,0 0.7,0.1 1.1,0.2 0.7,0.1 1.3,0.4 1.8,0.6 0.5,0.2 1,0.5 1.2,0.7 0.2,0.2 0.4,0.4 0.4,0.4 0,0 -0.1,0 -0.5,-0.1 -0.2,-0.1 -0.7,-0.1 -1.2,-0.2 -0.5,-0.1 -1.1,-0.1 -1.8,-0.2 -0.6,0 -1.3,-0.1 -2.1,-0.1 -0.7,-0.1 -1.5,-0.1 -2.1,-0.1 -0.6,0 -1.3,-0.1 -1.8,-0.1 -1.1,-0.4 -1.9,-0.5 -1.9,-0.5 z" id="path135" style="fill:#231f20"></path>
  <path d="m 93.924334,190.6 c 0,0 0,0.1 0,0.4 0,0.3 0,0.5 0.1,1 0,0.4 0.1,0.9 0.2,1.3 0.1,0.5 0.4,1.1 0.6,1.7 0.1,0.2 0.2,0.6 0.5,0.9 0.3,0.3 0.4,0.6 0.6,0.9 0.2,0.2 0.5,0.6 0.7,0.8 l 0.2,0.2 0.2,0.1 0.5,0.4 c 0.6,0.4 1.3,0.9 2.1,1.2 0.699996,0.4 1.599996,0.6 2.399996,0.9 0.8,0.3 1.7,0.5 2.6,0.6 0.9,0.1 1.7,0.2 2.6,0.4 0.8,0.1 1.6,0.1 2.3,0 0.1,0 0.4,0 0.5,-0.1 0.1,0 0.2,-0.1 0.5,-0.1 0.2,-0.1 0.6,-0.4 1,-0.5 0.2,-0.1 0.5,-0.4 0.7,-0.5 0.2,-0.1 0.5,-0.4 0.6,-0.6 0.4,-0.4 0.7,-0.7 1,-1.1 0.5,-0.6 0.7,-1 0.7,-1 0,0 -0.1,0.5 -0.5,1.2 -0.1,0.4 -0.4,0.9 -0.7,1.3 -0.1,0.2 -0.4,0.5 -0.6,0.7 -0.2,0.2 -0.5,0.5 -0.8,0.7 -0.2,0.2 -0.5,0.4 -1,0.6 -0.2,0.1 -0.4,0.1 -0.6,0.2 -0.2,0 -0.4,0.1 -0.6,0.1 -0.9,0.1 -1.7,0.2 -2.6,0.2 -0.8,0 -1.8,-0.1 -2.7,-0.2 -1,-0.1 -1.8,-0.4 -2.8,-0.6 -0.9,-0.2 -1.799996,-0.6 -2.699996,-1.1 -0.8,-0.4 -1.6,-1 -2.4,-1.6 l -0.5,-0.5 c -0.1,-0.1 -0.1,-0.1 -0.2,-0.2 l -0.2,-0.2 c -0.2,-0.4 -0.5,-0.7 -0.7,-1.1 -0.4,-0.7 -0.7,-1.5 -1,-2.2 -0.3,-0.7 -0.2,-1.3 -0.4,-1.9 0,-0.6 0,-1.1 0,-1.5 0,-0.4 0.1,-0.7 0.1,-1 0.3,0.4 0.3,0.2 0.3,0.2 z" id="path137" style="fill:#231f20"></path>
  <path d="m 106.22433,186 c 0,0 0.4,0 0.9,0.1 0.2,0 0.6,0.1 1,0.1 0.4,0 0.8,0 1.2,0 0.5,0 1,0 1.5,-0.1 0.2,0 0.5,-0.1 0.7,-0.2 0.2,-0.1 0.5,-0.2 0.7,-0.4 0.5,-0.2 1.1,-0.6 1.6,-0.8 0.2,-0.1 0.5,-0.2 0.7,-0.5 l 0.7,-0.6 c 0.9,-0.8 1.7,-1.8 2.6,-2.7 0.5,-0.5 0.9,-0.9 1.5,-1.1 0.5,-0.4 1,-0.5 1.6,-0.6 0.5,-0.1 1,-0.1 1.3,-0.1 0.3,0 0.7,0 1,0 0.6,0 0.8,0 0.8,0 0,0 -0.4,0.1 -0.8,0.2 -0.2,0 -0.6,0.1 -1,0.2 -0.4,0.1 -0.8,0.2 -1.2,0.4 -0.4,0.1 -0.8,0.4 -1.2,0.7 -0.4,0.2 -0.7,0.7 -1.1,1.1 -0.4,0.5 -0.7,1 -1.2,1.3 -0.5,0.5 -0.9,1 -1.3,1.5 l -0.9,0.6 c -0.2,0.2 -0.5,0.4 -0.8,0.5 -0.6,0.4 -1.2,0.6 -1.7,0.8 -0.2,0.1 -0.5,0.2 -0.8,0.4 -0.4,0.1 -0.6,0.2 -0.8,0.2 -0.6,0.1 -1.1,0 -1.6,0 -0.5,-0.1 -1,-0.1 -1.3,-0.2 -0.3,-0.1 -0.7,-0.2 -1,-0.2 -0.9,-0.5 -1.1,-0.6 -1.1,-0.6 z" id="path139" style="fill:#231f20"></path>
  <path d="m 40.324334,100.5 c 0,0 -0.4,0.6 -0.8,1.7 -0.5,1.1 -1.2,2.7 -1.8,4.5 -0.4,1 -0.6,2.1 -0.8,3.2 -0.1,0.6 -0.1,1.1 -0.2,1.7 0,0.6 -0.1,1.2 -0.1,1.8 0,1.2 0.1,2.4 0.4,3.6 0.1,0.6 0.2,1.2 0.5,1.8 l 0.4,0.8 c 0,0 0,0.1 0,0 v 0.1 l 0.1,0.2 0.2,0.5 c 0.6,1.2 1.1,2.5 1.8,3.5 0.4,0.6 0.6,1.1 1,1.6 0.4,0.5 0.7,1.1 1.1,1.6 0.7,1.1 1.5,1.9 2.2,3 0.4,0.5 0.7,1 1,1.5 0.2,0.5 0.5,1 0.8,1.5 0.6,0.9 0.8,1.8 1.1,2.7 0.4,0.9 0.4,1.6 0.5,2.2 0.2,1.2 0.2,1.9 0.2,1.9 0,0 -0.2,-0.6 -0.7,-1.7 -0.2,-0.6 -0.5,-1.2 -0.8,-1.9 -0.4,-0.7 -0.8,-1.6 -1.5,-2.3 -0.2,-0.4 -0.6,-0.8 -1,-1.2 -0.4,-0.4 -0.7,-0.8 -1.1,-1.3 -0.7,-0.9 -1.6,-1.8 -2.4,-2.8 -0.4,-0.5 -0.8,-1.1 -1.2,-1.6 -0.4,-0.6 -0.7,-1.2 -1.2,-1.8 -0.8,-1.2 -1.3,-2.4 -1.9,-3.6 l -0.2,-0.5 -0.1,-0.2 v -0.2 c -0.1,-0.1 0,-0.1 -0.1,-0.2 l -0.4,-1.1 c -0.2,-0.7 -0.4,-1.5 -0.5,-2.1 -0.2,-1.5 -0.2,-2.8 -0.2,-4.2 0,-0.7 0.1,-1.3 0.2,-1.9 0.1,-0.6 0.4,-1.2 0.5,-1.8 0.2,-0.6 0.4,-1.1 0.6,-1.7 0.2,-0.5 0.5,-1.1 0.7,-1.5 1,-1.9 1.9,-3.3 2.7,-4.2 0.3,-1.2 1,-1.6 1,-1.6 z" id="path141" style="fill:#231f20"></path>
  <path d="m 50.924334,156.5 c 0,0 0,-0.2 0,-0.6 0,-0.4 0,-1 0,-1.7 0,-0.7 0.1,-1.7 0.4,-2.7 0.1,-0.5 0.2,-1.1 0.4,-1.6 0.2,-0.6 0.4,-1.2 0.6,-1.8 0.5,-1.2 1.2,-2.6 2.1,-3.8 0.4,-0.6 1,-1.2 1.5,-1.8 0.5,-0.6 1.1,-1.2 1.8,-1.7 1.3,-1.1 2.8,-2.1 4.2,-2.8 1.4,-0.7 2.9,-1.6 4.4,-2.4 1.5,-0.8 2.8,-1.7 4,-2.8 1.1,-1.1 2.2,-2.2 2.9,-3.4 0.7,-1.3 1.3,-2.7 1.7,-4 0.4,-1.3 0.6,-2.7 0.9,-3.9 0.1,-1.2 0.4,-2.4 0.5,-3.4 0.1,-1 0.2,-1.9 0.2,-2.7 0.1,-1.5 0.2,-2.3 0.2,-2.3 0,0 0.1,0.9 0.2,2.3 0.1,0.7 0.1,1.7 0.1,2.7 0.1,1.1 0,2.2 0,3.5 -0.1,1.3 -0.2,2.7 -0.5,4.2 -0.1,0.7 -0.4,1.5 -0.6,2.3 -0.1,0.4 -0.2,0.7 -0.5,1.1 -0.1,0.4 -0.2,0.7 -0.5,1.1 -0.7,1.6 -1.9,2.9 -3.3,4.1 -1.3,1.2 -2.8,2.2 -4.4,3 -1.5,0.8 -3,1.6 -4.5,2.4 -1.5,0.7 -2.8,1.5 -4,2.4 -0.6,0.5 -1.1,1 -1.7,1.5 -0.5,0.5 -1.1,1 -1.5,1.6 -0.2,0.2 -0.5,0.5 -0.6,0.8 -0.2,0.2 -0.4,0.6 -0.6,0.9 -0.4,0.5 -0.7,1.1 -1,1.6 -0.6,1.1 -1.1,2.2 -1.5,3 -0.4,1 -0.6,1.8 -0.9,2.6 0,1.5 0,2.3 0,2.3 z" id="path143" style="fill:#231f20"></path>
  <path d="m 38.924334,192.9 c 0,0 -1,-5.8 -1.5,-10.6 -0.5,-4.9 -1.6,-10.1 -2.5,-12.9 -1,-2.8 -1.6,2.2 -0.6,4.9 0.9,2.6 2.4,17.3 4.6,18.6 z" id="path145" style="fill:#231f20"></path>
  <ellipse cx="171.60001" cy="290.20001" rx="1.8" ry="3.5" transform="matrix(0.1139,-0.9935,0.9935,0.1139,-217.59827,284.4494)" id="ellipse147" style="fill:#231f20"></ellipse>
  <path d="m 138.22433,149.8 c -0.5,0.9 -1.3,1.2 -1.8,0.9 -0.5,-0.3 -0.6,-1.3 -0.1,-2.2 0.5,-0.9 1.3,-1.2 1.8,-0.9 0.5,0.3 0.6,1.4 0.1,2.2 z" id="path149" style="fill:#231f20"></path>
  <path d="m 93.224334,54.1 c 0,0 -1.6,0.1 -1.5,-1.9 0.1,-2.1 -0.9,-5.5 -2.8,-5.8 -1.9,-0.4 -4.6,1.9 -3.6,4.5 1,2.7 -0.5,-1.8 1.3,-2.7 1.7,-0.9 3.5,-0.6 3.5,1.2 -0.1,1.8 -1.5,1 -1.6,3.4 -0.1,2.4 1.3,1.2 2.1,1.7 0.8,0.5 4.2,0.9 2.6,-0.4 z" id="path151" style="fill:#231f20"></path>
  <path d="m 76.924334,162.2 c 0,0 0.4,0.7 1,1.7 0.2,0.5 0.6,1.1 1,1.7 0.4,0.6 0.7,1.3 1.2,1.9 0.2,0.4 0.4,0.6 0.6,1 0.2,0.2 0.5,0.6 0.6,0.9 0.2,0.2 0.5,0.6 0.6,0.8 0.2,0.2 0.4,0.5 0.6,0.7 0.2,0.2 0.4,0.4 0.5,0.6 0.1,0.1 0.4,0.4 0.5,0.5 0.2,0.2 0.4,0.4 0.4,0.4 0,0 -0.2,-0.1 -0.5,-0.2 -0.4,-0.1 -0.8,-0.4 -1.3,-0.7 -0.2,-0.1 -0.5,-0.4 -0.8,-0.6 -0.2,-0.2 -0.6,-0.5 -0.8,-0.7 -0.6,-0.5 -1.1,-1.2 -1.5,-1.8 -0.5,-0.7 -0.9,-1.5 -1.1,-2.1 -0.2,-0.7 -0.5,-1.3 -0.7,-1.9 -0.3,-1.3 -0.3,-2.2 -0.3,-2.2 z" id="path153" style="fill:#231f20"></path>
  <path d="m 130.62433,319 c 0,0 0,0.1 0,0.4 0,0.2 0,0.5 0,1 0,0.4 0,1 0,1.5 0,0.6 -0.1,1.2 -0.2,1.9 -0.1,0.7 -0.4,1.5 -0.5,2.2 -0.2,0.7 -0.4,1.6 -0.7,2.4 -0.2,0.9 -0.5,1.6 -0.6,2.4 -0.2,0.9 -0.4,1.7 -0.5,2.6 -0.1,0.9 -0.2,1.7 -0.2,2.7 0,0.9 -0.1,1.7 0,2.6 0,0.9 0.1,1.6 0.1,2.4 0,0.4 0.1,0.7 0.1,1.1 0,0.4 0.1,0.7 0.2,1 0.1,0.6 0.4,1.2 0.5,1.7 0.2,0.5 0.4,1 0.6,1.3 0.4,0.7 0.6,1.1 0.6,1.1 0,0 -0.4,-0.2 -1,-0.9 -0.2,-0.4 -0.6,-0.7 -0.8,-1.2 -0.2,-0.5 -0.6,-1.1 -0.9,-1.7 -0.2,-0.6 -0.5,-1.3 -0.7,-2.2 -0.2,-0.7 -0.4,-1.6 -0.4,-2.5 -0.1,-0.9 -0.1,-1.8 -0.1,-2.7 0,-1 0.1,-1.8 0.2,-2.8 0.1,-1 0.4,-1.8 0.5,-2.8 0.2,-0.9 0.5,-1.8 0.8,-2.6 0.3,-0.8 0.6,-1.6 0.8,-2.3 0.2,-0.7 0.6,-1.3 0.9,-2.1 0.1,-0.6 0.4,-1.2 0.5,-1.7 0.2,-0.5 0.2,-1 0.4,-1.3 0.3,-1 0.4,-1.5 0.4,-1.5 z" id="path155" style="fill:#231f20"></path>
  <path d="m 66.424334,185.2 c 0.4,-1.2 0.8,-2.7 1.6,-4.4 0.8,-2.2 1.8,-5 2.8,-8.3 3.2,-10.1 4.4,-28.9 4.4,-29.8 l -2.3,-0.1 c 0,0.2 -1.2,19.4 -4.2,29.1 -1,3.2 -2.1,5.9 -2.8,8.1 -1,2.6 -1.6,4.5 -2.1,6.1 0.9,0 1.8,-0.4 2.6,-0.7 z" id="path157" style="fill:#231f20"></path>
  <path d="m 127.62433,209.7 c 0,-0.2 -0.1,-0.6 -0.1,-0.9 -0.8,0.4 -1.6,0.6 -2.3,0.9 0,0.1 0,0.2 0,0.4 0.1,1.1 0.4,2.4 0.6,3.9 1.2,7.9 3.2,21 2.9,30.2 -0.2,11.2 -0.6,38 -0.6,38.7 h 2.4 c 0,-0.7 0.4,-27.6 0.6,-38.6 0.1,-9.4 -1.8,-22.7 -3,-30.6 -0.2,-1.6 -0.4,-2.9 -0.5,-4 z" id="path159" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g161">
    <path d="m 178.3,499.5 -2.4,-0.4 c 0.1,-1 0.5,-2.4 0.8,-4.1 1.1,-5.5 3,-14.7 2.4,-18 -0.8,-4.4 -2.7,-8.3 -2.8,-8.4 l 2.2,-1.1 c 0.1,0.1 1.9,4.2 2.9,8.9 0.7,3.8 -1.2,12.9 -2.4,18.9 -0.3,1.7 -0.6,3.2 -0.7,4.2 z" id="path163" style="fill:#231f20"></path>
  </g>
  <path d="m 69.124334,177.2 c 0,0 -2.9,8.7 -3.4,10.7 -0.5,1.9 -2.2,3.2 -2.8,7.8 -0.6,4.6 -2.4,5 -2.6,2.3 -0.2,-2.7 0.7,-6.1 1.7,-8.9 1,-2.8 2.9,-7.5 4.7,-11.5 2,-4.1 2.4,-0.4 2.4,-0.4 z" id="path165" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g167">
    <path d="m 141.6,410.9 -2.4,-0.1 c 0,0 0.2,-5.7 -0.2,-14.5 -0.5,-8.9 1.1,-31.3 1.1,-32.2 l 2.4,0.1 c 0,0.2 -1.6,23.2 -1.1,31.9 0.5,9 0.3,14.6 0.2,14.8 z" id="path169" style="fill:#231f20"></path>
  </g>
  <path d="m 128.02433,214.1 c 0,0 -1,-3 -0.1,-5.6 0.8,-2.6 1.5,-4 1.1,-8 -0.4,-4 -0.1,-6.2 0.5,-8.9 0.6,-2.7 1.7,-4.6 0.8,-7.6 -0.8,-3 -0.8,-3.2 -0.8,-3.2 l -1.3,0.7 c 0,0 1.2,2.5 1.1,5.3 -0.1,2.8 -2.6,6.2 -2.3,9.1 0.2,2.9 0.2,5.7 0,8 -0.2,2.3 -1.8,3.9 -1.5,6.3 0.4,2.5 2.5,6.9 2.5,3.9 z" id="path171" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g173">
    <path d="m 199.9,354.8 c -3.5,0 -10.6,-2.2 -18.7,-4.6 -5.5,-1.7 -11.1,-3.4 -15.8,-4.5 C 154,343.1 143,345 143,345 l -0.4,-2.2 c 0.5,-0.1 11.4,-2.1 23.3,0.7 4.9,1.1 10.4,2.8 15.9,4.5 7.8,2.3 15.1,4.6 18.2,4.5 5.6,-0.1 6.4,-0.5 7,-2.1 0.7,-1.6 0.9,-5 0.9,-6.1 h 2.2 c 0,0.2 0.1,4.6 -1,7 -1.3,2.9 -3.9,3.2 -9,3.3 -0.1,0.2 -0.1,0.2 -0.2,0.2 z" id="path175" style="fill:#231f20"></path>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g177">
    <path d="m 211,325.9 -1.5,-1.6 c 0,0 1.6,-1.6 2.2,-6.1 0.2,-2.2 0.2,-3.5 0.1,-4.6 -0.1,-1.5 -0.2,-2.7 0.7,-4.6 l 0.4,-0.7 c 2.2,-1.2 2.2,-5.5 1,-10.2 l 2.3,0.2 c 1.1,5 -0.1,8.1 -1.5,10.9 l -0.4,0.7 c -0.6,1.5 -0.6,2.2 -0.5,3.4 0.1,1.2 0.2,2.7 -0.1,5 -0.6,5.7 -2.4,7.5 -2.7,7.6 z" id="path179" style="fill:#231f20"></path>
  </g>
  <path d="m 375.42433,450.2 c 0.5,-0.2 0,-1 -0.6,-1.6 -4.6,7.5 -14.7,14.1 -13.5,11.5 1.5,-2.7 6.1,-8 8.1,-12.8 0.7,-1.7 1,-3.2 1,-4.4 -2.7,-2.9 -5.9,-6.3 -7.8,-7 -3.3,-1.3 -7.3,6.8 -8.5,10.9 -1.2,4 -5.6,6.8 -8.4,5.6 -2.8,-1.2 -5.8,-7.2 -5.7,-8.1 0.1,-1 -3.3,1 -3.9,4.1 -0.7,3.2 -0.2,8.5 -0.4,9.5 -0.2,1 -4.4,10 -5.3,10.9 -1,0.8 -3.5,0.4 -6.4,1.8 -2.9,1.5 -5.7,8.1 -1.5,11.4 4.4,3.3 13.6,3 16.5,-0.4 2.9,-3.4 12.1,-9.8 18.6,-13.7 6.4,-3.8 15.1,-9.5 18.7,-14.9 1.4,-1.9 -1.6,-2.3 -0.9,-2.8 z" id="path181" style="fill:#231f20"></path>
  <path d="m 350.72433,456.6 c 0.5,0 0.1,1.2 -0.5,1.9 0,0 -6.3,10.8 -6.9,11 -0.2,0.1 -1.1,0.2 -2.2,0.4 l 8,-13.1 c 0.9,-0.1 1.5,-0.1 1.6,-0.2 z" id="path183" style="fill:#ffffff"></path>
  <path d="m 347.52433,456.9 -8,13.1 c -0.7,0.1 -1.5,0.1 -2.2,0.1 l 7.9,-13 c 0.7,0.1 1.5,-0.1 2.3,-0.2 z" id="path185" style="fill:#ffffff"></path>
  <path d="m 341.32433,458.1 c 0.2,-0.2 1.1,-0.5 2.2,-0.6 l -7.9,12.9 c -1.5,0.1 -2.7,0.1 -2.9,0.1 -0.8,-0.1 7.7,-11.5 8.6,-12.4 z" id="path187" style="fill:#ffffff"></path>
  <path d="m 467.72433,428.6 c 0,0 -2.5,-2.5 -5.6,-2.5 -3.1,0 -9.1,2.1 -12.4,9.1 -3.3,7.2 -9.7,27.7 -13.4,34.9 -3.6,7.2 -9.7,20.8 -10.7,19.9 -0.9,-0.9 -3.8,-4.6 -3.2,-8 0.6,-3.4 6,-13.4 6.1,-15.2 0.1,-1.8 0.6,-14.5 0.2,-20 -0.4,-5.6 -0.9,-10.3 1.5,-11.3 2.3,-1 1.7,-0.7 3.5,-0.6 1.8,0.1 4.1,-3.8 6.2,-9.2 2.1,-5.6 7,-13 10.8,-13 3.8,0 5,2.9 5.1,4.2 0.1,1.3 2.9,3.2 3.4,3.8 0.5,0.6 -3.6,-2.9 -9.7,2.2 -6.2,5.1 -5.5,11.3 -5.7,14.4 -0.2,3.2 2.4,-8.5 8.7,-11.7 6.3,-3.3 11.4,-1.5 13.5,-0.2 2,1.3 1.7,3.2 1.7,3.2 z" id="path189" style="fill:#231f20"></path>
  <path d="m 457.62433,432.3 c 0,0 -4.4,4.2 -5.7,5.8 -1.3,1.5 -1.1,2.3 0.2,2.4 1.3,0.1 1.2,1.1 0.7,1.6 -0.5,0.5 -3,2.1 -4,3.8 -0.9,1.7 -0.7,3.9 -0.1,4.9 0.5,0.9 5.1,-3.2 4.1,-1.5 -1,1.7 -2.1,3.3 -2.8,4 -0.7,0.7 1.9,3.4 2.5,3.6 0.6,0.2 5.1,-6.1 5.5,-8 0.2,-1.9 -1.7,-0.8 -2.5,-0.8 -0.7,0.1 -1.5,-0.7 0.7,-2.4 2.2,-1.7 1.9,-2.7 2.1,-3.6 0.1,-1.1 -0.7,-0.1 -2.3,-0.4 -1.6,-0.3 0.9,-1.6 2.3,-2.9 1.5,-1.3 1.5,-4.5 1.3,-6 0.1,-1.6 -0.7,-1.4 -2,-0.5 z" id="path191" style="fill:#231f20"></path>
  <path d="m 460.42433,451.7 c -0.1,0.1 -3.8,5.3 -4.2,6.6 -0.5,1.3 0.9,3 1.7,3.6 0.8,0.6 2.8,-0.1 4.5,-3.5 1.8,-3.3 0.7,-9.5 -2,-6.7 z" id="path193" style="fill:#231f20"></path>
  <path d="m 464.32433,432 c 0,0 -0.1,5.3 -0.2,6.7 -0.1,1.4 -1.6,2.8 -2.2,3.9 -0.6,1.1 1.3,4.1 3,4.2 1.7,0.1 3.8,-3 3.9,-7.9 0.1,-4.9 -2.1,-7.3 -2.8,-8 -0.9,-0.7 -1.5,0.3 -1.7,1.1 z" id="path195" style="fill:#231f20"></path>
  <path d="m 428.52433,483.5 c 0,0 -0.4,2.5 -0.9,3.9 -0.5,1.3 0.4,1.9 1,1.5 0.6,-0.4 2.8,-5.7 5.5,-5.7 2.7,-0.1 5.5,0.1 6.4,0.1 0.9,0.1 0,1.5 -0.4,2.4 -0.4,1 -0.5,2.3 2.3,0.5 2.7,-1.9 5,-3.6 5.8,-4.5 0.9,-0.7 7.3,-0.9 7.5,-0.4 0.2,0.5 -7.4,7.6 -16.6,9.2 -9.2,1.6 -14.2,0.1 -14.7,-1.9 -0.7,-1.9 3.8,-6.3 4.1,-5.1 z" id="path197" style="fill:#231f20"></path>
  <path d="m 434.32433,480.2 c 0,0 2.4,-4.2 3.8,-5.1 1.3,-0.9 4.6,-0.9 4.7,0 0.1,0.9 -0.4,1.8 0.6,1.8 1,0 1,-1.2 2.3,-1.8 1.3,-0.6 3.4,-0.5 4.1,-0.5 0.7,0 -2.4,4.6 -3.6,5.1 -1.2,0.5 -3.6,0.9 -3.6,0.4 0,-0.5 0.5,-1.1 -0.2,-1.1 -0.8,0 -1.9,0.9 -2.5,1.1 -0.9,0.1 -5.7,0.9 -5.6,0.1 z" id="path199" style="fill:#231f20"></path>
  <path d="m 439.42433,472.2 c 0.1,-0.4 3.5,-8.1 4.4,-9 0.9,-0.8 1.9,1.7 2.6,2.6 0.5,0.8 2.1,0.5 2.1,-0.9 0,-1.3 0.6,-2.7 1.7,-2.7 1.1,0 2.1,1.5 1.7,4.7 -0.4,3.3 -1.1,5 -1.7,5.2 -0.5,0.2 -3,0.5 -3.5,0.2 -0.5,-0.1 0.4,-2.1 -0.5,-2.4 -0.9,-0.4 -1.5,1.5 -1.7,1.9 -0.2,0.4 -5.4,0.9 -5.1,0.4 z" id="path201" style="fill:#231f20"></path>
  <path d="m 453.62433,471.3 c 0,0 4.1,-4.7 5.3,-6.1 1.3,-1.3 1.3,3.3 1.1,5 -0.3,1.7 -6.2,2 -6.4,1.1 z" id="path203" style="fill:#231f20"></path>
  <path d="m 450.82433,478.4 c 0,0 1.7,-2.5 2.8,-3.3 1.1,-0.7 3.2,-0.9 4.1,-0.9 0.9,0 -0.5,3.3 -1.7,4.1 -1.1,0.8 -5.8,1.1 -5.2,0.1 z" id="path205" style="fill:#231f20"></path>
  <path d="m 329.92433,363.2 c 0,0 0.1,0.7 0.2,2.1 0.1,0.6 0.1,1.5 0.4,2.3 0.1,1 0.4,1.9 0.5,3 0.2,1.1 0.4,2.3 0.6,3.6 0.2,1.3 0.5,2.7 0.7,4 0.2,1.3 0.6,2.8 0.9,4.2 0.2,1.5 0.7,2.9 1.1,4.4 0.4,1.5 0.7,2.9 1.1,4.4 0.4,1.5 0.9,2.8 1.2,4.2 0.4,1.3 0.7,2.7 1.1,4 0.4,1.2 0.7,2.4 1.1,3.5 0.7,2.2 1.2,4 1.6,5.2 0.4,1.3 0.6,2.1 0.6,2.1 0,0 -0.2,-0.7 -0.9,-1.9 -0.5,-1.2 -1.2,-3 -2.1,-5.1 -0.4,-1.1 -0.9,-2.2 -1.2,-3.4 -0.4,-1.2 -0.9,-2.5 -1.2,-3.9 -0.4,-1.3 -0.9,-2.8 -1.3,-4.2 -0.4,-1.5 -0.7,-2.9 -1.1,-4.4 -0.4,-1.5 -0.7,-2.9 -1,-4.4 -0.2,-1.5 -0.5,-2.9 -0.9,-4.4 -0.2,-1.5 -0.5,-2.8 -0.6,-4 -0.1,-1.3 -0.4,-2.6 -0.5,-3.6 -0.2,-2.3 -0.4,-4.1 -0.4,-5.5 0.1,-1.5 0.1,-2.2 0.1,-2.2 z" id="path207" style="fill:#231f20"></path>
  <path d="m 361.22433,375.1 c 0,0 -2.1,4.7 -5.6,5.8 0,0 4.7,0.2 6.8,-4.2 2.1,-4.5 -1,-3 -1.2,-1.6 z" id="path209" style="fill:#231f20"></path>
  <path d="m 350.12433,356.3 c 0,0 -6.4,-16.1 -6.7,-16.9 -0.1,-0.7 0.7,9.1 6.7,16.9 z" id="path211" style="fill:#231f20"></path>
  <path d="m 353.72433,423.8 c 0,0 3.6,16.3 3.8,18.8 0.1,2.6 -1.3,4.2 -1.3,4.2 0,0 -2.5,-16.3 -2.5,-23 z" id="path213" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g215">
    <path d="m 524.3,570.6 -1.7,-0.2 c 0,-0.1 0.4,-2.9 -3.3,-4.2 -3.8,-1.5 -4.2,-2.3 -5.5,-5.2 -0.2,-0.6 -0.5,-1.3 -0.8,-2.2 -1.9,-4.6 -7.5,-16.5 -7.6,-16.6 l 1.6,-0.7 c 0,0.1 5.7,12 7.6,16.6 0.4,0.9 0.6,1.6 0.8,2.2 1.1,2.7 1.2,3 4.5,4.2 4.1,1.5 4.7,4.7 4.4,6.1 z" id="path217" style="fill:#231f20"></path>
  </g>
  <path d="m 400.32433,343 c 0,0 0,0.2 0.1,0.7 0,0.5 0.1,1.1 0.4,1.9 0.1,0.9 0.4,1.8 0.6,2.9 0.4,1.1 0.7,2.3 1.2,3.6 0.2,0.6 0.5,1.3 0.9,1.9 0.4,0.6 0.6,1.3 1.1,2.1 0.5,0.6 0.9,1.3 1.3,1.9 0.5,0.6 1.1,1.3 1.7,2.1 1.1,1.3 2.3,2.7 3.6,3.9 1.3,1.2 2.8,2.3 4.4,2.9 1.6,0.7 3.3,1.1 5,1.2 0.5,0 0.9,0 1.3,0 h 0.1 l 0,0 c -0.2,0 0,0 -0.1,0 l 0,0 h 0.1 0.4 l 0.7,-0.1 c 0.4,-0.1 0.7,-0.2 1.1,-0.4 0.4,-0.1 0.7,-0.4 1.1,-0.5 1.5,-0.7 2.7,-1.8 3.6,-3 1.1,-1.2 1.8,-2.4 2.6,-3.6 0.6,-1.2 1.1,-2.4 1.5,-3.5 0.1,-0.5 0.2,-1.1 0.4,-1.6 0.1,-0.5 0.1,-1 0.1,-1.3 0,-0.9 0,-1.5 0,-1.9 0,-0.5 -0.1,-0.7 -0.1,-0.7 0,0 0.1,0.2 0.2,0.6 0.1,0.4 0.2,1.1 0.4,1.9 0,0.4 0,0.9 0,1.5 0,0.5 0,1.1 -0.1,1.7 -0.2,1.2 -0.5,2.6 -1.1,3.9 -0.6,1.3 -1.3,2.8 -2.3,4.2 -1.1,1.3 -2.3,2.7 -4,3.8 -0.5,0.2 -0.9,0.5 -1.3,0.7 -0.5,0.1 -1.1,0.4 -1.6,0.5 l -0.7,0.1 h -0.4 -0.1 l 0,0 h -0.1 -0.1 c -0.5,0 -1,0 -1.5,0 -2.1,0 -4.1,-0.5 -5.9,-1.3 -1.8,-0.9 -3.5,-2.1 -5,-3.4 -1.5,-1.3 -2.7,-2.8 -3.8,-4.2 -0.6,-0.7 -1.1,-1.5 -1.6,-2.2 -0.5,-0.7 -0.9,-1.6 -1.3,-2.3 -0.4,-0.7 -0.7,-1.6 -1,-2.3 -0.4,-0.7 -0.5,-1.5 -0.7,-2.2 -0.5,-1.5 -0.6,-2.7 -0.9,-3.9 -0.1,-1.2 -0.2,-2.2 -0.2,-3 0,-0.9 0,-1.5 0,-1.9 0,-0.4 0,-0.7 0,-0.7 z" id="path219" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g221">
    <path d="m 480.7,487.6 c -0.1,-1.6 -1.5,-7.8 -2.4,-11.3 -0.5,-2.1 -3.5,-4.4 -7.3,-7.3 -1.2,-1 -2.5,-1.9 -3.9,-3 -5.7,-4.7 -9.6,-8.6 -9.6,-8.6 l 1.6,-1.6 c 0,0 3.9,3.9 9.5,8.5 1.3,1.1 2.5,2.1 3.8,3 4.2,3.3 7.3,5.7 8,8.5 0.7,3 2.3,9.7 2.4,11.7 l -2.1,0.1 z" id="path223" style="fill:#231f20"></path>
  </g>
  <path d="m 407.52433,307.2 c 0,0 10.9,4.2 15.3,11.4 4.4,7.3 0.6,-2.9 0.6,-2.9 0,0 -7.1,-7.7 -15.9,-8.5 z" id="path225" style="fill:#231f20"></path>
  <path d="m 301.62433,106.6 c 0,0 -1,2.1 -2.7,5.1 -0.9,1.5 -1.8,3.3 -2.9,5.1 -1.1,1.8 -2.2,3.9 -3.3,5.8 -0.5,0.8 -1,2.1 -1.5,3 -0.5,1 -0.9,2.1 -1.2,3 -0.2,0.5 -0.4,1 -0.6,1.5 -0.2,0.5 -0.4,1 -0.5,1.5 -0.2,1 -0.5,1.8 -0.7,2.7 -0.1,0.4 -0.2,0.9 -0.4,1.2 -0.1,0.4 -0.1,0.7 -0.2,1.1 -0.1,0.7 -0.2,1.3 -0.4,1.8 -0.2,1 -0.4,1.6 -0.4,1.6 0,0 0,-0.6 0,-1.6 0,-0.5 0,-1.1 0,-1.8 0,-0.4 0,-0.7 0,-1.1 0,-0.4 0.1,-0.9 0.2,-1.2 0.1,-0.8 0.2,-1.8 0.5,-2.8 0.1,-1 0.5,-2.1 0.9,-3 0.4,-1.1 0.6,-2.2 1.1,-3.2 0.5,-1.1 0.9,-2.1 1.5,-3.2 0.6,-1 1.2,-2.1 1.7,-3 0.6,-1 1.2,-1.9 1.8,-2.8 1.2,-1.8 2.3,-3.4 3.4,-4.9 2.1,-3 3.7,-4.8 3.7,-4.8 z" id="path227" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g229">
    <path d="m 390.5,333.2 -2.3,-0.8 c 1.7,-4.6 3,-18.2 3.6,-25.6 0.4,-5.3 1.5,-8 3.3,-12.9 1,-2.5 2.2,-5.7 3.8,-10.3 4.1,-12.6 -1.5,-31.1 -1.5,-31.3 0,0 -0.7,-3.3 -0.2,-3.8 0.9,-0.6 2.1,3 2.1,3 0.2,0.8 6.3,19.4 1.9,32.8 -1.6,4.6 -2.8,7.8 -3.8,10.3 -1.8,4.7 -2.8,7.2 -3.2,12.1 0,2.2 -1.5,20.6 -3.7,26.5 z" id="path231" style="fill:#231f20"></path>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g233">
    <path d="m 463.5,303 -2.1,-0.6 c 0.1,-0.5 4,-12.8 6.3,-18 1.8,-4.4 6.7,-15.8 5.7,-29.1 -0.4,-5 -0.2,-8.5 -0.1,-11.4 0.2,-4.9 0.4,-7.8 -1.9,-12.5 l 1.9,-1 c 2.5,5.2 2.4,8.5 2.2,13.6 -0.1,2.8 -0.2,6.4 0,11.2 1,13.8 -4,25.6 -6,30.1 -2,5.1 -6,17.6 -6,17.7 z" id="path235" style="fill:#231f20"></path>
  </g>
  <path d="m 339.72433,71.3 c 0,0 1.1,1.2 2.9,3.6 0.9,1.2 1.9,2.7 3.2,4.4 1.2,1.7 2.4,3.8 3.6,6 1.2,2.2 2.6,4.7 3.8,7.4 0.5,1.3 1.2,2.8 1.6,4.2 0.2,0.7 0.5,1.5 0.7,2.3 0.2,0.7 0.4,1.6 0.6,2.3 0.2,0.7 0.4,1.6 0.5,2.4 0.1,0.8 0.2,1.7 0.4,2.6 0,0.8 0.1,1.7 0.1,2.5 0,0.9 0,1.7 0,2.6 -0.1,3.4 -0.1,6.8 -0.2,10.2 -0.1,3.4 -0.1,6.8 -0.2,10.2 0,3.4 -0.1,6.7 -0.1,9.8 0,6.4 0.1,12.4 0.5,17.5 0.4,5.1 0.9,9.4 1.7,12.1 0.4,1.5 0.9,2.5 1.2,3.2 0.1,0.4 0.4,0.6 0.5,0.7 0.1,0.1 0.1,0.2 0.1,0.2 0,0 -0.1,-0.1 -0.2,-0.2 -0.1,-0.1 -0.4,-0.4 -0.6,-0.7 -0.5,-0.6 -1,-1.7 -1.5,-3.2 -1,-2.9 -1.9,-7 -2.4,-12.1 -0.5,-5.1 -1,-11 -1.1,-17.5 -0.1,-3.2 -0.1,-6.6 -0.1,-9.8 0,-3.4 0.1,-6.8 0.1,-10.2 0.1,-3.4 0.2,-6.8 0.4,-10.2 0,-0.8 0.1,-1.7 0,-2.6 0,-0.8 0,-1.6 0,-2.4 0,-0.8 -0.1,-1.6 -0.2,-2.4 -0.1,-0.7 -0.2,-1.6 -0.4,-2.3 -0.1,-0.7 -0.4,-1.6 -0.5,-2.3 -0.2,-0.7 -0.4,-1.5 -0.6,-2.2 -0.4,-1.5 -1,-2.8 -1.5,-4.2 -1.1,-2.7 -2.2,-5.2 -3.3,-7.5 -0.6,-1.1 -1.1,-2.2 -1.7,-3.3 -0.5,-1 -1.1,-1.9 -1.6,-2.9 -1.1,-1.8 -2.1,-3.3 -2.8,-4.6 -1.9,-2.3 -2.9,-3.6 -2.9,-3.6 z" id="path237" style="fill:#231f20"></path>
  <path d="m 344.12433,171.9 c 0,0 0.7,-0.2 2.1,-0.7 0.6,-0.2 1.3,-0.7 2.2,-1.2 0.4,-0.2 0.9,-0.6 1.2,-1 0.4,-0.4 0.9,-0.7 1.2,-1.1 0.4,-0.5 0.9,-0.9 1.2,-1.3 0.4,-0.5 0.7,-1.1 1.1,-1.6 0.4,-0.6 0.6,-1.2 0.9,-1.8 0.2,-0.6 0.5,-1.3 0.6,-2.1 0.1,-0.7 0.2,-1.5 0.4,-2.2 0,-0.7 0.1,-1.5 0.1,-2.3 0,-1.6 0,-3.2 0,-4.7 0,-3.2 0,-6.4 0.1,-9.5 0,-1.5 0.1,-2.9 0.1,-4.4 0,-1.3 0,-2.7 0,-3.9 0,-2.4 0.1,-4.4 0.1,-5.8 0,-1.5 0.1,-2.2 0.1,-2.2 0,0 0,0.9 0.1,2.2 0.1,1.5 0.2,3.4 0.4,5.8 0.1,2.4 0.2,5.2 0.2,8.3 0,3.1 0,6.2 0,9.5 0,1.6 0,3.2 0,4.7 -0.1,0.8 -0.1,1.6 -0.2,2.4 -0.1,0.7 -0.4,1.6 -0.5,2.3 -0.2,0.7 -0.5,1.5 -0.7,2.2 -0.4,0.6 -0.6,1.3 -1,1.9 -0.4,0.6 -0.7,1.2 -1.2,1.7 -0.4,0.5 -0.9,1 -1.3,1.5 -0.5,0.5 -1,0.7 -1.3,1.1 -0.5,0.2 -0.9,0.6 -1.3,0.9 -0.9,0.5 -1.7,0.8 -2.3,1.1 -1.6,0.1 -2.3,0.2 -2.3,0.2 z" id="path239" style="fill:#231f20"></path>
  <path d="m 305.92433,75.3 c 0,0 2.5,-4.5 6.7,-6.4 4.2,-1.9 11.3,-5.5 13.6,-14.1 0,0 -5.1,7.5 -9,9.5 -3.9,1.9 -10.2,4 -14,10.9 -3.6,7 2.7,0.1 2.7,0.1 z" id="path241" style="fill:#231f20"></path>
  <path d="m 309.82433,38 c 0,0 -1.3,-1.6 -0.5,-2.6 0.7,-1 2.8,1 2.9,3.9 0.1,2.9 -0.9,3.3 -1.3,4.5 -0.5,1.3 -1.3,0.1 -0.5,-1.2 0.9,-1.3 0.2,-1.3 0.1,-2.6 -0.1,-1.2 0.3,-1.6 -0.7,-2 z" id="path243" style="fill:#231f20"></path>
  <path d="m 376.22433,75.4 c 0,0 1.8,4 2.3,6 0.5,1.9 2.4,4 4.4,4.2 0,0 -2.2,-1.5 -2.8,-5.2 -0.7,-3.9 -3,-5.9 -3.9,-5 z" id="path245" style="fill:#231f20"></path>
  <path d="m 349.22433,71.3 c 0,0 0,0.2 0.1,0.8 0,0.5 0.1,1.3 0.2,2.3 0.1,1 0.4,2.2 0.7,3.5 0.1,0.7 0.4,1.3 0.6,2.2 0.2,0.7 0.4,1.6 0.7,2.3 0.2,0.9 0.6,1.7 0.9,2.6 0.4,0.8 0.7,1.7 1.1,2.7 0.7,1.8 1.7,3.6 2.6,5.6 0.9,2 1.8,3.9 2.9,5.8 1.1,1.9 2.2,3.9 3.5,5.7 1.3,1.8 2.9,3.4 4.6,4.6 1.8,1.2 3.8,1.9 5.8,2.1 1,0 1.8,-0.2 2.5,-0.8 0.7,-0.6 1.1,-1.5 1.3,-2.3 0.5,-1.8 0.2,-3.6 0,-5.3 -0.6,-3.3 -1.7,-5.9 -2.8,-7.7 -0.5,-0.8 -1,-1.5 -1.5,-1.8 -0.2,-0.2 -0.4,-0.4 -0.5,-0.4 -0.1,-0.1 -0.1,-0.1 -0.1,-0.1 0,0 0,0 0.1,0.1 0.1,0.1 0.2,0.2 0.5,0.4 0.4,0.4 1,0.9 1.6,1.7 1.1,1.7 2.6,4.2 3.3,7.6 0.4,1.7 0.6,3.6 0.2,5.6 -0.2,1 -0.6,2.1 -1.5,2.9 -0.9,0.9 -2.1,1.2 -3.3,1.2 -2.2,-0.1 -4.5,-0.9 -6.4,-2.2 -1.9,-1.3 -3.5,-3 -5,-4.9 -1.3,-1.8 -2.5,-3.9 -3.6,-5.8 -1.1,-2.1 -1.9,-4 -2.8,-5.9 -0.9,-1.9 -1.7,-3.9 -2.4,-5.7 -0.4,-1 -0.7,-1.8 -1,-2.7 -0.2,-0.8 -0.5,-1.7 -0.7,-2.5 -0.2,-0.9 -0.4,-1.6 -0.6,-2.4 -0.2,-0.7 -0.4,-1.5 -0.5,-2.2 -0.2,-1.3 -0.4,-2.6 -0.5,-3.5 0,-2.4 0,-3.5 0,-3.5 z" id="path247" style="fill:#231f20"></path>
  <path d="m 292.52433,145.9 c 0,0 -0.2,-0.7 -0.4,-2.1 -0.1,-1.3 -0.2,-3.3 0.1,-5.5 0.2,-1.1 0.6,-2.3 1.2,-3.5 0.6,-1.2 1.3,-2.4 2.4,-3.4 0.1,-0.1 0.2,-0.2 0.4,-0.4 l 0.4,-0.4 c 0.2,-0.2 0.5,-0.5 0.9,-0.7 l 1,-0.6 c 0.4,-0.2 0.7,-0.4 1.1,-0.5 1.5,-0.6 3,-0.9 4.7,-0.6 1.6,0.2 3.2,0.8 4.4,1.8 1.2,1 2.3,2.3 2.7,3.8 0.1,0.4 0.1,0.7 0.1,1.2 0,0.4 0,0.7 0,1 0,0.7 -0.1,1.3 -0.1,2.1 -0.1,1.3 -0.4,2.5 -0.6,3.6 -0.2,1.1 -0.4,2.1 -0.6,3 -0.1,0.5 -0.1,0.9 -0.2,1.2 0,0.4 -0.1,0.7 -0.1,1.1 -0.1,0.6 0,1.2 0,1.5 0,0.4 0,0.5 0,0.5 0,0 0,-0.2 -0.1,-0.5 0,-0.4 -0.2,-0.9 -0.1,-1.6 0,-0.4 0,-0.7 0,-1.1 0,-0.4 0,-0.9 0.1,-1.3 0,-1 0.2,-1.9 0.4,-3 0.1,-1.1 0.2,-2.3 0.4,-3.5 0,-0.6 0.1,-1.2 0,-1.9 0,-0.4 0,-0.7 0,-1 0,-0.3 -0.1,-0.6 -0.1,-0.9 -0.4,-1.2 -1.2,-2.3 -2.3,-3.2 -1.1,-0.9 -2.4,-1.3 -3.9,-1.5 -1.3,-0.2 -2.8,0 -4.1,0.5 -0.4,0.1 -0.6,0.2 -1,0.4 l -0.9,0.5 c -0.2,0.1 -0.6,0.5 -0.9,0.6 l -0.4,0.4 c -0.1,0 -0.2,0.2 -0.4,0.4 -1,1 -1.7,2.1 -2.4,3 -0.6,1.1 -1,2.2 -1.3,3.3 -0.2,1.1 -0.5,2.1 -0.5,2.9 -0.1,0.8 -0.1,1.7 -0.1,2.3 -0.1,1.4 0.2,2.1 0.2,2.1 z" id="path249" style="fill:#231f20"></path>
  <path d="m 283.72433,161 c 0,0 0,-0.2 0.1,-0.7 0.1,-0.5 0.2,-1.1 0.5,-1.9 0.2,-0.9 0.7,-1.8 1.3,-2.8 0.7,-1 1.7,-2.2 3.4,-2.5 0.2,0 0.4,-0.1 0.6,-0.1 0.2,0 0.5,0 0.7,0 0.5,0 0.9,0.1 1.3,0.2 0.9,0.2 1.7,0.9 2.3,1.6 1.3,1.3 1.9,3.3 2.2,5.2 0,0.5 0.1,1 0.1,1.5 0,0.2 0,0.5 0,0.8 l -0.1,0.7 c -0.1,1 -0.5,1.9 -0.7,2.9 -0.6,1.8 -1.3,3.6 -1.9,5.5 -1.5,3.6 -2.9,7.2 -4.2,10.6 -1.3,3.4 -2.7,6.4 -3.6,9.2 -0.5,1.3 -1,2.5 -1.3,3.6 -0.4,1.1 -0.7,2.1 -1,2.9 -0.5,1.6 -0.7,2.5 -0.7,2.5 0,0 0.1,-1 0.4,-2.7 0.1,-0.9 0.4,-1.8 0.6,-3 0.2,-1.1 0.6,-2.4 1,-3.9 0.7,-2.8 1.8,-6.1 3,-9.5 0.6,-1.7 1.2,-3.5 1.9,-5.2 0.7,-1.8 1.3,-3.5 2.1,-5.3 0.7,-1.8 1.5,-3.5 2.1,-5.3 0.4,-1 0.6,-1.7 0.7,-2.6 l 0.1,-0.7 c 0,-0.1 0,-0.4 0,-0.6 0,-0.4 0,-0.9 0,-1.2 -0.1,-1.6 -0.6,-3.3 -1.6,-4.4 -1,-1.1 -2.2,-1.7 -3.5,-1.5 -1.2,0.2 -2.2,1.1 -2.9,1.9 -0.7,0.8 -1.2,1.7 -1.6,2.6 -0.9,1.2 -1.3,2.2 -1.3,2.2 z" id="path251" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g253">
    <path d="m 389.8,338.9 c 0,-0.2 -0.2,-6.8 9.8,-9.2 9.1,-2.3 28.2,-2.8 38.9,-2.6 6.1,0.1 12.5,-0.5 17.2,-1 3,-0.4 5.5,-0.5 6.9,-0.5 l -0.1,2.4 c -1.2,0 -3.6,0.2 -6.6,0.5 -4.7,0.5 -11.3,1.1 -17.5,1 -10.6,-0.2 -29.4,0.2 -38.2,2.4 -8.1,2.1 -8,6.7 -8,6.8 l -2.4,0.2 z" id="path255" style="fill:#231f20"></path>
  </g>
  <path d="m 286.12433,218 c 0,0 0.1,-1.1 0.6,-2.9 0.4,-1.8 1,-4.5 1.8,-7.5 0.4,-1.6 0.9,-3.3 1.5,-5 0.5,-1.7 1.1,-3.6 1.8,-5.5 0.7,-1.9 1.5,-3.8 2.4,-5.7 1,-1.9 2.1,-3.9 3.4,-5.5 1.3,-1.7 2.8,-3.3 4.4,-4.7 1.6,-1.5 3,-2.8 4.4,-4.2 1.3,-1.5 2.3,-3 3,-4.6 0.4,-0.9 0.6,-1.7 0.9,-2.4 0.1,-0.8 0.4,-1.7 0.5,-2.4 0.1,-1.6 0.2,-3 0.1,-4.2 0,-0.4 0,-0.6 -0.1,-1 0,-0.2 -0.1,-0.6 -0.1,-0.9 0,-0.2 -0.1,-0.5 -0.1,-0.7 -0.1,-0.2 -0.1,-0.5 -0.2,-0.7 -0.2,-0.8 -0.6,-1.6 -0.9,-1.9 -0.2,-0.5 -0.4,-0.6 -0.4,-0.6 0,0 0.1,0.2 0.5,0.6 0.2,0.5 0.6,1.1 1,1.9 0.1,0.2 0.2,0.5 0.2,0.7 0.1,0.2 0.1,0.5 0.2,0.7 0.1,0.2 0.1,0.6 0.2,0.9 0.1,0.2 0.1,0.6 0.1,1 0.2,1.3 0.2,2.8 0.1,4.4 -0.1,0.7 -0.2,1.6 -0.4,2.4 -0.2,0.8 -0.5,1.7 -0.9,2.7 -0.6,1.7 -1.7,3.5 -3,5 -1.3,1.6 -2.9,2.9 -4.4,4.4 -1.5,1.5 -2.9,3 -4.2,4.6 -1.3,1.7 -2.4,3.4 -3.4,5.2 -0.9,1.8 -1.7,3.8 -2.4,5.6 -1.5,3.8 -2.7,7.3 -3.5,10.3 -1,3 -1.7,5.6 -2.2,7.4 -0.5,1.5 -0.9,2.6 -0.9,2.6 z" id="path257" style="fill:#231f20"></path>
  <path d="m 388.42433,138.3 c 0.1,0.2 6.4,14.9 7.6,17.6 1.2,2.7 -5.3,-5.6 -8.6,-14.6 l 1,-3 z" id="path259" style="fill:#231f20"></path>
  <path d="m 392.82433,176.4 c 0,0 -0.5,-6.9 -1.2,-10.1 -0.7,-3.2 -1.1,-5 -1.3,-7 -0.2,-2.1 -1.5,3.2 -0.7,8.9 0.7,5.7 3.2,8.2 3.2,8.2 z" id="path261" style="fill:#231f20"></path>
  <path d="m 401.92433,145.6 c 0,0 5.2,-2.7 5.6,-10.9 0.4,-8.2 1.8,1 1.1,4.6 -0.7,3.7 -4.4,6.6 -6.7,6.3 z" id="path263" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g265">
    <path d="m 490,418.5 c 0,-0.1 -2.6,-10.4 -5.1,-16.1 -2.7,-6 -7.5,-20.6 -7.9,-25.9 l -1.1,-12.6 2.4,-0.2 1.1,12.6 c 0.5,5 5.2,19.6 7.8,25.1 2.7,5.9 5.2,16.1 5.2,16.6 l -2.4,0.5 z" id="path267" style="fill:#231f20"></path>
  </g>
  <path d="m 362.92433,259.2 c -0.9,7.4 -1.2,14.9 -1.6,21.5 -0.4,7.9 -0.9,16.8 -1.9,18.2 -3.8,0.6 -42.9,1.9 -57.8,2.3 l 0.1,2.4 c 5.6,-0.1 54.9,-1.7 58.3,-2.4 2.6,-0.6 2.9,-5.7 3.8,-20.4 0.5,-10.1 1.2,-22.6 3.3,-32.9 -2,2.8 -3.2,7.1 -4.2,11.3 z" id="path269" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g271">
    <path d="m 434.8,445.1 v -2.4 c 0.2,0 27.9,0 39,-1.7 10.6,-1.6 19.6,-4.5 19.7,-4.6 l 0.7,2.3 c -0.1,0 -9.2,3 -20,4.7 -11.3,1.7 -39.1,1.7 -39.4,1.7 z" id="path273" style="fill:#231f20"></path>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g275">
    <path d="m 362.5,427.6 c -0.4,0 -0.6,-0.1 -0.9,-0.2 -1.3,-0.6 -8.9,-8.6 -9.4,-10.2 -0.7,-2.5 -0.7,-6.3 -0.7,-6.6 0,-0.5 0.4,-0.9 0.7,-0.9 l 0,0 c 0.5,0 0.7,0.4 0.7,0.7 0,0 -0.1,3.9 0.6,6.1 0.4,1.1 7.4,8.6 8.6,9.2 0.2,0.1 0.6,0.1 1,-0.2 0.2,-0.2 1,-0.9 0.7,-2.3 -0.1,-0.5 0.2,-0.9 0.6,-0.9 0.5,0 0.9,0.2 0.9,0.6 0.2,1.6 -0.2,2.9 -1.3,3.8 -0.3,0.8 -0.9,0.9 -1.5,0.9 z" id="path277" style="fill:#231f20"></path>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g279">
    <path d="m 358.6,430 c -0.4,0 -0.6,-0.1 -0.9,-0.2 -1.3,-0.6 -8.9,-8.6 -9.4,-10.2 -0.7,-2.6 -0.9,-7.5 -0.9,-7.7 0,-0.5 0.4,-0.8 0.7,-0.8 l 0,0 c 0.5,0 0.7,0.4 0.7,0.7 0,0 0.1,5 0.9,7.3 0.4,1.1 7.4,8.6 8.6,9.2 0.2,0.1 0.6,0.1 1,-0.2 0.2,-0.2 1,-0.9 0.7,-2.3 -0.1,-0.5 0.2,-0.9 0.6,-0.9 0.5,0 0.9,0.2 0.9,0.6 0.2,1.6 -0.2,2.9 -1.3,3.8 -0.5,0.6 -1,0.7 -1.6,0.7 z" id="path281" style="fill:#231f20"></path>
  </g>
  <path d="m 272.32433,286.4 c -0.1,-0.4 0.6,0.2 0.1,-0.6 -2.4,-2.3 -8,-8.6 -8.3,-9.5 -0.7,-2.3 -0.7,-6.3 -0.7,-6.4 0,-0.5 -0.4,-0.7 -0.7,-0.7 l 0,0 c -0.5,0 -0.7,0.4 -0.7,0.8 0,0.2 0,4.4 0.9,6.8 0.5,1.6 8.1,9.6 9.4,10.2 0.1,0 0.2,0.1 0.4,0.1 -0.3,-0.2 -0.3,-0.4 -0.4,-0.7 z" id="path283" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g285">
    <path d="m 338.2,415.6 c -2.6,0 -3.8,-1.2 -4.1,-1.9 -0.7,-1.2 -0.7,-2.8 0,-4.1 1,-1.7 4.2,-5.6 4.4,-5.7 l 1.8,1.6 c -0.9,1.1 -3.4,4.1 -4.1,5.3 -0.2,0.5 -0.4,1.1 0,1.6 0.4,0.6 1.2,0.9 2.4,0.9 l 0.1,2.4 c -0.2,-0.1 -0.4,-0.1 -0.5,-0.1 z" id="path287" style="fill:#231f20"></path>
  </g>
  <path d="m 311.52433,52.4 c 0,0 -0.1,0.5 -0.4,1.2 -0.1,0.4 -0.1,0.9 -0.2,1.5 0,0.6 -0.2,1.2 -0.2,1.8 0,0.4 0,0.7 -0.1,1.1 0,0.4 0,0.7 0,1.1 0,0.7 0.1,1.6 0.1,2.4 0.1,0.8 0.2,1.7 0.2,2.7 0,1 0,1.9 -0.2,2.9 -0.2,1 -0.5,2.1 -1.3,2.9 l -0.4,0.2 -0.2,0.1 0,0 0,0 c 0.1,0 -0.1,0.1 -0.1,0 l 0,0 h -0.1 c -0.1,0.1 -0.9,0.1 -1,0 -0.6,-0.1 -1,-0.5 -1.5,-0.7 -0.7,-0.6 -1.3,-1.3 -1.8,-1.9 -0.5,-0.7 -0.9,-1.5 -1.1,-2.1 -0.2,-0.6 -0.5,-1.3 -0.5,-1.8 -0.1,-0.6 -0.1,-1.1 -0.2,-1.5 0,-0.4 0,-0.7 0,-1 0,-0.3 0,-0.4 0,-0.4 0,0 0.1,0.5 0.4,1.2 0.1,0.4 0.2,0.9 0.5,1.3 0.2,0.5 0.5,1.1 0.7,1.7 0.6,1.1 1.6,2.4 2.9,3.3 0.4,0.2 0.6,0.4 1,0.4 0.1,0 0.1,0 0.1,0 l 0,0 h 0.1 0.1 l 0,0 c 0,0 -0.2,0.1 -0.1,0 l 0,0 0,0 0.1,-0.1 0.1,-0.1 c 0.5,-0.4 0.7,-1.2 0.9,-2.1 0.1,-0.9 0.2,-1.7 0.2,-2.6 0,-0.9 0,-1.7 -0.1,-2.7 0,-0.8 -0.1,-1.7 0,-2.5 0,-0.4 0.1,-0.9 0.1,-1.2 0.1,-0.4 0.1,-0.7 0.2,-1.1 0.1,-0.7 0.4,-1.3 0.5,-1.8 0.2,-0.5 0.4,-1 0.6,-1.3 0.5,-0.4 0.7,-0.9 0.7,-0.9 z" id="path289" style="fill:#231f20"></path>
  <path d="m 316.62433,68.8 c 0,0 1.2,-0.4 3,-0.6 0.9,-0.1 1.9,-0.2 3.2,-0.4 1.1,-0.1 2.3,-0.1 3.6,-0.1 1.2,0 2.4,0.1 3.6,0.2 1.1,0.1 2.2,0.4 3.2,0.5 0.9,0.2 1.6,0.5 2.2,0.7 0.5,0.1 0.9,0.2 0.9,0.2 0,0 -0.4,0 -0.9,-0.1 -0.5,-0.1 -1.3,-0.1 -2.2,-0.2 -0.9,0 -1.9,-0.1 -3,-0.1 -1.1,0 -2.3,0 -3.5,-0.1 -2.4,0 -4.9,0 -6.7,0 -2.2,0 -3.4,0 -3.4,0 z" id="path291" style="fill:#231f20"></path>
  <path d="m 295.92433,108.4 c 0,0 0.4,-0.2 0.9,-0.6 0.2,-0.2 0.6,-0.5 0.9,-0.9 0.4,-0.4 0.6,-0.7 1,-1.2 0.4,-0.5 0.6,-1 0.9,-1.6 0.2,-0.6 0.5,-1.2 0.7,-1.8 0.1,-0.7 0.4,-1.3 0.5,-2.1 0.1,-0.7 0.2,-1.5 0.2,-2.2 0.2,-1.5 0.4,-3 0.9,-4.5 0.2,-0.7 0.6,-1.3 1,-1.9 0.4,-0.6 0.9,-1.1 1.3,-1.5 0.5,-0.4 1,-0.6 1.3,-0.9 0.5,-0.2 0.9,-0.4 1.1,-0.5 0.6,-0.1 1,-0.2 1,-0.2 0,0 -0.4,0.2 -1,0.5 -0.2,0.1 -0.6,0.4 -1,0.6 -0.4,0.2 -0.7,0.6 -1.1,1 -0.4,0.4 -0.7,0.9 -1,1.5 -0.2,0.6 -0.5,1.2 -0.7,1.8 -0.4,1.3 -0.5,2.8 -0.7,4.4 -0.1,0.7 -0.2,1.6 -0.4,2.3 -0.1,0.7 -0.4,1.5 -0.6,2.2 -0.2,0.7 -0.6,1.3 -0.9,1.9 -0.4,0.6 -0.7,1.1 -1.1,1.6 -0.4,0.5 -0.7,0.8 -1.2,1.1 -0.4,0.2 -0.7,0.5 -1,0.7 -0.2,0.2 -0.5,0.2 -0.7,0.4 -0.3,-0.1 -0.3,-0.1 -0.3,-0.1 z" id="path293" style="fill:#231f20"></path>
  <path d="m 311.62433,82.9 c 0,0 0.1,0.2 0.4,0.5 0.1,0.1 0.4,0.4 0.6,0.5 0.2,0.1 0.5,0.4 0.9,0.6 0.4,0.2 0.7,0.4 1.2,0.6 0.4,0.2 1,0.2 1.5,0.5 0.5,0.2 1.1,0.2 1.7,0.4 0.2,0 0.6,0.1 1,0.1 0.4,0 0.6,0 1,0 0.7,0 1.3,0.1 2.1,0.1 0.8,0 1.5,0 2.3,0 1.6,0 3.2,-0.1 5,0 1.7,0 3.6,0.6 5.2,1.5 0.9,0.5 1.6,1 2.3,1.5 l 1.1,0.9 1.1,1 1,1 1,1.1 c 0.2,0.4 0.6,0.7 0.9,1.1 l 0.7,1.2 c 0.5,0.7 0.9,1.6 1.2,2.4 0.4,0.8 0.6,1.7 0.9,2.4 0.5,1.7 0.7,3.3 0.9,4.9 0.1,1.6 0.1,3 0.2,4.4 0.1,1.3 0.5,2.4 1.1,3.4 0.6,0.8 1.3,1.5 2.2,1.6 0.7,0.1 1.3,0.1 1.8,0 0.4,-0.1 0.6,-0.2 0.6,-0.2 0,0 -0.2,0.1 -0.6,0.2 -0.4,0.1 -1,0.4 -1.8,0.2 -0.9,-0.1 -1.7,-0.6 -2.4,-1.6 -0.7,-1 -1.1,-2.2 -1.3,-3.5 -0.2,-1.3 -0.2,-2.8 -0.4,-4.4 -0.2,-1.6 -0.5,-3.2 -1,-4.7 -0.2,-0.7 -0.5,-1.6 -0.9,-2.3 -0.4,-0.7 -0.7,-1.6 -1.2,-2.3 l -0.7,-1.1 c -0.2,-0.4 -0.6,-0.6 -0.9,-1 l -0.9,-1 -1,-0.8 -1,-0.9 -1.1,-0.7 c -0.7,-0.6 -1.5,-1 -2.2,-1.5 -1.5,-0.9 -3.2,-1.3 -4.7,-1.3 -1.7,-0.1 -3.3,-0.1 -4.9,-0.1 -0.7,0 -1.6,0 -2.3,0 -0.7,0 -1.5,-0.1 -2.2,-0.1 -0.7,0 -1.3,-0.1 -1.9,-0.4 -0.6,-0.1 -1.2,-0.2 -1.7,-0.5 -0.5,-0.2 -1,-0.4 -1.5,-0.6 -0.4,-0.2 -0.9,-0.5 -1.2,-0.6 -0.4,-0.2 -0.6,-0.5 -0.9,-0.7 -0.2,-0.2 -0.4,-0.5 -0.5,-0.6 -0.5,-1.1 -0.7,-1.2 -0.7,-1.2 z" id="path295" style="fill:#231f20"></path>
  <path d="m 316.12433,106.2 c 0,0 0.4,0.8 1,2.3 0.5,1.5 1.3,3.6 2.1,6.2 0.4,1.3 0.7,2.7 1.1,4.2 0.4,1.5 0.7,3 1.1,4.7 0.4,1.7 0.6,3.4 1,5.1 0.2,1.7 0.5,3.5 0.7,5.3 0.1,1.8 0.4,3.6 0.4,5.3 0.1,1.8 0.1,3.5 0.1,5.2 0,1.7 0,3.3 -0.2,4.9 -0.1,1.6 -0.2,3 -0.5,4.4 -0.3,1.4 -0.5,2.6 -0.6,3.6 -0.2,1.1 -0.5,1.9 -0.7,2.8 -0.4,1.6 -0.6,2.4 -0.6,2.4 0,0 0.1,-0.9 0.2,-2.4 0.1,-0.7 0.2,-1.7 0.4,-2.8 0,-1.1 0.1,-2.3 0.2,-3.6 0.1,-1.3 0,-2.8 0.1,-4.2 0.1,-1.6 0,-3.2 -0.1,-4.9 0,-1.7 -0.2,-3.4 -0.2,-5.1 -0.1,-1.7 -0.4,-3.5 -0.5,-5.2 -0.2,-1.8 -0.4,-3.5 -0.6,-5.2 -0.2,-1.7 -0.5,-3.4 -0.7,-5.1 -0.2,-1.7 -0.5,-3.3 -0.9,-4.7 -0.2,-1.5 -0.5,-2.9 -0.7,-4.2 -0.5,-2.7 -1,-4.9 -1.3,-6.3 -0.5,-1.8 -0.8,-2.7 -0.8,-2.7 z" id="path297" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g299">
    <path d="m 396.6,451.2 c 0,-0.1 -1.5,-3.4 -1.6,-6.3 l 2.4,-0.1 c 0.1,2.4 1.5,5.5 1.5,5.5 l -2.3,0.9 z" id="path301" style="fill:#231f20"></path>
  </g>
  <path d="m 366.82433,294.2 c 0,0 0,-0.9 0.1,-2.3 0,-0.7 0.1,-1.6 0.1,-2.6 0,-1 0.1,-2.2 0.2,-3.4 0.1,-1.2 0.2,-2.5 0.5,-4 0.2,-1.5 0.4,-2.9 0.7,-4.5 0.3,-1.6 0.5,-3.2 1,-4.7 0.2,-0.8 0.4,-1.6 0.6,-2.4 l 0.2,-1.2 0.4,-1.2 c 0.5,-1.6 1,-3.2 1.6,-4.7 0.2,-0.7 0.5,-1.6 0.7,-2.3 0.2,-0.7 0.5,-1.6 0.6,-2.3 0.2,-0.7 0.4,-1.5 0.6,-2.2 0.1,-0.7 0.4,-1.5 0.5,-2.2 0.1,-0.7 0.2,-1.3 0.4,-2.1 0.1,-0.6 0.2,-1.3 0.4,-1.9 0.1,-1.2 0.4,-2.3 0.4,-3.4 0.1,-1 0.1,-1.8 0.2,-2.6 0.1,-1.5 0.2,-2.3 0.2,-2.3 0,0 0,0.8 0.1,2.3 0,0.7 0,1.6 0.1,2.7 0,1 0,2.2 -0.1,3.4 -0.1,1.2 -0.1,2.5 -0.4,4 -0.1,0.7 -0.2,1.5 -0.4,2.2 -0.1,0.7 -0.4,1.5 -0.5,2.3 -0.2,0.7 -0.4,1.6 -0.6,2.3 -0.2,0.7 -0.5,1.6 -0.7,2.3 -0.5,1.6 -1,3.2 -1.5,4.7 l -0.4,1.2 -0.2,1.2 c -0.2,0.9 -0.4,1.6 -0.6,2.4 -0.5,1.6 -0.7,3.2 -1.1,4.6 -0.4,1.5 -0.6,3 -0.9,4.4 -0.2,1.5 -0.5,2.7 -0.7,3.9 -0.5,2.4 -0.9,4.5 -1.1,6 -0.3,1.6 -0.4,2.4 -0.4,2.4 z" id="path303" style="fill:#231f20"></path>
  <path d="m 313.02433,196.9 c 0,0 0.2,-0.1 0.7,-0.4 0.5,-0.2 1.2,-0.6 2.1,-1 1,-0.2 2.1,-0.7 3.4,-1.1 0.6,-0.1 1.3,-0.4 2.1,-0.5 0.8,-0.1 1.6,-0.2 2.4,-0.4 1.7,-0.4 3.5,-0.5 5.3,-0.7 1.9,-0.2 3.9,-0.2 6.1,-0.4 2.1,-0.1 4.2,-0.1 6.4,-0.1 2.2,0 4.4,0 6.7,0 4.5,0 8.9,0 13,0.1 2.1,0 4.1,0 5.9,0 1.9,0 3.6,-0.1 5.3,-0.1 1.7,-0.1 3.2,-0.1 4.5,-0.4 1.3,-0.1 2.6,-0.4 3.4,-0.5 1,-0.2 1.7,-0.4 2.2,-0.6 0.5,-0.1 0.7,-0.2 0.7,-0.2 0,0 -0.2,0.1 -0.7,0.4 -0.5,0.3 -1.2,0.6 -2.1,0.8 -1,0.2 -2.1,0.6 -3.4,0.9 -1.3,0.2 -2.9,0.5 -4.5,0.7 -1.7,0.2 -3.5,0.4 -5.3,0.5 -1.9,0.1 -3.9,0.2 -6.1,0.4 -2.1,0 -4.2,0.1 -6.4,0.1 -2.2,0 -4.4,0 -6.7,0 -2.2,0 -4.5,-0.1 -6.7,-0.1 -2.2,0 -4.4,-0.1 -6.4,-0.1 -1.1,0 -2.1,0 -3,0 -1,0 -1.9,0 -2.9,0 -1.9,0.1 -3.6,0.1 -5.3,0.4 -0.9,0.1 -1.6,0.1 -2.3,0.2 -0.7,0.1 -1.5,0.2 -2.1,0.4 -1.3,0.1 -2.4,0.5 -3.4,0.7 -1,0.2 -1.7,0.5 -2.2,0.6 -0.5,0.3 -0.7,0.4 -0.7,0.4 z" id="path305" style="fill:#231f20"></path>
  <path d="m 402.22433,251.6 c 0,0 1.8,-6.8 1,-11.5 0,0 1.6,4.9 -0.2,13.6 l -0.8,-2.1 z" id="path307" style="fill:#231f20"></path>
  <path d="m 407.02433,263.4 c 0,0 1.5,-3.5 3.2,-5.3 1.7,-1.8 4.4,-2.1 4.4,-2.1 0,0 -2.2,-2.1 -5.7,1.5 -5.6,5.3 -1.9,5.9 -1.9,5.9 z" id="path309" style="fill:#231f20"></path>
  <path d="m 404.12433,256.9 c 0,0 5.6,-5.1 9.2,-6.4 0,0 -3.9,0.2 -10,5.2 l 0.8,1.2 z" id="path311" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g313">
    <path d="m 439,442.5 c -0.7,0.2 -1.6,0.5 -2.4,0.5 -1.1,0.1 -2.2,0.1 -3.4,0.1 -9.1,0.4 -17.6,0.7 -24.9,1 -7.3,0.2 -13.4,0.7 -17.6,0.9 -4.2,0.2 -6.7,0.4 -6.7,0.4 0,0 2.4,0 6.7,0 4.3,0 10.3,0 17.6,-0.1 7.3,-0.1 15.8,-0.1 24.9,-0.4 2.2,-0.1 4.7,0.1 7.3,-1.1 0.1,-0.1 0.2,-0.1 0.4,-0.2 -0.5,-0.2 -1.1,-0.7 -1.9,-1.1 z" id="path315" style="fill:#231f20"></path>
  </g>
  <path d="m 345.52433,45.8 c 0,0 -10,1.8 -13,1.8 -3,0 -5.8,2.7 -8.1,1.8 -2.2,-0.8 -2.4,-0.8 -3.3,-7.3 -0.9,-6.5 -7.5,-8.9 -8.1,-8.7 -0.6,0.2 -5.2,-4.4 -5.5,4.2 l -1.7,1.5 c 0,0 -1.9,-5.8 -2.3,-9.2 -0.4,-3.4 -3.9,-2.9 -5.8,-4.7 -1.9,-1.8 1.6,-15.1 10.1,-20.2 8.5,-5.1 25,-5.8 34.4,3.6 9.3,9.5 4.5,19.8 4.5,22.8 0.3,3.2 -1.2,14.4 -1.2,14.4 z" id="path317" style="fill:#bcbec0"></path>
  <path d="m 331.82433,333.9 c -0.2,-1.2 -0.5,-2.6 -0.9,-4 -0.4,-1.5 -0.7,-3 -1.1,-4.7 -0.2,-0.9 -0.5,-1.7 -0.6,-2.6 -0.2,-0.9 -0.5,-1.8 -0.6,-2.7 -0.4,-1.8 -0.6,-3.8 -0.7,-5.7 -0.2,-1.9 -0.4,-4 -0.5,-5.9 -0.1,-1.9 -0.2,-4 -0.4,-6 0,-0.2 0,-0.5 0,-0.6 h -1.6 c 0.1,2.2 0.2,4.5 0.4,6.8 0.1,2.1 0.4,4 0.5,6.1 0.2,1.9 0.5,3.9 1,5.8 0.5,1.9 1.1,3.6 1.6,5.2 0.5,1.7 1,3.3 1.5,4.6 0.4,1.5 0.9,2.8 1.2,3.9 0.4,1.2 0.6,2.2 0.9,3 0.4,1.7 0.5,2.7 0.5,2.7 0,0 -0.1,-1 -0.2,-2.8 -0.5,-0.8 -0.8,-1.9 -1,-3.1 z" id="path319" style="fill:#231f20"></path>
  <path d="m 352.82433,380.5 c 0,0 -0.7,0.1 -1.9,0 -0.6,-0.1 -1.3,-0.1 -2.2,-0.4 -0.4,-0.1 -0.9,-0.2 -1.3,-0.4 -0.5,-0.1 -1,-0.4 -1.5,-0.6 -0.5,-0.2 -1,-0.5 -1.6,-0.7 -0.2,-0.1 -0.5,-0.2 -0.9,-0.4 -0.2,-0.1 -0.5,-0.4 -0.7,-0.5 -0.5,-0.4 -1.1,-0.7 -1.6,-1.1 -0.5,-0.5 -1,-0.8 -1.5,-1.3 -0.5,-0.5 -0.9,-1.1 -1.3,-1.6 -0.5,-0.6 -1,-1.1 -1.2,-1.7 -0.7,-1.2 -1.6,-2.5 -2.1,-3.9 l -0.9,-2.1 c -0.1,-0.7 -0.4,-1.5 -0.5,-2.1 -0.2,-0.7 -0.4,-1.3 -0.5,-2.1 -0.1,-0.7 -0.1,-1.3 -0.2,-2.1 -0.1,-1.3 -0.4,-2.7 -0.4,-3.9 0,-1.2 0,-2.4 0,-3.5 0,-1.1 0.1,-2.1 0.2,-2.9 0.1,-0.9 0.2,-1.6 0.2,-2.2 0.2,-1.2 0.2,-1.9 0.2,-1.9 0,0 0,0.7 0.1,1.9 0,0.6 0,1.3 0.1,2.2 0,0.9 0,1.8 0.1,2.9 0.1,1.1 0.2,2.2 0.4,3.4 0,1.2 0.4,2.4 0.6,3.8 0.1,0.6 0.2,1.3 0.4,1.9 0.2,0.6 0.4,1.3 0.6,1.9 0.1,0.6 0.4,1.3 0.5,1.9 l 0.9,1.9 c 0.5,1.3 1.2,2.4 1.8,3.6 0.2,0.6 0.7,1.1 1.1,1.6 0.4,0.5 0.7,1.1 1.2,1.6 0.5,0.5 0.9,0.9 1.3,1.3 0.4,0.5 1,0.7 1.3,1.2 0.2,0.2 0.5,0.4 0.7,0.6 0.2,0.1 0.5,0.4 0.7,0.5 0.5,0.2 0.9,0.6 1.3,0.9 1,0.5 1.7,1 2.6,1.2 0.7,0.4 1.5,0.5 2.1,0.7 0.6,0.1 1.1,0.2 1.3,0.4 0.5,0 0.6,0 0.6,0 z" id="path321" style="fill:#231f20"></path>
  <path d="m 137.12433,283.6 c 0,0 1.1,-0.1 0.6,-2.1 -0.5,-1.9 -1.9,-6.4 -3.4,-9.1 -1.5,-2.7 -3.9,-1.9 -5.1,-1.8 -1.1,0.1 -0.2,-1.9 0.4,-2.2 0.6,-0.2 2.6,-0.6 4.4,0.7 1.9,1.3 3.9,6.1 5.3,9.5 1.3,3.4 0.7,5.6 0.7,5.6 l -2.9,-0.6 z" id="path323" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g325">
    <path d="m 211.8,413.4 -0.7,-2.3 c 1.2,-0.4 7.2,-2.1 8.4,-2.2 l 0.2,2.4 c -0.8,0 -5.1,1.2 -7.9,2.1 z" id="path327" style="fill:#231f20"></path>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g329">
    <g id="g331">
      <g id="g333">
        <path d="m 171.3,444 c -0.6,0.1 -1.2,0 -1.7,-0.2 l -8.9,-6.4 c -0.7,-0.5 -1.3,-1.5 -1.6,-2.3 l -3.4,-13 c -0.2,-0.9 0,-2.1 0.6,-2.8 l 6.3,-7.8 1,0.9 -6.3,7.8 c -0.4,0.4 -0.5,1.2 -0.4,1.7 l 3.4,13 c 0.1,0.5 0.6,1.3 1.1,1.6 l 8.9,6.4 c 0.2,0.2 0.7,0.1 1,-0.1 l 4.7,-5.9 c 0.4,-0.4 0.5,-1.2 0.5,-1.7 l -0.6,-4.1 0.7,-1.8 1.1,5.8 c 0.1,0.9 -0.1,2.1 -0.7,2.7 l -4.7,5.9 c -0.2,0 -0.5,0.1 -1,0.3 z" id="path335" style="fill:#231f20"></path>
      </g>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g337">
    <g id="g339">
      <polygon points="156.3,421.5 144.4,420.4 144.6,419.2 156.5,420.2 " id="polygon341" style="fill:#231f20"></polygon>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g343">
    <g id="g345">
      <g id="g347">
        <rect width="1.2" height="11.7" x="154.8" y="433.29999" transform="matrix(-0.616,-0.7877,0.7877,-0.616,-94.7758,832.1507)" id="rect349" style="fill:#231f20"></rect>
      </g>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g351">
    <g id="g353">
      <g id="g355">
        <rect width="1.2" height="13" x="168.89999" y="443.20001" transform="matrix(-0.9629,-0.2697,0.2697,-0.9629,211.4215,928.4532)" id="rect357" style="fill:#231f20"></rect>
      </g>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g359">
    <g id="g361">
      <g id="g363">
        <rect width="15.9" height="1.5" x="135.3" y="444.5" transform="matrix(-0.9653,0.2612,-0.2612,-0.9653,397.7716,837.4932)" id="rect365" style="fill:#231f20"></rect>
      </g>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g367">
    <g id="g369">
      <g id="g371">
        <rect width="16.4" height="1.5" x="128.8" y="421.39999" transform="matrix(-0.9653,0.2612,-0.2612,-0.9653,379.5373,793.7945)" id="rect373" style="fill:#231f20"></rect>
      </g>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g375">
    <g id="g377">
      <path d="m 168.1,456.8 -0.2,-0.1 c -17.5,-12.8 -17.5,-13 -17.6,-13.4 l -0.2,-0.9 c -6.2,-22.2 -6.2,-22.6 -6.1,-22.8 0,-0.2 1.7,-2.5 13.5,-16 l 1,0.9 c -4.1,4.7 -12.4,14.2 -13.2,15.4 0.1,0.5 1,4 6.1,22.2 l 0.2,0.7 c 0.9,0.7 7.4,5.6 17.1,12.8 l 0.2,0.1 -0.8,1.1 z" id="path379" style="fill:#231f20"></path>
    </g>
  </g>
  <path d="m 39.924334,269.2 c -4.2,0.7 -9.1,1.6 -11.4,2.2 -1.2,0.4 -13.2,13.6 -13.4,14.5 -0.1,0.9 6.4,23.3 6.7,23.8 0.2,0.4 17.1,10.8 17.1,10.8" id="path381" style="fill:none;stroke:#231f20;stroke-miterlimit:10"></path>
  <path d="m 39.424334,270.9 c 0,0.2 -0.4,1.3 -0.4,1.6 -0.2,1.3 -3.4,8.6 -5,12 v 0.1 c 0,0.1 -0.1,0.4 -0.1,0.5 -0.5,2.4 0.1,5.9 2.1,11.3 1.1,3 3.9,5.3 8.1,6.8 1.3,0.1 3.2,0.1 4,0.4 0.8,-1.1 1.5,-1.8 1.5,-1.8 0,0 -0.2,-0.9 -0.7,-0.9 -0.4,0 -1.7,0.2 -2.7,0.2 -0.4,0 -0.7,0 -1,-0.1 -0.8,-0.4 -5.6,-1.6 -6.9,-5.3 -1.2,-3.4 -2.6,-7.5 -2.1,-10 0.5,-2.4 6,-12.8 6,-13.4 0,-0.6 -0.4,-4.6 -1.1,-7 -0.2,-0.7 -2.3,-4.1 -2.9,-4.1 -0.1,0 -0.1,0.1 -0.1,0.4 0,1.6 0.7,6.1 0.7,6.1 l 0.6,3.2 z" id="path383" style="fill:#231f20"></path>
  <g transform="translate(-81.275666,-143.2)" id="g385">
    <path d="m 135.9,448.9 c -0.5,-0.4 -1.1,-1.2 -1.2,-1.9 l -4.5,-22.2 c -0.1,-0.6 0.1,-1.6 0.6,-2.1 L 144.3,407 c 0.5,-0.5 1.3,-1.1 1.9,-1.2 l 10.7,-2.2 c 0.6,-0.1 1.7,0 2.3,0.2 l 16.6,8.1 c 0.6,0.2 1.2,1.1 1.3,1.7 l 4.9,23.7 c 0.1,0.6 -0.1,1.6 -0.5,2.2 L 169.4,455 c -0.4,0.5 -1.3,1 -1.9,1 l -18.5,1.1 c -0.6,0 -1.7,-0.2 -2.2,-0.6 l -10.9,-7.6 z" id="path387" style="fill:none;stroke:#231f20;stroke-width:2.29999995;stroke-miterlimit:10"></path>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g389">
    <path d="m 234.8,440 c -1,0 -2.2,-0.4 -3,-1 l -10,-7.2 c -0.9,-0.6 -1.6,-1.8 -1.8,-2.9 L 215.8,408 c -0.2,-1.1 0.1,-2.5 0.9,-3.4 l 12.6,-14.7 c 0.6,-0.7 1.8,-1.5 2.9,-1.7 l 10,-2.1 c 0.2,0 0.6,-0.1 1,-0.1 0.9,0 1.7,0.2 2.4,0.5 l 15.5,7.6 c 1.1,0.5 1.9,1.7 2.2,2.8 l 4.5,22.3 c 0.2,1.1 -0.1,2.6 -0.9,3.4 l -11.4,14.5 c -0.7,0.9 -1.9,1.6 -3.2,1.6 l -17.4,1 c 0.1,0.3 -0.1,0.3 -0.1,0.3 z" id="path391" style="fill:#ffffff"></path>
    <path d="m 243,387.7 c 0.6,0 1.2,0.1 1.7,0.4 l 15.5,7.7 c 0.6,0.2 1.2,1.1 1.3,1.7 l 4.5,22.3 c 0.1,0.6 -0.1,1.6 -0.5,2.2 l -11.4,14.4 c -0.4,0.5 -1.3,1 -1.9,1 l -17.4,1 h -0.1 c -0.6,0 -1.6,-0.2 -2.1,-0.6 l -10,-7.2 c -0.5,-0.4 -1.1,-1.2 -1.2,-1.9 l -4.2,-20.9 c -0.1,-0.6 0.1,-1.6 0.6,-2.1 L 230.4,391 c 0.5,-0.5 1.3,-1.1 1.9,-1.2 l 10,-2.1 c 0.3,0 0.6,0 0.7,0 m 0,-3.1 0,0 c -0.5,0 -0.8,0 -1.2,0.1 l -10,2.1 C 230.5,387 229,388 228,389 l -12.6,14.7 c -1.1,1.2 -1.6,3.2 -1.2,4.9 l 4.2,20.9 c 0.2,1.5 1.3,2.9 2.4,3.9 l 10,7.2 c 1.1,0.7 2.6,1.2 3.9,1.2 0.1,0 0.2,0 0.4,0 l 17.4,-1 c 1.6,-0.1 3.3,-1 4.2,-2.2 l 11.4,-14.4 c 1,-1.2 1.5,-3.2 1.1,-4.7 l -4.5,-22.3 c -0.4,-1.6 -1.6,-3.2 -3,-3.9 l -15.5,-7.6 c -0.9,-0.9 -2.1,-1.1 -3.2,-1.1 l 0,0 z" id="path393" style="fill:#231f20"></path>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g395">
    <path d="m 176.7,435.2 -3.2,-15.9 c -0.1,-0.5 -0.6,-1.1 -1,-1.3 l -8.7,-4.5 c -0.7,-0.4 -1.6,-1.1 -1.9,-1.8 -1.9,-2.9 -4,-6.1 -4.7,-6.9 -1.3,0.4 -8.6,2.2 -13.6,3.5 l -0.4,-1.2 c 13.7,-3.6 14,-3.6 14.1,-3.6 0.4,0 0.6,0 5.5,7.4 0.4,0.5 1,1.1 1.6,1.3 l 8.7,4.5 c 0.7,0.4 1.5,1.3 1.6,2.2 l 3.2,15.9 -1.2,0.4 z" id="path397" style="fill:#231f20"></path>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g399">
    <rect width="5.6999998" height="1.2" x="176.8" y="436.70001" transform="matrix(-0.7334,-0.6798,0.6798,-0.7334,14.138,880.0983)" id="rect401" style="fill:#231f20"></rect>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g403">
    <rect width="1.2" height="5.8000002" x="174.3" y="412.60001" transform="matrix(-0.8838,-0.4678,0.4678,-0.8838,135.052,864.5758)" id="rect405" style="fill:#231f20"></rect>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g407">
    <g id="g409">
      <g id="g411">
        <path d="m 257.2,426.6 c -0.6,0.1 -1.2,0 -1.7,-0.2 l -8.9,-6.4 c -0.7,-0.5 -1.3,-1.5 -1.6,-2.3 l -3.4,-13 c -0.2,-0.9 0,-2.1 0.6,-2.8 l 6.3,-7.8 1,0.9 -6.3,7.8 c -0.4,0.4 -0.5,1.2 -0.4,1.7 l 3.4,13 c 0.1,0.5 0.6,1.3 1.1,1.6 l 8.9,6.4 c 0.2,0.2 0.7,0.1 1,-0.1 l 4.7,-6 c 0.4,-0.4 0.5,-1.2 0.5,-1.7 l -0.6,-4.1 0.7,-1.8 1.1,5.8 c 0.1,0.9 -0.1,2.1 -0.7,2.7 l -4.7,6 c -0.3,-0.1 -0.6,0.2 -1,0.3 z" id="path413" style="fill:#231f20"></path>
      </g>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g415">
    <g id="g417">
      <g id="g419">
        <rect width="1.2" height="11.7" x="240.60001" y="415.79999" transform="matrix(-0.616,-0.7877,0.7877,-0.616,57.6031,871.426)" id="rect421" style="fill:#231f20"></rect>
      </g>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g423">
    <g id="g425">
      <g id="g427">
        <rect width="1.2" height="13" x="254.60001" y="425.70001" transform="matrix(-0.9629,-0.2697,0.2697,-0.9629,384.4302,917.2405)" id="rect429" style="fill:#231f20"></rect>
      </g>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g431">
    <g id="g433">
      <g id="g435">
        <rect width="15.9" height="1.5" x="221" y="427" transform="matrix(-0.9653,0.2612,-0.2612,-0.9653,561.6766,780.7547)" id="rect437" style="fill:#231f20"></rect>
      </g>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g439">
    <g id="g441">
      <g id="g443">
        <rect width="16.4" height="1.5" x="214.5" y="403.89999" transform="matrix(-0.9653,0.2612,-0.2612,-0.9653,543.4467,737.0626)" id="rect445" style="fill:#231f20"></rect>
      </g>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g447">
    <g id="g449">
      <path d="m 253.9,439.5 -0.2,-0.1 c -17.5,-12.8 -17.5,-13 -17.6,-13.4 l -0.2,-0.9 c -6.2,-22.2 -6.2,-22.6 -6.1,-22.8 0,-0.2 1.7,-2.6 13.5,-16 l 1,0.9 c -4.1,4.7 -12.4,14.2 -13.2,15.4 0.1,0.5 1,4 6.1,22.2 l 0.2,0.7 c 0.8,0.7 7.4,5.6 17.1,12.8 l 0.2,0.1 -0.8,1.1 z" id="path451" style="fill:#231f20"></path>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g453">
    <path d="m 262.4,417.7 -3.2,-15.9 c -0.1,-0.5 -0.6,-1.1 -1,-1.3 l -8.7,-4.5 c -0.7,-0.4 -1.6,-1.1 -1.9,-1.8 -1.9,-2.9 -4,-6.1 -4.7,-6.9 -1.3,0.4 -8.6,2.2 -13.6,3.5 l -0.4,-1.2 c 13.7,-3.6 14,-3.6 14.1,-3.6 0.4,0 0.6,0 5.5,7.4 0.4,0.5 1,1.1 1.6,1.3 l 8.7,4.5 c 0.7,0.4 1.5,1.3 1.6,2.2 l 3.2,15.9 -1.2,0.4 z" id="path455" style="fill:#231f20"></path>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g457">
    <rect width="5.6999998" height="1.2" x="262.60001" y="419.29999" transform="matrix(-0.7334,-0.6798,0.6798,-0.7334,174.7795,908.2713)" id="rect459" style="fill:#231f20"></rect>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g461">
    <rect width="1.2" height="5.8000002" x="260.10001" y="395.20001" transform="matrix(-0.8838,-0.4678,0.4678,-0.8838,304.9394,871.8837)" id="rect463" style="fill:#231f20"></rect>
  </g>
  <path d="m 49.424334,302.7 c -2.2,2.2 -5,3.5 -8,3.5 -6.8,0 -12.3,-6.4 -12.3,-14.2 0,-6.4 3.6,-11.8 8.6,-13.6" id="path465" style="fill:none;stroke:#231f20;stroke-width:1.60000002;stroke-miterlimit:10"></path>
  <line stroke-miterlimit="10" x1="28.824333" y1="271.5" x2="34.524338" y2="279.59998" id="line467" style="fill:none;stroke:#231f20;stroke-miterlimit:10"></line>
  <line stroke-miterlimit="10" x1="41.624336" y1="319.89999" x2="42.624336" y2="306.09998" id="line469" style="fill:none;stroke:#231f20;stroke-miterlimit:10"></line>
  <g transform="translate(-81.275666,-143.2)" id="g471">
    <path d="m 110.7,430.6 c -3.6,-0.6 -14,-2.2 -14.4,-2.3 l -0.2,1.2 c 0.1,0 10.7,1.7 14.4,2.3 0.1,-0.5 0.2,-0.8 0.2,-1.2 z" id="path473" style="fill:#231f20"></path>
    <path d="m 112.4,443.1 c 0,0.5 0,1.1 0,1.6 l -9.2,7.4 0.7,1 9.7,-7.8 v -0.2 -0.1 c -0.4,-0.8 -0.8,-1.3 -1.2,-1.9 z" id="path475" style="fill:#231f20"></path>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="g477">
    <g id="g479">
      <polygon points="241.9,404.3 230,403.3 230.2,402.1 242.1,403 " id="polygon481" style="fill:#231f20"></polygon>
    </g>
  </g>
  <path d="m 123.82433,90.9 c 0,0 6.4,0.7 9.1,1.1 2.7,0.4 -0.2,-2.2 -0.2,-2.2 0,0 -6.7,-0.9 -8.9,1.1 z" id="path483" style="fill:#231f20"></path>
  <path d="m 118.52433,177.2 c 0,0 -0.4,-0.7 -0.5,-1.8 -0.1,-1.1 -0.1,-2.7 0.2,-4.1 0.2,-0.7 0.5,-1.5 0.8,-2.1 0.1,-0.4 0.4,-0.6 0.6,-0.8 0.1,-0.2 0.4,-0.5 0.6,-0.7 0.4,-0.5 0.7,-0.7 1.1,-1 0.2,-0.2 0.5,-0.4 0.5,-0.4 0,0 -0.1,0.1 -0.2,0.5 -0.2,0.2 -0.4,0.7 -0.7,1.2 -0.5,1 -1.1,2.3 -1.5,3.6 -0.2,0.7 -0.4,1.3 -0.5,2.1 -0.1,0.6 -0.2,1.3 -0.2,1.8 -0.2,0.9 -0.2,1.7 -0.2,1.7 z" id="path485" style="fill:#231f20"></path>
  <path d="m 94.424334,169.4 c 0,0 -0.4,-0.7 -0.5,-1.8 -0.1,-1.1 -0.1,-2.7 0.2,-4.1 0.2,-0.7 0.5,-1.5 0.8,-2.1 0.1,-0.4 0.4,-0.6 0.6,-0.8 0.1,-0.2 0.4,-0.5 0.6,-0.7 0.4,-0.5 0.7,-0.7 1.1,-1 0.2,-0.2 0.5,-0.4 0.5,-0.4 0,0 -0.1,0.1 -0.2,0.5 -0.2,0.2 -0.4,0.7 -0.7,1.2 -0.5,1 -1.1,2.3 -1.5,3.6 -0.2,0.7 -0.4,1.3 -0.5,2.1 -0.1,0.6 -0.2,1.3 -0.2,1.8 -0.2,0.8 -0.2,1.7 -0.2,1.7 z" id="path487" style="fill:#231f20"></path>
  <path d="m 124.32433,75.8 c -0.5,0 -3.9,0 -4.4,-0.1 -0.8,-0.1 -1.7,-0.4 -2.6,-0.6 l -1.3,-0.4 -1.2,-0.5 c -1.7,-0.6 -3.4,-1.3 -5,-1.9 -1.6,-0.7 -3.2,-1.3 -4.6,-1.9 -1.5,-0.6 -2.8,-1.3 -4.1,-1.8 -1.199996,-0.6 -2.099996,-1.5 -2.699996,-2.3 -0.6,-0.8 -1.1,-1.8 -1.3,-2.6 -0.5,-1.6 -0.6,-2.4 -0.6,-2.4 0,0 0,0.2 0,0.7 0,0.5 0,1.1 0.2,1.9 0.1,0.8 0.5,1.8 1,2.9 0.6,1.1 1.5,2.2 2.799996,2.9 1.2,0.7 2.6,1.5 4,2.2 1.5,0.7 2.9,1.6 4.6,2.3 1.6,0.7 4.6,2.3 6.3,2.9 l 1.3,0.5 1.3,0.4 c 0.8,0.2 2.8,0.8 3.9,1.1 -0.2,-1.3 2.5,-2.4 2.4,-3.3 z" id="path489" style="fill:#231f20"></path>
  <path d="m 130.22433,154.3 c 0,0 5.8,0.9 9.1,-4.2 3.4,-5.1 0.2,3 -0.8,3.9 -1,0.9 -3.8,2.9 -8.3,1.7 -4.5,-1.2 -4.1,-1.7 -4.1,-1.7 l 4.1,0.3 z" id="path491" style="fill:#231f20"></path>
  <path d="m 100.62433,47.6 c 0,0 0.1,0.6 0.4,1.6 0.3,1 0.8,2.1 1.6,3 0.4,0.5 0.9,1 1.2,1.3 0.5,0.4 0.8,0.7 1.2,1.1 0.4,0.2 0.7,0.5 1,0.7 0.2,0.1 0.4,0.2 0.4,0.2 0,0 -0.1,0 -0.5,-0.1 -0.2,-0.1 -0.7,-0.2 -1.1,-0.5 -0.5,-0.2 -1,-0.5 -1.5,-0.9 -0.5,-0.4 -1,-0.8 -1.5,-1.5 -0.4,-0.6 -0.7,-1.1 -1,-1.7 -0.3,-0.6 -0.4,-1.2 -0.5,-1.7 0.2,-0.9 0.3,-1.5 0.3,-1.5 z" id="path493"></path>
  <g transform="translate(-81.275666,-143.2)" id="face1">
    <path d="m 195,189.8 c 0,0 4.1,0.2 6.1,-0.2 1.9,-0.5 -1.7,2.2 -6.1,0.2 z" id="path496" style="fill:#231f20"></path>
    <ellipse cx="198.2" cy="187.5" rx="1.8" ry="1.5" id="ellipse498" style="fill:#231f20"></ellipse>
    <path d="m 194.3,187.6 c 0,0 0.4,-0.5 1,-1 0.1,-0.1 0.4,-0.2 0.6,-0.4 0.2,-0.1 0.4,-0.2 0.6,-0.2 0.5,-0.1 1,-0.2 1.5,-0.2 0.2,0 0.5,0 0.7,0 0.2,0 0.5,0.1 0.7,0.1 0.2,0 0.5,0.1 0.6,0.2 0.2,0 0.4,0.2 0.6,0.2 0.7,0.4 1.1,0.7 1.1,0.7 0,0 -0.5,0 -1.2,-0.1 -0.1,0 -0.4,-0.1 -0.6,-0.1 -0.2,0 -0.4,0 -0.6,0 -0.5,0 -0.8,0 -1.3,0 -0.5,0 -1,0.1 -1.3,0.1 -0.2,0 -0.4,0.1 -0.6,0.1 -0.2,0 -0.4,0 -0.6,0.1 -0.4,0.1 -0.6,0.1 -0.9,0.2 -0.2,0.3 -0.3,0.3 -0.3,0.3 z" id="path500" style="fill:#231f20"></path>
    <path d="m 208.1,189.2 c 0,0 2.7,0.4 3.9,-0.1 1.2,-0.4 -1,2.2 -3.9,0.1 z" id="path502" style="fill:#231f20"></path>
    <ellipse cx="210.39999" cy="187.60001" rx="1.6" ry="1.3" id="ellipse504" style="fill:#231f20"></ellipse>
    <path d="m 207.6,187.8 c 0,0 0.2,-0.5 0.9,-1 0.1,-0.1 0.2,-0.2 0.5,-0.4 0.1,-0.1 0.4,-0.2 0.5,-0.2 0.4,-0.1 0.7,-0.2 1.2,-0.2 0.2,0 0.4,0 0.6,0 0.2,0 0.4,0.1 0.6,0.1 0.2,0 0.4,0.1 0.5,0.2 0.1,0 0.4,0.2 0.5,0.2 0.6,0.4 0.8,0.7 0.8,0.7 0,0 -0.4,0 -1,-0.1 -0.1,0 -0.2,-0.1 -0.5,-0.1 -0.1,0 -0.4,0 -0.5,0 -0.4,0 -0.7,0 -1.1,0 -0.4,0 -0.7,0.1 -1.1,0.1 -0.1,0 -0.4,0.1 -0.5,0.1 -0.1,0 -0.4,0 -0.5,0.1 -0.2,0.1 -0.5,0.1 -0.7,0.2 0,0.3 -0.2,0.3 -0.2,0.3 z" id="path506" style="fill:#231f20"></path>
    <path d="m 191.9,184.4 c 0,0 1,-1.7 3.3,-1.9 2.3,-0.2 6.4,0.2 7.5,0.2 1.1,0 1.6,-0.2 1.8,0 0.2,0.2 -0.7,1.3 -2.3,1.6 -1.6,0.2 -5.5,-0.2 -6.9,-0.1 -1.3,0.1 -2.7,0.5 -3.2,0.8 -0.4,0.3 -0.6,-0.3 -0.2,-0.6 z" id="path508" style="fill:#231f20"></path>
    <path d="m 192.7,206.1 c 0,0 -0.1,-0.1 -0.1,-0.4 0,-0.3 -0.1,-0.7 -0.1,-1.2 0,-0.2 0,-0.5 0.1,-0.8 0.1,-0.2 0.1,-0.6 0.2,-0.8 0.1,-0.2 0.2,-0.6 0.5,-0.9 0.2,-0.2 0.4,-0.5 0.6,-0.7 0.4,-0.5 0.9,-1 1.2,-1.3 0.2,-0.5 0.7,-0.9 0.8,-1.2 0.1,-0.2 0.2,-0.4 0.2,-0.5 0.1,-0.1 0.1,-0.4 0.1,-0.5 0.1,-0.2 0.1,-0.4 0.1,-0.4 0,0 0,0.1 0,0.5 0,0.1 0,0.4 0,0.5 0,0.2 -0.1,0.4 -0.2,0.6 -0.1,0.2 -0.1,0.5 -0.4,0.7 -0.1,0.2 -0.2,0.5 -0.5,0.7 -0.4,0.5 -0.7,1 -1.1,1.5 -0.1,0.2 -0.4,0.5 -0.5,0.7 -0.1,0.2 -0.2,0.5 -0.5,0.7 -0.1,0.2 -0.2,0.5 -0.4,0.7 -0.1,0.2 -0.1,0.5 -0.2,0.7 -0.1,0.5 -0.1,0.8 -0.1,1.1 0.3,0 0.3,0.3 0.3,0.3 z" id="path510" style="fill:#231f20"></path>
    <path d="m 196.7,205.2 c 0,0 0.7,-0.5 1.9,-0.7 0.4,0 0.6,-0.1 1,-0.2 0.4,0 0.7,-0.1 1.1,-0.1 0.4,0 0.7,0 1.2,0 0.4,0 0.9,0 1.2,0 0.8,0 1.7,-0.1 2.4,-0.1 0.7,0 1.5,0 2.1,0.1 1.2,0.1 2.1,0.4 2.1,0.4 v 0.2 c 0,0 -0.8,0.2 -2.1,0.5 -0.6,0.1 -1.3,0.2 -2.2,0.1 -0.7,0 -1.6,-0.1 -2.4,-0.2 -0.4,0 -0.8,-0.1 -1.2,-0.1 -0.4,0 -0.8,-0.1 -1.2,-0.1 -0.4,0 -0.7,0 -1.1,-0.1 -0.4,0 -0.7,0 -1,0 -1.1,0.1 -1.8,0.5 -1.8,0.3 l 0,0 z" id="path512" style="fill:#231f20"></path>
    <path d="m 198.9,207.1 c 0,0 3.8,1 6.8,1 3,-0.1 3.8,-1.3 3.8,-1.3 0,0 -0.9,2.8 -4.7,2.4 -4,-0.6 -5.9,-2.1 -5.9,-2.1 z" id="path514" style="fill:#231f20"></path>
    <path d="m 210.2,184.4 c 1.5,-0.4 5,-1.3 4.9,-3.6 0,-0.4 -0.4,-0.6 -0.6,-0.6 -0.4,0 -0.6,0.4 -0.6,0.6 0.1,1.3 -3,2.2 -4,2.4 -2.1,0.6 -3,2.2 -2.8,4.4 0.1,1.1 0.8,2.7 1.6,4.4 0.9,1.9 1.8,4.2 1.7,5.2 -0.1,1 -1.2,1.5 -3.2,1.2 -0.6,0 -1.3,0 -2.1,0 -0.7,0 -1.3,0 -2.1,0 -0.4,0 -0.6,-0.1 -0.6,-0.5 -0.1,-0.4 -0.1,-0.8 0,-1.3 0.1,-1 1.5,-1.5 1.3,-1.6 -0.2,0 -0.6,0.1 -1,0.2 -0.4,0.1 -0.7,0.4 -1.1,0.7 -0.4,0.5 -0.5,1.1 -0.5,1.6 0,1 0.2,1.9 1.8,2.1 1.3,0.1 2.9,0 4,0.1 0.4,0 0.6,0 0.8,0 2.9,0 3.5,-1.5 3.6,-2.3 0.1,-1.2 -0.7,-3.5 -1.8,-5.8 -0.6,-1.6 -1.3,-3.3 -1.5,-4.1 0.1,-1.7 0.7,-2.7 2.2,-3.1 z" id="path516" style="fill:#231f20"></path>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="rear_deltoids" style="display:none" class="">
    <linearGradient x1="299.5" y1="681.57318" x2="323" y2="681.57318" id="SVGID_1_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop520" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop522" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 392.2,229.6 c 0,0 -8.3,2.4 -9.5,10.7 -1.2,8.3 -2.6,13.2 -5.3,18.1 -2.7,4.9 -5.8,8.5 -6.3,9 -0.5,0.5 -7.4,-11.7 -7.4,-20 0,-8.3 5.1,-17.6 8.4,-20 3.3,-2.4 3,-1.5 3,-1.5 0,0 4.4,4.1 17.1,3.7 z" id="path524" style="fill:url(#SVGID_1_);display:inline"></path>
    <path d="m 371.8,262.3 c 0,0 -1.1,-1.9 -2.1,-5.1 -0.2,-0.8 -0.5,-1.7 -0.7,-2.5 -0.1,-0.5 -0.2,-1 -0.4,-1.5 -0.1,-0.5 -0.1,-1 -0.2,-1.6 -0.2,-1 -0.2,-2.1 -0.4,-3.2 0,-1.1 -0.1,-2.2 0,-3.3 0.1,-1.1 0.1,-2.2 0.4,-3.3 0.2,-1.1 0.4,-2.2 0.7,-3.2 0.1,-0.5 0.4,-1 0.5,-1.5 0.2,-0.5 0.5,-0.9 0.6,-1.3 0.4,-0.9 0.9,-1.7 1.3,-2.3 0.5,-0.7 0.9,-1.3 1.3,-1.8 0.5,-0.5 0.9,-1 1.2,-1.3 0.7,-0.7 1.1,-1.1 1.1,-1.1 0,0 -0.4,0.5 -1,1.2 -0.4,0.4 -0.7,0.8 -1.1,1.3 -0.4,0.6 -0.7,1.2 -1.2,1.9 -0.5,0.7 -0.9,1.5 -1.2,2.3 -0.1,0.5 -0.4,0.9 -0.6,1.3 -0.1,0.5 -0.2,1 -0.5,1.5 -0.4,1 -0.5,2.1 -0.7,3 -0.2,1.1 -0.2,2.2 -0.4,3.3 0,1.1 0,2.2 0,3.3 0.1,1.1 0.1,2.2 0.4,3.2 0.1,0.5 0.1,1 0.2,1.5 0.1,0.5 0.2,1 0.2,1.5 0.1,1 0.4,1.8 0.6,2.6 0.5,1.6 0.9,2.9 1.2,3.8 0.7,0.8 0.8,1.3 0.8,1.3 z" id="path526" style="fill:#ffffff;display:inline"></path>
    <path d="m 372.8,260.6 c 0,0 -0.9,-1.8 -1.5,-4.9 -0.4,-1.5 -0.6,-3.3 -0.7,-5.1 -0.1,-1 -0.1,-1.9 -0.1,-2.9 0.1,-1 0,-2.1 0.1,-3 0.1,-0.9 0.2,-2.1 0.5,-3 0.1,-0.5 0.2,-1 0.4,-1.5 0.1,-0.5 0.2,-1 0.5,-1.3 0.1,-0.5 0.2,-0.8 0.5,-1.3 0.2,-0.4 0.4,-0.8 0.6,-1.2 0.4,-0.8 0.7,-1.6 1.1,-2.2 0.4,-0.6 0.7,-1.2 1.1,-1.7 0.4,-0.5 0.7,-0.8 1,-1.2 0.6,-0.7 0.9,-1.1 0.9,-1.1 0,0 -0.2,0.4 -0.7,1.1 -0.2,0.4 -0.6,0.9 -0.9,1.3 -0.2,0.5 -0.6,1.1 -1,1.8 -0.4,0.6 -0.7,1.3 -1,2.2 -0.1,0.4 -0.4,0.8 -0.5,1.2 -0.1,0.5 -0.2,0.8 -0.4,1.3 -0.1,0.5 -0.2,0.8 -0.4,1.3 -0.1,0.5 -0.2,1 -0.2,1.5 -0.2,1 -0.4,1.9 -0.5,2.9 -0.1,1 -0.1,1.9 -0.2,2.9 0,1 0,1.9 0,2.9 0.1,1 0.1,1.8 0.2,2.7 0.1,0.8 0.2,1.7 0.4,2.4 0.2,3 0.8,4.9 0.8,4.9 z" id="path528" style="fill:#ffffff;display:inline"></path>
    <path d="m 374,259.4 c 0,0 -0.5,-1.8 -0.7,-4.6 -0.1,-0.7 -0.1,-1.5 -0.1,-2.3 0,-0.8 0,-1.7 0,-2.6 0,-0.8 0.1,-1.8 0.2,-2.8 0.1,-1 0.2,-1.8 0.4,-2.8 0.1,-1 0.4,-1.8 0.6,-2.8 0.1,-0.5 0.2,-0.8 0.4,-1.3 0.1,-0.5 0.2,-0.8 0.5,-1.3 0.1,-0.4 0.2,-0.8 0.5,-1.2 0.1,-0.4 0.4,-0.7 0.5,-1.1 0.4,-0.7 0.6,-1.5 1.1,-2.1 0.4,-0.6 0.7,-1.2 1,-1.7 0.4,-0.5 0.6,-0.9 0.9,-1.2 0.5,-0.6 0.7,-1.1 0.7,-1.1 0,0 -0.2,0.4 -0.6,1.1 -0.2,0.4 -0.5,0.7 -0.7,1.2 -0.2,0.5 -0.5,1.1 -0.9,1.7 -0.4,0.6 -0.6,1.3 -1,2.1 -0.4,0.7 -0.6,1.6 -0.9,2.4 -0.1,0.4 -0.2,0.8 -0.4,1.2 -0.1,0.5 -0.2,0.9 -0.4,1.3 -0.2,0.9 -0.4,1.8 -0.6,2.7 -0.2,1 -0.2,1.8 -0.5,2.8 -0.1,1 -0.1,1.8 -0.2,2.7 0,0.9 -0.1,1.7 -0.1,2.6 0,0.9 0,1.6 0,2.3 0,1.5 0.1,2.5 0.2,3.4 0,0.9 0.1,1.4 0.1,1.4 z" id="path530" style="fill:#ffffff;display:inline"></path>
    <path d="m 375.3,257.9 c 0,0 -0.1,-0.5 -0.1,-1.2 0,-0.7 -0.1,-1.8 -0.1,-3.2 0,-1.4 0.1,-2.9 0.4,-4.5 0.1,-0.8 0.2,-1.7 0.4,-2.5 0.1,-0.9 0.4,-1.7 0.5,-2.6 0.2,-0.8 0.5,-1.7 0.7,-2.6 0.2,-0.8 0.6,-1.7 0.9,-2.4 0.2,-0.7 0.6,-1.5 1,-2.2 0.4,-0.7 0.6,-1.3 1,-1.9 0.4,-0.6 0.6,-1.1 1,-1.6 0.4,-0.5 0.6,-0.8 0.9,-1.1 0.5,-0.6 0.7,-1 0.7,-1 0,0 -0.2,0.4 -0.6,1.1 -0.2,0.4 -0.4,0.7 -0.7,1.2 -0.2,0.5 -0.5,1 -0.7,1.6 -0.4,0.6 -0.6,1.2 -0.9,1.9 -0.2,0.7 -0.6,1.5 -0.9,2.2 -0.2,0.7 -0.6,1.6 -0.9,2.4 -0.2,0.8 -0.5,1.7 -0.7,2.6 -0.2,0.8 -0.4,1.7 -0.6,2.5 -0.1,0.9 -0.2,1.7 -0.5,2.6 -0.1,0.8 -0.2,1.6 -0.4,2.3 -0.1,0.7 -0.1,1.5 -0.2,2.1 -0.2,2.5 -0.2,4.3 -0.2,4.3 z" id="path532" style="fill:#ffffff;display:inline"></path>
    <path d="m 378.7,247.7 c 0,0 0.1,-0.7 0.2,-1.7 0.2,-1 0.5,-2.3 0.9,-3.6 0.4,-1.3 0.9,-2.7 1.1,-3.6 0.4,-1 0.6,-1.6 0.6,-1.6 0,0 -0.1,0.7 -0.2,1.7 -0.2,1 -0.5,2.3 -0.9,3.6 -0.4,1.3 -0.9,2.7 -1.1,3.6 -0.3,1 -0.6,1.6 -0.6,1.6 z" id="path534" style="fill:#ffffff;display:inline"></path>
    <linearGradient x1="379.125" y1="694.83807" x2="390.75131" y2="694.83807" id="SVGID_2_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop537" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop539" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 460.3,221.8 c 0,0 0,4.9 4.6,7.5 4.6,2.7 8,5.5 9,9 1,3.5 1.2,-4.4 -2.2,-9 -3.3,-4.6 -9.5,-7.5 -11.4,-7.5 z" id="path541" style="fill:url(#SVGID_2_);display:inline"></path>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="soleus_muscle" style="display:none" class="">
    <linearGradient x1="341.5" y1="439.10541" x2="364.069" y2="439.10541" id="SVGID_3_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop545" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop547" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 414.7,504.7 c 0,0 3.9,19.4 12.1,35 8.3,15.5 10.3,18.5 13.4,31.6 3,13.1 1.8,3 0.6,-12.1 -1.2,-15.2 -1,-35.2 -0.6,-35.9 0.4,-0.7 -7.8,4.1 -16.3,-3.4 -8.5,-7.5 -9.2,-15.2 -9.2,-15.2 z" id="path549" style="fill:url(#SVGID_3_);display:inline"></path>
    <linearGradient x1="403" y1="446.4324" x2="436.91531" y2="446.4324" id="SVGID_4_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop552" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop554" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 489.4,506 c 0,0 0.7,3.2 12.8,11.7 12,8.5 15.8,16.5 19.6,25.4 3.8,8.9 5,15.9 6,16.8 1,0.8 2.5,-1.8 2.9,-2.9 0.4,-1.1 -4.7,-29.6 -5.8,-35.3 -1.1,-5.7 -1.8,-13.5 -1.8,-14.4 0,-1 -1.2,1.7 -5.5,-0.6 -4.2,-2.3 -4.2,-2.3 -4.2,-2.3 0,0 -2.2,6.1 -7.8,7.2 -5.8,0.9 -9.9,-1.3 -16.2,-5.6 z" id="path556" style="fill:url(#SVGID_4_);display:inline"></path>
    <g id="g558" style="display:inline">
      <path d="m 422.6,522.2 c 0,0 0.9,2.1 2.3,5.2 0.4,0.7 0.7,1.6 1.2,2.6 0.4,0.8 0.9,1.8 1.3,2.8 0.5,1 1,1.9 1.5,2.9 0.5,1 1.1,1.9 1.6,3 1.1,2.1 2.2,4.1 3.2,6 0.5,1 0.9,1.9 1.3,2.8 0.4,0.9 0.7,1.8 1.1,2.5 0.6,1.6 1,3 1.2,4 0.2,1 0.5,1.5 0.5,1.5 0,0 -0.9,-2.2 -2.1,-5.3 -0.4,-0.7 -0.7,-1.6 -1.2,-2.5 -0.5,-0.9 -0.9,-1.8 -1.3,-2.8 -1,-1.9 -2.1,-3.9 -3.2,-6 -0.5,-1 -1.1,-2.1 -1.6,-3 -0.5,-1 -1,-2.1 -1.5,-3 -1,-1.9 -1.7,-3.9 -2.3,-5.5 -0.6,-1.6 -1.1,-2.9 -1.5,-3.9 -0.3,-0.8 -0.5,-1.3 -0.5,-1.3 z" id="path560" style="fill:#ffffff"></path>
    </g>
    <g id="g562" style="display:inline">
      <path d="m 426.3,524 c 0,0 0.7,1.6 1.9,4 0.5,1.2 1.3,2.5 2.1,4.1 0.7,1.5 1.5,3.2 2.3,4.7 0.7,1.6 1.6,3.2 2.3,4.7 0.4,0.7 0.7,1.5 1,2.2 0.2,0.7 0.6,1.3 0.9,2.1 0.2,0.6 0.4,1.2 0.6,1.7 0.1,0.5 0.2,1 0.4,1.3 0.1,0.7 0.2,1.2 0.2,1.2 0,0 -0.1,-0.4 -0.4,-1.2 -0.1,-0.4 -0.2,-0.9 -0.5,-1.3 -0.2,-0.5 -0.4,-1.1 -0.6,-1.7 -0.2,-0.6 -0.6,-1.2 -0.9,-1.9 -0.4,-0.7 -0.6,-1.5 -1.1,-2.2 -0.7,-1.5 -1.6,-3 -2.3,-4.7 -0.7,-1.6 -1.5,-3.3 -2.2,-4.7 -0.7,-1.6 -1.3,-2.9 -1.8,-4.1 -1.3,-2.5 -1.9,-4.2 -1.9,-4.2 z" id="path564" style="fill:#ffffff"></path>
    </g>
    <g id="g566" style="display:inline">
      <path d="m 429.4,524.8 c 0,0 0.6,1.2 1.5,3 0.5,0.8 1,1.9 1.5,3 0.2,0.6 0.6,1.1 0.9,1.7 0.2,0.6 0.6,1.2 1,1.8 0.2,0.6 0.6,1.2 0.9,1.8 0.2,0.6 0.6,1.2 0.9,1.7 0.2,0.6 0.5,1.2 0.6,1.7 0.1,0.6 0.4,1.1 0.5,1.6 0.5,1.9 0.7,3.3 0.7,3.3 0,0 -0.5,-1.3 -1,-3.2 -0.1,-0.5 -0.4,-1 -0.6,-1.5 -0.2,-0.5 -0.4,-1.1 -0.7,-1.7 -0.2,-0.6 -0.6,-1.1 -0.9,-1.7 -0.2,-0.6 -0.6,-1.2 -0.9,-1.8 -0.2,-0.6 -0.6,-1.2 -0.9,-1.8 -0.2,-0.6 -0.6,-1.2 -0.9,-1.7 -0.5,-1.2 -1,-2.2 -1.3,-3.2 -0.4,-1 -0.6,-1.7 -0.9,-2.3 -0.3,-0.3 -0.4,-0.7 -0.4,-0.7 z" id="path568" style="fill:#ffffff"></path>
    </g>
    <g id="g570" style="display:inline">
      <path d="m 432.3,525.3 c 0,0 0.4,0.7 1,1.9 0.2,0.6 0.6,1.2 1,1.9 0.4,0.7 0.7,1.5 1,2.3 0.4,0.9 0.6,1.6 1,2.3 0.4,0.7 0.5,1.5 0.7,2.1 0.2,0.6 0.2,1.2 0.4,1.6 0.1,0.4 0.1,0.6 0.1,0.6 0,0 -0.2,-0.9 -0.9,-1.9 -0.2,-0.6 -0.5,-1.2 -0.9,-1.9 -0.4,-0.7 -0.7,-1.5 -1,-2.3 -0.6,-1.6 -1.3,-3.2 -1.7,-4.4 -0.5,-1.3 -0.7,-2.2 -0.7,-2.2 z" id="path572" style="fill:#ffffff"></path>
    </g>
    <g id="g574" style="display:inline">
      <path d="m 435,525.9 c 0,0 0.2,0.4 0.5,1.1 0.2,0.6 0.6,1.5 0.9,2.3 0.2,0.9 0.5,1.8 0.6,2.4 0.1,0.7 0.1,1.1 0.1,1.1 0,0 -0.2,-0.4 -0.5,-1.1 -0.2,-0.6 -0.6,-1.5 -0.9,-2.3 -0.2,-0.9 -0.5,-1.8 -0.6,-2.4 0,-0.6 -0.1,-1.1 -0.1,-1.1 z" id="path576" style="fill:#ffffff"></path>
    </g>
    <g id="g578" style="display:inline">
      <path d="m 436.9,526.1 c 0,0 0.1,0.1 0.2,0.4 0.1,0.2 0.2,0.5 0.2,0.8 0,0.2 0,0.6 0,0.9 0,0.3 -0.1,0.4 -0.1,0.4 0,0 -0.1,-0.1 -0.2,-0.4 -0.1,-0.3 -0.2,-0.5 -0.2,-0.9 0,-0.2 0,-0.6 0,-0.8 0,-0.2 0.1,-0.4 0.1,-0.4 z" id="path580" style="fill:#ffffff"></path>
    </g>
    <g id="g582" style="display:inline">
      <path d="m 501.5,515.4 c 0,0 0.1,0.1 0.5,0.2 0.4,0.1 0.9,0.4 1.3,0.7 0.6,0.4 1.3,0.7 2.1,1.2 0.9,0.5 1.7,1.1 2.5,1.7 1,0.6 1.8,1.5 2.9,2.3 1,0.9 1.9,1.8 2.9,2.9 0.5,0.6 0.9,1.1 1.3,1.7 l 0.7,0.8 c 0.2,0.4 0.4,0.6 0.6,1 0.9,1.2 1.7,2.5 2.3,3.9 0.7,1.3 1.5,2.7 1.9,4.1 0.6,1.3 1.2,2.7 1.7,4 0.5,1.3 1,2.5 1.5,3.8 0.5,1.3 0.9,2.4 1.2,3.4 0.7,2.2 1.2,4 1.7,5.2 0.4,1.2 0.6,1.9 0.6,1.9 0,0 -1.1,-2.8 -2.5,-7 -0.7,-2.1 -1.7,-4.6 -2.8,-7.2 -0.5,-1.3 -1.1,-2.7 -1.7,-4 -0.6,-1.3 -1.3,-2.7 -1.9,-4 -0.6,-1.3 -1.5,-2.5 -2.3,-3.9 -0.2,-0.4 -0.4,-0.6 -0.6,-1 l -0.7,-0.8 c -0.5,-0.6 -0.9,-1.1 -1.3,-1.7 -1,-1 -1.9,-2.1 -2.8,-2.9 -1,-0.9 -1.8,-1.7 -2.8,-2.3 -0.9,-0.7 -1.7,-1.3 -2.5,-1.8 -0.7,-0.5 -1.5,-1 -2.1,-1.2 -0.6,-0.4 -1.1,-0.6 -1.3,-0.7 -0.3,-0.3 -0.4,-0.3 -0.4,-0.3 z" id="path584" style="fill:#ffffff"></path>
    </g>
    <g id="g586" style="display:inline">
      <path d="m 506.2,514.9 c 0,0 0.1,0 0.5,0.1 0.2,0.1 0.7,0.2 1.2,0.5 0.5,0.2 1.1,0.6 1.8,1 0.6,0.5 1.5,1 2.2,1.6 0.7,0.6 1.6,1.3 2.4,2.2 0.4,0.4 0.9,0.9 1.2,1.3 0.3,0.4 0.7,1 1.2,1.5 0.4,0.5 0.7,1 1.2,1.6 0.4,0.6 0.7,1.1 1.1,1.7 0.4,0.6 0.7,1.1 1.1,1.7 0.4,0.6 0.6,1.2 0.9,1.8 0.6,1.2 1.2,2.4 1.7,3.6 0.5,1.2 1,2.4 1.5,3.6 0.4,1.2 0.8,2.3 1.1,3.4 0.4,1.1 0.6,2.2 0.8,3.2 0.5,1.9 0.9,3.5 1.1,4.7 0.1,0.6 0.2,1 0.2,1.3 0,0.4 0.1,0.5 0.1,0.5 0,0 0,-0.1 -0.1,-0.5 0,-0.4 -0.1,-0.7 -0.4,-1.3 -0.2,-1.1 -0.9,-2.8 -1.3,-4.6 -0.4,-1 -0.6,-1.9 -1,-3 -0.4,-1.1 -0.9,-2.2 -1.2,-3.4 -0.3,-1.2 -1,-2.3 -1.5,-3.6 -0.5,-1.2 -1.1,-2.4 -1.7,-3.6 -0.2,-0.6 -0.6,-1.2 -0.9,-1.8 -0.4,-0.6 -0.7,-1.1 -1.1,-1.7 -0.4,-0.6 -0.7,-1.1 -1,-1.7 -0.4,-0.5 -0.7,-1 -1.1,-1.5 -0.4,-0.5 -0.7,-1 -1.1,-1.5 -0.4,-0.5 -0.9,-0.9 -1.2,-1.3 -0.7,-0.8 -1.6,-1.6 -2.3,-2.3 -0.7,-0.7 -1.5,-1.2 -2.2,-1.7 -0.7,-0.5 -1.2,-0.9 -1.8,-1.1 -0.5,-0.2 -1,-0.5 -1.2,-0.6 0,-0.1 -0.2,-0.1 -0.2,-0.1 z" id="path588" style="fill:#ffffff"></path>
    </g>
    <g id="g590" style="display:inline">
      <path d="m 510.2,512.6 c 0,0 0.4,0.1 0.9,0.5 0.6,0.4 1.3,1 2.2,1.7 0.4,0.4 0.9,0.9 1.3,1.3 0.2,0.2 0.5,0.5 0.7,0.7 0.2,0.2 0.5,0.5 0.7,0.8 0.5,0.6 1,1.1 1.5,1.7 0.5,0.6 0.9,1.2 1.3,1.9 0.4,0.6 0.8,1.3 1.2,1.9 0.4,0.7 0.7,1.3 1,1.9 0.4,0.6 0.6,1.2 1,1.8 0.2,0.6 0.5,1.2 0.6,1.7 0.7,2.2 1.2,3.6 1.2,3.6 0,0 -0.6,-1.5 -1.6,-3.5 -0.2,-0.5 -0.5,-1.1 -0.7,-1.7 -0.4,-0.6 -0.6,-1.2 -1,-1.8 -0.4,-0.6 -0.7,-1.3 -1,-1.9 -0.4,-0.6 -0.9,-1.2 -1.2,-1.9 -0.4,-0.6 -0.9,-1.3 -1.2,-1.9 -0.5,-0.6 -1,-1.1 -1.3,-1.7 -0.2,-0.2 -0.5,-0.6 -0.6,-0.9 -0.2,-0.2 -0.5,-0.5 -0.7,-0.7 -0.5,-0.5 -0.9,-1 -1.2,-1.3 -0.4,-0.4 -0.9,-0.7 -1.2,-1.1 -0.4,-0.4 -0.6,-0.6 -1,-0.7 -0.5,-0.2 -0.9,-0.4 -0.9,-0.4 z" id="path592" style="fill:#ffffff"></path>
    </g>
    <g id="g594" style="display:inline">
      <path d="m 513.6,510.3 c 0,0 0.8,0.7 1.9,2.1 0.6,0.6 1.2,1.5 1.8,2.3 0.6,0.9 1.2,1.8 1.8,2.8 0.2,0.5 0.6,1 0.9,1.5 0.3,0.5 0.5,1 0.7,1.5 0.4,1 0.8,1.8 1.1,2.7 0.5,1.6 0.9,2.7 0.9,2.7 0,0 -0.5,-1 -1.1,-2.5 -0.2,-0.9 -0.8,-1.6 -1.2,-2.6 -0.5,-1 -1.1,-1.9 -1.6,-2.9 -0.5,-1 -1.2,-1.9 -1.7,-2.8 -0.6,-0.9 -1.1,-1.7 -1.6,-2.4 -0.5,-0.7 -0.9,-1.2 -1.2,-1.7 -0.5,-0.5 -0.7,-0.7 -0.7,-0.7 z" id="path596" style="fill:#ffffff"></path>
    </g>
    <g id="g598" style="display:inline">
      <path d="m 517.2,510.1 c 0,0 0.5,0.6 1.1,1.7 0.2,0.5 0.6,1.1 1,1.8 0.4,0.6 0.6,1.3 1,2.1 0.2,0.7 0.6,1.5 0.9,2.2 0.3,0.7 0.4,1.3 0.6,1.9 0.4,1.1 0.5,1.9 0.5,1.9 0,0 -0.4,-0.7 -0.9,-1.8 -0.2,-0.5 -0.5,-1.2 -0.7,-1.8 -0.2,-0.7 -0.6,-1.3 -0.8,-2.1 -0.2,-0.7 -0.6,-1.5 -0.9,-2.1 -0.4,-0.6 -0.6,-1.3 -0.9,-1.8 -0.7,-1.2 -0.9,-2 -0.9,-2 z" id="path600" style="fill:#ffffff"></path>
    </g>
    <g id="g602" style="display:inline">
      <path d="m 520.2,510.8 c 0,0 0.1,0.5 0.4,1.1 0.2,0.7 0.5,1.6 0.6,2.4 0.1,0.9 0.2,1.8 0.4,2.6 0,0.7 0,1.2 0,1.2 0,0 -0.1,-0.5 -0.4,-1.1 -0.2,-0.7 -0.5,-1.6 -0.6,-2.4 -0.1,-0.8 -0.2,-1.8 -0.4,-2.5 0,-0.9 0,-1.3 0,-1.3 z" id="path604" style="fill:#ffffff"></path>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="triceps" class="workout-part" onclick="navigateToWorkout('triceps')">   
    <linearGradient x1="382.91611" y1="661.92767" x2="403.04269" y2="661.92767" id="SVGID_5_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop608" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop610" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 476,238.4 c 0,0 9.7,15.8 11.8,25.1 2.1,9.4 2.8,19.7 -1.2,23.9 -4,4.2 -11.2,7 -11.2,7 0,0 1.6,4.6 3.3,7.3 1.6,2.7 -13,-3 -13.6,-5.2 -0.6,-2.2 1.6,-6.9 4.5,-13.6 2.8,-6.7 5.7,-14.2 5.2,-22.7 -0.4,-8.5 -0.9,-22.7 1.2,-21.8 z" id="path612" style="fill:url(#SVGID_5_);display:inline"></path>
    <g id="g614" style="display:inline">
      <path d="m 475.6,246.3 c 0,0 0.4,0.5 1.1,1.5 0.4,0.5 0.7,1.1 1.1,1.8 0.5,0.7 0.9,1.5 1.3,2.3 0.5,0.9 1,1.8 1.5,2.9 0.5,1 1.1,2.1 1.6,3.3 0.5,1.2 1.1,2.3 1.5,3.6 0.4,1.2 0.9,2.5 1.2,3.8 0.4,1.3 0.6,2.7 1,3.9 0.2,1.3 0.4,2.6 0.6,3.9 0.1,0.6 0.1,1.2 0.1,1.8 0,0.6 0,1.2 0,1.8 0,0.6 0,1.1 -0.1,1.7 0,0.5 -0.1,1.1 -0.1,1.6 -0.1,1 -0.4,1.9 -0.6,2.7 -0.4,0.7 -0.5,1.5 -0.9,1.9 -0.1,0.2 -0.2,0.5 -0.4,0.7 -0.1,0.2 -0.2,0.4 -0.4,0.5 -0.1,0.2 -0.4,0.4 -0.4,0.4 0,0 0.1,-0.1 0.2,-0.4 0.1,-0.1 0.2,-0.2 0.4,-0.5 0.1,-0.2 0.2,-0.5 0.4,-0.7 0.2,-0.5 0.5,-1.2 0.7,-1.9 0.1,-0.9 0.4,-1.7 0.5,-2.7 0,-0.5 0.1,-1 0.1,-1.6 0,-0.5 0.1,-1.1 0,-1.7 0,-0.6 0,-1.1 -0.1,-1.7 0,-0.6 0,-1.2 -0.1,-1.8 -0.2,-1.2 -0.4,-2.5 -0.6,-3.8 -0.4,-1.2 -0.6,-2.5 -1,-3.9 -0.4,-1.4 -0.9,-2.5 -1.2,-3.8 -0.4,-1.2 -1,-2.4 -1.3,-3.6 -0.5,-1.2 -1,-2.3 -1.5,-3.3 -0.5,-1.1 -1,-2.1 -1.5,-2.9 -0.5,-0.8 -0.9,-1.7 -1.2,-2.4 -0.4,-0.7 -0.7,-1.3 -1,-1.8 -0.5,-1 -0.9,-1.6 -0.9,-1.6 z" id="path616" style="fill:#ffffff"></path>
    </g>
    <g id="g618" style="display:inline">
      <path d="m 476.2,253.4 c 0,0 1.1,1.8 2.4,4.7 0.6,1.5 1.3,3.2 2.1,5.1 0.4,1 0.6,1.9 1,2.9 0.4,1 0.6,2.1 0.9,3 0.2,1 0.5,2.1 0.6,3.2 0.2,1 0.2,2.1 0.4,3 0.1,1 0.1,1.9 0.1,2.9 0,1 -0.1,1.8 -0.1,2.6 0,0.9 -0.2,1.5 -0.4,2.2 -0.1,0.6 -0.4,1.2 -0.5,1.6 -0.4,0.9 -0.5,1.3 -0.5,1.3 0,0 0.1,-0.5 0.4,-1.5 0.1,-0.5 0.2,-1 0.4,-1.6 0,-0.6 0.2,-1.3 0.2,-2.2 0,-0.7 0.1,-1.6 0,-2.5 -0.1,-0.9 -0.1,-1.8 -0.2,-2.8 -0.1,-1 -0.2,-1.9 -0.5,-3 -0.2,-1 -0.4,-2.1 -0.7,-3 -0.2,-1 -0.5,-2.1 -0.7,-3 -0.2,-1 -0.6,-1.9 -0.9,-2.9 -0.6,-1.8 -1.2,-3.6 -1.8,-5.1 -1.3,-2.9 -2.2,-4.9 -2.2,-4.9 z" id="path620" style="fill:#ffffff"></path>
    </g>
    <g id="g622" style="display:inline">
      <path d="m 477,264.5 c 0,0 0.1,0.4 0.4,0.9 0.2,0.6 0.6,1.3 0.9,2.3 0.4,1 0.6,2.2 1,3.4 0.1,0.6 0.2,1.3 0.4,1.9 0.1,0.6 0.2,1.3 0.4,2.1 0.1,0.7 0.1,1.3 0.2,2.1 0.1,0.7 0.1,1.3 0.1,1.9 0,0.6 0,1.2 0,1.8 0,0.6 0,1.1 0,1.7 -0.2,2.1 -0.4,3.4 -0.4,3.4 0,0 0,-1.3 0,-3.4 0,-1 -0.1,-2.2 -0.2,-3.5 0,-0.6 -0.1,-1.3 -0.2,-1.9 -0.1,-0.6 -0.2,-1.3 -0.2,-2.1 0,-0.7 -0.2,-1.3 -0.4,-2.1 -0.1,-0.6 -0.2,-1.3 -0.4,-1.9 -0.4,-1.2 -0.5,-2.4 -0.7,-3.4 -0.2,-1 -0.5,-1.8 -0.6,-2.4 -0.3,-0.4 -0.3,-0.8 -0.3,-0.8 z" id="path624" style="fill:#ffffff"></path>
    </g>
    <g id="g626" style="display:inline">
      <path d="m 475.8,272.8 c 0,0 0.2,0.9 0.5,2.3 0.2,1.3 0.6,3.2 0.9,5.1 0.2,1.8 0.4,3.8 0.5,5.1 0.1,1.5 0.1,2.3 0.1,2.3 0,0 -0.2,-0.9 -0.5,-2.3 -0.2,-1.3 -0.6,-3.2 -0.9,-5.1 -0.2,-1.8 -0.4,-3.8 -0.5,-5.1 -0.1,-1.4 -0.1,-2.3 -0.1,-2.3 z" id="path628" style="fill:#ffffff"></path>
    </g>
    <g id="g630" style="display:inline">
      <path d="m 473.5,280.2 c 0,0 0.1,0.6 0.5,1.6 0.1,0.5 0.2,1 0.4,1.6 0.1,0.6 0.4,1.2 0.5,1.8 0.1,0.4 0.1,0.6 0.2,0.9 0.1,0.2 0.1,0.6 0.2,0.8 0.2,0.6 0.4,1.1 0.5,1.6 0.4,0.9 0.6,1.5 0.6,1.5 0,0 -0.4,-0.5 -1,-1.3 -0.2,-0.5 -0.5,-1 -0.7,-1.5 -0.2,-0.6 -0.4,-1.2 -0.6,-1.8 -0.1,-0.6 -0.4,-1.2 -0.4,-1.8 -0.1,-0.6 -0.1,-1.2 -0.2,-1.7 -0.2,-1 0,-1.7 0,-1.7 z" id="path632" style="fill:#ffffff"></path>
    </g>
    <g id="g634" style="display:inline">
      <path d="m 466.4,294.7 c 0,0 0.6,0.4 1.3,0.7 0.9,0.5 1.9,1.1 3,1.7 0.5,0.4 1.1,0.6 1.6,0.9 0.5,0.2 1,0.5 1.5,0.7 0.9,0.5 1.3,0.8 1.3,0.8 0,0 -0.6,-0.2 -1.5,-0.6 -0.5,-0.2 -1,-0.4 -1.5,-0.6 -0.6,-0.2 -1.1,-0.5 -1.7,-0.9 -0.5,-0.4 -1.1,-0.6 -1.6,-1 -0.5,-0.2 -1,-0.6 -1.3,-1 -0.6,-0.3 -1.1,-0.7 -1.1,-0.7 z" id="path636" style="fill:#ffffff"></path>
    </g>
    <g id="g638" style="display:inline">
      <path d="m 468.1,292.3 c 0,0 0.4,0.2 1,0.7 0.6,0.4 1.3,1 2.1,1.7 0.7,0.6 1.5,1.3 1.9,1.8 0.5,0.5 0.9,0.9 0.9,0.9 0,0 -0.4,-0.2 -1,-0.7 -0.6,-0.4 -1.3,-1 -2.1,-1.7 -0.7,-0.6 -1.5,-1.3 -1.9,-1.8 -0.5,-0.5 -0.9,-0.9 -0.9,-0.9 z" id="path640" style="fill:#ffffff"></path>
    </g>
    <g id="g642" style="display:inline">
      <path d="m 470.7,291.9 c 0,0 -0.1,-0.1 -0.2,-0.2 -0.1,-0.1 -0.2,-0.4 -0.5,-0.5 -0.1,-0.2 -0.2,-0.5 -0.2,-0.6 0,-0.2 0,-0.4 0,-0.4 0,0 0.1,0.1 0.2,0.2 0.1,0.1 0.2,0.4 0.5,0.5 0.1,0.2 0.2,0.5 0.2,0.6 0,0.1 0,0.4 0,0.4 z" id="path644" style="fill:#ffffff"></path>
    </g>
    <linearGradient x1="302.51291" y1="659.98999" x2="330.8768" y2="659.98999" id="SVGID_6_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop647" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop649" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 368.8,296.8 c 0,0 3.8,-0.6 4.2,-3.3 0.6,-2.8 -0.7,-15.4 5.3,-19.7 6.1,-4.2 14.6,-0.4 14.1,5.2 -0.5,5.6 -2.5,12.4 -0.2,19.7 2.4,7.2 7.4,-15.8 9.1,-19.8 1.7,-4.1 -1.8,-24.6 -3.8,-29.3 -1.8,-4.6 -10.3,-8 -17.4,3.8 -7,11.7 -10,16.1 -11.7,25 -1.4,8.8 -1.4,19.1 0.4,18.4 z" id="path651" style="fill:url(#SVGID_6_);display:inline"></path>
    <g id="g653" style="display:inline">
      <path d="m 372.9,278.3 c 0,0 0,-0.5 0.2,-1.3 0.1,-0.8 0.4,-1.9 0.6,-3.4 0.2,-1.5 0.7,-3 1.2,-4.7 0.2,-0.8 0.6,-1.7 0.9,-2.5 0.4,-0.9 0.6,-1.8 1,-2.7 0.4,-0.9 0.7,-1.7 1.1,-2.7 0.2,-0.5 0.4,-0.9 0.6,-1.3 0.2,-0.4 0.4,-0.9 0.6,-1.2 0.4,-0.7 0.9,-1.6 1.2,-2.3 0.4,-0.7 0.7,-1.5 1.2,-1.9 1.6,-2.3 2.7,-3.9 2.7,-3.9 0,0 -1,1.7 -2.4,4.1 -0.7,1.2 -1.3,2.8 -2.2,4.4 -0.2,0.4 -0.4,0.9 -0.6,1.2 -0.1,0.4 -0.4,0.9 -0.5,1.3 -0.4,0.8 -0.7,1.7 -1.1,2.5 -0.4,0.9 -0.7,1.7 -1,2.7 -0.4,0.9 -0.6,1.7 -1,2.6 -0.5,1.7 -1.1,3.3 -1.5,4.6 -0.4,1.3 -0.7,2.6 -1,3.3 0.1,0.8 0,1.2 0,1.2 z" id="path655" style="fill:#ffffff"></path>
    </g>
    <g id="g657" style="display:inline">
      <path d="m 386.8,270.1 c 0,0 0.1,-1.5 0.5,-3.5 0.1,-1.1 0.4,-2.3 0.6,-3.6 0.2,-1.3 0.5,-2.7 0.7,-4.1 0.2,-1.3 0.6,-2.8 0.9,-4.1 0.3,-1.3 0.6,-2.6 0.9,-3.5 0.5,-2.1 1,-3.4 1,-3.4 0,0 -0.1,1.5 -0.5,3.5 -0.2,1.1 -0.4,2.3 -0.6,3.6 -0.2,1.3 -0.5,2.7 -0.9,4.1 -0.4,1.3 -0.6,2.8 -0.9,4.1 -0.2,1.3 -0.6,2.5 -0.7,3.5 -0.7,1.9 -1,3.4 -1,3.4 z" id="path659" style="fill:#ffffff"></path>
    </g>
    <g id="g661" style="display:inline">
      <path d="m 394,248.2 c 0,0 0.2,0.7 0.7,1.9 0.2,0.6 0.5,1.3 0.7,2.2 0.2,0.8 0.6,1.8 0.9,2.9 0.2,1.1 0.6,2.2 0.9,3.5 0.2,1.2 0.5,2.5 0.7,3.9 0.1,1.3 0.4,2.8 0.5,4.2 0.1,1.4 0.1,2.9 0.2,4.4 0.1,1.5 0,2.9 -0.1,4.4 0,1.5 -0.2,2.9 -0.4,4.2 -0.1,0.7 -0.1,1.3 -0.2,2.1 -0.1,0.6 -0.4,1.3 -0.5,1.9 -0.1,0.6 -0.2,1.2 -0.5,1.8 -0.2,0.6 -0.4,1.1 -0.6,1.7 -0.4,1.1 -0.7,1.9 -1.1,2.8 -0.4,0.8 -0.7,1.5 -1.1,2.1 -0.2,0.6 -0.6,1 -0.9,1.3 -0.2,0.2 -0.4,0.5 -0.4,0.5 0,0 0.1,-0.1 0.2,-0.5 0.1,-0.4 0.5,-0.7 0.7,-1.3 0.2,-0.6 0.6,-1.3 1,-2.2 0.4,-0.8 0.7,-1.8 1,-2.8 0.1,-0.5 0.4,-1.1 0.5,-1.7 0.1,-0.6 0.2,-1.2 0.4,-1.8 0.1,-0.6 0.2,-1.2 0.4,-1.9 0.1,-0.6 0.1,-1.3 0.2,-2.1 0.1,-1.3 0.4,-2.8 0.4,-4.2 0,-1.5 0.1,-2.9 0,-4.4 -0.1,-1.5 -0.1,-2.9 -0.2,-4.4 -0.1,-1.5 -0.2,-2.9 -0.5,-4.2 -0.1,-1.3 -0.4,-2.7 -0.6,-3.9 -0.2,-1.2 -0.5,-2.4 -0.7,-3.5 -0.2,-1.1 -0.5,-2.1 -0.7,-2.9 -0.2,-0.8 -0.5,-1.6 -0.6,-2.2 0,-1.2 -0.3,-1.8 -0.3,-1.8 z" id="path663" style="fill:#ffffff"></path>
    </g>
    <g id="g665" style="display:inline">
      <path d="m 392.7,248.2 c 0,0 0.2,0.6 0.6,1.8 0.4,1.1 0.9,2.8 1.2,4.7 0.2,1 0.4,2.1 0.6,3.3 0.2,1.1 0.4,2.3 0.5,3.6 0.2,1.2 0.2,2.5 0.4,3.9 0,0.6 0.1,1.3 0.1,2.1 v 2.1 c 0,1.3 0,2.7 -0.1,4 -0.1,1.3 -0.2,2.7 -0.2,3.9 -0.1,1.2 -0.2,2.4 -0.4,3.6 -0.1,1.1 -0.4,2.2 -0.6,3.3 -0.2,1 -0.4,1.9 -0.5,2.7 -0.2,0.8 -0.5,1.5 -0.6,2.1 -0.1,0.6 -0.4,1 -0.5,1.3 -0.1,0.2 -0.2,0.5 -0.2,0.5 0,0 0,-0.1 0.1,-0.5 0.1,-0.2 0.2,-0.7 0.4,-1.3 0.1,-0.6 0.4,-1.2 0.5,-2.1 0.1,-0.9 0.2,-1.7 0.4,-2.7 0.1,-1 0.4,-2.1 0.5,-3.3 0.1,-1.2 0.1,-2.4 0.2,-3.6 0.1,-1.2 0.1,-2.5 0.2,-3.9 0.1,-1.4 0,-2.7 0,-4 v -2.1 c 0,-0.7 -0.1,-1.3 -0.1,-1.9 -0.1,-1.3 -0.1,-2.7 -0.2,-3.9 -0.1,-1.2 -0.2,-2.4 -0.4,-3.6 -0.1,-1.1 -0.2,-2.2 -0.5,-3.3 -0.1,-1 -0.4,-1.9 -0.5,-2.7 -0.1,-0.8 -0.4,-1.5 -0.5,-2.1 -0.3,-1.3 -0.4,-1.9 -0.4,-1.9 z" id="path667" style="fill:#ffffff"></path>
    </g>
    <g id="g669" style="display:inline">
      <path d="m 392.1,249.9 c 0,0 0,1.3 -0.1,3.3 -0.1,1.9 -0.4,4.6 -0.6,7.3 -0.1,1.3 -0.2,2.7 -0.4,3.9 -0.1,1.2 -0.2,2.4 -0.4,3.4 -0.2,1.9 -0.5,3.3 -0.5,3.3 0,0 0,-1.3 0.1,-3.3 0,-1 0.1,-2.2 0.1,-3.4 0.1,-1.2 0.2,-2.5 0.2,-3.9 0.1,-1.3 0.2,-2.7 0.4,-3.9 0.1,-1.2 0.4,-2.4 0.5,-3.4 0.5,-1.9 0.7,-3.3 0.7,-3.3 z" id="path671" style="fill:#ffffff"></path>
    </g>
    <g id="g673" style="display:inline">
      <path d="m 392.8,274.2 c 0,0 0,-1.3 0,-3.2 0,-1 0,-2.1 0,-3.3 0,-1.2 0,-2.4 0,-3.8 0,-1.3 0.1,-2.5 0,-3.8 0,-1.2 0,-2.3 -0.1,-3.3 0,-1.9 0,-3.2 0,-3.2 0,0 0.2,1.2 0.4,3.2 0.1,1 0.2,2.1 0.2,3.3 0.1,1.2 0,2.4 0.1,3.8 0,1.3 0,2.6 -0.1,3.8 -0.1,1.2 -0.2,2.3 -0.2,3.3 -0.1,1 -0.2,1.7 -0.2,2.3 -0.1,0.7 -0.1,0.9 -0.1,0.9 z" id="path675" style="fill:#ffffff"></path>
    </g>
    <g id="g677" style="display:inline">
      <path d="m 389.8,248.2 c 0,0 -0.4,1.3 -1.1,3.3 -0.4,1 -0.6,2.2 -1.1,3.4 -0.2,0.6 -0.4,1.2 -0.6,1.9 -0.2,0.6 -0.4,1.3 -0.6,1.9 -0.4,1.3 -0.7,2.7 -1.1,3.9 -0.1,0.6 -0.2,1.2 -0.5,1.8 -0.1,0.6 -0.4,1.1 -0.4,1.6 -0.4,2.1 -0.7,3.4 -0.7,3.4 0,0 0.1,-1.3 0.4,-3.5 0,-0.5 0.1,-1.1 0.2,-1.7 0.1,-0.6 0.2,-1.2 0.4,-1.8 0.2,-1.3 0.6,-2.7 1,-4 0.2,-0.7 0.4,-1.3 0.6,-1.9 0.2,-0.6 0.4,-1.3 0.6,-1.9 0.5,-1.2 0.9,-2.4 1.3,-3.4 1,-1.8 1.6,-3 1.6,-3 z" id="path679" style="fill:#ffffff"></path>
    </g>
    <g id="g681" style="display:inline">
      <path d="m 380.2,270.6 c 0,0 0.1,-1.3 0.6,-3.3 0.2,-1 0.5,-2.2 0.9,-3.4 0.4,-1.2 0.7,-2.5 1.2,-3.8 0.5,-1.2 1,-2.5 1.5,-3.8 0.5,-1.2 1,-2.3 1.5,-3.2 1,-1.8 1.7,-2.9 1.7,-2.9 0,0 -0.5,1.3 -1.2,3.2 -0.5,1 -0.7,2.1 -1.2,3.3 -0.5,1.2 -1,2.4 -1.3,3.8 -0.5,1.2 -0.9,2.5 -1.3,3.8 -0.4,1.2 -0.7,2.3 -1.1,3.3 -0.8,1.8 -1.3,3 -1.3,3 z" id="path683" style="fill:#ffffff"></path>
    </g>
    <g id="g685" style="display:inline">
      <path d="m 376.7,273.5 c 0,0 0.2,-1.7 0.9,-4.1 0.4,-1.2 0.7,-2.7 1.2,-4.1 0.5,-1.5 1.1,-3.2 1.7,-4.7 0.6,-1.6 1.3,-3.2 2.1,-4.5 0.7,-1.5 1.6,-2.7 2.2,-3.8 0.4,-0.5 0.7,-1 1,-1.5 0.2,-0.4 0.6,-0.7 0.9,-1 0.5,-0.6 0.7,-0.9 0.7,-0.9 0,0 -0.2,0.4 -0.6,1 -0.2,0.4 -0.5,0.6 -0.7,1.1 -0.2,0.5 -0.6,1 -0.9,1.5 -0.4,0.6 -0.6,1.1 -1,1.8 -0.4,0.6 -0.7,1.3 -1,2.1 -0.7,1.5 -1.3,2.9 -1.9,4.5 -1.3,3.2 -2.4,6.3 -3.2,8.7 -0.8,2.3 -1.4,3.9 -1.4,3.9 z" id="path687" style="fill:#ffffff"></path>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="traps" class="workout-part" onclick="navigateToWorkout('traps')">   
    <linearGradient x1="309.18179" y1="697.36798" x2="374.75809" y2="697.36798" id="SVGID_7_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop691" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop693" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 431.9,202.7 c -1,-0.8 -4.5,-5.5 -9.1,-6.3 -4.6,-0.8 -10.3,-0.4 -14.9,3 -4.6,3.4 -4.6,7.3 -10.9,9.5 -6.3,2.2 -10.6,6.4 -11.9,8.9 -1.3,2.4 -6.1,3.9 -8.7,6.1 -2.7,2.2 1,5.2 8.5,5.7 7.5,0.4 17.9,-0.2 22.2,0 4.5,0.2 9.5,1.5 12.4,4.5 2.8,3 5.5,7.3 6.4,11.9 1,4.6 -0.4,9.1 3.3,10.9 3.6,1.8 7,2.1 8.3,1.8 1.2,-0.2 7.3,-4.9 7.5,-7.5 0.2,-2.7 -5.1,-14.6 -2.1,-22.2 3,-7.7 10.9,-7 12.1,-13 1.2,-5.8 -13.6,-8.9 -16.8,-10.3 -3.2,-1.3 -6.3,-3 -6.3,-3 z" id="path695" style="fill:url(#SVGID_7_);display:inline"></path>
    <g id="g697" style="display:inline">
      <path d="m 428.9,224.4 c 0,0 -1.6,-2.2 -4.5,-4.7 -0.7,-0.6 -1.6,-1.3 -2.5,-1.9 -1,-0.6 -1.9,-1.2 -3,-1.8 -0.6,-0.2 -1.1,-0.6 -1.7,-0.8 -0.6,-0.2 -1.2,-0.5 -1.7,-0.7 -1.2,-0.4 -2.4,-0.8 -3.8,-1.1 -0.6,-0.1 -1.2,-0.2 -1.9,-0.4 -0.6,-0.1 -1.2,-0.2 -1.9,-0.2 -1.3,-0.1 -2.6,-0.2 -3.8,-0.4 -1.2,0 -2.4,0 -3.5,0 -1.1,0 -2.2,0.1 -3.2,0.2 -1,0.1 -1.8,0.4 -2.7,0.5 -0.7,0.2 -1.5,0.4 -1.9,0.6 -0.5,0.2 -1,0.4 -1.2,0.6 -0.2,0.1 -0.4,0.2 -0.4,0.2 0,0 0.1,-0.1 0.4,-0.2 0.2,-0.2 0.6,-0.4 1.2,-0.6 0.5,-0.2 1.2,-0.5 1.9,-0.7 0.7,-0.1 1.7,-0.4 2.7,-0.6 1,-0.1 2.1,-0.2 3.2,-0.4 1.1,0 2.3,-0.1 3.5,0 1.2,0.1 2.6,0.2 3.8,0.2 0.6,0 1.3,0.1 1.9,0.2 0.6,0.1 1.3,0.2 1.9,0.4 1.3,0.2 2.6,0.7 3.8,1.2 0.6,0.2 1.2,0.5 1.8,0.7 0.6,0.2 1.1,0.6 1.7,0.8 1.1,0.6 2.1,1.2 3,1.9 1,0.6 1.7,1.3 2.6,1.9 0.7,0.6 1.3,1.3 1.9,1.8 0.6,0.6 1,1.1 1.3,1.6 0.8,1.2 1.1,1.7 1.1,1.7 z" id="path699" style="fill:#ffffff"></path>
    </g>
    <g id="g701" style="display:inline">
      <path d="m 422.7,206.9 c 0,0 -0.2,-0.2 -0.6,-0.5 -0.4,-0.2 -1,-0.6 -1.7,-1.1 -0.4,-0.1 -0.7,-0.4 -1.2,-0.6 -0.2,-0.1 -0.4,-0.2 -0.6,-0.2 -0.2,-0.1 -0.5,-0.1 -0.7,-0.2 -0.5,-0.1 -1,-0.4 -1.5,-0.5 -0.5,-0.1 -1.1,-0.2 -1.6,-0.4 -0.5,-0.1 -1.1,-0.2 -1.6,-0.4 -0.5,0 -1.1,-0.1 -1.6,-0.1 -0.5,0 -1,-0.1 -1.5,-0.1 -0.5,0 -0.9,0 -1.3,0 -1.6,0 -2.7,0 -2.7,0 0,0 1.1,-0.1 2.7,-0.2 0.4,0 0.9,-0.1 1.3,-0.1 0.5,0 1,0 1.5,0.1 0.5,0 1.1,0.1 1.6,0.1 0.5,0 1.1,0.2 1.6,0.4 0.5,0.1 1.1,0.2 1.6,0.4 0.5,0.2 1,0.4 1.5,0.6 0.2,0.1 0.5,0.1 0.7,0.2 0.2,0.1 0.5,0.2 0.6,0.4 0.4,0.2 0.9,0.5 1.2,0.6 0.7,0.5 1.2,0.9 1.6,1.2 0.5,0.3 0.7,0.4 0.7,0.4 z" id="path703" style="fill:#ffffff"></path>
    </g>
    <g id="g705" style="display:inline">
      <path d="m 420.8,202.9 c 0,0 -0.1,-0.1 -0.5,-0.2 -0.4,-0.1 -0.9,-0.2 -1.3,-0.5 -0.6,-0.1 -1.2,-0.4 -1.9,-0.5 -0.4,-0.1 -0.7,-0.1 -1.1,-0.2 -0.4,-0.1 -0.7,-0.1 -1.2,-0.1 -0.4,0 -0.7,-0.1 -1.2,-0.1 -0.4,0 -0.7,0 -1.1,0 -0.4,0 -0.7,0 -1.1,-0.1 -0.4,0 -0.6,0 -1,0 -1.2,0 -1.9,0 -1.9,0 0,0 0.7,-0.1 1.9,-0.2 0.6,-0.1 1.3,-0.1 2.1,-0.1 0.4,0 0.7,0 1.1,0 0.4,0 0.7,0.1 1.2,0.1 0.4,0.1 0.9,0.1 1.2,0.1 0.4,0.1 0.7,0.1 1.1,0.2 0.7,0.1 1.3,0.5 1.9,0.6 0.6,0.2 1,0.5 1.3,0.6 0.3,0.3 0.5,0.4 0.5,0.4 z" id="path707" style="fill:#ffffff"></path>
    </g>
    <g id="g709" style="display:inline">
      <path d="m 419.5,200.4 c 0,0 -0.1,0 -0.4,-0.1 -0.2,-0.1 -0.6,-0.1 -1.1,-0.2 -0.2,0 -0.5,-0.1 -0.7,-0.1 -0.2,0 -0.5,0 -0.9,-0.1 -0.6,-0.1 -1.1,-0.1 -1.7,-0.2 -0.6,-0.1 -1.2,-0.1 -1.7,-0.1 -0.6,0 -1.1,-0.1 -1.5,-0.1 -0.9,-0.1 -1.5,-0.1 -1.5,-0.1 0,0 0.6,-0.1 1.5,-0.1 0.5,0 1,0 1.6,0 0.6,0 1.2,0 1.7,0.1 0.6,0.1 1.2,0.1 1.7,0.2 0.6,0 1.1,0.2 1.5,0.4 0.5,0.1 0.7,0.2 1,0.4 0.4,0 0.5,0 0.5,0 z" id="path711" style="fill:#ffffff"></path>
    </g>
    <g id="g713" style="display:inline">
      <path d="m 418.6,198.4 c 0,0 -0.4,0 -0.9,0 -0.5,0 -1.1,-0.1 -1.8,-0.1 -0.4,0 -0.6,-0.1 -1,-0.1 -0.2,0 -0.6,0 -0.9,-0.1 -0.5,0 -0.9,-0.1 -0.9,-0.1 0,0 0.4,-0.1 0.9,-0.1 0.2,0 0.5,-0.1 0.9,-0.1 0.4,0 0.6,0 1,0 0.4,0 0.6,0.1 1,0.1 0.2,0 0.6,0.1 0.9,0.2 0.4,0.1 0.8,0.3 0.8,0.3 z" id="path715" style="fill:#ffffff"></path>
    </g>
    <g id="g717" style="display:inline">
      <path d="m 435.7,242.2 c 0,0 -0.2,-0.8 -1,-2.3 -0.6,-1.5 -1.7,-3.4 -3.4,-5.6 -0.9,-1.1 -1.8,-2.2 -2.9,-3.3 -0.5,-0.6 -1.2,-1.1 -1.8,-1.6 -0.6,-0.5 -1.3,-1 -1.9,-1.5 -0.7,-0.5 -1.5,-0.8 -2.2,-1.3 -0.7,-0.5 -1.6,-0.7 -2.4,-1.1 -0.9,-0.4 -1.7,-0.6 -2.5,-0.8 -0.9,-0.4 -1.7,-0.5 -2.7,-0.6 -0.9,-0.2 -1.7,-0.4 -2.7,-0.5 -0.9,-0.1 -1.8,-0.2 -2.7,-0.4 -1.8,-0.2 -3.5,-0.5 -5.2,-0.6 -3.4,-0.2 -6.6,-0.4 -9.2,-0.4 -2.6,0 -5,0 -6.6,-0.4 -0.7,-0.1 -1.3,-0.4 -1.8,-0.5 -0.4,-0.1 -0.6,-0.2 -0.6,-0.2 0,0 0.2,0.1 0.6,0.2 0.4,0.1 1,0.4 1.8,0.5 1.6,0.2 3.9,0.2 6.6,0.1 2.7,0 5.9,0 9.4,0.2 1.7,0.1 3.4,0.2 5.2,0.5 0.9,0.1 1.8,0.2 2.7,0.4 0.9,0.1 1.8,0.2 2.7,0.5 0.9,0.2 1.8,0.4 2.7,0.7 0.9,0.4 1.7,0.5 2.6,1 0.9,0.4 1.7,0.7 2.4,1.2 0.7,0.5 1.6,0.8 2.2,1.3 0.7,0.5 1.3,1 2.1,1.6 0.6,0.6 1.2,1.1 1.8,1.6 1.1,1.1 2.1,2.3 2.9,3.4 1.6,2.2 2.7,4.2 3.3,5.7 0.3,1.3 0.6,2.2 0.6,2.2 z" id="path719" style="fill:#ffffff"></path>
    </g>
    <g id="g721" style="display:inline">
      <path d="m 378.7,226.7 c 0,0 0,0 0.1,0.1 0.1,0 0.2,0.1 0.4,0.2 0.4,0.1 1,0.4 1.6,0.5 0.6,0.2 1.5,0.2 2.3,0.4 0.9,0.1 1.8,0.2 2.7,0.2 1,0 1.8,0.1 2.7,0.1 0.9,0 1.7,0.1 2.4,0.1 1.3,0 2.3,0.1 2.3,0.1 0,0 -1,0.1 -2.3,0.1 -0.7,0 -1.5,0.1 -2.4,0 -0.9,0 -1.8,-0.1 -2.8,-0.1 -1,-0.1 -1.8,-0.2 -2.7,-0.4 -0.9,-0.2 -1.7,-0.4 -2.3,-0.6 -0.7,-0.2 -1.2,-0.5 -1.6,-0.6 -0.1,0.1 -0.4,-0.1 -0.4,-0.1 z" id="path723" style="fill:#ffffff"></path>
    </g>
    <g id="g725" style="display:inline">
      <path d="m 380.1,225.6 c 0,0 0.2,0 0.5,0.1 0.4,0.1 0.9,0.1 1.3,0.2 0.6,0.1 1.2,0.2 1.9,0.4 0.7,0.2 1.5,0.2 2.2,0.2 0.4,0 0.7,0.1 1.1,0.1 0.4,0 0.7,0 1.1,0.1 0.7,0 1.3,0.1 1.9,0.1 1.1,0.1 1.9,0.2 1.9,0.2 0,0 -0.7,0 -1.9,0 -0.6,0 -1.2,0 -1.9,0 -0.4,0 -0.7,0 -1.1,0 -0.4,0 -0.7,-0.1 -1.1,-0.1 -0.7,-0.1 -1.6,-0.2 -2.2,-0.4 -0.7,-0.1 -1.3,-0.4 -1.9,-0.5 -1.1,-0.1 -1.8,-0.4 -1.8,-0.4 z" id="path727" style="fill:#ffffff"></path>
    </g>
    <g id="g729" style="display:inline">
      <path d="m 382.3,224.4 c 0,0 0.5,0.1 1.3,0.2 0.4,0.1 0.9,0.1 1.3,0.2 0.5,0.1 1.1,0.1 1.6,0.2 0.5,0.1 1.1,0.1 1.6,0.2 0.5,0 1,0.1 1.3,0.2 0.9,0.1 1.3,0.2 1.3,0.2 0,0 -0.5,0 -1.3,0 -0.8,0 -1.9,0 -3,-0.2 -0.5,-0.1 -1.1,-0.2 -1.6,-0.2 -0.5,-0.1 -1,-0.2 -1.3,-0.4 -0.8,-0.1 -1.2,-0.4 -1.2,-0.4 z" id="path731" style="fill:#ffffff"></path>
    </g>
    <g id="g733" style="display:inline">
      <path d="m 384.7,223.3 c 0,0 0.2,0 0.7,0.1 0.5,0 1.2,0.1 2.2,0.1 1,0.1 2.1,0.1 3.4,0.1 1.3,0.1 2.8,0 4.5,0 1.7,0 3.4,0 5.3,0 1.9,0 3.9,0.1 5.9,0.2 4.1,0.4 8.5,1.2 12.6,2.8 2.1,0.9 4,1.9 5.7,3.3 1.8,1.3 3.2,2.9 4.4,4.7 0.5,0.9 1.1,1.7 1.6,2.6 0.5,0.8 0.9,1.8 1.3,2.7 0.7,1.7 1.3,3.4 1.7,5.1 0.2,0.8 0.4,1.6 0.5,2.3 0,0.4 0.1,0.7 0.1,1.1 0,0.4 0,0.7 0.1,1.1 0.1,1.3 0.1,2.6 0.1,3.5 0,1.9 0,3 0,3 0,0 0,-1.1 0,-3 0,-1 0,-2.1 -0.2,-3.4 0,-0.4 0,-0.7 -0.1,-1 0,-0.4 -0.1,-0.7 -0.1,-1.1 -0.1,-0.7 -0.2,-1.5 -0.5,-2.3 -0.4,-1.6 -1,-3.3 -1.7,-5 -0.5,-0.8 -0.9,-1.7 -1.3,-2.6 -0.5,-0.8 -1.1,-1.7 -1.6,-2.5 -1.1,-1.7 -2.5,-3.3 -4.2,-4.5 -1.7,-1.2 -3.6,-2.3 -5.7,-3.2 -4,-1.6 -8.4,-2.4 -12.5,-2.9 -2.1,-0.2 -4,-0.4 -5.9,-0.4 -1.9,0 -3.6,0 -5.3,0 -1.7,0 -3.2,0 -4.5,-0.1 -1.3,-0.1 -2.5,-0.1 -3.4,-0.2 -1,-0.1 -1.7,-0.1 -2.2,-0.2 -0.5,-0.1 -0.9,-0.3 -0.9,-0.3 z" id="path735" style="fill:#ffffff"></path>
    </g>
    <g id="g737" style="display:inline">
      <path d="m 433.3,255.8 c 0,0 0.1,-1 0.1,-2.6 0,-0.8 0,-1.8 -0.1,-2.9 -0.1,-1.1 -0.2,-2.3 -0.5,-3.8 -0.2,-1.3 -0.6,-2.8 -1.2,-4.2 -0.2,-0.7 -0.6,-1.5 -1,-2.2 -0.4,-0.7 -0.7,-1.5 -1.2,-2.2 -0.5,-0.7 -1,-1.5 -1.5,-2.1 l -0.9,-1 -1,-1 c -0.6,-0.7 -1.3,-1.2 -1.9,-1.8 -0.7,-0.6 -1.5,-1.1 -2.2,-1.6 -1.5,-1 -3.2,-1.8 -4.9,-2.4 -1.7,-0.6 -3.4,-1 -5.1,-1.3 -1.7,-0.2 -3.4,-0.4 -5,-0.5 -1.6,-0.2 -3,-0.2 -4.5,-0.4 -1.3,-0.1 -2.7,0 -3.8,-0.1 -1.1,0 -2.1,0 -2.9,0 -1.6,0 -2.6,0.1 -2.6,0.1 0,0 1,-0.1 2.6,-0.1 0.9,0 1.8,-0.1 2.9,-0.1 1.1,0 2.4,-0.1 3.8,0 1.4,0.1 2.9,0.1 4.5,0.4 1.6,0.1 3.3,0.2 5,0.5 1.7,0.2 3.5,0.6 5.2,1.2 1.7,0.6 3.4,1.5 5,2.4 0.7,0.5 1.5,1.1 2.2,1.7 0.7,0.6 1.5,1.2 1.9,1.9 l 1,1 0.9,1.1 c 0.6,0.7 1,1.5 1.5,2.2 0.5,0.7 0.9,1.5 1.2,2.3 0.4,0.7 0.7,1.5 1,2.3 0.6,1.5 0.9,2.9 1.2,4.4 0.2,1.3 0.4,2.7 0.5,3.8 0,1.1 0.1,2.1 0,2.9 -0.1,1.1 -0.2,2.1 -0.2,2.1 z" id="path739" style="fill:#ffffff"></path>
    </g>
    <g id="g741" style="display:inline">
      <path d="m 396,227.1 c 0,0 0.9,0 2.3,-0.1 1.5,0 3.5,0 6,0.1 1.2,0.1 2.5,0.1 4,0.2 0.7,0.1 1.5,0.1 2.2,0.2 0.7,0.1 1.5,0.2 2.3,0.4 1.6,0.2 3,0.7 4.6,1.2 1.6,0.6 3,1.5 4.4,2.3 1.3,1 2.6,2.2 3.6,3.4 0.6,0.6 1,1.3 1.5,1.9 0.5,0.7 0.9,1.3 1.2,2.1 0.7,1.3 1.5,2.8 1.8,4.1 0.2,0.7 0.5,1.3 0.6,1.9 0.1,0.6 0.4,1.2 0.5,1.9 0.2,1.2 0.4,2.3 0.5,3.4 0,1 0,1.9 0,2.7 -0.1,1.5 -0.1,2.3 -0.1,2.3 0,0 0,-0.9 0.1,-2.3 0,-0.7 0,-1.6 -0.1,-2.6 -0.1,-1 -0.2,-2.1 -0.6,-3.3 -0.1,-0.6 -0.2,-1.2 -0.5,-1.8 -0.1,-0.6 -0.4,-1.3 -0.6,-1.9 -0.2,-0.7 -0.5,-1.3 -0.9,-1.9 -0.2,-0.7 -0.7,-1.3 -1.1,-2.1 -0.4,-0.7 -0.9,-1.3 -1.2,-1.9 -0.5,-0.6 -1,-1.3 -1.5,-1.8 -1.1,-1.2 -2.3,-2.3 -3.5,-3.3 -1.3,-1 -2.8,-1.7 -4.2,-2.3 -1.6,-0.5 -3,-1 -4.6,-1.2 -0.7,-0.1 -1.5,-0.2 -2.2,-0.4 -0.7,-0.1 -1.5,-0.2 -2.2,-0.2 -1.5,-0.2 -2.8,-0.2 -4,-0.4 -2.4,-0.1 -4.5,-0.2 -6,-0.2 -1.5,-0.4 -2.3,-0.4 -2.3,-0.4 z" id="path743" style="fill:#ffffff"></path>
    </g>
    <g id="g745" style="display:inline">
      <path d="m 430.2,255.5 c 0,0 0,-0.5 -0.1,-1.2 0,-0.7 -0.2,-1.8 -0.4,-3.2 -0.1,-0.6 -0.2,-1.3 -0.4,-2.1 -0.1,-0.7 -0.4,-1.5 -0.6,-2.3 -0.2,-0.8 -0.5,-1.6 -0.7,-2.4 -0.2,-0.9 -0.6,-1.6 -1,-2.4 -0.4,-0.7 -0.7,-1.6 -1.2,-2.3 -0.5,-0.7 -0.9,-1.5 -1.3,-2.1 -0.5,-0.6 -1,-1.3 -1.5,-1.8 -0.5,-0.5 -1,-1.1 -1.5,-1.5 -0.5,-0.4 -1,-0.9 -1.3,-1.2 -0.5,-0.2 -0.9,-0.5 -1.2,-0.7 -0.6,-0.4 -1,-0.6 -1,-0.6 0,0 0.4,0.2 1.1,0.6 0.4,0.2 0.7,0.4 1.2,0.7 0.5,0.4 1,0.7 1.5,1.1 0.6,0.4 1.1,1 1.6,1.5 0.6,0.5 1.1,1.2 1.6,1.8 0.6,0.6 1,1.5 1.5,2.2 0.5,0.7 0.9,1.6 1.2,2.3 0.4,0.9 0.7,1.7 1,2.4 0.2,0.9 0.5,1.7 0.7,2.4 0.2,0.8 0.4,1.6 0.5,2.3 0.1,0.7 0.2,1.5 0.4,2.2 0,2.5 -0.1,4.3 -0.1,4.3 z" id="path747" style="fill:#ffffff"></path>
    </g>
    <g id="g749" style="display:inline">
      <path d="m 428.6,255.5 c 0,0 -0.1,-0.7 -0.2,-1.9 0,-0.6 -0.1,-1.2 -0.2,-1.9 -0.1,-0.7 -0.2,-1.5 -0.4,-2.3 -0.1,-0.7 -0.2,-1.6 -0.4,-2.2 -0.1,-0.7 -0.2,-1.3 -0.4,-1.9 -0.2,-1.1 -0.5,-1.9 -0.5,-1.9 0,0 0.2,0.7 0.7,1.8 0.1,0.2 0.1,0.6 0.2,0.8 0.1,0.4 0.2,0.6 0.2,1 0.1,0.7 0.2,1.5 0.5,2.3 0.2,1.6 0.4,3.2 0.4,4.2 0.3,1.2 0.1,2 0.1,2 z" id="path751" style="fill:#ffffff"></path>
    </g>
    <g id="g753" style="display:inline">
      <path d="m 388.6,219.7 c 0,0 0.1,0 0.5,0.1 0.4,0 0.9,0.1 1.3,0.1 0.6,0 1.3,0.1 2.2,0.1 0.9,0 1.8,0.1 2.8,0.1 2.1,0 4.5,0 7,0 2.6,0 5.3,0.1 8.1,0.5 1.3,0.1 2.8,0.4 4,0.7 1.3,0.2 2.7,0.6 3.9,1 0.6,0.2 1.2,0.4 1.8,0.6 0.6,0.2 1.2,0.5 1.7,0.7 0.5,0.2 1.1,0.5 1.6,0.7 0.5,0.2 1,0.6 1.5,0.9 0.9,0.6 1.7,1.1 2.3,1.6 0.6,0.6 1.2,1 1.6,1.5 0.9,0.8 1.3,1.3 1.3,1.3 0,0 -0.5,-0.5 -1.3,-1.3 -0.5,-0.4 -1.1,-0.8 -1.7,-1.3 -0.7,-0.5 -1.5,-1 -2.3,-1.6 -0.5,-0.2 -1,-0.5 -1.5,-0.7 -0.5,-0.2 -1,-0.5 -1.6,-0.7 -0.5,-0.2 -1.1,-0.5 -1.7,-0.7 -0.6,-0.2 -1.2,-0.5 -1.8,-0.6 -1.2,-0.4 -2.6,-0.7 -3.9,-1 -1.3,-0.2 -2.7,-0.5 -4,-0.6 -2.7,-0.4 -5.5,-0.5 -8,-0.6 -2.6,0 -5,-0.1 -7,-0.1 -1.1,0 -1.9,-0.1 -2.8,-0.1 -0.9,-0.1 -1.6,-0.1 -2.2,-0.2 -0.6,-0.1 -1.1,-0.1 -1.3,-0.2 -0.4,-0.1 -0.5,-0.2 -0.5,-0.2 z" id="path755" style="fill:#ffffff"></path>
    </g>
    <g id="g757" style="display:inline">
      <path d="m 389.7,218.2 c 0,0 0.6,0 1.7,0 1.1,0 2.7,-0.1 4.6,0 1.9,0 4.1,0.1 6.6,0.1 1.2,0 2.4,0.1 3.6,0.1 0.6,0 1.2,0 1.9,0 l 1.9,0.1 c 0.6,0 1.2,0.1 1.9,0.1 0.6,0.1 1.2,0.2 1.8,0.4 1.2,0.1 2.4,0.5 3.6,0.8 1.2,0.2 2.2,0.7 3.3,1.1 1,0.5 1.9,0.8 2.8,1.3 0.9,0.5 1.6,1 2.2,1.5 0.6,0.5 1.2,0.8 1.6,1.2 0.9,0.7 1.3,1.2 1.3,1.2 0,0 -0.5,-0.4 -1.3,-1.1 -0.4,-0.4 -1,-0.7 -1.6,-1.2 -0.6,-0.5 -1.3,-0.9 -2.2,-1.3 -0.9,-0.5 -1.8,-0.8 -2.8,-1.3 -1,-0.4 -2.1,-0.7 -3.3,-1.1 -1.1,-0.2 -2.3,-0.6 -3.5,-0.7 -0.6,-0.1 -1.2,-0.2 -1.8,-0.2 -0.6,-0.1 -1.2,-0.1 -1.9,-0.1 l -1.9,-0.1 c -0.6,0 -1.2,0 -1.9,-0.1 -1.2,0 -2.4,-0.1 -3.6,-0.1 -2.4,-0.1 -4.6,-0.2 -6.6,-0.2 -1.9,-0.1 -3.5,-0.1 -4.6,-0.1 -1.2,-0.3 -1.8,-0.3 -1.8,-0.3 z" id="path759" style="fill:#ffffff"></path>
    </g>
    <g id="g761" style="display:inline">
      <path d="m 390.5,216.5 c 0,0 2.3,-0.2 5.7,-0.4 1.7,-0.1 3.8,0 5.9,0 1.1,0 2.2,0 3.4,0.1 1.1,0.1 2.3,0.1 3.4,0.2 1.2,0.1 2.3,0.1 3.4,0.4 1.1,0.2 2.2,0.4 3.3,0.6 1.1,0.2 2.1,0.5 3,0.8 1,0.2 1.8,0.7 2.7,1 0.7,0.4 1.5,0.7 2.1,1.2 0.6,0.4 1.1,0.7 1.5,1.1 0.9,0.6 1.2,1 1.2,1 0,0 -0.5,-0.4 -1.2,-1 -0.4,-0.4 -1,-0.6 -1.6,-1 -0.6,-0.4 -1.3,-0.7 -2.1,-1.1 -0.9,-0.4 -1.7,-0.7 -2.7,-1 -1,-0.4 -1.9,-0.5 -3,-0.7 -1.1,-0.2 -2.2,-0.4 -3.3,-0.6 -1.1,-0.1 -2.3,-0.2 -3.4,-0.2 -1.1,-0.1 -2.3,-0.2 -3.4,-0.2 -1.1,-0.1 -2.3,-0.1 -3.3,-0.1 -1.1,0 -2.2,0 -3.2,-0.1 -1,0 -1.9,0 -2.8,0 -1.7,0 -3.2,0 -4.1,0 -0.9,0 -1.5,0 -1.5,0 z" id="path763" style="fill:#ffffff"></path>
    </g>
    <g id="g765" style="display:inline">
      <path d="m 391.6,215.4 c 0,0 0.4,-0.1 1.1,-0.2 0.7,-0.1 1.8,-0.4 3,-0.5 1.3,-0.1 2.8,-0.4 4.4,-0.4 1.6,0 3.4,-0.1 5.1,0 0.9,0 1.7,0.1 2.6,0.2 0.9,0.1 1.7,0.2 2.4,0.4 0.9,0.1 1.6,0.2 2.3,0.5 0.7,0.1 1.5,0.4 2.1,0.5 0.6,0.2 1.2,0.4 1.7,0.5 0.5,0.2 1,0.4 1.2,0.5 0.7,0.2 1.1,0.4 1.1,0.4 0,0 -0.4,-0.1 -1.1,-0.4 -0.4,-0.1 -0.9,-0.2 -1.3,-0.4 -0.5,-0.1 -1.1,-0.2 -1.7,-0.4 -0.6,-0.1 -1.3,-0.2 -2.1,-0.5 -0.7,-0.1 -1.5,-0.2 -2.3,-0.4 -0.9,-0.1 -1.6,-0.2 -2.4,-0.2 -0.9,-0.1 -1.7,-0.1 -2.6,-0.1 -1.7,-0.1 -3.4,-0.1 -5,-0.1 -0.9,0 -1.6,0 -2.3,0.1 -0.7,0 -1.5,0.1 -2.1,0.1 -2.4,0.1 -4.1,0.4 -4.1,0.4 z" id="path767" style="fill:#ffffff"></path>
    </g>
    <g id="g769" style="display:inline">
      <path d="m 443,247.1 c 0,0 -0.2,-0.5 -0.6,-1.5 -0.4,-1 -0.9,-2.3 -1.3,-4 -0.2,-0.8 -0.5,-1.8 -0.6,-2.8 -0.1,-1 -0.4,-2.1 -0.4,-3.2 -0.1,-1.1 -0.1,-2.3 0,-3.4 0,-0.6 0.1,-1.2 0.2,-1.7 0.1,-0.6 0.2,-1.1 0.5,-1.7 0.2,-0.6 0.5,-1.1 0.7,-1.7 0.2,-0.5 0.5,-1 0.9,-1.5 0.6,-1 1.3,-1.9 2.2,-2.7 0.9,-0.7 1.7,-1.5 2.5,-1.9 0.9,-0.5 1.7,-1 2.4,-1.3 1.5,-0.9 2.7,-1.8 3.3,-2.7 0.4,-0.4 0.6,-0.7 0.7,-1 0.1,-0.2 0.2,-0.4 0.2,-0.4 0,0 -0.1,0.1 -0.2,0.4 -0.1,0.2 -0.4,0.6 -0.6,1 -0.6,0.9 -1.7,1.9 -3.2,2.8 -0.7,0.5 -1.6,1 -2.4,1.5 -0.9,0.5 -1.7,1.2 -2.4,1.9 -0.7,0.7 -1.5,1.7 -2.1,2.7 -0.2,0.5 -0.6,1 -0.9,1.5 l -0.6,1.6 c -0.1,0.6 -0.4,1.1 -0.5,1.7 -0.1,0.6 -0.2,1.1 -0.2,1.7 -0.1,1.1 -0.1,2.3 -0.1,3.4 0.1,1.1 0.1,2.2 0.4,3.2 0.1,1 0.4,1.9 0.6,2.8 0.4,1.7 0.9,3.2 1.2,4.1 0,0.7 0.3,1.2 0.3,1.2 z" id="path771" style="fill:#ffffff"></path>
    </g>
    <g id="g773" style="display:inline">
      <path d="m 439.3,240.5 c 0,0 -0.1,-0.5 -0.4,-1.3 -0.2,-0.9 -0.5,-2.1 -0.6,-3.5 -0.1,-0.7 -0.1,-1.6 -0.1,-2.4 0,-0.8 0,-1.7 0.1,-2.7 0.1,-1 0.4,-1.8 0.6,-2.8 0.1,-0.5 0.4,-1 0.5,-1.3 0.2,-0.5 0.5,-0.9 0.7,-1.3 0.2,-0.4 0.6,-0.8 0.9,-1.2 0.4,-0.4 0.7,-0.7 1,-1.1 0.4,-0.4 0.6,-0.7 1,-1.1 0.4,-0.4 0.7,-0.6 1.1,-1 0.7,-0.6 1.5,-1.1 2.2,-1.6 0.7,-0.5 1.3,-0.9 2.1,-1.3 0.6,-0.4 1.2,-0.8 1.7,-1.2 0.5,-0.4 0.9,-0.7 1.1,-1.1 0.6,-0.6 0.9,-1.1 0.9,-1.1 0,0 -0.2,0.4 -0.9,1.1 -0.2,0.4 -0.6,0.7 -1.1,1.1 -0.5,0.4 -1,0.8 -1.6,1.2 -0.6,0.4 -1.2,0.9 -1.9,1.3 -0.6,0.5 -1.5,1 -2.1,1.7 -0.4,0.4 -0.7,0.6 -1.1,1 -0.4,0.4 -0.6,0.7 -1,1.1 -0.4,0.4 -0.7,0.7 -1,1.1 -0.3,0.4 -0.6,0.7 -0.9,1.2 -0.2,0.4 -0.5,0.9 -0.7,1.2 -0.1,0.5 -0.4,0.8 -0.5,1.3 -0.2,0.8 -0.5,1.8 -0.6,2.7 -0.1,0.8 -0.2,1.8 -0.2,2.7 0,0.9 0,1.6 0,2.4 0.1,1.5 0.2,2.7 0.4,3.5 0.2,0.9 0.4,1.4 0.4,1.4 z" id="path775" style="fill:#ffffff"></path>
    </g>
    <g id="g777" style="display:inline">
      <path d="m 432,222.7 c 0,0 -0.1,-1 0,-2.5 0,-0.7 0.1,-1.7 0.2,-2.7 0.1,-1 0.4,-1.9 0.7,-2.9 0.1,-0.5 0.4,-1 0.6,-1.5 0.2,-0.5 0.5,-1 0.7,-1.3 0.2,-0.4 0.5,-0.8 0.9,-1.2 0.2,-0.4 0.6,-0.7 0.9,-1 0.3,-0.3 0.6,-0.5 0.9,-0.7 0.2,-0.2 0.5,-0.4 0.7,-0.5 0.4,-0.2 0.6,-0.4 0.6,-0.4 0,0 -0.2,0.1 -0.6,0.5 -0.1,0.1 -0.4,0.2 -0.6,0.5 -0.2,0.2 -0.5,0.5 -0.7,0.7 -0.2,0.2 -0.5,0.6 -0.7,1 -0.2,0.4 -0.5,0.7 -0.7,1.2 -0.2,0.4 -0.5,0.8 -0.6,1.3 -0.1,0.5 -0.4,1 -0.5,1.5 -0.4,1 -0.6,1.9 -0.7,2.9 -0.2,1 -0.4,1.8 -0.5,2.6 -0.4,1.4 -0.6,2.5 -0.6,2.5 z" id="path779" style="fill:#ffffff"></path>
    </g>
    <g id="g781" style="display:inline">
      <path d="m 433.3,226.1 c 0,0 -0.1,-1.2 0,-3 0,-0.8 0.1,-1.9 0.2,-3 0.1,-0.6 0.1,-1.1 0.4,-1.7 0.1,-0.6 0.2,-1.2 0.4,-1.7 0.1,-0.6 0.4,-1.1 0.6,-1.7 0.2,-0.6 0.5,-1.1 0.7,-1.6 0.2,-0.5 0.6,-1 0.9,-1.3 0.4,-0.4 0.6,-0.7 1,-1.1 0.4,-0.4 0.7,-0.6 1,-0.8 0.2,-0.2 0.6,-0.4 0.9,-0.5 0.5,-0.2 0.7,-0.4 0.7,-0.4 0,0 -0.2,0.1 -0.7,0.5 -0.2,0.1 -0.5,0.2 -0.7,0.6 -0.2,0.2 -0.6,0.5 -0.9,0.9 -0.2,0.4 -0.6,0.7 -0.9,1.1 -0.2,0.5 -0.6,0.9 -0.7,1.3 -0.2,0.5 -0.5,1 -0.7,1.6 -0.2,0.5 -0.4,1.1 -0.6,1.7 -0.2,0.6 -0.4,1.1 -0.5,1.7 -0.1,0.6 -0.2,1.1 -0.4,1.7 -0.1,1.1 -0.4,2.2 -0.4,3 -0.3,1.5 -0.3,2.7 -0.3,2.7 z" id="path783" style="fill:#ffffff"></path>
    </g>
    <g id="g785" style="display:inline">
      <path d="m 434.5,229.4 c 0,0 -0.1,-1.5 0,-3.5 0,-1.1 0.1,-2.3 0.4,-3.6 0.1,-1.3 0.5,-2.7 0.9,-4 0.4,-1.3 0.9,-2.7 1.5,-3.9 0.2,-0.6 0.6,-1.1 1,-1.7 0.4,-0.5 0.7,-1 1.1,-1.3 0.4,-0.4 0.7,-0.7 1.1,-0.9 0.4,-0.2 0.7,-0.4 1,-0.5 0.2,-0.1 0.5,-0.1 0.7,-0.2 0.1,0 0.2,-0.1 0.2,-0.1 0,0 -0.1,0 -0.2,0.1 -0.1,0.1 -0.4,0.1 -0.6,0.2 -0.2,0.1 -0.6,0.4 -1,0.6 -0.4,0.2 -0.7,0.6 -1.1,1 -1.5,1.5 -2.5,4.1 -3.3,6.8 -0.7,2.7 -1.1,5.5 -1.3,7.5 -0.4,2.2 -0.4,3.5 -0.4,3.5 z" id="path787" style="fill:#ffffff"></path>
    </g>
    <g id="g789" style="display:inline">
      <path d="m 435.6,232.1 c 0,0 -0.1,-1.5 0.1,-3.8 0.1,-1.1 0.2,-2.4 0.5,-3.8 0.2,-1.3 0.6,-2.8 1,-4.2 0.2,-0.7 0.5,-1.5 0.7,-2.1 0.2,-0.7 0.6,-1.3 0.9,-1.9 0.4,-0.6 0.7,-1.2 1,-1.7 0.4,-0.5 0.7,-1 1.1,-1.5 0.4,-0.4 0.7,-0.7 1.1,-1.1 0.4,-0.4 0.7,-0.5 1,-0.7 0.5,-0.4 0.9,-0.6 0.9,-0.6 0,0 -0.2,0.2 -0.9,0.6 -0.2,0.2 -0.6,0.4 -0.9,0.7 -0.3,0.3 -0.6,0.7 -1,1.1 -0.4,0.5 -0.6,1 -1,1.5 -0.2,0.6 -0.6,1.1 -1,1.7 -0.2,0.6 -0.6,1.2 -0.9,1.9 -0.2,0.7 -0.5,1.3 -0.7,2.1 -0.5,1.5 -0.7,2.8 -1.1,4.2 -0.2,1.3 -0.5,2.7 -0.6,3.8 -0.2,2.3 -0.2,3.8 -0.2,3.8 z" id="path791" style="fill:#ffffff"></path>
    </g>
    <g id="g793" style="display:inline">
      <path d="m 436.5,234.9 c 0,0 0,-1.7 0.1,-4.1 0.1,-1.2 0.2,-2.7 0.6,-4.1 0.1,-0.7 0.2,-1.6 0.5,-2.3 0.2,-0.8 0.4,-1.6 0.6,-2.4 0.2,-0.8 0.5,-1.6 0.9,-2.3 0.2,-0.7 0.7,-1.5 1,-2.2 0.4,-0.7 0.9,-1.3 1.2,-1.9 0.4,-0.6 0.9,-1.1 1.2,-1.6 0.3,-0.5 0.9,-0.9 1.2,-1.1 0.4,-0.4 0.7,-0.5 1.1,-0.7 0.6,-0.4 1,-0.6 1,-0.6 0,0 -0.4,0.2 -1,0.6 -0.2,0.2 -0.7,0.4 -1,0.8 -0.4,0.4 -0.7,0.7 -1.2,1.2 -0.4,0.5 -0.9,1 -1.2,1.6 -0.4,0.6 -0.7,1.2 -1.1,1.9 -0.4,0.7 -0.7,1.3 -1,2.2 -0.2,0.7 -0.6,1.5 -0.9,2.3 -0.2,0.7 -0.5,1.6 -0.7,2.3 -0.2,0.7 -0.4,1.6 -0.5,2.3 -0.2,1.5 -0.6,2.9 -0.7,4.1 0.1,2.4 -0.1,4 -0.1,4 z" id="path795" style="fill:#ffffff"></path>
    </g>
    <g id="g797" style="display:inline">
      <path d="m 439.3,224.1 c 0,0 0.1,-0.2 0.4,-0.6 0.2,-0.4 0.5,-0.8 1,-1.5 0.2,-0.2 0.5,-0.6 0.7,-1 0.2,-0.4 0.5,-0.7 0.9,-1 0.4,-0.4 0.6,-0.7 1,-1 0.4,-0.4 0.7,-0.6 1.1,-1 0.9,-0.5 1.6,-1.1 2.4,-1.6 0.4,-0.2 0.7,-0.5 1.1,-0.7 0.1,-0.1 0.4,-0.2 0.5,-0.4 0.1,-0.2 0.2,-0.2 0.5,-0.4 0.2,-0.2 0.5,-0.5 0.7,-0.6 0.2,-0.1 0.4,-0.4 0.5,-0.5 0.1,-0.1 0.2,-0.2 0.4,-0.4 0,-0.1 0.1,-0.1 0.1,-0.1 0,0 0,0 0,0.1 0,0.1 -0.1,0.2 -0.2,0.4 -0.1,0.1 -0.2,0.4 -0.5,0.6 -0.2,0.2 -0.5,0.5 -0.7,0.7 -0.1,0.1 -0.2,0.2 -0.4,0.4 -0.1,0.1 -0.4,0.2 -0.5,0.4 -0.4,0.2 -0.7,0.5 -1.1,0.7 -0.7,0.5 -1.6,1.1 -2.3,1.6 -0.4,0.4 -0.7,0.6 -1.1,0.9 -0.4,0.2 -0.7,0.6 -1,1 -0.6,0.6 -1.2,1.2 -1.7,1.8 -1.2,1.4 -1.8,2.2 -1.8,2.2 z" id="path799" style="fill:#ffffff"></path>
    </g>
    <g id="g801" style="display:inline">
      <path d="m 440.9,219.9 c 0,0 0.4,-0.6 0.9,-1.3 0.2,-0.4 0.6,-0.8 1.1,-1.3 0.2,-0.2 0.5,-0.5 0.7,-0.7 0.2,-0.2 0.5,-0.5 0.7,-0.7 0.5,-0.4 1,-0.8 1.5,-1.2 0.4,-0.5 0.9,-0.7 1.2,-1.1 0.7,-0.7 1.1,-1.2 1.1,-1.2 0,0 -0.4,0.6 -1,1.3 -0.2,0.4 -0.7,0.8 -1.1,1.3 -0.5,0.5 -1,0.8 -1.5,1.3 -0.2,0.2 -0.5,0.4 -0.7,0.6 -0.2,0.2 -0.5,0.4 -0.7,0.6 -0.4,0.5 -0.9,0.8 -1.2,1.2 -0.5,0.7 -1,1.2 -1,1.2 z" id="path803" style="fill:#ffffff"></path>
    </g>
    <g id="g805" style="display:inline">
      <path d="m 431,218.7 c 0,0 0,-0.8 0.1,-2.1 0.1,-0.6 0.1,-1.3 0.4,-2.1 0.1,-0.7 0.4,-1.6 0.6,-2.3 0.2,-0.7 0.6,-1.6 1,-2.2 0.4,-0.7 0.7,-1.3 1.1,-1.7 0.4,-0.5 0.7,-0.8 1.1,-1 0.2,-0.2 0.5,-0.4 0.5,-0.4 0,0 -0.1,0.1 -0.4,0.4 -0.2,0.2 -0.6,0.6 -0.9,1.1 -0.1,0.2 -0.4,0.5 -0.5,0.8 -0.1,0.4 -0.4,0.6 -0.5,1 -0.4,0.7 -0.6,1.5 -0.9,2.2 -0.5,1.5 -0.9,3 -1.1,4.2 -0.4,1.3 -0.5,2.1 -0.5,2.1 z" id="path807" style="fill:#ffffff"></path>
    </g>
    <g id="g809" style="display:inline">
      <path d="m 430.2,215.3 c 0,0 0,-0.6 0,-1.5 0,-0.5 0.1,-1 0.2,-1.6 0.1,-0.6 0.2,-1.1 0.4,-1.7 0.1,-0.2 0.2,-0.6 0.4,-0.9 0.1,-0.2 0.2,-0.6 0.4,-0.8 0.1,-0.2 0.2,-0.5 0.4,-0.7 0.1,-0.2 0.2,-0.5 0.4,-0.6 0.6,-0.7 1,-1.2 1,-1.2 0,0 -0.2,0.6 -0.7,1.3 -0.1,0.2 -0.2,0.5 -0.2,0.6 -0.1,0.2 -0.2,0.5 -0.4,0.7 -0.1,0.2 -0.2,0.5 -0.2,0.8 -0.1,0.2 -0.2,0.6 -0.2,0.8 -0.1,0.6 -0.4,1.1 -0.5,1.7 -0.1,0.6 -0.2,1.1 -0.4,1.5 -0.5,1 -0.6,1.6 -0.6,1.6 z" id="path811" style="fill:#ffffff"></path>
    </g>
    <g id="g813" style="display:inline">
      <path d="m 429.1,211.3 c 0,0 0,-0.5 0.1,-1.1 0.1,-0.6 0.2,-1.5 0.6,-2.3 0.1,-0.4 0.4,-0.8 0.5,-1.2 0.1,-0.2 0.2,-0.4 0.2,-0.5 0.1,-0.1 0.1,-0.4 0.2,-0.5 0.4,-0.5 0.7,-0.9 0.7,-0.9 0,0 -0.1,0.4 -0.5,1 -0.1,0.2 -0.2,0.6 -0.5,1 -0.1,0.4 -0.2,0.7 -0.5,1.2 -0.1,0.4 -0.2,0.9 -0.4,1.2 -0.1,0.4 -0.2,0.7 -0.4,1.1 0.1,0.6 0,1 0,1 z" id="path815" style="fill:#ffffff"></path>
    </g>
    <g id="g817" style="display:inline">
      <path d="m 428.3,207.7 c 0,0 0,-0.4 0.1,-0.8 0.1,-0.5 0.4,-1.1 0.6,-1.8 0.1,-0.4 0.4,-0.6 0.5,-0.8 0.1,-0.2 0.4,-0.5 0.5,-0.7 0.1,-0.2 0.4,-0.4 0.5,-0.5 0.1,-0.1 0.1,-0.1 0.1,-0.1 0,0 -0.1,0.4 -0.4,0.7 -0.2,0.5 -0.5,1.1 -0.7,1.7 -0.1,0.4 -0.2,0.6 -0.4,0.9 -0.1,0.2 -0.2,0.6 -0.4,0.7 -0.3,0.4 -0.4,0.7 -0.4,0.7 z" id="path819" style="fill:#ffffff"></path>
    </g>
    <g id="g821" style="display:inline">
      <path d="m 427.4,205.1 c 0,0 0,-0.2 0,-0.6 0,-0.2 0.1,-0.5 0.1,-0.6 0.1,-0.2 0.1,-0.5 0.2,-0.7 0.2,-0.5 0.5,-1 0.7,-1.2 0.2,-0.4 0.5,-0.5 0.5,-0.5 0,0 -0.1,0.2 -0.2,0.6 -0.1,0.1 -0.1,0.4 -0.2,0.6 -0.1,0.2 -0.2,0.5 -0.2,0.7 -0.2,0.5 -0.4,1 -0.6,1.2 -0.1,0.3 -0.3,0.5 -0.3,0.5 z" id="path823" style="fill:#ffffff"></path>
    </g>
    <g id="g825" style="display:inline">
      <path d="m 426.6,202.6 c 0,0 0,-0.2 0,-0.5 0,-0.3 0.1,-0.7 0.2,-1.1 0.1,-0.1 0.1,-0.4 0.2,-0.5 0.1,-0.1 0.2,-0.2 0.2,-0.4 0.1,-0.2 0.4,-0.4 0.4,-0.4 0,0 0,0.2 -0.1,0.5 -0.1,0.2 -0.2,0.6 -0.4,1 -0.1,0.1 -0.1,0.4 -0.2,0.5 -0.1,0.1 -0.1,0.4 -0.2,0.5 0,0.2 -0.1,0.4 -0.1,0.4 z" id="path827" style="fill:#ffffff"></path>
    </g>
    <g id="g829" style="display:inline">
      <path d="m 426.1,200.9 c 0,0 0,-0.1 0,-0.4 0,-0.3 0.1,-0.5 0.2,-0.9 0.1,-0.2 0.2,-0.6 0.5,-0.7 0.1,-0.2 0.2,-0.2 0.2,-0.2 0,0 0,0.1 0,0.4 0,0.1 0,0.2 -0.1,0.4 0,0.1 -0.1,0.2 -0.1,0.4 -0.1,0.1 -0.1,0.2 -0.2,0.4 0,0.1 -0.1,0.2 -0.2,0.4 -0.2,0 -0.3,0.2 -0.3,0.2 z" id="path831" style="fill:#ffffff"></path>
    </g>
    <g id="g833" style="display:inline">
      <path d="m 425.2,199.4 c 0,0 -0.1,-0.1 -0.1,-0.2 0,-0.1 0,-0.4 0,-0.5 0,-0.1 0.1,-0.4 0.1,-0.5 0.1,-0.1 0.1,-0.2 0.1,-0.2 0,0 0.1,0.1 0.1,0.2 0,0.1 0,0.4 0,0.5 0,0.1 -0.1,0.4 -0.1,0.5 -0.1,0.1 -0.1,0.2 -0.1,0.2 z" id="path835" style="fill:#ffffff"></path>
    </g>
    <g id="g837" style="display:inline">
      <path d="m 397.8,211.1 c 0,0 0.5,-0.1 1.3,-0.4 0.9,-0.1 2.1,-0.4 3.5,-0.6 0.7,-0.1 1.5,-0.1 2.3,-0.1 0.9,0 1.7,0 2.7,0 0.9,0 1.8,0.2 2.8,0.2 1,0.1 1.9,0.4 2.8,0.6 1,0.2 1.8,0.7 2.7,1 0.9,0.4 1.7,0.8 2.6,1.2 0.9,0.5 1.5,1 2.2,1.5 0.7,0.5 1.3,1 1.8,1.5 1.1,1 1.9,1.8 2.5,2.4 0.6,0.6 0.9,1 0.9,1 0,0 -0.4,-0.4 -1,-1 -0.4,-0.2 -0.7,-0.6 -1.1,-1 -0.5,-0.4 -1,-0.7 -1.6,-1.2 -0.6,-0.4 -1.2,-0.8 -1.9,-1.3 -0.7,-0.4 -1.5,-1 -2.2,-1.3 -0.9,-0.4 -1.6,-0.9 -2.4,-1.2 -0.9,-0.4 -1.8,-0.7 -2.7,-1 -1,-0.2 -1.8,-0.5 -2.8,-0.6 -1,-0.1 -1.8,-0.2 -2.8,-0.4 -0.9,0 -1.8,-0.1 -2.6,-0.1 -0.9,0 -1.6,0 -2.3,0.1 -1.5,0.1 -2.7,0.2 -3.5,0.4 -0.7,0.3 -1.2,0.3 -1.2,0.3 z" id="path839" style="fill:#ffffff"></path>
    </g>
    <g id="g841" style="display:inline">
      <path d="m 401.7,209 c 0,0 0.4,-0.1 1,-0.1 0.6,-0.1 1.6,-0.2 2.7,-0.2 0.6,0 1.2,0 1.8,0 0.6,0 1.3,0.1 2.1,0.1 0.7,0.1 1.5,0.1 2.2,0.2 0.7,0.1 1.5,0.2 2.2,0.5 l 1.1,0.2 c 0.4,0.1 0.7,0.2 1.1,0.4 0.7,0.2 1.3,0.5 2.1,0.9 0.6,0.2 1.2,0.6 1.8,1 0.2,0.1 0.6,0.4 0.9,0.5 0.2,0.1 0.5,0.4 0.7,0.5 0.5,0.4 0.9,0.6 1.2,0.9 0.4,0.2 0.6,0.6 0.9,0.7 0.5,0.5 0.7,0.7 0.7,0.7 0,0 -0.2,-0.2 -0.9,-0.6 -0.2,-0.2 -0.6,-0.5 -1,-0.7 -0.4,-0.2 -0.9,-0.5 -1.3,-0.8 -0.2,-0.1 -0.5,-0.2 -0.7,-0.5 -0.2,-0.1 -0.6,-0.2 -0.9,-0.4 -0.6,-0.2 -1.2,-0.6 -1.8,-0.8 -0.6,-0.2 -1.3,-0.6 -2.1,-0.7 -0.4,-0.1 -0.7,-0.2 -1.1,-0.4 l -1.1,-0.2 c -0.7,-0.2 -1.5,-0.4 -2.2,-0.5 -0.7,-0.1 -1.5,-0.2 -2.2,-0.4 -0.7,0 -1.3,-0.1 -2.1,-0.1 -0.6,0 -1.2,-0.1 -1.8,-0.1 -1.9,-0.3 -3.3,-0.1 -3.3,-0.1 z" id="path843" style="fill:#ffffff"></path>
    </g>
    <g id="g845" style="display:inline">
      <path d="m 403.8,207.3 c 0,0 0.4,-0.1 0.9,-0.1 0.5,-0.1 1.3,-0.2 2.3,-0.2 1,0 2.1,0 3.3,0.1 0.6,0.1 1.2,0.1 1.8,0.2 0.6,0.1 1.2,0.2 1.8,0.4 0.6,0.1 1.2,0.4 1.8,0.5 0.6,0.1 1.2,0.4 1.7,0.6 0.6,0.2 1.1,0.5 1.6,0.7 0.5,0.2 1,0.5 1.3,0.7 0.9,0.5 1.5,1 1.8,1.3 0.5,0.4 0.7,0.5 0.7,0.5 0,0 -0.2,-0.1 -0.7,-0.5 -0.2,-0.1 -0.5,-0.4 -0.9,-0.5 -0.4,-0.1 -0.7,-0.4 -1.1,-0.6 -0.4,-0.2 -0.9,-0.5 -1.3,-0.7 -0.5,-0.2 -1,-0.5 -1.6,-0.6 -0.5,-0.2 -1.1,-0.5 -1.7,-0.6 -0.6,-0.2 -1.2,-0.4 -1.8,-0.5 -0.6,-0.1 -1.2,-0.2 -1.8,-0.4 -0.6,-0.2 -1.2,-0.1 -1.8,-0.2 -0.6,0 -1.1,-0.1 -1.7,-0.1 -0.5,0 -1.1,-0.1 -1.5,-0.1 -1.9,0 -3.1,0.1 -3.1,0.1 z" id="path847" style="fill:#ffffff"></path>
    </g>
    <g id="g849" style="display:inline">
      <path d="m 405.3,205.7 c 0,0 1.1,-0.2 2.8,-0.2 0.9,0 1.8,0 2.8,0.1 1.1,0.1 2.2,0.2 3.3,0.5 1.1,0.2 2.2,0.6 3.2,1 0.5,0.1 1,0.4 1.3,0.6 0.3,0.2 0.9,0.4 1.2,0.6 0.4,0.2 0.7,0.5 1,0.6 0.2,0.2 0.5,0.4 0.7,0.6 0.4,0.4 0.6,0.5 0.6,0.5 0,0 -0.2,-0.1 -0.6,-0.4 -0.2,-0.1 -0.5,-0.2 -0.7,-0.5 -0.2,-0.1 -0.6,-0.4 -1,-0.5 -0.4,-0.2 -0.7,-0.4 -1.2,-0.6 -0.4,-0.2 -0.9,-0.4 -1.3,-0.5 -1,-0.4 -2.1,-0.6 -3,-0.9 -1.1,-0.2 -2.2,-0.4 -3.2,-0.5 -1,-0.1 -1.9,-0.2 -2.8,-0.2 -2,-0.2 -3.1,-0.2 -3.1,-0.2 z" id="path851" style="fill:#ffffff"></path>
    </g>
    <g id="g853" style="display:inline">
      <path d="m 406.8,204.3 c 0,0 1,-0.2 2.6,-0.4 0.7,0 1.6,0 2.6,0 0.5,0.1 1,0.1 1.5,0.2 0.5,0.1 1,0.1 1.5,0.2 1,0.2 1.9,0.6 2.8,1 0.5,0.1 0.9,0.4 1.2,0.6 0.4,0.2 0.7,0.4 1.1,0.6 0.6,0.4 1.2,0.7 1.5,1 0.4,0.2 0.5,0.4 0.5,0.4 0,0 -0.2,-0.1 -0.6,-0.4 -0.4,-0.3 -1,-0.5 -1.6,-0.8 -0.4,-0.1 -0.7,-0.4 -1.1,-0.5 -0.4,-0.1 -0.9,-0.4 -1.2,-0.5 -0.9,-0.4 -1.8,-0.6 -2.8,-0.9 -0.5,-0.1 -1,-0.2 -1.5,-0.4 -0.5,-0.1 -1,-0.1 -1.5,-0.2 -1,-0.1 -1.8,-0.2 -2.6,-0.2 -1.4,0.1 -2.4,0.3 -2.4,0.3 z" id="path855" style="fill:#ffffff"></path>
    </g>
    <g id="g857" style="display:inline">
      <path d="m 439.3,255.8 c 0,0 0,-0.2 0,-0.7 0,-0.5 0,-1.1 -0.1,-1.8 0,-0.7 -0.1,-1.7 -0.2,-2.6 0,-0.5 -0.1,-1 -0.1,-1.5 -0.1,-0.5 -0.1,-1 -0.2,-1.5 -0.1,-1 -0.2,-2.1 -0.5,-2.9 -0.2,-1 -0.4,-1.8 -0.6,-2.5 -0.5,-1.5 -0.7,-2.4 -0.7,-2.4 0,0 0.4,1 1,2.4 0.1,0.4 0.2,0.7 0.4,1.2 0.1,0.5 0.2,0.9 0.4,1.3 0.2,1 0.4,1.9 0.6,2.9 0.1,0.5 0.1,1 0.1,1.5 0,0.5 0.1,1 0.1,1.5 0,1 0.1,1.8 0.1,2.7 0,0.7 0,1.5 0,1.8 -0.3,0.3 -0.3,0.6 -0.3,0.6 z" id="path859" style="fill:#ffffff"></path>
    </g>
    <g id="g861" style="display:inline">
      <path d="m 440.7,254.8 c 0,0 0,-0.6 -0.1,-1.5 0,-0.5 -0.1,-1 -0.1,-1.6 0,-0.6 -0.1,-1.2 -0.2,-1.8 0,-0.2 0,-0.6 -0.1,-0.8 0,-0.2 0,-0.6 -0.1,-0.9 -0.1,-0.6 -0.1,-1.1 -0.2,-1.6 -0.1,-0.8 -0.2,-1.5 -0.2,-1.5 0,0 0.1,0.6 0.4,1.5 0.1,0.5 0.2,1 0.4,1.6 0.1,0.2 0.1,0.6 0.1,0.9 0,0.2 0.1,0.6 0.1,0.8 0,0.6 0.1,1.2 0.1,1.8 0,0.6 0,1.1 0,1.6 0,0.5 0,0.8 0,1.1 -0.1,0.3 -0.1,0.4 -0.1,0.4 z" id="path863" style="fill:#ffffff"></path>
    </g>
    <g id="g865" style="display:inline">
      <path d="m 441.9,253.4 c 0,0 -0.1,-0.4 -0.1,-0.9 -0.1,-0.5 -0.1,-1.2 -0.2,-1.8 0,-0.6 -0.1,-1.3 -0.1,-1.8 0,-0.5 0,-0.8 0,-0.8 0,0 0.1,0.4 0.2,0.8 0.1,0.5 0.2,1.2 0.2,1.8 0.1,0.7 0.1,1.3 0,1.8 0.1,0.6 0,0.9 0,0.9 z" id="path867" style="fill:#ffffff"></path>
    </g>
    <g id="g869" style="display:inline">
      <path d="m 443.1,252.6 c 0,0 -0.1,-0.1 -0.1,-0.4 -0.1,-0.2 -0.1,-0.6 -0.2,-1 0,-0.4 -0.1,-0.7 0,-1 0,-0.2 0,-0.5 0,-0.5 0,0 0.1,0.1 0.1,0.4 0.1,0.2 0.1,0.6 0.2,1 0,0.4 0.1,0.7 0,1 0.1,0.3 0,0.5 0,0.5 z" id="path871" style="fill:#ffffff"></path>
    </g>
    <g id="g873" style="display:inline">
      <path d="m 432.6,230.4 c 0,0 -0.7,-1.9 -1.9,-5 -0.6,-1.5 -1.2,-3.2 -1.9,-5.1 -0.7,-1.8 -1.3,-3.9 -2.1,-5.8 -0.4,-1 -0.7,-1.9 -1,-3 -0.4,-1 -0.7,-1.9 -1,-2.9 -0.5,-1.9 -1,-3.6 -1.5,-5.2 -0.2,-0.7 -0.4,-1.5 -0.5,-2.1 -0.1,-0.6 -0.2,-1.2 -0.2,-1.7 -0.1,-1 -0.2,-1.5 -0.2,-1.5 0,0 0.1,0.5 0.4,1.5 0.1,0.5 0.2,1 0.4,1.6 0.2,0.6 0.4,1.3 0.6,2.1 0.5,1.5 1,3.3 1.6,5.2 0.2,1 0.6,1.9 1,2.9 0.4,1 0.7,1.9 1.1,2.9 0.7,1.9 1.3,4 2.1,5.8 0.6,1.8 1.2,3.6 1.7,5.1 0.8,3.1 1.4,5.2 1.4,5.2 z" id="path875" style="fill:#ffffff"></path>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="lats" class="workout-part" onclick="navigateToWorkout('lats')">   
    <linearGradient x1="330.18829" y1="641.68439" x2="351.65659" y2="641.68439" id="SVGID_8_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop879" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop881" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 425.9,270.8 c -2.9,-4.9 -4,-6.2 -9.4,-3.8 -5.3,2.4 -13.7,2.8 -15.3,2.2 -1.1,-0.4 0.7,7.5 2.5,13.8 -0.1,5.8 -0.9,19.3 -1.9,23 -1.3,4.6 0.2,18.5 4.1,18.1 3.2,-0.4 4.6,-1.2 6.2,-5.1 2.2,-4.6 7.9,-17.6 10.3,-27.6 3,-12.2 6.5,-15.7 3.5,-20.6 z" id="path883" style="fill:url(#SVGID_8_);display:inline"></path>
    <linearGradient x1="366.94119" y1="644.94751" x2="390.91861" y2="644.94751" id="SVGID_9_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop886" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop888" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 460.5,323.9 c 0,0 -8.3,-20.6 -10.8,-35.3 -2.6,-14.7 -6.2,-19.2 -2.7,-24.8 3.5,-5.6 4.7,-7.2 10.4,-3.9 5.7,3.3 15.1,4.1 16.9,3.5 1.8,-0.6 -4.2,19.7 -6.6,24.2 -2.3,4.5 -6,16.9 -7,22.8 -1.1,5.9 0.2,13.5 -0.2,13.5 z" id="path890" style="fill:url(#SVGID_9_);display:inline"></path>
    <g id="g892" style="display:inline">
      <path d="m 465.1,264 c 0,0 0,0.7 0.1,1.9 0,0.6 0.2,1.2 0.4,1.9 0.1,0.7 0.4,1.5 0.6,2.1 0.1,0.4 0.2,0.7 0.5,1 0.1,0.4 0.4,0.6 0.5,1 0.1,0.4 0.4,0.6 0.5,0.8 0.1,0.2 0.4,0.5 0.6,0.7 0.4,0.5 0.7,0.7 1,1 0.2,0.2 0.4,0.4 0.4,0.4 0,0 -0.1,-0.1 -0.5,-0.2 -0.2,-0.1 -0.7,-0.4 -1.1,-0.9 -0.2,-0.2 -0.5,-0.4 -0.7,-0.6 -0.2,-0.2 -0.5,-0.5 -0.7,-0.9 -0.5,-0.6 -0.9,-1.3 -1.1,-2.1 -0.2,-0.7 -0.5,-1.5 -0.6,-2.2 -0.1,-0.7 -0.1,-1.5 -0.1,-1.9 -0.1,-1.3 0.2,-2 0.2,-2 z" id="path894" style="fill:#ffffff"></path>
    </g>
    <g id="g896" style="display:inline">
      <path d="m 468.5,275.9 c 0,0 -0.1,0.5 -0.5,1.5 -0.1,0.5 -0.4,1.1 -0.5,1.7 -0.2,0.6 -0.4,1.5 -0.7,2.2 -0.6,1.6 -1.3,3.5 -2.1,5.5 -0.8,2 -1.6,4.1 -2.4,6.2 -0.5,1.1 -0.9,2.1 -1.2,3.2 -0.3,1.1 -0.7,2.1 -1.1,3.2 -0.4,1 -0.6,2.1 -0.9,2.9 -0.2,1 -0.5,1.8 -0.7,2.7 -0.2,0.9 -0.4,1.6 -0.5,2.3 -0.1,0.7 -0.2,1.2 -0.4,1.7 -0.2,1 -0.4,1.6 -0.4,1.6 0,0 0.1,-0.6 0.2,-1.6 0.1,-0.5 0.1,-1.1 0.2,-1.8 0.1,-0.7 0.1,-1.5 0.4,-2.3 0.2,-0.9 0.4,-1.7 0.6,-2.7 0.2,-1 0.5,-1.9 0.9,-2.9 0.4,-1 0.7,-2.1 1,-3.2 0.4,-1.1 0.7,-2.2 1.2,-3.2 0.9,-2.1 1.7,-4.2 2.4,-6.2 0.9,-1.9 1.6,-3.8 2.2,-5.3 0.4,-0.7 0.6,-1.6 0.9,-2.2 0.2,-0.6 0.5,-1.2 0.6,-1.7 0.7,-1.1 0.8,-1.6 0.8,-1.6 z" id="path898" style="fill:#ffffff"></path>
    </g>
    <g id="g900" style="display:inline">
      <path d="m 463.7,270.6 c 0,0 -0.9,0.5 -2.3,1.1 -1.3,0.6 -3.2,1.5 -5.1,2.2 -1.8,0.7 -3.8,1.6 -5.1,2.1 -1.5,0.5 -2.4,0.9 -2.4,0.9 0,0 0.9,-0.5 2.3,-1.1 1.3,-0.6 3.2,-1.5 5.1,-2.2 1.8,-0.7 3.8,-1.6 5.1,-2.1 1.5,-0.6 2.4,-0.9 2.4,-0.9 z" id="path902" style="fill:#ffffff"></path>
    </g>
    <g id="g904" style="display:inline">
      <path d="m 463.9,264.4 c 0,0 -0.2,0 -0.6,-0.1 -0.4,-0.1 -0.9,-0.1 -1.6,-0.4 -0.6,-0.1 -1.3,-0.4 -2.2,-0.6 -0.7,-0.2 -1.6,-0.5 -2.4,-0.7 -0.9,-0.2 -1.6,-0.6 -2.4,-0.9 -0.7,-0.2 -1.5,-0.5 -2.1,-0.7 -0.4,-0.1 -0.6,-0.1 -0.9,-0.2 -0.2,0 -0.5,0 -0.6,0 -0.4,0 -0.6,0 -0.6,0 0,0 0.2,-0.1 0.6,-0.1 0.2,0 0.4,0 0.7,0 0.2,0 0.6,0 0.9,0.1 1.3,0.2 2.9,0.9 4.6,1.3 0.9,0.2 1.6,0.6 2.4,0.9 0.7,0.2 1.5,0.5 2.1,0.7 1.2,0.4 2.1,0.7 2.1,0.7 z" id="path906" style="fill:#ffffff"></path>
    </g>
    <g id="g908" style="display:inline">
      <path d="m 463.6,267.2 c 0,0 -1,0.1 -2.4,0.2 -0.7,0 -1.6,0.1 -2.5,0.1 -0.9,0 -1.9,0.1 -2.9,0.1 -1,0 -1.9,0.1 -2.9,0.1 -1,0 -1.8,0 -2.5,0 -1.5,0 -2.4,0 -2.4,0 0,0 1,-0.1 2.4,-0.4 1.5,-0.1 3.4,-0.2 5.5,-0.4 1.9,0 4,-0.1 5.5,-0.1 1.1,0.4 2.2,0.4 2.2,0.4 z" id="path910" style="fill:#ffffff"></path>
    </g>
    <g id="g912" style="display:inline">
      <path d="m 465.7,273.5 c 0,0 -0.9,1.1 -2.1,2.7 -1.2,1.6 -2.9,3.8 -4.6,5.8 -1.7,2.1 -3.4,4.2 -4.7,5.7 -1.3,1.6 -2.2,2.6 -2.2,2.6 0,0 0.9,-1.1 2.1,-2.7 1.2,-1.6 2.9,-3.8 4.6,-5.8 1.7,-2.1 3.4,-4.2 4.7,-5.7 1.3,-1.6 2.2,-2.6 2.2,-2.6 z" id="path914" style="fill:#ffffff"></path>
    </g>
    <g id="g916" style="display:inline">
      <path d="m 466.5,274.2 c 0,0 -0.9,1.3 -2.1,3.2 -1.2,1.9 -2.9,4.4 -4.6,6.9 -1.7,2.4 -3.4,5 -4.7,6.8 -1.3,1.8 -2.3,3 -2.3,3 0,0 0.9,-1.3 2.1,-3.2 1.2,-1.9 2.9,-4.4 4.6,-6.9 1.7,-2.4 3.4,-5 4.7,-6.8 1.5,-1.8 2.3,-3 2.3,-3 z" id="path918" style="fill:#ffffff"></path>
    </g>
    <g id="g920" style="display:inline">
      <path d="m 467.4,275.2 c 0,0 -0.9,1.6 -2.1,3.9 -0.6,1.1 -1.3,2.4 -2.1,3.9 -0.7,1.5 -1.6,2.9 -2.4,4.5 -0.9,1.6 -1.6,3 -2.3,4.5 -0.7,1.5 -1.3,2.8 -1.9,4 -0.6,1.2 -1,2.2 -1.2,2.9 -0.2,0.7 -0.5,1.1 -0.5,1.1 0,0 0.1,-0.4 0.4,-1.1 0.2,-0.7 0.5,-1.8 1.1,-2.9 0.5,-1.2 1.1,-2.7 1.8,-4.1 0.7,-1.5 1.5,-3 2.3,-4.6 1.6,-3 3.3,-6.1 4.6,-8.4 1.4,-2.3 2.3,-3.7 2.3,-3.7 z" id="path922" style="fill:#ffffff"></path>
    </g>
    <g id="g924" style="display:inline">
      <path d="m 465.1,272.5 c 0,0 -0.9,0.8 -2.1,2.2 -0.6,0.6 -1.5,1.5 -2.2,2.2 -0.9,0.8 -1.7,1.7 -2.6,2.5 -0.9,0.8 -1.8,1.7 -2.6,2.6 -0.9,0.7 -1.6,1.6 -2.3,2.2 -1.3,1.2 -2.3,2.1 -2.3,2.1 0,0 0.9,-1 2.1,-2.3 1.2,-1.3 3,-3 4.7,-4.9 1.8,-1.7 3.5,-3.4 5,-4.6 1.3,-1.1 2.3,-2 2.3,-2 z" id="path926" style="fill:#ffffff"></path>
    </g>
    <g id="g928" style="display:inline">
      <path d="m 464.1,271.8 c 0,0 -0.9,0.6 -2.2,1.5 -0.6,0.5 -1.5,1 -2.2,1.5 -0.9,0.5 -1.7,1.1 -2.5,1.7 -0.8,0.6 -1.8,1.1 -2.6,1.7 -0.9,0.5 -1.6,1 -2.3,1.5 -1.3,0.8 -2.2,1.5 -2.2,1.5 0,0 0.9,-0.7 2.1,-1.7 0.6,-0.5 1.3,-1.1 2.2,-1.6 0.9,-0.6 1.7,-1.1 2.6,-1.7 1.8,-1.2 3.5,-2.2 5,-3 1.2,-0.9 2.1,-1.4 2.1,-1.4 z" id="path930" style="fill:#ffffff"></path>
    </g>
    <g id="g932" style="display:inline">
      <path d="m 448.6,273 c 0,0 0.9,-0.4 2.2,-0.7 1.3,-0.4 3.2,-0.9 5,-1.3 1.8,-0.5 3.6,-0.8 5.1,-1.1 1.3,-0.2 2.3,-0.4 2.3,-0.4 0,0 -0.9,0.2 -2.3,0.7 -1.3,0.4 -3.2,0.8 -5,1.3 -1,0.2 -1.8,0.5 -2.7,0.6 -0.9,0.2 -1.7,0.4 -2.3,0.5 -1.4,0.3 -2.3,0.4 -2.3,0.4 z" id="path934" style="fill:#ffffff"></path>
    </g>
    <g id="g936" style="display:inline">
      <path d="m 463.4,268.1 c 0,0 -1,0.2 -2.4,0.5 -1.4,0.3 -3.3,0.5 -5.2,0.7 -1.9,0.2 -3.8,0.5 -5.2,0.6 -1.5,0.1 -2.4,0.1 -2.4,0.1 0,0 1,-0.2 2.4,-0.5 1.5,-0.2 3.3,-0.5 5.2,-0.7 1.9,-0.2 3.8,-0.5 5.2,-0.6 1.4,0.1 2.4,-0.1 2.4,-0.1 z" id="path938" style="fill:#ffffff"></path>
    </g>
    <g id="g940" style="display:inline">
      <path d="m 448.3,265.7 c 0,0 1,0 2.3,0 1.5,0 3.3,0 5.1,0.1 1.8,0.1 3.8,0.2 5.1,0.4 1.5,0.1 2.3,0.2 2.3,0.2 0,0 -1,0 -2.3,0 -1.5,0 -3.3,0 -5.1,-0.1 -1.8,-0.1 -3.8,-0.2 -5.1,-0.4 -1.4,-0.1 -2.3,-0.2 -2.3,-0.2 z" id="path942" style="fill:#ffffff"></path>
    </g>
    <g id="g944" style="display:inline">
      <path d="m 449.9,263.2 c 0,0 0.9,0 2.1,0.1 1.2,0.1 2.9,0.4 4.6,0.6 0.9,0.1 1.7,0.4 2.4,0.5 0.7,0.1 1.5,0.4 2.1,0.6 1.2,0.4 2.1,0.6 2.1,0.6 0,0 -0.9,-0.1 -2.1,-0.4 -0.6,-0.1 -1.3,-0.2 -2.2,-0.5 -0.7,-0.1 -1.6,-0.2 -2.4,-0.4 -0.9,-0.1 -1.7,-0.4 -2.4,-0.5 -0.7,-0.1 -1.5,-0.2 -2.2,-0.4 -1.2,-0.1 -2,-0.2 -2,-0.2 z" id="path946" style="fill:#ffffff"></path>
    </g>
    <g id="g948" style="display:inline">
      <path d="m 466,264.2 c 0,0 0.4,0 1,0 0.6,0 1.3,0.1 2.2,0.1 0.7,0.1 1.6,0.1 2.2,0.1 0.6,0 1,0.1 1,0.1 0,0 -0.4,0 -1,0.1 -0.2,0 -0.6,0.1 -1,0 -0.4,0 -0.7,0 -1.1,0 -0.7,0 -1.6,-0.1 -2.2,-0.2 -0.7,0 -1.1,-0.2 -1.1,-0.2 z" id="path950" style="fill:#ffffff"></path>
    </g>
    <g id="g952" style="display:inline">
      <path d="m 469.4,273.2 c 0,0 0.2,-0.4 0.5,-1 0.3,-0.6 0.6,-1.5 1,-2.2 0.1,-0.4 0.4,-0.9 0.5,-1.2 0.1,-0.4 0.2,-0.7 0.4,-1.1 0.2,-0.6 0.5,-1 0.5,-1 0,0 -0.1,0.5 -0.2,1.1 -0.1,0.6 -0.4,1.6 -0.7,2.3 -0.2,0.4 -0.4,0.9 -0.5,1.2 -0.1,0.4 -0.4,0.7 -0.6,1 -0.5,0.6 -0.9,0.9 -0.9,0.9 z" id="path954" style="fill:#ffffff"></path>
    </g>
    <g id="g956" style="display:inline">
      <path d="m 468.1,271.7 c 0,0 0.2,-0.4 0.5,-0.9 0.2,-0.5 0.7,-1.2 1.2,-1.8 0.5,-0.6 1,-1.3 1.3,-1.8 0.3,-0.5 0.6,-0.7 0.6,-0.7 0,0 -0.2,0.4 -0.5,0.9 -0.2,0.5 -0.7,1.2 -1.2,1.8 -0.5,0.6 -1,1.3 -1.3,1.8 -0.3,0.3 -0.6,0.7 -0.6,0.7 z" id="path958" style="fill:#ffffff"></path>
    </g>
    <g id="g960" style="display:inline">
      <path d="m 467.1,269.7 c 0,0 0.2,-0.2 0.6,-0.6 0.4,-0.4 0.9,-0.8 1.5,-1.3 0.5,-0.5 1.1,-0.9 1.5,-1.2 0.4,-0.4 0.7,-0.5 0.7,-0.5 0,0 -0.2,0.2 -0.6,0.6 -0.4,0.4 -0.9,0.8 -1.5,1.3 -0.5,0.5 -1.1,0.8 -1.5,1.2 -0.4,0.3 -0.7,0.5 -0.7,0.5 z" id="path962" style="fill:#ffffff"></path>
    </g>
    <g id="g964" style="display:inline">
      <path d="m 466.5,267.5 c 0,0 0.2,-0.1 0.5,-0.2 0.4,-0.1 0.7,-0.4 1.2,-0.6 0.5,-0.1 0.9,-0.4 1.2,-0.5 0.3,-0.1 0.6,-0.1 0.6,-0.1 0,0 -0.2,0.1 -0.5,0.2 -0.4,0.1 -0.7,0.4 -1.2,0.6 -0.5,0.1 -0.9,0.4 -1.2,0.5 -0.3,0.1 -0.6,0.1 -0.6,0.1 z" id="path966" style="fill:#ffffff"></path>
    </g>
    <g id="g968" style="display:inline">
      <path d="m 466.2,265.8 c 0,0 0.4,-0.1 1,-0.2 0.6,-0.1 1.3,-0.2 2.1,-0.2 0.7,-0.1 1.5,-0.1 2.1,-0.1 0.6,0 1,0 1,0 0,0 -0.4,0.1 -1,0.2 -0.6,0.1 -1.3,0.2 -2.1,0.2 -0.7,0.1 -1.5,0.1 -2.1,0.1 -0.6,0 -1,0 -1,0 z" id="path970" style="fill:#ffffff"></path>
    </g>
    <g id="g972" style="display:inline">
      <path d="m 409.6,270.2 c 0,0 0.2,0.6 0.1,1.7 0,0.5 0,1.1 -0.1,1.7 -0.1,0.6 -0.4,1.2 -0.6,1.9 -0.2,0.6 -0.6,1.2 -1.1,1.7 -0.2,0.2 -0.5,0.5 -0.6,0.6 -0.2,0.2 -0.5,0.4 -0.6,0.5 -0.4,0.4 -0.7,0.5 -1.1,0.6 -0.2,0.1 -0.4,0.2 -0.4,0.2 0,0 0.1,-0.1 0.4,-0.4 0.2,-0.1 0.5,-0.5 0.9,-0.9 0.1,-0.1 0.4,-0.4 0.5,-0.6 0.1,-0.2 0.4,-0.5 0.5,-0.7 0.4,-0.5 0.7,-1 1,-1.6 0.2,-0.6 0.5,-1.2 0.6,-1.7 0.1,-0.6 0.4,-1.1 0.4,-1.6 0.1,-0.8 0.1,-1.4 0.1,-1.4 z" id="path974" style="fill:#ffffff"></path>
    </g>
    <g id="g976" style="display:inline">
      <path d="m 406.1,280 c 0,0 0.1,0.5 0.5,1.2 0.1,0.4 0.4,0.9 0.5,1.5 0.2,0.6 0.4,1.2 0.7,1.8 0.5,1.3 1.1,2.9 1.8,4.6 0.6,1.7 1.3,3.5 1.9,5.3 0.4,0.9 0.7,1.8 1,2.7 0.2,1 0.5,1.8 0.9,2.7 0.2,0.8 0.4,1.7 0.6,2.5 0.1,0.9 0.4,1.6 0.5,2.3 0.2,0.7 0.2,1.3 0.2,1.9 0.1,0.6 0.1,1.1 0.1,1.5 0.1,0.8 0.1,1.3 0.1,1.3 0,0 -0.1,-0.5 -0.2,-1.3 -0.1,-0.4 -0.1,-1 -0.2,-1.5 -0.1,-0.6 -0.1,-1.2 -0.4,-1.9 -0.1,-0.7 -0.4,-1.5 -0.6,-2.3 -0.2,-0.9 -0.4,-1.7 -0.7,-2.5 -0.2,-0.9 -0.5,-1.7 -0.9,-2.7 -0.2,-0.8 -0.6,-1.8 -1,-2.7 -0.6,-1.8 -1.3,-3.6 -1.9,-5.3 -0.6,-1.7 -1.2,-3.3 -1.6,-4.6 -0.2,-0.7 -0.4,-1.3 -0.6,-1.9 -0.1,-0.6 -0.2,-1.1 -0.4,-1.5 -0.2,-0.6 -0.3,-1.1 -0.3,-1.1 z" id="path978" style="fill:#ffffff"></path>
    </g>
    <g id="g980" style="display:inline">
      <path d="m 410.6,275.8 c 0,0 0.9,0.2 2.1,0.8 1.2,0.5 2.9,1.2 4.6,1.9 1.6,0.7 3.3,1.5 4.5,2.1 1.2,0.6 1.9,1.1 1.9,1.1 0,0 -0.9,-0.2 -2.1,-0.9 -1.2,-0.5 -2.9,-1.2 -4.6,-1.9 -1.6,-0.7 -3.3,-1.5 -4.5,-2.1 -1.1,-0.6 -1.9,-1 -1.9,-1 z" id="path982" style="fill:#ffffff"></path>
    </g>
    <g id="g984" style="display:inline">
      <path d="m 410.7,270.6 c 0,0 0.7,-0.2 1.8,-0.6 0.6,-0.1 1.2,-0.4 1.9,-0.5 0.7,-0.1 1.5,-0.4 2.2,-0.6 0.7,-0.2 1.5,-0.4 2.2,-0.5 0.7,-0.2 1.3,-0.2 1.9,-0.4 0.2,0 0.6,0 0.9,0 0.2,0 0.5,0 0.6,0.1 0.4,0.1 0.5,0.1 0.5,0.1 0,0 -0.2,0 -0.5,0 -0.1,0 -0.4,0 -0.6,0 -0.2,0 -0.5,0.1 -0.7,0.1 -1.1,0.2 -2.5,0.7 -4.1,1.1 -0.7,0.1 -1.5,0.4 -2.2,0.5 -0.7,0.1 -1.3,0.2 -1.9,0.4 -1.2,0.1 -2,0.3 -2,0.3 z" id="path986" style="fill:#ffffff"></path>
    </g>
    <g id="g988" style="display:inline">
      <path d="m 410.8,273 c 0,0 0.9,0 2.2,0 1.3,0 3.2,0.1 4.9,0.2 1.8,0.1 3.5,0.4 4.9,0.6 1.4,0.2 2.2,0.4 2.2,0.4 0,0 -0.9,0 -2.2,-0.1 -0.6,-0.1 -1.5,-0.1 -2.3,-0.1 -0.9,-0.1 -1.7,-0.1 -2.6,-0.2 -0.9,-0.1 -1.8,-0.1 -2.6,-0.2 -0.9,-0.1 -1.6,-0.1 -2.3,-0.2 -1.2,-0.3 -2.2,-0.4 -2.2,-0.4 z" id="path990" style="fill:#ffffff"></path>
    </g>
    <g id="g992" style="display:inline">
      <path d="m 408.7,278.1 c 0,0 0.7,0.9 1.9,2.2 1.1,1.3 2.7,3.2 4.1,5 1.5,1.8 2.9,3.8 3.9,5.1 1.1,1.5 1.7,2.4 1.7,2.4 0,0 -0.7,-0.9 -1.9,-2.2 -1.1,-1.3 -2.7,-3.2 -4.1,-5 -1.5,-1.8 -2.9,-3.8 -3.9,-5.1 -1.1,-1.4 -1.7,-2.4 -1.7,-2.4 z" id="path994" style="fill:#ffffff"></path>
    </g>
    <g id="g996" style="display:inline">
      <path d="m 407.9,278.7 c 0,0 0.7,1.1 1.9,2.7 1.1,1.6 2.5,3.8 4,5.8 1.5,2.2 2.8,4.4 3.9,5.9 1,1.7 1.7,2.8 1.7,2.8 0,0 -0.7,-1.1 -1.9,-2.7 -1.1,-1.6 -2.5,-3.8 -4,-5.8 -1.5,-2.2 -2.8,-4.4 -3.9,-6 -1.1,-1.6 -1.7,-2.7 -1.7,-2.7 z" id="path998" style="fill:#ffffff"></path>
    </g>
    <g id="g1000" style="display:inline">
      <path d="m 407,279.6 c 0,0 0.9,1.2 1.9,3.2 1.1,1.9 2.5,4.5 3.9,7.2 0.7,1.3 1.3,2.7 1.8,3.9 0.6,1.2 1,2.5 1.5,3.5 0.5,1 0.6,1.9 0.9,2.6 0.2,0.6 0.2,1 0.2,1 0,0 -0.1,-0.4 -0.4,-1 -0.2,-0.6 -0.5,-1.5 -1,-2.4 -0.5,-0.9 -1,-2.2 -1.6,-3.4 -0.6,-1.2 -1.2,-2.5 -1.9,-3.9 -0.6,-1.3 -1.3,-2.7 -1.9,-3.9 -0.6,-1.2 -1.2,-2.4 -1.7,-3.4 -0.9,-2.2 -1.7,-3.4 -1.7,-3.4 z" id="path1002" style="fill:#ffffff"></path>
    </g>
    <g id="g1004" style="display:inline">
      <path d="m 409.2,277.4 c 0,0 0.9,0.7 2.1,1.8 1.2,1.1 2.8,2.6 4.2,4.1 1.5,1.6 3,3 4.1,4.2 1.1,1.2 1.8,2.1 1.8,2.1 0,0 -0.9,-0.7 -1.9,-1.8 -0.6,-0.6 -1.2,-1.2 -1.9,-1.9 -0.7,-0.7 -1.5,-1.5 -2.3,-2.2 -0.7,-0.7 -1.5,-1.6 -2.2,-2.2 -0.7,-0.7 -1.3,-1.5 -1.9,-1.9 -1.3,-1.4 -2,-2.2 -2,-2.2 z" id="path1006" style="fill:#ffffff"></path>
    </g>
    <g id="g1008" style="display:inline">
      <path d="m 410.1,276.8 c 0,0 0.9,0.5 2.1,1.2 1.2,0.7 2.8,1.7 4.4,2.8 0.7,0.5 1.6,1.1 2.3,1.6 0.7,0.5 1.3,1 1.9,1.5 1.1,0.9 1.8,1.5 1.8,1.5 0,0 -0.9,-0.5 -1.9,-1.3 -0.6,-0.4 -1.2,-0.9 -1.9,-1.3 -0.7,-0.4 -1.5,-1 -2.3,-1.5 -0.7,-0.5 -1.6,-1.1 -2.3,-1.6 -0.7,-0.5 -1.3,-1 -1.9,-1.3 -1.4,-1 -2.2,-1.6 -2.2,-1.6 z" id="path1010" style="fill:#ffffff"></path>
    </g>
    <g id="g1012" style="display:inline">
      <path d="m 424.1,278.5 c 0,0 -0.9,-0.1 -2.1,-0.5 -1.2,-0.2 -2.9,-0.7 -4.5,-1.2 -1.6,-0.5 -3.3,-1 -4.5,-1.3 -1.2,-0.3 -1.9,-0.7 -1.9,-0.7 0,0 0.9,0.1 2.1,0.5 1.2,0.2 2.9,0.7 4.5,1.2 1.6,0.5 3.3,1 4.5,1.3 1.1,0.4 1.9,0.7 1.9,0.7 z" id="path1014" style="fill:#ffffff"></path>
    </g>
    <g id="g1016" style="display:inline">
      <path d="m 411,273.8 c 0,0 0.9,0.1 2.2,0.2 1.3,0.1 3,0.4 4.7,0.7 1.7,0.2 3.4,0.6 4.7,0.8 1.3,0.2 2.2,0.5 2.2,0.5 0,0 -0.9,-0.1 -2.2,-0.2 -1.3,-0.1 -3,-0.4 -4.7,-0.7 -1.7,-0.2 -3.4,-0.6 -4.7,-0.8 -1.3,-0.3 -2.2,-0.5 -2.2,-0.5 z" id="path1018" style="fill:#ffffff"></path>
    </g>
    <g id="g1020" style="display:inline">
      <path d="m 424.6,272.3 c 0,0 -0.9,0.1 -2.1,0.1 -1.2,0 -2.9,0.1 -4.6,0.1 -1.7,0 -3.4,-0.1 -4.6,-0.1 -1.2,-0.1 -2.1,-0.1 -2.1,-0.1 0,0 0.9,-0.1 2.1,-0.1 1.2,0 2.9,-0.1 4.6,-0.1 1.7,0 3.4,0.1 4.6,0.1 1.3,0.1 2.1,0.1 2.1,0.1 z" id="path1022" style="fill:#ffffff"></path>
    </g>
    <g id="g1024" style="display:inline">
      <path d="m 423.3,270.1 c 0,0 -0.7,0.1 -1.9,0.2 -0.6,0.1 -1.2,0.2 -1.9,0.2 -0.7,0.1 -1.5,0.1 -2.2,0.2 -0.7,0.1 -1.6,0.1 -2.2,0.2 -0.7,0.1 -1.3,0.2 -1.9,0.2 -1.1,0.1 -1.9,0.2 -1.9,0.2 0,0 0.7,-0.2 1.8,-0.5 0.6,-0.1 1.2,-0.4 1.9,-0.4 0.7,-0.1 1.5,-0.2 2.2,-0.4 1.6,-0.2 3,-0.2 4.2,-0.4 1.2,0.5 1.9,0.5 1.9,0.5 z" id="path1026" style="fill:#ffffff"></path>
    </g>
    <g id="g1028" style="display:inline">
      <path d="m 408.7,270.4 c 0,0 -0.4,0.1 -0.9,0.1 -0.5,0 -1.2,0.1 -1.9,0.1 -0.4,0 -0.7,0 -1.1,0 -0.4,0 -0.6,-0.1 -0.9,-0.1 -0.5,-0.1 -0.9,-0.1 -0.9,-0.1 0,0 0.4,0 0.9,0 0.5,0 1.2,0 1.9,0 0.7,0 1.5,0 1.9,0 0.4,0 1,0 1,0 z" id="path1030" style="fill:#ffffff"></path>
    </g>
    <g id="g1032" style="display:inline">
      <path d="m 405.3,277.9 c 0,0 -0.2,-0.2 -0.5,-0.9 -0.1,-0.2 -0.4,-0.5 -0.5,-0.8 -0.1,-0.3 -0.2,-0.7 -0.5,-1 -0.4,-0.7 -0.5,-1.5 -0.6,-2.1 -0.1,-0.6 -0.2,-1 -0.2,-1 0,0 0.1,0.4 0.4,0.8 0.1,0.2 0.2,0.6 0.4,1 0.1,0.4 0.2,0.7 0.4,1 0.2,0.7 0.5,1.5 0.7,1.9 0.2,0.7 0.4,1.1 0.4,1.1 z" id="path1034" style="fill:#ffffff"></path>
    </g>
    <g id="g1036" style="display:inline">
      <path d="m 406.5,276.5 c 0,0 -0.2,-0.2 -0.5,-0.6 -0.4,-0.4 -0.7,-1 -1.1,-1.6 -0.4,-0.6 -0.7,-1.2 -1,-1.6 -0.2,-0.5 -0.4,-0.7 -0.4,-0.7 0,0 0.2,0.2 0.5,0.6 0.4,0.4 0.7,1 1.1,1.6 0.4,0.6 0.7,1.2 1,1.6 0.3,0.4 0.4,0.7 0.4,0.7 z" id="path1038" style="fill:#ffffff"></path>
    </g>
    <g id="g1040" style="display:inline">
      <path d="m 407.5,274.8 c 0,0 -0.2,-0.1 -0.6,-0.5 -0.4,-0.2 -0.9,-0.7 -1.3,-1.1 -0.5,-0.4 -0.9,-0.9 -1.2,-1.2 -0.3,-0.3 -0.5,-0.6 -0.5,-0.6 0,0 0.2,0.1 0.6,0.5 0.4,0.2 0.9,0.7 1.3,1.1 0.5,0.4 0.9,0.9 1.2,1.2 0.3,0.4 0.5,0.6 0.5,0.6 z" id="path1042" style="fill:#ffffff"></path>
    </g>
    <g id="g1044" style="display:inline">
      <path d="m 408.2,273.1 c 0,0 -0.2,0 -0.5,-0.1 -0.4,-0.1 -0.7,-0.2 -1.1,-0.4 -0.4,-0.1 -0.7,-0.4 -1.1,-0.5 -0.2,-0.1 -0.5,-0.2 -0.5,-0.2 0,0 0.2,0 0.5,0.1 0.4,0.1 0.7,0.2 1.1,0.4 0.4,0.1 0.7,0.4 1.1,0.5 0.3,0.1 0.5,0.2 0.5,0.2 z" id="path1046" style="fill:#ffffff"></path>
    </g>
    <g id="g1048" style="display:inline">
      <path d="m 408.5,271.8 c 0,0 -0.4,0 -0.9,0 -0.5,0 -1.2,-0.1 -1.8,-0.2 -0.7,-0.1 -1.3,-0.2 -1.8,-0.4 -0.5,-0.1 -0.9,-0.2 -0.9,-0.2 0,0 0.4,0 0.9,0 0.5,0 1.2,0.1 1.8,0.2 0.7,0.1 1.3,0.2 1.8,0.4 0.6,0.1 0.9,0.2 0.9,0.2 z" id="path1050" style="fill:#ffffff"></path>
    </g>
    <g id="g1052" style="display:inline">
      <path d="m 405.8,285.1 c 0,0 0.5,1.7 1.2,4.4 0.7,2.7 1.7,6.1 2.4,9.6 0.4,1.8 0.9,3.5 1.2,5.2 0.4,1.7 0.6,3.3 0.9,4.6 0.4,2.7 0.7,4.5 0.7,4.5 0,0 -0.4,-1.8 -1,-4.4 -0.2,-1.3 -0.5,-2.9 -1,-4.5 -0.4,-1.7 -0.9,-3.4 -1.2,-5.2 -0.4,-1.8 -0.7,-3.5 -1.2,-5.2 -0.4,-1.7 -0.7,-3.2 -1.1,-4.5 -0.4,-2.6 -0.9,-4.5 -0.9,-4.5 z" id="path1054" style="fill:#ffffff"></path>
    </g>
    <g id="g1056" style="display:inline">
      <path d="m 405.8,291.7 c 0,0 0.5,1.7 1,4.4 0.6,2.7 1.2,6.1 1.7,9.7 0.2,1.8 0.5,3.5 0.6,5.2 0.2,1.7 0.2,3.3 0.2,4.6 0,0.6 0,1.3 0,1.8 0,0.5 0,1 0,1.5 0,0.7 0,1.2 0,1.2 0,0 0,-0.5 0,-1.2 0,-0.7 0,-1.9 -0.1,-3.3 -0.1,-1.3 -0.2,-2.9 -0.5,-4.5 -0.2,-1.7 -0.4,-3.4 -0.7,-5.2 -0.2,-1.8 -0.5,-3.5 -0.7,-5.2 -0.2,-1.7 -0.5,-3.2 -0.7,-4.5 -0.4,-2.7 -0.8,-4.5 -0.8,-4.5 z" id="path1058" style="fill:#ffffff"></path>
    </g>
    <g id="g1060" style="display:inline">
      <path d="m 406.5,322.4 c 0,0 -0.1,-1.5 -0.2,-3.8 -0.1,-1.1 -0.1,-2.4 -0.2,-3.9 0,-1.5 -0.1,-2.9 -0.2,-4.5 -0.1,-3 -0.4,-6.1 -0.4,-8.4 -0.1,-2.3 -0.1,-3.8 -0.1,-3.8 0,0 0.1,1.5 0.4,3.8 0.2,2.3 0.4,5.3 0.6,8.4 0.1,1.6 0.1,3 0.2,4.5 0,1.5 0,2.8 0.1,3.9 -0.2,2.2 -0.2,3.8 -0.2,3.8 z" id="path1062" style="fill:#ffffff"></path>
    </g>
    <g id="g1064" style="display:inline">
      <path d="m 404.1,319.5 c 0,0 -0.1,-1 -0.1,-2.4 -0.1,-1.5 -0.1,-3.4 -0.1,-5.5 0,-1.9 0,-4 0,-5.5 0,-1.5 0.1,-2.4 0.1,-2.4 0,0 0.1,1 0.1,2.4 0.1,1.5 0.1,3.4 0.1,5.5 0,1.9 0,4 0,5.5 -0.1,1.4 -0.1,2.4 -0.1,2.4 z" id="path1066" style="fill:#ffffff"></path>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="mid_back" class="workout-part" onclick="navigateToWorkout('mid_back')">   
    <linearGradient x1="327.34439" y1="679.70343" x2="390.8905" y2="679.70343" id="SVGID_10_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop1070" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop1072" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 451.8,255.3 c -4.9,-0.5 -11.7,15.1 -14.7,13.4 -3,-1.7 -7.8,-15.8 -12.6,-9.8 -4.9,6 -22.5,13.5 -23.6,7 -1.1,-6.4 -2.5,-10.4 -3.5,-15.2 -1,-4.7 15.2,-16.9 19.9,-18.2 4.7,-1.3 10,-3.8 14,-3.5 4,0.2 14.6,0.7 20.2,3 5.6,2.3 22.6,11 22.9,16.5 0.4,5.5 -0.1,12.4 -0.1,12.4 0,0 -3.5,0.2 -11.5,-2.2 -4.9,-1.4 -6.1,-2.9 -11,-3.4 z" id="path1074" style="fill:url(#SVGID_10_);display:inline"></path>
    <g id="g1076" style="display:inline">
      <path d="m 419.8,233 c 0,0 0.6,-0.4 1.6,-0.7 1,-0.5 2.3,-0.8 3.6,-1.2 0.4,-0.1 0.7,-0.1 1,-0.2 0.4,-0.1 0.6,-0.1 1,-0.2 0.4,0 0.6,-0.1 1,-0.1 0.2,0 0.6,-0.1 0.9,-0.1 1.1,0 1.7,0 1.7,0 0,0 -0.7,0.1 -1.7,0.2 -0.5,0.1 -1.1,0.2 -1.7,0.4 -0.4,0 -0.6,0.1 -1,0.2 -0.4,0.1 -0.6,0.1 -1,0.2 -0.6,0.1 -1.3,0.4 -1.9,0.5 -0.6,0.2 -1.2,0.4 -1.7,0.5 -1.2,0.4 -1.8,0.5 -1.8,0.5 z" id="path1078" style="fill:#ffffff"></path>
    </g>
    <g id="g1080" style="display:inline">
      <path d="m 427.4,255.8 c 0,0 0.1,-0.1 0.5,-0.1 0.1,0 0.4,-0.1 0.6,0 0.2,0 0.5,0.1 0.9,0.1 0.1,0.1 0.2,0.1 0.5,0.2 0.1,0.1 0.2,0.2 0.5,0.2 0.4,0.2 0.5,0.5 0.7,0.7 0.5,0.6 1,1.2 1.3,1.9 0.9,1.3 1.7,2.7 2.3,3.8 0.4,0.5 0.6,1 0.7,1.2 0.2,0.2 0.4,0.5 0.4,0.5 0,0 -0.1,-0.1 -0.4,-0.4 -0.1,-0.1 -0.2,-0.2 -0.4,-0.5 -0.1,-0.2 -0.4,-0.4 -0.5,-0.6 -0.7,-1 -1.6,-2.3 -2.4,-3.6 -0.5,-0.7 -0.9,-1.3 -1.3,-1.9 -0.2,-0.2 -0.5,-0.6 -0.7,-0.7 -0.1,-0.1 -0.2,-0.2 -0.4,-0.2 -0.1,-0.1 -0.2,-0.1 -0.4,-0.2 -0.2,-0.1 -0.5,-0.2 -0.7,-0.2 -0.2,0 -0.5,0 -0.6,0 -0.3,-0.2 -0.6,-0.2 -0.6,-0.2 z" id="path1082" style="fill:#ffffff"></path>
    </g>
    <g id="g1084" style="display:inline">
      <path d="m 425.6,242.6 c 0,0 0.6,-0.1 1.6,-0.2 0.5,0 1,-0.1 1.6,0 0.6,0 1.2,0.1 1.8,0.1 0.6,0.1 1.2,0.2 1.8,0.5 0.6,0.2 1.1,0.5 1.5,0.7 0.4,0.2 0.7,0.5 1,0.7 0.2,0.2 0.4,0.2 0.4,0.2 0,0 -0.1,-0.1 -0.4,-0.2 -0.2,-0.1 -0.6,-0.4 -1,-0.5 -0.4,-0.2 -1,-0.4 -1.5,-0.5 -0.6,-0.1 -1.1,-0.2 -1.7,-0.4 -1.2,-0.2 -2.4,-0.2 -3.4,-0.4 -1.1,0 -1.7,0 -1.7,0 z" id="path1086" style="fill:#ffffff"></path>
    </g>
    <g id="g1088" style="display:inline">
      <path d="m 426.1,244.1 c 0,0 0.7,-0.1 1.7,-0.1 0.5,0 1.1,0 1.8,0.2 0.6,0.1 1.3,0.4 1.9,0.6 0.4,0.1 0.6,0.2 1,0.5 0.4,0.1 0.6,0.4 0.9,0.5 0.2,0.1 0.5,0.4 0.7,0.6 0.2,0.2 0.5,0.4 0.6,0.6 0.4,0.4 0.6,0.7 0.7,1 0.1,0.2 0.2,0.4 0.2,0.4 0,0 -0.1,-0.1 -0.4,-0.4 -0.1,-0.1 -0.2,-0.2 -0.4,-0.4 -0.1,-0.1 -0.4,-0.2 -0.5,-0.5 -0.4,-0.4 -0.9,-0.7 -1.3,-1.1 -0.2,-0.2 -0.6,-0.4 -0.9,-0.5 -0.2,-0.1 -0.6,-0.2 -1,-0.4 -0.6,-0.2 -1.2,-0.5 -1.9,-0.6 -0.6,-0.1 -1.2,-0.2 -1.7,-0.4 -0.7,0 -1.4,0 -1.4,0 z" id="path1090" style="fill:#ffffff"></path>
    </g>
    <g id="g1092" style="display:inline">
      <path d="m 426.5,245.8 c 0,0 0.7,0 1.7,0.1 1.1,0.1 2.4,0.6 3.6,1.2 0.6,0.4 1.2,0.7 1.7,1.2 0.2,0.2 0.5,0.5 0.7,0.7 0.2,0.2 0.4,0.5 0.5,0.6 0.4,0.4 0.5,0.8 0.6,1.1 0.1,0.3 0.2,0.5 0.2,0.5 0,0 -0.1,-0.1 -0.2,-0.4 -0.1,-0.3 -0.5,-0.6 -0.7,-1 -0.4,-0.4 -0.7,-0.7 -1.2,-1.2 -0.5,-0.4 -1.1,-0.7 -1.7,-1.1 -0.6,-0.4 -1.2,-0.6 -1.8,-0.8 -0.6,-0.2 -1.2,-0.5 -1.7,-0.6 -1.1,-0.2 -1.7,-0.3 -1.7,-0.3 z" id="path1094" style="fill:#ffffff"></path>
    </g>
    <g id="g1096" style="display:inline">
      <path d="m 426.9,248 c 0,0 0.7,0 1.8,0.2 0.5,0.1 1.1,0.4 1.7,0.7 0.4,0.1 0.6,0.4 0.9,0.5 0.4,0.2 0.6,0.5 0.9,0.6 0.6,0.5 1.1,1 1.5,1.6 0.4,0.5 0.7,1.1 1,1.6 0.2,0.5 0.4,0.8 0.6,1.2 0.1,0.2 0.1,0.5 0.1,0.5 0,0 -0.1,-0.1 -0.2,-0.4 -0.1,-0.2 -0.4,-0.6 -0.7,-1.1 -0.2,-0.5 -0.7,-1 -1.1,-1.5 -0.5,-0.5 -1,-1 -1.5,-1.5 -0.2,-0.2 -0.5,-0.5 -0.9,-0.6 -0.2,-0.2 -0.6,-0.4 -0.9,-0.5 -0.6,-0.4 -1.1,-0.6 -1.6,-0.8 -0.8,-0.4 -1.6,-0.5 -1.6,-0.5 z" id="path1098" style="fill:#ffffff"></path>
    </g>
    <g id="g1100" style="display:inline">
      <path d="m 426.9,250.2 c 0,0 0.2,0 0.5,0 0.4,0 0.9,0.1 1.3,0.4 0.2,0.1 0.6,0.2 0.9,0.4 0.4,0.1 0.6,0.4 1,0.5 0.2,0.2 0.6,0.4 1,0.7 0.2,0.2 0.6,0.6 0.9,0.8 0.2,0.2 0.6,0.6 0.7,0.9 0.2,0.4 0.5,0.6 0.6,1 0.2,0.4 0.4,0.6 0.6,0.8 0.1,0.4 0.2,0.6 0.4,0.8 0.5,1.1 0.7,1.8 0.7,1.8 0,0 -0.4,-0.7 -1,-1.7 -0.1,-0.2 -0.2,-0.5 -0.5,-0.8 -0.1,-0.2 -0.4,-0.5 -0.6,-0.9 -0.2,-0.2 -0.4,-0.6 -0.6,-0.8 -0.2,-0.4 -0.5,-0.6 -0.7,-0.8 -0.2,-0.2 -0.5,-0.6 -0.7,-0.9 -0.2,-0.2 -0.6,-0.5 -0.9,-0.6 -0.2,-0.2 -0.6,-0.5 -0.9,-0.6 -0.2,-0.1 -0.6,-0.4 -0.9,-0.5 -0.5,-0.2 -1,-0.4 -1.3,-0.5 -0.3,0 -0.5,0 -0.5,0 z" id="path1102" style="fill:#ffffff"></path>
    </g>
    <g id="g1104" style="display:inline">
      <path d="m 427.2,253 c 0,0 0.2,-0.1 0.5,-0.1 0.4,-0.1 0.9,-0.1 1.5,0.1 0.4,0.1 0.6,0.2 1,0.4 0.2,0.2 0.6,0.5 0.9,0.7 0.2,0.4 0.5,0.6 0.7,1 0.2,0.4 0.5,0.7 0.6,1.1 0.9,1.5 1.7,2.8 2.3,3.9 0.4,0.5 0.6,1 0.7,1.2 0.2,0.2 0.4,0.5 0.4,0.5 0,0 -0.1,-0.1 -0.4,-0.4 -0.2,-0.2 -0.6,-0.6 -1,-1.2 -0.7,-1 -1.6,-2.4 -2.4,-3.8 -0.2,-0.4 -0.4,-0.7 -0.6,-1.1 -0.2,-0.4 -0.5,-0.6 -0.6,-1 -0.2,-0.4 -0.5,-0.5 -0.7,-0.7 -0.2,-0.1 -0.6,-0.4 -0.9,-0.5 -0.6,-0.2 -1.1,-0.2 -1.5,-0.2 -0.4,0 -0.5,0.1 -0.5,0.1 z" id="path1106" style="fill:#ffffff"></path>
    </g>
    <g id="g1108" style="display:inline">
      <path d="m 421.2,234.4 c 0,0 0.5,-0.4 1.5,-0.7 0.5,-0.1 1,-0.4 1.6,-0.5 0.6,-0.1 1.2,-0.2 1.8,-0.5 0.4,0 0.6,-0.1 1,-0.1 0.4,0 0.6,-0.1 1,-0.1 0.6,0 1.2,0 1.6,0 1,0.1 1.6,0.4 1.6,0.4 0,0 -0.6,0 -1.6,0 -0.5,0 -1,0.1 -1.6,0.1 -0.2,0 -0.6,0.1 -0.9,0.1 -0.3,0 -0.6,0.1 -1,0.1 -0.6,0.1 -1.2,0.2 -1.8,0.4 -0.6,0.1 -1.1,0.2 -1.6,0.4 -1,0.3 -1.6,0.4 -1.6,0.4 z" id="path1110" style="fill:#ffffff"></path>
    </g>
    <g id="g1112" style="display:inline">
      <path d="m 422.5,235.8 c 0,0 0.6,-0.2 1.5,-0.5 0.5,-0.1 1,-0.2 1.6,-0.4 0.6,-0.2 1.2,-0.1 1.8,-0.2 0.4,0 0.6,0 1,0 0.2,0 0.6,0 0.9,0 0.3,0 0.6,0.1 0.9,0.1 0.2,0 0.5,0 0.7,0.1 0.9,0.2 1.5,0.5 1.5,0.5 0,0 -0.6,-0.1 -1.5,-0.2 -0.5,0 -1,0 -1.6,-0.1 -0.2,0 -0.6,0 -0.9,0 -0.2,0 -0.6,0 -0.9,0 -0.6,0 -1.2,0.1 -1.8,0.1 -0.6,0.1 -1.1,0.1 -1.6,0.2 -1,0.3 -1.6,0.4 -1.6,0.4 z" id="path1114" style="fill:#ffffff"></path>
    </g>
    <g id="g1116" style="display:inline">
      <path d="m 423.8,237.7 c 0,0 0.6,-0.2 1.5,-0.4 0.5,-0.1 1,-0.1 1.5,-0.2 0.6,0 1.1,-0.1 1.7,-0.1 0.2,0 0.6,0 0.9,0.1 0.2,0 0.6,0 0.9,0.1 0.2,0 0.5,0.1 0.7,0.1 0.2,0.1 0.5,0.1 0.7,0.2 0.9,0.4 1.3,0.6 1.3,0.6 0,0 -0.6,-0.1 -1.5,-0.4 -0.2,-0.1 -0.5,-0.1 -0.7,-0.1 -0.2,0 -0.5,0 -0.7,-0.1 -0.2,0 -0.6,0 -0.9,0 -0.2,0 -0.6,0 -0.9,0 -0.6,0 -1.2,0 -1.7,0 -0.5,0 -1.1,0 -1.5,0.1 -0.7,-0.1 -1.3,0.1 -1.3,0.1 z" id="path1118" style="fill:#ffffff"></path>
    </g>
    <g id="g1120" style="display:inline">
      <path d="m 425,239.4 c 0,0 0.5,-0.1 1.3,-0.2 0.8,-0.1 1.9,-0.1 3,0 0.6,0 1.1,0.1 1.6,0.2 0.5,0.1 1,0.2 1.3,0.4 0.3,0.2 0.7,0.4 1,0.5 0.2,0.1 0.4,0.2 0.4,0.2 0,0 -0.6,-0.1 -1.3,-0.4 -0.4,-0.1 -0.9,-0.1 -1.3,-0.2 -0.5,0 -1.1,-0.1 -1.6,-0.1 -0.6,0 -1.1,-0.1 -1.6,-0.1 -0.5,0 -1,0 -1.5,0 -0.7,-0.3 -1.3,-0.3 -1.3,-0.3 z" id="path1122" style="fill:#ffffff"></path>
    </g>
    <g id="g1124" style="display:inline">
      <path d="m 425.6,241.2 c 0,0 0.5,-0.2 1.3,-0.4 0.4,0 0.9,-0.1 1.5,-0.1 0.5,0 1.1,0 1.6,0.1 0.2,0 0.6,0.1 0.9,0.1 0.2,0 0.5,0.1 0.7,0.1 0.5,0.1 1,0.2 1.3,0.4 0.7,0.4 1.2,0.6 1.2,0.6 0,0 -0.6,-0.1 -1.3,-0.4 -0.4,-0.1 -0.9,-0.1 -1.3,-0.2 -0.2,0 -0.5,-0.1 -0.7,-0.1 -0.2,0 -0.5,0 -0.9,-0.1 -0.5,-0.1 -1.1,-0.1 -1.6,-0.1 -0.5,0 -1,0 -1.3,0 -0.8,0.1 -1.4,0.1 -1.4,0.1 z" id="path1126" style="fill:#ffffff"></path>
    </g>
    <g id="g1128" style="display:inline">
      <path d="m 448.4,254.8 c 0,0 -0.2,0 -0.6,0 -0.4,0.1 -1,0.2 -1.6,0.5 -0.2,0.1 -0.6,0.4 -0.9,0.6 -0.1,0.1 -0.2,0.2 -0.5,0.4 -0.1,0.1 -0.2,0.4 -0.4,0.5 -0.2,0.4 -0.5,0.7 -0.7,1.1 -0.2,0.4 -0.5,0.7 -0.7,1.2 -1,1.6 -1.8,3.2 -2.6,4.4 -0.1,0.2 -0.4,0.6 -0.5,0.8 -0.1,0.2 -0.2,0.5 -0.5,0.6 -0.2,0.4 -0.4,0.5 -0.4,0.5 0,0 0.1,-0.2 0.4,-0.5 0.1,-0.1 0.2,-0.4 0.4,-0.6 0.1,-0.2 0.2,-0.5 0.5,-0.8 0.4,-0.6 0.7,-1.3 1.1,-2.1 0.4,-0.7 0.9,-1.6 1.3,-2.4 0.2,-0.4 0.5,-0.9 0.7,-1.2 0.2,-0.4 0.5,-0.7 0.7,-1.1 0.1,-0.1 0.2,-0.4 0.4,-0.5 0.1,-0.1 0.4,-0.2 0.5,-0.4 0.4,-0.2 0.7,-0.5 1,-0.6 0.4,-0.1 0.6,-0.2 1,-0.2 0.2,0 0.5,-0.1 0.7,-0.1 0.5,-0.2 0.7,-0.1 0.7,-0.1 z" id="path1130" style="fill:#ffffff"></path>
    </g>
    <g id="g1132" style="display:inline">
      <path d="m 442,245.4 c 0,0 -0.2,0.1 -0.6,0.4 -0.2,0.1 -0.4,0.2 -0.6,0.4 -0.2,0.1 -0.5,0.4 -0.6,0.5 -0.2,0.2 -0.5,0.4 -0.6,0.6 -0.1,0.2 -0.4,0.4 -0.5,0.6 -0.2,0.4 -0.4,0.6 -0.4,0.6 0,0 0,-0.2 0.1,-0.7 0,-0.2 0.2,-0.5 0.4,-0.7 0.1,-0.2 0.4,-0.5 0.6,-0.7 0.5,-0.4 1.1,-0.7 1.5,-0.7 0.5,-0.3 0.7,-0.3 0.7,-0.3 z" id="path1134" style="fill:#ffffff"></path>
    </g>
    <g id="g1136" style="display:inline">
      <path d="m 441,243.9 c 0,0 -0.2,0.1 -0.6,0.2 -0.1,0.1 -0.4,0.2 -0.5,0.4 -0.2,0.1 -0.4,0.2 -0.6,0.5 -0.1,0.1 -0.4,0.2 -0.5,0.5 -0.1,0.2 -0.2,0.4 -0.4,0.5 -0.1,0.4 -0.2,0.5 -0.2,0.5 0,0 0,-0.2 0.1,-0.6 0,-0.2 0.1,-0.4 0.2,-0.6 0.1,-0.2 0.4,-0.4 0.5,-0.6 0.4,-0.4 0.9,-0.6 1.2,-0.6 0.6,-0.2 0.8,-0.2 0.8,-0.2 z" id="path1138" style="fill:#ffffff"></path>
    </g>
    <g id="g1140" style="display:inline">
      <path d="m 440.7,241.9 c 0,0 -0.2,0.1 -0.6,0.2 -0.1,0.1 -0.4,0.2 -0.5,0.4 -0.2,0.1 -0.4,0.2 -0.6,0.5 -0.1,0.1 -0.4,0.2 -0.5,0.5 -0.1,0.2 -0.2,0.4 -0.4,0.5 -0.1,0.4 -0.2,0.5 -0.2,0.5 0,0 0,-0.2 0.1,-0.6 0,-0.2 0.1,-0.4 0.2,-0.6 0.1,-0.2 0.4,-0.4 0.5,-0.6 0.4,-0.4 0.9,-0.6 1.2,-0.6 0.5,-0.2 0.8,-0.2 0.8,-0.2 z" id="path1142" style="fill:#ffffff"></path>
    </g>
    <g id="g1144" style="display:inline">
      <path d="m 439.8,240.8 c 0,0 -0.1,0.1 -0.4,0.2 -0.2,0.1 -0.5,0.4 -0.9,0.6 -0.1,0.1 -0.2,0.2 -0.4,0.4 -0.1,0.1 -0.2,0.2 -0.2,0.4 -0.1,0.2 -0.2,0.4 -0.2,0.4 0,0 0,-0.2 0.1,-0.5 0,-0.1 0.1,-0.2 0.2,-0.5 0.1,-0.1 0.2,-0.2 0.4,-0.5 0.4,-0.2 0.7,-0.5 1,-0.5 0.2,0 0.4,0 0.4,0 z" id="path1146" style="fill:#ffffff"></path>
    </g>
    <g id="g1148" style="display:inline">
      <path d="m 439.5,239.4 c 0,0 -0.1,0.1 -0.4,0.2 -0.2,0.1 -0.5,0.4 -0.9,0.6 -0.1,0.1 -0.2,0.2 -0.4,0.4 -0.1,0.1 -0.2,0.2 -0.2,0.4 -0.1,0.2 -0.2,0.4 -0.2,0.4 0,0 0,-0.2 0.1,-0.5 0,-0.1 0.1,-0.2 0.2,-0.5 0.1,-0.1 0.2,-0.2 0.4,-0.5 0.4,-0.2 0.7,-0.5 1,-0.5 0.1,0 0.4,0 0.4,0 z" id="path1150" style="fill:#ffffff"></path>
    </g>
    <g id="g1152" style="display:inline">
      <path d="m 438.6,238.3 c 0,0 -0.1,0.1 -0.4,0.2 -0.2,0.1 -0.4,0.2 -0.6,0.5 -0.1,0.1 -0.2,0.1 -0.2,0.2 -0.1,0.1 -0.2,0.1 -0.2,0.2 -0.1,0.1 -0.2,0.4 -0.2,0.4 0,0 0,-0.1 0,-0.4 0,-0.1 0.1,-0.2 0.1,-0.4 0.1,-0.1 0.2,-0.2 0.4,-0.4 0.2,-0.2 0.6,-0.4 0.9,-0.4 0.1,0.1 0.2,0.1 0.2,0.1 z" id="path1154" style="fill:#ffffff"></path>
    </g>
    <g id="g1156" style="display:inline">
      <path d="m 438,237.2 c 0,0 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.4,0.2 -0.6,0.5 -0.1,0.1 -0.2,0.1 -0.2,0.2 -0.1,0.1 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.2,0.2 -0.2,0.2 0,0 0,-0.1 0,-0.4 0,-0.1 0.1,-0.2 0.1,-0.4 0.1,-0.1 0.2,-0.2 0.2,-0.4 0.2,-0.2 0.5,-0.4 0.7,-0.4 0.3,0.3 0.4,0.3 0.4,0.3 z" id="path1158" style="fill:#ffffff"></path>
    </g>
    <g id="g1160" style="display:inline">
      <path d="m 437.5,235.8 c 0,0 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.4,0.2 -0.6,0.5 -0.1,0.1 -0.2,0.1 -0.2,0.2 -0.1,0.1 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.2,0.2 -0.2,0.2 0,0 0,-0.1 0,-0.4 0,-0.1 0.1,-0.2 0.1,-0.4 0.1,-0.1 0.2,-0.2 0.2,-0.4 0.2,-0.2 0.5,-0.4 0.7,-0.4 0.2,0.3 0.4,0.3 0.4,0.3 z" id="path1162" style="fill:#ffffff"></path>
    </g>
    <g id="g1164" style="display:inline">
      <path d="m 436.9,234.3 c 0,0 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.4,0.2 -0.6,0.5 -0.1,0.1 -0.2,0.1 -0.2,0.2 -0.1,0.1 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.2,0.2 -0.2,0.2 0,0 0,-0.1 0,-0.4 0,-0.1 0.1,-0.2 0.1,-0.4 0.1,-0.1 0.2,-0.2 0.2,-0.4 0.2,-0.2 0.5,-0.4 0.7,-0.4 0.2,0.3 0.4,0.3 0.4,0.3 z" id="path1166" style="fill:#ffffff"></path>
    </g>
    <g id="g1168" style="display:inline">
      <path d="m 436.3,233 c 0,0 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.4,0.2 -0.6,0.5 -0.1,0.1 -0.2,0.1 -0.2,0.2 -0.1,0.1 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.2,0.2 -0.2,0.2 0,0 0,-0.1 0,-0.4 0,-0.1 0.1,-0.2 0.1,-0.4 0.1,-0.1 0.2,-0.2 0.2,-0.4 0.2,-0.2 0.5,-0.4 0.7,-0.4 0.2,0.2 0.4,0.3 0.4,0.3 z" id="path1170" style="fill:#ffffff"></path>
    </g>
    <g id="g1172" style="display:inline">
      <path d="m 435.6,231.8 c 0,0 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.4,0.2 -0.5,0.4 -0.1,0.1 -0.1,0.1 -0.2,0.2 0,0.1 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.2,0.2 -0.2,0.2 0,0 0,-0.1 0,-0.4 0,-0.3 0.1,-0.4 0.4,-0.6 0.2,-0.1 0.5,-0.2 0.6,-0.2 0.1,0 0.3,0 0.3,0 z" id="path1174" style="fill:#ffffff"></path>
    </g>
    <g id="g1176" style="display:inline">
      <path d="m 434.8,230.7 c 0,0 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.4,0.2 -0.5,0.4 -0.1,0.2 -0.1,0.1 -0.2,0.2 0,0.1 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.2,0.2 -0.2,0.2 0,0 0,-0.1 0,-0.4 0,-0.2 0.1,-0.4 0.4,-0.6 0.2,-0.1 0.5,-0.2 0.6,-0.2 0.2,-0.1 0.3,0 0.3,0 z" id="path1178" style="fill:#ffffff"></path>
    </g>
    <g id="g1180" style="display:inline">
      <path d="m 434.2,229.4 c 0,0 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.4,0.2 -0.5,0.4 -0.1,0.2 -0.1,0.1 -0.2,0.2 0,0.1 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.2,0.2 -0.2,0.2 0,0 0,-0.1 0,-0.4 0,-0.3 0.1,-0.4 0.4,-0.6 0.2,-0.1 0.5,-0.2 0.6,-0.2 0.2,0 0.3,0 0.3,0 z" id="path1182" style="fill:#ffffff"></path>
    </g>
    <g id="g1184" style="display:inline">
      <path d="m 443.2,247 c 0,0 -0.4,0.1 -0.9,0.5 -0.2,0.1 -0.5,0.4 -0.9,0.5 -0.2,0.2 -0.6,0.4 -0.9,0.7 -0.2,0.2 -0.6,0.5 -0.7,0.7 -0.1,0.2 -0.5,0.5 -0.5,0.7 -0.2,0.5 -0.5,0.9 -0.5,0.9 0,0 0.1,-0.4 0.2,-1 0.1,-0.2 0.2,-0.6 0.5,-0.8 0.1,-0.4 0.5,-0.6 0.7,-0.9 0.2,-0.2 0.6,-0.5 1,-0.7 0.4,-0.1 0.6,-0.4 0.9,-0.4 0.8,-0.2 1.1,-0.2 1.1,-0.2 z" id="path1186" style="fill:#ffffff"></path>
    </g>
    <g id="g1188" style="display:inline">
      <path d="m 445.2,248 c 0,0 -0.1,0 -0.4,0.2 -0.2,0.1 -0.6,0.4 -1,0.6 -0.2,0.1 -0.4,0.2 -0.6,0.5 -0.2,0.1 -0.5,0.2 -0.6,0.5 -0.2,0.2 -0.5,0.4 -0.6,0.6 -0.2,0.2 -0.4,0.5 -0.6,0.7 -0.2,0.2 -0.4,0.5 -0.6,0.7 -0.1,0.2 -0.4,0.5 -0.5,0.7 -0.1,0.2 -0.2,0.5 -0.5,0.7 -0.1,0.2 -0.2,0.5 -0.4,0.7 -0.4,0.8 -0.6,1.5 -0.6,1.5 0,0 0.1,-0.6 0.4,-1.5 0.1,-0.2 0.1,-0.5 0.2,-0.7 0.1,-0.2 0.2,-0.5 0.4,-0.7 0.1,-0.2 0.2,-0.5 0.5,-0.9 0.2,-0.2 0.4,-0.5 0.6,-0.7 0.2,-0.2 0.4,-0.5 0.6,-0.7 0.2,-0.2 0.5,-0.4 0.7,-0.6 0.2,-0.2 0.5,-0.4 0.7,-0.5 0.2,-0.1 0.5,-0.2 0.7,-0.4 1,-0.6 1.6,-0.7 1.6,-0.7 z" id="path1190" style="fill:#ffffff"></path>
    </g>
    <g id="g1192" style="display:inline">
      <path d="m 445.6,250.4 c 0,0 -0.1,0 -0.5,0.2 -0.2,0.1 -0.6,0.4 -1.1,0.6 -0.2,0.1 -0.5,0.4 -0.6,0.5 -0.2,0.1 -0.5,0.4 -0.7,0.6 -0.2,0.2 -0.5,0.5 -0.7,0.7 -0.2,0.2 -0.4,0.5 -0.6,0.8 -0.2,0.2 -0.5,0.5 -0.6,0.8 -0.1,0.2 -0.4,0.6 -0.5,0.9 -0.1,0.2 -0.4,0.6 -0.5,0.9 -0.1,0.2 -0.2,0.5 -0.2,0.7 -0.4,1 -0.6,1.6 -0.6,1.6 0,0 0.1,-0.7 0.4,-1.7 0.1,-0.2 0.1,-0.5 0.2,-0.8 0.1,-0.2 0.2,-0.6 0.4,-0.9 0.1,-0.2 0.2,-0.6 0.5,-0.8 0.1,-0.4 0.4,-0.6 0.6,-0.9 0.2,-0.2 0.4,-0.6 0.6,-0.8 0.2,-0.2 0.5,-0.5 0.7,-0.7 0.2,-0.2 0.5,-0.4 0.7,-0.6 0.2,-0.1 0.5,-0.4 0.7,-0.5 0.5,-0.2 0.9,-0.4 1.2,-0.5 0.4,-0.1 0.6,-0.1 0.6,-0.1 z" id="path1194" style="fill:#ffffff"></path>
    </g>
    <g id="g1196" style="display:inline">
      <path d="m 448.1,251.6 c 0,0 -0.2,0 -0.6,0.1 -0.2,0 -0.5,0 -0.7,0.1 -0.2,0.1 -0.6,0.1 -0.9,0.4 -0.4,0.1 -0.6,0.4 -1,0.6 -0.4,0.2 -0.6,0.5 -1,0.8 -0.2,0.2 -0.5,0.7 -0.7,1.1 -0.2,0.4 -0.5,0.8 -0.6,1.2 -0.9,1.7 -1.8,3.4 -2.6,4.5 -0.4,0.6 -0.7,1.1 -1,1.5 -0.2,0.4 -0.4,0.5 -0.4,0.5 0,0 0.1,-0.2 0.4,-0.6 0.1,-0.1 0.2,-0.4 0.4,-0.6 0.1,-0.2 0.2,-0.6 0.5,-0.9 0.6,-1.2 1.5,-2.9 2.4,-4.6 0.2,-0.4 0.5,-0.8 0.7,-1.2 0.2,-0.4 0.5,-0.9 0.9,-1.1 0.4,-0.2 0.6,-0.6 1,-0.8 0.4,-0.2 0.7,-0.4 1.1,-0.5 0.4,-0.1 0.6,-0.2 1,-0.2 0.2,-0.1 0.5,0 0.7,-0.1 0.1,-0.2 0.4,-0.2 0.4,-0.2 z" id="path1198" style="fill:#ffffff"></path>
    </g>
    <g id="g1200" style="display:inline">
      <path d="m 403,266.4 c 0,0 0.1,0 0.2,0.1 0.1,0 0.5,0 0.9,0.1 0.4,0 0.7,0 1.2,-0.1 0.5,-0.1 1,-0.1 1.6,-0.2 0.6,-0.1 1.2,-0.2 1.8,-0.5 0.6,-0.3 1.3,-0.4 2.1,-0.6 0.8,-0.2 1.5,-0.5 2.2,-0.7 0.7,-0.4 1.5,-0.6 2.2,-1 0.7,-0.2 1.5,-0.7 2.1,-1.1 0.4,-0.2 0.7,-0.4 1,-0.6 0.4,-0.2 0.6,-0.5 1,-0.6 0.4,-0.2 0.6,-0.5 0.9,-0.6 0.2,-0.2 0.5,-0.5 0.9,-0.7 0.5,-0.4 1,-0.8 1.5,-1.3 0.9,-0.9 1.6,-1.6 2.1,-2.1 0.2,-0.2 0.5,-0.4 0.6,-0.5 0.1,-0.1 0.2,-0.1 0.2,-0.1 0,0 -0.1,0.1 -0.2,0.1 -0.1,0.1 -0.4,0.2 -0.6,0.5 -0.5,0.5 -1.1,1.3 -1.9,2.2 -0.4,0.5 -0.9,0.9 -1.5,1.3 -0.2,0.2 -0.5,0.5 -0.9,0.7 -0.2,0.2 -0.6,0.5 -0.9,0.6 -0.4,0.2 -0.6,0.5 -1,0.7 -0.4,0.2 -0.7,0.4 -1,0.6 -0.7,0.4 -1.3,0.9 -2.1,1.1 -0.7,0.4 -1.5,0.6 -2.2,1 -0.7,0.2 -1.5,0.5 -2.2,0.7 -0.7,0.2 -1.5,0.4 -2.1,0.6 -0.6,0.2 -1.3,0.2 -1.9,0.4 -0.6,0.2 -1.1,0.1 -1.7,0.2 -0.5,0 -1,0 -1.2,0 -0.4,-0.1 -0.6,-0.1 -0.9,-0.1 -0.1,-0.1 -0.2,-0.1 -0.2,-0.1 z" id="path1202" style="fill:#ffffff"></path>
    </g>
    <g id="g1204" style="display:inline">
      <path d="m 399.3,249.1 c 0,0 0.9,-1.2 2.2,-2.8 0.4,-0.4 0.7,-0.8 1.2,-1.3 0.5,-0.5 0.9,-1 1.3,-1.5 0.5,-0.5 1,-1 1.6,-1.5 0.5,-0.5 1.1,-1 1.7,-1.5 0.6,-0.5 1.1,-0.8 1.7,-1.3 0.6,-0.5 1.2,-0.8 1.7,-1.2 0.6,-0.4 1.1,-0.7 1.6,-1.1 0.5,-0.4 1.1,-0.6 1.5,-0.8 1.9,-1.1 3.2,-1.7 3.2,-1.7 0,0 -1.2,0.9 -3,1.9 -0.5,0.2 -1,0.6 -1.5,1 -0.5,0.4 -1,0.7 -1.6,1.1 -0.5,0.4 -1.1,0.7 -1.7,1.2 -0.6,0.5 -1.1,0.9 -1.7,1.3 -0.6,0.5 -1.1,0.8 -1.7,1.3 -0.5,0.5 -1.1,1 -1.6,1.3 -0.5,0.5 -1,1 -1.5,1.3 -0.5,0.5 -0.9,0.9 -1.2,1.2 -0.7,0.8 -1.3,1.5 -1.8,1.9 -0.2,0.9 -0.4,1.2 -0.4,1.2 z" id="path1206" style="fill:#ffffff"></path>
    </g>
    <g id="g1208" style="display:inline">
      <path d="m 401.9,257.6 c 0,0 1.3,-0.9 3.3,-2.2 1,-0.6 2.2,-1.5 3.4,-2.2 1.2,-0.8 2.6,-1.7 4,-2.5 2.7,-1.7 5.3,-3.4 7.4,-4.6 2.1,-1.2 3.4,-2.1 3.4,-2.1 0,0 -1.3,0.8 -3.3,2.3 -1.9,1.3 -4.6,3 -7.3,4.9 -2.7,1.7 -5.5,3.4 -7.5,4.6 -2,0.9 -3.4,1.8 -3.4,1.8 z" id="path1210" style="fill:#ffffff"></path>
    </g>
    <g id="g1212" style="display:inline">
      <path d="m 400.1,250.7 c 0,0 1,-1.2 2.6,-2.8 0.9,-0.8 1.7,-1.8 2.8,-2.8 1.1,-1 2.2,-1.9 3.4,-2.9 1.2,-1 2.4,-1.8 3.5,-2.7 0.6,-0.4 1.2,-0.7 1.7,-1.1 0.6,-0.4 1.1,-0.6 1.6,-0.9 1,-0.5 1.9,-0.8 2.5,-1.1 0.6,-0.3 1,-0.4 1,-0.4 0,0 -0.4,0.1 -1,0.5 -0.6,0.2 -1.5,0.7 -2.4,1.2 -0.5,0.2 -1,0.6 -1.6,1 -0.5,0.4 -1.1,0.7 -1.7,1.1 -1.1,0.9 -2.3,1.7 -3.5,2.7 -1.2,1 -2.3,1.9 -3.4,2.9 -1.1,1 -2.1,1.8 -2.8,2.7 -1.6,1.5 -2.7,2.6 -2.7,2.6 z" id="path1214" style="fill:#ffffff"></path>
    </g>
    <g id="g1216" style="display:inline">
      <path d="m 400.5,252.2 c 0,0 1.1,-1.1 2.8,-2.7 1.7,-1.6 4.1,-3.6 6.6,-5.6 1.2,-1 2.5,-1.8 3.8,-2.7 0.6,-0.4 1.2,-0.7 1.8,-1.1 0.6,-0.4 1.1,-0.6 1.7,-1 0.5,-0.2 1,-0.5 1.5,-0.7 0.5,-0.2 0.9,-0.4 1.2,-0.5 0.6,-0.2 1,-0.4 1,-0.4 0,0 -0.4,0.1 -1,0.4 -0.4,0.1 -0.7,0.4 -1.1,0.5 -0.5,0.2 -0.9,0.5 -1.5,0.7 -1,0.6 -2.2,1.3 -3.4,2.2 -1.2,0.8 -2.4,1.7 -3.8,2.7 -1.2,1 -2.4,1.9 -3.6,2.8 -1.1,1 -2.2,1.8 -3.2,2.6 -1.6,1.9 -2.8,2.8 -2.8,2.8 z" id="path1218" style="fill:#ffffff"></path>
    </g>
    <g id="g1220" style="display:inline">
      <path d="m 401,254.3 c 0,0 1.2,-1.1 3.2,-2.7 2,-1.6 4.5,-3.5 7.2,-5.5 1.3,-1 2.7,-1.8 4,-2.7 1.3,-0.8 2.6,-1.6 3.6,-2.2 0.5,-0.2 1.1,-0.6 1.5,-0.7 0.5,-0.2 0.9,-0.4 1.2,-0.5 0.7,-0.2 1.1,-0.4 1.1,-0.4 0,0 -0.4,0.1 -1.1,0.5 -0.4,0.1 -0.7,0.4 -1.1,0.6 -0.5,0.2 -1,0.5 -1.5,0.8 -1.1,0.6 -2.3,1.5 -3.5,2.3 -1.3,0.9 -2.7,1.8 -4,2.8 -1.3,1 -2.7,1.9 -3.9,2.8 -1.2,1 -2.4,1.7 -3.4,2.4 -2,1.4 -3.3,2.5 -3.3,2.5 z" id="path1222" style="fill:#ffffff"></path>
    </g>
    <g id="g1224" style="display:inline">
      <path d="m 401.8,255.9 c 0,0 1.2,-1 3.2,-2.4 1,-0.7 2.1,-1.6 3.3,-2.4 1.2,-0.9 2.5,-1.8 3.8,-2.7 1.3,-0.8 2.7,-1.8 3.9,-2.5 1.2,-0.9 2.4,-1.5 3.5,-2.1 1.1,-0.6 1.9,-1 2.6,-1.3 0.6,-0.2 1.1,-0.4 1.1,-0.4 0,0 -0.4,0.1 -1,0.5 -0.6,0.4 -1.5,0.9 -2.5,1.5 -1,0.6 -2.2,1.3 -3.4,2.2 -1.2,0.8 -2.6,1.7 -3.9,2.7 -5.4,3.2 -10.6,6.9 -10.6,6.9 z" id="path1226" style="fill:#ffffff"></path>
    </g>
    <g id="g1228" style="display:inline">
      <path d="m 402.4,259.3 c 0,0 1.3,-0.9 3.4,-2.2 2.1,-1.2 4.7,-2.9 7.4,-4.5 2.8,-1.6 5.5,-3.2 7.5,-4.4 2.1,-1.1 3.5,-1.9 3.5,-1.9 0,0 -1.3,0.8 -3.4,2.2 -2.1,1.2 -4.7,2.9 -7.4,4.5 -2.8,1.6 -5.5,3.2 -7.5,4.4 -2,1.1 -3.5,1.9 -3.5,1.9 z" id="path1230" style="fill:#ffffff"></path>
    </g>
    <g id="g1232" style="display:inline">
      <path d="m 402.9,261.2 c 0,0 1.3,-0.9 3.4,-1.9 1,-0.6 2.2,-1.2 3.5,-1.9 1.3,-0.7 2.7,-1.5 4,-2.2 1.3,-0.7 2.8,-1.5 4,-2.2 1.3,-0.7 2.5,-1.3 3.5,-1.9 2.1,-1.1 3.4,-1.9 3.4,-1.9 0,0 -1.3,0.8 -3.3,2.2 -1.9,1.3 -4.7,2.8 -7.4,4.4 -2.8,1.5 -5.5,2.9 -7.6,4 -2.2,0.7 -3.5,1.4 -3.5,1.4 z" id="path1234" style="fill:#ffffff"></path>
    </g>
    <g id="g1236" style="display:inline">
      <path d="m 403,262.9 c 0,0 1.3,-0.6 3.4,-1.7 1,-0.5 2.2,-1.1 3.5,-1.7 1.3,-0.6 2.7,-1.3 4,-1.9 1.3,-0.6 2.7,-1.3 4,-2.1 1.2,-0.7 2.4,-1.3 3.4,-1.8 1.9,-1.2 3.3,-1.9 3.3,-1.9 0,0 -0.4,0.2 -0.9,0.6 -0.2,0.2 -0.6,0.5 -1,0.7 -0.4,0.2 -0.9,0.6 -1.3,0.9 -1,0.6 -2.1,1.3 -3.4,2.1 -1.2,0.7 -2.6,1.5 -4,2.1 -2.8,1.3 -5.5,2.7 -7.6,3.5 -1.9,0.7 -3.4,1.2 -3.4,1.2 z" id="path1238" style="fill:#ffffff"></path>
    </g>
    <g id="g1240" style="display:inline">
      <path d="m 403.4,264.5 c 0,0 1.3,-0.5 3.4,-1.3 2.1,-0.9 4.7,-1.9 7.4,-3.2 1.3,-0.6 2.7,-1.2 3.9,-1.9 0.6,-0.4 1.2,-0.6 1.7,-1 0.5,-0.4 1.1,-0.6 1.5,-1 0.5,-0.4 0.9,-0.6 1.2,-0.8 0.4,-0.2 0.7,-0.5 1,-0.7 0.5,-0.4 0.9,-0.6 0.9,-0.6 0,0 -0.2,0.2 -0.7,0.7 -0.2,0.2 -0.5,0.5 -0.9,0.7 -0.4,0.2 -0.7,0.6 -1.2,1 -1,0.6 -1.9,1.3 -3.2,2.1 -1.2,0.6 -2.6,1.3 -3.9,1.9 -1.3,0.6 -2.7,1.2 -4,1.7 -1.3,0.5 -2.6,1 -3.5,1.3 -2.3,0.7 -3.6,1.1 -3.6,1.1 z" id="path1242" style="fill:#ffffff"></path>
    </g>
    <g id="g1244" style="display:inline">
      <path d="m 403.5,265.7 c 0,0 0.4,-0.1 0.9,-0.2 0.6,-0.1 1.3,-0.4 2.3,-0.7 1,-0.2 2.1,-0.7 3.3,-1.1 0.6,-0.2 1.2,-0.5 1.8,-0.7 0.6,-0.2 1.2,-0.5 1.8,-0.7 0.6,-0.2 1.2,-0.5 1.8,-0.9 0.6,-0.2 1.2,-0.5 1.7,-0.8 0.5,-0.2 1.1,-0.6 1.6,-0.9 0.5,-0.2 1,-0.5 1.3,-0.9 1.6,-1.1 2.8,-1.8 2.8,-1.8 0,0 -1,0.8 -2.6,2.1 -0.4,0.4 -0.9,0.6 -1.3,0.9 -0.5,0.2 -1,0.6 -1.6,1 -0.5,0.4 -1.1,0.6 -1.7,0.8 -0.6,0.2 -1.2,0.6 -1.8,0.9 -0.6,0.3 -1.2,0.5 -1.8,0.7 -0.6,0.2 -1.2,0.5 -1.8,0.6 -1.2,0.4 -2.3,0.7 -3.3,1 -1,0.2 -1.8,0.4 -2.3,0.5 -0.7,0.1 -1.1,0.2 -1.1,0.2 z" id="path1246" style="fill:#ffffff"></path>
    </g>
    <g id="g1248" style="display:inline">
      <path d="m 469.1,243.6 c 0,0 -1.7,-1.3 -4.6,-3.2 -1.5,-0.8 -3.2,-1.8 -5,-2.8 -1,-0.5 -1.9,-1 -2.9,-1.3 -1,-0.5 -2.1,-0.9 -3,-1.3 -1,-0.5 -2.1,-0.9 -3.2,-1.1 -1,-0.4 -2.1,-0.6 -3,-1 -1,-0.4 -1.9,-0.5 -2.9,-0.7 -1,-0.2 -1.8,-0.4 -2.7,-0.5 -0.9,-0.1 -1.6,-0.2 -2.3,-0.4 -0.7,-0.1 -1.2,-0.1 -1.7,-0.2 -1,-0.1 -1.6,-0.2 -1.6,-0.2 0,0 0.6,0 1.6,0.1 0.5,0 1.1,0.1 1.8,0.1 0.7,0 1.5,0.1 2.3,0.2 0.9,0.1 1.7,0.2 2.7,0.5 1,0.2 1.9,0.4 2.9,0.7 1,0.2 2.1,0.6 3.2,1 1.1,0.4 2.1,0.7 3.2,1.1 1.1,0.4 2.1,0.8 3,1.3 0.9,0.5 1.9,1 2.9,1.5 1.8,1 3.5,1.9 5,2.9 1.5,1 2.6,1.8 3.3,2.4 0.6,0.5 1,0.9 1,0.9 z" id="path1250" style="fill:#ffffff"></path>
    </g>
    <g id="g1252" style="display:inline">
      <path d="m 471.5,252.8 c 0,0 -1.8,-0.6 -4.6,-1.5 -2.8,-1 -6.3,-2.2 -10,-3.5 -3.6,-1.3 -7.2,-2.7 -10,-3.6 -2.7,-1.1 -4.5,-1.7 -4.5,-1.7 0,0 1.8,0.6 4.6,1.5 2.8,1 6.3,2.2 10,3.5 3.6,1.3 7.2,2.7 10,3.6 2.8,1 4.5,1.7 4.5,1.7 z" id="path1254" style="fill:#ffffff"></path>
    </g>
    <g id="g1256" style="display:inline">
      <path d="m 471.3,246.3 c 0,0 -1.9,-1.2 -4.9,-2.9 -1.5,-0.8 -3.3,-1.7 -5.2,-2.7 -1.9,-1 -4,-1.8 -6.1,-2.8 -1.1,-0.4 -2.1,-0.9 -3.2,-1.2 -1.1,-0.4 -2.1,-0.7 -3.2,-1.1 -1,-0.4 -1.9,-0.6 -2.9,-0.9 -1,-0.2 -1.8,-0.5 -2.7,-0.7 -0.9,-0.1 -1.6,-0.4 -2.3,-0.5 -0.7,-0.1 -1.3,-0.2 -1.8,-0.2 -1,-0.1 -1.6,-0.2 -1.6,-0.2 0,0 0.6,0 1.6,0.1 0.5,0 1.1,0.1 1.8,0.2 0.7,0.1 1.5,0.2 2.3,0.4 0.9,0.1 1.7,0.4 2.7,0.6 1,0.2 1.9,0.5 2.9,0.8 1,0.2 2.1,0.7 3.2,1.1 1.1,0.4 2.1,0.8 3.2,1.2 2.1,0.9 4.1,1.8 6.1,2.8 1.9,1 3.6,1.9 5.1,2.8 3.1,1.8 5,3.2 5,3.2 z" id="path1258" style="fill:#ffffff"></path>
    </g>
    <g id="g1260" style="display:inline">
      <path d="m 471.3,247.7 c 0,0 -0.5,-0.2 -1.3,-0.7 -0.9,-0.5 -2.1,-1.1 -3.5,-1.8 -2.9,-1.5 -6.9,-3.4 -10.9,-5.1 -1,-0.4 -2.1,-0.9 -3,-1.2 -0.9,-0.3 -1.9,-0.7 -2.9,-1.1 -1,-0.4 -1.9,-0.6 -2.8,-1 -0.9,-0.2 -1.7,-0.5 -2.6,-0.7 -0.9,-0.2 -1.6,-0.4 -2.2,-0.5 -0.6,-0.1 -1.2,-0.2 -1.7,-0.4 -1,-0.1 -1.5,-0.2 -1.5,-0.2 0,0 0.5,0.1 1.5,0.2 0.5,0.1 1.1,0.1 1.7,0.2 0.6,0.1 1.5,0.2 2.2,0.5 1.6,0.4 3.5,0.8 5.5,1.6 1.9,0.6 4,1.5 6.1,2.3 1,0.5 2.1,0.9 3,1.3 1,0.5 1.9,0.8 2.9,1.3 1.8,0.8 3.5,1.8 5,2.7 2.6,1.4 4.5,2.6 4.5,2.6 z" id="path1262" style="fill:#ffffff"></path>
    </g>
    <g id="g1264" style="display:inline">
      <path d="m 471.6,249.6 c 0,0 -1.9,-0.9 -4.7,-2.3 -1.5,-0.6 -3.2,-1.5 -4.9,-2.3 -1.8,-0.9 -3.8,-1.7 -5.7,-2.4 -1.9,-0.9 -3.9,-1.6 -5.7,-2.3 -1.8,-0.7 -3.6,-1.2 -5.1,-1.7 -0.7,-0.2 -1.5,-0.4 -2.1,-0.5 -0.6,-0.1 -1.2,-0.2 -1.6,-0.4 -1,-0.1 -1.5,-0.2 -1.5,-0.2 0,0 0.5,0 1.5,0.1 0.5,0 1,0.1 1.7,0.2 0.6,0.1 1.3,0.2 2.1,0.5 1.6,0.4 3.3,0.9 5.2,1.6 1.8,0.6 3.9,1.5 5.8,2.2 3.9,1.6 7.6,3.5 10.4,5 1.5,0.7 2.6,1.3 3.4,1.8 0.7,0.4 1.2,0.7 1.2,0.7 z" id="path1266" style="fill:#ffffff"></path>
    </g>
    <g id="g1268" style="display:inline">
      <path d="m 472,251.3 c 0,0 -1.8,-0.8 -4.7,-1.9 -1.5,-0.6 -3,-1.2 -4.9,-2.1 -1.7,-0.7 -3.6,-1.5 -5.6,-2.2 -1.9,-0.7 -3.8,-1.5 -5.6,-2.2 -1.8,-0.6 -3.5,-1.2 -5,-1.7 -0.7,-0.2 -1.3,-0.5 -1.9,-0.6 -0.6,-0.1 -1.1,-0.4 -1.6,-0.4 -0.9,-0.1 -1.3,-0.2 -1.3,-0.2 0,0 0.5,0.1 1.3,0.1 0.5,0 1,0.1 1.6,0.2 0.6,0.1 1.3,0.2 2.1,0.5 1.5,0.4 3.2,0.9 5,1.6 1.8,0.6 3.8,1.3 5.6,2.1 3.8,1.5 7.5,3.2 10.3,4.5 2.9,1.4 4.7,2.3 4.7,2.3 z" id="path1270" style="fill:#ffffff"></path>
    </g>
    <g id="g1272" style="display:inline">
      <path d="m 471.9,254.9 c 0,0 -1.8,-0.6 -4.5,-1.5 -1.3,-0.5 -2.9,-1 -4.6,-1.6 -1.7,-0.6 -3.4,-1.2 -5.2,-1.8 -1.8,-0.6 -3.5,-1.2 -5.2,-1.8 -1.7,-0.6 -3.2,-1.2 -4.5,-1.6 -2.7,-1 -4.5,-1.6 -4.5,-1.6 0,0 1.8,0.5 4.5,1.3 2.7,0.7 6.3,2.1 9.8,3.2 3.5,1.2 7,2.6 9.7,3.5 2.7,1.3 4.5,1.9 4.5,1.9 z" id="path1274" style="fill:#ffffff"></path>
    </g>
    <g id="g1276" style="display:inline">
      <path d="m 472.1,256.8 c 0,0 -1.7,-0.5 -4.2,-1.2 -2.6,-0.7 -5.8,-1.7 -9.2,-2.8 -3.3,-1.1 -6.7,-2.2 -9.1,-3 -2.4,-0.8 -4.1,-1.5 -4.1,-1.5 0,0 1.7,0.5 4.2,1.2 2.6,0.7 5.8,1.7 9.2,2.8 3.3,1.1 6.7,2.2 9.1,3 2.4,0.9 4.1,1.5 4.1,1.5 z" id="path1278" style="fill:#ffffff"></path>
    </g>
    <g id="g1280" style="display:inline">
      <path d="m 472.5,258.9 c 0,0 -1.1,-0.1 -2.7,-0.4 -0.9,-0.1 -1.7,-0.4 -2.8,-0.5 -1,-0.2 -2.1,-0.5 -3,-0.9 -0.5,-0.1 -1.1,-0.2 -1.6,-0.5 -0.5,-0.1 -1,-0.4 -1.5,-0.5 -1,-0.4 -1.8,-0.7 -2.6,-1 -1.6,-0.6 -2.5,-1.1 -2.5,-1.1 0,0 1.1,0.2 2.5,0.7 0.7,0.2 1.7,0.5 2.7,0.8 0.5,0.1 1,0.4 1.5,0.5 0.5,0.1 1.1,0.2 1.6,0.4 1.1,0.2 2.1,0.6 3,0.8 1,0.2 1.9,0.5 2.7,0.7 0.8,0.2 1.5,0.4 1.9,0.5 0.5,0.4 0.8,0.5 0.8,0.5 z" id="path1282" style="fill:#ffffff"></path>
    </g>
  </g>
   <g transform="translate(-81.275666,-143.2)" id="low_back" class="workout-part" onclick="navigateToWorkout('low_back')">   
    <linearGradient x1="323.86719" y1="628.90289" x2="383.89981" y2="628.90289" id="SVGID_11_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop1286" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop1288" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 397.3,338.6 c 0,0 22.1,-3.4 35.5,0.2 13.4,3.6 14.3,10.3 20,13.1 5.7,2.8 7.5,-13.6 11.2,-17 3.6,-3.4 2.2,-6.7 -2.2,-7.5 -4.4,-0.9 -14.3,-25.7 -17.2,-44.9 -2.9,-19.2 -11.5,-13.6 -13.4,-10.3 -1.8,3.3 -14,44.9 -16.8,49.2 -2.8,4.2 -6.1,5.5 -13.1,7 -7,1.5 -12.1,9.9 -4,10.2 z" id="path1290" style="fill:url(#SVGID_11_);display:inline"></path>
    <g id="g1292" style="display:inline">
      <path d="m 452.9,349.9 c 0,0 -0.5,-0.8 -1.5,-2.1 -0.5,-0.6 -1.2,-1.3 -2.1,-2.2 -0.9,-0.8 -1.8,-1.7 -2.9,-2.5 -1.1,-0.9 -2.4,-1.7 -3.8,-2.6 -0.7,-0.4 -1.5,-0.7 -2.2,-1.2 -0.7,-0.4 -1.6,-0.7 -2.4,-1.1 -1.7,-0.6 -3.4,-1.2 -5.2,-1.7 -0.9,-0.2 -1.8,-0.4 -2.7,-0.6 l -1.3,-0.2 -1.5,-0.1 c -1.8,-0.2 -3.8,-0.6 -5.6,-0.7 -1.8,-0.1 -3.6,-0.2 -5.5,-0.2 -1.8,0 -3.5,0.1 -5.1,0.1 -1.6,0.1 -3.2,0.2 -4.5,0.4 -1.5,0.2 -2.7,0.4 -3.8,0.6 -1.1,0.2 -2.1,0.4 -2.9,0.6 -0.9,0.2 -1.5,0.4 -1.8,0.5 -0.5,0.1 -0.6,0.2 -0.6,0.2 0,0 0.2,-0.1 0.6,-0.2 0.5,-0.1 1.1,-0.2 1.8,-0.5 0.9,-0.2 1.8,-0.5 2.9,-0.6 1.1,-0.2 2.4,-0.5 3.8,-0.6 1.5,-0.1 2.9,-0.4 4.6,-0.5 1.6,0 3.4,-0.1 5.1,-0.1 1.8,0.1 3.6,0.1 5.5,0.2 1.8,0.1 3.8,0.5 5.6,0.6 l 1.5,0.2 1.5,0.2 c 1,0.2 1.8,0.4 2.8,0.6 1.8,0.5 3.5,1.1 5.2,1.8 0.9,0.4 1.6,0.7 2.4,1.1 0.7,0.4 1.5,0.7 2.2,1.2 1.5,0.9 2.7,1.7 3.8,2.6 1.1,0.8 2.1,1.8 2.9,2.5 0.9,0.9 1.5,1.6 1.9,2.3 0.8,1.1 1.3,2 1.3,2 z" id="path1294" style="fill:#ffffff"></path>
    </g>
    <g id="g1296" style="display:inline">
      <path d="m 450,342.9 c 0,0 -0.6,-0.6 -1.8,-1.6 -0.6,-0.5 -1.3,-1 -2.2,-1.6 -0.9,-0.6 -1.8,-1.2 -2.9,-1.8 -0.5,-0.4 -1.2,-0.6 -1.8,-0.9 -0.6,-0.4 -1.2,-0.6 -1.9,-0.8 -0.7,-0.2 -1.3,-0.6 -2.1,-0.9 -0.7,-0.2 -1.5,-0.5 -2.2,-0.7 -1.5,-0.6 -3.2,-0.9 -4.7,-1.3 -1.6,-0.4 -3.3,-0.6 -5,-0.9 -1.7,-0.1 -3.4,-0.4 -5,-0.5 -1.7,0 -3.3,-0.1 -4.9,0 -1.6,0.1 -3.2,0.1 -4.6,0.2 -1.5,0.1 -2.8,0.4 -4.1,0.5 -0.6,0.1 -1.2,0.1 -1.8,0.2 -0.6,0.1 -1.1,0.2 -1.6,0.4 -1,0.2 -1.9,0.4 -2.7,0.6 -1.5,0.4 -2.3,0.5 -2.3,0.5 0,0 0.9,-0.2 2.3,-0.6 0.7,-0.1 1.6,-0.4 2.6,-0.6 0.5,-0.1 1.1,-0.2 1.6,-0.4 0.6,-0.1 1.2,-0.2 1.8,-0.2 1.2,-0.2 2.7,-0.5 4.1,-0.6 1.5,-0.1 3,-0.2 4.6,-0.4 1.6,-0.2 3.3,0 5,0 1.7,0 3.4,0.2 5.1,0.4 1.7,0.2 3.4,0.6 5,1 1.6,0.5 3.3,0.9 4.7,1.3 0.7,0.2 1.5,0.5 2.2,0.8 0.7,0.4 1.3,0.6 2.1,1 0.7,0.2 1.3,0.6 1.9,1 0.6,0.4 1.2,0.6 1.7,1 1.1,0.6 2.1,1.2 2.9,1.9 0.9,0.6 1.6,1.2 2.2,1.6 1.2,0.7 1.8,1.4 1.8,1.4 z" id="path1298" style="fill:#ffffff"></path>
    </g>
    <g id="g1300" style="display:inline">
      <path d="m 448.1,338.3 c 0,0 -0.5,-0.5 -1.6,-1.2 -0.5,-0.4 -1.1,-0.8 -1.9,-1.3 -0.7,-0.5 -1.6,-1 -2.6,-1.5 -1,-0.5 -2.1,-1 -3.2,-1.5 -1.1,-0.5 -2.4,-1 -3.6,-1.5 -1.3,-0.5 -2.7,-0.9 -4,-1.2 -1.5,-0.2 -2.8,-0.7 -4.2,-0.9 -1.5,-0.2 -2.9,-0.5 -4.2,-0.6 -1.5,-0.1 -2.8,-0.4 -4.2,-0.4 -1.3,0 -2.7,-0.1 -3.9,-0.1 -1.2,0 -2.4,0 -3.5,0 -0.6,0 -1.1,0 -1.6,0 -0.5,0 -1,0.1 -1.5,0.1 -0.9,0 -1.7,0.1 -2.3,0.1 -1.3,0.1 -2.1,0.1 -2.1,0.1 0,0 0.7,-0.1 1.9,-0.2 0.6,-0.1 1.5,-0.1 2.3,-0.2 0.5,0 1,-0.1 1.5,-0.1 0.5,0 1,0 1.6,-0.1 1.1,0 2.3,-0.1 3.5,-0.1 1.2,0 2.6,0 4,0.1 1.3,0 2.8,0.2 4.2,0.4 1.4,0.2 2.9,0.4 4.4,0.6 1.5,0.2 2.9,0.6 4.2,1 1.3,0.4 2.8,0.7 4,1.2 1.3,0.5 2.5,1 3.6,1.5 1.2,0.5 2.2,1.1 3.2,1.6 1,0.6 1.8,1.1 2.6,1.6 0.8,0.5 1.3,1 1.8,1.3 1.1,0.8 1.6,1.3 1.6,1.3 z" id="path1302" style="fill:#ffffff"></path>
    </g>
    <g id="g1304" style="display:inline">
      <path d="m 445.4,333.3 c 0,0 -0.4,-0.2 -1.2,-0.7 -0.4,-0.2 -0.9,-0.5 -1.5,-0.7 -0.6,-0.2 -1.2,-0.6 -1.8,-0.9 -0.7,-0.2 -1.5,-0.6 -2.3,-0.9 -0.7,-0.4 -1.7,-0.6 -2.5,-0.8 -0.9,-0.2 -1.8,-0.6 -2.8,-0.9 -1,-0.2 -1.9,-0.5 -2.9,-0.6 -1,-0.2 -1.9,-0.5 -2.9,-0.6 -1,-0.1 -1.9,-0.2 -2.9,-0.5 -1,-0.1 -1.8,-0.2 -2.7,-0.4 -0.9,-0.1 -1.7,-0.1 -2.4,-0.2 -3,-0.2 -5,-0.5 -5,-0.5 0,0 2.1,0.1 5,0.1 0.7,0 1.6,0.1 2.4,0.1 0.9,0.1 1.8,0.2 2.7,0.4 1,0.1 1.9,0.2 2.9,0.4 1,0.1 1.9,0.4 2.9,0.6 1,0.2 1.9,0.5 2.9,0.7 1,0.2 1.8,0.6 2.8,0.8 0.9,0.4 1.8,0.6 2.5,1 0.9,0.4 1.6,0.7 2.2,1 0.7,0.4 1.3,0.7 1.8,1 0.5,0.2 1,0.6 1.3,0.9 1,0.4 1.5,0.7 1.5,0.7 z" id="path1306" style="fill:#ffffff"></path>
    </g>
    <g id="g1308" style="display:inline">
      <path d="m 443.9,329.7 c 0,0 -0.4,-0.2 -1.1,-0.5 -0.4,-0.1 -0.7,-0.4 -1.2,-0.6 -0.5,-0.2 -1,-0.5 -1.6,-0.7 -0.6,-0.2 -1.2,-0.5 -1.9,-0.7 -0.7,-0.2 -1.5,-0.5 -2.2,-0.7 -0.7,-0.2 -1.6,-0.5 -2.3,-0.7 -0.9,-0.2 -1.7,-0.4 -2.4,-0.6 -0.9,-0.2 -1.7,-0.5 -2.4,-0.6 -0.9,-0.1 -1.7,-0.4 -2.4,-0.5 -0.7,-0.1 -1.6,-0.4 -2.3,-0.5 -0.7,-0.1 -1.5,-0.2 -2.1,-0.4 -2.6,-0.4 -4.2,-0.7 -4.2,-0.7 0,0 1.7,0.1 4.2,0.4 0.6,0.1 1.3,0.1 2.1,0.2 0.8,0.1 1.5,0.2 2.3,0.4 0.9,0.1 1.6,0.2 2.4,0.5 0.9,0.1 1.7,0.4 2.5,0.6 0.9,0.2 1.7,0.5 2.6,0.6 0.9,0.2 1.6,0.5 2.4,0.7 1.6,0.5 2.9,1.1 4.1,1.6 0.6,0.2 1.1,0.5 1.6,0.7 0.5,0.2 0.9,0.5 1.2,0.6 0.4,0.7 0.7,0.9 0.7,0.9 z" id="path1310" style="fill:#ffffff"></path>
    </g>
    <g id="g1312" style="display:inline">
      <path d="m 441,324.8 c 0,0 -0.4,-0.1 -1,-0.4 -0.6,-0.2 -1.5,-0.5 -2.6,-0.9 -0.5,-0.2 -1.1,-0.4 -1.7,-0.5 -0.6,-0.1 -1.2,-0.4 -1.9,-0.6 -1.3,-0.4 -2.8,-0.7 -4.2,-1.1 -0.7,-0.1 -1.5,-0.4 -2.2,-0.5 -0.7,-0.1 -1.5,-0.2 -2.1,-0.4 -0.7,-0.1 -1.3,-0.2 -1.9,-0.4 -0.6,-0.1 -1.2,-0.2 -1.8,-0.2 -2.2,-0.2 -3.6,-0.5 -3.6,-0.5 0,0 1.5,0 3.6,0.1 1.1,0 2.4,0.2 3.8,0.5 0.7,0.1 1.5,0.1 2.1,0.4 0.7,0.1 1.5,0.4 2.2,0.5 1.5,0.2 2.9,0.7 4.2,1.1 0.7,0.1 1.3,0.5 1.9,0.6 0.6,0.2 1.2,0.4 1.7,0.6 2.3,1 3.5,1.7 3.5,1.7 z" id="path1314" style="fill:#ffffff"></path>
    </g>
    <g id="g1316" style="display:inline">
      <path d="m 438.5,320.8 c 0,0 -0.2,-0.1 -0.9,-0.2 -0.5,-0.1 -1.2,-0.4 -2.2,-0.6 -0.9,-0.2 -1.9,-0.5 -3,-0.9 -1.1,-0.2 -2.3,-0.6 -3.5,-0.9 -1.2,-0.2 -2.4,-0.5 -3.5,-0.7 -1.1,-0.2 -2.2,-0.5 -3,-0.6 -1.8,-0.2 -3,-0.5 -3,-0.5 0,0 1.2,0.1 3,0.2 1,0.1 1.9,0.2 3.2,0.4 1.1,0.1 2.3,0.4 3.5,0.6 1.2,0.2 2.4,0.6 3.5,0.9 1.1,0.2 2.2,0.6 3,1 1.8,0.9 2.9,1.3 2.9,1.3 z" id="path1318" style="fill:#ffffff"></path>
    </g>
    <g id="g1320" style="display:inline">
      <path d="m 437.3,317.7 c 0,0 -0.2,-0.1 -0.7,-0.2 -0.5,-0.1 -1.1,-0.4 -1.9,-0.5 -0.9,-0.2 -1.7,-0.5 -2.7,-0.7 -1,-0.2 -2.1,-0.5 -3.2,-0.7 -0.5,-0.1 -1.1,-0.2 -1.6,-0.4 -0.5,-0.1 -1.1,-0.2 -1.6,-0.2 -1,-0.2 -1.9,-0.4 -2.8,-0.6 -1.6,-0.4 -2.7,-0.6 -2.7,-0.6 0,0 1.1,0.1 2.8,0.4 0.9,0.1 1.8,0.2 2.8,0.4 0.5,0.1 1.1,0.1 1.6,0.2 0.5,0.1 1.1,0.2 1.6,0.4 1.1,0.2 2.2,0.6 3.2,0.8 1,0.2 1.9,0.6 2.7,0.9 1.5,0.3 2.5,0.8 2.5,0.8 z" id="path1322" style="fill:#ffffff"></path>
    </g>
    <g id="g1324" style="display:inline">
      <path d="m 436.2,314.6 c 0,0 -1,-0.2 -2.3,-0.6 -0.7,-0.2 -1.5,-0.4 -2.3,-0.7 -0.9,-0.2 -1.8,-0.5 -2.7,-0.7 -1,-0.2 -1.8,-0.5 -2.7,-0.9 -0.9,-0.2 -1.7,-0.4 -2.4,-0.6 -1.3,-0.4 -2.3,-0.6 -2.3,-0.6 0,0 1,0.1 2.3,0.4 0.7,0.1 1.6,0.2 2.4,0.5 0.8,0.3 1.8,0.5 2.7,0.7 1,0.2 1.8,0.5 2.7,0.9 0.9,0.2 1.6,0.6 2.3,0.8 1.4,0.5 2.3,0.8 2.3,0.8 z" id="path1326" style="fill:#ffffff"></path>
    </g>
    <g id="g1328" style="display:inline">
      <path d="m 435.3,311.5 c 0,0 -0.9,-0.2 -2.1,-0.5 -0.6,-0.1 -1.3,-0.4 -2.1,-0.5 -0.7,-0.2 -1.6,-0.4 -2.4,-0.6 -0.9,-0.2 -1.7,-0.5 -2.4,-0.6 -0.7,-0.1 -1.5,-0.4 -2.1,-0.5 -1.2,-0.2 -2.1,-0.5 -2.1,-0.5 0,0 0.9,0.1 2.1,0.2 0.6,0.1 1.3,0.2 2.2,0.4 0.7,0.2 1.6,0.4 2.4,0.6 0.9,0.2 1.7,0.5 2.4,0.7 0.7,0.2 1.5,0.5 2.1,0.7 1.3,0.2 2,0.6 2,0.6 z" id="path1330" style="fill:#ffffff"></path>
    </g>
    <g id="g1332" style="display:inline">
      <path d="m 434.6,308.6 c 0,0 -0.6,-0.4 -1.7,-0.7 -0.5,-0.1 -1.1,-0.4 -1.7,-0.6 -0.6,-0.2 -1.3,-0.4 -2.1,-0.6 -0.8,-0.2 -1.3,-0.4 -2.1,-0.5 -0.6,-0.1 -1.2,-0.2 -1.8,-0.4 -1.1,-0.2 -1.8,-0.4 -1.8,-0.4 0,0 0.7,0 1.8,0.1 0.5,0 1.2,0.1 1.8,0.2 0.7,0.1 1.3,0.2 2.1,0.5 0.8,0.3 1.5,0.4 2.1,0.6 0.6,0.2 1.2,0.5 1.7,0.7 1.1,0.6 1.7,1.1 1.7,1.1 z" id="path1334" style="fill:#ffffff"></path>
    </g>
    <g id="g1336" style="display:inline">
      <path d="m 435,305.7 c 0,0 -0.1,-0.1 -0.5,-0.1 -0.2,-0.1 -0.7,-0.2 -1.2,-0.4 -0.2,-0.1 -0.5,-0.1 -0.9,-0.2 -0.2,-0.1 -0.6,-0.1 -1,-0.2 -0.6,-0.1 -1.3,-0.4 -2.1,-0.6 -0.8,-0.2 -1.3,-0.4 -2.1,-0.5 -0.6,-0.1 -1.2,-0.2 -1.8,-0.4 -1.1,-0.2 -1.7,-0.5 -1.7,-0.5 0,0 0.7,0 1.8,0.2 0.5,0.1 1.2,0.1 1.8,0.2 0.6,0.1 1.3,0.2 2.1,0.4 0.7,0.2 1.3,0.4 2.1,0.6 0.4,0.1 0.6,0.2 1,0.4 0.2,0.1 0.6,0.2 0.9,0.4 0.5,0.2 0.9,0.4 1.2,0.6 0.2,-0.1 0.4,0.1 0.4,0.1 z" id="path1338" style="fill:#ffffff"></path>
    </g>
    <g id="g1340" style="display:inline">
      <path d="m 436.1,302.6 c 0,0 -0.1,-0.1 -0.5,-0.1 -0.2,-0.1 -0.7,-0.2 -1.2,-0.4 -0.2,-0.1 -0.5,-0.1 -0.9,-0.2 -0.2,-0.1 -0.6,-0.1 -1,-0.2 -0.6,-0.1 -1.3,-0.4 -2.1,-0.6 -0.8,-0.2 -1.3,-0.4 -2.1,-0.5 -0.6,-0.1 -1.2,-0.2 -1.8,-0.4 -1.1,-0.2 -1.7,-0.5 -1.7,-0.5 0,0 0.7,0 1.8,0.2 0.5,0.1 1.2,0.1 1.8,0.2 0.6,0.1 1.3,0.2 2.1,0.4 0.7,0.2 1.3,0.4 2.1,0.6 0.4,0.1 0.6,0.2 1,0.4 0.2,0.1 0.6,0.2 0.9,0.4 0.5,0.2 0.9,0.4 1.2,0.6 0.2,0 0.4,0.1 0.4,0.1 z" id="path1342" style="fill:#ffffff"></path>
    </g>
    <g id="g1344" style="display:inline">
      <path d="m 436.2,299.6 c 0,0 -0.1,-0.1 -0.4,-0.1 -0.2,-0.1 -0.7,-0.2 -1.1,-0.4 -0.2,-0.1 -0.5,-0.1 -0.7,-0.2 -0.2,-0.1 -0.6,-0.1 -0.9,-0.2 -0.6,-0.1 -1.2,-0.4 -1.8,-0.6 -0.6,-0.2 -1.3,-0.4 -1.9,-0.5 -0.6,-0.1 -1.2,-0.2 -1.7,-0.4 -1,-0.2 -1.6,-0.5 -1.6,-0.5 0,0 0.6,0 1.7,0.2 0.5,0.1 1.1,0.1 1.7,0.2 0.6,0.1 1.3,0.2 1.9,0.4 0.6,0.2 1.2,0.4 1.8,0.6 0.2,0.1 0.6,0.2 0.9,0.4 0.2,0.1 0.5,0.2 0.7,0.4 0.5,0.2 0.9,0.4 1.1,0.6 0.2,0 0.3,0.1 0.3,0.1 z" id="path1346" style="fill:#ffffff"></path>
    </g>
    <g id="g1348" style="display:inline">
      <path d="m 436.4,296.9 c 0,0 -0.1,-0.1 -0.4,-0.1 -0.2,-0.1 -0.6,-0.2 -1.1,-0.4 -0.2,-0.1 -0.5,-0.1 -0.7,-0.2 -0.2,-0.1 -0.5,-0.1 -0.9,-0.2 -0.6,-0.1 -1.1,-0.4 -1.7,-0.6 -0.6,-0.2 -1.2,-0.4 -1.7,-0.5 -0.6,-0.1 -1.1,-0.2 -1.6,-0.4 -0.9,-0.2 -1.5,-0.5 -1.5,-0.5 0,0 0.6,0 1.6,0.2 0.5,0.1 1,0.1 1.6,0.2 0.6,0.1 1.2,0.2 1.8,0.5 0.6,0.2 1.2,0.4 1.7,0.6 0.2,0.1 0.5,0.2 0.7,0.4 0.2,0.1 0.5,0.2 0.7,0.4 1,0.1 1.5,0.6 1.5,0.6 z" id="path1350" style="fill:#ffffff"></path>
    </g>
    <g id="g1352" style="display:inline">
      <path d="m 436.4,293.6 c 0,0 -0.1,-0.1 -0.4,-0.1 -0.2,-0.1 -0.6,-0.2 -1,-0.4 -0.2,-0.1 -0.4,-0.1 -0.6,-0.2 -0.2,-0.1 -0.5,-0.1 -0.7,-0.2 -0.5,-0.1 -1.1,-0.4 -1.6,-0.6 -0.2,-0.1 -0.5,-0.2 -0.9,-0.2 -0.2,-0.1 -0.5,-0.1 -0.9,-0.2 -0.5,-0.1 -1,-0.2 -1.5,-0.4 -0.9,-0.2 -1.3,-0.5 -1.3,-0.5 0,0 0.6,0 1.5,0.2 0.5,0.1 1,0.1 1.5,0.2 0.2,0 0.5,0.1 0.9,0.1 0.2,0 0.6,0.1 0.9,0.2 0.5,0.2 1.1,0.4 1.6,0.6 0.2,0.1 0.5,0.2 0.7,0.4 0.2,0.1 0.4,0.2 0.6,0.4 0.7,0.4 1.2,0.7 1.2,0.7 z" id="path1354" style="fill:#ffffff"></path>
    </g>
    <g id="g1356" style="display:inline">
      <path d="m 436.1,290.7 c 0,0 -0.1,-0.1 -0.4,-0.1 -0.2,-0.1 -0.5,-0.2 -0.9,-0.4 -0.4,-0.1 -0.7,-0.4 -1.2,-0.5 -0.5,-0.1 -1,-0.4 -1.3,-0.6 -0.2,-0.1 -0.5,-0.2 -0.7,-0.2 -0.2,-0.1 -0.5,-0.1 -0.7,-0.2 -0.5,-0.1 -0.9,-0.2 -1.2,-0.4 -0.7,-0.2 -1.2,-0.5 -1.2,-0.5 0,0 0.5,0 1.3,0.2 0.4,0.1 0.9,0.1 1.3,0.2 0.2,0 0.5,0.1 0.7,0.1 0.2,0 0.5,0.1 0.7,0.2 0.5,0.2 1,0.4 1.5,0.6 0.5,0.1 0.9,0.5 1.1,0.7 0.6,0.4 1,0.9 1,0.9 z" id="path1358" style="fill:#ffffff"></path>
    </g>
    <g id="g1360" style="display:inline">
      <path d="m 436.1,287.6 c 0,0 -0.1,-0.1 -0.2,-0.1 -0.1,-0.1 -0.5,-0.2 -0.7,-0.4 -0.4,-0.1 -0.6,-0.4 -1.1,-0.5 -0.4,-0.1 -0.9,-0.4 -1.3,-0.6 -0.2,-0.1 -0.4,-0.2 -0.6,-0.2 -0.2,-0.1 -0.5,-0.1 -0.6,-0.2 -0.4,-0.1 -0.9,-0.2 -1.1,-0.4 -0.7,-0.2 -1.1,-0.5 -1.1,-0.5 0,0 0.5,0 1.2,0.2 0.4,0.1 0.7,0.1 1.2,0.2 0.2,0 0.5,0.1 0.7,0.2 0.2,0 0.5,0.1 0.7,0.2 0.5,0.2 0.9,0.4 1.3,0.6 0.4,0.1 0.7,0.5 1.1,0.7 0.2,0.4 0.5,0.8 0.5,0.8 z" id="path1362" style="fill:#ffffff"></path>
    </g>
    <g id="g1364" style="display:inline">
      <path d="m 436.1,284.7 c 0,0 -0.4,-0.2 -1,-0.6 -0.6,-0.4 -1.3,-0.7 -2.1,-1.1 -0.4,-0.2 -0.7,-0.4 -1.2,-0.5 -0.4,-0.1 -0.7,-0.4 -1,-0.4 -0.6,-0.2 -1,-0.5 -1,-0.5 0,0 0.5,0 1.1,0.1 0.6,0.1 1.5,0.4 2.3,0.7 0.4,0.2 0.9,0.4 1.1,0.6 0.4,0.2 0.6,0.5 1,0.7 0.5,0.6 0.8,1 0.8,1 z" id="path1366" style="fill:#ffffff"></path>
    </g>
    <g id="g1368" style="display:inline">
      <path d="m 436.1,281.4 c 0,0 -0.4,-0.2 -0.7,-0.6 -0.5,-0.4 -1.1,-0.7 -1.8,-1.1 -0.4,-0.2 -0.6,-0.4 -1,-0.5 -0.4,-0.1 -0.6,-0.4 -0.9,-0.5 -0.5,-0.2 -0.9,-0.5 -0.9,-0.5 0,0 0.4,0 1,0.1 0.6,0.1 1.3,0.4 2.1,0.7 0.4,0.2 0.7,0.4 1,0.6 0.4,0.2 0.5,0.5 0.7,0.6 0.3,0.8 0.5,1.2 0.5,1.2 z" id="path1370" style="fill:#ffffff"></path>
    </g>
    <g id="g1372" style="display:inline">
      <path d="m 436.1,278.3 c 0,0 -0.2,-0.2 -0.6,-0.5 -0.4,-0.2 -0.9,-0.7 -1.5,-1.1 -0.2,-0.2 -0.5,-0.4 -0.7,-0.5 -0.2,-0.1 -0.5,-0.4 -0.7,-0.5 -0.5,-0.2 -0.7,-0.5 -0.7,-0.5 0,0 0.4,0 0.9,0.2 0.5,0.1 1.1,0.5 1.7,0.9 0.2,0.2 0.5,0.4 0.7,0.6 0.2,0.2 0.4,0.5 0.6,0.6 0.1,0.6 0.3,0.8 0.3,0.8 z" id="path1374" style="fill:#ffffff"></path>
    </g>
    <g id="g1376" style="display:inline">
      <path d="m 436.1,275.3 c 0,0 -0.2,-0.2 -0.5,-0.5 -0.2,-0.2 -0.7,-0.7 -1.1,-1.1 -0.2,-0.2 -0.4,-0.4 -0.6,-0.5 -0.2,-0.1 -0.4,-0.4 -0.6,-0.5 -0.4,-0.2 -0.6,-0.5 -0.6,-0.5 0,0 0.2,0.1 0.7,0.2 0.4,0.1 1,0.5 1.3,0.8 0.2,0.2 0.4,0.5 0.6,0.6 0.1,0.2 0.2,0.5 0.4,0.6 0.4,0.7 0.4,0.9 0.4,0.9 z" id="path1378" style="fill:#ffffff"></path>
    </g>
    <g id="g1380" style="display:inline">
      <path d="m 454.8,349.9 c 0,0 0.2,-1.3 0.9,-3.2 0.4,-1 0.7,-2.1 1.1,-3.3 0.5,-1.2 1,-2.4 1.6,-3.6 0.6,-1.2 1.2,-2.4 1.8,-3.4 0.4,-0.6 0.7,-1.1 1,-1.5 0.4,-0.5 0.7,-0.9 1,-1.3 0.2,-0.4 0.6,-0.7 1,-1 0.2,-0.2 0.5,-0.5 0.7,-0.7 0.5,-0.4 0.7,-0.6 0.7,-0.6 0,0 -0.2,0.2 -0.6,0.6 -0.2,0.2 -0.5,0.5 -0.7,0.7 -0.2,0.4 -0.6,0.6 -0.9,1.1 -0.2,0.4 -0.6,0.9 -0.9,1.3 -0.2,0.5 -0.6,1 -1,1.6 -0.6,1.1 -1.2,2.3 -1.8,3.4 -0.6,1.2 -1.1,2.4 -1.6,3.5 -0.5,1.1 -1,2.2 -1.2,3.2 -0.7,1.9 -1.1,3.2 -1.1,3.2 z" id="path1382" style="fill:#ffffff"></path>
    </g>
    <g id="g1384" style="display:inline">
      <path d="m 453.3,344.6 c 0,0 0.4,-1.1 0.9,-2.8 0.6,-1.6 1.5,-3.8 2.4,-5.8 0.5,-1 1.1,-2.1 1.7,-2.9 0.2,-0.5 0.6,-0.9 0.9,-1.3 0.2,-0.4 0.6,-0.7 0.9,-1.1 0.2,-0.4 0.6,-0.6 0.9,-0.9 0.3,-0.3 0.5,-0.5 0.6,-0.6 0.4,-0.4 0.6,-0.5 0.6,-0.5 0,0 -0.2,0.2 -0.5,0.6 -0.1,0.1 -0.4,0.4 -0.6,0.7 -0.2,0.2 -0.5,0.6 -0.7,1 -0.2,0.4 -0.5,0.7 -0.7,1.1 -0.2,0.4 -0.5,0.8 -0.9,1.3 -0.5,1 -1.1,1.9 -1.6,2.9 -0.5,1 -1,2.1 -1.5,3 -0.5,1 -0.9,1.9 -1.2,2.7 -0.7,1.7 -1.2,2.6 -1.2,2.6 z" id="path1386" style="fill:#ffffff"></path>
    </g>
    <g id="g1388" style="display:inline">
      <path d="m 451.8,340.1 c 0,0 0.2,-1 0.9,-2.3 0.5,-1.5 1.3,-3.3 2.3,-5 0.5,-0.8 1,-1.7 1.5,-2.5 0.5,-0.9 1.1,-1.5 1.6,-2.1 0.5,-0.6 1,-1 1.3,-1.3 0.4,-0.2 0.5,-0.5 0.5,-0.5 0,0 -0.1,0.1 -0.5,0.5 -0.4,0.4 -0.7,0.9 -1.1,1.5 -0.5,0.6 -0.9,1.3 -1.3,2.2 -0.5,0.9 -1,1.7 -1.5,2.6 -0.5,0.9 -1,1.8 -1.3,2.6 -0.4,0.8 -0.7,1.6 -1.1,2.3 -0.9,1.2 -1.3,2 -1.3,2 z" id="path1390" style="fill:#ffffff"></path>
    </g>
    <g id="g1392" style="display:inline">
      <path d="m 450.3,336.6 c 0,0 0.2,-0.9 0.7,-2.2 0.2,-0.6 0.5,-1.5 0.9,-2.2 0.4,-0.8 0.7,-1.6 1.2,-2.4 0.5,-0.9 1,-1.6 1.3,-2.3 0.2,-0.4 0.5,-0.7 0.7,-1 0.2,-0.4 0.5,-0.6 0.7,-0.9 0.2,-0.2 0.5,-0.5 0.7,-0.7 0.2,-0.2 0.4,-0.4 0.5,-0.5 0.2,-0.2 0.5,-0.5 0.5,-0.5 0,0 -0.1,0.1 -0.4,0.5 -0.1,0.1 -0.2,0.4 -0.5,0.6 -0.1,0.2 -0.4,0.5 -0.6,0.7 -0.4,0.6 -0.9,1.2 -1.3,1.9 -0.4,0.7 -0.9,1.6 -1.3,2.3 -0.4,0.9 -0.9,1.6 -1.2,2.4 -0.4,0.7 -0.7,1.5 -1,2.2 -0.6,1.3 -0.9,2.1 -0.9,2.1 z" id="path1394" style="fill:#ffffff"></path>
    </g>
    <g id="g1396" style="display:inline">
      <path d="m 448.4,332.6 c 0,0 0.2,-0.8 0.6,-2.1 0.4,-1.3 1.1,-2.8 1.8,-4.2 0.4,-0.7 0.9,-1.5 1.3,-2.2 0.2,-0.4 0.5,-0.6 0.7,-1 0.2,-0.2 0.5,-0.5 0.7,-0.7 0.2,-0.2 0.5,-0.5 0.6,-0.6 0.2,-0.1 0.4,-0.4 0.5,-0.4 0.4,-0.2 0.5,-0.4 0.5,-0.4 0,0 -0.1,0.1 -0.4,0.4 -0.1,0.1 -0.2,0.2 -0.5,0.5 -0.1,0.2 -0.4,0.4 -0.6,0.6 -0.7,1 -1.7,2.4 -2.4,3.9 -0.4,0.7 -0.7,1.5 -1.1,2.2 -0.4,0.7 -0.6,1.3 -1,1.9 -0.3,1.4 -0.7,2.1 -0.7,2.1 z" id="path1398" style="fill:#ffffff"></path>
    </g>
    <g id="g1400" style="display:inline">
      <path d="m 447,329.2 c 0,0 0.1,-0.9 0.6,-2.1 0.2,-0.6 0.5,-1.3 0.7,-2.1 0.4,-0.7 0.7,-1.5 1.1,-2.2 0.4,-0.7 0.9,-1.5 1.3,-2.1 0.5,-0.6 1,-1.2 1.5,-1.6 0.5,-0.5 0.9,-0.7 1.2,-1 0.4,-0.2 0.5,-0.4 0.5,-0.4 0,0 -0.1,0.1 -0.5,0.4 -0.2,0.2 -0.6,0.6 -1.1,1.1 -0.2,0.2 -0.4,0.5 -0.6,0.7 -0.2,0.2 -0.4,0.6 -0.6,0.9 -0.5,0.6 -0.9,1.3 -1.2,2.1 -0.9,1.5 -1.5,2.9 -1.9,4.1 -0.8,1.5 -1,2.2 -1,2.2 z" id="path1402" style="fill:#ffffff"></path>
    </g>
    <g id="g1404" style="display:inline">
      <path d="m 445,325.3 c 0,0 0.2,-0.7 0.7,-1.8 0.2,-0.5 0.5,-1.1 0.9,-1.7 0.4,-0.6 0.7,-1.2 1.2,-1.9 0.2,-0.4 0.5,-0.6 0.7,-1 0.2,-0.2 0.5,-0.6 0.7,-0.9 0.5,-0.5 1,-1 1.5,-1.3 0.5,-0.4 0.9,-0.6 1.2,-0.9 0.2,-0.1 0.5,-0.2 0.5,-0.2 0,0 -0.6,0.5 -1.5,1.3 -0.4,0.5 -0.9,1 -1.2,1.5 -0.2,0.2 -0.5,0.6 -0.6,0.9 -0.2,0.4 -0.5,0.6 -0.6,1 -0.4,0.6 -0.9,1.2 -1.2,1.8 -0.4,0.6 -0.7,1.2 -1,1.7 -0.9,0.9 -1.3,1.5 -1.3,1.5 z" id="path1406" style="fill:#ffffff"></path>
    </g>
    <g id="g1408" style="display:inline">
      <path d="m 443.5,321.1 c 0,0 0.2,-0.6 0.7,-1.6 0.5,-1 1.2,-2.1 2.1,-3.2 0.4,-0.5 0.9,-1.1 1.3,-1.6 0.5,-0.5 1,-0.9 1.3,-1.2 0.3,-0.3 0.9,-0.5 1.1,-0.6 0.2,-0.1 0.4,-0.2 0.4,-0.2 0,0 -0.5,0.5 -1.3,1.1 -0.4,0.4 -0.7,0.9 -1.2,1.2 -0.4,0.5 -0.9,1 -1.2,1.6 -0.4,0.5 -0.9,1.1 -1.2,1.6 -0.4,0.5 -0.7,1 -1,1.5 -0.6,0.8 -1,1.4 -1,1.4 z" id="path1410" style="fill:#ffffff"></path>
    </g>
    <g id="g1412" style="display:inline">
      <path d="m 442.1,316.3 c 0,0 0.4,-0.6 0.9,-1.3 0.6,-0.7 1.3,-1.8 2.3,-2.7 0.5,-0.5 1,-0.9 1.3,-1.3 0.5,-0.4 1,-0.7 1.3,-1 0.4,-0.2 0.9,-0.4 1.1,-0.5 0.2,-0.1 0.4,-0.1 0.4,-0.1 0,0 -0.1,0.1 -0.4,0.2 -0.2,0.1 -0.6,0.4 -1,0.6 -0.4,0.4 -0.9,0.6 -1.2,1.1 -0.4,0.4 -0.9,0.9 -1.3,1.3 -0.5,0.5 -0.9,0.9 -1.3,1.3 -0.4,0.5 -0.9,0.9 -1.1,1.2 -0.6,0.8 -1,1.2 -1,1.2 z" id="path1414" style="fill:#ffffff"></path>
    </g>
    <g id="g1416" style="display:inline">
      <path d="m 441,312.5 c 0,0 0.4,-0.5 0.9,-1.2 0.5,-0.7 1.3,-1.6 2.2,-2.4 0.4,-0.4 0.9,-0.9 1.3,-1.2 0.4,-0.3 0.9,-0.6 1.2,-1 0.4,-0.2 0.7,-0.4 1,-0.6 0.2,-0.1 0.4,-0.2 0.4,-0.2 0,0 -0.5,0.4 -1.1,1 -0.6,0.6 -1.5,1.5 -2.3,2.3 -0.4,0.4 -0.9,0.8 -1.2,1.2 -0.4,0.4 -0.7,0.7 -1.1,1.1 -0.9,0.5 -1.3,1 -1.3,1 z" id="path1418" style="fill:#ffffff"></path>
    </g>
    <g id="g1420" style="display:inline">
      <path d="m 440.4,308.5 c 0,0 0.2,-0.5 0.7,-1.1 0.5,-0.6 1.1,-1.5 1.8,-2.2 0.4,-0.4 0.7,-0.7 1.1,-1.1 0.1,-0.1 0.4,-0.2 0.6,-0.4 0.2,-0.2 0.4,-0.2 0.5,-0.4 0.1,-0.1 0.4,-0.1 0.5,-0.2 0.1,0 0.2,-0.1 0.4,-0.1 0.2,-0.1 0.4,-0.1 0.4,-0.1 0,0 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.2,0.1 -0.4,0.2 -0.1,0.1 -0.2,0.1 -0.5,0.2 -0.2,0.2 -0.6,0.5 -1,0.9 -0.4,0.4 -0.7,0.7 -1.1,1.1 -0.4,0.4 -0.7,0.7 -1.1,1.1 -0.4,0.4 -0.6,0.7 -0.9,1 -0.4,0.5 -0.8,0.9 -0.8,0.9 z" id="path1422" style="fill:#ffffff"></path>
    </g>
    <g id="g1424" style="display:inline">
      <path d="m 439.8,304.4 c 0,0 0.2,-0.5 0.6,-1.1 0.2,-0.4 0.5,-0.7 0.7,-1.1 0.2,-0.4 0.6,-0.7 1,-1.1 0.4,-0.4 0.7,-0.6 1.1,-1 0.4,-0.2 0.7,-0.5 1.1,-0.7 0.7,-0.2 1.2,-0.5 1.2,-0.5 0,0 -0.4,0.2 -1,0.6 -0.2,0.2 -0.6,0.5 -1,0.7 -0.4,0.2 -0.7,0.6 -1.1,1 -0.4,0.4 -0.7,0.7 -1,1 -0.2,0.4 -0.6,0.6 -0.9,1 -0.4,0.9 -0.7,1.2 -0.7,1.2 z" id="path1426" style="fill:#ffffff"></path>
    </g>
    <g id="g1428" style="display:inline">
      <path d="m 439.3,300.1 c 0,0 0.2,-0.4 0.6,-1 0.2,-0.2 0.5,-0.6 0.7,-1 0.2,-0.4 0.6,-0.6 1,-1 l 0.6,-0.4 c 0.2,-0.1 0.4,-0.2 0.6,-0.4 0.2,-0.1 0.4,-0.2 0.6,-0.2 0.1,-0.1 0.4,-0.2 0.5,-0.2 0.7,-0.2 1.1,-0.4 1.1,-0.4 0,0 -0.4,0.2 -1,0.6 -0.2,0.1 -0.6,0.5 -1,0.6 -0.1,0.1 -0.4,0.2 -0.5,0.4 l -0.5,0.5 c -0.4,0.2 -0.7,0.6 -1,0.9 -0.2,0.4 -0.6,0.6 -0.9,0.8 -0.5,0.4 -0.8,0.8 -0.8,0.8 z" id="path1430" style="fill:#ffffff"></path>
    </g>
    <g id="g1432" style="display:inline">
      <path d="m 439.2,296.1 c 0,0 0.2,-0.4 0.6,-1 0.2,-0.2 0.5,-0.6 0.7,-0.9 0.4,-0.2 0.6,-0.6 1,-0.8 0.4,-0.2 0.7,-0.5 1.1,-0.7 0.4,-0.2 0.7,-0.4 1.1,-0.5 0.6,-0.2 1.1,-0.4 1.1,-0.4 0,0 -0.4,0.2 -1,0.6 -0.2,0.1 -0.6,0.4 -1,0.6 -0.4,0.2 -0.7,0.5 -1.1,0.7 -0.4,0.2 -0.7,0.5 -1,0.7 -0.2,0.2 -0.6,0.5 -0.9,0.7 -0.3,0.6 -0.6,1 -0.6,1 z" id="path1434" style="fill:#ffffff"></path>
    </g>
    <g id="g1436" style="display:inline">
      <path d="m 439,291.9 c 0,0 0.2,-0.4 0.6,-0.7 0.4,-0.5 1,-1 1.6,-1.3 0.4,-0.2 0.6,-0.4 1,-0.6 0.4,-0.1 0.6,-0.2 0.9,-0.4 0.6,-0.1 1,-0.2 1,-0.2 0,0 -0.4,0.2 -0.9,0.5 -0.5,0.4 -1.1,0.7 -1.7,1.1 -0.2,0.2 -0.6,0.4 -0.9,0.6 -0.2,0.2 -0.6,0.4 -0.7,0.6 -0.6,0.3 -0.9,0.4 -0.9,0.4 z" id="path1438" style="fill:#ffffff"></path>
    </g>
    <g id="g1440" style="display:inline">
      <path d="m 438.7,288.5 c 0,0 0.2,-0.2 0.6,-0.6 0.2,-0.1 0.4,-0.4 0.6,-0.5 0.2,-0.1 0.5,-0.4 0.9,-0.5 0.2,-0.1 0.6,-0.4 0.9,-0.5 0.2,-0.1 0.6,-0.1 0.9,-0.2 0.5,-0.1 0.9,-0.1 0.9,-0.1 0,0 -0.2,0.2 -0.7,0.5 -0.2,0.1 -0.5,0.2 -0.7,0.4 -0.2,0.1 -0.5,0.4 -0.9,0.5 -0.6,0.2 -1.1,0.6 -1.6,0.9 -0.2,0.1 -0.4,0.2 -0.5,0.2 -0.3,-0.1 -0.4,-0.1 -0.4,-0.1 z" id="path1442" style="fill:#ffffff"></path>
    </g>
    <g id="g1444" style="display:inline">
      <path d="m 438.6,285.3 c 0,0 0.2,-0.2 0.6,-0.6 0.4,-0.4 0.9,-0.7 1.5,-1.1 0.2,-0.1 0.6,-0.4 0.9,-0.5 0.2,-0.1 0.6,-0.2 0.9,-0.2 0.5,-0.1 0.7,-0.2 0.7,-0.2 0,0 -0.2,0.2 -0.6,0.5 -0.4,0.2 -1,0.6 -1.5,1 -0.2,0.1 -0.6,0.4 -0.9,0.5 -0.2,0.1 -0.5,0.2 -0.7,0.5 -0.5,-0.1 -0.9,0.1 -0.9,0.1 z" id="path1446" style="fill:#ffffff"></path>
    </g>
    <g id="g1448" style="display:inline">
      <path d="m 438.5,281.7 c 0,0 0.1,-0.4 0.5,-0.7 0.4,-0.4 0.9,-0.9 1.5,-1.3 0.4,-0.1 0.6,-0.4 1,-0.5 0.4,-0.1 0.6,-0.2 0.9,-0.4 0.5,-0.1 0.9,-0.1 0.9,-0.1 0,0 -0.4,0.1 -0.7,0.4 -0.2,0.1 -0.5,0.2 -0.7,0.5 -0.2,0.1 -0.6,0.4 -0.9,0.5 -0.2,0.2 -0.6,0.4 -0.9,0.6 -0.2,0.2 -0.5,0.4 -0.7,0.5 -0.7,0.3 -0.9,0.5 -0.9,0.5 z" id="path1450" style="fill:#ffffff"></path>
    </g>
    <g id="g1452" style="display:inline">
      <path d="m 438.6,278.3 c 0,0 0.1,-0.2 0.5,-0.6 0.2,-0.4 0.7,-0.6 1.2,-1 0.2,-0.1 0.5,-0.2 0.9,-0.4 0.2,-0.1 0.5,-0.1 0.7,-0.1 0.5,0 0.7,0 0.7,0 0,0 -0.2,0.1 -0.6,0.2 -0.2,0 -0.4,0.2 -0.6,0.2 -0.2,0.1 -0.5,0.2 -0.7,0.4 -0.2,0.1 -0.5,0.2 -0.7,0.4 -0.2,0.1 -0.5,0.2 -0.6,0.4 -0.6,0.4 -0.8,0.5 -0.8,0.5 z" id="path1454" style="fill:#ffffff"></path>
    </g>
    <g id="g1456" style="display:inline">
      <path d="m 438.6,275.2 c 0,0 0.1,-0.1 0.4,-0.4 0.2,-0.2 0.6,-0.4 0.9,-0.6 0.1,-0.1 0.4,-0.1 0.6,-0.2 0.1,-0.1 0.4,-0.1 0.5,-0.1 0.1,0 0.2,0 0.4,0 0.1,0 0.1,0 0.1,0 0,0 -0.2,0.1 -0.5,0.2 -0.2,0.1 -0.6,0.2 -1,0.5 -0.1,0.1 -0.4,0.1 -0.5,0.2 -0.1,0.1 -0.4,0.1 -0.5,0.1 -0.3,0.3 -0.4,0.3 -0.4,0.3 z" id="path1458" style="fill:#ffffff"></path>
    </g>
    <g id="g1460" style="display:inline">
      <path d="m 438.7,272.6 c 0,0 0,-0.1 0.1,-0.2 0.1,-0.1 0.2,-0.2 0.5,-0.4 0.2,-0.1 0.4,-0.1 0.5,-0.1 0.1,0 0.2,0 0.2,0 0,0 0,0.1 -0.1,0.2 -0.1,0.1 -0.2,0.2 -0.5,0.4 -0.2,0.1 -0.4,0.1 -0.5,0.1 -0.1,0 -0.2,0 -0.2,0 z" id="path1462" style="fill:#ffffff"></path>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="glutes" class="workout-part" onclick="navigateToWorkout('glutes')">    
    <linearGradient x1="330.4183" y1="572.70361" x2="370.24829" y2="572.70361" id="SVGID_12_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop1466" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop1468" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 402.5,415.4 c 0,0 6.7,-9.7 19.4,-14 12.7,-4.3 24.5,-6.1 26.7,-19.7 2.2,-13.6 1,-26.7 -9.7,-35 -10.7,-8.3 -22.5,-3.9 -29.1,-1.2 -6.7,2.7 -1,16.4 -0.6,30.4 0.4,14 -2.2,18.2 -4.2,23.1 -2,4.9 -5.7,17.3 -2.5,16.4 z" id="path1470" style="fill:url(#SVGID_12_);display:inline"></path>
    <g id="g1472" style="display:inline">
      <path d="m 410.7,346.7 c 0,0 1,0 2.7,0.4 1.7,0.4 4,1.1 6.7,2.5 1.2,0.7 2.6,1.7 3.8,2.9 1.2,1.2 2.3,2.5 3.3,4.2 0.5,0.7 0.9,1.7 1.3,2.5 0.4,0.9 0.7,1.7 1.1,2.7 0.6,1.8 1.1,3.8 1.5,5.7 0.1,1 0.4,1.9 0.4,2.9 l 0.1,1.5 v 1.5 c 0,0.5 0,1 0,1.5 0,0.5 0,1 0,1.5 0,1 0,1.9 -0.1,2.8 -0.1,1.8 -0.5,3.6 -0.7,5.2 -0.2,0.8 -0.4,1.6 -0.6,2.4 -0.2,0.7 -0.5,1.5 -0.7,2.2 -0.5,1.5 -1,2.7 -1.5,3.8 -0.6,1.1 -1,1.9 -1.5,2.7 -1,1.5 -1.5,2.2 -1.5,2.2 0,0 0.5,-0.9 1.5,-2.3 0.5,-0.7 0.9,-1.7 1.3,-2.8 0.2,-0.5 0.5,-1.1 0.7,-1.7 0.2,-0.6 0.5,-1.2 0.7,-1.9 0.2,-0.7 0.5,-1.5 0.6,-2.2 0.1,-0.7 0.4,-1.6 0.5,-2.4 0.4,-1.7 0.6,-3.4 0.7,-5.2 0.1,-0.9 0.1,-1.8 0.1,-2.8 0,-0.5 0,-1 0,-1.5 0,-0.5 0,-1 -0.1,-1.5 l -0.1,-1.5 -0.1,-1.5 c -0.1,-1 -0.2,-1.9 -0.4,-2.9 -0.4,-1.9 -0.9,-3.8 -1.3,-5.6 -0.2,-1 -0.7,-1.8 -1,-2.7 -0.4,-0.9 -0.7,-1.7 -1.2,-2.4 -0.9,-1.6 -1.9,-2.9 -3.2,-4.1 -1.2,-1.2 -2.4,-2.1 -3.6,-2.9 -2.5,-1.5 -4.9,-2.3 -6.6,-2.7 -1.7,-0.5 -2.8,-0.5 -2.8,-0.5 z" id="path1474" style="fill:#ffffff"></path>
    </g>
    <g id="g1476" style="display:inline">
      <path d="m 410.6,348.3 c 0,0 1,0.2 2.5,0.8 0.9,0.4 1.8,0.7 2.8,1.3 0.5,0.2 1.1,0.6 1.7,1 0.2,0.2 0.6,0.4 0.9,0.6 0.3,0.2 0.6,0.5 0.9,0.7 1.2,1 2.3,2.2 3.4,3.5 0.5,0.7 1,1.5 1.5,2.2 0.4,0.9 0.9,1.6 1.2,2.4 0.4,0.9 0.7,1.7 1,2.7 0.2,1 0.5,1.8 0.7,2.8 0.1,1 0.2,1.9 0.4,2.9 0.1,1 0.1,1.9 0.2,2.9 0,1 0.1,1.9 0.1,3 0,1 0,1.9 0,2.9 -0.1,1.9 -0.2,3.9 -0.6,5.7 -0.2,1.8 -0.7,3.6 -1.5,5.2 -0.6,1.6 -1.5,3 -2.2,4.2 -1.6,2.5 -3.3,4.4 -4.5,5.6 -1.2,1.2 -1.8,1.9 -1.8,1.9 0,0 0.6,-0.7 1.8,-2.1 1.1,-1.3 2.7,-3.3 4.4,-5.7 0.7,-1.2 1.6,-2.7 2.2,-4.2 0.6,-1.6 1.1,-3.3 1.3,-5.1 0.4,-1.8 0.4,-3.8 0.5,-5.7 0,-1 0,-1.9 0,-2.9 0,-1 -0.1,-1.9 -0.1,-2.9 0,-1 -0.1,-1.9 -0.1,-2.9 -0.1,-1 -0.2,-1.9 -0.4,-2.9 -0.1,-1 -0.5,-1.8 -0.6,-2.8 -0.2,-0.8 -0.6,-1.8 -1,-2.7 -0.4,-0.9 -0.9,-1.7 -1.2,-2.4 -0.5,-0.7 -1,-1.5 -1.5,-2.2 -1.1,-1.3 -2.2,-2.6 -3.3,-3.4 -0.2,-0.2 -0.6,-0.5 -0.9,-0.7 -0.2,-0.2 -0.6,-0.4 -0.9,-0.6 -0.5,-0.4 -1.1,-0.7 -1.6,-1.1 -1,-0.6 -1.9,-1.1 -2.8,-1.5 -1.6,-0.3 -2.5,-0.5 -2.5,-0.5 z" id="path1478" style="fill:#ffffff"></path>
    </g>
    <g id="g1480" style="display:inline">
      <path d="m 409.8,349.7 c 0,0 0.2,0.1 0.7,0.2 0.5,0.1 1.2,0.5 1.9,0.9 0.9,0.4 1.8,1 2.9,1.8 1.1,0.7 2.2,1.8 3.2,3 1.1,1.2 1.9,2.8 2.7,4.5 0.7,1.7 1.1,3.6 1.5,5.6 0.9,3.9 1.5,8.1 1.6,12.4 0,4.2 -0.7,8.6 -2.4,12.3 -0.2,0.5 -0.5,0.9 -0.7,1.3 -0.2,0.4 -0.5,0.9 -0.7,1.2 -0.5,0.9 -1,1.6 -1.6,2.4 -1,1.6 -2.1,2.9 -3.2,4.1 -1.1,1.2 -2.1,2.3 -3,3.2 -1,1 -1.7,1.7 -2.4,2.4 -0.6,0.6 -1.2,1.2 -1.5,1.6 -0.4,0.4 -0.5,0.6 -0.5,0.6 0,0 0.1,-0.2 0.5,-0.6 0.4,-0.4 0.9,-1 1.5,-1.6 1.2,-1.3 3.2,-3.3 5.2,-5.7 1,-1.2 2.1,-2.6 3.2,-4.1 0.5,-0.7 1,-1.6 1.5,-2.4 0.2,-0.4 0.5,-0.9 0.7,-1.2 0.2,-0.4 0.5,-0.9 0.6,-1.3 1.7,-3.6 2.4,-7.9 2.3,-12.1 0,-4.2 -0.7,-8.5 -1.5,-12.4 -0.4,-1.9 -0.7,-3.9 -1.5,-5.6 -0.6,-1.7 -1.6,-3.2 -2.5,-4.4 -1,-1.2 -2.1,-2.3 -3,-3 -1,-0.8 -1.9,-1.5 -2.8,-1.8 -0.9,-0.5 -1.5,-0.7 -1.9,-1 -0.5,-0.3 -0.8,-0.3 -0.8,-0.3 z" id="path1482" style="fill:#ffffff"></path>
    </g>
    <g id="g1484" style="display:inline">
      <path d="m 403.6,410.2 c 0,0 2.4,-3.4 6.2,-8.5 1,-1.2 1.9,-2.7 3,-4.1 1.1,-1.5 2.3,-3 3.4,-4.6 2.2,-3.3 3.4,-7.4 4,-11.5 0.6,-4.1 0.5,-8.4 -0.4,-12.3 -0.4,-1.9 -1,-3.8 -1.6,-5.5 -0.4,-0.9 -0.7,-1.7 -1,-2.4 -0.4,-0.7 -0.7,-1.5 -1.1,-2.2 -0.7,-1.3 -1.6,-2.6 -2.3,-3.6 -0.4,-0.5 -0.9,-1 -1.2,-1.3 -0.2,-0.2 -0.4,-0.4 -0.5,-0.6 -0.2,-0.1 -0.4,-0.4 -0.6,-0.5 -0.4,-0.2 -0.6,-0.6 -1,-0.9 -0.2,-0.2 -0.6,-0.4 -0.7,-0.5 -0.4,-0.2 -0.6,-0.5 -0.6,-0.5 0,0 0.2,0.1 0.6,0.4 0.2,0.1 0.5,0.2 0.7,0.5 0.2,0.2 0.6,0.5 1,0.7 0.1,0.1 0.4,0.2 0.6,0.5 0.1,0.2 0.4,0.4 0.6,0.6 0.4,0.4 0.9,0.9 1.2,1.3 0.3,0.4 0.9,1 1.2,1.6 0.4,0.6 0.9,1.2 1.2,1.9 0.4,0.7 0.7,1.5 1.1,2.2 0.4,0.8 0.7,1.6 1,2.4 0.6,1.7 1.2,3.5 1.6,5.5 0.9,3.9 1,8.1 0.5,12.4 -0.2,2.1 -0.7,4.1 -1.5,6.2 -0.7,1.9 -1.6,3.9 -2.7,5.5 -1.1,1.7 -2.3,3.2 -3.4,4.6 -1.1,1.5 -2.1,2.8 -3,4.1 -3.7,5.3 -6.3,8.6 -6.3,8.6 z" id="path1486" style="fill:#ffffff"></path>
    </g>
    <g id="g1488" style="display:inline">
      <path d="m 408.7,353.4 c 0,0 0.1,0.1 0.5,0.5 0.2,0.2 0.7,0.7 1.2,1.3 0.5,0.6 1.1,1.5 1.7,2.3 0.6,1 1.2,1.9 1.7,3.3 0.6,1.2 1,2.7 1.6,4.1 0.4,1.5 0.7,3.2 1,4.7 0.5,3.4 0.6,6.9 0.5,10.6 -0.2,3.5 -0.9,7.2 -2.3,10.3 -0.7,1.6 -1.8,2.8 -2.5,4.1 -0.9,1.2 -1.7,2.4 -2.4,3.5 -0.7,1.1 -1.5,2.1 -2.1,3 -0.6,1 -1.1,1.7 -1.6,2.4 -0.9,1.3 -1.3,2.1 -1.3,2.1 0,0 0.5,-0.7 1.2,-2.1 0.4,-0.7 0.9,-1.5 1.5,-2.4 0.6,-1 1.2,-1.9 1.9,-3 0.7,-1.1 1.6,-2.3 2.4,-3.6 0.8,-1.3 1.8,-2.6 2.6,-4.1 1.5,-3 1.9,-6.6 2.2,-10.2 0.2,-3.5 0.1,-7.2 -0.4,-10.4 -0.1,-1.7 -0.6,-3.3 -0.9,-4.7 -0.5,-1.5 -0.9,-2.8 -1.5,-4 -0.5,-1.2 -1.1,-2.3 -1.7,-3.3 -0.6,-1 -1.1,-1.7 -1.6,-2.3 -0.5,-0.6 -0.9,-1.1 -1.1,-1.5 -0.3,-0.5 -0.6,-0.6 -0.6,-0.6 z" id="path1490" style="fill:#ffffff"></path>
    </g>
    <g id="g1492" style="display:inline">
      <path d="m 408.2,355.4 c 0,0 0.4,0.5 1,1.5 0.2,0.5 0.6,1.1 1,1.7 0.4,0.7 0.7,1.5 1.1,2.3 0.4,0.9 0.7,1.8 1,2.9 0.4,1.1 0.6,2.2 0.9,3.3 0.1,0.6 0.2,1.2 0.4,1.8 0.1,0.6 0.1,1.2 0.1,1.8 0,0.6 0.1,1.2 0.1,1.8 0,0.6 0,1.2 0,1.9 0,1.2 -0.1,2.6 -0.1,3.8 0,0.6 -0.1,1.2 -0.1,1.8 -0.1,0.6 -0.1,1.2 -0.2,1.8 -0.1,1.2 -0.4,2.3 -0.6,3.4 -0.1,1.1 -0.5,2.1 -0.7,2.9 -0.2,0.9 -0.6,1.7 -0.9,2.4 -0.4,0.7 -0.6,1.3 -0.9,1.8 -0.6,1 -1,1.5 -1,1.5 0,0 0.4,-0.5 0.9,-1.5 0.2,-0.5 0.5,-1.1 0.7,-1.8 0.2,-0.7 0.5,-1.6 0.7,-2.4 0.2,-1 0.5,-1.9 0.6,-2.9 0.1,-1.1 0.4,-2.2 0.5,-3.3 0.1,-0.6 0.1,-1.2 0.2,-1.8 0,-0.6 0.1,-1.2 0.1,-1.8 0.1,-1.2 0.1,-2.4 0.1,-3.8 0,-0.6 0,-1.2 0,-1.8 0,-0.6 -0.1,-1.2 -0.1,-1.8 0,-0.6 0,-1.2 -0.1,-1.8 -0.1,-0.6 -0.2,-1.2 -0.2,-1.7 -0.1,-1.2 -0.5,-2.2 -0.7,-3.3 -0.2,-1.1 -0.6,-1.9 -1,-2.9 -0.2,-0.9 -0.7,-1.7 -1,-2.3 -0.2,-0.7 -0.6,-1.3 -0.9,-1.8 -0.5,-1 -0.9,-1.7 -0.9,-1.7 z" id="path1494" style="fill:#ffffff"></path>
    </g>
    <g id="g1496" style="display:inline">
      <path d="m 413.5,345.5 c 0,0 1,0 2.7,0.4 0.9,0.1 1.9,0.4 3,0.7 1.2,0.4 2.4,0.9 3.8,1.5 1.3,0.7 2.8,1.6 4,2.7 1.3,1.1 2.6,2.4 3.5,4.1 0.2,0.4 0.5,0.8 0.7,1.2 0.2,0.5 0.5,0.9 0.6,1.3 0.4,0.9 0.7,1.8 1.1,2.8 0.4,1 0.6,1.9 0.9,2.9 0.2,1 0.5,1.9 0.6,2.9 0.4,1.9 0.6,4 0.7,5.9 0.1,1.9 0.1,3.9 0.1,5.8 0,1 -0.1,1.8 -0.2,2.8 -0.1,0.8 -0.2,1.8 -0.4,2.7 -0.1,0.8 -0.2,1.7 -0.5,2.4 -0.2,0.7 -0.4,1.6 -0.6,2.3 -0.2,0.7 -0.5,1.3 -0.7,2.1 -0.2,0.6 -0.6,1.2 -0.9,1.8 -0.1,0.2 -0.2,0.6 -0.4,0.9 -0.1,0.2 -0.2,0.5 -0.5,0.7 -0.2,0.5 -0.5,0.9 -0.7,1.2 -0.5,0.7 -1,1.2 -1.2,1.6 -0.2,0.4 -0.5,0.6 -0.5,0.6 0,0 0.1,-0.2 0.5,-0.6 0.2,-0.4 0.7,-0.9 1.2,-1.6 0.2,-0.4 0.5,-0.9 0.7,-1.2 0.1,-0.2 0.2,-0.5 0.4,-0.7 0.1,-0.2 0.2,-0.5 0.4,-0.9 0.2,-0.6 0.5,-1.1 0.7,-1.8 0.2,-0.6 0.5,-1.3 0.6,-2.1 0.2,-0.7 0.4,-1.5 0.6,-2.3 0.2,-0.7 0.4,-1.6 0.5,-2.4 0.1,-0.9 0.2,-1.7 0.4,-2.6 0.1,-0.9 0.1,-1.8 0.1,-2.8 0.1,-1.8 0,-3.8 -0.1,-5.7 -0.1,-1.9 -0.4,-3.9 -0.7,-5.8 -0.1,-1 -0.4,-1.9 -0.6,-2.9 -0.2,-1 -0.5,-1.9 -0.9,-2.8 -0.2,-1 -0.6,-1.8 -1,-2.7 -0.1,-0.5 -0.4,-0.9 -0.6,-1.3 -0.2,-0.5 -0.4,-0.9 -0.7,-1.2 -1,-1.6 -2.2,-2.9 -3.4,-4.1 -1.3,-1.1 -2.7,-1.9 -4,-2.7 -1.3,-0.6 -2.6,-1.2 -3.8,-1.6 -1.1,-0.4 -2.2,-0.6 -3,-0.8 -1.5,-0.7 -2.4,-0.7 -2.4,-0.7 z" id="path1498" style="fill:#ffffff"></path>
    </g>
    <g id="g1500" style="display:inline">
      <path d="m 418,344.5 c 0,0 1,-0.1 2.7,0.2 0.9,0.1 1.8,0.4 2.9,0.8 0.6,0.1 1.1,0.5 1.7,0.7 0.6,0.4 1.2,0.6 1.8,1.1 1.2,0.7 2.4,1.8 3.6,2.9 0.6,0.6 1.2,1.2 1.7,1.9 0.5,0.7 1.1,1.5 1.6,2.2 0.5,0.7 1,1.6 1.3,2.4 0.4,0.8 0.9,1.7 1.2,2.5 l 0.5,1.3 c 0.1,0.5 0.2,1 0.4,1.5 l 0.4,1.5 0.2,1.5 c 0.2,1 0.4,1.9 0.5,2.9 0.1,1 0.2,1.9 0.2,2.9 0.1,1 0.1,1.9 0.1,2.9 0,1 0,1.8 -0.1,2.8 0,1 -0.1,1.8 -0.2,2.7 -0.1,0.9 -0.2,1.7 -0.4,2.5 -0.2,1.7 -0.6,3.2 -1,4.6 -0.2,0.7 -0.4,1.3 -0.6,2.1 -0.2,0.6 -0.5,1.2 -0.7,1.8 -0.5,1.1 -1,2.1 -1.5,2.7 -0.5,0.7 -0.9,1.2 -1.2,1.6 -0.2,0.4 -0.5,0.5 -0.5,0.5 0,0 0.1,-0.2 0.5,-0.5 0.2,-0.4 0.7,-0.8 1.1,-1.6 0.5,-0.7 0.9,-1.7 1.3,-2.8 0.4,-1.1 0.9,-2.3 1.2,-3.8 0.4,-1.5 0.7,-2.9 1,-4.6 0.1,-0.9 0.2,-1.7 0.4,-2.6 0.1,-0.8 0.1,-1.8 0.1,-2.7 0,-0.9 0.1,-1.8 0,-2.8 0,-1 0,-1.8 -0.1,-2.8 0,-1 -0.1,-1.9 -0.2,-2.9 l -0.2,-1.5 -0.2,-1.5 -0.2,-1.5 -0.4,-1.3 c -0.1,-0.5 -0.2,-1 -0.4,-1.3 l -0.5,-1.3 c -0.2,-0.9 -0.7,-1.7 -1.1,-2.6 -0.4,-0.9 -0.9,-1.6 -1.3,-2.4 -0.5,-0.9 -1,-1.5 -1.6,-2.2 -0.5,-0.7 -1.1,-1.3 -1.7,-1.9 -1.2,-1.2 -2.3,-2.2 -3.6,-2.9 -1.2,-0.9 -2.4,-1.3 -3.5,-1.8 -1.1,-0.5 -2.1,-0.7 -2.9,-0.8 -1.2,-0.4 -2.3,-0.4 -2.3,-0.4 z" id="path1502" style="fill:#ffffff"></path>
    </g>
    <g id="g1504" style="display:inline">
      <path d="m 423.2,343.8 c 0,0 0.2,0 0.6,0.1 0.4,0.1 1.1,0.1 1.8,0.4 0.7,0.3 1.7,0.6 2.7,1 1,0.5 2.2,1.1 3.3,1.9 0.6,0.4 1.1,0.8 1.7,1.3 0.6,0.5 1.1,1.1 1.6,1.7 1.1,1.2 1.9,2.6 2.8,4.1 0.4,0.7 0.7,1.6 1.2,2.4 0.4,0.9 0.6,1.7 1,2.6 0.6,1.7 1.1,3.5 1.5,5.3 0.4,1.8 0.7,3.6 0.9,5.5 0.2,1.8 0.2,3.6 0.2,5.3 0,0.9 0,1.7 -0.1,2.6 -0.1,0.9 -0.1,1.7 -0.2,2.4 -0.2,1.6 -0.4,3 -0.7,4.4 -0.6,2.7 -1.6,4.9 -2.3,6.2 -0.4,0.7 -0.7,1.2 -1,1.6 -0.2,0.4 -0.4,0.5 -0.4,0.5 0,0 0.1,-0.2 0.4,-0.5 0.2,-0.4 0.6,-0.8 1,-1.6 0.7,-1.5 1.6,-3.6 2.1,-6.3 0.2,-1.3 0.5,-2.8 0.7,-4.4 0.1,-0.7 0.1,-1.6 0.1,-2.4 0,-0.9 0,-1.7 0,-2.6 0,-1.7 -0.1,-3.5 -0.4,-5.2 -0.2,-1.8 -0.5,-3.6 -1,-5.3 -0.4,-1.8 -0.9,-3.5 -1.3,-5.2 -0.4,-0.9 -0.6,-1.7 -1,-2.6 -0.4,-0.9 -0.7,-1.6 -1.1,-2.3 -0.9,-1.5 -1.7,-2.9 -2.8,-4.1 -0.5,-0.6 -1,-1.2 -1.6,-1.7 -0.5,-0.5 -1.1,-1 -1.6,-1.3 -1.1,-0.9 -2.2,-1.5 -3.2,-2.1 -1,-0.5 -1.9,-0.8 -2.7,-1.1 -0.8,-0.3 -1.3,-0.4 -1.8,-0.5 -0.2,-0.1 -0.4,-0.1 -0.4,-0.1 z" id="path1506" style="fill:#ffffff"></path>
    </g>
    <g id="g1508" style="display:inline">
      <path d="m 428.8,343.9 c 0,0 0.9,0.1 2.3,0.7 0.7,0.2 1.6,0.6 2.4,1.2 1,0.5 1.9,1.2 2.9,1.9 0.5,0.4 1,0.9 1.6,1.3 0.5,0.5 1,1 1.5,1.6 0.5,0.6 1,1.2 1.3,1.8 0.2,0.4 0.5,0.6 0.6,1 0.2,0.4 0.4,0.7 0.6,1.1 0.2,0.4 0.4,0.7 0.6,1.1 0.1,0.4 0.4,0.7 0.5,1.2 0.4,0.7 0.6,1.6 0.9,2.4 0.2,0.8 0.5,1.7 0.6,2.5 0.2,0.9 0.4,1.7 0.5,2.6 0.2,1.7 0.5,3.4 0.7,5.1 0.1,1.7 0.2,3.4 0.2,5 0,0.8 0,1.6 0,2.4 0,0.7 -0.1,1.6 -0.1,2.3 -0.1,1.5 -0.4,2.9 -0.6,4.1 -0.2,1.2 -0.6,2.4 -1,3.4 -0.2,0.5 -0.4,1 -0.6,1.3 -0.2,0.4 -0.4,0.9 -0.6,1.1 -0.2,0.4 -0.4,0.6 -0.5,0.9 -0.1,0.2 -0.4,0.5 -0.5,0.6 -0.2,0.4 -0.4,0.5 -0.4,0.5 0,0 0.1,-0.1 0.4,-0.5 0.1,-0.1 0.2,-0.4 0.4,-0.6 0.1,-0.2 0.4,-0.6 0.5,-0.9 0.2,-0.4 0.4,-0.7 0.5,-1.1 0.2,-0.4 0.4,-0.8 0.5,-1.3 0.2,-0.5 0.4,-1 0.5,-1.6 0.1,-0.6 0.4,-1.2 0.5,-1.8 0.2,-1.2 0.5,-2.7 0.6,-4.1 0.1,-0.7 0.1,-1.5 0.1,-2.3 0,-0.7 0,-1.6 0,-2.4 0,-1.6 -0.1,-3.3 -0.4,-5 -0.1,-1.7 -0.4,-3.4 -0.7,-5.1 -0.1,-0.9 -0.2,-1.7 -0.5,-2.6 -0.1,-0.8 -0.4,-1.7 -0.6,-2.4 -0.2,-0.9 -0.5,-1.6 -0.7,-2.4 -0.1,-0.4 -0.2,-0.7 -0.5,-1.1 -0.1,-0.4 -0.4,-0.7 -0.5,-1.1 -0.2,-0.4 -0.4,-0.7 -0.6,-1.1 -0.2,-0.4 -0.4,-0.6 -0.6,-1 -0.4,-0.7 -0.9,-1.2 -1.3,-1.8 -0.5,-0.6 -1,-1.1 -1.5,-1.6 -0.5,-0.5 -1,-1 -1.5,-1.3 -1,-0.9 -1.9,-1.5 -2.9,-1.9 -0.9,-0.5 -1.7,-1 -2.4,-1.2 -1.4,-0.6 -2.2,-0.9 -2.2,-0.9 z" id="path1510" style="fill:#ffffff"></path>
    </g>
    <linearGradient x1="372.1886" y1="577.841" x2="398.34769" y2="577.841" id="SVGID_13_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop1513" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop1515" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 482.1,400.5 c 0,0 -2.7,-5.3 -9.7,-7.8 -7,-2.4 -15.4,-1.2 -19.1,-2.2 -3.7,-1 0.9,-23.8 2.2,-29.1 2.2,-8.7 2.7,-11.5 6.9,-14.6 4.2,-3.1 8.6,-6.6 11.9,4.6 3.3,11.2 3.2,29.6 5,33.9 1.8,4.3 7,19.4 2.8,15.2 z" id="path1517" style="fill:url(#SVGID_13_);display:inline"></path>
    <g id="g1519" style="display:inline">
      <path d="m 455.6,388.7 c 0,0 0.4,-0.5 0.7,-1.3 0.5,-0.8 1,-2.2 1.6,-3.8 0.2,-0.9 0.6,-1.7 0.9,-2.7 0.2,-1 0.5,-1.9 0.7,-2.9 0.2,-1 0.4,-2.1 0.6,-3.2 0.1,-1.1 0.2,-2.2 0.4,-3.4 0.1,-1.1 0.1,-2.3 0.2,-3.4 0,-1.1 0,-2.2 0,-3.3 0,-1.1 -0.1,-2.1 -0.1,-3 0,-0.9 -0.2,-1.9 -0.2,-2.8 -0.1,-0.9 -0.1,-1.6 -0.2,-2.3 -0.1,-0.7 -0.2,-1.3 -0.2,-1.8 -0.1,-1 -0.2,-1.6 -0.2,-1.6 0,0 0.1,0.6 0.4,1.6 0.1,0.5 0.2,1.1 0.4,1.8 0.1,0.7 0.2,1.5 0.4,2.3 0.1,0.8 0.2,1.8 0.4,2.8 0.1,1 0.1,2.1 0.2,3 0,1.1 0,2.2 0,3.3 0,1.1 -0.1,2.3 -0.2,3.4 -0.1,1.1 -0.2,2.3 -0.5,3.4 -0.2,1.1 -0.4,2.2 -0.6,3.3 -0.2,1.1 -0.5,2.1 -0.9,3 -0.2,1 -0.6,1.8 -1,2.6 -0.6,1.6 -1.3,2.9 -1.8,3.8 -0.8,0.7 -1,1.2 -1,1.2 z" id="path1521" style="fill:#ffffff"></path>
    </g>
    <g id="g1523" style="display:inline">
      <path d="m 461.3,350.7 c 0,0 0.2,0.6 0.6,1.6 0.4,1.1 0.7,2.5 1.1,4.4 0.2,0.9 0.4,1.9 0.5,2.9 0.1,1.1 0.2,2.2 0.4,3.3 0,1.2 0.1,2.3 0.1,3.6 0,1.2 0,2.4 -0.1,3.8 0,0.6 -0.1,1.2 -0.1,1.8 -0.1,0.6 -0.1,1.2 -0.2,1.8 -0.1,1.2 -0.5,2.4 -0.7,3.5 -0.2,1.1 -0.6,2.2 -0.9,3.3 -0.1,0.5 -0.4,1 -0.5,1.5 -0.2,0.5 -0.4,1 -0.6,1.3 -0.4,0.9 -0.6,1.7 -1,2.3 -0.4,0.7 -0.6,1.2 -1,1.7 -0.5,1 -0.9,1.5 -0.9,1.5 0,0 0.2,-0.6 0.7,-1.6 0.2,-0.5 0.5,-1.1 0.9,-1.8 0.4,-0.7 0.6,-1.5 0.9,-2.3 0.1,-0.5 0.4,-0.9 0.5,-1.3 0.1,-0.4 0.2,-1 0.5,-1.5 0.2,-1 0.6,-2.1 0.9,-3.3 0.2,-1.1 0.5,-2.3 0.6,-3.5 0.1,-0.6 0.1,-1.2 0.2,-1.8 0.1,-0.6 0.1,-1.2 0.1,-1.8 0.1,-1.2 0.1,-2.4 0.1,-3.6 0,-1.2 -0.1,-2.4 -0.1,-3.5 -0.1,-1.1 -0.1,-2.3 -0.4,-3.3 -0.1,-1.1 -0.2,-2.1 -0.5,-2.9 -0.4,-1.8 -0.7,-3.3 -1,-4.4 0,-1.1 -0.1,-1.7 -0.1,-1.7 z" id="path1525" style="fill:#ffffff"></path>
    </g>
    <g id="g1527" style="display:inline">
      <path d="m 461.3,389.3 c 0,0 0.4,-0.6 0.7,-1.6 0.2,-0.5 0.5,-1.1 0.9,-1.8 0.2,-0.7 0.6,-1.6 1,-2.4 0.2,-1 0.6,-1.9 1,-2.9 0.2,-1.1 0.6,-2.2 0.9,-3.4 0.2,-1.2 0.5,-2.4 0.7,-3.6 0.1,-1.2 0.2,-2.6 0.4,-3.8 0.1,-1.2 0,-2.5 0.1,-3.8 0,-1.2 -0.2,-2.4 -0.2,-3.6 -0.1,-1.2 -0.4,-2.3 -0.5,-3.4 -0.1,-1.1 -0.5,-2.1 -0.7,-3 -0.2,-1 -0.6,-1.7 -0.7,-2.5 -0.2,-0.7 -0.5,-1.3 -0.7,-1.9 -0.5,-1.1 -0.7,-1.6 -0.7,-1.6 0,0 0.4,0.6 0.9,1.6 0.2,0.5 0.5,1.1 0.9,1.8 0.2,0.7 0.6,1.6 0.9,2.6 0.2,1 0.6,1.9 0.9,3 0.2,1.1 0.5,2.2 0.6,3.4 0.1,1.2 0.2,2.4 0.2,3.8 0,1.2 0,2.6 0,3.9 -0.1,1.3 -0.2,2.6 -0.5,3.9 -0.2,1.2 -0.5,2.4 -0.7,3.6 -0.2,1.2 -0.6,2.3 -1,3.4 -0.4,1.1 -0.7,2.1 -1,2.9 -0.7,1.8 -1.3,3.3 -1.9,4.2 -1.2,0.6 -1.5,1.2 -1.5,1.2 z" id="path1529" style="fill:#ffffff"></path>
    </g>
    <g id="g1531" style="display:inline">
      <path d="m 463.9,348 c 0,0 0.5,0.5 1.2,1.5 0.4,0.5 0.7,1.1 1.2,1.8 0.5,0.7 0.9,1.6 1.3,2.5 0.5,1 0.9,1.9 1.2,3.2 0.2,0.6 0.4,1.1 0.5,1.7 0.1,0.6 0.4,1.2 0.5,1.8 0.2,0.6 0.2,1.3 0.4,1.9 0.1,0.6 0.2,1.3 0.4,1.9 0.1,0.6 0.2,1.3 0.2,2.1 0,0.8 0.1,1.3 0.1,2.1 0,2.8 -0.5,5.6 -1.1,8 -0.4,1.2 -0.7,2.4 -1.1,3.5 -0.4,1.1 -0.9,2.2 -1.3,3 -0.5,1 -0.9,1.8 -1.3,2.5 -0.4,0.7 -0.9,1.3 -1.1,1.8 -0.4,0.5 -0.6,0.9 -0.9,1.1 -0.2,0.2 -0.4,0.4 -0.4,0.4 0,0 0.1,-0.1 0.4,-0.4 0.2,-0.2 0.5,-0.6 0.7,-1.2 0.4,-0.5 0.7,-1.1 1.1,-1.9 0.4,-0.7 0.7,-1.6 1.2,-2.6 0.4,-1 0.9,-1.9 1.2,-3 0.4,-1.1 0.7,-2.3 1.1,-3.5 0.6,-2.4 1.1,-5.2 1.1,-7.9 0,-0.7 0,-1.3 0,-2.1 0,-0.7 -0.1,-1.3 -0.2,-2.1 -0.1,-0.6 -0.2,-1.3 -0.2,-1.9 -0.1,-0.6 -0.2,-1.3 -0.4,-1.9 -0.1,-0.6 -0.2,-1.2 -0.5,-1.8 -0.1,-0.6 -0.2,-1.2 -0.5,-1.7 -0.4,-1.1 -0.7,-2.2 -1.1,-3.2 -0.4,-1 -0.7,-1.8 -1.2,-2.5 -0.4,-0.7 -0.7,-1.3 -1.1,-1.8 -1,-0.8 -1.4,-1.3 -1.4,-1.3 z" id="path1533" style="fill:#ffffff"></path>
    </g>
    <g id="g1535" style="display:inline">
      <path d="m 465.7,346.9 c 0,0 0.5,0.5 1.2,1.6 0.4,0.5 0.9,1.1 1.2,1.9 0.5,0.7 1,1.6 1.5,2.5 0.5,1 1,2.1 1.3,3.2 0.4,1.2 0.9,2.4 1.1,3.8 0.1,0.6 0.4,1.3 0.5,1.9 0.2,0.7 0.2,1.3 0.4,2.1 0.1,1.5 0.4,2.8 0.4,4.2 0,0.7 0,1.5 -0.1,2.2 0,0.7 -0.1,1.5 -0.2,2.2 -0.1,0.7 -0.2,1.5 -0.4,2.1 -0.1,0.7 -0.2,1.3 -0.5,1.9 -0.4,1.3 -0.7,2.5 -1.2,3.6 -0.5,1.2 -1,2.2 -1.3,3.2 -1,1.9 -1.9,3.5 -2.6,4.5 -0.7,1.1 -1.1,1.6 -1.1,1.6 0,0 1.7,-2.3 3.5,-6.2 0.5,-1 0.9,-2.1 1.3,-3.2 0.4,-1.1 0.9,-2.4 1.1,-3.6 0.2,-0.6 0.4,-1.3 0.5,-1.9 0.1,-0.7 0.2,-1.3 0.4,-2.1 0.1,-0.7 0.1,-1.3 0.2,-2.1 0,-0.7 0.1,-1.5 0,-2.2 0,-1.5 -0.2,-2.8 -0.4,-4.2 -0.1,-0.7 -0.1,-1.3 -0.2,-2.1 -0.1,-0.7 -0.4,-1.3 -0.5,-1.9 -0.2,-1.3 -0.7,-2.5 -1.1,-3.6 -0.4,-1.2 -0.9,-2.2 -1.3,-3.2 -0.4,-1 -1,-1.8 -1.3,-2.6 -0.3,-0.8 -0.9,-1.3 -1.2,-1.9 -0.7,-1 -1.2,-1.7 -1.2,-1.7 z" id="path1537" style="fill:#ffffff"></path>
    </g>
    <g id="g1539" style="display:inline">
      <path d="m 468.5,346.3 c 0,0 0.5,0.6 1.2,1.7 0.7,1.1 1.7,2.7 2.6,4.6 0.5,1 1,2.1 1.3,3.3 0.4,1.2 0.9,2.4 1.1,3.8 0.1,0.6 0.4,1.3 0.5,2.1 0.1,0.8 0.2,1.5 0.4,2.2 0.2,1.5 0.2,2.9 0.2,4.4 v 2.2 c -0.1,0.7 -0.1,1.5 -0.2,2.2 -0.1,1.5 -0.2,2.8 -0.6,4.1 -0.4,1.3 -0.6,2.7 -1.1,3.9 -0.5,1.2 -0.9,2.3 -1.5,3.3 -0.2,0.5 -0.5,1 -0.7,1.5 -0.2,0.5 -0.6,0.9 -0.9,1.2 -0.2,0.4 -0.5,0.7 -0.7,1 -0.2,0.2 -0.5,0.6 -0.7,0.8 -0.4,0.5 -0.9,0.9 -1.1,1.1 -0.2,0.2 -0.4,0.4 -0.4,0.4 0,0 0.1,-0.1 0.4,-0.4 0.2,-0.2 0.6,-0.6 1,-1.1 0.2,-0.2 0.4,-0.5 0.6,-0.8 0.2,-0.3 0.5,-0.7 0.7,-1.1 0.2,-0.4 0.5,-0.7 0.7,-1.2 0.2,-0.5 0.5,-1 0.7,-1.5 0.5,-1 0.9,-2.1 1.3,-3.3 0.5,-1.2 0.7,-2.4 1,-3.8 0.4,-1.3 0.5,-2.8 0.6,-4.1 0.1,-0.7 0.1,-1.5 0.2,-2.2 v -2.2 c 0,-1.5 -0.1,-2.9 -0.2,-4.4 -0.1,-0.7 -0.1,-1.5 -0.4,-2.1 -0.1,-0.7 -0.2,-1.3 -0.4,-2.1 -0.2,-1.3 -0.6,-2.5 -1.1,-3.8 -0.4,-1.2 -0.9,-2.3 -1.2,-3.3 -1.6,-3.9 -3.3,-6.4 -3.3,-6.4 z" id="path1541" style="fill:#ffffff"></path>
    </g>
    <g id="g1543" style="display:inline">
      <path d="m 454.4,386.4 c 0,0 0.1,-0.4 0.4,-1.2 0.2,-0.7 0.5,-1.8 0.9,-3.2 0.1,-0.6 0.2,-1.3 0.5,-2.1 0.1,-0.7 0.4,-1.6 0.5,-2.4 0.1,-0.8 0.2,-1.7 0.5,-2.6 0.1,-0.8 0.2,-1.7 0.4,-2.7 0.1,-0.9 0.2,-1.8 0.4,-2.7 0.1,-0.9 0.1,-1.7 0.2,-2.6 0.1,-0.9 0.1,-1.7 0.2,-2.4 0.1,-0.7 0,-1.5 0.1,-2.2 0.1,-2.7 0.1,-4.5 0.1,-4.5 0,0 0,1.8 0.1,4.5 0,0.7 0,1.5 0,2.2 0,0.7 -0.1,1.6 -0.1,2.4 0,0.8 -0.1,1.7 -0.1,2.6 -0.1,0.8 -0.2,1.8 -0.4,2.7 -0.1,0.9 -0.2,1.8 -0.4,2.7 -0.1,0.9 -0.4,1.7 -0.5,2.6 -0.1,0.9 -0.4,1.6 -0.5,2.3 -0.2,0.7 -0.4,1.5 -0.5,2.1 -0.4,1.3 -0.7,2.3 -1,3.2 -0.6,0.9 -0.8,1.3 -0.8,1.3 z" id="path1545" style="fill:#ffffff"></path>
    </g>
    <g id="g1547" style="display:inline">
      <path d="m 454.1,381.3 c 0,0 0,-1 0.1,-2.3 0.1,-1.3 0.4,-3.3 0.6,-5.1 0.2,-1.8 0.5,-3.6 0.7,-5.1 0.2,-1.3 0.5,-2.3 0.5,-2.3 0,0 0,1 -0.1,2.3 -0.1,1.3 -0.4,3.3 -0.6,5.1 -0.2,1.8 -0.5,3.6 -0.7,5.1 -0.2,1.3 -0.5,2.3 -0.5,2.3 z" id="path1549" style="fill:#ffffff"></path>
    </g>
    <g id="g1551" style="display:inline">
      <path d="m 481.6,397.5 c 0,0 -0.1,-0.2 -0.4,-0.9 -0.2,-0.5 -0.6,-1.2 -0.9,-2.2 -0.4,-0.9 -0.7,-1.9 -1.1,-3.2 -0.2,-0.6 -0.4,-1.2 -0.5,-1.8 -0.1,-0.6 -0.4,-1.2 -0.5,-1.8 -0.2,-1.2 -0.6,-2.6 -0.7,-3.6 -0.1,-0.6 -0.1,-1.2 -0.2,-1.7 0,-0.6 -0.1,-1.1 -0.1,-1.6 0,-1.9 -0.1,-3.2 -0.1,-3.2 0,0 0.1,1.3 0.4,3.2 0,0.5 0.1,1 0.2,1.6 0.1,0.5 0.2,1.1 0.2,1.7 0.1,1.2 0.5,2.4 0.7,3.6 0.1,0.6 0.4,1.2 0.5,1.8 0.1,0.6 0.4,1.2 0.5,1.8 0.4,1.1 0.6,2.2 1,3.2 0.2,1 0.5,1.7 0.7,2.2 0.2,0.5 0.3,0.9 0.3,0.9 z" id="path1553" style="fill:#ffffff"></path>
    </g>
    <g id="g1555" style="display:inline">
      <path d="m 478.3,393.5 c 0,0 -0.1,-0.2 -0.4,-0.7 -0.2,-0.5 -0.5,-1.2 -0.9,-2.1 -0.2,-0.8 -0.6,-1.8 -0.9,-3 -0.1,-0.6 -0.2,-1.1 -0.4,-1.7 0,-0.6 -0.1,-1.2 -0.1,-1.8 0,-0.6 -0.1,-1.2 -0.1,-1.8 0,-0.6 0,-1.2 0,-1.7 0,-0.6 0,-1.1 0,-1.6 0,-0.5 0.1,-1 0.1,-1.5 0.2,-1.8 0.4,-3 0.4,-3 0,0 0,1.2 -0.1,3 0,0.5 0,1 -0.1,1.5 0,0.5 0,1.1 0,1.6 0,0.6 0,1.1 0,1.7 0,0.6 0.1,1.2 0.1,1.8 0,0.6 0.1,1.2 0.1,1.8 0.1,0.6 0.2,1.1 0.2,1.7 0.1,0.6 0.1,1.1 0.2,1.6 0.1,0.5 0.2,1 0.4,1.5 0.2,0.9 0.5,1.6 0.7,2.1 0.7,0.3 0.8,0.6 0.8,0.6 z" id="path1557" style="fill:#ffffff"></path>
    </g>
    <g id="g1559" style="display:inline">
      <path d="m 475,391.5 c 0,0 -0.2,-0.5 -0.4,-1.3 -0.2,-0.9 -0.4,-1.9 -0.4,-3 0,-0.6 0,-1.1 0,-1.7 0,-0.2 0,-0.5 0.1,-0.7 0,-0.2 0,-0.5 0.1,-0.7 0.2,-0.9 0.4,-1.3 0.4,-1.3 0,0 0,0.6 -0.1,1.5 0,0.4 0,0.9 0,1.5 0,0.5 0,1.1 0,1.6 0,0.6 0,1.1 0.1,1.6 0,0.5 0,1 0.1,1.5 0,0.4 0.1,1 0.1,1 z" id="path1561" style="fill:#ffffff"></path>
    </g>
    <g id="g1563" style="display:inline">
      <path d="m 472.4,390.5 c 0,0 -0.1,-0.2 -0.1,-0.7 0,-0.2 0,-0.5 0,-0.9 0,-0.2 0,-0.6 0.1,-1 0.1,-0.6 0.2,-1.2 0.5,-1.7 0.2,-0.5 0.4,-0.7 0.4,-0.7 0,0 0,0.4 -0.1,0.7 -0.1,0.2 -0.1,0.5 -0.1,0.7 -0.1,0.2 -0.1,0.6 -0.1,0.8 -0.1,0.6 -0.1,1.2 -0.2,1.7 -0.4,0.8 -0.4,1.1 -0.4,1.1 z" id="path1565" style="fill:#ffffff"></path>
    </g>
    <g id="g1567" style="display:inline">
      <path d="m 470.5,390.3 c 0,0 0,-0.1 0,-0.4 0,-0.3 0,-0.5 0.1,-0.7 0.1,-0.2 0.1,-0.5 0.2,-0.6 0.1,-0.1 0.2,-0.2 0.2,-0.2 0,0 0,0.1 0,0.4 0,0.3 0,0.5 -0.1,0.7 -0.1,0.2 -0.1,0.5 -0.2,0.6 0,0.2 -0.2,0.2 -0.2,0.2 z" id="path1569" style="fill:#ffffff"></path>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="hamstring" class="workout-part" onclick="navigateToWorkout('hamstring')">
    <linearGradient x1="374.53409" y1="536.26508" x2="404.8855" y2="536.26508" id="SVGID_14_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop1573" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop1575" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 458.8,451.9 c 0,0 -0.6,-26.5 -2.8,-40.2 -2.2,-13.7 -1.2,-14.6 2.1,-16.6 3.3,-2.1 11.8,-1.8 15.3,0.4 7.5,4.6 9.5,8.3 12.8,20.9 3.5,13.5 5.9,30 5.6,31.2 -0.4,1.2 -10.6,-2.8 -15.4,-12.5 -4.9,-9.8 0.9,13.4 -7.5,15.9 -8.4,2.6 -10.1,0.9 -10.1,0.9 z" id="path1577" style="fill:url(#SVGID_14_);display:inline"></path>
    <g id="g1579" style="display:inline">
      <path d="m 479.4,446.1 c 0,0 -0.5,-0.7 -1.1,-2.1 -0.6,-1.3 -1.5,-3.3 -2.2,-5.6 -0.4,-1.2 -0.7,-2.4 -1.2,-3.9 -0.4,-1.3 -0.9,-2.8 -1.2,-4.4 -0.9,-3 -1.5,-6.3 -2.2,-9.5 -0.4,-1.6 -0.7,-3.3 -1.1,-4.9 -0.4,-1.6 -0.7,-3.2 -1.1,-4.6 -0.4,-1.5 -0.7,-2.9 -1,-4.4 -0.4,-1.3 -0.6,-2.7 -1,-3.9 -0.6,-2.4 -1.1,-4.4 -1.6,-5.8 -0.4,-1.3 -0.6,-2.2 -0.6,-2.2 0,0 0.4,0.7 1,2.1 0.2,0.7 0.6,1.5 1,2.4 0.4,0.9 0.7,2.1 1.1,3.2 0.4,1.2 0.9,2.4 1.2,3.9 0.4,1.3 0.9,2.8 1.2,4.4 0.4,1.5 0.9,3 1.2,4.6 0.4,1.6 0.7,3.2 1.1,4.9 0.4,1.6 0.7,3.3 1,4.9 0.4,1.6 0.6,3.2 1,4.6 0.4,1.5 0.6,2.9 1,4.4 0.4,1.3 0.6,2.7 1,3.9 0.4,1.2 0.6,2.3 0.9,3.3 0.2,1 0.5,1.8 0.7,2.4 0.2,0.7 0.4,1.2 0.6,1.6 0.3,0.6 0.3,0.7 0.3,0.7 z" id="path1581" style="fill:#ffffff"></path>
    </g>
    <g id="g1583" style="display:inline">
      <path d="m 475.1,436.8 c -1.5,-7.3 -6.2,-13.5 -13.1,-17.5 -6.6,-3.8 -7,-6.1 -7.2,-6.3 l 1.2,-0.1 c 0,0 0.6,2.2 6.7,5.7 7.3,4.2 12,10.7 13.6,18.2 h -1.2 z" id="path1585" style="fill:#ffffff"></path>
    </g>
    <g id="g1587" style="display:inline">
      <path d="m 469.2,421.3 c 0,0 -0.2,-1.7 -0.7,-4.1 -0.2,-1.2 -0.5,-2.7 -0.9,-4.2 -0.2,-1.6 -0.7,-3.2 -1.1,-4.9 -0.4,-1.7 -0.9,-3.3 -1.2,-4.7 -0.2,-0.7 -0.5,-1.5 -0.6,-2.2 -0.2,-0.7 -0.4,-1.3 -0.6,-1.9 -0.1,-0.6 -0.5,-1.1 -0.6,-1.6 -0.2,-0.5 -0.4,-0.9 -0.5,-1.2 -0.2,-0.7 -0.5,-1.1 -0.5,-1.1 0,0 0.2,0.4 0.5,1.1 0.1,0.4 0.4,0.7 0.6,1.2 0.2,0.5 0.5,1 0.7,1.6 0.2,0.6 0.5,1.2 0.7,1.9 0.2,0.7 0.5,1.3 0.7,2.2 0.4,1.6 0.9,3.2 1.2,4.7 0.4,1.7 0.7,3.3 1,4.9 0.2,1.6 0.5,3 0.7,4.2 0.5,2.4 0.6,4.1 0.6,4.1 z" id="path1589" style="fill:#ffffff"></path>
    </g>
    <g id="g1591" style="display:inline">
      <path d="m 466.2,418.6 c 0,0 -0.1,-0.4 -0.1,-1 -0.1,-0.6 -0.2,-1.6 -0.5,-2.7 -0.1,-1.1 -0.5,-2.4 -0.7,-3.8 -0.1,-0.7 -0.2,-1.3 -0.5,-2.1 -0.1,-0.7 -0.2,-1.5 -0.5,-2.2 -0.4,-1.5 -0.7,-2.9 -1.1,-4.2 -0.2,-0.7 -0.4,-1.3 -0.6,-1.9 -0.1,-0.6 -0.4,-1.2 -0.5,-1.7 -0.7,-2.1 -1.2,-3.5 -1.2,-3.5 0,0 0.6,1.3 1.5,3.4 0.2,0.5 0.4,1.1 0.6,1.7 0.2,0.6 0.4,1.2 0.6,1.9 0.5,1.3 0.7,2.8 1.1,4.2 0.2,0.7 0.4,1.5 0.5,2.2 0.1,0.7 0.2,1.5 0.5,2.1 0.2,1.3 0.5,2.7 0.6,3.8 0.1,1.1 0.2,2.1 0.4,2.7 -0.1,0.7 -0.1,1.1 -0.1,1.1 z" id="path1593" style="fill:#ffffff"></path>
    </g>
    <g id="g1595" style="display:inline">
      <path d="m 463,417 c 0,0 -0.4,-1.3 -0.7,-3.3 -0.5,-1.9 -1,-4.6 -1.5,-7.2 -0.5,-2.7 -1,-5.2 -1.3,-7.2 -0.4,-1.9 -0.5,-3.3 -0.5,-3.3 0,0 0.4,1.3 0.7,3.3 0.5,1.9 1,4.6 1.5,7.2 0.5,2.7 1,5.2 1.3,7.2 0.4,2 0.5,3.3 0.5,3.3 z" id="path1597" style="fill:#ffffff"></path>
    </g>
    <g id="g1599" style="display:inline">
      <path d="m 460.1,415.2 c 0,0 -0.2,-1.1 -0.6,-2.8 -0.1,-0.9 -0.4,-1.8 -0.6,-2.8 -0.1,-1.1 -0.4,-2.2 -0.5,-3.3 -0.4,-2.2 -0.6,-4.5 -0.9,-6.2 -0.2,-1.7 -0.2,-2.8 -0.2,-2.8 0,0 0.2,1.1 0.6,2.8 0.4,1.7 0.7,3.9 1.1,6.1 0.4,2.2 0.7,4.5 1,6.1 0,1.8 0.1,2.9 0.1,2.9 z" id="path1601" style="fill:#ffffff"></path>
    </g>
    <g id="g1603" style="display:inline">
      <path d="m 457.5,412.5 c 0,0 -0.2,-0.9 -0.5,-2.1 -0.1,-0.6 -0.2,-1.3 -0.4,-2.1 -0.1,-0.7 -0.2,-1.6 -0.4,-2.4 -0.1,-1.7 -0.4,-3.3 -0.4,-4.5 -0.1,-1.2 -0.1,-2.1 -0.1,-2.1 0,0 0.1,0.9 0.4,2.1 0.2,1.2 0.4,2.8 0.6,4.5 0.1,1.6 0.4,3.3 0.5,4.5 0.3,1.3 0.3,2.1 0.3,2.1 z" id="path1605" style="fill:#ffffff"></path>
    </g>
    <g id="g1607" style="display:inline">
      <path d="m 467.6,394.9 c 0,0 0.2,0.7 0.9,1.9 0.5,1.2 1.2,3 1.9,5.1 0.4,1.1 0.9,2.2 1.2,3.5 0.4,1.2 0.9,2.6 1.2,3.9 0.4,1.3 1,2.8 1.2,4.2 0.4,1.5 0.7,2.9 1.1,4.4 0.7,2.9 1.5,6 2.1,8.6 0.4,1.3 0.6,2.7 1,4 0.1,0.6 0.2,1.2 0.4,1.8 0.1,0.6 0.4,1.1 0.5,1.7 0.4,1.1 0.6,2.1 0.9,2.9 0.2,0.9 0.6,1.6 0.9,2.2 0.2,0.6 0.5,1.1 0.6,1.5 0.2,0.2 0.2,0.5 0.2,0.5 0,0 -0.1,-0.1 -0.4,-0.5 -0.2,-0.2 -0.4,-0.7 -0.7,-1.3 -0.2,-0.6 -0.7,-1.3 -1,-2.2 -0.2,-0.9 -0.6,-1.8 -1,-2.9 -0.1,-0.5 -0.4,-1.1 -0.6,-1.7 -0.1,-0.6 -0.2,-1.2 -0.5,-1.8 -0.4,-1.2 -0.6,-2.6 -1,-4 -0.6,-2.8 -1.5,-5.7 -2.2,-8.6 -0.4,-1.5 -0.7,-2.9 -1.1,-4.4 -0.4,-1.5 -0.9,-2.8 -1.2,-4.2 -0.9,-2.7 -1.6,-5.3 -2.3,-7.4 -0.7,-2.2 -1.3,-4 -1.8,-5.2 0,-1.4 -0.3,-2 -0.3,-2 z" id="path1609" style="fill:#ffffff"></path>
    </g>
    <g id="g1611" style="display:inline">
      <path d="m 470.4,395 c 0,0 0.4,0.7 0.9,2.1 0.5,1.3 1.2,3.2 2.2,5.5 0.7,2.3 1.6,5 2.5,7.9 0.5,1.5 0.7,3 1.2,4.5 0.4,1.6 0.7,3.2 1.2,4.7 0.4,1.6 0.7,3.2 1.1,4.7 0.4,1.6 0.7,3 1.1,4.5 0.4,1.5 0.7,2.9 1.1,4.2 0.2,0.6 0.4,1.3 0.6,1.9 0.2,0.6 0.4,1.2 0.6,1.8 0.4,1.1 0.9,2.2 1.2,3 0.4,1 0.7,1.7 1.1,2.3 0.4,0.6 0.6,1.1 0.9,1.5 0.2,0.4 0.4,0.5 0.4,0.5 0,0 -0.1,-0.1 -0.4,-0.5 -0.2,-0.2 -0.5,-0.7 -0.9,-1.3 -0.4,-0.6 -0.7,-1.3 -1.2,-2.3 -0.4,-0.9 -0.9,-1.9 -1.2,-3 -0.2,-0.6 -0.5,-1.2 -0.6,-1.8 -0.2,-0.6 -0.4,-1.2 -0.6,-1.9 -0.5,-1.3 -0.9,-2.8 -1.2,-4.2 -0.4,-1.5 -0.7,-3 -1.1,-4.5 -0.4,-1.6 -0.7,-3.2 -1.1,-4.7 -0.4,-1.6 -0.7,-3.2 -1.1,-4.7 -0.4,-1.6 -0.7,-3 -1.1,-4.5 -0.9,-2.9 -1.7,-5.6 -2.4,-7.9 -0.9,-2.3 -1.5,-4.2 -1.9,-5.6 -0.9,-1.4 -1.3,-2.2 -1.3,-2.2 z" id="path1613" style="fill:#ffffff"></path>
    </g>
    <g id="g1615" style="display:inline">
      <path d="m 477.2,406.8 c 0,0 2.9,9.1 5.6,18.3 1.3,4.6 2.6,9.2 3.4,12.6 0.9,3.5 1.5,5.8 1.5,5.8 0,0 -0.7,-2.3 -1.7,-5.7 -1.1,-3.4 -2.3,-8 -3.6,-12.6 -1.3,-4.6 -2.5,-9.2 -3.5,-12.6 -1.1,-3.5 -1.7,-5.8 -1.7,-5.8 z" id="path1617" style="fill:#ffffff"></path>
    </g>
    <g id="g1619" style="display:inline">
      <path d="m 459.2,419.4 c 0,0 0,0.5 0.1,1.3 0.1,0.8 0.2,1.9 0.4,3.4 0.1,1.5 0.2,3 0.5,4.7 0.1,1.7 0.2,3.6 0.4,5.5 0.1,1.8 0.2,3.8 0.4,5.5 0,1.8 0,3.4 0,4.9 0,2.8 0,4.7 0,4.7 0,0 -0.1,-1.8 -0.2,-4.7 0,-1.5 -0.1,-3 -0.1,-4.9 -0.1,-1.7 -0.2,-3.6 -0.4,-5.5 -0.1,-1.8 -0.1,-3.8 -0.4,-5.5 -0.1,-1.7 -0.2,-3.4 -0.4,-4.7 -0.1,-2.7 -0.3,-4.7 -0.3,-4.7 z" id="path1621" style="fill:#ffffff"></path>
    </g>
    <g id="g1623" style="display:inline">
      <path d="m 462.2,421.3 c 0,0 0.1,0.5 0.1,1.2 0.1,0.7 0.2,1.8 0.4,3.2 0.1,1.3 0.4,2.8 0.5,4.4 0.1,1.6 0.2,3.4 0.4,5.1 0.1,1.7 0.2,3.5 0.4,5.1 0.1,0.9 0,1.6 0,2.3 0,0.7 0,1.5 0,2.1 0,2.6 -0.1,4.4 -0.1,4.4 0,0 -0.1,-1.7 -0.2,-4.4 0,-0.6 0,-1.3 -0.1,-2.1 0,-0.7 0,-1.6 -0.1,-2.3 -0.1,-1.6 -0.2,-3.4 -0.4,-5.1 -0.1,-1.7 -0.2,-3.5 -0.4,-5.1 -0.1,-1.6 -0.2,-3.2 -0.4,-4.5 0,-2.5 -0.1,-4.3 -0.1,-4.3 z" id="path1625" style="fill:#ffffff"></path>
    </g>
    <g id="g1627" style="display:inline">
      <path d="m 465.4,423.7 c 0,0 0.2,1.6 0.6,3.9 0.4,2.3 0.6,5.5 0.7,8.6 0.1,1.6 0.1,3.2 0.1,4.6 0,1.5 -0.1,2.9 -0.1,4 0,0.6 -0.1,1.1 -0.1,1.6 0,0.5 -0.1,0.9 -0.1,1.2 -0.1,0.7 -0.1,1.1 -0.1,1.1 0,0 0,-0.4 0,-1.1 0,-0.4 0,-0.7 0,-1.2 0,-0.5 0.1,-1 0.1,-1.6 0,-1.2 0,-2.5 0,-4 -0.1,-1.5 -0.1,-3 -0.2,-4.6 -0.1,-1.6 -0.1,-3.2 -0.2,-4.6 -0.1,-1.5 -0.2,-2.8 -0.2,-4 -0.3,-2.3 -0.5,-3.9 -0.5,-3.9 z" id="path1629" style="fill:#ffffff"></path>
    </g>
    <g id="g1631" style="display:inline">
      <path d="m 468.6,427.1 c 0,0 0.1,0.4 0.2,1 0.1,0.6 0.2,1.5 0.4,2.4 0.1,1 0.2,2.2 0.4,3.5 0.1,1.3 0.1,2.7 0.2,4 0,0.7 0,1.3 0,2.1 0,0.8 0,1.3 0,1.9 0,0.6 -0.1,1.2 -0.1,1.8 -0.1,0.6 -0.1,1.1 -0.1,1.7 -0.4,2.1 -0.7,3.4 -0.7,3.4 0,0 0.1,-1.3 0.4,-3.4 0,-0.5 0,-1.1 0.1,-1.7 0,-0.6 0,-1.2 0.1,-1.8 0,-0.6 0,-1.3 0,-1.9 0,-0.7 0,-1.3 0,-2.1 -0.1,-1.3 -0.1,-2.7 -0.2,-4 -0.1,-1.2 -0.1,-2.4 -0.2,-3.5 -0.1,-1 -0.1,-1.8 -0.2,-2.4 -0.3,-0.8 -0.3,-1 -0.3,-1 z" id="path1633" style="fill:#ffffff"></path>
    </g>
    <g id="g1635" style="display:inline">
      <path d="m 472.1,432.4 c 0,0 0.1,0.9 0.2,2.2 0.1,1.3 0.1,3 0,4.7 -0.1,0.9 -0.1,1.7 -0.2,2.5 -0.1,0.9 -0.2,1.6 -0.5,2.2 -0.4,1.2 -0.7,2.1 -0.7,2.1 0,0 0.1,-0.9 0.4,-2.1 0.1,-0.6 0.1,-1.3 0.2,-2.2 0,-0.9 0.1,-1.7 0.2,-2.5 0,-0.9 0.1,-1.7 0.1,-2.6 0,-0.9 0.1,-1.6 0.1,-2.2 0.1,-1.2 0.2,-2.1 0.2,-2.1 z" id="path1637" style="fill:#ffffff"></path>
    </g>
    <g id="g1639" style="display:inline">
      <path d="m 476,400.4 c 0,0 0.1,0.1 0.2,0.4 0.1,0.2 0.4,0.6 0.7,1 0.4,0.5 0.6,1 1,1.6 0.4,0.6 0.7,1.3 1.2,2.2 0.4,0.9 0.9,1.7 1.2,2.7 0.4,1 0.9,1.9 1.2,3 0.5,1.1 0.9,2.2 1.2,3.3 0.4,1.1 0.7,2.3 1.1,3.4 0.4,1.1 0.6,2.3 1,3.5 0.4,1.1 0.6,2.3 0.9,3.4 0.2,1.1 0.6,2.2 0.7,3.2 0.2,1 0.4,1.9 0.6,2.9 0.7,3.5 1.2,5.9 1.2,5.9 0,0 -0.6,-2.3 -1.5,-5.8 -0.2,-0.9 -0.5,-1.8 -0.6,-2.8 -0.2,-1 -0.5,-2.1 -0.9,-3.2 -0.2,-1.1 -0.6,-2.2 -1,-3.4 -0.4,-1.1 -0.6,-2.3 -1,-3.4 -0.4,-1.1 -0.7,-2.3 -1.1,-3.4 -0.4,-1.1 -0.7,-2.2 -1.1,-3.3 -0.4,-1.1 -0.7,-2.1 -1.2,-3 -0.4,-1 -0.9,-1.8 -1.2,-2.7 -0.4,-0.9 -0.7,-1.6 -1.1,-2.2 -0.4,-0.6 -0.6,-1.2 -0.9,-1.7 -0.2,-0.5 -0.5,-0.9 -0.6,-1.1 0.1,-0.4 0,-0.5 0,-0.5 z" id="path1641" style="fill:#ffffff"></path>
    </g>
    <linearGradient x1="335.43509" y1="525.43042" x2="361.06451" y2="525.43042" id="SVGID_15_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop1644" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop1646" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 409.7,464.4 c 0,0 -3.5,-22.5 -1.9,-36.4 1.6,-14 7,-20 15.2,-22.6 8.1,-2.5 13.5,-0.7 15.1,7 1.6,7.8 -0.6,35 -1.3,44.2 -0.7,9.2 -2.2,7.3 -4.9,1 -2.7,-6.3 -6.6,-12.8 -8.7,-13.2 -2.2,-0.5 -4.1,13.1 -5.5,17.6 -1.4,4.4 -5.8,9.8 -8,2.4 z" id="path1648" style="fill:url(#SVGID_15_);display:inline"></path>
    <g id="g1650" style="display:inline">
      <path d="m 418.8,464.4 c 0,0 0.1,-0.9 0.2,-2.4 0.2,-1.5 0.4,-3.6 0.7,-6.3 0.2,-1.3 0.5,-2.7 0.7,-4.1 0.2,-1.5 0.5,-3 0.9,-4.6 0.4,-1.6 0.7,-3.3 1.2,-4.9 0.5,-1.7 0.9,-3.4 1.3,-5.1 0.5,-1.7 1,-3.3 1.3,-5 0.4,-1.7 0.9,-3.3 1.1,-4.9 0.2,-1.6 0.6,-3.2 0.9,-4.6 0.2,-1.5 0.5,-2.9 0.6,-4.1 0.1,-1.3 0.2,-2.4 0.4,-3.5 0.1,-1.1 0.1,-1.9 0.2,-2.8 0.1,-1.6 0.1,-2.4 0.1,-2.4 0,0 0.1,0.9 0.1,2.4 0,0.7 0.1,1.7 0.1,2.8 0,1.1 0,2.3 -0.1,3.5 0,1.3 -0.1,2.7 -0.4,4.2 -0.1,1.5 -0.4,3 -0.6,4.7 -0.2,1.6 -0.6,3.3 -1,5 -0.5,1.7 -0.9,3.4 -1.3,5 -0.5,1.7 -0.9,3.4 -1.3,5 -0.4,1.7 -1,3.3 -1.3,4.9 -0.7,3.2 -1.5,6.1 -2.1,8.6 -0.5,2.6 -1,4.6 -1.3,6.2 -0.3,1.4 -0.4,2.4 -0.4,2.4 z" id="path1652" style="fill:#ffffff"></path>
    </g>
    <g id="g1654" style="display:inline">
      <path d="m 413.3,464.9 c 0,0 0.9,-3.5 2.2,-8.9 0.7,-2.7 1.5,-5.7 2.4,-9 0.9,-3.3 1.8,-6.8 2.8,-10.3 0.5,-1.7 1,-3.5 1.5,-5.2 0.5,-1.7 1,-3.4 1.2,-5.1 0.4,-1.7 0.7,-3.3 1,-4.9 0.2,-1.6 0.6,-3 0.7,-4.4 0.4,-2.7 0.6,-5 0.7,-6.6 0.1,-1.6 0.1,-2.5 0.1,-2.5 0,0 0,0.8 0,2.5 0,0.9 -0.1,1.8 -0.1,2.9 -0.1,1.1 -0.2,2.3 -0.4,3.8 -0.1,1.3 -0.4,2.8 -0.6,4.4 -0.2,1.6 -0.6,3.2 -1,4.9 -0.4,1.7 -0.9,3.4 -1.2,5.1 -0.5,1.7 -1,3.5 -1.3,5.2 -1,3.5 -1.9,7 -2.9,10.3 -1,3.3 -1.8,6.3 -2.6,9 -1.5,5.4 -2.5,8.8 -2.5,8.8 z" id="path1656" style="fill:#ffffff"></path>
    </g>
    <g id="g1658" style="display:inline">
      <path d="m 411.8,463.4 c 0,0 0.7,-3.4 1.9,-8.6 0.6,-2.5 1.3,-5.6 2.1,-8.9 0.7,-3.3 1.6,-6.7 2.4,-10.1 0.5,-1.7 0.9,-3.4 1.3,-5.1 0.2,-0.9 0.4,-1.7 0.6,-2.6 0.1,-0.9 0.4,-1.7 0.5,-2.4 0.4,-1.6 0.7,-3.2 1,-4.7 0.2,-1.5 0.5,-2.9 0.6,-4.2 0.2,-1.3 0.4,-2.6 0.5,-3.6 0.1,-1.1 0.2,-2.1 0.4,-2.8 0.1,-1.6 0.2,-2.4 0.2,-2.4 0,0 0,0.8 -0.1,2.4 0,0.7 -0.1,1.7 -0.2,2.8 -0.1,1.1 -0.2,2.3 -0.4,3.6 -0.1,1.3 -0.4,2.8 -0.5,4.2 -0.2,1.5 -0.6,3 -0.9,4.7 -0.1,0.9 -0.4,1.7 -0.5,2.4 -0.2,0.9 -0.4,1.7 -0.6,2.6 -0.4,1.7 -0.9,3.4 -1.2,5.1 -0.9,3.4 -1.7,6.9 -2.6,10.1 -0.9,3.2 -1.6,6.2 -2.3,8.7 -1.3,5.4 -2.2,8.8 -2.2,8.8 z" id="path1660" style="fill:#ffffff"></path>
    </g>
    <g id="g1662" style="display:inline">
      <path d="m 420.4,408.6 c 0,0 -0.1,0.9 -0.2,2.2 -0.1,1.3 -0.4,3.4 -0.7,5.7 -0.4,2.4 -0.9,5.1 -1.3,8 -0.2,1.5 -0.5,3 -0.9,4.5 -0.4,1.6 -0.7,3 -1.1,4.6 -0.7,3.2 -1.5,6.2 -2.2,9.1 -0.4,1.5 -0.7,2.8 -1.1,4.1 -0.4,1.3 -0.6,2.6 -0.9,3.8 -0.2,1.2 -0.5,2.2 -0.6,3.2 -0.1,1 -0.2,1.8 -0.4,2.4 -0.1,0.7 -0.2,1.2 -0.2,1.6 0,0.4 0,0.6 0,0.6 0,0 0,-0.2 0,-0.6 0,-0.4 0,-1 0.1,-1.6 0.1,-0.7 0.1,-1.6 0.2,-2.6 0.1,-1 0.4,-2.1 0.6,-3.3 0.2,-1.2 0.4,-2.4 0.7,-3.8 0.4,-1.3 0.6,-2.8 1,-4.2 0.7,-2.9 1.5,-6.1 2.2,-9.1 0.4,-1.6 0.7,-3.2 1.1,-4.6 0.4,-1.6 0.7,-3 1,-4.5 0.5,-2.9 1.2,-5.7 1.6,-8 0.4,-2.3 0.7,-4.4 1,-5.7 0.1,-1 0.1,-1.8 0.1,-1.8 z" id="path1664" style="fill:#ffffff"></path>
    </g>
    <g id="g1666" style="display:inline">
      <path d="m 417.6,410.5 c 0,0 -0.5,2.5 -1.1,6.3 -0.4,1.8 -0.7,4 -1.2,6.4 -0.5,2.3 -1,4.9 -1.5,7.3 -0.5,2.6 -1,5 -1.5,7.3 -0.5,2.3 -1,4.5 -1.3,6.4 -0.2,1 -0.4,1.8 -0.5,2.6 -0.1,0.7 -0.2,1.5 -0.4,1.9 -0.2,1.1 -0.2,1.7 -0.2,1.7 0,0 0.1,-0.6 0.2,-1.7 0.1,-0.6 0.1,-1.2 0.2,-1.9 0.1,-0.7 0.2,-1.6 0.4,-2.6 0.4,-1.8 0.7,-4 1.1,-6.4 0.5,-2.3 1,-4.9 1.5,-7.3 0.5,-2.4 1.1,-5 1.6,-7.3 0.5,-2.3 1,-4.5 1.3,-6.3 0.8,-4 1.4,-6.4 1.4,-6.4 z" id="path1668" style="fill:#ffffff"></path>
    </g>
    <g id="g1670" style="display:inline">
      <path d="m 409.1,443.4 c 0,0 0.1,-1.8 0.5,-4.6 0.2,-2.8 0.9,-6.4 1.5,-10.2 0.2,-1.8 0.7,-3.6 1,-5.3 0.4,-1.7 0.7,-3.3 1.1,-4.6 0.1,-0.7 0.4,-1.3 0.5,-1.8 0.1,-0.5 0.4,-1 0.5,-1.5 0.2,-0.7 0.4,-1.2 0.4,-1.2 0,0 -0.1,0.5 -0.2,1.2 -0.1,0.9 -0.5,1.9 -0.7,3.3 -0.2,1.3 -0.6,2.9 -0.9,4.7 -0.2,1.7 -0.6,3.5 -1,5.3 -1.5,7.3 -2.7,14.7 -2.7,14.7 z" id="path1672" style="fill:#ffffff"></path>
    </g>
    <g id="g1674" style="display:inline">
      <path d="m 409,431.8 c 0,0 0,-0.7 0,-1.9 0,-0.6 0.1,-1.2 0.1,-1.9 0.1,-0.7 0.2,-1.5 0.4,-2.2 0.1,-0.7 0.2,-1.5 0.4,-2.2 0.1,-0.7 0.4,-1.3 0.5,-1.8 0.2,-1.1 0.6,-1.8 0.6,-1.8 0,0 0,0.7 -0.2,1.8 -0.1,1.1 -0.4,2.6 -0.6,4.1 -0.2,1.5 -0.5,2.9 -0.7,4 -0.4,1.2 -0.5,1.9 -0.5,1.9 z" id="path1676" style="fill:#ffffff"></path>
    </g>
    <g id="g1678" style="display:inline">
      <path d="m 433.6,455.9 c 0,0 0.5,-12.3 1.1,-24.4 0.1,-3 0.1,-6.1 0.2,-9 0,-1.5 0,-2.8 0,-4.1 -0.1,-1.3 -0.1,-2.6 -0.2,-3.6 -0.1,-1.1 -0.2,-2.2 -0.4,-3 -0.1,-0.8 -0.4,-1.7 -0.6,-2.3 -0.2,-0.6 -0.5,-1.1 -0.7,-1.3 -0.2,-0.2 -0.2,-0.5 -0.2,-0.5 0,0 0.1,0.1 0.4,0.5 0.2,0.2 0.5,0.7 0.7,1.3 0.2,0.6 0.5,1.5 0.7,2.3 0.1,0.5 0.1,1 0.2,1.5 0.1,0.5 0.1,1.1 0.2,1.6 0.1,1.1 0.1,2.4 0.2,3.6 0,1.3 0.1,2.7 0.1,4.1 0,2.9 -0.1,5.9 -0.1,9 -0.1,3 -0.4,6.1 -0.5,9 -0.1,2.9 -0.4,5.6 -0.5,7.8 -0.1,2.3 -0.4,4.1 -0.5,5.5 0,1.1 -0.1,2 -0.1,2 z" id="path1680" style="fill:#ffffff"></path>
    </g>
    <g id="g1682" style="display:inline">
      <path d="m 430.6,408.3 c 0,0 0.4,0.6 0.7,1.7 0.1,0.6 0.4,1.2 0.6,2.1 0.1,0.8 0.4,1.7 0.5,2.8 0.1,0.5 0.1,1 0.2,1.6 0,0.6 0.1,1.1 0.1,1.7 0.1,1.2 0.2,2.4 0.2,3.6 0,0.6 0,1.3 0,1.9 0,0.6 0,1.3 0,1.9 0,1.3 0,2.7 -0.1,4 0,1.3 0,2.7 -0.1,4 -0.1,1.3 -0.1,2.7 -0.2,3.9 -0.1,2.6 -0.4,4.9 -0.5,6.9 -0.4,4 -0.6,6.8 -0.6,6.8 0,0 0.1,-2.7 0.4,-6.8 0.1,-2.1 0.2,-4.4 0.4,-6.9 0,-1.2 0.1,-2.6 0.2,-3.9 0.1,-1.3 0.1,-2.7 0.1,-4 0,-1.3 0.1,-2.7 0.1,-4 0,-0.6 0,-1.3 0,-1.9 0,-0.6 0,-1.3 0,-1.9 0,-1.2 0,-2.6 -0.1,-3.6 0,-0.6 -0.1,-1.1 -0.1,-1.7 0,-0.5 -0.1,-1.1 -0.1,-1.6 -0.1,-1 -0.2,-1.9 -0.4,-2.8 -0.1,-0.9 -0.4,-1.5 -0.5,-2.1 -0.4,-1.1 -0.8,-1.7 -0.8,-1.7 z" id="path1684" style="fill:#ffffff"></path>
    </g>
    <g id="g1686" style="display:inline">
      <path d="m 429.1,447.6 c 0,0 0,-1.8 0.1,-4.5 0.1,-2.7 0.2,-6.3 0.5,-9.8 0.1,-1.8 0.1,-3.6 0.2,-5.2 0.1,-1.7 0.1,-3.3 0.1,-4.6 0.1,-1.3 0,-2.4 0,-3.3 0,-0.7 0,-1.2 0,-1.2 0,0 0,0.5 0.1,1.2 0,0.7 0.2,1.9 0.2,3.3 0,1.3 0.1,2.9 0,4.6 0,1.7 -0.1,3.5 -0.1,5.2 -0.1,1.8 -0.2,3.6 -0.4,5.2 -0.1,1.7 -0.2,3.3 -0.4,4.6 0,2.7 -0.3,4.5 -0.3,4.5 z" id="path1688" style="fill:#ffffff"></path>
    </g>
    <g id="g1690" style="display:inline">
      <path d="m 426.9,444.7 c 0,0 0,-0.7 0,-1.8 0,-0.5 0,-1.2 0.1,-1.8 0,-0.7 0.1,-1.3 0.1,-2.1 0.1,-1.5 0.2,-2.8 0.5,-3.9 0.1,-1.1 0.4,-1.8 0.4,-1.8 0,0 0,0.7 0,1.8 0,1.1 -0.1,2.5 -0.1,3.9 -0.1,1.5 -0.4,2.8 -0.5,3.9 -0.2,1.1 -0.5,1.8 -0.5,1.8 z" id="path1692" style="fill:#ffffff"></path>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="calves" class="workout-part" onclick="navigateToWorkout('calves')">
    <linearGradient x1="380.6702" y1="488.22769" x2="430.8042" y2="488.22769" id="SVGID_16_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop1696" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop1698" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 480.9,481.6 c 0,0 -0.2,-6.7 -5.5,-10.7 -5.2,-4 -11.5,-8.5 -13.1,-13.6 -1.6,-5.1 15.2,-4.6 23.3,-0.6 8.1,4 -3.9,-9.1 3.9,-6.3 7.8,2.8 14.8,7.9 22.5,22.5 7.6,14.6 10,21.9 10.9,30.6 1,8.7 -7.9,1.8 -9.7,2.2 -1.8,0.4 -3.4,8.7 -13.1,6.7 -9.7,-2.1 -17.2,-13.1 -18.5,-21.2 -1.2,-8.3 -0.7,-9.6 -0.7,-9.6 z" id="path1700" style="fill:url(#SVGID_16_);display:inline"></path>
    <linearGradient x1="340.39151" y1="474.22079" x2="366.64261" y2="474.22079" id="SVGID_17_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop1703" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop1705" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 426.5,488 c 0,0 0.9,-4.5 -5.7,-10.1 -6.6,-5.6 -7.9,-3 -7.3,1.6 0.6,4.6 1.2,9.4 0.9,14.3 -0.4,5.1 -1.8,20.3 12.8,27.9 14.6,7.6 20.4,-4.5 17.4,-15.4 -3,-10.9 -7,-29.1 -8.7,-32.8 -1.6,-3.6 -5.8,2.4 -6.7,7 -0.9,5 -0.6,7.8 -2.7,7.5 z" id="path1707" style="fill:url(#SVGID_17_);display:inline"></path>
    <path d="m 489.1,458.9 c 0,0 0.6,0.4 1.5,1 0.9,0.7 2.2,1.6 3.6,2.9 0.7,0.6 1.5,1.3 2.3,2.1 0.9,0.7 1.7,1.6 2.4,2.5 0.9,0.9 1.7,1.8 2.4,2.8 0.9,1 1.6,1.9 2.4,3 0.9,1 1.5,2.2 2.2,3.2 0.7,1.1 1.3,2.2 1.9,3.2 0.6,1 1.1,2.1 1.6,3.2 0.5,1 1,1.9 1.3,2.8 0.4,0.9 0.7,1.7 1,2.4 0.3,0.7 0.5,1.5 0.6,1.9 0.4,1.1 0.5,1.7 0.5,1.7 0,0 -0.2,-0.6 -0.7,-1.6 -0.2,-0.5 -0.5,-1.1 -0.9,-1.8 -0.4,-0.7 -0.7,-1.5 -1.2,-2.3 -0.5,-0.9 -0.9,-1.8 -1.5,-2.7 -0.6,-1 -1.1,-1.9 -1.8,-2.9 -0.6,-1 -1.2,-2.1 -2.1,-3.2 -0.7,-1.1 -1.5,-2.1 -2.2,-3.2 -0.7,-1.1 -1.5,-2.1 -2.3,-3 -0.7,-1 -1.6,-1.9 -2.3,-2.8 -1.6,-1.8 -3,-3.5 -4.5,-4.9 -2.1,-2.6 -4.2,-4.3 -4.2,-4.3 z" id="path1709" style="fill:#ffffff;display:inline"></path>
    <g id="g1711" style="display:inline">
      <path d="m 481.8,457.6 c 0,0 0.2,0.1 0.6,0.2 0.4,0.2 1,0.5 1.6,1 0.6,0.5 1.5,0.9 2.3,1.6 0.9,0.7 1.9,1.3 2.9,2.3 1,0.9 2.2,1.8 3.2,2.9 1.1,1.1 2.3,2.2 3.4,3.5 1.1,1.2 2.2,2.5 3.4,3.9 1.1,1.5 2.1,2.8 3.2,4.2 1.1,1.5 1.9,3 2.9,4.5 0.9,1.5 1.8,2.9 2.6,4.5 0.4,0.7 0.7,1.5 1.1,2.2 0.1,0.4 0.4,0.7 0.5,1.1 0.1,0.4 0.2,0.7 0.4,1.1 0.2,0.7 0.5,1.5 0.7,2.1 0.2,0.7 0.5,1.3 0.6,1.9 0.2,1.3 0.6,2.5 0.7,3.6 0,0.5 0.1,1.1 0.1,1.6 0,0.5 0,0.9 0,1.3 0,0.7 -0.1,1.3 -0.2,1.8 0,0.2 -0.1,0.4 -0.1,0.5 0,0.1 0,0.1 0,0.1 0,0 0,0 0,-0.1 0,-0.1 0.1,-0.2 0.1,-0.5 0.1,-0.4 0.1,-1 0.1,-1.8 0,-0.4 0,-0.9 0,-1.3 0,-0.4 -0.1,-1 -0.2,-1.5 0,-0.5 -0.1,-1.1 -0.2,-1.7 -0.1,-0.6 -0.2,-1.2 -0.5,-1.8 -0.1,-0.6 -0.4,-1.3 -0.6,-1.9 -0.2,-0.7 -0.5,-1.3 -0.7,-2.1 -0.1,-0.4 -0.2,-0.7 -0.4,-1.1 -0.1,-0.4 -0.4,-0.7 -0.5,-1.1 -0.4,-0.7 -0.7,-1.5 -1.1,-2.2 -0.7,-1.6 -1.7,-2.9 -2.5,-4.5 -1,-1.5 -1.8,-3 -2.9,-4.4 -1.1,-1.5 -2.1,-2.9 -3.2,-4.2 -1.1,-1.3 -2.2,-2.7 -3.3,-3.9 -1.1,-1.3 -2.3,-2.4 -3.3,-3.5 -1,-1.1 -2.2,-2.1 -3.2,-2.9 -1,-1 -1.9,-1.6 -2.8,-2.3 -0.9,-0.7 -1.7,-1.2 -2.3,-1.7 -0.6,-0.5 -1.2,-0.7 -1.6,-1 -0.6,-0.3 -0.8,-0.4 -0.8,-0.4 z" id="path1713" style="fill:#ffffff"></path>
    </g>
    <g id="g1715" style="display:inline">
      <path d="m 471.8,455.4 c 0,0 0.2,0.1 0.7,0.2 0.5,0.2 1.1,0.4 1.9,0.7 0.9,0.4 1.8,0.7 2.9,1.5 1.1,0.6 2.4,1.2 3.6,2.2 1.3,0.9 2.8,1.7 4.1,2.9 0.7,0.6 1.5,1.1 2.2,1.7 0.4,0.2 0.7,0.6 1.1,0.9 0.4,0.4 0.7,0.6 1.1,1 0.7,0.7 1.5,1.3 2.2,2.1 0.7,0.7 1.6,1.3 2.2,2.2 1.3,1.6 2.8,3.2 4.1,4.7 1.3,1.7 2.6,3.3 3.6,5.1 0.6,0.9 1.1,1.7 1.7,2.5 0.5,0.9 1.1,1.7 1.5,2.6 0.5,0.9 1,1.7 1.3,2.6 0.4,0.9 0.7,1.7 1.1,2.5 0.1,0.4 0.4,0.9 0.5,1.2 0.1,0.4 0.2,0.9 0.4,1.2 0.2,0.9 0.5,1.6 0.6,2.3 0.4,1.6 0.6,2.9 0.6,4.2 0.1,1.2 0.1,2.4 0,3.3 -0.1,1 -0.2,1.6 -0.4,2.1 -0.1,0.5 -0.2,0.7 -0.2,0.7 0,0 0.1,-0.2 0.1,-0.7 0.1,-0.5 0.2,-1.2 0.2,-2.1 0.1,-0.9 0,-2.1 0,-3.3 -0.1,-1.2 -0.4,-2.7 -0.7,-4.1 -0.2,-0.7 -0.4,-1.6 -0.6,-2.3 -0.1,-0.4 -0.2,-0.9 -0.4,-1.2 -0.1,-0.4 -0.4,-0.9 -0.5,-1.2 -0.4,-0.9 -0.7,-1.7 -1.1,-2.6 -0.4,-0.9 -0.9,-1.7 -1.3,-2.6 -0.5,-0.9 -1,-1.7 -1.5,-2.5 -0.5,-0.9 -1.1,-1.7 -1.7,-2.6 -1.1,-1.7 -2.4,-3.4 -3.8,-5 -1.3,-1.6 -2.7,-3.2 -4,-4.7 -0.6,-0.9 -1.5,-1.5 -2.2,-2.2 -0.7,-0.7 -1.5,-1.3 -2.2,-2.1 -0.4,-0.4 -0.7,-0.7 -1.1,-1 -0.4,-0.2 -0.7,-0.6 -1.1,-0.9 -0.7,-0.6 -1.5,-1.2 -2.2,-1.7 -1.3,-1.2 -2.8,-2.1 -4.1,-2.9 -0.6,-0.5 -1.2,-0.9 -1.9,-1.2 -0.6,-0.4 -1.2,-0.7 -1.7,-1 -1.1,-0.6 -2.1,-1.1 -2.9,-1.5 -0.9,-0.4 -1.5,-0.6 -1.9,-0.9 0,-0.1 -0.2,-0.1 -0.2,-0.1 z" id="path1717" style="fill:#ffffff"></path>
    </g>
    <g id="g1719" style="display:inline">
      <path d="m 467.4,455.6 c 0,0 0.2,0.1 0.7,0.2 0.5,0.2 1.2,0.5 2.1,0.9 0.9,0.4 1.9,0.9 3,1.5 0.6,0.4 1.2,0.6 1.8,1 0.6,0.4 1.3,0.9 1.9,1.2 0.7,0.5 1.3,0.9 2.2,1.3 0.7,0.5 1.5,1.1 2.2,1.6 0.7,0.6 1.6,1.1 2.3,1.7 0.7,0.6 1.5,1.3 2.3,1.9 0.7,0.7 1.6,1.3 2.3,2.1 0.7,0.8 1.5,1.5 2.2,2.3 0.7,0.7 1.5,1.6 2.2,2.3 0.7,0.9 1.5,1.7 2.1,2.4 1.3,1.7 2.7,3.4 3.8,5.2 0.6,0.9 1.1,1.8 1.7,2.7 0.5,0.9 1,1.8 1.5,2.7 0.9,1.8 1.7,3.6 2.3,5.3 0.4,0.9 0.6,1.7 0.9,2.6 0.2,0.9 0.4,1.7 0.6,2.4 0.4,1.6 0.5,3 0.5,4.4 0,0.6 0,1.3 0,1.8 -0.1,0.6 -0.1,1.1 -0.1,1.6 -0.2,1 -0.4,1.7 -0.5,2.2 -0.1,0.5 -0.2,0.7 -0.2,0.7 0,0 0.1,-0.2 0.2,-0.7 0.1,-0.5 0.2,-1.2 0.5,-2.2 0,-0.5 0.1,-1 0.1,-1.6 0,-0.6 0,-1.2 0,-1.8 -0.1,-1.3 -0.2,-2.8 -0.6,-4.4 -0.1,-0.9 -0.4,-1.6 -0.6,-2.4 -0.2,-0.9 -0.5,-1.7 -0.9,-2.6 -0.6,-1.7 -1.5,-3.5 -2.3,-5.3 -0.5,-0.9 -1,-1.8 -1.5,-2.7 -0.6,-0.9 -1.1,-1.8 -1.7,-2.7 -1.2,-1.8 -2.4,-3.5 -3.9,-5.1 -0.7,-0.9 -1.3,-1.7 -2.1,-2.4 -0.8,-0.7 -1.5,-1.6 -2.2,-2.3 -0.7,-0.7 -1.5,-1.6 -2.2,-2.3 -0.7,-0.7 -1.6,-1.3 -2.3,-2.1 -0.7,-0.8 -1.5,-1.3 -2.2,-1.9 -0.7,-0.6 -1.6,-1.2 -2.3,-1.7 -0.7,-0.6 -1.5,-1.1 -2.2,-1.7 -0.7,-0.5 -1.5,-1 -2.1,-1.3 -0.7,-0.5 -1.3,-0.9 -1.9,-1.2 -0.6,-0.4 -1.2,-0.7 -1.8,-1.1 -1.1,-0.7 -2.2,-1.2 -3,-1.6 -0.9,-0.5 -1.6,-0.7 -1.9,-0.9 -0.7,0.1 -0.9,0 -0.9,0 z" id="path1721" style="fill:#ffffff"></path>
    </g>
    <g id="g1723" style="display:inline">
      <path d="m 466.4,457.6 c 0,0 0.2,0 0.7,0.2 0.5,0.2 1.1,0.5 1.8,0.9 1.6,0.9 3.8,2.1 6.3,3.8 2.4,1.7 5.2,3.9 8,6.6 1.3,1.3 2.8,2.7 4.1,4.1 0.7,0.7 1.3,1.5 1.9,2.3 0.6,0.7 1.2,1.6 1.8,2.4 1.2,1.6 2.2,3.4 3.3,5.1 0.5,0.9 1.1,1.7 1.6,2.6 0.5,0.9 0.9,1.7 1.3,2.6 0.4,0.9 1,1.7 1.2,2.5 0.4,0.9 0.7,1.7 1,2.4 0.7,1.6 1.1,3.2 1.6,4.6 0.4,1.5 0.6,2.8 0.9,4 0.1,1.2 0.2,2.3 0.2,3.2 0,0.9 0,1.6 -0.1,2.1 0,0.5 -0.1,0.7 -0.1,0.7 0,0 0,-0.2 0,-0.7 0,-0.5 0,-1.2 0,-2.1 0,-0.9 -0.2,-1.9 -0.4,-3.2 -0.1,-0.6 -0.2,-1.2 -0.4,-1.9 -0.1,-0.6 -0.2,-1.3 -0.5,-2.1 -0.5,-1.5 -0.9,-3 -1.6,-4.6 -0.4,-0.9 -0.7,-1.6 -1.1,-2.4 -0.4,-0.8 -0.9,-1.6 -1.2,-2.4 -0.5,-0.9 -0.9,-1.7 -1.3,-2.6 -0.5,-0.9 -1.1,-1.7 -1.6,-2.6 -1.1,-1.7 -2.1,-3.4 -3.3,-5 -0.6,-0.9 -1.2,-1.6 -1.8,-2.4 -0.6,-0.7 -1.2,-1.6 -1.9,-2.3 -1.3,-1.5 -2.7,-2.9 -4,-4.2 -2.7,-2.6 -5.5,-4.9 -7.9,-6.6 -2.4,-1.7 -4.6,-3 -6.2,-3.9 -0.7,-0.4 -1.3,-0.7 -1.8,-1 -0.3,0 -0.5,-0.1 -0.5,-0.1 z" id="path1725" style="fill:#ffffff"></path>
    </g>
    <g id="g1727" style="display:inline">
      <path d="m 468.2,461.6 c 0,0 0.7,0.5 2.1,1.2 0.6,0.5 1.5,1 2.3,1.6 0.8,0.6 1.8,1.3 2.9,2.2 1,0.9 2.2,1.8 3.3,2.8 1.1,1.1 2.3,2.2 3.4,3.4 1.1,1.2 2.3,2.6 3.4,3.9 1.1,1.5 2.2,2.8 3.2,4.2 1,1.6 1.8,3 2.8,4.5 0.9,1.6 1.6,3 2.4,4.6 0.7,1.5 1.3,3 1.9,4.4 0.6,1.5 1,2.8 1.5,4.1 0.4,1.3 0.7,2.4 1,3.5 0.2,1.1 0.5,1.9 0.6,2.8 0.1,0.7 0.2,1.3 0.2,1.8 0,0.4 0,0.6 0,0.6 0,0 0,-0.2 -0.1,-0.6 0,-0.4 -0.1,-1 -0.2,-1.8 -0.1,-0.7 -0.4,-1.7 -0.6,-2.8 -0.2,-1.1 -0.7,-2.2 -1.1,-3.5 -0.5,-1.2 -1,-2.7 -1.5,-4 -0.6,-1.3 -1.2,-2.9 -2.1,-4.4 -0.9,-1.5 -1.6,-3 -2.4,-4.5 -1,-1.5 -1.9,-3 -2.8,-4.5 -1.1,-1.5 -2.1,-2.9 -3.2,-4.2 -1.1,-1.3 -2.3,-2.7 -3.3,-3.9 -1.1,-1.2 -2.3,-2.3 -3.4,-3.4 -1.1,-1.1 -2.2,-1.9 -3.2,-2.9 -1,-0.9 -1.9,-1.6 -2.8,-2.3 -0.9,-0.6 -1.7,-1.2 -2.3,-1.7 -1.1,-0.6 -2,-1.1 -2,-1.1 z" id="path1729" style="fill:#ffffff"></path>
    </g>
    <g id="g1731" style="display:inline">
      <path d="m 483.8,479.8 c 0,0 0.9,1.6 2.2,4 1.3,2.4 3,5.6 4.6,8.9 1.6,3.3 3.2,6.6 4.2,9 1.1,2.4 1.8,4.1 1.8,4.1 0,0 -0.9,-1.6 -2.1,-4 -1.2,-2.4 -2.9,-5.7 -4.5,-8.9 -0.7,-1.6 -1.6,-3.3 -2.3,-4.7 -0.7,-1.6 -1.5,-2.9 -2.1,-4.1 -1.1,-2.7 -1.8,-4.3 -1.8,-4.3 z" id="path1733" style="fill:#ffffff"></path>
    </g>
    <g id="g1735" style="display:inline">
      <path d="m 484.4,486.5 c 0,0 0.1,0.4 0.2,0.9 0.2,0.6 0.5,1.3 0.9,2.3 0.4,1 0.9,2.1 1.2,3.2 0.5,1.2 1.1,2.3 1.6,3.5 0.2,0.6 0.6,1.2 0.9,1.8 0.2,0.6 0.6,1.2 0.9,1.7 0.4,0.5 0.6,1.1 0.9,1.6 0.2,0.5 0.5,1 0.9,1.3 1.2,1.6 1.9,2.7 1.9,2.7 0,0 -0.9,-1 -2.2,-2.6 -0.4,-0.4 -0.6,-0.9 -0.9,-1.3 -0.4,-0.5 -0.6,-1 -1,-1.6 -0.4,-0.5 -0.6,-1.1 -1,-1.7 -0.4,-0.6 -0.6,-1.2 -1,-1.8 -0.5,-1.2 -1.1,-2.4 -1.6,-3.6 -0.5,-1.2 -0.9,-2.3 -1.1,-3.3 -0.4,-1 -0.5,-1.8 -0.6,-2.3 0,-0.5 0,-0.8 0,-0.8 z" id="path1737" style="fill:#ffffff"></path>
    </g>
    <g id="g1739" style="display:inline">
      <path d="m 491.5,456.4 c 0,0 0.7,0.5 1.9,1.3 0.6,0.5 1.3,1.1 2.2,1.7 0.9,0.7 1.7,1.5 2.7,2.4 1,0.9 1.9,1.9 2.9,3 1,1.1 2.1,2.3 3,3.6 0.9,1.3 2.1,2.7 2.9,4.1 0.5,0.7 1,1.5 1.5,2.2 l 1.3,2.3 c 0.9,1.5 1.6,3.2 2.3,4.7 0.7,1.6 1.2,3.2 1.8,4.7 0.1,0.4 0.2,0.7 0.4,1.1 0.1,0.4 0.2,0.7 0.4,1.1 0.2,0.7 0.4,1.5 0.6,2.2 0.1,0.7 0.4,1.5 0.5,2.1 0.1,0.7 0.2,1.3 0.4,2.1 0.2,1.3 0.5,2.4 0.5,3.5 0.1,1.1 0.1,1.9 0.2,2.8 0.1,1.6 0.1,2.4 0.1,2.4 0,0 -0.1,-0.9 -0.2,-2.4 -0.1,-0.7 -0.1,-1.7 -0.2,-2.7 -0.1,-1.1 -0.4,-2.2 -0.6,-3.5 -0.1,-0.6 -0.2,-1.3 -0.4,-1.9 -0.1,-0.7 -0.4,-1.3 -0.6,-2.1 -0.2,-0.7 -0.4,-1.5 -0.6,-2.2 -0.1,-0.4 -0.2,-0.7 -0.4,-1.1 -0.1,-0.4 -0.2,-0.7 -0.5,-1.1 -0.6,-1.5 -1.1,-3.2 -1.8,-4.6 -0.7,-1.6 -1.5,-3.2 -2.3,-4.6 l -1.2,-2.3 c -0.5,-0.7 -1,-1.5 -1.3,-2.2 -0.9,-1.5 -1.9,-2.8 -2.9,-4.1 -1,-1.2 -2.1,-2.6 -3,-3.6 -1,-1.1 -1.9,-2.2 -2.9,-3 -1.8,-1.8 -3.5,-3.3 -4.6,-4.2 -1.5,-1.1 -2.1,-1.7 -2.1,-1.7 z" id="path1741" style="fill:#ffffff"></path>
    </g>
    <g id="g1743" style="display:inline">
      <path d="m 494.9,456.1 c 0,0 0.6,0.2 1.5,0.9 0.9,0.5 1.9,1.3 3,2.2 0.5,0.5 1,0.9 1.5,1.3 0.5,0.5 0.9,0.9 1.1,1.3 0.6,0.9 1,1.3 1,1.3 0,0 -0.5,-0.5 -1.2,-1.2 -0.4,-0.4 -0.9,-0.7 -1.2,-1.2 -0.5,-0.5 -1,-0.9 -1.5,-1.3 -0.5,-0.5 -1,-0.9 -1.5,-1.3 -0.5,-0.4 -1,-0.9 -1.3,-1.1 -0.7,-0.4 -1.4,-0.9 -1.4,-0.9 z" id="path1745" style="fill:#ffffff"></path>
    </g>
    <g id="g1747" style="display:inline">
      <path d="m 518.6,493 c 0,0 0.4,0.7 0.7,1.9 0.1,0.6 0.4,1.2 0.5,1.9 0.1,0.7 0.2,1.6 0.4,2.3 0.1,0.9 0.1,1.6 0.1,2.3 0,0.7 0,1.5 -0.1,2.1 -0.1,1.2 -0.2,1.9 -0.2,1.9 0,0 0,-0.9 0,-1.9 0,-0.6 0,-1.3 0,-2.1 0,-0.8 -0.1,-1.6 -0.1,-2.3 0,-0.9 -0.1,-1.6 -0.2,-2.3 -0.1,-0.7 -0.2,-1.5 -0.4,-2.1 -0.4,-0.9 -0.7,-1.7 -0.7,-1.7 z" id="path1749" style="fill:#ffffff"></path>
    </g>
    <g id="g1751" style="display:inline">
      <path d="m 427.3,489.4 c 0,0 0.2,0.5 0.7,1.2 0.2,0.4 0.5,0.9 0.7,1.5 0.2,0.6 0.6,1.2 0.9,1.9 0.4,0.7 0.6,1.5 0.9,2.3 0.2,0.9 0.7,1.7 0.9,2.7 0.2,1 0.5,1.9 0.9,2.9 0.4,1 0.5,1.9 0.7,3 0.2,1 0.4,2.1 0.6,3 0.1,1 0.2,2.1 0.4,3 0.1,1 0.2,1.9 0.2,2.8 0.1,0.9 0.1,1.7 0.1,2.6 0,3.2 0,5.2 0,5.2 0,0 -0.1,-2.1 -0.2,-5.2 0,-0.7 0,-1.6 -0.1,-2.6 -0.1,-0.8 -0.2,-1.8 -0.4,-2.8 -0.1,-1 -0.2,-1.9 -0.4,-2.9 -0.2,-1 -0.4,-2.1 -0.6,-3 -0.2,-1 -0.4,-2.1 -0.6,-3 -0.2,-1 -0.5,-1.9 -0.7,-2.9 -0.2,-1 -0.6,-1.8 -0.9,-2.7 -0.2,-0.9 -0.5,-1.7 -0.9,-2.3 -0.2,-0.7 -0.5,-1.3 -0.7,-1.9 -0.2,-0.6 -0.5,-1.1 -0.6,-1.5 -0.6,-1 -0.9,-1.3 -0.9,-1.3 z" id="path1753" style="fill:#ffffff"></path>
    </g>
    <g id="g1755" style="display:inline">
      <path d="m 430.8,480.5 c 0,0 0,0.1 0,0.5 0,0.4 0,0.7 0,1.3 0,0.6 0.1,1.3 0.1,2.1 0,0.9 0.2,1.7 0.4,2.7 0.1,1 0.2,2.1 0.5,3.2 0.2,1.1 0.5,2.3 0.9,3.5 0.2,1.2 0.6,2.4 0.9,3.8 0.4,1.2 0.6,2.6 1,3.9 0.2,1.3 0.5,2.7 0.7,3.9 0.2,1.3 0.4,2.6 0.6,3.8 0.1,1.2 0.2,2.4 0.4,3.6 0,1.1 0.1,2.2 0.1,3.3 0,1 0,1.9 0,2.7 0,0.8 -0.1,1.5 -0.1,2.1 -0.1,1.2 -0.2,1.8 -0.2,1.8 0,0 0,-0.6 0.1,-1.8 0,-0.6 0,-1.3 0,-2.1 0,-0.9 0,-1.7 0,-2.7 0,-1 -0.1,-2.1 -0.2,-3.2 -0.1,-1.1 -0.2,-2.3 -0.4,-3.5 -0.1,-1.2 -0.4,-2.6 -0.6,-3.8 -0.2,-1.3 -0.5,-2.6 -0.7,-3.9 -0.4,-1.3 -0.6,-2.6 -1,-3.9 -0.2,-1.3 -0.6,-2.5 -0.9,-3.8 -0.2,-1.2 -0.5,-2.4 -0.7,-3.5 -0.1,-1.1 -0.2,-2.2 -0.4,-3.2 -0.1,-1 -0.2,-1.9 -0.2,-2.7 0,-0.9 0,-1.6 0,-2.1 0,-0.6 0,-1.1 0,-1.3 -0.4,-0.4 -0.3,-0.7 -0.3,-0.7 z" id="path1757" style="fill:#ffffff"></path>
    </g>
    <g id="g1759" style="display:inline">
      <path d="m 433.3,475.7 c 0,0 -0.1,0.7 -0.1,2.1 0,0.6 0,1.5 0,2.3 0,0.9 0.1,1.9 0.2,3 0.1,1.1 0.2,2.3 0.4,3.5 0.1,1.2 0.4,2.6 0.6,3.9 0.2,1.3 0.5,2.7 1,4.1 0.4,1.3 0.7,2.8 1.1,4.2 0.4,1.4 0.9,2.8 1,4.2 0.2,1.5 0.6,2.8 0.7,4.1 0.1,1.3 0.4,2.7 0.4,4 0,1.2 0.1,2.4 0,3.5 0,1.1 -0.1,2.1 -0.2,3 -0.1,0.9 -0.2,1.7 -0.2,2.3 -0.1,0.6 -0.2,1.1 -0.2,1.5 -0.1,0.4 -0.1,0.5 -0.1,0.5 0,0 0,-0.1 0.1,-0.5 0,-0.4 0.1,-0.8 0.2,-1.5 0.1,-0.6 0.1,-1.5 0.2,-2.3 0,-0.8 0.1,-1.9 0.1,-3 0,-1.1 0,-2.3 -0.1,-3.5 0,-1.2 -0.2,-2.6 -0.4,-3.9 -0.1,-1.3 -0.5,-2.7 -0.7,-4.1 -0.2,-1.5 -0.7,-2.8 -1.1,-4.2 -0.4,-1.5 -0.7,-2.8 -1.1,-4.2 -0.4,-1.3 -0.6,-2.8 -1,-4.1 -0.2,-1.3 -0.5,-2.7 -0.6,-3.9 -0.2,-1.2 -0.2,-2.4 -0.4,-3.5 -0.1,-1.1 -0.1,-2.1 -0.1,-3 0,-0.9 0,-1.7 0,-2.3 0.1,-1.5 0.3,-2.2 0.3,-2.2 z" id="path1761" style="fill:#ffffff"></path>
    </g>
    <g id="g1763" style="display:inline">
      <path d="m 435.4,478.7 c 0,0 -0.1,0.6 0,1.8 0,0.6 0,1.3 0.1,2.1 0,0.9 0.2,1.7 0.4,2.7 0.1,1 0.4,2.1 0.6,3.2 0.2,1.1 0.6,2.3 0.9,3.5 0.2,1.2 0.7,2.4 1.1,3.6 0.4,1.2 0.7,2.6 1.1,3.8 0.4,1.2 0.6,2.5 1,3.9 0.4,1.4 0.5,2.6 0.6,3.8 0.2,1.2 0.2,2.4 0.2,3.5 0.1,1.1 0,2.2 0,3.2 0,1 -0.2,1.9 -0.2,2.7 -0.1,0.9 -0.2,1.5 -0.4,2.1 -0.1,0.6 -0.4,1 -0.4,1.3 -0.1,0.2 -0.1,0.5 -0.1,0.5 0,0 0,-0.1 0.1,-0.5 0.1,-0.2 0.2,-0.7 0.4,-1.3 0.1,-0.6 0.2,-1.2 0.4,-2.1 0,-0.9 0.1,-1.7 0.1,-2.7 0,-1 0,-2.1 -0.1,-3.2 -0.1,-1.1 -0.1,-2.3 -0.4,-3.5 -0.1,-1.2 -0.4,-2.6 -0.6,-3.8 -0.2,-1.2 -0.5,-2.5 -1,-3.8 -0.4,-1.2 -0.7,-2.6 -1.1,-3.8 -0.4,-1.2 -0.7,-2.4 -1.1,-3.6 -0.2,-1.2 -0.6,-2.4 -0.7,-3.5 -0.1,-1.1 -0.4,-2.2 -0.5,-3.2 -0.1,-1 -0.2,-1.9 -0.2,-2.7 0,-0.9 0,-1.5 0,-2.1 -0.3,-1.2 -0.2,-1.9 -0.2,-1.9 z" id="path1765" style="fill:#ffffff"></path>
    </g>
    <g id="g1767" style="display:inline">
      <path d="m 426.8,492.3 c 0,0 0.1,0.4 0.4,1.1 0.2,0.7 0.6,1.7 1,3 0.4,1.2 0.7,2.7 1.2,4.2 0.4,1.6 0.7,3.3 1.2,5 0.2,0.9 0.4,1.7 0.6,2.6 0.2,0.9 0.4,1.7 0.5,2.4 0.2,1.6 0.5,3.2 0.7,4.4 0.4,2.6 0.6,4.4 0.6,4.4 0,0 -0.4,-1.7 -0.9,-4.2 -0.2,-1.3 -0.5,-2.8 -0.9,-4.4 -0.1,-0.9 -0.2,-1.6 -0.5,-2.4 -0.2,-0.9 -0.4,-1.7 -0.6,-2.6 -0.4,-1.7 -0.7,-3.4 -1.1,-5 -0.4,-1.6 -0.7,-3 -1.1,-4.4 -0.4,-1.2 -0.6,-2.3 -0.7,-3 -0.3,-0.7 -0.4,-1.1 -0.4,-1.1 z" id="path1769" style="fill:#ffffff"></path>
    </g>
    <g id="g1771" style="display:inline">
      <path d="m 424,486.2 c 0,0 0.4,2.3 1,5.6 0.6,3.4 1.3,7.9 2.2,12.4 0.4,2.2 0.9,4.5 1.3,6.6 0.2,1.1 0.5,2.1 0.7,3 0.2,1 0.5,1.8 0.7,2.7 0.2,0.9 0.5,1.6 0.6,2.2 0.2,0.6 0.5,1.2 0.6,1.7 0.5,0.9 0.7,1.5 0.7,1.5 0,0 -0.2,-0.5 -0.7,-1.3 -0.2,-0.5 -0.5,-1 -0.7,-1.7 -0.2,-0.6 -0.5,-1.5 -0.7,-2.2 -0.5,-1.7 -1.1,-3.5 -1.6,-5.7 -0.5,-2.1 -1,-4.4 -1.5,-6.6 -0.4,-2.2 -0.9,-4.5 -1.2,-6.6 -0.4,-2.1 -0.6,-4.1 -0.9,-5.8 -0.2,-3.6 -0.5,-5.8 -0.5,-5.8 z" id="path1773" style="fill:#ffffff"></path>
    </g>
    <g id="g1775" style="display:inline">
      <path d="m 421.6,482.3 c 0,0 0.2,2.6 0.6,6.2 0.2,1.8 0.5,4 0.7,6.3 0.4,2.3 0.7,4.7 1.1,7.3 0.5,2.4 0.9,4.9 1.5,7.2 0.2,1.1 0.6,2.2 0.9,3.3 0.2,1.1 0.6,1.9 1,2.9 0.1,0.5 0.4,0.8 0.5,1.2 0.1,0.4 0.4,0.7 0.5,1.1 0.4,0.7 0.6,1.3 0.9,1.7 0.6,1 0.9,1.5 0.9,1.5 0,0 -0.4,-0.5 -1,-1.5 -0.4,-0.5 -0.6,-1.1 -1,-1.7 -0.1,-0.4 -0.4,-0.7 -0.6,-1.1 -0.1,-0.4 -0.4,-0.9 -0.5,-1.2 -0.4,-0.9 -0.7,-1.8 -1,-2.9 -0.1,-0.5 -0.4,-1.1 -0.5,-1.6 -0.1,-0.6 -0.2,-1.1 -0.5,-1.7 -0.6,-2.3 -1.1,-4.7 -1.6,-7.2 -0.5,-2.4 -0.7,-5 -1.1,-7.3 -0.2,-2.3 -0.5,-4.5 -0.6,-6.4 -0.1,-3.5 -0.2,-6.1 -0.2,-6.1 z" id="path1777" style="fill:#ffffff"></path>
    </g>
    <g id="g1779" style="display:inline">
      <path d="m 418.9,479.1 c 0,0 0.1,2.7 0.5,6.7 0.1,1.9 0.4,4.2 0.6,6.8 0.2,2.4 0.6,5.1 1.1,7.8 0.2,1.3 0.4,2.7 0.7,3.9 0.2,1.3 0.5,2.6 0.9,3.8 0.2,1.2 0.6,2.4 0.9,3.5 0.2,1.1 0.6,2.1 1,3 0.2,1 0.7,1.8 1,2.6 0.1,0.4 0.4,0.7 0.5,1.1 0.1,0.4 0.4,0.6 0.5,0.9 0.6,1 0.9,1.6 0.9,1.6 0,0 -0.4,-0.6 -1,-1.6 -0.1,-0.2 -0.4,-0.5 -0.5,-0.9 -0.1,-0.4 -0.4,-0.6 -0.5,-1 -0.4,-0.7 -0.7,-1.6 -1.1,-2.5 -0.4,-1 -0.7,-1.9 -1.1,-3 -0.4,-1.1 -0.7,-2.3 -1,-3.5 -0.2,-1.2 -0.6,-2.4 -0.9,-3.8 -0.2,-1.3 -0.5,-2.5 -0.7,-3.9 -0.4,-2.7 -0.7,-5.2 -1,-7.8 -0.2,-2.4 -0.4,-4.9 -0.5,-6.8 -0.3,-4.3 -0.3,-6.9 -0.3,-6.9 z" id="path1781" style="fill:#ffffff"></path>
    </g>
    <g id="g1783" style="display:inline">
      <path d="m 415.9,478.7 c 0,0 0.1,2.4 0.5,6.2 0.1,1.8 0.4,4 0.6,6.3 0.2,2.3 0.6,4.7 1,7.2 0.4,2.4 0.7,4.9 1.2,7.2 0.2,1.1 0.5,2.2 0.7,3.3 0.2,1 0.5,2.1 0.9,2.9 0.4,0.9 0.5,1.7 0.9,2.4 0.4,0.7 0.5,1.3 0.9,1.8 0.6,1 0.9,1.5 0.9,1.5 0,0 -0.4,-0.5 -1,-1.5 -0.4,-0.5 -0.5,-1.1 -0.9,-1.7 -0.4,-0.7 -0.6,-1.5 -1,-2.3 -0.4,-0.9 -0.6,-1.8 -0.9,-2.9 -0.4,-1 -0.5,-2.1 -0.9,-3.3 -0.5,-2.3 -1,-4.7 -1.3,-7.2 -0.4,-2.4 -0.6,-4.9 -0.9,-7.3 -0.2,-2.3 -0.4,-4.5 -0.5,-6.3 -0.2,-3.8 -0.2,-6.3 -0.2,-6.3 z" id="path1785" style="fill:#ffffff"></path>
    </g>
    <g id="g1787" style="display:inline">
      <path d="m 415.3,498.1 c 0,0 0.1,0.9 0.4,2.1 0.1,0.6 0.2,1.3 0.4,2.1 0.1,0.7 0.4,1.6 0.5,2.4 0.2,0.9 0.4,1.6 0.6,2.4 0.2,0.7 0.4,1.5 0.6,2.1 0.5,1.2 0.7,1.9 0.7,1.9 0,0 -0.4,-0.7 -1,-1.9 -0.2,-0.6 -0.5,-1.3 -0.7,-2.1 -0.2,-0.7 -0.5,-1.6 -0.6,-2.4 -0.1,-0.9 -0.4,-1.7 -0.5,-2.4 -0.1,-0.7 -0.2,-1.6 -0.2,-2.2 -0.2,-1.1 -0.2,-2 -0.2,-2 z" id="path1789" style="fill:#ffffff"></path>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="quads" class="workout-part" onclick="navigateToWorkout('quads')">
    <linearGradient x1="124.5" y1="547.21613" x2="171.8981" y2="547.21613" id="SVGID_18_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop1793" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop1795" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 158.7,361.2 c 0,0 6.7,11.8 20.4,21.2 13.7,9.4 22.8,28.2 26.5,44.7 3.6,16.6 3.6,28.9 2.4,29.8 -1.2,0.9 -2.7,2.8 -6.4,-2.4 -3.9,-5.2 -5.7,-8.5 -7.9,-13.1 -2.2,-4.6 -3.9,4.5 -0.6,10.6 3.3,6.1 -1.8,8.5 -5.7,5.7 -3.9,-2.8 -9.7,-9.4 -9.7,-11.3 0,-2.1 4.6,-4.6 4.6,-7.6 0,-3 -5.1,-24.3 -5.2,-25.7 -0.2,-1.5 -17.2,-9.1 -18.2,-9.3 -1,-0.2 -2.4,0.2 -3.6,-0.2 -1.2,-0.4 -4,-11.3 -4,-13.7 0,-2.4 4.5,-8.9 4.6,-16.8 0.1,-8.3 2,-14.1 2.8,-11.9 z" id="path1797" style="fill:url(#SVGID_18_);display:inline"></path>
    <path d="m 177.5,376.9 c 0,0 13.1,17.2 15.5,37.3 2.4,20.1 2.2,33.1 11.9,44.7" id="path1799" style="fill:none;stroke:#ffffff;stroke-width:1.60000002;stroke-miterlimit:10;display:inline"></path>
    <path d="m 191.6,397.9 c 0,0 0.4,0.9 1.1,2.2 0.2,0.7 0.7,1.6 1.1,2.7 0.4,1.1 0.9,2.2 1.2,3.5 0.4,1.3 0.8,2.7 1.2,4.2 0.4,1.5 0.7,3 1,4.7 0.1,0.8 0.2,1.7 0.4,2.5 0.2,0.8 0.1,1.7 0.2,2.7 0.1,1.8 0.2,3.5 0.2,5.3 0,1.8 0.2,3.5 0.4,5.3 0,0.5 0.1,0.9 0.1,1.3 0.1,0.5 0.1,0.9 0.2,1.3 0.1,0.9 0.2,1.7 0.5,2.6 0.4,1.7 0.7,3.3 1.1,4.7 0.5,1.5 0.8,2.9 1.3,4.1 0.5,1.2 0.8,2.4 1.2,3.4 0.4,1 0.7,1.9 1.1,2.7 0.6,1.5 1,2.3 1,2.3 0,0 -0.4,-0.9 -1.1,-2.2 -0.4,-0.7 -0.7,-1.6 -1.2,-2.6 -0.5,-1 -0.8,-2.2 -1.3,-3.4 -0.5,-1.2 -0.8,-2.7 -1.3,-4.1 -0.4,-1.5 -0.9,-3 -1.2,-4.7 -0.1,-0.9 -0.4,-1.7 -0.5,-2.6 -0.1,-0.5 -0.1,-0.9 -0.2,-1.3 0,-0.5 -0.1,-0.9 -0.1,-1.3 -0.2,-1.8 -0.5,-3.5 -0.5,-5.3 0,-1.8 -0.1,-3.6 -0.2,-5.3 0,-0.9 0,-1.7 -0.1,-2.7 -0.1,-0.8 -0.2,-1.7 -0.4,-2.5 -0.2,-1.7 -0.6,-3.3 -1,-4.7 -0.2,-1.5 -0.7,-2.9 -1.1,-4.2 -0.4,-1.3 -0.9,-2.4 -1.1,-3.5 -0.4,-1.1 -0.7,-1.9 -1,-2.7 -0.6,-1.5 -1,-2.4 -1,-2.4 z" id="path1801" style="fill:#ffffff;display:inline"></path>
    <g id="g1803" style="display:inline">
      <path d="m 206.7,454.6 c 0,0 -0.2,-3.3 -0.7,-8 -0.1,-1.2 -0.2,-2.6 -0.4,-3.9 -0.1,-1.3 -0.4,-2.8 -0.5,-4.4 -0.1,-1.5 -0.5,-3 -0.6,-4.6 -0.2,-1.6 -0.5,-3.2 -0.8,-4.7 -0.1,-0.9 -0.2,-1.6 -0.5,-2.4 -0.2,-0.7 -0.4,-1.6 -0.6,-2.3 -0.4,-1.6 -0.7,-3 -1.2,-4.5 -0.5,-1.5 -0.9,-2.8 -1.3,-4.1 -0.2,-0.6 -0.4,-1.3 -0.6,-1.9 -0.2,-0.6 -0.5,-1.2 -0.6,-1.7 -0.5,-1.1 -0.8,-2.2 -1.2,-3 -0.4,-1 -0.7,-1.7 -1,-2.3 -0.2,-0.6 -0.5,-1.1 -0.7,-1.5 -0.1,-0.4 -0.2,-0.5 -0.2,-0.5 0,0 0.1,0.1 0.2,0.5 0.2,0.4 0.5,0.9 0.7,1.5 0.2,0.6 0.7,1.3 1.1,2.3 0.4,0.9 0.9,1.9 1.2,3 0.2,0.6 0.5,1.1 0.7,1.7 0.2,0.6 0.5,1.2 0.6,1.9 0.5,1.3 1,2.7 1.3,4.1 0.5,1.5 0.9,2.9 1.3,4.5 0.2,0.7 0.4,1.6 0.6,2.3 0.1,0.9 0.4,1.6 0.5,2.4 0.2,1.6 0.6,3.2 0.9,4.7 0.2,1.6 0.5,3.2 0.6,4.6 0.1,1.5 0.4,2.9 0.5,4.4 0.1,1.3 0.2,2.7 0.4,3.9 0.1,1.2 0.1,2.3 0.2,3.3 0,1 0.1,1.8 0.1,2.5 0,1.4 0,2.2 0,2.2 z" id="path1805" style="fill:#ffffff"></path>
    </g>
    <path d="m 205.6,453 c 0,0 -0.5,-2.4 -1.1,-6.2 -0.4,-1.8 -0.7,-4 -1.1,-6.3 -0.4,-2.3 -0.9,-4.7 -1.2,-7.2 -0.3,-2.5 -0.8,-4.9 -1.3,-7.2 -0.4,-2.3 -0.8,-4.4 -1.2,-6.3 -0.2,-1 -0.4,-1.7 -0.6,-2.4 -0.2,-0.7 -0.4,-1.3 -0.5,-1.9 -0.2,-1.1 -0.5,-1.7 -0.5,-1.7 0,0 0.2,0.6 0.5,1.6 0.1,0.5 0.4,1.2 0.6,1.9 0.2,0.7 0.5,1.6 0.6,2.4 0.4,1.8 1,3.9 1.5,6.2 0.5,2.3 1,4.7 1.3,7.2 0.9,4.9 1.6,9.8 2.2,13.6 0.5,3.8 0.8,6.3 0.8,6.3 z" id="path1807" style="fill:#ffffff;display:inline"></path>
    <g id="g1809" style="display:inline">
      <path d="m 199.4,426.7 c 0,0 0.2,1 0.5,2.5 0.1,0.7 0.4,1.7 0.5,2.7 0.1,1 0.4,1.9 0.5,3 0.1,1 0.4,2.1 0.5,3 0.1,1 0.4,1.8 0.5,2.7 0.2,1.6 0.5,2.5 0.5,2.5 0,0 -0.4,-1 -0.7,-2.5 -0.1,-0.7 -0.5,-1.6 -0.6,-2.6 -0.1,-1 -0.4,-1.9 -0.6,-3 -0.4,-2.1 -0.6,-4.1 -0.7,-5.7 -0.3,-1.5 -0.4,-2.6 -0.4,-2.6 z" id="path1811" style="fill:#ffffff"></path>
    </g>
    <g id="g1813" style="display:inline">
      <path d="m 159.3,366 c 0,0 0.5,1.1 1.5,2.9 1,1.8 2.3,4.5 4,7.5 1.7,3.2 3.6,6.7 5.8,10.6 1.1,1.9 2.3,3.9 3.4,6 1.2,1.9 2.4,4 3.5,6.1 1.2,2.1 2.3,4.1 3.5,6.1 1.1,2.1 2.3,4 3.3,5.9 1,1.9 2.1,3.9 2.8,5.8 0.7,1.9 1.6,3.6 2.2,5.3 0.6,1.7 1.2,3.2 1.6,4.6 0.2,0.7 0.4,1.3 0.6,1.9 0.1,0.6 0.2,1.2 0.4,1.7 0.2,1 0.4,1.8 0.5,2.3 0.1,0.5 0.1,0.9 0.1,0.9 0,0 0,-0.2 -0.1,-0.9 -0.1,-0.5 -0.2,-1.3 -0.5,-2.3 -0.1,-0.5 -0.2,-1.1 -0.5,-1.7 -0.2,-0.6 -0.4,-1.2 -0.6,-1.9 -0.4,-1.3 -1.1,-2.9 -1.7,-4.5 -0.6,-1.7 -1.5,-3.4 -2.3,-5.2 -0.2,-0.5 -0.4,-1 -0.6,-1.5 -0.2,-0.5 -0.5,-1 -0.7,-1.5 -0.5,-1 -1,-1.9 -1.5,-2.9 -1,-1.9 -2.2,-3.9 -3.3,-6 -1.2,-2.1 -2.3,-4 -3.5,-6.1 -1.2,-2.1 -2.4,-4.1 -3.5,-6.1 -1.1,-2.1 -2.3,-4 -3.4,-5.9 -2.1,-3.9 -4,-7.5 -5.6,-10.7 -1.6,-3.2 -2.8,-5.8 -3.8,-7.8 -1.1,-1.6 -1.6,-2.6 -1.6,-2.6 z" id="path1815" style="fill:#ffffff"></path>
    </g>
    <g id="g1817" style="display:inline">
      <path d="m 169.5,378.4 c 0,0 1.7,2.5 4.2,6.6 1.2,1.9 2.7,4.2 4.2,6.8 1.6,2.6 3,5.2 4.6,7.9 0.7,1.3 1.5,2.8 2.2,4.1 0.7,1.3 1.3,2.8 1.9,4.1 0.5,1.3 1,2.7 1.5,4 0.2,0.6 0.5,1.2 0.7,1.8 0.2,0.6 0.4,1.2 0.5,1.7 0.4,1.1 0.6,2.2 1,3 0.2,1 0.4,1.7 0.6,2.4 0.1,0.6 0.2,1.2 0.4,1.6 0.1,0.4 0.1,0.6 0.1,0.6 0,0 0,-0.2 -0.1,-0.6 -0.1,-0.4 -0.2,-0.9 -0.4,-1.6 -0.2,-0.6 -0.4,-1.5 -0.6,-2.4 -0.2,-0.9 -0.6,-1.9 -1,-3 -0.2,-0.6 -0.4,-1.1 -0.6,-1.7 -0.2,-0.6 -0.5,-1.2 -0.7,-1.8 -0.5,-1.2 -1,-2.5 -1.6,-3.9 -0.6,-1.4 -1.3,-2.7 -1.9,-4 -0.7,-1.3 -1.5,-2.7 -2.2,-4.1 -1.6,-2.7 -3,-5.5 -4.6,-8 -1.5,-2.6 -2.9,-4.9 -4.1,-6.9 -2.5,-3.9 -4.1,-6.6 -4.1,-6.6 z" id="path1819" style="fill:#ffffff"></path>
    </g>
    <path d="m 175.2,383 c 0,0 1,1.3 2.3,3.4 1.3,2.1 3.2,4.9 4.7,7.6 0.8,1.5 1.6,2.9 2.3,4.2 0.7,1.3 1.3,2.7 1.8,3.8 0.5,1.1 0.9,2.1 1.1,2.8 0.2,0.6 0.4,1.1 0.4,1.1 0,0 -0.7,-1.5 -1.8,-3.6 -0.6,-1.1 -1.2,-2.3 -2.1,-3.6 -0.7,-1.3 -1.6,-2.8 -2.4,-4.1 -0.9,-1.5 -1.6,-2.8 -2.4,-4.1 -0.7,-1.3 -1.5,-2.6 -2.2,-3.6 -0.8,-2.6 -1.7,-3.9 -1.7,-3.9 z" id="path1821" style="fill:#ffffff;display:inline"></path>
    <path d="m 179.8,385.2 c 0,0 0.4,0.5 0.7,1.2 0.5,0.7 1,1.7 1.5,2.7 0.5,1 1,2.1 1.3,2.8 0.3,0.7 0.5,1.3 0.5,1.3 0,0 -0.4,-0.5 -0.7,-1.2 -0.5,-0.7 -1,-1.7 -1.5,-2.7 -0.5,-1 -1,-2.1 -1.3,-2.8 -0.2,-0.8 -0.5,-1.3 -0.5,-1.3 z" id="path1823" style="fill:#ffffff;display:inline"></path>
    <path d="m 159.4,373.8 c 0,0 1.8,3.4 4.6,8.4 1.3,2.6 3,5.5 4.7,8.6 1.7,3.2 3.6,6.6 5.5,9.8 1.8,3.4 3.6,6.8 5.3,10 0.9,1.6 1.7,3.2 2.4,4.6 0.7,1.4 1.5,2.9 2.1,4.1 0.6,1.3 1.2,2.4 1.7,3.5 0.5,1.1 0.8,1.9 1.2,2.8 0.4,0.7 0.6,1.3 0.7,1.8 0.1,0.4 0.2,0.6 0.2,0.6 0,0 -0.1,-0.2 -0.2,-0.6 -0.1,-0.4 -0.5,-1 -0.8,-1.8 -0.4,-0.7 -0.9,-1.7 -1.3,-2.7 -0.5,-1.1 -1.2,-2.2 -1.8,-3.5 -0.7,-1.2 -1.3,-2.7 -2.2,-4.1 -0.9,-1.5 -1.7,-2.9 -2.6,-4.5 -1.7,-3.2 -3.6,-6.6 -5.5,-9.8 -1.8,-3.4 -3.6,-6.8 -5.3,-10 -1.7,-3.2 -3.3,-6.1 -4.6,-8.7 -2.4,-5 -4.1,-8.5 -4.1,-8.5 z" id="path1825" style="fill:#ffffff;display:inline"></path>
    <g id="g1827" style="display:inline">
      <path d="m 190.3,451.7 c -0.4,-0.4 -0.8,-1 -1.5,-1.7 -0.6,-0.7 -1.3,-1.7 -2.2,-2.7 -0.8,-1.1 -1.7,-2.3 -2.7,-3.5 -0.6,-0.9 -1.3,-1.7 -1.9,-2.7 -0.1,0.1 -0.1,0.2 -0.2,0.4 0.6,0.9 1.3,1.7 1.9,2.5 1.1,1.3 1.9,2.4 2.8,3.5 0.8,1.1 1.6,1.9 2.3,2.7 0.6,0.7 1.1,1.3 1.5,1.5 0.4,0.4 0.5,0.6 0.5,0.6 0,0 -0.2,-0.1 -0.5,-0.6 z" id="path1829" style="fill:#ffffff"></path>
      <path d="m 156.8,398.7 c 0.5,1.1 1,2.4 1.6,3.8 0.1,0 0.2,0 0.4,0.1 -0.6,-1.5 -1.2,-2.7 -1.8,-3.9 -0.5,-1.2 -1,-2.3 -1.3,-3.2 -0.7,-1.8 -1.1,-2.8 -1.1,-2.8 0,0 0.4,1.1 1.1,2.8 0.1,0.9 0.6,1.8 1.1,3.2 z" id="path1831" style="fill:#ffffff"></path>
    </g>
    <g id="g1833" style="display:inline">
      <path d="m 179.1,416.6 c 0.2,0.4 0.5,0.7 0.7,1.1 0.5,0.7 1,1.3 1.3,1.9 0.7,1.1 1.2,1.7 1.2,1.7 0,0 -0.4,-0.6 -1.1,-1.7 -0.6,-1 -1.5,-2.2 -2.3,-3.8 0.1,0.2 0.1,0.5 0.2,0.8 z" id="path1835" style="fill:#ffffff"></path>
      <path d="m 162.2,386.5 c 2.1,4 4.9,9.2 7.7,14.4 1.5,2.6 2.9,5.2 4.4,7.6 0.4,0.6 0.6,1.1 1,1.6 0.2,0.1 0.6,0.2 0.9,0.4 -0.4,-0.7 -0.9,-1.5 -1.3,-2.3 -1.3,-2.4 -2.8,-5 -4.2,-7.7 -5.7,-10.4 -11.5,-20.9 -11.5,-20.9 0,0 0.4,0.7 0.8,1.8 0.4,1.5 1.1,3.2 2.2,5.1 z" id="path1837" style="fill:#ffffff"></path>
    </g>
    <path d="m 186,451.7 c -1,-1.2 -1.9,-2.6 -3,-4 -1,-1.2 -1.9,-2.7 -2.9,-4.1 -0.1,0.1 -0.2,0.4 -0.4,0.5 1,1.3 1.9,2.7 2.9,3.9 1.1,1.5 2.3,2.8 3.2,3.9 1,1.1 1.8,2.1 2.4,2.7 0.6,0.6 1,1 1,1 0,0 -1.3,-1.4 -3.2,-3.9 z" id="path1839" style="fill:#ffffff;display:inline"></path>
    <g id="g1841" style="display:inline">
      <path d="m 157.1,392.4 c 0.5,1.1 1,2.3 1.7,3.6 0.6,1.3 1.3,2.8 2.1,4.2 0.7,1.3 1.3,2.7 2.2,4.1 0.2,0.1 0.5,0.2 0.9,0.4 v -0.1 c -1,-1.6 -1.7,-3.2 -2.6,-4.6 -0.9,-1.4 -1.5,-2.9 -2.2,-4.1 -1.3,-2.5 -2.3,-4.7 -3,-6.3 -0.7,-1.6 -1.1,-2.4 -1.1,-2.4 0,0 0.4,0.9 1,2.4 0.2,0.7 0.5,1.7 1,2.8 z" id="path1843" style="fill:#ffffff"></path>
      <path d="m 186,437.3 c -0.5,-0.7 -1.2,-1.5 -1.8,-2.4 -0.6,-0.9 -1.2,-1.7 -1.9,-2.8 0,0.2 0.1,0.5 0.1,0.7 0.6,0.7 1.2,1.5 1.7,2.2 0.7,1 1.3,1.7 1.9,2.3 1,1.3 1.6,2.1 1.6,2.1 0,0 -0.5,-0.8 -1.6,-2.1 z" id="path1845" style="fill:#ffffff"></path>
    </g>
    <g id="g1847" style="display:inline">
      <path d="m 196,448 c -0.2,-0.5 -0.5,-1.3 -1,-2.3 -0.5,-1 -1,-2.2 -1.7,-3.4 -0.6,-1.3 -1.5,-2.8 -2.4,-4.4 -0.8,-1.6 -1.9,-3.3 -3,-5 -1.1,-1.8 -2.3,-3.5 -3.6,-5.5 -1.3,-1.8 -2.7,-3.8 -4.1,-5.7 l -0.1,-0.1 c 0.1,0.5 0.2,1.1 0.2,1.6 1.1,1.6 2.3,3.2 3.4,4.6 1.2,1.8 2.6,3.6 3.6,5.3 1.1,1.7 2.2,3.4 3.2,4.9 1,1.6 1.8,2.9 2.6,4.2 0.7,1.2 1.3,2.4 1.8,3.4 0.5,1.2 0.8,1.9 1.1,2.4 0.2,0.5 0.2,0.9 0.2,0.9 0,0 -0.1,-0.3 -0.2,-0.9 z" id="path1849" style="fill:#ffffff"></path>
      <path d="m 169,407.4 c 0.4,0.1 0.7,0.4 1.1,0.6 -0.1,-0.1 -0.2,-0.4 -0.4,-0.5 -0.6,-1 -1.2,-1.9 -1.8,-2.9 -1.1,-1.9 -2.3,-3.8 -3.3,-5.6 -1,-1.8 -1.9,-3.5 -2.8,-5.1 -0.9,-1.6 -1.6,-3 -2.2,-4.4 -0.6,-1.4 -1.2,-2.4 -1.7,-3.4 -0.8,-1.9 -1.3,-3 -1.3,-3 0,0 0.5,1.1 1.2,3 0.8,1.9 2.1,4.7 3.6,8 0.7,1.7 1.7,3.4 2.7,5.2 1,1.8 2.1,3.8 3.2,5.7 0.6,0.6 1.1,1.4 1.7,2.4 z" id="path1851" style="fill:#ffffff"></path>
    </g>
    <linearGradient x1="165.2509" y1="558.20001" x2="173.8022" y2="558.20001" id="SVGID_19_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop1854" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop1856" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 203.6,371.2 c 0,0 5.6,11.9 6.8,24.8 1.2,12.9 0,25.5 0,25.5 0,0 -7,-15.1 -9.2,-24.9 -2.2,-9.9 2.4,-25.4 2.4,-25.4 z" id="path1858" style="fill:url(#SVGID_19_);display:inline"></path>
    <g id="g1860" style="display:inline">
      <path d="m 204.1,379 c 0,0 0.1,0.5 0.2,1.3 0.1,0.9 0.5,2.1 0.7,3.4 0.2,1.5 0.6,3.2 0.9,4.9 0.2,1.8 0.6,3.8 0.8,5.6 0.2,1.9 0.6,3.9 0.7,5.7 0.1,1.8 0.4,3.5 0.5,5 0.2,2.9 0.4,4.9 0.4,4.9 0,0 -0.2,-1.9 -0.6,-4.9 -0.1,-1.5 -0.4,-3.2 -0.6,-5 -0.1,-1.8 -0.5,-3.8 -0.7,-5.6 -0.2,-1.9 -0.5,-3.9 -0.7,-5.7 -0.2,-1.8 -0.5,-3.5 -0.7,-5 -0.6,-2.7 -0.9,-4.6 -0.9,-4.6 z" id="path1862" style="fill:#ffffff"></path>
    </g>
    <g id="g1864" style="display:inline">
      <path d="m 203,384.1 c 0,0 0.2,1.1 0.5,2.8 0.2,1.7 0.6,3.9 1,6.1 0.2,2.2 0.6,4.4 0.7,6.1 0.1,1.7 0.2,2.8 0.2,2.8 0,0 -0.2,-1.1 -0.5,-2.8 -0.3,-1.7 -0.6,-3.9 -1,-6.1 -0.2,-2.2 -0.6,-4.4 -0.7,-6.1 0,-1.7 -0.2,-2.8 -0.2,-2.8 z" id="path1866" style="fill:#ffffff"></path>
    </g>
    <g id="g1868" style="display:inline">
      <path d="m 207,386.3 c 0,0 0.1,0.6 0.4,1.6 0.2,1 0.4,2.3 0.6,3.5 0.1,1.3 0.4,2.7 0.4,3.6 0.1,1 0.1,1.7 0.1,1.7 0,0 -0.1,-0.6 -0.4,-1.6 -0.3,-1 -0.4,-2.3 -0.6,-3.5 -0.1,-1.3 -0.4,-2.7 -0.4,-3.6 0.1,-1.1 -0.1,-1.7 -0.1,-1.7 z" id="path1870" style="fill:#ffffff"></path>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="abs" class="workout-part" onclick="navigateToWorkout('abs')">
    <linearGradient x1="142.1069" y1="616.24408" x2="177.5092" y2="616.24408" id="SVGID_20_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop1874" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop1876" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 197.6,304.3 c 0,0 1,-2.9 -3.8,-4.7 -4.7,-1.9 -13.5,-1.5 -16.5,4.6 -3,6.1 -1.3,7.5 -2.6,10 -1.2,2.4 -3.3,4.6 -1.5,9.7 1.7,5.1 2.1,4.1 1.9,7.4 -0.2,3.3 0.1,7.8 2.4,10.4 2.3,2.7 2.7,5.6 3.3,6.8 0.5,1.1 13.2,5.7 19.6,5.3 6.4,-0.4 6.7,0 7.7,-4.1 1,-4.1 0.7,-9.6 1.5,-13.5 0.7,-3.9 1.5,-5.9 1,-8.7 -0.5,-2.8 0.6,-2.9 1.5,-5.6 0.8,-2.7 0.7,-8 1,-10 0.2,-1.9 0.7,-3.2 1.5,-4.4 0.7,-1.3 1.3,-2.7 1.1,-5.3 -0.2,-2.6 -0.7,-3.2 -3.2,-3.4 -2.4,-0.2 -7.8,-1 -9.5,-1 -1.7,-0.1 -4.1,1.6 -4.7,2.3 -0.7,0.8 -0.7,4.2 -0.7,4.2 z" id="path1878" style="fill:url(#SVGID_20_);display:inline"></path>
    <g id="g1880" style="display:inline">
      <path d="m 173.6,319.1 c 0,0 0.2,-0.1 0.9,-0.2 0.5,-0.1 1.3,-0.4 2.3,-0.6 0.5,-0.1 1,-0.2 1.6,-0.2 0.6,-0.1 1.1,-0.2 1.7,-0.2 0.6,0 1.2,-0.1 1.8,-0.1 0.6,-0.1 1.3,-0.1 1.9,0 0.6,0 1.3,0 1.9,0 0.6,0 1.2,0.1 1.8,0.2 0.6,0.1 1.2,0.1 1.7,0.2 0.6,0 1.1,0.2 1.6,0.4 1.9,0.5 3.2,0.9 3.2,0.9 0,0 -1.3,-0.2 -3.2,-0.6 -0.5,-0.1 -1,-0.2 -1.6,-0.2 -0.6,0 -1.1,-0.1 -1.7,-0.1 -0.6,0 -1.2,-0.1 -1.8,-0.1 -0.6,0 -1.3,0 -1.9,0 -0.6,0 -1.3,0 -1.9,0 -0.6,0 -1.2,0.1 -1.8,0.1 -0.6,0 -1.2,0.1 -1.7,0.2 -0.6,0.1 -1.1,0.1 -1.6,0.2 -1,0.1 -1.7,0.2 -2.3,0.4 -0.5,-0.4 -0.9,-0.3 -0.9,-0.3 z" id="path1882" style="fill:#ffffff"></path>
    </g>
    <g id="g1884" style="display:inline">
      <path d="m 174.2,320.7 c 0,0 0.4,0 0.9,-0.1 0.6,-0.1 1.3,-0.2 2.3,-0.2 1,-0.1 2.1,-0.1 3.3,-0.2 0.6,0 1.2,0 1.8,0 0.6,0 1.2,0 1.9,0 1.2,0.1 2.6,0.1 3.8,0.2 0.6,0.1 1.2,0.1 1.7,0.2 0.5,0.1 1.1,0.1 1.6,0.2 1.8,0.5 3.2,0.7 3.2,0.7 0,0 -1.2,-0.1 -3.2,-0.5 -0.5,-0.1 -1,-0.1 -1.6,-0.1 -0.5,0 -1.1,-0.1 -1.7,-0.1 -1.2,-0.1 -2.4,-0.1 -3.8,-0.2 -0.6,0 -1.2,0 -1.9,0 -0.6,0 -1.2,0 -1.8,0 -1.2,0 -2.3,0 -3.3,0 -1,0 -1.7,0 -2.3,0.1 -0.6,-0.1 -0.9,0 -0.9,0 z" id="path1886" style="fill:#ffffff"></path>
    </g>
    <g id="g1888" style="display:inline">
      <path d="m 174,322.2 c 0,0 1.2,0 3,0.1 1.8,0.1 4.2,0.2 6.6,0.4 2.4,0.2 4.9,0.4 6.6,0.6 1.8,0.2 3,0.4 3,0.4 0,0 -1.2,0 -3,-0.1 -1.8,-0.1 -4.2,-0.2 -6.6,-0.4 -2.4,-0.2 -4.9,-0.4 -6.6,-0.6 -1.8,-0.3 -3,-0.4 -3,-0.4 z" id="path1890" style="fill:#ffffff"></path>
    </g>
    <g id="g1892" style="display:inline">
      <path d="m 174.7,323.8 c 0,0 1.2,0.1 2.9,0.2 0.8,0.1 1.9,0.1 3,0.2 1.1,0.1 2.3,0.2 3.5,0.4 0.6,0.1 1.2,0.1 1.7,0.2 0.6,0 1.2,0 1.7,0.1 1.1,0.1 2.2,0.1 3,0.2 0.5,0 0.8,0.1 1.2,0.1 0.4,0 0.7,0 1,0 0.5,0 0.9,0 0.9,0 0,0 -0.2,0 -0.9,0.1 -0.5,0 -1.2,0.1 -2.2,0.1 -0.8,0 -1.9,0 -3,0 -0.6,0 -1.1,0 -1.7,0 -0.6,0 -1.2,-0.1 -1.8,-0.1 -2.3,-0.2 -4.7,-0.5 -6.4,-0.8 -1.8,-0.5 -2.9,-0.7 -2.9,-0.7 z" id="path1894" style="fill:#ffffff"></path>
    </g>
    <g id="g1896" style="display:inline">
      <path d="m 175.8,325.8 c 0,0 1.1,0.1 2.6,0.2 0.7,0.1 1.7,0.1 2.7,0.2 1,0.1 2.1,0.1 3,0.2 1.1,0.1 2.1,0.2 3,0.2 0.5,0 1,0 1.5,0.1 0.5,0 0.8,0 1.2,0.1 1.6,0.1 2.6,0.2 2.6,0.2 0,0 -1.1,0 -2.7,0.1 -0.4,0 -0.8,0 -1.2,0 -0.5,0 -1,0 -1.5,0 -1,-0.1 -2.1,-0.1 -3,-0.2 -2.1,-0.1 -4.1,-0.5 -5.7,-0.7 -1.5,-0.1 -2.5,-0.4 -2.5,-0.4 z" id="path1898" style="fill:#ffffff"></path>
    </g>
    <g id="g1900" style="display:inline">
      <path d="m 174.5,317.1 c 0,0 0.2,-0.1 0.8,-0.4 0.2,-0.1 0.6,-0.2 1,-0.2 0.4,-0.1 0.7,-0.2 1.2,-0.4 1,-0.1 1.9,-0.4 3.2,-0.6 1.2,-0.1 2.4,-0.1 3.6,-0.2 0.6,-0.1 1.2,0 1.8,0 0.6,0 1.2,0.1 1.8,0.1 0.6,0 1.1,0.1 1.7,0.2 0.5,0.1 1,0.2 1.5,0.4 0.5,0.1 0.8,0.2 1.2,0.5 0.4,0.1 0.6,0.2 0.9,0.4 0.5,0.2 0.7,0.5 0.7,0.5 0,0 -0.2,-0.1 -0.7,-0.4 -0.5,-0.3 -1.2,-0.5 -2.2,-0.6 -0.5,-0.1 -1,-0.2 -1.5,-0.2 -0.5,-0.1 -1.1,-0.1 -1.6,-0.2 -0.6,-0.1 -1.2,-0.1 -1.8,-0.1 -0.6,0 -1.2,-0.1 -1.8,0 -1.2,0.1 -2.4,0.1 -3.6,0.2 -1.1,0.1 -2.2,0.4 -3.2,0.5 -0.5,0.1 -0.8,0.2 -1.2,0.2 -0.4,0.1 -0.7,0.1 -1,0.2 -0.6,0 -0.8,0.1 -0.8,0.1 z" id="path1902" style="fill:#ffffff"></path>
    </g>
    <g id="g1904" style="display:inline">
      <path d="m 175.8,314.9 c 0,0 0.6,-0.2 1.6,-0.6 0.5,-0.1 1.1,-0.4 1.7,-0.4 0.6,-0.1 1.3,-0.2 2.1,-0.2 0.7,0 1.3,-0.1 2.1,-0.1 0.6,0 1.2,0 1.8,0.1 1.1,0.1 1.7,0.2 1.7,0.2 0,0 -0.7,0 -1.7,0 -0.5,0 -1.1,0 -1.8,0.1 -0.6,0 -1.3,0.1 -2.1,0.1 -0.7,0 -1.3,0.1 -2.1,0.2 -0.6,0.1 -1.2,0.1 -1.7,0.2 -0.8,0.1 -1.6,0.4 -1.6,0.4 z" id="path1906" style="fill:#ffffff"></path>
    </g>
    <g id="g1908" style="display:inline">
      <path d="m 176.8,310.6 c 0,0 1.1,-0.1 2.8,-0.1 1.7,0 4,-0.1 6.2,-0.1 1.1,0 2.3,0 3.3,0 1.1,0 2.1,0 2.9,0 0.9,-0.1 1.6,0 2.1,-0.1 0.2,0 0.5,-0.1 0.6,-0.1 0.1,0 0.2,0 0.2,0 0,0 -0.2,0.1 -0.7,0.2 -0.5,0.1 -1.2,0.2 -2.1,0.4 -0.9,0 -1.8,0.1 -2.9,0.1 -1.1,0 -2.2,0 -3.3,0 -2.3,0 -4.5,0 -6.2,-0.1 -1.7,0 -2.9,-0.2 -2.9,-0.2 z" id="path1910" style="fill:#ffffff"></path>
    </g>
    <g id="g1912" style="display:inline">
      <path d="m 178.6,303.6 c 0,0 0.2,-0.2 0.6,-0.5 0.4,-0.4 1,-0.7 1.8,-1.2 0.4,-0.2 0.9,-0.5 1.3,-0.6 0.5,-0.1 1,-0.5 1.5,-0.5 0.5,-0.1 1.1,-0.4 1.7,-0.4 0.6,0 1.2,-0.2 1.8,-0.1 0.6,0 1.2,0 1.7,0.1 0.6,0.1 1.2,0.2 1.7,0.4 0.5,0.2 1.1,0.4 1.5,0.6 0.5,0.2 0.8,0.5 1.3,0.6 0.7,0.5 1.3,1 1.7,1.2 0.4,0.4 0.6,0.6 0.6,0.6 0,0 -0.2,-0.2 -0.6,-0.5 -0.4,-0.2 -1.1,-0.6 -1.8,-1.1 -0.4,-0.2 -0.8,-0.4 -1.3,-0.6 -0.5,-0.1 -1,-0.4 -1.5,-0.5 -0.5,-0.1 -1.1,-0.2 -1.6,-0.4 -0.6,-0.1 -1.2,0 -1.7,-0.1 -0.6,0 -1.1,0.1 -1.7,0.1 -0.6,0 -1.1,0.2 -1.6,0.4 -0.5,0.1 -1,0.4 -1.5,0.5 -0.5,0.1 -0.9,0.4 -1.3,0.5 -0.7,0.4 -1.5,0.7 -1.8,1 -0.5,0.4 -0.8,0.5 -0.8,0.5 z" id="path1914" style="fill:#ffffff"></path>
    </g>
    <g id="g1916" style="display:inline">
      <path d="m 178.1,304.8 c 0,0 1,-0.6 2.6,-1.2 0.4,-0.1 0.9,-0.2 1.3,-0.5 0.5,-0.1 1,-0.2 1.5,-0.4 0.5,-0.1 1.1,-0.2 1.6,-0.2 l 0.8,-0.1 h 0.9 c 0.6,0 1.2,0 1.7,0 0.6,0.1 1.1,0.1 1.6,0.2 0.5,0.1 1.1,0.2 1.5,0.4 0.5,0.1 1,0.2 1.3,0.5 0.8,0.4 1.5,0.7 1.8,1 0.4,0.2 0.6,0.5 0.6,0.5 0,0 -0.2,-0.1 -0.6,-0.4 -0.5,-0.2 -1.1,-0.5 -1.8,-0.9 -0.4,-0.1 -0.9,-0.2 -1.3,-0.4 -0.5,-0.1 -1,-0.1 -1.5,-0.2 -0.5,-0.1 -1.1,-0.1 -1.6,-0.1 -0.6,-0.1 -1.1,0 -1.7,0 h -0.9 l -0.8,0.1 c -0.6,0 -1.1,0.1 -1.6,0.2 -0.5,0.1 -1,0.2 -1.5,0.4 -0.5,0.1 -1,0.2 -1.3,0.4 -1.6,0.2 -2.6,0.7 -2.6,0.7 z" id="path1918" style="fill:#ffffff"></path>
    </g>
    <g id="g1920" style="display:inline">
      <path d="m 177.5,305.9 c 0,0 1.1,-0.2 2.7,-0.5 0.8,-0.1 1.8,-0.2 2.8,-0.4 1.1,0 2.2,-0.1 3.3,-0.1 1.1,0 2.2,0 3.3,0.1 1.1,0.1 2.1,0.1 2.8,0.2 1.7,0.2 2.7,0.5 2.7,0.5 0,0 -1.1,-0.1 -2.8,-0.2 -0.9,-0.1 -1.8,-0.1 -2.8,-0.1 -1,-0.1 -2.2,0 -3.3,0 -1.1,0 -2.2,0 -3.3,0.1 -1,0.1 -1.9,0.1 -2.8,0.1 -1.5,0.2 -2.6,0.3 -2.6,0.3 z" id="path1922" style="fill:#ffffff"></path>
    </g>
    <g id="g1924" style="display:inline">
      <path d="m 177.5,307.5 c 0,0 1.1,-0.1 2.7,-0.1 0.8,0 1.7,0 2.7,0 1,0 2.1,0 3.2,0 2.1,0 4.2,0 5.8,0 1.6,0 2.7,0.1 2.7,0.1 0,0 -1.1,0.1 -2.7,0.2 -1.6,0.1 -3.8,0.1 -5.8,0.2 -4.3,-0.2 -8.6,-0.4 -8.6,-0.4 z" id="path1926" style="fill:#ffffff"></path>
    </g>
    <g id="g1928" style="display:inline">
      <path d="m 177.3,308.9 c 0,0 1.1,0 2.6,0 1.6,0 3.6,0 5.7,0 1.1,0 2.1,0 3,0 1,0 1.9,0 2.7,0 1.6,0 2.6,0 2.6,0 0,0 -1.1,0.1 -2.6,0.2 -0.7,0 -1.7,0.1 -2.7,0.2 -0.5,0 -1,0 -1.5,0 -0.5,0 -1.1,0 -1.6,0 -1.1,0 -2.1,0 -3,0 -1,0 -1.9,-0.1 -2.7,-0.1 -1.4,-0.1 -2.5,-0.3 -2.5,-0.3 z" id="path1930" style="fill:#ffffff"></path>
    </g>
    <g id="g1932" style="display:inline">
      <path d="m 199.1,302.1 c 0,0 0,0 0.1,-0.1 0.1,-0.1 0.1,-0.2 0.2,-0.4 0.1,-0.2 0.4,-0.4 0.5,-0.5 0.2,-0.2 0.5,-0.4 0.8,-0.5 0.1,-0.1 0.4,-0.1 0.5,-0.2 0.2,0 0.4,-0.1 0.6,-0.2 0.2,-0.1 0.4,-0.1 0.6,-0.2 0.2,0 0.5,-0.1 0.6,-0.1 0.5,0 0.8,-0.1 1.3,-0.1 0.5,0 1,0 1.5,0 0.5,0 1,0.1 1.5,0.1 0.5,0 1,0.1 1.3,0.1 0.5,0.1 0.9,0.1 1.2,0.2 0.4,0.1 0.7,0.2 1.1,0.2 0.4,0.1 0.6,0.1 1,0.2 0.2,0.1 0.5,0.2 0.7,0.2 0.4,0.1 0.6,0.4 0.6,0.4 0,0 -0.2,-0.1 -0.6,-0.2 -0.2,0 -0.5,-0.1 -0.7,-0.2 -0.2,-0.1 -0.6,-0.1 -1,-0.2 -0.4,-0.1 -0.7,-0.1 -1.1,-0.2 -0.4,-0.1 -0.8,-0.1 -1.2,-0.1 -0.5,0 -0.8,-0.1 -1.3,-0.1 -0.5,0 -1,-0.1 -1.3,-0.1 -0.5,0 -1,0 -1.3,0 -0.5,0 -0.8,0.1 -1.3,0.1 -0.5,0 -0.8,0.1 -1.2,0.2 -0.2,0 -0.4,0.1 -0.6,0.1 -0.1,0.1 -0.4,0.1 -0.5,0.2 -0.4,0.1 -0.6,0.2 -0.9,0.5 -0.2,0.1 -0.5,0.4 -0.6,0.5 -0.3,0.2 -0.5,0.4 -0.5,0.4 z" id="path1934" style="fill:#ffffff"></path>
    </g>
    <g id="g1936" style="display:inline">
      <path d="m 199.5,303.5 c 0,0 0.7,-0.6 1.9,-1.2 0.4,-0.1 0.7,-0.2 1.1,-0.5 0.4,-0.1 0.8,-0.2 1.2,-0.4 0.5,-0.1 0.8,-0.1 1.3,-0.2 0.5,0 1,0 1.5,0 0.5,0 1,0.1 1.3,0.1 0.5,0 0.9,0.1 1.3,0.2 0.5,0.1 0.9,0.2 1.2,0.4 0.3,0.2 0.7,0.2 1.1,0.5 0.6,0.2 1.1,0.6 1.5,0.8 0.4,0.2 0.5,0.4 0.5,0.4 0,0 -0.2,-0.1 -0.5,-0.4 -0.4,-0.2 -0.9,-0.5 -1.5,-0.7 -0.6,-0.2 -1.5,-0.5 -2.2,-0.6 -0.4,-0.1 -0.8,-0.2 -1.3,-0.2 -0.5,0 -1,-0.1 -1.3,-0.1 -0.5,0 -0.9,0 -1.3,0 -0.5,0 -0.9,0.1 -1.3,0.1 -0.4,0.1 -0.8,0.2 -1.2,0.2 -0.4,0.1 -0.7,0.2 -1.1,0.4 -0.6,0.2 -1.2,0.5 -1.5,0.7 -0.4,0.4 -0.7,0.5 -0.7,0.5 z" id="path1938" style="fill:#ffffff"></path>
    </g>
    <g id="g1940" style="display:inline">
      <path d="m 200,304.9 c 0,0 0.7,-0.5 1.9,-1 0.2,-0.1 0.6,-0.2 1,-0.4 0.4,-0.2 0.7,-0.2 1.1,-0.4 0.4,-0.1 0.9,-0.1 1.2,-0.2 0.5,0 0.8,-0.1 1.3,-0.1 0.5,0 0.9,0 1.3,0.1 0.4,0.1 0.9,0.1 1.2,0.2 0.3,0.1 0.8,0.2 1.1,0.4 0.4,0.1 0.7,0.2 1,0.5 0.6,0.4 1,0.7 1.2,1 0.2,0.2 0.4,0.5 0.4,0.5 0,0 -0.1,-0.1 -0.5,-0.4 -0.2,-0.2 -0.7,-0.5 -1.3,-0.9 -0.2,-0.1 -0.6,-0.2 -1,-0.4 -0.4,-0.1 -0.7,-0.2 -1.1,-0.2 -0.4,-0.1 -0.8,-0.1 -1.2,-0.2 -0.4,-0.1 -0.9,0 -1.2,-0.1 -0.4,0 -0.8,0 -1.2,0 -0.4,0 -0.9,0.1 -1.2,0.1 -0.8,0.1 -1.6,0.4 -2.2,0.5 -1.1,0.7 -1.8,1 -1.8,1 z" id="path1942" style="fill:#ffffff"></path>
    </g>
    <g id="g1944" style="display:inline">
      <path d="m 200.4,306.1 c 0,0 0.7,-0.1 1.8,-0.2 0.6,0 1.2,0 1.9,0 0.4,0 0.7,0 1.1,0.1 0.4,0 0.7,0.1 1.1,0.1 0.4,0.1 0.7,0.1 1.1,0.2 0.4,0.1 0.7,0.1 1.1,0.2 0.4,0.1 0.6,0.2 1,0.4 0.2,0.1 0.6,0.1 0.9,0.4 1,0.5 1.7,0.9 1.7,0.9 0,0 -0.7,-0.2 -1.7,-0.6 -0.2,-0.1 -0.6,-0.1 -0.9,-0.2 -0.4,-0.1 -0.6,-0.1 -1,-0.2 -0.4,-0.1 -0.7,-0.1 -1.1,-0.2 -0.4,-0.1 -0.7,-0.1 -1.1,-0.2 -0.4,-0.1 -0.7,-0.1 -1.1,-0.1 -0.4,0 -0.7,-0.1 -1.1,-0.1 -0.7,0 -1.3,-0.1 -1.9,-0.1 -1.1,-0.4 -1.8,-0.4 -1.8,-0.4 z" id="path1946" style="fill:#ffffff"></path>
    </g>
    <g id="g1948" style="display:inline">
      <path d="m 202.5,305.1 c 0,0 0.6,-0.1 1.6,-0.2 0.5,0 1,-0.1 1.6,0 0.6,0 1.2,0.1 1.8,0.1 0.6,0.1 1.2,0.2 1.8,0.4 0.6,0.1 1.1,0.4 1.5,0.6 0.4,0.2 0.7,0.5 1,0.6 0.2,0.1 0.4,0.2 0.4,0.2 0,0 -0.1,-0.1 -0.4,-0.2 -0.2,-0.1 -0.6,-0.2 -1,-0.5 -0.5,-0.1 -1,-0.4 -1.5,-0.5 -0.6,-0.1 -1.2,-0.2 -1.8,-0.4 -1.2,-0.2 -2.4,-0.2 -3.4,-0.4 -0.9,0.3 -1.6,0.3 -1.6,0.3 z" id="path1950" style="fill:#ffffff"></path>
    </g>
    <g id="g1952" style="display:inline">
      <path d="m 203.4,310.3 c 0,0 0.5,-0.1 1.2,-0.1 0.4,0 0.7,0 1.2,0 0.5,0 1,0.1 1.5,0.1 0.2,0.1 0.5,0.1 0.7,0.2 0.2,0.1 0.5,0.1 0.7,0.2 0.2,0.1 0.4,0.1 0.6,0.2 0.2,0.1 0.4,0.1 0.5,0.2 0.6,0.4 1,0.7 1,0.7 0,0 -0.5,-0.1 -1.1,-0.5 -0.4,-0.1 -0.7,-0.2 -1.1,-0.4 -0.2,-0.1 -0.5,-0.1 -0.6,-0.1 -0.2,0 -0.5,-0.1 -0.7,-0.1 -0.5,-0.1 -1,-0.1 -1.3,-0.2 -0.5,0 -0.9,-0.1 -1.2,-0.1 -0.9,-0.1 -1.4,-0.1 -1.4,-0.1 z" id="path1954" style="fill:#ffffff"></path>
    </g>
    <g id="g1956" style="display:inline">
      <path d="m 200.6,319.6 c 0,0 2.2,0.6 4.4,1.2 0.6,0.1 1.1,0.2 1.6,0.4 0.5,0.1 1,0.2 1.5,0.4 0.8,0.1 1.5,0.2 1.5,0.2 0,0 -0.6,0 -1.5,0 -0.5,0 -1,-0.1 -1.5,-0.1 -0.5,-0.1 -1.1,-0.2 -1.7,-0.4 -1.1,-0.4 -2.2,-0.7 -3,-1.1 -0.8,-0.3 -1.3,-0.6 -1.3,-0.6 z" id="path1958" style="fill:#ffffff"></path>
    </g>
    <g id="g1960" style="display:inline">
      <path d="m 201.6,315.1 c 0,0 0.6,0 1.6,0.1 0.5,0 1,0.1 1.6,0.1 0.6,0.1 1.2,0.2 1.8,0.2 0.6,0.1 1.2,0.2 1.8,0.4 0.6,0.1 1.1,0.4 1.5,0.5 0.8,0.2 1.5,0.5 1.5,0.5 0,0 -0.6,-0.1 -1.6,-0.2 -0.5,-0.1 -1,-0.1 -1.6,-0.4 -0.6,-0.1 -1.2,-0.2 -1.8,-0.4 -1.2,-0.2 -2.4,-0.5 -3.3,-0.6 -0.9,-0.1 -1.5,-0.2 -1.5,-0.2 z" id="path1962" style="fill:#ffffff"></path>
    </g>
    <g id="g1964" style="display:inline">
      <path d="m 202.4,311.9 c 0,0 0.6,-0.1 1.3,-0.1 0.4,0 1,0 1.5,0 0.2,0 0.5,0.1 0.8,0.1 0.2,0 0.6,0 0.8,0.1 0.5,0.1 1.1,0.2 1.6,0.5 0.5,0.2 1,0.4 1.3,0.6 0.7,0.5 1.2,0.7 1.2,0.7 0,0 -0.5,-0.2 -1.3,-0.5 -0.4,-0.2 -0.8,-0.2 -1.3,-0.5 -0.5,-0.2 -1,-0.2 -1.6,-0.4 -0.2,-0.1 -0.5,-0.1 -0.8,-0.1 -0.2,0 -0.5,-0.1 -0.7,-0.1 -0.5,0 -1,-0.1 -1.5,-0.1 -0.7,-0.2 -1.3,-0.2 -1.3,-0.2 z" id="path1966" style="fill:#ffffff"></path>
    </g>
    <g id="g1968" style="display:inline">
      <path d="m 202.1,313.7 c 0,0 0.6,-0.1 1.5,-0.1 0.4,0 1,0 1.5,0 0.5,0.1 1.1,0.1 1.7,0.2 0.6,0.1 1.1,0.2 1.6,0.4 0.5,0.1 1,0.4 1.3,0.5 0.7,0.4 1.2,0.6 1.2,0.6 0,0 -0.6,-0.1 -1.3,-0.4 -0.4,-0.1 -0.8,-0.2 -1.3,-0.4 -0.5,-0.1 -1.1,-0.2 -1.6,-0.4 -0.5,-0.1 -1.1,-0.1 -1.6,-0.2 -0.5,0 -1,-0.1 -1.5,-0.1 -1.1,0 -1.5,-0.1 -1.5,-0.1 z" id="path1970" style="fill:#ffffff"></path>
    </g>
    <g id="g1972" style="display:inline">
      <path d="m 201.1,316.6 c 0,0 0.6,0.1 1.5,0.4 0.5,0.1 1,0.2 1.5,0.4 0.6,0.1 1.1,0.2 1.7,0.5 1.2,0.4 2.3,0.6 3.3,0.7 0.5,0.1 0.8,0.1 1.1,0.1 0.3,0 0.4,0.1 0.4,0.1 0,0 -0.1,0 -0.4,0 -0.3,0 -0.6,0 -1.1,0 -0.5,0 -1,-0.1 -1.6,-0.2 -0.6,-0.1 -1.2,-0.2 -1.8,-0.4 -1.2,-0.4 -2.3,-0.7 -3.2,-1.1 -0.8,-0.1 -1.4,-0.5 -1.4,-0.5 z" id="path1974" style="fill:#ffffff"></path>
    </g>
    <g id="g1976" style="display:inline">
      <path d="m 201,318.3 c 0,0 0.6,0.1 1.3,0.4 0.4,0.1 0.9,0.2 1.3,0.4 0.4,0.2 1.1,0.2 1.6,0.5 1.1,0.4 2.2,0.6 2.9,0.7 0.8,0.1 1.3,0.2 1.3,0.2 0,0 -0.1,0 -0.4,0 -0.2,0 -0.6,0 -1,0 -0.4,0 -1,-0.1 -1.5,-0.1 -0.5,-0.1 -1.1,-0.2 -1.6,-0.4 -1.1,-0.4 -2.2,-0.6 -2.9,-1 -0.6,-0.5 -1,-0.7 -1,-0.7 z" id="path1978" style="fill:#ffffff"></path>
    </g>
    <g id="g1980" style="display:inline">
      <path d="m 176.2,330.7 c 0,0 1.1,0.2 2.8,0.5 1.7,0.2 3.9,0.6 6.1,0.7 1.1,0.1 2.2,0.1 3.3,0.1 0.5,0 1,0 1.5,-0.1 0.5,0 1,-0.1 1.3,-0.1 0.4,-0.1 0.7,-0.1 1.1,-0.2 0.4,0 0.6,-0.1 0.8,-0.2 0.5,-0.1 0.7,-0.2 0.7,-0.2 0,0 -0.2,0.1 -0.7,0.2 -0.2,0.1 -0.5,0.2 -0.8,0.2 -0.4,0.1 -0.7,0.2 -1.1,0.2 -0.8,0.1 -1.8,0.4 -2.9,0.4 -1.1,0 -2.2,0 -3.3,0 -1.1,-0.1 -2.2,-0.2 -3.3,-0.4 -1.1,-0.2 -1.9,-0.4 -2.8,-0.6 -1.6,-0.2 -2.7,-0.5 -2.7,-0.5 z" id="path1982" style="fill:#ffffff"></path>
    </g>
    <g id="g1984" style="display:inline">
      <path d="m 176.3,335 c 0,0 0.1,0.4 0.2,1 0.2,0.6 0.6,1.3 1.2,2.2 0.6,0.9 1.5,1.7 2.4,2.4 0.5,0.4 1.1,0.7 1.7,1 0.6,0.2 1.2,0.5 1.9,0.6 0.7,0.1 1.3,0.2 1.9,0.4 0.7,0.1 1.3,0.1 1.9,0.2 0.6,0 1.2,0 1.8,0 0.6,-0.1 1.1,-0.2 1.6,-0.2 0.5,-0.2 1,-0.4 1.3,-0.5 0.4,-0.2 0.7,-0.4 0.8,-0.6 0.2,-0.2 0.4,-0.4 0.5,-0.5 0.1,-0.1 0.1,-0.2 0.1,-0.2 0,0 0,0.1 -0.1,0.2 -0.1,0.1 -0.2,0.4 -0.4,0.6 -0.2,0.2 -0.5,0.5 -0.8,0.7 -0.3,0.2 -0.8,0.4 -1.3,0.6 -0.5,0.1 -1.1,0.2 -1.7,0.4 -0.6,0 -1.2,0.1 -1.9,0.1 -0.6,0 -1.3,-0.1 -1.9,-0.1 -0.7,0 -1.5,-0.1 -2.1,-0.4 -0.7,-0.2 -1.3,-0.4 -1.9,-0.7 -0.6,-0.2 -1.2,-0.6 -1.8,-1 -1.1,-0.7 -1.9,-1.7 -2.4,-2.7 -0.6,-0.9 -0.8,-1.7 -1,-2.3 0.1,-0.8 0,-1.2 0,-1.2 z" id="path1986" style="fill:#ffffff"></path>
    </g>
    <g id="g1988" style="display:inline">
      <path d="m 176.6,333.8 c 0,0 1.1,0.4 2.7,0.7 0.8,0.2 1.7,0.4 2.8,0.6 1,0.2 2.1,0.4 3.2,0.4 0.6,0 1.1,0.1 1.6,0.1 0.5,0 1.1,0 1.6,0 0.5,0 1,0 1.5,-0.1 0.5,-0.1 1,-0.1 1.3,-0.1 0.4,-0.1 0.7,-0.1 1.1,-0.2 0.4,-0.1 0.6,-0.1 0.8,-0.2 0.5,-0.1 0.7,-0.2 0.7,-0.2 0,0 -0.2,0.1 -0.7,0.2 -0.5,0.2 -1.1,0.5 -1.9,0.6 -0.4,0.1 -0.9,0.1 -1.3,0.2 -0.5,0.1 -1,0.1 -1.5,0.1 -0.5,0 -1.1,0 -1.6,0 -0.6,0 -1.1,0 -1.7,-0.1 -1.1,-0.1 -2.2,-0.2 -3.3,-0.5 -1,-0.2 -1.9,-0.5 -2.8,-0.7 -1.6,-0.3 -2.5,-0.8 -2.5,-0.8 z" id="path1990" style="fill:#ffffff"></path>
    </g>
    <g id="g1992" style="display:inline">
      <path d="m 177.7,335.4 c 0,0 0.8,0.4 2.2,0.9 0.6,0.2 1.5,0.5 2.3,0.6 0.9,0.2 1.7,0.4 2.7,0.5 0.5,0.1 0.8,0.1 1.3,0.1 0.5,0 0.8,0 1.3,0 0.5,0 0.8,0 1.2,0 0.4,0 0.7,0 1.1,-0.1 0.7,-0.1 1.2,-0.1 1.7,-0.2 0.4,-0.1 0.6,-0.1 0.6,-0.1 0,0 -0.2,0.1 -0.6,0.2 -0.4,0.1 -1,0.4 -1.6,0.5 -0.4,0.1 -0.7,0.1 -1.1,0.2 -0.4,0 -0.8,0.1 -1.2,0.1 -0.5,0 -0.8,0 -1.3,0 -0.5,0 -1,0 -1.3,-0.1 -1,-0.1 -1.8,-0.4 -2.7,-0.5 -0.9,-0.2 -1.6,-0.5 -2.2,-0.9 -1.7,-0.6 -2.4,-1.2 -2.4,-1.2 z" id="path1994" style="fill:#ffffff"></path>
    </g>
    <g id="g1996" style="display:inline">
      <path d="m 177.9,337 c 0,0 0.9,0.5 2.2,1 0.6,0.2 1.5,0.5 2.3,0.7 0.8,0.2 1.8,0.5 2.8,0.5 0.5,0.1 1,0.1 1.5,0.1 0.5,0 1,0 1.3,0 0.5,0 0.8,-0.1 1.3,-0.1 0.4,0 0.8,-0.1 1.1,-0.2 0.4,-0.1 0.7,-0.1 1,-0.2 0.2,-0.1 0.5,-0.1 0.7,-0.2 0.4,-0.1 0.6,-0.2 0.6,-0.2 0,0 -0.2,0.1 -0.6,0.2 -0.4,0.2 -1,0.5 -1.7,0.6 -0.4,0.1 -0.7,0.2 -1.1,0.2 -0.4,0.1 -0.8,0.1 -1.3,0.2 -0.5,0 -1,0.1 -1.5,0 -0.5,0 -1,0 -1.5,-0.1 -1,-0.1 -1.9,-0.4 -2.8,-0.6 -0.8,-0.2 -1.7,-0.6 -2.3,-1 -1.2,-0.3 -2,-0.9 -2,-0.9 z" id="path1998" style="fill:#ffffff"></path>
    </g>
    <g id="g2000" style="display:inline">
      <path d="m 180,339.5 c 0,0 0.7,0.2 1.9,0.6 0.6,0.1 1.3,0.4 2.1,0.5 0.7,0.1 1.6,0.2 2.3,0.4 0.4,0 0.8,0 1.2,0.1 0.4,0 0.7,0 1.2,0 0.4,-0.1 0.7,-0.1 1.1,-0.1 0.4,-0.1 0.6,-0.1 1,-0.2 0.2,-0.1 0.6,-0.2 0.7,-0.2 0.2,-0.1 0.4,-0.2 0.6,-0.2 0.4,-0.1 0.5,-0.2 0.5,-0.2 0,0 -0.1,0.1 -0.5,0.4 -0.1,0.1 -0.4,0.2 -0.6,0.4 -0.2,0.1 -0.5,0.2 -0.7,0.4 -0.6,0.2 -1.3,0.5 -2.1,0.5 -0.4,0 -0.8,0 -1.2,0.1 -0.4,0 -0.8,0 -1.2,0 -0.8,-0.1 -1.7,-0.2 -2.4,-0.4 -0.7,-0.2 -1.5,-0.4 -2.1,-0.6 -1.1,-1 -1.8,-1.5 -1.8,-1.5 z" id="path2002" style="fill:#ffffff"></path>
    </g>
    <g id="g2004" style="display:inline">
      <path d="m 176.7,332.6 c 0,0 0.2,0 0.7,0.1 0.5,0.1 1.1,0.2 1.8,0.4 0.7,0.1 1.7,0.2 2.6,0.4 0.5,0.1 1,0.1 1.5,0.1 0.5,0 1,0.1 1.6,0.1 1,0 2.1,0.1 3,0.1 1,-0.1 1.8,0 2.7,-0.1 1.6,-0.2 2.6,-0.4 2.6,-0.4 0,0 -1,0.2 -2.6,0.6 -0.4,0.1 -0.8,0.1 -1.2,0.1 -0.5,0 -1,0.1 -1.5,0.1 -1,0.1 -2.1,0 -3,0 -0.5,0 -1.1,-0.1 -1.6,-0.1 -0.5,-0.1 -1,-0.1 -1.5,-0.2 -1,-0.2 -1.8,-0.4 -2.6,-0.5 -0.7,-0.1 -1.3,-0.4 -1.8,-0.5 -0.5,-0.1 -0.7,-0.2 -0.7,-0.2 z" id="path2006" style="fill:#ffffff"></path>
    </g>
    <g id="g2008" style="display:inline">
      <path d="m 198.5,330.2 c 0,0 0.2,0.1 0.5,0.1 0.4,0.1 0.8,0.2 1.3,0.2 0.2,0 0.6,0.1 1,0.1 0.4,0 0.7,0.1 1.1,0.1 0.7,0 1.5,0 2.3,0 0.4,0 0.7,0 1.1,-0.1 0.2,0 0.4,0 0.6,0 0.1,0 0.4,-0.1 0.5,-0.1 0.1,0 0.4,-0.1 0.5,-0.1 0.1,-0.1 0.2,-0.1 0.5,-0.2 0.1,-0.1 0.2,-0.1 0.4,-0.2 0.1,-0.1 0.2,-0.2 0.4,-0.4 0.2,-0.1 0.4,-0.4 0.5,-0.6 0.1,-0.2 0.2,-0.4 0.2,-0.5 0.1,-0.4 0.1,-0.5 0.1,-0.5 0,0 0,0.2 -0.1,0.5 -0.1,0.1 -0.1,0.4 -0.2,0.6 -0.1,0.2 -0.2,0.5 -0.5,0.7 -0.1,0.1 -0.2,0.2 -0.4,0.4 -0.1,0.1 -0.2,0.2 -0.4,0.2 -0.1,0.1 -0.2,0.2 -0.5,0.2 -0.1,0.1 -0.4,0.1 -0.5,0.2 -0.2,0.1 -0.4,0.1 -0.6,0.2 -0.2,0 -0.4,0 -0.6,0.1 -0.4,0 -0.7,0.1 -1.2,0.1 -0.8,0 -1.6,-0.1 -2.3,-0.1 -0.4,0 -0.7,-0.1 -1.1,-0.1 -0.4,-0.1 -0.6,-0.1 -1,-0.2 -0.6,-0.1 -1.1,-0.4 -1.3,-0.5 -0.1,0 -0.3,-0.1 -0.3,-0.1 z" id="path2010" style="fill:#ffffff"></path>
    </g>
    <g id="g2012" style="display:inline">
      <path d="m 200.1,333.5 c 0,0 0.6,0 1.6,0.1 0.5,0 1.1,0 1.6,0 0.6,0 1.2,0 1.8,-0.1 0.4,0 0.6,-0.1 1,-0.1 0.4,0 0.6,-0.1 0.9,-0.2 0.2,-0.1 0.5,-0.2 0.7,-0.4 0.2,-0.1 0.5,-0.2 0.6,-0.4 0.1,-0.1 0.4,-0.2 0.5,-0.5 0.1,-0.1 0.2,-0.2 0.4,-0.4 0.1,-0.2 0.2,-0.4 0.2,-0.4 0,0 -0.1,0.1 -0.2,0.4 -0.1,0.1 -0.1,0.2 -0.2,0.5 -0.1,0.1 -0.2,0.4 -0.5,0.5 -0.2,0.1 -0.4,0.4 -0.6,0.5 -0.2,0.1 -0.5,0.4 -0.8,0.4 -0.2,0.1 -0.6,0.2 -0.9,0.4 -0.4,0.1 -0.6,0.1 -1,0.2 -1.3,0.2 -2.7,0.1 -3.6,0 -0.9,-0.4 -1.5,-0.5 -1.5,-0.5 z" id="path2014" style="fill:#ffffff"></path>
    </g>
    <g id="g2016" style="display:inline">
      <path d="m 199.3,328.9 c 0,0 0.6,0.1 1.6,0.1 1,0.1 2.2,0.1 3.5,0 0.6,0 1.2,-0.1 1.8,-0.4 0.2,-0.1 0.5,-0.2 0.9,-0.2 0.2,-0.1 0.5,-0.2 0.7,-0.4 0.2,-0.1 0.4,-0.2 0.5,-0.4 0.1,-0.1 0.2,-0.2 0.4,-0.4 0.2,-0.2 0.4,-0.2 0.4,-0.2 0,0 -0.1,0.1 -0.2,0.4 -0.1,0.1 -0.2,0.2 -0.4,0.4 -0.1,0.1 -0.4,0.2 -0.5,0.5 -0.4,0.2 -1,0.6 -1.5,0.7 -0.6,0.1 -1.2,0.4 -1.9,0.4 -0.6,0 -1.3,0 -1.9,0 -0.6,0 -1.2,-0.1 -1.7,-0.2 -1.1,-0.1 -1.7,-0.3 -1.7,-0.3 z" id="path2018" style="fill:#ffffff"></path>
    </g>
    <g id="g2020" style="display:inline">
      <path d="m 200.4,327.4 c 0,0 0.5,0 1.2,0 0.4,0 0.7,0 1.2,0 0.2,0 0.5,0 0.7,0 0.2,0 0.5,0 0.7,-0.1 0.5,-0.1 1,-0.1 1.3,-0.2 0.3,-0.1 0.8,-0.2 1.2,-0.4 0.6,-0.4 1.1,-0.5 1.1,-0.5 0,0 -0.4,0.4 -1,0.7 -0.1,0.1 -0.4,0.2 -0.5,0.2 -0.2,0.1 -0.4,0.2 -0.6,0.2 -0.5,0.1 -1,0.2 -1.5,0.4 -0.2,0 -0.5,0 -0.7,0 -0.2,0 -0.5,0 -0.7,0 -0.5,0 -0.8,0 -1.2,-0.1 -0.9,0 -1.2,-0.2 -1.2,-0.2 z" id="path2022" style="fill:#ffffff"></path>
    </g>
    <g id="g2024" style="display:inline">
      <path d="m 201.9,326.2 c 0,0 0.2,0 0.6,-0.1 0.2,0 0.4,-0.1 0.6,-0.1 0.2,0 0.5,-0.1 0.7,-0.1 0.2,-0.1 0.5,-0.1 0.7,-0.2 0.2,-0.1 0.5,-0.1 0.6,-0.2 0.4,-0.1 0.6,-0.2 0.6,-0.2 0,0 -0.1,0.2 -0.5,0.5 -0.1,0.1 -0.4,0.2 -0.6,0.4 -0.2,0.1 -0.5,0.1 -0.7,0.2 -0.5,0.1 -1.1,0.1 -1.5,0.1 -0.2,-0.2 -0.5,-0.3 -0.5,-0.3 z" id="path2026" style="fill:#ffffff"></path>
    </g>
    <g id="g2028" style="display:inline">
      <path d="m 200.4,336.3 c 0,0 0.5,0 1.3,-0.1 0.8,-0.1 1.8,-0.1 2.9,-0.4 0.5,-0.1 1,-0.2 1.5,-0.4 0.5,-0.2 0.8,-0.4 1.2,-0.5 0.4,-0.2 0.6,-0.4 0.9,-0.5 0.2,-0.1 0.4,-0.2 0.4,-0.2 0,0 -0.1,0.1 -0.2,0.2 -0.1,0.2 -0.4,0.4 -0.7,0.6 -0.3,0.2 -0.7,0.5 -1.2,0.6 -0.5,0.1 -1,0.4 -1.6,0.5 -0.5,0.1 -1.1,0.1 -1.6,0.2 -0.5,0 -1,0 -1.3,0 -1,0.1 -1.6,0 -1.6,0 z" id="path2030" style="fill:#ffffff"></path>
    </g>
    <g id="g2032" style="display:inline">
      <path d="m 200.6,339.1 c 0,0 0.5,0 1.3,-0.1 0.7,-0.1 1.8,-0.2 2.8,-0.6 0.5,-0.1 1,-0.4 1.3,-0.5 0.2,-0.1 0.4,-0.2 0.6,-0.4 0.1,-0.1 0.4,-0.2 0.5,-0.4 0.2,-0.2 0.6,-0.5 0.7,-0.6 0.1,-0.1 0.2,-0.2 0.2,-0.2 0,0 -0.2,0.5 -0.7,1.1 -0.1,0.1 -0.4,0.2 -0.5,0.5 -0.1,0.1 -0.4,0.2 -0.6,0.4 -0.5,0.2 -1,0.5 -1.5,0.6 -0.5,0.1 -1,0.2 -1.6,0.4 -0.5,0.1 -1,0.1 -1.3,0.1 -0.7,-0.2 -1.2,-0.3 -1.2,-0.3 z" id="path2034" style="fill:#ffffff"></path>
    </g>
    <g id="g2036" style="display:inline">
      <path d="m 201.6,341.8 c 0,0 0.5,-0.1 1.1,-0.4 0.4,-0.1 0.6,-0.2 1.1,-0.4 0.4,-0.2 0.7,-0.4 1.1,-0.6 0.4,-0.2 0.7,-0.4 1.1,-0.7 0.4,-0.2 0.7,-0.4 0.9,-0.7 0.5,-0.5 0.8,-0.7 0.8,-0.7 0,0 -0.2,0.4 -0.6,1 -0.2,0.2 -0.5,0.5 -0.8,0.8 -0.4,0.2 -0.7,0.5 -1.1,0.7 -0.4,0.2 -0.8,0.4 -1.2,0.5 -0.4,0.1 -0.7,0.2 -1.1,0.2 -0.8,0.3 -1.3,0.3 -1.3,0.3 z" id="path2038" style="fill:#ffffff"></path>
    </g>
    <g id="g2040" style="display:inline">
      <path d="m 207.5,343.1 c 0,0 -0.1,0.4 -0.5,1 -0.1,0.2 -0.5,0.5 -0.7,0.9 -0.4,0.2 -0.6,0.6 -1,0.7 l -0.6,0.4 c -0.1,0.1 -0.4,0.1 -0.6,0.2 -0.4,0.1 -0.7,0.2 -1.1,0.2 -0.6,0 -1.1,0 -1.1,0 0,0 0.4,-0.1 1,-0.4 0.2,0 0.6,-0.2 1,-0.4 0.1,-0.1 0.4,-0.1 0.5,-0.2 l 0.5,-0.4 c 0.4,-0.1 0.6,-0.5 1,-0.6 0.2,-0.2 0.6,-0.5 0.7,-0.7 0.7,-0.4 0.9,-0.7 0.9,-0.7 z" id="path2042" style="fill:#ffffff"></path>
    </g>
    <g id="g2044" style="display:inline">
      <path d="m 202.4,348.3 c 0,0 0.4,-0.1 1,-0.4 0.2,-0.1 0.6,-0.2 1,-0.4 0.4,-0.1 0.7,-0.4 1.1,-0.5 0.4,-0.2 0.7,-0.4 1,-0.6 0.3,-0.2 0.6,-0.4 0.8,-0.6 0.4,-0.5 0.7,-0.7 0.7,-0.7 0,0 -0.2,0.4 -0.5,0.9 -0.1,0.2 -0.5,0.5 -0.7,0.7 -0.2,0.2 -0.6,0.5 -1,0.7 -0.4,0.2 -0.7,0.4 -1.1,0.5 -0.4,0.1 -0.7,0.2 -1,0.2 -0.8,0.2 -1.3,0.2 -1.3,0.2 z" id="path2046" style="fill:#ffffff"></path>
    </g>
    <g id="g2048" style="display:inline">
      <path d="m 202.9,350.3 c 0,0 0.4,-0.1 0.9,-0.4 0.2,-0.1 0.5,-0.2 0.8,-0.4 0.3,-0.2 0.6,-0.4 1,-0.5 l 0.5,-0.2 c 0.1,-0.1 0.4,-0.1 0.5,-0.2 0.2,-0.2 0.5,-0.4 0.7,-0.5 0.4,-0.4 0.6,-0.6 0.6,-0.6 0,0 -0.1,0.4 -0.5,0.9 -0.1,0.1 -0.2,0.2 -0.4,0.4 -0.1,0.1 -0.2,0.2 -0.4,0.4 -0.1,0.1 -0.2,0.2 -0.5,0.4 l -0.5,0.4 c -0.4,0.1 -0.7,0.4 -1,0.5 -0.4,0.1 -0.6,0.2 -1,0.2 -0.3,-0.4 -0.7,-0.4 -0.7,-0.4 z" id="path2050" style="fill:#ffffff"></path>
    </g>
    <g id="g2052" style="display:inline">
      <path d="m 182.4,346.2 c 0,0 0.8,0.2 2.1,0.5 1.2,0.2 2.9,0.5 4.6,0.4 0.4,0 0.8,0 1.2,-0.1 0.4,-0.1 0.9,-0.1 1.2,-0.2 0.4,-0.1 0.7,-0.2 1.1,-0.4 0.4,-0.1 0.6,-0.2 1,-0.5 0.2,-0.1 0.5,-0.4 0.7,-0.5 0.2,-0.1 0.4,-0.2 0.5,-0.4 0.2,-0.2 0.5,-0.4 0.5,-0.4 0,0 -0.1,0.1 -0.4,0.5 -0.1,0.1 -0.2,0.4 -0.5,0.5 -0.3,0.1 -0.5,0.4 -0.7,0.5 -0.2,0.2 -0.6,0.4 -1,0.5 -0.4,0.2 -0.7,0.2 -1.1,0.5 -0.4,0.1 -0.8,0.2 -1.2,0.2 -0.4,0.1 -0.9,0.1 -1.3,0.1 -0.4,0 -0.9,0 -1.3,0 -0.4,0 -0.8,-0.1 -1.2,-0.1 -0.8,-0.1 -1.6,-0.4 -2.2,-0.5 -1.3,-0.2 -2,-0.6 -2,-0.6 z" id="path2054" style="fill:#ffffff"></path>
    </g>
    <g id="g2056" style="display:inline">
      <path d="m 195.6,347.1 c 0,0 -0.4,0.4 -1.1,0.8 -0.4,0.1 -0.7,0.5 -1.2,0.6 -0.5,0.1 -1,0.4 -1.5,0.4 -0.5,0.1 -1.1,0.1 -1.6,0.1 -0.5,0 -1,0 -1.3,-0.1 -0.9,-0.1 -1.3,-0.2 -1.3,-0.2 0,0 0.5,0 1.3,0 0.4,0 0.8,0 1.3,-0.1 0.5,0 1,-0.1 1.5,-0.2 0.5,0 1,-0.1 1.5,-0.4 0.5,-0.1 0.8,-0.2 1.2,-0.4 0.4,-0.1 0.6,-0.2 0.9,-0.4 0.2,0 0.3,-0.1 0.3,-0.1 z" id="path2058" style="fill:#ffffff"></path>
    </g>
    <g id="g2060" style="display:inline">
      <path d="m 196,349.5 c 0,0 -0.2,0.1 -0.6,0.4 -0.1,0.1 -0.4,0.1 -0.6,0.2 -0.2,0 -0.5,0.1 -0.7,0.1 -0.2,0 -0.5,0.1 -0.7,0 -0.2,0 -0.5,0 -0.6,-0.1 -0.4,0 -0.6,-0.1 -0.6,-0.1 0,0 0.2,-0.1 0.6,-0.1 0.2,0 0.4,-0.1 0.6,-0.1 0.2,0 0.5,0 0.7,-0.1 0.5,0 1,-0.1 1.3,-0.1 0.3,-0.1 0.6,-0.1 0.6,-0.1 z" id="path2062" style="fill:#ffffff"></path>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="forearms" class="workout-part" onclick="navigateToWorkout('forearms')">
    <linearGradient x1="100.2768" y1="588.40118" x2="116.5496" y2="588.40118" id="SVGID_21_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop2066" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop2068" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 124.6,330.8 c 0,0 -5.2,25.1 -1.5,35.7 4.2,12 16.8,24.5 16.9,31.6 0,0 -0.2,-18 1.2,-31.7 1.4,-13.7 -1.5,-35 -13.2,-45 0,-0.2 -1.8,3.4 -3.4,9.4 z" id="path2070" style="fill:url(#SVGID_21_);display:inline"></path>
    <g id="g2072" style="display:inline">
      <path d="m 135,335.4 c 0,0 0.1,0.7 0.2,2.1 0.1,1.3 0.2,3.3 0.4,5.5 0.1,1.1 0,2.4 0.1,3.6 0,1.3 0,2.7 0,4.1 0,1.5 -0.1,2.9 -0.2,4.4 -0.1,1.5 -0.1,3 -0.2,4.6 -0.1,1.5 -0.2,3 -0.4,4.5 0,1.5 -0.1,2.9 -0.1,4.4 0,1.5 0,2.8 0,4.1 0,1.3 0.1,2.6 0.1,3.6 0.1,2.3 0.2,4.1 0.4,5.5 0.1,1.3 0.1,2.1 0.1,2.1 0,0 -0.1,-0.7 -0.2,-2.1 -0.1,-1.3 -0.5,-3.2 -0.7,-5.5 -0.1,-1.1 -0.2,-2.4 -0.2,-3.6 -0.1,-1.3 -0.1,-2.7 -0.1,-4.1 0,-1.5 0,-2.9 0.1,-4.4 0.1,-1.5 0.2,-3 0.4,-4.5 0.1,-1.5 0.2,-3 0.4,-4.5 0.1,-1.5 0.2,-2.9 0.2,-4.4 0,-1.5 0,-2.8 0,-4.1 0,-1.3 0.1,-2.5 0,-3.6 0,-2.3 0,-4.1 0,-5.5 -0.1,-1.5 -0.3,-2.2 -0.3,-2.2 z" id="path2074" style="fill:#ffffff"></path>
    </g>
    <g id="g2076" style="display:inline">
      <path d="m 128.5,372.6 c 0,0 0,-0.1 0,-0.5 0,-0.2 0,-0.7 0,-1.3 0,-0.6 0,-1.2 0,-2.1 0,-0.7 0,-1.7 0.1,-2.6 0.1,-1 0.1,-1.9 0.2,-3 0,-1.1 0.2,-2.2 0.5,-3.4 0.1,-1.2 0.4,-2.4 0.6,-3.6 0.2,-1.2 0.5,-2.4 0.6,-3.8 0.2,-1.2 0.5,-2.6 0.6,-3.8 0.2,-1.2 0.4,-2.4 0.5,-3.6 0.1,-1.2 0.4,-2.3 0.5,-3.4 0.1,-1.1 0.2,-2.1 0.4,-3 0.2,-0.9 0.2,-1.8 0.2,-2.6 0,-0.8 0.1,-1.5 0.1,-1.9 0.1,-1.1 0.1,-1.7 0.1,-1.7 0,0 0,0.6 0,1.7 0,0.6 0,1.2 0,2.1 0,0.4 0,0.9 0,1.2 0,0.5 -0.1,0.8 -0.1,1.3 -0.2,1.9 -0.2,4.1 -0.6,6.6 -0.1,1.2 -0.4,2.4 -0.5,3.6 -0.1,1.2 -0.4,2.6 -0.6,3.8 -0.2,1.2 -0.5,2.6 -0.7,3.8 -0.2,1.2 -0.4,2.4 -0.6,3.6 -0.1,1.2 -0.5,2.3 -0.5,3.4 -0.1,1.1 -0.2,2.1 -0.4,3 -0.2,1.9 -0.4,3.5 -0.5,4.6 0.2,1 0.1,1.6 0.1,1.6 z" id="path2078" style="fill:#ffffff"></path>
    </g>
    <g id="g2080" style="display:inline">
      <path d="m 128.7,323 c 0,0 0.4,1.8 0.7,4.6 0.1,1.3 0.4,3 0.5,4.7 0.1,1.7 0.2,3.5 0.4,5.5 0,1.8 0.1,3.6 0,5.5 0,1.7 -0.1,3.4 -0.2,4.7 -0.2,2.8 -0.5,4.6 -0.5,4.6 0,0 0,-1.8 0.1,-4.6 0.1,-1.3 0,-3 0,-4.7 0,-1.7 -0.1,-3.5 -0.1,-5.3 0,-1.8 -0.1,-3.6 -0.2,-5.3 -0.1,-1.7 -0.1,-3.3 -0.2,-4.7 -0.4,-3.2 -0.5,-5 -0.5,-5 z" id="path2082" style="fill:#ffffff"></path>
    </g>
    <g id="g2084" style="display:inline">
      <path d="m 132.8,380 c 0,0 -0.1,-0.7 -0.2,-1.8 0,-0.6 -0.1,-1.3 -0.1,-2.2 0,-0.9 -0.1,-1.7 -0.1,-2.8 0,-1 0,-2.1 0,-3.3 0,-1.2 -0.1,-2.4 0.1,-3.6 0.2,-2.5 0.4,-5.2 0.6,-8 0.1,-1.3 0.2,-2.7 0.4,-4 0.1,-0.6 0.1,-1.3 0.2,-1.9 0,-0.6 0.1,-1.3 0.1,-1.9 0.1,-2.5 0.2,-4.9 0.2,-6.9 0,-2 0.1,-3.8 0.1,-5 0,-1.2 0,-1.8 0,-1.8 0,0 0,0.7 0,1.8 0,1.2 0,2.9 0,5 0,2.1 -0.1,4.4 -0.2,6.9 0,0.6 0,1.3 -0.1,1.9 0,0.6 -0.1,1.3 -0.1,1.9 -0.1,1.3 -0.2,2.7 -0.4,4 -0.2,2.7 -0.5,5.3 -0.7,7.9 -0.1,1.2 -0.1,2.6 -0.1,3.6 0,1.2 0,2.3 0,3.3 0,1 0.1,1.9 0.1,2.8 0,0.9 0,1.6 0.1,2.2 0.1,1.3 0.1,1.9 0.1,1.9 z" id="path2086" style="fill:#ffffff"></path>
    </g>
    <g id="g2088" style="display:inline">
      <path d="m 130.4,376.3 c 0,0 0,-0.4 -0.1,-1.1 0,-0.7 0,-1.8 -0.1,-3 0,-1.2 0.1,-2.7 0.1,-4.2 0,-0.7 0.1,-1.6 0.2,-2.4 0.1,-0.8 0.1,-1.7 0.2,-2.4 0.1,-0.9 0.2,-1.7 0.4,-2.4 0.1,-0.9 0.2,-1.6 0.4,-2.4 0.2,-1.6 0.5,-3 0.6,-4.2 0.4,-2.4 0.6,-4.1 0.6,-4.1 0,0 -0.1,1.7 -0.4,4.1 -0.1,1.2 -0.4,2.7 -0.5,4.2 -0.1,0.7 -0.2,1.6 -0.4,2.4 -0.2,0.8 -0.2,1.6 -0.4,2.4 -0.1,0.8 -0.1,1.7 -0.2,2.4 -0.1,0.9 -0.2,1.6 -0.2,2.4 -0.1,1.6 -0.1,3 -0.2,4.2 0,1.2 0,2.3 -0.1,3 0.1,0.8 0.1,1.1 0.1,1.1 z" id="path2090" style="fill:#ffffff"></path>
    </g>
    <g id="g2092" style="display:inline">
      <path d="m 131.3,341.5 c 0,0 -0.1,-3.8 -0.2,-7.4 0,-1 0,-1.8 0,-2.7 0,-0.9 -0.1,-1.7 -0.1,-2.4 0,-1.5 -0.1,-2.3 -0.1,-2.3 0,0 0.1,1 0.2,2.3 0.1,0.7 0.1,1.5 0.2,2.4 0,0.8 0.1,1.8 0.1,2.8 0,1.8 0,3.8 0,5.1 0,1.3 -0.1,2.2 -0.1,2.2 z" id="path2094" style="fill:#ffffff"></path>
    </g>
    <g id="g2096" style="display:inline">
      <path d="m 137,341.5 c 0,0 0.1,0.7 0.2,1.8 0,0.6 0.1,1.3 0.1,2.2 0.1,0.8 0.1,1.8 0.1,2.8 0,1 0,2.2 0,3.3 0,1.2 0,2.4 -0.1,3.6 -0.1,2.6 -0.2,5.3 -0.4,8 -0.1,1.3 -0.1,2.7 -0.2,4.1 -0.1,1.3 0,2.7 0,3.9 0,1.3 0,2.6 0.1,3.6 0.1,1.2 0.1,2.3 0.2,3.3 0.2,4.1 0.5,6.8 0.5,6.8 0,0 -0.1,-0.7 -0.2,-1.8 -0.1,-1.2 -0.2,-2.9 -0.5,-5 -0.1,-1 -0.1,-2.2 -0.2,-3.3 0,-1.2 -0.1,-2.4 -0.1,-3.6 0,-1.3 -0.1,-2.7 0,-4 0,-1.3 0.1,-2.7 0.1,-4.1 0.1,-2.7 0.4,-5.5 0.5,-8 0.1,-1.3 0.1,-2.5 0.1,-3.6 0,-1.2 0,-2.3 0,-3.3 0,-2.1 -0.1,-3.8 -0.1,-5 -0.1,-1 -0.1,-1.7 -0.1,-1.7 z" id="path2098" style="fill:#ffffff"></path>
    </g>
    <g id="g2100" style="display:inline">
      <path d="m 138.9,350.2 c 0,0 0.1,1.2 0.2,3 0,1 0,1.9 0,3.2 0,1.1 -0.1,2.4 -0.1,3.6 -0.1,1.2 -0.2,2.4 -0.2,3.5 -0.1,1.1 -0.2,2.2 -0.2,3.2 -0.1,1.8 -0.2,3 -0.2,3 0,0 0,-1.2 0,-3 0,-1 0,-1.9 0.1,-3.2 0.1,-1.1 0.1,-2.3 0.2,-3.5 0.1,-1.2 0.1,-2.4 0.2,-3.5 0,-1.1 0,-2.2 0,-3.2 0,-1.9 0,-3.1 0,-3.1 z" id="path2102" style="fill:#ffffff"></path>
    </g>
    <g id="g2104" style="display:inline">
      <path d="m 127.3,326.5 c 0,0 0.2,2.8 0.5,6.9 0,1.1 0.1,2.2 0.1,3.4 0,1.2 0.1,2.4 0.1,3.8 0,1.4 0.1,2.7 0.1,4 0,1.3 0,2.8 -0.1,4.1 0,1.5 -0.1,2.8 -0.1,4.1 0,1.3 -0.1,2.7 -0.2,4 -0.2,2.7 -0.4,5.1 -0.5,7.2 -0.1,2.1 -0.4,3.9 -0.4,5.1 0,1.2 0,1.9 0,1.9 0,0 0,-0.7 0,-1.9 0,-0.6 0,-1.3 0.1,-2.2 0,-0.9 0.1,-1.8 0.1,-2.9 0.1,-2.1 0.2,-4.5 0.5,-7.2 0.1,-1.3 0.2,-2.7 0.2,-4 0,-1.3 0,-2.8 0.1,-4.1 0,-1.3 0.1,-2.8 0.1,-4.1 0,-1.3 0,-2.7 -0.1,-4 0,-1.3 0,-2.6 -0.1,-3.8 0,-1.2 -0.1,-2.3 -0.1,-3.4 -0.1,-2.1 -0.1,-3.9 -0.2,-5.1 -0.1,-1 -0.1,-1.8 -0.1,-1.8 z" id="path2106" style="fill:#ffffff"></path>
    </g>
    <g id="g2108" style="display:inline">
      <path d="m 126,330.8 c 0,0 0.1,2.2 0.2,5.6 0,0.8 0,1.7 0.1,2.7 0,1 0,1.9 0,3 0,2.1 0,4.4 0,6.6 -0.1,2.2 -0.1,4.5 -0.2,6.6 -0.1,2.1 -0.2,4 -0.2,5.7 -0.2,3.4 -0.4,5.6 -0.4,5.6 0,0 0,-2.2 0.1,-5.6 0,-1.7 0.1,-3.6 0.2,-5.7 0.1,-2.1 0,-4.4 0.1,-6.6 0,-2.2 0.1,-4.5 0.1,-6.6 0,-1.1 0,-2.1 0.1,-3 0,-1 0,-1.8 0,-2.7 -0.1,-3.3 -0.1,-5.6 -0.1,-5.6 z" id="path2110" style="fill:#ffffff"></path>
    </g>
    <g id="g2112" style="display:inline">
      <path d="m 124.5,337.4 c 0,0 0,1.5 0.1,3.6 0,2.2 0,5.2 0,8.1 0,1.5 -0.1,2.9 -0.1,4.4 -0.1,1.3 -0.1,2.7 -0.2,3.8 -0.1,2.2 -0.2,3.6 -0.2,3.6 0,0 0,-1.5 0.1,-3.6 0,-1.1 0.1,-2.4 0.1,-3.8 0.1,-1.3 0.1,-2.8 0.1,-4.4 0,-2.9 0.1,-5.9 0.1,-8.1 0,-2.2 0,-3.6 0,-3.6 z" id="path2114" style="fill:#ffffff"></path>
    </g>
    <g id="g2116" style="display:inline">
      <path d="m 123.2,346.5 c 0,0 0,0.5 0.1,1.1 0,0.7 0,1.6 0,2.4 0,0.8 -0.1,1.8 -0.1,2.4 -0.1,0.7 -0.1,1.1 -0.1,1.1 0,0 0,-0.5 -0.1,-1.1 0,-0.7 0,-1.6 0,-2.4 0,-0.8 0.1,-1.8 0.1,-2.4 0,-0.7 0.1,-1.1 0.1,-1.1 z" id="path2118" style="fill:#ffffff"></path>
    </g>
    <linearGradient x1="171.67931" y1="595.47113" x2="181.54601" y2="595.47113" id="SVGID_22_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop2121" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop2123" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 218.3,319.9 c 0,0 0.2,8.6 -2.2,13.2 -2.4,4.6 -6.2,13.8 -7.3,17.5 -1,3.6 0,4.6 0.4,10.7 0.4,6.1 2.2,19.1 2.2,20.9 0,1.8 4.9,-9.5 7.4,-28.5 2.5,-19 1,-24.5 1,-24.5 l -1.5,-9.3 z" id="path2125" style="fill:url(#SVGID_22_);display:inline"></path>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="biceps" class="workout-part" onclick="navigateToWorkout('biceps')">
    <linearGradient x1="107.8379" y1="628.29712" x2="128.2599" y2="628.29712" id="SVGID_23_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop2129" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop2131" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 154.3,274.9 c 0,0 -3.6,2.6 -8.6,5.8 -5,3.3 -10.2,6.8 -12.1,12.3 -1.9,5.5 -2.9,15.3 -2.5,21.1 0.4,5.8 1.8,11.4 3,14.3 1.2,2.9 4.1,9 5.1,13.1 1,4.1 2.3,6.6 2.9,5.8 0.6,-0.7 0.6,-9.8 1.9,-13.4 1.3,-3.5 7.3,-16.4 8.5,-26 1.2,-9.6 2.4,-18.9 2.4,-21.2 0,-2.3 0.7,-10.2 0.7,-10.8 0,-0.6 -1.3,-1 -1.3,-1 z" id="path2133" style="fill:url(#SVGID_23_);display:inline"></path>
    <g id="g2135" style="display:inline">
      <path d="m 135.8,328.1 c 0,0 -0.2,-0.6 -0.5,-1.6 -0.2,-1.1 -0.7,-2.6 -1.1,-4.4 -0.1,-0.9 -0.4,-1.9 -0.5,-2.9 -0.1,-1.1 -0.2,-2.2 -0.4,-3.3 0,-1.2 -0.1,-2.3 -0.1,-3.5 0.1,-1.2 0.1,-2.4 0.2,-3.6 0.1,-1.2 0.2,-2.4 0.5,-3.6 0.2,-1.2 0.4,-2.4 0.6,-3.5 0.1,-0.6 0.2,-1.1 0.4,-1.7 0.1,-0.5 0.2,-1.1 0.4,-1.6 0.2,-1.1 0.6,-1.9 0.8,-2.9 0.2,-0.9 0.6,-1.7 0.8,-2.3 0.4,-0.7 0.6,-1.2 0.9,-1.7 0.5,-1 0.8,-1.5 0.8,-1.5 0,0 -0.2,0.5 -0.7,1.5 -0.2,0.5 -0.5,1.1 -0.7,1.8 -0.2,0.7 -0.5,1.5 -0.8,2.4 -0.2,0.8 -0.5,1.8 -0.7,2.9 -0.2,1 -0.5,2.1 -0.6,3.3 -0.2,1.1 -0.4,2.3 -0.5,3.5 -0.1,1.2 -0.2,2.4 -0.4,3.6 -0.1,1.2 -0.1,2.4 -0.2,3.6 0,1.2 0.1,2.4 0.1,3.5 0.1,1.1 0.2,2.2 0.2,3.3 0.1,1.1 0.2,2.1 0.5,2.9 0.1,0.9 0.4,1.7 0.5,2.4 0.1,0.7 0.4,1.3 0.5,1.9 -0.2,0.9 0,1.5 0,1.5 z" id="path2137" style="fill:#ffffff"></path>
    </g>
    <g id="g2139" style="display:inline">
      <path d="m 138.8,333.2 c 0,0 -0.2,-0.7 -0.6,-1.9 -0.4,-1.2 -0.8,-3 -1.5,-5.1 -0.2,-1.1 -0.5,-2.3 -0.7,-3.5 -0.2,-1.2 -0.4,-2.6 -0.6,-3.9 -0.1,-1.3 -0.2,-2.8 -0.2,-4.2 0,-1.5 0.1,-2.9 0.1,-4.4 0.2,-1.5 0.4,-2.9 0.6,-4.4 0.2,-1.5 0.5,-2.8 0.7,-4.2 0.2,-1.3 0.6,-2.7 1,-3.9 0.4,-1.2 0.7,-2.3 1.1,-3.4 0.4,-1.1 0.7,-1.9 1.1,-2.8 0.4,-0.9 0.7,-1.5 1,-2.1 0.6,-1.1 1,-1.7 1,-1.7 0,0 -0.4,0.6 -1,1.8 -0.2,0.6 -0.6,1.3 -1,2.1 -0.4,0.9 -0.6,1.8 -1.1,2.8 -0.4,1.1 -0.7,2.2 -1,3.4 -0.4,1.2 -0.6,2.5 -0.8,3.9 -0.4,1.3 -0.5,2.8 -0.7,4.1 -0.2,1.5 -0.4,2.9 -0.5,4.4 -0.1,1.5 -0.1,2.9 -0.2,4.4 0.1,1.5 0.1,2.9 0.2,4.2 0.2,1.3 0.2,2.7 0.5,3.9 0.3,1.2 0.4,2.4 0.6,3.5 0.5,2.2 0.8,3.9 1.2,5.2 0.7,1.1 0.8,1.8 0.8,1.8 z" id="path2141" style="fill:#ffffff"></path>
    </g>
    <g id="g2143" style="display:inline">
      <path d="m 146,284.2 c 0,0 -0.4,0.7 -1,2.1 -0.6,1.3 -1.5,3.2 -2.3,5.5 -0.5,1.2 -1,2.4 -1.3,3.8 -0.5,1.3 -0.8,2.8 -1.3,4.2 -0.8,2.9 -1.5,6.2 -1.7,9.5 -0.1,1.7 0,3.3 0.1,4.9 0,0.8 0.1,1.6 0.1,2.4 0.1,0.9 0.1,1.6 0.2,2.3 0.1,1.6 0.4,3 0.5,4.4 0.2,1.5 0.4,2.7 0.6,4 0.4,2.4 0.7,4.5 0.9,5.9 0.1,0.7 0,1.3 0.1,1.7 0,0.4 0,0.6 0,0.6 0,0 0,-0.2 0,-0.6 0,-0.4 0,-1 -0.1,-1.7 -0.1,-0.7 -0.2,-1.6 -0.4,-2.6 -0.2,-1 -0.4,-2.1 -0.6,-3.3 -0.2,-1.2 -0.5,-2.5 -0.7,-4 -0.2,-1.5 -0.5,-2.9 -0.6,-4.5 -0.1,-0.7 -0.1,-1.6 -0.2,-2.3 0,-0.9 -0.1,-1.6 -0.1,-2.4 -0.1,-1.6 -0.2,-3.3 -0.1,-5 0.2,-3.3 1,-6.6 1.8,-9.6 0.8,-3 1.9,-5.7 2.8,-8 1.7,-4.4 3.3,-7.3 3.3,-7.3 z" id="path2145" style="fill:#ffffff"></path>
    </g>
    <g id="g2147" style="display:inline">
      <path d="m 149.1,282.2 c 0,0 -1.3,2.8 -3.2,7.2 -0.9,2.2 -1.8,4.7 -2.8,7.5 -0.5,1.5 -0.8,2.9 -1.2,4.4 -0.1,0.7 -0.4,1.5 -0.5,2.3 -0.1,0.7 -0.2,1.6 -0.4,2.3 -0.2,1.6 -0.1,3.2 -0.1,4.6 0,1.6 0,3 0,4.5 0.1,1.5 0.2,2.9 0.2,4.2 0.1,1.3 0.1,2.7 0.2,3.8 0.2,2.3 0.4,4.4 0.4,5.7 0,1.3 0.1,2.2 0.1,2.2 0,0 -0.1,-0.7 -0.1,-2.2 0,-0.7 -0.1,-1.5 -0.2,-2.4 -0.1,-1 -0.2,-2.1 -0.4,-3.2 -0.2,-2.3 -0.5,-5.1 -0.7,-8 -0.1,-1.5 0,-3 -0.1,-4.5 0,-1.6 -0.1,-3.2 0.1,-4.7 0.1,-0.7 0.2,-1.6 0.4,-2.3 0.1,-0.7 0.4,-1.6 0.5,-2.3 0.4,-1.5 0.8,-2.9 1.2,-4.4 1,-2.8 1.9,-5.3 2.9,-7.5 2.1,-4.4 3.7,-7.2 3.7,-7.2 z" id="path2149" style="fill:#ffffff"></path>
    </g>
    <g id="g2151" style="display:inline">
      <path d="m 151.7,280.9 c 0,0 -1.2,2.8 -2.8,7 -0.4,1.1 -0.8,2.2 -1.2,3.4 -0.4,1.2 -0.9,2.6 -1.2,3.9 -0.4,1.3 -0.8,2.8 -1.2,4.1 -0.4,1.5 -0.7,2.9 -1,4.4 -0.3,1.5 -0.6,2.9 -0.6,4.4 -0.1,0.7 -0.1,1.5 -0.2,2.2 0,0.7 -0.1,1.5 -0.1,2.2 -0.1,1.5 -0.1,2.8 -0.1,4 0,1.3 0,2.5 0.1,3.6 0,1.1 0.1,2.2 0.1,3 0,1 0,1.7 0,2.4 -0.1,1.3 -0.1,2.1 -0.1,2.1 0,0 0,-0.7 0,-2.1 0,-0.6 0,-1.5 -0.1,-2.4 -0.1,-0.9 -0.1,-1.9 -0.2,-3 -0.1,-1.1 -0.1,-2.3 -0.1,-3.6 0,-1.3 0,-2.7 0,-4.1 0,-0.7 0.1,-1.5 0.1,-2.2 0.1,-0.7 0.1,-1.5 0.2,-2.2 0.1,-1.5 0.4,-3 0.6,-4.5 0.2,-1.5 0.6,-2.9 1,-4.4 0.4,-1.5 0.7,-2.8 1.2,-4.2 0.4,-1.3 0.8,-2.7 1.3,-3.9 0.5,-1.2 0.8,-2.4 1.3,-3.4 0.4,-1.1 0.9,-2.1 1.2,-2.9 0.4,-0.8 0.7,-1.6 1,-2.2 0.5,-1 0.8,-1.6 0.8,-1.6 z" id="path2153" style="fill:#ffffff"></path>
    </g>
    <g id="g2155" style="display:inline">
      <path d="m 152.5,283.6 c 0,0 0,0.6 0,1.8 0,1.1 -0.1,2.8 -0.2,4.7 -0.1,1.9 -0.4,4.2 -0.6,6.7 -0.1,1.2 -0.2,2.6 -0.4,3.8 -0.2,1.3 -0.5,2.5 -0.6,3.9 -0.2,1.3 -0.5,2.5 -0.7,3.9 -0.1,1.3 -0.6,2.5 -0.9,3.8 -0.2,1.2 -0.6,2.3 -0.8,3.4 -0.2,1.1 -0.6,2.1 -0.9,3 -0.2,1 -0.6,1.8 -0.8,2.6 -0.2,0.8 -0.5,1.5 -0.7,1.9 -0.2,0.5 -0.4,1 -0.5,1.2 -0.1,0.2 -0.2,0.5 -0.2,0.5 0,0 0.1,-0.1 0.1,-0.5 0.1,-0.2 0.2,-0.7 0.5,-1.2 0.1,-0.6 0.4,-1.2 0.6,-1.9 0.2,-0.7 0.5,-1.7 0.7,-2.6 0.2,-1 0.6,-1.9 0.8,-3 0.2,-1.1 0.5,-2.3 0.9,-3.5 0.2,-1.2 0.6,-2.4 0.8,-3.8 0.2,-1.4 0.4,-2.6 0.6,-3.9 0.2,-1.3 0.5,-2.6 0.7,-3.9 0.1,-1.3 0.2,-2.6 0.5,-3.8 0.1,-1.2 0.2,-2.4 0.5,-3.5 0.1,-1.1 0.2,-2.2 0.4,-3.2 0.1,-1.9 0.4,-3.6 0.5,-4.7 -0.4,-1 -0.3,-1.7 -0.3,-1.7 z" id="path2157" style="fill:#ffffff"></path>
    </g>
    <g id="g2159" style="display:inline">
      <path d="m 151.3,285.7 c 0,0 -0.4,2.3 -0.9,5.7 -0.5,3.4 -1.2,8 -2.1,12.6 -0.9,4.6 -1.7,9.1 -2.4,12.5 -0.7,3.4 -1.2,5.7 -1.2,5.7 0,0 0.4,-2.3 1,-5.7 0.6,-3.4 1.5,-8 2.3,-12.5 0.5,-2.3 0.9,-4.6 1.2,-6.7 0.4,-2.2 0.7,-4.1 1.1,-5.8 0.5,-3.6 1,-5.8 1,-5.8 z" id="path2161" style="fill:#ffffff"></path>
    </g>
    <g id="g2163" style="display:inline">
      <path d="m 149.2,290.4 c 0,0 -0.4,1.7 -0.8,4.1 -0.2,1.2 -0.6,2.7 -0.9,4.2 -0.4,1.6 -0.6,3.2 -1,4.9 -0.4,1.7 -0.6,3.3 -0.9,4.9 -0.2,1.6 -0.5,3 -0.7,4.2 -0.4,2.5 -0.5,4.2 -0.5,4.2 0,0 0.1,-1.7 0.2,-4.2 0.1,-1.2 0.4,-2.8 0.5,-4.4 0.2,-1.6 0.6,-3.3 0.9,-4.9 0.4,-1.7 0.7,-3.3 1.1,-4.9 0.4,-1.6 0.7,-3 1.1,-4.2 0.6,-2.4 1,-3.9 1,-3.9 z" id="path2165" style="fill:#ffffff"></path>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="chest" class="workout-part" onclick="navigateToWorkout('chest')">
    <linearGradient x1="127.8222" y1="659.25739" x2="185.3667" y2="659.25739" id="SVGID_24_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop2169" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop2171" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 168.5,296.3 c 0,0 10.7,2.2 15.3,1.3 4.6,-0.9 7.9,-2.2 9.6,-3.9 1.7,-1.7 2.2,-2.6 5.3,-0.9 3.3,1.7 7.7,4.7 13.1,5.1 5.3,0.4 9.8,-2.6 12,-8.5 2.2,-6 0.9,-17.5 -0.2,-21.2 -1.1,-3.8 -3.8,-7.9 -3.9,-8.3 -0.1,-0.4 -4.4,-7.5 -10.9,-7.9 -6.6,-0.2 -11.8,4.4 -11.8,10.9 0,6.6 0.4,8.3 0,8.1 -0.4,-0.2 -0.6,-5.2 -4.1,-10.1 -3.5,-4.9 -22.2,-12.5 -27.6,-11.8 -5.3,0.9 -7.2,1.5 -7,6.8 0.1,5.2 -0.2,7.4 -2.2,18.7 -1.9,11.6 -2.1,16.7 12.4,21.7 z" id="path2173" style="fill:url(#SVGID_24_);display:inline"></path>
    <g id="g2175" style="display:inline">
      <path d="m 160.4,261.9 c 0,0 2.4,1.2 5.8,3.4 1.7,1.1 3.6,2.4 5.7,3.9 1.1,0.7 2.1,1.6 3.2,2.3 1.1,0.8 2.1,1.7 3.2,2.5 1,0.9 2.1,1.8 3,2.7 1,1 1.9,1.8 2.8,2.8 0.9,1 1.7,1.8 2.4,2.7 0.7,1 1.5,1.7 2.1,2.6 0.6,0.9 1.1,1.6 1.6,2.3 0.5,0.7 0.9,1.3 1.1,1.8 0.6,1 1,1.6 1,1.6 0,0 -0.4,-0.6 -1.1,-1.6 -0.4,-0.5 -0.7,-1.1 -1.2,-1.7 -0.5,-0.6 -1.1,-1.3 -1.7,-2.2 -0.6,-0.7 -1.3,-1.6 -2.2,-2.4 -0.7,-0.8 -1.7,-1.7 -2.6,-2.7 -0.9,-1 -1.8,-1.8 -2.8,-2.7 -1,-0.9 -1.9,-1.8 -3,-2.7 -1.1,-0.9 -2.1,-1.7 -3,-2.6 -1.1,-0.9 -2.1,-1.7 -3,-2.4 -2.1,-1.6 -3.9,-2.9 -5.6,-4 -1.7,-1.1 -3,-2.1 -4,-2.7 -1.1,-0.5 -1.7,-0.9 -1.7,-0.9 z" id="path2177" style="fill:#ffffff"></path>
    </g>
    <g id="g2179" style="display:inline">
      <path d="m 160.4,260.4 c 0,0 1,-0.7 2.7,-1.6 0.8,-0.5 1.8,-1 2.9,-1.3 1.1,-0.5 2.3,-0.9 3.5,-1.2 0.6,-0.1 1.2,-0.4 1.8,-0.5 0.6,-0.1 1.2,-0.2 1.8,-0.4 0.6,-0.2 1.1,-0.2 1.7,-0.2 0.5,0 1.1,-0.1 1.6,-0.1 1,0 1.7,0 2.3,0.1 0.5,0.1 0.8,0.1 0.8,0.1 0,0 -0.4,0 -0.8,0 -0.2,0 -0.6,0 -1,0 -0.4,0 -0.9,0.1 -1.2,0.1 -0.5,0 -1,0.1 -1.5,0.2 -0.5,0.1 -1.1,0.2 -1.7,0.4 -0.6,0.1 -1.1,0.2 -1.7,0.4 -0.6,0.2 -1.2,0.4 -1.8,0.5 -1.2,0.4 -2.4,0.7 -3.5,1.1 -1.1,0.4 -2.1,0.7 -2.9,1.2 -1.8,0.6 -3,1.2 -3,1.2 z" id="path2181" style="fill:#ffffff"></path>
    </g>
    <g id="g2183" style="display:inline">
      <path d="m 160.2,265.1 c 0,0 0.6,2.2 1.8,5.3 0.6,1.6 1.5,3.4 2.3,5.3 0.5,1 1,1.9 1.5,2.9 0.6,1 1.1,1.9 1.7,2.9 0.6,1 1.2,1.9 1.8,2.8 0.6,1 1.2,1.8 1.9,2.7 0.7,0.9 1.3,1.6 1.9,2.3 0.7,0.7 1.2,1.5 1.9,1.9 0.6,0.6 1.2,1.1 1.7,1.6 0.5,0.5 1,0.8 1.5,1.1 0.7,0.6 1.2,1 1.2,1 0,0 -0.5,-0.4 -1.3,-0.9 -0.4,-0.2 -1,-0.6 -1.5,-1 -0.5,-0.5 -1.1,-1 -1.8,-1.5 -0.7,-0.5 -1.3,-1.2 -2.1,-1.9 -0.7,-0.7 -1.5,-1.5 -2.1,-2.3 -0.7,-0.9 -1.3,-1.7 -2.1,-2.7 -0.7,-0.9 -1.2,-1.9 -1.9,-2.8 -0.6,-1 -1.1,-1.9 -1.7,-3 -0.5,-1 -1,-1.9 -1.5,-3 -0.8,-1.9 -1.6,-3.9 -2.2,-5.5 -0.7,-3 -1,-5.2 -1,-5.2 z" id="path2185" style="fill:#ffffff"></path>
    </g>
    <g id="g2187" style="display:inline">
      <path d="m 159.7,270.6 c 0,0 -0.4,1.5 -0.7,3.5 -0.2,1.1 -0.4,2.3 -0.5,3.6 -0.1,1.3 -0.1,2.8 -0.1,4.1 0,1.5 0.2,2.8 0.6,4 0.4,1.2 0.8,2.3 1.6,3.2 0.4,0.4 0.6,0.7 1,1.1 0.4,0.4 0.6,0.5 0.9,0.7 0.5,0.4 0.8,0.5 0.8,0.5 0,0 -0.4,-0.1 -1,-0.4 -0.2,-0.1 -0.6,-0.4 -1,-0.6 -0.4,-0.2 -0.7,-0.6 -1.1,-1 -0.4,-0.4 -0.7,-0.9 -1.1,-1.5 -0.4,-0.6 -0.6,-1.2 -0.8,-1.8 -0.5,-1.3 -0.6,-2.8 -0.7,-4.2 0,-1.5 0,-2.9 0.2,-4.2 0.1,-1.3 0.5,-2.6 0.7,-3.6 0.6,-2.1 1.2,-3.4 1.2,-3.4 z" id="path2189" style="fill:#ffffff"></path>
    </g>
    <g id="g2191" style="display:inline">
      <path d="m 160,258.2 c 0,0 -0.1,-0.5 -0.1,-1.2 0,-0.4 0.1,-0.9 0.1,-1.3 0.1,-0.5 0.2,-1 0.5,-1.5 0.1,-0.2 0.2,-0.5 0.4,-0.6 0.1,-0.2 0.2,-0.4 0.4,-0.6 0.2,-0.4 0.6,-0.7 0.8,-1 0.6,-0.5 1,-0.7 1,-0.7 0,0 -0.4,0.4 -0.9,1 -0.1,0.1 -0.2,0.2 -0.4,0.5 -0.1,0.1 -0.2,0.4 -0.4,0.5 -0.1,0.2 -0.2,0.4 -0.4,0.6 -0.1,0.2 -0.2,0.5 -0.4,0.6 -0.2,0.4 -0.4,0.8 -0.5,1.3 -0.1,0.5 -0.2,0.8 -0.4,1.2 -0.1,0.4 -0.1,0.6 -0.1,0.9 0.4,0.2 0.4,0.3 0.4,0.3 z" id="path2193" style="fill:#ffffff"></path>
    </g>
    <g id="g2195" style="display:inline">
      <path d="m 161,265 c 0,0 1.3,1.9 3.4,4.7 1,1.5 2.2,3.2 3.4,4.9 1.2,1.8 2.7,3.6 4,5.6 1.3,1.9 2.7,3.8 4,5.6 1.3,1.7 2.6,3.3 3.6,4.7 2.2,2.8 3.5,4.6 3.5,4.6 0,0 -1.5,-1.8 -3.8,-4.5 -1.1,-1.3 -2.4,-2.9 -3.8,-4.6 -1.3,-1.8 -2.7,-3.6 -4,-5.6 -1.3,-1.9 -2.8,-3.8 -4,-5.6 -1.2,-1.8 -2.3,-3.5 -3.3,-5 -1,-1.5 -1.7,-2.7 -2.3,-3.5 -0.3,-0.8 -0.7,-1.3 -0.7,-1.3 z" id="path2197" style="fill:#ffffff"></path>
    </g>
    <g id="g2199" style="display:inline">
      <path d="m 163.4,266.2 c 0,0 0.4,0.4 1.1,1.1 0.7,0.7 1.7,1.7 2.9,2.9 2.4,2.4 5.5,5.8 8.5,9.2 1.5,1.7 2.9,3.5 4.2,5.2 0.7,0.8 1.3,1.7 1.8,2.4 0.6,0.9 1.1,1.6 1.6,2.2 0.5,0.7 0.8,1.3 1.2,1.9 0.4,0.6 0.7,1.1 1,1.6 0.5,0.9 0.8,1.3 0.8,1.3 0,0 -0.4,-0.5 -0.8,-1.3 -0.2,-0.4 -0.6,-1 -1,-1.5 -0.4,-0.6 -0.8,-1.2 -1.3,-1.9 -1.1,-1.3 -2.2,-2.9 -3.6,-4.6 -1.3,-1.6 -2.8,-3.4 -4.2,-5.1 -0.7,-0.8 -1.5,-1.7 -2.2,-2.5 -0.7,-0.9 -1.5,-1.7 -2.2,-2.4 -1.5,-1.6 -2.7,-3 -3.9,-4.4 -2.4,-2.4 -3.9,-4.1 -3.9,-4.1 z" id="path2201" style="fill:#ffffff"></path>
    </g>
    <g id="g2203" style="display:inline">
      <path d="m 189.9,293.3 c 0,0 -1.3,-2.3 -3.6,-5.5 -1.2,-1.6 -2.6,-3.4 -4.1,-5.3 -1.6,-1.9 -3.4,-3.9 -5.2,-5.7 -0.9,-1 -1.8,-1.8 -2.8,-2.8 -1,-1 -1.9,-1.7 -2.8,-2.6 -0.9,-0.8 -1.8,-1.6 -2.7,-2.3 -0.8,-0.7 -1.7,-1.3 -2.6,-1.9 -0.8,-0.6 -1.5,-1.2 -2.2,-1.6 -0.6,-0.5 -1.2,-0.9 -1.7,-1.2 -1,-0.6 -1.5,-1.1 -1.5,-1.1 0,0 0.6,0.4 1.6,1 0.5,0.4 1.1,0.7 1.8,1.1 0.7,0.5 1.5,1 2.2,1.6 0.8,0.6 1.7,1.2 2.6,1.9 0.9,0.7 1.8,1.5 2.8,2.3 1,0.8 1.9,1.6 2.8,2.5 1,0.9 1.9,1.8 2.8,2.8 1.8,1.9 3.6,3.9 5.2,5.8 1.6,1.9 2.9,3.8 4.1,5.5 2.1,3.2 3.3,5.5 3.3,5.5 z" id="path2205" style="fill:#ffffff"></path>
    </g>
    <g id="g2207" style="display:inline">
      <path d="m 194,287.1 c 0,0 -1.7,-1.9 -4.5,-4.7 -1.3,-1.5 -3,-3 -4.9,-4.6 -1.8,-1.7 -3.8,-3.4 -5.8,-5.1 -1.1,-0.9 -2.1,-1.7 -3,-2.4 -1.1,-0.7 -2.1,-1.6 -3,-2.2 -1,-0.7 -1.9,-1.3 -2.9,-1.9 -1,-0.6 -1.8,-1.2 -2.7,-1.7 -0.8,-0.5 -1.7,-1 -2.3,-1.3 -0.7,-0.4 -1.3,-0.6 -1.8,-1 -1.1,-0.5 -1.6,-0.9 -1.6,-0.9 0,0 0.6,0.2 1.7,0.7 0.5,0.2 1.2,0.5 1.9,0.9 0.7,0.4 1.6,0.7 2.4,1.2 0.8,0.5 1.8,1 2.8,1.6 1,0.6 1.9,1.2 3,1.9 1.1,0.7 2.1,1.5 3.2,2.2 1.1,0.7 2.1,1.6 3.2,2.4 2.1,1.7 4,3.4 5.8,5.1 1.8,1.7 3.4,3.4 4.7,4.7 2.3,2.9 3.8,5.1 3.8,5.1 z" id="path2209" style="fill:#ffffff"></path>
    </g>
    <g id="g2211" style="display:inline">
      <path d="m 194.9,281.7 c 0,0 -1.7,-1.7 -4.5,-4.1 -1.3,-1.2 -3,-2.5 -4.9,-4 -0.8,-0.7 -1.8,-1.5 -2.8,-2.2 -1,-0.7 -1.9,-1.3 -3,-2.1 -1,-0.6 -2.1,-1.3 -3,-1.9 -1.1,-0.6 -2.1,-1.2 -3,-1.7 -1,-0.5 -1.9,-1.1 -2.9,-1.5 -1,-0.5 -1.8,-0.8 -2.7,-1.2 -0.9,-0.4 -1.6,-0.6 -2.3,-1 -0.7,-0.2 -1.3,-0.5 -1.8,-0.6 -1,-0.4 -1.6,-0.5 -1.6,-0.5 0,0 0.6,0.1 1.6,0.4 0.5,0.1 1.2,0.2 1.8,0.5 0.7,0.2 1.5,0.5 2.3,0.9 0.8,0.2 1.8,0.7 2.8,1.1 1,0.4 1.9,1 3,1.5 1.1,0.5 2.1,1.1 3,1.7 1.1,0.6 2.1,1.3 3.2,1.9 1,0.7 2.1,1.5 3,2.1 1,0.7 1.9,1.5 2.8,2.2 1.8,1.5 3.4,2.9 4.7,4.1 2.7,2.6 4.3,4.4 4.3,4.4 z" id="path2213" style="fill:#ffffff"></path>
    </g>
    <g id="g2215" style="display:inline">
      <path d="m 194.4,276.5 c 0,0 -1.6,-1.7 -4.2,-3.8 -1.3,-1.1 -2.9,-2.3 -4.6,-3.5 -0.8,-0.6 -1.8,-1.2 -2.8,-1.8 -1,-0.6 -1.9,-1.2 -2.9,-1.7 -1,-0.5 -1.9,-1.1 -3,-1.6 -1,-0.5 -2.1,-1 -3,-1.2 -1,-0.4 -1.9,-0.7 -2.9,-1 -1,-0.2 -1.8,-0.6 -2.7,-0.7 -0.8,-0.1 -1.6,-0.4 -2.3,-0.5 -0.7,-0.1 -1.3,-0.1 -1.8,-0.2 -1,-0.1 -1.6,-0.1 -1.6,-0.1 0,0 0.6,0 1.6,0.1 0.5,0 1.1,0 1.8,0.1 0.7,0.1 1.5,0.2 2.3,0.4 0.9,0.1 1.7,0.4 2.7,0.6 1,0.2 1.9,0.6 2.9,1 1,0.4 2.1,0.9 3,1.2 1.1,0.4 2.1,1 3,1.5 1,0.5 1.9,1.2 2.9,1.7 1,0.6 1.8,1.2 2.8,1.8 1.7,1.2 3.3,2.5 4.6,3.6 2.7,2.4 4.2,4.1 4.2,4.1 z" id="path2217" style="fill:#ffffff"></path>
    </g>
    <g id="g2219" style="display:inline">
      <path d="m 193.1,269.2 c 0,0 -1.6,-1.1 -4.1,-2.4 -0.6,-0.4 -1.3,-0.7 -2.1,-1.1 -0.7,-0.4 -1.5,-0.7 -2.3,-1.1 -0.9,-0.4 -1.7,-0.7 -2.6,-1.1 -0.8,-0.4 -1.7,-0.7 -2.7,-1 -0.9,-0.4 -1.8,-0.6 -2.7,-0.9 -0.5,-0.1 -0.8,-0.2 -1.3,-0.4 -0.5,-0.1 -0.8,-0.2 -1.3,-0.2 -0.5,-0.1 -0.9,-0.2 -1.2,-0.2 -0.4,-0.1 -0.8,-0.1 -1.2,-0.2 -0.9,-0.1 -1.6,-0.2 -2.3,-0.4 -0.7,-0.1 -1.3,-0.1 -1.9,-0.2 -0.6,0 -1.1,0 -1.5,0 -0.9,0 -1.3,0 -1.3,0 0,0 0.5,0 1.3,0 0.4,0 1,0 1.5,0 0.6,0 1.2,0.1 1.9,0.1 0.7,0 1.5,0.1 2.3,0.2 0.4,0 0.8,0.1 1.2,0.1 0.4,0.1 0.8,0.1 1.3,0.2 0.5,0.1 0.8,0.2 1.3,0.2 0.5,0.1 0.8,0.2 1.3,0.4 1,0.2 1.8,0.5 2.7,0.9 0.9,0.2 1.8,0.7 2.7,1 0.8,0.4 1.7,0.7 2.6,1.1 1.6,0.7 3,1.6 4.2,2.3 2.7,1.5 4.2,2.7 4.2,2.7 z" id="path2221" style="fill:#ffffff"></path>
    </g>
    <g id="g2223" style="display:inline">
      <path d="m 191.7,264.2 c 0,0 -0.4,-0.2 -1.1,-0.5 -0.6,-0.4 -1.6,-0.6 -2.8,-1.1 -0.6,-0.2 -1.2,-0.4 -1.9,-0.6 -0.7,-0.2 -1.3,-0.5 -2.2,-0.6 -0.7,-0.2 -1.6,-0.4 -2.3,-0.6 -0.7,-0.2 -1.6,-0.2 -2.4,-0.5 -0.8,-0.1 -1.6,-0.2 -2.4,-0.5 -0.9,-0.1 -1.6,-0.1 -2.4,-0.2 -0.7,-0.1 -1.6,-0.1 -2.2,-0.2 -0.7,-0.1 -1.3,0 -1.9,-0.1 -2.6,-0.1 -4.1,-0.1 -4.1,-0.1 0,0 1.7,0 4.1,-0.1 0.6,0 1.3,-0.1 2.1,0 0.7,0 1.5,0.1 2.2,0.1 0.7,0.1 1.6,0.1 2.4,0.2 0.8,0.1 1.6,0.2 2.4,0.4 0.8,0.1 1.7,0.2 2.4,0.5 0.8,0.2 1.6,0.5 2.3,0.6 0.7,0.1 1.5,0.5 2.2,0.7 0.7,0.2 1.3,0.5 1.9,0.7 1.1,0.5 2.1,1 2.7,1.3 0.7,0.4 1,0.6 1,0.6 z" id="path2225" style="fill:#ffffff"></path>
    </g>
    <g id="g2227" style="display:inline">
      <path d="m 188,259.4 c 0,0 -0.2,-0.1 -0.8,-0.2 -0.5,-0.1 -1.2,-0.2 -2.2,-0.4 -0.5,-0.1 -1,-0.1 -1.5,-0.2 -0.5,0 -1.1,-0.1 -1.6,-0.2 -0.6,0 -1.1,-0.1 -1.7,-0.1 -0.6,-0.1 -1.2,-0.1 -1.8,-0.1 -0.6,0 -1.2,0 -1.8,-0.1 -0.6,0 -1.2,0 -1.7,0 -0.6,0 -1.1,0 -1.7,0 -0.5,0 -1,0 -1.5,0.1 -1.8,0.1 -3,0.2 -3,0.2 0,0 1.2,-0.2 3,-0.5 0.9,-0.1 1.9,-0.2 3.2,-0.2 0.6,0 1.2,-0.1 1.8,-0.1 0.6,0 1.2,0 1.8,0 0.6,0 1.2,0 1.8,0.1 0.6,0.1 1.2,0.1 1.7,0.2 0.6,0 1.1,0.2 1.6,0.2 0.5,0.1 1,0.1 1.5,0.2 1.8,0.6 2.9,1.1 2.9,1.1 z" id="path2229" style="fill:#ffffff"></path>
    </g>
    <g id="g2231" style="display:inline">
      <path d="m 161,258.8 c 0,0 0.7,-0.6 1.8,-1.3 0.6,-0.4 1.2,-0.9 2.1,-1.2 0.7,-0.5 1.6,-0.8 2.4,-1.2 0.5,-0.2 0.8,-0.4 1.3,-0.5 0.5,-0.1 0.8,-0.4 1.2,-0.5 0.8,-0.2 1.6,-0.5 2.3,-0.6 1.5,-0.1 2.3,-0.2 2.3,-0.2 0,0 -1,0.2 -2.3,0.5 -0.6,0.2 -1.5,0.5 -2.2,0.7 -0.4,0.1 -0.8,0.4 -1.2,0.5 -0.4,0.1 -0.9,0.4 -1.2,0.5 -0.8,0.4 -1.7,0.7 -2.4,1.2 -0.7,0.4 -1.5,0.7 -2.1,1.1 -1.3,0.5 -2,1 -2,1 z" id="path2233" style="fill:#ffffff"></path>
    </g>
    <g id="g2235" style="display:inline">
      <path d="m 169.6,251.6 c 0,0 -0.6,0.4 -1.5,0.8 -0.5,0.2 -1,0.6 -1.5,0.8 -0.2,0.1 -0.5,0.4 -0.8,0.5 -0.2,0.2 -0.6,0.4 -0.9,0.6 -0.5,0.4 -1.1,0.7 -1.6,1.2 -0.5,0.5 -1,0.7 -1.3,1.1 -0.7,0.7 -1.2,1.2 -1.2,1.2 0,0 0.4,-0.6 1,-1.5 0.1,-0.2 0.4,-0.4 0.6,-0.6 0.2,-0.2 0.4,-0.5 0.6,-0.6 0.5,-0.5 1,-0.9 1.6,-1.3 0.2,-0.2 0.6,-0.4 0.9,-0.6 0.2,-0.1 0.6,-0.4 0.8,-0.5 0.6,-0.2 1.1,-0.6 1.6,-0.7 1,-0.3 1.7,-0.4 1.7,-0.4 z" id="path2237" style="fill:#ffffff"></path>
    </g>
    <g id="g2239" style="display:inline">
      <path d="m 165.6,251.1 c 0,0 -0.2,0.2 -0.7,0.6 -0.2,0.2 -0.5,0.4 -0.7,0.6 -0.2,0.2 -0.5,0.5 -0.7,0.8 l -0.4,0.4 c -0.1,0.1 -0.2,0.2 -0.4,0.4 -0.2,0.2 -0.4,0.5 -0.6,0.7 -0.4,0.5 -0.6,0.7 -0.6,0.7 0,0 0.2,-0.4 0.5,-0.9 0.1,-0.2 0.4,-0.5 0.5,-0.8 0.1,-0.1 0.2,-0.2 0.4,-0.4 l 0.4,-0.4 c 0.2,-0.2 0.5,-0.5 0.7,-0.7 0.2,-0.2 0.5,-0.5 0.7,-0.6 0.7,-0.2 0.9,-0.4 0.9,-0.4 z" id="path2241" style="fill:#ffffff"></path>
    </g>
    <g id="g2243" style="display:inline">
      <path d="m 160.7,271.3 c 0,0 0.1,0.5 0.2,1.2 0.1,0.7 0.5,1.8 0.9,3 0.2,0.6 0.4,1.3 0.7,2.1 0.2,0.7 0.6,1.5 0.8,2.2 0.4,0.7 0.6,1.6 1.1,2.3 0.4,0.7 0.7,1.6 1.2,2.3 0.5,0.7 0.8,1.6 1.3,2.2 0.2,0.4 0.5,0.7 0.7,1.1 0.2,0.4 0.5,0.6 0.7,1 0.2,0.4 0.5,0.6 0.7,1 0.2,0.2 0.5,0.6 0.7,0.9 0.5,0.6 1,1.1 1.5,1.6 0.5,0.5 1,0.8 1.3,1.2 0.3,0.4 0.7,0.6 1.1,0.9 0.6,0.5 1,0.7 1,0.7 0,0 -0.4,-0.2 -1,-0.7 -0.4,-0.2 -0.7,-0.5 -1.1,-0.7 -0.4,-0.4 -0.8,-0.7 -1.3,-1.2 -0.5,-0.4 -1,-1 -1.6,-1.5 -0.2,-0.2 -0.5,-0.6 -0.9,-0.9 -0.2,-0.4 -0.5,-0.6 -0.7,-1 -0.2,-0.4 -0.5,-0.6 -0.8,-1 -0.2,-0.4 -0.5,-0.7 -0.7,-1.1 -0.5,-0.7 -1,-1.5 -1.5,-2.2 -0.5,-0.7 -0.9,-1.6 -1.2,-2.3 -0.4,-0.7 -0.7,-1.6 -1,-2.3 -0.6,-1.6 -1.1,-3 -1.5,-4.2 -0.4,-1.3 -0.5,-2.3 -0.6,-3.2 0.1,-0.9 0,-1.4 0,-1.4 z" id="path2245" style="fill:#ffffff"></path>
    </g>
    <g id="g2247" style="display:inline">
      <path d="m 169,293.4 c 0,0 -0.2,-0.2 -0.7,-0.6 -0.5,-0.4 -1.1,-1 -1.7,-1.7 -0.7,-0.7 -1.5,-1.6 -2.2,-2.7 -0.7,-1 -1.5,-2.2 -1.9,-3.4 -0.4,-0.6 -0.5,-1.2 -0.9,-1.8 -0.2,-0.6 -0.5,-1.2 -0.6,-1.8 -0.2,-0.6 -0.4,-1.2 -0.5,-1.7 -0.1,-0.6 -0.2,-1.1 -0.2,-1.6 -0.1,-0.5 -0.1,-1 -0.1,-1.3 0,-0.3 0,-0.7 0,-1.1 0,-0.6 0,-0.9 0,-0.9 0,0 0,0.4 0.1,0.9 0,0.2 0.1,0.6 0.1,1 0,0.4 0.1,0.9 0.2,1.3 0.1,0.5 0.2,1 0.4,1.6 0.1,0.5 0.2,1.1 0.5,1.7 0.2,0.6 0.4,1.2 0.6,1.8 0.2,0.6 0.5,1.2 0.8,1.8 0.6,1.2 1.2,2.3 1.9,3.4 0.7,1 1.3,1.9 1.9,2.7 1.2,1.5 2.3,2.4 2.3,2.4 z" id="path2249" style="fill:#ffffff"></path>
    </g>
    <g id="g2251" style="display:inline">
      <path d="m 221.5,267.8 c 0,0 -1.7,1.2 -4,3.2 -1.2,1 -2.4,2.2 -3.9,3.4 -0.7,0.6 -1.5,1.3 -2.1,2.1 -0.7,0.7 -1.5,1.5 -2.1,2.2 -1.3,1.5 -2.8,2.9 -3.9,4.5 -0.6,0.7 -1.2,1.5 -1.7,2.2 -0.5,0.7 -1,1.3 -1.5,1.9 -0.4,0.6 -0.8,1.2 -1.1,1.7 -0.4,0.5 -0.6,1 -0.8,1.3 -0.5,0.7 -0.7,1.2 -0.7,1.2 0,0 0.2,-0.5 0.6,-1.2 0.2,-0.4 0.5,-0.9 0.7,-1.5 0.4,-0.5 0.6,-1.1 1.1,-1.8 0.4,-0.7 0.9,-1.3 1.3,-2.1 0.5,-0.7 1,-1.5 1.6,-2.2 1.2,-1.6 2.6,-3 3.9,-4.6 0.7,-0.7 1.5,-1.5 2.2,-2.2 0.7,-0.7 1.5,-1.3 2.2,-1.9 1.5,-1.2 2.8,-2.4 4,-3.3 2.4,-1.8 4.2,-2.9 4.2,-2.9 z" id="path2253" style="fill:#ffffff"></path>
    </g>
    <g id="g2255" style="display:inline">
      <path d="m 219.2,262.7 c 0,0 -0.2,0 -0.6,-0.1 -0.4,-0.1 -1,-0.2 -1.7,-0.4 -0.7,-0.1 -1.6,-0.2 -2.4,-0.5 -0.5,0 -1,-0.1 -1.3,-0.2 -0.5,-0.1 -1,-0.1 -1.5,-0.1 -1,-0.1 -1.9,-0.2 -2.8,-0.1 -0.5,0 -0.8,0 -1.3,0 -0.4,0 -0.8,0 -1.2,0 -1.5,0.1 -2.4,0.1 -2.4,0.1 0,0 1,-0.2 2.4,-0.5 0.7,-0.1 1.6,-0.1 2.6,-0.2 0.5,0 1,-0.1 1.5,0 0.5,0 1,0.1 1.5,0.1 1,0 1.9,0.2 2.9,0.5 0.5,0.1 0.9,0.2 1.3,0.4 0.4,0.1 0.8,0.2 1.1,0.4 1,0.1 1.9,0.6 1.9,0.6 z" id="path2257" style="fill:#ffffff"></path>
    </g>
    <g id="g2259" style="display:inline">
      <path d="m 222.5,271.2 c 0,0 -0.1,1.8 -0.7,4.4 -0.4,1.3 -0.7,2.8 -1.3,4.4 -0.6,1.6 -1.2,3.3 -2.1,4.9 -0.5,0.7 -0.8,1.6 -1.3,2.3 -0.5,0.7 -1,1.5 -1.5,2.2 -0.5,0.7 -1,1.3 -1.5,1.9 -0.5,0.6 -1,1.1 -1.5,1.6 -0.5,0.5 -1,0.9 -1.3,1.2 -0.5,0.4 -0.9,0.6 -1.1,0.9 -0.6,0.5 -1,0.7 -1,0.7 0,0 0.4,-0.4 0.8,-0.9 0.2,-0.2 0.6,-0.6 1,-1 0.4,-0.4 0.7,-0.9 1.2,-1.3 0.5,-0.5 0.9,-1.1 1.3,-1.7 0.5,-0.6 1,-1.2 1.5,-1.9 0.5,-0.6 1,-1.3 1.3,-2.2 0.5,-0.7 0.8,-1.6 1.2,-2.3 0.8,-1.6 1.6,-3.2 2.2,-4.7 0.6,-1.6 1.1,-3 1.5,-4.2 1,-2.6 1.3,-4.3 1.3,-4.3 z" id="path2261" style="fill:#ffffff"></path>
    </g>
    <g id="g2263" style="display:inline">
      <path d="m 222.2,270.2 c 0,0 -0.2,0.4 -0.6,1.1 -0.4,0.7 -0.8,1.8 -1.6,3 -0.7,1.2 -1.5,2.7 -2.3,4.1 -0.8,1.6 -1.8,3.2 -2.8,4.7 -1,1.6 -1.9,3.2 -2.9,4.6 -1,1.5 -1.9,2.8 -2.8,3.9 -1.7,2.3 -2.8,3.8 -2.8,3.8 0,0 1,-1.6 2.6,-3.9 0.7,-1.2 1.7,-2.5 2.7,-4 0.8,-1.5 1.8,-3 2.8,-4.6 1,-1.6 1.9,-3.2 2.8,-4.6 0.8,-1.5 1.7,-2.9 2.4,-4.1 1.5,-2.3 2.5,-4 2.5,-4 z" id="path2265" style="fill:#ffffff"></path>
    </g>
    <g id="g2267" style="display:inline">
      <path d="m 221.4,270.2 c 0,0 -1.1,1.5 -2.9,3.8 -0.8,1.1 -1.8,2.4 -2.9,3.8 -1.1,1.3 -2.2,2.9 -3.3,4.4 -1.1,1.5 -2.2,3 -3.3,4.5 -0.5,0.7 -1,1.5 -1.5,2.1 -0.5,0.7 -0.8,1.3 -1.2,1.9 -0.4,0.6 -0.7,1.1 -1,1.6 -0.2,0.5 -0.6,1 -0.7,1.2 -0.4,0.7 -0.6,1.1 -0.6,1.1 0,0 0.2,-0.4 0.6,-1.1 0.2,-0.4 0.4,-0.9 0.7,-1.3 0.2,-0.5 0.5,-1.1 1,-1.7 0.4,-0.6 0.7,-1.2 1.2,-1.9 0.5,-0.7 0.9,-1.5 1.3,-2.2 1,-1.5 2.1,-3 3.2,-4.5 2.3,-3 4.6,-6 6.4,-8.1 1.6,-2.1 3,-3.6 3,-3.6 z" id="path2269" style="fill:#ffffff"></path>
    </g>
    <g id="g2271" style="display:inline">
      <path d="m 201.3,294 c 0,0 0.8,-1.8 2.4,-4.5 0.4,-0.7 0.8,-1.3 1.3,-2.1 0.5,-0.8 1,-1.6 1.6,-2.3 0.6,-0.7 1.2,-1.6 1.7,-2.4 0.6,-0.9 1.2,-1.6 1.9,-2.4 0.6,-0.7 1.3,-1.6 1.9,-2.3 0.6,-0.7 1.3,-1.5 2.1,-2.2 0.7,-0.7 1.3,-1.3 1.9,-1.9 0.6,-0.6 1.2,-1.2 1.8,-1.7 2.3,-2.1 3.9,-3.4 3.9,-3.4 0,0 -1.5,1.5 -3.6,3.5 -0.6,0.5 -1.2,1.1 -1.7,1.7 -0.6,0.6 -1.2,1.3 -1.8,2.1 -0.6,0.7 -1.3,1.5 -1.9,2.2 -0.6,0.7 -1.3,1.6 -1.9,2.3 -0.6,0.7 -1.3,1.6 -1.9,2.4 -0.6,0.8 -1.2,1.6 -1.8,2.3 -0.6,0.7 -1.1,1.6 -1.6,2.3 -0.5,0.7 -1,1.3 -1.3,2.1 -0.9,1.3 -1.6,2.3 -1.9,3.2 -0.8,0.6 -1.1,1.1 -1.1,1.1 z" id="path2273" style="fill:#ffffff"></path>
    </g>
    <g id="g2275" style="display:inline">
      <path d="m 199.3,286.4 c 0,0 1,-1.6 2.8,-3.8 0.8,-1.1 1.9,-2.3 3.2,-3.6 1.2,-1.2 2.6,-2.6 3.9,-3.9 0.7,-0.6 1.5,-1.2 2.2,-1.8 0.7,-0.6 1.5,-1.1 2.2,-1.7 0.7,-0.5 1.5,-1 2.1,-1.5 0.7,-0.5 1.3,-0.9 1.9,-1.2 0.6,-0.4 1.2,-0.6 1.7,-1 0.5,-0.2 1,-0.5 1.3,-0.6 0.7,-0.4 1.2,-0.6 1.2,-0.6 0,0 -0.4,0.2 -1.1,0.6 -0.4,0.2 -0.7,0.5 -1.3,0.7 -0.5,0.4 -1,0.6 -1.6,1 -0.6,0.4 -1.2,0.8 -1.8,1.2 -0.6,0.5 -1.3,1 -2.1,1.5 -0.7,0.5 -1.5,1.1 -2.1,1.7 -0.7,0.6 -1.5,1.2 -2.1,1.8 -1.5,1.2 -2.8,2.5 -4,3.8 -0.6,0.6 -1.2,1.2 -1.7,1.8 -0.5,0.6 -1.1,1.1 -1.5,1.7 -2.1,2.3 -3.2,3.9 -3.2,3.9 z" id="path2277" style="fill:#ffffff"></path>
    </g>
    <g id="g2279" style="display:inline">
      <path d="m 200,281.1 c 0,0 0.2,-0.4 0.6,-1 0.4,-0.6 1,-1.5 1.8,-2.3 0.7,-1 1.8,-1.9 2.9,-3 0.6,-0.5 1.1,-1.1 1.7,-1.6 0.6,-0.5 1.2,-1.1 1.9,-1.6 0.6,-0.5 1.3,-1 2.1,-1.3 0.6,-0.5 1.3,-0.8 2.1,-1.2 0.6,-0.4 1.3,-0.7 1.9,-1 0.6,-0.4 1.2,-0.6 1.8,-0.7 0.6,-0.2 1.1,-0.4 1.6,-0.6 0.5,-0.1 0.8,-0.2 1.2,-0.4 0.7,-0.2 1.1,-0.4 1.1,-0.4 0,0 -0.4,0.1 -1.1,0.4 -0.4,0.1 -0.7,0.2 -1.2,0.5 -0.5,0.3 -1,0.4 -1.5,0.7 -0.6,0.2 -1.1,0.5 -1.8,0.9 -0.6,0.4 -1.2,0.6 -1.9,1.1 -0.6,0.4 -1.3,0.7 -1.9,1.2 -0.7,0.5 -1.3,0.9 -1.9,1.3 -0.6,0.4 -1.3,1 -1.9,1.5 -0.6,0.5 -1.2,1.1 -1.8,1.6 -0.5,0.5 -1.1,1 -1.6,1.5 -0.5,0.5 -1,1 -1.3,1.5 -1.8,1.6 -2.8,2.9 -2.8,2.9 z" id="path2281" style="fill:#ffffff"></path>
    </g>
    <g id="g2283" style="display:inline">
      <path d="m 199.4,277.4 c 0,0 0.2,-0.4 0.6,-0.8 0.5,-0.5 1.1,-1.3 1.9,-2.1 0.9,-0.8 1.8,-1.7 3,-2.7 0.6,-0.5 1.2,-1 1.8,-1.3 0.6,-0.5 1.3,-0.9 1.9,-1.2 0.7,-0.4 1.3,-0.7 2.1,-1.1 0.7,-0.4 1.3,-0.6 2.1,-1 0.7,-0.4 1.3,-0.5 1.9,-0.7 0.6,-0.2 1.2,-0.4 1.8,-0.5 0.6,-0.1 1.1,-0.2 1.6,-0.4 0.5,0 0.9,-0.1 1.2,-0.1 0.7,-0.1 1.1,-0.1 1.1,-0.1 0,0 -0.4,0.1 -1.1,0.2 -0.4,0.1 -0.7,0.1 -1.2,0.2 -0.5,0.1 -1,0.2 -1.6,0.5 -0.6,0.1 -1.2,0.4 -1.8,0.6 -0.6,0.2 -1.3,0.5 -1.9,0.7 -0.6,0.2 -1.3,0.6 -2.1,1 -0.7,0.4 -1.3,0.7 -2.1,1.1 -0.7,0.4 -1.3,0.9 -1.9,1.2 -0.6,0.3 -1.2,0.8 -1.8,1.3 -0.6,0.5 -1.1,0.8 -1.7,1.3 -0.5,0.5 -1,0.8 -1.5,1.2 -1.3,1.5 -2.3,2.7 -2.3,2.7 z" id="path2285" style="fill:#ffffff"></path>
    </g>
    <g id="g2287" style="display:inline">
      <path d="m 199,272.9 c 0,0 1.1,-1 2.9,-2.3 0.9,-0.6 1.9,-1.3 3.2,-1.9 1.2,-0.6 2.6,-1.3 3.9,-1.8 1.3,-0.5 2.8,-1 4.1,-1.3 0.6,-0.1 1.3,-0.4 1.9,-0.4 0.6,-0.1 1.2,-0.2 1.8,-0.2 0.6,0 1.1,-0.1 1.5,-0.1 0.5,0 0.9,0 1.2,0 0.6,0 1,0 1,0 0,0 -0.4,0 -1,0 -0.4,0 -0.7,0 -1.1,0 -0.5,0 -1,0.1 -1.5,0.2 -0.5,0 -1.1,0.1 -1.7,0.2 -0.6,0.1 -1.2,0.2 -1.9,0.5 -1.3,0.4 -2.7,0.9 -4,1.3 -1.3,0.4 -2.7,1.1 -3.9,1.8 -1.2,0.6 -2.3,1.2 -3.3,1.8 -2,1.3 -3.1,2.2 -3.1,2.2 z" id="path2289" style="fill:#ffffff"></path>
    </g>
    <g id="g2291" style="display:inline">
      <path d="m 200,268.6 c 0,0 0.2,-0.2 0.7,-0.5 0.5,-0.4 1.2,-0.7 1.9,-1.1 0.5,-0.2 0.8,-0.4 1.5,-0.6 0.5,-0.2 1,-0.5 1.6,-0.6 0.6,-0.1 1.2,-0.4 1.7,-0.6 0.6,-0.2 1.2,-0.2 1.8,-0.5 0.6,-0.1 1.2,-0.2 1.8,-0.4 0.6,-0.2 1.2,-0.1 1.8,-0.2 0.6,0 1.2,-0.1 1.7,-0.1 0.5,-0.1 1.1,0 1.6,0 1.9,0 3.2,0.1 3.2,0.1 0,0 -1.2,0.1 -3.2,0.1 -0.5,0 -1,0 -1.5,0.1 -0.5,0.1 -1.1,0.1 -1.7,0.2 -0.6,0.1 -1.2,0.1 -1.8,0.2 -0.6,0.1 -1.2,0.2 -1.8,0.4 -0.6,0.1 -1.2,0.2 -1.8,0.4 -0.6,0.1 -1.2,0.4 -1.7,0.5 -0.6,0.1 -1.1,0.4 -1.6,0.5 -0.5,0.2 -1,0.4 -1.5,0.5 -0.8,0.4 -1.6,0.7 -2.1,1 -0.4,0.4 -0.6,0.6 -0.6,0.6 z" id="path2293" style="fill:#ffffff"></path>
    </g>
    <g id="g2295" style="display:inline">
      <path d="m 202.8,264.4 c 0,0 1,-0.4 2.4,-0.7 0.7,-0.2 1.6,-0.4 2.6,-0.5 1,-0.1 1.9,-0.2 2.9,-0.4 0.5,0 1,0 1.5,0 0.5,0 1,0 1.5,0 1,0.1 1.8,0.1 2.6,0.2 1.5,0.2 2.4,0.5 2.4,0.5 0,0 -1,-0.1 -2.6,-0.2 -0.7,-0.1 -1.6,0 -2.6,-0.1 -0.5,0 -1,0 -1.5,0 -0.5,0 -1,0 -1.5,0.1 -1,0 -1.9,0.2 -2.9,0.2 -1,0.1 -1.8,0.2 -2.6,0.4 -0.8,0.2 -1.3,0.2 -1.8,0.4 -0.2,-0.1 -0.4,0.1 -0.4,0.1 z" id="path2297" style="fill:#ffffff"></path>
    </g>
    <g id="g2299" style="display:inline">
      <path d="m 223.3,274.8 c 0,0 -0.1,1.5 -0.6,3.6 -0.2,1.1 -0.6,2.3 -1,3.6 -0.5,1.3 -1,2.7 -1.6,4 -0.4,0.6 -0.6,1.3 -1.1,1.9 -0.4,0.6 -0.7,1.2 -1.1,1.8 -0.4,0.6 -0.7,1.1 -1.2,1.6 -0.4,0.5 -0.7,1 -1.2,1.3 -0.4,0.4 -0.7,0.7 -1.1,1.1 -0.4,0.2 -0.6,0.5 -1,0.7 -0.5,0.4 -0.8,0.6 -0.8,0.6 0,0 0.2,-0.2 0.7,-0.7 0.2,-0.2 0.5,-0.5 0.8,-0.9 0.2,-0.4 0.6,-0.7 1,-1.1 0.4,-0.4 0.7,-0.8 1.1,-1.3 0.4,-0.5 0.7,-1.1 1.1,-1.6 0.4,-0.6 0.7,-1.2 1.1,-1.8 0.4,-0.6 0.6,-1.3 1,-1.9 0.6,-1.3 1.2,-2.7 1.7,-4 0.5,-1.3 0.9,-2.5 1.1,-3.6 0.9,-1.8 1.1,-3.3 1.1,-3.3 z" id="path2301" style="fill:#ffffff"></path>
    </g>
    <g id="g2303" style="display:inline">
      <path d="m 217.1,294 c 0,0 0.2,-0.2 0.5,-0.6 0.4,-0.4 0.7,-1 1.2,-1.6 0.2,-0.4 0.5,-0.7 0.7,-1.1 0.2,-0.4 0.5,-0.8 0.7,-1.3 0.2,-0.5 0.5,-1 0.7,-1.5 0.2,-0.5 0.5,-1 0.6,-1.6 0.2,-0.5 0.4,-1 0.6,-1.6 0.2,-0.5 0.2,-1.1 0.5,-1.6 0.1,-0.5 0.2,-1 0.4,-1.5 0.1,-0.5 0.1,-1 0.2,-1.3 0.2,-1.7 0.5,-2.8 0.5,-2.8 0,0 0,1.1 -0.2,2.8 0,0.4 0,0.9 -0.1,1.3 -0.1,0.4 -0.2,1 -0.4,1.5 -0.1,0.5 -0.2,1.1 -0.4,1.6 -0.2,0.5 -0.4,1.1 -0.6,1.6 -0.2,0.5 -0.4,1.1 -0.7,1.6 -0.2,0.5 -0.5,1 -0.7,1.5 -0.2,0.5 -0.6,0.9 -0.8,1.3 -0.2,0.4 -0.5,0.7 -0.9,1.1 -0.9,1.5 -1.8,2.2 -1.8,2.2 z" id="path2305" style="fill:#ffffff"></path>
    </g>
    <g id="g2307" style="display:inline">
      <path d="m 159.6,281.7 c 0,0 0.2,0.7 0.6,1.8 0.1,0.6 0.4,1.2 0.6,1.8 0.2,0.7 0.5,1.3 0.8,2.1 0.1,0.4 0.4,0.7 0.5,1 0.1,0.4 0.2,0.7 0.5,1 0.4,0.6 0.7,1.2 1,1.7 0.7,0.8 1.2,1.5 1.2,1.5 0,0 -0.6,-0.5 -1.3,-1.3 -0.2,-0.2 -0.4,-0.5 -0.5,-0.7 -0.2,-0.2 -0.4,-0.6 -0.6,-0.8 -0.2,-0.4 -0.4,-0.6 -0.5,-1 -0.1,-0.4 -0.4,-0.7 -0.5,-1.1 -0.2,-0.7 -0.6,-1.5 -0.7,-2.2 -0.2,-0.7 -0.4,-1.3 -0.5,-1.9 -0.5,-1.1 -0.6,-1.9 -0.6,-1.9 z" id="path2309" style="fill:#ffffff"></path>
    </g>
    <g id="g2311" style="display:inline">
      <path d="m 218.3,261.3 c 0,0 -0.2,-0.1 -0.5,-0.2 -0.4,-0.1 -0.8,-0.4 -1.5,-0.6 -0.6,-0.2 -1.3,-0.5 -2.1,-0.6 -0.4,-0.1 -0.7,-0.2 -1.2,-0.2 -0.4,-0.1 -0.8,-0.1 -1.2,-0.2 -0.4,-0.1 -0.9,-0.1 -1.2,-0.2 -0.4,0 -0.8,0 -1.2,-0.1 -0.4,0 -0.7,-0.1 -1.1,-0.1 -0.4,0 -0.7,0 -1,0 -1.2,0 -2.1,0 -2.1,0 0,0 0.9,-0.1 2.1,-0.2 0.4,0 0.6,-0.1 1,-0.1 0.4,0 0.7,0 1.1,0 0.4,0 0.8,0 1.2,0 0.4,0.1 0.9,0.1 1.2,0.2 0.3,0.1 0.8,0.1 1.2,0.2 0.4,0.1 0.8,0.2 1.2,0.4 0.4,0.1 0.7,0.2 1.1,0.4 0.4,0.1 0.6,0.2 1,0.4 0.6,0.2 1.1,0.5 1.3,0.7 0.5,0.1 0.7,0.2 0.7,0.2 z" id="path2313" style="fill:#ffffff"></path>
    </g>
    <g id="g2315" style="display:inline">
      <path d="m 205,255.5 c 0,0 0.8,0 2.2,0 0.6,0.1 1.5,0.1 2.2,0.4 0.9,0.1 1.7,0.4 2.4,0.6 0.4,0.1 0.9,0.2 1.2,0.5 0.4,0.1 0.8,0.4 1.2,0.5 0.4,0.1 0.7,0.4 1.1,0.6 0.4,0.2 0.6,0.4 0.8,0.6 0.5,0.4 1,0.7 1.2,1 0.2,0.3 0.5,0.4 0.5,0.4 0,0 -0.1,-0.1 -0.5,-0.4 -0.2,-0.2 -0.7,-0.5 -1.3,-0.9 -0.2,-0.2 -0.6,-0.4 -0.8,-0.5 -0.4,-0.1 -0.7,-0.4 -1.1,-0.5 -0.4,-0.1 -0.7,-0.4 -1.1,-0.5 -0.4,-0.1 -0.9,-0.2 -1.2,-0.4 -0.8,-0.2 -1.7,-0.5 -2.4,-0.7 -0.7,-0.1 -1.6,-0.4 -2.2,-0.5 -1.4,-0.1 -2.2,-0.2 -2.2,-0.2 z" id="path2317" style="fill:#ffffff"></path>
    </g>
    <g id="g2319" style="display:inline">
      <path d="m 210.9,254.4 c 0,0 0.5,0.1 1.2,0.4 0.4,0.1 0.8,0.2 1.2,0.5 0.5,0.2 0.8,0.5 1.3,0.7 0.2,0.1 0.4,0.4 0.6,0.5 0.2,0.1 0.4,0.2 0.6,0.5 0.1,0.1 0.4,0.4 0.5,0.5 0.1,0.1 0.4,0.4 0.5,0.5 0.5,0.7 0.7,1.1 0.7,1.1 0,0 -0.4,-0.4 -0.9,-1 -0.2,-0.2 -0.6,-0.5 -1,-0.9 -0.1,-0.1 -0.4,-0.2 -0.6,-0.5 -0.2,-0.1 -0.4,-0.2 -0.6,-0.5 -0.5,-0.2 -0.8,-0.6 -1.3,-0.7 -0.4,-0.2 -0.8,-0.5 -1.1,-0.6 -0.6,-0.2 -1.1,-0.5 -1.1,-0.5 z" id="path2321" style="fill:#ffffff"></path>
    </g>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="shoulders"class="workout-part" onclick="navigateToWorkout('shoulders')">
    <linearGradient x1="96.174103" y1="677.77332" x2="143.8374" y2="677.77332" id="SVGID_25_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop2325" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop2327" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 167.4,226.5 c -1,-2.6 -0.2,-11.5 -2.2,-10.7 -1.9,1 -12.5,7.8 -16,9.5 -2.8,1.3 -5.2,4 -6.8,5.2 -3.2,1 -6.2,1.9 -8.4,2.6 -5.6,1.5 -10.3,5.2 -9,5.7 -4.6,4 -7.5,10.1 -8.3,15.7 -1.1,9.5 2.7,12.4 7.5,19.1 4.7,6.7 5,13.1 5,13.1 0,0 5.1,-6.1 9.7,-7.8 4.6,-1.7 12.3,-5 16,-19.1 2.2,-8.1 -1,-15.8 -6,-20.5 8.3,0.7 16.3,-1.8 19.2,-1.8 1.5,0 2.8,0.1 3.9,0.2 1.3,0.2 2.4,0.4 2.4,0.4 0.5,-4.2 -5.9,-9.1 -7,-11.6 z" id="path2329" style="fill:url(#SVGID_25_);display:inline"></path>
    <g id="g2331" style="display:inline">
      <path d="m 154.2,228.8 c 0,0 0.7,-0.1 1.8,-0.1 0.5,0 1.2,0 1.8,0.1 0.7,0.1 1.3,0.2 2.1,0.5 0.7,0.2 1.3,0.6 1.9,0.8 0.2,0.1 0.6,0.4 0.9,0.6 0.2,0.2 0.5,0.4 0.7,0.6 0.4,0.4 0.7,0.7 0.8,1 0.2,0.2 0.2,0.4 0.2,0.4 0,0 -0.1,-0.1 -0.4,-0.4 -0.2,-0.2 -0.6,-0.5 -1,-0.8 -0.4,-0.4 -1,-0.6 -1.6,-1 -0.6,-0.4 -1.2,-0.6 -1.9,-0.8 -0.6,-0.2 -1.3,-0.4 -1.9,-0.6 -0.6,-0.1 -1.2,-0.2 -1.8,-0.2 -0.9,-0.1 -1.6,-0.1 -1.6,-0.1 z" id="path2333" style="fill:#ffffff"></path>
    </g>
    <g id="g2335" style="display:inline">
      <path d="m 159.7,228.2 c 0,0 0.7,0 1.7,0.2 0.5,0.1 1.1,0.2 1.7,0.5 0.6,0.2 1.2,0.6 1.7,1 0.2,0.1 0.5,0.4 0.9,0.6 0.2,0.2 0.5,0.5 0.7,0.6 0.2,0.2 0.4,0.5 0.6,0.7 0.2,0.2 0.4,0.5 0.5,0.6 0.2,0.4 0.5,0.8 0.6,1.1 0.1,0.2 0.2,0.4 0.2,0.4 0,0 -0.1,-0.1 -0.2,-0.4 -0.1,-0.3 -0.4,-0.6 -0.7,-1 -0.1,-0.2 -0.4,-0.4 -0.5,-0.6 -0.2,-0.2 -0.4,-0.4 -0.6,-0.6 -0.2,-0.2 -0.5,-0.5 -0.7,-0.6 -0.2,-0.2 -0.5,-0.4 -0.8,-0.6 -0.5,-0.4 -1.1,-0.7 -1.7,-1 -0.6,-0.3 -1.1,-0.5 -1.6,-0.6 -1.2,-0.2 -1.8,-0.3 -1.8,-0.3 z" id="path2337" style="fill:#ffffff"></path>
    </g>
    <g id="g2339" style="display:inline">
      <path d="m 163.7,228.3 c 0,0 0.6,0.1 1.5,0.5 0.5,0.1 0.9,0.4 1.5,0.6 0.5,0.4 1,0.6 1.5,1 0.5,0.4 1,0.7 1.3,1.2 0.4,0.5 0.7,0.8 1,1.2 0.5,0.8 0.7,1.3 0.7,1.3 0,0 -0.4,-0.5 -1,-1.2 -0.2,-0.4 -0.7,-0.7 -1.1,-1.1 -0.4,-0.5 -0.9,-0.7 -1.3,-1.1 -0.4,-0.4 -1,-0.7 -1.5,-1 -0.5,-0.2 -1,-0.6 -1.3,-0.7 -0.4,-0.2 -0.7,-0.4 -1,-0.5 -0.2,-0.1 -0.3,-0.2 -0.3,-0.2 z" id="path2341" style="fill:#ffffff"></path>
    </g>
    <path d="m 165,227.2 c 0,0 -0.2,-0.4 -0.5,-1.1 -0.1,-0.4 -0.2,-0.7 -0.4,-1.2 -0.1,-0.5 -0.1,-1 -0.2,-1.5 0,-0.5 -0.1,-1 0,-1.5 0,-0.5 0,-0.8 0.1,-1.2 0.1,-0.7 0.4,-1.2 0.4,-1.2 0,0 0,0.5 -0.1,1.2 0,0.4 0,0.7 0,1.2 0,0.5 0,1 0.1,1.3 0,0.5 0.1,1 0.1,1.3 0.1,0.5 0.1,0.9 0.2,1.2 0.2,1 0.3,1.5 0.3,1.5 z" id="path2343" style="fill:#ffffff;display:inline"></path>
    <path d="m 162.7,220.5 c 0,0 0,0.1 -0.1,0.2 0,0.2 -0.1,0.5 -0.1,0.7 -0.1,0.4 -0.1,0.7 -0.1,1.1 0,0.4 -0.1,0.8 0,1.2 0,0.4 0,0.9 0.1,1.2 0,0.2 0.1,0.4 0.1,0.6 0,0.2 0,0.4 0.1,0.5 0.2,0.6 0.4,1.1 0.4,1.1 0,0 -0.2,-0.4 -0.6,-1 -0.2,-0.2 -0.2,-0.7 -0.4,-1.1 -0.1,-0.4 -0.1,-0.9 -0.1,-1.3 0,-0.5 0.1,-0.8 0.1,-1.3 0.1,-0.4 0.2,-0.8 0.4,-1.1 -0.1,-0.4 0.2,-0.8 0.2,-0.8 z" id="path2345" style="fill:#ffffff;display:inline"></path>
    <path d="m 160.4,221.6 c 0,0 -0.1,0.4 -0.2,0.8 -0.1,0.2 -0.1,0.6 -0.1,0.9 0,0.4 -0.1,0.6 -0.1,1 0,0.4 -0.1,0.7 0,1 0,0.4 0,0.6 0,0.8 0.1,0.5 0.1,0.9 0.1,0.9 0,0 -0.1,-0.4 -0.4,-0.9 -0.1,-0.2 -0.1,-0.6 -0.2,-1 -0.1,-0.4 0,-0.7 0,-1.1 0,-0.4 0.1,-0.7 0.1,-1.1 0.1,-0.4 0.2,-0.6 0.4,-0.8 0.2,-0.1 0.4,-0.5 0.4,-0.5 z" id="path2347" style="fill:#ffffff;display:inline"></path>
    <path d="m 158.1,223.1 c 0,0 -0.1,0.4 -0.2,0.7 -0.1,0.2 -0.1,0.5 -0.1,0.7 0,0.2 -0.1,0.6 -0.1,0.8 0,0.2 0,0.6 0,0.9 0,0.2 0,0.6 0.1,0.7 0.1,0.5 0.1,0.7 0.1,0.7 0,0 -0.1,-0.2 -0.4,-0.7 -0.1,-0.2 -0.1,-0.5 -0.2,-0.8 -0.1,-0.2 -0.1,-0.6 -0.1,-1 0,-0.4 0.1,-0.6 0.1,-1 0.1,-0.2 0.2,-0.6 0.4,-0.7 0.2,-0.1 0.4,-0.3 0.4,-0.3 z" id="path2349" style="fill:#ffffff;display:inline"></path>
    <path d="m 155.7,224.4 c 0,0 -0.1,0.2 -0.1,0.5 0,0.1 -0.1,0.4 -0.1,0.5 0,0.2 -0.1,0.4 -0.1,0.6 0,0.2 -0.1,0.4 -0.1,0.6 0,0.2 0,0.4 0,0.5 0,0.4 0,0.6 0,0.6 0,0 -0.1,-0.1 -0.2,-0.5 -0.1,-0.1 -0.1,-0.4 -0.1,-0.6 0,-0.2 0,-0.5 0,-0.7 0.1,-0.5 0.2,-0.9 0.5,-1.2 0.1,0 0.2,-0.3 0.2,-0.3 z" id="path2351" style="fill:#ffffff;display:inline"></path>
    <path d="m 153.5,226 c 0,0 0,0.1 0,0.4 0,0.1 0,0.2 0,0.4 0,0.1 0,0.2 0,0.4 0,0.1 0,0.2 0,0.4 0,0.2 0,0.2 0,0.4 0,0.2 0,0.4 0,0.4 0,0 -0.1,-0.1 -0.2,-0.4 -0.1,-0.2 -0.1,-0.6 -0.1,-0.8 0,-0.4 0.1,-0.6 0.2,-0.9 0,-0.2 0.1,-0.3 0.1,-0.3 z" id="path2353" style="fill:#ffffff;display:inline"></path>
    <path d="m 151.3,227.6 c 0,0 0,0.1 0,0.2 0,0.1 0,0.2 0,0.4 0,0.1 0,0.1 0,0.2 0,0.1 0,0.1 0,0.2 0,0.1 -0.1,0.2 -0.1,0.2 0,0 -0.4,-0.2 -0.4,-0.6 0,-0.1 0,-0.2 0.1,-0.2 0,-0.1 0.1,-0.1 0.1,-0.2 0.2,-0.2 0.3,-0.2 0.3,-0.2 z" id="path2355" style="fill:#ffffff;display:inline"></path>
    <path d="m 149.6,228.7 c 0,0 0,0.1 0.1,0.1 0,0.1 0,0.1 0,0.2 0,0 -0.1,0.1 -0.2,0.1 -0.1,0 -0.1,0 -0.1,0 0,0 0,-0.1 -0.1,-0.1 0,-0.1 0,-0.1 0,-0.2 0,0 0.1,-0.1 0.2,-0.1 0.1,0 0.1,0 0.1,0 z" id="path2357" style="fill:#ffffff;display:inline"></path>
    <g id="g2359" style="display:inline">
      <path d="m 162.4,237.1 c 0,0 -0.9,-0.7 -2.2,-1.6 -0.6,-0.5 -1.5,-1 -2.3,-1.5 -0.8,-0.5 -1.8,-1 -2.8,-1.3 -0.5,-0.2 -1,-0.4 -1.5,-0.6 -0.5,-0.1 -1,-0.4 -1.5,-0.5 -0.5,-0.1 -1,-0.2 -1.3,-0.4 -0.5,-0.1 -0.9,-0.1 -1.2,-0.1 -0.3,0 -0.7,-0.1 -1.1,-0.1 -0.4,0 -0.6,0 -0.8,0 -0.5,0 -0.7,0 -0.7,0 0,0 0.2,0 0.7,-0.1 0.2,0 0.5,0 0.8,-0.1 0.4,0 0.7,0 1.1,0 0.4,0 0.8,0.1 1.3,0.1 0.5,0 1,0.1 1.5,0.2 0.5,0.1 1,0.2 1.5,0.4 0.5,0.1 1,0.4 1.5,0.5 1,0.5 1.9,1 2.8,1.5 0.8,0.5 1.6,1.1 2.3,1.6 1.1,1.1 1.9,2 1.9,2 z" id="path2361" style="fill:#ffffff"></path>
    </g>
    <g id="g2363" style="display:inline">
      <path d="m 159.6,237.7 c 0,0 -0.2,-0.1 -0.6,-0.4 -0.2,-0.1 -0.4,-0.2 -0.7,-0.5 -0.2,-0.1 -0.6,-0.4 -0.9,-0.5 -0.4,-0.2 -0.7,-0.4 -1.1,-0.6 -0.4,-0.2 -0.8,-0.4 -1.2,-0.6 -0.5,-0.2 -0.8,-0.4 -1.3,-0.6 -0.5,-0.2 -1,-0.4 -1.5,-0.5 -0.5,-0.1 -1,-0.4 -1.5,-0.5 -0.5,-0.1 -1,-0.2 -1.5,-0.2 -0.5,-0.1 -1,-0.2 -1.3,-0.2 -0.4,-0.1 -0.8,-0.1 -1.2,-0.1 -1.6,-0.1 -2.6,-0.2 -2.6,-0.2 0,0 1,0 2.6,0 0.4,0 0.8,0 1.2,0.1 0.5,0.1 0.9,0.1 1.3,0.2 0.5,0.1 1,0.1 1.5,0.2 0.5,0.1 1,0.2 1.5,0.5 0.5,0.1 1,0.2 1.5,0.5 0.5,0.3 1,0.4 1.3,0.6 0.5,0.1 0.8,0.5 1.2,0.6 0.4,0.2 0.7,0.5 1.1,0.6 1.5,0.7 2.2,1.6 2.2,1.6 z" id="path2365" style="fill:#ffffff"></path>
    </g>
    <g id="g2367" style="display:inline">
      <path d="m 156.2,238 c 0,0 -0.2,-0.1 -0.6,-0.4 -0.4,-0.2 -1,-0.5 -1.6,-0.8 -0.7,-0.2 -1.5,-0.6 -2.3,-1 -0.5,-0.1 -0.8,-0.4 -1.3,-0.5 -0.5,-0.1 -1,-0.2 -1.5,-0.4 -0.5,-0.1 -1,-0.2 -1.5,-0.4 -0.5,-0.1 -1,-0.1 -1.5,-0.2 -0.5,-0.1 -0.8,-0.1 -1.3,-0.2 -0.4,-0.1 -0.8,-0.1 -1.2,-0.1 -1.5,-0.1 -2.4,-0.2 -2.4,-0.2 0,0 1,0 2.6,0 0.4,0 0.7,0 1.2,0 0.5,0 0.8,0.1 1.3,0.2 0.5,0.1 1,0.1 1.5,0.2 0.5,0.1 1,0.2 1.5,0.4 0.5,0.1 1,0.2 1.5,0.4 0.5,0.1 1,0.4 1.3,0.5 0.5,0.1 0.8,0.4 1.2,0.5 0.4,0.2 0.7,0.4 1.1,0.5 0.6,0.4 1.2,0.7 1.6,1 0.2,0.4 0.4,0.5 0.4,0.5 z" id="path2369" style="fill:#ffffff"></path>
    </g>
    <g id="g2371" style="display:inline">
      <path d="m 151.7,238.1 c 0,0 -0.2,-0.1 -0.6,-0.2 -0.4,-0.1 -1,-0.4 -1.6,-0.6 -0.4,-0.1 -0.7,-0.2 -1.1,-0.4 -0.4,-0.2 -0.7,-0.2 -1.2,-0.4 -0.9,-0.2 -1.7,-0.5 -2.7,-0.6 -0.5,-0.1 -1,-0.2 -1.3,-0.2 -0.5,-0.1 -0.8,-0.1 -1.3,-0.2 -0.5,-0.1 -0.9,-0.1 -1.2,-0.2 -0.3,-0.1 -0.7,-0.1 -1.1,-0.1 -1.5,-0.1 -2.3,-0.2 -2.3,-0.2 0,0 1,0 2.3,-0.1 0.7,0 1.6,0.1 2.4,0.1 0.5,0 0.9,0.1 1.3,0.1 0.5,0.1 1,0.1 1.3,0.2 1,0.1 1.8,0.5 2.7,0.7 0.5,0.1 0.9,0.2 1.2,0.5 0.4,0.1 0.7,0.2 1.1,0.4 1.2,0.8 2.1,1.2 2.1,1.2 z" id="path2373" style="fill:#ffffff"></path>
    </g>
    <g id="g2375" style="display:inline">
      <path d="m 146,237.7 c 0,0 -1.8,-0.1 -3.5,-0.5 -1.8,-0.2 -3.5,-0.7 -3.5,-0.7 0,0 1.8,0.1 3.5,0.5 1.6,0.2 3.5,0.7 3.5,0.7 z" id="path2377" style="fill:#ffffff"></path>
    </g>
    <g id="g2379" style="display:inline">
      <path d="m 130.4,283.2 c 0,0 0,-2.9 0.2,-7.3 0.1,-2.2 0.4,-4.7 0.6,-7.4 0.4,-2.7 0.7,-5.6 1.2,-8.5 0.6,-2.9 1.2,-5.7 1.9,-8.4 0.7,-2.7 1.7,-5 2.7,-7 0.5,-1 1,-1.8 1.5,-2.7 0.5,-0.7 0.9,-1.5 1.3,-1.9 0.4,-0.5 0.7,-0.8 1,-1.1 0.3,-0.3 0.4,-0.4 0.4,-0.4 0,0 -0.1,0.1 -0.4,0.4 -0.2,0.2 -0.5,0.6 -0.8,1.2 -0.4,0.5 -0.7,1.2 -1.2,1.9 -0.4,0.7 -0.8,1.7 -1.2,2.7 -0.8,1.9 -1.6,4.4 -2.3,7 -0.7,2.6 -1.3,5.5 -1.8,8.3 -0.6,2.8 -1,5.7 -1.3,8.4 -0.4,2.7 -0.7,5.2 -0.9,7.4 -0.6,4.5 -0.9,7.4 -0.9,7.4 z" id="path2381" style="fill:#ffffff"></path>
    </g>
    <g id="g2383" style="display:inline">
      <path d="m 129.2,278.9 c 0,0 -0.1,-0.6 -0.2,-1.8 -0.1,-1.2 -0.2,-2.8 -0.2,-4.9 0,-1 0,-2.1 0.1,-3.3 0,-1.2 0.1,-2.3 0.2,-3.6 0.1,-1.2 0.2,-2.5 0.5,-3.9 0.2,-1.3 0.5,-2.7 0.7,-3.9 l 0.5,-1.9 c 0.2,-0.6 0.4,-1.3 0.6,-1.9 0.2,-0.6 0.4,-1.2 0.6,-1.9 0.2,-0.6 0.5,-1.2 0.6,-1.8 0.2,-0.6 0.4,-1.2 0.6,-1.7 0.2,-0.6 0.5,-1.1 0.7,-1.6 0.2,-0.5 0.5,-1.1 0.7,-1.6 0.2,-0.5 0.5,-1 0.7,-1.3 0.5,-0.8 0.9,-1.7 1.3,-2.4 0.5,-0.7 0.8,-1.3 1.2,-1.8 0.6,-1 1,-1.6 1,-1.6 0,0 -0.4,0.6 -1,1.6 -0.2,0.5 -0.6,1.1 -1.1,1.8 -0.4,0.7 -0.7,1.6 -1.2,2.4 -0.2,0.5 -0.5,0.9 -0.7,1.5 -0.2,0.5 -0.4,1 -0.6,1.6 -0.5,1.1 -0.9,2.2 -1.3,3.4 -0.2,0.6 -0.4,1.2 -0.6,1.8 -0.2,0.6 -0.4,1.2 -0.5,1.8 -0.1,0.6 -0.4,1.2 -0.5,1.9 l -0.5,1.9 c -0.4,1.3 -0.5,2.7 -0.7,3.9 -0.2,1.3 -0.4,2.6 -0.5,3.8 -0.1,1.2 -0.2,2.4 -0.4,3.6 -0.1,1.1 -0.1,2.2 -0.1,3.3 -0.1,2.1 0,3.6 0,4.9 0.1,1.1 0.1,1.7 0.1,1.7 z" id="path2385" style="fill:#ffffff"></path>
    </g>
    <g id="g2387" style="display:inline">
      <path d="m 127.6,274.5 c 0,0 -0.1,-0.6 -0.2,-1.7 -0.1,-1.1 -0.2,-2.5 -0.2,-4.5 0,-1 0,-1.9 0,-2.9 0,-1.1 0.1,-2.2 0.2,-3.3 0.1,-1.1 0.2,-2.3 0.5,-3.5 0.3,-1.2 0.5,-2.4 0.7,-3.6 0.1,-0.6 0.2,-1.2 0.5,-1.8 0.2,-0.6 0.4,-1.2 0.6,-1.7 0.4,-1.2 0.9,-2.3 1.2,-3.3 0.4,-1.1 1,-2.1 1.5,-3 0.2,-0.5 0.5,-1 0.7,-1.3 0.2,-0.4 0.5,-0.9 0.7,-1.2 0.5,-0.7 1,-1.5 1.3,-2.1 0.5,-0.6 0.9,-1.1 1.2,-1.6 0.6,-0.8 1,-1.3 1,-1.3 0,0 -0.4,0.5 -1,1.3 -0.2,0.5 -0.7,1 -1.1,1.6 -0.4,0.6 -0.7,1.3 -1.2,2.2 -0.2,0.4 -0.5,0.8 -0.7,1.2 -0.2,0.5 -0.5,0.9 -0.6,1.3 -0.5,1 -1,1.9 -1.3,3 -0.3,1.1 -0.8,2.2 -1.2,3.3 -0.1,0.6 -0.4,1.1 -0.6,1.7 -0.1,0.6 -0.2,1.2 -0.5,1.8 -0.4,1.2 -0.6,2.4 -0.7,3.5 -0.2,1.2 -0.4,2.3 -0.5,3.5 -0.1,1.1 -0.2,2.2 -0.2,3.3 -0.1,1.1 -0.1,2.1 -0.1,2.9 0,1.8 0,3.4 0.1,4.4 -0.2,1.1 -0.1,1.8 -0.1,1.8 z" id="path2389" style="fill:#ffffff"></path>
    </g>
    <g id="g2391" style="display:inline">
      <path d="m 125.8,271.7 c 0,0 -0.1,-0.6 -0.2,-1.6 -0.1,-1 -0.4,-2.4 -0.4,-4.1 0,-0.9 0,-1.8 0,-2.8 0,-1 0.1,-2.1 0.1,-3 0.1,-1.1 0.2,-2.2 0.5,-3.3 0.2,-1.1 0.4,-2.2 0.7,-3.3 l 0.5,-1.7 c 0.2,-0.5 0.4,-1.1 0.6,-1.6 0.4,-1.1 0.8,-2.1 1.2,-3 0.4,-1 1,-1.9 1.5,-2.8 0.2,-0.5 0.5,-0.9 0.7,-1.2 0.2,-0.3 0.5,-0.7 0.7,-1.1 0.5,-0.7 1,-1.3 1.3,-1.9 0.5,-0.5 0.8,-1 1.2,-1.3 0.6,-0.7 1,-1.2 1,-1.2 0,0 -0.4,0.5 -1,1.2 -0.4,0.4 -0.7,0.8 -1.1,1.5 -0.4,0.6 -0.9,1.2 -1.2,1.9 -0.2,0.4 -0.5,0.7 -0.7,1.1 -0.2,0.4 -0.5,0.9 -0.6,1.2 -0.5,0.8 -1,1.7 -1.3,2.8 -0.4,1 -0.9,1.9 -1.2,3 -0.1,0.5 -0.4,1.1 -0.5,1.6 l -0.4,1.6 c -0.4,1.1 -0.5,2.2 -0.7,3.3 -0.2,1.1 -0.4,2.2 -0.5,3.3 0,1.1 -0.2,2.1 -0.2,3 0,1 -0.1,1.9 0,2.8 0,1.7 0.1,3.2 0.2,4.1 -0.3,1 -0.2,1.5 -0.2,1.5 z" id="path2393" style="fill:#ffffff"></path>
    </g>
    <g id="g2395" style="display:inline">
      <path d="m 123.9,269.2 c 0,0 -0.1,-0.5 -0.4,-1.5 -0.1,-0.9 -0.4,-2.2 -0.5,-3.8 -0.1,-0.9 -0.1,-1.7 -0.1,-2.6 0,-1 0,-1.8 0.1,-2.9 0.1,-1 0.2,-2.1 0.4,-3 0.2,-1 0.4,-2.1 0.6,-3.2 l 0.5,-1.6 c 0.1,-0.5 0.4,-1 0.6,-1.5 0.2,-0.5 0.4,-1 0.6,-1.5 0.2,-0.5 0.5,-1 0.7,-1.3 0.4,-1 1,-1.7 1.5,-2.5 0.2,-0.4 0.5,-0.7 0.7,-1.1 0.2,-0.4 0.5,-0.6 0.7,-1 0.5,-0.6 1,-1.2 1.5,-1.7 0.5,-0.5 0.8,-0.8 1.2,-1.2 0.7,-0.6 1.1,-1 1.1,-1 0,0 -0.4,0.4 -1,1.1 -0.4,0.4 -0.7,0.7 -1.1,1.2 -0.4,0.5 -0.8,1.1 -1.3,1.7 -0.2,0.4 -0.5,0.6 -0.7,1 -0.2,0.4 -0.5,0.7 -0.7,1.1 -0.5,0.7 -1,1.6 -1.3,2.5 -0.2,0.5 -0.5,0.9 -0.6,1.3 -0.2,0.5 -0.4,1 -0.5,1.5 -0.1,0.5 -0.4,1 -0.5,1.5 l -0.4,1.6 c -0.4,1 -0.5,2.1 -0.7,3 -0.1,1 -0.2,2.1 -0.4,3 0,1 -0.1,1.9 -0.1,2.8 0,0.8 0,1.8 0,2.5 0.1,1.6 0.2,2.9 0.4,3.8 -0.5,1.3 -0.3,1.8 -0.3,1.8 z" id="path2397" style="fill:#ffffff"></path>
    </g>
    <g id="g2399" style="display:inline">
      <path d="m 121.9,266 c 0,0 -0.1,-0.4 -0.4,-1.2 -0.2,-0.7 -0.5,-1.8 -0.6,-3.2 -0.1,-0.7 -0.1,-1.5 -0.1,-2.2 0,-0.7 0,-1.6 0,-2.4 0.1,-0.9 0.1,-1.7 0.2,-2.6 0.1,-0.5 0.1,-0.8 0.2,-1.3 0.1,-0.5 0.2,-0.8 0.4,-1.3 0.2,-0.8 0.5,-1.7 0.8,-2.6 0.2,-0.8 0.7,-1.6 1.1,-2.4 0.4,-0.7 0.8,-1.5 1.2,-2.1 0.4,-0.7 0.8,-1.2 1.3,-1.8 0.5,-0.5 0.7,-1.1 1.2,-1.5 0.4,-0.4 0.7,-0.7 1,-1 0.6,-0.6 0.9,-0.9 0.9,-0.9 0,0 -0.2,0.4 -0.9,1 -0.2,0.2 -0.6,0.6 -1,1.1 -0.4,0.4 -0.7,1 -1.1,1.5 -0.4,0.5 -0.8,1.1 -1.2,1.8 -0.4,0.7 -0.8,1.3 -1.2,2.1 -0.4,0.7 -0.7,1.5 -1,2.3 -0.2,0.8 -0.6,1.7 -0.8,2.5 -0.1,0.5 -0.2,0.9 -0.4,1.3 -0.1,0.5 -0.1,0.8 -0.2,1.3 -0.2,0.8 -0.2,1.7 -0.4,2.5 0,0.9 -0.1,1.6 -0.1,2.4 0,0.7 0,1.5 0.1,2.2 0.1,1.3 0.2,2.4 0.4,3.2 0.5,0.9 0.6,1.3 0.6,1.3 z" id="path2401" style="fill:#ffffff"></path>
    </g>
    <g id="g2403" style="display:inline">
      <path d="m 119.5,261.7 c 0,0 -0.2,-1 -0.4,-2.4 0,-0.4 0,-0.7 0,-1.2 0,-0.4 0,-0.9 0,-1.3 0,-0.4 0.1,-1 0.1,-1.3 0,-0.5 0.1,-1 0.2,-1.5 0.1,-0.5 0.2,-1 0.4,-1.5 0.1,-0.5 0.2,-0.8 0.5,-1.3 0.1,-0.4 0.2,-0.9 0.5,-1.2 0.1,-0.4 0.4,-0.7 0.5,-1.1 0.6,-1.3 1.1,-2.1 1.1,-2.1 0,0 -0.4,0.8 -0.8,2.2 -0.1,0.4 -0.4,0.7 -0.4,1.1 -0.1,0.4 -0.2,0.8 -0.4,1.2 -0.2,0.4 -0.2,0.9 -0.4,1.3 -0.1,0.5 -0.2,1 -0.2,1.3 -0.1,0.5 -0.2,1 -0.2,1.3 0,0.5 -0.1,1 -0.1,1.3 -0.1,0.5 -0.1,0.8 -0.1,1.2 0,0.4 -0.1,0.9 0,1.1 0,0.7 0,1.3 0,1.7 -0.3,1 -0.3,1.2 -0.3,1.2 z" id="path2405" style="fill:#ffffff"></path>
    </g>
    <g id="g2407" style="display:inline">
      <path d="m 142.8,239.1 c 0,0 -0.2,0.6 -0.7,1.7 -0.5,1.1 -1,2.8 -1.7,4.7 -0.4,1 -0.6,2.1 -1,3.2 -0.4,1.1 -0.6,2.3 -1,3.6 -0.1,0.6 -0.4,1.2 -0.5,1.9 -0.1,0.6 -0.2,1.3 -0.5,1.9 -0.2,1.3 -0.6,2.7 -0.9,4 -0.5,2.7 -1,5.5 -1.5,8 -0.2,1.3 -0.5,2.5 -0.6,3.6 -0.2,1.2 -0.5,2.3 -0.7,3.3 -0.2,1 -0.5,1.9 -0.6,2.8 -0.2,0.9 -0.5,1.5 -0.6,2.1 -0.2,0.6 -0.4,1.1 -0.5,1.3 -0.1,0.2 -0.2,0.5 -0.2,0.5 0,0 0,-0.1 0.1,-0.5 0.1,-0.2 0.2,-0.7 0.4,-1.3 0.1,-0.6 0.4,-1.3 0.5,-2.1 0.1,-0.8 0.4,-1.7 0.6,-2.8 0.2,-1 0.5,-2.1 0.6,-3.3 0.2,-1.2 0.4,-2.4 0.6,-3.6 0.4,-2.6 0.8,-5.2 1.3,-8 0.2,-1.3 0.6,-2.7 0.8,-4 0.1,-0.6 0.4,-1.3 0.5,-1.9 0.1,-0.6 0.4,-1.3 0.5,-1.9 0.4,-1.2 0.7,-2.4 1.1,-3.6 0.4,-1.1 0.7,-2.2 1.1,-3.2 0.7,-1.9 1.3,-3.5 1.8,-4.6 0.9,-1.2 1.1,-1.8 1.1,-1.8 z" id="path2409" style="fill:#ffffff"></path>
    </g>
    <g id="g2411" style="display:inline">
      <path d="m 134.3,279.8 c 0,0 0.6,-2.6 1.7,-6.2 0.5,-1.8 1.1,-4 1.7,-6.4 0.6,-2.3 1.3,-4.9 2.1,-7.3 0.6,-2.5 1.3,-5 1.9,-7.4 0.4,-1.2 0.5,-2.3 0.7,-3.4 0.2,-1.1 0.5,-2.1 0.6,-3 0.4,-1.9 0.6,-3.5 0.9,-4.6 0.2,-1.1 0.2,-1.7 0.2,-1.7 0,0 0,0.6 -0.2,1.8 -0.1,1.1 -0.4,2.7 -0.7,4.6 -0.1,1 -0.4,1.9 -0.6,3 -0.2,1.1 -0.4,2.3 -0.7,3.4 -0.6,2.3 -1.2,4.9 -1.8,7.4 -0.7,2.5 -1.5,5 -2.1,7.3 -0.7,2.3 -1.3,4.5 -1.9,6.3 -1.1,3.6 -1.8,6.2 -1.8,6.2 z" id="path2413" style="fill:#ffffff"></path>
    </g>
    <g id="g2415" style="display:inline">
      <path d="m 145.6,240.1 c 0,0 0,0.6 0,1.7 0,1.1 0,2.7 -0.1,4.5 0,1 -0.1,1.9 -0.1,3 0,1.1 -0.1,2.2 -0.2,3.3 -0.1,1.1 -0.2,2.3 -0.5,3.5 -0.1,0.6 -0.2,1.2 -0.2,1.8 l -0.4,1.8 c -0.2,1.2 -0.5,2.4 -1,3.5 -0.4,1.2 -0.7,2.3 -1.1,3.4 -0.4,1.1 -0.6,2.2 -1.1,3.2 -0.4,1 -0.7,1.9 -1.1,2.8 -0.1,0.5 -0.4,0.8 -0.5,1.2 -0.2,0.4 -0.4,0.7 -0.5,1.1 -0.4,0.7 -0.6,1.2 -0.8,1.7 -0.2,0.5 -0.5,0.9 -0.6,1.1 -0.1,0.2 -0.2,0.4 -0.2,0.4 0,0 0.1,-0.1 0.2,-0.4 0.1,-0.2 0.4,-0.6 0.5,-1.1 0.2,-0.5 0.5,-1.1 0.7,-1.8 0.4,-0.7 0.6,-1.5 1,-2.3 0.4,-0.9 0.7,-1.8 1.1,-2.8 0.4,-1 0.7,-2.1 1,-3.2 0.4,-1.1 0.7,-2.3 1,-3.4 0.4,-1.2 0.6,-2.3 0.8,-3.5 l 0.4,-1.8 c 0.1,-0.6 0.2,-1.2 0.2,-1.8 0.2,-1.2 0.4,-2.3 0.5,-3.5 0.1,-1.1 0.2,-2.2 0.4,-3.3 0.1,-1.1 0.2,-2.1 0.2,-2.9 0.4,-3.8 0.4,-6.2 0.4,-6.2 z" id="path2417" style="fill:#ffffff"></path>
    </g>
    <g id="g2419" style="display:inline">
      <path d="m 140.1,276.8 c 0,0 0.1,-0.1 0.2,-0.4 0.1,-0.2 0.5,-0.5 0.7,-1 0.2,-0.5 0.6,-1 1,-1.6 0.4,-0.6 0.7,-1.3 1.1,-2.2 0.4,-0.8 0.8,-1.7 1.1,-2.7 0.4,-1 0.7,-1.9 1.1,-3 0.4,-1.1 0.7,-2.2 1,-3.3 0.2,-1.1 0.5,-2.3 0.8,-3.5 0.2,-1.1 0.4,-2.3 0.6,-3.5 0.1,-0.6 0.2,-1.2 0.2,-1.7 0,-0.6 0.1,-1.1 0.1,-1.7 0.1,-1.1 0.2,-2.2 0.2,-3.2 0,-1 0,-1.9 -0.1,-2.9 -0.1,-0.8 -0.1,-1.7 -0.2,-2.4 -0.1,-0.4 -0.1,-0.7 -0.1,-1 -0.1,-0.2 -0.1,-0.6 -0.2,-0.9 -0.1,-0.5 -0.2,-0.8 -0.4,-1.1 -0.2,-0.3 -0.1,-0.4 -0.1,-0.4 0,0 0.1,0.1 0.2,0.4 0.1,0.3 0.2,0.6 0.5,1.1 0.1,0.2 0.1,0.5 0.2,0.9 0.1,0.4 0.1,0.6 0.2,1 0.2,0.7 0.2,1.6 0.4,2.4 0.1,0.9 0.1,1.8 0.1,2.9 0.1,1.1 0,2.1 -0.1,3.3 0,0.6 -0.1,1.1 -0.1,1.7 -0.1,0.6 -0.1,1.1 -0.2,1.7 -0.2,1.2 -0.4,2.3 -0.6,3.5 -0.2,1.2 -0.6,2.3 -0.8,3.5 -0.2,1.1 -0.7,2.2 -1,3.3 -0.2,1.1 -0.7,2.1 -1.1,3 -0.4,0.9 -0.8,1.8 -1.2,2.7 -0.4,0.9 -0.9,1.6 -1.2,2.2 -0.3,0.6 -0.7,1.1 -1.1,1.6 -0.2,0.5 -0.6,0.7 -0.7,1 -0.4,0.1 -0.5,0.3 -0.5,0.3 z" id="path2421" style="fill:#ffffff"></path>
    </g>
    <g id="g2423" style="display:inline">
      <path d="m 148.9,240.9 c 0,0 0.1,0.1 0.1,0.4 0.1,0.2 0.2,0.6 0.5,1.1 0.1,0.5 0.4,1.1 0.6,1.8 0.2,0.7 0.4,1.5 0.6,2.3 0.1,0.8 0.2,1.8 0.5,2.8 0.1,1 0.1,2.1 0.2,3.2 0,1.1 -0.1,2.3 -0.1,3.4 0,1.2 -0.4,2.3 -0.5,3.5 -0.1,0.6 -0.2,1.2 -0.4,1.7 -0.1,0.6 -0.4,1.1 -0.5,1.7 -0.4,1.1 -0.6,2.2 -1.1,3.3 -0.5,1 -0.7,2.1 -1.3,2.9 -0.5,0.8 -0.8,1.8 -1.5,2.5 -0.5,0.7 -1,1.5 -1.3,1.9 -0.2,0.2 -0.5,0.5 -0.6,0.9 -0.2,0.2 -0.4,0.5 -0.6,0.6 -0.7,0.7 -1.2,1.1 -1.2,1.1 0,0 0.5,-0.4 1.1,-1.1 0.1,-0.2 0.4,-0.4 0.6,-0.6 0.1,-0.2 0.4,-0.5 0.6,-0.9 0.5,-0.6 0.8,-1.2 1.3,-2.1 0.5,-0.7 0.9,-1.6 1.3,-2.6 0.5,-0.9 0.9,-1.9 1.2,-2.9 0.5,-1 0.7,-2.1 1.1,-3.3 0.1,-0.6 0.4,-1.1 0.5,-1.7 0.1,-0.6 0.2,-1.1 0.4,-1.7 0.2,-1.2 0.5,-2.3 0.6,-3.4 0,-1.1 0.2,-2.3 0.1,-3.4 -0.1,-1.1 0,-2.2 -0.1,-3.2 -0.1,-1 -0.2,-1.9 -0.4,-2.8 -0.2,-0.9 -0.4,-1.7 -0.5,-2.3 -0.2,-0.7 -0.4,-1.3 -0.5,-1.8 -0.1,-0.5 -0.4,-0.9 -0.4,-1.1 -0.3,0 -0.3,-0.2 -0.3,-0.2 z" id="path2425" style="fill:#ffffff"></path>
    </g>
    <g id="g2427" style="display:inline">
      <path d="m 147.5,271.7 c 0,0 0.2,-0.4 0.7,-1 0.4,-0.6 1,-1.6 1.6,-2.8 0.4,-0.6 0.6,-1.2 0.8,-1.9 0.2,-0.7 0.6,-1.5 0.8,-2.2 0.2,-0.8 0.5,-1.6 0.7,-2.4 0.1,-0.4 0.2,-0.9 0.2,-1.3 l 0.2,-1.3 c 0.1,-0.9 0.2,-1.7 0.2,-2.7 0.1,-0.8 0,-1.7 0,-2.6 0,-0.8 -0.1,-1.6 -0.1,-2.4 0,-0.7 -0.2,-1.5 -0.4,-2.1 -0.1,-0.6 -0.2,-1.2 -0.4,-1.8 -0.1,-0.5 -0.2,-1 -0.4,-1.3 -0.2,-0.7 -0.4,-1.2 -0.4,-1.2 0,0 0.1,0.4 0.4,1.2 0.1,0.4 0.2,0.9 0.5,1.3 0.2,0.5 0.2,1.1 0.5,1.8 0.1,0.6 0.4,1.3 0.4,2.2 0.1,0.7 0.2,1.6 0.2,2.4 0,0.8 0.1,1.7 0,2.6 -0.1,0.8 -0.1,1.8 -0.2,2.7 l -0.2,1.3 c -0.1,0.5 -0.2,0.8 -0.4,1.3 -0.2,0.9 -0.5,1.7 -0.7,2.6 -0.6,1.6 -1.2,3 -1.9,4.1 -0.6,1.2 -1.3,2.1 -1.7,2.8 -0.1,0.3 -0.4,0.7 -0.4,0.7 z" id="path2429" style="fill:#ffffff"></path>
    </g>
    <linearGradient x1="164.4142" y1="692.54382" x2="180.26579" y2="692.54382" id="SVGID_26_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop2432" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop2434" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 202.7,223.2 c 0,0 -2.8,18.3 -3,19.5 -0.2,1.2 4.2,0.2 8.5,-3.2 4.2,-3.4 8.5,-2.4 10.4,-1.6 2.1,0.8 -5.5,-3.6 -6.8,-4.2 -1.5,-0.6 -4.9,-6.1 -5.8,-6.8 -1.1,-0.9 -3.3,-3.7 -3.3,-3.7 z" id="path2436" style="fill:url(#SVGID_26_);display:inline"></path>
  </g>
  <g transform="translate(-81.275666,-143.2)" id="neck" class="workout-part" onclick="navigateToWorkout('neck')">
    <linearGradient x1="135.9877" y1="704.15057" x2="156.2679" y2="704.15057" id="SVGID_27_" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2143,0,0,-1.2143,0,1074.1786)">
      <stop id="stop2440" style="stop-color:#ef3824;stop-opacity:1" offset="0"></stop>
      <stop id="stop2442" style="stop-color:#d03727;stop-opacity:1" offset="1"></stop>
    </linearGradient>
    <path d="m 187.2,232 c 0,0 -5.7,-4.6 -11.5,-14.4 -5.6,-9.5 -9.7,-13.1 -10.4,-13.4 -0.7,-0.3 1.7,2.7 1.7,4.7 0,2.1 0.2,6.1 0.2,9.6 -0.1,3.5 2.7,7.8 6.7,10.2 4,2.4 13.2,5.7 15.1,5.5 1.9,-0.3 -0.1,-0.8 -1.8,-2.2 z" id="path2444" style="fill:url(#SVGID_27_);display:inline"></path>
    <path d="m 168.8,218.4 c 0,0 0.5,1.1 1.5,2.7 0.5,0.7 1.1,1.6 1.8,2.4 0.7,0.9 1.5,1.7 2.4,2.6 0.4,0.5 0.8,0.7 1.3,1.2 0.5,0.4 1,0.7 1.3,1 0.5,0.4 1,0.6 1.3,0.9 0.4,0.2 0.9,0.5 1.2,0.7 0.4,0.2 0.7,0.5 1.1,0.6 0.4,0.1 0.6,0.2 0.8,0.4 0.5,0.2 0.7,0.4 0.7,0.4 0,0 -0.2,-0.1 -0.7,-0.2 -0.2,-0.1 -0.6,-0.2 -0.8,-0.2 -0.4,-0.1 -0.7,-0.2 -1.1,-0.5 -0.4,-0.2 -0.9,-0.4 -1.3,-0.6 -0.5,-0.2 -1,-0.5 -1.5,-0.8 -0.5,-0.4 -1,-0.6 -1.5,-1 -0.5,-0.4 -1,-0.7 -1.3,-1.2 -0.8,-0.9 -1.7,-1.7 -2.4,-2.7 -0.7,-0.8 -1.2,-1.8 -1.7,-2.6 -0.9,-1.9 -1.1,-3.1 -1.1,-3.1 z" id="path2446" style="fill:#ffffff;display:inline"></path>
    <path d="m 169,215.6 c 0,0 0.1,0.2 0.5,0.7 0.4,0.5 0.7,1.1 1.3,1.8 0.5,0.7 1.2,1.6 1.9,2.6 0.7,1 1.6,1.8 2.3,2.8 0.4,0.5 0.8,0.8 1.2,1.3 0.4,0.5 0.8,0.9 1.2,1.3 0.4,0.4 0.9,0.7 1.2,1.1 0.3,0.4 0.7,0.7 1.1,1 1.5,1.1 2.4,1.8 2.4,1.8 0,0 -1.1,-0.6 -2.7,-1.7 -0.4,-0.2 -0.7,-0.6 -1.2,-1 -0.4,-0.4 -0.9,-0.7 -1.3,-1.1 -0.5,-0.4 -0.8,-0.8 -1.2,-1.2 -0.5,-0.5 -0.8,-0.8 -1.3,-1.3 -0.7,-1 -1.6,-1.9 -2.3,-2.8 -0.7,-1 -1.3,-1.8 -1.8,-2.7 -0.5,-0.7 -0.8,-1.5 -1.2,-1.9 0.2,-0.5 -0.1,-0.7 -0.1,-0.7 z" id="path2448" style="fill:#ffffff;display:inline"></path>
    <path d="m 170,212.3 c 0,0 0.7,1.1 1.8,2.8 0.5,0.8 1.2,1.8 1.9,2.8 0.7,1.1 1.5,2.1 2.3,3.2 0.4,0.6 0.9,1.1 1.2,1.6 0.3,0.5 0.7,1 1.2,1.5 0.9,1 1.6,1.8 2.2,2.5 1.5,1.5 2.3,2.3 2.3,2.3 0,0 -0.2,-0.2 -0.7,-0.6 -0.5,-0.4 -1.1,-0.9 -1.8,-1.6 -0.7,-0.7 -1.5,-1.6 -2.3,-2.5 -0.4,-0.5 -0.8,-1 -1.2,-1.5 -0.4,-0.5 -0.9,-1 -1.2,-1.6 -0.7,-1.1 -1.6,-2.2 -2.2,-3.3 -0.7,-1.1 -1.3,-2.1 -1.8,-2.9 -1.1,-1.6 -1.7,-2.7 -1.7,-2.7 z" id="path2450" style="fill:#ffffff;display:inline"></path>
  </g>
  <path d="m 130.52433,23.7 c 0,0 -12.1,-0.4 -19.9,0.2 -7.8,0.5 -8.7,4.2 -10.699996,8.1 -2.1,3.9 -2.6,5.9 -2.2,10.6 0.4,4.6 0.4,6.3 0.4,6.3 l -4.2,-0.4 c 0,0 -2.7,-4.9 -6.3,-5.1 -3.6,-0.2 -5,1.6 -4.9,5.2 0.1,3.6 2.2,7.5 3.4,9 1.2,1.5 1.1,2.9 1.2,4.1 0.1,1.2 0,4.2 -0.4,4.4 -0.4,0.2 -5.6,-10.4 -7,-15.3 -1.5,-4.9 -3.2,-21 1.5,-29.4 4.7,-8.4 18.899996,-15.5 32.399996,-13 13.3,2.5 16.2,12.7 16.7,15.3 z" id="path2452" style="fill:#bcbec0"></path>
  <path d="m 176.92433,471.5 c -3.5,-1 -14.9,-8.6 -19.3,-13 -1.9,-1.9 -4.1,-3.4 -6,-4.5 -2.3,-1.5 -3.8,-2.4 -3.9,-3.5 -0.9,-4.4 -4.1,-6.1 -6,-7 -0.2,-0.1 -0.6,-0.4 -0.8,-0.5 -1.6,-3 -6.8,-20.3 -6.1,-36.4 0.7,-14.7 0,-37.6 -0.4,-47.5 -0.1,-2.3 -0.1,-4.1 -0.1,-4.6 0,-2.4 2.3,-12.8 3.4,-16 1.2,-3.6 1.9,-13.1 1.2,-17.5 0.4,-0.4 0.7,-0.8 0.9,-1.3 -0.8,-0.6 -1.5,-1.2 -2.3,-1.8 -0.5,1.6 -2.1,0 -1.3,3.1 0.8,3.5 0,13.1 -1.1,16.4 -1.1,3.3 -3.5,14.1 -3.5,17 0,2.9 1.3,33.8 0.5,52 -0.8,18.2 5.5,37.4 6.8,38.7 1.3,1.3 5.3,1.8 6.1,6 0.7,4.1 6.3,5.3 10.8,9.7 4.5,4.4 16.3,12.6 20.6,13.8 4.4,1.2 6.8,6.7 4.4,9.2 -2.3,2.5 -11.9,6.7 -25.9,6.7 -0.5,0 -1,0 -1.5,0 -14.5,-0.2 -23.3,-4.6 -28.3,-4.6 -0.1,0 -0.1,0 -0.2,0 -0.1,0 -0.2,0 -0.5,0 -5,0 -14.2,-2.4 -18,-5.2 -3.8,-2.9 -1.7,-6.1 -0.6,-8.4 1.1,-2.3 2.7,-13.1 3.9,-17.7 1.2,-4.6 4,-4.9 4,-4.9 0.6,0 1.2,-0.6 1.3,-1.3 0,0 1.2,-10.9 -2.3,-22.3 -3.9,-12.6 -5.1,-23.6 -8.4,-32.8 -2.2,-6.2 -6.799996,-7.3 -7.799996,-18.7 -1,-11.4 3,-34 3,-34 0,-0.4 0.1,-0.5 0,-0.5 0,0 -0.1,0.1 -0.2,0.5 0,0 -2.3,6.3 -6.1,15.8 -3.8,9.5 -18.3,37 -24.5,48 -6.2,10.9 -8,19.4 -7.9,21.6 0.1,2.2 3.6,6.6 6.7,12 3,5.5 5.8,8 9.8,10.2 4.1,2.2 9.8,5.5 9.7,8.4 -0.1,2.9 -2.6,7.5 -12.4,8.5 -0.8,0.1 -1.7,0.1 -2.4,0.1 -9,0 -17.1,-4.2 -21,-6.3 -4.2,-2.3 -7.9,-4.2 -15.8,-6.6 -7.9,-2.3 -10.3,-6 -9.6,-10.8 0.7,-4.9 5.8,-7.9 7,-14.3 1.2,-6.4 6.2,-6.7 7.2,-7.5 1,-0.8 16.9,-43 17.6,-45.9 0.7,-2.9 -0.7,-5.1 0.2,-11.7 0.9,-6.6 10.9,-25.6 12.8,-28.5 1.8,-2.9 4.9,-10.8 4.9,-10.8 0.2,-0.6 -0.1,-1.3 -0.7,-1.5 0,0 -2.2,-0.6 -2.3,-2.3 -0.1,-1.7 -2.4,-3.9 -3.2,-4.2 -0.7,-0.4 -14.3,-8.9 -14.7,-10.7 -0.1,-0.4 -0.1,-0.4 -0.1,-0.4 0,-0.1 -0.1,-0.1 -0.1,-0.1 -0.1,0 -0.5,0.2 -0.7,0.5 l -11.7,14.6 c -0.4,0.5 -1.3,1 -1.9,1 l -18.3,1.1 h -0.1 c -0.6,0 -1.6,-0.2 -2.1,-0.6 l -10.7,-7.7 c -0.5,-0.4 -1.1,-1.2 -1.2,-1.9 l -4.5,-22.2 c -0.1,-0.6 0.1,-1.6 0.6,-2.1 l 13.2,-14.8 c 0.5,-0.5 1.3,-1 1.9,-1.1 l 9.3,-1.9 c 0.4,-0.1 0.7,-0.1 1.1,-0.1 0.5,0 0.8,0 1.2,0.1 l 4.6,1 c 0.6,0.1 1.7,0.2 2.4,0.4 l 2.8,0.1 c 0,0 0,0 0.1,0 0.6,0 1.1,-0.5 1,-1.1 0,0 -1.8,-14.6 -4.7,-35.2 -2.4,-18.3 -0.5,-39.3 -0.5,-39.3 0.1,-0.6 0.1,-1.7 0.1,-2.4 0,0 0,-9.1 0.1,-12 0.1,-3.4 -1.9,-9.1 -3.9,-26.6 -1.9,-17.5 4.2,-28.1 3.6,-36.3 -0.5,-8.3 4.5,-18.1 11.9,-22.3 7.4,-4.2 14.9,-5.1 16.4,-7 1.5,-1.9 4.7,-4.7 9.4,-7.5 4.6,-2.8 10.6,-5.1 11.2,-6.7 0.6,-1.5 2.4,-7.4 2.1,-8.5 -0.4,-1.1 -3.2,-4 -4.2,-6.2 -1.1,-2.2 -2.8,-10.4 -3,-13.2 -0.4,-3.2 -5.3,-20 8.5,-28.9 6.3,-4 13.399996,-5.7 19.799996,-5.7 7.2,0 13.6,2.2 16.9,6.2 5.5,6.4 3.6,14.1 5.2,18.1 1.7,4 0.7,4.1 0.2,7 -0.6,2.9 -0.5,1.7 0.8,7.8 1.9,8.7 -1.6,12.3 -3.2,18.8 -1.7,7.3 -6.8,7.5 -6.8,7.5 -0.6,0 -1.2,0.6 -1.2,1.2 l -0.1,3.9 c 0,0.6 0.4,1.6 1,1.9 0,0 2.8,2.1 4.4,5 1.6,2.8 0.7,2.2 4.6,3.8 5,2.2 8.6,4.2 10.2,9.8 1.8,6.9 -0.7,6.2 0.6,13.6 1.5,8.3 1.5,13.5 1.7,21.2 0.2,12 -6.1,17 -6.1,17 -0.5,0.4 -0.7,1.2 -0.4,1.8 0,0 1.2,1.9 0.8,6.3 -0.5,5.7 -0.7,21.1 -0.7,21.1 0,0.6 0.1,1.7 0.4,2.3 0,0 0,0 0.1,0.6 1.7,6 0.7,20.9 -1.1,33.9 -0.8,5.7 -0.4,13.8 0.2,21.2 0.8,-0.7 1.7,-1.5 2.5,-2.2 -0.5,-6.6 -0.7,-13.5 0,-18.3 1.7,-11.9 2.9,-28.2 1,-35.1 l -0.1,-0.6 c -0.1,-0.4 -0.2,-1.1 -0.2,-1.5 0,-0.1 0.2,-15.4 0.7,-21 0.2,-3.3 -0.2,-5.6 -0.6,-6.9 2.1,-2.2 6.4,-8 6.2,-18.6 v -2.4 c -0.1,-6.6 -0.2,-11.8 -1.7,-19.3 -0.6,-3 -0.4,-4.4 -0.1,-5.8 0.2,-1.8 0.6,-3.9 -0.5,-8.1 -1.9,-7.2 -7,-9.8 -12,-11.9 -0.5,-0.2 -0.9,-0.4 -1.2,-0.5 -0.4,-0.1 -0.7,-0.4 -1,-0.5 -0.1,-0.1 -0.1,-0.2 -0.2,-0.4 -0.1,-0.2 -0.4,-0.6 -0.6,-1.1 -1.6,-2.8 -4,-5 -4.9,-5.7 l 0.1,-2.1 c 2.3,-0.7 6.4,-2.9 8,-9.6 0.4,-1.8 1,-3.3 1.6,-4.9 1.6,-4 3.2,-8.3 1.6,-15.3 -0.4,-1.5 -0.6,-2.4 -0.7,-3.2 -0.4,-1.7 -0.4,-1.7 -0.1,-2.8 l 0.1,-0.5 c 0.1,-0.6 0.2,-1 0.4,-1.5 0.6,-2.3 0.7,-3.8 -0.7,-7.4 -0.4,-1 -0.5,-2.5 -0.7,-4.2 -0.4,-4.1 -0.8,-9.7 -5.1,-14.7 -3.8,-4.7 -10.8,-7.4 -19.2,-7.4 -7.5,0 -15.099996,2.2 -21.399996,6.2 -14.1,9 -11.2,25.3 -10.2,30.6 0.1,0.5 0.2,1.1 0.2,1.3 0.2,2.9 1.9,11.7 3.4,14.5 0.7,1.3 1.7,2.7 2.7,3.9 0.4,0.5 0.8,1.1 1.2,1.6 -0.2,1.5 -1.1,4.7 -1.7,6.1 -0.7,0.6 -2.8,1.7 -4.4,2.4 -1.8,1 -3.8,1.9 -5.7,3.2 -4.5,2.8 -8.3,5.7 -10.2,8.3 -0.6,0.4 -2.4,1 -4,1.6 -3.2,1 -7.3,2.4 -11.5,4.9 -8.3,4.9 -14.1,15.7 -13.5,25.4 0.1,2.8 -0.6,6.1 -1.5,10.1 -1.6,6.8 -3.4,15.2 -2.2,26.4 1.1,10 2.3,16.1 3,20.3 0.5,2.9 0.8,4.7 0.8,5.8 -0.1,2.9 -0.1,11.8 -0.1,12.1 0,0.6 0,1.6 -0.1,2.1 -0.1,0.8 -2.1,21.6 0.5,40 2.2,15.4 3.8,27.6 4.4,32.7 h -0.2 c -0.5,0 -1.5,-0.1 -1.9,-0.2 l -4.6,-1 c -0.7,-0.1 -1.5,-0.2 -1.9,-0.2 -0.4,0 -1.1,0 -1.8,0.1 l -9.4,1.9 c -1.3,0.2 -2.8,1.1 -3.8,2.2 l -13,14.6 c -1.09999998,1.2 -1.69999998,3.2 -1.29999998,4.9 L 4.724334,310.8 c 0.2,1.5 1.3,2.9 2.4,3.9 l 10.7,7.6 c 1.1,0.7 2.6,1.2 3.9,1.2 0.1,0 0.2,0 0.4,0 l 18.5,-1.1 c 1.6,-0.1 3.3,-1 4.2,-2.2 l 9.7,-12.3 c 1.2,1 3,2.3 5.7,4.1 3.5,2.4 7,4.6 7.6,4.9 0.5,0.4 1.5,1.5 1.7,1.9 0.2,1.8 1.2,3.2 2.5,4 -1.1,2.7 -2.8,6.8 -3.9,8.5 -1.9,3 -12,22.6 -13.2,29.8 -0.6,4 -0.4,6.7 -0.2,8.6 0.1,1.3 0.1,2.1 0,2.8 -0.7,2.6 -14.2,38.5 -16.9,44.3 -1.9,0.8 -6.6,2.7 -7.9,9.3 -0.5,2.7 -1.9,4.7 -3.4,6.8 -1.6,2.2 -3.2,4.5 -3.6,7.5 -1.1,6.9 2.9,11.8 11.8,14.3 7.5,2.2 10.9,4 15.1,6.2 l 0.1,0.1 c 3.4,1.8 12.5,6.7 22.6,6.7 1,0 1.8,0 2.8,-0.1 10.9,-1 15.1,-6.6 15.3,-11.5 0.2,-4.6 -5.3,-8.1 -11.4,-11.3 -3.2,-1.7 -5.7,-3.6 -8.5,-8.9 -1.2,-2.1 -2.4,-4 -3.5,-5.7 -1.2,-1.8 -2.7,-4.1 -2.8,-5 0,-1.1 1.2,-8.6 7.5,-19.7 5.2,-9.1 16.3,-30 22.1,-42.3 -0.2,4.1 -0.4,8.1 -0.1,11.3 0.6,8.1 3.2,11.8 5.2,14.8 1.099996,1.6 1.899996,2.8 2.599996,4.6 1.6,4.5 2.7,9.6 3.9,14.9 1.2,5.3 2.5,11.4 4.5,17.7 2.7,8.5 2.4,16.9 2.2,19.9 -1.6,0.6 -4.1,2.3 -5.3,6.9 -0.5,2.1 -1.1,5 -1.7,8 -0.6,3.3 -1.6,8.1 -2.1,9.2 -0.1,0.2 -0.2,0.4 -0.2,0.6 -1.1,2.2 -3.599996,7.4 1.8,11.5 4.2,3.3 14.2,5.8 19.8,5.8 0.2,0 0.4,0 0.5,0 h 0.1 c 1.5,0 3.9,0.6 6.6,1.3 5.2,1.3 12.3,3 21.6,3.3 0.5,0 1,0 1.5,0 13.6,0 24.7,-4 28.2,-7.7 1.7,-1.8 2.3,-4.4 1.5,-7.2 -1.3,-2.8 -4.2,-5.8 -7.7,-6.6 z" id="path2454" style="fill:#231f20"></path>
  <path d="m 322.82433,3.1 c 0.9,0 1.6,0 2.4,0.1 18.2,1 20.9,12.6 20.6,20.6 -0.2,8 -2.1,17.1 -1.6,26.2 0.5,9.1 7,12.6 19.1,16.9 11.9,4.2 14.1,12.4 14.7,12.5 0.6,0.1 10.3,2.4 14.1,12.6 3.8,10.3 5.1,8.9 10.9,21.9 5.7,13 4,25 4,25 0,0 3.3,5.6 3.8,10.7 0.6,5.1 -0.6,8.3 2.7,15.9 3.3,7.5 3.3,23.6 1.5,38.4 -1.8,14.8 -2.1,30.5 -0.6,33.5 1.5,3 3,9.2 2.4,14.2 -0.6,5 0.7,5.8 -2.6,11.2 -3.3,5.3 -7,7.4 -6.2,9.7 0.9,2.3 3,19.4 3,21 0,1.5 -1.9,0.7 -1.9,1.9 0,1.2 1.2,10.6 7.9,16.4 6.7,5.8 5.6,7.5 15.3,22 9.7,14.4 8.6,30.8 9.4,38.4 0.7,7.5 7.6,41.6 7.6,41.6 0,0 0.5,-0.1 1.2,-0.1 1.2,0 3.2,0.4 4.2,2.7 1.7,3.6 5.1,7 9.2,9.7 4.1,2.6 7.3,9.4 6.2,15.9 -1.1,6.4 -8.5,12 -8.1,19.8 0.2,7.6 0.9,11.4 -6.4,19.1 -7.4,7.5 -15.5,8.9 -23,9.7 -0.6,0 -1.1,0.1 -1.6,0.1 -5.9,0 -6.4,-4 -7.3,-7.8 -0.9,-4.1 4.2,-9.8 6.1,-15.7 1.9,-5.9 0.5,-20.5 0,-25.6 -0.5,-5.1 2.9,-3.9 1.9,-8 -0.9,-4.1 1.2,-19.2 -2.4,-27.3 -3.6,-8.1 -16.6,-39.9 -21.1,-45.4 -4.5,-5.5 -5.7,-9.2 -6.3,-16.9 -0.6,-7.6 -4.5,-6.2 -11.1,-13.1 -6.4,-6.9 -1.9,-8.7 -8.5,-13.6 -6.4,-4.9 -10.9,-18 -10.9,-18 -2.9,0 -17.7,0.2 -17.7,0.2 0,0 0.2,22 0,28.3 -0.2,6.2 4.2,16.9 7.3,33.1 3,16.3 -2.7,16.5 -3.4,20.8 -0.9,4.2 3.2,55.4 3.2,55.4 0,0 0.4,-0.1 1,-0.1 0.4,0 0.9,0 1.5,0.2 1.5,0.5 2.9,3.2 4.9,5.1 1.9,2.1 8.9,9.5 10.8,13.7 2.1,4.2 -0.9,6 -7.2,10.2 -6.2,4.2 -24.6,20.3 -31.7,21.6 -1.3,0.2 -2.7,0.4 -4.1,0.4 -6.4,0 -13.5,-2.5 -14.2,-6.9 -0.9,-5.5 1.7,-9.8 5.8,-10.6 4.1,-0.7 3.8,0.7 5,-2.1 1.1,-2.8 2.9,-6.9 3.9,-9.1 1,-2.1 0.2,-2.3 0.5,-8 0.2,-5.7 3.3,-6.8 3.3,-6.8 0,0 -0.1,-3.2 -0.6,-7.6 -0.5,-4.5 -1.5,-11.2 -5.3,-26.8 -3.8,-15.7 -8.3,-36.5 -8.9,-46.5 -0.6,-10 2.7,-14.4 -1.7,-22.2 -4.4,-7.6 -3.5,-15.9 -3.8,-22.3 -0.2,-6.4 -1.9,-14.1 -3.9,-14.1 -1.9,0 -14.1,-1.7 -14.5,-4.4 -0.5,-2.7 3.3,-60.2 3.9,-77.2 0.6,-17 4.9,-17.6 4.9,-22.6 0,-5 1.9,-7.5 1.3,-9.2 -0.6,-1.7 -3.3,-7 -3.3,-7 -0.6,5 -6.4,19.4 -10.4,26 -3.9,6.4 -13.8,23.1 -15.1,26.4 -1.3,3.3 -0.7,5.9 -0.5,8.3 0.2,2.3 0,7.4 -0.6,10.1 -0.7,2.7 -3.8,6.7 -4.1,8.9 -0.2,2.2 -1.3,7 -1.2,7.3 0,0.2 2.4,4.2 4,6.2 1.5,1.9 2.2,3.3 1.8,4.5 -0.4,1.1 -1.9,1.2 -2.3,1.2 -0.1,0 -0.1,0 -0.1,0 0,0 0.2,1.1 -1,1.8 -0.4,0.2 -0.9,0.2 -1.2,0.2 -0.9,0 -1.6,-0.4 -1.6,-0.4 0.1,1 -0.7,1.5 -1.7,1.7 -0.1,0 -0.4,0.1 -0.5,0.1 -1.1,0 -2.1,-1 -2.1,-1 -0.2,0.4 -1.5,1 -2.5,1 -0.5,0 -1,-0.1 -1.5,-0.4 -1.5,-0.9 -7.6,-7.4 -8.3,-9.5 -0.7,-2.1 0.1,-9.2 -0.1,-12.3 -0.2,-3.2 0,-3.8 0.5,-5.8 0.5,-2.1 8.5,-12.9 8.6,-16.9 0.2,-4 0.9,-10.4 2.3,-16.2 1.5,-5.6 6.4,-12.6 6.9,-32.4 0.5,-19.8 9.7,-35.3 10.1,-37.6 0.4,-2.3 0.2,-10.3 0.4,-15.8 0.2,-5.5 3.3,-14.7 3.3,-14.7 0,0 -0.7,-3.5 -3.4,-8.4 -2.7,-4.9 -6.2,-14.2 -0.9,-24.5 5.3,-10.3 16.1,-12.4 18.6,-16.2 2.4,-3.8 4.6,-5.8 4.6,-5.8 -3.8,-0.7 -6,-6.1 -6.4,-9.3 -0.5,-3.3 0,-5.5 -2.6,-9.5 -2.6,-4.1 1.5,-5.8 -0.7,-6.8 -2.3,-0.9 -3.3,-2.4 -2.6,-5.7 0.7,-3.3 0.7,-3.8 0.9,-12.5 0,-9.3 3.5,-23.7 23.8,-23.7 m 73.4,232.6 c 0.5,0 1.8,-4.9 1.8,-10.1 0,-5.7 0.7,-15.9 -1.2,-22.3 -1.9,-6.4 -3.8,-13.2 -3.9,-22.6 -0.1,-9.4 -1.5,-13.5 -1.5,-13.5 l -9.8,-12.6 c 0,0 -3.3,9.2 -4.2,14.9 -0.9,5.7 1.1,13.5 1.9,14.4 0.9,1.1 2.9,1.3 4.4,4.7 1.5,3.3 8.3,14.7 9.5,23.7 1.2,9.1 2.6,22.2 2.9,23.2 0.1,0.2 0.1,0.2 0.1,0.2 M 322.82433,0 V 3.2 0 c -10,0 -17.4,3.2 -22.1,9.5 -4,5.5 -5,11.9 -5,16.4 v 0.2 c -0.1,8.5 -0.1,8.7 -0.9,11.5 -1,4.5 0.6,7 2.7,8.4 -0.5,1.6 -0.6,3.8 1.1,6.6 1.6,2.5 1.7,3.9 1.8,6.1 0,0.6 0.1,1.5 0.2,2.2 0.4,2.7 1.7,7 4.6,9.8 -0.7,1 -1.6,2.1 -2.3,3.3 -0.5,0.7 -2.4,1.8 -4.1,2.8 -4.5,2.5 -10.8,6.1 -14.6,13.6 -6.1,11.8 -1.9,22.3 1,27.6 1.7,3 2.6,5.6 2.9,6.7 -0.7,2.6 -2.9,9.8 -3,14.7 -0.1,2.2 -0.1,4.7 -0.1,7.3 0,3.2 0,6.8 -0.2,8 -0.1,0.4 -0.6,1.6 -1.1,2.5 -2.8,6.3 -8.6,19.4 -9,35.6 -0.4,14.6 -3.2,21.7 -5.2,27 -0.6,1.7 -1.2,3.2 -1.7,4.7 -1.7,6.3 -2.2,13.2 -2.4,16.8 -0.1,1.8 -3.6,7.6 -5.5,10.4 -1.9,3.2 -2.8,4.6 -3.2,5.8 v 0.1 c -0.5,2.2 -0.7,3.3 -0.6,6.7 0.1,1.1 0,2.9 -0.1,4.6 -0.1,4.1 -0.2,6.8 0.4,8.5 1,2.9 7.8,10.2 9.7,11.3 0.9,0.5 1.8,0.7 2.9,0.7 0.7,0 1.6,-0.1 2.4,-0.4 0.6,0.2 1.5,0.5 2.3,0.5 0.5,0 1,-0.1 1.5,-0.2 1,-0.4 1.7,-0.7 2.2,-1.2 1,0 1.9,-0.2 2.7,-0.7 0.9,-0.5 1.5,-1.1 1.8,-1.7 1.5,-0.5 2.4,-1.5 2.9,-2.8 1.1,-3.2 -1.1,-5.9 -2.3,-7.5 -1,-1.2 -2.4,-3.5 -3.2,-4.7 0.1,-0.4 0.1,-0.8 0.2,-1.2 0.4,-1.7 0.7,-3.8 0.9,-5.1 0.1,-0.6 1.1,-2.3 1.6,-3.3 1,-1.7 1.9,-3.4 2.4,-5.1 0.9,-3 1,-8.6 0.7,-11.2 0,-0.4 -0.1,-0.7 -0.1,-1.1 -0.2,-1.9 -0.4,-3.6 0.4,-5.8 0.7,-2.1 6.8,-12.5 14.8,-25.9 1.9,-3.3 4.5,-8.7 6.7,-14 -0.1,0.9 -0.1,1.7 -0.1,2.7 0,1.1 -0.2,1.8 -1,3.4 -1.3,3 -3.4,7.7 -3.8,19.2 -0.2,7.4 -1.1,22.8 -1.9,37.8 -1.7,29.1 -2.2,38.5 -1.8,40.2 0.5,2.7 3.2,4.4 9.1,5.7 2.5,0.6 5.5,1 7.3,1.2 0.7,1.7 1.7,6.1 1.9,11.1 0,1.2 0.1,2.4 0.1,3.8 0.1,5.8 0.1,13.1 4.1,20 2.3,4.1 2.1,6.9 1.6,11.3 -0.2,2.7 -0.6,5.7 -0.4,9.5 0.7,11.7 6.6,36.8 9,47 3.9,16.2 4.9,22.5 5.2,26.5 0.2,2.4 0.4,4.5 0.5,5.8 -1.5,1.3 -3,3.8 -3.2,8.1 -0.1,2.5 -0.1,4.1 0,5.1 0,1.2 0,1.2 -0.2,1.7 -1,2.2 -2.8,6.2 -4,9.1 -0.6,0 -1.5,0.1 -2.5,0.2 -5.8,1 -9.5,7 -8.4,14.1 0.5,3.2 2.9,5.8 6.8,7.5 2.9,1.3 6.8,2.1 10.6,2.1 1.7,0 3.3,-0.1 4.7,-0.5 5.3,-1.1 14.2,-7.8 25.3,-16.4 3.2,-2.4 5.8,-4.6 7.5,-5.7 l 0.9,-0.6 c 5.6,-3.8 10.4,-7 7.4,-13.6 -2.2,-4.5 -8.7,-11.7 -11.4,-14.5 -0.6,-0.6 -1.1,-1.3 -1.7,-2.1 -1.3,-1.7 -2.6,-3.3 -4.5,-3.9 -0.2,-0.1 -0.4,-0.1 -0.6,-0.1 -1.5,-19.4 -3.4,-48.6 -2.9,-51.7 0.1,-0.5 0.4,-1 1,-1.8 2.5,-3.6 4.6,-8 2.4,-20 -1.5,-7.5 -3.2,-14.1 -4.5,-19.2 -1.6,-5.8 -2.8,-10.4 -2.7,-13.4 0.1,-4.9 0,-18.9 0,-25.3 3.5,0 9.1,-0.1 12.4,-0.1 1.6,4.1 5.6,13.2 11.2,17.4 2.4,1.8 2.7,2.7 3,4.4 0.5,2.1 1.2,4.9 5,8.9 2.7,2.8 4.9,4.4 6.6,5.6 2.7,1.8 3.3,2.3 3.6,5.7 0.6,7.8 1.8,12.4 7,18.7 3.3,4 12.4,25.4 17.4,36.9 1.5,3.4 2.6,6.1 3.3,7.8 2.1,4.7 2.1,12.9 1.9,18.8 0,3.6 -0.1,6.2 0.2,7.9 0.1,0.4 0.1,0.5 0.1,0.6 0,0.1 -0.1,0.2 -0.2,0.4 -1.1,1.3 -2.2,3.2 -1.8,6.7 v 0.4 c 0.4,4.6 1.7,18.9 0.1,24 -0.6,2.1 -1.8,4.2 -2.9,6.3 -2.1,3.8 -4,7.4 -3.2,11 l 0.1,0.5 c 0.9,3.6 2.1,9.7 10.3,9.7 0.6,0 1.2,0 1.9,-0.1 7.8,-0.8 16.8,-2.3 24.9,-10.6 7.9,-8.1 7.8,-12.9 7.4,-20.2 v -1.2 c -0.1,-3.4 1.8,-6.6 3.9,-9.8 1.8,-2.9 3.6,-6 4.2,-9.4 1.2,-7.4 -2.1,-15.5 -7.6,-19.1 -3.8,-2.4 -6.7,-5.3 -8,-8.3 -1.1,-2.4 -3.2,-4 -5.7,-4.5 -1.6,-8 -6.6,-32.7 -7.2,-38.7 -0.1,-1.2 -0.2,-2.7 -0.2,-4.5 -0.4,-8.5 -1.1,-22.6 -9.6,-35.3 -3.6,-5.5 -5.8,-9.1 -7.3,-11.8 -2.6,-4.4 -4,-6.8 -8.5,-10.8 -4.4,-3.9 -6.1,-9.7 -6.6,-12.6 1.5,-1 1.8,-2.6 1.8,-3.4 0,-1.3 -1.9,-17.5 -3,-21.6 0.4,-0.5 1,-1.2 1.6,-1.9 1.2,-1.3 2.7,-3.2 4.1,-5.5 2.7,-4.1 2.8,-6.3 2.9,-9.2 0,-1 0,-1.9 0.1,-3.2 0.6,-5.5 -0.9,-12.4 -2.7,-16 -1,-2.2 -1,-15.9 1,-31.7 0.9,-6.6 3,-29 -1.7,-40 -2.1,-4.9 -2.2,-7.5 -2.2,-10.6 0,-1.3 0,-2.8 -0.2,-4.4 -0.5,-4.5 -2.7,-9.1 -3.8,-10.9 0.2,-3.4 0.7,-14.2 -4.4,-25.7 -2.8,-6.4 -4.7,-9.5 -6.2,-12 -1.6,-2.6 -2.8,-4.6 -4.6,-9.7 -3.5,-9.6 -11.5,-13.1 -14.9,-14.3 -1.5,-2.6 -5.3,-9.1 -15.7,-12.8 -12.8,-4.5 -16.6,-7.7 -16.9,-14.1 -0.2,-5.3 0.2,-10.9 0.9,-16.3 0.4,-3.4 0.6,-6.6 0.7,-9.7 0.5,-14.3 -8,-23.1 -23.7,-23.9 -1,0 -1.8,-0.1 -2.7,-0.1 l 0,0 z m 59,182 c -0.7,-1.6 -2.1,-7.5 -1.3,-12 0.4,-2.6 1.3,-5.9 2.2,-8.9 l 5.8,7.5 c 0.4,1.2 1.1,5.1 1.2,12 0.1,7.3 1.2,13.1 2.6,18.2 -1.5,-3.4 -3.2,-6.4 -4.4,-8.9 -0.6,-1.2 -1.1,-2.2 -1.3,-2.8 -1.5,-3.2 -3.3,-4.4 -4.4,-5.1 -0.1,0.1 -0.3,0 -0.4,0 l 0,0 z" id="path2456" style="fill:#231f20"></path>
  <path d="m 93.824334,48.4 c 0,0 -0.4,-0.5 -1.1,-1.2 -0.7,-0.7 -1.7,-1.8 -3,-2.7 -0.7,-0.5 -1.5,-0.7 -2.3,-0.7 -0.9,0 -1.7,0.2 -2.4,0.8 -0.7,0.5 -1.2,1.3 -1.5,2.2 -0.2,0.9 -0.2,1.9 -0.1,3 0.1,0.6 0.2,1.1 0.4,1.7 0.1,0.5 0.2,1 0.5,1.5 0.4,1 0.8,1.8 1.5,2.7 0.6,0.7 1.3,1.5 2.1,2.2 0.4,0.4 0.7,0.6 1,1 0.4,0.2 0.7,0.6 1.1,0.8 0.4,0.2 0.6,0.4 1,0.5 0.4,0.1 0.6,0.2 1,0.2 0.6,0 1.2,0 1.6,-0.2 0.1,0 0.2,-0.1 0.2,-0.1 0.1,-0.1 0.1,-0.1 0.2,-0.2 0.1,-0.1 0.2,-0.2 0.4,-0.4 0.1,-0.2 0.2,-0.4 0.2,-0.4 0,0 0,0.1 -0.1,0.4 0,0.1 -0.1,0.2 -0.2,0.5 0,0.1 -0.1,0.1 -0.2,0.2 -0.1,0.1 -0.2,0.1 -0.2,0.2 -0.4,0.4 -1.1,0.6 -1.8,0.7 -0.4,0 -0.7,-0.1 -1.2,-0.1 -0.4,-0.1 -0.8,-0.4 -1.3,-0.5 -0.4,-0.2 -0.7,-0.5 -1.2,-0.7 -0.5,-0.4 -0.7,-0.6 -1.2,-0.9 -0.4,-0.4 -0.9,-0.6 -1.2,-1 -0.3,-0.4 -0.8,-0.7 -1.2,-1.2 -0.7,-0.8 -1.5,-1.9 -1.8,-3 -0.2,-0.6 -0.4,-1.2 -0.5,-1.8 -0.1,-0.6 -0.2,-1.1 -0.4,-1.7 -0.2,-1.3 -0.2,-2.6 0.2,-3.9 0.4,-1.2 1.2,-2.4 2.3,-3 1.1,-0.7 2.3,-1 3.4,-0.8 h 0.4 c 0.2,0 0.4,0.1 0.5,0.1 0.2,0 0.5,0.1 0.7,0.2 0.5,0.2 0.9,0.5 1.2,0.9 0.7,0.6 1.2,1.2 1.7,1.8 0.5,0.6 0.7,1.1 1.1,1.6 0,0.9 0.2,1.3 0.2,1.3 z" id="path2458" style="fill:#231f20"></path>
  <path d="m 307.92433,35.6 c -0.4,-1 -0.1,-2.3 0.7,-3.2 0.5,-0.4 1,-0.6 1.6,-0.7 h 0.4 c 0.1,0 0.4,0 0.5,0.1 0.4,0.1 0.6,0.2 0.9,0.4 1,0.7 1.7,1.7 2.2,2.7 0.2,0.5 0.5,1 0.6,1.6 0.1,0.5 0.4,1.1 0.5,1.6 0.1,0.5 0.2,1.1 0.2,1.7 0,0.6 0.1,1.1 0,1.7 0,0.6 -0.1,1.1 -0.2,1.7 -0.1,0.6 -0.4,1 -0.5,1.6 -0.2,0.5 -0.4,1 -0.6,1.5 -0.2,0.5 -0.5,1 -0.9,1.5 -0.4,0.5 -0.7,0.9 -1.3,1.1 -0.5,0.2 -1.2,0.2 -1.7,0 l 0,0 0,0 c -0.2,-0.5 -0.6,-1.1 -0.9,-1.6 0.4,0.5 0.7,1 1.1,1.5 l 0,0 c 0.5,0.2 1,0.1 1.3,-0.1 0.4,-0.2 0.7,-0.6 1,-1.1 0.5,-0.9 0.9,-1.8 1.2,-2.8 0.1,-0.5 0.4,-1.1 0.4,-1.5 0.1,-0.5 0.1,-1 0.1,-1.5 0,-0.5 0,-1 0,-1.5 -0.1,-0.5 -0.1,-1 -0.2,-1.5 -0.1,-0.5 -0.2,-1 -0.4,-1.5 -0.1,-0.5 -0.4,-1 -0.6,-1.5 -0.5,-1 -1,-1.8 -1.7,-2.4 -0.2,-0.1 -0.4,-0.2 -0.6,-0.4 -0.1,0 -0.1,-0.1 -0.2,-0.1 h -0.4 c -0.4,0 -1,0.2 -1.3,0.5 -1,0 -1.3,1.2 -1.2,2.2 z" id="path2460" style="fill:#231f20"></path>
  <path d="m 319.72433,61.7 c 0,0 0.1,-0.4 0.2,-0.8 0.2,-0.6 0.4,-1.3 0.7,-2.3 0.2,-0.5 0.5,-1 0.7,-1.5 0.2,-0.5 0.5,-1.1 0.9,-1.6 0.7,-1.1 1.3,-2.3 2.2,-3.3 0.9,-1.1 1.6,-2.1 2.3,-3 0.2,-0.5 0.7,-1 0.9,-1.5 0.1,-0.2 0.2,-0.5 0.4,-0.7 0.1,-0.2 0.1,-0.5 0.2,-0.7 0.1,-0.5 0.2,-0.9 0.2,-1.2 0.1,-0.4 0.1,-0.7 0.1,-1 0,-0.6 0,-1 0,-1 0,0 0.1,0.4 0.2,0.9 0,0.2 0.1,0.6 0.1,1.1 0,0.4 0,0.9 -0.1,1.5 0,0.2 -0.1,0.5 -0.1,0.8 -0.1,0.2 -0.2,0.5 -0.2,0.9 -0.1,0.6 -0.5,1.1 -0.9,1.7 -0.4,0.5 -0.7,1.1 -1.1,1.6 -0.4,0.5 -0.9,1.1 -1.2,1.6 -0.5,0.5 -0.7,1.1 -1.1,1.6 -0.4,0.5 -0.7,1 -1.1,1.6 -0.4,0.5 -0.6,1 -1,1.5 -0.2,0.5 -0.6,1 -0.9,1.3 -0.5,0.9 -0.9,1.6 -1.2,2.1 0,0.1 -0.2,0.4 -0.2,0.4 z" id="path2462" style="fill:#231f20"></path>
</svg>
</div>

  </body>
<script>
function navigateToWorkout(bodyPart) {
  const workoutVideos = {
    neck: 'https://www.youtube.com/watch?v=wjiZaCJ6tCA&ab_channel=ATHLEAN-X™',
    shoulders :'https://www.youtube.com/watch?v=ufrFCjERMDc&ab_channel=JeremyEthier',
    chest:'https://www.youtube.com/watch?v=NsEbXsTwas8&ab_channel=JeffNippard',
    biceps:'https://www.youtube.com/watch?v=vFXwQSuY_gw&ab_channel=JeremyEthier',
    forearms:'https://www.youtube.com/watch?v=zVJ3MN4-kkQ&ab_channel=GravityTransformation-FatLossExperts',
    abs:'https://www.youtube.com/watch?v=R8oZk2wnpY0&ab_channel=NEXTWorkout',
    quads:'https://www.youtube.com/watch?v=uIn953pxD8I&ab_channel=ObiVincent',
    calves:'https://www.youtube.com/watch?v=-qsRtp_PbVM&ab_channel=JeffNippard',
    hamstring:'https://www.youtube.com/watch?v=0a_fVS2s4Ho',
    glutes:'https://www.youtube.com/watch?v=LyhYmkZWZPs',
    low_back:'https://www.youtube.com/watch?v=2tnATDflg4o',
    mid_back:'https://www.youtube.com/watch?v=VAvVpAABrTs',
    lats:'https://www.youtube.com/watch?v=WQasM7Jh9dQ',
    traps:'https://www.youtube.com/watch?v=w7OSC-RfKOI',
    triceps:'https://www.youtube.com/watch?v=Re_3NU0XQP4',
  
  };

  const url = workoutVideos[bodyPart];
  if (url) {
    window.location.href = url; // Navigate to the workout video URL
  } else {
    console.error('No workout video found for', bodyPart);
  }
}
document.addEventListener('DOMContentLoaded', function() {
    const scrollArrow = document.getElementById('scrollArrow');

    // Toggle scroll to top or bottom
    window.toggleScroll = function() {
        if (window.pageYOffset > 0) {
            window.scrollTo({ top: 0, behavior: 'smooth' });
            scrollArrow.innerHTML = '&#8595;'; // Change to down arrow after scrolling up
        } else {
            window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
            scrollArrow.innerHTML = '&#8593;'; // Change to up arrow
        }
    };

    // Change arrow direction based on scroll position
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 0) {
            scrollArrow.innerHTML = '&#8593;'; // Show up arrow when not at the top
        } else {
            scrollArrow.innerHTML = '&#8595;'; // Show down arrow when at the top
        }
    });
});

document.getElementById('getRecommendation').addEventListener('click', function() {
    this.style.display = 'none';
    document.getElementById('processing').style.display = 'block';
    setTimeout(function() {
        document.getElementById('processing').style.display = 'none';
        document.getElementById('recommendationResult').style.display = 'block';
    }, 4000); // Simulate processing for 4 seconds
});
// Open modal when clicking on an exercise image
document.querySelectorAll('[data-exercise-img]').forEach(item => {
    item.addEventListener('click', function() {
        const imgUrl = this.getAttribute('data-exercise-img');
        document.getElementById('exerciseImg').src = imgUrl;
        document.getElementById('exerciseModal').style.display = 'flex'; // Display as flex to center
    });
});

// Close modal when clicking outside of the image
document.getElementById('exerciseModal').addEventListener('click', function(event) {
    if (event.target === this) {
        this.style.display = 'none';
    }
});

// Close the modal when the close span is clicked
document.querySelector('.close').addEventListener('click', function() {
    document.getElementById('exerciseModal').style.display = 'none';
});

</script>

</html>

@endsection