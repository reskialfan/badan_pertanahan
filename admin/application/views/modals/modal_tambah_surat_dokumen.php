<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">

    <div class="form-msg"></div>

    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Form Tambah Dokumen !</h3>

    <form id="form-tambah-Suratdokumen" method="POST" enctype="multipart/form-data">
        <div class='col-md-12'>
            <table class='table table-condensed table-bordered'>
                <tbody>
                    <tr>
                        <th width='150px' scope='row'>No Surat Dokumen</th>
                        <td><input type='text' class='form-control' name='no_surat_dokumen' aria-describedby="sizing-addon2" placeholder="isikan nomor surat ..."></td>
                    </tr>
                    <tr>
                        <th width='150px' scope='row'>Jenis Dokumen</th>
                        <td>
                            <select name='jenis_suratdokumen' class='form-control select2' style="width: 100%;" required>
                                <option value=''> -Silahkan Pilih-</option>
                                <?php foreach ($dataJenis as $sifat) { ?>
                                    <option value='<?php echo  $sifat->id_jenisdokumen2; ?>'><?php echo  $sifat->uraian_jenisdokumen2; ?></option>
                                <?php
                                }
                                ?>
                            </select>

                        </td>
                    </tr>
                    <tr>
                        <th width='150px' scope='row'>Kecamatan</th>
                        <td>
                            <select name='id_kecamatan' id='id_kecamatan' class='form-control select2' style="width: 100%;" required>
                                <option value=''> -Silahkan Pilih-</option>
                                <?php foreach ($dataKecamatan as $rdataKecamatan) { ?>
                                    <option value='<?php echo  $rdataKecamatan->id_kecamatan; ?>'><?php echo  $rdataKecamatan->nama_kecamatan; ?></option>
                                <?php
                                }
                                ?>
                            </select>

                        </td>
                    </tr>

                    <tr>
                        <th width='150px' scope='row'>Kelurahan</th>
                        <td>
                            <select name='kelurahan' id="kelurahan" class="kelurahan form-control select2" style="width: 100%;" required>
                                <option value=''> -Silahkan Pilih-</option>
                            </select>

                        </td>
                    </tr>
                    <tr>
                        <th width='150px' scope='row'>Nama Pemilik</th>
                        <td><input type='text' class='form-control' name='nama_pemilik' aria-describedby="sizing-addon2" required></td>
                    </tr>
                    <tr>
                        <th width='150px' scope='row'>Luas Lahan</th>
                        <td><input type='text' class='form-control' name='luas_lahan' aria-describedby="sizing-addon2" required></td>
                    </tr>
                    <tr>
                        <th width='150px' scope='row'>Luas Bangunan</th>
                        <td><input type='text' class='form-control' name='luas_bangunan' aria-describedby="sizing-addon2" required></td>
                    </tr>
                    <tr>
                        <th width='150px' scope='row'>Batas Sisi barat</th>
                        <td><input type='text' class='form-control' name='batas_sisi_barat' aria-describedby="sizing-addon2" required></td>
                    </tr>
                    <tr>
                        <th width='150px' scope='row'>Batas Sisi Utara</th>
                        <td><input type='text' class='form-control' name='batas_sisi_utara' aria-describedby="sizing-addon2" required></td>
                    </tr>
                    <tr>
                        <th width='150px' scope='row'>Batas Sisi Timur</th>
                        <td><input type='text' class='form-control' name='batas_sisi_timur' aria-describedby="sizing-addon2" required></td>
                    </tr>
                    <tr>
                        <th width='150px' scope='row'>Batas Sisi Selatan</th>
                        <td><input type='text' class='form-control' name='batas_sisi_selatan' aria-describedby="sizing-addon2" required></td>
                    </tr>
                    <tr>
                        <th width='150px' scope='row'>file *PDF</th>
                        <td>
                            <div id="div_file">
                                &nbsp;<i class='fa fa-plus-circle' id='add_file'></i> <input type='file' name='f[]' id='f'>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="form-control btn btn-primary" id='btn_submit'> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
                <img align='center' id="loady" style="display:none" src="./assets/img/loader.gif" width="500px">

            </div>
        </div>
    </form>
</div>