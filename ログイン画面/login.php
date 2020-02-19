<?php
if (isset($_POST['login'])){
  $mailaddress = $_POST['mailaddress'];
  $password = $_POST['password'];
  $db = new mysqli('localhost', 'root', '', 'friend');
 $sql = "select name,mailaddress,password,prefectures,hobby_1,hobby_2,hobby_3 from friend_town where mailaddress = '$mailaddress';";
 $res = $db->query($sql);
 //$ta = [];
 //$pa = [];
 //while ($p = $res->fetch_assoc()) {
       //printf ("%s (%s)\n", $p["name"], $p["pass"]);
       $p = $res->fetch_assoc();
       if($p==false){
         echo "ユーザーがみつかりません";
       }
       else{
       $a = $p["name"];
       $b = $p["password"];
       $c = $p["prefectures"];
       $d = $p["hobby_1"];
       $e = $p["hobby_2"];
       $f = $p["hobby_3"];
       //echo $a;
       //echo $b;
       //if($a == $name){
            //echo "名前OK";
           if($password == $b){
          // echo "パスワードOK";
          session_start();
          // セッション情報の保存
          $_SESSION['name'] = $a;
          $_SESSION['prefectures'] = $c;
          $_SESSION['hobby_1'] = $d;
          $_SESSION['hobby_2'] = $e;
          $_SESSION['hobby_3'] = $f;
          // セッション情報の取得
          $name1 = $_SESSION['name'];
          $prefectures = $_SESSION['prefectures'];
          $hobby_1 = $_SESSION['hobby_1'];
          $hobby_2 = $_SESSION['hobby_2'];
          $hobby_3 = $_SESSION['hobby_3'];
          header( "Location: http://localhost/PI18/就職作品/ログイン後画面/in.php" ) ;
          exit;
           }
           else {

             $alert = "<script>alert('パスワードが一致しません');</script>";
					echo $alert;
           }
        }
        }
       //else{
       //$t = "名前が一致していません";
       //echo $t;

       //}

//}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
    <title>Login</title>
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="login.css">
</head>
<body>
    <div id="login">

      <form action="" name='form-login' method="POST">
        <span class="fontawesome-user"></span>
          <input type="text" id="user" placeholder="メールアドレス" name="mailaddress">

        <span class="fontawesome-lock"></span>
          <input type="password" id"pass" placeholder="パスワード" name="password">

        <input type="submit" name="login" value="ログイン">


</form>
</body>
</html>
