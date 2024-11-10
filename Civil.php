<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">    <title>Civil Law Consultations</title>
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
        .btn-gold {
    background-color: #d4af37;
    color: #1b1b1b;
    border: none;
}

.btn-gold:hover {
    background-color: #c29d2d;
    color: #ffffff;
}
.modal-header .modal-title {
    color: #d4af37; /* لون ذهبي */
    font-weight: bold;
}
/* تنسيق العنوان ليصبح ذهبي ومناسب */
.post-title {
    font-size: 18px;
    font-weight: bold;
    color: #d4af37; /* اللون الذهبي */
    padding: 10px 15px;
    background-color: #333; /* لون الخلفية */
    border-radius: 5px;
    text-align: left;
}


    </style>
</head>
<body>

<!-- Include Navbar -->
<?php include "Header.php"; ?>

<div class="container mt-5">
    <!-- Page Header -->
    <div class="section-header text-center mb-4">
        <h2>Civil Law Consultations</h2>
        <p class="lead">Submit your questions related to Civil Law and receive professional legal responses from our lawyers.</p>
    </div>

    <!-- Button to Open Modal for New Post -->
    <div class="text-center mb-4">
        <button type="button" class="btn btn-gold" data-toggle="modal" data-target="#newPostModal">
            Add New Consultations
        </button>
    </div>

    <!-- New Post Modal -->
    <div class="modal fade" id="newPostModal" tabindex="-1" role="dialog" aria-labelledby="newPostModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="newPostModalLabel">Add a New Consultations</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="postTitle">Title</label>
                            <input type="text" class="form-control" id="postTitle" placeholder="Enter the title of your post">
                        </div>
                        <div class="form-group">
                            <label for="postContent">Content</label>
                            <textarea class="form-control" id="postContent" rows="3" placeholder="Write your question or issue here..."></textarea>
                        </div>
                        <button type="button" class="btn btn-gold">Submit Consultations</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Posts Section -->
    <div class="posts-section">
        <!-- Example Post -->
        <div class="card mb-4 bg-dark text-white">
        <div class="post-title">User's Post Title</div>
        <div class="card-body">
                <p>This is the content of the user's post where they describe their question or legal issue.</p>
            </div>
            <div class="card-footer">
                <!-- Lawyer's Response -->
                <div class="response">
                    <p class="font-weight-bold">Lawyer's Response:</p>
                    <p>This is a sample response from the lawyer addressing the user's question.</p>
                </div>
                <!-- Add Response (for demonstration only) -->
                <form>
                    <div class="form-group mt-3">
                        <label for="responseContent">Add a Response</label>
                        <textarea class="form-control" id="responseContent" rows="2" placeholder="Write your response here..."></textarea>
                    </div>
                    <button type="button" class="btn btn-secondary">Submit Response</button>
                </form>
            </div>
        </div>
        <!-- Repeat for each post -->
    </div>
</div>

<!-- Include Footer -->
<?php include "Footer.php"; ?>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
