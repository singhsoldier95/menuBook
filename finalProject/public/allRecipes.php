<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once('header.html'); ?>
    <form name="listofrecipe" method="POST">
        <div id="recipeslist">
            <?php
            require_once('../connection/connection.php');
            $sql = "select * from recipe";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $rid = $row['id_recipe'];
                $rname = $row['name_recipe'];
            ?>
                <div id="recipe">
                    <div id="recipe_name">
                        <p> <?php echo $rname; ?> </p>
                        <button type="submit" formaction="<?php echo "specificRecipe.php?idr=$rid"; ?>">Full Recipe</buton>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </form>
    <div>
        <a href="allIngredients.php">
            <h2>Create your own recipe</h2>
        </a>
    </div>
</body>

</html>