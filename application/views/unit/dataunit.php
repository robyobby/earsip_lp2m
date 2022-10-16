<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Unit Kerja</h1>
      <div class="section-header-breadcrumb">
        <a href="<?= site_url('dataunit/tambah') ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-user-plus"></i> Tambah Data Unit Kerja
        </a>
      </div>
    </div>
    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Data Unit Kerja</h4>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-striped table-md" id="table">
            <thead>
              <tr>
                <th class="text-center">
                  No
                </th>
                <th>Unit Kerja</th>
                <th>Singkatan</th>
                <!-- <th>Status</th> -->
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($row->result() as $key => $data) { ?>
                <tr>
                  <td style="width:3%;"><?= $no++ ?>.</td>
                  <td style="width:45%;"><?= $data->nama_unit ?></td>
                  <td><?= $data->singkatan ?></td>
                  <td class="text-center" width="130px" style="width:30%;">
                    <form action="<?= site_url('dataunit/hapus') ?>" method="post">
                      <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                      &nbsp;
                      <a href="<?= site_url('dataunit/edit/' . $data->kode_unit) ?>" class="btn btn-success btn-xs">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                      &nbsp;
                      <input type="hidden" name="kode_unit" value="<?= $data->kode_unit ?>">
                      <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger btn-xs">
                        <i class="fa fa-trash"></i> Hapus
                      </button>
                      &nbsp;
                      <a href="<?= site_url('dataunit/detail/' . $data->kode_unit) ?>" class="btn btn-info btn-xs">
                        <i class="fa fa-info"></i> Detail
                      </a>
                    </form>
                  </td>
                </tr>
              <?php
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>