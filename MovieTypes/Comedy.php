<!DOCTYPE html>
<html lang="en">
<?php include "../Connectphp/connect.php"?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ActionPage</title>
    <link rel="stylesheet" href="StyleMovieType/Style.css">
</head>

<?php 
    $action =$pdo->prepare("SELECT * FROM movie WHERE movie_type='Comedy' " );
    $action->execute();
?>
<body >
    
    <div class="topic">
        <div class="move">
             <a href="../ReviewMovie/index.php">
                  <img src="../img/LogoWeb.png" alt="" height="215px" width="100%">
             </a>
        </div>
        <div class="TYPE">
            <a href="../ReviewMovie/index.php" style="color: black;">กลับไปหน้าหลัก</a>
            
        </div>
       
        <ul class="logo">
                <li>
                    <a href="../register/register.html"><img src="../img/register.png" alt="" width="150" height="50"></a>
                </li>
                <li>
                    <a href="../login/login.php"><img src="../img/login.png" alt="" width="100" height="40"></a>
                </li>
        </ul>
    </div>
  
    <?php while($row = $action->fetch()){ ?>

    <div class="img">
        <img src="ComedyIMGS/<?=$row["movie_name"]?>.jpg" height="350px">
    </div>
    <div class="information">
        ชื่อเรื่อง: <?=$row["movie_name"]?><br>
        ประเภท: <?=$row["movie_type"]?><br>
        คะเเนน: <?=$row["movie_score"]?><br>
        <br>
        
    </div>
    <?php } ?>
    
</body>
</html>