<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/h-letter.css">
    <script src="js/h-letter.js" defer></script>
</head>
<body>
    <header>
        <div class="header">
                    <img src="img/logo.png" class="logo">
            <div class="item">
                <a href="top.html" class="a2">トップ</a>
                <a href="character.php" class="a2">キャラクター</a>
                <a href="story.php" class="a2">ストーリー</a>
                <a href="keyword.html" class="a2">用語解説</a>
                <a href="h-letter.php" class="a1">ハンター文字</a>
                <a href="correlation.html" class="a2">相関図</a>
                <a href="staff.html" class="a2">スタッフ・キャスト</a>
                <a href="music.html" class="a2">音楽</a>
            </div>
        </div>
    </header>
    <main>
        <div class="msg-flex">
            <p class="p7">HH-LETTER</p>
        </div>
        <?php
        $pdo = new PDO($connect,USER,PASS);
        $sql=$pdo->prepare('select * from letter');
        $sql -> execute();
            echo '<div class="list">';
            foreach($sql as $row){
                echo '<div class="ul" id="ul">';
                echo '<div class="li"><img alt="image" class="img"src="img/',$row['letter_img'],'"></div>';
                echo '<div class="li">',$row['letter_hh'];
                echo '</div></div>';
            }
            echo '</div>';
    ?> 
    <hr>
        <p class="p8">これ、よめるかな？</p>
        <div class="mondai">
            <img alt="image" class="img"src="img/ha.png">
            <img alt="image" class="img"src="img/nn.png">
            <img alt="image" class="img"src="img/ta.png">
            <img alt="image" class="img"src="img/ー.png">
        </div>

        <div class="mondai">
            <img alt="image" class="img"src="img/ki.png">
            <img alt="image" class="img"src="img/ru.png">
            <img alt="image" class="img"src="img/a.png">
        </div>


        <div class="mondai">
            <img alt="image" class="img"src="img/ne.png">
            <img alt="image" class="img"src="img/nn.png">
        </div>

        <div class="mondai">
            <img alt="image" class="img"src="img/re.png">
            <img alt="image" class="img"src="img/o.png">
            <img alt="image" class="img"src="img/ri.png">
            <img alt="image" class="img"src="img/o.png">
            <img alt="image" class="img"src="img/sa.png">
            <img alt="image" class="img"src="img/nn.png">
        </div>

        <div class="mondai">
            <img alt="image" class="img"src="img/ha.png">
            <img alt="image" class="img"src="img/”.png">
            <img alt="image" class="img"src="img/nn.png">
            <img alt="image" class="img"src="img/si.png">
            <img alt="image" class="img"src="img/”.png">
            <img alt="image" class="img"src="img/ー.png">
            <img alt="image" class="img"src="img/ka.png">
            <img alt="image" class="img"src="img/”.png">
            <img alt="image" class="img"src="img/mu.png">
        </div>

        <div class="mondai">
            <img alt="image" class="img"src="img/to.png">
            <img alt="image" class="img-small"src="img/tu.png">
            <img alt="image" class="img"src="img/hu.png">
            <img alt="image" class="img"src="img/。.png">
            <img alt="image" class="img"src="img/no.png">
            <img alt="image" class="img"src="img/ro.png">
            <img alt="image" class="img"src="img/ko.png">
            <img alt="image" class="img"src="img/”.png">
            <img alt="image" class="img"src="img/o.png">
            <img alt="image" class="img"src="img/si.png">
            <img alt="image" class="img"src="img/te.png">
            <img alt="image" class="img"src="img/mi.png">
            <img alt="image" class="img"src="img/te.png">
        </div>

    </main>
</body>
</html>