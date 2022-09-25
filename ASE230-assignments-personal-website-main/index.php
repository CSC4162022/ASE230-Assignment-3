<?php
require "functions.php";
require "data.php";


?>

<!doctype html>
<html lang="en">
<head>
    <!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/index.css" />
    <title><?= 'ASE 230 - class of Fall 2022' ?></title>
</head>
<body>


    <div class="container text-center">
        <h1><?= 'This is ASE 230 - class of Fall 2022' ?></h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3><?= 'Team : ' ?><span><?= 'Cory DuCharme' ?></span></h3>
                    <p><?= 'This is the landing page for my team consisting of me.' ?></p>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row">

    <?php

    function printStudentInfo() {

        for($i=0;$i<count(groupInfo);$i++){
        ?>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

                    <div class="advisor_thumb">
                        <a href="detail.php"><img src="https://bootdey.com/img/Content/avatar/<?=groupInfo[$i]['picture']?>" alt=""></a>
                        <div class="social-info">
                            <a href="detail.php"><i class="fa fa-facebook"></i></a>
                            <a href="detail.php"><i class="fa fa-twitter"></i></a>
                            <a href="detail.php"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="single_advisor_details_info">
                        <h6><?= groupInfo[$i]['name'] ?></h6>
                        <h6 class="designation"><?=groupInfo[$i]['designation']?></h6>
                        <h6>Year: <?=groupInfo[$i]['year']?></h6>
                        <p><?=  groupInfo[$i]['gender'] ?></p>
                        <p><?=  calculateAge(groupInfo[$i]['birthdate']) ?></p>
                        <p><?=  calculateBirthDifference(groupInfo[$i]['birthdate']) ?></p>
                        <a href="detail.php?index=<?=$i?>">Detail</a>
                    </div>
                </div>
             </div>
            <?php
        }
    }
    printStudentInfo();
    ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

