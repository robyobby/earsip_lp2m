<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Detail User</h1>
      <div class="section-header-breadcrumb">
        <a href="<?= site_url('datauser') ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-undo"></i> Kembali
        </a>
      </div>
    </div>
    <div class="section-body">
      <div class="card">
        <form action="<?= site_url() ?>Datauser/detail/<?php echo $this->uri->segment(3) ?>" method="POST">
          <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
          <div class="card-body">
            <div class="row">
              <div class="form-group col-md-4">
                <label for="nama_user">Nama User</label>
                <div class="form-group input-group">
                  <input type="hidden" name="kode_user" value="<?= $this->input->post('kode_user') ?? $row->kode_user ?>">
                  <input type="text" name="nama_user" autocomplete="off" readonly value="<?= $this->input->post('nama_user') ?? $row->nama_user ?>" class="form-control <?= form_error('nama_user') ? 'is-invalid' : null ?>">
                  <?= form_error('nama_user') ?>
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="nama_pegawai">Nama Pegawai</label>
                <div class="form-group input-group">
                  <input type="hidden" name="kode_user" value="<?= $this->uri->segment(3); ?>" id="kode_user">
                  <input type="hidden" name="kode_pegawai" id="kode_pegawai">
                  <input type="text" name="nama_pegawai" id="nama_pegawai" value="" class="form-control" readonly required>
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-pegawai">
                      <i class="fa fa-search"></i>Cari
                    </button>
                  </span>
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="nik">NIK Pegawai</label>
                <div class="form-group">
                  <input type="text" name="nik" id="nik" class="form-control" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group text-center">
                  <button type="submit" name="tambah_user_detail" class="btn btn-success">
                    <i class="fa fa-save"></i> Simpan
                  </button>
                  <button type="Reset" class="btn btn-warning">
                    <i class="fa fa-undo"></i> Reset
                  </button>
                </div>
                <?php echo form_close() ?>
        </form>
      </div>
    </div>
</div>
</div>
<div class="card">
  <div class="card-header">
    <h4>Detail Data User</h4>
  </div>
  <div class="card-body table-responsive">
    <table class="table table-striped table-md" id="table">
      <thead>
        <tr>
          <th>NO</th>
          <th>Nama Pegawai</th>
          <th>NIP</th>
          <th>NIDN</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($view_user as $vu => $a) { ?>
          <tr>
            <td style="width:3%;"><?= $no++ ?>.</td>
            <td><?= $a->nama_pegawai ?></td>
            <td><?= $a->nip ?></td>
            <td><?= $a->nidn ?></td>
            <td style="width:10%;">
              <form action="" method="post">
                <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                <input type="hidden" name="kode_user_detail" value="<?= $a->kode_user_detail ?>">
                <input type="hidden" name="kode_pegawai" value="<?= $a->kode_pegawai ?>">
                <input type="hidden" name="kode_user" value="<?= $a->kode_user ?>">
                <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" name="hapus_user_detail" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</button>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
</div>
</section>
</div>


<div class="modal fade" id="modal-pegawai">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Pilih Data Pegawai</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body table-responsive">
        <div class="form_group">
          <table class="table table-bordered table-striped table-md" id="table">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Pegawai</th>
                <th class="text-center">NIK Pegawai</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($pegawai as $p => $data) { ?>
                <tr>
                  <td class="text-center" style="width:3%;"><?= $no++ ?></td>
                  <td class="text-center"><?= $data->nama_pegawai ?></td>
                  <td class="text-center"><?= $data->nik ?></td>
                  <td class="text-center" style="width:8%;">
                    <button class="btn btn-sm btn-info" id="pilihpegawai" data-kode_pegawai="<?= $data->kode_pegawai ?>" data-nama_pegawai="<?= $data->nama_pegawai ?>" data-nik="<?= $data->nik ?>"><i class="fa fa-check"></i>Pilih</button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>