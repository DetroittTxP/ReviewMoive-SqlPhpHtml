<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
    <header>
        <img src="../img/LogoWeb.png" alt="" height="215px">
    </header>

    <form action="checklogin.php" method="post">
        <fieldset>
                    <legend>Login</legend><br>
                    <div class="text">
                        Username:
                        <input type="text" name="username"><br><br>
                        Password: 
                        <input type="password" name="password"><br>
                        <br>
                        <label>Please type the required numbers: 4786 </label><br>
                        <input type="text" placeholder="Please Enter Number" pattern="4786"><br><br>
                        
                        <div class="button">
                            <input type="submit" value="Login" width="30px" ><br><br>          
                            <div class="regis"><a href="../register/register.html">สมัครสมาชิก</a></div>
                        </div>
                        
                    </div> 
                </fieldset>
    </form>
   
    

   
    
</body>
</html>
