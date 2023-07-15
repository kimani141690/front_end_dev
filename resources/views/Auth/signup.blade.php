<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
    <link rel="stylesheet" href="/public/css/auth/signup.css">

</head>
<body>
<div class="container">
    <h2>Signup</h2>
    <form action="" method="POST">
        @csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="submit" value="Signup">
    </form>
</div>
</body>
</html>
