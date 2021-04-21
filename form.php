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


    <div class="container">
            <div class="jumbotron text-center"><h2>Register Yourself</h2></div>

            <div class="container">
                <form method="POST">
                    Enter name: <input type="text" class="form-control" name="username">
                    <br><br>
                    Enter email :<input type="text" class="form-control" name="useremail">
                    <br><br>
                    Enter profile: <input type="text" class="form-control" name="userprofile">
                    <br><br>
                    Enter location:<input type="text" class="form-control" name="location">
                    <br><br>
                    <input type="submit" value="Register" class="btn btn-primary" name="btnsub">

                </form>

                <?php
                    if(isset($_POST['btnsub']))
                    {
                        $nm=$_POST['username'];
                        $em=$_POST['useremail'];
                        $pro=$_POST['userprofile'];
                        $loc=$_POST['location'];

                     
                       // if($conn==true)
                       // {
                       //  echo "connection established";
                       // }
                       // else

                       // {
                       //  echo "error in connection with database";
                       // }
                    

                       // insert into register (name,email,locaiton,profile)value('karan','karan@gmail.com','chandigarh','developer');
                       $q="insert into register(name,email,location,profile)values('$nm','$em','$loc','$pro');";



                      $query=mysqli_query($conn,$q) or die('error in executing query' .mysqli_error($conn));
                      // if($query==true)
                      // {
                      //   echo "data inserted";
                      // }
                      // else
                      // {
                      //   echo "error in inserting values" .mysqli_error($conn);
                      // }

                      if(mysqli_affected_rows($conn)>0)
                      {
                        echo "Register succesfully";
                      }
                      else
                      {
                        echo "Error in registering data";
                      }

                    }



                ?>

            </div>



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