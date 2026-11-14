<?php
    require_once('../dao/config.php');
    require_once('../dao/crudDAO.php');

    //$list=crudDAO::read(); use for static methods only
    $a = new crudDAO();
    $list = $a->read();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <center>
        <table class = "container-md">
            <th>ID</th>
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Username</th>
            <th>Email</th>
            <?php foreach($list as $key=>$value) {?>
                <tr>
                    <td><?=$value['id']; ?></td>
                    <td><?=$value['lname']; ?></td>
                    <td><?=$value['fname']; ?></td>
                    <td><?=$value['username']; ?></td>
                    <td><?=$value['email']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>