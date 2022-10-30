<!DOCTYPE html>
<html lang="en">    
<?php include "../Connectphp/connect.php"  ?>   
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MainPage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&display=swap" rel="stylesheet">
    <script src="script/loginfirst.js"></script>
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
            <a href="../SearchPage/Search.php">ค้นหาหนังที่ต้องการได้เลยคลิก!</a>  
        </div>
       
       
        <ul class="logo">
                <li>
                    <a href="../register/register.html"><img src="../img/register.png" alt="" width="150" height="50"></a>
                </li>
                <li>
                    <a href="../login/login.php"><img src="../img/login.png" alt="" width="100" height="50"></a>
                </li>
        </ul>
    </div>

    <h2 style="text-align: center; ">หนังมาเเรงช่วงนี้!!!!</h2>

    <div class="flex">
        <?php
            $main = $pdo->prepare("SELECT * FROM movie ORDER BY movie_score DESC LIMIT 0,5;");
            $main->execute();
        ?>
        <?php
             while($row=$main->fetch()){
        ?>
        <div style="padding:30px"; text-align:center;>
            <img src="../img/ALLIMGS/<?=$row["movie_id"]?>.jpg" height="350px" ><br>
            ชื่อเรื่อง: <?=$row["movie_name"]?><br>
            ประเภท: <?=$row["movie_type"]?><br>
            คะเเนน: <?=$row["movie_score"]?><br>
            <a href="#" onclick="return plslogin()">
                <button>ต้องการรีวิวคลิก!</button>
            </a>
        </div>
        <?php } ?> 
    </div>
    <hr style="border: 1px solid black;">

    <h2 style="text-align: center; ">หนังดีอีกมากมาย</h2>

    <div class="flex2">
        <?php 
            $main2 = $pdo->prepare("SELECT * FROM movie WHERE movie_id <= 9");
            $main2->execute();
        ?>
        <?php
            while($row=$main2->fetch()){
        ?>
            <div style="padding:30px"; text-align:center;>
            <img src="../img/ALLIMGS/<?=$row["movie_id"]?>.jpg" height="350px" ><br>
            ชื่อเรื่อง: <?=$row["movie_name"]?><br>
            ประเภท: <?=$row["movie_type"]?><br>
            <a href="#" onclick="return plslogin()">
                <button>ต้องการรีวิวคลิก!</button>
            </a>
        </div>


        <?php } ?>
    </div>
    
  
    
</body>
</html>