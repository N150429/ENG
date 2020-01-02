<!DOCTYPE html>
<html>

<?php include("includes/navbar.php");?>
  
<div class="container-fluid">
       <div class="row" >
        <div class="col-md-12" style="z-index: -1">
            <div class="rightJS li">
                <div>"Success is not a 'Destination', It is a journey"</div>
            </div>
        </div>
    </div>
<div class="row">
    <br>
      <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12" style="margin-left:0px;">

        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" style="width: 100%;">
            <!-- Slide 1 -->
            <div class="item active">
              <img src="images/3.jpg" alt="">
              <div class="carousel-caption caption-right">
                <h4>Title 1</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <br>
                <a href="#" class="btn btn-info btn-sm">Read more</a>
              </div>
            </div>
            <!-- Slide 2 -->
            <div class="item">
              <img src="images/2.jpg" alt="">
              <div class="carousel-caption caption-left">
                <h4>Title 2</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <br>
                <a href="#" class="btn btn-danger btn-sm">Read more</a>
              </div>
            </div>
            <!-- Slide 3 -->
            <div class="item">
              <img src="images/3.jpg" alt="">
              <div class="carousel-caption">
                <h4>A very long thumbnail title here to fill the space</h4>
                <br>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="fa fa-chevron-left icon-prev"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="fa fa-chevron-right icon-next"></span>
          </a>
        </div>

        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">

            <div  class="panel panel-default">
                <div class="panel-heading" ><strong>Login</strong></div>
                <div class="panel-body">

      <hr />

        <form action="pages/login.php" method="post" role="form">
          
                    <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-user"></span>
              </span>
              <input type="text" class="form-control" name="username" placeholder="User Name" />
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-lock"></span>
              </span>
              <input type="password" name="password" class="form-control" placeholder="Password" />

            </div>

          </div>

          <div class="form-group text-center">
            <button type="submit" name="loginBtn" class="btn btn-success btn-lg">Login</button>
            <a href="forgot_password.php" class="btn btn-link">forget Password</a>
          </div>

        </form>
</div>
    </div>
 </div>

</div>
<hr>
<div class="container-fluid">
<div class="row">
             <div class="col-md-6 col-sm-6 col-lg-6" id="about" style="">
       <div  class="panel panel-default">
                <div class="panel-heading" ><strong>About</strong></div>
                <div class="panel-body">
                <h4>Dear welfares,</h4>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donecr id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
    </div> </div>
 <div class="col-md-6 col-sm-6 col-lg-6" style="">
        <h3>News Updates</h3>
        <div class="panel-group" id="accordion-panel2">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-panel2" href="#collapseOnePanel2">
                  Collapsible Group Item
                </a>
              </h4>
            </div>
            <div id="collapseOnePanel2" class="panel-collapse collapse in">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
              </div>
            </div>
          </div>
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-panel2" href="#collapseTwoPanel2">
                  Collapsible Group Item
                </a>
              </h4>
            </div>
            <div id="collapseTwoPanel2" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
              </div>
            </div>
          </div>
          <div class="panel panel-success">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-panel2" href="#collapseThreePanel2">
                  Collapsible Group Item
                </a>
              </h4>
            </div>
            <div id="collapseThreePanel2" class="panel-collapse collapse">
              <div class="panel-body">
                Aliquam facilisis, orci in vulputate posuere, sapien dolor dapibus orci, vitae venenatis dui elit vitae lorem. Sed porta fermentum felis in molestie. Sed porta fermentum felis in molestie. Sed porta fermentum felis in molestie.
              </div>
            </div>
          </div>
        </div>
      </div>    </div>
 
</div>
</div>


<!--Login and registration-->


<br>

<?php include("includes/footer.php");?>



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

<!--text marquee -->
<script type="text/javascript">
    
    /* Vanilla JS */

var rightJS = {
  init: function(){
    rightJS.Tags = document.querySelectorAll('.rightJS');
    for(var i = 0; i < rightJS.Tags.length; i++){
      rightJS.Tags[i].style.overflow = 'hidden';
    }
    rightJS.Tags = document.querySelectorAll('.rightJS div');
    for(var i = 0; i < rightJS.Tags.length; i++){
      rightJS.Tags[i].style.position = 'relative';
      rightJS.Tags[i].style.right = '-'+rightJS.Tags[i].parentElement.offsetWidth+'px';
    }
    rightJS.loop();
  },
  loop: function(){
    for(var i = 0; i < rightJS.Tags.length; i++){
      var x = parseFloat(rightJS.Tags[i].style.right);
      x ++;
      var W = rightJS.Tags[i].parentElement.offsetWidth;
      var w = rightJS.Tags[i].offsetWidth;
      if((x/100) * W  > w) x = -W;
      rightJS.Tags[i].style.right = x + 'px';
    } 
    requestAnimationFrame(this.loop.bind(this));
  }
};
window.addEventListener('load',rightJS.init);
</script>


</body>
</html>
