<!-- REQUIRED JS SCRIPTS -->
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
<script src="<?php echo base_url(); ?>assets/chosen/chosen.jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    });
</script>

<script type="text/javascript">
        $('.select2').select2()
    $(document).on("click", ".open-AddBookDialog", function() {
        var myBookId = $(this).data('id');
        var myBookId1 = $(this).data('id1');
        var myBookId2 = $(this).data('id2');
        var myBookId3 = $(this).data('id3');
        var myBookId4 = $(this).data('id4');
        var myBookId5 = $(this).data('id5');
        var myBookId6 = $(this).data('id6');
        var myBookId7 = $(this).data('id7');
        var myBookId8 = $(this).data('id8');
        var myBookId9 = $(this).data('id9');
        var myBookId10 = $(this).data('id10');
        var myBookId11 = $(this).data('id11');
        var myBookId12 = $(this).data('id12');
        var myBookId13 = $(this).data('id13');
        var myBookId14 = $(this).data('id14');
        var myBookId15 = $(this).data('id15');
        var myBookId16 = $(this).data('id16');
        var myBookId17 = $(this).data('id17');
        var myBookId18 = $(this).data('id18');
        var myBookId19 = $(this).data('id19');
        var myBookId20 = $(this).data('id20');
        $(".modal-body #bookId").val(myBookId);
        $(".modal-body #bookId1").val(myBookId1);
        $(".modal-body #bookId2").val(myBookId2);
        $(".modal-body #bookId3").val(myBookId3);
        $(".modal-body #bookId4").val(myBookId4);
        $(".modal-body #bookId5").val(myBookId5);
        $(".modal-body #bookId6").val(myBookId6);
        $(".modal-body #bookId7").val(myBookId7);
        $(".modal-body #bookId8").val(myBookId8);
        $(".modal-body #bookId9").val(myBookId9);
        $(".modal-body #bookId10").val(myBookId10);
        $(".modal-body #bookId11").val(myBookId11);
        $(".modal-body #bookId12").val(myBookId12);
        $(".modal-body #bookId13").val(myBookId13);
        $(".modal-body #bookId14").val(myBookId14);
        $(".modal-body #bookId15").val(myBookId15);
        $(".modal-body #bookId16").val(myBookId16);
        $(".modal-body #bookId17").val(myBookId17);
        $(".modal-body #bookId18").val(myBookId18);
        $(".modal-body #bookId19").val(myBookId19);
        $(".modal-body #bookId20").val(myBookId20);
    });
</script>
<script type="text/javascript">
    // $('.datepicker').datepicker();
    $('#rangepicker').daterangepicker();

</script>

<script type="text/javascript">
    $(document).ready(function() {
        $(function() {

            $(".datepicker").datepicker({

                format: 'yyyy-mm-dd',

                autoclose: true,

                todayHighlight: true,

            });

        });

        $(function() {

            $(".datepicker2").datepicker({

                format: 'dd-mm-yyyy',

                autoclose: true,

                todayHighlight: true,

            });

        });
    })
</script>

  <script>
  $(function() {
    $( "#tanggal1" ).datepicker();
	 $( "#tanggal2" ).datepicker();
     $( "#tanggal3" ).datepicker();
	 $( "#tanggal4" ).datepicker();
	 
  });
  
  
  </script>

<!-- My Ajax -->
<?php //include './assets/js/ajax.php'; ?>

<!-- -->