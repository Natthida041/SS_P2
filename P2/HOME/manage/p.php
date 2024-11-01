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
        }

        .header {
            background-color: #FB6F92;
            color: white;
            padding: 20px;
            font-size: 24px;
            font-weight: 600;
            box-shadow: 0 4px 19px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .title {
            display: flex;
            align-items: center;
        }

        .logo {
            width: 60px;
            height: auto;
            margin-right: 15px;
        }

        .nav {
            display: flex;
            gap: 15px;
        }

        .nav a {
            color: white;
            background-color: #FF9BB4;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 25px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .nav a:hover {
            background-color: #FFBCCD;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .content {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
        }

        .category {
            color: white;
            font-weight: 600;
            border-radius: 15px;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            max-width: 1200px;
            margin: 0 auto;
            height: 200px;
            width: 100%;
        }

        .category::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3); /* Slight dark overlay for readability */
            z-index: 1;
        }

        .category-content {
            position: relative;
            z-index: 2;
            width: 100%;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background for text */
            text-align: center;
        }

        .category-title {
            font-size: 28px;
            margin-bottom: 5px;
            text-align: left; /* Align text to the left */
            width: 100%; /* Make it span the full width */
        }

        .category-details {
            font-size: 16px;
            margin: 0;
            text-align: center;
        }

        .category-academic {
            background-image: url('https://www.kunlajin-hy.com/V3/event_pic/56-09-19/064.jpg');
        }

        .category-train {
            background-image: url('https://www.kunlajin-hy.com/V3/event_pic/60_07_18_20/003.jpg');
        }

        .category-activity {
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
            .category {
                font-size: 18px;
                height: auto;
            }

            .footer {
                font-size: 12px;
                padding: 10px;
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
            <div class="category-content">
                <span class="category-title">งานวิชาการ</span>
                <p class="category-details">การบริหารงานวิชาการเป็นงานที่สำคัญสำหรับผู้บริหารสถานศึกษา โดยเฉพาะอย่างยิ่งเป็นงานที่จะต้องปรับปรุงคุณภาพการเรียนการสอน ซึ่งเป็นจุดมุ่งหมายหลักของสถานศึกษาและเป็นเครื่องชี้ความสำเร็จ และความสามารถของผู้บริหาร</p>
            </div>
        </a>

        <a href="/P2/HOME/manage/train.php" class="category category-train">
            <div class="category-content">
                <span class="category-title">อบรม/สัมมนา</span>
                <p class="category-details">การจัดอบรมและสัมมนาเพื่อเสริมสร้างความรู้และทักษะที่จำเป็นสำหรับบุคลากรและนักเรียน</p>
            </div>
        </a>

        <a href="/P2/HOME/manage/activity.php" class="category category-activity">
            <div class="category-content">
                <span class="category-title">กิจกรรม</span>
                <p class="category-details">กิจกรรมสร้างสรรค์ต่างๆ ที่จัดขึ้นเพื่อพัฒนาทักษะและส่งเสริมการเรียนรู้ในทุกๆ ด้านของนักเรียน</p>
            </div>
        </a>
    </div>

    <div class="footer">
        &copy; 1 ถนนรณภูมิ ตำบลหาดใหญ่ อำเภอหาดใหญ่ จังหวัดสงขลา 90110. Tel. : 074-257884, Fax. : 074-258107, E-mail : kunlajin@gmail.com
    </div>
</body>
</html>
