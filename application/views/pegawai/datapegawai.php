<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Pegawai</h1>
      <div class="section-header-breadcrumb">
        <a href="<?= site_url('datapegawai/tambah') ?>" class="btn btn-primary btn-flat">
          <i class="fa fa-user-plus"></i> Tambah Data Pegawai
        </a>
      </div>
    </div>
    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Data Pegawai</h4>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-striped table-md" id="table">
            <thead>
              <tr>
                <th class="text-center">
                  No
                </th>
                <th>Nama Pegawai</th>
                <th>NIP</th>
                <th>NIDN</th>
                <th>NIK</th>
                <th>NO HP</th>

                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($row->result() as $key => $data) { ?>
                <tr>
                  <td style="width:3%;"><?= $no++ ?>.</td>
                  <td style="width:25%;"><?= $data->nama_pegawai ?></td>
                  <td style="width:10%;"><?= $data->nip ?></td>
                  <td style="width:8%;"><?= $data->nidn ?></td>
                  <td style="width:15%;"><?= $data->nik ?></td>
                  <td style="width:15%;"><?= $data->no_hp ?></td>
                  <!-- <td type="hidden" style="width:0%;"><?= $data->email ?></td> -->

                  <td class="text-center" width="30px" style="width:25%;">
                    <form action="<?= site_url('datapegawai/hapus') ?>" method="post" id="hapus" data-hapus="<?= $data->kode_pegawai ?>">
                      &nbsp;
                      <a href="<?= site_url('datapegawai/edit/' . $data->kode_pegawai) ?>" class="btn btn-success btn-xs">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                      &nbsp;
                      <input type="hidden" name="kode_pegawai" value="<?= $data->kode_pegawai ?>">
                      <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
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