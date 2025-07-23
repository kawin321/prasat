<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลการฝึกงาน</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php include 'menu.php'; ?>
    <header>
        <div class="container">
            <link rel="stylesheet" href="info.css">
            <h1>ข้อมูลการฝึกงาน</h1>
        </div>
    </header>

    <div class="container">
        <div class="internship-card">
            <h2>ข้อมูลทั่วไป <span class="status-badge">กำลังฝึกงาน</span></h2>
            
            <div class="progress-container">
                <div class="progress-bar">
                    <div class="progress-fill"></div>
                </div>
                <div class="progress-text">
                    <span>เริ่มฝึกงาน: 15 มิ.ย. 2568</span>
                    <span id="progress-percent">เสร็จสิ้น: 0%</span>
                    <span>สิ้นสุดฝึกงาน: 30 ก.ย. 2568</span>
                </div>
            </div>
            
            <div class="info-grid">
                <div class="info-item">
                    <h3><i class="fas fa-user"></i> ชื่อนักศึกษา</h3>
                    <p>นายกวิน ชะนูรัมย์</p>
                </div>
                <div class="info-item">
                    <h3><i class="fas fa-id-card"></i> รหัสนักศึกษา</h3>
                    <p>66209010026</p>
                </div>
                <!-- Rest of your HTML content remains the same -->
            </div>
        </div>
              <div class="internship-card">
  <h2>งานที่ฝึกปฏิบัติ</h2>
  <div class="activity-list">
    <!-- งานที่ 1 -->
    <div class="activity-item">
      <div class="activity-icon"><i class="fas fa-user-check"></i></div>
      <div class="activity-content">
        <h3 class="activity-title">ดูแลระบบน้องสรรตบรรณ</h3>
        <p class="activity-desc">ดูแลเกี่ยวกับการเช็คชื่อนักศึกษา</p>
        <span class="date-badge">15-30 มิ.ย. 2566</span>
      </div>
    </div>
    
    <!-- งานที่ 2 -->
    <div class="activity-item">
      <div class="activity-icon"><i class="fas fa-keyboard"></i></div>
      <div class="activity-content">
        <h3 class="activity-title">พิมพ์งานตามที่ได้รับมอบหมาย</h3>
        <p class="activity-desc">จัดทำเอกสารและรายงานตามคำสั่ง</p>
        <span class="date-badge">1-15 ก.ค. 2566</span>
      </div>
    </div>
    
    <!-- งานที่ 3 -->
    <div class="activity-item">
      <div class="activity-icon"><i class="fas fa-chart-bar"></i></div>
      <div class="activity-content">
        <h3 class="activity-title">การวิเคราะห์ข้อมูล</h3>
        <p class="activity-desc">รวบรวมและวิเคราะห์ข้อมูลนักศึกษา</p>
        <span class="date-badge">16-31 ก.ค. 2566</span>
      </div>
    </div>
    
    <!-- งานที่ 4 -->
    <div class="activity-item">
      <div class="activity-icon"><i class="fas fa-file-powerpoint"></i></div>
      <div class="activity-content">
        <h3 class="activity-title">การนำเสนอผลงาน</h3>
        <p class="activity-desc">จัดทำเอกสารและนำเสนอผลงานต่อผู้บริหาร</p>
        <span class="date-badge">1-15 ก.ย. 2566</span>
      </div>
    </div>
  </div>
</div>

        <div class="internship-card">
            <h2>กิจกรรมระหว่างฝึกงาน</h2>
            <div class="activity-list">
                <div class="activity-item">
                    <div class="activity-icon"><i class="fas fa-info-circle"></i></div>
                    <div class="activity-content">
                        <h3 class="activity-title">ปฐมนิเทศการฝึกงาน</h3>
                        <p class="activity-desc">กิจกรรมแนะนำองค์กรและกฎระเบียบ</p>
                        <span class="date-badge">15 มิ.ย. 2566</span>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon"><i class="fas fa-laptop-code"></i></div>
                    <div class="activity-content">
                        <h3 class="activity-title">Workshop การเขียนโปรแกรม</h3>
                        <p class="activity-desc">ฝึกทักษะการพัฒนาโปรแกรมร่วมกับทีมงาน</p>
                        <span class="date-badge">25 มิ.ย. 2566</span>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon"><i class="fas fa-users"></i></div>
                    <div class="activity-content">
                        <h3 class="activity-title">กิจกรรมกลุ่มสัมพันธ์</h3>
                        <p class="activity-desc">กิจกรรมสร้างความสัมพันธ์กับพนักงานในองค์กร</p>
                        <span class="date-badge">10 ก.ค. 2566</span>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon"><i class="fas fa-building"></i></div>
                    <div class="activity-content">
                        <h3 class="activity-title">การศึกษาดูงาน</h3>
                        <p class="activity-desc">เยี่ยมชมแผนกต่าง ๆ ในองค์กรเพื่อเรียนรู้กระบวนการทำงาน</p>
                        <span class="date-badge">5 ส.ค. 2566</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Rest of your HTML content -->
        
        <button class="print-btn" onclick="window.print()">
            <i class="fas fa-print"></i> พิมพ์ข้อมูล
        </button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize progress bar
            updateProgressBar();
            
            // Update progress bar daily
            setInterval(updateProgressBar, 86400000);
            
            // Add click events to activity items
            document.querySelectorAll('.activity-item').forEach(item => {
                item.addEventListener('click', function() {
                    console.log('Activity clicked:', this.querySelector('.activity-title').textContent);
                });
            });
        });

        function updateProgressBar() {
            // Set dates (year, month-1, day)
            const startDate = new Date(2025, 5, 15);  // June 15, 2025
            const endDate = new Date(2025, 8, 30);    // September 30, 2025
            const today = new Date();
            
            // Normalize times to midnight
            startDate.setHours(0, 0, 0, 0);
            endDate.setHours(0, 0, 0, 0);
            today.setHours(0, 0, 0, 0);

            // Calculate progress
            let percentage = 0;
            if (today < startDate) {
                percentage = 0;
            } else if (today > endDate) {
                percentage = 100;
            } else {
                const totalDays = (endDate - startDate) / (1000 * 60 * 60 * 24);
                const elapsedDays = (today - startDate) / (1000 * 60 * 60 * 24);
                percentage = Math.min(100, Math.max(0, Math.round((elapsedDays / totalDays) * 100)));
            }
            
            // Update progress bar with animation
            const progressFill = document.querySelector('.progress-fill');
            progressFill.style.transition = 'width 0.5s ease';
            progressFill.style.width = '0';
            
            setTimeout(() => {
                progressFill.style.width = percentage + '%';
                document.getElementById('progress-percent').textContent = 'เสร็จสิ้น: ' + percentage + '%';
            }, 50);
        }
    </script>
</body>
</html>