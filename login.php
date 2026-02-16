<?php
header("Content-Type: application/json");

$conn = new mysqli("localhost", "root", "", "register");

if ($conn->connect_error) {
  echo json_encode(["status" => "error"]);
  exit;
}

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
  echo json_encode(["status" => "no_user"]);
  exit;
}

$row = $result->fetch_assoc();

if (password_verify($password, $row['password'])) {
  echo json_encode(["status" => "success"]);
} else {
  echo json_encode(["status" => "wrong_password"]);
}
