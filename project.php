<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="project">
        <h2>Unleash your Ideas(Students)</h2>
        <form action="login.php" method="post">
            <div class="p-group">
                <input type="text" id="name" name="user_name" placeholder="Student Name">
                <div class="p-help"><?php echo $s_username_err; ?></div>
            </div>
            <div class="p-group">
                <input type="text" id="number" name="mob_no" placeholder="Mobile Number">
                <div class="p-help"><?php echo $s_number_err; ?></div>
            </div>
            <div class="p-group">
                <input type="text" id="Email" name="p_email" placeholder="Email Id">
                <div class="p-help"><?php echo $s_email_err; ?></div>
            </div>
            <div class="p-group">
                <input type="text" id="pname" name="p_name" placeholder="Project Name">
                <div class="p-help"><?php echo $s_pname_err; ?></div>
            </div>
            <div class="p-group">
                <textarea id="pdesc" name="p_desc" placeholder="Project Description"></textarea>
                <div class="p-help"><?php echo $s_pdesc_err; ?></div>
            </div>
            <div class="p-group">
                <input type="submit" name="p_submit" value="Submit">
                <div class="p-help"></div>
            </div>
        </form>
    </div>
</body>
</html>