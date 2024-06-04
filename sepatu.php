<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - Thrift Shop</title>
    <link href="bootstrap-4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/icon/logo.png" rel="shortcut icon">
    <style>
        .navbar {
            padding: 0px;
        }

        .navbar-nav .nav-item {
            margin-right: 20px;
        }

        .container {
            padding: 15px;
        }

        .footer {
            background-color: #333;
            color: #f2f2f2;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            bottom: 0;
        }

        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .product-item {
            border: 1px solid #ddd;
            padding: 10px;
            width: calc(33.33% - 10px);
            background-color: #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .product-item:hover {
            transform: translateY(-5px);
        }

        .product-item h3 {
            margin-top: 0;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .product-item p {
            margin-bottom: 10px;
            font-size: 14px;
            color: #555;
        }

        .product-item img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .product-item button {
            background-color: #333;
            color: #f2f2f2;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            display: block;
            margin: auto;
        }

        .product-item button:hover {
            background-color: #555;
        }

        .product-price {
            font-size: 14px;
            color: #000;
            margin-bottom: 5px;
        }
    </style>
    <script>
        function addToCart(product) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push(product);
            localStorage.setItem('cart', JSON.stringify(cart));
            window.location.href = 'shopping-cart.php';
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategori
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="jaket.php">Jaket</a>
                            <a class="dropdown-item" href="baju.php">Baju</a>
                            <a class="dropdown-item" href="sepatu.php">Sepatu</a>
                            <a class="dropdown-item" href="celana.php">Celana</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shopping-cart.php">Shopping Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2 style="text-align: center;">SEPATU</h2>
        <p style="text-align: center;">Jelajahi koleksi terbaru kami dan temukan barang-barang unik yang cocok dengan
            gaya Anda. Dari pakaian vintage yang klasik hingga aksesori modern yang trendi, kami menawarkan sesuatu
            untuk setiap selera. Nikmati pengalaman berbelanja yang menyenangkan dan temukan barang yang sesuai dengan
            gaya Anda di toko kami.</p>

        <div class="product-list">
            <div class="product-item">
                <img src="asset/sepatu/sepatu4.png" alt="nike">
                <h3>Nike White</h3>
                <div class="product-price">Rp. 5,000,000</div>
                <p>Sepatu Nike putih dengan desain minimalis dan aksen modern.</p>
                <button onclick="addToCart({name: 'Nike White', category: 'Sepatu', price: 'Rp. 5,000,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/sepatu/airjordan.png" alt="air-jordan">
                <h3>Air Jordan</h3>
                <div class="product-price">Rp. 7,500,000</div>
                <p>Ikon gaya dan performa yang terinspirasi dari Michael Jordan.</p>
                <button onclick="addToCart({name: 'Air Jordan', category: 'Sepatu', price: 'Rp. 7,500,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/sepatu/compass.png" alt="compass">
                <h3>Compass Shoes</h3>
                <div class="product-price">Rp. 2,500,000</div>
                <p>Sepatu tahan lama untuk petualangan luar ruangan.</p>
                <button onclick="addToCart({name: 'Compass Shoes', category: 'Sepatu', price: 'Rp. 2,500,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/sepatu/Ventela.png" alt="ventela">
                <h3>Ventela Shoes</h3>
                <div class="product-price">Rp. 2,300,000</div>
                <p>Desain elegan untuk penampilan kasual yang sempurna.</p>
                <button onclick="addToCart({name: 'Ventela Shoes', category: 'Sepatu', price: 'Rp. 2,300,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/sepatu/converse.png" alt="converse">
                <h3>Converse Shoes</h3>
                <div class="product-price">Rp. 4,300,000</div>
                <p>Simbol gaya kasual dan budaya pop yang ikonik.</p>
                <button onclick="addToCart({name: 'Converse Shoes', category: 'Sepatu', price: 'Rp. 4,300,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/sepatu/adidas.png" alt="adidas">
                <h3>Adidas Samba Shoes</h3>
                <div class="product-price">Rp. 21,300,000</div>
                <p>Model ikonik dari Adidas yang digemari sepanjang masa.</p>
                <button onclick="addToCart({name: 'Adidas Samba Shoes', category: 'Sepatu', price: 'Rp. 21,300,000'})">Masukkan
                    Keranjang</button>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Thrift Shop. All rights reserved.</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="bootstrap-4.4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>