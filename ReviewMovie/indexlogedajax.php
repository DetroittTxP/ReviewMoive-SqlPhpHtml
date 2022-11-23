<link rel="stylesheet" href="css/loged.css">
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
    <div style="padding:30px"; text-align:center; >
            <img src="../img/ALLIMGS/<?=$row["movie_id"]?>.jpg" height="350px" ><br>
                ชื่อเรื่อง: <?=$row["movie_name"]?><br>
                ประเภท: <?=$row["movie_type"]?><br>
                <a href="../reviewpage/reviewpage.php?movie_id=<?=$row["movie_id"]?>">
                    <button>รีวิวคลิก!!</button>
                </a>
        </div>

    <?php }?>