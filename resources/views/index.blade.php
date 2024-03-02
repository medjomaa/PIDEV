@extends('frontend')

@section('title', 'Power Gym - Home')

@section('content')

    <section id="hero" >
    
    <div id="hero-slider">
      <div class="hero-slide-item" style="background-image:url('https://i0.wp.com/connectthewatts.com/wp-content/uploads/sites/11/2021/03/silofit-1-scaled-1.jpg');">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>Be Fit. Power Gym</h2>
          <button>More Info</button>
        </div>
      </div>

      <div class="hero-slide-item" style="background-image:url('https://www.trainaway.fit/wp-content/uploads/2019/08/tartu6-1-e1566570527629.jpg');">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>Be Fit. Top Trainer</h2>
          <button>More Info</button>
        </div>
      </div>

      <div class="hero-slide-item" style="background-image:url('https://cdn-live.powerhouse-fitness.co.uk/pictures/case_studies/raise-the-bar/slider_4.jpg');">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>Be Fit. Top Body</h2>
          <button>More Info</button>
        </div>
      </div>
    </div>
  </section>


    <section id="features" class="animated-section">
    <div class="flex container">
      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/feature-1.jpg" alt="Exercise Class" />
        <div class="feature-info-container">
          <div class="icon">
            <img src="https://onclickwebdesign.com/wp-content/uploads/icon-1.png" alt="Star Trophy Icon" />
          </div>
          <h4>Amazing Setting</h4>
          <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium, vitae ornare leo.</p>
        </div>
      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/feature-2.jpg" alt="Man doing dumbbell rows" />
        <div class="feature-info-container">
          <div class="icon">
            <img src="https://onclickwebdesign.com/wp-content/uploads/icon-2.png" alt="Dumbbell Icon" />
          </div>
          <h4>Best Trainers</h4>
          <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium, vitae ornare leo.</p>
        </div>
      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/feature-3.jpg" alt="Woman doing leg press" />
        <div class="feature-info-container">
          <div class="icon">
            <img src="https://onclickwebdesign.com/wp-content/uploads/icon-3.png" alt="Smoothie Icon" />
          </div>
          <h4>Diet Plans</h4>
          <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium, vitae ornare leo.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="animated-section">
    <h3>Services</h3>
    <div class="flex container">
      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-1.png" alt="Basketball Icon" />
        <h4>Pilates</h4>
        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-2.png" alt="Bench Press Icon" />
        <h4>Free Lifting</h4>
        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-3.png" alt="Stopwatch Icon" />
        <h4>Yoga</h4>
        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-4.png" alt="Mp3 Player Icon" />
        <h4>Spinning</h4>
        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
      </div>
    </div>

    <button>See All Services</button>
  </section>

  <section id="trainers" class="animated-section">
    <h5>The Best</h5>
    <h3>Trainers Equipment</h3>
    <div class="container">
      <div id="trainers-slider">
        <div class="trainer-slider-item">
          <img src="https://shop.lifefitness.com/cdn/shop/products/Rubber-Hex-Dumbbell-L_1_1800x1800_78ea050c-4f5a-4e8a-bdae-a664272eac80_1200x1200.jpg?v=1619710214"  />
          <h4>Basics Easy Grip Workout</h4>
          <p>Dumbbell</p>
        </div>

        <div class="trainer-slider-item">
          <img src="https://i5.walmartimages.com/seo/Body-Sport-Cast-Iron-Vinyl-Coated-Kettlebells-45-lb-Gray-Kettlebell-for-Weight-Lifting-Strength-Training_7451d948-41a1-45fc-8929-bd564a9b47cc.a68ba549510e896b45168b85141a9920.jpeg" />
          <h4>Kettlebell</h4>
          <p>Vinyl Coated Cast</p>
          <p> Iron</p>
        </div>

        <div class="trainer-slider-item">
          <img src="https://shop.lifefitness.com/cdn/shop/products/c1-upright-bike-track-2.0-callout-1000x1000_1200x1200.jpg?v=1700249874"/>
          <h4>SQUATZ</h4>
          <p>Stationary Cycling Bike Exerciser</p>
        </div>

        <div class="trainer-slider-item">
          <img src="https://shop.lifefitness.com/cdn/shop/products/Rubber-Hex-Dumbbell-L_1_1800x1800_78ea050c-4f5a-4e8a-bdae-a664272eac80_1200x1200.jpg?v=1619710214" />
          <h4>Basics Easy Grip Workout</h4>
          <p>Dumbbell</p>
        </div>

        <div class="trainer-slider-item">
          <img src="https://i5.walmartimages.com/seo/Body-Sport-Cast-Iron-Vinyl-Coated-Kettlebells-45-lb-Gray-Kettlebell-for-Weight-Lifting-Strength-Training_7451d948-41a1-45fc-8929-bd564a9b47cc.a68ba549510e896b45168b85141a9920.jpeg"/>
          <h4>Kettlebell</h4>
          <p>Vinyl Coated Cast</p>
          <p> Iron</p>
        </div>

        <div class="trainer-slider-item">
          <img src="https://shop.lifefitness.com/cdn/shop/products/c1-upright-bike-track-2.0-callout-1000x1000_1200x1200.jpg?v=1700249874" />
          <h4>SQUATZ</h4>
          <p>Stationary Cycling Bike Exerciser</p>
        </div>
      </div>
    </div>
  </section>
  
  <section id="schedule-services" class="animated-section">
    <div class="flex container">
      <div class="upcoming-classes-box">
        <strong>NEXT</strong>
        <h4>Upcoming Classes</h4>
        <table>
          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Gym Fitness</td>
            <td>11:00 - 12:00</td>
          </tr>

          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Pilates</td>
            <td>12:00 - 1:00</td>
          </tr>

          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Spinning</td>
            <td>1:00 - 2:00</td>
          </tr>

          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Yoga</td>
            <td>2:00 - 3:00</td>
          </tr>

          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Zumba</td>
            <td>3:00 - 4:00</td>
          </tr>

          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Cardio Kickbox</td>
            <td>4:00 - 5:00</td>
          </tr>
        </table>
      </div>

      <div class="membership-cards-box">
        <div class="inner-container">
          <strong>NEXT</strong>
          <h4>Membership Deals</h4>
          <h2>25% <span>Discount</span></h2>
        </div>
      </div>

      <div class="personal-trainer-box">
        <strong>BECOME A</strong>
        <h4>Personal Trainer</h4>
        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
        <button>Sign Up Now</button>
      </div>
    </div>
  </section>



  <div id="search-container">
    <span id="search-container-hide" class="fa fa-times"></span>
    <h3>Search</h3>
    <div class="search-container-input">
      <input type="text" name="search" placeholder="Search this site" />
      <button>Search</button>
    </div>
  </div>

  <div id="video-frame">
    <span id="video-frame-hide" class="fa fa-times"></span>
    <div class="video-frame-container">
      <div class="video-frame-scaler">
          <iframe id="embed-video" src="https://www.youtube.com/watch?v=d1YBv2mWll0&ab_channel=Sordiway" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
@endsection
