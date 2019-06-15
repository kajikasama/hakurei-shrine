<?php
$data = file_get_contents('data/touhou.json');
$touhou = json_decode($data, true);

$touhou = $touhou["touhou"];


// var_dump($touhou[2]["nama"]);
?>
<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Hakurei Shrine</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img width="125px" src="img/hakurei-logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">All Menu</a>
                        <a class="nav-item nav-link" href="#">Game</a>
                        <a class="nav-item nav-link" href="#">Karakter</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>All Menu</h1>
                </div>
            </div>
            <div class="row">
                <?php foreach ($touhou as $baris) : ?>
                <div class="col-lg-3">
                    <div class="card lg-4">
                        <img src="data/<?= $baris['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $baris['nama']; ?>
                            </h5>
                            <p class="card-text">
                                <?= $baris['description']; ?>
                            </p>
                            <p class="card-text">
                                <?php
                            if (empty($baris['genre'])) {
                              echo "Occupation : " . $baris['occupation'];
                            } else {
                              echo "Genre : " . $baris['genre'];
                            }
                            ?>
                            </p>
                            <p class="card-text">
                                <?php 
                            if (empty($baris['developer'])) {
                              echo "Race : " . $baris['race'];
                            } else {
                              echo "Developer : " . $baris['developer'];
                            }
                            ?>
                            </p>
                            <p class="card-text">
                                <?php
                            if (empty($baris['publisher'])) {
                              echo "Abilities : " . $baris['abilities'];
                            } else {
                              echo "Publisher : " . $baris['publisher'];
                            }
                            ?>
                            </p>
                            <h5 class="card-title">
                                <?php

                            if (empty($baris['release'])) {
                              echo "Age : " . $baris['age'];
                            } else {
                              echo "Release : " . $baris['release'];
                            }
                            ?>
                            </h5>
                            <a href="#" class="btn btn-primary">Go To Detail</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script2.js"></script>
    </body>

</html>
