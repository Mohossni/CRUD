<?php
include "DB.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <div class="container my-5">
    <div class="d-flex justify-content-between d-flex align-items-center">
      <h1>All Users</h1>
      <a href="add_user.php"><i class="fa-solid fa-user-plus"></i></a>
    </div>
    <table class="table my-5">
      <thead>

        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody>

        <?php
            $sql = "SELECT * FROM crud_table";
            $resalt = mysqli_query($cone, $sql);
            if($resalt){
              while ($row = mysqli_fetch_assoc($resalt)) {
                $id=$row["Id"];
                $name=$row["Name"];
                $email=$row["Email"];
                $phone=$row["Phone"];

                echo '    <tr>
      <td>'.$id.'</td>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$phone.'</td>
      <td><a href="update.php?updateid='.$id.'"><i class="fa-solid fa-pen-to-square text-primary m-2"></i></a>
      <a href="delete.php?deleteid='.$id.'"><i class="fa-solid fa-trash text-danger"></i></a></td>    

    </tr>';

                
                   
                    }

            }
            

        ?>

      </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
