<?php
require_once("config.php");

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['name']) && isset($data['email']) && isset($data['address']) && isset($data['cart'])) {
    $name = $data['name'];
    $email = $data['email'];
    $address = $data['address'];
    $cart = $data['cart'];

    $stmt = $conn->prepare("INSERT INTO users (name, email, address) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $address);

    if ($stmt->execute()) {
        $user_id = $stmt->insert_id;

        $stmt = $conn->prepare("INSERT INTO cart (user_id, product_name, category, price, quantity) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("isssi", $user_id, $product_name, $category, $price, $quantity);

        foreach ($cart as $item) {
            $product_name = $item['name'];
            $category = $item['category'];
            $price = $item['price'];
            $quantity = $item['quantity'];
            $stmt->execute();
        }

        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid input']);
}

$conn->close();
