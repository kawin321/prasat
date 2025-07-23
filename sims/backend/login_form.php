<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เข้าสู่ระบบ - SIMS</title>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;700&family=Sarabun:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    :root {
      --primary-color: #3498db;
      --primary-dark: #2980b9;
      --secondary-color: #2ecc71;
      --danger-color: #e74c3c;
      --success-color: #27ae60;
      --dark-color: #2c3e50;
      --light-color: #ecf0f1;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Kanit', 'Sarabun', sans-serif;
      background: linear-gradient(135deg, rgba(52, 152, 219, 0.1), rgba(46, 204, 113, 0.1));
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      width: 100%;
      max-width: 450px;
      padding: 20px;
    }

    .login-card {
      background-color: white;
      padding: 3rem;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      position: relative;
      overflow: hidden;
      animation: fadeIn 0.5s ease-out;
    }

    .login-card::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
    }

    h2 {
      color: var(--dark-color);
      margin-bottom: 2rem;
      font-weight: 700;
      text-align: center;
      position: relative;
    }

    h2::after {
      content: "";
      display: block;
      width: 60px;
      height: 4px;
      background: var(--primary-color);
      margin: 1rem auto;
      border-radius: 2px;
    }

    .form-group {
      margin-bottom: 1.5rem;
      position: relative;
    }

    .form-group i {
      position: absolute;
      top: 50%;
      left: 15px;
      transform: translateY(-50%);
      color: #999;
    }

    input {
      width: 100%;
      padding: 12px 15px 12px 40px;
      border: 2px solid #e0e0e0;
      border-radius: 8px;
      font-size: 1rem;
      transition: all 0.3s ease;
      font-family: 'Kanit', 'Sarabun', sans-serif;
    }

    input:focus {
      border-color: var(--primary-color);
      outline: none;
      box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
    }

    .login-btn {
      width: 100%;
      background-color: var(--primary-color);
      color: white;
      border: none;
      padding: 12px;
      margin-top: 0.5rem;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s ease;
      font-family: 'Kanit', 'Sarabun', sans-serif;
      box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
    }

    .login-btn:hover {
      background-color: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
    }

    /* สถานะการเชื่อมต่อ SQL */
    .sql-status {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 1.5rem;
      padding: 10px;
      border-radius: 8px;
      font-size: 0.9rem;
      transition: all 0.3s ease;
    }

    .sql-status.connected {
      background-color: rgba(39, 174, 96, 0.1);
      color: var(--success-color);
      border: 1px solid var(--success-color);
    }

    .sql-status.disconnected {
      background-color: rgba(231, 76, 60, 0.1);
      color: var(--danger-color);
      border: 1px solid var(--danger-color);
    }

    .sql-status i {
      margin-right: 8px;
      font-size: 1.2rem;
    }

    /* Popup Style */
    .popup-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1000;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
    }

    .popup-overlay.active {
      opacity: 1;
      visibility: visible;
    }

    .popup {
      background: white;
      padding: 2rem;
      border-radius: 10px;
      width: 90%;
      max-width: 400px;
      text-align: center;
      position: relative;
      transform: translateY(20px);
      transition: all 0.3s ease;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .popup-overlay.active .popup {
      transform: translateY(0);
    }

    .popup-icon {
      font-size: 3rem;
      margin-bottom: 1rem;
    }

    .popup-icon.success {
      color: var(--success-color);
    }

    .popup-icon.error {
      color: var(--danger-color);
    }

    .popup-title {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
      color: var(--dark-color);
    }

    .popup-message {
      margin-bottom: 1.5rem;
      color: #555;
    }

    .popup-btn {
      background-color: var(--primary-color);
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-family: 'Kanit', 'Sarabun', sans-serif;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .popup-btn:hover {
      background-color: var(--primary-dark);
    }

    @media (max-width: 576px) {
      .login-card {
        padding: 2rem;
      }
      
      h2 {
        font-size: 1.5rem;
      }
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    @keyframes shake {
      0%, 100% { transform: translateX(0); }
      10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
      20%, 40%, 60%, 80% { transform: translateX(5px); }
    }

    .shake {
      animation: shake 0.5s;
    }

    .pulse {
      animation: pulse 1.5s infinite;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-card">
      <h2>เข้าสู่ระบบผู้ดูแล</h2>
      
      <!-- สถานะการเชื่อมต่อ SQL -->
      <div class="sql-status connected" id="sqlStatus">
        <i class="fas fa-database"></i>
        <span>เชื่อมต่อกับฐานข้อมูล SQL แล้ว</span>
      </div>

      <form id="loginForm" action="login.php" method="POST">
        <div class="form-group">
          <i class="fas fa-user"></i>
          <input type="text" name="username" placeholder="ชื่อผู้ใช้" required>
        </div>
        <div class="form-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="รหัสผ่าน" required>
        </div>
        <button type="submit" class="login-btn">เข้าสู่ระบบ</button>
      </form>
    </div>
  </div>

  <!-- Popup สำหรับแสดงข้อผิดพลาด -->
  <div class="popup-overlay" id="errorPopup">
    <div class="popup">
      <div class="popup-icon error">
        <i class="fas fa-exclamation-circle"></i>
      </div>
      <h3 class="popup-title">เข้าสู่ระบบไม่สำเร็จ</h3>
      <p class="popup-message">ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง กรุณาลองอีกครั้ง</p>
      <button class="popup-btn" onclick="closePopup()">ตกลง</button>
    </div>
  </div>

  <!-- Popup สำหรับแสดงสถานะ SQL -->
  <div class="popup-overlay" id="sqlPopup">
    <div class="popup">
      <div class="popup-icon" id="sqlPopupIcon">
        <i class="fas fa-database"></i>
      </div>
      <h3 class="popup-title" id="sqlPopupTitle">สถานะฐานข้อมูล</h3>
      <p class="popup-message" id="sqlPopupMessage">กำลังตรวจสอบการเชื่อมต่อ...</p>
      <button class="popup-btn" onclick="closeSqlPopup()">ตกลง</button>
    </div>
  </div>

  <script>
    // จำลองการตรวจสอบสถานะ SQL
    function checkSQLConnection() {
      // จำลองการเชื่อมต่อ (ในระบบจริงจะเป็นการเรียก AJAX ไปตรวจสอบที่เซิร์ฟเวอร์)
      const isConnected = Math.random() > 0.2; // 80% โอกาสเชื่อมต่อสำเร็จ
      
      const sqlStatus = document.getElementById('sqlStatus');
      const sqlPopup = document.getElementById('sqlPopup');
      const sqlPopupIcon = document.getElementById('sqlPopupIcon');
      const sqlPopupTitle = document.getElementById('sqlPopupTitle');
      const sqlPopupMessage = document.getElementById('sqlPopupMessage');
      
      if(isConnected) {
        sqlStatus.className = 'sql-status connected pulse';
        sqlStatus.innerHTML = '<i class="fas fa-database"></i><span>เชื่อมต่อกับฐานข้อมูล SQL แล้ว</span>';
        
        sqlPopupIcon.className = 'popup-icon success';
        sqlPopupIcon.innerHTML = '<i class="fas fa-check-circle"></i>';
        sqlPopupTitle.textContent = 'เชื่อมต่อฐานข้อมูลสำเร็จ';
        sqlPopupMessage.textContent = 'ระบบสามารถเชื่อมต่อกับฐานข้อมูล MySQL ได้ปกติ';
      } else {
        sqlStatus.className = 'sql-status disconnected pulse';
        sqlStatus.innerHTML = '<i class="fas fa-database"></i><span>ไม่สามารถเชื่อมต่อฐานข้อมูล SQL</span>';
        
        sqlPopupIcon.className = 'popup-icon error';
        sqlPopupIcon.innerHTML = '<i class="fas fa-times-circle"></i>';
        sqlPopupTitle.textContent = 'เชื่อมต่อฐานข้อมูลล้มเหลว';
        sqlPopupMessage.textContent = 'ระบบไม่สามารถเชื่อมต่อกับฐานข้อมูล MySQL ได้';
      }
      
      // แสดง Popup สถานะ SQL
      sqlPopup.classList.add('active');
      
      // หยุดการ pulsate หลังจาก 2 วินาที
      setTimeout(() => {
        sqlStatus.classList.remove('pulse');
      }, 2000);
    }

    // จำลองการล็อกอินผิดพลาด
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      // จำลองการล็อกอินผิดพลาด
      const isLoginError = true; // ตั้งค่าเป็น false สำหรับล็อกอินสำเร็จ
      
      if(isLoginError) {
        // แสดง Popup
        document.getElementById('errorPopup').classList.add('active');
        
        // เพิ่มเอฟเฟกต์สั่นให้ฟอร์ม
        document.querySelector('.login-card').classList.add('shake');
        setTimeout(() => {
          document.querySelector('.login-card').classList.remove('shake');
        }, 500);
        
        // เคลียร์ช่องรหัสผ่าน
        document.querySelector('input[name="password"]').value = '';
      } else {
        // ถ้าล็อกอินสำเร็จ ส่งฟอร์มตามปกติ
        this.submit();
      }
    });

    function closePopup() {
      document.getElementById('errorPopup').classList.remove('active');
    }

    function closeSqlPopup() {
      document.getElementById('sqlPopup').classList.remove('active');
    }

    // เมื่อหน้าเว็บโหลดเสร็จ
    window.addEventListener('DOMContentLoaded', () => {
      // ตรวจสอบการเชื่อมต่อ SQL (จำลองการดีเลย์)
      setTimeout(checkSQLConnection, 1000);
      
      // ในระบบจริงอาจใช้แบบนี้สำหรับตรวจสอบจาก URL parameter
      const urlParams = new URLSearchParams(window.location.search);
      const loginError = urlParams.get('error');
      
      if(loginError === '1') {
        document.getElementById('errorPopup').classList.add('active');
      }
    });
  </script>
</body>
</html>