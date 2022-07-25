
      <div class="main-content">
        <section class="section">
          <h1 class="section-header" >
              <div>Manajemen Data Pengunjung</div> 
          </h1>
          <div class="section-body">
              <!-- data -->
              <div class="row">
             
             
             
                             
          </div>
          </div>
            <!--  -->  
                        <!-- <?php
                          if ($this->session->flashdata('pesan')) {
                              echo '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                          role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>';
                              echo $this->session->flashdata('pesan');
                              echo '</div>';
                          }
                        ?> -->
                       
                            

            <div class="row mt-3">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <div class="float-right">
                      <form>
                        <div class="input-group">                        
                        </div>
                         <a href="<?= base_url('pengunjung/pengunjung_add') ?>" class="btn btn-add"><i class="fas fa-plus-circle fa-beat"></i> Tambah Data</a>
                      </form>    
                        </div>           
                    <h3>Tabel Data Pengunjung</h3>
                                 
                  </div>
                  <div class="card-body">
                   <div class=" table-responsive">
                        <table id="my-table" class="table table-striped" width="100%" cellspacing="0">
                            <thead>
                                <tr> 
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nomor Kartu</th>  
                                    <th>Nomor Induk</th>  
                                                                                        
                                    <th>Prodi</th>
                                    <th>kategori</th>    
                                    
                                    <th>Aksi</th>
                                </tr>
                            </thead>                            
                            <tbody>
                                    <?php $no = 1;
                                            foreach ($pengunjung as $key => $value) { ?>                                           
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value->nama?></td>
                                    <td><?= $value->no_kartu?></td>   
                                    <td><?= $value->no_induk?></td>    
                                    <td><?= $value->prodi?></td>
                                    <td><?= $value->kategori?></td>
 

                                      <td>                                           
                                            <button class="first btn btn-sm btn-info3"  data-toggle="modal" data-target="#detail<?= $value->id_pengunjung ?>"><i class="fa fa-edit"></i> Detail </button>
                
                                            <a href="<?= base_url('pengunjung/pengunjung_edit/' . $value->id_pengunjung) ?>" >
                                                <button class="first btn btn-sm btn-primary3" ><i class="fa fa-edit"></i> Ubah </button>
                                            </a>
 
                                            <button class="first btn btn-sm btn-danger"  data-toggle="modal" data-target="#delete<?= $value->id_pengunjung ?>"><i class="fa fa-edit"></i> Hapus</button>
                
                                            <!-- <button  onclick="Swal.fire('Hello','<?= $value->nama?> ','success')"class="btn-danger">detail</button> -->
                                  </td>

                                </div>
                              </div>
                            </div>
                                </tr>
                                
                                    <?php } ?>
                            </tbody>
                        </table>
                      </div>
                  </div>

                </div>
              </div>
            </div>
            <!--  -->
         
        </section>
      <!-- </div> -->
<!-- Modal -->
<?php foreach ($pengunjung as $key => $value) { ?>
<div class="modal fade" id="detail<?= $value->id_pengunjung ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Data Pengunjung</h5>
 
      </div>
      <div class="modal-body">
      <form>
          <div class="form-group">
            <label class="col-form-label">Nama:</label>
            <input type="text" value="<?= $value->nama?>" class="form-control" name="" disabled>
          </div>
          <div class="form-group">
            <label class="col-form-label">Nomor Induk:</label>
            <input type="text" value="<?= $value->no_induk?>" class="form-control" name="" disabled>
          </div>
          <div class="form-group">
            <label class="col-form-label">Nomor Kartu:</label>
            <input type="text" value="<?= $value->no_kartu?>" class="form-control" name="" disabled>
          </div>
          <div class="form-group">
            <label class="col-form-label">Prodi:</label>
            <input type="text" value="<?= $value->prodi?>" class="form-control" name="" disabled>
          </div>
          <div class="form-group">
            <label class="col-form-label">Kategori:</label>
            <input type="text" value="<?= $value->kategori?>" class="form-control" name="" disabled>
          </div>
          <div class="form-group">
            <label class="col-form-label">Tanggal:</label>
            <input type="text"  value="<?= $value->date_add?>" class="form-control" name="" disabled>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      <a href=""><button type="button" class="btn btn-secondary">Close</button></a>      
      </div>  
    </div>
  </div>
</div>
<?php } ?>

<?php foreach ($pengunjung as $key => $value) { ?>
<div class="modal fade" id="delete<?= $value->id_pengunjung ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-isi">
      <img src="http://localhost/monitor_gerbang/assets/backend/icon/alerts.png" style="width:50px;">
       
      </div>
      <div class="modal-header">
        <h5 style="font-size: 30px;">Hapus data?</h5>
      </div>
      <div class="modal-header">
        <a class="modal-text" style="color:#868E96  ;">Serius lu?</a>
      </div>
      <div class="modal-footer" >
      <button type="button" class="btn btn-secondary"></button>
   
    

      <a href="<?= base_url('pengunjung/pengunjung_delete/' . $value->id_pengunjung) ?>" >
         <button class=" btn btn-danger" > Hapus </button>
      </a>
  
       
      </div>
    </div>
  </div>
</div>
<?php } ?>