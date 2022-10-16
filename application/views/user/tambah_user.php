<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Data User</h1>
      <div class="section-header-breadcrumb">
        <a href="<?= site_url('datauser') ?>" class="btn btn-warning btn-flat">
          <i class="fa fa-undo"></i> Kembali
        </a>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <form action="<?= site_url('datauser/tambah') ?>" method="post">
              <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
              <div class="card-header">
                <h4>Tambah Data User</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Nama User</label>
                    <input type="text" name="nama_user" value="<?= set_value('nama_user') ?>" autocomplete="off" class="form-control <?= form_error('nama_user') ? 'is-invalid' : null ?>">
                    <?= form_error('nama_user') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Username</label>
                    <input type="text" name="username" value="<?= set_value('username') ?>" autocomplete="off" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>">
                    <?= form_error('username') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Password *</label>
                    <input type="password" name="password" value="<?= set_value('password') ?>" autocomplete="off" class="form-control <?= form_error('password') ? 'is-invalid' : null ?>">
                    <?= form_error('password') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Konfirmasi Password *</label>
                    <input type="password" name="passconf" value="<?= set_value('passconf') ?>" autocomplete="off" class="form-control <?= form_error('passconf') ? 'is-invalid' : null ?>">
                    <input type="hidden" name="status_aktif" value="<?= "1" ?>" autocomplete="off" class="form-control <?= form_error('status_aktif') ? 'is-invalid' : null ?>">
                    <?= form_error('passconf') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Status Level User</label>
                    <select name="status_level" value="<?= set_value('status_level') ?>" class="form-control <?= form_error('status_level') ? 'is-invalid' : null ?>">
                      <option value="">-- Pilih Status Level User --</option>
                      <option value="Administrator" <?= set_value('status_level') == "Administrator" ? "selected" : null ?>>Administrator</option>
                      <option value="User" <?= set_value('status_level') == "User" ? "selected" : null ?>>User</option>
                    </select>
                    <?= form_error('kota_instalasi') ?>
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