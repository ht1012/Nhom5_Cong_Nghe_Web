<?php require_once 'views/layouts/header.php'; ?>
<form method="GET" action="detail.php">
        <input type="hidden" name="controller" value="home">
        <input type="hidden" name="action" value="search">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="keyword" placeholder="Nhập từ khóa tìm kiếm..." value="<?= $_GET['keyword'] ?? '' ?>">
            <button class="btn btn-primary" type="submit">Tìm kiếm</button>
        </div>
    </form>

<div class="container mt-5">
    <h2><?= $newsItem['title'] ?></h2>
    <p><?= $newsItem['content'] ?></p>
    <img src="assets/images/<?= $newsItem['image'] ?>" alt="<?= $newsItem['title'] ?>" style="width: 100%; height: auto;">
    <p><strong>Danh mục:</strong> <?= $newsItem['category_name'] ?></p>
    <a href="index.php?controller=home&action=index" class="btn btn-secondary">Quay lại</a>
</div>

<?php require_once 'views/layouts/footer.php'; ?>