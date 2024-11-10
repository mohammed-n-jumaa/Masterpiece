<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Comments</title>
   <!-- plugins:css -->
   <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        
        <!-- Sidebar Section -->
        <?php include "sidebar.php"; ?>
        
        <!-- Main Panel Section -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="font-weight-bold">Manage Comments</h3>
                </div>
                
                <!-- Comments Table -->
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Consultation ID</th>
                                    <th>Lawyer ID</th>
                                    <th>Content</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="commentsTable">
                                <tr>
                                    <td>1</td>
                                    <td>5</td>
                                    <td>12</td>
                                    <td>This is a sample comment content</td>
                                    <td>2024-11-10</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" onclick="deleteComment(1)">Delete</button>
                                    </td>
                                </tr>
                                <!-- Add more dynamic rows here if needed -->
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- External JavaScript for Bootstrap and SweetAlert -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- SweetAlert -->

<script>
    function deleteComment(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'The comment has been deleted.',
                    'success'
                )
                // Add Ajax request here to delete the comment from the database if needed
            }
        })
    }
</script>
</body>
</html>
