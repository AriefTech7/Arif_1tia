<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita - Masalah Tempo</title>
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="public/assets/css/style.css"> -->
    <style>
        .font-helvetica {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
    </style>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4 shadow-sm">
        <div class="container">
            <a href="?aksi=berita" class="navbar-brand fw-bold" href="?aksi=berita">
                <i class="bi bi-newspaper"></i> Masalah Tempo
            </a>
            <div>
                <a href="?aksi=frontend" class="btn btn-light btn-sm">Back</a>
            </div>
        </div>
    </nav>
    <div class="container pb-5">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="ratio ratio-16x9">
                        <img src="/Arif_1tia/P10/public/uploads/<?= $berita['foto']; ?>" class="img-thumbnail img-fluid object-fit-cover">
                    </div>
                </div>
            </div>
        </div>

        <div class="card" style="margin-top: 30px; ">
            <div class="card-body">
                <h2 class="fw-bolder font-helvetiva"><?= $berita['judul'] ?></h2>
                <p class="card-text"><?= $berita['deskripsi'] ?></p>
            </div>
        </div>
    </div>
    <script src="public/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>