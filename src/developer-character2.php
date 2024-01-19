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
                
            <p class="p9">削除する情報を選択↓</p>
        <table>
            <tr><th>キャラID</th><th>キャラ名</th><th>属性</th><th>カテゴリ</th><th>画像名</th></tr>
            <?php
                $pdo=new PDO($connect, USER, PASS);

                foreach ($pdo->query('select * from hh') as $row) {
                    echo '<form action="developer-character2-out.php" method="post">';
                    echo '<tr>';
                    echo '<input type = "hidden" name = "chara_id" value = "',$row['chara_id'],'">';
                    echo '<td>',$row['chara_id'],'</td>';
                    echo '<td>';
                    echo '<input type = "text" name = "chara_name" value = "',$row['chara_name'],'">';
                    echo '</td>';
                    echo '<td>';
                    echo '<input type = "text" name = "chara_attribute" value = "',$row['chara_attribute'],'">';
                    echo '</td>';
                    echo '<td>';
                    echo '<input type = "text" name = "kate_id" value = "',$row['kate_id'],'">';
                    echo '</td>';
                    echo '<td>';
                    echo '<input type = "text" name = "chara_img" value = "',$row['chara_img'],'">';
                    echo '</td>';
                    echo '<td><input type = "submit" value = "削除"></div>';
                    echo '</tr>';
                    echo '</form>';
                    echo "\n";
                }
            ?>
    </table>
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