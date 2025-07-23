<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>อวท. วิทยาลัยการอาชีพปราสาท</title>
  <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    /* CSS รวมทั้งหมด */
    * {
      margin: 0; padding: 0; box-sizing: border-box;
    }
    body {
      font-family: 'Sarabun', sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: #333;
      min-height: 100vh;
    }
    .container {
      max-width: 1200px; margin: 0 auto; padding: 20px;
    }
    header {
      background: rgba(255,255,255,0.1);
      border-radius: 20px;
      padding: 20px;
      margin-bottom: 30px;
      color: white;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255,255,255,0.2);
    }
    .header-content {
      display: flex; align-items: center; gap: 20px;
    }
    .logo {
      width: 80px; height: 80px;
      background: white; padding: 10px;
      border-radius: 15px; box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    }
    .title-section h1 {
      font-size: 2rem; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }
    .title-section h2 {
      font-size: 1.2rem; font-weight: 500;
    }
    nav {
      background: rgba(255,255,255,0.95);
      padding: 15px 0;
      border-radius: 15px;
      margin-bottom: 30px;
      box-shadow: 0 8px 32px rgba(0,0,0,0.1);
    }
    .nav-menu {
      display: flex;
      justify-content: center;
      list-style: none;
      gap: 30px;
      flex-wrap: wrap;
    }
    .nav-menu a {
      text-decoration: none;
      color: #4a5568;
      font-weight: 600;
      padding: 12px 25px;
      border-radius: 25px;
      transition: all 0.3s ease;
      position: relative;
    }
    .nav-menu a.active,
    .nav-menu a:hover {
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: white;
      box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }
    main {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      padding: 40px 20px;
      color: white;
      text-align: center;
    }
    .hero-text h2 {
      font-size: 2rem;
      margin-bottom: 10px;
    }
    .hero-text p {
      font-size: 1.1rem;
    }
    .about-image img {
      margin-top: 20px;
      max-width: 100%;
      border-radius: 15px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.2);
    }
    .news {
      margin-top: 40px;
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      color: #333;
    }
    .news h3 {
      font-size: 1.5rem;
      margin-bottom: 20px;
    }
    .news ul {
      list-style: none;
      padding-left: 0;
    }
    .news li {
      margin-bottom: 10px;
    }
    footer {
      margin-top: 50px;
      padding: 30px;
      text-align: center;
      color: white;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      border: 1px solid rgba(255,255,255,0.2);
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <div class="header-content">
        <img src="http://www.uvc.ac.th/home/images/picture/LOGO_Future_Professional_Organizations_of_Thailand.png" alt="โลโก้" class="logo">
        <div class="title-section">
          <h1>องค์การนักวิชาชีพแห่งประเทศไทย</h1>
          <h2>วิทยาลัยการอาชีพปราสาท</h2>
        </div>
      </div>
    </header>

    <nav>
      <ul class="nav-menu">
        <li><a href="index.php" class="active">🏠 หน้าแรก</a></li>
        <li><a href="about.php">📖 เกี่ยวกับเรา</a></li>
        <li><a href="activities.php">🎯 กิจกรรม</a></li>
        <li><a href="#courses">📚 หลักสูตร</a></li>
        <li><a href="#news">📰 ข่าวสาร</a></li>
        <li><a href="contact.php">📞 ติดต่อเรา</a></li>
      </ul>
    </nav>

    <main>
      <section class="hero-text">
        <h2>ยินดีต้อนรับสู่เว็บไซต์ อวท. วิทยาลัยการอาชีพปราสาท</h2>
        <p>เรามุ่งมั่นพัฒนาเยาวชนไทยสู่ความเป็นเลิศด้านวิชาชีพ</p>
        <div class="about-image">
          <img src="img/ปกยาวว.png" alt="ภาพแนะนำ">
        </div>
      </section>

      <section class="news">
        <h3>ข่าวสาร / ประกาศล่าสุด</h3>
        <ul>
          <li>📌 เปิดรับสมัครสมาชิกใหม่ปีการศึกษา 2568</li>
          <li>📌 ประกาศผลการแข่งขันทักษะวิชาชีพ ระดับภาค</li>
          <li>📌 กำหนดการประชุมใหญ่สามัญ อวท. เดือนกรกฎาคม</li>
        </ul>
      </section>
    </main>

    <footer>
      <p>📍 221 หมู่ 5 ต.ปรือ อ.ปราสาท จ.สุรินทร์ 32140 | ☎️ 044-551-209</p>
      <p>© 2025 วิทยาลัยการอาชีพปราสาท | องค์การนักวิชาชีพฯ</p>
    </footer>
  </div>
</body>

<script>
        // Add smooth scrolling and interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll for navigation links
            const navLinks = document.querySelectorAll('.nav-menu a[href^="#"]');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Add intersection observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all content cards
            const contentCards = document.querySelectorAll('.content-card');
            contentCards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
                observer.observe(card);
            });

            // Add hover effects to timeline items
            const timelineItems = document.querySelectorAll('.timeline-item');
            timelineItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.background = 'linear-gradient(135deg, #e6f3ff, #f0f8ff)';
                });
                
                item.addEventListener('mouseleave', function() {
                    this.
  </script>
</html>
