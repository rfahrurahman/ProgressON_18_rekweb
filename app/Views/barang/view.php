<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<h2 class="mt-3">View Product</h2>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <img src="<?= base_url('uploads/' . $barang->gambar); ?>" alt="image" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-6">
            <h3 class="text-success"><?= $barang->nama; ?></h3>
            <h4>Harga : <?= "Rp. " . number_format($barang->harga, 2, ',', '.'); ?></h4>
            <h4>Stok : <?= $barang->stok; ?></h4>
        </div>
    </div>
</div>
<?= $this->Endsection(); ?>