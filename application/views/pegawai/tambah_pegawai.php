<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Data Pegawai</h1>
      <div class="section-header-breadcrumb">
        <a href="<?= site_url('datapegawai') ?>" class="btn btn-warning btn-flat">
          <i class="fa fa-undo"></i> Kembali
        </a>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <form action="<?= site_url('datapegawai/tambah') ?>" method="post">
              <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
              <div class="card-header">
                <h4>Tambah Data Pegawai</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Nama Pegawai</label>
                    <input type="text" name="nama_pegawai" value="<?= set_value('nama_pegawai') ?>" autocomplete="off" class="form-control <?= form_error('nama_pegawai') ? 'is-invalid' : null ?>">
                    <?= form_error('nama_pegawai') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>NIK Pegawai</label>
                    <input type="text" name="nik" value="<?= set_value('nik') ?>" autocomplete="off" class="form-control <?= form_error('nik') ? 'is-invalid' : null ?>">
                    <?= form_error('nik') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>NIP Pegawai</label>
                    <input type="text" name="nip" value="<?= set_value('nip') ?>" autocomplete="off" class="form-control <?= form_error('nip') ? 'is-invalid' : null ?>">
                    <?= form_error('nip') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>NIDN Pegawai</label>
                    <input type="text" name="nidn" value="<?= set_value('nidn') ?>" autocomplete="off" class="form-control <?= form_error('nidn') ? 'is-invalid' : null ?>">
                    <?= form_error('nidn') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Email Pegawai</label>
                    <input type="email" name="email" value="<?= set_value('email') ?>" autocomplete="off" class="form-control <?= form_error('email') ? 'is-invalid' : null ?>">
                    <?= form_error('email') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>No HP Pegawai</label>
                    <input type="text" name="no_hp" value="<?= set_value('no_hp') ?>" autocomplete="off" class="form-control <?= form_error('no_hp') ? 'is-invalid' : null ?>">
                    <?= form_error('no_hp') ?>
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