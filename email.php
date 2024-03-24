<?php
$email2 = $_POST['email1'];

// Database Connection
// $conn = new mysqli('localhost', 'codede_itech', 'hSjAJe8W6DhHpVX', 'codede_itechnebula');

$conn = new mysqli('localhost', 'root', '', 'codede_itechnebula');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    // Update 'email2' to the actual column name in your 'email' table
    $stmt = $conn->prepare("INSERT INTO email (email) VALUES (?)");
    $stmt->bind_param("s", $email2);
    if ($stmt->execute()) {
        // Insertion successful
        $response = array("success" => true);
    } else {
        // Insertion failed
        $response = array("success" => false);
    }
    $stmt->close();
    $conn->close();

    // Return JSON response
    echo json_encode($response);
}
?>
