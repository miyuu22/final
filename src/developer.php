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
            <p class="p8">開発者top</p>
        </div>
    </header>
    <main>
        <div class="main">
            <div class="msg">
            <a href="developer-characterall.php" class="developer-a1">キャラクター一覧</a><br>
            <a href="developer-character.php" class="developer-a2">キャラクター追加</a><br>
            <a href="developer-character1.php" class="developer-a3">キャラクター更新</a><br>
            <a href="developer-character2.php" class="developer-a4">キャラクター削除</a><br>
            <a href="developer-story.php" class="developer-a5">ストーリー追加</a><br>
            <a href="developer-kate.php" class="developer-a6">カテゴリ追加</a>
            </div>
        </div>
    </main>
</body>
</html>