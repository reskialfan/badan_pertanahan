<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class='col-md-4'>
      <div class='box bg-green'>
        <form class='form-horizontal' role='form' method=POST target="_self" action='' enctype='multipart/form-data'>
          <table class='table table-condensed table-bordered'>
            <tbody>
              <tr>
                <td><input type='text' class='form-control' placeholder='Cari Nama ...' name='nama' onkeyup="this.value = this.value.toUpperCase()" required></td>
                <td><button type='submit' name='cari' class='btn btn-info'>Cari</button></td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
    </div>
    <div class="col-md-8"></div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  </div>
</div>

<?php echo $modal_tambah_kota; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataKota', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
$data['judul'] = 'Kota';
$data['url'] = 'Kota/import';
echo show_my_modal('modals/modal_import', 'import-kota', $data);
?>

<script type="text/javascript">
  $(document).ready(function() {
    var MyTable = $('#list-data').dataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

    window.onload = function() {
      tampilKota();
      <?php
      if ($this->session->flashdata('msg') != '') {
        echo "effect_msg();";
      }
      ?>
    }

    function refresh() {
      MyTable = $('#list-data').dataTable();
    }

    function effect_msg_form() {
      // $('.form-msg').hide();
      $('.form-msg').show(1000);
      setTimeout(function() {
        $('.form-msg').fadeOut(1000);
      }, 3000);
    }

    function effect_msg() {
      // $('.msg').hide();
      $('.msg').show(1000);
      setTimeout(function() {
        $('.msg').fadeOut(1000);
      }, 3000);
    }

    //Kota
    function tampilKota() {
      $.get('<?php echo base_url('Kota/tampil'); ?>', function(data) {
        MyTable.fnDestroy();
        $('#data-kota').html(data);
        refresh();
      });
    }

    var id_kota;
    $(document).on("click", ".konfirmasiHapus-kota", function() {
      id_kota = $(this).attr("data-id");
    })
    $(document).on("click", ".hapus-dataKota", function() {
      var id = id_kota;

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Kota/delete'); ?>",
          data: "id=" + id
        })
        .done(function(data) {
          $('#konfirmasiHapus').modal('hide');
          tampilKota();
          $('.msg').html(data);
          effect_msg();
        })
    })

    $(document).on("click", ".update-dataKota", function() {
      var id = $(this).attr("data-id");

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Kota/update'); ?>",
          data: "id=" + id
        })
        .done(function(data) {
          $('#tempat-modal').html(data);
          $('#update-kota').modal('show');
        })
    })

    $(document).on("click", ".detail-dataKota", function() {
      var id = $(this).attr("data-id");

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Kota/detail'); ?>",
          data: "id=" + id
        })
        .done(function(data) {
          $('#tempat-modal').html(data);
          $('#tabel-detail').dataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false
          });
          $('#detail-kota').modal('show');
        })
    })

    $('#form-tambah-kota').submit(function(e) {
      var data = $(this).serialize();

      $.ajax({
          method: 'POST',
          url: '<?php echo base_url('Kota/prosesTambah'); ?>',
          data: data
        })
        .done(function(data) {
          var out = jQuery.parseJSON(data);

          tampilKota();
          if (out.status == 'form') {
            $('.form-msg').html(out.msg);
            effect_msg_form();
          } else {
            document.getElementById("form-tambah-kota").reset();
            $('#tambah-kota').modal('hide');
            $('.msg').html(out.msg);
            effect_msg();
          }
        })

      e.preventDefault();
    });

    $(document).on('submit', '#form-update-kota', function(e) {
      var data = $(this).serialize();

      $.ajax({
          method: 'POST',
          url: '<?php echo base_url('Kota/prosesUpdate'); ?>',
          data: data
        })
        .done(function(data) {
          var out = jQuery.parseJSON(data);

          tampilKota();
          if (out.status == 'form') {
            $('.form-msg').html(out.msg);
            effect_msg_form();
          } else {
            document.getElementById("form-update-kota").reset();
            $('#update-kota').modal('hide');
            $('.msg').html(out.msg);
            effect_msg();
          }
        })

      e.preventDefault();
    });

    $('#tambah-kota').on('hidden.bs.modal', function() {
      $('.form-msg').html('');
    })

    $('#update-kota').on('hidden.bs.modal', function() {
      $('.form-msg').html('');
    })
  })
</script>



<div id="tempat-modal"></div>
<div class='col-md-4'>
  <div class='box bg-green'>
    <form class='form-horizontal' role='form' method=POST target="_self" action='' enctype='multipart/form-data'>
      <table class='table table-condensed table-bordered'>
        <tbody>
          <tr>
            <td><input type='text' class='form-control' placeholder='Cari Nama ...' name='nama' onkeyup="this.value = this.value.toUpperCase()" required></td>
            <td><button type='submit' name='cari' class='btn btn-info'>Cari</button></td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
</div>

<div class='col-md-12'>
  <div class='box' id="list-data">
    <div class='box-header bg-red'>
      <h3 class='box-title'>PASIEN IGD UMUM</h3>
    </div>
    <div class='box-body bg-olive'>
      <?php
      foreach ($dataPasienigd as $rowdataPasienigd) {
        if ($rowdataPasienigd->id_triage == '1') {
          $cssbg = 'bg-red';
        } elseif ($rowdataPasienigd->id_triage == '2') {
          $cssbg = 'bg-yellow';
        } elseif ($rowdataPasienigd->id_triage == '3') {
          $cssbg = 'bg-green';
        } elseif ($rowdataPasienigd->id_triage == '4') {
          $cssbg = 'bg-blue';
        } elseif ($rowdataPasienigd->id_triage == '') {
          $cssbg = 'bg-gray';
        }
        ?>
        <div class='col-md-3 col-sm-6 col-xs-12'>
          <!-- small box -->
          <div class='small-box <?php echo $cssbg; ?>'>
            <div class='inner'>
              <div class='css'>
                <h3><?php echo $rowdataPasienigd->kd_pasien; ?></h3>
              </div>
              <p><?php echo $rowdataPasienigd->nama; ?></p>
              <p><?php echo $rowdataPasienigd->tgl_masuk; ?></p>
            </div>
            <div class='icon'>
              <i class='ion ion-person-add'></i>
            </div>
            <a href='#' class='card-igd small-box-footer' data-id='<?php echo $rowdataPasienigd->kd_pasien; ?>' data-id1='<?php echo $rowdataPasienigd->tgl_masuk; ?>' data-id2='<?php echo $rowdataPasienigd->urut_masuk; ?>' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>

<div class="fetched-data"></div>


<div class="modal modal-success fade" id="update-igd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fw fa-pencil"></i><strong> Detail Pasien </h4>
      </div>
      <div class="modal-body">
        <div class="fetched-data2"></div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  // $(document).ready(function(){ 
  // $('#update-igd').on('show.bs.modal', function (e) {
  // var rowid = $(e.relatedTarget).data('id');
  // var rowid1 = $(e.relatedTarget).data('id1');
  // var rowid2 = $(e.relatedTarget).data('id2');
  //var rowid2 = $(e.relatedTarget).data('v_tglmasuk');
  //var id = $(this).attr("data-id");
  //menggunakan fungsi ajax untuk pengambilan data
  // $.ajax({
  //     type : 'post',
  //     url : 'http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Modal',
  //     //data :  'rowid='+ rowid+'
  //     data: {"rowid": rowid, "rowid1": rowid1, "rowid2": rowid2},
  //     success : function(data){
  //     $('.fetched-data').html(data);//menampilkan data ke dalam modal
  //     }
  //       });
  //     });
  //   });

  $(document).on("click", ".card-igd", function() {
    var rowid = $(this).attr("data-id");
    // var rowid = $(e.relatedTarget).data('id');
    var rowid1 = $(this).attr("data-id1");
    var rowid2 = $(this).attr("data-id2");

    // console.log(rowid);
    // console.log(rowid1);
    // console.log(rowid2);
    $.ajax({
        method: "POST",
        url: "http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Modal",
        data: {
          "rowid": rowid,
          "rowid1": rowid1,
          "rowid2": rowid2
        },
      })
      .done(function(data) {
        //$('.fetched-data').html(data);
        //$('.fetched-data').modal('show');
        //console.log(data);
        $('#tempat-modal').html(data);
        $('#tempat-modal').modal('show');
        //$('#form-update-igd-modal').modal('show');
        //$('#update-igd-syarif').modal('show');
      })
  })

  $('#update-igd-syarif').on('hidden.bs.modal', function() {
    $('.form-msg').html('');
  })
</script>