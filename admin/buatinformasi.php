<?php
include('template\header.php');
?>
<head>
  <script src="https://cdn.tiny.cloud/1/your-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
 <!-- page content -->
    <div id="app-content">

      <div class="app-content-area">

      <div class="container-fluid">
        <div class="row">
          
        </div>



        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12 col-12">
              <!-- Card -->
              <div class="card border-0 mb-4">
                <!-- Card header -->
                <div class="card-header">
                  <h4 class="mb-0">Buat Postingan</h4>
                </div>
                <!-- Card body -->
                <div class="card-body">
                  <button type="button" class="btn btn-outline-white mb-1 mb-md-0">
                    <i class="fe fe-image me-1"></i>
                    Photo
                  </button>
                  <button type="button" class="btn btn-outline-white mb-1 mb-md-0">
                    <i class="fe fe-video me-1"></i>
                    Video
                  </button>
                  <button type="button" class="btn btn-outline-white">
                    Quote
                  </button>
                  <button type="button" class="btn btn-outline-white">
                    <i class="fe fe-link me-1"></i>
                    Link
                  </button>
                  <form action="#" class="dropzone mt-4 border-dashed rounded-2 min-h-0">
                    <div class="fallback">
                      <input name="file" type="file" multiple >
                    </div>
                  </form>
                  <div class="mt-4">
                    <form>
                      <!-- Form -->
                      <div class="row">
                        <!-- Date -->
                        <div class="mb-3 col-md-4">
                          <label for="selectDate" class="form-label">Tanggal </label>
                          <input type="text" id="selectDate" class="form-control  date-picker"
                            placeholder="1 Januari 2024" >
                        </div>
                        <div class="mb-3 col-md-9">
                          <!-- Title -->
                          <label for="postTitle" class="form-label">Judul</label>
                          <input type="text" id="postTitle" class="form-control " placeholder="Judul Postingan" >
                          <small>Usahakan judul postingan Anda kurang dari 60 karakter. Tulis judul yang menggambarkan isi topik. 
                            </small>
                        </div>
                        <div class="mb-3 col-md-9">
                          <!-- Title -->
                          <label for="postTitle" class="form-label">Oleh</label>
                          <input type="text" id="postTitle" class="form-control " placeholder="Oleh" >
                          <small>Masukan nama atau media penulis
                            </small>
                        </div>
                        <!-- Excerpt -->
                        <div class="mb-3 col-md-9">
                          <label for="Excerpt" class="form-label">Kutipan</label>
                          <textarea rows="3" id="Excerpt" class="form-control "
                            placeholder="Kutipan"></textarea>
                          <small>Kutipan singkat dari tulisan.</small>
                        </div>
                        <!-- Category -->
                        <div class="mb-3 col-md-9">
                          <label class="form-label">Kategori</label>
                          <select class="form-select" >
                            <option value="Informasi">Informasi</option>
                            <option value="Berita">Berita</option>
                          </select>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- Editor -->
                  <div class="mt-2 mb-4">
                  <small>Masukkan isi tulisan.</small>
                    <textarea id="tinymceTextarea"></textarea>
                    </div>

                    <script>
                        tinymce.init({
                        selector: '#tinymceTextarea',
                        plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
                        toolbar_mode: 'floating',
                        });
                    </script>
                  </div>
                  <!-- button -->
                  <a href="../../detailall.php" class="btn btn-primary"> Terbitkan </a>

                </div>
              </div>
            </div>

          </div>

        </div>
        </div>
        </div>
      </main>