<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายงานการฝึกงาน</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="container">
            <div class="logo">
                <img src="https://prasat.ac.th/wp-content/uploads/2022/12/prasat2.png" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="#home">หน้าหลัก</a></li>
                    <li><a href="#report">รายงาน</a></li>
                    <li><a href="#contact">ติดต่อ</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <h1>รายงานการฝึกประสบการณ์วิชาชีพ</h1>
            <p>นายตัวอย่าง ตั้งใจเรียน</p>
            <p>ณ บริษัท ตัวอย่าง จำกัด</p>
        </div>
    </section>

    <main id="report" class="container">
        <article class="report-week">
            <h2>สัปดาห์ที่ 1: การเรียนรู้เบื้องต้น</h2>
            <p><strong>วันที่:</strong> 1 - 5 กรกฎาคม 2568</p>
            <p>ในสัปดาห์แรกของการฝึกงาน ผมได้เรียนรู้เกี่ยวกับโครงสร้างองค์กร วัฒนธรรม และเครื่องมือต่างๆ ที่ใช้ในการทำงาน เช่น ...</p>
        </article>

        <article class="report-week">
            <h2>สัปดาห์ที่ 2: เริ่มต้นโปรเจกต์</h2>
            <p><strong>วันที่:</strong> 8 - 12 กรกฎาคม 2568</p>
            <p>ได้รับมอบหมายให้ดูแลโปรเจกต์ ... โดยมีหน้าที่รับผิดชอบในส่วนของการออกแบบฐานข้อมูลเบื้องต้นและ...</p>
        </article>

        <?php
            // ตัวอย่างการใช้ PHP เพื่อแสดงผลข้อมูลแบบไดนามิก
            $weeks = [
                ['title' => 'สัปดาห์ที่ 3: พัฒนาระบบ', 'date' => '15 - 19 กรกฎาคม 2568', 'detail' => 'ในสัปดาห์นี้ได้เริ่มพัฒนาระบบส่วนหน้า (Frontend) โดยใช้...'],
                ['title' => 'สัปดาห์ที่ 4: ทดสอบและแก้ไข', 'date' => '22 - 26 กรกฎาคม 2568', 'detail' => 'ทำการทดสอบระบบที่พัฒนาขึ้นและแก้ไขข้อผิดพลาดต่างๆ ที่พบ...']
            ];

            foreach ($weeks as $week) {
                echo '<article class="report-week">';
                echo '<h2>' . htmlspecialchars($week['title']) . '</h2>';
                echo '<p><strong>วันที่:</strong> ' . htmlspecialchars($week['date']) . '</p>';
                echo '<p>' . htmlspecialchars($week['detail']) . '</p>';
                echo '</article>';
            }
        ?>
    </main>

    <footer id="contact">
        <div class="container">
            <p>จัดทำโดย นายตัวอย่าง ตั้งใจเรียน | รหัสนักศึกษา 6XXXXXXX</p>
            <p>คณะเทคโนโลยีสารสนเทศ | มหาวิทยาลัยตัวอย่าง</p>
        </div>
    </footer>

</body>
</html>