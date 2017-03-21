<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/21/2017
 * Time: 7:12 PM
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <form action="loggin.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
