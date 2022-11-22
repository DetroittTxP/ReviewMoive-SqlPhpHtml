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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&display=swap" rel="stylesheet">
    <script>
        let confirmlogout = () =>{
            let ans = confirm("ต้องการออกจากระบบใช้หรือไม่");
            if(ans == true){
                document.location = "index.php"
            }
        } 
    </script>
    
</head>
<body>

    
<div class="topic">
        <div id="move">
            <a href="../ReviewMovie/index.php">
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
            <a href="../SearchPage/searchloged.php">ค้นหาหนังที่ต้องการได้ที่นี่</a>
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
            $main = $pdo->prepare("SELECT * FROM movie WHERE movie_id <=10");
            $main->execute();
        ?>
        <?php
             while($row=$main->fetch()){
        ?>
        <div style="padding:30px"; text-align:center; id="result">
            <img src="../img/ALLIMGS/<?=$row["movie_id"]?>.jpg" height="350px" ><br>
                ชื่อเรื่อง: <?=$row["movie_name"]?><br>
                ประเภท: <?=$row["movie_type"]?><br>
                <a href="../reviewpage/reviewpage.php?movie_id=<?=$row["movie_id"]?>">
                    <img src="img/review-button-png-hi.png" width = "70px">
                </a>
        </div>
                
        <?php } ?>             
</div>
    <br>
<div class="flex">    
        
        <?php
            $sec = $pdo->prepare("SELECT * FROM movie WHERE movie_id > 10 AND movie_id <=20");
            $sec->execute();
        ?>
        
        <?php
                while($row=$sec->fetch()){
            ?>
            <div style="padding:30px"; text-align:center; >
                <img src="../img/ALLIMGS/<?=$row["movie_id"]?>.jpg" height="350px" ><br>
                    ชื่อเรื่อง: <?=$row["movie_name"]?><br>
                    ประเภท: <?=$row["movie_type"]?><br>
                    <a href="../reviewpage/reviewpage.php?movie_id=<?=$row["movie_id"]?>">
                        <img src="img/review-button-png-hi.png" width = "70px">
                    </a>
            </div>
                    
            <?php } ?>             
   

</div>
    <br>

<div class="flex">    
        
        <?php
            $sec = $pdo->prepare("SELECT * FROM movie WHERE movie_id > 20");
            $sec->execute();
        ?>
        
        <?php
                while($row=$sec->fetch()){
            ?>
            <div style="padding:30px"; text-align:center; >
                <img src="../img/ALLIMGS/<?=$row["movie_id"]?>.jpg" height="350px" ><br>
                    ชื่อเรื่อง: <?=$row["movie_name"]?><br>
                    ประเภท: <?=$row["movie_type"]?><br>
                    <a href="../reviewpage/reviewpage.php?movie_id=<?=$row["movie_id"]?>">
                        <img src="img/review-button-png-hi.png" width = "70px">
                    </a>
            </div>
     
        <?php } ?>      
        
        <div id="result"> </div>
</div>

</body>
</html>