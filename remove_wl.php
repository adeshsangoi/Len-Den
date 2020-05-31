<?php include 'include.php';  ?>
<?php include 'server.php'; ?>
<?php 
$temp4 =  $_GET['id7'];


 $query = "delete from wishlist where id = $temp4";
    $results = mysqli_query($db, $query);
   

  header('location:wishlisttb.php');

   
?>

