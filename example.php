<?php
/**
 * Created by PhpStorm.
 * User: om3rcitak
 * Date: 7.1.2016
 * Time: 22:03
 */

require "Calhangator.php";

$chat = new Calhangator();

$chat->profile_picture = "http://mostfamousperson.net/BillGates.png";
$chat->he_firstname = "Bill";
$chat->he_lastname = "Gates";
$chat->me_name = "Ömer Çıtak";
$chat->me_job = "kodcu";

$chat->render();