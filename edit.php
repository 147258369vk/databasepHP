<?php 
include('db.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <?php include('navbar.php');?>

    <!-- To get the information from url -->

    <?php

      $id=$_GET['userid'];

      $q="select * from register where id='$id';";

      $query=mysqli_query($conn,$q) or die('query is not executed');

      $row=mysqli_fetch_array($query);



    ?>




    <div class="container">
            <div class="jumbotron text-center"><h2>Update Record</h2></div>

            <div class="container">
                <form method="POST">
                    Enter name: <input type="text" class="form-control" name="username" value="<?php echo $row['name'];?>">
                    <br><br>
                    Enter email :<input type="text" class="form-control" name="useremail" value="<?php echo $row['email'];?>">
                    <br><br>
                    Enter profile: <input type="text" class="form-control" name="userprofile" value="<?php echo $row['profile'];?>">
                    <br><br>
                    Enter location:<input type="text" class="form-control" name="location" value="<?php echo $row['location'];?>">
                    <br><br>
                    <input type="submit" value="Update" class="btn btn-primary" name="btnupt">

                </form>

                
            </div>

            <?php 

                if(isset($_POST['btnupt']))
                {
                  $nm=$_POST['username'];
                  $em=$_POST['useremail'];
                  $pro=$_POST['userprofile'];
                  $loc=$_POST['location'];

                  $q="update register set name='$nm',email='$em',profile='$pro',location='$loc' where id='$id';";

                  $query=mysqli_query($conn,$q) or die('query is not executed');

                  if(mysqli_affected_rows($conn)>0)
                  {
                    echo "<script>alert('Data updated');
                          window.location.href='display.php';
                          </script>";
                  }
                  else
                  {
                    echo "Error in updating record";
                  }
                }



            ?>



    </div>


















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>