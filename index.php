<?php
// This is your main PHP file (e.g., index.php)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Hero Section */
        .hero {
            position: relative;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            width: 100%;
        }

        .hero-background {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .hero-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensure the image covers the full area without stretching */
        }

        .hero-content {
            position: absolute;
            top: 50%; /* Vertically center */
            left: 50%; /* Horizontally center */
            transform: translate(-50%, -50%); /* Adjust position to be centered */
            color: white;
            text-align: center;
            z-index: 1; /* Ensure the text is above the image */
        }

        .hero-content h1 {
            color: white;
            font-size: 3rem; /* Optional: Adjust size for readability */
        }

        .hero-content p {
            color: white;
            font-size: 1.25rem; /* Optional: Adjust size for readability */
        }

        .hero-content .btn {
            margin-top: 20px;
        }

        /* Awards Section */
        .awards {
            margin-top: 4rem;
        }

        .award-img {
            width: 100%;
        }

        /* Stats Section */
        .stats {
            margin-top: 5rem;
        }

        .stats-img {
            width: 110%;
        }

        /* Additional Styling */
        .container {
            padding-left: 5%;
            padding-right: 5%;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Our Platform</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto"> <!-- ms-auto makes the links align to the right -->
                <li class="nav-item">
                    <a class="nav-link" href="l.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="a.php">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-background">
            <img src="media/extra.jpg" alt="Hero Background" class="hero-img">
            <div class="hero-content">
                <h1>Welcome to Our Platform</h1>
                <p>Find your perfect match with us.</p>
                <button class="btn btn-primary btn-lg">Get Started</button>
            </div>
        </div>
    </div>

    <!-- Awards Section -->
    <div class="awards container mt-4">
        <div class="row">
            <div class="col-6 p-5 mt-5">
                <img src="media/award.jpg" alt="Award" class="award-img">
            </div>
            <div class="col-6 p-5 mt-4">
                <h1>Over 2+ Million Happy Matches</h1>
                <p>Every day, thousands find their perfect life partners on our trusted platform. Join India's most preferred matchmaking service and start your journey today!</p>
                <div class="row mt-5">
                    <div class="col-6">
                        <ul>
                            <li><p>💖 Traditional & Modern Matches</p></li>
                            <li><p>👨‍⚕️ Doctors, Engineers, and Professionals</p></li>
                            <li><p>🌍 NRI & International Matches</p></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li><p>🕌 Community & Religion-Based Matches</p></li>
                            <li><p>💼 Elite & Business-Class Matches</p></li>
                            <li><p>💑 Second Marriages & Remarriages</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="stats container mt-5">
        <div class="row p-5">
            <div class="col-6 p-5">
                <div class="mb-5">
                    <h1>Find Love with Confidence</h1>
                </div>
                <h4>Genuine Connections, No Gimmicks</h4>
                <p class="text-muted">No fake profiles, no unnecessary distractions—just meaningful connections through a platform that respects your privacy and preferences.</p>
                <h4>More Than Just a Matchmaking Site</h4>
                <p class="text-muted">Not just a platform, but a whole ecosystem built for you. With personalized recommendations and expert guidance, we help you find a match that truly complements your life.</p>
                <h4>Build a Stronger Future Together</h4>
                <p class="text-muted">With features like Compatibility Insights & Relationship Tips, we don’t just help you find a match—we help you build a lasting bond.</p>
            </div>
            <div class="col-6 p-5 mt-4">
                <img src="media/image.jpg" alt="Stats Image" class="stats-img">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
