<!-- cart.blade.php -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cart</title>
    <link rel="stylesheet" href="/public/css/customer/cart.css">

</head>
<body>
<div class="container">
    <h2>Cart</h2>
    <div class="cart-items">
        <!-- Loop through the cart items and render each item -->
        @foreach ($cartItems as $item)
            <div class="cart-item">
                <p>Product: {{ $item['name'] }}</p>
                <p>Quantity: {{ $item['quantity'] }}</p>
                <p>Price: ${{ $item['price'] }}</p>
            </div>
        @endforeach
    </div>
    <div class="checkout-button-container">
        <button onclick="location.href='{{ route('checkout') }}'">Checkout</button>
    </div>
</div>
</body>
</html>
