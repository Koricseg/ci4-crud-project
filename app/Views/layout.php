<!DOCTYPE html>
<html>
<head>
    <title>Student System</title>

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary: #1b0d80;
            --accent: #f9ea20;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f6fb;
        }

        /* NAVBAR */
        .navbar {
            background: linear-gradient(90deg, var(--primary), #2a1aa8);
            padding: 16px 20px;
        }

        .navbar-brand {
            color: var(--accent) !important;
            font-weight: 700;
            letter-spacing: 1px;
            font-size: 18px;
        }

        /* HEADINGS */
        h2, h3 {
            font-weight: 700;
            color: var(--primary);
        }

        /* CARDS (glass effect) */
        .card {
            border: none;
            border-radius: 18px;
            background: #ffffffcc;
            backdrop-filter: blur(6px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.08);
            transition: 0.2s ease;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 18px 40px rgba(0,0,0,0.12);
        }

        /* INPUTS */
        input.form-control {
            border-radius: 10px;
            padding: 10px 12px;
        }

        input:focus {
            border-color: var(--primary) !important;
            box-shadow: 0 0 0 0.2rem rgba(27,13,128,0.15) !important;
        }

        /* ===== BUTTON SYSTEM ===== */

        .btn {
            border-radius: 10px;
            font-weight: 500;
            transition: 0.2s ease;
        }

        /* PRIMARY BUTTON (gradient + lift) */
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #3b2bd6);
            border: none;
            box-shadow: 0 6px 15px rgba(27,13,128,0.25);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(27,13,128,0.35);
        }

        /* ACCENT BUTTON */
        .btn-accent {
            background: linear-gradient(135deg, var(--accent), #ffe600);
            color: #000;
            font-weight: 600;
            border: none;
            box-shadow: 0 6px 15px rgba(249,234,20,0.35);
        }

        .btn-accent:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(249,234,20,0.5);
        }

        /* DANGER BUTTON */
        .btn-danger {
            border: none;
            box-shadow: 0 6px 15px rgba(220,53,69,0.25);
        }

        .btn-danger:hover {
            transform: translateY(-2px);
        }

        /* SECONDARY */
        .btn-secondary {
            border: none;
        }

        /* TABLE */
        thead {
            background: var(--primary);
            color: white;
        }

        tbody tr {
            transition: 0.2s;
        }

        tbody tr:hover {
            background: #f0f2ff;
        }

        /* BADGE */
        .badge-year {
            background: var(--accent);
            color: #000;
            font-weight: 600;
            padding: 6px 10px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<nav class="navbar">
    <span class="navbar-brand">Student System</span>
</nav>

<div class="container mt-5">
    <?= $this->renderSection('content') ?>
</div>

</body>
</html>