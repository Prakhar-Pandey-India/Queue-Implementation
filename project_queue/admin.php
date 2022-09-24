<?php
session_start();
require 'databaseconnection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>       
<a href="account.php" style="color: rgb(0,0,0);">Click here to back on login page</a>        
<div style="height:100px">
    <center>
        <strong><h1 style="font-size:90px">Queue</h1>
        <h4 style="font-size:90px">DATABASE</h4></strong>
    </center>
</div>
<br>
<center>
  <table class="styled-table">
      <thead>
          <tr>
              <td>Serial No.</td>
              <td>USER NAME</td>
              <td>USER ID</td>
          </tr>
      </thead>
      <tbody>
      <?php
          
            
            $query = "SELECT * from forsignup";
          
          $query_solution = mysqli_query($conn, $query);
          if ($query_solution) {
            while ($rows = mysqli_fetch_array($query_solution)) {
              ?>
          <tr>
            <td><?php echo $rows['s.no'] ?></td>
            <td><?php echo $rows['username'] ?></td>
            <td><?php echo $rows['email'] ?></td>
          </tr>
          
          <?php
        }
      }
       ?>
      </tbody>
  </table>
    </center>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>