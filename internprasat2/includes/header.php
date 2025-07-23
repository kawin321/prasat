<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบผู้ดูแลรายงานการฝึกงาน</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header class="admin-header">
        <div class="container">
            <h1>ระบบผู้ดูแล</h1>
            <nav>
                <ul>
                    <li><a href="admin/dashboard.php">แดชบอร์ด</a></li>
                    <li><a href="admin/add-page.php">เพิ่มหน้าใหม่</a></li>
                    <li><a href="../index.php" target="_blank">ดูเว็บไซต์</a></li>
                    <li><a href="admin/logout.php">ออกจากระบบ</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="database-stats">
    <h2>สถิติฐานข้อมูล</h2>
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
</div>
    <main class="admin-main">