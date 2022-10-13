<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama; ?></p>
        <!-- Status -->
        <a href="<?php echo base_url(); ?>"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">LIST MENU</li>
      <!-- Optionally, you can add icons to the links -->

      <li <?php if ($page == 'home') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>
      <?php if ($userdata->level == 'admin') { ?>
        <li class='treeview'>
          <a href='#'><i class='fa fa-briefcase'></i> <span>Data Dokumen</span><i class='fa fa-angle-left pull-right'></i></a>
          <ul class='treeview-menu'>;
            <li><a href='<?php echo base_url('Suratdokumen') ?>'><i class='fa fa-circle-o'> </i> Entri Dokumen </a></li>
            <li><a href='<?php echo base_url('Kota') ?>'><i class='fa fa-circle-o'> </i> Entri Kelurahan </a></li>
            <li><a href='<?php echo base_url('User') ?>'><i class='fa fa-circle-o'> </i> Entri User </a></li>

          </ul>
        </li>
      <?php
      }
      ?>

      <!-- <?php if ($userdata->level == 'admin' || $userdata->level == 'petugas') { ?>
        <li class='treeview'>
          <a href='#'><i class='fa fa-briefcase'></i> <span>Data Laporan</span><i class='fa fa-angle-left pull-right'></i></a>
          <ul class='treeview-menu'>;
            <li><i class='laporan fa fa-circle-o'> </i> Laporan </a></li>
          </ul>
        </li>
      <?php
            }
      ?> -->

      <!-- <li class='treeview'>
              <a href='#'><i class='glyphicon glyphicon-th'></i> <span>Menu Master</span><i class='fa fa-angle-left pull-right'></i></a>
              <ul class='treeview-menu'>;
              <li><a href='<?php echo base_url('Jenis') ?>'><i class='fa fa-circle-o'> </i> Jenis  </a></li>
              <li><a href='<?php echo base_url('Jenis_dokumen') ?>'><i class='fa fa-circle-o'> </i> Jenis Dokumen  </a></li>
              </ul>
      </li> -->


      <!-- <li <?php if ($page == 'user') {
                  echo 'class="active"';
                } ?>>
        <a href="<?php echo base_url('User'); ?>">
          <i class="fa fa-user"></i>
          <span>Data User</span>
        </a>
      </li> -->
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>

<div id="tempat-modal"></div>


<script type="text/javascript">
  $(document).ready(function() {

    var MyTable = $('#list-dataa').dataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

    function refresh() {
      MyTable = $('#list-dataa').dataTable();
    }

    function tampilGabung() {
      $.get('<?php echo base_url('Suratkeputusan/tampilgabung'); ?>', function(data) {
        MyTable.fnDestroy();
        $('#data-gabung').html(data);
        refresh();
      });
    }

    $(document).on("click", ".pencarian", function() {
      var id = $(this).attr("data-id");

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Suratkeputusan/pencarian'); ?>",
          data: "id=" + id
        })
        .done(function(data) {
          $('#tempat-modal').html(data);
          $('#pencarian-data').modal('show');
          tampilGabung();
        })
    })

    $(document).on("click", ".lihat-data", function() {
      var id = $(this).attr("data-id");
      var id1 = $(this).attr("data-id1");
      var id2 = $(this).attr("data-id2");
      // if(id1=='keputusan'){
      //   var url = "Suratkeputusan?user="+id;
      // }
      // if(id1=='vital'){
      //   var url = "Suratvital";
      // }
      // if(id1=='keluar'){
      //   var url = "Suratkeluar";
      // }
      // if(id1=='kerjasama'){
      //   var url = "Suratkerjasama";
      // }
      // if(id1=='covid'){
      //   var url = "Arsipcovid";
      // }

      // console.log('ini');
      // window.open(url);

      $.ajax({
          method: "POST",
          url: "<?php echo base_url('Suratkeputusan/lihatgabung'); ?>",
          data: {
            "id": id,
            "id1": id1,
            "id2": id2
          },
        })
        .done(function(data) {
          if (id1 == 'keputusan') {
            var url = "Suratkeputusan/lihat";
          }
          if (id1 == 'vital') {
            var url = "Suratvital/lihat";
          }
          if (id1 == 'keluar') {
            var url = "Suratkeluar/lihat";
          }
          if (id1 == 'kerjasama') {
            var url = "Suratkerjasama/lihat";
          }
          if (id1 == 'covid') {
            var url = "Arsipcovid/lihat";
          }

          window.open(url + "/" + id2);
          // console.log(id);
          // $('#tempat-modal').html(data);
          // $('#update-suratkeputusan').modal('show');
          //$('#pencarian-data').modal('hide');
        })

    })

  })
</script>