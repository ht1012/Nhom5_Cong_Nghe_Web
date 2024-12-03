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
</body>

</html>