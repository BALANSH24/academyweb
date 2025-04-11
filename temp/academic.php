<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academics - Sunrise Academy</title>
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

        .nav-container {
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
            background: url('https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') no-repeat center;
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
            <h1>Our Academic Excellence</h1>
        </div>
    </section>

    <section class="content">
        <h2>Academic Programs</h2>
        <p>
            At Sunrise Academy, we offer a well-rounded curriculum designed to nurture critical thinking, creativity,
            and leadership. Our programs include Science, Mathematics, Literature, and the Arts, ensuring a holistic
            education for our students.
        </p>
        <p>
            Our faculty consists of experienced educators who are dedicated to fostering an engaging and enriching
            learning environment.
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
