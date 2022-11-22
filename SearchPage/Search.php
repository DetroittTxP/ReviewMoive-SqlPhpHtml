<!DOCTYPE html>
<html lang="en">
<?php include "../Connectphp/connect.php"?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Searchpage</title>
    <link rel="stylesheet" href="Style.css">
    <script>
        let send=()=>{
            request = new XMLHttpRequest();
            request.onreadystatechange = showResult;

            let keyword = document.getElementById("keyword").value;
            let url = "process.php?keyword=" + keyword;
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

        let plslogin1=()=>{
        if(window.confirm("กรุณาเข้าสู่ระบบก่อนถึงจะทำการรีวิวได้ ต้องการเข้าสู่ระบบคลิก OK")){
            window.location.href='../login/weblogin.php';
        }
    }
    </script>
    
</head>

<body >
    <div class="topic">
        <div class="move">
            <a href="../ReviewMovie/index.php">
                <img src="../img/LogoWeb.png" alt="" height="215px" width="100%">
            </a>
            
        </div>
      
       
        <ul class="logo">
                <li>
                    <a href="../register/webregister.php"><img src="../img/register2.png" alt="" width="150" height="50"></a>
                </li>
                <li>
                    <a href="../login/weblogin.php"><img src="../img/Login2.png" alt="" width="100" height="50"></a>
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