<?php
    $pdo = new PDO("mysql:host=localhost;dbname=movierating;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    session_start();

    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ? AND password = ?");
    $stmt->bindParam(1,$_POST["username"]);
    $stmt->bindParam(2,$_POST["password"]);
    $stmt->execute();
    $row=$stmt->fetch();

    if(!empty($row)){
        session_regenerate_id();

        $_SESSION["username"] = $row["username"];

        header("location:../ReviewMovie/indexLoged.php");
        
    }
    else{
        echo "ชื่อหรือรหัสผ่านของคุณไม่ถูกต้อง โปรดลองอีกครั้ง<br>";
        echo "<a href='weblogin.php'>เข้าสู่ระบบอีกครั้ง</a>";
    }

?>

