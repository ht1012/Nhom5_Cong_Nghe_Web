<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết tin tức</title>
</head>

<body>
    <h1><?= htmlspecialchars($newsItem['title']) ?></h1>
<<<<<<< HEAD
    <p><?= htmlspecialchars($newsItem['content']) ?></p>
    <p>Danh mục: <?= htmlspecialchars($newsItem['category_name'] ?? 'Không rõ') ?></p>
    <img src="<?= htmlspecialchars($newsItem['image']) ?>" alt="<?= htmlspecialchars($newsItem['title']) ?>" />
    <a href="index.php?action=index">Trở lại danh sách</a>
=======
    <p><strong>Danh mục:</strong> <?= htmlspecialchars($newsItem['category_name']) ?></p>
    <p><?= nl2br(htmlspecialchars($newsItem['content'])) ?></p>
    <?php if ($newsItem['image']): ?>
    <img src="image" alt="">
    <?php endif;?>
    <p><em>Ngày đăng: <?= $newsItem['created_at'] ?></em></p>
    <a href="index.php">Quay lại danh sách tin tức</a>
>>>>>>> 9eea589aec53b9883977076754fa199ed9c0574b
</body>

</html>