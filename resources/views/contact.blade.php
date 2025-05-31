<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #fff;
            line-height: 1.6;
            padding: 40px 20px;
            
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #2c3e50;
            text-align: center;
        }

        .intro-text {
            text-align: center;
            margin-bottom: 40px;
            color: #7f8c8d;
            font-size: 1.1rem;
        }

        /* Form Styles */
        .contact-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group.full-width {
            grid-column: span 2;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
        }

        input, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #3498db;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .submit-btn {
            grid-column: span 2;
            background-color: #3498db;
            color: white;
            border: none;
            padding: 14px 20px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #2980b9;
        }

        /* Placeholder Styles */
        ::placeholder {
            color: #bdc3c7;
            opacity: 1;
        }
              nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 0;
            z-index: 1000;
            transition: all 0.3s ease;
            /* background-color: #f1efef; */
            background: url('https://okayama-korakuen.jp/material/files/group/2/akikorakuen.JPG') ;
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
            color: rgb(19, 19, 19);
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
            color: rgb(12, 12, 12);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            text-transform: uppercase;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .nav-links a:hover {
            color: #FFD700;
        }


        /* Responsive Styles */
        @media (max-width: 768px) {
            .contact-form {
                grid-template-columns: 1fr;
            }
            
            .form-group.full-width {
                grid-column: span 1;
            }
            
            .submit-btn {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body>
        <nav id="navbar">
        <div class="container nav-container">
            <a href="#" class="logo"> Contact us</a>
            <ul class="nav-links">
                <li><a href="{{URL::to('/')}}">Home</a></li>
                <li><a href="#">blog</a></li>
                <li><a href="#">visite us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>Contact us</h1>
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
        <textarea id="message" name="message" placeholder="Please enter query..." required></textarea>
    </div>

    <button type="submit" class="submit-btn">Submit</button>
</form>


</body>
</html>