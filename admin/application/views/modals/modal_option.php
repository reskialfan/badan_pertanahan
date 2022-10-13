<!-- <select name='cacat' class='form-control select2' aria-describedby='sizing-addon2'>
                                    <option value='1'>Ya</option>
                                    <option value='2' selected>Tidak</option>
                                    </select> -->
<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <label class="label-info" style="display:block; text-align:center;font-size:35px;">MANAGEMEN SURAT</label>
    <?php
    foreach ($detail_option as $detail_optionrow)
    $teks = [', NN', ',NN', ' NN', ', TN',  ',TN',' TN', ', SDR', ' SDR', ',SDR', ', AN', ',AN', ', NY', ' NY'];
    $namanya = str_replace($teks, '', $detail_optionrow->nama);
    ?>
    <div class="form-group">
        <div class="col-md-12" style="padding: 0;" align='center'>
            <?php echo "

            <table class='table table-bordered table-hover' style='background-color: #EAE8E8;'>
            <tr>
             <td>Kode Pasien</td><td>$detail_optionrow->kd_pasien</td>
             </tr> 
             <tr>
             <td>Nama</td><td>".namapas($detail_optionrow->nama)."</td>
             </tr>  
             <tr>
             <td>Tgl Kunjung</td><td>" . date('d-m-Y', strtotime($detail_optionrow->tgl_masuk)) . "</td>
             </tr> 
            </table>
            <button class='btn btn-success suratsehat' data-id='$detail_optionrow->kd_pasien' data-id1='$detail_optionrow->tgl_masuk' data-id2='$detail_optionrow->no_transaksi' data-id3='$detail_optionrow->kd_unit' data-id4='$detail_optionrow->urut_masuk' data-id5='1'><i class='glyphicon glyphicon-folder-open'></i> SURAT SEHAT</button><br>
            <br><button class='btn btn-warning bebasnarkoba' data-id='$detail_optionrow->kd_pasien' data-id1='$detail_optionrow->tgl_masuk' data-id2='$detail_optionrow->no_transaksi' data-id3='$detail_optionrow->kd_unit' data-id4='$detail_optionrow->urut_masuk' data-id5='2'><i class='glyphicon glyphicon-folder-open'></i> SURAT BEBAS NARKOBA</button><br>
            <br><button class='btn btn-danger suratjiwa' data-id='$detail_optionrow->kd_pasien' data-id1='$detail_optionrow->tgl_masuk' data-id2='$detail_optionrow->no_transaksi' data-id3='$detail_optionrow->kd_unit' data-id4='$detail_optionrow->urut_masuk' data-id5='3'><i class='glyphicon glyphicon-folder-open'></i> SURAT KETERANGAN SEHAT JIWA</button>
                "
            ?>
            <!-- <button type="button" data-dismiss="modal" aria-label="Close" class="form-control btn btn-danger btn-sm"><span aria-hidden="true">Tutup</span></button> -->
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2();
        $(".chosenn").chosen();
        $('.chosenn').css({
            "width": "300px"
        });


    });
</script>