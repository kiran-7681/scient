<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-uhut8PejFZO8994oEgm/ZfAv0mW1/b83nczZzSwElbeILxwkN491YQXsCFTE6+nx" crossorigin="anonymous">
</head>
<body>
    <div class="inline">
        <img src="scient-logo.jpg" width="125px;">
        <h3>Student Centre For Innovation in Engineering and Technology</h3>
    </div><hr>
    <div>
        <h2>Admin Login</h2>
        <form action="login.php" method="post" class="form-inline my-2 my-lg-0">
            <div class="form-group <?php echo (!empty($lusername_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="username" class="form-control mr-sm-2" placeholder="username" value="<?php echo $lusername; ?>">
                <div class="help-block"><?php echo $lusername_err; ?></div>
            </div>    
            <div class="form-group <?php echo (!empty($lpassword_err)) ? 'has-error' : ''; ?>">
                <input type="password" name="password" class="form-control" placeholder="password">
                <div class="help-block"><?php echo $lpassword_err; ?></div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="login_user" value="Login">
            </div>
            <p>Admin sign up:<a href="register.php">Sign up</a>.</p>
        </form>
    </div> 
    <a href="project.php">CLICK HERE</a>
</body>
</html>