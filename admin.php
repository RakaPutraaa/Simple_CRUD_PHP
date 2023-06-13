<?php

    require 'controller.php';

    $guests = read("SELECT * FROM guests");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>

    <h1 class="text-center mt-5">This is Admin Page</h1>

    <div class="container">
        <a href="home.php" class="btn btn-primary mt-5">Back to Home</a>
    </div>

    <div class="container">

        <?php $i = 1?>
            <table class="table table-striped mt-5 text-center">
                <tr class="">
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                
                <?php foreach ($guests as $guest) { ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $guest["name"]?></td>
                    <td><?= $guest["email"]?></td>
                    <td><?= $guest["address"]?></td>
                    <td>
                        <a href="update.php?id=<?= $guest['id']?>" class="btn btn-primary">Edit</a> | 
                        <a href="delete.php?id=<?= $guest['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php $i++ ?>
                <?php }?>

            </table>


    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>