<?php include('include.php') ?>
<?php include('server.php') ?>
<?php $_SESSION['id'] = ""; ?>


<div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="height : 350px;">
      <div class="item active" >
        <img src="images/1.png" width="100%;" alt="Image" style="filter: brightness(70%);">             
      </div>

      <div class="item">
    <img src="images/0.png" alt="Image" style="filter: brightness(70%);">    
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div id="heading-block">
                <h2><a name="prod">Products</a></h2>
            </div>
            <br> <br> <br> <br>
            <div class="prod-container">
            <?php
                $query = ("SELECT * FROM products LIMIT 12");
                $result = mysqli_query($db,$query);
                while ($row = mysqli_fetch_array($result)){
                  ?>

                <div class="prod-box">
                <!-- <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="300px" height="300px"/> ' ;?> -->
                <img id="<?php echo $row["title"] ; ?>" class="imgclick" src="<?php echo 'data:image/jpeg;base64,'.base64_encode($row['image']).'' ?>" width="300px" height="300px">
               <div class="prod-trans" id="<?php echo $row["title"] ; ?>">
                <div class="prod-feature">
                        <p style="font-size: 20px;"><b><?php echo $row["title"] ; ?></b></p>
                        <p style="color:#fff;font-weight:bold;">Price : Rs <?php echo $row["price"] ; ?></p>

<a style="color:black;" href="wishlist.php?id9=<?php echo $row['id'] ?>"><input type="button" value="Add to wishlist" ></a>
                        <a style="color:black;" href="index-chat.php?id=<?php echo $row['id'] ?>"><input type="button" value="Tap to chat"></a>
                   </div>                      
                   </div>  
                </div>

                <?php 
            }
            ?>
            </div>

<?php
                $query = ("SELECT * FROM products LIMIT 12");
                $result = mysqli_query($db,$query);
                while ($row = mysqli_fetch_array($result)){
                  ?>
<div id="<?php echo $row["title"] ; ?>mod" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="<?php echo $row["title"] ; ?>01">
  <div id="caption"></div>
</div>
<?php 
}
 ?>

<?php
                $query = ("SELECT * FROM products LIMIT 12");
                $result = mysqli_query($db,$query);
                while ($row = mysqli_fetch_array($result)){
                  ?>


<script>
// Get the modal
var modal = document.getElementById('<?php echo $row["title"] ; ?>mod');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('<?php echo $row["title"] ; ?>');
var modalImg = document.getElementById("<?php echo $row["title"] ; ?>01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<?php 
}
 ?>
            
</body>
</html>