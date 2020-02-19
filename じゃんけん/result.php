<?php
$count = 0;
// じゃんけんの手を配列に代入
$hands = ['グー', 'チョキ', 'パー'];
// プレイヤーの手がPOSTされたら
if (isset($_POST['playerHand'])) {
    // プレイヤーの手を代入
    $playerHand = $_POST['playerHand'];
    // PCの手をランダムで選択
    $key = array_rand($hands);
    $pcHand = $hands[$key];
    // 勝敗を判定
    switch ($playerHand) {
        case ($playerHand === $pcHand):

            $kazu  = $count++;
            while ($kazu <= 100) {
              if($playerHand === $pcHand){
                //$result = 'あいこ';
                header( "Location: http://localhost/PI18/就職作品/じゃんけん/battle.php" ) ;
                exit;
              }
              else{
                break;
              }
            }
            //break;
        case 'グー':
            $result = ($pcHand === 'チョキ') ? '勝ち' : '負け';
            break;
        case 'チョキ':
            $result = ($pcHand === 'パー') ? '勝ち' : '負け';
            break;
        case 'パー':
            $result = ($pcHand === 'グー') ? '勝ち' : '負け';
            break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>じゃんけん</title>
    <link rel="stylesheet" href="login1.css">
</head>
<body>
<div id="wrapper">
    <header>
        <div class="header-logo"></div>
    </header>
    <main>
        <h1><center>結果は・・・</center></h1>
        <div class="result-box">
            <p class="result-word"><center><?= $result ?>！</center></p>

            <?php session_start();
            $name1 = $_SESSION['name'];?><center><?php echo $name1,"様"; ?>：<?= $playerHand ?><center><br>
            <center>コンピューター：<?= $pcHand ?></center><br>

            <p><a class="red" href="./battle.php"><center>もう一回勝負する</center></a></p>
            <hr>
            <p><a href="../ログイン後画面/in.php"><center>マイページへ戻る</center></a></p>
        </div>
    </main>

</div>
</body>
</html>
