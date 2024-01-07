<?php
include "connection.php";
$ClientSlug=$_GET['client'];
$GuestSlug=$_GET['guest'];
$Guestsql="select * from $ClientSlug WHERE slug='$GuestSlug'";
$Guestresult=mysqli_query($conn,$Guestsql);
$Guestrow=mysqli_fetch_array($Guestresult);
$Clientsql= "select * from clientlist WHERE slug='$ClientSlug'";
$Clientresult=mysqli_query($conn,$Clientsql);
$Clientrow=mysqli_fetch_array($Clientresult);

$Guestresult = "UPDATE $ClientSlug SET visitcount = visitcount + 1 WHERE slug='$GuestSlug'";
?>

<!doctype html>
<html lang="en">  
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>main guest invite</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">مرخبا hello  
            <?php 

echo "$Guestrow[fullname]" ;


          ?> </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a type="button" class="btn btn-primary nav-link active" href="create.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <thead>
      <tr>
        
        
        <th>
            
        <?php
echo" $Clientrow[invitetxt]";
echo "<tr>";


echo "</tr>";

?>
        </th>
        
        
       
    <div class="gallery"> 
      
            <!--<img src="source.php?id=1" width="300" height="300" /> -->
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($Clientrow['inviteimg']); ?>"width="500" height="500" /> 
      
    </div> 

       <!-- <th>ACTIONS</th> -->
      </tr>
    </thead>