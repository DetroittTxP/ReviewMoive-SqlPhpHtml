<!DOCTYPE html>
<html lang="en">
<?php include "../Connectphp/connect.php"?>
<?php  session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MainPage</title>
    <link rel="stylesheet" href="style.css">
    <script src="script/logedjs.js"></script>
    
</head>
<body>
    
<div class="topic">
        <div class="move">
            <img src="../img/LogoWeb.png" alt="" height="215px" width="100%">
        </div>       

        <div class="TYPE">
            <ul class="MENUTYPE">
                <li><a href="../MovieTypes/Action.php" style="color: black;">Action</a></li>
                <li><a href="../MovieTypes/Horror.php" style="color: black;">Horror</a></li>
                <li><a href="../MovieTypes/Comedy.php" style="color: black;">Comedy</a></li>
                <li><a href="../MovieTypes/SciFi.php" style="color: black;">Sci-Fi</a></li>
                <li><a href="../MovieTypes/Fantasy.php" style="color: black;">Fantasy</a></li>
                <li><a href="../MovieTypes/Romatic.php" style="color: black;">Romantic</a><br><br></li>
            </ul>
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

    <div class="flex">
        <?php
            $main = $pdo->prepare("SELECT * FROM movie");
            $main->execute();
        ?>
        <?php
             while($row=$main->fetch()){
        ?>
        <div style="padding:30px"; text-align:center;>
            <img src="../img/ALLIMGS/<?=$row["movie_id"]?>.jpg" height="350px" ><br>
            ชื่อเรื่อง: <?=$row["movie_name"]?><br>
            ประเภท: <?=$row["movie_type"]?><br>
            <a href="#">
                <button>รีวิวคลิก!!</button>
            </a>
        </div>
        <?php } ?>             
    </div>

    
  
   
</body>
</html>