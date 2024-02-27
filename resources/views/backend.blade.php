<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

    <title>Admin - Power Gym</title>

    <!DOCTYPE html>
<html>
<head>
  <title>Admin - Power Gym</title>
</head>
<style>
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
  color: #000000; /* Change text color for visibility if needed */
}

.sidebar a.active i {
  color: #000000; /* Change icon color for visibility if needed */
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
#user-email{
    align-items: center;
    color: #E4E9F7;
}
#logout{
  position: relative;
  right: 0cm;
 cursor: pointer;

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

</style>



<div class="layout">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="sidebar">
            <div class="logo-details">
                
                <div class="logo_name">Power Gym</div>
                <i class='bx bx-menu' id="btn" ></i>
            </div>
            <ul class="nav-list">
              <li>
              <a id="dashboard-link" href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <i class='bx bx-tachometer'></i>
                <span class="links_name">Admin Dashboard</span>
              </a>
                 <span class="tooltip" >Admin Dashboard</span>
              </li>
              <li>
               <a href="#">
                 <i class='bx bx-user' ></i>
                 <span class="links_name">User Manager</span>
               </a>
               <span class="tooltip">User Manager</span>
             </li>
             <li>
               <a href="#">
               <i class='bx bx-bar-chart-alt-2' ></i>
                 <span class="links_name">Entrainement</span>
               </a>
               <span class="tooltip" >Entrainement</span>
             </li>
             <li>
               <a href="{{ route('events.index') }}" class="{{ request()->is('events.index') ? 'active' : '' }}">
               <i class='bx bx-bar-chart-alt-2' ></i>
                 <span class="links_name">Evenement</span>
               </a>
               <span class="tooltip" >Evenement</span>
             </li>
             <li>
               <a href="#">
               <i class="fas fa-shopping-cart"></i>
                 <span class="links_name">Produit</span>
               </a>
               <span class="tooltip">Produit</span>
             </li>
             <li>
              <a href="{{ route('categories.index') }}" class="{{ request()->is('categories.index') ? 'active' : '' }}">
              <i class="fas fa-star"></i>
                <span class="links_name">Category</span>
              </a>
              <span class="tooltip">Category</span>
            </li>
             <li>
             <a id="feedback-link" href="/feedback" class="{{ request()->is('feedback') ? 'active' : '' }}">
              <i class="fas fa-star"></i>
               <span class="links_name">Feedback</span>
            </a>
               <span class="tooltip">Feedback</span>
             </li>
             
        
             <li class="profile">
             <div class="profile-details">
               <!--<img src="profile.jpg" alt="profileImg">-->
               <div class="name_job">
                <span id="user-email"></span>
                <span id="job" style="color:rgb(105, 105, 105)"></span>
                
                <i class='bx bx-log-out' id="logout"  ></i>
               </div>
             </div>
         </li>
            </ul>
          </div>
                </nav>
                <!-- Main content where child views will be injected -->
             
            </div>
        </div>
        <div class="home-section">
            @yield('content')
          </div>
       
    </div>
</div>
</body>
<script>
document.addEventListener("DOMContentLoaded", function() {
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let feedbackLink = document.getElementById("feedback-link"); // Get the feedback link
    let searchBtn = document.querySelector(".bx-search");

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
</script>

</html>