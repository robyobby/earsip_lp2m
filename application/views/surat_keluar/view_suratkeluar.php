<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Surat Keluar</h1>
      <div class="section-header-breadcrumb">
        <a href="<?= site_url('suratkeluar/tambah') ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-user-plus"></i> Buat Surat Keluar
        </a>
      </div>
    </div>
    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Data Surat Keluar</h4>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-striped table-md" id="table">
            <thead>
              <tr>
                <th class="text-center">
                  NO
                </th>
                <th class="text-center">No Surat</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Jenis</th>
                <th class="text-center">Tujuan</th>
                <th class="text-center">Perihal</th>
                <th class="text-center">File Surat</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($row->result() as $key => $data) { ?>
                <tr>
                  <td style="width:3%;"><?= $no++ ?>.</td>
                  <td class="text-center" width="130px" style="width:17%;">
                    <?= $data->no_surat == null ? "Tidak ada" : $data->no_surat ?>
                  </td>
                  <td style="width:7%;"><?= indo_date($data->tanggal_sk) ?></td>
                  <td width="110px" style="width:7%;">
                    <?php
                    if ($data->jenis_sk == "Internal") { ?>
                      <div class="badge badge-info">Internal</div>
                    <?php } else { ?>
                      <div class="badge badge-primary">Eksternal</div>
                    <?php } ?>
                  </td>
                  <td width="110px" style="width:13%;"><?= $data->nama_tujuan ?></td>
                  <td width="130px" style="width:25%;"><?= $data->perihal ?></td>
                  <td class="text-center" width="130px" style="width:5%;">
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
                  <td class="text-center" width="130px" style="width:18%;">
                    <form action="<?= site_url('Suratkeluar/batalkan') ?>" method="post">
                      <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                      &nbsp;
                      <a href="<?= site_url('Suratkeluar/edit/' . $data->kode_sk) ?>" class="btn btn-success">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                      &nbsp;
                      <input type="hidden" name="kode_sk" value="<?= $data->kode_sk ?>">
                      <button onclick="return confirm('Apakah Anda Yakin Ingin Membatalkan ?')" class="btn btn-danger btn-xs">
                        <i class="fa fa-minus-circle"></i> Batalkan
                      </button>
                      &nbsp;
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
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
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