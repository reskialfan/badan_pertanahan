<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6" style="padding: 0;">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-pegawai"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
    <div class="col-md-3">
      <a href="<?php echo base_url('Pegawai/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
    <div class="col-md-3">
      <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-pegawai"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nama</th>
          <th>No Telp</th>
          <th>Asal kota</th>
          <th>Jenis Kelamin</th>
          <th>Posisi</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-pegawai">

      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_pegawai; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPegawai', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
$data['judul'] = 'Pegawai';
$data['url'] = 'Pegawai/import';
echo show_my_modal('modals/modal_import', 'import-pegawai', $data);
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
      tampilPegawai();
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

    function tampilPegawai() {
      $.get('<?php echo base_url('Pegawai/tampil'); ?>', function(data) {
        MyTable.fnDestroy();
        $('#data-pegawai').html(data);
        refresh();
      });
    }

    var id_pegawai;
    $(document).on("click", ".konfirmasiHapus-pegawai", function() {
      id_pegawai = $(this).attr("data-id");
    })
    $(document).on("click", ".hapus-dataPegawai", function() {
      var id = id_pegawai;

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Pegawai/delete'); ?>",
          data: "id=" + id
        })
        .done(function(data) {
          $('#konfirmasiHapus').modal('hide');
          tampilPegawai();
          $('.msg').html(data);
          effect_msg();
        })
    })

    $(document).on("click", ".update-dataPegawai", function() {
      var id = $(this).attr("data-id");

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Pegawai/update'); ?>",
          data: "id=" + id
        })
        .done(function(data) {
          $('#tempat-modal').html(data);
          $('#update-pegawai').modal('show');
        })
    })

    $('#form-tambah-pegawai').submit(function(e) {
      var data = $(this).serialize();

      $.ajax({
          method: 'POST',
          url: '<?php echo base_url('Pegawai/prosesTambah'); ?>',
          data: data
        })
        .done(function(data) {
          var out = jQuery.parseJSON(data);

          tampilPegawai();
          if (out.status == 'form') {
            $('.form-msg').html(out.msg);
            effect_msg_form();
          } else {
            document.getElementById("form-tambah-pegawai").reset();
            $('#tambah-pegawai').modal('hide');
            $('.msg').html(out.msg);
            effect_msg();
          }
        })

      e.preventDefault();
    });

    $(document).on('submit', '#form-update-pegawai', function(e) {
      var data = $(this).serialize();

      $.ajax({
          method: 'POST',
          url: '<?php echo base_url('Pegawai/prosesUpdate'); ?>',
          data: data
        })
        .done(function(data) {
          var out = jQuery.parseJSON(data);

          tampilPegawai();
          if (out.status == 'form') {
            $('.form-msg').html(out.msg);
            effect_msg_form();
          } else {
            document.getElementById("form-update-pegawai").reset();
            $('#update-pegawai').modal('hide');
            $('.msg').html(out.msg);
            effect_msg();
          }
        })

      e.preventDefault();
    });

    $('#tambah-pegawai').on('hidden.bs.modal', function() {
      $('.form-msg').html('');
    })

    $('#update-pegawai').on('hidden.bs.modal', function() {
      $('.form-msg').html('');
    })
  })
</script>