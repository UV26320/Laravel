<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">My Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact/uday">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-primary text-center">About Us</h1>
        <p class="text-secondary text-center">We are passionate about delivering high-quality solutions to our customers.</p>

        <div class="row mt-4">
            <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/150" alt="Mission" class="img-fluid rounded-circle mb-3">
                <h4>Our Mission</h4>
                <p>To provide innovative and efficient solutions that empower individuals and businesses to thrive.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/150" alt="Vision" class="img-fluid rounded-circle mb-3">
                <h4>Our Vision</h4>
                <p>To be a global leader in technology solutions, inspiring growth and excellence in every industry we serve.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/150" alt="Values" class="img-fluid rounded-circle mb-3">
                <h4>Our Values</h4>
                <p>Integrity, innovation, and commitment to excellence drive everything we do.</p>
            </div>
        </div>
    </div>

    <footer class="bg-primary text-white text-center py-3 mt-5">
        <p>&copy; {{ date('Y') }} My Website. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
