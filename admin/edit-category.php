<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:index.php");
  }
$uname=$_SESSION['uname'];

?>
<!-- Navigation -->

<?php include('../includes/navbar3.php') ?> 
    <div class="container" style="margin:8% auto;width:900px;">
           
           <h2>Category</h2>

           <hr>
         <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Category</h3>

                </div> 
                 <div class="panel-body">
                   <form method="POST">
                   
                        <label>Category</label>
                        <?php include "../functions/db.php";
                        $cat_id = $_GET['cat_id'];
                        $sel = mysqli_query($con,"SELECT * from category where cat_id='$cat_id' ");
                        while($row=mysqli_fetch_assoc($sel)){
                          extract($row);
                         echo  '<input type="text" class="form-control" name="category" required style="width:50%" value='.$category.'>';
                        }

                        

                        ?>
                        
        
                        <input type="submit" name="submit"class="btn btn-success pull-right" value="Edit">
                   </form>
                </div>
    </div>
</div>


    <?php 
    if(isset($_POST['submit'])){
      $category = $_POST['category'];
      $cat_id = $_GET['cat_id'];
      $update = mysqli_query($con,"UPDATE category set category='$category' where cat_id='$cat_id' ");
      header("Location:category.php");
    }




    ?>
  
    <?php include("../includes/footer.php");?>

 

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
	</body>

</htmls