<!DOCTYPE html>
<html>
<head>
    <title>Upload Produk</title>
</head>
<body>
    <form action="docs.php" class="formproduk" method="POST">
        Id Produk <br>
        <input type="text" name="id_product" id="id_product" class="id_produk"><br>
        Foto Produk <br>
        <input type="file" name="foto_product" id="foto_product" class="foto_produk"><br>
        Nama Produk <br>
        <input type="text" name="nama_product" id="nama_product" class="nama_produk"><br>
        Brand <br>
        <input type="text" name="brand" id="brand" class="brand"><br>
        Model <br>
        <input type="text" name="model" id="model" class="model"><br>
        Tahun Rilis <br>
        <input type="text" name="release_year" id="release_year" class="release_year"><br>
        OS <br>
        <input type="text" name="os" id="os" class="os"><br>
        Price <br>
        <input type="text" name="price" id="price" class="price"><br>
        <input type="submit" value="Kirim" name="submit">
    </form>
    <?php 
        include "db.php";
        if(isset($_POST['submit'])){
            $id_product = $_POST['id_product'];
            $foto_product = $_FILES['foto_product']['name'];
            $tmp = $_FILES['foto_product']['tmp_name'];
            $nama_product = $_POST['nama_product'];
            $brand = $_POST['brand'];
            $model = $_POST['model'];
            $release_year = $_POST['release_year'];
            $os = $_POST['os'];
            $price = $_POST['price'];

            $timestamp = time();
            $newname = $timestamp.$foto_product;

            $sql = "INSERT INTO product VALUES ('$id_product','$newname','$nama_product','$brand','$model','$release_year','$os','$price')";
            mysqli_query($conn, $sql);
            $location = "assets/".$newname;
            move_uploaded_file($tmp, $location);

        }
    ?>
</body>
</html>