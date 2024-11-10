<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Categories</title>
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
                    <h3 class="font-weight-bold">Manage Categories</h3>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal">Add Category</button>
                </div>
                
                <!-- Categories Table -->
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="categoryTable">
                                <tr>
                                    <td>1</td>
                                    <td>Sample Category</td>
                                    <td>This is a sample description</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editCategoryModal" onclick="populateEditForm(1, 'Sample Category', 'This is a sample description')">Edit</button>
                                        <button class="btn btn-danger btn-sm" onclick="deleteCategory(1)">Delete</button>
                                    </td>
                                </tr>
                                <!-- يمكن إضافة المزيد من الصفوف الديناميكية هنا -->
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Add Category Modal -->
                <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="addCategoryForm">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" onclick="addCategory()">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Edit Category Modal -->
                <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="editCategoryForm">
                                <div class="modal-body">
                                    <input type="hidden" id="edit_category_id">
                                    <div class="form-group">
                                        <label for="edit_name">Name</label>
                                        <input type="text" class="form-control" id="edit_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="edit_description">Description</label>
                                        <textarea class="form-control" id="edit_description" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" onclick="saveEdit()">Save Changes</button>
                                </div>
                            </form>
                        </div>
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
    function addCategory() {
        Swal.fire({
            icon: 'success',
            title: 'Category Added',
            text: 'The category has been added successfully!',
            showConfirmButton: false,
            timer: 1500
        });
    }

    function populateEditForm(id, name, description) {
        $('#edit_category_id').val(id);
        $('#edit_name').val(name);
        $('#edit_description').val(description);
        Swal.fire({
            icon: 'info',
            title: 'Editing Category',
            text: 'Category data has been loaded for editing.'
        });
    }

    function saveEdit() {
        Swal.fire({
            icon: 'success',
            title: 'Changes Saved',
            text: 'Category information has been updated successfully!',
            showConfirmButton: false,
            timer: 1500
        });
    }

    function deleteCategory(id) {
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
                    'The category has been deleted.',
                    'success'
                )
                // Add Ajax request here to delete the category from the database if needed
            }
        })
    }
</script>
</body>
</html>
