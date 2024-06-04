<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("config.php");

    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    $query = "INSERT INTO message_form (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $query)) {
?>
        <div class="container mt-3">
            <div class="alert alert-success" role="alert">
                Terima kasih! Pesan Anda telah berhasil disimpan.
            </div>
        </div>
    <?php
        header("refresh:1;url=contact-us.php");
    } else {
    ?>
        <div class="container mt-3">
            <div class="alert alert-danger" role="alert">
                Maaf, terjadi kesalahan. Silakan coba lagi nanti.
            </div>
        </div>
<?php
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Thrift Shop</title>
    <link href="bootstrap-4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/icon/logo.png" rel="shortcut icon">
    <style>
        .navbar {
            padding: 0;
        }

        .navbar-nav .nav-item {
            margin-right: 20px;
        }

        .container {
            padding: 15px;
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
        <h2>Contact Us</h2>
        <p>If you have any questions or need further information, please feel free to reach out to us. We are here to help!</p>

        <div class="row">
            <div class="col-md-6">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="contact-form">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="map-container">
                    <h3>Our Location</h3>
                    <p>Jl. Serayu No.84, Pandean, Taman, Pandean, Kec. Taman, Kota Madiun, Jawa Timur 63133</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1977.2201003736018!2d111.5279737!3d-7.6483768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1683052653938!5m2!1sen!2sid" width="100%" height="400" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="bootstrap-4.4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>