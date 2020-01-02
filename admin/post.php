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
                    <h3 class="panel-title">List of Topics Posted</h3>

                </div> 
                 <div class="panel-body">
                    <a href="add-topic.php" class="pull-right btn btn-success">Add New</a><br><br>
               <table class="table table-stripped">
                                <th>Topic</th>
                                <th>Category</th>
                                <th>Action</th>
                            <?php
                            
                            include "../functions/db.php";

                            $sql = "SELECT * FROM tblpost as tp join category as c on tp.cat_id=c.cat_id";
                            $run = mysqli_query($con,$sql);

                            while($row=mysqli_fetch_array($run))
                            {
                                $id = $row['post_Id'];
                                echo "<tr>";
                                echo "<td>".$row['title']."</td>";
                                echo "<td>".$row['category']."</td>";
                                 echo "<td>".
                                    "<a href='topic-details.php?post_Id=$id' class='btn btn-default'>Details</a>"." ".
                                    "<a href='edit-topic.php?post_Id=$id' class='btn btn-default'>Edit</a>"." ".
                                    "<a href='delete-topic.php?post_Id=$id' class='btn btn-default'>Delete</a>"
                                    ."</td>";
                                echo "</tr>";
                            }
                           

                            ?>
                            </table>
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