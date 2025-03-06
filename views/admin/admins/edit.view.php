<!DOCTYPE html>
<html lang="en">
<?php require_once '../../layout/admin/head.php' ?>
<body>
<?php require_once '../../layout/admin/sidebar.php' ?>
    <div class="content">
           <!-- edit Admin Section -->
    <div id="edit_admin" class="card">
        <h4>Edit Admin</h4>
        <form action="insert_user_product.php" method="POST">
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="first_name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Last Name Name</label>
                <input type="text" class="form-control" name="last_name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="phone">
            </div>
            <button type="submit" class="btn btn-red">Edit Admin</button>
        </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>