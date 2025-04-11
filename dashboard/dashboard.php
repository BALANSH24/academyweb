<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sunrise Academy</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            padding: 2rem 1rem;
            color: white;
            position: fixed;
            height: 100%;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 2rem;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            padding: 1rem;
            cursor: pointer;
        }

        .sidebar ul li:hover {
            background-color: #3498db;
        }

        .main-content {
            margin-left: 250px;
            padding: 2rem;
            flex: 1;
        }

        .card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .card h3 {
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
            .main-content {
                margin-left: 200px;
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                position: absolute;
                width: 100%;
                height: auto;
                padding: 1rem;
                text-align: center;
            }
            .main-content {
                margin-left: 0;
                margin-top: 200px;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li>Home</li>
            <li>Admission Requests</li>
            <li>Messages</li>
            <li>Settings</li>
            <li>Logout</li>
        </ul>
    </div>

    <div class="main-content">
        <div class="card">
            <h3>Admission Requests</h3>
            <p>New Admission Requests: 5</p>
        </div>
        <div class="card">
            <h3>Messages</h3>
            <p>Unread Messages: 3</p>
        </div>
    </div>
</body>
</html>
