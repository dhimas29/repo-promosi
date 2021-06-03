<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Pendukung Keputusan</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <!-- <link href="asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link href="asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .ctr>thead>tr>th {
            text-align: center;
            vertical-align: middle;
        }

        @media (min-width: 768px) {
            #page-wrapper {
                position: inherit;
                margin: auto;
                padding: 0 100px;
                border-left: 1px solid #e7e7e7;
            }
        }

        .navbar-brand,
        .navbar-nav>li>a {
            /* text-shadow: 0 1px 0; */
            font-size: 13px;
        }

        nav {
            padding: 0px 90px;
        }
    </style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <img src="asset/img/logo.png" alt="" class="navbar-brand">
                <!-- <a class="navbar-brand" href="index.php?url=dashboard">SPK | PROMETHEE METHOD</a> -->

                <a class="navbar-brand" href="index.php?url=dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                <?php if ($_SESSION['level'] == 'superadmin') : ?>
                    <a class="navbar-brand" href="index.php?url=data_kriteria"><i class="fa fa-table fa-fw"></i> Data Kriteria</a>
                <?php endif; ?>
                <?php if ($_SESSION['level'] != 'pimpinan') : ?>
                    <a class="navbar-brand" href="index.php?url=data_calon"><i class="fa fa-table fa-fw"></i> Data Pegawai</a>
                <?php endif; ?>
                <?php if (($_SESSION['level'] == 'Divisi Engineering') || ($_SESSION['level'] == 'Divisi Purchasing') || ($_SESSION['level'] == 'Divisi Cost Control')) : ?>
                    <a class="navbar-brand" href="index.php?url=proses_seleksi"><i class="fa fa-edit fa-fw"></i>Proses & Hasil Seleksi</a>
                <?php endif; ?>
                <?php if (($_SESSION['level'] == 'superadmin') || ($_SESSION['level'] == 'pimpinan')) : ?>
                    <a class="navbar-brand" href="index.php?url=laporan"><i class="fa fa-edit fa-fw"></i>Laporan</a>
                <?php endif; ?>

                <!-- /.navbar-header -->
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li><a href="index.php?url=pengaturan"><i class="fa fa-user"></i> Profile</a>
                        </li> -->
                        <!-- <li class="divider"></li> -->
                        <li><a href="config/proses_logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>



            <!-- /.navbar-static-side -->
        </nav>