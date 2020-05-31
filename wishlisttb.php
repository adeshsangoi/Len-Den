<?php include('include.php') ?>
<?php include('server.php') ?>

<div id="heading-block">
                <h2><a name="prod">WISHLISTED ITEMS</a></h2>
            </div>
            <div class="prod-container">


<?php 
$usr = $_SESSION['username'];
$qry = ("SELECT * FROM wishlist WHERE username = '$usr'");
$result = mysqli_query($db,$qry);
                while ($row = mysqli_fetch_array($result)){

                echo '<div class="prod-box">';
                echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="300px" height="300px"/>'; 
                echo  '<div class="prod-trans">';
                echo  '<div class="prod-feature">';
                        echo '<p style="font-size: 20px;"><b>'.$row["title"].'</b></p>';
                        echo '<p style="color:#fff;font-weight:bold;">Price : Rs'.$row["price"].' </p>';
                          ?>
                          <a style="color:black;" href="index-chat.php?id=<?php echo $row['id'] ?>"><input type="button" value="Tap to chat"> </a>
                  <a style="color:black;" href="remove_wl.php?id7=<?php echo $row['id'] ?>"><input type="button" value="Remove" ></a>
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