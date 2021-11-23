<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"name :");
    fwrite($file, $username ."\n");
    fwrite($file,"Password :");
    fwrite($file, md5($password) ."\n");
    fclose($file);
    header("location: courses.html");
 ?>
