<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-jenis-dokumen"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
    
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Jenis Dokumen</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-jenis-dokumen">

      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_jenis_dokumen; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-datajenisdokumen', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>

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
      tampilJenisdokumen();
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

    //jenis
    function tampilJenisdokumen() {
      $.get('<?php echo base_url('Jenis_dokumen/tampil'); ?>', function(data) {
        MyTable.fnDestroy();
        $('#data-jenis-dokumen').html(data);
        refresh();
      });
    }


    var id_jenis;
    $(document).on("click", ".konfirmasiHapus-jenisdokumen", function() {
      id_jenis = $(this).attr("data-id");
    })
    $(document).on("click", ".hapus-datajenisdokumen", function() {
      var id = id_jenis;

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Jenis_dokumen/delete'); ?>",
          data: "id=" + id
        })
        .done(function(data) {
          $('#konfirmasiHapus').modal('hide');
          tampilJenisdokumen();
          $('.msg').html(data);
          effect_msg();
        })
    })

    $(document).on("click", ".update-datajenisdokumen", function() {
      var id = $(this).attr("data-id");

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Jenis_dokumen/update'); ?>",
          data: "id=" + id
        })
        .done(function(data) {
          $('#tempat-modal').html(data);
          $('#update-jenis-dokumen').modal('show');
        })
    })

    $(document).on("click", ".detail-datajenis", function() {
      var id = $(this).attr("data-id");

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Jenis/detail'); ?>",
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
          $('#detail-jenis').modal('show');
        })
    })


    $('#form-tambah-jenis-dokumen').submit(function(e) {
      var data = $(this).serialize();

      $.ajax({
          method: 'POST',
          url: '<?php echo base_url('Jenis_dokumen/prosesTambah'); ?>',
          data: data
        })
        .done(function(data) {
          var out = jQuery.parseJSON(data);

          tampilJenisdokumen();
          if (out.status == 'form') {
            $('.form-msg').html(out.msg);
            effect_msg_form();
          } else {
            document.getElementById("form-tambah-jenis-dokumen").reset();
            $('#tambah-jenis-dokumen').modal('hide');
            $('.msg').html(out.msg);
            effect_msg();
          }
        })

      e.preventDefault();
    })

    $(document).on('submit', '#form-update-jenis-dokumen', function(e) {
      var data = $(this).serialize();

      $.ajax({
          method: 'POST',
          url: '<?php echo base_url('Jenis_dokumen/prosesUpdate'); ?>',
          data: data
        })
        .done(function(data) {
          var out = jQuery.parseJSON(data);

          tampilJenisdokumen();
          if (out.status == 'form') {
            $('.form-msg').html(out.msg);
            effect_msg_form();
          } else {
            document.getElementById("form-update-jenis-dokumen").reset();
            $('#update-jenis-dokumen').modal('hide');
            $('.msg').html(out.msg);
            effect_msg();
          }
        })

      e.preventDefault();
    });

    $('#tambah-jenis-dokumen').on('hidden.bs.modal', function() {
      $('.form-msg').html('');
    })

    $('#update-jenis-dokumen').on('hidden.bs.modal', function() {
      $('.form-msg').html('');
    })
  })
</script>
