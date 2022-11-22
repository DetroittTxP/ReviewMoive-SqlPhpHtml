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

    <style>
        @media (min-width:501px){
            body{
            text-align: center;
            background-color: beige;
            font-family: 'Kanit', sans-serif;
            font-weight: bolder;
            
        }

        body > .topic{
            width: 100%;
            height: 150px;
            background-color: lightgray;
            font-size: 50px;
        }

        #move{
        position: relative;
        bottom: 30px;
        right: 20px;
        }

        .topic #move{
            float: left;
            text-align: center;
        }

        .TYPE{
            color: black;
            position: relative;
            top: 20px;
            padding: 10px;
            font-size: 20px;
            display: inline-block;
            justify-content: center;
            word-spacing: 20px;
        }

        .TYPE ul.MENUTYPE{
            list-style: none;
        }

        .TYPE ul.MENUTYPE li{
            float: left;
            margin-right: 45px;
        }

        .TYPE ul.MENUTYPE li a{
            text-decoration: none;
            color: #333;
            border-bottom: 2px solid transparent;
            padding-bottom: 10px;
            transition: all 0.3s ease;
        }

        .TYPE ul.MENUTYPE li a:hover{
            border-bottom: 2px solid black;
            padding-bottom: 0;
        }

        .topic ul.logo{
            list-style: none;
            float: right;
        }

        .topic ul.logo li{
            float: left;
            margin-right: 15px;
            padding-bottom: 20px;
        }

        .img{
        display: block;
        padding: 30px;
            
            
        }

        .information{
            display: inline-flex;
        }

        .flex{
            display: flex;
            justify-content: center;
            margin: auto;
            padding-right: 270px;
        }


        .flex2{
            display: flex;
            justify-content: center;
            margin: auto;
            padding-right: 70px;
        }

        .logo{
            font-size: 45px;
        }

        body::-webkit-scrollbar {
            width: 1em;
        }
        
        body::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }
        
        body::-webkit-scrollbar-thumb {
            background-color: rgb(88, 21, 0);
            outline: 1px solid rgb(10, 1, 1);
        }

        h2{
            color: red;
        }

        input[title]{
            background-color: #A1C3D8;
        }
             }

        
        @media (max-width:500px){
            body{
                background: red;
                display:block;
            }
        }     
    </style>
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

    <h2 title="text1" style="text-align: center; ">หนังมาเเรงช่วงนี้!!!!</h2>

    <div class="flex">
        <?php
             $sql= "SELECT movie.movie_name,movie.movie_type, ROUND(AVG(movie_score),2)
              FROM movie JOIN comment WHERE movie.movie_id = comment.movie_id AND movie_score >=7
              GROUP BY movie_name
             ORDER BY AVG(movie_score) DESC";
             $objQuery = mysqli_query($conn,$sql);
        ?>
        <?php
             while($row = mysqli_fetch_array($objQuery)){
        ?>

    
        <div style="padding:30px"; text-align:center;>
            <img src="../img/ALLIMGS/<?=$row["movie_name"]?>.jpg" height="350px" ><br>
            ชื่อเรื่อง: <?=$row["movie_name"]?><br>
            ประเภท: <?=$row["movie_type"]?><br>
            คะเเนน: <?=$row["ROUND(AVG(movie_score),2)"]?><br>
            <a href="#" onclick="return plslogin()">
                  <img src="img/review-button-png-hi.png" width = "70px">
            </a>
        </div>
        <?php } ?> 
    </div>

    <hr style="border: 1px solid black;">

    <h2 title="text1" style="text-align: center; ">หนังดีอีกมากมาย</h2>

    <div class="flex2">
        <?php 
            $sql ="SELECT movie.movie_name,movie.movie_type, 
            ROUND(AVG(movie_score),2) FROM movie JOIN comment 
            WHERE movie.movie_id = comment.movie_id AND movie_score >=5
            GROUP BY movie_name;";
            $objQuery = mysqli_query($conn,$sql);
        ?>
        <?php
            while($row = mysqli_fetch_array($objQuery)){
        ?>
            <div style="padding:30px"; text-align:center;>
            <img src="../img/ALLIMGS/<?=$row["movie_name"]?>.jpg" height="350px" ><br>
            ชื่อเรื่อง: <?=$row["movie_name"]?><br>
            ประเภท: <?=$row["movie_type"]?><br>
            คะเเนน: <?=$row["ROUND(AVG(movie_score),2)"]?><br>
            <a href="#" onclick="return plslogin()">
                <img src="img/review-button-png-hi.png" width = "70px">
            </a>
        </div>

        <?php } ?>
    </div>
  
    
</body>
</html>