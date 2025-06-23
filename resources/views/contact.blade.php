<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>contact us</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="img/jibc1.png" rel="icon">
<link rel="stylesheet" href="css/contact.css">

<body>
  <nav id="navbar">
    <div class="container nav-container">
      <a href="#" class="logo"> OKAYAMA</a>
      <ul class="nav-links">
            <li><a href="{{URL::to('/')}}">Home</a></li>
                <li><a href="{{URL::to('/about')}}">About Us</a></li>
                <li><a href="{{URL::to('/blog')}}">blog</a></li>
                <li><a href="{{URL::to('/contact')}}">Contact</a></li>
      </ul>
    </div>
    <!-- <div id="lang-switcher" style="position: absolute; right: 20px; top: 20px">

      <button onclick="setLanguage('ne')">NE</button>
      <button onclick="setLanguage('jp')">JP</button>
    </div> -->
  </nav>

  <!-- Hero Section -->
  <header>
    <div class="hero-content">
      <h1>CONTACT</h1>
    </div>
  </header>
<
    <div class="container">
      
        <p class="intro-text"></p>
        {{-- ✅ Success Message --}}
        @if(session('success'))
            <div style="color: green; font-weight: bold; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        
     <form class="contact-form" id="contact" action="{{ url('/contact') }}" method="post">

    @csrf

    <div class="form-group">
        <label for="firstName">FIRST NAME</label>
        <input type="text" id="firstName" name="first_name" placeholder="Please enter first name..." required>
    </div>

    <div class="form-group">
        <label for="lastName">LAST NAME</label>
        <input type="text" id="lastName" name="last_name" placeholder="Please enter last name..." required>
    </div>

    <div class="form-group">
        <label for="email">EMAIL</label>
        <input type="email" id="email" name="email" placeholder="Please enter email..." required>
    </div>

    <div class="form-group">
        <label for="phone">PHONE NUMBER</label>
        <input type="tel" id="phone" name="phone" placeholder="Please enter phone number..." required>
    </div>

    <div class="form-group full-width">
        <label for="message">WHAT DO YOU HAVE IN MIND</label>
        <textarea id="message" name="message" placeholder="Thank you for your feedback..." required></textarea>
    </div>

    <button type="submit" class="submit-btn">Submit</button>
</form>
</div>

  <!-- Footer Section -->
  <footer>
    <div class="container footer-container">
      <div class="footer-col">
        <h3>About Okayama</h3>
        <p>
          Discover the beauty and culture of Okayama Prefecture, Japan's
          hidden gem in the Setouchi region.
        </p>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a
            href="https://www.youtube.com/watch?v=zp6DCKsUWJg&ab_channel=%E7%80%AC%E6%88%B8%E5%86%85%E5%B8%82%E5%85%AC%E5%BC%8F%E3%83%81%E3%83%A3%E3%83%B3%E3%83%8D%E3%83%AB"><i
              class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="footer-col">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Destinations</a></li>
          <li><a href="#">Travel Guide</a></li>
          <li><a href="#">Events</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>Contact Us</h3>
        <ul>
          <li><i class="fas fa-map-marker-alt"></i> Okayama City, Japan</li>
          <li><i class="fas fa-phone"></i> +81 86-000-0000</li>
          <li><i class="fas fa-envelope"></i> info@okayama-setouchi.jp</li>
        </ul>
      </div>
    </div>
    <div class="copyright">
      <p>&copy; 2023 JIBC Okayama All Rights Reserved.</p>
    </div>
  </footer>
  <!-- this is js  -->
  <!-- <script src="js/java.js"></script> -->
</body>

</html>