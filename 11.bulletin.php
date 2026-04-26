<?php
// 啟動 session
session_start();

// 檢查是否登入
if(!isset($_SESSION['username'])){
    // 沒登入就導回登入頁
    header("Location: 2.login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>公告頁</title>
</head>
<body>

<h2>歡迎 <?php echo $_SESSION['username']; ?> 登入</h2>

<p>這是公告頁（只有登入才能看到）</p>

<!-- 連結 -->
<a href="18.user.php">使用者頁面</a><br><br>
<a href="12.logout.php">登出</a>

</body>
</html>
