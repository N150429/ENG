
   <?php include("includes/navbar.php");?>
    <div class="container">
      <br>
      
<div class="row">
  <div class="col-md-9">
    <div style="background: rgb(252,255,244); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(252,255,244,1) 0%, rgba(233,233,206,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(252,255,244,1) 0%,rgba(233,233,206,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(252,255,244,1) 0%,rgba(233,233,206,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#e9e9ce',GradientType=0 ); /* IE6-9 */
;padding:20px;padding-top: 40px;">
            <h3 class="text-center">Signup Here!</h3>
            <br>
            <form method="POST" class="form-signin" action="functions/register.php" enctype="multipart/form-data">
                
              <div class="input-group">
            <span class="input-group-addon"><li class="glyphicon glyphicon-user"></li></span>  
              <input type="text" name="fname"placeholder="First Name"class="form-control" required>
          </div>
          <br>
          <div class="input-group">
          <span class="input-group-addon"><li class="glyphicon glyphicon-user"></li></span>
              <input type="text" name="lname"placeholder="Last Name"class="form-control" required>
        </div>
        <br>
        <div class="input-group">
        <span class="input-group-addon"><li class="glyphicon glyphicon-user"></li></span>
              <select class="form-control" name="gender"required>
                <option>Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
      </div>
      <br>
      <div class="input-group">
      <span class="input-group-addon"><li class="glyphicon glyphicon-user"></li></span>
              <input type="text" placeholder="University Id" name="username"class="form-control" required>
    </div>
    <br>
    <div class="input-group">
    <span class="input-group-addon"><li class="glyphicon glyphicon-lock"></li></span>
              <input type="password" placeholder="Password" name="password" class="form-control" required>
              </div>
              <br>

<label>Profile Picture</label>
<input type="file" name="file" class="form-control">
              <br>
              <input type="submit" value="Signup" class="btn btn-primary" style="width:100%;">
            </form>
</div></div>
</div>
</div>          
<br>
<br>


<?php include("includes/footer.php");?>

  </body>


  <!--code for sticky fixed navabar-->
<script type="text/javascript">
// can play with the offset value to get the smooth results you are looking for.
$(document).ready(function () {
// Third Level Nav
    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
        event.preventDefault(); 
        event.stopPropagation(); 
        $(this).parent().toggleClass('open');
        $(this).parent().siblings().removeClass('open');
    });

// Activate Bootstrap Sticky
    var offset = $('#sticky_side_nav').offset();
    $('#sticky_side_nav').affix({
        offset: {
            top: offset.top
        }
    }); 
});
</script>
</html>










