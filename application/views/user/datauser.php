<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data User</h1>
      <div class="section-header-breadcrumb">
        <a href="<?= site_url('datauser/tambah') ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-user-plus"></i> Tambah Data User
        </a>
      </div>
    </div>
    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Data User</h4>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-striped table-md" id="table">
            <thead>
              <tr>
                <th class="text-center">
                  No
                </th>
                <th>Nama User</th>
                <th>Username</th>
                <th>Status Level</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($row->result() as $key => $data) { ?>
                <tr>
                  <td style="width:3%;"><?= $no++ ?>.</td>
                  <td style="width:30%;"><?= $data->nama_user ?></td>
                  <td><?= $data->username ?></td>
                  <td><?= $data->status_level ?></td>
                  <td class="text-center" width="130px" style="width:30%;">
                    <form action="<?= site_url('datauser/hapus') ?>" method="post">
                      <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                      &nbsp;
                      <a href="<?= site_url('datauser/detail/' . $data->kode_user) ?>" class="btn btn-info btn-xs">
                        <i class="fa fa-eye"></i> Detail
                      </a>
                      &nbsp;
                      <a href="<?= site_url('datauser/edit/' . $data->kode_user) ?>" class="btn btn-success btn-xs">
                        <!--btn btn-default btn-xs -->
                        <i class="fa fa-edit"></i> Edit
                      </a>
                      &nbsp;
                      <input type="hidden" name="kode_user" value="<?= $data->kode_user ?>">
                      <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger btn-xs">
                        <i class="fa fa-trash"></i> Hapus
                      </button>
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