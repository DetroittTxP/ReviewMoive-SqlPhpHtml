<!DOCTYPE html>
<html lang="en">
<?php include "../Connectphp/connect.php"?>
<?php  session_start(); ?>>   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MainPage</title>
    <link rel="stylesheet" href="css/loged.css">
    <script src="script/logedjs.js"></script>
    
</head>
<body>
    
    <div class="topic">
        <div class="move">
                <img src="../img/LogoWeb.png" alt="" height="215px" width="100%">
        </div>

        <div class="TYPE">
            <a href="../MovieTypes/Action.php" style="color: black;">Action</a>
            <a href="../MovieTypes/Horror.php" style="color: black;">Horror</a>
            <a href="../MovieTypes/Comedy.php" style="color: black;">Comedy</a>
            <a href="../MovieTypes/SciFi.php" style="color: black;">Sci-Fi</a>
            <a href="../MovieTypes/Fantasy.php" style="color: black;">Fantasy</a>
            <a href="../MovieTypes/Romatic.php" style="color: black;">Romantic</a><br><br>
            <a href="../SearchPage/Search.php">กดคลิกเพื่อค้นหาได้เลย!!!</a>
        </div>
       
       
        <ul class="logo">
                <li>
                    Welcome <?=$_SESSION["username"]?>
                </li>
                <li>
                    <a href="../logout/logout.php" onclick='confirmlogout()' >Logout</a>
                </li>
        </ul>
    </div>
  
    <div class="img">
        <img src="../img/poster.jfif" alt="" height="350px">
    </div>
    <div class="information">
        ชื่อหนัง?<br>
        วันที่เข้าฉาย?<br>
        Rateing?
    </div>
    <div class="img">
        <img src="../img/poster.jfif" alt="" height="350px">
    </div>
    <div class="information">
        ชื่อหนัง?<br>
        วันที่เข้าฉาย?<br>
        Rateing?
    </div>
    <div class="img">
        <img src="../img/poster.jfif" alt="" height="350px">
    </div>
    <div class="information">
        ชื่อหนัง?<br>
        วันที่เข้าฉาย?<br>
        Rateing?
    </div>
    <div class="img">
        <img src="../img/poster.jfif" alt="" height="350px">
    </div>
    <div class="information">
        ชื่อหนัง?<br>
        วันที่เข้าฉาย?<br>
        Rateing?
    </div>
    <div class="img">
        <img src="../img/poster.jfif" alt="" height="350px">
    </div>
    <div class="information">
        ชื่อหนัง?<br>
        วันที่เข้าฉาย?<br>
        Rateing?
    </div>
    <div class="img">
        <img src="../img/poster.jfif" alt="" height="350px">
    </div>
    <div class="information">
        ชื่อหนัง?<br>
        วันที่เข้าฉาย?<br>
        Rateing?
    </div>
</body>
</html>