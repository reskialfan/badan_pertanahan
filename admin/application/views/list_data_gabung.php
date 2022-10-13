<?php
$no = 1;
foreach ($dataGabung as $rdataGabung) {
?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $rdataGabung->perihal; ?></td>
    <td><?php echo $rdataGabung->Source; ?></td>
    <td class="text-center" style="min-width:230px;">
      <button class="btn btn-warning lihat-data" data-id="<?php echo $rdataGabung->perihal; ?>" data-id1="<?php echo $rdataGabung->Source; ?>" data-id2="<?php echo $rdataGabung->idgabung; ?>"><i class="glyphicon glyphicon-hand-up"></i> Pergi ke Arsip</button>
    </td>
  </tr>
<?php
  $no++;
}
?>