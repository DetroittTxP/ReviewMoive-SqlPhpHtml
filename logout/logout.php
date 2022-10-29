<?php 
    include "../Connectphp/connect.php";

    session_start();
    $l = session_get_cookie_params();
    setcookie(session_name(),'',time()-42000,
    $l["path"],
    $l["domain"],
    $l["secure"],
    $l["httponly"]);

    session_destroy();

    header("location:../ReviewMovie/index.html");
    ?>