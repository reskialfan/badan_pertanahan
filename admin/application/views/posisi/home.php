<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6" style="padding: 0;">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-posisi"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
    <div class="col-md-3">
        <a href="<?php echo base_url('Posisi/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
    <div class="col-md-3">
        <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-posisi"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Posisi</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-posisi">

      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_posisi; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPosisi', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
  $data['judul'] = 'Posisi';
  $data['url'] = 'Posisi/import';
  echo show_my_modal('modals/modal_import', 'import-posisi', $data);
?>

<script type="text/javascript">
$(document).ready(function(){ 
	var MyTable = $('#list-data').dataTable({
		"paging": true,
		"lengthChange": true,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});

	window.onload = function() {
		tampilPosisi();
		<?php
		if ($this->session->flashdata('msg') != '') {
			echo "effect_msg();";
		}
		?>
	}

	function refresh() {
		MyTable = $('#list-data').dataTable();
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

	//Posisi
	function tampilPosisi() {
		$.get('<?php echo base_url('Posisi/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-posisi').html(data);
			refresh();
		});
	}

	var id_posisi;
	$(document).on("click", ".konfirmasiHapus-posisi", function() {
		id_posisi = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataPosisi", function() {
		var id = id_posisi;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('Posisi/delete'); ?>",
				data: "id=" + id
			})
			.done(function(data) {
				$('#konfirmasiHapus').modal('hide');
				tampilPosisi();
				$('.msg').html(data);
				effect_msg();
			})
	})

	$(document).on("click", ".update-dataPosisi", function() {
		var id = $(this).attr("data-id");

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('Posisi/update'); ?>",
				data: "id=" + id
			})
			.done(function(data) {
				$('#tempat-modal').html(data);
				$('#update-posisi').modal('show');
			})
	})

	$(document).on("click", ".detail-dataPosisi", function() {
		var id = $(this).attr("data-id");

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('Posisi/detail'); ?>",
				data: "id=" + id
			})
			.done(function(data) {
				$('#tempat-modal').html(data);
				$('#tabel-detail').dataTable({
					"paging": true,
					"lengthChange": false,
					"searching": true,
					"ordering": true,
					"info": true,
					"autoWidth": false
				});
				$('#detail-posisi').modal('show');
			})
	})

	$('#form-tambah-posisi').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('Posisi/prosesTambah'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilPosisi();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-tambah-posisi").reset();
					$('#tambah-posisi').modal('hide');
					$('.msg').html(out.msg);
					effect_msg();
				}
			})

		e.preventDefault();
	});

	$(document).on('submit', '#form-update-posisi', function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('Posisi/prosesUpdate'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilPosisi();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-update-posisi").reset();
					$('#update-posisi').modal('hide');
					$('.msg').html(out.msg);
					effect_msg();
				}
			})

		e.preventDefault();
	});

	$('#tambah-posisi').on('hidden.bs.modal', function() {
		$('.form-msg').html('');
	})

	$('#update-posisi').on('hidden.bs.modal', function() {
		$('.form-msg').html('');
  })
})
</script>