<?php
require "functions.php";
require "data.php";

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/detail.css" />
    <title><?= "Assignment 3 - Cory DuCharme"; ?></title>
</head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="mb-2">
                    <img class="w-100" src="https://bootdey.com/img/Content/avatar/<?= groupInfo[$_GET['index']]['picture'] ?>" alt="">
                </div>
                <div class="container text-center mb-5">
                    <h1><?= groupInfo[$_GET['index']]['name'] ?></h1>
                    <p class="designation"><?= groupInfo[$_GET['index']]['designation'] ?></p>
                    <p><?= groupInfo[$_GET['index']]['gender'] ?></p>
                    <p><?=  calculateAge(groupInfo[$_GET['index']]['birthdate']) ?></p>
                    <p><?=  calculateBirthDifference(groupInfo[$_GET['index']]['birthdate']) ?></p>
                </div>
                <div class="mb-2">
                    <ul class="list-unstyled">
                        <li class="media">
                            <span class="w-25 text-black font-weight-normal"><?php echo('Dream Profession:') ?></span>
                            <label class="media-body"><?= groupInfo[$_GET['index']]['dreamProfession'] ?></label>
                        </li>
                        <li class="media">
                            <span class="w-25 text-black font-weight-normal"><?php echo('Dream Company:') ?></span>
                            <label class="media-body"><?= groupInfo[$_GET['index']]['dreamCompany'] ?></label>
                        </li>
                        <li class="media">
                            <span class="w-25 text-black font-weight-normal"><?php echo 'Email:' ?></span>
                            <label class="media-body"><?= groupInfo[$_GET['index']]['email'] ?></label>
                        </li>
                    </ul>
                    <div class="container text-center">
                        <a href="/index.php"><?php echo 'Back to Index' ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>