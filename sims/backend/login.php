<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    include('../config/db.php');
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header("Location: dashboard.php");
        } else {
            echo "<script>alert('รหัสผ่านไม่ถูกต้อง');history.back();</script>";
        }
    } else {
        echo "<script>alert('ไม่พบชื่อผู้ใช้งาน');history.back();</script>";
    }
}
?>
