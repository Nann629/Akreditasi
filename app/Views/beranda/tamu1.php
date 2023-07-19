<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $judul; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="asset1/assets/img/stimik.jpg" rel="icon">
    <!-- <link href="asset1/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

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
            <a href="/" class="logo d-flex align-items-center">
                <img src="asset1/assets/img/stimik.jpg" alt="">
                <span class="d-none d-lg-block"> SIASTIM</span>
            </a>
            <!-- <i class="bi bi-list toggle-sidebar-btn"></i> -->
        </div><!-- End Logo -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link collapsed" href="<?= base_url('auth/login'); ?>">
                        <span>Login</span>
                        <!-- <i class="bi bi-question-circle"></i> -->
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
                        <!-- ss -->
                        <h6 class="card-title"></h6>

                        <!-- Default Tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false" tabindex="-1"> SIASTIM</button>
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
                                <div class="col-lg-15">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">SELAMAT DATANG DI <span class="text-danger small pt-1 fw-bold">SIASTIM</span></h5>
                                                    <hr>
                                                    <span>SISTEM AKREDITASI ONLINE MANDIRI - STIMIK SEPULUH NOPEMBER JAYAPURA.</span>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- isi nya -->
                                        <div class="col-xxl-4 col-md-4">
                                            <div class="card info-card sales-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Dokumen</h5>

                                                    <div class="d-flex align-items-center">
                                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-book"></i>
                                                        </div>
                                                        <div class="ps-3">
                                                            <h6 class="text-primary small pt-1 fw-bold"><?= countData('dokumen'); ?></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-md-4">
                                            <div class="card info-card revenue-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Pengunjung</h5>

                                                    <div class="d-flex align-items-center">
                                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-people"></i>
                                                        </div>
                                                        <div class="ps-3">
                                                            <h6 class="text-success small pt-1 fw-bold"><?= countData('tbl_user'); ?></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><!-- End Revenue Card -->
                                        <!-- Customers Card -->
                                        <div class="col-xxl-4 col-md-4">
                                            <div class="card info-card customers-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Kriteria</h5>

                                                    <div class="d-flex align-items-center">
                                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-currency-dollar"></i>
                                                        </div>
                                                        <div class="ps-3">
                                                            <h6 class="text-danger small pt-1 fw-bold"><?= countData('kriteria'); ?></h6>
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
                                                <h5 class="card-title">DOKUMEN</h5>
                                                <p>Terdapat Semua Dokumen Dari Setiap <a href="" target="_blank">Kriteria</a> Silahkan Donwload <code>Dokumen</code> Dengan Menekan Button Donwload</p>

                                                <!-- Table with stripped rows -->
                                                <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                                    <div class="datatable-container">
                                                        <table class="table table-borderless datatable">
                                                            <thead>
                                                                <tr>
                                                                    <th>File</th>
                                                                    <th>Kriteria</th>
                                                                    <th>Sub</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($web->getResultArray() as $row) : ?>
                                                                    <tr>
                                                                        <td>
                                                                            <a type=" button" data-bs-toggle="modal" data-bs-target="#lihat<?= $row['id']; ?>">
                                                                                <img height="45" width="45" src="asset/assets/img/pdf.png"><?= $row['judul']; ?>
                                                                            </a>
                                                                        </td>
                                                                        <td><a class="card-title"><?= $row['code_kriteria']; ?></a>.<?= $row['keterangan_kriteria']; ?></td>
                                                                        <td><a class="card-title"><?= $row['code']; ?></a>.<?= $row['keterangan']; ?></td>
                                                                        <td><a type="button" href="<?= 'asset/assets/img/dokumen/' . $row['image']; ?>"><i class="ri-download-fill">donwload</i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- Modal LIHAT Data Dokumen -->
                                                                    <div class="modal fade" id="lihat<?= $row['id']; ?>" tabindex="-1" data-bs-backdrop="false" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog" role="Dokumen">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>

                                                                                <iframe height="500" width="495" src="<?= 'asset/assets/img/dokumen/' . $row['image']; ?>"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- End Table with stripped rows -->

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- tutup isi -->
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <br>
                                SIASTIM Adalah Sistem Akreditasi Online Mandiri Yang Difungsikan Untuk Memanajemen Data Secara Digital.
                            </div>
                        </div><!-- End Default Tabs -->

                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <?
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('content-Type: application/octet-stream');
        header("Content-Disposition: attachment; filename='.basename($file)");
        header("Expires: 0");
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Lenght: ' . filesize($file));
        readfile($file);
        exit;
    }
    ?>





    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>STIMIK SEPULUH NOPEMBER JAYAPURA</span></strong>
        </div>
        <div class="credits">

            Designed by <a text="" href="https://instagram.com/_muhammdakbar_?igshid=MzNlNGNkZWQ4Mg==">Drscript</a>
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
</body>

</html>