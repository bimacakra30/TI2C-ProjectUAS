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
        <h2 style="text-align: center;">JAKET</h2>
        <p style="text-align: center;">Temukan jaket keren yang sesuai gaya Anda di koleksi terbaru kami. Mulai dari
            jaket klasik hingga modern, kami menawarkan pilihan terbaik untuk melengkapi penampilan Anda.</p>

        <div class="product-list">
            <div class="product-item">
                <img src="asset/jaket/california.png" alt="california-jacket">
                <h3>Jacket California Style</h3>
                <div class="product-price">Rp. 1,000,000</div>
                <p>Jaket bergaya surfer dengan desain santai dan warna cerah.</p>
                <button onclick="addToCart({name: 'Jacket California Style', category: 'Jacket', price: 'Rp. 1,000,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/jaket/tnf.png" alt="tnf-jacket">
                <h3>The North Face Jacket</h3>
                <div class="product-price">Rp. 250,000</div>
                <p>Jaket tangguh untuk petualangan di alam bebas.</p>
                <button onclick="addToCart({name: 'The North Face Jacket', category: 'Jacket', price: 'Rp. 250,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/jaket/shell.png" alt="shell-jacket">
                <h3>Shell Jacket</h3>
                <div class="product-price">Rp. 500,000</div>
                <p>Jaket ringan untuk perlindungan dari angin dan hujan.</p>
                <button onclick="addToCart({name: 'Shell Jacket', category: 'Jacket', price: 'Rp. 500,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/jaket/sanfrancisco.png" alt="sanfrancisco-hoddie">
                <h3>San Francisco Hoodie</h3>
                <div class="product-price">Rp. 300,000</div>
                <p>Hoodie stylish untuk gaya perkotaan yang modern.</p>
                <button onclick="addToCart({name: 'San Francisco Hoodie', category: 'Jacket', price: 'Rp. 300,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/jaket/adidas.png" alt="adidas">
                <h3>Adidas Hoodie</h3>
                <div class="product-price">Rp. 1,300,000</div>
                <p>Hoodie sporty dengan logo ikonik Adidas.</p>
                <button onclick="addToCart({name: 'Adidas Hoodie', category: 'Jacket', price: 'Rp. 1,300,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/jaket/varsity.png" alt="varsity">
                <h3>Jacket Varsity</h3>
                <div class="product-price">Rp. 5,600,000</div>
                <p>Jaket gaya klasik dengan sentuhan modern.</p>
                <button onclick="addToCart({name: 'Varsity', category: 'Jacket', price: 'Rp. 5,600,000'})">Masukkan
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