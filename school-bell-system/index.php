<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบออดโรงเรียน</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1><i class="bell-icon">🔔</i> ระบบออดโรงเรียนบ้านทนง</h1>
        
        <div class="tabs">
            <button class="tablinks active" onclick="openTab(event, 'schedules')">จัดการตารางเวลา</button>
            <button class="tablinks" onclick="openTab(event, 'logs')">บันทึกการออด</button>
            <button class="tablinks" onclick="openTab(event, 'control')">ควบคุม</button>
        </div>

        <div id="schedules" class="tabcontent" style="display:block;">
            <h2>ตารางเวลาออด</h2>
            <div class="table-container">
                <table id="scheduleTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ชื่อออด</th>
                            <th>เวลา</th>
                            <th>ประเภท</th>
                            <th>ไฟล์เสียง</th>
                            <th>สถานะ</th>
                            <th>การกระทำ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ข้อมูลจะถูกเติมโดย JavaScript -->
                    </tbody>
                </table>
            </div>
            
            <h2>เพิ่ม/แก้ไขตารางเวลา</h2>
            <form id="scheduleForm">
                <input type="hidden" id="scheduleId">
                <div class="form-group">
                    <label for="name">ชื่อออด:</label>
                    <input type="text" id="name" required placeholder="เช่น เข้าเรียนคาบ 1">
                </div>
                
                <div class="form-group">
                    <label for="time">เวลา:</label>
                    <input type="time" id="time" required>
                </div>
                
                <div class="form-group">
                    <label for="bell_type">ประเภท:</label>
                    <select id="bell_type">
                        <option value="normal">ปกติ</option>
                        <option value="special">พิเศษ</option>
                        <option value="activity">กิจกรรม</option>
                    </select>
                </div>
                
               <div class="form-group">
    <label for="sound_file_input">ไฟล์เสียง:</label>
    <input type="file" id="sound_file_input" accept=".wav,.mp3,.ogg">
    <input type="hidden" id="sound_file">
    <div id="sound_file_name" class="file-name">ยังไม่ได้เลือกไฟล์</div>
</div>
                
                <div class="form-group">
                    <label for="active">สถานะ:</label>
                    <select id="active">
                        <option value="1">เปิดใช้งาน</option>
                        <option value="0">ปิดใช้งาน</option>
                    </select>
                </div>
                
                <div class="form-actions">
                    <button type="button" class="btn-save" onclick="saveSchedule()">บันทึก</button>
                    <button type="button" class="btn-clear" onclick="clearForm()">ล้าง</button>
                </div>
            </form>
        </div>

        <div id="logs" class="tabcontent">
            <h2>บันทึกการออด</h2>
            <div class="table-container">
                <table id="logsTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ออด</th>
                            <th>เวลาที่ออด</th>
                            <th>เวลาตามตาราง</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ข้อมูลจะถูกเติมโดย JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>

        <div id="control" class="tabcontent">
            <h2>ควบคุมระบบออด</h2>
            <div class="control-panel">
                <div class="time-display">
                    <div class="clock">
                        <span id="currentTime">00:00:00</span>
                    </div>
                    <div class="next-bell">
                        <span>ออดถัดไป:</span>
                        <span id="nextBell">-</span>
                    </div>
                </div>
                
                <div class="control-buttons">
                    <button class="btn-test" onclick="testBell()">
                        <i class="icon">🔔</i> ทดสอบเสียงออด
                    </button>
                    <button class="btn-stop" onclick="stopSound()">
                        <i class="icon">⏹️</i> หยุดเสียง
                    </button>
                </div>
                
                <div class="system-status">
                    <div class="status-indicator active"></div>
                    <span id="statusText">ระบบทำงานปกติ</span>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>