<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include 'config.php';
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
  <div class="wrapper">
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out</a>
    </p>
    <div class="view">
    <a href="activeprojects.php" title="click here">VIEW ACTIVE PROJECTS</a>
  </div><hr>
    <div class="projects">
        <h2>Projects under review</h2>
        <h3>Click the corresponding project name for more info</h3>
        <?php
           $sql = "SELECT * from projects";
           $result = $link->query($sql); 

           if($result->num_rows > 0){ ?>
           <table border="1">
               <thead>
                   <th>Sl.No</th>
                   <th>Name</th>
                   <th>Project Name</th>
               </thead>
               <tbody>
                   <?php
                     if($result) {
                        $i=1;
                        while ($row = $result->fetch_assoc()) {?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row["username"]; ?></td>
                                <td><a href="viewproject.php?id=<?php echo $row["id"]; ?>"><?php echo $row["s_username"]; ?></a></td>
                            </tr>
                        <?php $i++; } ?>
                     <?php } ?>
               </tbody>
           </table>
         <?php } else{
               echo "<p class='lead'><em>No records were found.</em></p>";
         } ?>
    </div>
  </div>
</body>
</html>