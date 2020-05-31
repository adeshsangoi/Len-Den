<?php include 'include.php';  ?>
<?php include 'server.php'; ?>
<?php 
$temp2 =  $_GET['id9'];
 $check = $_SESSION['username'];

 $query = "insert into wishlist select * from products where id = $temp2";
    $results = mysqli_query($db, $query);

    $query2 = "update wishlist set username = '$check' where id = $temp2";
      $results = mysqli_query($db, $query2);

header('location:wishlisttb.php');
?>



