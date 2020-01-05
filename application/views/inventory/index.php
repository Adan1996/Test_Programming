<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

</div>


<div class="container-fluid">
    <?= $this->session->flashdata('flash'); ?>
    <!-- Button trigger modal -->
    <div class="row">
        <div class="col mb-3">
            <a href="<?= base_url('inventory/add'); ?>" class="btn btn-primary">
                <i class="fas fa-fw fa-plus mr-3"></i>Add Product
            </a>
        </div>
    </div>

    <!-- Table -->
    <table class="table table-hover" id="myTable">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Product Name</th>
                <th scope="col">SKU</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($stock as $s) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $s['product_name']; ?></td>
                    <td><?= $s['sku']; ?></td>
                    <td>
                        <a href="<?= base_url('inventory/detail/') . $s['id']; ?>" class="badge badge-info">detail</a>
                        <a href="<?= base_url('inventory/edit/') . $s['id']; ?>" class="badge badge-success">edit</a>
                        <a href="<?= base_url('inventory/delete/') . $s['id']; ?>" class="badge badge-danger" onclick="return alert('are you sure ?');">delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</div>
<!-- End of Main Content -->