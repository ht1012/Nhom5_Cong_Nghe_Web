<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết tin tức</title>
</head>

<body>
    <h1><?= htmlspecialchars($newsItem['title']) ?></h1>
    <p><?= htmlspecialchars($newsItem['content']) ?></p>
    <p>Danh mục: <?= htmlspecialchars($newsItem['category_name'] ?? 'Không rõ') ?></p>
    <img src="<?= htmlspecialchars($newsItem['image']) ?>" alt="<?= htmlspecialchars($newsItem['title']) ?>" />
    <a href="index.php?action=index">Trở lại danh sách</a>
</body>

</html>