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
                  <a href="{{ url('/dashboard') }}">Home</a>
                  </li>
              

<li class="nav-item">
    <a class="nav-link" href="dashboard#about">About</a>
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


  <div class="container my-4">
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @yield('content')
  </div>