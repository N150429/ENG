<!DOCTYPE html>
<html>
<head>
  <title>English</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="images/logo.png">

    
<link rel="stylesheet" href="bootstrap/css/jquery.dataTables.min.css">

   <style type="text/css">

   td a {
    color:#385bfa;
    text-decoration: none;
   }
   td a:hover {
    text-decoration: none;
    color:#044b30;
   }
   td a:link {
    text-decoration: none;
   }
   td a:visited {
    text-decoration: none;
   }
   table {
  border-collapse: separate;
  border-spacing: 0;
  color: #4a4a4d;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
}
th,
td {
    content: justify;
  padding: 15px 15px;
  vertical-align: middle;
}
thead {
  background: #395870;
  background: linear-gradient(#2e92bd, #17a995);
  color: #fff;
  font-size: 11px;
  text-transform: uppercase;
}
th:first-child {
  border-top-left-radius: 5px;
  text-align: left;
}
th:last-child {
  border-top-right-radius: 5px;
}
tbody tr:nth-child(even) {
  background: #f0f0f2;
}
td {
  border-bottom: 1px solid #cecfd5;
  border-right: 1px solid #cecfd5;
}
td:first-child {
  border-left: 1px solid #cecfd5;
}



   </style>

 
</head>
<body>
<?php include("includes/navbar.php");?>
<div class="container">
  <br>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">  
    <h4 style="text-align: center;font-size: 35px;font-weight: bold;">Notifications</h4>
<table id="example" class="table-bordered table-striped table-condensed">
      
        <thead>
            <tr>
                <th width="10px;">S.No</th>
                <th style="text-align: center;">Notification</th>
                <th width="20px">Post_By</th>
                <th width="20px">Posted_Date</th>
                <th width="10px">Views</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><a href="#myModal" data-toggle="modal" >System Architect</a></td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>$320,800</td>
                <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content project-details-popup">
       <div class="modal-header">
            <h4>Notification</h4>
      </div>
      <div class="modal-body">
          <h3>About popup</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
          <br>
          <a href="#" class="btn btn-success fa fa-download">Attachment</a>

       </div>
      <div class="modal-footer">  
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

            </tr>

        </tbody>
    </table>
</div>
</div>
</div>


<!-- Modal -->
<br>
<?php include("includes/footer.php");?>
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
    <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
    </script>
  <script type="text/javascript" src="bootstrap/js/jquery.dataTables.min.js"></script>

     </body>
    </html>