<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Sistem Pakar Kerusakan Komputer</title>
    <link rel="icon" href="<?= base_url('assets/img/favicon.ico') ?>" type="image/gif" sizes="16x16">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/components.css') ?>">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/loading.css') ?>">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7dedc92fff.js" crossorigin="anonymous"></script>
</head>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">

                <div class="container">
                    <a href="<?= base_url('/'); ?>" class="navbar-brand sidebar-gone-hide">EXPERT-FIX-ME</a>
                    <div class="navbar-nav">
                        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                    </div>
                    <div class="nav-collapse">
                        <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <ul class="navbar-nav">
                            <li class="nav-item <?= $this->uri->segment('1') == ""?'active':''; ?>"><a href="<?= base_url('/'); ?>" class="nav-link">Beranda</a></li>
                            <li class="nav-item <?= $this->uri->segment('1') == "konsultasi"?'active':''; ?>"><a href="<?= base_url('/konsultasi'); ?>" class="nav-link">Diagnosa</a></li>
                            <li class="nav-item <?= $this->uri->segment('1') == "about"?'active':''; ?>"><a href="<?= base_url('/about'); ?>" class="nav-link">Tentang Kami</a></li>
                            <li class="nav-item" style="background-color: white; color: black; border-radius: 3px; margin-left: 1.2rem;"><a href="<?= base_url('/auth'); ?>" class="nav-link" style="color: black;">Login Admin</a></li>
                        </ul>
                    </div>
                </div>

            </nav>

            <!-- Main Content -->
            <div class="main-content">
                <?= $contents ?>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Made with <span style="color: red;">&hearts;</span> by AmbisTech Lite
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url('assets/js/stisla.js') ?>"></script>

    <!-- Template JS File -->
    <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>

</html>