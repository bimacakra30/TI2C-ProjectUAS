<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
require_once("config.php");
require 'vendor/autoload.php';

if (isset($_POST['delete_master'])) {
    $id = mysqli_real_escape_string($conn, $_POST['delete_master']);

    $query_cart = "DELETE FROM cart WHERE user_id='$id'";
    $query_cart_run = mysqli_query($conn, $query_cart);

    if ($query_cart_run) {
        $query = "DELETE FROM users WHERE id='$id'";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $_SESSION['message'] = "Data Deleted Successfully";
            header("Location: index.php");
            exit(0);
        } else {
            $_SESSION['message'] = "Data Not Deleted";
            header("Location: index.php");
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Failed to delete related entries from cart";
        header("Location: index.php");
        exit(0);
    }
}

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (isset($_GET['export'])) {
    $spreadsheet = new Spreadsheet();

    $sheet_users = $spreadsheet->createSheet();
    $sheet_users->setTitle('Users');

    $sheet_users->setCellValue('A1', 'ID');
    $sheet_users->setCellValue('B1', 'Email');
    $sheet_users->setCellValue('C1', 'Address');
    $sheet_users->setCellValue('D1', 'Date Input');

    $query_users = "SELECT * FROM users";
    $query_users_run = mysqli_query($conn, $query_users);
    $row_users = 2;
    while ($user = mysqli_fetch_assoc($query_users_run)) {
        $sheet_users->setCellValue('A' . $row_users, $user['id']);
        $sheet_users->setCellValue('B' . $row_users, $user['email']);
        $sheet_users->setCellValue('C' . $row_users, $user['address']);
        $sheet_users->setCellValue('D' . $row_users, $user['created_at']);
        $row_users++;
    }

    $sheet_cart = $spreadsheet->createSheet();
    $sheet_cart->setTitle('Cart');

    $sheet_cart->setCellValue('A1', 'ID');
    $sheet_cart->setCellValue('B1', 'User ID');
    $sheet_cart->setCellValue('C1', 'Product Name');
    $sheet_cart->setCellValue('D1', 'Category');
    $sheet_cart->setCellValue('E1', 'Price');
    $sheet_cart->setCellValue('F1', 'Quantity');
    $sheet_cart->setCellValue('G1', 'Added At');

    $query_cart = "SELECT * FROM cart";
    $query_cart_run = mysqli_query($conn, $query_cart);
    $row_cart = 2;
    while ($cart_item = mysqli_fetch_assoc($query_cart_run)) {
        $sheet_cart->setCellValue('A' . $row_cart, $cart_item['id']);
        $sheet_cart->setCellValue('B' . $row_cart, $cart_item['user_id']);
        $sheet_cart->setCellValue('C' . $row_cart, $cart_item['product_name']);
        $sheet_cart->setCellValue('D' . $row_cart, $cart_item['category']);
        $sheet_cart->setCellValue('E' . $row_cart, $cart_item['price']);
        $sheet_cart->setCellValue('F' . $row_cart, $cart_item['quantity']);
        $sheet_cart->setCellValue('G' . $row_cart, $cart_item['added_at']);
        $row_cart++;
    }
    $sheet_message = $spreadsheet->createSheet();
    $sheet_message->setTitle('Message');

    $sheet_message->setCellValue('A1', 'ID');
    $sheet_message->setCellValue('B1', 'Name');
    $sheet_message->setCellValue('C1', 'Email');
    $sheet_message->setCellValue('D1', 'Message');

    $query_message = "SELECT * FROM message_form";
    $query_message_run = mysqli_query($conn, $query_message);
    $row_message = 2;
    while ($message = mysqli_fetch_assoc($query_message_run)) {
        $sheet_message->setCellValue('A' . $row_message, $message['id_message']);
        $sheet_message->setCellValue('B' . $row_message, $message['name']);
        $sheet_message->setCellValue('C' . $row_message, $message['email']);
        $sheet_message->setCellValue('D' . $row_message, $message['message']);
        $row_message++;
    }
    $writer = new Xlsx($spreadsheet);
    $filename = 'export_all_database.xlsx';
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');
    $writer->save('php://output');
    exit;
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
    <div class="container mt-4">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Buyer Details
                        <a href="contact.php" class="btn btn-primary float-end">Message Contact</a>
                        <a href="?export" class="btn btn-success float-end mx-2">Export to Excel</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Date Input</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM users";
                                $query_run = mysqli_query($conn, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    while ($master = mysqli_fetch_assoc($query_run)) {
                                ?>
                                        <tr>
                                            <td><?= $master['id']; ?></td>
                                            <td><?= $master['name']; ?></td>
                                            <td><?= $master['email']; ?></td>
                                            <td><?= $master['address']; ?></td>
                                            <td><?= $master['created_at']; ?></td>
                                            <td>
                                                <a href="cartview.php?id=<?= $master['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                <form method="POST" class="d-inline">
                                                    <button type="submit" name="delete_master" value="<?= $master['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>