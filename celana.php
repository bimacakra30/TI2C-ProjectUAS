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
        <h2 style="text-align: center;">Celana</h2>
        <p style="text-align: center;">Jelajahi koleksi terbaru kami dan temukan barang-barang unik yang cocok dengan
            gaya Anda. Dari pakaian vintage yang klasik hingga aksesori modern yang trendi, kami menawarkan sesuatu
            untuk setiap selera. Nikmati pengalaman berbelanja yang menyenangkan dan temukan barang yang sesuai dengan
            gaya Anda di toko kami.
        </p>
        <div class="product-list">
            <div class="product-item">
                <img src="asset/celana/celana.png" alt="celana10">
                <h3>Under Armour</h3>
                <div class="product-price">Rp. 850,000</div>
                <p>Celana Under Armour didesain untuk meningkatkan performa olahraga dengan teknologi inovatif dan
                    desain yang ergonomis.</p>
                <button onclick="addToCart({name: 'Under Armour', category: 'Celana', price: 'Rp. 850,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/celana/celana2.png" alt="celana11">
                <h3>Polo Ralph Lauren</h3>
                <div class="product-price">Rp. 1,200,000</div>
                <p>Celana Polo Ralph Lauren menawarkan gaya klasik Amerika dengan kualitas bahan yang superior dan
                    perhatian terhadap detail.</p>
                <button onclick="addToCart({name: 'Polo Ralph Lauren', category: 'Celana', price: 'Rp. 1,200,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/celana/celana3.png" alt="celana12">
                <h3>Zara Man</h3>
                <div class="product-price">Rp. 600,000</div>
                <p>Celana Zara Man menawarkan gaya urban yang trendi dengan bahan berkualitas dan desain yang modern.
                </p>
                <button onclick="addToCart({name: 'Zara Man', category: 'Celana', price: 'Rp. 600,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/celana/celana4.png" alt="celana7">
                <h3>Nike Sportswear</h3>
                <div class="product-price">Rp. 800,000</div>
                <p>Celana Nike Sportswear dirancang untuk memberikan kenyamanan dan performa maksimal saat beraktivitas
                    fisik.</p>
                <button onclick="addToCart({name: 'Nike Sportswear', category: 'Celana', price: 'Rp. 800,000'})">Masukkan
                    Keranjang</button>
            </div>
            <div class="product-item">
                <img src="asset/celana/celana5.png" alt="celana8">
                <h3>Adidas Originals</h3>
                <div class="product-price">Rp. 900,000</div>
                <p>Celana Adidas Originals menggabungkan gaya klasik dengan teknologi modern untuk memberikan kenyamanan
                    dan gaya yang tak tertandingi.</p>
                <button onclick="addToCart({name: 'Adidas Originals', category: 'Celana', price: 'Rp. 900,000'})">Masukkan
                    Keranjang</button>
            </div>

            <div class="product-item">
                <img src="asset/celana/celana6.png" alt="celana9">
                <h3>Puma Active</h3>
                <div class="product-price">Rp. 750,000</div>
                <p>Celana Puma Active cocok untuk gaya hidup aktif, memberikan fleksibilitas dan keleluasaan gerak yang
                    optimal.</p>
                <button onclick="addToCart({name: 'Puma Active', category: 'Celana', price: 'Rp. 750,000'})">Masukkan
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