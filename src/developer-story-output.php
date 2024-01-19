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
            <p class="p8">ストーリー変更</p>
        </div>
    </header>
    <main>
    <?php
        $pdo = new PDO($connect, USER, PASS);
        $str = $pdo->prepare('select * from story where id = ?');
            $str->execute([$_POST['id']]);
            if ($str->rowCount() > 0) {
                echo '<p class="p9">ストーリーIDがすでに登録されています。</p>';
            } else {
                $sql = $pdo->prepare('insert into story(id,title,episode,image) values(?,?,?,?)');
                $sql->execute([$_POST['id'], $_POST['title'], $_POST['episode'], $_POST['image']]);
            }
    ?>

    <table>
            <tr><th>ストーリーID</th><th>タイトル</th><th>エピソード</th><th>画像名</th></tr>
    <?php
        foreach ($pdo->query('select * from story') as $row) {
            echo '<tr>';
            echo '<td>', $row['id'], '</td>';
            echo '<td>', $row['title'], '</td>';
            echo '<td>', $row['episode'], '</td>';
            echo '<td>', $row['image'], '</td>';
            echo '</tr>';
            echo "\n";
        }
    ?>
    </table>
    <p>
    <form action="developer-story.php" method="post">
        <button type="submit">戻る</button>
    </form>
    </p>
    </main>
</body>
</html>