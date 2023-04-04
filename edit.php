<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body style="padding: 100px;">
    <div class="container"></div>
        <h1>Edit Book</h1>
        <form action="edit-process.php" method="post" enctype="multipart/form-data">
        <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM books WHERE id = $id";
            $result = mysqli_query($conn , $sql);
            while($row = mysqli_fetch_array($result)) {
        ?>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="title" value="<?php echo $row['title'];?>">
            </div>
            <div class="form-group">
                <label for="judul">Author</label>
                <input type="text" class="form-control" id="judul" name="author" value="<?php echo $row['author'];?>">
            </div>
            <div class="form-group">
                <label for="judul">Publisher</label>
                <input type="text" class="form-control" id="judul" name="publisher" value="<?php echo $row['publisher'];?>">
            </div>
            <div class="form-group">
                <label for="judul">Price</label>
                <input type="number" min="1000" class="form-control" id="judul" name="price" value="<?php echo $row['price'];?>">
            </div>
            <div class="form-group">
                <label for="judul">Published At</label>
                <input type="date" class="form-control" id="judul" name="published_at" value="<?php echo $row['published_at'];?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <button class="btn btn-success" type="submit">Submit</button>
            <?php } ?>
        </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>