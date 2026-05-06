<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="card p-4 mx-auto" style="max-width:600px;">
    <h3>Add Student</h3>

    <form action="/students/store" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input class="form-control" type="text" name="name">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control" type="email" name="email">
        </div>

        <div class="mb-3">
            <label class="form-label">Course</label>
            <input class="form-control" type="text" name="course">
        </div>

        <div class="mb-3">
            <label class="form-label">Year</label>
            <input class="form-control" type="number" name="year">
        </div>

        <button class="btn btn-primary w-100">
            Save Student
        </button>
    </form>
</div>

<?= $this->endSection() ?>