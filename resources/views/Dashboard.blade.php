<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <!-- Additional head content -->

<head>
  
</head>
<style>
  .logo img {
    width: 32px; /* Or whatever size fits your layout */
    height: 32px;
    margin: 10px; /* Adjust as needed */
}
     body {
  font-family: 'Poppins', sans-serif;
  background-color: #f0f2f5;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.layout {
  display: flex;
  min-height: 100vh;
}
.sidebar{
  background: #11101D; /* Darker shade for contrast */
  transition: width 0.5s ease;
  width: 90px; /* Initial width */
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 90px;
  background: #000000;
  padding: 6px 14px;
  z-index: 99;
  transition: all 0.5s ease;
}
.sidebar a.active {
  background-color: #ffffff;
  color: #11101D; /* Text color for active state */
}

.sidebar a.active i {
  color: #11101D;
}

.sidebar.open{
  width: 250px;
}
.sidebar .logo-details{
  height: 60px;
  display: flex;
  align-items: center;
  position: relative;
}
.sidebar .logo-details .icon{
  opacity: 0;
  transition: all 0.5s ease;
}
.main-content {
            transition: margin-left 0.5s ease;
            margin-left: 90px; /* Adjusted based on the sidebar width */
        }

        /* Adjust this class when sidebar is toggled */
        .sidebar-open .main-content {
            margin-left: 250px; /* Adjusted based on the sidebar open width */
        }
.sidebar .logo-details .logo_name{
  color: #ffffff; /* Changed from rgb(124, 0, 0) */
  font-size: 20px;
  font-weight: 600;
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details .icon,
.sidebar.open .logo-details .logo_name{
  opacity: 1;
}
.sidebar .logo-details #btn{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  font-size: 22px;
  transition: all 0.4s ease;
  font-size: 23px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details #btn{
  text-align: right;
}
.sidebar i{
  color: #ffffff; /* Changed from rgb(124, 0, 0) */
  height: 60px;
  min-width: 50px;
  font-size: 28px;
  text-align: center;
  line-height: 60px;
}
.sidebar .nav-list{
  margin-top: 20px;
  height: 100%;
}
.sidebar li{
  position: relative;
  margin: 8px 0;
  list-style: none;
}
.sidebar li .tooltip{
  position: absolute;
  top: -20px;
  left: calc(100% + 15px);
  z-index: 3;
  background: #ffffff; /* Changed from rgb(124, 0, 0) */
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 15px;
  font-weight: 400;
  opacity: 0;
  white-space: nowrap;
  pointer-events: none;
  transition: 0s;
}
.sidebar li:hover .tooltip{
  opacity: 1;
  pointer-events: auto;
  color: #000000;
  transition: all 0.4s ease;
  top: 50%;
  transform: translateY(-50%);
}
.sidebar.open li .tooltip{
  display: none;
}
.sidebar input{
  font-size: 15px;
  color: #ffffff; /* Changed from rgb(124, 0, 0) */
  font-weight: 400;
  outline: none;
  height: 50px;
  width: 100%;
  width: 50px;
  border: none;
  border-radius: 12px;
  transition: all 0.5s ease;
  background: #1d1b31;
}
.sidebar.open input{
  padding: 0 20px 0 50px;
  width: 100%;
}
.sidebar .bx-search{
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  font-size: 22px;
  background: #1d1b31;
  color: #ffffff; /* Changed from rgb(124, 0, 0) */
}
.sidebar.open .bx-search:hover{
  background: #1d1b31;
  color: #ffffff; /* Changed from rgb(124, 0, 0) */
}
.sidebar .bx-search:hover{
  background: #ffffff; /* Changed from rgb(124, 0, 0) */
  color: #11101D;
}
.sidebar li a{
  display: flex;
  height: 100%;
  width: 100%;
  border-radius: 12px;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  background: #11101D;
}
.sidebar li a:hover{
  background: #ffffff; /* Changed from rgb(124, 0, 0) */
}
#dashboard{

  background-color: #ffffff; /* Changed from rgb(124, 0, 0) */
}
#icon{
  color: #11101D;
}
.sidebar li a .links_name{
  color: rgb(118,121,123); /* Changed from rgb(124, 0, 0) */
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: 0.4s;
}
.sidebar.open li a .links_name{
  opacity: 1;
  pointer-events: auto;
}
.sidebar li a:hover .links_name,
.sidebar li a:hover i{
  transition: all 0.5s ease;
  color: red;
}
.sidebar li i{
  height: 50px;
  line-height: 50px;
  font-size: 18px;
  border-radius: 12px;
}
.sidebar li.profile{
  position: fixed;
  height: 100px;
  width: 78px;
  left: 0;
  bottom: -8px;
  padding: 10px 14px;
  background: #1d1b31;
  transition: all 0.5s ease;
  overflow: hidden;
}
.sidebar.open li.profile{
  width: 250px;
}
.sidebar li .profile-details{
  display: flex;
  align-items: center;
  flex-wrap: nowrap;
}
.sidebar li img{
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 6px;
  margin-right: 10px;
}
.sidebar li.profile .name,
.sidebar li.profile .job{
  font-size: 15px;
  font-weight: 400;
  color: #ffffff; /* Changed from rgb(124, 0, 0) */
  white-space: nowrap;
  overflow: hidden;
}
.sidebar li.profile .job{
  font-size: 12px;
}
/* Initially hide the dropdown content */
.dropdown-content {
    display: none;
    flex-direction: column;
    padding-left: 10px; /* Indent dropdown items for a nested look */
}

/* Style for the dropdown items */
.dropdown-content a {
    font-size: 14px; /* Smaller font size */
    color: #f0f0f0; /* Lighter text color for contrast */
    background-color: #333333; /* Darker background for dropdown items */
    padding: 5px 10px; /* Smaller padding */
}



.sidebar .profile #log_out{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  background: #1d1b31;
  width: 100%;
  height: 60px;
  line-height: 60px;
  border-radius: 0px;
  transition: all 0.5s ease;
  cursor: pointer;
}
.sidebar.open .profile #log_out{
  width: 50px;
  background: none;
}
.home-section {
  flex-grow: 1;
  transition: margin-left 0.5s ease;
  margin-left: 90px; /* Initial margin-left equals sidebar initial width */
}

.sidebar.open ~ .home-section {
  margin-left: 250px; /* Adjusted margin-left equals sidebar width when open */
}


.home-section .text{
  display: inline-block;
  color: #11101d;
  font-size: 25px;
  font-weight: 500;
  margin: 18px
}
@media (max-width: 420px) {
  .sidebar li .tooltip{
    display: none;
  }
}
/* Add this at the end of your existing CSS */
.profile-details {
    flex-direction: column; /* Stack items vertically */
    align-items: center; /* Center align items */
    padding: 10px; /* Padding for spacing */
}

#user-email {
    color: #E4E9F7; /* Color for visibility */
    margin-bottom: 10px; /* Space between username and logout button */
    text-align: center; /* Center the text */
}

#logout {
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 40px; /* Adjust based on your preference */
    height: 40px; /* Adjust based on your preference */
    border-radius: 50%; /* Circular shape */
}

#logout {
    font-size: 20px; /* Icon size */
    color: #ffffff; /* Icon color */
    transition: background-color 0.3s, color 0.3s; /* Smooth transition for hover effect */
}

#logout:hover  {
  background-color: white;  
  color: red; /* Icon color on hover */
}


/* Improve profile container */

.dropdown-content a {
    display: flex;
    align-items: center;
    padding: 5px 10px;
    color: #fff; /* Adjust the color based on your design */
    transition: background 0.3s ease;
}

.dropdown-content a i {
    margin-right: 8px; /* Space between icon and text */
}

/* Style for hover state */
.sidebar:not(.open) .dropdown-content a:hover {
    background-color: #555; /* Darker background on hover */
    color: #fff;
}

/* Improve readability */
.dropdown-content {
    display: none;
    flex-direction: column;
    background-color: #333; /* Light background to distinguish dropdown */
    width: 100%; /* Match parent width */
}

.sidebar.open .dropdown:hover .dropdown-content {
    display: flex;
}


/* Tooltip styling for better visibility */
.sidebar li:hover .tooltip {
    background-color: #fff;
    color: #000;
    transition: opacity 0.4s ease, transform 0.4s ease;
    opacity : 1;
    transform: translateY(-50%) translateX(0%);
}

/* When sidebar is not open, show tooltip next to icon */
.sidebar:not(.open) li:hover .tooltip {
    transform: translateY(-50%) translateX(20px);
}

* {
  box-sizing: border-box;
}

:root {
  --app-container: #f3f6fd;
  --main-color: #1f1c2e;
  --secondary-color: #1f1c2e;
  --link-color: #1f1c2e;
  --link-color-hover: #c3cff4;
  --link-color-active: #fff;
  --link-color-active-bg: #1f1c2e;
  --projects-section: #fff;
  --message-box-hover: #fafcff;
  --message-box-border: #e9ebf0;
  --more-list-bg: #ffffff; /* Changed from rgb(124, 0, 0) */
  --more-list-bg-hover: #ffffff; /* Changed from rgb(124, 0, 0) */
  --more-list-shadow: rgba(209, 209, 209, 0.4);
  --button-bg: #1f1c24;
  --search-area-bg: rgb(199, 0, 0);
  --star: #1ff1c2e;
  --message-btn:#ffffff; /* Changed from rgb(124, 0, 0) */
}

.dark:root {
  --app-container: #1f1d2b;
  --app-container: #111827;
  --main-color: #fff;
  --secondary-color: rgba(255, 255, 255, 0.8);
  --projects-section: #1f2937;
  --link-color: rgba(255, 255, 255, 0.8);
  --link-color-hover: #1f1c2e;
  --link-color-active-bg: #1f1c2e;
  --button-bg: #1f2937;
  --search-area-bg: #1f2937;
  --message-box-hover: #111827;
  --message-box-border: #1f1c2e;
  --star: #ffd92c;
  --light-font: rgba(255, 255, 255, 0.8);
  --more-list-bg: #1f1c2e;
  --more-list-bg-hover: #1f1c2e;
  --more-list-shadow: #1f1c2e;
  --message-btn: #1f1c2e;
}
.alert {
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
        font-family: Arial, sans-serif;
        font-size: 1rem;
        display: block;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        opacity: 1;
        transition: opacity 0.5s ease-out;
    }
    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }

    .alert-warning {
        color: #856404;
        background-color: #fff3cd;
        border-color: #ffeeba;
    }

    .alert-info {
        color: #0c5460;
        background-color: #d1ecf1;
        border-color: #bee5eb;
    }

    @keyframes fadein {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    @keyframes fadeout {
        from {opacity: 1;}
        to {opacity: 0;}
    }
</style>

<div class="layout">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="sidebar">
                <div class="logo-details">
                    <div class="logo_name">Power Gym</div>
                    <i class='bx bx-menu' id="btn"></i>
                </div>
                <ul class="nav-list">
                    <li>
                        <a href="/dashboard" class="{{ request()->is('dashboard') || request()->is('visualizations') ? 'active' : '' }}">
                            <i class='bx bx-tachometer'></i>
                            <span class="links_name">Admin Dashboard</span>
                        </a>
                        <span class="tooltip">Admin Dashboard</span>
                    </li>
                    <li>
                        <a href="/home" class="{{ request()->is('home') ? 'active' : '' }}">
                            <i class='bx bx-home'></i>
                            <span class="links_name">Home</span>
                        </a>
                        <span class="tooltip">Home</span>
                    </li>
                    <li>
                        <a href="/user-manager" class="{{ request()->is('user-manager') ? 'active' : '' }}">
                            <i class='bx bx-user'></i>
                            <span class="links_name">User Manager</span>
                        </a>
                        <span class="tooltip">User Manager</span>
                    </li>
                    <li>
                    <a href="/entrainement" class="{{ request()->is('entrainement') || request()->is('entrainement/*') ? 'active' : '' }}">
                            <i class='bx bx-bar-chart-alt-2'></i>
                            <span class="links_name">Entrainement</span>
                        </a>
                        <span class="tooltip">Entrainement</span>
                    </li>

                    <li class="dropdown">
                    <a href="/events" class="{{ request()->is('events', 'events/create','calendar', 'events/*/edit') ? 'active' : '' }}">
                        <i class='fas fa-dumbbell'></i>
                        <span class="links_name">events</span>
                      </a>
                      <span class="tooltip">Events</span>
                      <div class="dropdown-content">
                        <a href="/events" class="{{ request()->is('events')  ? 'active' : '' }}">
                          <i class='fas fa-running'></i><span class="links_name">Events</span>
                        </a>
                        <a href="/calendar" class="{{ request()->is('calendar') ? 'active' : '' }}">
                        <i class='bx bx-calendar'></i><span class="links_name">Calendar</span>
                        </a>
                        <!-- Add additional dropdown items here as needed -->
                      </div>
                    </li>


                    

                    <li>
                    <a href="/categories" class="{{ request()->is('categories', 'categories/create', 'categories/*/edit') ? 'active' : '' }}">

                            <i class="fas fa-trophy"></i>
                            <span class="links_name">Category</span>
                        </a>
                        <span class="tooltip">Category</span>
                    </li>
                    <li>
                    <a href="/products" class="{{ request()->is('products', 'products/create', 'products/*/edit', 'products/*') ? 'active' : '' }}">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="links_name">Product</span>
                        </a>
                        <span class="tooltip">Product</span>
                    </li>

                    <li class="dropdown" >
                    <a href="/recommendation" class="{{ request()->is('recommendation', 'recommendations/*', 'feedback', 'feedback/*') ? 'active' : '' }}">
                            <i class="fas fa-heart"></i>
                            <span class="links_name">Services</span>
                        </a>
                        <span class="tooltip">Services</span>
                        <div class="dropdown-content">
                            <a href="/recommendation" class="{{ request()->is('recommendation') ? 'active' : '' }}">
                                <i class="fas fa-thumbs-up"></i><span class="links_name">Recommendation</span>
                            </a>
                            <a href="/feedback" class="{{ request()->is('feedback') ? 'active' : '' }}">
                                <i class="fas fa-comment"></i><span class="links_name">Feedback</span>
                            </a>
                        </div>
                    </li>


                  

                    <li class="profile">
                    <div class="profile-details">
                          <!-- Display User Email -->
                          <span id="user-email">{{ Auth::user()->name }}</span>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                          <!-- Logout Icon, when clicked, submits the logout form -->
                          <i class='bx bx-log-out' id="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></i>
                      </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>

        <div class="home-section">
        {{-- resources/views/components/flash-messages.blade.php --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
@endif

@if (session('info'))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>
@endif

            @yield('content')
          </div>
       
    </div>
</div>
</body>
<script>
document.addEventListener("DOMContentLoaded", function() {
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");
    let feedbackLink = document.getElementById("feedback-link"); // Get the feedback link
    let dashboardSection = document.getElementById("dashboard"); // Assume this is the ID of the dashboard section

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange();
    });

    searchBtn.addEventListener("click", () => { 
        sidebar.classList.toggle("open");
        document.querySelector(".main-content").classList.toggle("sidebar-open");
        menuBtnChange(); 
    });

    function menuBtnChange() {
        if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            document.querySelector(".home-section").style.marginLeft = "250px";
            document.querySelector(".home-section").style.width = "calc(100% - 250px)";
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            document.querySelector(".home-section").style.marginLeft = "90px";
            document.querySelector(".home-section").style.width = "calc(100% - 90px)";
        }
    }
    
    // Listen for clicks on the Feedback link
    feedbackLink.addEventListener("click", function() {
        // Change the dashboard background color to white
        dashboardSection.style.backgroundColor = "#1f1c2e";
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const dropBtn = document.querySelector('.dropbtn');
    dropBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const dropdownContent = this.nextElementSibling;
        dropdownContent.style.display = dropdownContent.style.display === 'flex' ? 'none' : 'flex';
    });
});
document.addEventListener('DOMContentLoaded', (event) => {
        // Select all elements with class 'alert' and loop through them
        document.querySelectorAll('.alert').forEach((element) => {
            // Set a timeout to fade out the alert
            setTimeout(() => {
                element.style.opacity = '0';
                // Optional: Remove the element from DOM after fading out
                setTimeout(() => element.remove(), 300); // Adjust timing if needed
            }, 5000); // Adjust the timing for how long before the alert starts to fade
        });
    });
document.addEventListener("DOMContentLoaded", function() {
    // Get the current URL path
    const path = window.location.pathname;

    // Check if the current path is recommendation or feedback
    if (path.includes('/recommendation') || path.includes('/feedback')) {
        // Get the Services menu item
        const servicesMenuItem = document.getElementById('services-menu-item');

        // Add the 'active' class to the Services menu item
        servicesMenuItem.classList.add('active');
    }
});
document.addEventListener("DOMContentLoaded", function() {
    // Get the current URL path
    const path = window.location.pathname;

    // Check if the current path is recommendation or feedback
    if (path.includes('/calendar') || path.includes('/events')) {
        // Get the Services menu item
        const servicesMenuItem = document.getElementById('calendar-menu-item');

        // Add the 'active' class to the Services menu item
        servicesMenuItem.classList.add('active');
    }
});
document.addEventListener("DOMContentLoaded", function() {
    // Select all dropdown buttons
    const dropdownBtns = document.querySelectorAll('.dropbtn');
    
    // Iterate over each button and add click event
    dropdownBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const dropdownContent = this.nextElementSibling;
            // Toggle display
            dropdownContent.style.display = dropdownContent.style.display === 'none' ? 'flex' : 'none';
        });
    });
});
document.addEventListener('click', function(event) {
    if (!event.target.matches('.dropbtn')) {
        const dropdowns = document.getElementsByClassName('dropdown-content');
        for (let i = 0; i < dropdowns.length; i++) {
            let openDropdown = dropdowns[i];
            if (openDropdown.style.display === 'flex') {
                openDropdown.style.display = 'none';
            }
        }
    }
});

</script>

</html>
