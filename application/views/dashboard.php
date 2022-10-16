<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
              <i class="far fa-folder-open"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Surat Masuk</h4>
              </div>
              <div class="card-body">
                <?= $this->fungsi->surat_masuk() ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="far fa-envelope-open"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Surat Keluar</h4>
              </div>
              <div class="card-body">
                <?= $this->fungsi->surat_keluar() ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
              <i class="far fa fa-retweet"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Surat Keluar (Batal)</h4>
              </div>
              <div class="card-body">
                <?= $this->fungsi->surat_batal() ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4>Surat Keluar</h4>
              <div class="card-header-action">
                <a href="<?= site_url('Suratkeluar') ?>" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive table-invoice">
                <table class="table table-striped">
                  <tr>
                    <th class="text-center">Jenis</th>
                    <th class="text-center">Tujuan</th>
                    <th class="text-center">File Surat</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Action</th>
                  </tr>
                  <?php $no = 1;
                  foreach ($row->result() as $key => $data) { ?>
                    <tr>
                      <td width="110px" style="width:7%;">
                        <?php
                        if ($data->jenis_sk == "Internal") { ?>
                          <div class="badge badge-info">Internal</div>
                        <?php } else { ?>
                          <div class="badge badge-primary">Eksternal</div>
                        <?php } ?>
                      </td>
                      <td class="font-weight-600"><?= $data->nama_tujuan ?></td>
                      <td class="text-center" width="100px" style="width:4%;">
                        <?php
                        if ($data->nama_file == null) { ?>
                          <div class="badge badge-warning">Tidak Ada</div>
                        <?php } else { ?>
                          <div>
                            <a href="<?= base_url(); ?>uploads/file_surat_keluar/<?= $this->input->post('nama_file') ?? $data->nama_file ?>" class="badge badge-success" id="nama_file" method="post" target="_blank">
                              Ada </a>
                          </div>
                        <?php } ?>
                      </td>
                      <td style="width:10%;"><?= indo_date($data->tanggal_sk) ?></td>
                      <td width="130px" style="width:18%;">
                        <?php
                        if ($data->nama_file != null) { ?>
                          <a class="btn btn-info btn-xs" id="infosuratkeluar" data-toggle="modal" data-target="#modal-info" data-kode_sk="<?= $data->kode_sk ?>" data-no_surat="<?= $data->no_surat ?>" data-tanggal_sk="<?= indo_date($data->tanggal_sk) ?>" data-jenis_sk="<?= $data->jenis_sk ?>" data-nama_tujuan="<?= $data->nama_tujuan ?>" data-perihal="<?= $data->perihal ?>" data-nama_subunit="<?= $data->nama_subunit ?>" data-keterangan="<?= $data->keterangan ?>" data-nama_unit="<?= $data->nama_unit ?>" data-nama_file="<?= $data->nama_file ?>">
                            <i class="fa fa-info"></i> Info
                          </a>
                        <?php } else { ?>
                          <a class="btn btn-info btn-xs" id="infosuratkeluar" data-toggle="modal" data-target="#modal-info" data-kode_sk="<?= $data->kode_sk ?>" data-no_surat="<?= $data->no_surat ?>" data-tanggal_sk="<?= indo_date($data->tanggal_sk) ?>" data-jenis_sk="<?= $data->jenis_sk ?>" data-nama_tujuan="<?= $data->nama_tujuan ?>" data-perihal="<?= $data->perihal ?>" data-nama_subunit="<?= $data->nama_subunit ?>" data-keterangan="<?= $data->keterangan ?>" data-nama_unit="<?= $data->nama_unit ?>">
                            <i class="fa fa-info"></i> Info
                          </a>
                        <?php } ?>
                      </td>
                    </tr>
                  <?php } ?>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4>Surat Masuk</h4>
              <div class="card-header-action">
                <a href="<?= site_url('Suratmasuk') ?>" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive table-invoice">
                <table class="table table-striped">
                  <tr>
                    <th class="text-center">Asal Surat</th>
                    <th class="text-center">Dari</th>
                    <th class="text-center">File Surat</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Action</th>
                  </tr>
                  <?php $no = 1;
                  foreach ($rows->result() as $rw => $data) { ?>
                    <tr>
                      <td width="110px" style="width:7%;">
                        <?php
                        if ($data->asal_suratmasuk == "Internal") { ?>
                          <div class="badge badge-info">Internal</div>
                        <?php } else { ?>
                          <div class="badge badge-primary">Eksternal</div>
                        <?php } ?>
                      </td>
                      <td class="font-weight-400">
                        <?= $data->dari ?>
                      </td>
                      <td width="100px" style="width:4%;">
                        <?php
                        if ($data->nama_file_eks == null) { ?>
                          <div class="badge badge-warning">Tidak Ada</div>
                        <?php } else { ?>
                          <div>
                            <a href="<?= base_url(); ?>uploads/file_surat_masuk/<?= $this->input->post('nama_file_eks') ?? $data->nama_file_eks ?>" class="badge badge-success" id="nama_file_eks" method="post" target="_blank">
                              Ada </a>
                          </div>
                        <?php } ?>
                      </td>
                      <td style="width:13%;"><?= indo_date($data->tanggal_sm) ?></td>
                      <td class="text-center" width="130px" style="width:18%;">
                        <?php
                        if ($data->nama_file_eks != null) { ?>
                          <a class="btn btn-info btn-xs" id="infosuratmasuk" data-toggle="modal" data-target="#modal-info-sm" data-kode_sm="<?= $data->kode_sm ?>" data-nomor_sm="<?= $data->nomor_sm ?>" data-tanggal_sm="<?= indo_date($data->tanggal_sm) ?>" data-asal_suratmasuk="<?= $data->asal_suratmasuk ?>" data-tujuan="<?= $data->tujuan ?>" data-perihal_eks="<?= $data->perihal_eks ?>" data-dari="<?= $data->dari ?>" data-keterangan="<?= $data->keterangan ?>" data-nama_file_eks="<?= $data->nama_file_eks ?>">
                            <i class="fa fa-info"></i> Info
                          </a>
                        <?php } else { ?>
                          <a class="btn btn-info btn-xs" id="infosuratmasuk" data-toggle="modal" data-target="#modal-info-sm" data-kode_sm="<?= $data->kode_sm ?>" data-nomor_sm="<?= $data->nomor_sm ?>" data-tanggal_sm="<?= indo_date($data->tanggal_sm) ?>" data-asal_suratmasuk="<?= $data->asal_suratmasuk ?>" data-tujuan="<?= $data->tujuan ?>" data-perihal_eks="<?= $data->perihal_eks ?>" data-dari="<?= $data->dari ?>" data-keterangan="<?= $data->keterangan ?>">
                            <i class="fa fa-info"></i> Info
                          </a>
                        <?php } ?>
                      </td>
                    </tr>
                  <?php } ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="modal fade" id="modal-info" tabindex="-1" role="dialog" style="display: none;" aria-hidden="TRUE">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Informasi Surat Keluar</h4>
      </div>
      <div class="modal-body" id="infosk">
        <table>
          <tr>
            <th width="150px"></th>
            <th width="3%"></th>
            <th width="430px"></th>
          </tr>
          <tr>
            <div class="form-group row mb-4">
              <td style="width: 30%">
                <p class="col-form-label">No Surat Keluar</p>
              </td>
              <td style="width: 3%;">
                <p class="col-form-label">:</p>
              </td>
              <td style="width: 60%;">
                <input type="text" name="no_surat" readonly id="no_surat" class="form-control form-control-sm" required>
              </td>
            </div>
          </tr>
          <tr>
            <td style="width: 30%">
              <p class="col-form-label">Tanggal Surat Keluar</p>
            </td>
            <td style="width: 3%;">
              <p class="col-form-label">:</p>
            </td>
            <td style="width: 60%;">
              <input type="text" name="tanggal_sk" readonly id="tanggal_sk" class="form-control form-control-sm" required>
            </td>
          </tr>
          <tr>
            <td style="width: 30%">
              <p class="col-form-label">Jenis Surat Keluar</p>
            </td>
            <td style="width: 3%;">
              <p class="col-form-label">:</p>
            </td>
            <td style="width: 60%;">
              <input type="text" name="jenis_sk" readonly id="jenis_sk" class="form-control form-control-sm" required>
            </td>
          </tr>
          <tr>
            <td style="width: 30%">
              <p class="col-form-label">Nama Unit</p>
            </td>
            <td style="width: 3%;">
              <p class="col-form-label">:</p>
            </td>
            <td style="width: 30%;">
              <input type="text" name="nama_unit" readonly id="nama_unit" class="form-control form-control-sm" required>
            </td>
          </tr>
          <tr>
            <td style="width: 30%">
              <p class="col-form-label">Nama Sub Unit</p>
            </td>
            <td style="width: 3%;">
              <p class="col-form-label">:</p>
            </td>
            <td style="width: 60%;">
              <input type="text" name="nama_subunit" readonly id="nama_subunit" class="form-control form-control-sm" required>
            </td>
          </tr>
          <tr>
            <td style="width: 30%">
              <p class="col-form-label">Perihal</p>
            </td>
            <td style="width: 3%;">
              <p class="col-form-label">:</p>
            </td>
            <td style="width: 60%;">
              <input type="text" name="perihal" readonly id="perihal" class="form-control form-control-sm" required>
            </td>
          </tr>
          <tr>
            <td style="width: 30%">
              <p class="col-form-label">Tujuan</p>
            </td>
            <td style="width: 3%;">
              <p class="col-form-label">:</p>
            </td>
            <td style="width: 60%;">
              <input type="text" name="nama_tujuan" readonly id="nama_tujuan" class="form-control form-control-sm" required>
            </td>
          </tr>
          <tr>
            <td style="width: 30%">
              <p class="col-form-label">Keterangan</p>
            </td>
            <td style="width: 3%;">
              <p class="col-form-label">:</p>
            </td>
            <td style="width: 60%;">
              <input type="text" name="keterangan" readonly id="keterangan" class="form-control form-control-sm" required>
            </td>
          </tr>
          <tr>
            <td style="width: 30%">
              <p class="col-form-label"></p>
            </td>
            <td style="width: 3%;">
              <p class="col-form-label"></p>
            </td>
            <td style="width: 60%;">
              <div>
                <input type="text" name="nama_file" readonly id="nama_file" class="form-control form-control-sm" required>
                <iframe src="" width="500px" height="700px" name="nama_file" id="file_name"></iframe>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-light" data-dismiss="modal">TUTUP</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-info-sm" tabindex="-1" role="dialog" style="display: none;" aria-hidden="TRUE">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Informasi Surat Masuk</h4>
      </div>
      <div class="modal-body" id="infosm">
        <table>
          <tr>
            <th width="150px"></th>
            <th width="3%"></th>
            <th width="430px"></th>
          </tr>
          <tr>
            <div class="form-group row mb-4">
              <td style="width: 30%">
                <p class="col-form-label">No Surat Masuk</p>
              </td>
              <td style="width: 3%;">
                <p class="col-form-label">:</p>
              </td>
              <td style="width: 60%;">
                <input type="text" name="nomor_sm" readonly id="nomor_sm" class="form-control form-control-sm" required>
              </td>
            </div>
          </tr>
          <tr>
            <td style="width: 30%">
              <p class="col-form-label">Tanggal Surat Masuk</p>
            </td>
            <td style="width: 3%;">
              <p class="col-form-label">:</p>
            </td>
            <td style="width: 60%;">
              <input type="text" name="tanggal_sm" readonly id="tanggal_sm" class="form-control form-control-sm" required>
            </td>
          </tr>
          <tr>
            <td style="width: 30%">
              <p class="col-form-label">Jenis Surat Masuk</p>
            </td>
            <td style="width: 3%;">
              <p class="col-form-label">:</p>
            </td>
            <td style="width: 60%;">
              <input type="text" name="asal_suratmasuk" readonly id="asal_suratmasuk" class="form-control form-control-sm" required>
            </td>
          </tr>
          <tr>
            <td style="width: 30%">
              <p class="col-form-label">Dari</p>
            </td>
            <td style="width: 3%;">
              <p class="col-form-label">:</p>
            </td>
            <td style="width: 60%;">
              <input type="text" name="dari" readonly id="dari" class="form-control form-control-sm" required>
            </td>
          </tr>
          <tr>
            <td style="width: 30%">
              <p class="col-form-label">Perihal</p>
            </td>
            <td style="width: 3%;">
              <p class="col-form-label">:</p>
            </td>
            <td style="width: 60%;">
              <input type="text" name="perihal_eks" readonly id="perihal_eks" class="form-control form-control-sm" required>
            </td>
          </tr>
          <tr>
            <td style="width: 30%">
              <p class="col-form-label">Tujuan</p>
            </td>
            <td style="width: 3%;">
              <p class="col-form-label">:</p>
            </td>
            <td style="width: 60%;">
              <input type="text" name="tujuan" readonly id="tujuan" class="form-control form-control-sm" required>
            </td>
          </tr>
          <tr>
            <td style="width: 30%">
              <p class="col-form-label">Keterangan</p>
            </td>
            <td style="width: 3%;">
              <p class="col-form-label">:</p>
            </td>
            <td style="width: 60%;">
              <input type="text" name="keterangan" readonly id="keterangan" class="form-control form-control-sm" required>
            </td>
          </tr>
        </table>
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-light" data-dismiss="modal">TUTUP</button>
      </div>
    </div>
  </div>
</div>