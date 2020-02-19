<?php


if (isset($_POST['touroku'])){
  $mailaddress = $_POST['mailaddress'];
$db = new mysqli('localhost', 'root', '', 'friend');
$sql = "select mailaddress from friend_town where mailaddress = '$mailaddress';";
$res = $db->query($sql);
     $p = $res->fetch_assoc();

$b = $p["mailaddress"];
     if($b == $mailaddress){
                $alert = "<script>alert('メールアドレスが重複しています');</script>";
       					echo $alert;
     }
     else{
       ?>
       <form action="../登録完了画面/completion.php
     " method="POST" >
<button type="submit" name="touroku">登録</button>
<?php

            }
     }
?>
<!DOCTYPE html>
<html lang="ja">
 <head>
 <meta charset="utf-8">
 <title>登録</title>
 <meta name="description" content="サイトキャプションを入力">
 <meta name="keywords" content="サイトキーワードを,で区切って入力">
 <link rel="stylesheet" href="reset.css" type="text/css">
 　<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
 </head>
<body>
  <form action="../新規登録/register.php
" method="POST" >
<h1>新 規 登 録</h1>
<ul>
  <li>
    　　　　　　名前：
    <input type="text" name="name" value="" required>
  </li>
  <li>
    　　　　　　性別：
    <input type="radio" name="sex" value="男" checked="checked">男
  　<input type="radio" name="sex" value="女">女
  </li>
  <?php //↓ユニーク制約をつけてる 重複チェックをつける予定?>
  <li>
    　メールアドレス：
  <input type="email" name="mailaddress" size="30" maxlength="40" placeholder="メールアドレスを入力してください"  required>
  </li>
  <li>
    　　　パスワード：
    <input type="password" name="pass"　id="pass"　size="30" maxlength="10"　required>
  </li>
    パスワード（確認：
  <input type="password" name="password" id="password" required><br>
  </li>
  <li>
    　　　　携帯番号：
    <input type="tel" name="phonenumber" placeholder="000-0000-0000" pattern="\d{3,4}-\d{4,4}-\d{4,5}" title="電話番号は、ハイフン（-）を入れて記入してください。">
      </li>
    　　　　都道府県：
    <select name="prefectures">
      <option value="" selected>選択してください</option>
      <option value="北海道"> 北海道 </option>
      <option value="青森県"> 青森県 </option>
      <option value="岩手県"> 岩手県 </option>
      <option value="宮城県"> 宮城県 </option>
      <option value="秋田県"> 秋田県 </option>
      <option value="山形県"> 山形県 </option>
      <option value="福島県"> 福島県 </option>
      <option value="茨城県"> 茨城県 </option>
      <option value="栃木県"> 栃木県 </option>
      <option value="群馬県"> 群馬県 </option>
      <option value="埼玉県"> 埼玉県 </option>
      <option value="千葉県"> 千葉県 </option>
      <option value="東京都"> 東京都 </option>
      <option value="神奈川県"> 神奈川県 </option>
      <option value="新潟県"> 新潟県 </option>
      <option value="富山県"> 富山県 </option>
      <option value="石川県"> 石川県 </option>
      <option value="福井県"> 福井県 </option>
      <option value="山梨県"> 山梨県 </option>
      <option value="長野県"> 長野県 </option>
      <option value="岐阜県"> 岐阜県 </option>
      <option value="静岡県"> 静岡県 </option>
      <option value="愛知県"> 愛知県 </option>
      <option value="三重県"> 三重県 </option>
      <option value="滋賀県"> 滋賀県 </option>
      <option value="京都府"> 京都府 </option>
      <option value="大阪府"> 大阪府 </option>
      <option value="兵庫県"> 兵庫県 </option>
      <option value="奈良県"> 奈良県 </option>
      <option value="和歌山県"> 和歌山県 </option>
      <option value="鳥取県"> 鳥取県 </option>
      <option value="島根県"> 島根県 </option>
      <option value="岡山県"> 岡山県 </option>
      <option value="広島県"> 広島県 </option>
      <option value="山口県"> 山口県 </option>
      <option value="徳島県"> 徳島県 </option>
      <option value="香川県"> 香川県 </option>
      <option value="愛媛県"> 愛媛県 </option>
      <option value="高知県"> 高知県 </option>
      <option value="福岡県"> 福岡県 </option>
      <option value="佐賀県"> 佐賀県 </option>
      <option value="長崎県"> 長崎県 </option>
      <option value="熊本県"> 熊本県 </option>
      <option value="大分県"> 大分県 </option>
      <option value="宮崎県"> 宮崎県 </option>
      <option value="鹿児島県"> 鹿児島県 </option>
      <option value="沖縄県"> 沖縄県 </option>
   </select>
  </li>
  <li>
    　　　　　　趣味：
    <select name="hobby_1">
            <option value="" selected>選択してください</option>
            <option value="アニメ"> アニメ </option>
            <option value="ゲーム"> ゲーム </option>
            <option value="読書"> 読書 </option>
            <option value="釣り"> 釣り </option>
            <option value="旅行"> 旅行 </option>
            <option value="映画"> 映画 </option>
            <option value="アウトドア"> アウトドア </option>
            <option value="DIY"> DIY </option>
            <option value="料理"> 料理 </option>
            <option value="カラオケ"> カラオケ </option>
    </select>
    <select name="hobby_2">
            <option value="" selected>選択してください</option>
            <option value="アニメ"> アニメ </option>
            <option value="ゲーム"> ゲーム </option>
            <option value="読書"> 読書 </option>
            <option value="釣り"> 釣り </option>
            <option value="旅行"> 旅行 </option>
            <option value="映画"> 映画 </option>
            <option value="アウトドア"> アウトドア </option>
            <option value="DIY"> DIY </option>
            <option value="料理"> 料理 </option>
            <option value="カラオケ"> カラオケ </option>
    </select>
    <select name="hobby_3">
            <option value="" selected>選択してください</option>
            <option value="アニメ"> アニメ </option>
            <option value="ゲーム"> ゲーム </option>
            <option value="読書"> 読書 </option>
            <option value="釣り"> 釣り </option>
            <option value="旅行"> 旅行 </option>
            <option value="映画"> 映画 </option>
            <option value="アウトドア"> アウトドア </option>
            <option value="DIY"> DIY </option>
            <option value="料理"> 料理 </option>
            <option value="カラオケ"> カラオケ </option>
    </select>
  </li>
</ul>

<button type="submit" name="touroku">登録</button>

</form>
<script>
  var form = document.forms[0];
  form.onsubmit = function() {
    // エラーメッセージをクリアする
    form.password.setCustomValidity("");
    // パスワードの一致確認
    if (form.pass.value != form.password.value) {
      // 一致していなかったら、エラーメッセージを表示する
      form.pass.setCustomValidity("パスワードと確認用パスワードが一致しません");
    }
  };
  // 入力値チェックエラーが発生したときの処理
  form.addEventListener("invalid", function() {
    document.getElementById("errorMessage").innerHTML = "入力値にエラーがあります";
  }, false);
</script>

</body>
</html>
