<?php

$conn = mysqli_connect('localhost','root','','amar');

if(!$conn){echo 'ERROR IN CONNECTION :'.mysqli_connect_error();}
else{ echo 'CONNECTED</br>';}

?>