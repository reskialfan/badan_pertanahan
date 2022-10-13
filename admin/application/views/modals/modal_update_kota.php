<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Kelurahan</h3>

  <form id="form-update-kota" method="POST">
    <input type="hidden" name="id_kelurahan" value="<?php echo $dataKota->id_kelurahan; ?>">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <select name='id_kecamatan' id="id_kecamatan" class="x form-control" style="width: 100%;" required>
                                <?php
                        foreach ($dataKecamatan as $kec) {
                        ?>
                          <option value="<?php echo $kec->id_kecamatan; ?>" <?php if ($kec->id_kecamatan == $dataKota->id_kecamatan) {
                                                                                    echo "selected='selected'";
                                                                                  } ?>><?php echo $kec->nama_kecamatan; ?></option>
                        <?php
                        }
                        ?>
                            </select> 
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Nama Kelurahan / Desa" name="nama_kelurahan" aria-describedby="sizing-addon2" value="<?php echo $dataKota->nama_kelurahan; ?>">
    </div>
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
      </div>
    </div>
  </form> 
</div>

