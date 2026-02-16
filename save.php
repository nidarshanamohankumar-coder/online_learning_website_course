<?php
header("Content-Type: application/json");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = new mysqli("localhost", "root", "", "register");
$conn->set_charset("utf8mb4");

$user_name  = $_POST['user_name'] ?? '';
$role       = $_POST['role'] ?? '';
$year       = $_POST['year'] ?? '';
$department = $_POST['department'] ?? '';
$college    = $_POST['college'] ?? '';
$email      = $_POST['email'] ?? '';
$password   = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
$phone      = $_POST['phone'] ?? '';

$sql = "INSERT INTO users
(user_name, role, year, department, college, email, password, phone)
VALUES (?,?,?,?,?,?,?,?)";

try {

  $stmt = $conn->prepare($sql);
  $stmt->bind_param(
    "ssssssss",
    $user_name,
    $role,
    $year,
    $department,
    $college,
    $email,
    $password,
    $phone
  );

  $stmt->execute();

  echo json_encode(["status" => "success"]);

} catch (mysqli_sql_exception $e) {

  if ($e->getCode() == 1062) {

    if (str_contains($e->getMessage(), 'email')) {
      echo json_encode(["status" => "email_exists"]);
    } elseif (str_contains($e->getMessage(), 'phone')) {
      echo json_encode(["status" => "phone_exists"]);
    } else {
      echo json_encode(["status" => "duplicate"]);
    }

  } else {
    echo json_encode(["status" => "error"]);
  }
}

$conn->close();

