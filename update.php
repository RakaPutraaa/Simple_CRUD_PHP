<?php

    require 'controller.php';

    $id = $_GET["id"];

    $query = read("SELECT * FROM guests WHERE id = $id")[0];

    if (isset($_POST['submit'])) {
        if ( updateUser($_POST) > 0) {
            echo "
                <script>
                    alert('User Successfuly Updated !!!');
                    document.location.href = 'admin.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Failed !!!');
                </script>
            ";
        }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>

    <div class="container text-center mt-5 mb-5">
        <h1>Welcome to my house !!!</h1>
        <p>please fill the form bellow before enter my house nigga</p>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-3">
                <nav class ="navbar bg-light">
                    <ul class ="nav navbar-nav">
                        <li class ="nav-item"> 
                            <p>PEMILIK RUMAH !</p>
                        </li>
                        <li class ="nav-item">
                            <a class ="nav-link" href="#"> Raka </a>
                        </li>
                        <li class ="nav-item">
                            <a class ="nav-link" href="#"> Lala </a>
                        </li>
                        <li class ="nav-item">
                            <a class ="nav-link" href="#"> Rahul </a>
                        </li>
                        <li class ="nav-item">
                            <a class ="nav-link" href="#"> Ghost </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-9">
                <div class="container">
                    <form action="" method="POST">

                        <input type="hidden" name="id" value="<?= $query['id']?>">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="name" name="name" class="form-control" id="name" value="<?= $query['name']?>">
                            
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" value="<?= $query['email']?>">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">address</label>
                            <input type="address" name="address" class="form-control" id="address" value="<?= $query['address']?>">
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>