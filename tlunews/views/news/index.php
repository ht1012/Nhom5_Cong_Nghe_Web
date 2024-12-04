<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tin tức</title>
<<<<<<< HEAD
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
=======
>>>>>>> 9eea589aec53b9883977076754fa199ed9c0574b
</head>

<body>
    <h1>Danh sách tin tức</h1>
<<<<<<< HEAD
    <div class="row">
        <?php foreach ($news as $item): ?>
        <div class="col-md-4">
            <div class="card">
                <img src="<?= $item['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $item['title'] ?></h5>
                    <a href="index.php?action=detail&id=<?= $item['id'] ?>" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
=======
    <ul>
        <?php foreach ($newsList as $news): ?>
            <li>
                <a href="index.php?action=detail&id=<?= $news['id'] ?>">
                    <?= htmlspecialchars($news['title']) ?> -
                    (<?= htmlspecialchars($news['category_name']) ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
>>>>>>> 9eea589aec53b9883977076754fa199ed9c0574b
</body>

</html>