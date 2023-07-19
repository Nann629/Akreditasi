<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data <?= $judul; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('sub') ?>"><?= $judul ?></a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <?php if (session()->get('message')) : ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            Data Sub Berhasil <?= session()->getFlashdata('message') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-8">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Data <?= $judul; ?></h5>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($sub->getResultArray() as $row) : ?>
                                    <tr>
                                        <td scope="row"><?= $i;  ?></td>
                                        <td><?= $row['code'] ?></td>
                                        <td><?= $row['keterangan'] ?></td>
                                        <td>
                                            <span type="button" class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#editsub" id="edit-sub" data-id="<?= $row['id']; ?>" data-code="<?= $row['code']; ?>" data-keterangan="<?= $row['keterangan']; ?>">
                                                <i class="bi bi-pencil-fill"></i>Edit</span>
                                            <span type="button" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapussub"> <i class="bi bi-trash"></i> Hapus</span>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tambah -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Tambah</h5>
                        <div class="card-body">
                            <form action=" <?= base_url('sub/tambah'); ?> " method="post">
                                <div class="col-12">
                                    <label for="code" class="form-label">Code</label>
                                    <input type="text" class="form-control" name="code" id="code" placeholder="Masukan Code..." required>
                                </div>
                                <div class="col-12">
                                    <label for="keterangan" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukan keterangan..." required>
                                </div>
                                <br>
                                <div class="text-center">
                                    <button type="submit" name="tambah" class="btn btn-success">Simpan</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hapus -->
            <div class="modal fade" id="hapussub" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Hapus Data</h5>
                            <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Anda Yakin Menghapus Data
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="/sub/hapus/<?= $row['id']; ?>" class="btn btn-primary">Ya</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit -->
            <div class="modal fade" id="editsub" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Data</h5>
                            <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('sub/ubah'); ?>" method="post">
                                <input type="hidden" name="id" id="id">
                                <div class="col-12">
                                    <label for="code" class="form-label">Code</label>
                                    <input type="text" class="form-control" name="code" id="code" placeholder="Masukan Code" value="<?= $row['code'] ?>">
                                </div>
                                <div class=" col-12">
                                    <label for="keterangan" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukan keterangan" value="<?= $row['keterangan'] ?>">
                                </div>
                                <br>
                                <div class=" text-center">
                                    <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


</main>
<!-- Button trigger modal -->


<!-- Modal -->