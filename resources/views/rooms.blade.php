@extends('layouts.navbar')

@section('content')


 <div class="container">
        <h2 class="section-title fade-in text-center" style="font-family:'Times New Roman', Times, serif; font-weight: bold; font-size: 45px;"> Al-Meghah Rooms <br>
            (Islamic Luxury Hospitality)</h2>
        <p class="text-center mb-5" style="max-width: 700px; margin: auto; color: #505050; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: medium;">
          We provide a variety of modern amenities to ensure the comfort and best experience for guest.<br> 
          <h2 class="section-title fade-in" style="font-family:'Times New Roman', Times, serif; font-weight: bold; font-size: 20px; padding-left: 14px;">Islamic Value Assurance for All Room Types</h2>
  <br>

<ul class="portfolio-description">
  <li>Every room in Hotel Pillowton is designed with Islamic friendly comfort</li>
    <li> Qiblah direction sign in every room</li>
      <li> Prayer mat (sajadah) provided</li>
        <li> No alcohol products or decorations</li>
          <li> Respectful and non-intrusive room service</li>
          <li>   Family friendly environment</li>
</ul>
 


        <div class="portfolio-grid"></div>

   <!-- DULUXE ROOMS Section -->
    <!-- LUXURY SUITE Section -->
<section id="certivicate" class="portfolio section">
  <div class="container">
     <h2 class="section-title fade-in" style="font-family:'Times New Roman', Times, serif; font-weight: bold; font-size: 30px;">💎 Luxury Suite</h2>

    <!-- Portfolio Grid -->
    <div class="portfolio-grid">
      
      <!-- Card 1: Facilities -->
      <div class="portfolio-item fade-in" data-category="web">
        <div class="portfolio-image">
          <img src="{{ asset('Images/Kamar hotel tingkat 1/IMG-20251122-WA0095.jpg') }}" alt="Luxury Suite">
          <div class="portfolio-overlay">
            <a href="#" class="portfolio-link" aria-label="View Luxury Suite"></a>
          </div>
        </div>
        <div class="portfolio-content">
          <h3 class="portfolio-title">Facilities include</h3>
          <p class="portfolio-description">• King bed with hotel-grade comfort</p>
          <p class="portfolio-description">• Private mountain-view balcony</p>
          <p class="portfolio-description">• 50" TV & full-body smart mirror</p>
          <p class="portfolio-description">• Mini library & sofa lounge</p>
          <p class="portfolio-description">• Coffee & tea set & AC</p>
          
          <!-- Price & Button -->
          <div class="room-price-section">
            <div class="room-price">
              <span class="price-amount">Rp 5.000.000</span>
              <span class="price-period">/night</span>
            </div>
            <a href="{{ route('reservations.create') }}" class="order-btn-gold">Order Now</a>
          </div>
        </div>
      </div>

      <!-- Card 2: Bathroom -->
      <div class="portfolio-item fade-in" data-category="mobile">
        <div class="portfolio-image">
          <img src="{{ asset('Images/Kamar hotel tingkat 1/IMG-20251122-WA0097.jpg') }}" alt="Bathroom">
          <div class="portfolio-overlay">
            <a href="#" class="portfolio-link" aria-label="View Bathroom"></a>
          </div>
        </div>
        <div class="portfolio-content">
          <h3 class="portfolio-title">Bathroom</h3>
          <p class="portfolio-description">• Bathtub + shower</p>
          <p class="portfolio-description">• Premium and alcohol-free toiletries</p>
          
          <!-- Price & Button -->
          <div class="room-price-section">
            <div class="room-price">
              <span class="price-amount">Rp 5.000.000</span>
              <span class="price-period">/night</span>
            </div>
            <a href="{{ route('reservations.create') }}" class="order-btn-gold">Order Now</a>
          </div>
        </div>
      </div>

      <!-- Card 3: Food & Beverage -->
   

    </div>
  </div>
</section>

<!-- DELUXE ROOM Section -->
<section id="certivicate" class="portfolio section">
  <div class="container">
   <h2 class="section-title fade-in" style="font-family:'Times New Roman', Times, serif; font-weight: bold; font-size: 30px;">🌄 Deluxe Room</h2>

    <!-- Portfolio Grid -->
    <div class="portfolio-grid">
      
      <!-- Card 1: Facilities -->
      <div class="portfolio-item fade-in" data-category="web">
        <div class="portfolio-image">
          <img src="{{ asset('Images/Kamar hotel tingkat 2/IMG-20251122-WA0096.jpg') }}" alt="Deluxe Room">
          <div class="portfolio-overlay">
            <a href="#" class="portfolio-link" aria-label="View Deluxe Room"></a>
          </div>
        </div>
        <div class="portfolio-content">
          <h3 class="portfolio-title">Facilities include</h3>
          <p class="portfolio-description">• Private mountain-view balcony</p>
          <p class="portfolio-description">• 50" TV & full-body smart mirror</p>
          <p class="portfolio-description">• Mini library & sofa lounge</p>
          <p class="portfolio-description">• Coffee & tea set & AC</p>
          
          <!-- Price & Button -->
          <div class="room-price-section">
            <div class="room-price">
              <span class="price-amount">Rp 3.000.000</span>
              <span class="price-period">/night</span>
            </div>
            <a href="{{ route('reservations.create') }}" class="order-btn-gold">Order Now</a>
          </div>
        </div>
      </div>

      <!-- Card 2: Bathroom -->
      <div class="portfolio-item fade-in" data-category="mobile">
        <div class="portfolio-image">
          <img src="{{ asset('Images/Kamar hotel tingkat 2/IMG-20251122-WA0093.jpg') }}" alt="Bathroom">
          <div class="portfolio-overlay">
            <a href="#" class="portfolio-link" aria-label="View Bathroom"></a>
          </div>
        </div>
        <div class="portfolio-content">
          <h3 class="portfolio-title">Bathroom</h3>
          <p class="portfolio-description">• Bathtub + shower</p>
          <p class="portfolio-description">• Premium halal and free alcohol</p>
          
          <!-- Price & Button -->
          <div class="room-price-section">
            <div class="room-price">
              <span class="price-amount">Rp 3.000.000</span>
              <span class="price-period">/night</span>
            </div>
            <a href="{{ route('reservations.create') }}" class="order-btn-gold">Order Now</a>
          </div>
        </div>
      </div>

    
    </div>
  </div>
</section>

<!-- STANDARD ROOM Section -->
<section id="certivicate" class="portfolio section">
  <div class="container">
    <h2 class="section-title fade-in" style="font-family:'Times New Roman', Times, serif; font-weight: bold; font-size: 30px;">🌿 Standard Room</h2>

    <!-- Portfolio Grid -->
    <div class="portfolio-grid">
      
      <!-- Card 1: Facilities -->
      <div class="portfolio-item fade-in" data-category="web">
        <div class="portfolio-image">
          <img src="{{ asset('Images/Kamar hotel tingkat 3/IMG-20251122-WA0092.jpg') }}" alt="Standard Room">
          <div class="portfolio-overlay">
            <a href="#" class="portfolio-link" aria-label="View Standard Room"></a>
          </div>
        </div>
        <div class="portfolio-content">
          <h3 class="portfolio-title">Facilities include</h3>
          <p class="portfolio-description">• King bed with hotel-grade comfort</p>
          <p class="portfolio-description">• Private mountain-view balcony</p>
          <p class="portfolio-description">• 50" TV & full-body smart mirror</p>
          <p class="portfolio-description">• Mini library & sofa lounge</p>
          <p class="portfolio-description">• Coffee & tea set & AC</p>
          
          <!-- Price & Button -->
          <div class="room-price-section">
            <div class="room-price">
              <span class="price-amount">Rp 1.500.000</span>
              <span class="price-period">/night</span>
            </div>
            <a href="{{ route('reservations.create') }}" class="order-btn-gold">Order Now</a>
          </div>
        </div>
      </div>

      <!-- Card 2: Bathroom -->
      <div class="portfolio-item fade-in" data-category="mobile">
        <div class="portfolio-image">
          <img src="{{ asset('Images/Kamar hotel tingkat 3/IMG-20251122-WA0094.jpg') }}" alt="Bathroom">
          <div class="portfolio-overlay">
            <a href="#" class="portfolio-link" aria-label="View Bathroom"></a>
          </div>
        </div>
        <div class="portfolio-content">
          <h3 class="portfolio-title">Bathroom</h3>
          <p class="portfolio-description">• Bathtub + shower</p>
          <p class="portfolio-description">• Premium and free alcohol-free toiletries</p>
          
          <!-- Price & Button -->
          <div class="room-price-section">
            <div class="room-price">
              <span class="price-amount">Rp 1.500.000</span>
              <span class="price-period">/night</span>
            </div>
            <a href="{{ route('reservations.create') }}" class="order-btn-gold">Order Now</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
/* Portfolio Grid */
.portfolio-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 2rem;
}

.portfolio-item {
  background-color: #ffffff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
  opacity: 1;
  transform: scale(1);
}

.portfolio-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.portfolio-item.hidden {
  opacity: 0;
  transform: scale(0.8);
  pointer-events: none;
}

.portfolio-image {
  position: relative;
  overflow: hidden;
}

.portfolio-image img {
  width: 100%;
  height: 250px;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.portfolio-item:hover .portfolio-image img {
  transform: scale(1.1);
}

.portfolio-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.portfolio-item:hover .portfolio-overlay {
  opacity: 1;
}

.portfolio-link {
  color: #ffffff;
  text-decoration: none;
  font-weight: 600;
  padding: 0.5rem 1rem;
  border: 2px solid #ffffff;
  border-radius: 5px;
  transition: all 0.3s ease;
}

.portfolio-link:hover {
  background-color: #ffffff;
  color: #007bff;
}

.portfolio-content {
  padding: 1.5rem;
}

.portfolio-title {
  margin-bottom: 0.5rem;
  color: #000000;
  font-size: 1.25rem;
  font-weight: 600;
}

.portfolio-description {
  color: #666666;
  margin-bottom: 0.5rem;
  font-size: 0.95rem;
  line-height: 1.6;
}

/* PRICE & BUTTON SECTION (ALL CARDS) */
.room-price-section {
  margin-top: 1.5rem;
  padding-top: 1rem;
  border-top: 2px solid #f0f0f0;
}

.room-price {
  text-align: center;
  margin-bottom: 1rem;
}

.price-amount {
  display: block;
  font-size: 1.5rem;
  font-weight: 700;
  color: #d4a574;
  margin-bottom: 0.25rem;
}

.price-period {
  font-size: 0.9rem;
  color: #999999;
}

/* ORDER NOW BUTTON - GOLD COLOR */
.order-btn-gold {
  display: block;
  width: 100%;
  padding: 12px 24px;
  background: linear-gradient(135deg, #d4a574 0%, #b8935f 100%);
  color: white !important;
  text-align: center;
  text-decoration: none;
  font-weight: 600;
  font-size: 1rem;
  border-radius: 8px;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(212, 165, 116, 0.3);
  border: none;
}

.order-btn-gold:hover {
  background: linear-gradient(135deg, #c49563 0%, #a8854f 100%);
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(212, 165, 116, 0.5);
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .portfolio-grid {
    grid-template-columns: 1fr;
    gap: 1.5rem;
  }

  .price-amount {
    font-size: 1.35rem;
  }

  .order-btn-gold {
    padding: 10px 20px;
    font-size: 0.95rem;
  }
}

@media (max-width: 480px) {
  .portfolio-item {
    border-radius: 8px;
  }

  .portfolio-content {
    padding: 1.25rem;
  }

  .price-amount {
    font-size: 1.25rem;
  }

  .order-btn-gold {
    padding: 10px 18px;
    font-size: 0.9rem;
  }
}
</style>
@endsection


