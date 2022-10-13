<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Laporan</h3>

  <form id="form-laporan-va" method="POST">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-search"></i>
      </span>
      <select name='jenis_suratdokumen' id="jenis_suratdokumen" class='form-control select2' style="width: 100%;" >
        <option value='0'> - ALL Jenis Dokumen-</option>
        <?php foreach ($dataJenis as $sifat) { ?>
          <option value='<?php echo  $sifat->id_jenisdokumen2; ?>'><?php echo  $sifat->uraian_jenisdokumen2; ?></option>
        <?php
        }
        ?>
      </select>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-calendar"></i>
      </span>
      <select name='id_kecamatan' id='id_kecamatan' class='form-control select2' style="width: 100%;" >
        <option value='0'> - All Kecamatan -</option>
        <?php foreach ($dataKecamatan as $rdataKecamatan) { ?>
          <option value='<?php echo  $rdataKecamatan->id_kecamatan; ?>'><?php echo  $rdataKecamatan->nama_kecamatan; ?></option>
        <?php
        }
        ?>
      </select>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-calendar"></i>
      </span>
      <select name='kelurahan' id="kelurahan" class="kelurahan form-control select2" style="width: 100%;" >
                                <option value='0'> - All Kelurahan-</option>
                            </select>
    </div>
    <!-- <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-book"></i>
      </span>
      <select class="form-control" name="jenis" id="jenis" required>
      <option value=''>Silahkan Pilih Jenis</option>
        <option value='semua'><b>semua</b></option>
        <option value='01'>Rajal</option>
        <option value='02'>Ranap</option>
      </select>
    </div> -->

    <!-- <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-book"></i>
      </span>
      <select class="form-control" name="pelayanan" id="pelayanan" required>
      <option value=''>Silahkan Pilih Pelayanan</option>
      <option value='semua'><b>semua</b></option>
        <option value='rs'>RS</option>
        <option value='pav'>Pav</option>
      </select>
    </div> -->


    <div class="form-group">
      <div class="col-md-12">
        <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Lihat laporan </button>
      </div>
    </div>
  </form>
</div>

<script type="text/javascript">
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
      })
</script>