<?php
	include 'connection.php';
	$prod_id2 = (int)$_GET['id2'];
	$query = "SELECT * FROM chat WHERE product_id = $prod_id2 ORDER BY id DESC";
	$run = $con -> query($query);
	while ($row = $run->fetch_array()) :
?>
<div id="message">
	<img class="message-avatar" src="images/user.png" alt="">
	<a class="message-author" href="#"> <?php echo $row['name'];?> </a>
	<span class="message-date"> <?php echo formatDate($row['date']);?> </span>
	<span class="message-content"> <?php echo $row['message'];?> </span>
</div>
<?php endwhile; ?>
