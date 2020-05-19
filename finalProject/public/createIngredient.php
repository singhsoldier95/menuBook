<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header> <?php include 'header.html'; ?> </header>
    <center>Create your own ingredient</center>
    <form name="createingredient" method="POST" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" id="name" name="iname"><br>
        <label for="description">Description</label>
        <input type="text" id="description" name="idescription"><br>
        <label for="">upload image</label>
        <input type="file" name="upload">
        <Button type="submit" name="add" value="added">ADD</Button>
        <?php
        if (isset($_POST['add'])) {
            require_once('../connection/connection.php');
            $file = $_FILES['upload'];
            // print_r($file);
            $fileName = $_FILES['upload']['name'];
            // echo $fileName."<br>";
            $fileLocation = $_FILES['upload']['tmp_name'];
            // echo $fileLocation;
            $fileDestination = 'uploads/' . $fileName;
            move_uploaded_file($fileLocation, $fileDestination);

            $name = $des = '';
            $name = mysqli_real_escape_string($conn, $_POST['iname']);
            $des = mysqli_real_escape_string($conn, $_POST['idescription']);
            print_r($_POST);

            //adding data to sql
            $sql = "insert into ingredient (name_ing, desc_ing, image_ing) values ('$name','$des','$fileName')";
            $query = mysqli_query($conn, $sql);
            if (!$query) {
                echo "ERROR : " . mysqli_error($conn);
            } else {
                echo "inserted values into DB";
            }
        }

        ?>

    </form>
    <footer><?php include 'footer.html'; ?></footer>
</body>

</html>