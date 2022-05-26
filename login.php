<?php include "include/connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gmail</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
        <?php include "include/navbar.php"; ?>

        <div class="container mt-4">
                <div class="row">
                        <div class="col-5 mx-auto">
                                <div class="card mt-4">
                                        <div class="card-body">
                                                <h5 class="lead">Login Here</h5>
                                                <form action="" method="post">


                                                        <div class="mb-3 col">
                                                                <div class="form-floating">
                                                                        <input type="email" placeholder="enter email" name="email" class="form-control">
                                                                        <label for="">Email</label>
                                                                </div>
                                                        </div>

                                                        <div class="mb-3 col">
                                                                <div class="form-floating">
                                                                        <input type="password" placeholder="enter password" name="password" class="form-control">
                                                                        <label for="">Password</label>
                                                                </div>
                                                        </div>

                                                        <div class="mb-3">
                                                                <input type="submit" name="login" class="btn btn-success w-100">
                                                        </div>
                                                </form>
                                                <?php
                                                if (isset($_POST['login'])) {
                                                        $email = $_POST['email'];
                                                        $password = $_POST['password'];

                                                        $password = sha1($password);

                                                        $query = mysqli_query($connect, "select * from accounts where email=
                                                        '$email' AND password ='$password'");
                                                        $count = mysqli_num_rows($query);
                                                        if ($count > 0) {
                                                                //redirect to index.php(dashboard)
                                                                $_SESSION['user'] = $email;
                                                                redirect();
                                                        } else {
                                                                //alert msg of invalid
                                                                message("username and password is incorrect");
                                                        }
                                                }
                                                ?>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        
</body>

</html>