<div class="msg" style="display:none;">
    <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box bg-lime">
    <div class="box-header bg-green">
        <a href='<?php echo base_url() ?>Igdumum'><button class="btn btn-warning pull-right">refresh</button></a>

        <div class='col-md-4'>
            <div class='box bg-green'>

                <form class='form-horizontal' role='form' method=POST target="_self" action='' enctype='multipart/form-data'>
                    <table class='table table-condensed table-bordered'>
                        <tbody>
                            <tr>
                                <td><input type='text' class='form-control' placeholder='Cari Nama ...' name='nama' onkeyup="this.value = this.value.toUpperCase()" required></td>
                                <td><button type='submit' name='cari' class='btn btn-info'>Cari</button></td>
                            </tr>

                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <div class="col-md-8"></div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class='col-md-12'>
            <div class='box' id="list-data">
                <div class='box-header bg-red'>
                    <h3 class='box-title'>PASIEN IGD UMUM</h3>
                </div>
                <div class='box-body bg-olive'>
                    <?php
                   foreach ($dataPasienigd as $rowdataPasienigd) {
                        if ($rowdataPasienigd->id_triage == '1') {
                            $cssbg = 'bg-red';
                        } elseif ($rowdataPasienigd->id_triage == '2') {
                            $cssbg = 'bg-yellow';
                        } elseif ($rowdataPasienigd->id_triage == '3') {
                            $cssbg = 'bg-green';
                        } elseif ($rowdataPasienigd->id_triage == '4') {
                            $cssbg = 'bg-blue';
                        } elseif ($rowdataPasienigd->id_triage == '') {
                            $cssbg = 'bg-gray';
                        }
                        if ($rowdataPasienigd->id_cr_plg_igd == NULL or $rowdataPasienigd->id_cr_plg_igd == '')
                        {
                            $css='animated flash slower delay-1s infinite';
            
                        }
                        else if ($rowdataPasienigd->id_cr_plg_igd='1')
                        {
                            $css='';
                        }
                        $namanya = substr($rowdataPasienigd->nama, 0, 20);
                        $tgl = substr($rowdataPasienigd->tgl_masuk, 0, 10);
                        ?>
                        <div class='col-md-3 col-sm-6 col-xs-12'>
                            <!-- small box -->
                            <div class='small-box <?php echo $cssbg; ?>'>
                                <div class='inner'>
                                    <div class='<?php echo $css ?>'>
                                        <h3><?php echo $rowdataPasienigd->kd_pasien; ?></h3>
                                    </div>
                                    <p><?php echo $namanya; ?></p>
                                    <p><?php echo date_indo($tgl); ?></p>
                                </div>
                                <div class='icon'>
                                    <i class='ion ion-person-add'></i>
                                </div>
                                <a href='#' class='card-igd small-box-footer' data-id='<?php echo $rowdataPasienigd->kd_pasien; ?>' data-id1='<?php echo $rowdataPasienigd->tgl_masuk; ?>' data-id2='<?php echo $rowdataPasienigd->urut_masuk; ?>' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tempat-modal"></div>
<div id="tempat-modal-1"></div>
<div id="tempat-modal-2"></div>

<script type="text/javascript">
    $(document).ready(function() {
        window.onload = function() {
            //tampilKota();
            <?php
            if ($this->session->flashdata('msg') != '') {
                echo "effect_msg();";
            }
            ?>
        }

        function effect_msg_form() {
            // $('.form-msg').hide();
            $('.form-msg').show(1000);
            setTimeout(function() {
                $('.form-msg').fadeOut(1000);
            }, 3000);
        }

        function effect_msg() {
            // $('.msg').hide();
            $('.msg').show(1000);
            setTimeout(function() {
                $('.msg').fadeOut(1000);
            }, 3000);
        }

        $(document).on("click", ".card-igd", function() {
            var rowid = $(this).attr("data-id");
            var rowid1 = $(this).attr("data-id1");
            var rowid2 = $(this).attr("data-id2");

            // console.log(rowid);
            // console.log(rowid1);
            // console.log(rowid2);
            $.ajax({
                    method: "POST",
                    url: "<?php echo base_url('Igdumum/modal_pasien'); ?>",
                    data: {
                        "rowid": rowid,
                        "rowid1": rowid1,
                        "rowid2": rowid2
                    },
                })
                .done(function(data) {
                    $('#tempat-modal').html(data);
                    $('#update-igd-reski').modal('show');
                })
        });

        $(document).on("click", "#mod-lap-trias", function() {
            // var rowid = $(this).attr("data-id");
            // var rowid1 = $(this).attr("data-id1");
            // var rowid2 = $(this).attr("data-id2");

            // console.log(rowid);
            // console.log(rowid1);
            // console.log(rowid2);
            $.ajax({
                    method: "POST",
                    url: "<?php echo base_url('Igdumum/modal_laporan_triase'); ?>",
                    data: {
                        // "rowid": rowid,
                        // "rowid1": rowid1,
                        // "rowid2": rowid2
                    },
                })
                .done(function(data) {
                    $('#tempat-modal-1').html(data);
                    $('#laporan-triase-reski').modal('show');
                })
        });

        $(document).on("click", "#mod-lap-kll", function() {
            // var rowid = $(this).attr("data-id");
            // var rowid1 = $(this).attr("data-id1");
            // var rowid2 = $(this).attr("data-id2");

            // console.log(rowid);
            // console.log(rowid1);
            // console.log(rowid2);
            $.ajax({
                    method: "POST",
                    url: "<?php echo base_url('Igdumum/modal_laporan_kll'); ?>",
                    data: {
                        // "rowid": rowid,
                        // "rowid1": rowid1,
                        // "rowid2": rowid2
                    },
                })
                .done(function(data) {
                    $('#tempat-modal-2').html(data);
                    $('#laporan-kll-reski').modal('show');
                })
        });
        

        

        $(document).on('submit', '#form-update-pasien', function(e) {
            var data = $(this).serialize();
            $.ajax({
                    method: 'POST',
                    url: '<?php echo base_url('Igdumum/prosesUpdate'); ?>',
                    data: data
                })
                .done(function(data) {
                    var out = jQuery.parseJSON(data);

                    //tampilKota();
                    if (out.status == 'form') {
                        $('.form-msg').html(out.msg);
                        effect_msg_form();
                    } else {
                        document.getElementById("form-update-pasien").reset();
                        $('#update-igd-reski').modal('hide');
                        $('.msg').html(out.msg);
                        effect_msg();
                    }
                })

            e.preventDefault();
        });

        $('#update-pasien').on('hidden.bs.modal', function() {
            $('.form-msg').html('');
        });

        $(document).on('submit', '#form-laporan-triase', function(e) {
            // var data = $(this).serialize();
            // console.log(data);
            var tglawal = $("#tgl_1").val();
            var tglakhir = $("#tgl_2").val();
            //console.log(tglawal);
            //console.log(tglakhir);
            window.open('<?php echo base_url('Igdumum/export_lap_triase/'); ?>'+tglawal+'/'+tglakhir);
            $('#laporan-triase-reski').modal('hide');
            return false;
            e.preventDefault();
        });

        $(document).on('submit', '#form-laporan-kll', function(e) {
            // var data = $(this).serialize();
            // console.log(data);
            var tglawal = $("#tgl_3").val();
            var tglakhir = $("#tgl_4").val();
            //console.log(tglawal);
            //console.log(tglakhir);
            window.open('<?php echo base_url('Igdumum/export_lap_kll/'); ?>'+tglawal+'/'+tglakhir);
            $('#laporan-kll-reski').modal('hide');
            return false;
            e.preventDefault();
        });

       

    })
</script>