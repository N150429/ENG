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
           
           <h2> Topics Posted</h2>

           <hr>
         <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Topic Details</h3>

                </div> 
                 <div class="panel-body">
                  <?php
                  include "../functions/db.php";
                 if(isset($_GET['post_Id'])){
                 $id = $_GET['post_Id'];
                   }
                  if(empty($id)){
                    header("location:post.php");
                     }
                                      
                  $sql = "SELECT * FROM tblpost as tp join category as c on tp.cat_id=c.cat_id WHERE tp.post_Id='$id'";
                            $run = mysqli_query($con,$sql);

                            while($row=mysqli_fetch_array($run))
                            {
                                $id = $row['post_Id'];
                       
                                $title = $row['title'];
                               $content = $row['content'];
                                $category= $row['category'];
                               $datetime =$row['datetime'];
                 
                            }
                             extract($_POST);
                               date_default_timezone_set("Asia/Taipei");
                             $datetime=date("Y-m-d h:i:sa");

                             if(isset($edit))
                             {
                                $sql = "UPDATE `tblpost` SET `title`='$title',`content`='$content',`category`='$category',`datetime`='$datetime' WHERE `post_Id`='$id'";
                               $run = mysqli_query($con,$sql);
                             
                            if($run==true)
                            {
                                     echo '<script language="javascript">';
                                      echo 'alert("Updated")';
                                      echo '</script>';
                                      echo '<meta http-equiv="refresh" content="0;url=post.php" />';
                            }
                          }
                            ?>

                            <form method="POST">
              
                        <input type="text" name="title" class="form-control" value="<?php echo $title;?>"><br>
                        <textarea name="content"class="form-control">
                          <?php echo $content;?>
                        </textarea><br>
                        <select name="category" class="form-control">
                            <option><?php echo $category;?></option>
                            <option value="Programming">Programming</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Computer Networking">Computer Networking</option>
                        </select><br>
                        <input type="text" class="form-control" value="<?php echo $datetime;?>"><br>
                        <input type="submit" name="edit" class="btn btn-success pull-right" value="Update">
                        
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