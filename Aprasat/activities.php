<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กิจกรรม - อวท.วิทยาลัยการอาชีพปราสาท</title>
     
  
</head>
<body>
    <link rel="stylesheet" href="css/hom.css">
    <script src="js/contact.js"></script>
     <header>
    <div class="container">
      <img src="http://www.uvc.ac.th/home/images/picture/LOGO_Future_Professional_Organizations_of_Thailand.png" alt="โลโก้องค์กร" class="logo" />
      <div>
        <h1>องค์การนักวิชาชีพแห่งประเทศไทย</h1>
        <h2>วิทยาลัยการอาชีพปราสาท</h2>
      </div>
    </div>
  </header>

  <nav>
    <link rel="stylesheet" href="css/contact.css">
    <div class="container">
        
      <ul>
        <li><a href="index.php">หน้าแรก</a></li>
        <li><a href="about.php">เกี่ยวกับเรา</a></li>
        <li><a href="activities.php">กิจกรรม</a></li>
        <li><a href="contact.php">ติดต่อเรา</a></li>
      </ul>
    </div>
    <link rel="stylesheet" href="css/activities.css">
    <body>
    <div class="container">
        <div class="header">
            <h1>กิจกรรม/ข่าวสาร</h1>
            <p>อวท.วิทยาลัยการอาชีพปราสาท</p>
        </div>

        <div class="tabs">
            <button class="tab-btn active" onclick="switchTab('activities')">📸 ภาพกิจกรรม</button>
            <button class="tab-btn" onclick="switchTab('news')">📢 ข่าวประชาสัมพันธ์</button>
            <button class="tab-btn" onclick="switchTab('calendar')">📅 ปฏิทินกิจกรรม</button>
        </div>

        <!-- ภาพกิจกรรม -->
        <div id="activities" class="tab-content active">
            <div class="activities-grid">
                <div class="activity-card">
                    <div class="activity-image">📸</div>
                    <div class="activity-content">
                        <div class="activity-title">งานแสดงผลงานนักศึกษา</div>
                        <div class="activity-date">🗓️ 15 มิถุนายน 2568</div>
                        <div class="activity-description">นักศึกษาแสดงผลงานโครงการจบการศึกษา รวมถึงนวัตกรรมและเทคโนโลยีใหม่ๆ ที่พัฒนาขึ้น</div>
                    </div>
                </div>

                <div class="activity-card">
                    <div class="activity-image">🎓</div>
                    <div class="activity-content">
                        <div class="activity-title">พิธีไหว้ครู ประจำปี 2568</div>
                        <div class="activity-date">🗓️ 16 มิถุนายน 2568</div>
                        <div class="activity-description">พิธีไหว้ครูประจำปีการศึกษา เพื่อแสดงความกตัญญูกตเวทิตาต่ออาจารย์</div>
                    </div>
                </div>

                <div class="activity-card">
                    <div class="activity-image">🏆</div>
                    <div class="activity-content">
                        <div class="activity-title">การแข่งขันทักษะวิชาชีพ</div>
                        <div class="activity-date">🗓️ 20 มิถุนายน 2568</div>
                        <div class="activity-description">นักศึกษาเข้าร่วมการแข่งขันทักษะวิชาชีพระดับภูมิภาค ในสาขาต่างๆ</div>
                    </div>
                </div>

                <div class="activity-card">
                    <div class="activity-image">🎨</div>
                    <div class="activity-content">
                        <div class="activity-title">งานศิลปหัตถกรรมนักเรียน</div>
                        <div class="activity-date">🗓️ 25 มิถุนายน 2568</div>
                        <div class="activity-description">การแสดงผลงานศิลปหัตถกรรม ดนตรี และการแสดงต่างๆ ของนักศึกษา</div>
                    </div>
                </div>

                <div class="activity-card">
                    <div class="activity-image">🔬</div>
                    <div class="activity-content">
                        <div class="activity-title">งานวิทยาศาสตร์และเทคโนโลยี</div>
                        <div class="activity-date">🗓️ 30 มิถุนายน 2568</div>
                        <div class="activity-description">การจัดแสดงผลงานวิจัยและนวัตกรรมทางด้านวิทยาศาสตร์และเทคโนโลยี</div>
                    </div>
                </div>

                <div class="activity-card">
                    <div class="activity-image">🤝</div>
                    <div class="activity-content">
                        <div class="activity-title">กิจกรรมบริการชุมชน</div>
                        <div class="activity-date">🗓️ 5 กรกฎาคม 2568</div>
                        <div class="activity-description">นักศึกษาและอาจารย์ร่วมกันทำกิจกรรมบริการวิชาการแก่ชุมชน</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ข่าวประชาสัมพันธ์ -->
        <div id="news" class="tab-content">
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-title">ประกาศรับสมัครนักศึกษาใหม่ ปีการศึกษา 2569</div>
                    <div class="news-date">📅 14 มิถุนายน 2568</div>
                    <div class="news-content">
                        เปิดรับสมัครนักศึกษาใหม่ในหลักสูตรต่างๆ ทั้งระดับ ปวช. และ ปวส. สมัครได้ตั้งแต่วันที่ 1-30 กรกฎาคม 2568 ผ่านระบบออนไลน์หรือที่วิทยาลัยโดยตรง
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-title">ประกาศผลการสอบ O-NET ของนักเรียน ปวช.3</div>
                    <div class="news-date">📅 12 มิถุนายน 2568</div>
                    <div class="news-content">
                        ขอแสดงความยินดีกับนักเรียนชั้น ปวช.3 ที่สอบผ่าน O-NET ด้วยคะแนนที่ดีเยี่ยม โดยเฉพาะในวิชาคณิตศาสตร์และวิทยาศาสตร์
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-title">ทุนการศึกษาสำหรับนักศึกษาดีเด่น</div>
                    <div class="news-date">📅 10 มิถุนายน 2568</div>
                    <div class="news-content">
                        มูลนิธิการศึกษาเสนอทุนการศึกษาสำหรับนักศึกษาที่มีผลการเรียนดีและมีความประพฤติดี สมัครได้ถึง 30 มิถุนายน 2568
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-title">การแข่งขันโครงการ Startup นักศึกษา</div>
                    <div class="news-date">📅 8 มิถุนายน 2568</div>
                    <div class="news-content">
                        เชิญนักศึกษาเข้าร่วมการแข่งขันพัฒนาโครงการ Startup รางวัลรวมกว่า 100,000 บาท ส่งผลงานได้ถึง 15 กรกฎาคม 2568
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-title">หลักสูตรฝึกอบรมระยะสั้น</div>
                    <div class="news-date">📅 6 มิถุนายน 2568</div>
                    <div class="news-content">
                        เปิดหลักสูตรฝึกอบรมระยะสั้น ด้านเทคโนโลยีดิจิทัล การเขียนโปรแกรม และการออกแบบกราฟิก สำหรับบุคคลทั่วไป
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-title">ประกาศปิดวิทยาลัยชั่วคราว</div>
                    <div class="news-date">📅 4 มิถุนายน 2568</div>
                    <div class="news-content">
                        เนื่องจากสภาพอากาศไม่เอื้ออำนวย วิทยาลัยจึงขอปิดการเรียนการสอนในวันที่ 5 มิถุนายน 2568 เพื่อความปลอดภัยของนักศึกษา
                    </div>
                </div>
            </div>
        </div>

        <!-- ปฏิทินกิจกรรม -->
        <div id="calendar" class="tab-content">
            <div class="calendar-container">
                <div class="calendar-header">
                    <div class="calendar-title">มิถุนายน 2568</div>
                    <div class="calendar-nav">
                        <button class="nav-btn" onclick="prevMonth()">‹</button>
                        <button class="nav-btn" onclick="nextMonth()">›</button>
                    </div>
                </div>

                <div class="calendar-grid">
                    <div class="calendar-day-header">อา</div>
                    <div class="calendar-day-header">จ</div>
                    <div class="calendar-day-header">อ</div>
                    <div class="calendar-day-header">พ</div>
                    <div class="calendar-day-header">พฤ</div>
                    <div class="calendar-day-header">ศ</div>
                    <div class="calendar-day-header">ส</div>

                    <div class="calendar-day">1</div>
                    <div class="calendar-day">2</div>
                    <div class="calendar-day">3</div>
                    <div class="calendar-day">4</div>
                    <div class="calendar-day">5</div>
                    <div class="calendar-day">6</div>
                    <div class="calendar-day">7</div>
                    <div class="calendar-day">8</div>
                    <div class="calendar-day">9</div>
                    <div class="calendar-day">10</div>
                    <div class="calendar-day">11</div>
                    <div class="calendar-day">12</div>
                    <div class="calendar-day">13</div>
                    <div class="calendar-day" style="background: #667eea; color: white;">14</div>
                    <div class="calendar-day has-event">15</div>
                    <div class="calendar-day has-event">16</div>
                    <div class="calendar-day">17</div>
                    <div class="calendar-day">18</div>
                    <div class="calendar-day">19</div>
                    <div class="calendar-day has-event">20</div>
                    <div class="calendar-day">21</div>
                    <div class="calendar-day">22</div>
                    <div class="calendar-day">23</div>
                    <div class="calendar-day">24</div>
                    <div class="calendar-day has-event">25</div>
                    <div class="calendar-day">26</div>
                    <div class="calendar-day">27</div>
                    <div class="calendar-day">28</div>
                    <div class="calendar-day">29</div>
                    <div class="calendar-day has-event">30</div>
                </div>

                <div class="events-list">
                    <div class="events-title">กิจกรรมในเดือนนี้</div>
                    
                    <div class="event-item">
                        <div class="event-date">15</div>
                        <div class="event-details">
                            <div class="event-title">งานแสดงผลงานนักศึกษา</div>
                            <div class="event-time">09:00 - 16:00 น.</div>
                        </div>
                    </div>

                    <div class="event-item">
                        <div class="event-date">16</div>
                        <div class="event-details">
                            <div class="event-title">พิธีไหว้ครู ประจำปี 2568</div>
                            <div class="event-time">08:00 - 12:00 น.</div>
                        </div>
                    </div>

                    <div class="event-item">
                        <div class="event-date">20</div>
                        <div class="event-details">
                            <div class="event-title">การแข่งขันทักษะวิชาชีพ</div>
                            <div class="event-time">08:00 - 17:00 น.</div>
                        </div>
                    </div>

                    <div class="event-item">
                        <div class="event-date">25</div>
                        <div class="event-details">
                            <div class="event-title">งานศิลปหัตถกรรมนักเรียน</div>
                            <div class="event-time">09:00 - 16:00 น.</div>
                        </div>
                    </div>

                    <div class="event-item">
                        <div class="event-date">30</div>
                        <div class="event-details">
                            <div class="event-title">งานวิทยาศาสตร์และเทคโนโลยี</div>
                            <div class="event-time">08:30 - 17:00 น.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/activities.js"></script>
</body>
</html>