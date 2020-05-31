<?php include 'include.php';  ?>
<?php include 'server.php'; ?>
<?php 
$temp =  $_GET['id1'];
 

 $query = "call DeleteAd($temp)";
    $results = mysqli_query($db, $query);
   
   
echo $temp;
?>

