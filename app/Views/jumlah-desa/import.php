<?php
$csv = [
    'name' => 'csv',
    'id' => 'csv'
];

$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'submit',
    'class' => 'btn btn-primary',
    'type' => 'submit'
];
?>
<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Import Data Pendukung</h4>
                <p class="card-category">Menu Import Data</p>
            </div>
            <div class="card-body">
                <?= form_open_multipart('JumlahDesa/import') ?>
                <?= form_upload($csv) ?>
                <?= form_submit($submit) ?>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>