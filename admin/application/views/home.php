<?php if ($userdata->level == 'admin') { ?>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-navy">
      <div class="inner">
        <h3>ARSIP</h3>

        <p>DOKUMEN</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-briefcase-outline"></i>
      </div>
      <a href="<?php echo base_url('Suratdokumen') ?>" class="small-box-footer">Lihat Dokumen <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-orange">
      <div class="inner">
        <h3>USER</h3>

        <p>DOKUMEN</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-briefcase-outline"></i>
      </div>
      <a href="<?php echo base_url('User') ?>" class="small-box-footer">Lihat User <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <div class="option-laporan small-box bg-blue">
      <div class="inner">
        <h3>Kelurahan</h3>

        <p>DOKUMEN</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-briefcase-outline"></i>
      </div>
      <a href="<?php echo base_url('Kota') ?>" class="small-box-footer">Lihat Kelurahan <i class="fa fa-arrow-circle-right"></i></a>

    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <div class="option-laporan small-box bg-red">
      <div class="inner">
        <h3>Laporan</h3>

        <p>DOKUMEN</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-briefcase-outline"></i>
      </div>
      <a href="#" class="small-box-footer">Lihat laporan <i class="fa fa-arrow-circle-right"></i></a>

    </div>
  </div>

 

<?php
} else {
?>
  <div class="col-lg-3 col-xs-6">
    <div class="option-laporan small-box bg-red">
      <div class="inner">
        <h3>Laporan</h3>

        <p>DOKUMEN</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-briefcase-outline"></i>
      </div>
      <a href="#" class="option-laporan small-box-footer">Lihat Dokumen <i class="fa fa-arrow-circle-right"></i></a>

    </div>
  </div>
<?php
}
?>

<div id="tempat-modal"></div>

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
                    for(i=0; i<data.length; i++){
                        html += '<option>'+data[i].nama_kelurahan+'</option>';
                    }
                    $('.kelurahan').html(html);
                     
                }
            });
        });

    $(document).on("click", ".option-laporan", function() {
      // var rowid = $(this).attr("data-id");
      // var rowid1 = $(this).attr("data-id1");
      // var rowid2 = $(this).attr("data-id2");

      // console.log(rowid);
      // console.log(rowid1);
      // console.log(rowid2);
      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Suratdokumen/modal_laporan'); ?>",
          data: {
            // "rowid": rowid,
            // "rowid1": rowid1,
            // "rowid2": rowid2
          },
        })
        .done(function(data) {
          $('#tempat-modal').html(data);
          $('#laporan-modal').modal('show');
        })
    });

    $(document).on('submit', '#form-laporan-va', function(e) {
            // var data = $(this).serialize();
            // console.log(data);
            var jenis_suratdokumen = $("#jenis_suratdokumen").val();
            var id_kecamatan = $("#id_kecamatan").val();
            var kelurahan = $("#kelurahan").val();
            //console.log(tglawal);
            //console.log(tglakhir);
            window.open('<?php echo base_url('Suratdokumen/laporan/'); ?>' + jenis_suratdokumen + '/' + id_kecamatan + '/' + kelurahan);
            $('#laporan-modal').modal('hide');
            return false;
            e.preventDefault();
        });

  })
</script>