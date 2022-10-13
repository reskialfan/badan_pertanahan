<?php

$no = '0';

foreach ($datasuratdokumen as $suratdokumen) {

  $no++;

  // $patch= $suratdokumen->file_surat_arsip_vital;

  $id = $suratdokumen->id_surat_dokumen;

  // $s=$suratdokumen->listinstansi;


?>

  <tr>

    <td width='10px'><?php echo $no; ?></td>

    <td><?php echo $suratdokumen->no_surat_dokumen; ?></td>

    <td><?php echo $suratdokumen->uraian_jenisdokumen2; ?></td>


    <td><?php echo $suratdokumen->nama_pemilik; ?></td>
    <td><?php echo $suratdokumen->luas_lahan; ?></td>

    <td><?php echo $suratdokumen->luas_bangunan; ?></td>







    <td class="text-center" style="min-width:230px;">
      <?php if ($this->session->userdata('level') == 'admin') {
        echo "<button class='btn btn-warning update-datasuratdokumen' data-id='$suratdokumen->id_surat_dokumen' data-id1='$suratdokumen->id_surat_dokumen'><i class='glyphicon glyphicon-cog'></i> Update </button>";
      } else {
        if ($suratdokumen->user == $this->session->userdata('kode')) {
          echo "<button class='btn btn-warning update-datasuratdokumen' data-id='$suratdokumen->id_surat_dokumen' data-id1='$suratdokumen->id_surat_dokumen'><i class='glyphicon glyphicon-cog'></i> Update </button>";
        } else {
          echo "<button class='btn btn-warning disabled'><i class='glyphicon glyphicon-repeat'></i> Update</button>";
        }
      }
      ?>

      <button class="btn btn-success file-datasuratdokumen" data-id="<?php echo $suratdokumen->id_surat_dokumen; ?>"><i class="glyphicon glyphicon-zoom-in"></i> Lihat File</button>


      <?php if ($this->session->userdata('level') == 'admin') {
        echo "<button class='btn btn-danger konfirmasiHapus-suratdokumen' data-id='$suratdokumen->id_surat_dokumen' data-id1='$suratdokumen->id_surat_dokumen' data-toggle='modal' data-target='#konfirmasiHapus'><i class='glyphicon glyphicon-remove-sign'></i> Delete</button>";
      } else {
        if ($suratdokumen->user == $this->session->userdata('kode')) {
          echo "<button class='btn btn-danger konfirmasiHapus-suratdokumen' data-id='$suratdokumen->id_surat_dokumen' data-id1='$suratdokumen->id_surat_dokumen' data-toggle='modal' data-target='#konfirmasiHapus'><i class='glyphicon glyphicon-remove-sign'></i> Delete</button>";
        } else {
          echo "<button class='btn btn-danger disabled' ><i class='glyphicon glyphicon-remove-sign'></i> Delete</button>";
        }
      }
      ?>
    </td>

  </tr>

<?php

}

?>