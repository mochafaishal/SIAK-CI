<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inventory Baru</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/akuntansi.png">

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <link href="<?php echo base_url(); ?>assets/datetime/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/select/css/bootstrap-select.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo base_url(); ?>" class="logo"><b>AKUNTANSI</b></a>
            <!--logo end-->

            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php include 'static/aside.php'; ?>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row mt">
      <div class="col-md-12">
        <div class="content-panel">
          <h3>Tambahkan Laporan </h3>
          <hr>
          <div class="row">
            <div class="col-md-4">
              <?php echo validation_errors(); ?>
              <?php echo form_open('laporan_ubah/'.$laporan['id']); ?>

              <div class="form-group">
                    <label for="judulLaporan">ID laporan</label>
                    <input type="text" name="id" value="<?php echo $laporan['id'] ?>" class="form-control" readonly>
                  </div>

              <div class="form-group">
               <label for="judulLaporan">Judul</label>
               <input type="text" name="judul" value="<?php echo $laporan['judul'] ?>" class="form-control">
              </div>

            <div class="form-group">
              <label for="jenisLaporan">Jenis Laporan</label><br>
              <select class="form-control custom-select" name="jenisLaporan">
               <option value="<?php echo $laporan['jenisLaporan'] ?>"><?php echo $laporan['jenisLaporan'] ?></option>
               <option value="Pengeluaran">Pengeluaran</option>
               <option value="Pemasukan">Pemasukan</option>
               <option value="Laba">Laba</option>
              </select>
             </div>

                  <div class="form-group">
                    <label for="deskripsiLaporan">Deskripsi</label>
                    <input type="text" name="deskripsi" value="<?php echo $laporan['deskripsi']?>" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="rentangWaktu">Rentang Waktu mulai</label><br>
                    <input type="date" name="waktuMulai" class="form-control" value="<?php echo $laporan['waktuMulai'] ?>">
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="rentangWaktu">Rentang Waktu Akhir</label><br>
                    <input type="date" name="waktuAkhir" class="form-control" value="<?php echo $laporan['waktuAkhir'] ?>">
                    </select>
                  </div>

                  <div class="form-group">
                     <label>Kode Pelacakan</label>
                     <div class="controls">
                       <select class="form-control input-sm" name="kodePelacakan">
                         <option value="<?php echo $laporan['kodePelacakan'] ?>"><?php echo $laporan['kodePelacakan'] ?></option>
                         <option value="ALFA">ALFA</option>
                         <option value="Denny">Denny</option>
                         <option value="Denny">Denny</option>
                         <option value="Gunarto">Gunarto</option>
                         <option value="INDU">INDU</option>
                         <option value="Kantor">Kantor</option>
                         <option value="KONS">KONS</option>
                         <option value="NCF">NCF</option>
                         <option value="PSFK">PSFK</option>
                         <option value="PTRN">PTRN</option>
                         <option value="Resha">Resha</option>
                       </select>
                     </div>
                   </div>

                  <div class="form-group">
                    <label for="metodeAkuntansi">Metode Akuntansi</label><br>
                    <select class="form-control custom-select" name="metodeAkuntansi">
                    <option value="<?php echo $laporan['metodeAkuntansi'] ?>"><?php echo $laporan['metodeAkuntansi'] ?></option>
                    <option value="Berbasis Akrual">Berbasis Akrual</option>
                    <option value="Berbasis kas">Berbasis Kas</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="pembulatan">Pembulatan</label><br>
                    <select class="form-control custom-select" name="pembulatan">
                      <option value="nyalakan">Nyalakan</option>
                      <option value="padamkan">Padamkan</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="catatanKaki">Catatan Kaki</label>
                    <textarea name="catatanKaki" rows="5" cols="40" class="form-control"><?php echo $laporan['catatanKaki'] ?></textarea>
                  </div>

                  <div class="form-group">
                    <input type="submit" name="submit" value="submit" class="btn btn-primary">
                  </div>
                <?php echo form_close(); ?>
            </div>

            </div>

                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/select/js/bootstrap-select.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datetime/js/bootstrap-datepicker.min.js"></script>
    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>
