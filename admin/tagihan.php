
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/admin/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Admin Pengurus RT</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/admin/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/admin/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/admin/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
  
              <span class="app-brand-text demo menu-text fw-bolder ms-2">RTConnect</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>
          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="pengurusrt.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="tagihan.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Tagihan</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="informasi.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Informasi & Berita</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="galeridata.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Galeri</div>
              </a>
            </li>       
            <li class="menu-item">
              <a href="tagihan.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Laporan Masalah</div>
              </a>
            </li>               
          </ul>
          
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->


                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Pengurus RT</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
 
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../index.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->


        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
            <h4 class="py-3 mb-4">
              <span class="text-muted fw-light">List /</span> Tagihan
            </h4>
            
            <!-- Invoice List Widget -->
            
            <div class="card mb-4">
              <div class="card-widget-separator-wrapper">
                <div class="card-body card-widget-separator">
                  <div class="row gy-4 gy-sm-1">
                    <div class="col-sm-6 col-lg-3">
                      <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                        <div>
                          <h3 class="mb-1">0</h3>
                          <p class="mb-0">Warga</p>
                        </div>
                        <div class="avatar me-sm-4">
                          <span class="avatar-initial rounded bg-label-secondary">
                            <i class="bx bx-user bx-sm"></i>
                          </span>
                        </div>
                      </div>
                      <hr class="d-none d-sm-block d-lg-none me-4">
                    </div>
                    <div class="col-sm-6 col-lg-3">
                      <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                        <div>
                          <h3 class="mb-1">0</h3>
                          <p class="mb-0">Tagihan</p>
                        </div>
                        <div class="avatar me-lg-4">
                          <span class="avatar-initial rounded bg-label-secondary">
                            <i class="bx bx-file bx-sm"></i>
                          </span>
                        </div>
                      </div>
                      <hr class="d-none d-sm-block d-lg-none">
                    </div>
                    <div class="col-sm-6 col-lg-3">
                      <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                        <div>
                          <h3 class="mb-1">Rp. 0</h3>
                          <p class="mb-0">Sudah Dibayar</p>
                        </div>
                        <div class="avatar me-sm-4">
                          <span class="avatar-initial rounded bg-label-secondary">
                            <i class="bx bx-check-double bx-sm"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                      <div class="d-flex justify-content-between align-items-start">
                        <div>
                          <h3 class="mb-1">Rp. 0</h3>
                          <p class="mb-0">Belum Dibayarkan</p>
                        </div>
                        <div class="avatar">
                          <span class="avatar-initial rounded bg-label-secondary">
                            <i class="bx bx-error-circle bx-sm"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Invoice List Table -->
            
            <div class="card">
              <div class="card-datatable table-responsive">
                <table class="invoice-list-table table border-top">
                  <thead>
                    <tr>
                      <th></th>
                      <th>#ID</th>
                      <th>Nama</th>
                      <th>No.KK</th>
                      <th>Alamat</th>
                      <th>Kontak</th>
                      <th>Email</th>
                      <th>Tagihan Bulan Ke-</th>
                      <th>Tanggal Pembayaran</th>
                      <th>Jumlah</th>
                      <th>Keterangan</th>
                      <th>Keterangan Lainnya</th>
                      <th>Status Pembayaran</th>
                      <th class="cell-fit">Aksi</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
            <div class="row invoice-add">

            <div class="container-xxl flex-grow-1 container-p-y">
            
            
            <h4 class="py-3 mb-4">
              <span class="text-muted fw-light">Buat /</span> Tagihan
            </h4>
            
  <!-- Invoice Add-->
            <div class="col-lg-9 col-12 mb-lg-0 mb-4">
              <div class="card invoice-preview-card">
                <div class="card-body">
                  <div class="row p-sm-3 p-0">
                    <div class="col-md-6 mb-md-0 mb-4">
                      <div class="d-flex svg-illustration mb-4 gap-2">
                        <span class="app-brand-logo demo">

       

            <div class="row">

                  <div class="mb-3 col-md-9">
                    <!-- Title -->
                    <label for="postTitle" class="form-label">nama</label>
                    <input type="text" id="postTitle" class="form-control " placeholder="" >
                    <small>Masukan anggota keluarga di KK yang terdata
                      </small>
                  </div>
                  <div class="mb-3 col-md-9">
                    <!-- Title -->
                    <label for="postTitle" class="form-label"><No class="KK"></No></label>
                    <input type="text" id="postTitle" class="form-control " placeholder="" >
                    <small>Input nomor kartu keluarga yang terdata
                      </small>
                  </div>
                  <div class="mb-3 col-md-9">
                    <!-- Title -->
                    <label for="postTitle" class="form-label">Alamat</label>
                    <input type="text" id="postTitle" class="form-control " placeholder="" >
                    <small>Input Alamat tempat Tinggal
                      </small>
                  </div>
                  <div class="mb-3 col-md-9">
                    <!-- Title -->
                    <label for="postTitle" class="form-label">Kontak</label>
                    <input type="text" id="postTitle" class="form-control " placeholder="" >
                    <small>Masukkan nomor telepon yang dapat dihibungi
                      </small>
                  </div>
                  <div class="mb-3 col-md-9">
                    <!-- Title -->
                    <label for="postTitle" class="form-label">Email</label>
                    <input type="text" id="postTitle" class="form-control " placeholder="" >
                    <small>Input email yang valid
                      </small>
                  </div>
                  <div class="mb-3 col-md-9">
                    <!-- Title -->
                    <label for="postTitle" class="form-label">Tagihan Bulan Ke-</label>
                    <input type="date" id="postTitle" class="form-control " placeholder="" >
                    <small>input pembayaran bulan ke-
                      </small>
                  </div>
                  
                  <div class="mb-3 col-md-9">
                    <!-- Title -->
                    <label for="postTitle" class="form-label">Tanggal Pembayaran</label>
                    <input type="date" id="postTitle" class="form-control " placeholder="" >
                    <small>Masukan tanggal pembayaran
                      </small>
                  </div>
                  
                  <div class="mb-3 col-md-9">
                    <!-- Title -->
                    <label for="postTitle" class="form-label">Jumlah</label>
                    <input type="text" id="postTitle" class="form-control " placeholder="" >
                    <small>Masukan jumlah pembayaran
                      </small>
                  </div>
                  <div class="mb-3 col-md-9">
                    <label class="form-label">Keterangan</label>
                    <select class="form-select" >
                      <option value="Iuran Wajib"> Iuran Wajib</option>
                      <option value="Bayar Sampah">Bayar Sampah</option>
                      <option value="Sumbangan">Sumbangan</option>
                      <option value="Lainnya">Lainya</option>
                    </select>
                  </div>
                  <div class="mb-3 col-md-9">
                    <!-- Title -->
                    <label for="postTitle" class="form-label">Keterangan Lainnya</label>
                    <input type="text" id="postTitle" class="form-control " placeholder="" >
                  </div>
                  <div class="mb-3 col-md-9">
                          <label class="form-label">Status Pembayaran</label>
                          <select class="form-select" >
                            <option value="Diterima"> Diterima</option>
                            <option value="Belum Diterima">Belum Diterima</option>

                          </select>
                        </div>
                  </div>
     

                </div>
              </div>
            </div>
            <!-- /Invoice Add-->

            <!-- Invoice Actions -->
            <div class="col-lg-3 col-12 invoice-actions">
              <div class="card mb-4">
                <div class="card-body">
                  <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                    <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="bx bx-paper-plane bx-xs me-1"></i>Kirim Tagihan</span>
                  </button>
                </div>
              </div>
            </div>
            <!-- /Invoice Actions -->
          </div>

          <!-- Offcanvas -->
          <!-- Send Invoice Sidebar -->
          <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
            <div class="offcanvas-header mb-3">
              <h5 class="offcanvas-title">Kirim Tagihan</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body flex-grow-1">
              <form>
                <div class="mb-3">
                  <label for="invoice-from" class="form-label">Dari</label>
                  <input type="text" class="form-control" id="invoice-from" value="" placeholder="rtconnect.com" />
                </div>
                <div class="mb-3">
                  <label for="invoice-to" class="form-label">Ke</label>
                  <input type="text" class="form-control" id="invoice-to" value="" placeholder="rtconnect.com" />
                </div>
                <div class="mb-3">
                  <label for="invoice-subject" class="form-label">Subjek</label>
                  <input type="text" class="form-control" id="invoice-subject" value="Pembayaran Iuran Bulan ..." placeholder="" />
                </div>
                <div class="mb-3">
                  <label for="invoice-message" class="form-label">Pesan</label>
                  <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="8">Salam Sejahtera, Hallo Warga RtConnect semoga selalu dimurahkan rezeki nya</textarea>
                </div>
                <div class="mb-4">
                  <span class="badge bg-label-primary">
                    <i class="bx bx-link bx-xs"></i>
                    <span class="align-middle">Bukti Tagihan</span>
                  </span>
                </div>
                <div class="mb-3 d-flex flex-wrap">
                  <button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Kirim</button>
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Batal</button>
                </div>
              </form>
            </div>
          </div>
<!-- /Send Invoice Sidebar -->
            
                      </div>
 

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/admin/assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/admin/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
