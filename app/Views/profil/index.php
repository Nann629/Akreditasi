<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('Home') ?>">Home</a></li>
                <li class="breadcrumb-item active"><a href="<?= $judul; ?>">Profile</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="<?= 'asset/assets/img/profile/' . session()->get('foto_user'); ?>" alt="Profile" class="rounded-circle">
                        <h2><?= session()->get('nama_user'); ?></h2>
                        <h3> <?php if (session()->get('level') == 1) {
                                    echo ' Admin';
                                } else if (session()->get('level') == 2) {
                                    echo ' Dosen';
                                }
                                ?></h3>

                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Data Profil</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                    <div class="col-lg-9 col-md-8"><?= session()->get('nama_user'); ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                    <div class="col-lg-9 col-md-8"><?= session()->get('no_hp'); ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8"><?= session()->get('email'); ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Level</div>
                                    <div class="col-lg-9 col-md-8"><?php if (session()->get('level') == 1) {
                                                                        echo ' Admin';
                                                                    } else if (session()->get('level') == 2) {
                                                                        echo ' Dosen';
                                                                    }
                                                                    ?></div>
                                </div>


                            </div>



                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->