<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Jenis Dokumen</h3>

  <form id="form-update-jenis-dokumen" method="POST">
    <input type="hidden" name="id_jenis_dokumen" value="<?php echo $datajenisdokumen->id_jenis_dokumen; ?>">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-th-list"></i>
      </span>
      <input type="text" class="form-control" placeholder="Nama Jenis Dokumen" name="nm_jenis_dokumen" aria-describedby="sizing-addon2" value="<?php echo $datajenisdokumen->nm_jenis_dokumen; ?>">
    </div>
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
      </div>
    </div>
  </form> 
</div>