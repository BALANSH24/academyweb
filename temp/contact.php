<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Sunrise Academy</title>
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

        .contact {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 2rem;
            text-align: center;
        }

        .contact h2 {
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .contact p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 2rem;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: #f8f8f8;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .form-container input, .form-container textarea {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container button {
            background-color: #3498db;
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #2980b9;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            padding: 2rem;
            text-align: center;
            margin-top: 2rem;
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
                <li><a href="acadamic.html">Academics</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section class="contact">
        <h2>Contact Us</h2>
        <p>Have any questions? Reach out to us!</p>
        <div class="form-container">
            <form id="contact-form" onsubmit="submitContactForm(event)">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Sunrise Academy. All Rights Reserved.</p>
    </footer>

    <script>
        function toggleMenu() {
            document.querySelector('.nav-links').classList.toggle('active');
        }
        
        function submitContactForm(event) {
            event.preventDefault();
            alert('Message sent successfully!');
            document.getElementById('contact-form').reset();
        }
    </script>
</body>
</html>
