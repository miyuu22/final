<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/character.css">
    <script src="js/character.js" defer></script>
</head>
<body>
    <header>
        <div class="header">
                    <img src="img/logo.png" class="logo">
            <div class="item">
                <a href="top.html" class="a2">トップ</a>
                <a href="character.php" class="a1">キャラクター</a>
                <a href="story.php" class="a2">ストーリー</a>
                <a href="keyword.html" class="a2">用語解説</a>
                <a href="h-letter.php" class="a2">ハンター文字</a>
                <a href="correlation.html" class="a2">相関図</a>
                <a href="staff.html" class="a2">スタッフ・キャスト</a>
                <a href="music.html" class="a2">音楽</a>
            </div>
        </div>
    </header>
    <main>
        <div class="msg-flex">
                <p class="cha-p1">CHARACTER</p>
        </div>
        
        <select name="kate" class="kate" id="kate" onchange="optionChange();">
            <option value="0">主要キャラ</option>
            <option value="1">ハンター試験編</option>
            <option value="2">ゾルディック家編</option>
        </select>

        <div class="main">
        <?php
        $pdo = new PDO($connect,USER,PASS);
        $sql=$pdo->query('select * from hh where kate_id=0');
            echo '<div class="list1" id="Box1">';
            foreach($sql as $row){
                echo '<div class="ul" id="ul">';
                echo '<div><img alt="image" class="img"src="img/',$row['chara_img'],'"></div>';
                echo '<div class="name">',$row['chara_name'];
                echo '</div></div>';
            }
            echo '</div>';

        $sql=$pdo->query('select * from hh where kate_id=1');
            echo '<div class="list2" id="Box2">';
            foreach($sql as $row){
                echo '<div class="ul" id="ul">';
                echo '<div><img alt="image" class="img"src="img/',$row['chara_img'],'"></div>';
                echo '<div class="name">',$row['chara_name'];
                echo '</div></div>';
            }
            echo '</div>';

        $sql=$pdo->query('select * from hh where kate_id=2');
        echo '<div class="list3" id="Box3">';
        foreach($sql as $row){
            echo '<div class="ul" id="ul">';
            echo '<div><img alt="image" class="img"src="img/',$row['chara_img'],'"></div>';
            echo '<div class="name">',$row['chara_name'];
            echo '</div></div>';
        }
            echo '</div>';

    ?> 

</div>
        <a href="character-ryodan.html" class="example">
            <button class="ryodan-button"><img src="img/ryodan.png" class="ryodan-img" id="ryodan"></button>
        </a>
       
    </main>
</body>
</html>