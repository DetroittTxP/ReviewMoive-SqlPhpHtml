<?php include "../Connectphp/connect.php" ?>

<?php
    $stmt = $pdo->prepare("INSERT INTO comment VALUES (?,?,?,?) ");
    $stmt->bindParam(1,$_POST["movie_id"]);
    $stmt->bindParam(2,$_POST["username"]);
    $stmt->bindParam(3,$_POST["moive_comment"]);
    $stmt->bindParam(4,$_POST["movie_score"]);


    $stmt->execute();

?>

<html>
    <body>
        <script>
            window.onload=()=>{
            if(window.confirm("ได้รับการรีวิวของท่านเเล้ว คลิก OK เพื่อกลับไปหน้าหลัก")){
                window.location.href='../ReviewMovie/indexLoged.php';
            }
        }
        </script>
    </body>
</html>