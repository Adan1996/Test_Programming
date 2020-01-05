<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

</div>
<div class="container-fluid">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="input your product name here" value="<?= set_value('product_name'); ?>">
                <small class="form-text text-danger"><?= form_error('product_name'); ?></small>
            </div>
            <div class="form-group">
                <label for="sku">SKU</label>
                <input type="text" class="form-control" id="sku" name="sku" placeholder="input your product code here" value="<?= set_value('sku'); ?>">
                <small class="form-text text-danger"><?= form_error('sku'); ?></small>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="input your product price here" value="<?= set_value('price'); ?>">
                <small class="form-text text-danger"><?= form_error('price'); ?></small>
            </div>
            <div class="form-group">
                <label for="qty">Qty</label>
                <input type="text" class="form-control" id="qty" name="qty" placeholder="input Qty of product here" value="<?= set_value('qty'); ?>">
                <small class="form-text text-danger"><?= form_error('qty'); ?></small>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description" placeholder="description of product" value="<?= set_value('description'); ?>"></textarea>
                <small class="form-text text-danger"><?= form_error('description'); ?></small>
            </div>
            <div class="form-group">
                <label for="supplier">Supplier Name</label>
                <input type="text" class="form-control" id="supplier" name="supplier" placeholder="input your supplier name here" value="<?= set_value('supplier'); ?>">
                <small class="form-text text-danger"><?= form_error('supplier'); ?></small>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>

</div>
<!-- End of Main Content -->