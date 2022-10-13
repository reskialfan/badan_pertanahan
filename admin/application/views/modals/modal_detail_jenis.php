<div class="col-md-12 well">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;"><i class="fa fa-location-arrow"></i> List Surat (Dari : <b><?php echo $jenis->nm_jenis; ?></b>)</h3>

  <div class="box box-body">
      <table id="tabel-detail" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Judul Surat</th>
            <th>Nama Jenis</th>
          </tr>
        </thead>
        <tbody id="data-surat">
          <?php
            foreach ($datajenis as $surat) {
              ?>
              <tr>
                <td style="min-width:230px;"><?php echo $surat->judul_surat; ?></td>
                <td><?php echo $surat->nm_jenis; ?></td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
  </div>

  <div class="text-right">
    <button class="btn btn-danger" data-dismiss="modal"> Close</button>
  </div>
</div>