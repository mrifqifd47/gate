<div class="marginir"></div>
</div>
      <footer class="main-footer">
      
          <div class="footer-left">
            Copyright &copy; 2022 <div class="bullet"></div>   <a href="https://multinity.com/">UIKA</a>
          </div>
          <div class="footer-right"></div>
        
      </footer>
    </div>
  </div>

  <script src="<?= base_url() ?>assets/backend/modules/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/modules/popper.js"></script>
  <script src="<?= base_url() ?>assets/backend/modules/tooltip.js"></script>
  <script src="<?= base_url() ?>assets/backend/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/js/sa-functions.js"></script>
  
  <script src="<?= base_url() ?>assets/backend/modules/chart.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/modules/summernote/summernote-lite.js"></script>
  <script src="<?= base_url() ?>assets/backend/modules/costum-script.js"></script>
  <script src="<?= base_url() ?>assets/backend/modules/sweetalert/sweetalert2.all.min.js"></script>
  <script>
        var closebtns = document.getElementsByClassName("close");
      var i;

      for (i = 0; i < closebtns.length; i++) {
          closebtns[i].addEventListener("click", function() {
            this.parentElement.style.display = 'none';
          });
      }
  </script>
  <script>
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
    })
  </script>
    <script>
                <?php  if ($this->session->flashdata('add')) { ?>            
                 var isi = <?php echo json_encode($this->session->flashdata('add'))  ?>;
                        let timerInterval
                        Swal.fire({
                        title: 'Data berhasil ditambahkan!',
                        icon: 'success',
                        timer: 2000,
 
                        })
                          
               <?php } ?>
               <?php  if ($this->session->flashdata('edit')) { ?>            
                 var isi = <?php echo json_encode($this->session->flashdata('edit'))  ?>;
                        let timerInterval
                        Swal.fire({
                        title: 'Data berhasil ditambahkan!',
                        icon: 'success',
                        timer: 2000,
 
                        })
                          
               <?php } ?>
              <?php  if ($this->session->flashdata('delete')) { ?>
                            
                 var isi = <?php echo json_encode($this->session->flashdata('delete'))  ?>;
                       
                        Swal.fire({
                        title: 'Data berhasil dihapus!',
                        icon: 'success',
                        timer: 2000,
              })
              <?php } ?>
                       
    </script>

 <script>
    
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: 'rgba(23,164,59,255)',
        borderColor: 'rgba(23,164,59,255)',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 150
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      },
    }
  });
</script>
<!-- script active sidebar -->
<script>
 
</script>
<!-- Chart -->
<script>
     

    var ctx = document.getElementById("myChart2").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        datasets: [{
          label: 'Statistics',
          data: [460, 458, 330, 502, 430, 610, 488],
          borderWidth: 2,
          backgroundColor: '#17A43B',
          borderColor: '#17A43B',
          borderWidth: 2.5,
          pointBackgroundColor: '#ffffff',
          pointRadius: 4
        }]
      },
      options: {
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
              stepSize: 150
            }
          }],
          xAxes: [{
            ticks: {
              display: false
            },
            gridLines: {
              display: false
            }
          }]
        },
      }
    });

    var ctx = document.getElementById("myChart3").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        datasets: [{
          data: [
            80,
            50,
            40,
            30,
            20,
          ],
          backgroundColor: [
            '#574B90',
            '#28a745',
            '#ffc107',
            '#dc3545',
            '#343a40',
          ],
          label: 'Dataset 1'
        }],
        labels: [
          'Purple',
          'Green',
          'Yellow',
          'Red',
          'Black'
        ],
      },
      options: {
        responsive: true,
        legend: {
          position: 'bottom',
        },
      }
    });

    var ctx = document.getElementById("myChart4").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        datasets: [{
          data: [
            80,
            50,
            40,
            30,
            20,
          ],
          backgroundColor: [
            '#574B90',
            '#28a745',
            '#ffc107',
            '#dc3545',
            '#343a40',
          ],
          label: 'Dataset 1'
        }],
        labels: [
          'Purple',
          'Green',
          'Yellow',
          'Red',
          'Black'
        ],
      },
      options: {
        responsive: true,
        legend: {
          position: 'bottom',
        },
      }
    });
  </script>
  <script src="<?= base_url() ?>assets/backend/js/scripts.js"></script>
  <script src="<?= base_url() ?>assets/backend/js/custom.js"></script>
  <script src="<?= base_url() ?>assets/backend/js/demo.js"></script>
 
<script>
    initSample();
</script>
<script>
    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }

        });
    });
</script>
<script>
    document.querySelector(".first").addEventListener('click', function(){
  swal("Our First Alert");
});</script>

 
<script>
    $(document).ready(function() {

        $('#user_role').change(function() {
            var id = $(this).val();
            $.ajax({
                url: "<?php echo site_url('userm/get_tbl_user'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                async: true,
                dataType: 'json',
                success: function(data) {

                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].role_id + '>' + data[i].role + '</option>';
                    }
                    $('#tbl_user').html(html);

                }
            });
            return false;
        });

    });
</script>
<!-- <script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: 'http://localhost/web-sekolah/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
            },
            toolbar: ['ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                'blockQoute', 'outdent', 'indent', '|', 'insertTable', 'mediaEmbed', '|', 'undo', 'redo'
            ],
            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },

                ]
            },
            language: 'id'
        })
        .catch(error => {
            console.error(error);
        });
</script> -->

<!-- <script src="https://code.jquery.com/jquery-3.1.0.js"></script> -->
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
 
<script>
    $(document).ready(function() {
        $('#my-table').DataTable();
    } );
</script>
 

 
</body>

</html>