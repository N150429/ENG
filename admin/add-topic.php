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

<?php include('../includes/navbar3.php') ?>     <div class="container" style="margin:8% auto;width:900px;">
           
           <h2> Topics Posted</h2>

           <hr>
         <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Add New Topic</h3>

                </div> 
                 <div class="panel-body">
                   <form method="POST" action="add-topic-function.php">
                   
                        <label>Topic Title</label>
                        <input type="text" class="form-control" name="title"required>
                        <label>Content</label>
                        <textarea name="content"class="form-control">

                        </textarea>
                        <label>Category</label>
                        <select name="category" class="form-control">
                            <option></option>
                          <?php include "../includes/connect.php"; 
                                $sel = mysqli_query($con,"SELECT * from category");

                                if($sel==true){
                                while($row=mysqli_fetch_assoc($sel)){
                                  extract($row);
                                  echo '<option value='.$cat_id.'>'.$category.'</option>';
                                }
                                }
                         ?>
                        </select><br>
                        <input type="submit" class="btn btn-success pull-right" value="Post">
                   </form>
                </div>
    </div>
  </div>
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