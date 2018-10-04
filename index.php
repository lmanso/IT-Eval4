<?php
    include('./templates/temp-header.php');
    
    if (isset($_POST['Adisable'])){
    } else {
        include ('./templates/temp-about.php');
    }

    if (isset($_POST['Rdisable'])){
    } else {
        include ('./templates/temp-reading.php');
    }

    if (isset($_POST['Cdisable'])){
    } else {
        include ('./templates/temp-contact.php');
    }
    include('./templates/temp-footer.php');
    ?>