<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6" style="padding: 0;">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-user"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
    <!-- <div class="col-md-3">
      <a href="<?php echo base_url('Pegawai/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
    <div class="col-md-3">
      <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-user"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
    </div> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>username</th>
          <th>Nama Lengkap</th>
          <th style="text-align: center;">Foto</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-user">

      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_user; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataUser', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
$data['judul'] = 'Pegawai';
$data['url'] = 'Pegawai/import';
echo show_my_modal('modals/modal_import', 'import-user', $data);
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
      tampilUser();
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

    function tampilUser() {
      $.get('<?php echo base_url('User/tampil'); ?>', function(data) {
        MyTable.fnDestroy();
        $('#data-user').html(data);
        refresh();
      });
    }

    var id_user;
    $(document).on("click", ".konfirmasiHapus-user", function() {
      id_user = $(this).attr("data-id");
    })
    $(document).on("click", ".hapus-dataUser", function() {
      var id = id_user;

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('User/delete'); ?>",
          data: "id=" + id_user
        })
        .done(function(data) {
          $('#konfirmasiHapus').modal('hide');
          tampilUser();
          $('.msg').html(data);
          effect_msg();
        })
    })

    $(document).on("click", ".update-dataPegawai", function() {
      var id = $(this).attr("data-id");

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('User/update'); ?>",
          data: "id=" + id
        })
        .done(function(data) {
          $('#tempat-modal').html(data);
          $('#update-user').modal('show');
        })
    })

    // $('#form-tambah-user').submit(function(e) {
    //   event.preventDefault();
    //   var form = $('#form-tambah-user')[0];
    //   // Create an FormData object 
    //   var data = new FormData(form);
    //   data.append("CustomField", "This is some extra data, testing");
    //   // var data = $(this).serialize();

    //   $.ajax({
    //     type: "POST",
    //         enctype: 'multipart/form-data',
    //         url: "/fastclaim/Rajal/upload",
    //         data: data,
    //         processData: false,
    //         contentType: false,
    //         cache: false,
    //         timeout: 600000,
    //       method: 'POST',
    //       url: '<?php echo base_url('User/prosesTambah2'); ?>',
    //       data: data
    //     })
    //     .done(function(data) {
    //       var out = jQuery.parseJSON(data);

    //       tampilUser();
    //       if (out.status == 'form') {
    //         $('.form-msg').html(out.msg);
    //         effect_msg_form();
    //       } else {
    //         document.getElementById("form-tambah-user").reset();
    //         $('#tambah-user').modal('hide');
    //         $('.msg').html(out.msg);
    //         effect_msg();
    //       }
    //     })

    //   e.preventDefault();
    // });

    $(document).on('submit', '#form-tambah-user', function(e) {
        //stop submit the form, we will post it manually.
        event.preventDefault();
        // Get form
        var form = $('#form-tambah-user')[0];
        // Create an FormData object 
        var data = new FormData(form);
        // If you want to add an extra field for the FormData
        data.append("CustomField", "This is some extra data, testing");
        // disabled the submit button
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url('User/prosesTambah2');?>",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(data) {
                var out = jQuery.parseJSON(data);
                console.log("Upload Sukses");
                document.getElementById("form-tambah-user").reset();
                // $('#tambah-user').modal('hide');
                $('.form-msg').html(out.msg);
                tampilUser();
                effect_msg_form(); 
            },
            error: function(e) {
                console.log("ERROR : ", e);
                $('.form-msg').html(e);
                effect_msg_form();
            }
        });
    });

    $(document).on('submit', '#form-update-user', function(e) {
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
            document.getElementById("form-update-user").reset();
            $('#update-user').modal('hide');
            $('.msg').html(out.msg);
            effect_msg();
          }
        })

      e.preventDefault();
    });

    $('#tambah-user').on('hidden.bs.modal', function() {
      $('.form-msg').html('');
    })

    $('#update-user').on('hidden.bs.modal', function() {
      $('.form-msg').html('');
    })
  })
</script>