<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>

</head>
<body>
<div class="container">
    <h1>Login</h1>

    <form id="loginForm">
        @csrf
        <div class="input-group">
            <input type="email" placeholder="Email" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" required>
        </div>
        <div class="input-group">
            <button type="submit">Login</button>
        </div>
    </form>
    <div class="input-group">

        <a href="#">Sign in with Google</a> |
        <a href="#">Forgot password?</a>
    <button id="myModal" onclick="openModal()">Don't have an account?</button>
</div>


<!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Choose your user type:</h2>
        <button onclick="registerAsFarmer()">Farmer</button>
        <button onclick="registerAsCustomer()">Customer</button>
    </div>
</div>

<script>
    // JavaScript functions for the modal
    function openModal() {
        document.getElementById('myModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }

    // JavaScript functions for user registration
    function registerAsFarmer() {
        // TODO: Handle farmer registration logic
        console.log('Register as a farmer');
    }

    function registerAsCustomer() {
        // TODO: Handle customer registration logic
        console.log('Register as a customer');
    }

    // JavaScript function for Google sign-in
    function loginWithGoogle() {
        // TODO: Handle Google sign-in logic
        console.log('Sign in with Google');
    }

    // JavaScript function for form submission
    document.getElementById('loginForm').addEventListener('submit', function (event) {
        event.preventDefault();
        // TODO: Handle login form submission logic
        console.log('Form submitted');
    });
</script>
</div>
</body>
</html>
