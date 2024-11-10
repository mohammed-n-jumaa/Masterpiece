<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Consultations</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
<style>
    .card {
    background-color: #1b1b1b; /* لون الخلفية الداكن */
    color: #d4af37; /* لون النص */
    border: 1px solid #333; /* حدود بسيطة لتحديد البطاقة */
    border-radius: 8px; /* زوايا البطاقة */
    text-align: center;
    padding: 20px;
    transition: transform 0.3s ease;
    height: 100%; /* للحفاظ على نفس الطول */
}

.card .card-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card-title {
    font-size: 20px;
    color: #d4af37;
    font-weight: bold;
    margin-bottom: 15px;
}

.card-text {
    font-size: 14px;
    color: #bfbfbf;
    flex-grow: 1; /* لجعل النص يتوسط البطاقة */
    margin-bottom: 15px;
}

.btn-primary {
    background-color: #d4af37;
    color: #1b1b1b;
    border: none;
    border-radius: 4px;
    padding: 8px 16px;
    text-transform: uppercase;
    font-weight: bold;
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: #c29d2d;
    color: #fff;
}

.card i {
    font-size: 40px;
    color: #d4af37;
    margin-bottom: 15px;
}

/* لجعل كل البطاقات بنفس الحجم */
.row .col-lg-4, .row .col-md-6 {
    display: flex;
    flex-direction: column;
}

</style>
</head>

<body>
    <div class="wrapper">
        <!-- Nav Bar Start -->
        <?php include "Header.php" ?>
        <!-- Nav Bar End -->

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Consultations</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="consultations.php">Consultations</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Consultations Section Start -->
        <div class="consultations">
            <div class="container">
                <div class="section-header">
                    <h2>Explore Our Consultation Services</h2>
                    <p>Choose from a variety of specialized legal services designed to address your unique needs.</p>
                </div>
                <div class="row">
                    <!-- Civil Law Card -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fa fa-landmark fa-3x mb-3"></i>
                                <h3 class="card-title">Civil Law</h3>
                                <p class="card-text">Expert consultations on property disputes, contracts, and personal injury cases.</p>
                                <a href="civil.php" class="btn btn-primary">Add consultations</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Family Law Card -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fa fa-users fa-3x mb-3"></i>
                                <h3 class="card-title">Family Law</h3>
                                <p class="card-text">Guidance on divorce, child custody, adoption, and other family-related legal matters.</p>
                                <a href="family.php" class="btn btn-primary">Add consultations</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Business Law Card -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fa fa-hand-holding-usd fa-3x mb-3"></i>
                                <h3 class="card-title">Business Law</h3>
                                <p class="card-text">Comprehensive legal support for business operations, contracts, and mergers.</p>
                                <a href="business.php" class="btn btn-primary">Add consultations</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- State Security Cases Card -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fa fa-shield-alt fa-3x mb-3"></i>
                                <h3 class="card-title">State Security Cases</h3>
                                <p class="card-text">Defense services for cases involving national security and state protection laws.</p>
                                <a href="state.php" class="btn btn-primary">Add consultations</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Criminal Law Card -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fa fa-gavel fa-3x mb-3"></i>
                                <h3 class="card-title">Criminal Law</h3>
                                <p class="card-text">Legal representation and consultations for cases involving criminal charges.</p>
                                <a href="criminal.php" class="btn btn-primary">Add consultations</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Cyber Law Card -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fa fa-globe fa-3x mb-3"></i>
                                <h3 class="card-title">Cyber Law</h3>
                                <p class="card-text">Specialized consultations on online privacy, cybercrimes, and data protection.</p>
                                <a href="cyber.php" class="btn btn-primary">Add consultations</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Consultations Section End -->

        <!-- Footer Start -->
        <?php include "footer.php" ?>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
