<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kokoroe</title>
</head>
<body>
    <p>
        input:
        <?php if ('' == $_GET['input']) : ?>
            <span style="color: red;">文字列が入力されていません</span>
        <?php else : ?>
            <span><?php echo htmlspecialchars($_GET['input']); ?></span>
        <?php endif ?>
    </p>

    <a href="/">戻る</a>
</body>
</html>
