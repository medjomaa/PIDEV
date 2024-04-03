
<!DOCTYPE html>
<html lang="en">
<header>
      <div class="container">
        <div id="header-logo-mobile" class="top-gym-logo">
          <a class="smooth-scroll-link" href="#home">Power<br/>Gym</a>
        </div>
    
        <nav>
          <ul class="flex">
            <li><a class="smooth-scroll-link" href="/">Home</a></li>
            <li><a class="smooth-scroll-link" href="#features">Training</a></li>
            <li><a class="smooth-scroll-link" href="{{ route('events.eventshow') }}" class="{{ request()->is('events.eventshow') ? 'active' : '' }}">Evenement</a></li>
            <li id="header-logo" class="top-gym-logo">
              <a class="smooth-scroll-link" href="#home">Power<br/>Gym</a>
            </li>
            <li><a class="smooth-scroll-link" href="/productshow">Products</a></li>
            <li><a class="smooth-scroll-link" href="#contact">Contacts</a></li>
            <li>
            <a href="registration"> Se connecter</a>
            </li>
          </ul>
        </nav>
    
        <button id="hamburger-menu">
          <span class="strip"></span>
          <span class="strip"></span>
          <span class="strip"></span>
        </button>
      </div>
    </header>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Top Gym')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');

/* start: global styles */
* {
  outline: none;
}

*:not(.slick-track), *:not(.slick-list) {
  transition: 0.4s;
}

body {
    color: #000000; /* black text color */
    padding-top: 100px;
    background-color: #000000;
    /* background-image: url(https://img.freepik.com/premium-photo/dark-gym-with-red-lights-black-background_876956-1224.jpg); */
  }
  
  h1, h2, h3, h4, h5 {
    color: #FF0000; /* red heading colors */
  }
  
  /* Update any other relevant styles with the desired red (#FF0000) and black (#000000) color values */

h1, h3, h4, h5 {
  text-transform: uppercase;
}

h2 {
  font-size: 8rem;
}

h3 {
  font-size: 2.85rem;
  letter-spacing: 7px;
  color: #fff;
  margin-bottom: 4rem;
}

h4 {
  font-size: 1.15rem;
}

h5 {
  color: #fff;
}

ul {
  list-style-type: none;
  padding: 0;
}

button {
  cursor: pointer;
  background: #FF0000;
  color: #fff;
  font-size: 0.9rem;
  text-align: center;
  padding: 1.25rem 3rem;
  border: none;
  text-transform: uppercase;
  font-weight: 500;
  font-family: 'Roboto', 'Helvetica', 'Sans-serif';
  letter-spacing: 2px;
}

a {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

p {
  color: #7b7b7b;
  line-height: 2;
  font-size: 0.95rem;
}

section, footer {
  padding: 6rem 0;
  text-align: center;
}

.container {
  max-width: 1100px;
  margin: 0 auto;
  position: relative;
}

.flex {
  display: flex;
  justify-content: space-between;
}

.box {
  text-align: center;
}
/* end: global styles */

/* start: hero section styles */
#hero {
  position: relative;
  padding: 0;
}

header {
  position: fixed; /* Fix position to the top of the viewport */
  top: 0;
  left: 0;
  align-items: centered;
  width: 100%;
  z-index: 1000; /* Ensure the header is above other content */
  background: rgba(0, 0, 0, 0.8); /* Optional: Make the background slightly transparent or solid */
}


header nav {
  max-width: 950px;
  margin: 0 auto;
  position: relative;
}

header nav ul.flex {
  align-items: center;
  justify-content: space-around;
}

header nav ul li a {
  color: #fff;
  font-size: 0.8rem;
  text-transform: uppercase;
  font-weight: 500;
}

.top-gym-logo {
  margin: 0 2rem;
  border: 2px solid #fff;
  padding: 15px 10px 7px;
  text-align: center;
  letter-spacing: 2px;
}

.top-gym-logo a {
  font-size: 28px;
  text-transform: uppercase;
  color: #fff;
  line-height: 20px;
}

.top-gym-logo a:hover {
  text-decoration: none;
}

#header-logo-mobile {
  display: none;
}

#search {
  position: absolute;
  right: 0;
  top: 50%;
  margin-top: -7px;
  width: auto;
  padding: 0;
  font-size: 15px;
  border: none;
  background: transparent;
  color: #fff;
}

#hamburger-menu {
  background-color: transparent;
  border: 1px solid #fff;
  padding: 3px 5px;
  width: 30px;
  cursor: pointer;
  margin: 0 1rem;
  display: none;
}

#hamburger-menu .strip {
  display: block;
  height: 1px;
  background-color: #fff;
  margin: 4px 0;
}

#hero-slider .hero-slide-item {
  position: relative;
  height: 895px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top center;
}

#hero-slider .hero-slide-item .youtube-button {
  background: #FF0000;
  padding: 1.2rem 1.45rem;
  border-radius: 30px;
  color: #fff;
  font-size: 16px;
}

#hero-slider .hero-slider-marketing {
  position: absolute;
  z-index: 2;
  text-align: center;
  color: #fff;
  top: 50%;
  left: 0;
  right: 0;
  margin: -100px auto 0;
}

#hero-slider .slick-dots {
  bottom: 35px;
}

#hero-slider .slick-dots li button:before {
  color: #fff;
  opacity: 1;
  padding: 2px 2px 2px 3px;
  border: 3px solid transparent;
  border-radius: 20px;
}

#hero-slider .slick-dots li.slick-active button:before {
  border-color: #fff;
}
/* end: hero section styles */

/* start: features section styles */
#features .box {
  width: 31%;
}

#features .box > img {
  width: 100%;
}

#features .box .feature-info-container {
  position: relative;
}

#features .box .icon {
  position: relative;
  margin: 0 auto;
  background: #FF0000;
  border-radius: 45px;
  top: -35px;
  width: 88px;
  height: 88px;
  line-height: 83px;
  text-align: center;
}

#features .box .icon img {
  vertical-align: middle;
}
/* end: features section styles */

/* start: services section styles */
#services {
  background: rgba(5, 8, 32, 0.6);
}

#services .container {
  margin-bottom: 4rem;
}

#services .box {
  width: 23.5%;
}

#services .box img {
  height: 65px;
  margin-bottom: 2rem;
}

#services .box h4 {
  color: #fff;
}
/* end: services section styles */

/* start: trainers section styles */
#trainers {
  background: url('https://i.pinimg.com/originals/7d/45/99/7d45996cee4ce99a1c795b5e60e10105.jpg') top center no-repeat;
  background-size: cover;
  color: #FF0000;
  padding: 50px 0; /* Adjust padding as needed */
}

#trainers-slider {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px; /* Adjust gap between items as needed */
  padding: 20px; /* Adds padding around the slider for better spacing */
}

.trainer-slider-item {
  flex: 1 0 21%; /* Adjust the basis to control the item width, change the percentage as needed */
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  max-width: 200px; /* Set a max-width to keep items from growing too large */
  background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background for better visibility */
  padding: 20px; /* Padding inside each slider item */
  border-radius: 10px; /* Rounded corners for a sleek look */
}

.trainer-slider-item img {
  width: 100%; /* Make images responsive */
  height: auto;
  border-radius: 10px; /* Optional: adds rounded corners to images */
}

.trainer-slider-item h4,
.trainer-slider-item p {
  margin: 10px 0; /* Adds margin to space out the text */
  color: #fff; /* Adjust text color as needed */
}

#trainers-slider .slick-prev,
#trainers-slider .slick-next {
  color: #fff;
  position: absolute;
  top: 50%;
  z-index: 1;
  background-color: rgba(0,0,0,0.5);
  border: none;
  border-radius: 50%;
  width: 40px; /* Size of the arrow buttons */
  height: 40px; /* Size of the arrow buttons */
  display: flex;
  align-items: center;
  justify-content: center;
  transform: translateY(-50%);
}

#trainers-slider .slick-prev { left: -45px; }
#trainers-slider .slick-next { right: -45px; }

#trainers-slider .slick-prev:before,
#trainers-slider .slick-next:before {
  content: ''; /* Remove default arrows */
}

#trainers-slider .slick-prev:after {
  content: '←'; /* Custom arrow */
  font-size: 24px;
  color: #fff;
}

#trainers-slider .slick-next:after {
  content: '→'; /* Custom arrow */
  font-size: 24px;
  color: #fff;
}

/* end: trainers section styles */

/* start: schedule services styles */
#schedule-services {
  text-align: left;
}

#schedule-services .flex > div {
  width: 32%;
  box-sizing: border-box;
}

#schedule-services .flex strong {
  display: block;
  color: #212122;
  font-size: 0.85rem;
  opacity: 0.6;
  letter-spacing: 4px;
}

.upcoming-classes-box {
  border: 2px solid #E5E7F3;
  padding: 4rem 2.5rem 2.5rem;
}

.upcoming-classes-box h4 {
  margin-bottom: 2rem;
}

.upcoming-classes-box table {
  width: 100%;
}

.upcoming-classes-box table tr td {
  padding: 13px 10px 13px 0;
  color: #7b7b7b;
  font-size: 0.85rem;
}

.upcoming-classes-box table tr td:last-child {
  text-align: right;
  padding-right: 0;
}

.membership-cards-box {
  background: #FF0000;
  padding: 1.5rem;
}

.membership-cards-box .inner-container {
  background: url('https://st2.depositphotos.com/13458514/43285/i/450/depositphotos_432856752-stock-photo-athlete-pumps-biceps-simulator-african.jpg') top center no-repeat;
  height: 395px;
  padding: 2.5rem 1.5rem 1.5rem;
}

.membership-cards-box h2 {
  font-size: 4.5rem;
  font-weight: 700;
  color: #fff;
  line-height: 1;
}

.membership-cards-box h2 span {
  font-size: 1rem;
  letter-spacing: 0;
}

.personal-trainer-box {
  background: url('https://onclickwebdesign.com/wp-content/uploads/personal-trainer.jpg') top center no-repeat;
  padding: 4rem 3rem 3rem;
}

.personal-trainer-box h4 {
  margin-bottom: 2rem;
  color: #fff;
}

.personal-trainer-box p {
  color: #fff;
  margin-bottom: 1.5rem;
}

.personal-trainer-box button {
  width: 100%;
}

#schedule-services .personal-trainer-box strong {
  color: #fff;
}
/* end: schedule services styles */

/* start: footer section styles */
footer {
  background: url('https://onclickwebdesign.com/wp-content/uploads/footer-bg.jpg') top center no-repeat;
  background-size: cover;
  padding-bottom: 2rem;
}

.footer-container {
  max-width: 625px;
  margin: 0 auto;
}

#footer-logo {
  display: inline-block;
}

footer nav {
  margin: 2rem 0 6rem;
}

footer ul {
  display: flex;
  justify-content: space-around;
}

footer ul li a {
  color: #fff;
  text-transform: uppercase;
  font-size: 0.8rem;
  font-weight: 300;
}

footer .mailing-list {
  position: relative;
}

footer input {
  color: #fff;
  height: 78px;
  width: 100%;
  box-sizing: border-box;
  background: transparent;
  border: 2px solid #fff;
  font-size: 13px;
  font-style: italic;
  padding-left: 2rem;
}

footer button {
  position: absolute;
  right: 2px;
  top: 2px;
  padding: 1.75rem 3rem;
}

footer ul.social-icons {
  max-width: 400px;
  margin: 4rem auto 3rem;
}

footer ul.social-icons li a {
  font-size: 1rem;
}

footer img.bicep {
  display: block;
  margin: 0 auto 2rem;
}

footer small {
  color: #fff;
  opacity: 0.8;
  font-weight: 300;
  margin: 0 0.5rem;
}

footer small a {
  color: #fff;
  text-decoration: underline;
}
/* end: footer section styles */

/* start: search and embed video overlay styles */
#search-container,
#video-frame {
  background: #FF0000;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
  visibility: hidden;
  transition: 0.3s;
}

#video-frame {
  background: rgba(0, 0, 0, 0.8);
}

.video-frame-container {
  position: relative;
  margin: 0 auto;
  width: 100%;
  max-width: 900px;
  top: 20%;
}

.video-frame-scaler {
  width: 100%;
  height: 0;
  overflow: hidden;
  padding-top: 56%;
}

.video-frame-scaler iframe {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
}

#search-container-hide, 
#video-frame-hide {
  color: #fff;
  font-size: 1.75rem;
  position: absolute;
  top: 30px;
  right: 30px;
  cursor: pointer;
}

#search-container h3,
.search-container-input {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  margin: -50px auto 0;
  max-width: 500px;
}

#search-container h3 {
  font-size: 2.5rem;
  letter-spacing: 1px;
  text-align: center;
  margin: -125px auto 0;
}

.search-container-input input {
  width: 100%;
  height: 58px;
  box-sizing: border-box;
  font-size: 16px;
  padding-left: 2rem;
}

.search-container-input button {
  position: absolute;
  right: 0;
  top: 0;
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}
/* end: search and embed video overlay styles */

/* start: media queries */
@media (max-width: 992px) {
  h2 {
    font-size: 6rem;
  }

  header nav {
    max-width: 775px;
  }

  .top-gym-logo {
    margin: 0 1rem;
  }

  .upcoming-classes-box {
    padding: 2rem 1.5rem 0.5rem;
  }

  .upcoming-classes-box h4 {
    margin-bottom: 1rem;
  }

  .membership-cards-box .inner-container {
    padding: 0.5rem 1.5rem 1.5rem;
    height: 100%;
    box-sizing: border-box;
  }

  .membership-cards-box h2 {
    font-size: 3.5rem;
  }

  .personal-trainer-box {
    padding: 2rem 1.5rem 1.5rem;
  }

  .personal-trainer-box p {
    font-size: 0.85rem;
  }

  @media (min-width: 768px) {
    header nav {
      display: block !important;
    }
  }

  @media (max-width: 767px) {
    h2 {
      font-size: 4rem;
      margin-top: 2rem;
    }

    .flex {
      display: block;
    }

    .flex .box {
      margin: 0 auto;
      width: 100% !important;
      margin-top: 3rem;
    }

    .flex .box:first-child {
      margin-top: 0;
    }

    header {
      background: rgba(0, 0, 0, 0.85);
    }

    header .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: static;
    }
    
    #header-logo-mobile {
      display: inline-block;
    }

    header nav {
      position: absolute;
      top: 100%;
      width: 100%;
      background: rgba(0, 0, 0, 0.85);
      display: none;
    }

    header nav ul.flex {
      display: block;
    }

    header nav ul li {
      margin: 1rem 0;
    }

    header nav ul li:last-child {
      margin-bottom: 2rem;
    }

    header nav ul li a {
      font-size: 1.5rem;
    }

    #search {
      position: static;
      font-size: 1.5rem;
    }

    #hamburger-menu {
      display: block;
    }

    #header-logo {
      display: none;
    }

    #features .box .feature-info-container {
      padding: 0 1rem;
    }

    #schedule-services .flex {
      width: 90%;
      display: flex;
      flex-wrap: wrap;
    }

    #schedule-services .flex > div.upcoming-classes-box,
    #schedule-services .flex > div.membership-cards-box {
      width: 48%;
    }

    #schedule-services .flex > div.personal-trainer-box {
      width: 100%;
      margin-top: 3rem;
      background-size: cover;
    }

    .personal-trainer-box p {
      font-size: 0.95rem;
    }

    .membership-cards-box .inner-container {
      background-size: cover;
    }
  }

  @media (max-width: 600px) {
    .video-frame-container {
      top: 30%;
    }

    #schedule-services .flex > div {
      width: 100% !important;
      margin-top: 3rem;
    }

    #schedule-services .flex > div:first-child {
      margin-top: 0;
    }

    .membership-cards-box .inner-container {
      min-height: 500px;
    }

    footer ul li a {
      font-size: 0.65rem;
    }

    footer .mailing-list {
      margin: 0 0.5rem;
    }

    footer button {
      padding-right: 1rem;
      padding-left: 1rem;
    }
  }

  @media (max-width: 500px) {
    .membership-cards-box .inner-container {
      min-height: 400px;
    }

    footer ul {
      flex-wrap: wrap;
    }

    footer nav ul li {
      width: 33%;
      margin-top: 1rem;
    }
  }
}
.animated-section {
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 1s ease-in-out, transform 1s ease-in-out;
  }
  
  .animated-section.appear {
    opacity: 1;
    transform: translateY(0);
  }
  /* Social Icons hover effect */
.social-icons li a {
  transition: color 0.3s ease-in-out; /* Smooth transition for color change */
}

.social-icons li a:hover .fab {
  color: inherit; /* This ensures the color changes on hover */
}

/* Individual color for each social icon on hover */
.social-icons li a:hover .fa-pinterest { color: #BD081C; } /* Pinterest red */
.social-icons li a:hover .fa-facebook { color: #3B5998; } /* Facebook blue */
.social-icons li a:hover .fa-twitter { color: #1DA1F2; } /* Twitter blue */
.social-icons li a:hover .fa-youtube { color: #FF0000; } /* YouTube red */
.social-icons li a:hover .fa-behance { color: #053EFF; } /* Behance blue */
/* BMI Calculator Styles */
#bmi-calculator {
  background-color: #fff;
  color: #fff;
  padding: 50px 0;
  text-align: center;
}

#bmi-calculator {
  background-color: #000;
  color: #fff;
  padding: 50px 0;
  text-align: center;
}

#bmi-calculator h3 {
  color: #ff0000;
  margin-bottom: 30px;
  font-size: 2.5em;
  animation: pulse 2s infinite;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

.form-group input[type="number"],
.form-group select {
  width: 80%;
  padding: 10px;
  margin: auto;
  border: 2px solid #ff0000;
  border-radius: 5px;
  background-color: transparent;
  color: white;
}

button[type="submit"] {
  width: 50%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 1.2em;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #e60000;
}

#bmi-result p {
  font-size: 1.4em;
  margin-top: 20px;
}

@keyframes pulse {
  0% {
    transform: scale(1);
    opacity: 1;
  }
  50% {
    transform: scale(1.05);
    opacity: 0.8;
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}

.fa-dumbbell:before {
  content: "\f44b";
}

body {
  font-family: 'Arial', sans-serif;
  background-image: url('https://example.com/background-image.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

.container {
  max-width: 800px;
  margin: auto;
  padding: 20px;
  background: rgba(0, 0, 0, 0.8);
  border-radius: 10px;
}

.youtube-button,
#search-container button,
#video-frame-hide {
  background-color: #ff0000;
  color: #fff;
}

.loader-5 {
  width: 48px;
  height: 48px;
  border: 3px solid #FFF;
  border-radius: 50%;
  display: none; /* Initially hidden */
  position: relative;
  animation: rotation 1s linear infinite;
  margin: 20px auto; /* Center the loader */
}

.loader-5:after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 56px;
  height: 56px;
  border-radius: 50%;
  border: 3px solid;
  border-color: #FF3D00 transparent;
}
.button {
    display: inline-block;
    background-color: #FF0000; /* Adjust color as needed */
    color: #FFFFFF; /* Adjust text color as needed */
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px; /* Adjust for rounded corners */
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #E60000; /* Slightly darker on hover */
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>
</head>
<body>
    @yield('content')

   
  <script>
    // document ready function
    $(function () {
      // store jquery references to elements in const variables
      const headerNav = $('header nav');
      const hamburgerMenu = $('#hamburger-menu');
      const search = $('#search');
      const searchContainerHide = $('#search-container-hide');
      const searchContainer = $('#search-container');
      const youtubeButton = $('.youtube-button');
      const videoFrame = $('#video-frame');
      const videoFrameHide = $('#video-frame-hide');
      const embedVideo = $('#embed-video');

      // initialize hero slider
      $('#hero-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 4000,
        pauseOnFocus: false,
        pauseOnHover: false,
        fade: true,
        speed: 1000,
        cssEase: 'linear'
      });

      $('#trainers-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<a href="#" class="slick-arrow slick-prev">previous</a>',
        nextArrow: '<a href="#" class="slick-arrow slick-next">next</a>',
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              arrows: false
            }
          },
          {
            breakpoint: 530,
            settings: {
              slidesToShow: 1,
              arrows: false
            }
          }
        ]
      });

      // initialize event handling
      hamburgerMenu.on('click', () => {
        headerNav.toggle();
      });

      search.on('click', () => {
        searchContainer.css({
          'opacity': '1',
          'visibility': 'visible',
          'z-index': '100'
        });
      });

      searchContainerHide.on('click', () => {
        searchContainer.css({
          'opacity': '0',
          'visibility': 'hidden',
          'z-index': '0'
        });
      });

      youtubeButton.on('click', () => {
        videoFrame.css({
          'opacity': '1',
          'visibility': 'visible',
          'z-index': '100'
        });
      });

      videoFrameHide.on('click', () => {
        videoFrame.css({
          'opacity': '0',
          'visibility': 'hidden',
          'z-index': '0'
        });
        
        embedVideo.prop('src', embedVideo.prop('src'));
      });
    });
    // Add the following JavaScript code

window.addEventListener('scroll', function() {
  var elements = document.getElementsByClassName('fade-in');
  for (var i = 0; i < elements.length; i++) {
    var element = elements[i];
    if (isElementInViewport(element)) {
      element.classList.add('visible');
    }
  }
});

function isElementInViewport(element) {
  var rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}
document.addEventListener("DOMContentLoaded", function() {
  var sections = document.querySelectorAll(".animated-section");

  function checkScroll() {
    for (var i = 0; i < sections.length; i++) {
      var section = sections[i];
      var position = section.getBoundingClientRect().top;

      if (position - window.innerHeight <= 0) {
        section.classList.add("appear");
      }
    }
  }

  window.addEventListener("scroll", checkScroll);
});
$(document).ready(function() {
      $('a.smooth-scroll-link').on('click', function(event) {
        if (this.hash !== '') {
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function() {
            window.location.hash = hash;
          });
        }
      });
    });
  </script>
</body>


</html>
