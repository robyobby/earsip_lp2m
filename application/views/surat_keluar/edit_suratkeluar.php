<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit Data Surat Keluar</h1>
      <div class="section-header-breadcrumb">
        <a href="<?= site_url('Suratkeluar') ?>" class="btn btn-warning btn-flat">
          <i class="fa fa-undo"></i> Kembali
        </a>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <form action="" method="post"></form>
            <?php echo form_open_multipart('') ?>
            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
            <div class="card-header">
              <h4>Nomor Surat Keluar</h4>
            </div>
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Tanggal</label>
                <div class="col-sm-12 col-md-3">
                  <input type="hidden" name="kode_sk" autocomplete="off" value="<?= $this->input->post('kode_sk') ?? $row->kode_sk ?>" id="kode_sk" class="form-control <?= form_error('kode_sk') ? 'is-invalid' : null ?>">
                  <input type="hidden" name="no_indeks" autocomplete="off" value="<?= $this->input->post('no_indeks') ?? $row->no_indeks ?>" id="no_indeks" class="form-control <?= form_error('no_indeks') ? 'is-invalid' : null ?>">
                  <?= form_error('no_indeks') ?>
                  <input type="date" name="tanggal_sk" autocomplete="off" value="<?= date('Y-m-d') ?>" id="tanggal_sk" class="form-control <?= form_error('tanggal_sk') ? 'is-invalid' : null ?>">
                  <?= form_error('tanggal_sk') ?>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Jenis Surat</label>
                <div class="col-sm-12 col-md-3">
                  <select name="jenis_sk" value="<?= $this->input->post('jenis_sk') ?? $row->jenis_sk ?>" id="jenis_sk" class="form-control <?= form_error('jenis_sk') ? 'is-invalid' : null ?>">
                    <?php $jenis_sk = $this->input->post('jenis_sk') ? $this->input->post('jenis_sk') : $row->jenis_sk ?>
                    <option value="">--Pilih Jenis Surat--</option>
                    <option value="Internal" <?= $jenis_sk == 'Internal' ? 'selected' : null ?>>Internal</option>
                    <option value="Eksternal" <?= $jenis_sk == 'Eksternal' ? 'selected' : null ?>>Eksternal</option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Sifat Surat</label>
                <div class="col-sm-12 col-md-3">
                  <select name="sifat_sk" value="<?= $this->input->post('sifat_sk') ?? $row->sifat_sk ?>" id="sifat_sk" class="form-control <?= form_error('sifat_sk') ? 'is-invalid' : null ?>">
                    <?php $sifat_sk = $this->input->post('sifat_sk') ? $this->input->post('sifat_sk') : $row->sifat_sk ?>
                    <option value="">--Pilih Sifat Surat--</option>
                    <option value="B" <?= $sifat_sk == 'B' ? 'selected' : null ?>>Biasa</option>
                    <option value="P" <?= $sifat_sk == 'P' ? 'selected' : null ?>>Penting</option>
                    <option value="R" <?= $sifat_sk == 'R' ? 'selected' : null ?>>Rahasia</option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Dari</label>
                <div class="col-sm-12 col-md-4">
                  <input type="hidden" name="kode_subunit" autocomplete="off" value="<?= $this->input->post('kode_subunit') ?? $row->kode_subunit ?>" id="kode_subunit" class="form-control <?= form_error('kode_subunit') ? 'is-invalid' : null ?>"> <?= form_error('kode_subunit') ?>
                  <input type="text" name="nama_subunit" id="nama_subunit" readonly value="<?= $this->input->post('nama_subunit') ?? $row->nama_subunit ?>" autocomplete="off" id="nama_subunit" class="form-control <?= form_error('nama_subunit') ? 'is-invalid' : null ?>">
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
                  <textarea name="perihal" id="perihal" id="perihal" class="form-control <?= form_error('perihal') ? 'is-invalid' : null ?>" rows="4" autocomplete="off" placeholder=""><?= $this->input->post('perihal') ?? $row->perihal ?></textarea>
                  <?= form_error('perihal') ?>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Tujuan</label>
                <div class="col-sm-12 col-md-4">
                  <input type="text" name="nama_tujuan" id="nama_tujuan" readonly value="<?= $this->input->post('nama_tujuan') ?? $row->nama_tujuan ?>" autocomplete="off" class="form-control <?= form_error('nama_tujuan') ? 'is-invalid' : null ?>">
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
                  <input type="hidden" name="kode_klasifikasi" autocomplete="off" value="<?= $this->input->post('kode_klasifikasi') ?? $row->kode_klasifikasi ?>" id="kode_klasifikasi" class="form-control <?= form_error('kode_klasifikasi') ? 'is-invalid' : null ?>"> <?= form_error('kode_klasifikasi') ?>
                  <input type="text" name="kode" id="kode" readonly value="<?= $this->input->post('kode') ?? $row->kode ?>" autocomplete="off" id="kode" class="form-control <?= form_error('kode') ? 'is-invalid' : null ?>">
                  <input type="hidden" name="status" autocomplete="off" value="<?= $this->input->post('status') ?? $row->status ?>" id="status" class="form-control <?= form_error('status') ? 'is-invalid' : null ?>"> <?= form_error('status') ?>
                </div>
                <span class="input-group-btn">
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-klasifikasi">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
              <?php
              if ($row->nama_file != null) { ?>
                <div class="form-group row mb-1">
                  <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5"></label>
                  <div class="col-sm-12 col-md-4">
                    <a href="<?= base_url(); ?>uploads/file_surat_keluar/<?= $this->input->post('nama_file') ?? $row->nama_file ?>" class="btn btn-info btn" id="nama_file" method="post" target="_blank">
                      <span class="col-sm-12 col-md-3">
                        <i class="fa fa-download"> Lihat File</i>
                      </span>
                    </a>
                  </div>
                </div>
              <?php } ?>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Upload Draft / File Surat</label>
                <div class="col-sm-12 col-md-4">
                  <input type="file" value="<?= $this->input->post('nama_file') ?? $row->nama_file ?>" name="nama_file" id="nama_file" class="form-control"><?= form_error('nama_file') ?>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Keterangan</label>
                <div class="col-sm-12 col-md-4">
                  <input type="text" name="keterangan" id="keterangan" value="<?= $this->input->post('keterangan') ?? $row->keterangan ?>" autocomplete="off" id="keterangan" class="form-control <?= form_error('keterangan') ? 'is-invalid' : null ?>">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5"></label>
                <div class="col-sm-12 col-md-7">
                  <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
              </div>
              <?php echo form_close() ?>
            </div>
            </form>
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
                        <th class="text-center">Sub Nama</th>
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
                          <td class="text-center"><?= $data->sub_nama ?></td>
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