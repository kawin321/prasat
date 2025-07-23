<?php
$host = 'localhost';
$dbname = 'internship_report';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $e->getMessage());
}

// สร้างตารางหากยังไม่มี
$sql = "CREATE TABLE IF NOT EXISTS pages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    page_order INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$pdo->exec($sql);

// ข้อมูลเริ่มต้น
$stmt = $pdo->query("SELECT COUNT(*) FROM pages");
if ($stmt->fetchColumn() == 0) {
    $defaultPages = [
        ['หน้าปก', '<h1>รายงานการฝึกงาน ณ วิทยาลัยการอาชีพปรสาท</h1><h2>งานกิจกรรมนักเรียนนักศึกษา</h2><p>ช่วงระยะเวลาการฝึกงาน: พฤษภาคม-กันยายน</p>', 1],
        ['ข้อมูลทั่วไป', '<h2>ประวัติองค์กรและวิสัยทัศน์</h2><p>ข้อมูลประวัติองค์กร...</p><h2>แผนกที่ฝึกงาน</h2><p>งานกิจกรรมนักเรียนนักศึกษา</p><img src="images/org-chart.jpg" alt="แผนผังองค์กร" class="org-chart"><p>เวลาเข้างาน: 08:30 - 16:30 น.</p>', 2],
        ['วัตถุประสงค์', '<h2>วัตถุประสงค์และขอบเขตการฝึกงาน</h2><ol><li>พัฒนาความรู้เฉพาะทางและทักษะการปฏิบัติงานจริง</li><li>ฝึกการวางตัว บุคลิกภาพ การสื่อสาร</li><li>เตรียมความพร้อมด้านกฎหมายแรงงาน</li><li>สร้างความสัมพันธ์กับสถานประกอบการ</li></ol><h2>รายละเอียดงาน</h2><p>ดูแลระบบช่วยเหลือนักเรียน น้องสัตบรรรณ</p>', 3],
        ['ผลการเรียนรู้', '<h2>ทักษะที่ได้รับ</h2><ul><li>ทักษะวิชาชีพ: การวิเคราะห์ข้อมูล</li><li>การใช้โปรแกรม Microsoft Office</li><li>การทำงานเป็นทีม</li></ul>', 4],
        ['บทสรุป', '<h2>สรุปประสบการณ์</h2><p>ความรู้สึกโดยรวม...</p><h2>ประโยชน์ที่ได้รับ</h2><p>สามารถนำไปใช้ในการทำงานในอนาคต...</p>', 5]
    ];
    
    foreach ($defaultPages as $page) {
        $stmt = $pdo->prepare("INSERT INTO pages (title, content, page_order) VALUES (?, ?, ?)");
        $stmt->execute($page);
    }
}
?>