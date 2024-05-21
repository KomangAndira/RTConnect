<?php
include('template\header.php');
?>
    <div class="row">
            <div class="col-lg-12 mb-5">
              <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">

                  <h4 class="mb-0">List Laporan Masalah di sekitar Lingkungan RT</h4>
                 


                </div>
                <div class="card-body">
                  <div class="table-responsive table-card">
                    <table class="table mb-0 text-nowrap table-centered">
                      <thead class="table-light">
                        <tr>

                          <th scope="col">Nama </th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Telepon</th>
                          <th scope="col">Jenis Masalah </th>
                          <th scope="col">File Bukti</th>
                          <th scope="col">Keterangan Lainnya</th>
                          <th scope="col">Aksi </th>

                          
                        </tr>
                     </thead>
                     <tbody>
                        <td>
                            <h5 class="mb-0"><a href="#!" class="text-inherit"></a></h5>
                        </td>
                        <td></td>
                          <td></td>
                          <td><span class="badge badge-danger-soft">Dihapus</span></td>
                          <td><a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                              data-template="trashThree">
                              <i data-feather="trash-2" class="icon-xs"></i>
                              <div id="trashThree" class="d-none">
                               <span>Hapus</span>
                              </div>
                            </a>
                            <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                              data-template="editFour">
                              <i data-feather="edit" class="icon-xs"></i>
                              <div id="editFour" class="d-none">
                                <span>Lihat</span>
                              </div>
                            </a></td>
                        </tr>
                        <tr>
                     </tbody>
                    </table>
                  </div>
                </div>