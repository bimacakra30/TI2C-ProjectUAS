<?php
require_once("config.php");

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['name']) && isset($data['category']) && isset($data['price']) && isset($data['quantity'])) {
    $name = $data['name'];
    $category = $data['category'];
    $price = $data['price'];
    $quantity = $data['quantity'];

    $stmt = $conn->prepare("INSERT INTO cart (product_name, category, price, quantity) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $name, $category, $price, $quantity);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid input']);
}

$conn->close();
