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
            <p class="p8">カテゴリ追加</p>
        </div>
    </header>
    <main>
    <?php
        $pdo = new PDO($connect, USER, PASS);
        $str = $pdo->prepare('select * from kate where kate_id = ?');
            $str->execute([$_POST['kate_id']]);
            if ($str->rowCount() > 0) {
                echo '<p class="p9">カテゴリIDがすでに登録されています。</p>';
            } else {
                $sql = $pdo->prepare('insert into kate(kate_id,category) values(?,?)');
                $sql->execute([$_POST['kate_id'], $_POST['category']]);
                echo '<p class="p9">選択することはできませんが、DBにカテゴリは追加されています！</p>';
            }
    ?>

    <table>
            <tr><th>カテゴリID</th><th>カテゴリ名</th></tr>
    <?php
        foreach ($pdo->query('select * from kate') as $row) {
            echo '<tr>';
            echo '<td>', $row['kate_id'], '</td>';
            echo '<td>', $row['category'], '</td>';
            echo '</tr>';
            echo "\n";
        }
    ?>
    </table>
    <p>
    <form action="developer-kate.php" method="post">
        <button type="submit">戻る</button>
    </form>
    </p>
    </main>
</body>
</html>