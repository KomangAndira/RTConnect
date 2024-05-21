<?php
include('template\header.php');
?>
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Laporkan Masalah Lingkungan RT</h4>

                        <form class="forms-sample">
                        <div class="form-group">
                        <label for="exampleInputNama1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputNama1" placeholder="Nama">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputAddress">Alamat</label>
                        <input type="text" class="form-control" id="exampleInputAddress" placeholder="Email">
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputNumber">Telepon</label>
                        <input type="text" class="form-control" id="exampleInputNumber" placeholder="Email">
                        </div>
                        <div class="form-group">
                        <label for="exampleSelectJenis">Jenis Masalah</label>
                            <select class="form-control" id="exampleSelectJenis">
                            <option>Infrastruktur</option>
                            <option>Warga</option>
                            <option>Lingkungan</option>
                            <option>Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <label>File upload</label>
                        <input type="file" Nama="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Bukti">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label for="exampleTextarea1">Keterangan Lainnya</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
                </div>

 <?php
include('template\footer.php');
?>