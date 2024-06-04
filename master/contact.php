<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
require_once("config.php");
if (isset($_POST['delete_master'])) {
    $master_id = mysqli_real_escape_string($conn, $_POST['delete_master']);

    $query = "DELETE FROM message_form WHERE id_message='$master_id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Message Deleted Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Message Not Deleted";
        header("Location: index.php");
        exit(0);
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
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Message From Visitor
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM message_form";
                                $query_run = mysqli_query($conn, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    while ($master = mysqli_fetch_assoc($query_run)) {
                                ?>
                                        <tr>
                                            <td><?= $master['id_message']; ?></td>
                                            <td><?= $master['name']; ?></td>
                                            <td><?= $master['email']; ?></td>
                                            <td><?= $master['message']; ?></td>
                                            <td>
                                                <form method="POST" class="d-inline">
                                                    <button type="submit" name="delete_master" value="<?= $master['id_message']; ?>" class="btn btn-danger btn-sm">Delete</button>
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