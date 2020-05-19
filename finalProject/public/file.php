<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>FILE UPLOAD</title>
</head>
<body>
    <div class="container my-5">
        <form action="file.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="upload" >
        <input type="text" name="detail" >
        <button type="submit" name="submit">Upload image</button>
    </div>
    <div class="container">
        <?php require 'done.php'?>
        <span><?php echo $ERROR['submit']?></span>
    </div>
    </form>
</body>
</html>