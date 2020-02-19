<?php
function func01($sql,$host,$user,$pass,$db_name){

    $cn = mysqli_connect($host,$user,$pass,$db_name);
    mysqli_set_charset($cn,'utf-8');
    mysqli_query($cn,$sql);
    mysqli_close($cn);
}

$name  = $_POST['name'];
$sex  = $_POST['sex'];
$mailaddress  = $_POST['mailaddress'];
$password  = $_POST['pass'];
$phonenumber  = $_POST['phonenumber'];
$prefectures  = $_POST['prefectures'];
$hobby_1  = $_POST['hobby_1'];
$hobby_2  = $_POST['hobby_2'];
$hobby_3  = $_POST['hobby_3'];
$sql = "INSERT INTO friend_town( name, sex, mailaddress, password, phonenumber, prefectures, hobby_1, hobby_2, hobby_3)
VALUES('$name', '$sex', '$mailaddress', '$password', '$phonenumber', '$prefectures', '$hobby_1', '$hobby_2', '$hobby_3')";

func01($sql,"localhost","root","","friend");

?>

<!DOCTYPE html>
<html lang="ja">
 <head>
 <meta charset="utf-8">
 <title>登録</title>
 <meta name="description" content="サイトキャプションを入力">
 <meta name="keywords" content="サイトキーワードを,で区切って入力">
 <link rel="stylesheet" href="sample.css">

 <script src="jquery.js"></script>
 </head>
<body>
<p>
登録完了
</p>
</body>
<footer>
<div class="back"><a href="../新規登録/register.php">新規登録画面に戻る</a></div>
<br>
<div class="back"><a href="../登録全件データ/display.php">全件表示する</a></div>
</footer>
</html>
