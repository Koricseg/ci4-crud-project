<?php
/**
 * @var array $product
 */
?>
<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="card p-4">
    <h4>Edit Product</h4>

    <form method="post" action="/products/update/<?= $product['id'] ?>">

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="<?= $product['name'] ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" value="<?= $product['price'] ?>" class="form-control">
        </div>

        <!-- 🔥 NEW -->
        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" name="quantity" value="<?= $product['quantity'] ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"><?= $product['description'] ?></textarea>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="/products" class="btn btn-secondary">Cancel</a>

    </form>
</div>

<?= $this->endSection() ?>