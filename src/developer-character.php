<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/developer.css">
</head>
<body>
    <header>
        <div class="header">
            <form action="top.html" method="post">
                <button type="image" class="test-in">
                    <img src="img/logo.png" class="logo">
                </button>
            </form>
            <p class="p8">キャラクター変更</p>
        </div>
    </header>
    <main>
        <div class="main">
            <div class="msg-flot">
                <p class="p9">追加キャラクター情報を入力↓</p>
                <form action="developer-character-output.php" method="post">
                キャラID　<input type="text" name="chara_id"><br>
                <hr>
                キャラ名　<input type="text" name="chara_name"><br>
                <hr>
                属性　<input type="text" name="chara_attribute"><br>
                <hr>
                カテゴリ　<input type="text" name="kate_id"><br>
                <hr>
                画像名　<input type="text" name="chara_img">
                <button type="submit">追加</button>
                </form>
            </div>
        </div>
        <p>
        <form action="developer.php" method="post">
        <button type="submit">戻る</button>
    </form>
        </p>
    </main>
</body>
</html>