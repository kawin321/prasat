<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายชื่อผู้สมัครโครงการน้อมรำลึกครูกลอนสุนทรภู่</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Itim&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
           font-family: 'Sarabun', 'Tahoma', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(45deg, #FF6B6B, #4ECDC4);
            color: white;
            padding: 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 50%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
          .logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 50%;
        }


        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header p {
            font-size: 1.2em;
            position: relative;
            z-index: 1;
            opacity: 0.95;
        }

        .stats {
            display: flex;
            justify-content: space-around;
            padding: 30px;
            background: rgba(255, 255, 255, 0.5);
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }

        .stat-card {
            text-align: center;
            padding: 20px;
            border-radius: 15px;
            background: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            min-width: 120px;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 2.5em;
            font-weight: bold;
            color: #FF6B6B;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #666;
            font-size: 0.9em;
        }

        .controls {
            padding: 30px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
            background: rgba(255, 255, 255, 0.3);
        }

        .search-box {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .search-input {
            flex: 1;
            min-width: 250px;
            padding: 15px 20px;
            border: 2px solid #ddd;
            border-radius: 25px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: white;
        }

        .search-input:focus {
            outline: none;
            border-color: #4ECDC4;
            box-shadow: 0 0 20px rgba(78, 205, 196, 0.2);
        }

        .filter-select {
            padding: 15px 20px;
            border: 2px solid #ddd;
            border-radius: 25px;
            font-size: 16px;
            background: white;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 150px;
        }

        .filter-select:focus {
            outline: none;
            border-color: #4ECDC4;
        }

        .refresh-btn {
            padding: 15px 30px;
            background: linear-gradient(45deg, #4ECDC4, #44A08D);
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: bold;
        }

        .refresh-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 205, 196, 0.4);
        }

        .refresh-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
        }

        .participants-list {
            padding: 30px;
        }

        .participant-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            border-left: 5px solid #4ECDC4;
            transition: all 0.3s ease;
        }

        .participant-card:hover {
            transform: translateX(10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .participant-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .participant-name {
            font-size: 1.3em;
            font-weight: bold;
            color: #333;
        }

        .participant-id {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9em;
            font-weight: bold;
        }

        .participant-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            color: #666;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .detail-icon {
            width: 20px;
            height: 20px;
            background: #4ECDC4;
            border-radius: 50%;
            display: inline-block;
        }

        .activity-badge {
            background: linear-gradient(45deg, #FF6B6B, #FF8E53);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9em;
            font-weight: bold;
            margin-top: 10px;
            display: inline-block;
        }

        .loading {
            text-align: center;
            padding: 60px;
            color: #666;
            font-size: 1.2em;
        }

        .loading::after {
            content: '';
            display: inline-block;
            width: 30px;
            height: 30px;
            border: 3px solid #f3f3f3;
            border-top: 3px solid #4ECDC4;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-left: 10px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .error {
            text-align: center;
            padding: 60px;
            color: #ff4444;
            font-size: 1.2em;
        }

        .no-results {
            text-align: center;
            padding: 60px;
            color: #999;
            font-size: 1.2em;
        }

        @media (max-width: 768px) {
            .stats {
                flex-wrap: wrap;
                gap: 15px;
            }

            .stat-card {
                flex: 1;
                min-width: 100px;
            }

            .search-box {
                flex-direction: column;
            }

            .participant-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .header h1 {
                font-size: 2em;
            }

            .participant-details {
                grid-template-columns: 1fr;
            }
        }
        .logo {
                width: 60px;
                height: 60px;
                margin-bottom: 15px;
            }
            
        .timestamp {
            font-size: 0.8em;
            color: #888;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                    <img src="https://prasat.ac.th/wp-content/uploads/2022/12/prasat2.png" alt="โลโก้วิทยาลัยเทคนิคประสาท" onerror="this.style.display='none'">
                </div>

            <h1>โครงการน้อมรำลึกครูกลอนสุนทรภู่</h1>
            <p>ร่วมเชิดชูวันภาษาไทยแห่งชาติ วันที่ 30 กรกฎาคม ณ หอประชุมวิทยาลัยการอาชีพปราสาท</p>
        </div>

        <div class="stats">
            <div class="stat-card">
                <div class="stat-number" id="totalParticipants">-</div>
                <div class="stat-label">ผู้สมัครทั้งหมด</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" id="activityCount">-</div>
                <div class="stat-label">จำนวนกิจกรรม</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" id="departmentCount">-</div>
                <div class="stat-label">จำนวนแผนก</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" id="classCount">-</div>
                <div class="stat-label">จำนวนชั้นเรียน</div>
            </div>
        </div>

        <div class="controls">
            <div class="search-box">
                <input type="text" class="search-input" placeholder="ค้นหาชื่อ นามสกุล หรือกิจกรรม..." id="searchInput">
                <select class="filter-select" id="activityFilter">
                    <option value="">กิจกรรม (ทั้งหมด)</option>
                </select>
                <select class="filter-select" id="departmentFilter">
                    <option value="">แผนก (ทั้งหมด)</option>
                </select>
                <select class="filter-select" id="classFilter">
                    <option value="">ชั้น (ทั้งหมด)</option>
                </select>
                <button class="refresh-btn" onclick="loadData()" id="refreshBtn">🔄 รีเฟรชข้อมูล</button>
            </div>
        </div>

        <div class="participants-list" id="participantsList">
            <div class="loading">กำลังโหลดข้อมูล...</div>
        </div>
    </div>
<script>
    let participants = [];
    let filteredParticipants = [];

    async function loadData() {
        const refreshBtn = document.getElementById('refreshBtn');
        const participantsList = document.getElementById('participantsList');
        
        refreshBtn.disabled = true;
        refreshBtn.textContent = '⏳ กำลังโหลด...';
        
        participantsList.innerHTML = '<div class="loading">กำลังโหลดข้อมูลจาก Google Sheets...</div>';

        try {
            const CSV_URL = `https://docs.google.com/spreadsheets/d/1UzmROHBWeXmWtR2TogMWwNiXqKS51q-bTLDN79FGeTg/export?format=csv&gid=1296462998&t=${Date.now()}`;
            
            const response = await fetch(CSV_URL);
            if (!response.ok) {
                throw new Error('ไม่สามารถเชื่อมต่อกับ Google Sheets ได้');
            }
            
            const csvText = await response.text();

            // Parse CSV โดยคำนึงถึงค่าที่มีเครื่องหมายคำพูด
            const rows = csvText.split('\n').map(row => {
                const result = [];
                let current = '';
                let inQuotes = false;
                for (let i = 0; i < row.length; i++) {
                    const char = row[i];
                    if (char === '"') {
                        inQuotes = !inQuotes;
                    } else if (char === ',' && !inQuotes) {
                        result.push(current.trim());
                        current = '';
                    } else {
                        current += char;
                    }
                }
                result.push(current.trim());
                return result;
            });

            if (rows.length < 2) {
                throw new Error('ไม่พบข้อมูลในชีท');
            }

            // แปลงข้อมูลจากแถวในชีทเป็นออบเจ็กต์ผู้เข้าร่วม
            participants = rows.slice(1) // ข้ามแถวหัวข้อ
                .filter(row => row.length >= 9 && (row[2]?.trim() || row[3]?.trim())) // ต้องมีชื่อหรือนามสกุล
                .map((row, index) => ({
                    id: `SP${String(index + 1).padStart(3, '0')}`,
                    timestamp: row[0]?.trim() || '',
                    prefix: row[1]?.trim() || '',
                    firstName: row[2]?.trim() || '',
                    lastName: row[3]?.trim() || '',
                    class: row[4]?.trim() || '',
                    yearGroup: row[5]?.trim() || '',
                    group: row[6]?.trim() || '',
                    department: row[7]?.trim() || '',
                    activity: row[8]?.trim() || '',
                    fullName: `${row[1]?.trim() || ''} ${row[2]?.trim() || ''} ${row[3]?.trim() || ''}`.trim()
                }));

            filteredParticipants = [...participants];
            updateStats();
            updateFilters();
            renderParticipants();

        } catch (error) {
            console.error('Error loading data:', error);
            participantsList.innerHTML = `
                <div class="error">
                    <p>❌ เกิดข้อผิดพลาดในการโหลดข้อมูล</p>
                    <p style="font-size: 1em; margin-top: 10px;">${error.message}</p>
                    <p style="font-size: 0.9em; margin-top: 15px; opacity: 0.8;">
                        กรุณาตรวจสอบว่า Google Sheets เปิดให้สาธารณะเข้าถึงได้
                    </p>
                </div>
            `;
        } finally {
            refreshBtn.disabled = false;
            refreshBtn.textContent = '🔄 รีเฟรชข้อมูล';
        }
    }

    function updateStats() {
        document.getElementById('totalParticipants').textContent = participants.length;
        document.getElementById('activityCount').textContent = new Set(participants.map(p => p.activity)).size;
        document.getElementById('departmentCount').textContent = new Set(participants.map(p => p.department)).size;
        document.getElementById('classCount').textContent = new Set(participants.map(p => p.class)).size;
    }

    function updateFilters() {
        const activityFilter = document.getElementById('activityFilter');
        const departmentFilter = document.getElementById('departmentFilter');
        const classFilter = document.getElementById('classFilter');

        // ล้างตัวเลือกเดิม (เก็บเฉพาะตัวเลือกแรก)
        activityFilter.innerHTML = '<option value="">กิจกรรม (ทั้งหมด)</option>';
        departmentFilter.innerHTML = '<option value="">แผนก (ทั้งหมด)</option>';
        classFilter.innerHTML = '<option value="">ชั้น (ทั้งหมด)</option>';

        // เพิ่มตัวเลือกกิจกรรม
        const activities = [...new Set(participants.map(p => p.activity).filter(a => a))].sort();
        activities.forEach(activity => {
            const option = document.createElement('option');
            option.value = activity;
            option.textContent = activity;
            activityFilter.appendChild(option);
        });

        // เพิ่มตัวเลือกแผนก
        const departments = [...new Set(participants.map(p => p.department).filter(d => d))].sort();
        departments.forEach(department => {
            const option = document.createElement('option');
            option.value = department;
            option.textContent = department;
            departmentFilter.appendChild(option);
        });

        // เพิ่มตัวเลือกชั้นเรียน
        const classes = [...new Set(participants.map(p => p.class).filter(c => c))].sort();
        classes.forEach(cls => {
            const option = document.createElement('option');
            option.value = cls;
            option.textContent = cls;
            classFilter.appendChild(option);
        });

        // เพิ่ม Event listeners สำหรับการกรองข้อมูล
        document.getElementById('searchInput').addEventListener('input', filterParticipants);
        activityFilter.addEventListener('change', filterParticipants);
        departmentFilter.addEventListener('change', filterParticipants);
        classFilter.addEventListener('change', filterParticipants);
    }

    function filterParticipants() {
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const activity = document.getElementById('activityFilter').value;
        const department = document.getElementById('departmentFilter').value;
        const classValue = document.getElementById('classFilter').value;

        filteredParticipants = participants.filter(participant => {
            // กรองตามคำค้นหา (ชื่อ, นามสกุล, กิจกรรม)
            const matchesSearch = searchTerm === '' || 
                participant.fullName.toLowerCase().includes(searchTerm) ||
                participant.activity.toLowerCase().includes(searchTerm);

            // กรองตามกิจกรรม
            const matchesActivity = activity === '' || participant.activity === activity;

            // กรองตามแผนก
            const matchesDepartment = department === '' || participant.department === department;

            // กรองตามชั้นเรียน
            const matchesClass = classValue === '' || participant.class === classValue;

            return matchesSearch && matchesActivity && matchesDepartment && matchesClass;
        });

        renderParticipants();
    }

    function renderParticipants() {
        const participantsList = document.getElementById('participantsList');

        if (filteredParticipants.length === 0) {
            participantsList.innerHTML = '<div class="no-results">ไม่พบข้อมูลผู้สมัครที่ตรงกับเงื่อนไขการค้นหา</div>';
            return;
        }

        participantsList.innerHTML = '';

        filteredParticipants.forEach(participant => {
            const card = document.createElement('div');
            card.className = 'participant-card';

            card.innerHTML = `
                <div class="participant-header">
                    <div class="participant-name">${participant.prefix}${participant.prefix ? ' ' : ''}${participant.firstName} ${participant.lastName}</div>
                    <div class="participant-id">${participant.id}</div>
                </div>
                <div class="participant-details">
                    <div class="detail-item">
                        <span class="detail-icon"></span>
                        <span>ชั้น: ${participant.class || '-'}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-icon"></span>
                        <span>ปี: ${participant.yearGroup || '-'}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-icon"></span>
                        <span>กลุ่ม: ${participant.group || '-'}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-icon"></span>
                        <span>แผนก: ${participant.department || '-'}</span>
                    </div>
                     <div class="detail-item">
                        <span class="detail-icon"></span>
                         <div class="timestamp">สมัคร: ${participant.timestamp || '-'}</div>
                    </div>
                </div>
                <div class="activity-badge">${participant.activity || 'ไม่มีข้อมูลกิจกรรม'}</div>
            `;

            participantsList.appendChild(card);
        });
    }

    // โหลดข้อมูลเมื่อหน้าเว็บโหลดเสร็จ
    document.addEventListener('DOMContentLoaded', loadData);
</script>
</body>
</html>
