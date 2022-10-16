<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Detail Unit</h1>
      <div class="section-header-breadcrumb">
        <a href="<?= site_url('dataunit') ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-undo"></i> Kembali
        </a>
      </div>
    </div>
    <div class="section-body">
      <div class="card">
        <form action="<?= site_url() ?>Dataunit/detail/<?php echo $this->uri->segment(3) ?>" method="POST">
          <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
          <div class="card-body">
            <div class="row">
              <div class="form-group col-md-4">
                <label>Nama Unit</label>
                <div class="form-group input-group">
                  <input type="hidden" name="kode_unit" value="<?= $this->input->post('kode_unit') ?? $row->kode_unit ?>">
                  <input type="text" name="nama_unit" autocomplete="off" readonly value="<?= $this->input->post('nama_unit') ?? $row->nama_unit ?>" class="form-control <?= form_error('nama_unit') ? 'is-invalid' : null ?>">
                  <?= form_error('nama_unit') ?>
                </div>
              </div>
              <div class="form-group col-md-4">
                <label>Singkatan</label>
                <div class="form-group input-group">
                  <input type="text" name="singkatan" autocomplete="off" readonly value="<?= $this->input->post('singkatan') ?? $row->singkatan ?>" class="form-control <?= form_error('singkatan') ? 'is-invalid' : null ?>">
                  <?= form_error('singkatan') ?>
                </div>
              </div>
              <div class="form-group col-md-4">
                <label>Jabatan</label>
                <div class="form-group input-group">
                  <input type="text" name="jabatan" id="jabatan" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-lg-12">
                <div class="form-group text-center">
                  <button type="submit" name="tambah_unit_detail" class="btn btn-success">
                    <i class="fa fa-save"></i> Simpan
                  </button>
                  <button type="Reset" class="btn btn-warning">
                    <i class="fa fa-undo"></i> Reset
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <?php echo form_close() ?>
      </div>
      <div class="card">
        <div class="card-header">
          <h4>Detail Jabatan Pada Unit</h4>
        </div>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-striped table-md" id="table">
          <thead>
            <tr>
              <th>NO</th>
              <th>Nama Unit</th>
              <th>Singkatan</th>
              <th>Jabatan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($unit as $un => $a) { ?>
              <tr>
                <td style="width:3%;"><?= $no++ ?>.</td>
                <td><?= $a->nama_unit ?></td>
                <td><?= $a->singkatan ?></td>
                <td><?= $a->jabatan ?></td>
                <td style="width:10%;">
                  <form action="" method="post">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                    <input type="hidden" name="kode_unit_detail" value="<?= $a->kode_unit_detail ?>">
                    <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" name="hapus_unit_detail" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>