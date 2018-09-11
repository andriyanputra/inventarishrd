<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$pageTitle?></title>
    <meta name="description" content="Inventaris HRD">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?=base_url('assets/img/favicon.ico')?>">

    <link rel="stylesheet" href="<?=base_url('assets/css/normalize.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/flag-icon.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/cs-skin-elastic.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/scss/style.css')?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body onLoad="setInterval('real_time()', 1000);">


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?=base_url('user/admin')?>"><img src="<?=base_url('assets/img/header.png')?>" alt="Logo"></a>
                <a class="navbar-brand hidden" href="<?=base_url('user/admin')?>"><img src="<?=base_url('assets/img/logo2.png')?>" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i>Master</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-id-badge"></i><a href="ui-buttons.html">User</a></li>
                            <li><i class="fa fa-shopping-cart"></i><a href="ui-badges.html">Barang</a></li>
                            <li><i class="fa fa-truck"></i><a href="ui-tabs.html">Supplier</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Transaksi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Peminjaman</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Pengembalian</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-text"></i><a href="charts-chartjs.html">Barang Masuk</a></li>
                            <li><i class="menu-icon fa fa-clipboard"></i><a href="charts-flot.html">Peminjaman</a></li>
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="charts-peity.html">Pengembalian</a></li>
                        </ul>
                    </li>
                    <li>
                        <a data-target="#smallmodal" data-toggle="modal"  
       href="#smallmodal"><i class="menu-icon fa fa-info-circle"></i>Help/Info</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-md-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?=base_url('assets/img/user.png')?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Ganti Password</a>

                                <a class="nav-link" href="<?=base_url('auth/logout')?>"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">
                                <span id="date"></span>&nbsp;|&nbsp;<span id="time"></span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Success</span> Selamat datang <?=$this->session->userdata('nama')?> di Sistem Inventaris ATK Dept. HRD & GA.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <div class="col-sm-6 col-lg-3">
                
            </div>
            <!--/.col-->
        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->

    <!--Modal-->
    <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">Info Aplikasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Sistem Inventaris ATK <br>PT. Aneka Mitra Gemilang.  <br>v0.1 BETA
                        <blockquote class="text-right">
                            <h6><p>Dept. ITE</p></h6>
                        </blockquote>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--#Modal-->

    <script src="<?=base_url('assets/js/vendor/jquery-2.1.4.min.js')?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?=base_url('assets/js/plugins.js')?>"></script>
    <script src="<?=base_url('assets/js/main.js')?>"></script>


    <!--<script src="<?=base_url('assets/js/lib/chart-js/Chart.bundle.js')?>"></script>-->
    <script src="<?=base_url('assets/js/dashboard.js')?>"></script>
    <script src="<?=base_url('assets/js/widgets.js')?>"></script>
    <script language=javascript>
        function showTime() {
            var a_p = "";
            var today = new Date();
            var curr_hour = today.getHours();
            var curr_minute = today.getMinutes();
            var curr_second = today.getSeconds();
            if (curr_hour < 12) {
                a_p = "AM";
            } else {
                a_p = "PM";
            }
            if (curr_hour == 0) {
                curr_hour = 12;
            }
            if (curr_hour > 12) {
                curr_hour = curr_hour - 12;
            }
            curr_hour = checkTime(curr_hour);
            curr_minute = checkTime(curr_minute);
            curr_second = checkTime(curr_second);
            document.getElementById('time').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
        }
         
        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
        setInterval(showTime, 500);

        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        var hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']
        var date = new Date();
        var day = date.getDate();
        var dino = date.getDay();
        var month = date.getMonth();
        var year = date.getFullYear();
         
        document.getElementById("date").innerHTML =hari[dino] + ", " + day + " " + months[month] + " " + year;
    </script>

</body>
</html>
