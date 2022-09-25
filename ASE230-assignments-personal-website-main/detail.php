<?php
require "functions.php";
require "data.php";



?>
<html lang="en">
<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<body>
<link rel="stylesheet" href="assets/css/detail.css" />
<title><?= "ASE 230 - Cory DuCharme"; ?></title>
<div class="container text-center mb-5">
    <h1><?= groupInfo[$_GET['index']]['name'] ?></h1>
    <p class="designation"><?= groupInfo[$_GET['index']]['designation'] ?></p>
    <p><?= groupInfo[$_GET['index']]['gender'] ?></p>
    <p><?=  calculateAge(groupInfo[$_GET['index']]['birthdate']) ?></p>
    <p><?=  calculateBirthDifference(groupInfo[$_GET['index']]['birthdate']) ?></p>
    <a href="/index.php">back to index</a>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-6">
            <div class="mb-2">
                <img class="w-100" src="https://bootdey.com/img/Content/avatar/<?= groupInfo[$_GET['index']]['picture'] ?>" alt="">
            </div>
            <div class="mb-2 d-flex">
                <h4 class="font-weight-normal"><?= groupInfo[$_GET['index']]['name'] ?></h4>
                <div class="social d-flex ml-auto">
                    <p class="pr-2 font-weight-normal">Follow on:</p>
                    <a href="#" class="text-muted mr-1">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-muted mr-1">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-muted mr-1">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-muted">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
            <div class="mb-2">
                <ul class="list-unstyled">
                    <li class="media">
                        <span class="w-25 text-black font-weight-normal">Dream profession:</span>
                        <label class="media-body">Server-side developer</label>
                    </li>
                    <li class="media">
                        <span class="w-25 text-black font-weight-normal">Dream company: </span>
                        <label class="media-body">Google</label>
                    </li>
                    <li class="media">
                        <span class="w-25 text-black font-weight-normal">Email: </span>
                        <label class="media-body">support@technol.com</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>