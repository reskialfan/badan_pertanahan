<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">

  <div class="form-msg"></div>

  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

  <h3 style="display:block; text-align:center;">Tambah Data Arsip Covid</h3>



  <form id="form-tambah-arsipcovid" method="POST" enctype="multipart/form-data">

    <div class='col-md-12'>
      <div class="box-body table-responsive">

        <table class='table table-condensed table-bordered'>

          <tbody>

            <tr>

              <th width='150px' scope='row'>No Keputusan</th>

              <td><input type='text' class='form-control' placeholder="nomor dok .." name='no_dokumen_covid' aria-describedby="sizing-addon2" required></td>

            </tr>

            <tr>

              <th width='150px' scope='row'>Perihal</th>

              <td><input type='text' class='form-control' name='perihal_covid' placeholder="perihal covid ..." required></td>

            </tr>

            <tr>

              <th width='150px' scope='row'>Tgl Dokumen</th>

              <td><input type='text' autocomplete='off' class='form-control datepicker2' name='tgl_dokumen_covid' placeholder="tgl dokumen ..." required></td>

            </tr>
            <tr>
              <th width='150px' scope='row'>Jenis Surat</th>
              <td>
                <select name='jenis_surat' class='form-control' required>
                  <option class='form-control' value=''> -Silahkan Pilih-</option>
                  <?php foreach ($dataJenis as $jenis) { ?>
                    <option class='form-control' value='<?php echo  $jenis->id_jenis; ?>'><?php echo  $jenis->nm_jenis; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </td>
            </tr>

            <tr>

              <th width='150px' scope='row'>file</th>

              <td>

                <div id="div_file_keputusan">

                  &nbsp;<i class='fa fa-plus-circle' id='add_file_keputusan'></i> <input type='file' name='f[]' id='f' required>

                </div>

              </td>

            </tr>

          </tbody>

        </table>

      </div>
    </div>

    <div class="form-group">

      <div class="col-md-12">

        <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
        <img align='center' id="loady" style="display:none" src="./assets/img/loader.gif" width="500px">


      </div>

    </div>

  </form>

</div>



<script>


</script>