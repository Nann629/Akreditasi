<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data <?= $judul; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                <li class="breadcrumb-item active"><?= $judul ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <?php if (session()->get('message')) : ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            Data User Berhasil <?= session()->getFlashdata('message') ?>
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
                                    <th scope="col">No</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">UserName</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Handphone</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($user->getResultArray() as $row) : ?>
                                    <tr>
                                        <td scope="row"><?= $i++; ?></td>
                                        <td><img height="50" width="50" src="<?= 'asset/assets/img/profile/' . $row['foto_user']; ?>"></img></td>
                                        <td><?= $row['nama_user']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['no_hp']; ?></td>
                                        <td>
                                            <a type="button" class="badge bg-danger" href="/auth/hapus/<?= $row['id_user']; ?>"> <i class="bi bi-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tambah -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">

                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Tambah Data <?= $judul; ?></h5>
                            <p class="text-center small">Silahkan Isi Form Dibawah Ini</p>
                        </div>
                        <!-- pesan validasion -->
                        <?php if (!empty($errors = session()->getFlashdata('errors'))) : ?>
                            <div class="alert alert-denger alert-dismissible fade show" role="alert">
                                <ul>
                                    <?php foreach ($errors as $error) : ?>
                                        <li><?= esc($error) ?></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endif ?>
                        <?php
                        if (session()->getFlashdata('pesan')) {
                            echo '<div class="alert alert-success" role="alert">';
                            echo session()->getFlashdata('pesan');
                            echo ' </div>';
                        }
                        ?>
                        <form action="<?= base_url('Auth/save_register'); ?>" method="post" enctype="multipart/form-data">
                            <div class="col-12">
                                <label for="foto_user" class="form-label">Image</label>
                                <input type="file" name="foto_user" class="form-control" id="foto_user" required>
                                <div class="invalid-feedback">Please, enter your name!</div>
                            </div>
                            <div class="col-12">
                                <label for="yourName" class="form-label">Your Name</label>
                                <input type="text" name="nama_user" class="form-control" id="yourName">
                                <div class="invalid-feedback">Please, enter your name!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourUsername" class="form-label">Email</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="email" name="email" class="form-control" id="yourUsername">
                                    <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="yourEmail" class="form-label">No Handphone</label>
                                <input type="text" name="no_hp" class="form-control" id="yourEmail">
                                <div class="invalid-feedback">Please enter a valid No Handphone!</div>
                            </div>

                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                                <div class="invalid-feedback">Please enter your password!</div>
                            </div>

                            <div class="col-12">
                                <label for="repeatPassword" class="form-label">Retype Password</label>
                                <input type="password" name="repassword" class="form-control" id="repeatPassword">
                                <div class="invalid-feedback">Please Enter Your Repeat Password!</div>
                            </div>
                            <br>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Create Account</button>
                            </div>
                            <!-- <div class="col-12">
                                <p class="small mb-0">Already have an account? <a href="pages-login.html">Log in</a></p>
                            </div> -->
                            <from>

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
                        <a href="" class="btn btn-primary">Ya</a>
                    </div>
                </div>
            </div>
        </div>




    </section>
</main>