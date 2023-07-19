<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $judul; ?> </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('dokumen'); ?>"><?= $judul; ?> </a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <!-- Page Heading -->
    <div class="swal" data-swal="<?= session()->get('message'); ?>"></div>

    <div class="row">
        <div class="col-md-8">
            <?php
            if (session()->get('err')) {
                echo "<div class='alert alert-danger p-0 pt-2' role='alert'>" . session()->get('err') . "</div>";
                session()->remove('err');
            }
            ?>
        </div>
    </div>
    <section class="section dashboard">
        <div class="row">
            <!-- Recent Sales -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="filter">
                        <button type="button" class="badge bg-success" data-bs-toggle="modal" data-bs-target="#modalTambah">
                            <i class="ri-add-fill">Tambah Data</i>
                        </button>
                        <a class="icon" href="#" data-bs-toggle="dropdown"></a>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title"><?= $judul; ?><span>| Data</span></h5>
                        <!-- Disabled Backdrop Modal -->
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>File</th>
                                    <th>Nama File</th>
                                    <th>Kriteria</th>
                                    <th>Sub</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($Dokumen->getResultArray() as $row) : ?>
                                    <tr>
                                        <td scope="row"><?= $i++; ?></td>
                                        <td><a type="button" data-bs-toggle="modal" data-bs-target="#lihat<?= $row['id']; ?>"><i class="bx bxs-file-pdf"></i></a></td>
                                        <td><?= $row['judul']; ?></td>

                                        <td><?= $row['code_kriteria']; ?></td>
                                        <td><?= $row['code']; ?></td>
                                        <td> <span type="button" class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#modalUbah" id="edit-dokumen" class="btn btn-sm btn-warning" data-id="<?= $row['id']; ?>" data-judul="<?= $row['judul']; ?>" data-kriteria_id="<?= $row['kriteria_id']; ?>" data-sub_id="<?= $row['sub_id']; ?>">
                                                <i class="ri-edit-2-fill">Edit</i></span>
                                            <span type="button" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#disablebackdrop">
                                                <i class="bi bi-trash">Hapus</i>
                                            </span>
                                            <a type="button" class="badge bg-info" href="<?= 'asset/assets/img/dokumen/' . $row['image']; ?>">
                                                <i class="bi bi-file-earmark-arrow-down">Unduh</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Modal LIHAT Data Dokumen -->
                                    <div class="modal fade" id="lihat<?= $row['id']; ?>" tabindex="-1" data-bs-backdrop="false" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog" role="Dokumen">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5><?= $row['judul']; ?></h5>
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
            </div>
        </div>
    </section>
</main>

<!-- Modal Box Tambah Data Dokumen -->
<div class="modal fade" id="modalTambah" tabindex="-1" data-bs-backdrop="false" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="Dokumen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah <?= $judul; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Dokumen/tambah'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-2">
                        <input type="file" name="image" class="dropify" data-height="100" required>
                    </div>
                    <br>
                    <div class="form-group mb-2">
                        <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan Nama File" required>
                    </div>
                    <br>
                    <div class="form-group mb-2">
                        <select name="kriteria_id" id="kriteria_id" class="form-control">
                            <option value="" hidden>Pilih Kriteria</option>
                            <?php foreach ($kriteria->getResultArray() as $row) : ?>
                                <option value="<?= $row['id']; ?>"><?= $row['code_kriteria']; ?>. <?= $row['keterangan_kriteria']; ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <br>
                    <div class="form-group mb-2">
                        <select class="form-select" name="sub_id" id="sub_id" multiple="" aria-label="multiple select example">
                            <option disabled>Pilih Sub</option>
                            <?php foreach ($sub->getResultArray() as $row) : ?>
                                <option value="<?= $row['id']; ?>"><?= $row['code']; ?>. <?= $row['keterangan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="tambah" class="btn btn-success">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Box Ubah Data Dokumen -->
<div class="modal fade" id="modalUbah" tabindex="-1" data-bs-backdrop="false" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="Dokumen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah <?= $judul; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Dokumen/ubah'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group mb-2">
                        <input type="file" name="image" class="dropify" data-height="100" required>
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan Nama File">
                    </div>
                    <div class="form-group mb-2">
                        <select name="kriteria_id" id="kriteria_id" class="form-control">
                            <option value="">pilih</option>
                            <?php foreach ($kriteria->getResultArray() as $row) : ?>
                                <option value="<?= $row['id']; ?>"><?= $row['code_kriteria']; ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <select name="sub_id" id="sub_id" class="form-control">
                            <option value="">pilih</option>
                            <?php foreach ($sub->getResultArray() as $row) : ?>
                                <option value="<?= $row['id']; ?>"><?= $row['code']; ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Hapus -->
<div class="modal fade" id="disablebackdrop" tabindex="-1" data-bs-backdrop="false" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="/Dokumen/hapus/<?= $row['id']; ?>" class="btn btn-danger">Yakin</a>
            </div>
        </div>
    </div>
</div><!-- End Modal Hapus-->
<!-- Donwload-->
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