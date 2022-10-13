<?php
  $no = 1;
  foreach ($dataJenis as $jenis) {
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $jenis->nm_jenis; ?></td>
      <td class="text-center" style="min-width:230px;">
          <button class="btn btn-warning update-datajenis" data-id="<?php echo $jenis->id_jenis; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
          <button class="btn btn-danger konfirmasiHapus-jenis" data-id="<?php echo $jenis->id_jenis; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
          <button class="btn btn-info detail-datajenis" data-id="<?php echo $jenis->id_jenis; ?>"><i class="glyphicon glyphicon-info-sign"></i> Detail</button>
      </td>
    </tr>
    <?php
    $no++;
  }
?>