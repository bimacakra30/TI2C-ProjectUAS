<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thrift Shop</title>
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

        .logo {
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .form-inline .btn {
            background-color: #555;
            color: #fff;
            border: none;
            color: #fff;
        }

        .form-inline .btn:hover {
            background-color: #333;
        }

        .hero {
            background-color: #f4f4f4;
            text-align: center;
            padding: 60px 20px;
        }

        .hero img {
            width: 100%;
            max-width: 700px;
            height: auto;
        }

        .hero h1 {
            margin: 20px 0;
            font-size: 3em;
        }

        .hero p {
            font-size: 1.2em;
            color: #555;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2em;
        }

        .category {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }

        .category-item {
            flex: 1 1 calc(25% - 20px);
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            color: inherit;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .category-item h3,
        .category-item p {
            color: #000;
        }

        .category-item img {
            max-width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 250px;
            transition: transform 0.3s;
        }

        .category-item:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .category-item:hover img {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .category-item {
                flex: 1 1 calc(50% - 20px);
            }
        }

        @media (max-width: 576px) {
            .category-item {
                flex: 1 1 calc(100% - 20px);
            }
        }



        .features {
            display: flex;
            justify-content: space-around;
            text-align: center;
            flex-wrap: nowrap;
            overflow-x: auto;
        }

        .feature-item {
            flex: 0 0 auto;
            max-width: 250px;
            margin: 10px;
            padding: 20px;
        }

        .feature-item img {
            max-width: 30%;
            height: auto;
        }

        .instagram {
            display: flex;
            justify-content: space-around;
        }

        .instagram img {
            width: 22%;
            border-radius: 10px;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }

        .container1 {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #000;
        }

        .articles-section {
            margin-bottom: 40px;
        }

        .articles-section h3 {
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            color: #333;
        }

        .article {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fafafa;
            border: 1px solid #ddd;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .article:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .article h4 {
            margin: 0;
            color: #000;
        }

        .article p {
            margin: 10px 0 0;
            color: #000;
        }

        .article a {
            color: #007bff;
            text-decoration: none;
        }

        .article a:hover {
            text-decoration: underline;
        }

        .footer {
            background-color: #f2f2f2;
            color: #333;
            text-align: center;
            padding: 40px 0;
            width: 100%;
            position: relative;
            bottom: 0;
        }

        .footer .container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-section {
            flex: 1;
            min-width: 250px;
            margin: 20px;
            padding: 10px;
            box-sizing: border-box;
        }

        .footer-section h2 {
            color: #333;
            margin-bottom: 10px;
            border-bottom: 2px solid #555;
            padding-bottom: 10px;
        }

        .footer-section p {
            color: #666;
            margin: 5px 0;
        }

        .footer-section a {
            color: #007bff;
            text-decoration: none;
        }

        .footer-section a:hover {
            text-decoration: underline;
        }

        .container2 {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        .instagram {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .instagram img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .instagram img:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <img class="logo" src="asset/icon/logo.png" alt="Logo">
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
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <div class="hero">
        <div class="promotional-banner">
            <img id="promoImage" src="asset/icon/promo.png" alt="Promotional Banner">
        </div>
        <h1>Welcome to Our Thrift Shop!</h1>
        <p>Discover the best second-hand treasures at unbeatable prices.</p>
    </div>
    <div class="container" id="new-products">
        <h2>New Products</h2>
        <div class="category">
            <a href="actionDetail/detailNike.html" class="category-item">
                <img src="asset/sepatu/airjordan.png">
                <h3>Air Jordan</h3>
                <p>Rp. 7,500,000</p>
            </a>
            <a href="actionDetail/graphictee.html" class="category-item">
                <img src="asset/baju/graphictee.png">
                <h3>Graphictee</h3>
                <p>Rp. 250,000</p>
            </a>
            <a href="actionDetail/compass.html" class="category-item">
                <img src="asset/sepatu/compass.png">
                <h3>Compass</h3>
                <p>Rp. 2,500,000</p>
            </a>
            <a href="actionDetail/california.html" class="category-item">
                <img src="asset/jaket/california.png">
                <h3>California</h3>
                <p>Rp. 1,000.000</p>
            </a>
            <a href="actionDetail/celanaDetail.html" class="category-item">
                <img src="asset/celana/celana.png">
                <h3>Under Armour</h3>
                <p>Rp. 850,000</p>
            </a>
            <a href="actionDetail/tnf.html" class="category-item">
                <img src="asset/jaket/tnf.png">
                <h3>The North Face Jacket</h3>
                <p>Rp. 250,000</p>
            </a>
            <a href="actionDetail/detailBaju.html" class="category-item">
                <img src="asset/baju/baju2.png">
                <h3>Mock Up Clothes</h3>
                <p>Rp. 1,000,000</p>
            </a>
            <a href="actionDetail/celanaDetail2.html" class="category-item">
                <img src="asset/celana/celana2.png">
                <h3>Polo Ralph Lauren</h3>
                <p>Rp. 1,200,000</p>
            </a>
        </div>
    </div>

    <div class="container" id="popular-categories">
        <h2>Popular Categories</h2>
        <div class="category">
            <a href="sepatu.php" class="category-item">
                <img src="asset/sepatu/Ventela.png" alt="New Product 1">
                <h3>Sepatu</h3>
                <p>Rp. 7,500,000</p>
            </a>
            <a href="jaket.php" class="category-item">
                <img src="asset/jaket/tnf.png" alt="New Product 2">
                <h3>Jaket</h3>
                <p>Rp.250.000</p>
            </a>
            <a href="baju.php" class="category-item">
                <img src="asset/baju/baju2.png" alt="New Product 1">
                <h3>baju</h3>
                <p>Rp. 7,500,000</p>
            </a>
            <a href="celana.php" class="category-item">
                <img src="asset/celana/celana.png" alt="New Product 1">
                <h3>celana</h3>
                <p>Rp. 7,500,000</p>
            </a>

        </div>
    </div>
    </div>

    <div class="container">
        <h2>Features</h2>
        <div class="features">
            <div class="feature-item">
                <img src="asset/icon/delivery.png" alt="Free Delivery">
                <h3>Free Delivery</h3>
                <p>Minimum 50.000</p>
            </div>
            <div class="feature-item">
                <img src="asset/icon/money.png" alt="Money Back">
                <h3>Money Back</h3>
                <p>Guaranteed</p>
            </div>
            <div class="feature-item">
                <img src="asset/icon/secure.png" alt="Secure Payment">
                <h3>Secure Payment</h3>
                <p>Safe & Fast</p>
            </div>
            <div class="feature-item">
                <img src="asset/icon/auten.png" alt="Authenticity">
                <h3>Authenticity</h3>
                <p>100% Guaranteed</p>
            </div>
        </div>
    </div>

    <div class="container2">
        <h2>Instagram</h2>
        <div class="instagram">
            <a href="https://www.instagram.com/yan_leyan" target="_blank"><img src="asset/instagram/leyan.png" alt="Instagram 1"></a>
            <a href="https://www.instagram.com/satriasheva" target="_blank"><img src="asset/instagram/sheva.png" alt="Instagram 2"></a>
            <a href="https://www.instagram.com/erzlablsptr" target="_blank"><img src="asset/instagram/abi.png" alt="Instagram 3"></a>
            <a href="https://www.instagram.com/biimackraaa_" target="_blank"><img src="asset/instagram/bara.png" alt="Instagram 4"></a>
            <a href="https://www.instagram.com/nhf05_mzkky" target="_blank"><img src="asset/instagram/novan.png" alt="Instagram 5"></a>
        </div>
    </div>


    <script>
        const promoImages = ['asset/icon/promo.png', 'asset/icon/promo2.png', 'asset/icon/promo3.png'];
        let currentImageIndex = 0;

        function changePromoImage() {
            currentImageIndex = (currentImageIndex + 1) % promoImages.length;
            document.getElementById('promoImage').src = promoImages[currentImageIndex];
        }

        setInterval(changePromoImage, 3000);
    </script>
    <footer class="footer">
        <div class="container1">
            <div class="footer-section" id="blog">
                <h2>Blog</h2>
                <p>Tetaplah terbarui dengan berita terbaru kami, tips mode, dan cerita dari komunitas toko barang bekas. Blog kami adalah tempat yang sempurna untuk mendapatkan inspirasi dan belajar lebih banyak tentang mode berkelanjutan. Selami dunia upcycling, temukan barang-barang unik hasil thrifting, dan bergabunglah dengan komunitas yang peduli dengan gaya hidup ramah lingkungan. Baik Anda seorang thrifter berpengalaman atau baru mengenal dunia belanja barang bekas, blog kami menawarkan sesuatu untuk semua orang. Bergabunglah dengan kami dalam perjalanan menuju masa depan yang lebih berkelanjutan dan penuh gaya.</p>
            </div>
            <div class="footer-section" id="shopping-cart">
                <h2>Shopping Cart</h2>
                <p>Lihat barang-barang yang telah Anda tambahkan ke keranjang dan lanjutkan ke pembayaran. Selamat berbelanja!

                    Pastikan untuk meninjau barang-barang yang Anda pilih untuk memastikan Anda mendapatkan semua yang Anda butuhkan. Setelah Anda puas, lanjutkan ke halaman pembayaran di mana Anda dapat memasukkan informasi pengiriman dan pembayaran Anda. Jika Anda memiliki kode diskon atau kartu hadiah, jangan lupa untuk menerapkannya sebelum menyelesaikan pembelian Anda. Terima kasih telah berbelanja dengan kami, dan kami harap Anda menikmati barang-barang baru Anda!"</p>
            </div>
            <div class="footer-section" id="contact-us">
                <h2>Contact Us</h2>
                <p>Jika Anda memiliki pertanyaan atau memerlukan informasi lebih lanjut, jangan ragu untuk menghubungi kami. Kami di sini untuk membantu! Tim layanan pelanggan kami yang berdedikasi tersedia 24/7 untuk membantu Anda dengan setiap pertanyaan atau kekhawatiran.</p>
                <p>Email : Thrfitshop@gmail.com</p>
                <p>Phone : (+62)8 214 435 7734</p>
                <p>Jl. Serayu No.84, Pandean, Taman, Pandean, Kec. Taman, Kota Madiun, Jawa Timur 63133 </p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="bootstrap-4.4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>