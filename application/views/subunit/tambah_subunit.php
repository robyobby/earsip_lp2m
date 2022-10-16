<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Sub Unit Kerja</h1>
      <div class="section-header-breadcrumb">
        <a href="<?= site_url('datasubunit') ?>" class="btn btn-warning btn-flat">
          <i class="fa fa-undo"></i> Kembali
        </a>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-header">
              <h4>Tambah Data Sub Unit Kerja</h4>
            </div>
            <form action="<?= site_url('datasubunit/tambah') ?>" method="post">
              <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-12 col-md-10 col-lg-10">
                    <label>Nama Unit Kerja</label>
                    <div class="form-group input-group form-group-sm">
                      <input type="text" name="singkatan" value="<?= set_value('singkatan') ?>" id="singkatan" class="form-control form-control-lg" readonly required>
                      <input type="hidden" name="kode_unit" value="<?= set_value('kode_unit') ?>" id="kode_unit">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-unitkerja">
                          <i class="fa fa-search"></i> Cari
                        </button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-8">
                    <label>Nama Sub Unit Kerja</label>
                    <input type="text" name="nama_subunit" value="<?= set_value('nama_subunit') ?>" autocomplete="off" class="form-control <?= form_error('nama_subunit') ? 'is-invalid' : null ?>">
                    <?= form_error('nama_subunit') ?>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-5">
                    <label>Singkatan / Kode Surat Unit</label>
                    <input type="text" name="kode_surat_subunit" value="<?= set_value('kode_surat_subunit') ?>" autocomplete="off" class="form-control <?= form_error('kode_surat_subunit') ? 'is-invalid' : null ?>">
                    <?= form_error('kode_surat_subunit') ?>
                  </div>
                </div>
                <div class="row">
                  <div class="card-footer text-right">
                    <button class="btn btn-primary btn-lg">Simpan</button>
                  </div>
                </div>
              </div>
              <?php echo form_close() ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="modal fade" id="modal-unitkerja">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Pilih Data Unit Kerja</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body table-responsive">
        <div class="form-group">
          <table class="table table-bordered table-striped table-sm" id="table">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Unit Kerja</th>
                <th class="text-center">Singkatan</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($unit as $u => $data) { ?>
                <tr>
                  <td class="text-center" style="width:3%;"><?= $no++ ?></td>
                  <td class="text-center"><?= $data->nama_unit ?></td>
                  <td class="text-center"><?= $data->singkatan ?></td>
                  <td class="text-center" style="width:8%;">
                    <button class="btn btn-sm btn-info" id="pilihunit" data-kode_unit="<?= $data->kode_unit ?>" data-nama_unit="<?= $data->nama_unit ?>" data-singkatan="<?= $data->singkatan ?>"><i class="fa fa-check"></i>Pilih</button>
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