<?php include('db.php');?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
 <?php include('navbar.php');

 ?>

 <br>

 <div class="container">
  

    <?php

    $q = "select * from register";

    $query=mysqli_query($conn,$q);
    $i=1;

    if(mysqli_num_rows($query)>0)
    {


      ?>


      <table class="table table-stripped">
      <tr>
        <th>Sr.no</th>
          <th>Name</th>
          <th>Email</th>
          <th>location</th>
          <th>Profile</th>
          <th colspan="2" class="text-center">Action</th>
        </tr>

        <?php

    while($row=mysqli_fetch_array($query))
    {
      // echo $row['name']. "<br>" .$row['email'] . "<br>" .$row['location'] . "<br>" .$row['profile'];




      ?>

        <tr>
          <td><?php echo $i++;?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['location'];?></td>
      <td><?php echo $row['profile'];?></td>
      <td><a href="edit.php?userid=<?php echo $row['id'];?>">Edit</a></td>
      <td><a href="delete.php?userid=<?php echo $row['id'];?>">Delete</td>

    </tr>

   <!--  delete from tablename where id='445';
    delete from register where id=11 -->
<!-- 
    localhost/mycode/backend/delete.php?userid=11
 -->
<?php
    }
  }
  else
  {
    echo "No Records found";
   
  }
   ?>




 </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>