<?php
$id_ing = $_GET['idi'];
require_once('../connection/connection.php');
$sql = "select *  from ingredient where id_ing=$id_ing";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div id="ingredient">
        <font face="Arial black" color="#eccecd" size="8px">
            <p id="name"><?php echo $row['name_ing']; ?>
            </p>
        </font>
        <p id="desc"><?php echo $row['desc_ing']; ?>
        </p>
        <form method="POST">
            <button formaction="allIngredients.php">Show all ingredient</button>
        </form>
    </div>
</body>

</html>