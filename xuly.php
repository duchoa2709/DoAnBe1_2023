<?php
// in file xuly.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = isset($_POST['user']) ? $_POST['user'] : '';
    $password = isset($_POST['pass']) ? md5($_POST['pass']) : ''; // Hash the password using MD5

    $conn = new mysqli('localhost', 'root', '', 'doanbe1');

    $sql = "SELECT * FROM user WHERE user = ? AND password = ?"; // Update the SQL query
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $user, $password); // Update the bind_param

    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    if ($result) {
        header("location: index.php");
    } else {
        echo 'Đăng nhập sai thông tin';
    }

    $stmt->close();
    $conn->close();
}
?>
