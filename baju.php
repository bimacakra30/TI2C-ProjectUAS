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
            height: 450px;
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
        <h2 style="text-align: center;">BAJU</h2>
        <p style="text-align: center;">Temukan koleksi terbaru kami yang unik dan sesuai dengan gaya Anda. Nikmati
            pengalaman berbelanja yang menyenangkan di toko kami.</p>
        <div class="product-list">
            <div class="product-item">
                <img src="asset/baju/baju2.png" alt="mock-up">
                <h3>Mock Up Clothes</h3>
                <div class="product-price">Rp. 1,000,000</div>
                <p>Baju Mock Up dengan desain dan kain berkualitas.</p>
                <button onclick="addToCart({name: 'Mock Up', category: 'Baju', price: 'Rp. 1,000,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/baju/graphictee.png" alt="graffiti">
                <h3>Graffiti Clothes</h3>
                <div class="product-price">Rp. 250,000</div>
                <p>Baju Graffiti dengan bahan berkualitas tinggi.</p>
                <button onclick="addToCart({name: 'Graffiti', category: 'Baju', price: 'Rp. 250,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/baju/baju3.png" alt="jattda">
                <h3>Jatt Da</h3>
                <div class="product-price">Rp. 500,000</div>
                <p>Baju Jatt Da dengan desain tegas dan maskulin.</p>
                <button onclick="addToCart({name: 'Jatt Da', category: 'Baju', price: 'Rp. 500,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/baju/baju4.png" alt="indonesia">
                <h3>Indonesia Clothes</h3>
                <div class="product-price">Rp. 300,000</div>
                <p>Baju Indonesia dengan tema lokal dan desain cerah.</p>
                <button onclick="addToCart({name: 'Indonesia', category: 'Baju', price: 'Rp. 300,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/baju/baju5.png" alt="indonesia">
                <h3>Indonesia Clothes</h3>
                <div class="product-price">Rp. 300,000</div>
                <p>Baju Indonesia dengan motif tradisional dan gaya modern.</p>
                <button onclick="addToCart({name: 'Indonesia', category: 'Baju', price: 'Rp. 300,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/baju/baju6.png" alt="black clothes">
                <h3>Black Clothes</h3>
                <div class="product-price">Rp. 700,000</div>
                <p>Baju Hitam elegan dan serbaguna untuk segala acara.</p>
                <button onclick="addToCart({name: 'Black Clothes', category: 'Baju', price: 'Rp. 700,000'})">Masukkan
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