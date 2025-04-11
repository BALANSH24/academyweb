<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunrise Academy Wall</title>
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

        .logo {
            color: white;
            font-size: 1.5rem;
            text-decoration: none;
        }

        .wall {
            padding: 6rem 2rem 2rem;
            text-align: center;
        }

        .wall h1 {
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }

        .activities {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            max-width: 1200px;
            margin: auto;
        }

        .activity {
            background: #f8f8f8;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .activity img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .activity h3 {
            margin-top: 1rem;
            font-size: 1.5rem;
            color: #2c3e50;
        }

        .activity p {
            font-size: 1rem;
            color: #666;
            margin-top: 0.5rem;
        }

        @media (max-width: 768px) {
            .wall h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">Sunrise Academy</a>
        </div>
    </nav>

    <section class="wall">
        <h1>Sunrise Academy Wall</h1>
        <div class="activities">
            <div class="activity">
                <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc" alt="Science Fair">
                <h3>Science Fair</h3>
                <p>Encouraging young minds to innovate and explore scientific concepts.</p>
            </div>
            <div class="activity">
                <img src="https://images.unsplash.com/photo-1504593811423-6dd665756598" alt="Sports Day">
                <h3>Sports Day</h3>
                <p>Building teamwork, discipline, and physical fitness through various sports.</p>
            </div>
            <div class="activity">
                <img src="https://images.unsplash.com/photo-1593696954577-cf2a13d58b44" alt="Art & Culture Festival">
                <h3>Art & Culture Festival</h3>
                <p>Celebrating creativity and diversity through artistic expressions.</p>
            </div>
            <div class="activity">
                <img src="https://images.unsplash.com/photo-1531415074968-036ba1b575da" alt="Music Club">
                <h3>Music Club</h3>
                <p>Inspiring students to learn and create music with various instruments.</p>
            </div>
            <div class="activity">
                <img src="https://images.unsplash.com/photo-1591024161384-6f2d16eb40a5" alt="Drama & Theatre">
                <h3>Drama & Theatre</h3>
                <p>Providing a platform for students to express themselves through acting.</p>
            </div>
            <div class="activity">
                <img src="https://images.unsplash.com/photo-1502784444187-359ac186c6b3" alt="Robotics Club">
                <h3>Robotics Club</h3>
                <p>Encouraging innovation by designing and building robots.</p>
            </div>
            <div class="activity">
                <img src="https://images.unsplash.com/photo-1541971875072-7fa12e2b3a4f" alt="Environmental Club">
                <h3>Environmental Club</h3>
                <p>Teaching students about sustainability and environmental conservation.</p>
            </div>
            <div class="activity">
                <img src="https://images.unsplash.com/photo-1573140247632-f8fd74997d5c" alt="Debate Club">
                <h3>Debate Club</h3>
                <p>Enhancing critical thinking and public speaking skills through debates.</p>
            </div>
            <div class="activity">
                <img src="https://images.unsplash.com/photo-1532777946370-8916b53e9d65" alt="Chess Club">
                <h3>Chess Club</h3>
                <p>Improving strategic thinking and problem-solving skills through chess.</p>
            </div>
            <div class="activity">
                <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591" alt="Cooking Club">
                <h3>Cooking Club</h3>
                <p>Teaching students culinary skills and the importance of nutrition.</p>
            </div>
        </div>
    </section>
</body>
</html>