<!DOCTYPE html>
<html>
<head><title>Add Student</title></head>
<body>

<h1>Add Student</h1>

<form action="/students/store" method="post">
    <?= csrf_field() ?>

    Name:   <input type="text" name="name"><br>
    Email:  <input type="email" name="email"><br>
    Course: <input type="text" name="course"><br>
    Year:   <input type="number" name="year"><br>

    <button type="submit">Save</button>
</form>

<a href="/students">Back</a>

</body>
</html>