<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Chat</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.mini.css">
	<link rel="stylesheet" type="text/css" href="css/maini.css">
	<script >
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function() {
				if(req.readyState == 4 && req.status == 200){
					document.getElementById('chat').innerHTML = req.responseText;	
				}
			}
			req.open('GET',"chat.php?id2=<?php echo $_GET['id'];?>",true);
			req.send();
		}
		setInterval(function() {ajax()}, 1000);
	</script>
</head>
<body onload="ajax();">
	<h2 align="center" style="border-bottom: 1px solid grey;"> Welcome to Product Chat </h2>
	<div class="ibox-content">
        <div class="row">
            <div style="margin-left: 10%;" class=" col-md-10">
                <div class="chat-discussion">
                    <div class="chat-message left">
                        <div id="chat"></div>
                    </div>
                </div>
            </div>
		</div>
	</div>

	<div style="background-color:white;" class="row">
     	<div style="margin-left: 20%;" class="col-md-8">
			<form method="POST" action="">
				<div></div>
				<input type="text" name="name" placeholder="Enter your name" required="">
				<textarea name="message" placeholder="Enter your message" required=""></textarea>
				
				<input type="text" name="product_id" style = "display: none;" value = "<?php echo $_GET['id'];?> ">
				<input type="submit" style="color: white;" name="submit" value="Send it"/>
			</form>
		</div>
	</div>
	<?php
				

$name = '';
$message ='';
if(isset($_POST['submit'])){
			$prod_id = (int)$_POST['product_id'];
			$_SESSION['prod_id2'] = $prod_id;
			$name = $_POST['name'];
			$message = $_POST['message'];
		$query = "INSERT INTO chat (name, message, product_id) VALUES ('$name','$message',$prod_id)";
		$run = $con -> query($query);
		if(!$run) {
			printf("%s", $con->error);
		}

}


			
		
	?>
</body>
</html>
