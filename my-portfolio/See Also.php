<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>สื่อและนวัตกรรมการสอน | Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* สไตล์หลัก */
    .innovation-section {
      padding: 80px 0;
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }
    
    .section-header {
      text-align: center;
      margin-bottom: 50px;
    }
    
    .section-header h2 {
      font-size: 2.8rem;
      color: #2c3e50;
      margin-bottom: 15px;
      position: relative;
      display: inline-block;
    }
    
    .section-header h2:after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 4px;
      background: linear-gradient(90deg, #3498db, #2ecc71);
      border-radius: 2px;
    }
    
    .section-header p {
      color: #7f8c8d;
      font-size: 1.2rem;
      max-width: 800px;
      margin: 0 auto;
    }
    
    /* การ์ดสื่อการสอน */
    .innovation-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
      gap: 30px;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    .innovation-card {
      background: white;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      transition: all 0.4s ease;
      position: relative;
    }
    
    .innovation-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }
    
    .media-container {
      height: 250px;
      position: relative;
      overflow: hidden;
    }
    
    .media-container img,
    .media-container video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    
    .innovation-card:hover .media-container img,
    .innovation-card:hover .media-container video {
      transform: scale(1.05);
    }
    
    .media-badge {
      position: absolute;
      top: 15px;
      right: 15px;
      background: rgba(52, 152, 219, 0.9);
      color: white;
      padding: 5px 10px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
    }
    
    .innovation-content {
      padding: 25px;
    }
    
    .innovation-content h3 {
      font-size: 1.5rem;
      color: #2c3e50;
      margin-bottom: 10px;
    }
    
    .innovation-content p {
      color: #7f8c8d;
      line-height: 1.7;
      margin-bottom: 20px;
    }
    
    .innovation-meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 20px;
    }
    
    .innovation-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }
    
    .innovation-tag {
      background: rgba(52, 152, 219, 0.1);
      color: #3498db;
      padding: 5px 12px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 500;
    }
    
    .innovation-link {
      color: #3498db;
      font-size: 1.2rem;
      transition: transform 0.3s ease;
    }
    
    .innovation-link:hover {
      transform: translateX(5px);
      color: #2980b9;
    }
    
    /* ปุ่มดูทั้งหมด */
    .view-all {
      text-align: center;
      margin-top: 50px;
    }
    
    .view-all-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 12px 30px;
      background: #3498db;
      color: white;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
    }
    
    .view-all-btn:hover {
      background: #2980b9;
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(41, 128, 185, 0.4);
    }
    
    /* Responsive Design */
    @media (max-width: 992px) {
      .innovation-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      }
    }
    
    @media (max-width: 768px) {
      .section-header h2 {
        font-size: 2.2rem;
      }
      
      .section-header p {
        font-size: 1rem;
      }
      
      .media-container {
        height: 200px;
      }
    }
    
    /* เอฟเฟกต์พิเศษ */
    .innovation-card:nth-child(odd) {
      animation: fadeInLeft 0.6s ease forwards;
    }
    
    .innovation-card:nth-child(even) {
      animation: fadeInRight 0.6s ease forwards;
    }
    
    @keyframes fadeInLeft {
      from { opacity: 0; transform: translateX(-30px); }
      to { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes fadeInRight {
      from { opacity: 0; transform: translateX(30px); }
      to { opacity: 1; transform: translateX(0); }
    }
  </style>
</head>
<body>
  <header>
    <?php include 'menu.php'; ?>
  </header>

  <section class="innovation-section">
    <div class="section-header">
      <h2>สื่อและนวัตกรรมการสอน</h2>
      <p>ผลงานการพัฒนาสื่อการสอนและนวัตกรรมทางการศึกษาที่สร้างสรรค์เพื่อการเรียนรู้ที่มีประสิทธิภาพ</p>
    </div>
    
    <div class="innovation-grid">
      <!-- สื่อการสอนที่ 1 -->
      <div class="innovation-card">
        <div class="media-container">
          <img src="assets/innovations/สื่อการสอน1.jpg" alt="สื่อการสอนดิจิทัล" loading="lazy">
          <span class="media-badge">Digital Media</span>
        </div>
        <div class="innovation-content">
          <h3>สื่อการสอนดิจิทัลแบบอินเทอร์แอกทีฟ</h3>
          <p>การพัฒนาสื่อการสอนดิจิทัลที่นักเรียนสามารถมีส่วนร่วมในการเรียนรู้ผ่านกิจกรรมแบบอินเทอร์แอกทีฟ</p>
          <div class="innovation-meta">
            <div class="innovation-tags">
              <span class="innovation-tag">EdTech</span>
              <span class="innovation-tag">Interactive</span>
            </div>
            <a href="#" class="innovation-link">
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      
      <!-- สื่อการสอนที่ 2 -->
      <div class="innovation-card">
        <div class="media-container">
          <video poster="assets/innovations/เกมการศึกษา-thumb.jpg" muted loop>
            <source src="assets/innovations/เกมการศึกษา.mp4" type="video/mp4">
          </video>
          <span class="media-badge">Educational Game</span>
        </div>
        <div class="innovation-content">
          <h3>เกมการศึกษาเพื่อการเรียนรู้</h3>
          <p>การออกแบบเกมการศึกษาที่ช่วยให้นักเรียนเรียนรู้เนื้อหาวิชาการผ่านกระบวนการเล่นเกม</p>
          <div class="innovation-meta">
            <div class="innovation-tags">
              <span class="innovation-tag">Gamification</span>
              <span class="innovation-tag">การเรียนรู้ผ่านเกม</span>
            </div>
            <a href="#" class="innovation-link">
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      
      <!-- สื่อการสอนที่ 3 -->
      <div class="innovation-card">
        <div class="media-container">
          <img src="assets/innovations/โมเดลการสอน.jpg" alt="โมเดลการสอน" loading="lazy">
          <span class="media-badge">Teaching Model</span>
        </div>
        <div class="innovation-content">
          <h3>โมเดลการสอนแบบใหม่</h3>
          <p>การพัฒนารูปแบบการสอนที่เน้นผู้เรียนเป็นศูนย์กลางและส่งเสริมทักษะในศตวรรษที่ 21</p>
          <div class="innovation-meta">
            <div class="innovation-tags">
              <span class="innovation-tag">Pedagogy</span>
              <span class="innovation-tag">Active Learning</span>
            </div>
            <a href="#" class="innovation-link">
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      
      <!-- เพิ่มสื่อการสอนอื่นๆ ตามต้องการ -->
    </div>
    
    <div class="view-all">
      <a href="#" class="view-all-btn">
        ดูสื่อการสอนทั้งหมด
        <i class="fas fa-arrow-right"></i>
      </a>
    </div>
  </section>

  <script>
    // เพิ่มการเล่นวิดีโอเมื่อโฮเวอร์
    document.querySelectorAll('video').forEach(video => {
      video.addEventListener('mouseenter', function() {
        this.play();
      });
      
      video.addEventListener('mouseleave', function() {
        this.pause();
        this.currentTime = 0;
      });
    });
    
    // เพิ่ม animation เมื่อเลื่อนมาถึงส่วนนี้
    const innovationCards = document.querySelectorAll('.innovation-card');
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateX(0)';
        }
      });
    }, { threshold: 0.1 });
    
    innovationCards.forEach(card => {
      card.style.opacity = '0';
      observer.observe(card);
    });
    // เมื่อคลิกที่ภาพจะแสดงภาพขนาดเต็ม
document.querySelectorAll('.media-container img').forEach(img => {
  img.addEventListener('click', function() {
    // แสดง lightbox
  });
});
  </script>
</body>
</html>