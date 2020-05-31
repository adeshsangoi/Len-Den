<?php include('include.php') ?>
<?php include('server.php') ?>

<div id="heading-block">
                <h2><a name="prod">My Ads</a></h2>
            </div>
            <div class="prod-container">


<?php 
$usr = $_SESSION['username'];
$qry = ("SELECT * FROM products WHERE username = '$usr'");
$result = mysqli_query($db,$qry);
                while ($row = mysqli_fetch_array($result)){

                echo '<div class="prod-box">';
                echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="300px" height="300px"/>'; 
                echo  '<div class="prod-trans">';
                echo  '<div class="prod-feature">';
                    	echo '<p style="font-size: 20px;"><b>'.$row["title"].'</b></p>';
                        echo '<p style="color:#fff;font-weight:bold;">Price : Rs'.$row["price"].' </p>';
?>
                        <a style="color:black;" href="index-chat.php?id=<?php echo $row['id'] ?>"><input type="button" value="See my chats"></a>
                         <a style="color:black;" href="deletead.php?id1=<?php echo $row['id'] ?>"><input type="button" value="Delete Ad" ></a>

                  <a style="color:black;" href="sold.php?id2=<?php echo $row['id'] ?>"><input type="button" value="Sold" ></a>
<?php
                   
                   echo '</div> ';                  	
                   echo '</div>';
                echo '</div>';
            }
            ?>

</div>
</div>
<?php include 'footer.php' ?>
</body>
</html>