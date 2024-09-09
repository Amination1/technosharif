<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه پروفایل</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: rtl;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-header {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .profile-header img {
            border-radius: 50%;
            margin-left: 20px;
        }
        .profile-header h1 {
            margin: 0;
        }
        .stream-list {
            list-style: none;
            padding: 0;
        }
        .stream-list li {
            background-color: #f9f9f9;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
        }
        .stream-list li h2 {
            margin: 0 0 10px 0;
        }
        .profile-icon {
            font-size: 24px;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="profile-header">
        <div class="profile-icon">👤</div>
        <h1>نام کاربر</h1>
    </div>
    <ul class="stream-list">
        <li>
            <h2>عنوان استریم</h2>
            <p>توضیحات استریم...</p>
            <object data="/iframe.php" width="400px" height="200px" type="text/html">
            </object>

        </li>
    </ul>
</div>
</body>
</html>
