<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Buat Nomor Surat Keluar</h1>
      <div class="section-header-breadcrumb">
        <a href="<?= site_url('suratkeluar') ?>" class="btn btn-warning btn-flat">
          <i class="fa fa-undo"></i> Kembali
        </a>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <?php echo form_open_multipart('Suratkeluar/tambah') ?>
            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
            <div class="card-header">
              <h4>Nomor Surat Keluar</h4>
            </div>
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Tanggal</label>
                <div class="col-sm-12 col-md-3">
                  <input type="date" name="tanggal_sk" class="form-control" value="<?= date('Y-m-d') ?>">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Jenis Surat</label>
                <div class="col-sm-12 col-md-3">
                  <select name="jenis_sk" id="jenis_sk" class="form-control" value="<?= set_value('jenis_sk') ?>">
                    <option value="">--Pilih Jenis Surat--</option>
                    <option value="Internal" <?= set_value('jenis_sk') == "Internal" ? "selected" : null ?>>Internal</option>
                    <option value="Eksternal" <?= set_value('jenis_sk') == "Eksternal" ? "selected" : null ?>>Eksternal</option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Sifat Surat</label>
                <div class="col-sm-12 col-md-3">
                  <select name="sifat_sk" class="form-control" value="<?= set_value('sifat_sk') ?>">
                    <option value="">--Pilih Sifat Surat--</option>
                    <option value="B" <?= set_value('sifat_sk') == "B" ? "selected" : null ?>>Biasa</option>
                    <option value="P" <?= set_value('sifat_sk') == "P" ? "selected" : null ?>>Penting</option>
                    <option value="R" <?= set_value('sifat_sk') == "R" ? "selected" : null ?>>Rahasia</option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Dari</label>
                <div class="col-sm-12 col-md-4">
                  <input type="hidden" name="kode_subunit" value="<?= set_value('kode_subunit') ?>" id="kode_subunit">
                  <input type="text" name="nama_subunit" value="<?= set_value('nama_subunit') ?>" id="nama_subunit" class="form-control form-control-sm" readonly>
                </div>
                <span class="input-group-btn">
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-darisk">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Perihal</label>
                <div class="col-sm-12 col-md-3">
                  <textarea class="form-control" rows="4" name="perihal" value="<?= set_value('perihal') ?>" id="perihal"></textarea>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Tujuan</label>
                <div class="col-sm-12 col-md-4">
                  <input type="text" name="nama_tujuan" value="<?= set_value('nama_tujuan') ?>" id="nama_tujuan" class="form-control form-control-sm">
                </div>
                <span class="input-group-btn">
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-tujuan">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Kode Klasifikasi</label>
                <div class="col-sm-12 col-md-2">
                  <input type="text" name="kode" value="<?= set_value('kode') ?>" id="kode" class="form-control" readonly>
                  <input type="hidden" name="kode_klasifikasi" value="<?= set_value('kode_klasifikasi') ?>" id="kode_klasifikasi" class="form-control">
                </div>
                <span class="input-group-btn">
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-klasifikasi">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Upload Draft / File Surat</label>
                <div class="col-sm-12 col-md-5">
                  <input type="file" value="<?= set_value('nama_file') ?>" name="nama_file" class="form-control"> <?= form_error('nama_file') ?>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Keterangan</label>
                <div class="col-sm-12 col-md-4">
                  <input type="text" value="<?= set_value('keterangan') ?>" name="keterangan" class="form-control"> <?= form_error('keterangan') ?>
                  <!-- Jangan lupa masukkan status dengan value = 1 -->
                  <input type="hidden" name="status" value="<?= 1 ?>" id="status">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5"></label>
                <div class="col-sm-12 col-md-7">
                  <button class="btn btn-primary">Simpan</button>
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

<div class="modal fade" id="modal-darisk">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Pilih Asal Surat Keluar</h4>
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
                <th class="text-center">Kode Sub Unit</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($subunit as $u => $data) { ?>
                <tr>
                  <td class="text-center" style="width:3%;"><?= $no++ ?></td>
                  <td class="text-center"><?= $data->singkatan ?></td>
                  <td class="text-center"><?= $data->nama_subunit ?></td>
                  <td class="text-center"><?= $data->kode_surat_subunit ?></td>
                  <td class="text-center" style="width:8%;">
                    <button class="btn btn-sm btn-info" id="pilihsubunit" data-kode_subunit="<?= $data->kode_subunit ?>" data-singkatan="<?= $data->singkatan ?>" data-nama_subunit="<?= $data->nama_subunit ?>" data-kode_surat_subunit="<?= $data->kode_surat_subunit ?>"><i class="fa fa-check"></i>Pilih</button>
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

<div class="modal fade" id="modal-tujuan">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">Pilih Tujuan Surat Keluar</h4>
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
                <th class="text-center">Nama Tujuan Surat Keluar</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($tujuan as $u => $data) { ?>
                <tr>
                  <td class="text-center" style="width:3%;"><?= $no++ ?></td>
                  <td><?= $data->nama_tujuan ?></td>
                  <td class="text-center" style="width:8%;">
                    <button class="btn btn-sm btn-info" id="pilihtujuan" data-nama_tujuan="<?= $data->nama_tujuan ?>"><i class="fa fa-check"></i>Pilih</button>
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

<div class="modal fade" id="modal-klasifikasi">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">Pilih Kode Klasifikasi Surat Keluar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body table-responsive">
        <div class="form-group">
          <div class="row">
            <div class="col-2.5">
              <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab">Berdasarkan Histori</a>
                <a class="list-group-item list-group-item-action" id="list-histori-list" data-toggle="list" href="#list-histori" role="tab">Berdasarkan Kode Klasifikasi</a>
              </div>
            </div>
            <div class="col-8 5">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                  <table class="table table-bordered table-striped table-sm" id="table3">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Kode Surat Keluar</th>
                        <th class="text-center">Perihal</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;
                      foreach ($view_sk_aktif as $u => $data) { ?>
                        <tr>
                          <td class="text-center" style="width:3%;"><?= $no++ ?></td>
                          <td class="text-center"><?= $data->kode ?></td>
                          <td class="text-center"><?= $data->perihal ?></td>
                          <td class="text-center" style="width:8%;">
                            <button class="btn btn-sm btn-info" id="pilihhistori" data-kode="<?= $data->kode ?>" data-kode_klasifikasi="<?= $data->kode_klasifikasi ?>"><i class="fa fa-check"></i>Pilih</button>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="list-histori" role="tabpanel" aria-labelledby="list-histori-list">
                  <table class="table table-bordered table-striped table-sm" id="table4">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Kode Surat Keluar</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Uraian</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;
                      foreach ($klasifikasi as $u => $data) { ?>
                        <tr>
                          <td class="text-center" style="width:3%;"><?= $no++ ?></td>
                          <td class="text-center"><?= $data->kode ?></td>
                          <td class="text-center"><?= $data->nama ?></td>
                          <td class="text-center"><?= $data->uraian ?></td>
                          <td class="text-center" style="width:8%;">
                            <button class="btn btn-sm btn-info" id="pilihklasifikasi" data-kode="<?= $data->kode ?>" data-kode_klasifikasi="<?= $data->kode_klasifikasi ?>"><i class="fa fa-check"></i>Pilih</button>
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
      </div>
    </div>
  </div>
</div>