<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายงานการฝึกประสบการณ์วิชาชีพ - วิทยาลัยการอาชีพปราสาท</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.8.0/sql-wasm.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container header-content">
            <div class="logo">
                <i class="fas fa-graduation-cap logo-icon"></i>
                <h1>รายงานการฝึกงาน | <span>วิทยาลัยการอาชีพปราสาท</span></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">หน้าแรก</a></li>
                    <li><a href="info.php">ข้อมูล</a></li>
                    <li><a href="objectives.php">วัตถุประสงค์</a></li>
                    <li><a href="duties.php">หน้าที่</a></li>
                    <li><a href="#time.php">ระยะเวลา</a></li>
                    <li><a href="skills.php">ทักษะที่ได้รับ</a></li>
                    <li><a href="achievements.php">ผลสำเร็จ</a></li>
                    <li><a href="admin.php">เข้าสู่ระบบผู้ดูแล</a></li>
                </ul>
            </nav>
        </div>
    </header>

    

    <!-- Hero Section - Page 1 -->
    <section id="cover" class="hero">
        <div class="hero-content">
             <div class="hero-logo">
        <img src="https://prasat.ac.th/wp-content/uploads/2022/12/prasat2.png" alt="วิทยาลัยการอาชีพปราสาท" class="hero-logo">
        </div>
            <h1>admin</h1>
              </div>
        </div>
    </section>
<!-- Admin bar (shown after login) -->
    <div class="admin-bar" id="adminBar">
        <div class="container admin-bar-content">
            <div class="admin-info">
                <i class="fas fa-user-shield"></i>
                <span>ผู้ดูแลระบบ: <strong>admin</strong> | เข้าสู่ระบบแล้ว</span>
            </div>
            <button class="logout-btn" id="logoutBtn">
                <i class="fas fa-sign-out-alt"></i> ออกจากระบบ
            </button>
        </div>
    </div>
        <!-- Logout notification -->
    <div class="notification" id="logoutNotification">
        <i class="fas fa-check-circle"></i>
        <span>ออกจากระบบสำเร็จแล้ว!</span>
    </div>

    <script>
        // Initialize SQL.js
        let db;
        let sqlLoaded = false;

        // Load SQL.js and initialize database
        async function initDatabase() {
            try {
                // Load SQL.js
                const SQL = await initSqlJs({
                    locateFile: file => `https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.8.0/${file}`
                });
                
                // Create a new database
                db = new SQL.Database();
                
                // Create tables
                createTables();
                sqlLoaded = true;
                updateDbInfo();
            } catch (error) {
                console.error('Error loading SQL.js:', error);
                alert('เกิดข้อผิดพลาดในการโหลดระบบฐานข้อมูล');
            }
        }

        // Create database tables
        function createTables() {
            // Create students table
            db.run(`
                CREATE TABLE IF NOT EXISTS students (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    name TEXT NOT NULL,
                    department TEXT NOT NULL,
                    start_date TEXT NOT NULL,
                    end_date TEXT NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                );
            `);
            
            // Create slides table
            db.run(`
                CREATE TABLE IF NOT EXISTS slides (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    title TEXT NOT NULL,
                    content TEXT NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                );
            `);
            
            // Create admin users table
            db.run(`
                CREATE TABLE IF NOT EXISTS users (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    username TEXT UNIQUE NOT NULL,
                    password TEXT NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                );
            `);
            
            // Insert default admin user
            try {
                db.run(`INSERT INTO users (username, password) VALUES ('admin', 'admin123')`);
            } catch (e) {
                // User already exists
            }
            
            // Insert default slides
            const defaultSlides = [
                { title: "ข้อมูลการฝึกงาน", content: "รายละเอียดเกี่ยวกับการฝึกงาน..." },
                { title: "วัตถุประสงค์ในการฝึกงาน", content: "วัตถุประสงค์หลักของการฝึกงาน..." },
                { title: "หน้าที่และกิจกรรมหลัก", content: "หน้าที่หลักที่ได้รับมอบหมาย..." }
            ];
            
            defaultSlides.forEach(slide => {
                try {
                    db.run(`INSERT INTO slides (title, content) VALUES (?, ?)`, [slide.title, slide.content]);
                } catch (e) {
                    // Slide already exists
                }
            });
            
            // Insert default students
            const defaultStudents = [
                { name: "นายศุภกิตติ์ ใจดี", department: "งานกิจกรรม", start_date: "2024-03-01", end_date: "2024-04-30" },
                { name: "นางสาวสมหญิง เก่งเรียน", department: "แผนกช่างไฟฟ้า", start_date: "2024-03-10", end_date: "2024-04-20" },
                { name: "นายสมชาย ตั้งใจดี", department: "แผนกธุรกิจบริการ", start_date: "2024-03-15", end_date: "2024-04-25" }
            ];
            
            defaultStudents.forEach(student => {
                try {
                    db.run(`INSERT INTO students (name, department, start_date, end_date) VALUES (?, ?, ?, ?)`, 
                        [student.name, student.department, student.start_date, student.end_date]);
                } catch (e) {
                    // Student already exists
                }
            });
        }

        // Update database information
        function updateDbInfo() {
            if (!sqlLoaded) return;
            
            // Calculate database size
            const dbSize = db.export().length;
            const sizeInKB = (dbSize / 1024).toFixed(2);
            document.getElementById('dbSize').textContent = `${sizeInKB} KB`;
            
            // Get table count
            const tables = db.exec("SELECT name FROM sqlite_master WHERE type='table'");
            document.getElementById('tableCount').textContent = tables[0] ? tables[0].values.length : 0;
        }

        // Display database content
        function displayDatabase() {
            if (!sqlLoaded) {
                document.getElementById('dbContent').innerHTML = '<p>กำลังโหลดฐานข้อมูล...</p>';
                return;
            }
            
            let html = '';
            
            // Display students
            const students = db.exec("SELECT * FROM students");
            if (students.length > 0 && students[0].values.length > 0) {
                html += '<h4>ข้อมูลนักศึกษา</h4>';
                html += '<table class="db-table">';
                html += '<tr><th>ID</th><th>ชื่อ-สกุล</th><th>แผนก</th><th>วันที่เริ่ม</th><th>วันที่สิ้นสุด</th><th>จัดการ</th></tr>';
                
                students[0].values.forEach(row => {
                    html += `<tr>
                        <td>${row[0]}</td>
                        <td>${row[1]}</td>
                        <td>${row[2]}</td>
                        <td>${row[3]}</td>
                        <td>${row[4]}</td>
                        <td>
                            <button class="edit-btn" onclick="editStudent(${row[0]})"><i class="fas fa-edit"></i></button>
                            <button class="delete-btn" onclick="deleteStudent(${row[0]})"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>`;
                });
                
                html += '</table>';
            } else {
                html += '<p>ไม่มีข้อมูลนักศึกษาในฐานข้อมูล</p>';
            }
            
            // Display slides
            const slides = db.exec("SELECT * FROM slides");
            if (slides.length > 0 && slides[0].values.length > 0) {
                html += '<h4 style="margin-top: 20px;">ข้อมูลสไลด์</h4>';
                html += '<table class="db-table">';
                html += '<tr><th>ID</th><th>หัวข้อ</th><th>เนื้อหา</th><th>จัดการ</th></tr>';
                
                slides[0].values.forEach(row => {
                    const contentPreview = row[2].length > 30 ? row[2].substring(0, 30) + '...' : row[2];
                    html += `<tr>
                        <td>${row[0]}</td>
                        <td>${row[1]}</td>
                        <td>${contentPreview}</td>
                        <td>
                            <button class="edit-btn" onclick="editSlide(${row[0]})"><i class="fas fa-edit"></i></button>
                            <button class="delete-btn" onclick="deleteSlide(${row[0]})"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>`;
                });
                
                html += '</table>';
            } else {
                html += '<p>ไม่มีข้อมูลสไลด์ในฐานข้อมูล</p>';
            }
            
            // Add database statistics
            const studentCount = students[0] ? students[0].values.length : 0;
            const slideCount = slides[0] ? slides[0].values.length : 0;
            
            html += `<div style="margin-top: 20px; padding: 15px; background: #f0f7ff; border-radius: 8px;">
                <p><strong>สถิติฐานข้อมูล</strong></p>
                <p>จำนวนนักศึกษา: ${studentCount} คน</p>
                <p>จำนวนสไลด์: ${slideCount} สไลด์</p>
            </div>`;
            
            document.getElementById('dbContent').innerHTML = html;
            updateDbInfo();
        }

        // Add a new student
        function addStudent() {
            const name = prompt("กรอกชื่อ-สกุลนักศึกษา:");
            if (!name) return;
            
            const department = prompt("แผนกที่ฝึกงาน:");
            if (!department) return;
            
            const startDate = prompt("วันที่เริ่มฝึกงาน (YYYY-MM-DD):");
            if (!startDate) return;
            
            const endDate = prompt("วันที่สิ้นสุดฝึกงาน (YYYY-MM-DD):");
            if (!endDate) return;
            
            try {
                db.run(`INSERT INTO students (name, department, start_date, end_date) VALUES (?, ?, ?, ?)`, 
                    [name, department, startDate, endDate]);
                displayDatabase();
                alert('เพิ่มนักศึกษาเรียบร้อยแล้ว!');
            } catch (error) {
                console.error('Error adding student:', error);
                alert('เกิดข้อผิดพลาดในการเพิ่มนักศึกษา');
            }
        }

        // Edit a student
        function editStudent(id) {
            const student = db.exec(`SELECT * FROM students WHERE id = ${id}`);
            if (student.length === 0 || student[0].values.length === 0) {
                alert('ไม่พบข้อมูลนักศึกษา');
                return;
            }
            
            const [_, name, department, startDate, endDate] = student[0].values[0];
            
            const newName = prompt("แก้ไขชื่อ-สกุล:", name);
            if (!newName) return;
            
            const newDepartment = prompt("แก้ไขแผนก:", department);
            if (!newDepartment) return;
            
            const newStartDate = prompt("แก้ไขวันที่เริ่มฝึกงาน:", startDate);
            if (!newStartDate) return;
            
            const newEndDate = prompt("แก้ไขวันที่สิ้นสุดฝึกงาน:", endDate);
            if (!newEndDate) return;
            
            try {
                db.run(`UPDATE students SET name = ?, department = ?, start_date = ?, end_date = ? WHERE id = ?`, 
                    [newName, newDepartment, newStartDate, newEndDate, id]);
                displayDatabase();
                alert('อัปเดตข้อมูลนักศึกษาเรียบร้อยแล้ว!');
            } catch (error) {
                console.error('Error updating student:', error);
                alert('เกิดข้อผิดพลาดในการอัปเดตข้อมูล');
            }
        }

        // Delete a student
        function deleteStudent(id) {
            if (!confirm('คุณแน่ใจที่จะลบนักศึกษานี้?')) return;
            
            try {
                db.run(`DELETE FROM students WHERE id = ?`, [id]);
                displayDatabase();
                alert('ลบนักศึกษาเรียบร้อยแล้ว!');
            } catch (error) {
                console.error('Error deleting student:', error);
                alert('เกิดข้อผิดพลาดในการลบข้อมูล');
            }
        }

        // Add a new slide
        function addSlide() {
            const title = prompt("กรอกหัวข้อสไลด์:");
            if (!title) return;
            
            const content = prompt("กรอกเนื้อหาสไลด์:");
            if (!content) return;
            
            try {
                db.run(`INSERT INTO slides (title, content) VALUES (?, ?)`, [title, content]);
                displayDatabase();
                alert('เพิ่มสไลด์ใหม่เรียบร้อยแล้ว!');
            } catch (error) {
                console.error('Error adding slide:', error);
                alert('เกิดข้อผิดพลาดในการเพิ่มสไลด์');
            }
        }

        // Edit a slide
        function editSlide(id) {
            const slide = db.exec(`SELECT * FROM slides WHERE id = ${id}`);
            if (slide.length === 0 || slide[0].values.length === 0) {
                alert('ไม่พบข้อมูลสไลด์');
                return;
            }
            
            const [_, title, content] = slide[0].values[0];
            
            const newTitle = prompt("แก้ไขหัวข้อสไลด์:", title);
            if (!newTitle) return;
            
            const newContent = prompt("แก้ไขเนื้อหาสไลด์:", content);
            if (!newContent) return;
            
            try {
                db.run(`UPDATE slides SET title = ?, content = ? WHERE id = ?`, 
                    [newTitle, newContent, id]);
                displayDatabase();
                alert('อัปเดตสไลด์เรียบร้อยแล้ว!');
            } catch (error) {
                console.error('Error updating slide:', error);
                alert('เกิดข้อผิดพลาดในการอัปเดตสไลด์');
            }
        }

        // Delete a slide
        function deleteSlide(id) {
            if (!confirm('คุณแน่ใจที่จะลบสไลด์นี้?')) return;
            
            try {
                db.run(`DELETE FROM slides WHERE id = ?`, [id]);
                displayDatabase();
                alert('ลบสไลด์เรียบร้อยแล้ว!');
            } catch (error) {
                console.error('Error deleting slide:', error);
                alert('เกิดข้อผิดพลาดในการลบสไลด์');
            }
        }

        // Download database
        function downloadDatabase() {
            if (!db) {
                alert('ไม่พบฐานข้อมูล');
                return;
            }
            const data = db.export();
            const arrayBuffer = new Uint8Array(data);
            const blob = new Blob([arrayBuffer], {type: 'application/octet-stream'});
            const url = URL.createObjectURL(blob);
            
            const a = document.createElement('a');
            a.href = url;
            a.download = 'internship_prasat_college.db';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        }

        // Reset database
        function resetDatabase() {
            if (!confirm('คุณแน่ใจที่จะรีเซ็ตฐานข้อมูลทั้งหมด?\nการกระทำนี้ไม่สามารถยกเลิกได้!')) return;
            
            try {
                db.run('DROP TABLE IF EXISTS students');
                db.run('DROP TABLE IF EXISTS slides');
                db.run('DROP TABLE IF EXISTS users');
                createTables();
                displayDatabase();
                alert('รีเซ็ตฐานข้อมูลเรียบร้อยแล้ว!');
            } catch (error) {
                console.error('Error resetting database:', error);
                alert('เกิดข้อผิดพลาดในการรีเซ็ตฐานข้อมูล');
            }
        }

        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', async function() {
            // Initialize database
            await initDatabase();
            
            // Elements
            const loginForm = document.getElementById('loginForm');
            const loginSection = document.getElementById('loginSection');
            const adminPanel = document.getElementById('adminPanel');
            const adminBar = document.getElementById('adminBar');
            const logoutBtn = document.getElementById('logoutBtn');
            const logoutNotification = document.getElementById('logoutNotification');
            const addSlideBtn = document.getElementById('addSlideBtn');
            const addStudentBtn = document.getElementById('addStudentBtn');
            const viewDataBtn = document.getElementById('viewDataBtn');
            const refreshDbBtn = document.getElementById('refreshDbBtn');
            const downloadDbBtn = document.getElementById('downloadDbBtn');
            const resetDbBtn = document.getElementById('resetDbBtn');
            
            // Button event listeners
            addSlideBtn.addEventListener('click', addSlide);
            addStudentBtn.addEventListener('click', addStudent);
            viewDataBtn.addEventListener('click', displayDatabase);
            refreshDbBtn.addEventListener('click', displayDatabase);
            downloadDbBtn.addEventListener('click', downloadDatabase);
            resetDbBtn.addEventListener('click', resetDatabase);
            
            // Display initial database content
            displayDatabase();
            
            // Smooth scrolling for navigation links
            document.querySelectorAll('nav a').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                });
            });
            
            // Admin login functionality
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const username = document.getElementById('username').value;
                const password = document.getElementById('password').value;
                
                try {
                    // Check credentials in database
                    const result = db.exec(`SELECT * FROM users WHERE username = '${username}' AND password = '${password}'`);
                    
                    if (result.length > 0 && result[0].values.length > 0) {
                        // Successful login
                        loginSection.style.display = 'none';
                        adminPanel.style.display = 'block';
                        adminBar.style.display = 'block';
                        
                        // Show success message
                        const successMsg = document.createElement('div');
                        successMsg.innerHTML = `
                            <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin: 1rem 0; text-align: center;">
                                <i class="fas fa-check-circle"></i> เข้าสู่ระบบสำเร็จ! คุณสามารถจัดการเนื้อหาได้แล้ว
                            </div>
                        `;
                        adminPanel.parentNode.insertBefore(successMsg, adminPanel);
                    } else {
                        // Failed login
                        alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง! กรุณาลองอีกครั้ง');
                    }
                } catch (error) {
                    console.error('Error during login:', error);
                    alert('เกิดข้อผิดพลาดในการเข้าสู่ระบบ');
                }
            });
            
            // Logout functionality
            logoutBtn.addEventListener('click', function() {
                // Reset UI
                loginSection.style.display = 'block';
                adminPanel.style.display = 'none';
                adminBar.style.display = 'none';
                document.getElementById('username').value = '';
                document.getElementById('password').value = '';
                
                // Show logout notification
                logoutNotification.classList.add('show');
                
                // Hide notification after 3 seconds
                setTimeout(() => {
                    logoutNotification.classList.remove('show');
                }, 3000);
            });
        });

        // Make functions available globally for onclick handlers
        window.editStudent = editStudent;
        window.deleteStudent = deleteStudent;
        window.editSlide = editSlide;
        window.deleteSlide = deleteSlide;
        // แก้ไขส่วน initialization
async function initDatabase() {
    try {
        const SQL = await initSqlJs({
            locateFile: file => `https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.8.0/${file}`
        });
        
        db = new SQL.Database();
        createTables();
        sqlLoaded = true;
        updateDbInfo();
    } catch (error) {
        console.error('Database initialization error:', error);
        showError('ไม่สามารถโหลดฐานข้อมูลได้');
    }
}

// แก้ไขการ query เพื่อป้องกัน SQL injection
function getStudents() {
    try {
        const stmt = db.prepare("SELECT * FROM students");
        const students = [];
        while(stmt.step()) {
            students.push(stmt.getAsObject());
        }
        stmt.free();
        return students;
    } catch (error) {
        console.error('Error fetching students:', error);
        return [];
    }
}

// แก้ไขการ login
loginForm.addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    try {
        const stmt = db.prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        stmt.bind([username, password]);
        const result = stmt.step() ? stmt.getAsObject() : null;
        stmt.free();
        
        if (result) {
            // Login success
            showAdminUI();
        } else {
            showError('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
        }
    } catch (error) {
        console.error('Login error:', error);
        showError('เกิดข้อผิดพลาดในการเข้าสู่ระบบ');
    }
});

// เพิ่มฟังก์ชันแสดง error
function showError(message) {
    const errorElement = document.createElement('div');
    errorElement.className = 'error-message';
    errorElement.innerHTML = `
        <i class="fas fa-exclamation-circle"></i>
        <span>${message}</span>
    `;
    document.body.appendChild(errorElement);
    setTimeout(() => errorElement.remove(), 3000);
}
    </script>