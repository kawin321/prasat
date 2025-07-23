<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>องค์การนักวิชาชีพฯ วิทยาลัยการอาชีพปราสาท</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/M.css">
  <link rel="stylesheet" href="css/hom.css" />
  <script defer src="js/ho.js"></script>
  
 
  </style>
</head>
<body>
  <header>
    <div class="container">
      <img src="https://via.placeholder.com/80x80/1e3c72/ffffff?text=LOGO" alt="โลโก้องค์กร" class="logo" />
      <div>w
        <h1>องค์การนักวิชาชีพแห่งประเทศไทย</h1>
        <h2>วิทยาลัยการอาชีพปราสาท</h2>
      </div>
    </div>
  </header>

  <nav>
    <div class="container">
      <ul>
        <li><a href="index.php">หน้าแรก</a></li>
        <li><a href="M.php">เกี่ยวกับเรา</a></li>
        <li><a href="activities.php">กิจกรรม</a></li>
        <li><a href="contact.php">ติดต่อเรา</a></li>
      </ul>
    </div>
  </nav> 

  <main>
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
                  <img src="https://via.placeholder.com/400x300/1e3c72/ffffff?text=ประวัติ+อวท." alt="ประวัติ อวท.">
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

  <script>
    // Tab functionality
    document.addEventListener('DOMContentLoaded', function() {