<?php include 'include.php';  ?>
<?php include 'server.php'; ?>
<?php 
$temp2 =  $_GET['id2'];
 

 $query = "insert into sold select * from products where id = $temp2";
    $results = mysqli_query($db, $query);

 $query = "call DeleteAd($temp2)";
    $results = mysqli_query($db, $query);
   
   
header('location:myads.php');
echo $temp;
?>

