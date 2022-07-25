<div class="main-content"> 
          <p class="marginer2">    
                <p class="breadcrumb-item"><a href="<?= base_url('admin/pengunjung') ?>"><i class="fas fa-angle-left"></i>  Kembali</a></p>                
          </p>
            <p class="bread-margin"></p>

          <div class="section-body">
              <h2 class="section-title">Form Edit Data Pengunjung</h2>
              <p class="section-lead"></p>
            </div>
        <section class="section">
 
         
               <?php
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                        role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';
                }
                ?>
           <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3>Edit data pengunjung</h3>
                  </div>
                  <div class="card-body">
                  <?php echo form_open_multipart('pengunjung/pengunjung_edit/' . $pengunjung->id_pengunjung); ?>
                    <!-- <div class="form-group row mb-3">
                      <label class="col-form-label text-lg-right col-12 col-md-3 col-lg-3">No Kartu</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="no_kartu" aria-describedby="name" placeholder="Tempelkan kartu">
                      </div>
                    </div> -->
                    
                    <div class="form-group row mb-3">
                      <label class="col-form-label text-lg-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" value="<?= $pengunjung->nama?>" name="nama" aria-describedby="name" class="form-control" required autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label class="col-form-label text-lg-right col-12 col-md-3 col-lg-3">No Induk</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="number" value="<?= $pengunjung->no_induk ?>" name="no_induk" aria-describedby="name" class="form-control" required autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label class="col-form-label text-lg-right col-12 col-md-3 col-lg-3">Prodi</label>
                      <div class="col-sm-12 col-md-7">
                      <select class="form-control selectric"   name="prodi" aria-describedby="name" required>
                          <option value="<?= $pengunjung->prodi ?>"><?= $pengunjung->prodi ?> </option>
                          <option value="Fakultas Teknik">Fakultas Teknik</option>
                          <option value="Fakultas Agama Islam">Fakultas Agama Islam</option>
                          <option value="Fakultas Ekonomi">Fakultas Ekonomi</option>
                       
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label class="col-form-label text-lg-right col-12 col-md-3 col-lg-3">kategori</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric"  name="kategori" required>
                        <option value="<?= $pengunjung->kategori ?>"><?= $pengunjung->kategori ?></option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Staff TU">Staff TU</option>
 
                        </select>
                      </div>
                    </div>
                    <!-- <div class="form-group row mb-3">
                      <label class="col-form-label text-lg-right col-12 col-md-3 col-lg-3">Keterangan</label>
                      <div class="col-sm-12 col-md-7">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Aktif
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck2">
                              Non Aktif
                            </label>
                          </div>
                        
                      </div> -->
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <!-- <button class="btn btn-primary">Simpan</button> -->
                         
                        <button type="submit" class="btn btn-primary3">Simpan</button>
                        <button type="reset" class="btn btn-warning"  onclick="return confirm('Are you sure you want to reset this item?')">Reset</button>
                        <A HREF="javascript:javascript:history.go(-1)" class="btn btn-primary2">kembali</A>
                        
                      </div>
                      <?php echo form_close(); ?>
           
                    </div>
                  </div>
                </div>
              </div>
      
          


            
        </section>
      

      