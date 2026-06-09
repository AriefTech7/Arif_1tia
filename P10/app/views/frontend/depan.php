<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita - Masalah Tempo</title>
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="public/assets/css/style.css"> -->
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4 shadow-sm">
        <div class="container">
            <a href="?aksi=frontend" class="navbar-brand fw-bold" href="?aksi=frontend">
                <i class="bi bi-newspaper"></i> Masalah Tempo
            </a>
            <div>
                <?php if(isset($_SESSION['login'])):?>
                <a href="?aksi=dashboard" class="btn btn-success">Masuk Ke Dashboard</a><?php else: ?>
                <a href="?aksi=login" class="btn btn-light btn-sm">Login Admin</a><?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="container pb-5">
        <h2 class="mb-4">Berita Terbaru</h2>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
            <?php while($row = mysqli_fetch_assoc($berita)):?>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="public/uploads/<?= $row['foto']; ?>"
                        class="card-img-top" alt="<?= $row['judul']; ?>"
                        style="height: 200px; object-fit: cover;">

                        <div class="card-body">
                            <small class="text-muted d-block mb-2">
                                <i class="bi bi-calendar3"></i> <?= date('d M Y', strtotime($row['tanggal'])) ?>
                            </small>
                            <h5 class="card-title fw-bold"><?= $row['judul']; ?></h5>
                            <p class="card-text text-secondary">
                                <?= substr($row['deskripsi'],0,90); ?>
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-3">
                            <a href="?aksi=berita&id=<?= $row['id']; ?>" class="btn btn-outline-primary w-100">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endwhile;?>
        </div>
    </div>
    <script src="public/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>