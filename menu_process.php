<?php
  require 'config.php';

  if($_GET['act']== 'addMenu'){
    $id = $_POST['id'];
    $menu = $_POST['menu'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    //query
    $queryadd =  mysqli_query($conn, "INSERT INTO menu VALUES('$id' , '$menu' , '$harga' , '$deskripsi')");

    if ($queryadd) {
        # code redicet setelah insert ke index
        header("location:menu.php");
    }
    else{
        echo "Failed". mysqli_error($conn);
    }

} elseif($_GET['act']=='updateMenu'){
    $id = $_POST['id'];
    $menu = $_POST['menu'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    //query update
    $queryupdate = mysqli_query($conn, "UPDATE menu SET menu='$menu' , harga='$harga' , deskripsi='$deskripsi' WHERE id='$id' ");

    if ($queryupdate) {
        # credirect ke page index
        header("location:menu.php");
    }
    else{
        echo "Failed". mysqli_error($conn);
    }
} elseif ($_GET['act'] == 'deleteMenu'){
    $id = $_GET['id'];

    //query hapus
    $querydelete = mysqli_query($conn, "DELETE FROM menu WHERE id = '$id'");

    if ($querydelete) {
        # redirect ke index.php
        header("location:menu.php");
    }
    else{
        echo "Failed". mysqli_error($conn);
    }

    mysqli_close($conn);
}

 ?>
