<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Surat Masuk</h1>
      <div class="section-header-breadcrumb">
        <a href="<?= site_url('suratmasuk/tambah') ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-user-plus"></i> Buat Surat Masuk
        </a>
      </div>
    </div>
    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Data Surat Masuk</h4>
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
                <th class="text-center">Asal Surat</th>
                <th class="text-center">Dari</th>
                <th class="text-center">Perihal</th>
                <th class="text-center">Tujuan</th>
                <th class="text-center">File Surat</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($row->result() as $key => $data) { ?>
                <tr>
                  <td style="width:3%;"><?= $no++ ?>.</td>
                  <td class="text-center" width="130px" style="width:12%;">
                    <?= $data->nomor_sm == null ? "Tidak ada" : $data->nomor_sm ?>
                  </td>
                  <td style="width:7%;"><?= $data->tanggal_sm ?></td>
                  <td width="110px" style="width:7%;">
                    <?php
                    if ($data->asal_suratmasuk == "Internal") { ?>
                      <div class="badge badge-info">Internal</div>
                    <?php } else { ?>
                      <div class="badge badge-primary">Eksternal</div>
                    <?php } ?>
                  </td>
                  <td width="110px" style="width:10%;"><?= $data->dari ?></td>
                  <td width="130px" style="width:20%;"><?= $data->perihal_eks ?></td>
                  <td width="130px" style="width:10%;"><?= $data->tujuan ?></td>
                  <td class="text-center" width="130px" style="width:5%;">
                    <?php
                    if ($data->nama_file_eks == null) { ?>
                      <div class="badge badge-warning">Tidak Ada</div>
                    <?php } else { ?>
                      <div>
                        <a href="<?= base_url(); ?>uploads/file_surat_masuk/<?= $this->input->post('nama_file_eks') ?? $data->nama_file_eks ?>" class="badge badge-success" id="nama_file_eks" method="post" target="_blank">
                          Ada
                        </a>
                      </div>
                    <?php } ?>
                  </td>
                  <td class="text-center" width="130px" style="width:18%;">
                    <form action="<?= site_url('suratmasuk/batalkan') ?>" method="post">
                      <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                      &nbsp;
                      <a href="<?= site_url('suratmasuk/edit/' . $data->kode_sm) ?>" class="btn btn-success">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                      &nbsp;
                      <input type="hidden" name="kode_sm" value="<?= $data->kode_sm ?>">
                      <button onclick="return confirm('Apakah Anda Yakin Ingin Membatalkan ?')" class="btn btn-danger btn-xs">
                        <i class="fa fa-minus-circle"></i> Batalkan
                      </button>
                      &nbsp;
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