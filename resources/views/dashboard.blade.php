<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Website by Alfi Az-Zuhriyah</title>
    <!-- Favicon Image-->
    <link rel="icon" href="Images/favicon.png" type="image/x-icon">

    <!-- Bootstrap5 Cdn Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- FontAwssome Cdn Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link Swiper Slider-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Css Custom File Link-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive-style.css') }}">


</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

    <!-- Navbar Section Start-->
    <header class="header_Wrapper">
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="Images/logo.png" class="img-fluid" alt="logo">
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
                    <a class="nav-link" href="#certivicate">Rooms</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#services">services</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
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
              <h1> Welcom To Hotel Al-Meghah</h1>
              <p> — a 16-story Muslim-owned Islamic luxury hotel nestled in the peaceful highlands of Malang.
  
              </p>
            </div>
          </div>
        
        </div>

        <div class="swiper-slide" style="background-image: url(./Images/slider/slider2.webp);">
          <div class="slide-caption text-center">
            <div>
              <h1> Welcom To Hotel Al-Meghah</h1>
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
    

<!-- About Section Start-->
<section id="about" class="about-wrapper">
  <div class="container">
    <div class="row flex-lg-row flex-column-reverse">
      <div class="col-lg-6 text-lg-start-text-center">
        <h3>Welcome to <span>Hotel <br class="d-lg-block d-none">Al-meghah </span>of your weekend</h3>
        <p>Here, every moment of your stay is wrapped in comfort, elegance, and hospitality inspired by Islamic values.</p>
        <p>Hotel Al-Meghah brings together modern luxury and spiritual tranquillity, offering breathtaking mountain views and a full range of world-class facilities — including:</p>
        <a href="#rooms" class="main-btn mt-4">Explore</a>
      </div>
      <div class="col-lg-6 mb-4 mb-lg-0 ps-lg-4 text-center">
        <img src="{{ asset('Images/about-img.svg') }}" class="img-fluid" alt="about">
      </div>
    </div>
  </div>
</section>

<!-- Rooms Section-->

<!-- DULUXE ROOMS Section -->
    <section id="certivicate" class="portfolio section">
        <div class="container">
            <h2 class="section-title fade-in">💎 Luxury Suite </h2>

  <!-- Portfolio Grid -->
            <div class="portfolio-grid">
                <div class="portfolio-item fade-in" data-category="web">
                    <div class="portfolio-image">
                         <img src="{{ asset('Images/Kamar hotel tingkat 1/IMG-20251122-WA0095.jpg') }}"  alt="E-commerce Platform">
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link" aria-label="View E-commerce Platform project"></a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3 class="portfolio-title">Facilities include</h3>
                        <p class="portfolio-description" style="padding-top: 10px;">•	King bed with hotel-grade comfort
                  <p class="portfolio-description">•	Private mountain-view balcony
                   <p class="portfolio-description">•	50” TV & full-body smart mirror
                   <p class="portfolio-description">•	Mini library & sofa lounge
                     <p class="portfolio-description">•	Coffee & tea set & AC
                  </p>
                        
                    </div>
                </div>

                <div class="portfolio-item fade-in" data-category="mobile">
                    <div class="portfolio-image">
                       <img src="{{ asset('Images/Kamar hotel tingkat 1/IMG-20251122-WA0097.jpg') }}" alt="Fitness Mobile App">
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link" aria-label="View Fitness Mobile App project"></a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3 class="portfolio-title">Bathroom </h3>
                        <p class="portfolio-description">•	Bathtub + shower
<p class="portfolio-description">•	Premium and alcohol-free toiletries
</p>
                       
                    </div>
                </div>

                <div class="portfolio-item fade-in" data-category="branding">
                    <div class="portfolio-image">
                        <img src="{{ asset('Images/Fasilitas hotel/360° Outdoor Café.jpg') }}"alt="Brand Identity Design">
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link" aria-label="View Brand Identity Design project"></a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3 class="portfolio-title">Food & Beverage </h3>
                        <p class="portfolio-description">•	Premium halal buffet breakfast
<p class="portfolio-description">•	2 bottles of mineral water per day
<p class="portfolio-description">•	Welcome light snack & evening snack

.</p>

    </section>

 <!-- DULUXE ROOMS Section -->
    <section id="certivicate" class="portfolio section">
        <div class="container">
            <h2 class="section-title fade-in">🌄 Deluxe Room </h2>

  <!-- Portfolio Grid -->
            <div class="portfolio-grid">
                <div class="portfolio-item fade-in" data-category="web">
                    <div class="portfolio-image">
                      <img src="{{ asset('Images/Kamar hotel tingkat 2/IMG-20251122-WA0093.jpg') }}"  alt="E-commerce Platform">
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link" aria-label="View E-commerce Platform project"></a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3 class="portfolio-title">Facilities include</h3>
      
                <p class="portfolio-description"> •	Private mountain-view balcony</p> 
                 <p class="portfolio-description"> •	50” TV & full-body smart mirror</p> 
                <p class="portfolio-description">•	Mini library & sofa lounge</p> 
              <p class="portfolio-description">•	Coffee & tea set & AC</p> 

                        
                    </div>
                </div>

                <div class="portfolio-item fade-in" data-category="mobile">
                    <div class="portfolio-image">
                     <img src="{{ asset('Images/Kamar hotel tingkat 2/IMG-20251122-WA0096.jpg') }}"  alt="Fitness Mobile App">
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link" aria-label="View Fitness Mobile App project"></a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3 class="portfolio-title">Bathroom </h3>
                        <p class="portfolio-description" style="padding-top: 10px;">•	Bathtub + shower 
                  <p class="portfolio-description">•	Premium halal and free alcohol

                       
                    </div>
                </div>

                <div class="portfolio-item fade-in" data-category="branding">
                    <div class="portfolio-image">
                         <img src="{{ asset('Images/Fasilitas hotel/Multi function hall.jpg') }}" alt="Brand Identity Design">
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link" aria-label="View Brand Identity Design project"></a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3 class="portfolio-title">Food & Beverage </h3>
                        <p class="portfolio-description">•	Premium halal buffet breakfast
<p class="portfolio-description">•	2 bottles of mineral water per day
<p class="portfolio-description">•	Welcome light snack & evening snack

.</p>

    </section>

     <!-- STANDARD ROOMS Section -->
    <section id="certivicate" class="portfolio section">
        <div class="container">
            <h2 class="section-title fade-in">🌿 Standard Room </h2>

  <!-- Portfolio Grid -->
            <div class="portfolio-grid">
                <div class="portfolio-item fade-in" data-category="web">
                    <div class="portfolio-image">
                      <img src="{{ asset('Images/Kamar hotel tingkat 3/IMG-20251122-WA0092.jpg') }}"  alt="E-commerce Platform">
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link" aria-label="View E-commerce Platform project"></a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3 class="portfolio-title">Facilities include</h3>
                        <p class="portfolio-description">•	King bed with hotel-grade comfort
               <p class="portfolio-description"> •	Private mountain-view balcony
 <p class="portfolio-description"> •	50” TV & full-body smart mirror
<p class="portfolio-description">•	Mini library & sofa lounge
<p class="portfolio-description">•	Coffee & tea set & AC
</p>
                        
                    </div>
                </div>

                <div class="portfolio-item fade-in" data-category="mobile">
                    <div class="portfolio-image">
                       <img src="{{ asset('Images/Kamar hotel tingkat 3/IMG-20251122-WA0094.jpg') }}"  alt="Fitness Mobile App">
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link" aria-label="View Fitness Mobile App project"></a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3 class="portfolio-title">Bathroom </h3>
                        <p class="portfolio-description">•	Bathtub + shower
<p class="portfolio-description">•	Premium  and free alcohol-free toiletries
</p>
                       
                    </div>
                </div>


.</p>


    </section>

<!-- Service Section -->
<section  id="services" class="services_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
        <h6>We Are Here For You</h6>
        <h3>Our Awsome Services</h3>
      </div>
    </div>
    <div class="row align-items-center service-item-wrap">
      <div class="col-lg-7 p-lg-0">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="spa" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <img src="Images/services/service1.webp">
          </div>
          <div class="tab-pane fade" id="restaurent" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <img src="Images/services/service2.webp">
          </div>
          <div class="tab-pane fade" id="swimming" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <img src="Images/services/service3.webp">
          </div>
          <div class="tab-pane fade" id="conference" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
            <img src="Images/services/service6.webp">
          </div>
        </div>
      </div>

      <div class="col-lg-5 position-relative">
        <div class="service-menu-area">
          <ul class="nav">
            <li>
              <a data-bs-toggle="tab" href="#spa" class="active" >
                <span class="service-icon">
                  <img src="Images/services/service-icon1.webp" alt="">
                </span>
                <h5>Spa, beauty & Health</h5>
                <P><span> Spa and beauty</span>Dull skin? Say no to it! Get the glowing skin of your dreams with our premium facial. ✨"</P>
              </a>
            </li>
            <li>
              <a data-bs-toggle="tab" href="#restaurent">
                <span class="service-icon">
                  <img src="Images/services/service-icon2.webp" alt="">
                </span>
                <h5>Restaurant</h5>
                <P><span> Spa and beauty</span>A versatile hall equipped with LED stage, premium acoustics, chandeliers, and banquet or classroom. </P>
              </a>
            </li>

            <li>
              <a data-bs-toggle="tab" href="#swimming">
                <span class="service-icon">
                  <img src="Images/services/service-icon3.webp" alt="">
                </span>
                <h5>Swimming Pool</h5>
                <P><span> Spa and beauty</span>infinity pool featuring panoramic mountain scenery, wooden deck seating.</P>
              </a>
            </li>
            <li>
              <a data-bs-toggle="tab" href="#conference">
                <span class="service-icon">
                  <img src="Images/services/service-icon4.webp" alt="">
                </span>
                <h5>conference Hall</h5>
                <P><span> Spa and beauty</span>Make your event a success at the Conference Hall. Professional Venue, State-of-the-Art Facilities.</P>
              </a>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Counter-->
  <div class="counter mt-5">
    <div class="container">
      <div class="row  text-center">
        <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
          <h1>
            <span id="count1">0</span>+
          </h1>
          <p>Happy Clients</p>
        </div>
        <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
          <h1>
            <span id="count2">0</span>+
          </h1>
          <p>New Friendship</p>
        </div>

        <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
          <h1>
            <span id="count3">0</span>+
          </h1>
          <p>Five Start Ratings</p>
        </div>

        <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
          <h1>
            <span id="count4">0</span>+
          </h1>
          <p>Served Breakfast</p>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- Service Section Exit -->


<!-- FOOD PREMIUM Start -->
<section id=" team" class="team-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
        <h6>What I can do for you</h6>
        <h3>🥩 Premium Meat Specialties & Signature Indonesian Dishes ⭐</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
           <img src="{{ asset('Images/food/Beef Teriyaki with Rice.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Beef Teriyaki with Rice</h5>
        
            <ul class="social-network">
             <p>Melt-in-your-mouth beef slices, slow-cooked in a sweet-savory Japanese Teriyaki sauce.</p>
            </ul>
          </div>
        </div>
      </div>


      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="{{ asset('Images/food/Ayam Bakar Madu .jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Honey Grilled Chicken</h5>
           
            <ul class="social-network">
              <p>Succulent chicken, smoked and glazed with pure honey for a sweet, caramelized finish.</p>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="{{ asset('Images/food/Daging Sapi Lada Hitam.jpg') }}"class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Black Pepper Beef</h5>
           
            <ul class="social-network">
              <p>Quick-seared beef, enveloped in a bold and elegant black pepper sauce.</p>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
           <img src="{{ asset('Images/food/Lamb Chop (Iga Kambing).jpg') }}" class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Grilled Lamb Ribs</h5>
           
            <ul class="social-network">
              <p>Perfectly marinated lamb ribs, juicy, odor-free, with rich, smoky grill aromas.</p>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


   <div class="container">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
       
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
        <img src="{{ asset('Images/indonesia/Bakso solo.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Bakso solo</h5>
            <ul class="social-network">
             <p>Kuah bening kaldu murni, bakso urat/halus premium, kesempurnaan di setiap suapan.</p>
            </ul>
          </div>
        </div>
      </div>


      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="{{ asset('Images/indonesia/Nasi Goreng Jawa.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Nasi Goreng Jawa</h5>
           
            <ul class="social-network">
              <p>Nasi digoreng sempurna, smoky khas wajan, bumbu rahasia Jawa yang memikat.</p>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
 <img src="{{ asset('Images/indonesia/Rawon Daging Sapi.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Rawon Daging Sapi</h5>
            
            <ul class="social-network">
              <p>Kaldu Kluwek hitam pekat, daging sapi empuk, warisan rasa otentik Jawa Timur.</p>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="{{ asset('Images/indonesia/Soto Lamongan.jpg') }}"class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Soto Lamongan</h5>
         
            <ul class="social-network">
              <p>Kuah kuning kaya rempah, koya gurih melimpah, kehangatan legendaris dari pesisir.</p>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>





</section>






<section id=" team" class="team-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
        <h6>What I can do for you</h6>
        <h3>🍰 Luxury Dessert Collectiont & 🌎 International Favorites</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
        <img src="{{ asset('Images/cake/Chocolate Lava Cake.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Chocolate Lava Cake</h5>
            <ul class="social-network">
               <p>Warm chocolate cake, featuring an irresistible core of premium gooey melted chocolate.</p>
            </ul>
          </div>
        </div>
      </div>


      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="{{ asset('Images/cake/Fruit Pancake Tower with Maple Syrup.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Fruit Pancake Tower</h5>
           
            <ul class="social-network">
              <p>Fluffy layered pancakes, topped with fresh fruit and drizzled with authentic Maple Syrup.</p>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
 <img src="{{ asset('Images/cake/Mango Cheesecake Slice.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Mango Cheesecake Slice</h5>
            <ul class="social-network">
              <p>Creamy cheesecake with a tart-sweet mango topping, balanced and fresh.</p>

            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="{{ asset('Images/cake/Premium Vanilla Panna Cotta.jpg') }}"class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Premium Vanilla Panna Cotta</h5>
         
            <ul class="social-network">
              <p>Silky smooth texture, pure vanilla essence, an elegant Italian delight.</p>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

   <div class="container">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
       
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
        <img src="{{ asset('Images/international/Chicken Cordon Bleu.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Chicken Cordon Bleu</h5>
            <ul class="social-network">
             <p>Crispy breaded chicken, filled with smoked beef and melted cheese, luxurious European classic.</p>
            </ul>
          </div>
        </div>
      </div>


      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="{{ asset('Images/international/Spaghetti Bolognese.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Spaghetti Bolognese</h5>
           
            <ul class="social-network">
              <p>Al dente pasta, authentic tomato-meat sauce, rich and true Italian tradition.</p>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
 <img src="{{ asset('Images/international/Fish & Chips.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Fish & Chips</h5>
            
            <ul class="social-network">
              <p>olden crispy Dory fillet, classic tartar sauce, essential British comfort food.</p>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="{{ asset('Images/international/Mushroom soup.jpg') }}"class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Creamy Mushroom Soup</h5>
         
            <ul class="social-network">
              <p>Rich velvety mushroom soup, pure champignon essence, served with warm Garlic Bread.</p>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>




<section id=" team" class="team-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
        <h3>🍹Fresh Juice Collection & Premium Tea Selection 🍵</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
        <img src="{{ asset('Images/drinks/Avocado Juice.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Avocado Juice</h5>
            <ul class="social-network">
             <p>Thick and creamy fresh avocado, a luxurious texture with a hint of chocolate.</p>
            </ul>
          </div>
        </div>
      </div>


      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="{{ asset('Images/drinks/Mango Juice.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Mango Juice</h5>
           
            <ul class="social-network">
              <p>Pure, ripe mango pulp, naturally sweet, thick, and utterly refreshing.</p>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
 <img src="{{ asset('Images/drinks/Melon Juice__.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Melon Juice</h5>
            
            <ul class="social-network">
              <p>Sweet and chilled fresh melon, the perfect natural thirst quencher.</p>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="{{ asset('Images/drinks/Red Guava Juice.jpg') }}"class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Red Guava Juice</h5>
         
            <ul class="social-network">
              <p>Vitamin-rich red guava, freshly blended, a perfect sweet-sour balance.</p>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>




  

   <div class="container">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
       
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
        <img src="{{ asset('Images/tea/Hot tea.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Hot Tea / Iced Sweet Tea</h5>
            <ul class="social-network">
             <p>Finest selected tea leaves, calming aroma, the best of simplicity.</p>
            </ul>
          </div>
        </div>
      </div>


      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="{{ asset('Images/tea/Iced lemon tea.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Lemon Tea (Hot / Iced)</h5>
           
            <ul class="social-network">
              <p>Authentic tea with a zesty squeeze of fresh lemon, refreshingly healthy.</p>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
 <img src="{{ asset('Images/tea/Jasmine Tea.jpg') }}"  class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Jasmine Tea</h5>
            
            <ul class="social-network">
              <p>Light and elegant green tea, infused with the fragrant aroma of jasmin</p>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card p-0 rounded-3">
          <img src="{{ asset('Images/tea/Lychee Tea.jpg') }}"class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Lychee Tea</h5>
         
            <ul class="social-network">
              <p>Light and elegant green tea, infused with the fragrant aroma of jasmine.</p>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>











<!-- Team Section Exit-->

<!-- Gallery Section -->
<section id="gallery" class="gallery_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
        <h6>Best Picture Of Our Hotel</h6>
        <h3>Our Gallery</h3>

      </div>
    </div>
    <div class="row g-0">
      <div class="col-lg-3 col-md-6 gallery-item ">
        <img src="./Images/gallery/1.webp" class="img-fluid w-100" >
        <div class="gallery-item-content"></div>
      </div>
      <div class="col-lg-3 col-md-6 gallery-item ">
        <img src="./Images/gallery/2.webp" class="img-fluid w-100" >
        <div class="gallery-item-content"></div>
      </div>
      <div class="col-lg-3 col-md-6 gallery-item ">
        <img src="./Images/gallery/3.webp" class="img-fluid w-100" >
        <div class="gallery-item-content"></div>
      </div>
      <div class="col-lg-3 col-md-6 gallery-item ">
        <img src="./Images/gallery/4.webp" class="img-fluid w-100" >
        <div class="gallery-item-content"></div>
      </div>
      <div class=" col-md-6 gallery-item ">
        <img src="./Images/gallery/5.webp" class="img-fluid w-100" >
        <div class="gallery-item-content"></div>
      </div>
      <div class=" col-md-6 gallery-item ">
        <img src="./Images/gallery/6.webp" class="img-fluid w-100" >
        <div class="gallery-item-content"></div>
      </div>
    </div>
  </div>
</section>
<!-- Gallery Section Exit-->

<!-- Pricing Card-->
<section id="price" class="price_wrapper">
  <div class="container">
    <div class="row" >
      <div class="col-sm-12 section-title text-center mb-5" > 
        <h6>price</h6>
        <h3> Best & Affordable Price for you</h3>
      </div>

  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card p-4 text-center rounded-3">
        <h5 class="text-decoration-underline mb-4"> Economic</h5>
        <ul class="list-unstyled">
          <li>
            <p>Flight Ticket(2)</p>
          </li>
          <li>
            <p>Music Concert (30% off)</p>
          </li>
          <li>
            <p>Flight Ticket (2)</p>
          </li>
          <li>
            <p>Restaurant (snacks)</p>
          </li>
          <li>
            <p>Face Make (No)</p>
          </li>
        </ul>
        <hr/>
        <h3>$350<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
        <a href="/reservations/create" class="main-btn">Book Now</a>
      </div>
    </div>


    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card p-4 text-center rounded-3">
        <h5 class="text-decoration-underline mb-4"> Regular</h5>
        <ul class="list-unstyled">
          <li>
            <p>Flight Ticket(2)</p>
          </li>
          <li>
            <p>Music Concert (30% off)</p>
          </li>
          <li>
            <p>Flight Ticket (2)</p>
          </li>
          <li>
            <p>Restaurant (snacks)</p>
          </li>
          <li>
            <p>Face Make (No)</p>
          </li>
        </ul>
        <hr/>
        <h3>$550<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
       <a href="/reservations/create" class="main-btn">Book Now</a>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card p-4 text-center rounded-3">
        <h5 class="text-decoration-underline mb-4"> VIP</h5>
        <ul class="list-unstyled">
          <li>
            <p>Flight Ticket(2)</p>
          </li>
          <li>
            <p>Music Concert (30% off)</p>
          </li>
          <li>
            <p>Flight Ticket (2)</p>
          </li>
          <li>
            <p>Restaurant (snacks)</p>
          </li>
          <li>
            <p>Face Make (No)</p>
          </li>
        </ul>
        <hr/>
        <h3>$1000<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
       <a href="/reservations/create" class="main-btn">Book Now</a>
      </div>
    </div>


   
  </div>
    </div>
  </div>
</section>
<!-- Pricing Card Section Exit -->

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

<!-- Footer Section-->
<section id="contact" class="footer_wrapper mt-3 mt-md-0 pb-0">
  <div class="container pb-3">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <h5>hotel location</h5>
        <p class="ps-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quaerat!</p>
        <div class="contact-info">
          <ul class="list-unstyled">
            <li><a href="#"><i class="fa fa-home me-3"></i> Hotel Al-Meghah
Jl. Panorama Gunung No. 16,
Kawasan Wisata Alam Pegunungan Malang (Hampir ke arah Kota Batu)
Kec. Junrejo / Kec. Pujon, Kota Malang, Jawa Timur
Indonesia
</a></li>
            <li><a href="#"><i class="fa fa-phone me-3"></i> 0857-4838-4770
</a></li>
            <li><a href="#"><i class="fa fa-envelope me-3"></i>alfizuhriyah.2022@mhs.unisda.ac.id</a></li>
          </ul>
        </div>
      </div>


      <div class="col-lg-3 col-md-6">
        <h5>More Links</h5>
        
     
          <ul class="link-widget p-0">
            <li><a href="#">About Us</a></li>
            <li><a href="#"> Our office</a></li>
            <li><a href="#">Delivery</a></li>
            <li><a href="#">Our Store</a></li>
            <li><a href="#">Guarantee</a></li>
            <li><a href="#">Buy Gift Card</a></li>
            <li><a href="#">Return Policy</a></li>
          </ul>
        
      </div>

      
      <div class="col-lg-3 col-md-6">
        <h5>More Links</h5>
        
     
          <ul class="link-widget p-0">
            <li><a href="#">About Us</a></li>
            <li><a href="#"> Our office</a></li>
            <li><a href="#">Delivery</a></li>
            <li><a href="#">Our Store</a></li>
            <li><a href="#">Guarantee</a></li>
            <li><a href="#">Buy Gift Card</a></li>
            <li><a href="#">Return Policy</a></li>
          </ul>
        
      </div>

      
      <div class="col-lg-3 col-md-6">
        <h5>Newsletter</h5>
        <div class="form-group mb-4">
          <input type="email" class="form-control bg-transparent" placeholder="enter your email">
          <button type="submit" class="main-btn rounded-2 mt-3 border-white text-white">
            Subscribe
          </button>
        </div>
        <h5>Stay Connected</h5>
          <ul class="social-network d-flex align-items-center p-0">
            <li><a href="#"> <i class=" fab fa-facebook-f"></i></a></li>
            <li><a href="#"> <i class=" fab fa-twitter"></i></a></li>
            <li><a href="#"> <i class=" fab fa-google-plus-g"></i></a></li>
            <li><a href="#"> <i class=" fab fa-vimeo-v"></i></a></li>
          </ul>
        
      </div>
    </div>

  </div>

  <div class="container-fluid copyright-section">
    <p>Copyright  &#169  <a href="#">  Nimra</a > All Rights Reserved</p>
  </div>

</section>

 <!--Bootstrap JS CDN Link-->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<!-- Swiper Js CDN Link-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Custom JS Link-->
<script src="Js/main.js"></script>

</body>
</html>