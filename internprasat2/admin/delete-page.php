<?php
session_start();
require_once '../includes/config.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

$id = $_GET['id'] ?? 0;

// ลบหน้า
$stmt = $pdo->prepare("DELETE FROM pages WHERE id = ?");
if ($stmt->execute([$id])) {
    $_SESSION['message'] = "ลบหน้าเรียบร้อยแล้ว";
} else {
    $_SESSION['error'] = "เกิดข้อผิดพลาดในการลบหน้า";
}

header('Location: dashboard.php');
exit;
?>