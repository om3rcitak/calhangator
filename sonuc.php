<?php
/**
 * Created by WebStorm.
 * User: www.om3r.kim
 * Date: 9.1.2016
 * Time: 10:30
 */
     $adiniz = htmlspecialchars(trim($_POST["adiniz"]));
     $adi = htmlspecialchars(trim($_POST["adi"]));
     $soyadi = htmlspecialchars(trim($_POST["soyadi"]));
     $meslek = htmlspecialchars(trim($_POST["meslek"]));

if(isset($_POST["submit"])  && !empty($adiniz) && !empty($adi) && !empty($soyadi) && !empty($meslek)) {

    require "Calhangator.php";

    $chat = new Calhangator();

    $chat->profile_picture = "http://mostfamousperson.net/Ronaldo.png"; /* Resim alanı daha sonra ayarlanacak */
    $chat->he_firstname = "$adi";
    $chat->he_lastname = "$soyadi";
    $chat->me_name = "$adiniz";
    $chat->me_job = "$meslek";

    $chat->render();
    } else {
    header('Location: index.html');
    exit;

    }
