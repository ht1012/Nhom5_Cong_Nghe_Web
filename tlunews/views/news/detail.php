<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết tin tức</title>
</head>

<body>
    <h1><?= htmlspecialchars($newsItem['category_name']) ?></h1>
    <img src="<?= htmlspecialchars($newsItem['image']) ?>" alt="<?= htmlspecialchars($newsItem['title']) ?>" />
    <p><?= nl2br(htmlspecialchars($newsItem['content'])) ?></p>
    <a href="index.php?action=index">Trở lại danh sách</a>
</body>

</html>