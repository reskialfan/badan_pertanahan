<?php
$no = 1;
foreach ($dataJenisdokumen as $jenisdokumen) {
?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $jenisdokumen->no_dokumen; ?></td>
    <td><?php echo $jenisdokumen->nm_jenis_dokumen; ?></td>
    <td><?php echo $jenisdokumen->nama_pemilik; ?></td>
    <td><?php echo $jenisdokumen->nama_pemilik; ?></td>

    <td><?php echo $jenisdokumen->nama_pemilik; ?></td>

    <td class="text-center" style="min-width:230px;">
      <button class="btn btn-warning update-datajenisdokumen" data-id="<?php echo $jenisdokumen->id_jenis_dokumen; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
      <button class="btn btn-danger konfirmasiHapus-jenisdokumen" data-id="<?php echo $jenisdokumen->id_jenis_dokumen; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      <!-- <button class="btn btn-info detail-datajenisdokumen" data-id="<?php echo $jenisdokumen->id_jenis_dokumen; ?>"><i class="glyphicon glyphicon-info-sign"></i> Detail</button> -->
    </td>
  </tr>
<?php
  $no++;
}
?>