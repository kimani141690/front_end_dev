<!-- view_order.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>View Order</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
<h2>View Order</h2>
<!-- Render the order information -->

<p><strong>Order ID:</strong> 1</p>
<p><strong>Customer Name:</strong> were</p>
<p><strong>Delivery Address:</strong> 234John street</p>
<p><strong>Date Ordered:</strong>23/23/4</p>
<p><strong>Payment Status:</strong> paid</p>

<h3>Order Information</h3>
<!-- Render the product information -->
<p><strong>Product Ordered:</strong> Minji</p>
<p><strong>Quantity:</strong>2kg</p>
<p><strong>Total Order Amount:</strong> 200</p>
<p><strong>Paid Amount:</strong> 200</p>
{{--<p><strong>Order ID:</strong> {{ $order->id }}</p>--}}
{{--<p><strong>Customer Name:</strong> {{ $order->customer_name }}</p>--}}
{{--<p><strong>Delivery Address:</strong> {{ $order->delivery_address }}</p>--}}
{{--<p><strong>Date Ordered:</strong> {{ $order->date_ordered }}</p>--}}
{{--<p><strong>Payment Status:</strong> {{ $order->payment_status }}</p>--}}

{{--<h3>Order Information</h3>--}}
{{--<!-- Render the product information -->--}}
{{--<p><strong>Product Ordered:</strong> {{ $order->product_name }}</p>--}}
{{--<p><strong>Quantity:</strong> {{ $order->quantity }}</p>--}}
{{--<p><strong>Total Order Amount:</strong> {{ $order->total_amount }}</p>--}}
{{--<p><strong>Paid Amount:</strong> {{ $order->paid_amount }}</p>--}}

<!-- Add a back button to navigate back to the orders list -->
<a href="view_orders.bladde.php">Back to Orders</a>


</body>
</html>
