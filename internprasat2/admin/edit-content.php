<?php
session_start();
require_once '../includes/config.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

$id = $_GET['id'] ?? 0;

// ดึงข้อมูลหน้า
$stmt = $pdo->prepare("SELECT * FROM pages WHERE id = ?");
$stmt->execute([$id]);
$page = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$page) {
    header('Location: dashboard.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    
    $stmt = $pdo->prepare("UPDATE pages SET title = ?, content = ? WHERE id = ?");
    if ($stmt->execute([$title, $content, $id])) {
        $_SESSION['message'] = "อัปเดตข้อมูลเรียบร้อยแล้ว";
        header("Location: edit-content.php?id=$id");
        exit;
    } else {
        $error = "เกิดข้อผิดพลาดในการอัปเดตข้อมูล";
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขเนื้อหา</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
</head>
<body>
    <?php include '../includes/admin-header.php'; ?>
    
    <div class="admin-container">
        <h1>แก้ไขเนื้อหา: <?= htmlspecialchars($page['title']) ?></h1>
        
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-error"><?= $error ?></div>
        <?php endif; ?>
        
        <form method="POST">
            <div class="form-group">
                <label for="title">ชื่อหน้า</label>
                <input type="text" id="title" name="title" value="<?= htmlspecialchars($page['title']) ?>" required>
            </div>
            
            <div class="form-group">
                <label for="content">เนื้อหา</label>
                <textarea id="content-editor" name="content"><?= htmlspecialchars($page['content']) ?></textarea>
            </div>
            
            <button type="submit" class="btn">บันทึกการเปลี่ยนแปลง</button>
            <a href="dashboard.php" class="btn btn-cancel">ยกเลิก</a>
        </form>
    </div>
    
    <script src="../js/script.js"></script>
</body>
</html>