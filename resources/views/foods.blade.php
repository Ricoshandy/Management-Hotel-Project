@extends('layouts.navbar')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>



<section class="portfolio section" style="padding-top: 120px">

       <!-- Css Custom File Link-->
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/responsive-style.css') }}">

  <div class="container">
        <h2 class="section-title fade-in text-center" style="font-family:'Times New Roman', Times, serif; font-weight: bold; font-size: 45px;"> Al-Meghah Foods  <br>
            (Best Foods Hospitality)</h2>
        <p class="text-center mb-5" style="max-width: 600px; margin: auto; color: #555;">
        This is the best type of food available in our hotel which is halal certified and very delicious
        </p>

 <div class="container">

 <!-- FOOD PREMIUM Start -->
<section id=" team" class="team-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-title text-center mb-5">
       
        <h3> 🥩 Premium Meat Specialties & Signature Indonesian Dishes ✨</h3>
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
             <p>Pure clear beef broth, premium meatballs (tendon/smooth), perfection in every slurp.</p>
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
              <p>Perfectly wok-fried rice, signature smoky aroma, mesmerizing Javanese spice blend.</p>
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
              <p>Deep, earthy black broth, tender slow-cooked beef, the taste of authentic East Java.</p>
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
              <p>Rich yellow herbal broth, savory koya topping, legendary warmth from the coast.</p>
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
      
        <h3>🍰 Luxury Dessert Collectiont &  International Favorites 🌎</h3>
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
          <img src="{{ asset('Images/international/Beef Burger & Fries.jpg') }}"class="img-fluid rounded-3">
          <div class="team-info">
            <h5>Beef Burger & Fries</h5>
         
            <ul class="social-network">
              <p>Beef Burger & Fries pure champignon essence, served with warm Garlic Bread.</p>
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



</section>
@endsection
</body>
</html>