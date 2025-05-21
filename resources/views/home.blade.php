<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lelang Race</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-card { border: 1px solid #ddd; border-radius: 10px; padding: 10px; }
        .timer { background-color: red; color: white; font-size: 12px; padding: 3px 5px; border-radius: 5px; }
        .rating { color: orange; }
    </style>
</head>
<body>

<nav class="navbar navbar-light bg-light px-4">
    <a class="navbar-brand" href="#"><strong style="color:purple">Lelang Race</strong></a>
    <form class="form-inline d-flex">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari Produk" style="width: 300px;">
        <button class="btn btn-outline-primary mx-2">Masuk</button>
        <button class="btn btn-warning">Daftar</button>
    </form>
</nav>

<header class="bg-purple text-white text-center p-4" style="background: purple; color: white;">
    <h2>Ingin <span style="color:yellow">lelang & jualan</span> tanpa beban?</h2>
    <p>Gabung Lelang Race dan nikmati fee 0%!</p>
</header>

<section class="container mt-5">
    <h4>Premium Products</h4>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3 mb-4">
            <div class="product-card">
                <img src="{{ asset('images/' . $product['image']) }}" class="img-fluid mb-2" style="height:200px; object-fit:cover;">
                <div class="timer">{{ $product['time_left'] }}</div>
                <h6 class="mt-2">{{ $product['name'] }}</h6>
                <p>Rp. {{ number_format($product['price'], 0, ',', '.') }}</p>
                <div class="rating">⭐ {{ $product['rating'] }} - {{ $product['user'] }}</div>
            </div>
        </div>
        @endforeach
    </div>
</section>

</body>
</html>
