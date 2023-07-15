<!-- products.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Products Section</title>
    <link rel="stylesheet" href="/public/css/farmer/shop_section.css">
</head>
<body>
<div class="container">
    <h2>Products</h2>

    <div class="product-container">
        <!-- Loop through the products and render each product card -->
        @foreach ($products as $product)
            <div class="product-card">
                <img src="{{ $product->image }}" alt="{{ $product->name }}">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <p>Quantity in Stock: {{ $product->quantity }}</p>
                <button onclick="addToCart('{{ $product->id }}')">Add to Cart</button>
            </div>
        @endforeach
    </div>
</div>

<script>
    function addToCart(productId) {
        // Perform the logic to add the product to the cart
        // You can make an AJAX request to the server-side code to handle the cart functionality
        console.log("Product added to cart:", productId);
    }
</script>
</body>
</html>
