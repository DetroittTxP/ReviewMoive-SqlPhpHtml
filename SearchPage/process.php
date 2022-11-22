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

    $sql = "SELECT movie.movie_name,movie.movie_type, ROUND(AVG(movie_score),2) 
    FROM movie JOIN comment 
    WHERE movie_name LIKE '%mi%';
    ";
    $objQuery = mysqli_query($conn,$sql);
?>

<?php while($row = mysqli_fetch_array($objQuery)){?>
         <div class="img">
            <img src="../img/ALLIMGS/<?=$row["movie_name"]?>.jpg" height="350px">
        </div>
  
        <div class="information">
            ชื่อเรื่อง: <?=$row["movie_name"]?><br>
            ประเภท: <?=$row["movie_type"]?><br>
            คะเเนน: <?=$row["ROUND(AVG(movie_score),2)"]?><br>
            <a href="#" onclick="return plslogin1()">
                <img src="img/review-button-png-hi.png" width = "70px">
            </a>
            <br>
        </div>

    <?php }?>