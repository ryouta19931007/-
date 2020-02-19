
<!DOCTYPE html>
<html lang="ja">
 <head>
 <meta charset="utf-8">
 <title>表示</title>
 <meta name="description" content="サイトキャプションを入力">
 <meta name="keywords" content="サイトキーワードを,で区切って入力">
 <link rel="stylesheet" href="sample.css">
 <script src="sample.js"></script>
 </head>
<body>

<?php
function func49_03($sql,$host,$user,$pass,$db_name){
    $cn = mysqli_connect($host,$user,$pass,$db_name);
    mysqli_set_charset($cn,'utf8');
    mysqli_query($cn,$sql);
    mysqli_close($cn);
}
$db = new mysqli('localhost', 'root', '', 'friend');
$sql = "select * from friend_town";
$res = $db->query($sql);

   //結果のすべての行を連想配列・数値添字配列で取得
   $row = $res->fetch_all();

   //欲しい情報を上手に取り出すために配列を表示させて確認
   foreach ($row as $value) {
     foreach ($value as $val) {
       echo $val."  "."  "."  ";
     }
     echo "<br>";
   }
func49_03($sql,"localhost","root","","friend");
?>
</form>
<p><a href="../ログイン画面/login.php">ログイン画面へ</a></p>
<p><a href="../新規登録/register.php">新規登録画面へ</a></p>
</body>
</html>
