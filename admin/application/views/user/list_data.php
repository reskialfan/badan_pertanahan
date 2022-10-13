<?php
  foreach ($dataUser as $user) {
    ?>
    <tr>
      <td><?php echo $user->id; ?></td>
      <td><?php echo $user->username; ?></td>
      <td><?php echo $user->nama; ?></td>
      <td><?php echo $user->foto; ?></td>
      <td class="text-center" style="min-width:230px;">
        <!-- <button class="btn btn-warning update-dataPegawai" data-id="<?php echo $user->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button> -->
        <button class="btn btn-danger konfirmasiHapus-user" data-id="<?php echo $user->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>