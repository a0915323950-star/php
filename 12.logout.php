<?php
// 啟動 session
session_start();

// 清除 session（登出）
session_destroy();

// 回到登入頁
header("Location: 2.login.html");
?>
