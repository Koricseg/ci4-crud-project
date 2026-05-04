<?php if (isset($student) && $student): ?>
<form action="/students/update/<?= $student['id'] ?>" method="post">
    <?= csrf_field() ?>

    Name: <input type="text" name="name" value="<?= $student['name'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $student['email'] ?>"><br>
    Course: <input type="text" name="course" value="<?= $student['course'] ?>"><br>
    Year: <input type="number" name="year" value="<?= $student['year'] ?>"><br>

    <button type="submit">Update</button>
</form>
<?php else: ?>
    <h3 style="color:red;">ERROR: No student data received</h3>
<?php endif; ?>