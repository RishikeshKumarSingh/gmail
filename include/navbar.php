<?php
   $user = getUser();
?>

<div class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
                <a href="" class="navbar-brand">Gmail</a>

                <form action="" method="post" class="d-flex">
                        <input type="text" name="search" class="form-control" size="60">
                        <input type="submit" name="find" class="btn btn-dark">
                </form>

                <ul class="navbar-nav">
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                        <?php
                        if(isset($_SESSION['user'])){
                                ?>

                        <li class="nav-item"><a href="" class="nav-link"><!--Profile--> <?= $user['fname'];?></a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                         <?php } else { ?>
                        
                        <li class="nav-item"><a href="create_account.php" class="nav-link">Register</a></li>
                        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                        
                        <?php } ?>

                </ul>
        </div>
</div>