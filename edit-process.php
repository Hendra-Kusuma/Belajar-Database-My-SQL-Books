<?php
    include 'koneksi.php';
    extract($_POST);

    $sql = "UPDATE books set title = '$title', author = '$author', publisher = '$publisher', price = '$price', published_at = '$published_at' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header('Location: index.php');    
    } else {
        echo "Eroor" . $sql . "<br>" . mysqli_error($conn);
    }
    
    ?>

?>  