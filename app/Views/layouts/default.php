<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $this -> renderSection("title") ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        body {
            margin-left: 50px; /* Set the margin to 3 inches */
            margin-right: 20px;
        }

        table {
            width: 200%;
            border-collapse: collapse;
            align: center;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .button-container {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .button-container a {
            display: inline-block;
            padding: 10px 20px;
            margin-left: 10px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }

        .button-container a.btn-danger {
            background-color: #007bff;
        }

        .button-container a.btn-primary {
            background-color: #007bff;
        }
    </style>

</head>
<body>

<?php if (session()->has("message")): ?>

    <p><?= session("message") ?></p>

<?php endif; ?>

<div class="button-container">
    <a href="<?= url_to('logout') ?>" class="btn btn-danger">Logout</a>
    <a href="#" class="btn btn-primary">Reservations</a> <!-- Button without functionality -->
</div>

<?= $this ->renderSection("content") ?>


</body>
</html>