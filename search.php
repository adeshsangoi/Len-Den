<?php include('include.php') ?>
<?php include('server.php') ?>
<br>
<br>

<link rel="stylesheet" type="text/css" href="css/style3.css">
<?php
if (isset($_POST['submit'])) {
$text= mysqli_real_escape_string($db, $_POST['text']);

if(!empty($text))
{
$query = ("SELECT * FROM products WHERE title LIKE '%$text%'");
$result = mysqli_query($db,$query);
while ($row = mysqli_fetch_array($result)){
                 echo '<div class="prod-box">';
                     echo'
                        <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="300px" height="300px"/>';   

                    echo '<div class="prod-trans">';
                    echo '<div class="prod-feature">';
                    echo '<p style="font-size: 20px;"><b>'.$row["title"].'</b></p>';
                    echo '<p style="color:#fff;font-weight:bold;">Rs'.$row["price"].' </p>';
                    echo '<input type="button" value="Add to wishlist">';
                    echo '<input type="button" value="Tap to chat">';
                    echo '</div>';                     
                    echo '</div>';
                    echo '</div>';
                    }
}
}
?>