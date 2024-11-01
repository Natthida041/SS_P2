<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โรงเรียนอนุบาลกุลจินต์</title>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #9DCAEB;
            color: #333;
            min-height: 100vh;
            padding-bottom: 60px;
            position: relative;
        }

        .header {
            background-color: #FB6F92;
            color: white;
            padding: 20px;
            font-size: 24px;
            font-weight: 600;
            box-shadow: 0 4px 19px rgba(0, 0, 0, 0.1);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header .title {
            display: flex;
            align-items: center;
        }

        .logo {
            width: 80px; /* ขนาดของโลโก้ */
            height: auto;
            margin-bottom: 10px; /* ระยะห่างระหว่างโลโก้กับข้อความ "เข้าสู่ระบบ" */
        }
        
        .nav {
            display: flex;
            justify-content: flex-end;
            gap: 15px; /* เว้นระยะห่างระหว่างปุ่ม */
        }

        .nav a {
            color: white;
            background-color: #FF9BB4; /* พื้นหลังของปุ่ม */
            padding: 10px 20px; /* เพิ่มระยะห่างภายในปุ่ม */
            margin-left: 10px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 25px; /* ทำให้ปุ่มโค้งมน */
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* เพิ่มเงาให้ปุ่ม */
        }

        .nav a:hover {
            background-color: #FFBCCD; /* เปลี่ยนสีเมื่อ hover */
            transform: translateY(-2px); /* ยกปุ่มขึ้นเล็กน้อยเมื่อ hover */
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2); /* เพิ่มเงาเมื่อ hover */
        }


        .content {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
        }

        .category {
            padding: 8px;
            color: white;
            font-size: 20px;
            font-weight: 600;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            height: 170px; /* เพิ่มความสูงให้มากขึ้น */
            width: 70%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .category::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            transition: background 0.3s ease;
        }

        .category::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-size: cover;
            background-position: center top;
            z-index: -1;
            transition: transform 0.3s ease;
        }

        .category:hover::before {
            background: rgba(0, 0, 0, 0.2);
        }

        .category:hover::after {
            transform: scale(1.05);
        }

        .category span {
            position: relative;
            z-index: 1;
        }

        .category:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .category-academic::after {
            background-image: url('https://www.kunlajin-hy.com/V3/event_pic/56-09-19/064.jpg');
        }

        .category-train::after {
            background-image: url('https://www.kunlajin-hy.com/V3/event_pic/60_07_18_20/003.jpg');
        }

        .category-activity::after {
            background-image: url('http://www.kunlajin-hy.com/V3/event_pic/58-01-29/049.jpg');
        }

        .footer {
            background-color: #FB6F92;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 14px;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
        }


        @media (max-width: 768px) {
            .header {
                font-size: 24px;
                padding: 15px;
            }

            .nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            .nav a {
                margin: 5px;
                font-size: 16px;
            }

            .category {
                padding: 30px;
                font-size: 20px;
                height: 150px; /* ปรับความสูงให้เหมาะสมกับหน้าจอมือถือ */
            }

            .footer {
                position: relative;
                padding: 10px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="title">
        <img src="logo.png" alt="Logo" class="logo">
            โรงเรียนอนุบาลกุลจินต์
        </div>
        <div class="nav">
            <a href="/P2/HOME/home.php">เพิ่มข่าวสารใหม่</a>
            <a href="/P2/CRUD/home.php">จัดการผู้ใช้งาน</a>
            <a href="/P2/logout.php">ออกจากระบบ</a>
        </div>
    </div>

    <div class="content">
        <a href="/P2/HOME/manage/academic.php" class="category category-academic">
            <span>งานวิชาการ</span>
        </a>


        <a href="/P2/HOME/manage/train.php" class="category category-train">
            <span>อบรม/สัมมนา</span>
        </a>

        <a href="/P2/HOME/manage/activity.php" class="category category-activity">
            <span>กิจกรรม</span>
        </a>
    </div>

    <div class="footer">
        &copy; 1 ถนนรณภูมิ ตำบลหาดใหญ่ อำเภอหาดใหญ่ จังหวัดสงขลา 90110. Tel. : 074-257884, Fax. : 074-258107, E-mail : kunlajin@gmail.com
    </div>
</body>
</html>