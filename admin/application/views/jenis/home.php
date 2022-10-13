<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-jenis"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
    
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Jenis</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-jenis">

      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_jenis; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-datajenis', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>

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
      tampilJenis();
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
    function tampilJenis() {
      $.get('<?php echo base_url('Jenis/tampil'); ?>', function(data) {
        MyTable.fnDestroy();
        $('#data-jenis').html(data);
        refresh();
      });
    }

    var id_jenis;
    $(document).on("click", ".konfirmasiHapus-jenis", function() {
      id_jenis = $(this).attr("data-id");
    })
    $(document).on("click", ".hapus-datajenis", function() {
      var id = id_jenis;

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Jenis/delete'); ?>",
          data: "id=" + id
        })
        .done(function(data) {
          $('#konfirmasiHapus').modal('hide');
          tampilJenis();
          $('.msg').html(data);
          effect_msg();
        })
    })

    $(document).on("click", ".update-datajenis", function() {
      var id = $(this).attr("data-id");

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Jenis/update'); ?>",
          data: "id=" + id
        })
        .done(function(data) {
          $('#tempat-modal').html(data);
          $('#update-jenis').modal('show');
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

    $('#form-tambah-jenis').submit(function(e) {
      var data = $(this).serialize();

      $.ajax({
          method: 'POST',
          url: '<?php echo base_url('Jenis/prosesTambah'); ?>',
          data: data
        })
        .done(function(data) {
          var out = jQuery.parseJSON(data);

          tampilJenis();
          if (out.status == 'form') {
            $('.form-msg').html(out.msg);
            effect_msg_form();
          } else {
            document.getElementById("form-tambah-jenis").reset();
            $('#tambah-jenis').modal('hide');
            $('.msg').html(out.msg);
            effect_msg();
          }
        })

      e.preventDefault();
    });

    $(document).on('submit', '#form-update-jenis', function(e) {
      var data = $(this).serialize();

      $.ajax({
          method: 'POST',
          url: '<?php echo base_url('Jenis/prosesUpdate'); ?>',
          data: data
        })
        .done(function(data) {
          var out = jQuery.parseJSON(data);

          tampilJenis();
          if (out.status == 'form') {
            $('.form-msg').html(out.msg);
            effect_msg_form();
          } else {
            document.getElementById("form-update-jenis").reset();
            $('#update-jenis').modal('hide');
            $('.msg').html(out.msg);
            effect_msg();
          }
        })

      e.preventDefault();
    });

    $('#tambah-jenis').on('hidden.bs.modal', function() {
      $('.form-msg').html('');
    })

    $('#update-jenis').on('hidden.bs.modal', function() {
      $('.form-msg').html('');
    })
  })
</script>
