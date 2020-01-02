<!DOCTYPE html>
<html>
<head>
  <title>English</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href=".. /images/logo.png">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
   

<link rel="stylesheet" href="../bootstrap/css/customStyle.css"> 

 <script src="../bootstrap/js/jquery.min.js"></script> 
<style type="text/css">
.rightJS {
     background: #ffc64d;
     color: #000000;
     opacity: 0.9;
     font-weight: bold;

 }

.title {
  font-family: cursive;
  color:maroon;
  font-weight: bold;
}
.li {
  float: left;
  width: 80%;
  padding-top:1%; 
  padding-bottom: 2%;
  margin: 1% 10%;
  height: 20px;
  border-radius: 0.5em;
  box-shadow: 0 0.1em 0.1em;
}
   

</style>
</head>
<body>
<div class="container" >
<div class="row" class="banner">
  <div class="col-sm-1">
  <img src="../images/logo.png" style="margin-left: 0px" class="img-circle" alt="English Logo"  height="135" width="145"/> </div>
  <div class="col-md-10" style="margin-top:15px;margin-left: -20px">
  <h2 class="title h2-responsive text-center">Department of English & Communication Skills</h2>
  <center><sub style="font-size:16px;margin-top:25px;font-weight: bold" >Rajive Gandhi University of Knowledge Technologies-Nuzvid,Andhra Pradesh</sub></center>
</div>
</div>
</div>
 
<nav class="navbar navbar-default"  id="sticky_side_nav" >
    <div class="sticky_side_inner">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <label id="mobile_menu_toggle" class="navbar-toggle btn btn-default" for="mobile_menu_checkbox"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></label>

            <div class="contact mobile hidden-lg hidden-md hidden-sm">
                

            </div>

        </div>
        <input type="checkbox" id="mobile_menu_checkbox" class="hidden" name="mobile_menu_checkbox">
        <div id="sticky_side_nav_inner">
            <ul class="nav navbar-nav">
                <li><a href="../admin/home.php"><span class="glyphicon glyphicon-home hidden-xs"></span> <span class="home visible-xs">Home</span></a></li>
                 <li class="dropdown">
                    <a href="home.php" class="fa fa-file-text-o">Dashboard</a>
                
                </li>

                 <li class="dropdown">
                    <a href="../admin/post.php" class="fa fa-group">Topics</a>
                
                </li>
                <li >
                    <a href="../admin/user.php" ><span class="fa fa-book " >Users</span></a>
                </li>
                <li class="dropdown">
                    <a href="../admin/category.php"><span class="fa fa-image" >Catogory</span></a>
                    
                </li>
                <li class="dropdown">
                    <?php if(!isset($_SESSION['uname'])): ?>
                  <a href="index.php" class="fa fa-user">Login</a>
                    </li>

                    <li class="dropdown">
                  <a href="signup.php" class="fa fa-file-text-o">Signup</a>
                  <?php else: ?>

                 <?php if(isset($_SESSION['uname'])) //echo $_SESSION['username']; ?> <a href="../admin/logout.php" class="fa fa-user">Logout</a></li>
                                    <li>
                  <a href="#">Welcome <?php  echo $_SESSION['uname']; ?></a>
                </li>

                    <?php endif ?>


                    
                    
                
                
                
             
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
</body>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</html>