<!DOCTYPE html>
<html>
<head>
  <title>English</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/logo.png">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="bootstrap/css/customStyle.css"> 
  </style>
</head>
<body>
<?php include("includes/navbar.php");?>

<div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12">
            <p class="lead text-muted">English Content</p>
            <div class="tabbable">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab11" data-toggle="tab">Audio Files</a></li>
                <li><a href="#tab12" data-toggle="tab">Video Files</a></li>
                 <li><a href="#tab13" data-toggle="tab">Files</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab11">
                  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>
                    <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>  <p>I'm in Section 1. Donec vulputate tristique elit ut molestie. Suspendisse faucibus bibendum ipsum. </p>v
                </div>

                <div class="tab-pane" id="tab12">
                  <p>Howdy, I'm in Section 2.Morbi vel nibh et arcu pretium adipiscing. Ut vestibulum est eget justo facilisis ullamcorper. </p>
                
                  <br><br><br><br><br>
                </div>

                <div class="tab-pane" id="tab13">
                  <p>Howdy,rbi vel nibh et arcu pretium adipiscing. Ut vestibulum est eget justo facilisis ullamcorper. </p>
                
                  <br><br><br><br><br>
                </div>
              </div>
            </div>
          </div>
            </div>
          </div>
     

        </div>
      </div>

      <?php include("includes/footer.php"); ?>
</body>
</html>
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
