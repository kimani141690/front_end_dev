<!DOCTYPE html>
<html>
<head>
    <title>User Details Page</title>
    <link rel="stylesheet" href="/public/css/auth/user_details.css">

</head>
<body>
<div class="container">
    <h2>User Details</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="location" placeholder="Location" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="tel" name="contact" placeholder="Contact" required>
        <input type="file" name="profile-picture" accept="image/*" required>
        <textarea name="description" placeholder="Description"></textarea>
        <input type="submit" value="Save Details">
    </form>
</div>
</body>
</html>
