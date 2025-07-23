<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คณะกรรมการ อวท. - วิทยาลัยเทคโนโลยี</title>
    <link rel="stylesheet" href="#" id="css-link">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/AboutAFT.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo-section">
                    <img src="https://via.placeholder.com/80x80/0066cc/ffffff?text=อวท." alt="โลโก้ อวท." class="logo">
                    <div class="title-section">
                        <h1>คณะกรรมการ อวท.</h1>
                        <p>วิทยาลัยเทคโนโลยีและอาชีวศึกษา</p>
                    </div>
                </div>
                <div class="contact-info">
                    <div class="contact-item">
                        <span>📞 02-123-4567</span>
                    </div>
                    <div class="contact-item">
                        <span>✉️ info@avot-college.ac.th</span>
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
                    <a href="#about" class="nav-link">เกี่ยวกับ อวท.</a>
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
                    <img src="https://via.placeholder.com/1200x600/0066cc/ffffff?text=กิจกรรม+อวท.+1" alt="กิจกรรม อวท.">
                    <div class="slide-content">
                        <h2>พัฒนาคุณภาพการศึกษา</h2>
                        <p>คณะกรรมการ อวท. มุ่งมั่นพัฒนาคุณภาพการศึกษาอาชีวศึกษา</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="https://via.placeholder.com/1200x600/009966/ffffff?text=กิจกรรม+อวท.+2" alt="กิจกรรม อวท.">
                    <div class="slide-content">
                        <h2>สร้างคนดี คนเก่ง</h2>
                        <p>ตามแผนพัฒนาการศึกษาแห่งชาติ</p>
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
                <div class="about-content">
                    <h2 class="section-title">เกี่ยวกับ อวท.</h2>
                    
                    <!-- Tab Navigation -->
                    <div class="tab-nav">
                        <button class="tab-btn active" data-tab="history">ประวัติความเป็นมา</button>
                        <button class="tab-btn" data-tab="objectives">วัตถุประสงค์</button>
                        <button class="tab-btn" data-tab="regulations">ระเบียบ พ.ศ. 2566</button>
                    </div>

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <!-- ประวัติความเป็นมา -->
                        <div id="history" class="tab-pane active">
                            <div class="content-grid">
                                <div class="content-text">
                                    <h3>ประวัติความเป็นมา</h3>
                                    <p class="lead">คณะกรรมการอำนวยการและประสานงานการจัดการศึกษาอาชีวศึกษาเอกชน (อวท.) ก่อตั้งขึ้นตามพระราชบัญญัติการศึกษาแห่งชาติ พ.ศ. 2542 และที่แก้ไขเพิ่มเติม</p>
                                    
                                    <div class="timeline">
                                        <div class="timeline-item">
                                            <div class="timeline-year">2542</div>
                                            <div class="timeline-content">
                                                <h4>การก่อตั้ง</h4>
                                                <p>ก่อตั้งขึ้นตามพระราชบัญญัติการศึกษาแห่งชาติ เพื่อกำกับดูแลสถานศึกษาเอกชนด้านอาชีวศึกษา</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-year">2551</div>
                                            <div class="timeline-content">
                                                <h4>การปรับปรุงโครงสร้าง</h4>
                                                <p>ปรับปรุงโครงสร้างและบทบาทให้สอดคล้องกับการปฏิรูปการศึกษา</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-year">2566</div>
                                            <div class="timeline-content">
                                                <h4>ระเบียบใหม่</h4>
                                                <p>ออกระเบียบใหม่เพื่อยกระดับมาตรฐานการศึกษาอาชีวศึกษาเอกชน</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-image">
                                    <img src="https://via.placeholder.com/400x300/0066cc/ffffff?text=ประวัติ+อวท." alt="ประวัติ อวท.">
                                </div>
                            </div>
                        </div>

                        <!-- วัตถุประสงค์ -->
                        <div id="objectives" class="tab-pane">
                            <div class="objectives-container">
                                <h3>วัตถุประสงค์ของ อวท.</h3>
                                <p class="lead">คณะกรรมการ อวท. มีวัตถุประสงค์หลักในการส่งเสริมและพัฒนาการศึกษาอาชีวศึกษาเอกชนให้มีคุณภาพและมาตรฐาน</p>
                                
                                <div class="objectives-grid">
                                    <div class="objective-card">
                                        <div class="objective-icon">🎯</div>
                                        <h4>พัฒนาคุณภาพการศึกษา</h4>
                                        <p>ส่งเสริมและพัฒนาคุณภาพการจัดการศึกษาอาชีวศึกษาเอกชนให้มีมาตรฐานสากล</p>
                                    </div>
                                    <div class="objective-card">
                                        <div class="objective-icon">🤝</div>
                                        <h4>สร้างเครือข่ายความร่วมมือ</h4>
                                        <p>สร้างเครือข่ายความร่วมมือระหว่างสถานศึกษา ภาคเอกชน และชุมชน</p>
                                    </div>
                                    <div class="objective-card">
                                        <div class="objective-icon">👨‍🏫</div>
                                        <h4>พัฒนาครูและบุคลากร</h4>
                                        <p>พัฒนาครูและบุคลากรทางการศึกษาให้มีความเชี่ยวชาญในสาขาวิชาชีพ</p>
                                    </div>
                                    <div class="objective-card">
                                        <div class="objective-icon">📚</div>
                                        <h4>ส่งเสริมการเรียนการสอน</h4>
                                        <p>ส่งเสริมการจัดการเรียนการสอนที่เน้นผู้เรียนเป็นศูนย์กลางและมีคุณภาพ</p>
                                    </div>
                                    <div class="objective-card">
                                        <div class="objective-icon">⚙️</div>
                                        <h4>พัฒนาทักษะวิชาชีพ</h4>
                                        <p>ส่งเสริมการพัฒนาทักษะวิชาชีพให้สอดคล้องกับความต้องการของตลาดแรงงาน</p>
                                    </div>
                                    <div class="objective-card">
                                        <div class="objective-icon">🌟</div>
                                        <h4>สร้างคนดี คนเก่ง</h4>
                                        <p>พัฒนาผู้เรียนให้เป็นคนดี มีคุณธรรม จริยธรรม และมีความเก่งกาจในวิชาชีพ</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ระเบียบ พ.ศ. 2566 -->
                        <div id="regulations" class="tab-pane">
                            <div class="regulations-container">
                                <h3>ข้อมูลตามระเบียบ พ.ศ. 2566</h3>
                                <p class="lead">ระเบียบคณะกรรมการอำนวยการและประสานงานการจัดการศึกษาอาชีวศึกษาเอกชน พ.ศ. 2566</p>
                                
                                <div class="regulation-sections">
                                    <div class="regulation-section">
                                        <h4>หมวด 1 บททั่วไป</h4>
                                        <div class="regulation-content">
                                            <div class="regulation-item">
                                                <strong>ข้อ 4</strong> คณะกรรมการมีอำนาจหน้าที่ดังต่อไปนี้:
                                                <ul class="regulation-list">
                                                    <li>กำหนดนโยบายและทิศทางการพัฒนาการศึกษาอาชีวศึกษาเอกชน</li>
                                                    <li>ประสานงานกับหน่วยงานที่เกี่ยวข้องในการพัฒนาการศึกษา</li>
                                                    <li>ส่งเสริมและสนับสนุนการจัดการศึกษาอาชีวศึกษาเอกชน</li>
                                                    <li>กำกับดูแลคุณภาพและมาตรฐานการศึกษา</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="regulation-section">
                                        <h4>หมวด 2 องค์ประกอบและคุณสมบัติ</h4>
                                        <div class="regulation-content">
                                            <div class="regulation-item">
                                                <strong>ข้อ 6</strong> คณะกรรมการประกอบด้วย:
                                                <ul class="regulation-list">
                                                    <li>ประธานกรรมการ จำนวน 1 คน</li>
                                                    <li>กรรมการผู้แทนหน่วยงานภาครัฐ จำนวน 3 คน</li>
                                                    <li>กรรมการผู้แทนสถานศึกษาเอกชน จำนวน 5 คน</li>
                                                    <li>กรรมการผู้ทรงคุณวุฒิ จำนวน 3 คน</li>
                                                    <li>เลขานุการ จำนวน 1 คน</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="regulation-section">
                                        <h4>หมวด 3 การดำเนินงาน</h4>
                                        <div class="regulation-content">
                                            <div class="regulation-item">
                                                <strong>ข้อ 12</strong> การประชุมคณะกรรมการ:
                                                <ul class="regulation-list">
                                                    <li>ประชุมสามัญอย่างน้อยไตรมาสละ 1 ครั้ง</li>
                                                    <li>ประชุมวิสามัญเมื่อมีความจำเป็น</li>
                                                    <li>องค์ประชุมต้องมีกรรมการมาประชุมไม่น้อยกว่ากึ่งหนึ่ง</li>
                                                    <li>การวินิจฉัยชี้ขาดให้ถือเสียงข้างมาก</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="download-section">
                                        <h4>เอกสารดาวน์โหลด</h4>
                                        <div class="download-links">
                                            <a href="#" class="download-link">
                                                <span class="download-icon">📄</span>
                                                <div class="download-info">
                                                    <span class="download-title">ระเบียบ อวท. พ.ศ. 2566</span>
                                                    <span class="download-size">PDF (2.1 MB)</span>
                                                </div>
                                            </a>
                                            <a href="#" class="download-link">
                                                <span class="download-icon">📋</span>
                                                <div class="download-info">
                                                    <span class="download-title">แบบฟอร์ม อวท.15</span>
                                                    <span class="download-size">PDF (850 KB)</span>
                                                </div>
                                            </a>
                                            <a href="#" class="download-link">
                                                <span class="download-icon">📊</span>
                                                <div class="download-info">
                                                    <span class="download-title">แบบฟอร์ม อวท.16</span>
                                                    <span class="download-size">PDF (1.2 MB)</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <p>📍 123 ถนนการศึกษา ตำบลเทคโนโลยี<br>
                        อำเภอเมือง จังหวัดนครสวรรค์ 60000</p>
                        <p>📞 02-123-4567</p>
                        <p>✉️ info@avot-college.ac.th</p>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>ลิงก์สำคัญ</h3>
                    <ul class="footer-links">
                        <li><a href="#">กระทรวงศึกษาธิการ</a></li>
                        <li><a href="#">สำนักงาน ศึกษาธิการจังหวัด</a></li>
                        <li><a href="#">สำนักงานคณะกรรมการการอาชีวศึกษา</a></li>
                        <li><a href="#">แบบฟอร์มดาวน์โหลด</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>ติดตามเรา</h3>
                    <div class="social-media">
                        <a href="#" class="social-link">Facebook</a>
                        <a href="#" class="social-link">Line</a>
                        <a href="#" class="social-link">YouTube</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2568 คณะกรรมการ อวท. วิทยาลัยเทคโนโลยีและอาชีวศึกษา. สงวนลิขสิทธิ์.</p>
            </div>
        </div>
    </footer>

   <script src=js/AboutAFT.js></script>



  