<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $judul; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="asset1/assets/img/favicon.png" rel="icon">
    <link href="asset1/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="asset1/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset1/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="asset1/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="asset1/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="asset1/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="asset1/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="asset1/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="asset1/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="asset1/asset1s/img/logo.png" alt="">
                <span class="d-none d-lg-block">SMANTRIK</span>
            </a>
            <!-- <i class="bi bi-list toggle-sidebar-btn"></i> -->
        </div><!-- End Logo -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link collapsed" href="<?= base_url('auth/login'); ?>">
                        <span>Login</span>
                        <i class="bi bi-question-circle"></i>
                    </a>
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <!-- Default Tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false" tabindex="-1">SMANTRIK</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Semua Dokumen</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false" tabindex="-1">Tentang</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="myTabContent">
                            <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="col-lg-12">
                                    <div class="row">

                                    </div>
                                </div>
                                <div class="col-lg-15">
                                    <div class="row">
                                        <!-- isi nya -->
                                        <div class="col-xxl-4 col-md-4">
                                            <div class="card info-card sales-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Dokumen <span>| Today</span></h5>

                                                    <div class="d-flex align-items-center">
                                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-book"></i>
                                                        </div>
                                                        <div class="ps-3">
                                                            <h6>145</h6>
                                                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-md-4">
                                            <div class="card info-card revenue-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Pengunjung <span>| This Month</span></h5>

                                                    <div class="d-flex align-items-center">
                                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-people"></i>
                                                        </div>
                                                        <div class="ps-3">
                                                            <h6>$3,264</h6>
                                                            <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><!-- End Revenue Card -->
                                        <!-- Customers Card -->
                                        <div class="col-xxl-4 col-md-4">
                                            <div class="card info-card customers-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Donwnload <span>| This Year</span></h5>

                                                    <div class="d-flex align-items-center">
                                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-donwload"></i>
                                                        </div>
                                                        <div class="ps-3">
                                                            <h6>1244</h6>
                                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div><!-- End Customers Card -->
                                        <div class="col-xxl-4 col-md-4">
                                            <div class="card info-card customers-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">New <span>| This Year</span></h5>

                                                    <div class="d-flex align-items-center">
                                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-currency-dollar"></i>
                                                        </div>
                                                        <div class="ps-3">
                                                            <h6>1244</h6>
                                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div><!-- End Customers Card -->
                                    </div>
                                </div>
                            </div>
                            <!-- isi nya -->

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <!-- isi     -->
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">DOCUMENT</h5>
                                                <?php foreach ($web->getResultArray() as $row) : ?>
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?= $row['code_kriteria']; ?>" aria-expanded="false" aria-controls="collapseOne">
                                                                    <?= $row['code_kriteria']; ?>.</strong> <?= $row['keterangan_kriteria']; ?>
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne<?= $row['code_kriteria']; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <strong><?= $row['sub_id']; ?>.
                                                                        <br>
                                                                        <strong><?= $row['judul']; ?>.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- tutup isi -->
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <br>
                                STIMIK SEPULUH NOPEMBER JAYAPURA
                            </div>
                        </div><!-- End Default Tabs -->

                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>SMANTRIK</span></strong>. JAYAPURA
        </div>
        <div class="credits">

            Designed by <a href="">Drscript</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="asset1/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="asset1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset1/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="asset1/assets/vendor/echarts/echarts.min.js"></script>
    <script src="asset1/assets/vendor/quill/quill.min.js"></script>
    <script src="asset1/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="asset1/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="asset1/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="asset1/assets/js/main.js"></script>
    <style type="text/css">
        table.scroll {
            width: 420px;
            border: 1px #a9c6c9 solid;
        }

        table.scroll thead {
            display: table;
            width: 100%;
            background-color: salmon;
        }

        table.scroll tbody {
            display: block;
            height: 100px;
            overflow: auto;
            float: left;
            width: 100%;
        }

        table.scroll tbody tr {
            display: table;
            width: 100%;
        }

        table.scroll th,
        td {
            width: 33%;
            padding: 8px;
        }
    </style>
</body>

</html>