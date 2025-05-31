<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Okayama | Japan's Hidden Gem</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
            
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header & Hero Section */
        header {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                        url('https://okayama-korakuen.jp/material/files/group/2/akikorakuen.JPG');
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            background: #FFD700;
            color: #333;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background: #333;
            color: #FFD700;
            transform: translateY(-3px);
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        nav.scrolled {
            background: rgba(0, 0, 0, 0.9);
            padding: 15px 0;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            text-transform: uppercase;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .nav-links a:hover {
            color: #FFD700;
        }

        /* Featured Destinations */
        .section-title {
            text-align: center;
            margin: 80px 0 50px;
            font-size: 2.5rem;
            color: #333;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: #FFD700;
            margin: 15px auto;
        }

        .destinations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 80px;
        }

        .destination-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .destination-card:hover {
            transform: translateY(-10px);
        }

        .card-image {
            height: 250px;
            overflow: hidden;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .destination-card:hover .card-image img {
            transform: scale(1.1);
        }

        .card-content {
            padding: 20px;
        }

        .card-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #222;
        }

        .card-content p {
            color: #666;
            margin-bottom: 15px;
        }

        .card-content a {
            color: #FFD700;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
        }

        .card-content a i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .card-content a:hover i {
            transform: translateX(5px);
        }

        /* Quick Facts */
        .quick-facts {
            background: #1a2a3a;
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .facts-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 900px;
            margin: 0 auto;
        }

        .fact-item {
            flex: 1;
            min-width: 200px;
            margin: 15px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        .fact-item i {
            font-size: 2.5rem;
            color: #FFD700;
            margin-bottom: 15px;
        }

        .fact-item h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .fact-item p {
            font-size: 1rem;
            opacity: 0.9;
        }

        /* Itinerary */
        .itinerary {
            padding: 80px 0;
            background: #f5f5f5;
        }

        .itinerary-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }OKAYAMA

        .itinerary-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        .itinerary-header {
            background: #1a2a3a;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .itinerary-header h3 {
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        .itinerary-content {
            padding: 20px;
        }

        .itinerary-content ul {
            list-style: none;
        }

        .itinerary-content li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
        }

        .itinerary-content li:last-child {
            border-bottom: none;
        }

        .itinerary-content li i {
            color: #FFD700;
            margin-right: 10px;
        }

        /* Footer */
        footer {
            background: #1a2a3a;
            color: white;
            padding: 60px 0 20px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-col h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background: #FFD700;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #FFD700;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: #FFD700;
            color: #333;
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            opacity: 0.8;
        }

      footer{
        justify-content: center;
        align-items: center;
      }  

      
  
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav id="navbar">
        <div class="container nav-container">
            <a href="#" class="logo"> OKAYAMA</a>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">blog</a></li>
                <li><a href="#">visite us</a></li>
                <li><a href="{{URL::to('/contact')}}">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <header>
        <div class="hero-content">
            <h1>岡山市 OKAYAMA</h1>
            <p>岡山県（おかやまけん）は、日本の中国地方（山陽地方）に位置する県</p>
            <a href="#destinations" class="btn">Explore Now</a>
        </div>
    </header>

    <!-- Featured Destinations -->
    <section id="destinations" class="container">
        <h2 class="section-title">Famous Places to Explore</h2>
        <div class="destinations-grid">
            <!-- Okayama Castle & Korakuen -->
            <div class="destination-card">
                <div class="card-image">
                    <img src="https://okayama-korakuen.jp/material/files/group/2/harugenso.jpg" alt="Okayama Castle and Korakuen Garden">
                </div>
                <div class="card-content">
                    <h3>岡山城</h3>
                    <p>戦国時代に、備前東部から興って、美作、備中東部まで勢力を伸ばした宇喜多氏が本拠としたことで近世城郭の基礎が生まれ、その後小早川氏、池田氏により整備、拡張が行われた</p>
                    <a href="https://www.okayama-japan.jp/en">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Kurashiki Bikan -->
            <div class="destination-card">
                <div class="card-image">
                    <img src="https://okayama-korakuen.jp/material/files/group/2/kaienkinenbi.JPG" alt="Kurashiki Bikan Historical Quarter">
                </div>
                <div class="card-content">
                    <h3>倉敷市ls</h3>
                    <p>倉敷市（くらしきし）は、岡山県の南部に位置する市。白壁の町並みが残る倉敷美観地区、本州と四国を結ぶ瀬戸大橋などで知られる。中核市・保健所政令市に指定されている.</p>
                    <a href="https://www.city.kurashiki.okayama.jp/">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Naoshima Art Island -->
            <div class="destination-card">
                <div class="card-image">
                    <img src="https://k-ecc.or.jp/kagawa-keikan/wp-content/uploads/2020/09/2%E7%B4%AB%E9%9B%B2%E5%87%BA%E5%B1%B1%E5%9C%92%E5%9C%B0%E7%B2%9F%E5%B3%B62-1.jpg" alt="Naoshima Art Island">
                </div>
                <div class="card-content">
                    <h3>瀬戸内</h3>
                    <p>瀬戸内海（せとないかい） - 本州山陽地方と四国地方の間にある海域。「せとうちかい」とは読まない。</p>
                    <a href="https://www.setouchi.travel/en/setouchi-journeys/">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

          
</div>
    <!-- Footer Section -->
    <footer>
        <div class="container footer-container">
            <div class="footer-col">
                <h3>About Okayama</h3>
                <p>Discover the beauty and culture of Okayama Prefecture, Japan's hidden gem in the Setouchi region.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/watch?v=zp6DCKsUWJg&ab_channel=%E7%80%AC%E6%88%B8%E5%86%85%E5%B8%82%E5%85%AC%E5%BC%8F%E3%83%81%E3%83%A3%E3%83%B3%E3%83%8D%E3%83%AB"><i class="fab fa-youtube"></i></a>
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
                    <li><i class="fas fa-envelope"></i> info@okayama-tourism.jp</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2023 Okayama Tourism. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>