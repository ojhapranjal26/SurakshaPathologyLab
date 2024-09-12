<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SURAKSHA PATHOLOGY</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <!-- Header with Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SURAKSHA LAB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: #0056b3;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item"></li>
                        <a class="nav-link" href="admin/index.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-white text-center d-flex justify-content-center align-items-center">
        <div class="container">
            <h1 class="display-4">SURAKSHA PATHALOGY LAB</h1>
            <p class="lead">Fast, Accurate, and Reliable Blood Tests</p>
            <a href="#services" class="btn btn-primary-custom mt-3">Explore Services</a>
        </div>
    </section>

    <!-- Services Section -->
<!-- Services Section with Carousel -->
<section id="services" class="py-5">
    <div class="container">
        <h2 class="text-center">Our Services</h2>
        <div id="servicesCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="sources/image1.jpg" class="card-img-top" alt="Service 1">
                                <div class="card-body">
                                    <h5 class="card-title">Complete Blood Count (CBC)</h5>
                                    <p class="card-text">Get accurate results for your CBC test in a timely manner.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="sources/image2.jpg" class="card-img-top" alt="Service 2">
                                <div class="card-body">
                                    <h5 class="card-title">Blood Glucose Test</h5>
                                    <p class="card-text">Monitor your blood sugar levels with precision testing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="sources/image3.jpg" class="card-img-top" alt="Service 3">
                                <div class="card-body">
                                    <h5 class="card-title">Lipid Profile</h5>
                                    <p class="card-text">Measure cholesterol and triglyceride levels for heart health.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="sources/image4.jpg" class="card-img-top" alt="Service 4">
                                <div class="card-body">
                                    <h5 class="card-title">Vitamin D Test</h5>
                                    <p class="card-text">Evaluate your vitamin D levels for optimal health.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="sources/image5.jpg" class="card-img-top" alt="Service 5">
                                <div class="card-body">
                                    <h5 class="card-title">Thyroid Function Test</h5>
                                    <p class="card-text">Check your thyroid hormone levels for proper diagnosis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="sources/image6.avif" class="card-img-top" alt="Service 6">
                                <div class="card-body">
                                    <h5 class="card-title">Liver Function Test</h5>
                                    <p class="card-text">Assess liver health with detailed liver function panels.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>


    <!-- About Section -->
    <section id="about" class="bg-light py-5 about-section">
        <div class="container">
            <h2 class="text-center">About Us</h2>
            <p class="lead text-center mt-4">We are a leading blood testing lab dedicated to providing fast and reliable results to help you manage your health. Our state-of-the-art technology ensures the highest level of accuracy for all your blood tests.</p>
        </div>
    </section>
    

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center">Contact Us</h2>
            <div class="row mt-4">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary-custom">Send Message</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h5>Address</h5>
                    <p>123 Lab Street, Health City</p>
                    <h5>Phone</h5>
                    <p>+1 234 567 890</p>
                    <h5>Email</h5>
                    <p>info@bloodlab.com</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-white text-center">
        <p >&copy; 2024 BloodLab. All Rights Reserved. <a href="#">Privacy Policy</a></p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        const servicesCarousel = new bootstrap.Carousel('#servicesCarousel', {
            interval: 3000, // 3 seconds
            ride: 'carousel'
        });
    </script>
    
    
</body>
</html>
