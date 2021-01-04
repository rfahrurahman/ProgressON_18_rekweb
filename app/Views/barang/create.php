<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<?php
$nama = [
    'name' => 'nama',
    'id' => 'nama',
    'value' => null,
    'class' => 'form-control',
];
$harga = [
    'name' => 'harga',
    'id' => 'harga',
    'value' => null,
    'class' => 'form-control',
    'type' => 'numer',
    'min' => 0,
];
$stok = [
    'name' => 'stok',
    'id' => 'stok',
    'value' => null,
    'class' => 'form-control',
    'type' => 'number',
    'min' => 0,
];
$gambar = [
    'name' => 'gambar',
    'id' => 'gambar',
    'value' => null,
    'class' => 'form-control',
];
$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Submit',
    'class' => 'btn btn-success',
    'type' => 'submit',
];
?>
<h2 class="mt-3">Tambah Produk</h2>
<?= form_open_multipart('Barang/create'); ?>
<div class="mt-3 form-group">
    <?= form_label("Nama Produk", "nama"); ?>
    <?= form_input($nama); ?>
</div>
<div class="mt-3 form-group">
    <?= form_label("Harga", "harga"); ?>
    <?= form_input($harga); ?>
</div>
<div class="mt-3 form-group">
    <?= form_label("Stok", "stok"); ?>
    <?= form_input($stok); ?>
</div>
<div class="mt-3 form-group">
    <?= form_label("Gambar", "gambar"); ?>
    <?= form_upload($gambar); ?>
</div>
<div class="mt-3 text-end">
    <?= form_submit($submit); ?>
</div>
<?= $this->Endsection(); ?>