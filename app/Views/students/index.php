<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

<h1>Students</h1>

<a href="<?= site_url('students/create') ?>">Add Student</a>

<!-- SEARCH BAR -->
<form method="get" action="<?= site_url('students') ?>" style="margin: 10px 0;">
    <input 
        type="text" 
        name="search" 
        value="<?= esc($search ?? '') ?>" 
        placeholder="Search by name, email, course..."
    >
    <button type="submit">Search</button>
    <?php if (!empty($search)): ?>
        <a href="<?= site_url('students') ?>">Clear</a>
    <?php endif; ?>
</form>

<table border="1" cellpadding="10">
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
        <td><?= esc((string)$s['id']) ?></td>
        <td><?= esc((string)$s['name']) ?></td>
        <td><?= esc((string)$s['email']) ?></td>
        <td><?= esc((string)$s['course']) ?></td>
        <td><?= esc((string)$s['year']) ?></td>
        <td>
            <a href="<?= site_url('students/edit/' . $s['id']) ?>">Edit</a> | 
            <a href="<?= site_url('students/delete/' . $s['id']) ?>" onclick="return confirm('Delete this record?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="6">No results found</td>
    </tr>
<?php endif; ?>
</tbody>
</table>

</body>
</html>