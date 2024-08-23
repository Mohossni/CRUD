<?php

include "DB.php";


$id=$_GET['updateid'];

$sql="select * from `crud_table` where Id=$id";
$resalt=mysqli_query($cone,$sql);
$row=mysqli_fetch_assoc($resalt);
$name=$row["Name"];
$email=$row["Email"];
$phone=$row["Phone"];
$password=$row["Password"];

if(isset($_POST["Save"]))
{
    $name=$_POST["Name"];
    $email=$_POST["Email"];
    $phone=$_POST["Phone"];
    $password=$_POST["Password"];

    $sql="update `crud_table`  set Name='$name',Email='$email',Phone='$phone',password='$password' where Id=$id";

    $resalt=mysqli_query($cone ,$sql);

    if($resalt)
    {
       header('location:index.php');
    }else{
        die(mysqli_error($cone));
    }

}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="container my-5">
<div class="d-flex justify-content-between d-flex align-items-center">
    <h1>Update User</h1>
    <a href="index.php"><i class="fa-solid fa-house"></i></a>
</div>

    <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Name" autocomplete="off" value="<?php echo $name?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="mail" class="form-control" id="exampleInputPassword1" name="Email" autocomplete="off" value="<?php echo $email?>" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input type="tel" class="form-control" id="exampleInputPassword1" name="Phone" autocomplete="off" value="<?php echo $phone?>" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Password" autocomplete="off" value="<?php echo $password?>" >
  </div>
 
  <button type="submit" class="btn btn-primary" name="Save">Update</button>

</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
