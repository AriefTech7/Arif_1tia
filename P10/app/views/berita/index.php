<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="adminHMD professional admin dashboard template">
    <title>Tables | adminHMD</title>

    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>

<body>
    <div class="admin-shell">
        <div class="sidebar-backdrop" data-sidebar-close></div>

        <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
            <div class="sidebar-header">
                <a class="brand-mark" href="index.html" aria-label="adminHMD dashboard">
                    <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
                    <span class="brand-copy">
                        <span class="brand-title">adminHMD</span>
                        <span class="brand-subtitle">Admin Template</span>
                    </span>
                </a>
            </div>

            <nav class="sidebar-nav">
                <a class="nav-link" href="index.html">
                    <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
                    <span class="nav-text">Dashboard</span>
                </a>
                <a class="nav-link" href="users.html">
                    <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                    <span class="nav-text">Users</span>
                </a>
                <a class="nav-link" href="add-user.html">
                    <span class="nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                    <span class="nav-text">Add User</span>
                </a>
                <a class="nav-link" href="profile.html">
                    <span class="nav-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
                    <span class="nav-text">Profile</span>
                </a>
                <a class="nav-link" href="charts.html">
                    <span class="nav-icon"><i class="bi bi-bar-chart-line" aria-hidden="true"></i></span>
                    <span class="nav-text">Charts</span>
                </a>
                <a class="nav-link active" href="tables.html" aria-current="page">
                    <span class="nav-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
                    <span class="nav-text">Tables</span>
                </a>
                <a class="nav-link" href="forms.html">
                    <span class="nav-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
                    <span class="nav-text">Forms</span>
                </a>
                <a class="nav-link" href="components.html">
                    <span class="nav-icon"><i class="bi bi-grid-3x3-gap" aria-hidden="true"></i></span>
                    <span class="nav-text">Components</span>
                </a>
                <a class="nav-link" href="alerts.html">
                    <span class="nav-icon"><i class="bi bi-exclamation-triangle" aria-hidden="true"></i></span>
                    <span class="nav-text">Alerts</span>
                </a>
                <a class="nav-link" href="modals.html">
                    <span class="nav-icon"><i class="bi bi-window-stack" aria-hidden="true"></i></span>
                    <span class="nav-text">Modals</span>
                </a>
                <a class="nav-link" href="settings.html">
                    <span class="nav-icon"><i class="bi bi-gear" aria-hidden="true"></i></span>
                    <span class="nav-text">Settings</span>
                </a>
                <a class="nav-link" href="blank.html">
                    <span class="nav-icon"><i class="bi bi-file-earmark" aria-hidden="true"></i></span>
                    <span class="nav-text">Blank Page</span>
                </a>
            </nav>

            <div class="sidebar-user">
                <img class="avatar-img avatar-md sidebar-user-avatar" src="public/assets/images/avatar/avatar.jpg" alt="Admin Hasan">
                <strong>Admin Hasan</strong>
                <small>Active Workspace</small>
            </div>

            <div class="sidebar-footer">
                <span class="status-dot"></span>
                <span class="sidebar-footer-text">System running smoothly</span>
            </div>
        </aside>

        <div class="admin-main">
            <nav class="navbar admin-navbar navbar-expand bg-white">
                <div class="container-fluid px-3 px-lg-4">
                    <button class="sidebar-toggle" type="button" data-sidebar-toggle aria-controls="adminSidebar" aria-expanded="true" aria-label="Toggle sidebar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <form class="d-none d-md-flex ms-3 flex-grow-1" role="search">
                        <input class="form-control search-input" type="search" placeholder="Search users, orders, reports" aria-label="Search">
                    </form>

                    <div class="navbar-actions ms-auto">
                        <button class="icon-button theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
                            <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
                        </button>
                        <div class="dropdown">
                            <button class="icon-button" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Notifications">
                                <span class="notification-dot"></span>
                                <i class="bi bi-bell" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end notification-menu">
                                <div class="dropdown-header fw-bold text-body">Notifications</div>
                                <a class="dropdown-item" href="users.html">
                                    <span class="notification-title">New user registered</span>
                                    <span class="notification-time">4 minutes ago</span>
                                </a>
                                <a class="dropdown-item" href="charts.html">
                                    <span class="notification-title">Revenue target reached</span>
                                    <span class="notification-time">32 minutes ago</span>
                                </a>
                                <a class="dropdown-item" href="settings.html">
                                    <span class="notification-title">Security review completed</span>
                                    <span class="notification-time">1 hour ago</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="avatar-img avatar-sm" src="public/assets/images/avatar/avatar.jpg" alt="Admin Hasan">
                                <span class="profile-name d-none d-sm-inline">Admin Hasan</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="settings.html">Account settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="login.html">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <main class="dashboard-content">
                <div class="container-fluid px-3 px-lg-4 py-4">
                    <div class="page-heading">
                        <div class="page-heading-copy">
                            <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
                            <div>
                                <p class="eyebrow mb-1">Data</p>
                                <h1 class="h3 mb-1">Berita</h1>
                            </div>
                        </div>

                    </div>

                    <section class="panel">
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Table Berita</span></h2>
                            </div>
                            <div class="row g-7 text-center">
                                <div class="col-sm-6 col-md-4">
                                    <a href="?aksi=tambah" class="btn btn-primary">Tambah</a>
                                </div>
                                <div class="col-6 col-md-8">
                                    <input class="form-control form-control-sm table-search" type="search" placeholder="Search orders" data-table-search="ordersTable" aria-label="Search orders">
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle mb-0" id="ordersTable" data-searchable-table>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Foto</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($row = mysqli_fetch_assoc($berita)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row['judul']; ?></td>
                                            <td><?= $row['deskripsi']; ?></td>

                                            <td>
                                                <img
                                                    src="public/uploads/<?= $row['foto']; ?>"
                                                    width="100">
                                            </td>
                                            <td><?= $row['tanggal']; ?></td>
                                            <td><?= $row['tanggal']; ?></td>
                                            <td>
                                                <a href="?aksi=edit&id=<?= $row['id']; ?>"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="bi bi-trash"></i>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Apakah anda yakin ingin menghapus berita ini?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <a href="?aksi=hapus&id=<?php echo $row['id']; ?>">
                                                                    <button type="button" class="btn btn-primary">Are you sure?</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </main>

            <footer class="admin-footer">
                <div class="container-fluid px-3 px-lg-4">
                    <span>Copyright 2026 adminHMD. <br> Developed by <a target="_blank" class="fw-bold text-success" href="https://github.com/HasanMahmudDev">Md. Hasan Mahmud</a> • Distributed by <a target="_blank" class="fw-bold text-success" href="https://themewagon.com">ThemeWagon</a> </span>
                    <span>Professional dashboard template.</span>
                    <span>Responsive table examples.</span>
                </div>
            </footer>
        </div>
    </div>

    <script src="public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/js/main.js"></script>
</body>

</html>