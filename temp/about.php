<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Sunrise Academy</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #2c3e50;
            padding: 1rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            color: white;
            font-size: 1.5rem;
            text-decoration: none;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 2rem;
        }

        .nav-links li a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
        }

        .nav-links li a:hover {
            color: #3498db;
        }

        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            color: white;
            background: none;
            border: none;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                background-color: #2c3e50;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                text-align: center;
                padding: 1rem 0;
            }

            .nav-links.active {
                display: flex;
            }

            .menu-toggle {
                display: block;
            }
        }

        .hero {
            height: 60vh;
            background: url('https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') no-repeat center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding-top: 60px;
        }

        .hero-content {
            background: rgba(0, 0, 0, 0.5);
            padding: 2rem;
            border-radius: 10px;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .content {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
            text-align: center;
        }

        .content h2 {
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }

        .content p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #666;
            margin-bottom: 1.5rem;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            padding: 2rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">Sunrise Academy</a>
            <button class="menu-toggle" onclick="toggleMenu()">☰</button>
            <ul class="nav-links">
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="admis.html">Admissions</a></li>
                <li><a href="academic.html">Academics</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <h1>About Sunrise Academy</h1>
        </div>
    </section>

    <section class="content">
        <h2>Our Story</h2>
        <p>
            Sunrise Academy was founded in 1995 with a vision to provide exceptional education that empowers students to achieve academic excellence
            while nurturing creativity and leadership qualities.
        </p>
        <h2>Our Mission</h2>
        <p>
            We are committed to fostering an inclusive learning environment that encourages innovation, integrity, and lifelong learning.
        </p>
        <h2>Why Choose Us?</h2>
        <p>
            With state-of-the-art facilities, a dedicated faculty, and a well-rounded curriculum, Sunrise Academy ensures that every student
            reaches their full potential.
        </p>
    </section>

    <footer>
        <p>&copy; 2025 Sunrise Academy. All Rights Reserved.</p>
    </footer>

    <script>
        function toggleMenu() {
            document.querySelector('.nav-links').classList.toggle('active');
        }
    </script>
</body>
</html>
