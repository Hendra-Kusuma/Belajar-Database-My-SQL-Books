<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $sql = "DELETE FROM books WHERE id = $id";
    $result = mysqli_query($conn , $sql);

    if($result) {
        header('Location: index.php');    
    } else {
        echo "Eroor" . $sql . "<br>" . mysqli_error($conn);
    }
    
?>