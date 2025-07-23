<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ติดต่อฉัน | Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <?php include 'menu.php'; ?>
  </header>

  <section class="contact-section">
    <div class="container">
      <h2>ติดต่อฉัน</h2>
      <div class="contact-content">
        <div class="contact-info">
          <h3>ช่องทางการติดต่อ</h3>
          <p><i class="fas fa-envelope"></i> email@example.com</p>
          <p><i class="fas fa-phone"></i> 012-345-6789</p>
          <div class="social-links">
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
        <form class="contact-form">
          <input type="text" placeholder="ชื่อของคุณ" required>
          <input type="email" placeholder="อีเมล" required>
          <textarea placeholder="ข้อความของคุณ" required></textarea>
          <button type="submit" class="btn">ส่งข้อความ</button>
        </form>
      </div>
    </div>
  </section>

  <script src="js/main.js"></script>
</body>
</html>