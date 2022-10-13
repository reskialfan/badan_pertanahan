<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:ceform-update-isisuratkerjasamanter;">Update Data Arsip Covid</h3>
  <div class='col-md-12'>
  <div class="form-msg">  <?php echo @$this->session->flashdata('form-msg'); ?>
</div>

    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">Isi</a></li>
        <li><a href="#tab_2" data-toggle="tab">file</a></li>

      </ul>
      <div class="tab-content">
        <div class="tab-pane active isi" id="tab_1">
          <!-- <b>How to use:</b> -->
          <form id="form-update-isiarsipcovid" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_arsip_covid" value="<?php echo $dataarsipcovid->id_arsip_covid; ?>">
            <div class="box-body table-responsive">
              <table class='table table-condensed table-bordered'>
                <tbody>
                  <tr>
                    <th width='150px' scope='row'>No Dokumen</th>
                    <td><input type='text' class='form-control' value="<?php echo $dataarsipcovid->no_dokumen_covid; ?>" name="no_dokumen_covid" aria-describedby="sizing-addon2"></td>
                  </tr>
                  <tr>
                    <th width='150px' scope='row'>Perihal</th>
                    <td><input type='text' class='form-control' value="<?php echo $dataarsipcovid->perihal_covid; ?>" name='perihal_covid'></td>
                  </tr>
                  <tr>
                    <th width='150px' scope='row'>Tgl Dokumen</th>
                    <?php
                    $exp = explode('-', $dataarsipcovid->tgl_dokumen_covid);
                    if (count($exp) == 3) {
                      $date = $exp[2] . '-' . $exp[1] . '-' . $exp[0];
                    }
                    ?>
                    <td><input type='text' autocomplete='off' class='form-control' value="<?php echo $date; ?>" id='tgl_8' name='tgl_dokumen_covid' data-date-format='dd-mm-yyyy'></td>
                  </tr>

                  <tr>
                    <th width='150px' scope='row'>Jenis Surat</th>
                    <td>
                      <select name="jenis_surat" class="form-control select2" aria-describedby="sizing-addon2">
                        <option value=""> -- Silahkan Pilih --</option>
                        <?php
                        foreach ($dataJenis as $jenis) {
                        ?>
                          <option value="<?php echo $jenis->id_jenis; ?>" <?php if ($jenis->id_jenis == $dataarsipcovid->jenis_surat) {
                                                                            echo "selected='selected'";
                                                                          } ?>><?php echo $jenis->nm_jenis; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </td>
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
        <div class="tab-pane" id="tab_2">
      
          <form id="form-tambah-arsipcovid-file" method="POST" enctype="multipart/form-data">
            <input type='hidden' class='form-control' value="<?php echo $dataarsipcovid->id_arsip_covid; ?>" name='id_arsip_covid' aria-describedby="sizing-addon2">
            <input type='hidden' class='form-control' value="<?php echo $date; ?>" name='tgl_dokumen_covid' data-date-format='dd-mm-yyyy'>
            <div class="box-body table-responsive">
              <table class='table table-condensed table-bordered'>
                <tbody id="tbody_targetfile">
                  <tr>
                    <td>
                      <div id="div_file_update">
                        <input type="button" id="add_file_update" value="Tambah" class="btn btn-primary">
                        <img align='center' id="loadyy" style="display:none" src="./assets/img/loader.gif" width="500px">

                      </div>
                    </td>
                  </tr>
                  <?php
                  $nofilx = 0;
                  foreach ($datafile as $file) {
                    $nama_file = substr($file->nm_file_covid, 0, 70);

                    echo "
                    <tr>
                      <td>
                        <div>
                        <a href='" . base_url('assets/file_arsip_covid') . "/" . $file->nm_file_covid . "' onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=650, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;' target='_blank'><button class='btn btn-success '>$nama_file</button></a>
                        </div>
                      </td>
                      <td>
                      <input type=\"button\" data-id='" . $file->id_file_covid . "' data-id1='" . $file->nm_file_covid . "' id=\"hapus_file\" value=\"Hapus\" class=\"btn btn-danger chxfile\">
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
              <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Updatee Data File</button>
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

<script>
  $(document).ready(function() {
    $("#tgl_8").datepicker();
    $("#tgl_9").datepicker();
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


    $("#tbody_targetfile").on("click", ".chxfile", function() {
      $(this).parents("tr").remove();
      id_file_covid = $(this).attr("data-id");
      nm_file_covid = $(this).attr("data-id1");

      var id = id_file_covid;
      var id1 = nm_file_covid;

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Arsipcovid/deletefileone'); ?>",
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