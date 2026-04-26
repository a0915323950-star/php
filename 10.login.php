<?php
// 啟動 session（用來記錄登入狀態）
session_start();

// 取得使用者輸入的資料
$username = $_POST['username'];
$password = $_POST['password'];

// 設定帳號密碼（簡單版本）
if($username == "admin" && $password == "1234"){

    // 登入成功，儲存使用者名稱
    $_SESSION['username'] = $username;

    // 導向公告頁
    header("Location: 11.bulletin.php");

} else {
    // 登入失敗
    echo "登入失敗！<a href='2.login.html'>回登入頁</a>";
}
?>
