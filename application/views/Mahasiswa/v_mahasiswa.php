<h1 align="center"> Data Mahasiswa</h1>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header d-flex">
                <div class="toolbar ml-auto">
                    <a href="<?= base_url(); ?>Mahasiswa/tambah_mahasiswa" class="btn btn-primary">Tambah</a>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-succes alert-dismissible fade show" role="alert"> Data Mahasiswa
                <strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nik</th>
                            <th>Nama Mahasiswa</th>
                            <th>Gender</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Ipk</th>
                            <th style="height:30% width:20%">Aksi</th>
                        </tr>
                    </thead>
                    <?php $i = 1;
                    foreach ($mahasiswa->result_array() as $k) : ?>
                        <tbody>
                            <tr>
                                <td><?= $i++;  ?></td>
                                <td><?= $k['nim']; ?></td>
                                <td><?= $k['nama']; ?></td>
                                <td><?= $k['gender']; ?></td>
                                <td><?= $k['tmpt_lahir']; ?></td>
                                <td><?= $k['tgl_lahir']; ?></td>
                                <td><?= $k['ipk']; ?></td>
                                <td style="width: 10%">
                                    <a href="<?= base_url() ?>Admin/hapus/<?= $k['id_karyawan']; ?>" class="btn btn btn-danger" OnClick="return confirm('Apakah Data Akan Dihapus?');">Hapus</a>
                                    <a href="<?= base_url() ?>Admin/v_ubahkaryawan/<?= $k['id_karyawan']; ?>" class="btn btn btn-warning">Ubah</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>