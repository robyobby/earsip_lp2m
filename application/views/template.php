<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>E-Arsip LP2M</title>


  <link rel="stylesheet" href="<?= base_url() ?>template/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/assets/css/components.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/assets/css/sweetalert2.min.css">

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <!-- <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250"> -->
            <!-- <button class="btn" type="submit"><i class="fas fa-search"></i></button> -->
            <div class="search-backdrop"></div>
            <div class="search-result">
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="<?= base_url() ?>template/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <!-- <div class="d-sm-none d-lg-inline-block"> -->
              <span class="hidden_xs"><?= ucfirst($this->fungsi->user_login()->nama_user) ?></span>
              <!-- </div></a> -->
              <div class="dropdown-menu dropdown-menu-right">
                <a href="<?= site_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
              </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= site_url('dashboard') ?>" class="nav-link"">E-ARSIP</a>
          </div>
          <div class=" sidebar-brand sidebar-brand-sm">
              <a href="<?= site_url('dashboard') ?>" class="nav-link"">EA</a>
          </div>
          <ul class=" sidebar-menu">
                <!-- <?php if ($this->fungsi->user_login()->status_level == "Administrator" or $this->fungsi->user_login()->status_level == "User" or $this->fungsi->user_login()->status_level == "superadmin") { ?> -->
                <li class="menu-header">Beranda</li>
                <li <?= $this->uri->segment(2) == 'aktif' ? 'class="active"' : '' ?> class="active"><a href="<?= site_url('dashboard') ?>" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
                <li class="menu-header">Surat Masuk Keluar</li>
                <li <?= $this->uri->segment(2) == 'aktif' ? 'class="active"' : '' ?> class="active"><a href="<?= site_url('Suratmasuk') ?>" class="nav-link"><i class="fas fa-inbox"></i><span>Surat Masuk</span></a></li>
                <li class="nav-item dropdown <?= $this->uri->segment(2) == 'Suratkeluar' ? 'active' : '' ?>">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-envelope"></i> <span>Surat Keluar</span></a>
                  <ul class="dropdown-menu">
                    <li <?= $this->uri->segment(2) == 'aktif' ? 'class="active"' : '' ?> class="active"><a href="<?= site_url('Suratkeluar') ?>" class="nav-link"><i class="fas fa-file"></i><span> Dokumen</span></a></li>
                    <li <?= $this->uri->segment(2) == 'aktif' ? 'class="active"' : '' ?> class="active"><a href="<?= site_url('Suratkeluar/batal') ?>" class="nav-link"><i class="fa fa-share-square"></i><span> Dibatalkan</span></a></li>
                  </ul>
                </li>
                </li>
                <!-- <?php } ?> -->

                <!-- <?php if ($this->fungsi->user_login()->status_level == "Administrator" or $this->fungsi->user_login()->status_level == "superadmin") { ?> -->
                <li class="menu-header">Data Unit Kerja</li>
                <li <?= $this->uri->segment(2) == 'aktif' ? 'class="active"' : '' ?> class="active"><a href="<?= site_url('dataunit') ?>" class="nav-link"><i class="fas fa-th-large"></i><span>Unit Kerja</span></a></li>
                <li <?= $this->uri->segment(2) == 'aktif' ? 'class="active"' : '' ?> class="active"><a href="<?= site_url('datasubunit') ?>" class="nav-link"><i class="fas fa-map-marker-alt"></i> <span>Sub Unit Kerja</span></a></li>
                <!-- <?php } ?> -->

                <!-- <?php if ($this->fungsi->user_login()->status_level == "superadmin") { ?> -->
                <li class="menu-header">Data Pengguna</li>
                <li <?= $this->uri->segment(2) == 'aktif' ? 'class="active"' : '' ?> class="active"><a href="<?= site_url('datapegawai') ?>" class="nav-link"><i class="far fa-user"></i> <span>Data Pegawai</span></a></li>
                <li <?= $this->uri->segment(2) == 'aktif' ? 'class="active"' : '' ?> class="active"><a href="<?= site_url('datauser') ?>" class="nav-link"><i class="fas fa-plug"></i> <span>Data User</span></a></li>
                <!-- <?php } ?> -->
        </aside>
      </div>

      <!-- Main Content -->
      <?= $contents; ?>


      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="https://lp2m.uin-antasari.ac.id/">LP2M UIN Antasari Banjarmasin</a>
        </div>
        <div class="footer-right">
          1.0.0
        </div>
      </footer>
    </div>
  </div>

  <script src="<?= base_url() ?>template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url() ?>template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url() ?>template/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>template/node_modules/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>template/node_modules/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?= base_url() ?>template/node_modules/sweetalert/dist/sweetalert2.min.js"></script>
  <script src="<?= base_url() ?>template/node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="<?= base_url() ?>template/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="<?= base_url() ?>template/assets/js/stisla.js"></script>
  <script src="<?= base_url() ?>template/assets/js/scripts.js"></script>
  <script src="<?= base_url() ?>template/assets/js/custom.js"></script>
  <script src="<?= base_url() ?>template/assets/js/page/modules-datatables.js"></script>
  <script src="<?= base_url() ?>template/assets/js/page/bootstrap-modal.js"></script>
  <script src="<?= base_url() ?>template/assets/js/page/modules-sweetalert.js"></script>
  <!-- Page Specific JS File -->

  <script>
    <?php if ($this->session->flashdata('success')) { ?>
      var isi = <?php echo json_encode($this->session->flashdata('success')) ?>;
      Swal.fire({
        icon: 'success',
        title: 'Berhasil !',
        text: isi,
      })
    <?php } elseif ($this->session->flashdata('warning')) { ?>
      var isi = <?php echo json_encode($this->session->flashdata('warning')) ?>;
      Swal.fire({
        icon: 'warning',
        title: 'Gagal !',
        text: isi,
      })
    <?php } elseif ($this->session->flashdata('success-nosk')) { ?>
      var isi = <?php echo json_encode($this->session->flashdata('success-nosk')) ?>;
      Swal.fire({
        icon: 'success',
        title: 'Berhasil !',
        text: 'Data Berhasil Disimpan !',
        footer: 'Nomor Surat Keluar : ' + isi,
      })
    <?php } ?>
    $(document).on('click', '#btn-hapus', function(e) {
      e.preventDefault();
      Swal.fire({
        title: 'Yakin ingin dihapus?',
        text: "Data akan terhapus apabila memilih ya!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Ya, hapus!'
      }).then((result) => {
        if (result.isConfirmed) {
          var link = $(this).data('hapus');
          $('#hapus').val(link);
        }
      })
    })
  </script>

  <script>
    $(function() {
      $('#table').DataTable({})
    });
  </script>

  <script>
    $(function() {
      $('#table1').DataTable({})
    });
  </script>

  <script>
    $(function() {
      $('#table2').DataTable({})
    });
  </script>

  <script>
    $(function() {
      $('#table3').DataTable({})
    });
  </script>

  <script>
    $(function() {
      $('#table4').DataTable({})
    });
  </script>

  <script>
    $(document).ready(function() {
      $(document).on('click', '#pilihpegawai', function() {
        var kode_pegawai = $(this).data('kode_pegawai');
        var nama_pegawai = $(this).data('nama_pegawai');
        var nik = $(this).data('nik');
        $('#kode_pegawai').val(kode_pegawai);
        $('#nama_pegawai').val(nama_pegawai);
        $('#nik').val(nik);
        $('#modal-pegawai').modal('hide');
      })
    })
  </script>

  <script>
    $(document).ready(function() {
      $(document).on('click', '#pilihunit', function() {
        var kode_unit = $(this).data('kode_unit');
        var nama_unit = $(this).data('nama_unit');
        var singkatan = $(this).data('singkatan');
        $('#kode_unit').val(kode_unit);
        $('#nama_unit').val(nama_unit);
        $('#singkatan').val(singkatan);
        $('#modal-unitkerja').modal('hide');
      })
    })
  </script>

  <script>
    $(document).ready(function() {
      $(document).on('click', '#pilihsubunit', function() {
        var kode_subunit = $(this).data('kode_subunit');
        var nama_subunit = $(this).data('nama_subunit');
        var singkatan = $(this).data('singkatan');
        $('#kode_subunit').val(kode_subunit);
        $('#nama_subunit').val(nama_subunit);
        $('#singkatan').val(singkatan);
        $('#modal-darisk').modal('hide');
      })
    })
  </script>

  <script>
    $(document).ready(function() {
      $(document).on('click', '#pilihtujuan', function() {
        var nama_tujuan = $(this).data('nama_tujuan');
        $('#nama_tujuan').val(nama_tujuan);
        $('#modal-tujuan').modal('hide');
      })
    })
  </script>

  <script>
    $(document).ready(function() {
      $(document).on('click', '#pilihdari', function() {
        var nama_dari = $(this).data('nama_dari');
        $('#nama_dari').val(nama_dari);
        $('#modal-darism').modal('hide');
      })
    })
  </script>

  <script>
    $(document).ready(function() {
      $(document).on('click', '#pilihtujuansm', function() {
        var kode_unit_detail = $(this).data('kode_unit_detail');
        var singkatan = $(this).data('singkatan');
        $('#kode_unit_detail').val(kode_unit_detail);
        $('#singkatan').val(singkatan);
        $('#modal-tujuan_sm').modal('hide');
      })
    })
  </script>

  <script>
    $(document).ready(function() {
      $(document).on('click', '#pilihhistori', function() {
        var kode_klasifikasi = $(this).data('kode_klasifikasi');
        var kode = $(this).data('kode');
        $('#kode_klasifikasi').val(kode_klasifikasi);
        $('#kode').val(kode);
        $('#modal-klasifikasi').modal('hide');
      })
    })
  </script>

  <script>
    $(document).ready(function() {
      $(document).on('click', '#pilihklasifikasi', function() {
        var kode_klasifikasi = $(this).data('kode_klasifikasi');
        var kode = $(this).data('kode');
        $('#kode_klasifikasi').val(kode_klasifikasi);
        $('#kode').val(kode);
        $('#modal-klasifikasi').modal('hide');
      })
    })
  </script>

  <script>
    $(document).ready(function() {
      $(document).on('click', '#infosuratkeluar', function() {
        var no_surat = $(this).data('no_surat');
        var tanggal_sk = $(this).data('tanggal_sk');
        var jenis_sk = $(this).data('jenis_sk');
        var nama_tujuan = $(this).data('nama_tujuan');
        var perihal = $(this).data('perihal');
        var nama_unit = $(this).data('nama_unit');
        var nama_subunit = $(this).data('nama_subunit');
        var keterangan = $(this).data('keterangan');
        var nama_file = $(this).data('nama_file');
        $("#infosk #no_surat").val(no_surat);
        $("#infosk #tanggal_sk").val(tanggal_sk);
        $("#infosk #jenis_sk").val(jenis_sk);
        $("#infosk #nama_tujuan").val(nama_tujuan);
        $("#infosk #perihal").val(perihal);
        $("#infosk #nama_unit").val(nama_unit);
        $("#infosk #nama_subunit").val(nama_subunit);
        $("#infosk #keterangan").val(keterangan);
        $("#infosk #nama_file").val(nama_file);
        $("#infosk #file_name").attr("src", "./uploads/file_surat_keluar/" + nama_file);
      })
    })
  </script>

  <script>
    $(document).ready(function() {
      $(document).on('click', '#infosuratmasuk', function() {
        var nomor_sm = $(this).data('nomor_sm');
        var tanggal_sm = $(this).data('tanggal_sm');
        var asal_suratmasuk = $(this).data('asal_suratmasuk');
        var dari = $(this).data('dari');
        var perihal_eks = $(this).data('perihal_eks');
        var tujuan = $(this).data('tujuan');
        var keterangan = $(this).data('keterangan');
        var nama_file_eks = $(this).data('nama_file_eks');
        $("#infosm #nomor_sm").val(nomor_sm);
        $("#infosm #tanggal_sm").val(tanggal_sm);
        $("#infosm #asal_suratmasuk").val(asal_suratmasuk);
        $("#infosm #dari").val(dari);
        $("#infosm #perihal_eks").val(perihal_eks);
        $("#infosm #tujuan").val(tujuan);
        $("#infosm #nama_subunit").val(nama_subunit);
        $("#infosm #keterangan").val(keterangan);
        $("#infosm #nama_file_eks").val(nama_file_eks);
        $("#infosk #file_name_eks").attr("src", "./uploads/file_surat_masuk/" + nama_file_eks);
      })
    })
  </script>
</body>

</html>