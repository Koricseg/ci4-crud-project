<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Student Dashboard</h2>
    <a href="<?= site_url('students/create') ?>" class="btn btn-accent">
        + Add Student
    </a>
</div>

<!-- SEARCH -->
<div class="card p-3 mb-4">
    <form class="d-flex gap-2" method="get">
        <input type="text"
               name="search"
               class="form-control"
               value="<?= esc($search ?? '') ?>"
               placeholder="Search student...">

        <button class="btn btn-primary">Search</button>

        <?php if (!empty($search)): ?>
            <a href="<?= site_url('students') ?>" class="btn btn-secondary">Clear</a>
        <?php endif; ?>
    </form>
</div>

<!-- TABLE -->
<div class="card p-3">
    <table class="table align-middle table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Year</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        <?php if (!empty($students)): ?>
            <?php foreach ($students as $s): ?>
                <tr>
                    <td><?= esc($s['id']) ?></td>
                    <td><strong><?= esc($s['name']) ?></strong></td>
                    <td><?= esc($s['email']) ?></td>
                    <td><?= esc($s['course']) ?></td>
                    <td><span class="badge badge-year"><?= esc($s['year']) ?></span></td>
                    <td class="d-flex gap-2">
                        <a href="<?= site_url('students/edit/' . $s['id']) ?>"
                           class="btn btn-sm btn-primary">
                            Edit
                        </a>

                        <a href="<?= site_url('students/delete/' . $s['id']) ?>"
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('Delete this record?')">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6" class="text-center text-muted">
                    No students found
                </td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>