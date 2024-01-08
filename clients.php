<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Welcome Karim, this is the list of your guests</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-4">
    <table class="table table-sortable">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>JOINING DATE</th>
        <!-- <th>ACTIONS</th> -->
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        $sql1 = "select * from clientlist";
        $result1 = $conn1->query($sql1);
        if(!$result1){
          die("Invalid query!");
        }
        while($row=$result1->fetch_assoc()){
          echo "
      <tr>
        <th>$row[ID]</th>
        <td>$row[fullname]</td>
        <td>$row[email]</td>
        <td>$row[phonenumber]</td>
        <td>$row[weddingdate]</td>
         
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./tablesort.js"></script>
  </body>
</html>