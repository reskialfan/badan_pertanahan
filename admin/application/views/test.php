<!DOCTYPE html>
<html>

<head>
    <title>AdminCRUD | Dashboard</title>
    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link rel="stylesheet" href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/eksternal/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/eksternal/ionicons.min.css">
    <link rel="stylesheet" href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/dist/css/skins/skin-green.min.css">
    <link rel="stylesheet" href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/plugins/iCheck/all.css">
    <link rel="stylesheet" href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/chosen/chosen.min.css">

    <!-- loading query-->
    <style type="text/css">
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('./assets/img/pageLoader.gif') 50% 50% no-repeat rgb(249, 249, 249);
            opacity: .8;
        }
    </style>
    <!-- loading query-->

    <!-- jQuery 2.2.3 -->
    <script src="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
</head>
<div class='loader'></div>

<body class="hold-transition skin-green sidebar-collapse">
    <div class="wrapper">
        <!-- header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><small>RSSM</small></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>RSSM</span>
            </a>

            <!-- nav -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/img/res.jpg" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">Reski Alfan DP</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/img/res.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Reski Alfan DP - Web Developer
                                        <small>Member since Sep. 2016</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Profile" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Auth/logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header> <!-- nav -->

        <!-- sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/img/res.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Reski Alfan DP</p>
                        <!-- Status -->
                        <a href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header">LIST MENU</li>
                    <!-- Optionally, you can add icons to the links -->

                    <li>
                        <a href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Igdumum">
                            <i class="fa fa-user"></i>
                            <span>Data IGD Umum</span>
                        </a>
                    </li>

                    <li>
                        <a href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Home">
                            <i class="fa fa-home"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Pegawai">
                            <i class="fa fa-user"></i>
                            <span>Data Pegawai</span>
                        </a>
                    </li>

                    <li>
                        <a href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Posisi">
                            <i class="fa fa-briefcase"></i>
                            <span>Data Posisi</span>
                        </a>
                    </li>

                    <li>
                        <a href="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Kota">
                            <i class="fa fa-location-arrow"></i>
                            <span>Data Kota</span>
                        </a>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- content -->
        <div class="content-wrapper">
            <!-- headerContent -->
            <section class="content-header">
                <h1>
                    Halaman Pasien IGD umum <small>Manage Data Pasien IGD</small>
                </h1>
                <ol class="breadcrumb">
                    <li><i class="fa fa-dashboard"></i> Igdumum</li>
                    <li class="active"> Here </li>
                </ol>
            </section> <!-- Main content -->
            <section class="content">
                <div id="tempat-modal"></div>
                <div class='col-md-4'>
                    <div class='box bg-green'>
                        <form class='form-horizontal' role='form' method=POST target="_self" action='' enctype='multipart/form-data'>
                            <table class='table table-condensed table-bordered'>
                                <tbody>
                                    <tr>
                                        <td><input type='text' class='form-control' placeholder='Cari Nama ...' name='nama' onkeyup="this.value = this.value.toUpperCase()" required></td>
                                        <td><button type='submit' name='cari' class='btn btn-info'>Cari</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>

                <div class='col-md-12'>
                    <div class='box' id="list-data">
                        <div class='box-header bg-red'>
                            <h3 class='box-title'>PASIEN IGD UMUM</h3>
                        </div>
                        <div class='box-body bg-olive'>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-26</h3>
                                        </div>
                                        <p>JANATI NY.</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-26' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-red'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-69</h3>
                                        </div>
                                        <p>CHAIRUL SALEH,TN</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-69' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-46</h3>
                                        </div>
                                        <p>VITA NUR APRISTA, NY</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-46' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-75-09-69</h3>
                                        </div>
                                        <p>UMU SULICHATI, NY</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-75-09-69' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-70-73-78</h3>
                                        </div>
                                        <p>NUR ALFIAH ROKHMAWATI, NY</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-70-73-78' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-66-66-94</h3>
                                        </div>
                                        <p>M. HASIM FAHMI, SDR</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-66-66-94' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-blue'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-29</h3>
                                        </div>
                                        <p>MIS Y</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-29' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-35-66-23</h3>
                                        </div>
                                        <p>NURHADI.TN</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-35-66-23' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-25</h3>
                                        </div>
                                        <p>TOHA SYAMSUL ALAM, TN</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-25' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-75-28-52</h3>
                                        </div>
                                        <p>REINER HERNCHILD TANUJAYA, SDR</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-75-28-52' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-64-15-23</h3>
                                        </div>
                                        <p>MUDAKIR, TN</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-64-15-23' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-71-22-38</h3>
                                        </div>
                                        <p>HERI WIDODO, TN</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-71-22-38' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-red'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-21</h3>
                                        </div>
                                        <p>YANTO, TN</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-21' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-20</h3>
                                        </div>
                                        <p>M. EFENDI, SDR</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-20' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-green'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-75-29-69</h3>
                                        </div>
                                        <p>ALI FAQIH MAHARDIKA, BY</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-75-29-69' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-19</h3>
                                        </div>
                                        <p>IMAM SHOLEH, SDR</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-19' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-35-82-87</h3>
                                        </div>
                                        <p>SUPARTI NY</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-35-82-87' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-74-63-54</h3>
                                        </div>
                                        <p>SUSILO VERI YULIANTO, TN</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-74-63-54' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-green'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-18</h3>
                                        </div>
                                        <p>LUCKY YULIANTO EKO SAPUTRO, SDR</p>
                                        <p>2019-07-30 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-18' data-id1='2019-07-30 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-17</h3>
                                        </div>
                                        <p>AYRA KANAYA ALKHALIFA HIDAYAT, AN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-17' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-16</h3>
                                        </div>
                                        <p>ALNA KURNIAWAN, SDR</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-16' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-43-40-67</h3>
                                        </div>
                                        <p>SRIJONO,TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-43-40-67' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-green'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-13</h3>
                                        </div>
                                        <p>SUNITA MARLINDA PRABANDARI, NN </p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-13' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-11</h3>
                                        </div>
                                        <p>NUR HAYATI, NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-11' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-10</h3>
                                        </div>
                                        <p>AGUNG SUPRIYANTO, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-10' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-09</h3>
                                        </div>
                                        <p>SAMYONO, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-09' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-74-90-00</h3>
                                        </div>
                                        <p>YADI, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-74-90-00' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-red'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-08</h3>
                                        </div>
                                        <p>MUHTAR BIN PANI, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-08' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-green'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-07</h3>
                                        </div>
                                        <p>PRANCISCO GIGIH PUTRA P.AN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-07' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-48-81-07</h3>
                                        </div>
                                        <p>RAHMAT EFENDI, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-48-81-07' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-05</h3>
                                        </div>
                                        <p>JOKO PURWANTO, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-05' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-04</h3>
                                        </div>
                                        <p>MUHYAR BASIRAN, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-04' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-38-52-05</h3>
                                        </div>
                                        <p>SOEDJIATMI, NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-38-52-05' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-02-70-57</h3>
                                        </div>
                                        <p>SUGIARTO, TN.</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-02-70-57' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-51-27-51</h3>
                                        </div>
                                        <p>WIDODO BASUKI ARDJO, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-51-27-51' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-75-83-71</h3>
                                        </div>
                                        <p>SOENARWAN, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-75-83-71' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-65-88-83</h3>
                                        </div>
                                        <p>ERRY SANTYA BUDI,SDR</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-65-88-83' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-61-07-95</h3>
                                        </div>
                                        <p>RUSMINI, NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-61-07-95' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-green'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-03</h3>
                                        </div>
                                        <p>DESTI SURAIDA, NN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-03' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-41-82</h3>
                                        </div>
                                        <p>VIONA CANTIKA AURELLIA, BY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-41-82' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-02</h3>
                                        </div>
                                        <p>SUKENI, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-02' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-01</h3>
                                        </div>
                                        <p>SITI SULASMI, NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-01' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-green'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-65-00</h3>
                                        </div>
                                        <p>ARIFIN, SDR</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-65-00' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-green'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-99</h3>
                                        </div>
                                        <p>HERLINA, NN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-99' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-65</h3>
                                        </div>
                                        <p>RASYA HANGGA PRADIPTA, SDR</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-65' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-98</h3>
                                        </div>
                                        <p>ANDREAS CANDRA, SDR</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-98' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-07-06</h3>
                                        </div>
                                        <p>SITI, NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-07-06' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-green'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-96</h3>
                                        </div>
                                        <p>MOH ROY, SDR</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-96' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-95</h3>
                                        </div>
                                        <p>SITI SRYWANTI, NN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-95' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-green'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-75-76-52</h3>
                                        </div>
                                        <p>RANA NUGRA HENI PUTRININGTYAS NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-75-76-52' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-73-07-70</h3>
                                        </div>
                                        <p>BITNER SIANTURI</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-73-07-70' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-94</h3>
                                        </div>
                                        <p>ANDHIKA DUTA RIO G.,SDR</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-94' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-57-59</h3>
                                        </div>
                                        <p>WAHYU BUDI ANTO, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-57-59' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-93</h3>
                                        </div>
                                        <p>AHMAD KHAIRUL S, SDR</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-93' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-29-53-36</h3>
                                        </div>
                                        <p>ST. MARYAM, NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-29-53-36' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-92</h3>
                                        </div>
                                        <p>MONO, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-92' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-75-21-76</h3>
                                        </div>
                                        <p>SUWANDI, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-75-21-76' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-91</h3>
                                        </div>
                                        <p>MUDJI TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-91' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-90</h3>
                                        </div>
                                        <p>SUJARNO TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-90' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-89</h3>
                                        </div>
                                        <p>KAMAL KAROZI SDR</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-89' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-67-13-12</h3>
                                        </div>
                                        <p>HENNIES LISTYANINGSIH, NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-67-13-12' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-red'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-88</h3>
                                        </div>
                                        <p>SUDARTO, TN </p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-88' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-57-16-89</h3>
                                        </div>
                                        <p>SURATI.NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-57-16-89' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-red'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-85</h3>
                                        </div>
                                        <p>BAMBANG SUHARSONO TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-85' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-73-33-49</h3>
                                        </div>
                                        <p>KURNIAWAN FITRIYANTO, SDR</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-73-33-49' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-red'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-84</h3>
                                        </div>
                                        <p>SUPANGAT, TN </p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-84' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-71-67-22</h3>
                                        </div>
                                        <p>SASRIYAH NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-71-67-22' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-71</h3>
                                        </div>
                                        <p>ABDUL QOHHAR A, AN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-71' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-53</h3>
                                        </div>
                                        <p>ELVARO DAVIN MALAYA,AN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-53' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-43-23-09</h3>
                                        </div>
                                        <p>SRIMINAH, NY.</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-43-23-09' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-48</h3>
                                        </div>
                                        <p>RINI SETIOWATI NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-48' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-46</h3>
                                        </div>
                                        <p>MISIRAH, NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-46' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-44</h3>
                                        </div>
                                        <p>MURSINI, NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-44' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-36</h3>
                                        </div>
                                        <p>YATINI NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-36' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-26</h3>
                                        </div>
                                        <p>TOIMUN TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-26' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-red'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-62-51-65</h3>
                                        </div>
                                        <p>NJONO TN.</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-62-51-65' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-22</h3>
                                        </div>
                                        <p>GIANTORO JOKO SANYOTO TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-22' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-red'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-18</h3>
                                        </div>
                                        <p>ANTON PRASETYO, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-18' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-64-16</h3>
                                        </div>
                                        <p>SUNARTI, NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-64-16' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-75-40-81</h3>
                                        </div>
                                        <p>SUMINI, NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-75-40-81' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-76-13-82</h3>
                                        </div>
                                        <p>SULASMI, NY</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-76-13-82' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-76-54-28</h3>
                                        </div>
                                        <p>NARSAN . TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-76-54-28' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-72-37-52</h3>
                                        </div>
                                        <p>MARVEL TIVANO, AN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-72-37-52' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-51-36-94</h3>
                                        </div>
                                        <p>ANISA KARMAN,TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-51-36-94' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-63-97</h3>
                                        </div>
                                        <p>GATOT SUSANTO, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-63-97' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-green'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-76-88-23</h3>
                                        </div>
                                        <p>FAEYZA ELENO ARWINTO, AN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-76-88-23' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-37-79-33</h3>
                                        </div>
                                        <p>WIDODO TRI SAKSONO, TN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-37-79-33' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-63-96</h3>
                                        </div>
                                        <p>TIARA SEPTIANA SABRINA, AN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-63-96' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-63-94</h3>
                                        </div>
                                        <p>MUHAMMAD,SDR</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-63-94' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                                <!-- small box -->
                                <div class='small-box bg-yellow'>
                                    <div class='inner'>
                                        <div class='css'>
                                            <h3>6-77-63-93</h3>
                                        </div>
                                        <p>VIVY WAHYU EKA S, NN</p>
                                        <p>2019-07-29 00:00:00</p>
                                    </div>
                                    <div class='icon'>
                                        <i class='ion ion-person-add'></i>
                                    </div>
                                    <a href='#' class='card-igd small-box-footer' data-id='6-77-63-93' data-id1='2019-07-29 00:00:00' data-id2='0' data-toggle='modal' href='#' data-target='#update-igd' title='Lihat Detail'>LIHAT DETAIL <i class='fa fa-arrow-circle-right'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="fetched-data"></div>


                <div class="modal modal-success fade" id="update-igd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fw fa-pencil"></i><strong> Detail Pasien </h4>
                            </div>
                            <div class="modal-body">
                                <div class="fetched-data2"></div>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    // $(document).ready(function(){ 
                    // $('#update-igd').on('show.bs.modal', function (e) {
                    // var rowid = $(e.relatedTarget).data('id');
                    // var rowid1 = $(e.relatedTarget).data('id1');
                    // var rowid2 = $(e.relatedTarget).data('id2');
                    //var rowid2 = $(e.relatedTarget).data('v_tglmasuk');
                    //var id = $(this).attr("data-id");
                    //menggunakan fungsi ajax untuk pengambilan data
                    // $.ajax({
                    //     type : 'post',
                    //     url : 'http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Modal',
                    //     //data :  'rowid='+ rowid+'
                    //     data: {"rowid": rowid, "rowid1": rowid1, "rowid2": rowid2},
                    //     success : function(data){
                    //     $('.fetched-data').html(data);//menampilkan data ke dalam modal
                    //     }
                    //       });
                    //     });
                    //   });

                    $(document).on("click", ".card-igd", function() {
                        var rowid = $(this).attr("data-id");
                        // var rowid = $(e.relatedTarget).data('id');
                        var rowid1 = $(this).attr("data-id1");
                        var rowid2 = $(this).attr("data-id2");

                        // console.log(rowid);
                        // console.log(rowid1);
                        // console.log(rowid2);
                        $.ajax({
                                method: "POST",
                                url: "http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Modal",
                                data: {
                                    "rowid": rowid,
                                    "rowid1": rowid1,
                                    "rowid2": rowid2
                                },
                            })
                            .done(function(data) {
                                $('.fetched-data').html(data);
                                $('.fetched-data2').modal('show');
                                //console.log(data);
                                $('#tempat-modal').html(data);
                                //      $('#form-update-igd-modal').modal('show');
                                $('#update-igd-syarif').modal('show');
                            })
                    })

                    $('#update-igd-syarif').on('hidden.bs.modal', function() {
                        $('.form-msg').html('');
                    })
                </script>
            </section>
        </div> <!-- headerContent -->
        <!-- mainContent -->

        <!-- footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Dashboard Admin
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2019 <a href="#">IPDE-RSSM</a>.</strong> All rights reserved.
        </footer>
        <div class="control-sidebar-bg"></div>
    </div>

    <!-- js -->
    <!-- REQUIRED JS SCRIPTS -->
    <!-- Bootstrap 3.3.6 -->
    <script src="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/plugins/select2/select2.full.min.js"></script>
    <script src="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/plugins/iCheck/icheck.min.js"></script>
    <script src="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/dist/js/app.min.js"></script>
    <script src="http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/assets/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        });
    </script>

    <script type="text/javascript">
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

    <!-- My Ajax 
<script type="text/javascript">
	var MyTable = $('#list-data').dataTable({
		  "paging": true,
		  "lengthChange": true,
		  "searching": true,
		  "ordering": true,
		  "info": true,
		  "autoWidth": false
		});

	window.onload = function() {
		tampilPegawai();
		tampilPosisi();
		tampilKota();
			}

	function refresh() {
		MyTable = $('#list-data').dataTable();
	} 

	function effect_msg_form() {
		// $('.form-msg').hide();
		$('.form-msg').show(1000);
		setTimeout(function() { $('.form-msg').fadeOut(1000); }, 3000);
	}

	function effect_msg() {
		// $('.msg').hide();
		$('.msg').show(1000);
		setTimeout(function() { $('.msg').fadeOut(1000); }, 3000);
	}

	function tampilPegawai() {
		$.get('http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Pegawai/tampil', function(data) {
			MyTable.fnDestroy();
			$('#data-pegawai').html(data);
			refresh();
		});
	}

	var id_pegawai;
	$(document).on("click", ".konfirmasiHapus-pegawai", function() {
		id_pegawai = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataPegawai", function() {
		var id = id_pegawai;
		
		$.ajax({
			method: "POST",
			url: "http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Pegawai/delete",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilPegawai();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataPegawai", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Pegawai/update",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-pegawai').modal('show');
		})
	})

	$('#form-tambah-pegawai').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: 'http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Pegawai/prosesTambah',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPegawai();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-pegawai").reset();
				$('#tambah-pegawai').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$(document).on('submit', '#form-update-pegawai', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: 'http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Pegawai/prosesUpdate',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPegawai();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-pegawai").reset();
				$('#update-pegawai').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$('#tambah-pegawai').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-pegawai').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	//Kota
	function tampilKota() {
		$.get('http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Kota/tampil', function(data) {
			MyTable.fnDestroy();
			$('#data-kota').html(data);
			refresh();
		});
	}

	var id_kota;
	$(document).on("click", ".konfirmasiHapus-kota", function() {
		id_kota = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataKota", function() {
		var id = id_kota;
		
		$.ajax({
			method: "POST",
			url: "http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Kota/delete",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilKota();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataKota", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Kota/update",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-kota').modal('show');
		})
	})

	$(document).on("click", ".detail-dataKota", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Kota/detail",
			data: "id=" +id
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
			$('#detail-kota').modal('show');
		})
	})

	$('#form-tambah-kota').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: 'http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Kota/prosesTambah',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilKota();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-kota").reset();
				$('#tambah-kota').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$(document).on('submit', '#form-update-kota', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: 'http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Kota/prosesUpdate',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilKota();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-kota").reset();
				$('#update-kota').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$('#tambah-kota').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-kota').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	//Posisi
	function tampilPosisi() {
		$.get('http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Posisi/tampil', function(data) {
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
			url: "http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Posisi/delete",
			data: "id=" +id
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
			url: "http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Posisi/update",
			data: "id=" +id
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
			url: "http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Posisi/detail",
			data: "id=" +id
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
			url: 'http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Posisi/prosesTambah',
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

	$(document).on('submit', '#form-update-posisi', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: 'http://localhost/2019/AdminLTE-CRUD-With-Codeigniter-master/Posisi/prosesUpdate',
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

	$('#tambah-posisi').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-posisi').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})
</script>-->
</body>

</html>