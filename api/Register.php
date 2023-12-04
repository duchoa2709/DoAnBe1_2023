<?php
// Kết nối với cơ sở dữ liệu MySQL

// Kết nối với cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "sql_webservice_m";
$password = "BPB3spAhMMma2Jrd";
$dbname = "sql_webservice_m";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ yêu cầu POST
var_dump($_POST);
$name = $_POST["name"];

$password = $_POST["password"];



// Chuẩn bị và thực thi truy vấn SQL để lưu dữ liệu vào bảng trong cơ sở dữ liệu
$sql = "INSERT INTO user (user, password) VALUES ('$name',  '$password')";

if ($conn->query($sql) === TRUE) {
    // Đăng ký thành công
    $response = array("status" => "success");
} else {
    // Đăng ký thất bại
    $response = array("status" => "error", "message" => $conn->error);
}

// Trả về phản hồi dưới dạng JSON
header("Content-type: application/json");
echo json_encode($response);

$conn->close();
?>