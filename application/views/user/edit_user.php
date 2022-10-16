<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit Data User</h1>
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
            <form action="" method="post">
              <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
              <div class="card-header">
                <h4>Edit Data User</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Nama User</label>
                    <input type="hidden" name="kode_user" autocomplete="off" value="<?= $row->kode_user ?>" class="form-control">
                    <input type="hidden" name="status_aktif" autocomplete="off" value="<?= $row->status_aktif ?>" class="form-control">
                    <input type="text" name="nama_user" autocomplete="off" value="<?= $this->input->post('nama_user') ?? $row->nama_user ?>" class="form-control <?= form_error('nama_user') ? 'is-invalid' : null ?>">
                    <?= form_error('nama_user') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Username</label>
                    <input type="text" name="username" autocomplete="off" value="<?= $this->input->post('username') ?? $row->username ?>" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>">
                    <?= form_error('username') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Password *</label>
                    <input type="password" name="password" autocomplete="off" value="<?= $this->input->post('password') ?>" class="form-control <?= form_error('password') ? 'is-invalid' : null ?>">
                    <?= form_error('password') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Konfirmasi Password *</label>
                    <input type="password" name="passconf" autocomplete="off" value="<?= $this->input->post('passconf') ?>" class="form-control <?= form_error('passconf') ? 'is-invalid' : null ?>">
                    <?= form_error('passconf') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Status Level User</label>
                    <select name="status_level" value="<?= $this->input->post('status_level') ?? $row->status_level ?>" class="form-control <?= form_error('status_level') ? 'is-invalid' : null ?>">
                      <?php $status_level = $this->input->post('status_level') ? $this->input->post('status_level') : $row->status_level ?>
                      <option value="Administrator" <?= $status_level == 'Administrator' ? 'selected' : null ?>>Administrator</option>
                      <option value="User" <?= $status_level == 'User' ? 'selected' : null ?>>User</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary btn-lg">Ubah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>