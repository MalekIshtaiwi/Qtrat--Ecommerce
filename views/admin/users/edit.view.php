<!DOCTYPE html>
<html lang="en">

<body>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/views/layout/admin/sidebar.php'; ?>
<form action="/users/<?= $user['id'] ?>/edit" method="POST">
    <!-- Use a hidden input to tell your system to treat it as PUT -->
    <input type="hidden" name="_method" value="PUT" />

    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" value="<?= htmlspecialchars($user['first_name']) ?>" />

    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" value="<?= htmlspecialchars($user['last_name']) ?>" />

    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" />
    
    <label for="address">Address:</label>
    <input type="text" name="address" value="<?= htmlspecialchars($user['address']) ?>" />

    <label for="phonenumber">Phone Number:</label>
    <input type="text" name="phonenumber" value="<?= htmlspecialchars($user['phone_number']) ?>" />

    <button type="submit">Update User</button>
    
</form>

</body>
</html>


