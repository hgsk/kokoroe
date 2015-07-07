<?php

/**
 * 右辺と左辺を足す
 *
 * @param int $left_side  右辺
 * @param int $right_side 左辺
 * @return int 計算結果
 */
function add($left_side, $right_side) {
    return $left_side + $right_side;
}

?>
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
        <?php $result = add($_GET['left_side'], $_GET['right_side']); ?>
            <span><?php echo htmlspecialchars($result); ?></span>
        <?php endif ?>
    </p>

    <a href="/">戻る</a>
</body>
</html>
