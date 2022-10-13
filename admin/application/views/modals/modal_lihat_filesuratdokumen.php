<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;"> Nomor : <Strong> <?php echo $datasuratdokumen->no_surat_dokumen; ?></strong></h3>
  <div class="box">
    <div class="box-body table-responsive">
      <table class="table table-bordered table-striped" style="background-color:#E8E8E8;">
        <tbody>
          <tr>
            <?php
            $noin = 1;
            foreach ($datafile as $filenya) {
              $patch = $filenya->nm_file_surat_dokumen;
              $nama_file = substr($filenya->nm_file_surat_dokumen, 0, 80);


              echo "
      <tr>
        
        <td>
          <div>
          " . $noin . ". " . $nama_file . "
          </div>
        </td>
        <td>
        <a href='" . base_url('assets/file_surat_dokumen') . "/" . $filenya->nm_file_surat_dokumen . "' onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=650, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;' target='_blank'><button class='btn btn-success '><i class='glyphicon glyphicon-download'></i>lihat</button></a>
        </td>
      </tr>
      ";
              $noin++;
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>

</div>