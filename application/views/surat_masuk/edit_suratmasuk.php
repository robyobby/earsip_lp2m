<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit Berkas Surat Masuk</h1>
      <div class="section-header-breadcrumb">
        <a href="<?= site_url('suratmasuk') ?>" class="btn btn-warning btn-flat">
          <i class="fa fa-undo"></i> Kembali
        </a>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <form action="" method="post"></form>
            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
            <?php echo form_open_multipart('') ?>
            <div class="card-header">
              <h4>Berkas Surat Masuk</h4>
            </div>
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Tanggal Surat Diterima</label>
                <div class="col-sm-12 col-md-3">
                  <input type="hidden" name="kode_sm" autocomplete="off" value="<?= $this->input->post('kode_sm') ?? $row->kode_sm ?>" id="kode_sm" class="form-control <?= form_error('kode_sm') ? 'is-invalid' : null ?>">
                  <input type="date" name="tanggal_diterima" autocomplete="off" value="<?= date('Y-m-d') ?>" id="tanggal_diterima" class="form-control <?= form_error('tanggal_diterima') ? 'is-invalid' : null ?>">
                  <?= form_error('tanggal_diterima') ?>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Tanggal Surat</label>
                <div class="col-sm-12 col-md-3">
                  <input type="date" name="tanggal_sm" autocomplete="off" value="<?= date('Y-m-d') ?>" id="tanggal_sm" class="form-control <?= form_error('tanggal_sm') ? 'is-invalid' : null ?>">
                  <?= form_error('tanggal_sm') ?>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Nomor Surat Masuk</label>
                <div class="col-sm-12 col-md-3">
                  <input type="text" name="nomor_sm" autocomplete="off" value="<?= $this->input->post('nomor_sm') ?? $row->nomor_sm ?>" id="nomor_sm" class="form-control <?= form_error('nomor_sm') ? 'is-invalid' : null ?>">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Asal Surat Masuk</label>
                <div class="col-sm-12 col-md-3">
                  <select name="asal_suratmasuk" value="<?= $this->input->post('asal_suratmasuk') ?? $row->asal_suratmasuk ?>" id="asal_suratmasuk" class="form-control <?= form_error('asal_suratmasuk') ? 'is-invalid' : null ?>">
                    <?php $asal_suratmasuk = $this->input->post('asal_suratmasuk') ? $this->input->post('asal_suratmasuk') : $row->asal_suratmasuk ?>
                    <option value="">--Pilih Asal Surat Masuk--</option>
                    <option value="Internal" <?= $asal_suratmasuk == 'Internal' ? 'selected' : null ?>>Internal</option>
                    <option value="Eksternal" <?= $asal_suratmasuk == 'Eksternal' ? 'selected' : null ?>>Eksternal</option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Dari</label>
                <div class="col-sm-12 col-md-3">
                  <input type="text" name="dari" autocomplete="off" value="<?= $this->input->post('dari') ?? $row->dari ?>" id="nama_dari" class="form-control <?= form_error('dari') ? 'is-invalid' : null ?>">
                </div>
                <span class="input-group-btn">
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-darism">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Perihal</label>
                <div class="col-sm-12 col-md-3">
                  <textarea name="perihal_eks" id="perihal_eks" id="perihal_eks" class="form-control <?= form_error('perihal_eks') ? 'is-invalid' : null ?>" rows="4" autocomplete="off" placeholder=""><?= $this->input->post('perihal_eks') ?? $row->perihal_eks ?></textarea>
                  <?= form_error('perihal_eks') ?>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Tujuan</label>
                <div class="col-sm-12 col-md-2">
                  <input type="text" name="kode_unit_detail" autocomplete="off" value="<?= $this->input->post('kode_unit_detail') ?? $row->kode_unit_detail ?>" id="kode_unit_detail" class="form-control <?= form_error('kode_unit_detail') ? 'is-invalid' : null ?>">
                  <input type="text" name="singkatan" autocomplete="off" value="<?= $this->input->post('singkatan') ?? $row->singkatan ?>" id="singkatan" class="form-control <?= form_error('singkatan') ? 'is-invalid' : null ?>">
                </div>
                <span class="input-group-btn">
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-tujuan_sm">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
              <?php
              if ($row->nama_file_eks != null) { ?>
                <div class="form-group row mb-1">
                  <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5"></label>
                  <div class="col-sm-12 col-md-4">
                    <a href="<?= base_url(); ?>uploads/file_surat_masuk/<?= $this->input->post('nama_file_eks') ?? $row->nama_file_eks ?>" class="btn btn-info btn" id="nama_file_eks" method="post" target="_blank">
                      <span class="col-sm-12 col-md-3">
                        <i class="fa fa-download"> Lihat File</i>
                      </span>
                    </a>
                  </div>
                </div>
              <?php } ?>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Upload Draft / File Surat</label>
                <div class="col-sm-12 col-md-3">
                  <input type="file" value="<?= $this->input->post('nama_file_eks') ?? $row->nama_file_eks ?>" name="nama_file_eks" id="nama_file_eks" class="form-control"><?= form_error('nama_file_eks') ?>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Keterangan</label>
                <div class="col-sm-12 col-md-3">
                  <input type="text" name="keterangan" autocomplete="off" value="<?= $this->input->post('keterangan') ?? $row->keterangan ?>" id="nama_keterangan" class="form-control <?= form_error('keterangan') ? 'is-invalid' : null ?>">
                  <input type="text" name="status" autocomplete="off" value="<?= $this->input->post('status') ?? $row->status ?>" id="status" class="form-control <?= form_error('status') ? 'is-invalid' : null ?>"> <?= form_error('status') ?>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5"></label>
                <div class="col-sm-12 col-md-7">
                  <button class="btn btn-primary"> Simpan </button>
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

<div class="modal fade" id="modal-tujuan_sm">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Pilih Tujuan Surat Masuk</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body table-responsive">
        <div class="form_group">
          <table class="table table-bordered table-striped table-sm" id="table1">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Unit</th>
                <th class="text-center">Nama Sub Unit</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($tujuan as $t => $data) { ?>
                <tr>
                  <td class="text-center" style="width:3%;"><?= $no++ ?></td>
                  <td class="text-center"><?= $data->nama_unit ?></td>
                  <td class="text-center"><?= $data->singkatan ?></td>
                  <td class="text-center" style="width:8%;">
                    <button class="btn btn-sm btn-info" id="pilihtujuansm" data-kode_unit_detail="<?= $data->kode_unit_detail ?>" data-singkatan="<?= $data->singkatan ?>" data-nama_unit="<?= $data->nama_unit ?>"><i class="fa fa-check"></i> Pilih</button>
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

<div class="modal fade" id="modal-darism">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">Pilih Dari Asal Surat Masuk</h4>
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
                <th class="text-center">Nama Unit</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($dari as $d => $data) { ?>
                <tr>
                  <td class="text-center" style="width:3%;"><?= $no++ ?></td>
                  <td><?= $data->nama_dari ?></td>
                  <td class="text-center" style="width:8%;">
                    <button class="btn btn-sm btn-info" id="pilihdari" data-nama_dari="<?= $data->nama_dari ?>"><i class="fa fa-check"></i> Pilih</button>
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