# Calhangator
hakan calhanoglu'nun kenan sofuoglu'na yaptığı tribi yapan program

### kullanımı

    <?php
    require "Calhangator.php";

    $chat = new Calhangator();

    $chat->profile_picture = "http://mostfamousperson.net/BillGates.png";
    $chat->he_firstname = "Bill";
    $chat->he_lastname = "Gates";
    $chat->me_name = "Ömer Çıtak";
    $chat->me_job = "kodcu";

    $chat->render();

### görünümü
![cat](http://omercitak.com/wp-content/uploads/calhangator.png)
