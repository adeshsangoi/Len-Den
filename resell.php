<?php include 'include.php';  ?>
<?php include 'server.php'; ?>
<?php 
$temp4 =  $_GET['id4'];
 

 $query = "insert into products select * from sold where id = $temp4";
    $results = mysqli_query($db, $query);

 $query = "delete from sold where id = $temp4";
    $results = mysqli_query($db, $query);
   
   
header('location:soldtb.php');
echo $temp;
?>

