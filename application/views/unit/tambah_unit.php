<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Data Unit Kerja</h1>
      <div class="section-header-breadcrumb">
        <a href="<?= site_url('dataunit') ?>" class="btn btn-warning btn-flat">
          <i class="fa fa-undo"></i> Kembali
        </a>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <form action="<?= site_url('dataunit/tambah') ?>" method="post">
              <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
              <div class="card-header card-primary">
                <h4>Tambah Data Unit Kerja</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-10">
                    <label>Nama Unit Kerja</label>
                    <input type="text" name="nama_unit" value="<?= set_value('nama_unit') ?>" autocomplete="off" class="form-control <?= form_error('nama_unit') ? 'is-invalid' : null ?>">
                    <?= form_error('nama_unit') ?>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-5">
                    <label>Singkatan</label>
                    <input type="text" name="singkatan" value="<?= set_value('singkatan') ?>" autocomplete="off" class="form-control <?= form_error('singkatan') ? 'is-invalid' : null ?>">
                    <input type="hidden" name="status" value="<?= "1" ?>" autocomplete="off" class="form-control <?= form_error('status_aktif') ? 'is-invalid' : null ?>">
                    <?= form_error('singkatan') ?>
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary btn-lg">Simpan</button>
              </div>
              <?php echo form_close() ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>