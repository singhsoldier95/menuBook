<?php
$ERROR = array(
    'submit' => ''
);
if (!isset($_POST['add'])) {
    $ERROR['submit'] = "Upload image button not clicked";
} else {

    $file = $_FILES['upload'];
    // print_r($file);
    $fileName = $_FILES['upload']['name'];
    // echo $fileName."<br>";
    $fileLocation = $_FILES['upload']['tmp_name'];
    // echo $fileLocation;
    $fileDestination = 'uploads/' . $fileName;
    move_uploaded_file($fileLocation, $fileDestination);

    require 'connection.php';
    $sql = "INSERT INTO ingredients (image) VALUES ('$fileName');";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        echo "ERROR : " . mysqli_error($conn);
    } else {
        echo "INSERTED";
    }

    $sql = "SELECT * FROM media";
    $query = mysqli_query($conn, $sql);
    $fetch = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach ($fetch as $item) {
        echo "<img src = 'uploads/" . $item['image'] . "'>  ";
    }



    // $ext = explode('.',$fileName);
    // foreach($ext as $item)
    // {
    //     echo $item."<br>";
    //     echo end($ext)."<br>";

    // }
}






while ($row = mysqli_fetch_assoc($result)) {
    print_r($row);
?>
    <div id="ingredient">
        <p id="name"><?php echo $row['name_ing']; ?>
        </p>
        <!-- <?php echo "<img src='uploads/" . $row['image_ing'] . "'>  "; ?> -->
        <button formaction=" <?php echo "specificIngredient.php?idi=" . $row['id_ing']; ?>">Show details</button>

    </div>
<?php

}
