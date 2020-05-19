<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Ingredients</title>
</head>

<body>

    <header> <?php include 'header.html'; ?> </header>
    <form method="POST">
        <?php
        require_once('../connection/connection.php');
        /*$sql = "insert into ingredient (name_ing,desc_ing) values('choped onion','sukaa hai matlab dry hai')";
$res = mysqli_query($conn, $sql);
*/
        /*  $sql = "insert into recipe (name_recipe,desc_recipe) values('Chaap','swaad aye kati methi aye.....')";
    // $res = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn)) {
        echo "<center>Data Uploaded Successfully!</center>";
        $sql = "select id_recipe from recipe";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        $idr = $row['id_recipe'];
        $c = 3;
        while ($c != 0) {
            $sql = "insert into cook (id_recipe,id_ing,qty) values($idr,$c,'5 grams')";
            //$res = mysqli_query($conn, $sql);
            $c--;
        }
    } else {
        echo "Oye! data upload nhi hoya, Dubra try kar..... ";
    }
    mysqli_close($conn);*/

        $sql = "select *  from ingredient";
        $result = mysqli_query($conn, $sql);
        $fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($fetch as $item) {
            echo "NAME : " . $item['name_ing'] . "<br>";
            echo "DESCRIPTION : " . $item['desc_ing'] . "<br>";
            echo "<img src = 'uploads/" . $item['image_ing'] . "'>" . "<br>";
        }




        ?>
    </form>
    <a href="createIngredient.php">Click here to create your own ingredient</a>
    <footer><?php include 'footer.html'; ?></footer>
</body>

</html>