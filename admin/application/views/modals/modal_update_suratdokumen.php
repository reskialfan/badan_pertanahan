<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Dokumen</h3>

  <!-- hidden -->
  <input type="hidden" name="id_surat_arsip_vital" value="<?php echo $datasuratdokumen->id_surat_dokumen; ?>">
  <!-- /hideen -->
  <div class='col-md-12'>
    <div class="form-msg"></div>

    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">Isi Dokumen</a></li>
        <li><a href="#tab_4" data-toggle="tab">File</a></li>

      </ul>
      <div class="tab-content">
        <div class="tab-pane active isi" id="tab_1">
          <!-- <b>How to use:</b> -->
          <form id="form-update-isisuratdokumen" method="POST" enctype="multipart/form-data">
            <div class="box-body table-responsive">

              <table class='table table-condensed table-bordered'>
                <tbody>
                  <input type='hidden' class='form-control' value="<?php echo $datasuratdokumen->id_surat_dokumen; ?>" name='id_surat_dokumen' aria-describedby="sizing-addon2">
                  <tr>
                    <th width='150px' scope='row'>No Dokumen</th>
                    <td><input type='text' class='form-control' placeholder="..." value="<?php echo $datasuratdokumen->no_surat_dokumen; ?>" name='no_surat_dokumen' aria-describedby="sizing-addon2"></td>
                  </tr>
                  <tr>
                    <th width='150px' scope='row'>Jenis dokumen</th>
                    <td>
                      <select width='500px' name="jenis_suratdokumen" class="select2" aria-describedby="sizing-addon2">
                        <?php
                        foreach ($datasifat as $sifat) {
                        ?>
                          <option value="<?php echo $sifat->id_jenisdokumen2; ?>" <?php if ($sifat->id_jenisdokumen2 == $datasuratdokumen->jenis_suratdokumen) {
                                                                                    echo "selected='selected'";
                                                                                  } ?>><?php echo $sifat->uraian_jenisdokumen2; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </td>
                  </tr>
                  <tr>
                        <th width='150px' scope='row'>Kecamatan</th>
                        <td>
                            <select name='id_kecamatan' id='id_kecamatan' class='form-control select2' style="width: 100%;">
                                <option value=''> - Abaikan Jika tidak Berubah-</option>
                                <?php foreach ($dataKecamatan as $rdataKecamatan) { ?>
                                    <option value='<?php echo  $rdataKecamatan->id_kecamatan; ?>'><?php echo  $rdataKecamatan->nama_kecamatan; ?></option>
                                <?php
                                }
                                ?>
                            </select>

                        </td>
                    </tr>

                    <tr>
                        <th width='150px' scope='row'>Kelurahan</th>
                        <td>
                            <select name='kelurahan' id="kelurahan" class="kelurahan form-control" style="width: 100%;" required>
                                <?php
                        foreach ($dataKelurahan as $kel) {
                        ?>
                          <option value="<?php echo $kel->id_kelurahan; ?>" <?php if ($kel->id_kelurahan == $datasuratdokumen->kelurahan) {
                                                                                    echo "selected='selected'";
                                                                                  } ?>><?php echo $kel->nama_kelurahan; ?></option>
                        <?php
                        }
                        ?>
                            </select>
                          

                        </td>
                    </tr>
                  <tr>
                    <th width='150px' scope='row'>Nama Pemilik</th>
                    <td><input type='text' class='form-control' value="<?php echo $datasuratdokumen->nama_pemilik; ?>" name='nama_pemilik' aria-describedby="sizing-addon2"></td>
                  </tr>
                  <tr>
                    <th width='150px' scope='row'>Luas Lahan</th>
                    <td><input type='text' class='form-control' value="<?php echo $datasuratdokumen->luas_lahan; ?>" name='luas_lahan' aria-describedby="sizing-addon2"></td>
                  </tr>
                  <tr>
                    <th width='150px' scope='row'>Luas Bangunan</th>
                    <td><input type='text' class='form-control' value="<?php echo $datasuratdokumen->luas_bangunan; ?>" name='luas_bangunan' aria-describedby="sizing-addon2"></td>
                  </tr>
                  <tr>
                    <th width='150px' scope='row'>Batas Sisi Barat</th>
                    <td><input type='text' class='form-control' value="<?php echo $datasuratdokumen->luas_lahan; ?>" name='batas_sisi_barat' aria-describedby="sizing-addon2"></td>
                  </tr>
                  <tr>
                    <th width='150px' scope='row'>Batas Sisi Utara</th>
                    <td><input type='text' class='form-control' value="<?php echo $datasuratdokumen->batas_sisi_utara; ?>" name='batas_sisi_utara' aria-describedby="sizing-addon2"></td>
                  </tr>
                  <tr>
                    <th width='150px' scope='row'>Batas Sisi Timur</th>
                    <td><input type='text' class='form-control' value="<?php echo $datasuratdokumen->batas_sisi_timur; ?>" name='batas_sisi_timur' aria-describedby="sizing-addon2"></td>
                  </tr>
                  <tr>
                    <th width='150px' scope='row'>Batas Sisi Selatan</th>
                    <td><input type='text' class='form-control' value="<?php echo $datasuratdokumen->batas_sisi_selatan; ?>" name='batas_sisi_selatan' aria-describedby="sizing-addon2"></td>
                  </tr>


                </tbody>
              </table>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
              </div>
            </div>
          </form>
        </div>

        <div class="tab-pane" id="tab_4">
          <form id="form-tambah-suratdokumenfile" method="POST" enctype="multipart/form-data">
            <input type='hidden' class='form-control' value="<?php echo $datasuratdokumen->id_surat_dokumen; ?>" name='id_surat_dokumen' aria-describedby="sizing-addon2">
            <div class="box-body table-responsive">

              <table class='table table-condensed table-bordered'>
                <tbody id="tbody_targetfile">
                  <tr>
                    <td>
                      <div id="div_file_update">
                        <input type="button" id="add_file_update" value="Tambah" class="btn btn-primary">
                      </div>
                    </td>
                  </tr>
                  <?php
                  $nofilx = 0;
                  foreach ($datafile as $file) {
                    $nama_file = substr($file->nm_file_surat_dokumen, 0, 80);
                    echo "
                    <tr>
                      <td>
                        <div>
                        <a href='" . base_url('assets/file_surat_dokumen') . "/" . $file->nm_file_surat_dokumen . "' onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=650, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;' target='_blank'><button class='btn btn-success '>$nama_file</button></a>
                        </div>
                      </td>
                      <td>
                      <input type=\"button\" data-id='" . $file->id_file_surat_dokumen . "' data-id1='" . $file->nm_file_surat_dokumen . "' id=\"hapus_file\" value=\"Hapus\" class=\"btn btn-danger chxfile\">
                      </td>
                    </tr>
                ";
                    $nofilx++;
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-12">
              <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data File</button>
              <img align='center' id="loadye" style="display:none" src="./assets/img/loader.gif" width="500px">
            </div>
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>

  </div>

  </form>
</div>

<script type="text/javascript">
  $('.select2').select2();
  $(document).ready(function() {

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

    function effect_msg_form() {
      $('.form-msg').show(1000);
      setTimeout(function() {
        $('.form-msg').fadeOut(3000);
      }, 3000);
    }

    function effect_msg() {
      $('.msg').show(1000);
      setTimeout(function() {
        $('.msg').fadeOut(1000);
      }, 3000);
    }

    $("#tgl_10").datepicker();

    //<!--file -->
    var id_file = 0;
    var nofilx = <?php echo $nofilx; ?>;
    $("#add_file_update").click(function() {
      id_file += 1;
      var target = "<tr><td><div><input type='file' class=' cls_file_update' name='f[]' id='f" + nofilx + "' aria-describedby='sizing-addon2' required></div></td><td><input type='button' id='hapus_file' value='Hapus' class='btn btn-danger chxfile'></td></tr>";
      $("#tbody_targetfile").append(target);
      // nokex += 1;
    });


    $("#tbody_targetfile").on("click", ".chxfile", function() {
      $(this).parents("tr").remove();
      file_surat_dokumen = $(this).attr("data-id");
      nm_file_surat_dokumen = $(this).attr("data-id1");

      var id = file_surat_dokumen;
      var id1 = nm_file_surat_dokumen;

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Suratdokumen/deletefileone'); ?>",
          // data: {
          //   "id": id,

          // },
          data: {
            "id": id,
            "id1": id1
          },
        })
        .done(function(data) {
          var out = jQuery.parseJSON(data);
          $('.form-msg').html(out.msg);
          effect_msg_form();
        })
    });

  });
</script>