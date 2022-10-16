<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit Data Unit Kerja</h1>
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
            <form action="" method="post">
              <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
              <div class="card-header">
                <h4>Edit Data Unit Kerja</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-10">
                    <label>Nama Unit Kerja</label>
                    <input type="hidden" name="kode_unit" autocomplete="off" value="<?= $row->kode_unit ?>" class="form-control">
                    <input type="text" name="nama_unit" autocomplete="off" value="<?= $this->input->post('nama_unit') ?? $row->nama_unit ?>" class="form-control <?= form_error('nama_unit') ? 'is-invalid' : null ?>">
                    <?= form_error('nama_unit') ?>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-5">
                    <label>Singkatan</label>
                    <input type="text" name="singkatan" autocomplete="off" value="<?= $this->input->post('singkatan') ?? $row->singkatan ?>" class="form-control <?= form_error('singkatan') ? 'is-invalid' : null ?>">
                    <input type="hidden" name="status" autocomplete="off" value="<?= $this->input->post('status') ?? $row->status ?>" class="form-control <?= form_error('status') ? 'is-invalid' : null ?>">
                    <?= form_error('singkatan') ?>
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