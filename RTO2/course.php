<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course - Brighton College</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <?php include 'enquiry_modal.php'; ?>
    <?php include 'fee_modal.php'; ?>

    <main>
        <section class=" hero " style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/lab.jpg') no-repeat center center/cover; color:#fff;">
            <div class="container">
                <h1 class=" display-3 fw-bold">Diploma of Information Technology (Cyber Security)</h1>
                <p class="lead">ICT50220</p>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 mb-4">
                        <h2 class="mb-3">Program Overview</h2>
                        <p class="fs-5">This qualification reflects the role of individuals in a variety of information and communications technology (ICT) roles who have established specialised skills in a technical ICT function.
                        Individuals in these roles carry out moderately complex tasks in specialist fields, working independently, as part of a team or leading deliverables with others. 
                        They may apply their skills across a wide range of industries, business functions and departments,or as a business owner (sole trader/contractor).</p>
                        
                        <h3 class="mt-5 mb-3">Key Outcomes</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> ICT Office Manager</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> ICT Systems Administrator</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Cyber Security Analyst</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Business Analyst</li>
                            </ul>
                    </div>

                    <div class="col-lg-4 mb-4">
                        
                        <div class="card shadow-sm border-0 bg-primary-subtle">
                            <div class="card-body">
                                <h3 class="card-title mb-4 text-primary">Key Information</h3>
                                
                                <p class="card-text border-bottom pb-2">
                                    <i class="bi bi-tag-fill me-2"></i> <strong>CRICOS Course Code:</strong> 105308G
                                </p>
                                <p class="card-text border-bottom pb-2">
                                    <i class="bi bi-clock-fill me-2"></i> <strong>Duration:</strong> 6 months
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-book-fill me-2"></i> <strong>Mode:</strong> Classroom, Self-study
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-pin-map-fill me-2"></i> <strong>Location:</strong> Brisbane, Melbourne
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-currency-dollar me-2"></i> <strong>Course Fees:</strong>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#feeModal">
                                    View Course Fees
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="mt-4 d-grid">
                            <button type="button" class="btn btn-primary btn-lg py-3" data-bs-toggle="modal" data-bs-target="#myModal">
                                <i class="bi bi-send-fill me-2"></i> Enquire About This Course
                            </button>
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