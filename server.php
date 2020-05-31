<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'aadi2912', 'lenden');

// REGISTER PART
if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }
  if(strlen($password_1)<6) {array_push($errors, "Password too small");}

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO users (username, email, password) 
          VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }
}


//LOGIN PART

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

//add posting part


if (isset($_POST['post'])) {

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $phone = mysqli_real_escape_string($db, $_POST['m_number']);
  $category = mysqli_real_escape_string($db, $_POST['CATEGORY']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
 


  //error detection image is skipped however :(
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($title)) { array_push($errors, "title is required"); }
  if (empty($phone)) { array_push($errors, "phone number is required"); }
  if (empty($category)) { array_push($errors, "category is required"); }
  if (empty($price)) { array_push($errors, "Price is required"); }
  // if ($category === "SELECT CATEGORY") { array_push($errors, "category is required"); }

// echo $name . " ";
// echo $email . " ";
// echo $phone . " ";
// echo $title . " ";
// echo $price . " ";
 //echo $category . " ";

if (count($errors) == 0) {

    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['photo']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

$namecheck = $_SESSION['username'];

$query = "INSERT INTO products(title,price,category,username,phone,email,image) VALUES ('$title','$price','$category','$namecheck','$phone','$email','$imgContent')";
    //mysqli_query($db,$query);
      mysqli_query($db,$query);
        
}

 header('location:index.php');

}
}
?>