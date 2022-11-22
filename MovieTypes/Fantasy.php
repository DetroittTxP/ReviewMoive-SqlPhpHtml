<!DOCTYPE html>
<html lang="en">
<?php include "../Connectphp/connect.php"?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ActionPage</title>
    <link rel="stylesheet" href="Style.css">
</head>

<?php 
    $action =$pdo->prepare("SELECT * FROM movie WHERE movie_type='Fantasy' " );
    $action->execute();
?>
<body >
    
    <div class="topic">
        <div class="move">
             <a href="../ReviewMovie/index.php">
                    <img src="../img/LogoWeb.png" alt="" height="215px" width="100%">
             </a>
        </div>
       
        <ul class="logo">
                <li>
                    <a href="../register/webregister.php"><img src="../img/Register2.png" alt="" width="150" height="50"></a>
                </li>
                <li>
                    <a href="../login/weblogin.php"><img src="../img/Login2.png" alt="" width="100" height="50"></a>
                </li>
        </ul>
    </div>
  
    <?php while($row = $action->fetch()){ ?>

    <div class="img">
        <img src="FantasyIMGS/<?=$row["movie_name"]?>.jpg" height="350px">
    </div>
    <div class="information">
        ชื่อเรื่อง: <?=$row["movie_name"]?><br>
        ประเภท: <?=$row["movie_type"]?><br>
        
        <br>
        
    </div>
    <?php } ?>
    
</body>
</html>