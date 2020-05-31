<?php include 'server.php';  ?>

<?php 

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0 !important;
    }
    

  .nav>li>a:hover, .nav>li>a:focus, .nav .open>a, .nav .open>a:hover, .nav .open>a:focus {
    background:#fff;
}
.dropdown {
    background:none;
    width:175px;    
}
.dropdown-menu>li>a {
    color:white;
}

.dropdown ul.dropdown-menu {
    border-radius:4px;
    box-shadow:none;
    margin-top:5px;
    width:200px;
    background: rgb(51,51,51);
}
.dropdown ul.dropdown-menu:before {
    content: "";
    border-bottom: 10px solid #fff;
    border-right: 10px solid transparent;
    border-left: 10px solid transparent;
    position: absolute;
    top: -10px;
    right: 16px;
    z-index: 10;
}
.dropdown ul.dropdown-menu:after {
    content: "";
    border-bottom: 12px solid #ccc;
    border-right: 12px solid transparent;
    border-left: 12px solid transparent;
    position: absolute;
    top: -12px;
    right: 14px;
    z-index: 9;
}

  </style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="images/logos.png" width = 185px height="55px;"></a>
    </div>
    <ul class="nav navbar-nav">
      
        <li><a href="index.php">Home</a></li>
           <li> <a href="cycle.php">Cycles</a> </li>
           <li> <a href="books.php">Books</a> </li>
           <li> <a href="electronics.php">Electronics</a> </li>
           <li> <a href="clothes.php">Clothes</a> </li>
           <li> <a href="furniture.php">Furniture</a> </li>
           </ul>

      <?php if (isset($_SESSION['username'])) { ?>

  <ul class="nav navbar-nav navbar-right">
  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span></span>  <?php echo $_SESSION['username'];?> ⮟</a>
          <ul class="dropdown-menu">
            <li><a href="post.php">Submit a free Ad <i class="fa fa-buysellads pull-right"></i></span></a></li>
                      <li class="divider"></li>
  
            <li><a href="myads.php">My Ads <i class="fa fa-buysellads pull-right"></i></span></a></li>
            <li class="divider"></li>
            
            <li><a href="soldtb.php">Sold items <i class="fa fa-superpowers pull-right"></i></a></li>
            <li class="divider"></li>
            
            <li><a href="wishlisttb.php"> Wishlist <span class="glyphicon glyphicon-heart pull-right"></span></a></li>
            <li class="divider"></li>
            <li><a href="index.php?logout='1'">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
          </ul>
        </li>
    </ul>

<?php } else { ?>
  <ul class="nav navbar-nav navbar-right">
  <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    <?php } ?>

      
    <form class="navbar-form navbar-left" action="search.php" METHOD="POST">
      <div class="input-group">
        <input type="text" class="form-control" style="width: 300px;" placeholder="Search" name="text">
        <div class="input-group-btn">
          <button class="btn btn-default" name = 'submit' type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>


</body>
</html>

