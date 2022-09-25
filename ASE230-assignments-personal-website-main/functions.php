<?php

//calculate the age in years from birthdate and
function calculateAge($birthdate) {

    $formattedBirthdate = DateTime::createFromFormat('m-d-Y', $birthdate);
    $present = DateTime::createFromFormat('m-d-Y', date('m-d-Y'));
    $interval = $formattedBirthdate->diff($present);
    print $interval->y . ' years old';
}

//calculate years, months and days in past person was born
function calculateBirthDifference($birthdate) {

    $formattedBirthdate = DateTime::createFromFormat('m-d-Y', $birthdate);
    $present = DateTime::createFromFormat('m-d-Y', date('m-d-Y'));
    $interval = $formattedBirthdate->diff($present);
    print "born " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ago";

}