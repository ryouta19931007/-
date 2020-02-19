<?php
// 認証を要求したいページの先頭に以下を記述する

    session_start();
    // セッション情報の取得
    $name1 = $_SESSION['name'];
    echo "<center>ようこそ　".$name1."　様</center>";

 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login1.css">
    <style>
                .container {
                    width: 100%;
                    text-align: center;
                }
            </style>
</head>
<body>
    <div class="container">
        <div>

                <p>ログイン完了</p>
                <p><a href="../マッチング画面/matching.php">マッチング</a></p>
                <p><a href="../チャット画面/ttt.php">チャット</a></p>
                <p><a href="../じゃんけん/battle.php">ミニゲーム＜じゃんけん＞</a></p>
                <p><a href="../ログアウト画面/logout.php">ログアウト</a></p>
                <p><a href="../退会画面/out.php">退会</a></p>
        </div>
</body>
</html>
