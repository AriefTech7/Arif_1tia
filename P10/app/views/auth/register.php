<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MasalahTempo authentication page">
    <title>Login | MasalahTempo</title>


    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>


<body class="auth-body">
    <button class="icon-button theme-toggle auth-theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
        <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
    </button>
    <main class="auth-page">
        <section class="auth-card">
            <a class="auth-brand" href="index.php">
                <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
                <span>
                    <strong>MasalahTempo</strong>
                    <small>Sign in to your admin workspace.</small>
                </span>
            </a>

            <div class="auth-visual">
                <img src="public/assets/images/png/dasher-ui-bootstrap-5.jpg" alt="MasalahTempo dashboard interface">
            </div>

            <form action="?aksi=prosesRegister" method="POST" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="blablabla@email.com" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap anda" required>

                </div>
                <div class="mb-3">
                    <label class="form-label">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" placeholder="Masukkan jabatana anda" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button class="btn btn-primary w-100" type="submit">
                    <i class="bi bi-box-arrow-in-right" aria-hidden="true"></i> Create Account
                </button>
            </form>
        </section>
    </main>


    <script src="public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/js/main.js"></script>
</body>

</html>