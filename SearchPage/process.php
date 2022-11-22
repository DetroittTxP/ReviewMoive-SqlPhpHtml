<link rel="stylesheet" href="Style.css">
<?php

    $keyword = $_GET["keyword"];
    $conn = mysqli_connect("localhost", "root", "");
    if ($conn) {
        mysqli_select_db($conn,"movierating");
        mysqli_query($conn,"SET NAMES utf8");
    } else {
        echo mysql_errno();
    }

    $sql = "SELECT * FROM movie WHERE movie_name LIKE '%$keyword%' ";
    $objQuery = mysqli_query($conn,$sql);
?>

<?php while($row = mysqli_fetch_array($objQuery)){?>
         <div class="img">
            <img src="../img/ALLIMGS/<?=$row["movie_id"]?>.jpg" height="350px">
        </div>
  
        <div class="information">
            ชื่อเรื่อง: <?=$row["movie_name"]?><br>
            ประเภท: <?=$row["movie_type"]?><br>
            คะเเนน: <?=$row["movie_score"]?><br>
            <a href="#" onclick="return plslogin1()">
                <img src="img/review-button-png-hi.png" width = "70px">
            </a>
            <br>
        </div>

    <?php }?>