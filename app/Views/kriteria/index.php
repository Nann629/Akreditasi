<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data <?= $judul; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('kriteria') ?>"><?= $judul ?></a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <?php if (session()->get('message')) : ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            Data Kriteria Berhasil <?= session()->getFlashdata('message') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
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
                                    <th>No</th>
                                    <th>Code</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($kriteria->getResultArray() as $row) : ?>
                                    <tr>
                                        <td scope="row"><?= $i; ?></td>
                                        <td><?= $row['code_kriteria'] ?></td>
                                        <td><?= $row['keterangan_kriteria'] ?></td>
                                        <td>
                                            <span type="button" class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#editkriteria" id="edit-kriteria" data-id="<?= $row['id']; ?>" data-code_kriteria="<?= $row['code_kriteria']; ?>" data-keterangan_kriteria="<?= $row['keterangan_kriteria']; ?>">
                                                <i class="bi bi-pencil-fill"></i>Edit</span>
                                            <span type="button" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapuskriteria"> <i class="bi bi-trash"></i> Hapus</span>
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
                            <form action=" <?= base_url('kriteria/tambah'); ?> " method="post">
                                <div class="col-12">
                                    <label for="code_kriteria" class="form-label">Code_kriteria</label>
                                    <input type="text" class="form-control" name="code_kriteria" id="code_kriteria" placeholder="Masukan Code..." required>
                                </div>
                                <br>
                                <div class="col-12">
                                    <label for="keterangan_kriteria" class="form-label">Keterangan_kriteria</label>
                                    <input type="text" class="form-control" name="keterangan_kriteria" id="keterangan_kriteria" placeholder="Masukan keterangan..." required>
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
        </div>

        <!-- Hapus -->
        <div class="modal fade" id="hapuskriteria" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                        <a href="/kriteria/hapus/<?= $row['id']; ?>" class="btn btn-primary">Ya</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit -->
        <div class="modal fade" id="editkriteria" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data</h5>
                        <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('kriteria/ubah'); ?>" method="post">
                            <input type="hidden" name="id" id="id">
                            <div class="col-12">
                                <label for="code_kriteria" class="form-label">Code_kriteria</label>
                                <input type="text" class="form-control" name="code_kriteria" id="code_kriteria" placeholder="Masukan Code_kriteria" value="<?= $row['code_kriteria'] ?>">
                            </div>
                            <br>
                            <div class=" col-12">
                                <label for="keterangan_kriteria" class="form-label">Keterangan_kriteria</label>
                                <input type="text" class="form-control" name="keterangan_kriteria" id="keterangan_kriteria" placeholder="Masukan keterangan_kriteria" value="<?= $row['keterangan_kriteria'] ?>">
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


    </section>
</main>