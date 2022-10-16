<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Simpan Berkas Surat Masuk</h1>
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
            <?php echo form_open_multipart('Suratmasuk/tambah') ?>
            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
            <div class="card-header">
              <h4>Berkas Surat Masuk</h4>
            </div>
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Tanggal Surat Diterima</label>
                <div class="col-sm-12 col-md-3">
                  <input type="date" name="tanggal_diterima" class="form-control" value="<?= date('Y-m-d') ?>">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Tanggal Surat</label>
                <div class="col-sm-12 col-md-3">
                  <input type="date" name="tanggal_sm" class="form-control" value="<?= date('Y-m-d') ?>">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Nomor Surat Masuk</label>
                <div class="col-sm-12 col-md-3">
                  <input type="text" name="nomor_sm" class="form-control" value="<?= set_value('nomor_sm') ?>">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Asal Surat Masuk</label>
                <div class="col-sm-12 col-md-3">
                  <select name="asal_suratmasuk" id="asal_suratmasuk" class="form-control" value="<?= set_value('asal_suratmasuk') ?>">
                    <option value="">--Pilih Asal Surat Masuk--</option>
                    <option value="Internal" <?= set_value('asal_suratmasuk') == "Internal" ? "selected" : null ?>>Internal</option>
                    <option value="Eksternal" <?= set_value('asal_suratmasuk') == "Eksternal" ? "selected" : null ?>>Eksternal</option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Dari</label>
                <div class="col-sm-12 col-md-3">
                  <input type="text" name="dari" value="<?= set_value('dari') ?>" id="nama_dari" class="form-control form-control-sm">
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
                  <textarea class="form-control" rows="4" name="perihal_eks" value="<?= set_value('perihal_eks') ?>" id="perihal_eks"></textarea>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Tujuan</label>
                <div class="col-sm-12 col-md-2">
                  <input type="text" name="kode_unit_detail" value="<?= set_value('kode_unit_detail') ?>" id="kode_unit_detail" class="form-control form-control-sm">
                  <input type="text" name="singkatan" value="<?= set_value('singkatan') ?>" id="singkatan" readonly class="form-control form-control-sm">
                </div>
                <span class="input-group-btn">
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-tujuan_sm">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Upload Draft / File Surat</label>
                <div class="col-sm-12 col-md-3">
                  <input type="file" value="<?= set_value('nama_file_eks') ?>" name="nama_file_eks" class="form-control"> <?= form_error('nama_file_eks') ?>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Keterangan</label>
                <div class="col-sm-12 col-md-3">
                  <input type="text" value="<?= set_value('keterangan') ?>" name="keterangan" class="form-control"> <?= form_error('keterangan') ?>
                  <!-- Jangan lupa masukkan status dengan value = 1 -->
                  <input type="text" name="status" value="<?= 1 ?>" id="status">
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