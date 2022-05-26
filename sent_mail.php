<?php include "include/connect.php";

checkAuth();
?>
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

        <div class="container-fluid mt-4">
                <div class="row">
                        <div class="col-3">
                                <div class="text-center">
                                        <a href="#compose" class="btn btn-danger btn-lg px-5 py-2 w-100 mb-2 fw-bold rounded-pill" data-bs-toggle="modal">Compose <i class="bi bi-send"></i></a>
                                </div>
                                <?php include "include/side.php"; ?>
                        </div>
                        <div class="col-9">
                                <h6 class="lead my-3">Outbox</h6>
                                <table class="table">
                                        <?php
                                        $loginedUserId = $user['id'];
                                        $callingInbox = mysqli_query($connect, "select * from mails JOIN accounts ON mails.reciver_id=accounts.id where
                                        sender_id='$loginedUserId' AND status='1' ORDER BY mail_id DESC");
                                        while ($row = mysqli_fetch_array($callingInbox)) {
                                        ?>
                                                <tr>
                                                        <th><?= $row['fname']; ?></th>
                                                        <td>
                                                                <a href="viewMail.php?id=<?= $row['mail_id']; ?>" class="text-decoration-none"><strong>
                                                                        <?= $row['subject']; ?> -</strong><span class="text-muted"><?= $row['content']; ?></span>
                                                                </a>
                                                        </td>
                                                        <td>
                                                                <?= date("D d-m-y h:i:s A", strtotime($row['date'])); ?>
                                                        </td>
                                                </tr>
                                        <?php } ?>
                                </table>
                        </div>
                </div>
        </div>

        <?php include "include/footer.php"; ?>


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>