<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Brighton College</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <main>
        
        <section class="p-5 text-white" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/students.jpg') no-repeat center center/cover;">
            <div class="container ">
                <h1 class="mb-3 display-3 fw-bold">About Brighton College</h1>
                <p class="lead fw-light mb-4" style="max-width: 800px;">
                    sAt Brighton College, we believe that education is more than just acquiring knowledge — it’s about inspiring potential, nurturing character, and building pathways to a brighter future. Since our establishment in 2016, we have proudly grown into a dynamic learning community.
                </p>
                </div>
        </section>

        <section class="section-padding py-5">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-md-7 mb-4 mb-md-0">
                        <h2 class="mb-3 display-6 fw-bold text-primary">Our Mission & Commitment</h2>
                        <p class="fs-5">
                            We are dedicated to providing high-quality, industry-relevant education that equips learners with the practical skills and critical thinking needed to succeed in a rapidly changing world.
                        </p>
                        <p>
                            We strive to create an inclusive, supportive, and innovative environment where every student feels valued and encouraged to reach their full potential — both academically and personally.
                        </p>
  
                    </div>
                    
                    <div class="col-md-5 text-center">
                        <img src="images/Mission1.jpg" alt="Student studying in a library" class="img-fluid rounded shadow-lg">
                    </div>

                </div>
            </div>
        </section>


        <section class="highlights section-padding bg-light">
            <div class="container">
                <h2 class="text-center mb-5 display-4 fw-bold">Our Core Values</h2>
                
                <p class="text-center lead mb-5" style="max-width: 800px; margin: 0 auto;">
                    At the heart of Brighton College lies a shared commitment to excellence, integrity, and community. We believe that education should not only prepare students for successful careers but also empower them to make a positive impact on society.
                </p>

                <div class="row text-center g-4">
                    <div class="col-md-3">
                        <div class="card p-3 h-100 shadow-sm border-0">
                             <i class="bi bi-mortarboard-fill text-primary display-4 mb-3"></i>
                             <h5 class="fw-bold">Excellence in Education</h5>
                             <p class="text-muted">Delivering high-quality learning experiences through innovation, dedication, and continuous improvement.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card p-3 h-100 shadow-sm border-0">
                             <i class="bi bi-person-heart text-primary display-4 mb-3"></i>
                             <h5 class="fw-bold">Student-Centered Learning</h5>
                             <p class="text-muted">Empowering students to reach their full potential through personalized support and meaningful engagement.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card p-3 h-100 shadow-sm border-0">
                             <i class="bi bi-briefcase-fill text-primary display-4 mb-3"></i>
                             <h5 class="fw-bold">Industry Relevance</h5>
                             <p class="text-muted">Equipping learners with the practical skills and experience needed to succeed in today’s evolving workforce.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card p-3 h-100 shadow-sm border-0">
                             <i class="bi bi-globe-americas text-primary display-4 mb-3"></i>
                             <h5 class="fw-bold">Global Opportunities</h5>
                             <p class="text-muted">Building pathways for students to explore the world through partnerships, exchanges, and cultural experiences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>