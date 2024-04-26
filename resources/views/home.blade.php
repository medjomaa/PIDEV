@extends('dashboard')
@section('title', 'Power Gym - Feedback')
@section('content')
<!DOCTYPE html>
<header>
<title>Home</title>
    <style>
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Roboto:wght@300;400;500;700&display=swap");
  :root {
  --primary-light: #8abdff;
  --primary: #6d5dfc;
  --primary-dark: #5b0eeb;
  --white: #ffffff;
  --greyLight-1: #e4ebf5;
  --greyLight-2: #c8d0e7;
  --greyLight-3: #bec8e4;
  --greyDark: #9baacf;
}

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
  font-size: 62.5%;
  overflow-y: scroll;
  background: var(--greyLight-1);
}
@media screen and (min-width: 900px) {
  html {
    font-size: 75%;
  }
}

        *,
        *::before,
        *::after {
          box-sizing: border-box;
          padding: 0;
          margin: 0;
        }
        
        nav {
          user-select: none;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          -o-user-select: none;
        }
        
        nav ul,
        nav ul li {
          outline: 0;
        }
        
        nav ul li a {
          text-decoration: none;
        }
       p,h2{
        color:black;
       }

        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: "Nunito", sans-serif;
            background-color: #000; /* Black background */
        }

        main {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
            background-image: url('https://img.freepik.com/free-vector/colorful-abstract-background_23-2148807053.jpg');
            background-size: cover;
            color: #fff; /* White text for contrast */
        }

        .content {
            display: flex;
            flex: 1; /* Take up all available space */
            padding: 20px;
        }

        .left-content, .right-content {
            flex: 1; /* Each takes half of the available space */
            display: flex;
            border-left: 5px solid rgba(255, 0, 0, 0.5); /* Subtle red hint on the left border */
            box-shadow: 0 2px 5px rgba(255, 0, 0, 0.2); 
            background-color: rgba(27, 27, 50, 0.85); 
            flex-direction: column;
            gap: 20px;
        }

        /* Adjusted styles for better readability and fit */
        .btn, .activities h1, .weekly-schedule h1, .personal-bests h1, .friends-activity h1 {
            color: white; /* Red highlights */
        }

        .btn {
            background: #000; /* Black background for buttons */
            border: 1px solid red; /* Red border for buttons */
        }

        /* Ensure images and overlay content fit well */
        .image-container, .overlay, .activity-container, .personal-bests-container {
            width: 100%;
            height: auto;
        }
                
                
        
        .logo {
          display: none;
        }
        
        .nav-item {
          position: relative;
          display: block;
        }
        
        .nav-item a {
          position: relative;
          display: flex;
          flex-direction: row;
          align-items: center;
          justify-content: center;
          color: #fff;
          font-size: 1rem;
          padding: 15px 0;
          margin-left: 10px;
          border-top-left-radius: 20px;
          border-bottom-left-radius: 20px;
        }
        
        .nav-item b:nth-child(1) {
          position: absolute;
          top: -15px;
          height: 15px;
          width: 100%;
          background: #fff;
          display: none;
        }
        
        .nav-item b:nth-child(1)::before {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          border-bottom-right-radius: 20px;
          background: rgb(73, 57, 113);
        }
        
        .nav-item b:nth-child(2) {
          position: absolute;
          bottom: -15px;
          height: 15px;
          width: 100%;
          background: #fff;
          display: none;
        }
        
        .nav-item b:nth-child(2)::before {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          border-top-right-radius: 20px;
          background: rgb(73, 57, 113);
        }
        
        .nav-item.active b:nth-child(1),
        .nav-item.active b:nth-child(2) {
          display: block;
        }
        
        .nav-item.active a {
          text-decoration: none;
          color: #000;
          background: rgb(254, 254, 254);
        }
        
        .nav-icon {
          width: 60px;
          height: 20px;
          font-size: 20px;
          text-align: center;
        }
        
        .nav-text {
          display: block;
          width: 120px;
          height: 20px;
        }
        
        /* CONTENT */
        
        .content {
          display: grid;
          grid-template-columns: 75% 25%;
        }
        
        /* LEFT CONTENT */
        
        .left-content {
        display: grid;
        grid-template-rows: 50% 50%;
        margin: 15px;
        padding: 20px;
        border-radius: 15px;
        position: relative; /* Add this line */
      }

    
        
        /* ACTIVITIES */
        
        .activities h1 {
          margin: 0 0 20px;
          font-size: 1.4rem;
          font-weight: 700;
        }
        
        .activity-container {
          display: grid;
          grid-template-columns: repeat(5, 1fr);
          grid-template-rows: repeat(2, 150px);
          column-gap: 10px;
        }
        
        .img-one {
          grid-area: 1 / 1 / 2 / 2;
        }
        
        .img-two {
          grid-area: 2 / 1 / 3 / 2;
        }
        
        .img-three {
          display: block;
          grid-area: 1 / 2 / 3 / 4;
        }
        
        .img-four {
          grid-area: 1 / 4 / 2 / 5;
        }
        
        .img-five {
          grid-area: 1 / 5 / 2 / 6;
        }
        
        .img-six {
          display: block;
          grid-area: 2 / 4 / 3 / 6;
        }
        
        .image-container {
          position: relative;
          margin-bottom: 10px;
          box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 3px;
          border-radius: 10px;
        }
        
        .image-container img {
          width: 100%;
          height: 100%;
          border-radius: 10px;
          object-fit: cover;
        }
     
        .overlay {
          position: absolute;
          display: flex;
          flex-direction: column;
          align-items: flex-end;
          justify-content: flex-end;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: linear-gradient(
            180deg,
            transparent,
            transparent,
            rgba(3, 3, 185, 0.5)
          );
          border-radius: 10px;
          transition: all 0.6s linear;
        }
        
        .image-container:hover .overlay {
          opacity: 0;
        }
        
        .overlay h3 {
          margin-bottom: 8px;
          margin-right: 10px;
          color: #fff;
        }
        
        /* LEFT BOTTOM */
        
        .left-bottom {
          display: grid;
          grid-template-columns: 55% 40%;
          gap: 40px;
        }
        
        /* WEEKLY SCHEDULE */
        
        .weekly-schedule {
          display: flex;
          flex-direction: column;
        }
        
        .weekly-schedule h1 {
          margin-top: 20px;
          font-size: 1.3rem;
          font-weight: 700;
        }
        
        .calendar {
          margin-top: 10px;
        }
        
        .day-and-activity {
          display: grid;
          grid-template-columns: 15% 60% 25%;
          align-items: center;
          border-radius: 14px;
          margin-bottom: 5px;
          color: #484d53;
          box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 3px;
        }
        
        .activity-one {
          background-color: rgb(124, 136, 224, 0.5);
          background-image: linear-gradient(
            240deg,
            rgb(124, 136, 224) 0%,
            #c3f4fc 100%
          );
        }
        
        .activity-two {
          background-color: #aee2a4a1;
          background-image: linear-gradient(240deg, #e5a243ab 0%, #f7f7aa 90%);
        }
        
        .activity-three {
          background-color: #ecfcc376;
          background-image: linear-gradient(240deg, #97e7d1 0%, #ecfcc3 100%);
        }
        
        .activity-four {
          background-color: #e6a7c3b5;
          background-image: linear-gradient(240deg, #fc8ebe 0%, #fce5c3 100%);
        }
        
        .day {
          display: flex;
          flex-direction: column;
          align-items: center;
          transform: translateY(-10px);
        }
        
        .day h1 {
          font-size: 1.6rem;
          font-weight: 600;
        }
        
        .day p {
          text-transform: uppercase;
          font-size: 0.9rem;
          font-weight: 600;
          transform: translateY(-3px);
        }
        
        .activity {
          border-left: 3px solid #484d53;
        }
        
        .participants {
          display: flex;
          margin-left: 20px;
        }
        
        .participants img {
          width: 28px;
          height: 28px;
          border-radius: 50%;
          z-index: calc(2 * var(--i));
          margin-left: -10px;
          box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 3px;
        }
        
        .activity h2 {
          margin-left: 10px;
          font-size: 1.25rem;
          font-weight: 600;
          border-radius: 12px;
        }
        
        .btn {
          display: block;
          padding: 8px 24px;
          margin: 10px auto;
          font-size: 1.1rem;
          font-weight: 500;
          outline: none;
          text-decoration: none;
          color: #484b57;
          background: rgba(255, 255, 255, 0.9);
          box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);
          border: 1px solid rgba(255, 255, 255, 0.3);
          border-radius: 25px;
          cursor: pointer;
        }
        
        .btn:hover,
        .btn:focus,
        .btn:active,
        .btn:visited {
          transition-timing-function: cubic-bezier(0.6, 4, 0.3, 0.8);
          animation: gelatine 0.5s 1;
        }
        
        @keyframes gelatine {
          0%,
          100% {
            transform: scale(1, 1);
          }
          25% {
            transform: scale(0.9, 1.1);
          }
          50% {
            transform: scale(1.1, 0.9);
          }
          75% {
            transform: scale(0.95, 1.05);
          }
        }
        
        /* PERSONAL BESTS */
        
        .personal-bests {
          display: block;
        }
        h1{
            color: #000;
        }
        .personal-bests h1 {
          margin-top: 20px;
          font-size: 1.3rem;
          font-weight: 700;
        }
        
        .personal-bests-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: repeat(2, 150px);
    gap: 10px;
    margin-top: 10px;
}

.best-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    border-radius: 15px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 3px;
    background-size: cover; /* Ensure the background image covers the entire element */
    overflow: hidden; /* Prevents any overflow from the background */
}

.overlay {
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.); /* Optional: darkens the background image for better readability */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 10px;
    box-sizing: border-box;
}

.product-name, .product-description, .product-actions, .price-tag {
    z-index: 2;
    color:white;
}
.product-name {
    font-size: 1rem;
    font-weight: bold;
    color: white;
    text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
    z-index: 2;
}

.product-description {
    font-size: 0.8rem;
    color: white;
    z-index: 2;
}

.product-actions {
    display: flex;
    justify-content: space-around;
    width: 100%;
}
.price-tag {
    position: absolute;
    bottom: 10px;
    right: 10px;
    background-color: rgba(0,0,0,0.7);
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    font-weight: bold;
    font-size: 0.9rem;
}
/* Add styles for the images to maintain aspect ratio and fit within the boxes */
.box-one img, .box-two img, .box-three img {
    width: 100%; /* makes the image fill the width of the box */
    height: auto; /* maintains the aspect ratio */
    object-fit: cover; /* cover the box without breaking aspect ratio */
}

/* Specific styles for different boxes if needed */
.box-one {
    background-color: rgba(185, 159, 237, 0.6);
}

.box-two {
    background-color: rgba(238, 184, 114, 0.6);
}

.box-three {
    background-color: rgba(184, 224, 192, 0.6);
}

        /* RIGHT CONTENT */
        
        .right-content {
          display: flex;
          flex-direction: column;
          align-items: center; /* Centers children horizontally in the container */
          justify-content: flex-start; /* Aligns children to the start of the container vertically */
          background: rgba(27, 27, 50, 0.85);
          margin: 15px 15px 15px 0;
          padding: 10px 0;
          border-radius: 15px;
        }

        
        /* USER INFO */
        
        .user-info {
          display: grid;
          grid-template-columns: 30% 55% 15%;
          align-items: center;
          padding: 0 10px;
        }
        
        .icon-container {
          display: flex;
          gap: 15px;
        }
        
        .user-info h4 {
          margin-left: 40px;
        }
        
        .user-info img {
          width: 40px;
          aspect-ratio: 1/1;
          border-radius: 50%;
        }
        
        /* ACTIVE CALORIES  */
        
        .active-calories {
          display: flex;
          flex-direction: column;
          align-items: center;
          background-color: rgb(214, 227, 248);
          padding: 0 10px;
          margin: 15px 10px 0;
          border-radius: 15px;
          box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 3px;
        }
        
        .active-calories h1 {
          margin-top: 10px;
          font-size: 1.2rem;
        }
        
        .active-calories-container {
          display: flex;
          flex-direction: row;
          align-items: center;
          gap: 10px;
        }
        
        .calories-content p {
          font-size: 1rem;
        }
        
        .calories-content p span {
          font-weight: 700;
        }
        
        .box {
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column;
          position: relative;
          padding: 10px 0;
          /* width: 200px; */
        }
        
        .box h2 {
          position: relative;
          text-align: center;
          font-size: 1.25rem;
          color: rgb(91, 95, 111);
          font-weight: 600;
        }
        
        .box h2 small {
          font-size: 0.8rem;
          font-weight: 600;
        }
        
        .circle {
          position: relative;
          width: 80px;
          aspect-ratio: 1/1;
          background: conic-gradient(
            from 0deg,
            #590b94 0%,
            #590b94 0% var(--i),
            #b3b2b2 var(--i),
            #b3b2b2 100%
          );
          border-radius: 50%;
          display: flex;
          justify-content: center;
          align-items: center;
        }
        
        .circle::before {
          content: "";
          position: absolute;
          inset: 10px;
          background-color: rgb(214, 227, 248);
          border-radius: 50%;
        }
        
        /* MOBILE PERSONAL BESTS  */
        
        .mobile-personal-bests {
          display: none;
        }
        
        /* FRIEND ACTIVITIES  */
        
        .friends-activity {
          display: flex;
          flex-direction: column;
        }
        
        .friends-activity h1 {
          font-size: 1.2rem;
          font-weight: 700;
          margin: 15px 0 10px 15px;
        }
        
        .card-container {
          display: flex;
          flex-direction: column;
          gap: 10px;
        }
        
        .card {
          background-color: #fff;
          margin: 0 10px;
          padding: 5px 7px;
          border-radius: 15px;
          box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 3px;
        }
        
        .card-two {
          display: block;
        }
        
        .card-user-info {
          display: flex;
          flex-direction: row;
          align-items: center;
          padding-bottom: 5px;
        }
        
        .card-user-info img {
          width: 25px;
          aspect-ratio: 1/1;
          border-radius: 50%;
          object-fit: cover;
        }
        
        .card-user-info h2 {
          font-size: 1rem;
          font-weight: 700;
          margin-left: 5px;
        }
        
        .card-img {
          display: block;
          width: 100%;
          aspect-ratio: 7/4;
          margin-bottom: 10px;
          object-fit: cover;
          border-radius: 10px;
          object-position: 50% 30%;
        }
        
        .card p {
          font-size: 0.9rem;
          padding: 0 5px 5px;
        }
        
        @media (max-width: 1500px) {
          main {
            grid-template-columns: 6% 94%;
          }
        
          
        
          .logo {
            display: block;
            width: 30px;
            margin: 20px auto;
          }
        
          .nav-text {
            display: none;
          }
        
          .content {
            grid-template-columns: 70% 30%;
          }
        }
        
        @media (max-width: 1310px) {
          main {
            grid-template-columns: 8% 92%;
            margin: 30px;
          }
        
          .content {
            grid-template-columns: 65% 35%;
          }
        
          .day-and-activity {
            margin-bottom: 10px;
          }
        
          .btn {
            padding: 8px 16px;
            margin: 10px 0;
            margin-right: 10px;
            font-size: 1rem;
          }
        
          .personal-bests-container {
            grid-template-rows: repeat(3, 98px);
            gap: 15px;
          }
        
          .box-one {
            flex-direction: row;
            justify-content: space-between;
            grid-area: 1 / 1 / 2 / 3;
            padding: 10px;
            font-size: 0.9rem;
          }
        
          .box-one img {
            max-width: 80px;
          }
        
          .box-two {
            flex-direction: row;
            justify-content: space-between;
            grid-area: 2 / 1 / 3 / 3;
          }
        
          .box-two img {
            max-width: 70px;
            align-self: center;
          }
        
          .box-three {
            flex-direction: row;
            justify-content: space-between;
            grid-area: 3 / 1 / 4 / 3;
          }
        
          .box-three img {
            max-width: 60px;
            align-self: center;
          }
            
            .right-content {
                grid-template-rows: 4% 20% 76%;
                margin: 15px 15px 15px 0;
            }
        }
        
        @media (max-width: 1150px) {
          .content {
            grid-template-columns: 60% 40%;
          }
        
          .left-content {
            grid-template-rows: 50% 50%;
            margin: 15px;
            padding: 20px;
          }
        
          .btn {
            padding: 8px 8px;
            font-size: 0.9rem;
          }
        
          .personal-bests-container {
                grid-template-rows: repeat(3, 70px);
            gap: 10px;
          }
        
          .activity-container {
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 150px);
          }
        
          .img-one {
            grid-area: 1 / 1 / 2 / 2;
          }
        
          .img-two {
            grid-area: 2 / 1 / 3 / 2;
          }
        
          .img-three {
            display: none;
          }
        
          .img-four {
            grid-area: 1 / 2 / 2 / 3;
          }
        
          .img-five {
            grid-area: 1 / 3 / 2 / 4;
          }
        
          .img-six {
            grid-area: 2 / 2 / 3 / 4;
          }
        
          .left-bottom {
            grid-template-columns: 100%;
            gap: 0;
          }
        
          .right-content {
            grid-template-rows: 4% 19% 36% 41%;
          }
        
          .personal-bests {
            display: none;
          }
        
          .mobile-personal-bests {
            display: block;
            margin: 0 10px;
          }
        
          .mobile-personal-bests h1 {
            margin-top: 20px;
            font-size: 1.2rem;
          }
        
          .card-two {
            display: none;
          }
        
          .card-img {
            aspect-ratio: 16/9;
          }
        }
        
        @media (max-width: 1050px) {
             .right-content {
              grid-template-rows: 4% 19% 37% 40%;
          }
        }
        
        @media (max-width: 910px) {
          main {
            grid-template-columns: 10% 90%;
            margin: 20px;
          }
        
          .content {
            grid-template-columns: 55% 45%;
          }
        
          .left-content {
            grid-template-rows: 50% 50%;
            padding: 30px 20px 20px;
          }
        
          .activity-container {
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 150px);
          }
        
          .img-one {
            grid-area: 1 / 1 / 2 / 2;
          }
        
          .img-two {
            grid-area: 2 / 1 / 3 / 2;
          }
        
          .img-three {
            display: none;
          }
        
          .img-four {
            grid-area: 1 / 2 / 2 / 3;
          }
        
          .img-five {
            grid-area: 2 / 2 / 3 / 3;
          }
        
          .img-six {
            display: none;
          }
        }
        
        @media (max-width: 800px) {
          .content {
            grid-template-columns: 52% 48%;
          }
        }
        
        @media (max-width: 700px) {
          main {
            grid-template-columns: 15% 85%;
          }
        
          .content {
    display: flex;
    flex-direction: row; /* Adjust if necessary to match your layout */
    justify-content: flex-start; /* Align children to the start of the container */
    padding: 20px;
    gap: 20px; /* Adds space between items */
}
        
          /* .left-content {
            grid-area: leftContent;
                grid-template-rows: 45% 55%;
            padding: 10px 20px 10px;
          } */
        
          .right-content {
            grid-area: rightContent;
                grid-template-rows: 5% 40% 50%;
            margin: 15px 15px 0 15px;
            padding: 10px 0 0;
            gap: 15px;
          }
        
          .activities,
          .weekly-schedule {
            margin-top: 10px;
          }
        
          .active-calories-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
          }
        
          .friends-activity {
            display: none;
          }
        }
     /* General styling for the event section */
/* General styling for the event section */
.event-section {
  font-family: 'Arial', sans-serif;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  margin-top: 20px;
}

.section-title {
  text-align: center;
  color: #8B0000; /* Darker, blood red for section title */
  margin-bottom: 30px;
}

.event-cards-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
}

/* Styling for individual event cards with black to red gradient background */
.event-card {
  background-image: url("https://png.pngtree.com/background/20220718/original/pngtree-red-and-black-cool-abstract-sports-background-picture-image_1657984.jpg");
  background-size: cover;
  background-position: center;
  border-radius: 15px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  width: 100%;
  cursor: pointer;
  margin-bottom: 20px;
  position: relative; /* Needed for positioning the overlay */
  color: #FFFFFF; /* Sets a default text color for better readability */
}

.event-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.7); /* Starts darker */
  border-radius: 15px; /* Matches the card's border radius */
  transition: opacity 1.5s ease; /* Smooth transition for opacity */
  opacity: 1; /* Visible by default */
}

.event-card:hover::before {
  opacity: 0; /* Less visible on hover for a clearer effect */
}

.event-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 15px rgba(0,0,0,0.2);
}

.event-card-header,
.event-card-body {
  padding: 20px;
  position: relative; /* Ensures text is above the overlay */
  z-index: 1;
}

.event-title {
  font-size: 24px;
  margin-bottom: 10px;
  text-shadow: 2px 2px 4px rgba(0,0,0,0.5); /* Adds shadow for better readability */
  color: white;
}

.event-date {
  color: #FFD700; /* Gold for dates to make them stand out */
  font-size: 18px;
  margin-bottom: 20px;
  font-weight: bold; /* Adds emphasis */
}

.event-description {
  font-size: 16px; /* Adjusted for readability */
  margin-bottom: 15px;
  line-height: 1.5; /* Improves text flow and readability */
  color: white;
}

.event-type {
  font-weight: bold;
  background: #FF6347; /* Tomato red for a vibrant tag look */
  color: #FFFFFF;
  padding: 5px 10px;
  display: inline-block;
  border-radius: 5px; /* Rounded edges for the event type tag */
  box-shadow: 1px 1px 3px rgba(0,0,0,0.3); /* Subtle shadow for depth */
  text-transform: uppercase; /* Makes the event type stand out */
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 2; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
  border-radius: 10px; /* Optional: for rounded corners */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
.activities {
    position: relative; /* To position the user-info absolutely within */
    padding-top: 60px; /* Adjust based on your needs, to make space for user info */
}

.left-content {
    position: relative; /* Ensures the user-info can be positioned absolutely within */
    padding-top: 20px; /* Provides space for the user-info */
}

.user-info {
    position: absolute;
    top: 0;
    left: 0; /* Align to the far left */
    display: flex;
    align-items: center;
    gap: 10px; /* Spacing between image and text */
    background-color: rgba(0, 0, 0, 0.5); /* Optional: for better visibility */
    padding: 5px;
    border-radius: 5px;
    margin: 10px; /* Adjust as needed for spacing */
}

#user-name {
    color: #FFF; /* Text color */
    font-family: 'Arial', sans-serif; /* Font family */
    font-size: 16px; /* Font size */
    font-weight: bold; /* Bold text */
}

.user-profile-image {
    width: 40px; /* Image width */
    height: 40px; /* Image height to match width */
    border-radius: 50%; /* Circular image */
    vertical-align: middle; /* Aligns the image vertically to the middle */
}


/*  CLOCK  */
.clock {
  background-color: rgba(0, 0, 0, 0.8); /* Darker background for contrast */
  box-shadow: 0.3rem 0.3rem 0.6rem var(--greyLight-2), -0.2rem -0.2rem 0.5rem var(--white);
  border: 2px solid rgba(255, 0, 0, 0.5); /* Red border with some transparency */
  border-radius: 50%;
  width: 12rem;
  grid-column: 2/3;
  grid-row: 1/3;
  height: 12rem;
  margin: 5px auto; /* Center horizontally */
  margin-bottom: 20px; /* Spacing between the clock and the next element */
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  transition: all 0.3s ease; /* Smooth transition for hover effects */
}



.clock .hand {
  position: absolute;
  transform-origin: bottom;
  bottom: 6rem;
  border-radius: 0.2rem;
  z-index: 200;
}
.clock .hours {
  width: 0.4rem;
  height: 3.2rem;
  background: rgba(255, 0, 0, 0.9); /* Red hours hand */
}
.clock .minutes {
  width: 0.4rem;
  height: 4.6rem;
  background: rgba(255, 255, 255, 0.8); /* White minutes hand for contrast */
}
.clock .seconds {
  width: 0.2rem;
  height: 5.2rem;
  background: rgba(255, 0, 0, 0.9); /* Red seconds hand */
}
.clock .point {
  position: absolute;
  width: 0.8rem;
  height: 0.8rem;
  border-radius: 50%;
  background: rgba(255, 0, 0, 0.9); /* Red center point */
  z-index: 300;
}

/* Simplify the marker design for a sleeker look */
.clock .marker {
  display: none; /* Optionally, hide the detailed markers for a cleaner look */
}

/* Additional styles for the clock hands and markers can follow the theme */

.clock .marker {
  width: 95%;
  height: 95%;
  border-radius: 50%;
  position: absolute; /* Adjusted to position absolutely within the clock */
  border: 1px solid #fff; /* White border for visibility */
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%); /* Center the marker within the clock */
  display: flex; /* Enables center alignment of inner elements */
  justify-content: center; /* Center items horizontally */
  align-items: center; /* Center items vertically */
}

/* Individual markers for the hours */
.clock .marker__1, .clock .marker__2, .clock .marker__3, .clock .marker__4 {
  position: absolute;
  background: #fff; /* White background for visibility */
}

.clock .marker__1, .clock .marker__2 {
  width: 2%; /* Adjust width as necessary */
  height: 6%; /* Adjust height to extend towards the clock center */
}

.clock .marker__3, .clock .marker__4 {
  width: 6%; /* Adjust width to extend towards the clock center */
  height: 2%; /* Adjust height as necessary */
}

/* Positioning each marker at the respective quarter */
.clock .marker__1 {
  top: 10%;
  left: 50%;
  transform: translateX(-50%);
}

.clock .marker__2 {
  top: 90%;
  left: 50%;
  transform: translate(-50%, -100%);
}

.clock .marker__3 {
  left: 10%;
  top: 50%;
  transform: translateY(-50%);
}

.clock .marker__4 {
  left: 90%;
  top: 50%;
  transform: translate(-100%, -50%);
}

.digital-clock {
  color: #fff; /* White color for visibility */
  font-size: 2rem; /* Large font size for readability */
  text-align: center; /* Center the text */
  margin-top: 10px; /* Space between the analog clock and digital clock display */
  font-family: 'Nunito', sans-serif; /* Consistent font style */
}
/* Defining new color scheme with darker tones */
:root {
    --dark-red: red; /* Deep red for vibrant contrast */
    --dark-grey: #282c34; /* A dark shade of grey for backgrounds */
    --light-grey: #3c4049; /* A lighter shade of grey for containers */
    --orange: rgba(2, 27, 50, 0.8); /* Bright orange for accents */
    --black: #000000; /* Black for primary text and elements */
}

body {
    background-color: var(--black); /* Set the body background to black */
    color: var(--white); /* Set text color to white */
    font-family: Arial, sans-serif; /* Change font for better readability */
    margin: 0; /* Remove default margins */
    padding: 0; /* Remove default padding */
}

.user-info-section {
    background: linear-gradient(to bottom right, rgba(2, 27, 50, 0.8), rgba(0, 0, 0, 0.8));
    color: var(--white); /* Set text color to white */
    border-radius: 10px; /* Add border radius for rounded corners */
    padding: 20px; /* Add padding for spacing */
    margin: 20px auto 40px; /* Adjust margins for spacing */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5); /* Add box shadow for depth */
    max-width: 800px; /* Set maximum width for content */
}

.user-info-section h1, .user-info-section h2 {
    color: white; /* Set titles to deep red */
    font-weight: bold; /* Make titles bold */
}

.user-info-section p {
    color: var(--white); /* Set paragraph text color to white */
}

/* Specific styles for BMI and recommendations sections */
.user-bmi, .recommendations {
    background-color: var(--light-grey); /* Set background color for specific sections */
    padding: 15px; /* Add padding for spacing */
    margin-bottom: 20px; /* Add margin for spacing */
    border-left: 5px solid var(--orange); /* Add left border for accent */
    border-radius: 5px; /* Add border radius for rounded corners */
}

/* Styling for added cool effects and interactive elements */
.user-info-section p {
    background-color: var(--black); /* Set background color for paragraphs */
    padding: 10px; /* Add padding for spacing */
    border-radius: 5px; /* Add border radius for rounded corners */
    margin-bottom: 10px; /* Add margin for spacing */
    box-shadow: inset 0 2px 4px rgba(255, 255, 255, 0.1); /* Add inset box shadow for depth */
}

.user-info-section a {
    display: inline-block; /* Set display to inline block */
    background-color: var(--dark-red); /* Set background color for links */
    color: var(--white); /* Set text color to white */
    padding: 10px 20px; /* Add padding for spacing */
    border-radius: 5px; /* Add border radius for rounded corners */
    text-decoration: none; /* Remove default underline */
    font-weight: bold; /* Make text bold */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Add box shadow for depth */
    transition: background-color 0.3s ease; /* Add transition for smooth color change */
}

.user-info-section a:hover {
    background-color: linear-gradient(to bottom right, rgba(2, 27, 50, 0.8), rgba(0, 0, 0, 0.8)); /* Change background color on hover */
}

/* Enhancing hover effects for sections */
.user-bmi:hover, .recommendations:hover {
    transform: scale(1.02); /* Scale up on hover */
    box-shadow: 0 0 20px #8abdff; /* Add shadow on hover */
    transition: all 0.3s ease-in-out; /* Add transition for smooth effect */
}

.featured-products .box-one {
    background: linear-gradient(135deg, #FFD194, #D1913C); /* Warm gradient for box-one */
}

.featured-products .box-two {
    background: linear-gradient(135deg, #89F7FE, #66A6FF); /* Cool gradient for box-two */
}

.featured-products .box-three {
    background: linear-gradient(135deg, #FF9A8B, #FF6A88); /* Pink gradient for box-three */
}

.featured-products .overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;

    color: #333; /* Dark text for contrast */
    padding: 15px;
    border-radius: 0 0 15px 15px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}


.featured-products .overlay h2, .featured-products .overlay p {
    margin: 5px 0;
    color: red;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Shadow for text readability */
}

.featured-products .best-item {
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    gap: 20px;
    width: 100%;
    height: 100%;
    border-radius: 15px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 3px;
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.featured-products .price-tag {
    background-color: #FF6347;
    color: white;
    padding: 5px 10px;
    border-radius: 15px;
    width: fit-content;
    position: absolute;
    bottom: 20px;
    right: 20px;
    font-weight: bold;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.featured-products .best-item:hover {
    transform: scale(1.05);
    z-index: 10;
}

.featured-products .best-item:hover .overlay {
    background: rgba(255, 255, 255, 0.6);
}
/* Add hover effects for product cards */
.product-card:hover .overlay {
    background-color: rgba(0, 0, 0, 0.8); /* Darken on hover */
    transition: background-color 0.3s ease;
}

.product-actions {
    display: none; /* Initially hidden */
    text-align: center;
}

.product-card:hover .product-actions {
    display: block; /* Show on hover */
}

/* Add more CSS based on the enhancements above */

/* Styles for Add to Cart button */
.add-to-cart-btn {
  background-color: var(--primary); /* Use your primary color variable */
  color: var(--white);
  transition: background-color 0.3s;
}

.add-to-cart-btn:hover {
  background-color: var(--primary-dark); /* A darker shade for hover effect */
}

/* Styles for View Details button */
.view-details-btn {
  background-color: var(--primary-light);
  color: var(--white);
  transition: background-color 0.3s;
}

.view-details-btn:hover {
  background-color: var(--primary); /* Return to primary color on hover */
}


       </style>
</header>
<body>  



    <main>
   <section class="content">
        <div class="left-content">
          <div class="activities">

          <div class="user-info">
        <img src="{{ Auth::user()->profile_image ?: 'https://w7.pngwing.com/pngs/981/645/png-transparent-default-profile-united-states-computer-icons-desktop-free-high-quality-person-icon-miscellaneous-silhouette-symbol-thumbnail.png' }}" alt="User Profile Image" class="user-profile-image">
        <span id="user-name">Welcome {{ Auth::user()->name }}</span>
    </div>
</br>
<h1> Popular Categories</h1>
</br>
            <div class="activity-container">
              <div class="image-container img-one">
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/467cf682-03fb-4fae-b129-5d4f5db304dd" alt="tennis" />
                <div class="overlay">
                  <h3>Tennis</h3>
                </div>
              </div>

              <div class="image-container img-two">
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/3bab6a71-c842-4a50-9fed-b4ce650cb478" alt="hiking" />
                <div class="overlay">
                  <h3>Hiking</h3>
                </div>
              </div>

              <div class="image-container img-three">
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c8e88356-8df5-4ac5-9e1f-5b9e99685021" alt="running" />
                <div class="overlay">
                  <h3>Running</h3>
                </div>
              </div>

              <div class="image-container img-four">
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/69437d08-f203-4905-8cf5-05411cc28c19" alt="cycling" />
                <div class="overlay">
                  <h3>Cycling</h3>
                </div>
              </div>

              <div class="image-container img-five">
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e1a66078-1927-4828-b793-15c403d06411" alt="yoga" />
                <div class="overlay">
                  <h3>Yoga</h3>
                </div>
              </div>

              <div class="image-container img-six">
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/7568e0ff-edb5-43dd-bff5-aed405fc32d9" alt="swimming" />
                <div class="overlay">
                  <h3>Swimming</h3>
                </div>
              </div>
            </div>
          </div>
          
          <div class="left-bottom">
          <div class="weekly-schedule">
    <h1>Upcoming Events</h1>
    <div class="calendar">
        @foreach($events->sortByDesc('start_date')->take(4) as $event)
        @php
            // Example logic to determine the background gradient based on the event type
            $gradient = '';
            switch ($event->type) {
                case 'Swimming':
                    $gradient = 'linear-gradient(240deg, rgb(124, 136, 224) 0%, #c3f4fc 100%)';
                    break;
                case 'Yoga':
                    $gradient = 'linear-gradient(240deg, #e5a243ab 0%, #f7f7aa 90%)';
                    break;
                case 'Tennis':
                    $gradient = 'linear-gradient(240deg, #97e7d1 0%, #ecfcc3 100%)';
                    break;
                case 'Hiking':
                    $gradient = 'linear-gradient(240deg, #fc8ebe 0%, #fce5c3 100%)';
                    break;
                default:
                    $gradient = 'linear-gradient(240deg, #888 0%, #aaa 100%)'; // Default gradient
            }
        @endphp
        <div class="day-and-activity" style="background-image: {{ $gradient }};">
            <div class="day">
                <h1>{{ \Carbon\Carbon::parse($event->start_date)->format('d') }}</h1>
                <p>{{ \Carbon\Carbon::parse($event->start_date)->format('D') }}</p>
            </div>
            <div class="activity">
                <h2>{{ $event->title }}</h2>
                <div class="participants">
                    <p class="event-description">{{ $event->description }}</p>
                </div>
            </div>
            <button class="btn">{{ $event->type }}</button>
        </div>
        @endforeach
    </div>
</div>

<div class="personal-bests featured-products">
    <h1>Featured Products</h1>
    <div class="personal-bests-container">
    @foreach($products as $index => $product)
      <div class="best-item product-card" style="background-image: url('{{ $product->image }}');">
          <div class="overlay">
              <p class="product-name">{{ $product->name }}</p>
              <p class="product-description">{{ $product->description }}</p>
              <div class="product-actions">
                  <!-- Assign unique IDs based on the product's ID -->
                  <a href="/productshow"  class="btn add-to-cart-btn" id="add-to-cart-{{ $product->id }}">Add to Cart</a>
                  <a href="/products/{{ $product->id }}" class="btn view-details-btn" id="view-details-{{ $product->id }}">View Details</a>
              </div>
              <div class="price-tag">${{ $product->price }}</div>
          </div>
      </div>
      @endforeach
    </div>
</div>

          </div>

          
        </div>

        <div class="right-content">
         
       
          <div class="friends-activity">
            <!-- <h1>Friends Activity</h1>
            <div class="card-container">

              <div class="card">
                <div class="card-user-info">
                  <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/9290037d-a5b2-4f50-aea3-9f3f2b53b441" alt="" />
                  <h2>Jane</h2>
                </div>
                <img class="card-img" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/bef54506-ea45-4e42-a1b6-23a48f61c5e8" alt="" />
                <p>We completed the 30-Day Running Streak Challenge!🏃‍♀️🎉</p>
              </div>

              
            </div> --> 
            <!-- Clock -->
            <h1 class="section-title">Time</h1>
            <div class="clock">
            <div class="hand hours"></div>
            <div class="hand minutes"></div>
            <div class="hand seconds"></div>
            <div class="point"></div>
            <div class="marker">
              <span class="marker__1"></span>
              <span class="marker__2"></span>
              <span class="marker__3"></span>
              <span class="marker__4"></span>
            </div>
          </div>
          <div id="digital-clock" class="digital-clock">00:00:00</div>
          <!-- events -->
          <div class="user-info-section">
              <h1>User Fitness Information</h1>
              <div class="user-bmi">
                  <h2>BMI Information</h2>
                  <p>Your BMI: {{ $userBMI }}</p>
                  {{-- Display BMI-based tips here, assuming they are part of the user info --}}
              </div>
              <div class="recommendations">
                  <h2>Exercise Recommendations</h2>
                  <p>{{ $recommendations }}</p>
                  {{-- Similarly, display diet recommendations if you have them --}}
              </div>
          </div>



          </div>
         

        </div>
        
      </section>
    </main>
<!-- The Modal -->
<div id="eventModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2 id="modalEventTitle">Event Title</h2>
    <p id="modalEventDate">Date: Event Date</p>
    <p id="modalEventDescription">Description: This is a more detailed description of the event.</p>
  </div>
</div>


    <script>

const navItems = document.querySelectorAll(".nav-item");

navItems.forEach((navItem) => {
  navItem.addEventListener("click", () => {
    navItems.forEach((item) => {
      item.className = "nav-item";
    });
    navItem.className = "nav-item active";
  });
});

// Clock function
const clock = () => {
  const today = new Date();
  let hours = today.getHours();
  let minutes = today.getMinutes();
  let seconds = today.getSeconds();
  const formatTime = (time) => (`0${time}`).slice(-2); // Format time with leading zero

  // Calculate angles
  const hoursAngle = (hours % 12 + minutes / 60) * 30; // 12 hours on clock, 360 degrees
  const minutesAngle = minutes * 6; // 60 minutes, 360 degrees
  const secondsAngle = seconds * 6; // 60 seconds, 360 degrees

  // Apply rotation
  document.querySelector('.hours').style.transform = `rotate(${hoursAngle}deg)`;
  document.querySelector('.minutes').style.transform = `rotate(${minutesAngle}deg)`;
  document.querySelector('.seconds').style.transform = `rotate(${secondsAngle}deg)`;

  // Update digital clock
  hours = formatTime(hours);
  minutes = formatTime(minutes);
  seconds = formatTime(seconds);
  document.getElementById('digital-clock').textContent = `${hours}:${minutes}:${seconds}`;

  // Call clock function every second
  setTimeout(clock, 1000);
};

// Initialize clock function
clock();

// Modal interaction script (Unchanged)
var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];

document.querySelectorAll('.event-card').forEach(item => {
  item.addEventListener('click', function() {
    modal.style.display = "block";
  });
});

span.onclick = function() {
  modal.style.display = "none";
};

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
</script>

    </body>
    </html>
    @endsection