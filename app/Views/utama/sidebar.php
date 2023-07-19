  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('home') ?>">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->
          <!-- Halaman Admin -->
          <?php if (session()->get('level') == 1) { ?>
              <li class="nav-item">
                  <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-journal-text"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
                  </a>
                  <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                      <li>
                          <a href="<?= base_url('kriteria') ?>">
                              <i class="bi bi-circle"></i><span>Kriteria</span>
                          </a>
                      </li>
                      <li>
                          <a href="<?= base_url('sub') ?>">
                              <i class="bi bi-circle"></i><span>Sub</span>
                          </a>
                      </li>

                  </ul>
              </li><!-- End Components Nav -->

              <li class="nav-item">
                  <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-menu-button-wide"></i><span>Berkas</span><i class="bi bi-chevron-down ms-auto"></i>
                  </a>
                  <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                      <li>
                          <a href="<?= base_url('dokumen') ?>">
                              <i class="bi bi-circle"></i><span>Dokument</span>
                          </a>
                      </li>


                  </ul>
              </li><!-- End Halaman User -->
          <?php } ?>
          <!-- Halaman TUTUP Admin -->
          <!-- Halaman Dosen -->
          <?php if (session()->get('level') == 2) { ?>
              <li class="nav-item">
                  <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-menu-button-wide"></i><span>Berkas</span><i class="bi bi-chevron-down ms-auto"></i>
                  </a>
                  <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                      <li>
                          <a href="<?= base_url('dokumen') ?>">
                              <i class="bi bi-circle"></i><span>Dokument</span>
                          </a>
                      </li>


                  </ul>
              </li><!-- End Halaman User -->
          <?php } ?>

      </ul>

  </aside><!-- End Sidebar-->