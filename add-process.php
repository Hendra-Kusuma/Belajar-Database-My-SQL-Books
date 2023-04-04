<?php
extract($_POST);
include 'koneksi.php'; 

$sql = "INSERT INTO books (title, author, publisher, price, published_at) VALUES ('$title', '$author', '$publisher', '$price','$published_at')";
$result = mysqli_query($conn, $sql);

if($result) {
    header('Location: index.php');    
} else {
    echo "Eroor" . $sql . "<br>" . mysqli_error($conn);
}

?>