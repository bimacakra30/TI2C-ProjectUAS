<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Thrift Shop</title>
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

        .articles-section h3 {
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        .article {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            opacity: 0;
            animation: fadeInAnimation 1s ease-in-out forwards;
        }

        .article a {
            color: #333;
            text-decoration: none;
        }

        .article a:hover {
            text-decoration: underline;
        }

        @keyframes fadeInAnimation {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
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

    <div class="container mt-5">
        <h2 class="text-center mb-4">Blog</h2>
        <p class="text-center">Tetap terupdate dengan berita terbaru, tips fashion, dan cerita dari komunitas thrift
            shop. Blog kami adalah tempat yang sempurna untuk mendapatkan inspirasi dan mempelajari lebih lanjut tentang
            fashion berkelanjutan.</p>

        <div class="row">
            <div class="col-md-6">
                <div class="articles-section">
                    <h3>Artikel Terbaru</h3>
                    <div class="article">
                        <h4>5 Tips untuk Berbelanja di Thrift Shop Seperti Pro</h4>
                        <p>Berbelanja di thrift shop bisa jadi menakutkan, tapi dengan lima tips ini, Anda bisa
                            menemukan penawaran terbaik dan harta karun tersembunyi. <a href="#">Baca lebih lanjut</a>
                        </p>
                    </div>
                    <div class="article">
                        <h4>Kenaikan Fashion Berkelanjutan</h4>
                        <p>Pelajari tentang tren fashion berkelanjutan yang semakin berkembang dan bagaimana thrift
                            shopping memainkan peran penting di dalamnya. <a href="#">Baca lebih lanjut</a></p>
                    </div>
                    <div class="article">
                        <h4>Cara Meng-upcycle Temuan Thrift Anda</h4>
                        <p>Temukan cara kreatif untuk memberikan kehidupan baru pada barang-barang thrift shop Anda
                            melalui upcycling. <a href="#">Baca lebih lanjut</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="articles-section">
                    <h3>Artikel Berdasarkan Kategori</h3>
                    <div class="article">
                        <h4>Celana</h4>
                        <p>Dari jeans vintage hingga celana modern, temukan gaya dan ukuran terbaik untuk setiap
                            kesempatan. Pelajari cara memadukan berbagai jenis celana dan temukan pasangan yang sempurna
                            untuk Anda. <a href="#">Baca lebih lanjut</a></p>
                    </div>
                    <div class="article">
                        <h4>Jaket</h4>
                        <p>Tetap hangat dan stylish dengan koleksi jaket thrift kami. Temukan tips untuk memilih jaket
                            terbaik untuk berbagai musim dan acara. <a href="#">Baca lebih lanjut</a></p>
                    </div>
                    <div class="article">
                        <h4>Sepatu</h4>
                        <p>Tingkatkan gaya sepatu Anda dengan panduan sepatu thrift kami. Jelajahi berbagai gaya, mulai
                            dari sneakers klasik hingga heels elegan, dan pelajari cara merawat sepatu thrift Anda. <a href="#">Baca lebih lanjut</a></p>
                    </div>
                    <div class="article">
                        <h4>Baju</h4>
                        <p>Temukan cara membangun lemari pakaian yang serbaguna dengan baju thrift. Dapatkan tips
                            tentang pemadanan, pencocokan, dan menemukan barang berkualitas tinggi di toko thrift. <a href="#">Baca lebih lanjut</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="bootstrap-4.4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>