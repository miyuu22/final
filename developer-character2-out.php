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

        <?php
            $pdo=new PDO($connect, USER, PASS);
            $sql=$pdo->prepare('delete from hh where chara_id = ?');
                if($sql->execute([$_POST['chara_id']])){
                    echo '削除に成功しました';
                }else{
                    echo '削除に失敗しました';
                }
    
        ?>
    
                <table>
            <tr><th>キャラID</th><th>キャラ名</th><th>属性</th><th>カテゴリ</th><th>画像名</th></tr>
    <?php
        foreach ($pdo->query('select * from hh') as $row) {
            echo '<tr>';
            echo '<td>', $row['chara_id'], '</td>';
            echo '<td>', $row['chara_name'], '</td>';
            echo '<td>', $row['chara_attribute'], '</td>';
            echo '<td>', $row['kate_id'], '</td>';
            echo '<td>', $row['chara_img'], '</td>';
            echo '</tr>';
            echo "\n";
        }
    ?>
    </table>
            </div>
        </div>
        <p>
        <form action="developer-character2.php" method="post">
        <button type="submit">戻る</button>
    </form>
        </p>
    </main>
</body>
</html>