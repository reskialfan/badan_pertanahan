<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Kelurahan</h3>

  <form id="form-tambah-kota" method="POST">
  <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <select name='id_kecamatan' id='id_kecamatan' class='form-control select2' style="width: 100%;" required>
                                <option value=''> -Silahkan Pilih-</option>
                                <?php foreach ($dataKecamatan as $rdataKecamatan) { ?>
                                    <option value='<?php echo  $rdataKecamatan->id_kecamatan; ?>'><?php echo  $rdataKecamatan->nama_kecamatan; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                              </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Nama Kel / Desa" name="nama_kelurahan" aria-describedby="sizing-addon2">
    </div>
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
      </div>
    </div>
  </form>
</div>