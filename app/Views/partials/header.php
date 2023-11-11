<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Produk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <style>
        body {
            padding-top: 56px; 
        }
        .navbar {
            background-color: #808080; 
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #ffffff;
        }
        .navbar-dark .navbar-toggler-icon {
            background-color: #ffffff; 
        }
    </style>
    </head>
    <body>
    <?php
        helper('form');
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="#">Dashboard Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/admin">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cuti">Cuti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">Logout <i class="fas fa-user"></i></a>
            </li>
        </ul>
    </div>
</nav>
<br>


        