<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">

    <!-- leaflet -->
    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="<?= base_url() ?>" class="navbar-brand sidebar-gone-hide text-center">Waspada Corona</a>
                <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                <div class="nav-collapse">
                    <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item<?= active_link('pantau'); ?>">
                            <a href="<?= base_url() ?>" class="nav-link">Indonesia</a>
                        </li>
                        <li class="nav-item<?= active_link('seluruh_dunia'); ?>">
                            <a href="<?= base_url('seluruh-dunia') ?>" class="nav-link">Seluruh Dunia</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="navbar navbar-secondary navbar-expand-lg">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>API oleh</span></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="https://api.kawalcorona.com/" class="nav-link">Kawalcorona.com</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://dekontaminasi.com/api/id/covid19/hospitals" class="nav-link">Dekontaminasi.com</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://data.covid19.go.id/public/api/update.json" class="nav-link">Covid19.go.id</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>