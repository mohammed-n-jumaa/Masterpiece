<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <!-- External CSS for Bootstrap and SweetAlert -->
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
                    <h3 class="font-weight-bold">Manage Users</h3>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">Add User</button>
                </div>
                
                <!-- Users Table -->
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="userTable">
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>johndoe@example.com</td>
                                    <td>1234567890</td>
                                    <td>Admin</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editUserModal" onclick="populateEditForm(1)">Edit</button>
                                        <button class="btn btn-danger btn-sm" onclick="deleteUser(1)">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Add User Modal -->
                <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="addUserForm">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm_password">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirm_password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <select class="form-control" id="role" required>
                                        <option value="admin">Super Admin</option>
                                        <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                            <option value="Lawer">User</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" onclick="addUser()">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Edit User Modal -->
                <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="editUserForm">
                                <div class="modal-body">
                                    <input type="hidden" id="edit_user_id">
                                    <div class="form-group">
                                        <label for="edit_name">Name</label>
                                        <input type="text" class="form-control" id="edit_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="edit_email">Email</label>
                                        <input type="email" class="form-control" id="edit_email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="edit_phone">Phone</label>
                                        <input type="text" class="form-control" id="edit_phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="edit_role">Role</label>
                                        <select class="form-control" id="edit_role" required>
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                        </select>
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
    function addUser() {
        Swal.fire({
            icon: 'success',
            title: 'User Added',
            text: 'The user has been added successfully!',
            showConfirmButton: false,
            timer: 1500
        });
    }

    function populateEditForm(id) {
        Swal.fire({
            icon: 'info',
            title: 'Editing User',
            text: 'User data has been loaded for editing.'
        });
    }

    function saveEdit() {
        Swal.fire({
            icon: 'success',
            title: 'Changes Saved',
            text: 'User information has been updated successfully!',
            showConfirmButton: false,
            timer: 1500
        });
    }

    function deleteUser(id) {
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
                    'The user has been deleted.',
                    'success'
                )
            }
        })
    }
</script>
</body>
</html>
