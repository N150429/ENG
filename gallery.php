<!DOCTYPE html>
<html>
<head>
  <title>English</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/logo.png">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="bootstrap/css/customStyle.css"> 

 <style type="text/css">
 .thumbnail {margin-bottom:6px;}

.carousel-control.left,.carousel-control.right{
  background-image:none;
  margin-top:10%;
  width:5%;
}

.flex {
  display: flex;
  flex-wrap: wrap;
}
</style>
</head>
<body>
<?php include("includes/navbar.php");?>
    

<div class="container">
    <h1>Gallery</h1>
        <hr>
    
    <div class="row flex">
      			
      			<div class="col-12 col-md-4 col-sm-6 ">
					<a title="Image 1" href="#"> 
						<img class="thumbnail img-responsive" id="image-1" src="images/1.jpg">
					</a>
					<p>raju rajuraju rajuraju rajuraju rajuraju rajuraju raju rajuraju rajuraju rajuraju rajuraju rajuraju rajuraju rajuraju rajuraju rajuraju rajuraju raju</p>
				</div>
      
				<div class="col-12 col-md-4 col-sm-6">
					<a title="Image 2" href="#"> 
						<img class="thumbnail img-responsive" id="image-2" src="images/2.jpg">
					</a>

				</div>
				<div class="col-12 col-md-4 col-sm-6 col-md-offset-0">
					<a title="Image 3" href="#"> 
						<img class="thumbnail img-responsive" id="image-3" src="images/3.jpg">
					</a>
				</div>

				<br>
      			<div class="col-12 col-md-4 col-sm-6">
					<a title="Image 1" href="#"> 
						<img class="thumbnail img-responsive" id="image-1" src="images/1.jpg">
					</a>
					<p>raju rajuraju rajuraju rajuraju rajuraju rajuraju raju rajuraju rajuraju rajuraju rajuraju rajuraju rajuraju rajuraju rajuraju rajuraju rajuraju raju</p>
				</div>
      
				<div class="col-12 col-md-4 col-sm-6">
					<a title="Image 2" href="#"> 
						<img class="thumbnail img-responsive" id="image-2" src="images/2.jpg">
					</a>

				</div>
				<div class="col-12 col-md-4 col-sm-6">
					<a title="Image 3" href="#"> 
						<img class="thumbnail img-responsive" id="image-3" src="images/3.jpg">
					</a>
				</div>

    </div>
    
    <hr>
    
  
</div>

	<div class="hidden" id="img-repo">
		
		<!-- #image-1 -->
		<div class="item" id="image-1">
			<img class="thumbnail img-responsive" title="Image 11" src="images/1.jpg">
		</div>
		  
		<!-- #image-2 -->
		<div class="item" id="image-2">
			<img class="thumbnail img-responsive" title="Image 21" src="http://dummyimage.com/600x350/2255EE/969696">
		</div>
		<div class="item" id="image-2">
			<img class="thumbnail img-responsive" title="Image 21" src="http://dummyimage.com/600x600/2255EE/969696">
		</div>
		<div class="item" id="image-2">
			<img class="thumbnail img-responsive" title="Image 23" src="http://dummyimage.com/300x300/2255EE/969696">
		</div>   
      
		<!-- #image-3-->
		<div class="item" id="image-3">
			<img class="thumbnail img-responsive" title="Image 31" src="http://dummyimage.com/600x350/449955/FFF">
		</div>
		<div class="item" id="image-3">
			<img class="thumbnail img-responsive" title="Image 32" src="http://dummyimage.com/600x600/449955/FFF">
		</div>
		<div class="item" id="image-3">
			<img class="thumbnail img-responsive" title="Image 33" src="http://dummyimage.com/300x300/449955/FFF">
		</div>        
		
	</div>

<div class="modal" id="modal-gallery" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">×</button>
          <h3 class="modal-title"></h3>
      </div>
      <div class="modal-body">
          <div id="modal-carousel" class="carousel">
   
            <div class="carousel-inner">           
            </div>
            
            <a class="carousel-control left" href="#modal-carousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="carousel-control right" href="#modal-carousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            
          </div>
      </div>
      <div class="modal-footer">
          <button class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <?php include("includes/footer.php"); ?>


</body>
</html>
<!--code for sticky fixed navabar-->
<script type="text/javascript">
// can play with the offset value to get the smooth <results you are looking for.
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
<!-- js code for gallery -->
<script type="text/javascript">
	$(document).ready(function() {
        
   /* activate the carousel */
   $("#modal-carousel").carousel({interval:false});

   /* change modal title when slide changes */
   $("#modal-carousel").on("slid.bs.carousel",       function () {
        $(".modal-title")
        .html($(this)
        .find(".active img")
        .attr("title"));
   });

   /* when clicking a thumbnail */
   $(".row .thumbnail").click(function(){
    var content = $(".carousel-inner");
    var title = $(".modal-title");
  
    content.empty();  
    title.empty();
  
  	var id = this.id;  
     var repo = $("#img-repo .item");
     var repoCopy = repo.filter("#" + id).clone();
     var active = repoCopy.first();
  
    active.addClass("active");
    title.html(active.find("img").attr("title"));
  	content.append(repoCopy);

    // show the modal
  	$("#modal-gallery").modal("show");
  });

});
</script>


</body>
</html>
