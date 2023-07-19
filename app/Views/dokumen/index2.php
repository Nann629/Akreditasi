<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $judul; ?> </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
                <li class="breadcrumb-item active"><?= $judul; ?> </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <!-- Page Heading -->
    <?php if (session()->get('message')) : ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            Dokumen Berhasil <?= session()->getFlashdata('message') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
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
                                    <th>Judul</th>
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
                                        <td><?= $row['code_kriteria']; ?><?= $row['keterangan_kriteria']; ?></td>
                                        <td><?= $row['code_sub']; ?><?= $row['keterangan']; ?></td>
                                        <td>
                                            <div class="">
                                                <a class="icon" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <!-- <li class="dropdown-header text-start">
                                                            <h6>Pilih</h6>
                                                        </li> -->

                                                    <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#modalUbah" id="edit-dokumen" class="btn btn-sm btn-warning" data-id="<?= $row['id']; ?>" data-judul="<?= $row['judul']; ?>" data-code_kriteria="<?= $row['code_kriteria']; ?>" data-code_sub="<?= $row['code_sub']; ?>">
                                                            <i class="ri-edit-2-fill">Edit</i></a>
                                                    </li>
                                                    <li> <a href="/Dokumen/hapus/<?= $row['id']; ?>" class="dropdown-item"> <i class="bi bi-trash">Hapus</i> </a>
                                                        <!-- <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#disablebackdrop">
                                                            <i class="ri-delete-bin-5-line">Hapus</i>
                                                        </a> -->
                                                    </li>
                                                    <li><a class="dropdown-item" href="/Dokumen/pdf">
                                                            <i class="bi bi-file-earmark-arrow-down">Unduh</i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal LIHAT Data Dokumen -->
                                    <div class="modal fade" id="lihat<?= $row['id']; ?>" tabindex="-1" data-bs-backdrop="false" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog" role="Dokumen">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <iframe height="500" width="495" src="<?= 'asset/assets/img/profile/' . $row['image']; ?>"></iframe>
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
                        <input type="file" name="image" class="dropify" data-height="100">
                    </div>
                    <br>
                    <div class="form-group mb-2">
                        <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan judul">
                    </div>
                    <br>
                    <div class="form-group mb-2">
                        <select name="code_kriteria" id="code_kriteria" class="form-control">
                            <option value="" hidden>pilih</option>
                            <?php foreach ($kriteria->getResultArray() as $row) : ?>
                                <option value="<?= $row['code_kriteria']; ?>"><?= $row['code_kriteria']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <br>
                    </div>
                    <br>
                    <div class="form-group mb-2">
                        <select name="code_sub" id="code_sub" class="form-control">
                            <option value="">pilih</option>
                            <?php foreach ($sub->getResultArray() as $row) : ?>
                                <option value="<?= $row['code']; ?>"><?= $row['code']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <br>
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
                        <input type="file" name="image" class="dropify" data-height="100">
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan judul">
                    </div>
                    <div class="form-group mb-2">
                        <select name="code_kriteria" id="code_kriteria" class="form-control">
                            <option value="">pilih</option>
                            <?php foreach ($kriteria->getResultArray() as $row) : ?>
                                <option value="<?= $row['code_kriteria']; ?>"><?= $row['code_kriteria']; ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <select name="code_sub" id="code_sub" class="form-control">
                            <option value="">pilih</option>
                            <?php foreach ($sub->getResultArray() as $row) : ?>
                                <option value="<?= $row['code']; ?>"><?= $row['code']; ?></option>
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
                <a href="" class="btn btn-danger">Yakin</a>
            </div>
        </div>
    </div>
</div><!-- End Modal Hapus-->
<!-- End Modal Hapus-->