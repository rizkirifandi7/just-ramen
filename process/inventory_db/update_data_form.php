<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <?php

        require_once('../../config.php');

        $id = $_GET['id'];

        $query = "SELECT * FROM inventory WHERE id='$id'";

        $result = mysqli_query($conn,$query);

        $row = mysqli_fetch_assoc($result);

    ?>

    <div class="container">
        <div class="card mt-4" id="form-body">
            <div class="card-header">
                Update Inventory
            </div>
            <div class="card-body">
                <form method="post" action="update_data.php">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                    <div class="form-group">
                        <label>Item</label>
                        <input type="text" value="<?php echo $row['nama_barang']; ?>" class="form-control" name="nama_barang" placeholder="Enter Name">
                    </div>
                    <div class="form-group mt-2">
                        <label>Total</label>
                        <input type="text" value="<?php echo $row['jumlah']; ?>" class="form-control" name="jumlah" placeholder="Enter Email">
                    </div>
                    <div class="form-group mt-2">
                        <label>Description</label>
                        <input type="text" value="<?php echo $row['deskripsi']; ?>" class="form-control" name="deskripsi" placeholder="Enter Email">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2" id="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
