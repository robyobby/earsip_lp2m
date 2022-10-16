<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Sub Unit Kerja</h1>
      <div class="section-header-breadcrumb">
        <a href="<?= site_url('datasubunit/tambah') ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-user-plus"></i> Tambah Data Sub Unit Kerja
        </a>
      </div>
    </div>
    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Data Sub Unit Kerja</h4>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-striped table-md" id="table">
            <thead>
              <tr>
                <th class="text-center">
                  No
                </th>
                <th>Sub Unit Kerja</th>
                <th>Unit Kerja</th>
                <th>Kode Sub Unit Kerja</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($row->result() as $key => $data) { ?>
                <tr>
                  <td style="width:3%;"><?= $no++ ?>.</td>
                  <td style="width:35%;"><?= $data->nama_subunit ?></td>
                  <td><?= $data->singkatan ?></td>
                  <td><?= $data->kode_surat_subunit ?></td>
                  <!-- <td><?= $data->status == 0 ? "Belum Aktif" : "Aktif" ?></td> -->
                  <td class="text-center" width="130px" style="width:30%;">
                    <form action="<?= site_url('datasubunit/hapus') ?>" method="post">
                      <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                      &nbsp;
                      <a href="<?= site_url('datasubunit/edit/' . $data->kode_subunit) ?>" class="btn btn-success">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                      &nbsp;
                      <input type="hidden" name="kode_subunit" value="<?= $data->kode_subunit ?>">
                      <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger btn-xs">
                        <i class="fa fa-trash"></i> Hapus
                      </button>
                      &nbsp;
                      <a href="" class="btn btn-info btn-xs" target="_blank">
                        <i class="fa fa-info"></i> Info
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