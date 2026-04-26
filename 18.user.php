<?php
// 啟動 session
session_start();

// 檢查是否登入
if(!isset($_SESSION['username'])){
    header("Location: 2.login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>使用者頁</title>
</head>
<body>

<h2>使用者資料頁</h2>

<p>目前登入帳號：<?php echo $_SESSION['username']; ?></p>

<a href="11.bulletin.php">回公告頁</a><br><br>
<a href="12.logout.php">登出</a>

</body>
</html>
