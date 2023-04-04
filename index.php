<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body style="padding: 100px;">
    <h1>Data Buku</h1>
    <a href="add.php" class="btn btn-primary">Add Book</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Publisher</th>
        <th scope="col">Price</th>
        <th scope="col">Published At</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = 'SELECT * FROM books';
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)) {

        ?>
        <tr>
            <th scope="row"><?php echo $row['id']?></th>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['author']?></td>
            <td><?php echo $row['publisher']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['published_at']?></td>
            <td><a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-warning">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
        </tr>    
        <?php } ?>
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
