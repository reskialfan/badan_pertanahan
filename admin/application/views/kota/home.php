<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-kota"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
    <!-- <div class="col-md-3">
      <a href="<?php echo base_url('Kota/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
    <div class="col-md-3">
      <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-kota"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
    </div> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Kel/Desa</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-kota">

      </tbody>
    </table>
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