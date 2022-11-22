<!DOCTYPE html>
<html lang="en">    
<?php
    $conn = mysqli_connect("localhost", "root", "");
    if ($conn) {
        mysqli_select_db($conn,"movierating");
        mysqli_query($conn,"SET NAMES utf8");
    } else {
        echo mysql_errno();
    }
?>   
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
        let plslogin=()=>{
        if(window.confirm("กรุณาเข้าสู่ระบบก่อนถึงจะทำการรีวิวได้ ต้องการเข้าสู่ระบบคลิก OK")){
            window.location.href='../login/weblogin.php';
        }
    }
    </script>
</head>

<body>
    
    <div class="topic">
        <div class="move">
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
            <a href="../SearchPage/Search.php">ค้นหาหนังที่ต้องการได้เลยคลิก!</a>  
        </div>
       
       
        <ul class="logo">
                <li>
                    <a href="../register/webregister.php"><img src="../img/Register2.png" alt="" width="170" height="50"></a>
                </li>
                <li>
                    <a href="../login/weblogin.php"><img src="../img/Login2.png" alt="" width="100" height="50"></a>
                </li>
        </ul>
    </div>

    <h2 style="text-align: center; ">หนังมาเเรงช่วงนี้!!!!</h2>

    <div class="flex">
        <?php
             $sql= "SELECT movie_name,movie_type,movie_score FROM movie ORDER BY movie_score DESC LIMIT 0,5;";
             $objQuery = mysqli_query($conn,$sql);
        ?>
        <?php
             while($row = mysqli_fetch_array($objQuery)){
        ?>
        <div style="padding:30px"; text-align:center;>
            <img src="../img/ALLIMGS/<?=$row["movie_name"]?>.jpg" height="350px" ><br>
            ชื่อเรื่อง: <?=$row["movie_name"]?><br>
            ประเภท: <?=$row["movie_type"]?><br>
            คะเเนน: <?=$row["movie_score"]?><br>
            <a href="#" onclick="return plslogin()">
                  <img src="img/review-button-png-hi.png" width = "70px">
            </a>
        </div>
        <?php } ?> 
    </div>
    <hr style="border: 1px solid black;">

    <h2 style="text-align: center; ">หนังดีอีกมากมาย</h2>

    <div class="flex2">
        <?php 
            $sql ="SELECT * FROM movie WHERE movie_id <= 8";
            $objQuery = mysqli_query($conn,$sql);
        ?>
        <?php
            while($row = mysqli_fetch_array($objQuery)){
        ?>
            <div style="padding:30px"; text-align:center;>
            <img src="../img/ALLIMGS/<?=$row["movie_name"]?>.jpg" height="350px" ><br>
            ชื่อเรื่อง: <?=$row["movie_name"]?><br>
            ประเภท: <?=$row["movie_type"]?><br>
            คะเเนน: <?=$row["movie_score"]?><br>
            <a href="#" onclick="return plslogin()">
                <img src="img/review-button-png-hi.png" width = "70px">
            </a>
        </div>

        <?php } ?>
    </div>
    
  
    
</body>
</html>