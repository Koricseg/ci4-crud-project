<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="card p-4">
    <h4>Add Product</h4>

    <form method="post" action="/products/store">

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" class="form-control" required>
        </div>

        <!-- 🔥 NEW -->
        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" name="quantity" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button class="btn btn-success">Save</button>
        <a href="/products" class="btn btn-secondary">Back</a>

    </form>
</div>

<?= $this->endSection() ?>