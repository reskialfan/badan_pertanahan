<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RSSM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/eksternal/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/eksternal/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/animasi/animate.min.css">
  <!-- fonts -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/cssfonts.css">
  <style>
    /* @import url('https://fonts.googleapis.com/css?family=Gugi'); */

    * {
      padding: 0;
      margin: 0;
    }

    .judul {
      margin-top: 0%;
      text-align: center;
      font-family: 'Gugi', cursive;
      font-size: 1em;
      background: -webkit-linear-gradient(to right, rgb(210, 244, 211, 1), rgb(167, 22, 41, 1));
      background: linear-gradient(to right, rgb(210, 244, 211, 1), rgb(167, 22, 41, 1));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;

    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
    .csslogin {
      background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
    }
  </style>
</head>

<body class="hold-transition login-page" id="csslogin">


  <div class="login-box">
    <div class="login-logo">
      <img class="animated rotateIn delay-1s" src="<?php echo base_url(); ?>/assets/img/Logo_BPN-KemenATR_(2017).png" width="50%">
      <div class="judul animated zoomIn delay-2s"> Badan Pertanahan<br>
        <h4>Kabupaten Madiun</h4>
      </div>

      <!-- <a href="#"><b>E-ARSIP RSSM <br>Silahkan Login !!!</b></a> -->

    </div>

    <!-- /.login-logo -->

    <div class="login-box-body csslogin">
      <p class="login-box-msg">
        Area Administrator
      </p>

      <form action="<?php echo base_url('Auth/login'); ?>" method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">

          <input type="password" class="form-control" placeholder="Password" name="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <div align="center"><?php echo "" . $captcha . ""; ?></div>
          <?php
          $captchaa    = $this->session->userdata('captcha');
          // echo $captchaa ;
          // echo "$captcha[name]";
          ?>

          <input type="text" class="form-control" placeholder="capcha" name="captcha">
          <span class="glyphicon glyphicon-alert form-control-feedback"></span>
        </div>


        <div class="row">
          <!-- <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div> -->
          <div class="col-xs-offset-8 col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
          </div>
        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
            Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
            Google+</a>
        </div> -->
      <!-- /.social-auth-links -->

      <!-- <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a> -->

    </div>

    <!-- /.login-box-body -->
    <?php
    echo show_err_msg($this->session->flashdata('error_msg'));
    ?>
  </div>



  <!-- /.login-box -->

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <!-- <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script> -->
  <!-- <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script> -->
</body>

</html>