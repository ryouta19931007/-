<?php
    session_start();
    $_SESSION['name'] = "";
    $_SESSION['pass'] = "";



?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログアウト</title>
    <link rel="stylesheet" href="login.css">
    <style>
        .container {
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <p>ログアウトしました</p>
        <p><a href="../ログイン画面/login.php">戻る</a></p>
    </div>
</body>
</html>
