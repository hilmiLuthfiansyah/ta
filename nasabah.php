<?php
 include 'koneksi.php';  
 $sql="select * from nasabah";  
 $hasil=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BPR Majalengka</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
        <div class="side-navbar-wrapper">
            <div class="sidenav-header d-flex align-items-center justify-content-center">
            <div class="sidenav-header-inner text-center">
            <alt="person" class="img-fluid rounded-circle">
                <h2 class="h5 text">BPR Majalengka</h2><span class="text-uppercase">Pegawai</span>
        </div>
            <div class="sidenav-header-logo">
                <a href="index.html" class="brand-small text-center"> <strong class="text-primary">BPR</strong></a>
            </div>
        </div>
        <div class="main-menu">
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li>
                    <a href="index.html"> <i class="icon-home"></i><span>Beranda</span></a>
                </li>
                <li> <a href="tables.html"> <i class="icon-grid"> </i><span>Kriteria Keputusan  </span></a></li>
                <li> <a href="pegawai.php"><i class="icon-form"></i><span>Data Pegawai</span></a></li>
                <li class="active"> <a href="nasabah.php"><i class="icon-form"></i><span>Pemohon Kredit</span></a></li>
                <li> <a href="keputusan.php"><i class="icon-presentation"></i><span>Keputusan</span></a></li>
             </ul>
        </div>
        
        </div>
    </nav>
    <div class="page forms-page">
        <!-- navbar-->
        <header class="header">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a>
                            <a href="index.html" class="navbar-brand">
                                <div class="brand-text d-none d-md-inline-block"><span>Halaman Pegawai </span><strong class="text-primary">   BPR Majalengka</strong></div>
                            </a>
                        </div>

                        </ul>
                        </li>
                        <li class="nav-item"><a href="login.html" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="breadcrumb-holder">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Data Pemohon Kredit</li>
                </ul>
            </div>
        </div>
        <section class="forms">
            <div class="container-fluid">
                <header>
                    <h1 class="h3 display">Data Pemohon Kredit Terdaftar</h1>
                </header>
                <div class="card-body">
                <table class="table table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>ID Nasabah</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    <th>Umur</th>
                    <th>Penghasilan/Bulan</th>
                    <th>Pengajuan Kredit</th>
                    <th>Pengembalian/Bulan</th>
                    <th>Jaminan</th>
                    <th>Tanggungan</th>
                  </tr>
                </thead>
                <tbody>
                <?php	
                    $i=0;
                    while($data=mysqli_fetch_array($hasil))
                    {         
                    $i++;
                ?>
                  <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $data['id'];?></td>
                  <td><?php echo $data['nama'];?></td>
                  <td><?php echo $data['alamat'];?></td>			
                  <td><?php echo $data['jk'];?></td>
                  <td><?php echo $data['pekerjaan'];?></td>
                  <td><?php echo $data['umur'];?></td>
                  <td><?php echo $data['penghasilan'];?></td>	
                  <td><?php echo $data['pengajuan'];?></td>			
                  <td><?php echo $data['pengembalian'];?></td>
                  <td><?php echo $data['jaminan'];?></td>			
                  <td><?php echo $data['tanggungan'];?></td>

                  </tr>		
           <?php
           }
           ?>
          </tbody>
      </table>
      <a href="ubahP.php" role="button" class="btn btn-primary">
      <i class="icon-pencil icon-white"></i>
         Ubah Data
      </a>
      <a href="hapusdata.php" role="button" class="btn btn-primary">
      <i class="icon-remove icon-white"></i>
         Hapus Data
      </a>
      <a href="hapusdata.php" role="button" class="btn btn-primary">
      <i class="icon-remove icon-white"></i>
         Proses Data
      </a>
        </div>
              <br><br><br>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <h2 class="h5 display display">Masukkan Data Pemohon Kredit</h2>
                            </div>
                            <div class="card-body">
                                <p>Silahkan masukkan data yang diperlukan:</p>
                                <form action="tambahN.php" method="post">

                                    <div class="form-group">
                                        <label>ID Nasabah</label>
                                        <input type="text" name="id" placeholder="ID Nasabah" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat </label>
                                        <input type="text" name="alamat" placeholder="Alamat" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" name="jk" placeholder="Jenis Kelamin" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Umur</label>
                                        <input type="text" name="umur" placeholder="Umur" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Penghasilan/Bulan</label>
                                        <input type="text" name="penghasilan" placeholder="Penghasilan" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Pengajuan Kredit</label>
                                        <input type="text" name="pengajuan" placeholder="Pengajuan Kredit" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Waktu Pengembalian/Bulan</label>
                                        <input type="text" name="pengembalian" placeholder="Waktu Pengembalian/Bulan" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Jaminan</label>
                                        <input type="text" name="jaminan" placeholder="Jaminan" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggungan</label>
                                        <input type="text" name="tanggungan" placeholder="Tanggungan" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Tambahkan" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>

        <footer class="main-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <p> BPR Majalengka</p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p>Design by Hilmi Luthfiansyah</a>
                        </p>
                        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js">
    </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js">
    </script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X');
        ga('send', 'pageview');
    </script>
</body>

</html>