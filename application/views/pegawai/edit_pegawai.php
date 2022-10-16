<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit Data Pegawai</h1>
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
            <form action="" method="post">
              <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
              <div class="card-header">
                <h4>Edit Data Pegawai</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Nama Pegawai</label>
                    <input type="hidden" name="kode_pegawai" autocomplete="off" value="<?= $row->kode_pegawai ?>" class="form-control">
                    <input type="text" name="nama_pegawai" autocomplete="off" value="<?= $this->input->post('nama_pegawai') ?? $row->nama_pegawai ?>" class="form-control <?= form_error('nama_pegawai') ? 'is-invalid' : null ?>">
                    <?= form_error('nama_pegawai') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>NIK Pegawai</label>
                    <input type="text" name="nik" autocomplete="off" value="<?= $this->input->post('nik') ?? $row->nik ?>" class="form-control <?= form_error('nik') ? 'is-invalid' : null ?>">
                    <?= form_error('nik') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>NIP Pegawai</label>
                    <input type="text" name="nip" autocomplete="off" value="<?= $this->input->post('nip') ?? $row->nip ?>" class="form-control <?= form_error('nip') ? 'is-invalid' : null ?>">
                    <?= form_error('nip') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>NIDN Pegawai</label>
                    <input type="text" name="nidn" autocomplete="off" value="<?= $this->input->post('nidn') ?? $row->nidn ?>" class="form-control <?= form_error('nidn') ? 'is-invalid' : null ?>">
                    <?= form_error('nidn') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Email Pegawai</label>
                    <input type="email" name="email" autocomplete="off" value="<?= $this->input->post('email') ?? $row->email ?>" class="form-control <?= form_error('email') ? 'is-invalid' : null ?>">
                    <?= form_error('email') ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Nomor HP Pegawai</label>
                    <input type="numeric" name="no_hp" autocomplete="off" value="<?= $this->input->post('no_hp') ?? $row->no_hp ?>" class="form-control <?= form_error('no_hp') ? 'is-invalid' : null ?>">
                    <?= form_error('no_hp') ?>
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary btn-lg">Ubah</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>