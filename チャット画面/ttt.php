<?php
session_start();
// セッション情報の取得
$name1 = $_SESSION['name'];
?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Chat</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/0.0.11/push.min.js"></script>
<link rel="stylesheet" href="login1.css">
<style type="text/css">
#log {
    border: 1px solid #AAA;
    height:350px;
    width:1000px;
    overflow: scroll;
}
</style>

</head>

<body>
<script type="text/javascript">

function load_log()
{
    $.ajax({
        type: 'post',
        url: './log.txt',
        success: function( data ){
            log = data.replace(/[\n\r]/g, "<br />");
            $('#log').html(log);
        }
    });
}

function write_message()
{
    $.ajax({
        type: 'post',
        url: 'write.php',
        data: {
            'message' : $("#message").val()
        },
        success: function(){
            load_log();
            $("#message").val('');
        }
    });
}

$(document).ready(function()
{
    load_log();
    setInterval('load_log()', 5000);
});

</script>

<form method="post" onsubmit="write_message();return false;">

  <input id="message" name="message" type="text" value="" />
  <script>  Push.Permission.request();
    Push.create('ユーザー様へ', {
    　　body: 'お相手様からの通知をお知らせします！',
    　　icon: '../image/icon.gif',
    　　timeout: 8000, // 通知が消えるタイミング
    　　vibrate: [100, 100, 100], // モバイル端末でのバイブレーション秒数
    　　onClick: function() {
    　　　　// 通知がクリックされた場合の設定
    　　　　console.log(this);
    　　}
    });
  </script>

  <input type="button" value="送信" onclick="write_message()">
</form>

<div id="log"></div>

</body>
<footer>
  <p><a href="../ログイン後画面/in.php"><center>マイページに戻る</center></a></p>
</footer>
</html>
