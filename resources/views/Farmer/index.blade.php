<!-- report_index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Reports</title>
    <link rel="stylesheet" href="/public/css/farmer/index.blade.css">
<body>
<div class="container">
    <h2>Reports</h2>

    <div class="report-container">
        <div class="report-card">
            <h3>Total Orders Pending</h3>
            <p>{{ $totalPendingOrders }}</p>
        </div>
        <div class="report-card">
            <h3>Total Orders Confirmed</h3>
            <p>{{ $totalConfirmedOrders }}</p>
        </div>
        <div class="report-card">
            <h3>Total Sales Made</h3>
            <p>{{ $totalSales }}</p>
        </div>
        <div class="report-card">
            <h3>Products Being Sold</h3>
            <p>{{ $totalProducts }}</p>
        </div>
        <div class="report-card">
            <h3>Products Almost Out of Stock</h3>
            <p>{{ $almostOutOfStock }}</p>
        </div>
        <div class="report-card">
            <h3>Number of Unique Buyers</h3>
            <p>{{ $uniqueBuyers }}</p>
        </div>
    </div>
</div>
</body>
</html>
