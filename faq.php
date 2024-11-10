<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Frequently Asked Questions</title>
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
        /* FAQ Section */
.faq-section {
    padding: 60px 0;
    background-color: #1b1b1b;
    color: #d4af37;
    text-align: center;
}

.faq-section .section-header h2 {
    color: #fff;
    font-weight: bold;
    margin-bottom: 20px;
}

.faq-section .section-header p {
    color: #bfbfbf;
}

.faq-list {
    background-color: #1b1b1b; /* لون الخلفية الأساسي */
    padding: 20px;
    border-radius: 8px;
}

.faq-item {
    background-color: #333;
    color: #d4af37;
    padding: 15px;
    margin-bottom: 10px;
    border-radius: 5px;
}

.faq-item h3.question {
    font-size: 18px;
    font-weight: bold;
    color: #d4af37;
}

.faq-item p.answer {
    font-size: 14px;
    color: #fff;
    margin-top: 5px;
}


/* New Question Button */
.btn-gold {
    background-color: #d4af37;
    color: #1b1b1b;
    padding: 10px 20px;
    font-weight: bold;
    text-transform: uppercase;
    border-radius: 4px;
    margin-top: 20px;
}

.btn-gold:hover {
    background-color: #c29d2d;
    color: #fff;
}

/* Modal Styling */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
}

.modal-content {
    background-color: #333;
    color: #d4af37;
    padding: 20px;
    margin: 10% auto;
    width: 50%;
    border-radius: 5px;
}

.modal-content h2 {
    color: #d4af37;
    font-weight: bold;
}

.modal-content label {
    display: block;
    font-weight: bold;
    margin: 15px 0 5px;
    color: #fff;
}

.modal-content input,
.modal-content textarea {
    width: 100%;
    padding: 8px;
    margin: 5px 0 20px;
    background-color: #222;
    color: #d4af37;
    border: 1px solid #444;
    border-radius: 4px;
}

.modal-content input:focus,
.modal-content textarea:focus {
    outline: none;
    border-color: #d4af37;
}

.modal-content .btn {
    width: 100%;
}

.close {
    color: #d4af37;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #fff;
    cursor: pointer;
}

    </style>
</head>
<body>

<!-- Navbar -->
<?php include "Header.php"?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>FAQ</h2>
            </div>
            <div class="col-12">
                <a href="index.php">Home</a> / <a href="faq.php">FAQ</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- FAQ Section Start -->
<div class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Find answers to common questions or submit your own.</p>
        </div>

        <!-- FAQ List -->
        <!-- FAQ List -->
        <div class="faq-list">
    <div class="faq-item">
        <h3 class="question"> كيف يمكنني الحصول على استشارة قانونية؟</h3>
        <p class="answer">يمكنك الحصول على استشارة قانونية مجانًا عبر منصتنا. ببساطة قم بالتسجيل وحدد نوع الاستشارة التي تحتاجها.</p>
    </div>
    
    <div class="faq-item">
        <h3 class="question"> هل هناك رسوم على الاستشارات؟</h3>
        <p class="answer">جميع الاستشارات على منصتنا مجانية تمامًا، ولا توجد رسوم مخفية.</p>
    </div>
    
    <div class="faq-item">
        <h3 class="question"> كيف يمكنني التواصل مع محامٍ معين؟</h3>
        <p class="answer">يمكنك اختيار محامٍ من القائمة المتاحة والتواصل معه مباشرة من خلال منصة الاستشارات.</p>
    </div>

    <div class="faq-item">
        <h3 class="question"> هل يمكنني الحصول على استشارة في أي وقت؟</h3>
        <p class="answer">نعم، يمكنك طلب الاستشارات في أي وقت يناسبك، حيث يعمل المحامون المتاحون على تقديم الاستشارات على مدار الساعة.</p>
    </div>

    <div class="faq-item">
        <h3 class="question"> هل يمكنني استشارة محامٍ في أكثر من تخصص؟</h3>
        <p class="answer">نعم، يمكنك استشارة محامين في مجالات مختلفة، حسب نوع القضايا التي تحتاج إلى استشارة فيها.</p>
    </div>
</div>


        <!-- Add New Question Button -->
        <button class="btn btn-gold" onclick="openModal()">Add a New Question</button>
    </div>
</div>
<!-- FAQ Section End -->

<!-- New Question Modal -->
<div id="questionModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Add a New Question</h2>
        <form>
            <label for="questionTitle">Question Title</label>
            <input type="text" id="questionTitle" placeholder="Enter your question title" required>
            
            <label for="questionContent">Content</label>
            <textarea id="questionContent" placeholder="Enter your question details" required></textarea>
            
            <button type="submit" class="btn btn-gold">Submit Question</button>
        </form>
    </div>
</div>

<!-- Footer -->
<?php include "footer.php"?>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script><script>
    // Modal functionality
    function openModal() {
        document.getElementById('questionModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('questionModal').style.display = 'none';
    }
</script>

</body>
</html>
