<?php
require_once("config.php");

if (isset($_GET['id'])) {
    $master_id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = "SELECT users.*, cart.product_name, cart.category, cart.price, cart.quantity, cart.added_at FROM users LEFT JOIN cart ON users.id = cart.user_id WHERE users.id='$master_id'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) <= 0) {
        echo "<h4>No Such Id Found</h4>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Thriftshop</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Buyer View Details
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id']) && mysqli_num_rows($query_run) > 0) {
                            $master = mysqli_fetch_assoc($query_run);
                        ?>
                            <div class="mb-3">
                                <label>Name</label>
                                <p class="form-control">
                                    <?= $master['name']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <p class="form-control">
                                    <?= $master['address']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <p class="form-control">
                                    <?= $master['email']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>List Item</label>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Added At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        do {
                                        ?>
                                            <tr>
                                                <td><?= $master['product_name']; ?></td>
                                                <td><?= $master['category']; ?></td>
                                                <td><?= $master['price']; ?></td>
                                                <td><?= $master['quantity']; ?></td>
                                                <td><?= $master['added_at']; ?></td>
                                            </tr>
                                        <?php
                                        } while ($master = mysqli_fetch_assoc($query_run));
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>