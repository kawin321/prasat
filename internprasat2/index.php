<?php
require_once 'includes/config.php';
require_once 'includes/header.php';

// ดึงข้อมูลหน้า
$stmt = $pdo->query("SELECT * FROM pages ORDER BY page_order");
$pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="report-container">
    <div class="sidebar">
        
        <div class="logo">
            <link rel="stylesheet" href="style.css">
            <img src="" alt="วิทยาลัยการอาชีพปรสาท">
        </div>
        <ul class="nav-links">
            <?php foreach ($pages as $page): ?>
                <li><a href="#page-<?= $page['id'] ?>"><?= $page['title'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    
    <div class="main-content">
        <?php foreach ($pages as $page): ?>
            <section id="page-<?= $page['id'] ?>" class="page-section">
                <div class="page-content">
                    <?= $page['content'] ?>
                </div>
            </section>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>