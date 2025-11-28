<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-Meghah Hotel</title>
    
    <!-- Favicon Image-->
   <link rel="icon" href="Images/1.png" type="image/x-icon">

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
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/dashboard') }}">
               <img src="Images/2.png" class="img-fluid" alt="" style="max-width: 160px; height: auto;">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars-staggered"></i> 
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav menu-navbar-nav">
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}">Home</a>
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
                        <a href="{{ route('reservations.create') }}" class="main-btn">Book Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Navbar Section End-->

<style>
/* Force logo always visible */
.navbar-brand .logo-navbar-fixed {
    display: block !important;
    max-width: 160px !important;
    height: auto !important;
    opacity: 1 !important;
    visibility: visible !important;
}

/* Navbar responsive fix */
@media (max-width: 991px) {
    .navbar-brand .logo-navbar-fixed {
        max-width: 120px !important;
    }
}
</style>
  <!-- Navbar Section End-->


  <div class="container my-4">
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @yield('content')
  </div>

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
            <span>alfizuhriyah.2022@mhs.unisda.ac.id</span>
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
            <a href="mailto:alfizuhriyah.2022@mhs.unisda.ac.id" class="social-link-fixed email-fixed">
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  @yield('scripts')

  
</body>
</html>
