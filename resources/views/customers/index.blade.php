<!-- landing_page.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Farmers' Market</title>
    <link rel="stylesheet" href="/public/css/customer/index.css">
</head>
<body>
<div class="container">
    <h2>Farmers' Market</h2>

    <div class="farmer-container">
        <!-- Loop through the farmers and render each farmer card -->
        @foreach ($farmers as $farmer)
            <div class="farmer-card" onclick="location.href='{{ route('products', ['farmer_id' => $farmer->id]) }}'">
                <h3>{{ $farmer->username }}</h3>
                <p>Contact: {{ $farmer->contact }}</p>
                <p>{{ $farmer->description }}</p>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
