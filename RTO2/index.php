<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Brighton College</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    
    <style>

    </style>
</head>

<body>
<?php include 'navbar.php'; ?>
  <?php include 'enquiry_modal.php'; ?>
  
  <main>
    <section class="hero text-center text-white" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/banner.jpg') no-repeat center center/cover; color:#fff;">
        <h1 class="display-4 fw-bold">Welcome to Brighton College</h1>
        <p class="lead">Empowering Students for a Brighter Future</p>

        <button type="button" class="btn btn-light btn-lg btn-custom mt-4" data-bs-toggle="modal" data-bs-target="#myModal">
            Enquire Now
        </button>
    </section>

    <section class="about text-center py-5 ">
        <div class="container">
            <h2 class="mb-4 display-6 fw-bold">About Us</h2>
            <p class="mb-4 lead">Brighton College is dedicated to providing high-quality education that inspires curiosity, creativity, and lifelong learning. Since 2016, we have been shaping confident and responsible students ready for the future.</p>
            <a href="about.php" class="btn btn-outline-primary btn-lg">Read More <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>


    <section class="news py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 display-6 fw-bold">Latest News & Events</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="images/deadline.png" class="card-img-top" alt="Admission Deadline">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Admission Deadline</h4>
                            <p class="card-text text-muted">Apply before August 31 to secure your spot for the upcoming term.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="images/scifair.png" class="card-img-top" alt="Science Fair 2025">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Science Fair 2025</h4>
                            <p class="card-text text-muted">Students present innovative projects and experiments to the community.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="images/excellence.jpg" class="card-img-top" alt="Alumni Achievements">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Alumni Achievements</h4>
                            <p class="card-text text-muted">Celebrating our graduates who are making an impact worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials py-5 bg-primary-subtle">
      <h2 class="text-center mb-5 display-6 fw-bold text-primary">What Our Students Say</h2>
        
        <div class="container">

            <div id="demo" class="carousel slide text-center" data-bs-ride="carousel" style="max-width: 100%;">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
                </div>
                <div class="carousel-inner">   
                    <div class="carousel-item active">
                        <div class="row align-items-center justify-content-center py-5">
                            <div class="col-md-3">
                                <img src="images/sana.jpg" alt="Student1" class="d-block rounded-circle" style="width:150px; height:150px; object-fit:cover; margin: 0 auto;">
                            </div>
                            <div class="col-md-7 text-start">
                                <div class="carousel-caption text-dark" style="position: static !important; padding: 0 !important; text-align: left !important;"> 
                                    <p class="fs-5 fw-medium">"I sincerely love my time at Brighton College. They motivated me to become better in all ways, and you can just feel the care and kindness from every single teacher!"</p>
                                    <footer class="blockquote-footer mt-2 fs-6">Sana Minatozaki, <cite title="Source Title">Class of 2023</cite></footer>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center justify-content-center py-5">
                            <div class="col-md-3">
                                <img src="images/Liam.png" alt="Student2" class="d-block rounded-circle" style="width:150px; height:150px; object-fit:cover; margin: 0 auto;">
                            </div>
                            <div class="col-md-7 text-start">
                                <div class="carousel-caption text-dark" style="position: static !important; padding: 0 !important; text-align: left !important;">
                                    <p class="fs-5 fw-medium">"These lot taught me the real deal. Industry relevant, d'you know what I mean? I was built for this. Felt ready for any job out there. Biblical!"</p>
                                    <footer class="blockquote-footer mt-2 fs-6">Liam Gallagher, <cite title="Source Title">Class of 2020</cite></footer>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center justify-content-center py-5">
                            <div class="col-md-3">
                                <img src="images/Flea2.jpeg" alt="Student3" class="d-block rounded-circle" style="width:150px; height:150px; object-fit:cover; margin: 0 auto;">
                            </div>
                            <div class="col-md-7 text-start">
                                <div class="carousel-caption text-dark" style="position: static !important; padding: 0 !important; text-align: left !important;">
                                    <p class="fs-5 fw-medium">"The learning was a massive jam session, man! A beautiful, funky groove with everyone working together. It totally tuned me up for the teamwork and improvisation I needed in my life and career. Give it up for the funk!"</p>
                                    <footer class="blockquote-footer mt-2 fs-6">Flea, <cite title="Source Title">Class of 2016</cite></footer>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center justify-content-center py-5">
                            <div class="col-md-3">
                                <img src="images/Jennie.jpg" alt="Student4" class="d-block rounded-circle" style="width:150px; height:150px; object-fit:cover; margin: 0 auto;">
                            </div>
                            <div class="col-md-7 text-start">
                                <div class="carousel-caption text-dark" style="position: static !important; padding: 0 !important; text-align: left !important;">
                                    <p class="fs-5 fw-medium">"Brighton College didn't just teach me, it refined my entire perspective. The global exposure and commitment to excellence gave me the blueprint for transforming influence into industry impact. Truly world-class."</p>
                                    <footer class="blockquote-footer mt-2 fs-6">Jennie Kim, <cite title="Source Title">Class of 2024</cite></footer>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center justify-content-center py-5">
                            <div class="col-md-3">
                                <img src="images/bobby.png" alt="Student4" class="d-block rounded-circle" style="width:150px; height:150px; object-fit:cover; margin: 0 auto;">
                            </div>
                            <div class="col-md-7 text-start">
                                <div class="carousel-caption text-dark" style="position: static !important; padding: 0 !important; text-align: left !important;">
                                    <p class="fs-5 fw-medium">"I thought I'd fail out in five minutes. My brain's a broken ATM! But Brighton College helped me handle my mess. I'm smarter now, ready for the world... after a nap. I owe you sixteen apologies."</p>
                                    <footer class="blockquote-footer mt-2 fs-6">Bobby Lee, <cite title="Source Title">Class of 2019</cite></footer>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center justify-content-center py-5">
                            <div class="col-md-3">
                                <img src="images/Discaya.jpeg" alt="Student4" class="d-block rounded-circle" style="width:150px; height:150px; object-fit:cover; margin: 0 auto;">
                            </div>
                            <div class="col-md-7 text-start">
                                <div class="carousel-caption text-dark" style="position: static !important; padding: 0 !important; text-align: left !important;">
                                    <p class="fs-5 fw-medium">"I definitely cried in the library at 3 AM. But hey, Brighton College taught me that accountability starts with turning in your group project on time. Great professors. They never asked where I got all my cash."</p>
                                    <footer class="blockquote-footer mt-2 fs-6">Sarah Discaya, <cite title="Source Title">Class of 2025</cite></footer>
                                </div>
                            </div>
                        </div>
                    </div>       
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <section class="cta text-center py-5 bg-primary text-white">
        <div class="container">
            <h3 class="fw-bold mb-3">Ready to Join Brighton College?</h3>
            <p class="lead">Start your enrollment journey today and secure your spot for the next intake.</p>
        </div>
    </section>
  </main>

  <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>