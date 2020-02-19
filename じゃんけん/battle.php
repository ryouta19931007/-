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
        <h1><center>じゃんけん</center></h1>
        <center>出す手を選んで勝負してください。</center>
        <div class="form-box">
            <form action="result.php" method="post">
                <label>
                    <center><input type="radio" title="playerHand" name="playerHand" value="グー" checked>グー　</center>
                </label>
                <label>
                    <center><input type="radio" title="playerHand" name="playerHand" value="チョキ">チョキ</center>
                </label>
                <label>
                    <center><input type="radio" title="playerHand" name="playerHand" value="パー">パー　</center>
                </label>
                <center><button type="submit" class="battle-button">勝負する！</button></center>
            </form>
        </div>
    </main>
</div>
</body>
</html>
