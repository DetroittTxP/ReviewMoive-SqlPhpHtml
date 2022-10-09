<!DOCTYPE html>
<html lang="en">
<?php include "../Connectphp/connect.php"?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Searchpage</title>
    <link rel="stylesheet" href="Style.css">
</head>

<?php 
    $action =$pdo->prepare("SELECT * FROM movie WHERE movie_type='Action' " );
    $action->execute();
?>
<body >
    
    <div class="topic">
        <div class="move">
            <img src="../img/LogoWeb.png" alt="" height="215px" width="100%">
        </div>
        <div class="TYPE">
            <a href="../ReviewMovie/index.html" style="color: black;">กลับไปหน้าหลัก</a>
            
        </div>
       
        <ul class="logo">
                <li>
                    <a href="../register/register.html"><img src="../img/register.png" alt="" width="150" height="50"></a>
                </li>
                <li>
                    <a href="../login/login.html"><img src="../img/login.png" alt="" width="100" height="40"></a>
                </li>
        </ul>
    </div>
    <br><br>
   
    <form>
        พิมชื่อหนังที่ต้องการจะค้นหาได้เลย: <input type="text" name="keyword">
        <input type="submit" value="ค้นหา">
    </form>

    <?php
        $sea =$pdo->prepare("SELECT * FROM movie WHERE movie_name LIKE ?");

        if(!empty($_GET))
            $value = '%'.$_GET["keyword"]. '%';

        $sea->bindParam(1,$value);
        $sea->execute();      
    ?>
    <br>
    <?php while($row = $sea->fetch()){ ?>

        <div class="img">
            <img src="../img/ALLIMGS/<?=$row["movie_id"]?>.jpg" height="350px">
        </div>
  
        <div class="information">
            ชื่อเรื่อง: <?=$row["movie_name"]?><br>
            ประเภท: <?=$row["movie_type"]?><br>
            คะเเนน: <?=$row["movie_score"]?><br>
            <br>
        </div>
        <br>

    <?php } ?>
    
</body>
</html>