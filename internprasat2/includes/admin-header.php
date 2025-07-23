<?php
// includes/admin-header.php

// ตรวจสอบสถานะ Session ก่อนเริ่ม
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ตรวจสอบการล็อกอินและเส้นทาง
$current_file = basename($_SERVER['PHP_SELF']);
$login_page = 'login.php';

// ตรวจสอบว่าผู้ใช้ล็อกอินหรือไม่ (ยกเว้นหน้าล็อกอิน)
if (!isset($_SESSION['loggedin']) && $current_file !== $login_page) {
    header('Location: ' . $login_page);
    exit;
}

// ตั้งค่าชื่อหน้าเริ่มต้นหากไม่ได้กำหนด
$page_title = $page_title ?? 'แดชบอร์ดผู้ดูแล';

// ตั้งค่า path ฐาน
$base_path = dirname($_SERVER['PHP_SELF']);
$is_admin_area = (strpos($base_path, '/admin') !== false);
$css_path = $is_admin_area ? '../css/' : 'css/';
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?> | ระบบผู้ดูแล</title>
    <link rel="stylesheet" href="<?= $css_path ?>style.css">
    <link rel="stylesheet" href="<?= $css_path ?>admin.css">
    <link rel="icon" href="<?= $css_path ?>favicon.ico">
</head>
<body>
    <header class="admin-header">
        <div class="container">
            <h1>ระบบผู้ดูแลรายงานการฝึกงาน</h1>
            <nav>
                <ul>
                    <li><a href="dashboard.php" <?= ($current_file === 'dashboard.php') ? 'class="active"' : '' ?>>แดชบอร์ด</a></li>
                    <li><a href="edit-content.php" <?= ($current_file === 'edit-content.php') ? 'class="active"' : '' ?>>จัดการเนื้อหา</a></li>
                    <li><a href="../index.php" target="_blank">ดูเว็บไซต์</a></li>
                    <li><a href="logout.php" <?= ($current_file === 'logout.php') ? 'class="active"' : '' ?>>ออกจากระบบ</a></li>
                </ul>
            </nav>
            <div class="user-info">
                <?php if (isset($_SESSION['username'])): ?>
                    <span>ยินดีต้อนรับ, <?= htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8') ?></span>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <main class="admin-main">