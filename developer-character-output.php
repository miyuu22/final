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
    <?php
        $pdo = new PDO($connect, USER, PASS);
        $str = $pdo->prepare('select * from hh where chara_id = ?');
            $str->execute([$_POST['chara_id']]);
            if ($str->rowCount() > 0) {
                echo '<p class="p9">キャラIDがすでに登録されています。</p>';
            } else {
                $sql = $pdo->prepare('insert into hh(chara_id,chara_name,chara_attribute,kate_id,chara_img) values(?,?,?,?,?)');
                // if (!preg_match('/^\d+$/', $_POST['chara_id'])) {
                //     echo 'キャラIDを整数で入力してください。';
                // } else if (empty($_POST['chara_name'])) {
                //     echo 'キャラ名を入力してください。';
                // } else if (!preg_match('/^[0-9]+$/', $_POST['price'])) {
                //     echo '商品価格を整数で入力してください。';
                $sql->execute([$_POST['chara_id'], $_POST['chara_name'], $_POST['chara_attribute'], $_POST['kate_id'], $_POST['chara_img']]);
                //     echo '<font color="red">追加に成功!</font>';
                // } else {
                //     echo '<font color="red">追加に失敗!</font>';
                // }
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
    <p>
    <form action="developer-character.php" method="post">
        <button type="submit">戻る</button>
    </form>
    </p>
    </main>
</body>
</html>