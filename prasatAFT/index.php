<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>อวท.วกปราสาท</title>
    <link rel="stylesheet" href="#" id="css-link">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/hom.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo-section">
                    <img src="http://www.uvc.ac.th/home/images/picture/LOGO_Future_Professional_Organizations_of_Thailand.png" alt="โลโก้ อวท." class="logo">
                    <div class="title-section">
                        <h1>องค์การนักวิชาชีพในอนาคตแห่งประเทศไทย (อวท.)</h1>
                        <p>วิทยาลัยการอาชีพปราสาท</p>
                    </div>
                </div>
                <div class="contact-info">
                    <div class="contact-item">
                        <span>📞 044-551-209</span>
                    </div>
                    <div class="contact-item">
                        <span>✉️ admin</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item">
                    <a href="#home" class="nav-link active">หน้าแรก</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="AboutAFT.php" class="nav-link">เกี่ยวกับ อวท.</a>
                    <div class="dropdown-content">
                        <a href="#history">ประวัติความเป็นมา</a>
                        <a href="#objectives">วัตถุประสงค์</a>
                        <a href="#regulations">ระเบียบ พ.ศ. 2566</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#committee" class="nav-link">คณะกรรมการ</a>
                    <div class="dropdown-content">
                        <a href="#structure">โครงสร้าง</a>
                        <a href="#members">รายชื่อกรรมการ</a>
                        <a href="#appointment">คำสั่งแต่งตั้ง</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#projects" class="nav-link">แผนงาน/โครงการ</a>
                    <div class="dropdown-content">
                        <a href="#annual">โครงการประจำปี</a>
                        <a href="#development">แผนคนดี-คนเก่ง</a>
                        <a href="#reports">รายงานผล</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#activities" class="nav-link">กิจกรรม/ข่าวสาร</a>
                    <div class="dropdown-content">
                        <a href="#gallery">ภาพกิจกรรม</a>
                        <a href="#news">ข่าวประชาสัมพันธ์</a>
                        <a href="#calendar">ปฏิทินกิจกรรม</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#clubs" class="nav-link">ชมรมวิชาชีพ</a>
                    <div class="dropdown-content">
                        <a href="#club-list">รายชื่อชมรม</a>
                        <a href="#club-projects">โครงการชมรม</a>
                        <a href="#club-works">ผลงานชมรม</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#downloads" class="nav-link">ดาวน์โหลด</a>
                    <div class="dropdown-content">
                        <a href="#forms">แบบฟอร์ม อวท.</a>
                        <a href="#documents">เอกสารที่เกี่ยวข้อง</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">ติดต่อเรา</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Hero Section -->
        <section id="home" class="hero">
            <div class="hero-slider">
                <div class="slide active">
                    <img src="img/ปกยาวว.png" alt="กิจกรรม อวท.">
                    <div class="slide-content">
                        <h2></h2>
                        <p></p>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/ปกยาวว.png" alt="กิจกรรม อวท.">
                    <div class="slide-content">
                        <h2></h2>
                        <p></p>
                    </div>
                </div>
                <div class="slide">
                    <img src="https://via.placeholder.com/1200x600/cc6600/ffffff?text=กิจกรรม+อวท.+3" alt="กิจกรรม อวท.">
                    <div class="slide-content">
                        <h2>ชมรมวิชาชีพ</h2>
                        <p>ส่งเสริมทักษะและประสบการณ์วิชาชีพ</p>
                    </div>
                </div>
            </div>
            <div class="slider-controls">
                <button class="prev-btn">‹</button>
                <button class="next-btn">›</button>
            </div>
            <div class="slider-dots">
                <span class="dot active" data-slide="0"></span>
                <span class="dot" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
            </div>
        </section>

        <!-- Latest News -->
        <section class="news-section">
            <div class="container">
                <h2 class="section-title">ข่าวสารล่าสุด</h2>
                <div class="news-grid">
                    <article class="news-card">
                        <img src="https://via.placeholder.com/300x200/0066cc/ffffff?text=ข่าว+1" alt="ข่าว 1">
                        <div class="news-content">
                            <span class="news-date">10 มิ.ย. 2568</span>
                            <h3>ประชุมคณะกรรมการ อวท. ครั้งที่ 1/2568</h3>
                            <p>การประชุมเพื่อวางแผนการดำเนินงานในปีการศึกษา 2568</p>
                            <a href="#" class="read-more">อ่านต่อ</a>
                        </div>
                    </article>
                    <article class="news-card">
                        <img src="https://via.placeholder.com/300x200/009966/ffffff?text=ข่าว+2" alt="ข่าว 2">
                        <div class="news-content">
                            <span class="news-date">8 มิ.ย. 2568</span>
                            <h3>โครงการพัฒนาทักษะวิชาชีพ</h3>
                            <p>จัดกิจกรรมฝึกอบรมเพื่อพัฒนาทักษะแก่นักเรียน นักศึกษา</p>
                            <a href="#" class="read-more">อ่านต่อ</a>
                        </div>
                    </article>
                    <article class="news-card">
                        <img src="https://via.placeholder.com/300x200/cc6600/ffffff?text=ข่าว+3" alt="ข่าว 3">
                        <div class="news-content">
                            <span class="news-date">5 มิ.ย. 2568</span>
                            <h3>การแข่งขันทักษะวิชาชีพ</h3>
                            <p>ผลการแข่งขันทักษะวิชาชีพระดับจังหวัด ประจำปี 2568</p>
                            <a href="#" class="read-more">อ่านต่อ</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about-section">
            <div class="container">
                <div class="about-grid">
                    <div class="about-text">
                        <h2>เกี่ยวกับ อวท.</h2>
                        <p>องค์การนักวิชาชีพในอนาคตแห่งประเทศไทย (อวท.) เป็นองค์การที่จัดตั้งขึ้นในสถานศึกษาสังกัดสำนักงานคณะกรรมการการอาชีวศึกษา เพื่อส่งเสริมให้นักเรียน นักศึกษา ได้พัฒนาตนเองทั้งในด้านคุณธรรม จริยธรรม ทักษะทางวิชาชีพ และภาวะความเป็นผู้นำ ผ่านการจัดกิจกรรมเสริมหลักสูตรตามแผนการพัฒนาผู้เรียนอย่างรอบด้านการดำเนินงานขององค์การฯ เป็นไปตาม ระเบียบสำนักงานคณะกรรมการการอาชีวศึกษา ว่าด้วยองค์การนักวิชาชีพในอนาคตแห่งประเทศไทย พ.ศ. 2566 และแนวปฏิบัติที่เกี่ยวข้อง โดยเน้นการพัฒนา “คนดี คนเก่ง และมีความสุข” อย่างเป็นระบบ</p>
                        <ul class="objectives-list">
                            <li>ส่งเสริมและพัฒนาคุณภาพการศึกษา</li>
                            <li>สร้างเครือข่ายความร่วมมือ</li>
                            <li>พัฒนาครูและบุคลากรทางการศึกษา</li>
                            <li>ส่งเสริมการจัดการเรียนการสอนที่มีคุณภาพ</li>
                        </ul>
                        <a href="#" class="btn-primary">อ่านเพิ่มเติม</a>
                    </div>
                    <div class="about-image">
                        <img src="img/ปกยาวว.png." alt="เกี่ยวกับ อวท.">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>ติดต่อเรา</h3>
                    <div class="contact-details">
                        <p>📍 ตั้งอยู่เลขที่ 221 หมู่ 5 ถนนโชคชัย-เดชอุดม 
                            ตำบลปรือ อำเภอปราสาท จังหวัดสุรินทร์ 32140</p>
                        <p>📞 044-551-209</p>
                        <p>✉️ admin</p>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>ลิงก์สำคัญ</h3>
                    <ul class="footer-links">
                        <li><a href="https://www.moe.go.th/">กระทรวงศึกษาธิการ</a></li>
                        <li><a href="https://ops.moe.go.th/peo/">สำนักงาน ศึกษาธิการจังหวัด</a></li>
                        <li><a href="https://www.vec.go.th/">สำนักงานคณะกรรมการการอาชีวศึกษา</a></li>
                        <li><a href="#">แบบฟอร์มดาวน์โหลด</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>ติดตามเรา</h3>
                    <div class="social-media">
                        <a href="#" class="social-link">Facebook</a>
                        <a href="#" class="social-link">Line -</a>
                        <a href="#" class="social-link">YouTube -</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; อวท.วิทยาลัยการอาชีพปราสาท สงวนลิขสิทธิ์</p>
            </div>
        </div>
    </footer>
<script src=js/hom.js></script>