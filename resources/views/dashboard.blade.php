<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-Meghah Hotel</title>
    
    <!-- Favicon Image-->
    <link rel="icon" href="Images/AL.png" type="image/x-icon">

    <!-- Bootstrap5 Cdn Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- FontAwssome Cdn Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link Swiper Slider-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Css Custom File Link-->
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/responsive-style.css') }}">



</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

    <!-- Navbar Section Start-->
    <header class="header_Wrapper">
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
            <a class="navbar-brand" href="#" style="display:flex; align-items:center;">
  <img 
    src="Images/AL.png" 
    alt="logo" 
    style="height:70px; width:auto; object-fit:contain; margin:0; padding:0; display:block;"
  >
</a>


              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <!-- <span class=""></span> -->
               <i class="fa-solid fa-bars-staggered "></i> 
              </button>


             <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav menu-navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                  </li>
              

<li class="nav-item">
    <a class="nav-link" href="#about">About</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="/rooms">Rooms</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="/foods">Food</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="/facility">Facility</a>
</li>

<li class="nav-item mt-3 mt-lg-0">
    <a class="main-btn" href="/reservations/create">Book Now</a>
</li>

                 
                </ul>
              </div>
            </div>
          </nav>
    </header>
  <!-- Navbar Section End-->

  <!-- Banner Section Start-->
  <section id="home" class="banner-wrapper p-0">
    <div class="swiper my-swiper">
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide" style="background-image: url(./Images/blog/background.jpg);">
          <div class="slide-caption text-center">
            <div>
              <h1> Welcome To Al-Meghah Hotel </h1>
              <p> A 16 story Muslim owned Islamic luxury hotel nestled in the peaceful.<br>

                highlands of Malang. Here, every moment of your stay is wrapped in comfort, elegance, and hospitality inspired by Islamic values.
  
              </p>
            </div>
          </div>
        
        </div>

        <div class="swiper-slide" style="background-image: url(./Images/slider/slider2.jpg);">
          <div class="slide-caption text-center">
            <div>
              <h1> Welcome To Hotel Al-Meghah</h1>
              <p>Here, every moment of your stay is wrapped in comfort, elegance, and hospitality inspired by Islamic values.
              </p>
            </div>
          </div>
        
        </div>
        ...
      </div>

        <!-- If we need pagination -->
  <div class="swiper-pagination"></div>
    </div>

    <div class="container booking-area">
      
<form class="row" method="POST" action="{{ route('reservations.store') }}">
   

    

    

    </div>
</form>


    </div>
  </section>
    

<!-- About Section Start -->
<section id="about" class="about-wrapper-fixed">
  <div class="container">
    
    <!-- SECTION 1: Main About -->
    <div class="row about-row-fixed align-items-center mb-5">
      <!-- TEXT AREA -->
      <div class="col-lg-6 about-text-col">
        <h2 class="about-main-title">About Us</h2>
        <h3 class="about-subtitle">
          Welcome to <span class="highlight-text">Hotel Al-Meghah</span><br>
          Your Peace Above the Clouds
        </h3>
        <p class="about-description">
          At AL-MEGHAH HOTEL, every detail is crafted to bring modesty, serenity,
          and halal comfort into a luxurious mountain-view experience.
        </p>
      </div>

      <!-- IMAGE -->
      <div class="col-lg-6 about-image-col">
        <div class="about-image-wrapper">
          <img src="{{ asset('Images/aboute.jpg') }}" class="about-main-image" alt="about">
        </div>
      </div>
    </div>

    <!-- SECTION 2: Islamic Rules (Image Left) -->
    <div class="row about-row-fixed align-items-center mb-5 flex-lg-row-reverse">
      <!-- TEXT AREA -->
      <div class="col-lg-6 about-text-col">
        <div class="islamic-rules-box">
          <h4 class="rules-box-title">Islamic Hospitality Principles</h4>
          
          <ul class="rules-list-fixed"> 
            <li>
              <strong>1. Marriage Verification</strong><br>
              Married couples must present a Marriage Certificate / Buku Nikah.
            </li>
            <li>
              <strong>2. No Alcohol, Drugs, Gambling, or Immoral Acts</strong>
            </li>
            <li>
              <strong>3. Separate Men & Women Facilities</strong><br>
              Pool hours, Spa, and Fitness Zones.
            </li>
            <li>
              <strong>4. Adzan Break</strong><br>
              Activities pause during Adzan.
            </li>
            <li>
              <strong>5. Modest Dress Code</strong>
            </li>
          </ul>

          <p class="rules-footer-text">
            These principles ensure barakah, safety, and comfort for all guests.
          </p>
        </div>
      </div>

      <!-- IMAGE -->
      <div class="col-lg-6 about-image-col">
        <div class="about-image-wrapper">
          <img src="{{ asset('Images/blog/background.jpg') }}" class="about-main-image" alt="Islamic Hospitality1">
        </div>
      </div>
    </div>

    <!-- SECTION 3: Discounts Kiri, Promise Kanan -->
<div class="row about-row-fixed align-items-center mb-5">
  <!-- SPECIAL DISCOUNTS KIRI -->
  <div class="col-lg-6 about-text-col">
    <div class="islamic-rules-box">
      <h5 class="rules-box-title">🌙 SPECIAL DISCOUNTS 🌙</h5>
      
      <p class="discount-item">1. Memorized the Qur'an (30 Juz)? Show your certificate and enjoy free stay in any of our 3 room tiers.</p>
      
      <p class="discount-item">2. Newlyweds can enjoy a free stay in our Standard Room.</p>
      
      <p class="discount-item">3. Friday Blessings Discount: Get 25% off on any stay, once every month.</p>
    </div>
  </div>

  <!-- PROMISE BOX KANAN -->
  <div class="col-lg-6 about-text-col">
    <div class="promise-box-fixed">
      <h4 class="promise-title">Our Promise</h4>
      <p class="promise-text">
        Whether for a honeymoon, vacation, or business trip,  
        Hotel Al-Meghah offers Islamic luxury with sincerity and peace.
      </p>
      <a href="/rooms" class="explore-btn-fixed">Explore </a>
    </div>
  </div>
</div>
  </div>

</section>

<style>
/* CRITICAL: Override Bootstrap with high specificity */
section.about-wrapper-fixed {
  padding: 80px 0 !important;
  background: #ffffff !important;
  margin: 0 !important;
}

.about-wrapper-fixed .container {
  max-width: 1200px !important;
  margin: 0 auto !important;
  padding: 0 15px !important;
}

/* Row spacing */
.about-wrapper-fixed .about-row-fixed {
  margin-bottom: 80px !important;
  display: flex !important;
  align-items: center !important;
}

.about-wrapper-fixed .about-row-fixed:last-child {
  margin-bottom: 0 !important;
}

/* Text Column */
.about-wrapper-fixed .about-text-col {
  padding: 0 30px !important;
}

.about-wrapper-fixed .about-image-col {
  padding: 0 30px !important;
}

/* Main Title */
.about-wrapper-fixed .about-main-title {
  font-size: 48px !important;
  font-weight: 700 !important;
  color: #1a1a1a !important;
  margin-bottom: 20px !important;
  line-height: 1.2 !important;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important;
}

/* Subtitle */
.about-wrapper-fixed .about-subtitle {
  font-size: 32px !important;
  font-weight: 600 !important;
  color: #2c3e50 !important;
  margin-bottom: 25px !important;
  line-height: 1.4 !important;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important;
}

.about-wrapper-fixed .highlight-text {
  color: #d4a574 !important;
  font-weight: 700 !important;
}

/* Description */
.about-wrapper-fixed .about-description {
  font-size: 18px !important;
  line-height: 1.8 !important;
  color: #4a5568 !important;
  margin-bottom: 0 !important;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important;
}

/* Image Wrapper */
.about-wrapper-fixed .about-image-wrapper {
  width: 100% !important;
  border-radius: 16px !important;
  overflow: hidden !important;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1) !important;
}

.about-wrapper-fixed .about-main-image {
  width: 100% !important;
  height: auto !important;
  display: block !important;
  object-fit: cover !important;
}

/* Islamic Rules Box */
.about-wrapper-fixed .islamic-rules-box {
  background: #f7f4ee !important;
  border-left: 6px solid #d4a574 !important;
  padding: 35px !important;
  border-radius: 12px !important;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08) !important;
}

.about-wrapper-fixed .rules-box-title {
  font-size: 24px !important;
  font-weight: 700 !important;
  color: #2c3e50 !important;
  margin-bottom: 25px !important;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important;
}

.about-wrapper-fixed .rules-list-fixed {
  list-style: none !important;
  padding: 0 !important;
  margin: 0 0 20px 0 !important;
}

.about-wrapper-fixed .rules-list-fixed li {
  margin-bottom: 18px !important;
  color: #333333 !important;
  font-size: 16px !important;
  line-height: 1.6 !important;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important;
}

.about-wrapper-fixed .rules-list-fixed li:last-child {
  margin-bottom: 0 !important;
}

.about-wrapper-fixed .rules-list-fixed strong {
  color: #d4a574 !important;
  font-weight: 600 !important;
}

.about-wrapper-fixed .rules-footer-text {
  font-size: 15px !important;
  margin-top: 20px !important;
  margin-bottom: 0 !important;
  font-style: italic !important;
  color: #666666 !important;
  line-height: 1.6 !important;
}

/* Promise Box */
.about-wrapper-fixed .promise-box-fixed {
  background: #2c3e50 !important;
  padding: 40px !important;
  border-radius: 12px !important;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15) !important;
}

.about-wrapper-fixed .promise-title {
  font-size: 28px !important;
  font-weight: 700 !important;
  color: #d4a574 !important;
  margin-bottom: 20px !important;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important;
}

.about-wrapper-fixed .promise-text {
  font-size: 17px !important;
  line-height: 1.8 !important;
  color: #ffffff !important;
  margin-bottom: 30px !important;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important;
}

/* Explore Button */
.about-wrapper-fixed .explore-btn-fixed {
  display: inline-block !important;
  padding: 14px 32px !important;
  background: #d4a574 !important;
  color: #ffffff !important;
  font-size: 16px !important;
  font-weight: 600 !important;
  text-decoration: none !important;
  border-radius: 8px !important;
  transition: all 0.3s ease !important;
  border: 2px solid #d4a574 !important;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important;
}

.about-wrapper-fixed .explore-btn-fixed:hover {
  background: transparent !important;
  color: #d4a574 !important;
  border-color: #d4a574 !important;
  transform: translateY(-2px) !important;
  box-shadow: 0 4px 12px rgba(212, 165, 116, 0.3) !important;
}

/* Responsive Design */
@media (max-width: 991px) {
  section.about-wrapper-fixed {
    padding: 60px 0 !important;
  }

  .about-wrapper-fixed .about-row-fixed {
    margin-bottom: 60px !important;
  }

  .about-wrapper-fixed .about-text-col,
  .about-wrapper-fixed .about-image-col {
    padding: 0 15px !important;
    margin-bottom: 30px !important;
  }

  .about-wrapper-fixed .about-image-col {
    margin-bottom: 0 !important;
  }

  .about-wrapper-fixed .about-main-title {
    font-size: 36px !important;
    text-align: center !important;
  }

  .about-wrapper-fixed .about-subtitle {
    font-size: 26px !important;
    text-align: center !important;
  }

  .about-wrapper-fixed .about-description {
    font-size: 16px !important;
    text-align: center !important;
  }
}
/* Discount Item Styling */
.about-wrapper-fixed .discount-item {
  font-size: 16px !important;
  line-height: 1.7 !important;
  color: #333333 !important;
  margin-bottom: 20px !important;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important;
}

.about-wrapper-fixed .discount-item:last-child {
  margin-bottom: 0 !important;
}

@media (max-width: 767px) {
  section.about-wrapper-fixed {
    padding: 40px 0 !important;
  }

  .about-wrapper-fixed .about-row-fixed {
    margin-bottom: 40px !important;
  }

  .about-wrapper-fixed .about-main-title {
    font-size: 32px !important;
  }

  .about-wrapper-fixed .about-subtitle {
    font-size: 22px !important;
  }

  .about-wrapper-fixed .about-description {
    font-size: 15px !important;
  }

  .about-wrapper-fixed .islamic-rules-box,
  .about-wrapper-fixed .promise-box-fixed {
    padding: 25px !important;
  }

  .about-wrapper-fixed .rules-box-title,
  .about-wrapper-fixed .promise-title {
    font-size: 20px !important;
  }

  .about-wrapper-fixed .explore-btn-fixed {
    width: 100% !important;
    text-align: center !important;
  }
}
</style>

<!--Blog Section Start-->
<section id="blog" class="blog_wrapper pb-0">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
        <h6>Say Hello for Develops</h6>
        <h3>Alfi Az-Zuhriyah and Litwyn Mega</h3>
      

      </div>
    </div>
   



</section>

<!--Blog Section Exit-->

<<!-- Footer Section-->
<footer id="contact" class="footer-wrapper-fixed">
  <div class="container">
    <div class="row footer-row-fixed">
      
      <!-- COLUMN 1: Hotel Info -->
      <div class="col-lg-3 col-md-6 footer-col-fixed mb-4 mb-lg-0">
        <h5 class="footer-title-fixed">Hotel Al-Meghah</h5>
        <p class="footer-desc-fixed">Islamic Luxury Hotel with Mountain View Experience</p>
        
        <ul class="contact-list-fixed">
          <li>
            <i class="fa fa-map-marker-alt footer-icon-fixed"></i>
            <span>Jl. Panglima Sudirman No. 17, Batu City Square, Malang – East Java 65311, Indonesia</span>
          </li>
          <li>
            <i class="fa fa-phone footer-icon-fixed"></i>
            <span>+62 857-4838-4770</span>
          </li>
          <li>
            <i class="fa fa-envelope footer-icon-fixed"></i>
            <span>almeghahhotel@gmail.com</span>
          </li>
        </ul>
      </div>

      <!-- COLUMN 2: Key Locations -->
      <div class="col-lg-3 col-md-6 footer-col-fixed mb-4 mb-lg-0">
        <h5 class="footer-title-fixed">📍 Key Locations</h5>
        
        <ul class="location-list-fixed">
          <li>
            <i class="fa fa-chevron-right location-arrow-fixed"></i>
            <span>minutes from Batu City Square<small>(~3 minutes)</small></span>
          </li>
          <li>
            <i class="fa fa-chevron-right location-arrow-fixed"></i>
            <span>from Museum Angkut<small>(~8 minutes)</small></span>
          </li>
          <li>
            <i class="fa fa-chevron-right location-arrow-fixed"></i>
            <span>from Jatim Park 1<small>(~12 minutes)</small></span>
          </li>
          <li>
            <i class="fa fa-chevron-right location-arrow-fixed"></i>
            <span>minutes from Selecta Mountain Resort<small>(~15 minutes)</small></span>
          </li>
        </ul>
      </div>

      <!-- COLUMN 3: Quick Links & Social Media -->
      <div class="col-lg-3 col-md-6 footer-col-fixed mb-4 mb-lg-0">

        <h5 class="footer-title-fixed">Notes</h5>
         
        <ul class="quick-links-fixed">
          <li><a href="">Located in the heart of Batu’s tourist district, right next to Batu City Square, Al-MEGHAH Islamic Luxury Hotel offers a refreshing mountain atmosphere, cool air, and easy access to the most famous family attractions in Malang.</a></li>
        
        </ul>

        <h5 class="footer-title-fixed mt-4">Stay Connected</h5>
        <ul class="social-links-fixed">
         
          <li>
            <a href="https://www.instagram.com/almeghahhotel" target="_blank" class="social-link-fixed instagram-fixed">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCKCGldJcjNjrmBbXnWQVQFgTmXskZGJMbSJBLPFwxqTDVMSPdddsRLDZhflgwQHBsHZBXVV" class="social-link-fixed email-fixed">
              <i class="fab fa-google"></i>
            </a>
          </li>
        </ul>
      </div>

      <!-- COLUMN 4: Google Maps -->
      <div class="col-lg-3 col-md-6 footer-col-fixed mb-4 mb-lg-0">
        <h5 class="footer-title-fixed">Find Us</h5>
        
        <div class="map-wrapper-fixed">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5747193!2d112.5208214!3d-7.8759565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNTInMzMuNCJTIDExMsKwMzEnMTUuMCJF!5e0!3m2!1sen!2sid!4v1234567890"
            class="google-map-fixed"
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

        <a href="https://www.google.com/maps/search/Al-MEGHAH+Islamic+Luxury+Hotel+Jl.+Panglima+Sudirman+No.+17,+Batu+City+Square" 
           target="_blank" 
           class="map-link-fixed">
          <i class="fa fa-map-marked-alt"></i> View on Google Maps
        </a>
      </div>

    </div>
  </div>

  <!-- Copyright Bar -->
  <div class="copyright-bar-fixed">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <p class="copyright-text-fixed">
            © 2024 Hotel Al-Meghah. All Rights Reserved. | Islamic Luxury with Sincerity and Peace
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

<style>
/* FOOTER MAIN WRAPPER */
footer.footer-wrapper-fixed {
  background: #2c3e50 !important;
  padding: 60px 0 0 !important;
  color: #ecf0f1 !important;
  margin-top: 0 !important;
}

footer.footer-wrapper-fixed .container {
  max-width: 1200px !important;
}

/* ROW */
.footer-row-fixed {
  margin: 0 -15px !important;
}

/* COLUMNS */
.footer-col-fixed {
  padding: 0 15px !important;
}

/* TITLES */
.footer-title-fixed {
  color: #d4a574 !important;
  font-size: 18px !important;
  font-weight: 700 !important;
  margin-bottom: 20px !important;
  text-transform: uppercase !important;
  letter-spacing: 0.5px !important;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif !important;
}

/* DESCRIPTION */
.footer-desc-fixed {
  color: #bdc3c7 !important;
  font-size: 14px !important;
  line-height: 1.6 !important;
  margin-bottom: 20px !important;
}

/* CONTACT LIST */
.contact-list-fixed {
  list-style: none !important;
  padding: 0 !important;
  margin: 0 !important;
}

.contact-list-fixed li {
  display: flex !important;
  align-items: flex-start !important;
  margin-bottom: 15px !important;
  color: #ecf0f1 !important;
  font-size: 14px !important;
  line-height: 1.6 !important;
}

.contact-list-fixed li:last-child {
  margin-bottom: 0 !important;
}

.footer-icon-fixed {
  color: #d4a574 !important;
  width: 20px !important;
  margin-right: 10px !important;
  margin-top: 2px !important;
  flex-shrink: 0 !important;
}

/* KEY LOCATIONS LIST */
.location-list-fixed {
  list-style: none !important;
  padding: 0 !important;
  margin: 0 !important;
}

.location-list-fixed li {
  display: flex !important;
  align-items: flex-start !important;
  margin-bottom: 12px !important;
  color: #ecf0f1 !important;
  font-size: 14px !important;
  line-height: 1.5 !important;
}

.location-list-fixed li:last-child {
  margin-bottom: 0 !important;
}





.location-arrow-fixed {
  color: #d4a574 !important;
  font-size: 10px !important;
  margin-right: 10px !important;
  margin-top: 4px !important;
  flex-shrink: 0 !important;
}

.location-list-fixed small {
  color: #95a5a6 !important;
  font-size: 12px !important;
}

/* QUICK LINKS */
.quick-links-fixed {
  list-style: none !important;
  padding: 0 !important;
  margin: 0 !important;
}

.quick-links-fixed li {
  margin-bottom: 10px !important;
}

.quick-links-fixed li:last-child {
  margin-bottom: 0 !important;
}

.quick-links-fixed a {
  color: #ecf0f1 !important;
  text-decoration: none !important;
  font-size: 14px !important;
  transition: all 0.3s ease !important;
  display: inline-block !important;
}

.quick-links-fixed a:hover {
  color: #d4a574 !important;
  padding-left: 5px !important;
}

/* SOCIAL LINKS */
.social-links-fixed {
  list-style: none !important;
  padding: 0 !important;
  margin: 0 !important;
  display: flex !important;
  gap: 12px !important;
}

.social-link-fixed {
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  width: 40px !important;
  height: 40px !important;
  border-radius: 50% !important;
  background: rgba(255, 255, 255, 0.1) !important;
  color: #ecf0f1 !important;
  font-size: 18px !important;
  transition: all 0.3s ease !important;
  text-decoration: none !important;
}

.social-link-fixed:hover {
  transform: translateY(-3px) !important;
}

.whatsapp-fixed:hover {
  background: #25D366 !important;
  color: white !important;
}

.instagram-fixed:hover {
  background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%) !important;
  color: white !important;
}

.email-fixed:hover {
  background: #EA4335 !important;
  color: white !important;
}

/* GOOGLE MAPS */
.map-wrapper-fixed {
  margin-bottom: 15px !important;
  border-radius: 8px !important;
  overflow: hidden !important;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2) !important;
}

.google-map-fixed {
  width: 100% !important;
  height: 200px !important;
  border: none !important;
  display: block !important;
}

.map-link-fixed {
  display: inline-flex !important;
  align-items: center !important;
  gap: 8px !important;
  color: #d4a574 !important;
  text-decoration: none !important;
  font-size: 14px !important;
  font-weight: 600 !important;
  transition: all 0.3s ease !important;
}

.map-link-fixed:hover {
  color: #ecf0f1 !important;
}

.map-link-fixed i {
  font-size: 16px !important;
}

/* COPYRIGHT BAR */
.copyright-bar-fixed {
  background: #1a252f !important;
  padding: 20px 0 !important;
  margin-top: 50px !important;
}

.copyright-text-fixed {
  color: #95a5a6 !important;
  font-size: 13px !important;
  margin: 0 !important;
  line-height: 1.6 !important;
}

/* RESPONSIVE */
@media (max-width: 991px) {
  footer.footer-wrapper-fixed {
    padding: 40px 0 0 !important;
  }

  .footer-col-fixed {
    margin-bottom: 35px !important;
  }

  .footer-col-fixed:last-child {
    margin-bottom: 0 !important;
  }

  .copyright-bar-fixed {
    margin-top: 30px !important;
  }
}

@media (max-width: 767px) {
  footer.footer-wrapper-fixed {
    padding: 30px 0 0 !important;
  }

  .footer-title-fixed {
    font-size: 16px !important;
  }

  .contact-list-fixed li,
  .location-list-fixed li,
  .quick-links-fixed a {
    font-size: 13px !important;
  }

  .google-map-fixed {
    height: 180px !important;
  }

  .copyright-text-fixed {
    font-size: 12px !important;
  }

  .copyright-bar-fixed {
    margin-top: 20px !important;
    padding: 15px 0 !important;
  }
}
</style>

</section>

 <!--Bootstrap JS CDN Link-->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<!-Swiper Js CDN Link-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Custom JS Link-->

<script src="Js/main.js"></script>

</body>
</html>- 