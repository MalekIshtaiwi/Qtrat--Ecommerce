<!DOCTYPE html>
<html lang="en">
<?php require_once '../../layout/admin/head.php' ?>
 <?php
 require_once '../../layout/admin/sidebar.php'
 ?> 
<div class="content">
    <!-- Manage Users Section -->
    <div id="users-section" class="card">
<h1>All Admins</h1>

<!-- Example: Display users in a table -->
<?php if (!empty($admins)): ?>
    <table class="table table-success table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($admins as $admin): ?>
            <tr>
                <td><?= htmlspecialchars($admin['id']) ?></td>
                <td><?= htmlspecialchars($admin['first_name']) ?></td>
                <td><?= htmlspecialchars($admin['last_name']) ?></td>
                <td><?= htmlspecialchars($admin['email']) ?></td>
                <td>
                    <!-- Edit link (GET) -->
                    <a href="/admins/<?= $admin['id'] ?>/edit">Edit</a>
                    &nbsp;|&nbsp;

                    <!-- Delete form (simulating DELETE via _method) -->
                    <form action="/admins/<?= $admin['id'] ?>" method="POST" style="display:inline;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>
        </div>
<?php else: ?>
    <p>No Admins found.</p>
<?php endif; ?>

<!-- Link to Create a new user -->
<p>
    <a href="/admins/create">Create New User</a>
</p>
</body>
</html>