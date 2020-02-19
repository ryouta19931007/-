<?php

    session_start();
    $name1 = $_SESSION['name'];

$db = new mysqli('localhost', 'root', '', 'ph22');
$sql = "DELETE from php_end where name='$name1';";
$db->query($sql);
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

                <p>退会完了</p>
                <p><a href="../新規登録/register.php">戻る</a></p>

        </div>
</body>
</html>
