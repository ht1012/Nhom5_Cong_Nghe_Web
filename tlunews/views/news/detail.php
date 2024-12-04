<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết tin tức</title>
</head>

<body>
    <h1><?= htmlspecialchars($newsItem['title']) ?></h1>
    <p><strong>Danh mục:</strong> <?= htmlspecialchars($newsItem['category_name']) ?></p>
    <p><?= nl2br(htmlspecialchars($newsItem['content'])) ?></p>
    <?php if ($newsItem['image']): ?>
    <img src="image" alt="">
    <?php endif;?>
    <p><em>Ngày đăng: <?= $newsItem['created_at'] ?></em></p>
    <a href="index.php">Quay lại danh sách tin tức</a>
</body>

</html>