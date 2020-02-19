<?php
// 認証を要求したいページの先頭に以下を記述する

    session_start();
    // セッション情報の取得
    $prefectures = $_SESSION['prefectures'];
    $hobby_1 = $_SESSION['hobby_1'];
    $hobby_2 = $_SESSION['hobby_2'];
    $hobby_3 = $_SESSION['hobby_3'];
    $name1 = $_SESSION['name'];
    echo "<center>".$name1."様のマッチング相手をお探しします。</center>";

    $db = new mysqli('localhost', 'root', '', 'friend');
    $sql = "select name,prefectures,hobby_1,hobby_2,hobby_3 from friend_town where prefectures = '$prefectures'
　　　　　　AND     hobby_1 = '$hobby_1'
　　　　　　AND     hobby_2 = '$hobby_2'
　　　　　　AND     hobby_3 = '$hobby_3';";
　　    $res = $db->query($sql);
         $p = $res->fetch_assoc();
         if($p==false){
           echo "ユーザーがみつかりません";
         }
         else{
           echo "マッチングしました。";
           header( "Location: http://localhost/PI18/就職作品/チャット画面/ttt.php" ) ;
           exit;
            }

         }

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

        </div>
</body>
<footer>
  <p><a href="../チャット画面/ttt.php">チャット</a></p>
  <p><a href="../ログイン後画面/in.php"><center>マイページへ戻る</center></a></p>
</footer>
</div>
</html>
