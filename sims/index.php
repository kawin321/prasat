<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIMS - ระบบจัดการข้อมูลนักเรียน</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="bg-primary text-white text-center py-4">
    <h1>Student Information Management System</h1>
    <p>ยกระดับการดูแลนักเรียนอย่างครบวงจร</p>
  </header>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">SIMS</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#features">ฟีเจอร์</a></li>
          <li class="nav-item"><a class="nav-link" href="#login">เข้าสู่ระบบ</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="container py-5" id="features">
    <h2 class="text-center mb-4">ฟีเจอร์เด่นของระบบ</h2>
    <div class="row text-center">
      <div class="col-md-4"><h4>📝 ระบบล็อกอิน</h4><p>สิทธิ์ผู้ใช้แยกตามบทบาท และยืนยันตัวตน 2FA</p></div>
      <div class="col-md-4"><h4>👨‍🎓 จัดการข้อมูลนักเรียน</h4><p>โปรไฟล์นักเรียนแบบรวมศูนย์ บันทึก/แก้ไข/ลบทันที</p></div>
      <div class="col-md-4"><h4>📅 ติดตามกิจกรรม</h4><p>เช็คชื่อ, พฤติกรรม, แจ้งเตือนผู้ปกครองอัตโนมัติ</p></div>
    </div>
  </section>

  <section class="bg-light py-5" id="login">
    <div class="container text-center">
      <h2>เข้าสู่ระบบ</h2>
      <a href="backend/login_form.php" class="btn btn-primary mt-3">เข้าสู่ระบบผู้ดูแล</a>
    </div>
  </section>

  <footer class="bg-dark text-white text-center py-3">
    <p>© 2025 SIMS - วิทยาลัยตัวอย่าง</p>
  </footer>
</body>
</html>
