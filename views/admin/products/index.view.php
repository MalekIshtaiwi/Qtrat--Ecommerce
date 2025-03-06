<!DOCTYPE html>
<html lang="en">
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/views/layout/admin/head.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/views/layout/admin/sidebar.php'; ?>
<div class="content">
    <!-- Manage Users Section -->
    <div id="users-section" class="card">
<h1>All Products</h1>

<!-- Example: Display users in a table -->
<?php if (!empty($products)): ?>
    <table class="table table-success table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>Product</th>
            <th>Price</th>
            <th>Description</th>
            <th>Img Url</th>
            <th>Category Id</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= htmlspecialchars($product['id']) ?></td>
                <td><?= htmlspecialchars($product['product_name']) ?></td>
                <td><?= htmlspecialchars($product['product_price']) ?></td>
                <td><?= htmlspecialchars($product['product_description']) ?></td>
                <td><img class="custom-class" src="<?= htmlspecialchars($product['product_img_url']) ?>" alt="<?= htmlspecialchars($product['product_name']) ?>" height="100"></td>

                <td><?= htmlspecialchars($product['category_id']) ?></td>
                <td>
                    <!-- Edit link (GET) -->
                    <a class="btn btn-primary" href="/products/<?= $product['id'] ?>/edit">Edit</a>
                    &nbsp;|&nbsp;

                    <!-- Delete form (simulating DELETE via _method) -->
                    <form action="/products/<?= $product['id'] ?>" method="POST" style="display:inline;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <!-- Link to Create a new user -->
<p>
    <a class="btn btn-success mt-4" href="/products/create">Create New Product</a>
</p>
        </div>
<?php else: ?>
    <p>No Products found.</p>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>