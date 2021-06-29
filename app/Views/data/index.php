<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Data Pendukung</h4>
                <p class="card-category">Menu Data</p>
            </div>
            <div class="card-body">
                <a href="<?= site_url('Data/import') ?>" class="btn btn-primary">Tambah Data</a>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="text-primary">
                            <tr>
                                <th>No</th>
                                <th>Nama Data Pendukung</th>
                                <th>Jumlah Desa</th>
                                <th>Kecamatan</th>
                                <th>Nilai Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data->getResult() as $key => $value) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $value->nama ?></td>
                                    <td><?= $value->jumlah_desa ?></td>
                                    <td><?= $value->kecamatan ?></td>
                                    <td><?= $value->nilai ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>