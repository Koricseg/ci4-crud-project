<!DOCTYPE html>
<html>
<head><title>Students</title></head>
<body>

<h1>Students</h1>

<a href="/students/create">Add Student</a>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Year</th>
    <th>Actions</th>
</tr>

<?php if (isset($students) && is_array($students)): ?>
<?php foreach ($students as $s): ?>
<tr>
    <td><?= $s['id'] ?></td>
    <td><?= $s['name'] ?></td>
    <td><?= $s['email'] ?></td>
    <td><?= $s['course'] ?></td>
    <td><?= $s['year'] ?></td>
    <td>
        <a href="/students/edit/<?= $s['id'] ?>">Edit</a>
        <a href="/students/delete/<?= $s['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
    </td>
</tr>
<?php endforeach; ?>
<?php endif; ?>

</table>

</body>
</html>