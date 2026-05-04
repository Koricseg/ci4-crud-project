<!DOCTYPE html>
<html>
<head>
    <title>Product System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fa;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .navbar {
            background: linear-gradient(90deg, #4e73df, #224abe);
        }
        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }
        .btn-primary {
            background-color: #4e73df;
            border: none;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg px-4">
    <span class="navbar-brand">CI4 Product System</span>
</nav>

<div class="container mt-5">
    <?= $this->renderSection('content') ?>
</div>

</body>
</html>