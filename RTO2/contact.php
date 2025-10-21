<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Brighton College</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

<main>
<section class="hero text-white" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/reception.png') no-repeat center center/cover; color:#fff;">
<div class="container">
 <h1 class="fw-bold display-5">Contact Us</h1> 
</div>
</section>

<section class="section-padding py-5">
    <div class="container">
        
       
        
        <div class="row">
            
            <div class="col-md-7 mb-4">
                <h2 class="mb-4 border-bottom pb-2">General Enquiries</h2>
                <p class="lead">Reach out to us for more information or to discuss your training needs.</p>
                
                <ul class="list-unstyled pt-3">
                    <li class="d-flex align-items-start mb-2">
                        <i class="bi bi-geo-alt-fill text-primary me-3 fs-5"></i> 
                        <p class="mb-0"><strong>Address:</strong> Level 1/255 William St, Melbourne VIC 3000</p>
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="bi bi-telephone-fill text-primary me-3 fs-5"></i> 
                        <p class="mb-0"><strong>Phone:</strong> (03) 9998 7411</p>
                    </li>
                    <li class="d-flex align-items-start mb-4">
                        <i class="bi bi-envelope-fill text-primary me-3 fs-5"></i> 
                        <p class="mb-0"><strong>Email:</strong> info@brighton.edu.au</p>
                    </li>
                </ul>

                <div class="map-container ratio ratio-4x3 shadow-lg">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.013885878337!2d144.95420371201806!3d-37.81314373388657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad643705c0e8599%3A0xcdfe4cfc4126eba5!2sBrighton%20College%20(Melbourne)!5e0!3m2!1sen!2sau!4v1759227647262!5m2!1sen!2sau"
                            style="border:0;"
                            allowfullscreen=""
                            loading="fast"
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            
            <div class="col-md-5 mb-4 ps-md-5"> 
                <h2 class="mb-4 border-bottom pb-2">Campus Hours</h2>
                <div class="bg-light p-3 rounded shadow-sm">
                    <p class="d-flex justify-content-between">
                        <span><i class="bi bi-clock-fill me-2 text-secondary"></i> Monday</span> <span>8:30 AM - 5:00 PM</span>
                    </p>
                    <p class="d-flex justify-content-between">
                        <span><i class="bi bi-clock-fill me-2 text-secondary"></i> Tuesday</span> <span>8:30 AM - 5:00 PM</span>
                    </p>
                    <p class="d-flex justify-content-between">
                        <span><i class="bi bi-clock-fill me-2 text-secondary"></i> Wednesday</span> <span>8:30 AM - 5:00 PM</span>
                    </p>
                    <p class="d-flex justify-content-between">
                        <span><i class="bi bi-clock-fill me-2 text-secondary"></i> Thursday</span> <span>8:30 AM - 5:00 PM</span>
                    </p>
                    <p class="d-flex justify-content-between border-bottom pb-2">
                        <span><i class="bi bi-clock-fill me-2 text-secondary"></i> Friday</span> <span>8:30 AM - 5:00 PM</span>
                    </p>
                    <p class="d-flex justify-content-between fw-bold pt-2 text-danger">
                         <span><i class="bi bi-calendar-check-fill me-2"></i> Saturday</span> <span>CLOSED</span>
                    </p>
                    <p class="d-flex justify-content-between fw-bold text-danger">
                        <span><i class="bi bi-calendar-check-fill me-2"></i> Sunday</span> <span>CLOSED</span>
                    </p>
                </div>
            </div>
        </div>  
</section>
</main>

<?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>