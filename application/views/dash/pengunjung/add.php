<div class="main-content"> 
          <p class="marginer2">    
                <p class="breadcrumb-item"><a href="<?= base_url('admin/pengunjung') ?>"><i class="fas fa-angle-left"></i>  Kembali</a></p>                
          </p>
            <p class="bread-margin"></p>

          <div class="section-body">
              <h2 class="section-title">Form Tambah Data Pengunjung</h2>
              <p class="section-lead"></p>
            </div>
        <section class="section">
 
         
        
            <div class="row">
              <div class="col-12 ">
                <div class="card">
                  <div class="card-header">
                    <div class="float-right">
                      <div class="btn-group a">
                 
                        
                      </div>
                    </div>
                    <h3>Tambah Data Pengunjung</h3>
                  </div>
                  <div class="card-body">
                    <!--  -->
      

                    <!--  -->
   
            <?php echo form_open_multipart('pengunjung/pengunjung_add'); ?>
        
          <div class="form-group row mb-3">
            <label class="col-form-label text-lg-right col-12 col-md-3 col-lg-3">No kartu</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="no_kartu" id="rfid" class="form-control" placeholder="Tempelkan kartu" autocomplete="off" required >
            </div>
            <a href="inputdata.php?getRFID=true" class="btn btn-link">Get RFID</a>
          </div>
          <div class="form-group row mb-3">
            <label class="col-form-label text-lg-right col-12 col-md-3 col-lg-3">Nama</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="nama" aria-describedby="name"  autocomplete="off" class="form-control" required>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label class="col-form-label text-lg-right col-12 col-md-3 col-lg-3">No Induk</label>
            <div class="col-sm-12 col-md-7">
              <input type="number" name="no_induk" aria-describedby="name"  autocomplete="off" class="form-control" required>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label class="col-form-label text-lg-right col-12 col-md-3 col-lg-3">Prodi</label>
            <div class="col-sm-12 col-md-7">
            <select class="form-control selectric"  name="prodi" aria-describedby="name">
                <option value="Fakultas Teknik">Fakultas Teknik</option>
                <option value="Fakultas Agama Islam">Fakultas Agama Islam</option>
                <option value="Fakultas Ekonomi">Fakultas Ekonomi</option>         
              </select>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label class="col-form-label text-lg-right col-12 col-md-3 col-lg-3">kategori</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control selectric" name="kategori" >
              <option value="Mahasiswa">Mahasiswa</option>
              <option value="Dosen">Dosen</option>
              <option value="Staff TU">Staff TU</option>

              </select>
            </div>
          </div>

         
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
      
              <button type="submit" class="btn btn-primary3">Simpan</button>
              <button type="reset" class="btn btn-warning" >Reset</button>
            </div> 
         </div>
        <?php echo form_close(); ?>
       
 
                
                       
                 
                      
        </section>
      

      