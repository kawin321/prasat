<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โครงการน้อมรำลึกครูกลอนสุนทรภู่</title>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600;700&family=Charm:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Sarabun', sans-serif;
            line-height: 1.6;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
        }

        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .floating-poem {
            position: absolute;
            color: rgba(255, 255, 255, 0.1);
            font-family: 'Charm', serif;
            font-size: 18px;
            animation: float 20s infinite linear;
        }

        @keyframes float {
            0% { transform: translateY(100vh) rotate(0deg); }
            100% { transform: translateY(-100px) rotate(360deg); }
        }

        .main-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            padding: 40px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .main-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: shine 3s infinite;
            pointer-events: none;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            50% { transform: translateX(100%) translateY(100%) rotate(45deg); }
            100% { transform: translateX(200%) translateY(200%) rotate(45deg); }
        }

        .logo-container {
            margin-bottom: 30px;
            position: relative;
        }

        .logo {
            width: 120px;
            height: auto;
            border-radius: 50%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
            border: 3px solid #f8d7da;
        }

        .logo:hover {
            transform: scale(1.1) rotate(5deg);
        }

        .title {
            font-family: 'Charm', serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .subtitle {
            font-size: 1.3rem;
            color: #34495e;
            margin-bottom: 40px;
            font-weight: 400;
        }

        .year-badge {
            display: inline-block;
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            margin-bottom: 40px;
            font-size: 1.1rem;
            box-shadow: 0 5px 15px rgba(238, 90, 36, 0.3);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); box-shadow: 0 5px 15px rgba(238, 90, 36, 0.3); }
            50% { transform: scale(1.05); box-shadow: 0 8px 25px rgba(238, 90, 36, 0.5); }
            100% { transform: scale(1); box-shadow: 0 5px 15px rgba(238, 90, 36, 0.3); }
        }

        .button-container {
            display: flex;
            gap: 30px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 15px 35px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            min-width: 200px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: linear-gradient(45deg, #4CAF50, #45a049);
            color: white;
            border: none;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(76, 175, 80, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(45deg, #2196F3, #1976D2);
            color: white;
            border: none;
        }

        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(33, 150, 243, 0.4);
        }

        .btn-icon {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .decoration {
            position: absolute;
            color: rgba(0, 0, 0, 0.05);
            font-size: 150px;
            z-index: -1;
        }

        .decoration-1 {
            top: -20px;
            left: -30px;
            transform: rotate(-15deg);
        }

        .decoration-2 {
            bottom: -30px;
            right: -40px;
            transform: rotate(15deg);
        }

        .poem-quote {
            background: rgba(255, 255, 255, 0.8);
            border-left: 5px solid #667eea;
            padding: 20px;
            margin: 30px 0;
            border-radius: 10px;
            font-family: 'Charm', serif;
            font-size: 1.1rem;
            color: #2c3e50;
            font-style: italic;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
            
            .main-card {
                padding: 25px;
            }
            
            .title {
                font-size: 2rem;
            }
            
            .subtitle {
                font-size: 1.1rem;
            }
            
            .button-container {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }
            
            .btn {
                width: 100%;
                max-width: 300px;
            }
        }

        .sparkle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: #fff;
            border-radius: 50%;
            animation: sparkle 2s infinite;
        }

        @keyframes sparkle {
            0%, 100% { opacity: 0; transform: scale(0); }
            50% { opacity: 1; transform: scale(1); }
        }
    </style>
</head>
<body>
    <div class="floating-elements">
        <div class="floating-poem" style="left: 10%; animation-delay: 0s;">กลอนสุนทรภู่</div>
        <div class="floating-poem" style="left: 80%; animation-delay: 5s;">วันภาษาไทย</div>
        <div class="floating-poem" style="left: 50%; animation-delay: 10s;">น้อมรำลึก</div>
        <div class="floating-poem" style="left: 20%; animation-delay: 15s;">ครูกลอน</div>
    </div>

    <div class="container">
        <div class="main-card">
            <div class="decoration decoration-1">📚</div>
            <div class="decoration decoration-2">✒️</div>
            
            <div class="sparkle" style="top: 20%; left: 15%; animation-delay: 1s;"></div>
            <div class="sparkle" style="top: 70%; left: 85%; animation-delay: 3s;"></div>
            <div class="sparkle" style="top: 40%; left: 90%; animation-delay: 5s;"></div>
            
            <div class="logo-container">
                <img src="https://prasat.ac.th/wp-content/uploads/2022/12/prasat2.png" alt="โลโก้" class="logo">
            </div>

            <h1 class="title">โครงการน้อมรำลึกครูกลอนสุนทรภู่</h1>
            <p class="subtitle">ร่วมเชิดชูวันภาษาไทยแห่งชาติ</p>
            
            <div class="year-badge">ประจำปีการศึกษา 2568</div>

            <div class="poem-quote">
                "กลอนเป็นศิลปะแห่งภาษาไทย ที่แสดงถึงความงดงามและภูมิปัญญา<br>
                ของบรรพบุรุษที่ควรค่าแก่การสืบทอดและรำลึก"
            </div>

            <div class="button-container">
                <a href="https://forms.gle/Lj5FZB7kUSUKVeEG6" class="btn btn-primary" target="_blank">
                    <i class="fa-sharp fa-thin fa-pen"></i>
                    สมัครเข้าร่วมกิจกรรม
                </a>
                
                <a href="vat.php" class="btn btn-secondary">
                    <i class="fa-sharp fa-thin fa-users"></i>
                    ดูรายชื่อผู้สมัคร
                </a>
            </div>
        </div>
    </div>

    <script>
        // เพิ่มเอฟเฟกต์พิเศษ
        document.addEventListener('DOMContentLoaded', function() {
            // สร้างดาวระยิบระยับ
            function createSparkles() {
                const container = document.querySelector('.main-card');
                for (let i = 0; i < 5; i++) {
                    setTimeout(() => {
                        const sparkle = document.createElement('div');
                        sparkle.className = 'sparkle';
                        sparkle.style.left = Math.random() * 100 + '%';
                        sparkle.style.top = Math.random() * 100 + '%';
                        sparkle.style.animationDelay = Math.random() * 2 + 's';
                        container.appendChild(sparkle);
                        
                        setTimeout(() => {
                            sparkle.remove();
                        }, 2000);
                    }, i * 400);
                }
            }
            
            // เรียกสร้างดาวทุก 3 วินาที
            setInterval(createSparkles, 1000);
            createSparkles();
            

        });
    </script>
</body>
</html>
