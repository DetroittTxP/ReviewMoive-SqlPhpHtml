<!DOCTYPE html>
<html lang="en">
<?php include "../Connectphp/connect.php"?>
<?php  session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReviewPage</title>
    <link rel="stylesheet" href="reviewpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <div class="topic">
            <div class="move">
                <a href="../ReviewMovie/indexLoged.php">
                     <img src="../img/LogoWeb.png" alt="" height="215px" width="100%">
                </a>
                
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
        <div class="img">
             <img src="../img/ALLIMGS/<?=$_GET["movie_id"]?>.jpg" height="350px" ><br>
        </div>

      

        <form action="reviewprocess.php" method="post">
            เขียนข้อความรีวิวของคุณลงไปได้เลย: 
            <br>
            <input type="hidden" name="movie_id" value="<?=$_GET["movie_id"]?>">
            <input type="hidden" name="username" value="<?=$_SESSION["username"]?>">
            <textarea name="moive_comment" rows="5" cols="40"></textarea><br class="flex">
            คะเเนน 0-10
            <input type="text" name="movie_score" style="width: 30px;" pattern="^[0-9]{1,2}$" maxlength="2"  >
            <br>
            <br>
            <input type="submit" value="ส่งรีวิว">

            <div>
        <h2>รีวิวจากคนอื่นๆ</h2>
    
            <?php
                $id = $_GET["movie_id"];
                $sec = $pdo->prepare("SELECT username,movie_comment FROM comment WHERE movie_id = $id ");
                $sec->execute();
            ?>

            <?php
                while($row=$sec->fetch()){
                ?>
                <div style="padding:5px"; text-align:center; >
                        ชื่อผู้ใช้: <?=$row["username"]?>
                       - <?=$row["movie_comment"]?>
                </div>
        
            <?php } ?>      
        </div>
        </form>

       
       
    </div>
    
    
   

    




</body>
</html>