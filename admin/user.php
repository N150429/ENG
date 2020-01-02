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

<?php include('../includes/navbar3.php') ?>    <div class="container" style="margin:8% auto;width:900px;">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Users</h3>
                </div> 
                 <div class="panel-body">
            <table class="table table-stripped">
                                <th>Username</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Actions</th>
                            <?php
                            
                            include "../functions/db.php";

                            $sql = "SELECT * from tbluser as tu join tblaccount as ta on tu.user_Id=ta.user_Id";
                            $run = mysqli_query($con,$sql);

                            while($row=mysqli_fetch_array($run))
                            {
                                extract($row);
                                echo "<tr>";
                                echo "<td>".$username."</td>";
                                echo "<td>".$fname.' '.$lname."</td>";
                                echo "<td>".$gender."</td>";
                                echo '<td><button class="btn btn-danger" onclick="deleteuser('.$user_Id.')">Delete</button>';
                                echo "</tr>";
                            }
                           

                            ?>
                            </table>
                     </div>
                </div>

            </div>
            <script type="text/javascript">

            function deleteuser(user_Id){
                var datastring = 'action=deleteuser&user_Id='+user_Id;
                var con = confirm("Are you sure you want to delete?");
                if(con==true){
                    $.ajax({
                    type: "POST",
                    url: "functions/crud.php",
                    data: datastring,
                    success: function(result){
                        if(result=="success"){
                            window.location.href="user.php";
                        }
                        else{
                            alert("Failed to delete");
                        }
                    }
                });
                }
                
                return false;
            }

            </script>


        
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

</html>