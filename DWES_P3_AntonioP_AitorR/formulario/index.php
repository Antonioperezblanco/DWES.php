<?php
        session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    var_dump($_SESSION);
    if($_SESSION["origin"] != "login"){
        header("Location: ./login.php");
        exit();
    } elseif($_SESSION["origin"]!= "signup"){
        header("Location: ./login.php");
        exit();
    }else{
        var_dump($_SESSION);
    }

include_once("../views/header.php");
?>

<?php
    include_once("../views/footer.php");
?>
</body>
</html>