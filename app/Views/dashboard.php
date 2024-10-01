<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f3ec78, #af4261);
            color: #333;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .welcome-box {
            background: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #af4261;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }
        .btn {
            background-color: #af4261;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #f3ec78;
            color: #333;
        }
        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
            background: url('https://files-world.thaipbs.or.th/_471e69c70a.jpg') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-box">
            <div class="profile-pic"></div>
            <h1>ยินดีต้อนรับเข้าสู่ระบบ</h1>
            <p>คุณได้เข้าสู่ระบบสำเร็จแล้ว</p>
            <!-- <a href="dashboard.html" class="btn">ไปยังหน้าแดชบอร์ด</a> -->
        </div>
    </div>
</body>
</html>
