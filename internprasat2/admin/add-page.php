<?php
session_start();
require_once '../includes/config.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    
    // หาลำดับสุดท้าย
    $stmt = $pdo->query("SELECT MAX(page_order) as max_order FROM pages");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $order = $result['max_order'] + 1;
    
    $stmt = $pdo->prepare("INSERT INTO pages (title, content, page_order) VALUES (?, ?, ?)");
    if ($stmt->execute([$title, $content, $order])) {
        $_SESSION['message'] = "เพิ่มหน้าใหม่เรียบร้อยแล้ว";
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "เกิดข้อผิดพลาดในการเพิ่มหน้า";
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มหน้าใหม่</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
</head>
<body>
    <?php include '../includes/admin-header.php'; ?>
    
    <div class="admin-container">
        <h1>เพิ่มหน้าใหม่</h1>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-error"><?= $error ?></div>
        <?php endif; ?>
        
        <form method="POST">
            <div class="form-group">
                <label for="title">ชื่อหน้า</label>
                <input type="text" id="title" name="title" required>
            </div>
            
            <div class="form-group">
                <label for="content">เนื้อหา</label>
                <textarea id="content-editor" name="content"></textarea>
            </div>
            
            <button type="submit" class="btn">สร้างหน้าใหม่</button>
            <a href="dashboard.php" class="btn btn-cancel">ยกเลิก</a>
        </form>
    </div>
    
    <script src="../js/script.js"></script>
</body>
</html>