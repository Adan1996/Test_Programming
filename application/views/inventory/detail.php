<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

</div>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Your Store
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $detail['product_name']; ?></h5>
            <h5 class="card-text text-muted"><?= $detail['price']; ?></h5>
            <p class="card-text"><?= $detail['description']; ?></p>
            <a href="<?= base_url('inventory'); ?>" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>

</div>
<!-- End of Main Content -->