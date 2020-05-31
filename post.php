<?php include('server.php') ?>
<?php include('include.php') ?>

<html> 
<head>
  <title> Post and Sale </title>
    <link href="_css/post.css" rel="stylesheet" type="text/css">
  <link href="_css/homepage.css" rel="stylesheet" type="text/css"/>
  <link href="_css/header.css" rel="stylesheet" type="text/css">
  <link  href="_css/foot.css" rel="stylesheet" type="text/css">
    
<!--/*colors used:
#b07df4
#d0affd */-->
<script type="text/javascript">
function performClick(node) {
   var evt = document.createEvent("MouseEvents");
   evt.initEvent("click", true, false);
   node.dispatchEvent(evt);
}
</script>
<style type="text/css">
.valid{
  text-align:left;
  font-size:10px;
  font-family:"Comic Sans MS", cursive;
  color:#F00; 
  
}

</style>   
</head>

<body>

<div id="body">
<div id="maincontent">
<div id="topheading">
<p> Post a Free Add</p>
</div>
<div id="allform">
<form action = "post.php" method="post" enctype="multipart/form-data">
<table width="100%" cellspacing="0" cellpadding="0">
  
  <tr style="height:60px;">
    <td width="150" class="text">Category you chose</td>
    <td width="150"><select name="CATEGORY">
<option value ="none">SELECT CATEGORY</option>
<option value ="books">Books</option>
<option value ="clothes">Clothes</option>
<option value ="cycle">Cycle</option>
<option value ="furniture">Furniture</option>
<option value ="electronics">Electronics</option></td>
  </tr>
  <tr style="visibility:hidden;">
    <td colspan="2"><input name="cat_id" value="<?php echo $sel_page['id'];?>" ></td>
  </tr>
  <tr>
    <td width="150" class="text"><span style="color:red;">*</span>Ad title:</td>
    <td ><input name="title"  class="textfeilds" required type="text" placeholder="Write exact title as your product name or model" maxlength=" 70" size="70"></td>
  </tr>
   <tr>
    <td width="150" class="text"><span style="color:red;">*</span>Ad Photos:</td>
   <td><label for="photo"></label>
     <input type="file" name="photo" id="photo">
    </td>
  </tr>
  </tr>
  </tr>
  </tr>
   <tr>
    <td width="150" class="text">Price:</td>
   <td style="font-size:12px; font-family:'Times New Roman';" > <input name="price" type="number" size="20" maxlength="50"  id="currency" placeholder="example: 50.00"> Rs</td>
  </tr>
</table>
<div id="sellerinfo">
<p> Seller information</p>
</div>
<table width="100%" cellspacing="0" cellpadding="0">

  
  <tr>
    <td width="150" class="text"><span style="color:red;">*</span>Email:</td>
    <td ><input name="email" required  class="textfeilds" type="email" placeholder="Enter a valid email address." maxlength=" 70" size="70"></td>
  </tr>
  
   <tr>
    <td width="150" class="text"><span style="color:red;">*</span>Mobile Number:</td>
    <td ><input name="m_number" required class="textfeilds" type="number" placeholder="Example:9234494665518" maxlength=" 70" size="70"></td>
  </tr>
    </tr>
  
  <tr>
    <td></td>
    <td ><input type="submit" id="submit" name = "post" value="Post" ></td>
    <!-- <input type="hidden" name="post" value="mmm" > -->
  </tr>
</table>


</form>     
</div>  
  </div>
  
</div>


</body>

</html>