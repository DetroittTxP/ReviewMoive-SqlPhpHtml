<!DOCTYPE html>
<html lang="en">
<?php include "../Connectphp/connect.php"?>
<?php  session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SearchLoged</title>
    <link rel="stylesheet" href="search.css">
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


        let send=()=>{
            request = new XMLHttpRequest();
            request.onreadystatechange = showResult;

            let keyword = document.getElementById("keyword").value;
            let url = "processloged.php?keyword=" + keyword;
            request.open("GET",url,true);
            request.send(null);
        }

        
        let showResult = () =>{
            if(request.readyState == 4){
                if(request.status == 200){
                    document.getElementById("result").innerHTML = request.responseText;
                }
            }
        }

    </script>
</head>

<body >
<div class="topic">
        <div class="move">
            <a href="../ReviewMovie/indexLoged.php">
                <img src="../img/LogoWeb.png" alt="" height="215px" width="100%">
            </a>   
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
    <br><br>

     <div class="FORM">
            พิมชื่อหนังที่ต้องการจะค้นหาได้เลย: <br>
            <input type="text" id="keyword" onkeyup="send()">
     </div>

     <div class="img" id="result">  </div>
     <div class="information" id="result"></div>
</body>
</html>