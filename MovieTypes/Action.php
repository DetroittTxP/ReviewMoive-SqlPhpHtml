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
<script>
        let plslogin=()=>{
        if(window.confirm("กรุณาเข้าสู่ระบบก่อนถึงจะทำการรีวิวได้ ต้องการเข้าสู่ระบบคลิก OK")){
            window.location.href='../login/weblogin.php';
        }
    }
</script>

<?php 
    $action =$pdo->prepare("SELECT * FROM movie WHERE movie_type='Action' GROUP BY movie_name" );
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
        <img src="ActionIMGS/<?=$row["movie_name"]?>.jpg" height="350px">
    </div>
    <div class="information">
        ชื่อเรื่อง: <?=$row["movie_name"]?><br>
        ประเภท: <?=$row["movie_type"]?><br>
        <br>
        <a href="../reviewpage/reviewpage.php?movie_id=<?=$row["movie_id"]?>" onclick="return plslogin()">
             <img src="../ReviewMovie/img/review-button-png-hi.png" width = "70px">
        </a>
        
    </div>
    <?php } ?>
    
</body>
</html>