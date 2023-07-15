<!-- confirmed_orders.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Confirmed Orders</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
<h2>Confirmed Orders</h2>
<!-- Add the search bar -->
<form action="confirmed_orders.php" method="GET">
    <input type="text" name="search" placeholder="Search by Order ID">
    <input type="submit" value="Search">
</form>

<!-- Render the confirmed orders table -->
<table>
    <thead>
    <tr>
        <th>Order ID</th>
        <th>Customer ID</th>
        <th>Date Confirmed</th>
    </tr>
    </thead>
    <tbody>

    <td>order 1</td>
    <td>23</td>
    <td> 23/23/04</td>
    <!-- Loop through the confirmed orders and render each row -->
{{--    @foreach ($confirmedOrders as $confirmedOrder)--}}
{{--        <tr>--}}
{{--            --}}
{{--            <td>{{ $confirmedOrder->id }}</td>--}}
{{--            <td>{{ $confirmedOrder->customer_id }}</td>--}}
{{--            <td>{{ $confirmedOrder->date_confirmed }}</td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
    </tbody>
</table>
</body>
</html>
