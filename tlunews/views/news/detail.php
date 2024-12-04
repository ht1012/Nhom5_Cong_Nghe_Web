<<<<<<< HEAD
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

    <p><strong>Danh mục:</strong> <?= htmlspecialchars($newsItem['category_name']) ?></p>
    <p><?= nl2br(htmlspecialchars($newsItem['content'])) ?></p>
    <?php if ($newsItem['image']): ?>
        <img src="image" alt="">
    <?php endif; ?>
    <p><em>Ngày đăng: <?= $newsItem['created_at'] ?></em></p>
    <a href="index.php">Quay lại danh sách tin tức</a>

</body>

</html>
=======
<?php require_once 'views/layouts/header.php'; ?>
<div class="container mt-5">
    <h2><?= $newsItem['title'] ?></h2>
    <p><?= $newsItem['content'] ?></p>
    <img src="assets/images/<?= $newsItem['image'] ?>" alt="<?= $newsItem['title'] ?>" style="width: 100%; height: auto;">
    <p><strong>Danh mục:</strong> <?= $newsItem['category_name'] ?></p>
    <a href="index.php?controller=home&action=index" class="btn btn-secondary">Quay lại</a>
</div>

<?php require_once 'views/layouts/footer.php'; ?>
>>>>>>> crud_admin
