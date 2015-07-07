<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kokoroe</title>
</head>
<body>
    <p>
        input:
        <?php if (!is_numeric($_GET['left_side']) or !is_numeric($_GET['right_side'])) : ?>
            <span style="color: red;">数値が入力されていません</span>
        <?php else : ?>
        <?php $result = $_GET['left_side'] + $_GET['right_side'] ?>
            <span><?php echo htmlspecialchars($result); ?></span>
        <?php endif ?>
    </p>

    <a href="/">戻る</a>
</body>
</html>
