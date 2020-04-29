<?php
include("../../config.php");

if(isset($_POST['songId'])){
    $songId = $_POST['songId'];
    
    $query = mysqli_query($con, "SELECT * FROM songs WHERE id ='$songsId'");
    
    $resultArray = mysqli_fect_array($query);
    
    echo json_encode($resultArray);
}


?>