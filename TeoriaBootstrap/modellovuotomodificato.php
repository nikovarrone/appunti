<!DOCTYPE html>
<html>
<head>
<title>Bootstrap 101 Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the pagevia file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
<body>
<?php
 echo("hello world!")
?>
<h1>Hello, world!</h1>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<div style="padding: 100px 100px 10px;"> 
   <form class="bs-example bs-example-form" role="form"> 
      <div class="row"> 
         <div class="col-lg-6"> 
            <div class="input-group"> 
               <div class="input-group-btn"> 
                  <button type="button" class="btn btn-default"  
                     tabindex="-1">Dropdwon Menu 
                  </button> 
                  <button type="button" class="btn btn-default  
                     dropdown-toggle" data-toggle="dropdown" tabindex="-1"> 
                     <span class="caret"></span> 
                     <span class="sr-only">Toggle Dropdown</span> 
                  </button> 
                  <ul class="dropdown-menu"> 
                     <li><a href="#">Action</a></li> 
                     <li><a href="#">Another action</a></li> 
                     <li><a href="#">Something else here</a></li> 
                     <li class="divider"></li> 
                     <li><a href="#">Separated link</a></li> 
                  </ul> 
               </div><!-- /btn-group --> 
               <input type="text" class="form-control"> 
            </div><!-- /input-group --> 
         </div><!-- /.col-lg-6 --><br> 
         <div class="col-lg-6"> 
            <div class="input-group"> 
               <input type="text" class="form-control"> 
               <div class="input-group-btn"> 
                  <button type="button" class="btn btn-default"  
                     tabindex="-1">Dropdwon Menu 
                  </button> 
                  <button type="button" class="btn btn-default  
                     dropdown-toggle" data-toggle="dropdown" tabindex="-1"> 
                     <span class="caret"></span> 
                     <span class="sr-only">Toggle Dropdown</span> 
                  </button> 
                  <ul class="dropdown-menu pull-right"> 
                     <li><a href="#">Action</a></li> 
                     <li><a href="#">Another action</a></li> 
                     <li><a href="#">Something else here</a></li> 
                     <li class="divider"></li> 
                     <li><a href="#">Separated link</a></li> 
                  </ul> 
               </div><!-- /btn-group --> 
            </div><!-- /input-group --> 
         </div><!-- /.col-lg-6 --> 
      </div><!-- /.row --> 
   </form> 
</div>
</body>
</html>