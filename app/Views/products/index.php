<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php 
/** @var array<array<string, mixed>> $products */
/** @var \CodeIgniter\Pager\Pager $pager */ 
?>

<div class="card p-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Product List</h4>
        <a href="/products/create" class="btn btn-primary">+ Add Product</a>
    </div>

    <!-- 🔍 SEARCH -->
    <form method="get" action="/products" class="mb-3">
        <input 
            type="text" 
            name="search" 
            value="<?= esc($search ?? '') ?>" 
            class="form-control" 
            placeholder="🔍 Search product..."
        >
    </form>

    <table class="table table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th> <!-- NEW -->
                <th>Status</th>   <!-- BONUS -->
                <th width="200">Actions</th>
            </tr>
        </thead>

        <tbody>
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $p): ?>
                <tr>
                    <td><?= esc((string)$p['name']) ?></td>
                    <td>₱<?= esc((string)$p['price']) ?></td>

                    <!-- QUANTITY -->
                    <td><?= esc((string)($p['quantity'] ?? 0)) ?></td>

                    <!-- STOCK STATUS -->
                    <td>
                        <?php if (($p['quantity'] ?? 0) <= 0): ?>
                            <span class="badge bg-danger">Out of Stock</span>
                        <?php elseif (($p['quantity'] ?? 0) <= 5): ?>
                            <span class="badge bg-warning text-dark">Low Stock</span>
                        <?php else: ?>
                            <span class="badge bg-success">In Stock</span>
                        <?php endif; ?>
                    </td>

                    <td>
                        <a href="/products/edit/<?= $p['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/products/delete/<?= $p['id'] ?>" class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this product?')">
                           Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">No data found</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

    <!-- PAGINATION -->
    <?php if (isset($pager) && $pager->getPageCount() > 1): ?>
        <div class="d-flex justify-content-center mt-3">
            <?= $pager->links('default', 'bootstrap_full') ?>
        </div>
    <?php endif; ?>

</div>

<?= $this->endSection() ?>