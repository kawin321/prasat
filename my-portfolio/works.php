<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ผลงานของฉัน | Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* สไตล์สำหรับส่วนผลงานแนวนอน */
    .horizontal-works-section {
      background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
      padding: 60px 0;
    }
  /* --- เปลี่ยน container ให้ไม่ต้อง scroll --- */
.horizontal-scroll-container{
  overflow: visible;        /* ยกเลิกสก롤 */
  white-space: normal;      /* ยกเลิก nowrap */
  padding: 0 20px;          /* เหลือแค่ระยะขอบ */
}

/* --- จาก works-row อินไลน์‑flex → grid 3 คอลัมน์ --- */
.works-row{
  display: grid;
  grid-template-columns: repeat(3, 1fr);  /* 3 ช่องเท่ากัน */
  gap: 30px;                               /* ระยะห่างระหว่างการ์ด */
}

    
    .works-row {
      display: inline-flex;
      gap: 30px;
      padding: 0 20px;
    }
    
    .work-card {
      display: inline-block;
      width: 350px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      vertical-align: top;
      white-space: normal;
    }
    
    .work-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }
    
    .work-image {
      height: 250px;
      overflow: hidden;
      border-radius: 15px 15px 0 0;
    }
    
    .work-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    
    .work-card:hover .work-image img {
      transform: scale(1.05);
    }
    
    .work-content {
      padding: 20px;
    }
    
    .work-content h3 {
      margin-top: 0;
      color: #2c3e50;
      font-size: 1.4rem;
    }
    
    .work-content p {
      color: #7f8c8d;
      margin-bottom: 20px;
      line-height: 1.6;
    }
    
    .work-tags {
      margin-bottom: 15px;
    }
    
    .tag {
      display: inline-block;
      background: rgba(52, 152, 219, 0.1);
      color: #3498db;
      padding: 5px 12px;
      border-radius: 20px;
      font-size: 0.8rem;
      margin-right: 8px;
      margin-bottom: 8px;
    }
    
    /* สไตล์สำหรับส่วนผลงานแนวตั้ง */
    .vertical-works-section {
      padding: 60px 0;
      background: white;
    }
    
    .works-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px,1fr));
      gap: 30px;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    /* สไตล์ทั่วไป */
    .section-header {
      text-align: center;
      margin-bottom: 40px;
    }
    
    .section-header h2 {
      font-size: 2.5rem;
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
      width: 80px;
      height: 4px;
      background: linear-gradient(90deg, #3498db, #2ecc71);
    }
    
    .section-header p {
      color: #7f8c8d;
      font-size: 1.1rem;
      max-width: 700px;
      margin: 0 auto;
    }
    
    .btn {
      display: inline-block;
      padding: 10px 25px;
      background: #3498db;
      color: white;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }
    
    .btn:hover {
      background: #2980b9;
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(41, 128, 185, 0.3);
    }
    
    .btn-outline {
      background: transparent;
      border: 2px solid #3498db;
      color: #3498db;
    }
    
    .btn-outline:hover {
      background: #3498db;
      color: white;
    }
    
    /* ตัวชี้ให้เลื่อน */
    .scroll-hint {
      text-align: center;
      margin-top: 20px;
      color: #7f8c8d;
      animation: bounce 2s infinite;
    }
    
    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% { transform: translateX(0); }
      40% { transform: translateX(10px); }
      60% { transform: translateX(5px); }
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
      .work-card {
        width: 280px;
      }
      
      .section-header h2 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <?php include 'menu.php'; ?>
  </header>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ผลงานของฉัน | Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      font-family: 'Sarabun', sans-serif;
      margin: 0;
      padding: 0;
      background: #f9f9f9;
    }

    .horizontal-works-section {
      background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
      padding: 60px 20px;
    }

    .works-row {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 30px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .work-card {
      background: white;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      transition: 0.3s ease;
    }

    .work-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }

    .work-image {
      height: 200px;
      overflow: hidden;
      border-radius: 15px 15px 0 0;
    }

    .work-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .work-card:hover .work-image img {
      transform: scale(1.05);
    }

    .work-content {
      padding: 20px;
    }

    .work-content h3 {
      margin-top: 0;
      color: #2c3e50;
      font-size: 1.3rem;
    }

    .work-content p {
      color: #7f8c8d;
      margin-bottom: 20px;
      line-height: 1.6;
    }

    .work-tags {
      margin-bottom: 15px;
    }

    .tag {
      display: inline-block;
      background: rgba(52, 152, 219, 0.1);
      color: #3498db;
      padding: 5px 12px;
      border-radius: 20px;
      font-size: 0.8rem;
      margin-right: 8px;
      margin-bottom: 8px;
    }

    .btn {
      display: inline-block;
      padding: 8px 20px;
      background: #3498db;
      color: white;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn:hover {
      background: #2980b9;
    }

    .btn-outline {
      background: transparent;
      border: 2px solid #3498db;
      color: #3498db;
    }

    .btn-outline:hover {
      background: #3498db;
      color: white;
    }

    .section-header {
      text-align: center;
      margin-bottom: 40px;
    }

    .section-header h2 {
      font-size: 2.5rem;
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
      width: 80px;
      height: 4px;
      background: linear-gradient(90deg, #3498db, #2ecc71);
    }

    .section-header p {
      color: #7f8c8d;
      font-size: 1.1rem;
      max-width: 700px;
      margin: 0 auto;
    }

    @media (max-width: 768px) {
      .section-header h2 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <?php include 'menu.php'; ?>
  </header>

  <!-- ส่วนผลงานกิจกรรมการสอน -->
  <section class="horizontal-works-section">
    <div class="section-header">
      <h2>ผลงานกิจกรรมการสอน</h2>
      <p>ผลงานด้านกิจกรรมต่างๆ ที่ฉันได้จัดขึ้นสำหรับนักเรียน</p>
    </div>

    <div class="works-row">
      <!-- ตัวอย่างผลงาน 1 -->
      <div class="work-card">
        <div class="work-image">
          <img src="https://lh3.googleusercontent.com/-Fo2Ux2EiOYXpTPReKjtTg6S714SSLSSJsrT9rsx2raYTEsCOnR5hFA1tKNfraq0hpUCe31tyJHBoO8L_be0Ai7Rodxfxk1B0PpyDg8Yk8dNVf4bnV4qekz2gwCV29lLmhAO9p9VuKaz4SuOK8t27wd0L8LA-7OkXASJQb4DvEVNxSrCY4GvcA=w1280" loading="lazy">
        </div>
        <div class="work-content">
          <h3>กิจกรรมหน้าเสาธง</h3>
          <p>การจัดกิจกรรมหน้าเสาธงเพื่อสร้างแรงบันดาลใจและให้ความรู้แก่นักเรียน</p>
          <div class="work-tags">
            <span class="tag">กิจกรรมโรงเรียน</span>
            <span class="tag">การพูดในที่สาธารณะ</span>
          </div>
          <a href="#" class="btn btn-outline">ดูรายละเอียด</a>
        </div>
      </div>

      <!-- ตัวอย่างผลงาน 2 -->
      <div class="work-card">
        <div class="work-image">
          <img src="https://lh3.googleusercontent.com/agWA0s2pdcpN14cEmuygqgvYu4KeF7_w_8KMrAjP2vJVWWpLK8rVo7zymhknPud76STPaq5WpZmlQOOCygfzhtVXhM1Hr_EuC24rSbPm81ioQN2HjzGMh_Av8dfG4t4-2rcGekcYKxNeIqf-TkBV-OYSx30YvABGPJp8Vq8Vu17c-WatvMQkig=w1280" alt="การสอนในห้องเรียน" loading="lazy">
        </div>
        <div class="work-content">
          <h3>การสอนในห้องเรียน</h3>
          <p>ครูและนักเรียน สมัครรับระบบMOE Safety Center</p>
          <div class="work-tags">
            <span class="tag">ครูและนักเรียน</span>
            <span class="tag">สมัครรับระบบMOE Safety Center</span>
          </div>
          <a href="#" class="btn btn-outline">ดูรายละเอียด</a>
        </div>
      </div>

      <!-- ตัวอย่างผลงาน 3 -->
      <div class="work-card">
        <div class="work-image">
          <img src="file:///C:/Users/ACC01/Downloads/%E0%B8%8A%E0%B8%B1%E0%B9%89%E0%B8%99%E0%B8%A1%E0%B8%B1%E0%B8%98%E0%B8%A2%E0%B8%A1%E0%B8%A8%E0%B8%B6%E0%B8%81%E0%B8%A9%E0%B8%B2%E0%B8%9B%E0%B8%B5%E0%B8%97%E0%B8%B5%E0%B9%88%203%20%E0%B8%AA%E0%B8%AD%E0%B8%9AO-Net%20%20%E0%B8%93%20%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%A5%E0%B8%A7%E0%B8%87(%E0%B8%9E%E0%B8%A3%E0%B8%AB%E0%B8%A1%E0%B8%9A%E0%B8%B3%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B8%A3%E0%B8%B2%E0%B8%A9%E0%B8%8E%E0%B8%A3%E0%B8%BA%E0%B9%8C).webp">
        </div>
        <div class="work-content">
          <h3>สอบO-Net</h3>
          <p>ชั้นมัธยมศึกษาปีที่ 3 สอบO-Net  ณ โรงเรียนบ้านพลวง(พรหมบำรุงราษฎรฺ์)</p>
          <div class="work-tags">
            <span class="tag">สอบO-Net</span>
            <span class="tag">โรงเรียนบ้านพลวง(พรหมบำรุงราษฎรฺ์)</span>
          </div>
          <a href="#" class="btn btn-outline">ดูรายละเอียด</a>
        </div>
      </div>
 
         <div class="work-card">
        <div class="work-image">
          <img src="https://lh3.googleusercontent.com/UXqr2EpSbq2kV7y1r2Zt4YyajfHPRTQk4DLUtedWpZY7FhIk8Ws7kUJrZvig483lYTJoCEhBEUVoI2uZCySPLpRNNJHYRhyioxmUqglo5D1swMQY2MeSWH3IVB65iCCdFsh8zzLFqmBF5lxFsZZyHd6YLFWFQ0KUJrF5wP7rMN2QX9BcAoPeRA=w1280" alt="โครงการพิเศษ" loading="lazy">
        </div>
        <div class="work-content">
          <h3>ปัจฉิมนิเทศ</h3>
          <p>ปัจฉิมนิเทศนักเรียนชั้นประถมศึกษาปีที่6 และชั้นมัธยมศึกษาปีที่ 3</p>
          <div class="work-tags">
            <span class="tag">ปัจฉิมนิเทศนักเรียนชั้นประถมศึกษาปีที่6</span>
            <span class="tag">ชั้นมัธยมศึกษาปีที่ 3</span>
          </div>
          <a href="#" class="btn btn-outline">ดูรายละเอียด</a>
        </div>
      </div>
        <div class="work-card">
        <div class="work-image">
          <img src="https://lh5.googleusercontent.com/rw5rcrl_Q48kBX_wzWbUb8VeRHVhtMgNaw8gpZtz5HoHq3Y2BF0BIji-DgiRNJPBG4Sw8rnmC-CF5ZN2BSF5njHbqQv25WF0DO6Sd4pJfE20XqQOUD5N7U9MvYsHSq7AkCoL7e4Xod7tbouN-uXKaFlUXMSyK7QM0-GjeaftksaMMgLJcK4Dxg=w1280" alt="โครงการพิเศษ" loading="lazy">
        </div>
        <div class="work-content">
          <h3>เป็นคณะกรรมการประเมินเข้มครูผู้ช่วย</h3>
          <p>เป็นคณะกรรมการประเมินเข้มครูผู้ช่วย นายศรายุท นันทา โรงเรียนบ้านทนง(รัฐราษฎร์วิทยา)</p>
          <div class="work-tags">
            <span class="tag">เป็นคณะกรรมการประเมินเข้มครูผู้ช่วย</span>
            <span class="tag">โรงเรียนบ้านทนง(รัฐราษฎร์วิทยา)</span>
          </div>
          <a href="#" class="btn btn-outline">ดูรายละเอียด</a>
        </div>
      </div>

       <div class="work-card">
        <div class="work-image">
          <img src="https://lh3.googleusercontent.com/uUUqSzPuW_sQ-TUpadFRWRWAptxWg3g9VW9DGNafvaljBTW5QL-lXOdQhxCN__bRRnZhEgsIMd6SviblAV2ucd2ZCq9Zcv2f48oWVXAhpg_6oQYoxZStfEdGRxKIcpRAvADryDDkoJkxSFrv3rc8yD-5rvA-pi9rASnbmS_ZWu5R2g8kU4VWPA=w1280" alt="โครงการพิเศษ" loading="lazy">
        </div>
        <div class="work-content">
          <h3>เปิดบ้านวิชาการ Open House</h3>
          <p></p>
          <div class="work-tags">
            <span class="tag">เปิดบ้านวิชาการ Open House </span>
            <span class="tag">ณ หอประชุมดีลอยท์ โรงเรียนบ้านทนง(รัฐราษฎร์วิทยา)</span>
          </div>
          <a href="#" class="btn btn-outline">ดูรายละเอียด</a>
        </div>
      </div>
             <div class="work-card">
        <div class="work-image">
          <img src="https://lh3.googleusercontent.com/ajYfgHm7aPKwG3BazWn8PfGOvttBhfbvUmifGEqJeD86JbaVVnlVV1OJv_LN63bVjzA3y0TRc9A47uXl7RB3fJ5kgJrG-AXAGDY8l8RP5GbZaKbsylqtmG-cIPvBa2immqfeC3UT4lHDJMVHgGByTs9pwayuHUBF2_ntP6FzLfDw6MEeQy2IvQ=w1280">
        </div>
        <div class="work-content">
          <h3>เกียรติบัตรการอ่านขั้นสูง</h3>
          <p> ระดับชั้นมัธยมศึกาาปีที่ 1-3</p>
          <div class="work-tags">

            <span class="tag">เกียรติบัตรการอ่านขั้นสูง </span>
            <span class="tag">ระดับชั้นมัธยมศึกาาปีที่ 1-3</span>
          </div>
          <a href="#" class="btn btn-outline">ดูรายละเอียด</a>
        </div>
      
      </div>
  <script>
    // เพิ่มการแจ้งเตือนเมื่อเลื่อนถึงจุดสิ้นสุดของส่วนแนวนอน
    const scrollContainer = document.querySelector('.horizontal-scroll-container');
    const scrollHint = document.querySelector('.scroll-hint');
    // Mobile Navigation
const burger = document.querySelector('.burger');
const navLinks = document.querySelector('.nav-links');

burger.addEventListener('click', () => {
  navLinks.classList.toggle('nav-active');
  
  // Burger Animation
  burger.classList.toggle('toggle');
});

// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});
// Scroll Reveal Animation
const scrollElements = document.querySelectorAll('[data-scroll]');

const elementInView = (el, dividend = 1) => {
  const elementTop = el.getBoundingClientRect().top;
  return (
    elementTop <= (window.innerHeight || document.documentElement.clientHeight) / dividend
  );
};

const displayScrollElement = (element) => {
  element.classList.add('is-visible');
};

const hideScrollElement = (element) => {
  element.classList.remove('is-visible');
};

const handleScrollAnimation = () => {
  scrollElements.forEach((el) => {
    if (elementInView(el, 1.25)) {
      displayScrollElement(el);
    } else {
      hideScrollElement(el);
    }
  });
};

// Initialize
window.addEventListener('load', () => {
  handleScrollAnimation();
});

window.addEventListener('scroll', () => {
  handleScrollAnimation();
});

// เพิ่มลูกเล่นเมื่อเมาส์เคลื่อนที่
document.addEventListener('mousemove', (e) => {
  const hero = document.querySelector('.hero');
  if (hero) {
    const xAxis = (window.innerWidth / 2 - e.pageX) / 25;
    const yAxis = (window.innerHeight / 2 - e.pageY) / 25;
    hero.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
  }
});

// กำหนดให้ Hero Section กลับมาที่ตำแหน่งปกติเมื่อเมาส์ออก
const heroSection = document.querySelector('.hero');
if (heroSection) {
  heroSection.addEventListener('mouseleave', () => {
    heroSection.style.transform = 'rotateY(0deg) rotateX(0deg)';
    heroSection.style.transition = 'all 0.5s ease';
    setTimeout(() => {
      heroSection.style.transition = '';
    }, 500);
  });
}

  </script>
</body>
</html>