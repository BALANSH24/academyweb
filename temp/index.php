<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunrise Academy - Empowering Future Leaders</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Navigation */
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

        /* Hero Section */
        .hero {
            height: 100vh;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding-top: 60px;
            transition: background 1s ease-in-out;
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

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .cta-button {
            background-color: #3498db;
            color: white;
            padding: 0.8rem 2rem;
            text-decoration: none;
            border-radius: 5px;
        }

        /* About Section */
        .about {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
            text-align: center;
        }

        .about h2 {
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }

        .about p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #666;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: white;
            padding: 2rem;
            text-align: center;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
   include "navbar.php";
    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="hero-content">
            <h1>Welcome to Sunrise Academy</h1>
            <p>Empowering young minds for a brighter future</p>
            <a href="wall.html" class="cta-button">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <h2>About Our School</h2>
        <p>
            Sunrise Academy is dedicated to providing quality education that nurtures intellectual curiosity, 
            creativity, and critical thinking. Established in 1995, we have been shaping young minds with 
            our experienced faculty and state-of-the-art facilities. Our holistic approach ensures students 
            excel academically while developing strong moral values and leadership skills.
        </p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Sunrise Academy. All Rights Reserved.</p>
    </footer>

    <script>
        const images = [
            'https://images.unsplash.com/photo-1580582932707-520aed937b7b?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1580974852861-c381510bc98a?q=80&w=1984&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1453733190371-0a9bedd82893?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1588072432836-e10032774350?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'  
        ];
        
        let currentIndex = 0;
        function changeBackground() {
            currentIndex = (currentIndex + 1) % images.length;
            document.getElementById('hero').style.backgroundImage = `url(${images[currentIndex]})`;
        }
        
        setInterval(changeBackground, 5000);
    </script>
</body>
</html>
