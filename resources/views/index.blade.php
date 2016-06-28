<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Dark layout w/sidebar drawer menu</title>
		<meta name="generator" content="Bootply">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
	  	<link rel="stylesheet" href="{{ url('/css/styles.css') }}">	
	</head>
	<body>
	<div class="page-container">
	  
		<!-- top navbar -->
	    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	       <div class="container">
	    	<div class="navbar-header">
	           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
	             <span class="icon-bar"></span>
	             <span class="icon-bar"></span>
	             <span class="icon-bar"></span>
	           </button>
	           
	    	</div>
	       </div>
	    </div>
	      
	    <div class="container">
	        <div class="row row-offcanvas row-offcanvas-left">
	        
	        <!-- sidebar -->
		        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
		            <div data-spy="affix" data-offset-top="45" data-offset-bottom="90">
			            <ul class="nav" id="sidebar-nav">
				            <li><a href="#">О ФОНДЕ</a></li>
				            <li><a href="#section1">АКЦИИ</a></li>
				            <li><a href="#section2">КАК ПОМОЧЪ</a></li>
				            <li><a href="#section3">НУЖНА ПОМОЩЪ</a></li>     
				            <li><a href="#section4">КОНТАКТЫ</a></li>     
			            </ul>
		            </div>
		        </div>
	  	
	        <!-- main area -->
		        <div class="col-xs-12 col-sm-9" data-spy="scroll" data-target="#sidebar-nav">
			        <ul class="rslides">
			          <li><img src="new_images/1.jpg" alt=""></li>
			          <li><img src="new_images/2.jpg" alt=""></li>
			          <li><img src="new_images/3.jpg" alt=""></li>
			        </ul>
		        </div><!-- /.col-xs-12 main -->
	    	</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.page-container-->


	<div id="footer"><!--footer-->
	  	<div class="container">
	      	<div class="row">
	          <ul class="list-unstyled">
	            <li class="col-sm-4 col-xs-6">
	              <a href="#">About</a>
	            </li>
	            <li class="col-sm-4 col-xs-6">
	              <a href="#">Services</a>
	            </li>
	            <li class="col-sm-4 col-xs-6">
	              <a href="#">Studies</a>
	            </li>
	            <li class="col-sm-4 col-xs-6">
	              <a href="#">References</a>
	            </li>
	            <li class="col-sm-4 col-xs-6">
	              <a href="#">Login</a>
	            </li>
	           <li class="col-sm-4 col-xs-6">
	              <a href="#">Press</a>
	            </li>
	            <li class="col-sm-4 col-xs-6">
	              <a href="#">Contact</a>
	            </li>
	            <li class="col-sm-4 col-xs-6">
	              <a href="#">Impressum</a>
	            </li>
	          </ul>
			</div><!--/row-->

	  	</div><!--/container-->
	</div><!--/footer-->

		<!-- script references -->
			<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

			<script src="{{ url('/js/bootstrap.min.js') }}"></script>
	    	<script src="{{ url('/js/scripts.js') }}"></script>
	</body>
</html>