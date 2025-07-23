<?php
session_start();
require_once '../includes/config.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

// ดึงข้อมูลหน้า
$stmt = $pdo->query("SELECT * FROM pages ORDER BY page_order");
$pages = $stmt->fetchAll(PDO::FETCH_ASSOC);

// เพิ่มส่วนนี้: ดึงข้อมูลสถิติฐานข้อมูล
function getDatabaseSize($pdo, $dbName = 'internship_report') {
    $sql = "SELECT 
                table_name AS table_name,
                ROUND(data_length / 1024 / 1024, 2) AS data_size_mb,
                ROUND(index_length / 1024 / 1024, 2) AS index_size_mb,
                ROUND((data_length + index_length) / 1024 / 1024, 2) AS total_size_mb,
                table_rows AS rows_count
            FROM 
                information_schema.TABLES
            WHERE 
                table_schema = ?
            ORDER BY 
                (data_length + index_length) DESC";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$dbName]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$databaseStats = getDatabaseSize($pdo);
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แดชบอร์ดผู้ดูแล</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <?php include '../includes/admin-header.php'; ?>
    
    <div class="admin-container">
        <h1>จัดการรายงานการฝึกงาน</h1>
        
        <div class="admin-actions">
            <a href="add-page.php" class="btn">เพิ่มหน้าใหม่</a>
        </div>
        
        <div class="pages-list">
            <?php foreach ($pages as $page): ?>
                <div class="page-card">
                    <h3><?= htmlspecialchars($page['title']) ?></h3>
                    <div class="page-actions">
                        <a href="edit-content.php?id=<?= $page['id'] ?>" class="btn btn-edit">แก้ไข</a>
                        <a href="#" class="btn btn-delete" onclick="confirmDelete(<?= $page['id'] ?>)">ลบ</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="database-stats">
            <h2>สถิติฐานข้อมูล</h2>
            <?php if (!empty($databaseStats)): ?>
                <table class="stats-table">
                    <thead>
                        <tr>
                            <th>ตาราง</th>
                            <th>ขนาดข้อมูล (MB)</th>
                            <th>ขนาดดัชนี (MB)</th>
                            <th>ขนาดรวม (MB)</th>
                            <th>จำนวนเรคอร์ด</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($databaseStats as $table): ?>
                        <tr>
                            <td><?= htmlspecialchars($table['table_name']) ?></td>
                            <td class="text-right"><?= $table['data_size_mb'] ?></td>
                            <td class="text-right"><?= $table['index_size_mb'] ?></td>
                            <td class="text-right"><?= $table['total_size_mb'] ?></td>
                            <td class="text-right"><?= number_format($table['rows_count']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>ไม่พบข้อมูลสถิติฐานข้อมูล</p>
            <?php endif; ?>
        </div>
    </div>
    
    <script>
    function confirmDelete(id) {
        if (confirm('คุณแน่ใจหรือไม่ว่าต้องการลบหน้านี้?')) {
            window.location.href = 'delete-page.php?id=' + id;
        }
    }
    </script>
</body>
</html>