<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">

  <div class="box-header">
    <div class="col-md-3">
      <?php if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'petugas') { ?>
        <button class="form-control btn btn-primary blink" data-toggle="modal" data-target="#tambah-Suratdokumen"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
      <?php } ?>
    </div>


    </form>

    <div class='col-md-2 pull-right'>
      <select id='change_jenis' name='tchange_jenis' class=' form-control'>
        <option class='form-control' value=''> - SEMUA JENIS DOK -</option>
        <!-- <option class='form-control' value=''> -semua-</option> -->

        <?php foreach ($dataJenis as $jenis) { ?>
          <option class='form-control' value='<?php echo  $jenis->id_jenisdokumen2; ?>'><?php echo  $jenis->uraian_jenisdokumen2; ?></option>
        <?php
        }
        ?>
      </select>
    </div>
  </div>

  <!-- /.box-header -->
  <div class="box-body table-responsive">
    <table id="list-data" class="table table-bordered table-striped" style="background-color:#E8E8E8;">
      <thead>
        <tr>
          <th width='10px'>No</th>
          <th>No Dokumen</th>
          <th>Jenis</th>
          <th>Nama Pemilik</th>
          <th>Luas Lahan</th>
          <th>Luas Bangunan</th>


          <!-- <th>Instansi Tujuan</th> -->
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-Suratdokumen">

      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_surat_dokumen; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataSuratdokumen', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>


<script type="text/javascript">
  $(document).ready(function() {
    $('.select2').select2();
    $('.sselect2').select2();
    var MyTable = $('#list-data').dataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

    $('#id_kecamatan').change(function(){
            var id=$(this).val();
            $.ajax({
                url : "<?php echo base_url();?>Suratdokumen/kelurahan",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    html += '<option value='+0+'>All</option>';
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_kelurahan+'>'+data[i].nama_kelurahan+'</option>';
                    }
                    $('.kelurahan').html(html);
                     
                }
            });
        });


    window.onload = function() {
      tampilSuratdokumen();
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
      $('.form-msg').show(1000);
      setTimeout(function() {
        $('.form-msg').fadeOut(1000);
      }, 3000);
    }

    function effect_msg() {
      $('.msg').show(1000);
      setTimeout(function() {
        $('.msg').fadeOut(1000);
      }, 3000);
    }

    //suratkeputusan
    function tampilSuratdokumen() {
      $.get('<?php echo base_url('Suratdokumen/tampil'); ?>', function(data) {
        MyTable.fnDestroy();
        $('#data-Suratdokumen').html(data);
        refresh();
      });
    }

    function tampildatainstansi() {
      $.get('<?php echo base_url('Suratdokumen/tampildatainstansi'); ?>', function(data) {
        MyTable.fnDestroy();
        $('#data-instansitujuan').html(data);
        refresh();
      });
    }

    $(document).on("click", ".konfirmasiHapus-suratdokumen", function() {
      id_surat_dokumen = $(this).attr("data-id");
      console.log('tes hapus dokumen' + id_surat_dokumen);
    })
    $(document).on("click", ".hapus-dataSuratdokumen", function() {
      var id = id_surat_dokumen;
      console.log('tes hapus dokumen' + id);
      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Suratdokumen/delete'); ?>",
          data: {
            "id": id
          },
        })
        .done(function(data) {
          $('#konfirmasiHapus').modal('hide');
          tampilSuratdokumen();
          $('.msg').html(data);
          effect_msg();
        })
    })



    $(document).on("click", ".update-datasuratdokumen", function() {
      var id = $(this).attr("data-id");

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Suratdokumen/update'); ?>",
          data: "id=" + id
        })

        .done(function(data) {
          $('#tempat-modal').html(data);
          $('#update-suratdokumen').modal('show');
        })
    })

    $(document).on("click", ".file-datasuratdokumen", function() {
      var id = $(this).attr("data-id");

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Suratdokumen/file'); ?>",
          data: "id=" + id
        })

        .done(function(data) {
          $('#tempat-modal').html(data);
          $('#lihat-suratdokumen').modal('show');
        })
    })

    $(document).on("change", "select[name='id_ruang[]']", function() {
      var id_surat_keluar = $(this).attr('data-id');
      var id_ruang = '#ubah_ruang' + id_surat_keluar;
      var val_id_ruang = $(id_ruang).val();
      // console.log(ruangan);
      console.log('arsip' + id_surat_keluar + '/ ruang' + $(id_ruang).val());
      // console.log('#ubah_ruang['+kat+']');
      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Suratdokumen/ubah_ruang'); ?>",
          data: {
            "id_surat_keluar": id_surat_keluar,
            "id_ruang": val_id_ruang
          },
        })
        .done(function(data) {
          // $('#konfirmasiHapus').modal('hide');
          // tampilArsipcovid();
          $('.msg').html(data);
          effect_msg();
          var warna = '';
          if (val_id_ruang == 1) {
            warna = "rgba(255, 153, 0)";
          } else if (val_id_ruang == null || val_id_ruang == '') {
            warna = "rgba(255, 0, 44, 0.9)";
          } else {
            warna = "rgba(51, 204, 51)";
          }
          console.log('idruang=' + id_ruang + '/validruang=' + val_id_ruang);
          console.log(warna);
          $(id_ruang).css({
            "background": warna
          });
          // $(this).css({warna});
          // $('#ubah_ruang88').css({"color": "red"});
        })
    });

    // $(document).on('submit', '#form-tambah-suratvital', function(e) {
    //   event.preventDefault();
    //   var form = $('#form-tambah-suratvital')[0];
    //   var data = new FormData(form);
    //   data.append("CustomField", "This is some extra data, testing");
    //   $.ajax({
    //     type: "POST",
    //     enctype: 'multipart/form-data',
    //     url: "<?php echo base_url('Suratvital/prosesTambah2'); ?>",
    //     data: data,
    //     processData: false,
    //     contentType: false,
    //     cache: false,
    //     timeout: 600000,
    //     success: function(data) {
    //       var out = jQuery.parseJSON(data);
    //       console.log("Upload Sukses");
    //       tampilSuratdokumen();
    //       if (out.status == 'error') {
    //         $('.form-msg').html(out.msg);
    //         effect_msg_form();
    //         document.getElementById("form-tambah-suratvital").reset();
    //       } else {
    //         document.getElementById("form-tambah-suratvital").reset();
    //         $('#tambah-suratvital').modal('hide');
    //         $('.msg').html(out.msg);
    //         effect_msg();
    //       }
    //     },
    //     error: function(e) {
    //       console.log("ERROR : ", e);
    //       $('.form-msg').html(e);
    //       effect_msg_form();
    //     }
    //   });
    // });


    // $(document).on('submit', '#form-update-suratvital', function(e) {
    //   //stop submit the form, we will post it manually.
    //   event.preventDefault();
    //   // Get form
    //   var form = $('#form-update-suratvital')[0];
    //   // Create an FormData object 
    //   var data = new FormData(form);
    //   // If you want to add an extra field for the FormData
    //   data.append("CustomField", "This is some extra data, testing");
    //   // disabled the submit button
    //   $.ajax({
    //     type: "POST",
    //     enctype: 'multipart/form-data',
    //     url: "<?php echo base_url('Suratvital/prosesUpdate'); ?>",
    //     data: data,
    //     processData: false,
    //     contentType: false,
    //     cache: false,
    //     timeout: 600000,
    //     success: function(data) {
    //       var out = jQuery.parseJSON(data);
    //       console.log("Upload Sukses");
    //       // document.getElementById("form-tambah-suratkeputusan").reset();
    //       // $('#tambah-suratkeputusan').modal('hide');
    //       // $('.msg').html(out.msg);
    //       // effect_msg();
    //       tampilSuratdokumen();
    //       if (out.status == 'error') {
    //         $('.form-msg').html(out.msg);
    //         effect_msg_form();
    //       } else {
    //         document.getElementById("form-update-suratvital").reset();
    //         $('#update-suratvital').modal('hide');
    //         $('.msg').html(out.msg);
    //         effect_msg();
    //       }
    //     },
    //     error: function(e) {
    //       console.log("ERROR : ", e);
    //       $('.form-msg').html(e);
    //       effect_msg_form();
    //     }
    //   });
    // });


    // $(document).on('submit', '#form-cari-Suratdokumen', function(e) {
    //   var data = $(this).serialize();
    //   //console.log('tes');
    //   $.ajax({
    //       method: 'POST',
    //       url: '<?php //echo base_url('Suratdokumen/tampilpertahun'); 
                    ?>',
    //       data: data
    //     })
    //     .done(function(data) {
    //       MyTable.fnDestroy();
    //       $('#data-Suratdokumen').html(data);
    //       refresh();
    //     })
    //   e.preventDefault();
    // });

    // $('#change_tahun').on('change', function() {
    $('#change_tahun').change(function() {
      // event.preventDefault();
      $('#change_jenis').prop('selectedIndex', 0);

      // alert(this.value); //or alert($(this).val());
      var id = $(this).val();
      // alert(id);
      $.ajax({
          method: 'POST',
          url: '<?php echo base_url('Suratdokumen/tampilpertahun/'); ?>' + id,
        })
        .done(function(data) {
          MyTable.fnDestroy();
          $('#data-Suratdokumen').html(data);
          // $("#change_jenis").val("");
          // $('#change_jenis').prop('selectedIndex', 0);
          $('#change_jenis').prop('selectedIndex', 0);

          // $('#change_tahun').click(function() {
          //   $('#change_jenis').prop('selectedIndex', 0);
          // })

          refresh();
        })
      // e.preventDefault();
    });


    $('#tambah-Suratdokumen').on('hidden.bs.modal', function() {
      $('.form-msg').html('');
    })

    $('#update-Suratdokumen').on('hidden.bs.modal', function() {
      $('.form-msg').html('');
    })

    $('#file-Suratdokumen').on('hidden.bs.modal', function() {
      $('.form-msg').html('');
    })

    $(document).on('submit', '#form-tambah-Suratdokumen', function(e) {
      $('#loady').show();
      event.preventDefault();
      var form = $('#form-tambah-Suratdokumen')[0];
      var data = new FormData(form);
      // data.append("CustomField", "This is some extra data, testing");
      $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: "<?php echo base_url('Suratdokumen/prosesTambah2'); ?>",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function(data) {
          var out = jQuery.parseJSON(data);
          console.log("Upload Sukses");
          tampilSuratdokumen();
          if (out.status == 'error') {
            $('.form-msg').html(out.msg);
            effect_msg_form();
            // document.getElementById("form-tambah-Suratdokumen").reset();
            $('#loady').hide();
          } else {
            document.getElementById("form-tambah-Suratdokumen").reset();
            $('#loady').hide();
            $('#tambah-Suratdokumen').modal('hide');
            $('.msg').html(out.msg);
            effect_msg();
          }
        },
        error: function(e) {
          console.log("ERROR : ", e);
          $('.form-msg').html(e);
          effect_msg_form();
        }
      });
    });

    $("#tgl_5").datepicker();
    $("#tgl_6").datepicker();
    $("#tgl_7").datepicker();

    var id_instansi = 0;
    $("#add_instansi").click(function() {
      id_instansi += 1;
      // action goes here!!
      $("#div_instansi").append("<div><input class='cls_instansi' placeholder='instansi' type='text' name='nm_instansi_tujuan_surat_keluar[]' id='nm_instansi_tujuan_surat_keluar" + id_instansi + "' aria-describedby='sizing-addon2'></div>");
    });

    var id_kepada = 0;
    $("#add_kepada").click(function() {
      id_kepada += 1;
      // action goes here!!
      $("#div_kepada").append("<div><input class='cls_kepada' placeholder='kepada' type='text' name='nm_kepada[]' id='nm_kepada" + id_kepada + "' aria-describedby='sizing-addon2'></div>");
    });



    var id_file = 0;
    $("#add_file").click(function() {
      id_file += 1;
      // action goes here!!
      $("#div_file").append("<div><input type ='file' class='cls_file_update' type='text' name='f[]' id='f" + id_file + "' aria-describedby='sizing-addon2'></div>");
    });




    $("#xbtn_submit").click(function(e) {
      var numItems = $('.cls_instansi').length;
      console.log(numItems);
      $('.cls_instansi').each(function(index, value) {
        console.log('input ' + index + ':' + $(this).attr('id') + '/' + $(this).val());
      });
      return false;
    });

    $(document).on('submit', '#form-update-isisuratdokumen', function(e) {
      //stop submit the form, we will post it manually.
      event.preventDefault();
      // Get form
      var form = $('#form-update-isisuratdokumen')[0];
      // Create an FormData object 
      var data = new FormData(form);
      // If you want to add an extra field for the FormData
      data.append("CustomField", "This is some extra data, testing");
      // disabled the submit button
      $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: "<?php echo base_url('Suratdokumen/prosesupdateisi'); ?>",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function(data) {
          var out = jQuery.parseJSON(data);
          // console.log("Upload Sukses");
          // // document.getElementById("form-tambah-suratkeputusan").reset();
          // // $('#tambah-suratkeputusan').modal('hide');
          $('.msg').html(out.msg);
          // // effect_msg();
          tampilSuratdokumen();
          if (out.status == 'error') {
            $('.form-msg').html(out.msg);
            effect_msg_form();
          } else {
            // document.getElementById("form-update-isisuratdokumen").reset();
            // $('#update-suratdokumen').modal('hide');
            $('.form-msg').html(out.msg);
            effect_msg_form();
          }
        },
        error: function(e) {
          console.log("ERROR : ", e);
          $('.form-msg').html(e);
          effect_msg_form();
        }
      });
    });

    // $(document).on('submit', '#form-tambah-Suratdokumeninstansi', function(e) {
    //     event.preventDefault();
    //     var form = $('#form-tambah-Suratdokumeninstansi')[0];
    //     var data = new FormData(form);
    //     data.append("CustomField", "This is some extra data, testing");
    //     $.ajax({
    //       type: "POST",
    //       enctype: 'multipart/form-data',
    //       url: "<?php echo base_url('Suratdokumen/prosesTambahUpdateInstansi'); ?>",
    //       data: data,
    //       processData: false,
    //       contentType: false,
    //       cache: false,
    //       timeout: 600000,
    //       success: function(data) {
    //         var out = jQuery.parseJSON(data);
    //         console.log("Upload Sukses");
    //         tampilSuratdokumen();
    //         if (out.status == 'error') {
    //           $('.form-msg').html(out.msg);
    //           effect_msg_form();
    //         } else {
    //           document.getElementById("form-tambah-Suratdokumeninstansi").reset();
    //           $('#update-Suratdokumen').modal('hide');
    //           $('.msg').html(out.msg);
    //           effect_msg();
    //         }
    //       },
    //       error: function(e) {
    //         console.log("ERROR : ", e);
    //         $('.form-msg').html(e);
    //         effect_msg_form();
    //       }
    //     });
    //   });

    $(document).on('submit', '#form-tambah-Suratdokumeninstansi', function(e) {
      var data = $(this).serialize();

      $.ajax({
          method: 'POST',
          url: '<?php echo base_url('Suratdokumen/prosesTambahUpdateInstansi'); ?>',
          data: data
        })
        .done(function(data) {
          var out = jQuery.parseJSON(data);

          tampilSuratdokumen();
          if (out.status == 'form') {
            $('.form-msg').html(out.msg);
            effect_msg_form();
          } else {
            document.getElementById("form-tambah-Suratdokumeninstansi").reset();
            $('#update-Suratdokumen').modal('hide');
            $('.msg').html(out.msg);
            effect_msg();
          }
        })

      e.preventDefault();
    });

    $(document).on('submit', '#form-tambah-Suratdokumenkepada', function(e) {
      var data = $(this).serialize();

      $.ajax({
          method: 'POST',
          url: '<?php echo base_url('Suratdokumen/prosesTambahUpdateKepada'); ?>',
          data: data
        })
        .done(function(data) {
          var out = jQuery.parseJSON(data);

          tampilSuratdokumen();
          if (out.status == 'form') {
            $('.form-msg').html(out.msg);
            effect_msg_form();
          } else {
            document.getElementById("form-tambah-Suratdokumenkepada").reset();
            $('#update-Suratdokumen').modal('hide');
            $('.msg').html(out.msg);
            effect_msg();
          }
        })

      e.preventDefault();
    });

    $(document).on('submit', '#form-tambah-suratdokumenfile', function(e) {
      $('#loadye').show();
      event.preventDefault();
      var form = $('#form-tambah-suratdokumenfile')[0];
      var data = new FormData(form);
      data.append("CustomField", "This is some extra data, testing");
      $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: "<?php echo base_url('Suratdokumen/prosesTambahupdatefile'); ?>",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function(data) {
          var out = jQuery.parseJSON(data);
          console.log("Upload Sukses");
          tampilSuratdokumen();
          if (out.status == 'error') {
            $('.form-msg').html(out.msg);
            effect_msg_form();
            $('#loadye').hide();
          } else {
            document.getElementById("form-tambah-suratdokumenfile").reset();
            $('#update-suratdokumen').modal('hide');
            $('.msg').html(out.msg);
            effect_msg();
          }
        },
        error: function(e) {
          console.log("ERROR : ", e);
          $('.form-msg').html(e);
          effect_msg_form();
        }
      });
    });

    $('#change_jenis').on('change', function() {
      // event.preventDefault();

      // alert(this.value); //or alert($(this).val());
      var id = $(this).val();
      // alert(id);
      $.ajax({
          method: 'POST',
          url: '<?php echo base_url('Suratdokumen/tampilperjenis/'); ?>' + id,
        })
        .done(function(data) {
          MyTable.fnDestroy();
          $('#data-Suratdokumen').html(data);
          refresh();
        })
      // e.preventDefault();
    });

  })
</script>