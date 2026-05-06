<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php if (isset($student) && $student): ?>

<div class="card p-4 mx-auto" style="max-width:600px;">
    <h3>Edit Student</h3>

    <form action="/students/update/<?= $student['id'] ?>" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input class="form-control" type="text"
                   name="name"
                   value="<?= esc($student['name']) ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control" type="email"
                   name="email"
                   value="<?= esc($student['email']) ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Course</label>
            <input class="form-control" type="text"
                   name="course"
                   value="<?= esc($student['course']) ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Year</label>
            <input class="form-control" type="number"
                   name="year"
                   value="<?= esc($student['year']) ?>">
        </div>

        <button class="btn btn-primary w-100">
            Update Student
        </button>
    </form>
</div>

<?php else: ?>
    <div class="alert alert-danger">Student not found</div>
<?php endif; ?>

<?= $this->endSection() ?>