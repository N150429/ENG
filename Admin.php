<?php include 'upload.php';?>
    <?php include("includes/navbar.php");?>
    <div class="container">
      <br>
      <div class="row">
      

          <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
          <div class="panel panel-info panel-shadow">
          <div class="panel-heading">Send Notifications </div>
          <div class="panel-body">
            <form action="upload.php" method="POST" enctype="multipart/form-data"> 
                  <div class="form-group">
                   <label for="comment">Title:</label>
                   <input  type="text" name="title" class="form-control" required="">
                  </div>
                  <div class="form-group">
                   <label for="comment">Description:</label>
                   <textarea class="form-control" name="desc" rows="5" id="comment"></textarea>
                  </div>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="files" class="btn btn-success" id="inputGroupFile01" aria-describedby="inputGroupFileAddon">
                      </div>
                  </div>
                  <div class="form-group">
                    <br>

                  <button type="submit" name="notice" class="btn btn-primary" require="">Send</button>
                  </div>

                                 </form>
          </div>
        </div>    
      </div>

        <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
            <div class="panel panel-success panel-shadow">
          <div class="panel-heading">Upload Images Files</div>
          <div class="panel-body">

        <form action="admin.php" method="post" enctype="multipart/form-data" >
          
      <input type="file" name="myfile" class="btn btn-success" id="inputGroupFile01" aria-describedby="inputGroupFileAddon"> 
        <br>
          <button type="submit" class="btn btn-primary" name="image" require="">upload</button>
        </form>
          </div>
        </div>    
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
            <div class="panel panel-info panel-shadow">
          <div class="panel-heading">Upload Audios Files</div>
          <div class="panel-body">
        <form action="Admin.php" method="post" enctype="multipart/form-data" >
          
                          <input type="file" name="myfile" class="btn btn-success" id="inputGroupFile01" aria-describedby="inputGroupFileAddon">  
                          <br>
                              <button type="submit" class="btn btn-primary" name="audio">upload</button>
        </form>
      </div>
        </div>    
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
            <div class="panel panel-warning panel-shadow">
          <div class="panel-heading">Upload Videos Files</div>
          <div class="panel-body">
        <form action="Admin.php" method="post" enctype="multipart/form-data" >
    <input type="file" name="myfile" class="btn btn-success" id="inputGroupFile01" aria-describedby="inputGroupFileAddon">  
                        <br>
                                  <button type="submit" class="btn btn-primary" name="video">upload</button>
        </form>
      </div>
        </div>    
      </div>
      



    </div>
  </div>
        
    
<br>
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
<?php echo $_SERVER['REMOTE_ADDR']; ?>