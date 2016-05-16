<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""><!--<![endif]-->

<head>
	<?php include('inc/meta.php'); ?>
	<title>Keith Bootstrap 1 Test 2</title>
</head>
<!-- test comment -->
<!-- and another change -->
<body>

	<?php include('inc/nav.php'); ?>
	<?php include('inc/header.php'); ?>

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			<h1>Jumbotron</h1>
			<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
		</div>
	</div>
	
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Library</a></li>
			<li class="active">Data</li>
		</ol>
	</div>

	<div class="container"> 
	
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-md-4">
				<h2>Article 1</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
			</div>
			<div class="col-md-4">
				<h2>Article 2</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
			</div>
			<div class="col-md-4">
				<h2>Article 3</h2>
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
			</div>
		</div>
	
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<img src="http://placehold.it/1920x1080">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<img src="http://placehold.it/1920x1080">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<img src="http://placehold.it/1920x1080">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<img src="http://placehold.it/1920x1080">
				</a>
			</div>
		</div>
		
	</div><!-- /container --> 
		
	<div class="container">
	
		<div class="row">
					
			<div class="col-md-12">
			
				<div class="content-wrap contact-wrap white-text">
					<h1>Contact us</h1>
					<p class="small">*Please complete all fields marked with an asterisk.</p>
				</div>
			
				<form role="form" class="form-contact white-text row" name="contact" id="contact" method="post">
                
					<input type="hidden" id="item1" name="item1" title="do not enter text here!">
					<input type="hidden" id="item2" name="item2" value="e4$5T" title="do not edit text here!">
					<input type="hidden" id="subject" name="subject" value="Contact from website">
						
					<div class="form-group col-md-12">
						<label for="company" class="sr-only">Company</label>
						<input type="text" class="form-control" id="company" name="company" placeholder="Company">
					</div>
					
					<div class="form-group col-md-6">
						<label for="firstName" class="sr-only">First name</label>
						<input type="text" class="form-control" id="firstName" name="firstname" placeholder="First name">
					</div>
					
					<div class="form-group col-md-6">
						<label for="lastName" class="sr-only">Last name</label>
						<input type="text" class="form-control" id="lastName" name="lastname" placeholder="Last name">
					</div>
					
					<div class="clear"></div>
					
					<div class="form-group col-md-12">
						<label for="email" class="sr-only">Email address*</label>
						<input type="email" class="form-control required" id="email" name="email" placeholder="Email*">
					</div>
					
					<div class="form-group col-md-12">
						<textarea class="form-control required" rows="3" name="message" id="message" placeholder="Message*" maxlength="500"></textarea>
						<i class="fa fa-pencil"></i>
                        <div id="message-counter" class="counter"></div>
					</div>
					
					<div class="form-group col-md-12">
						<button type="submit" id="submit" class="btn btn-primary btn btn-white">Submit</button>
					</div>
                    
					<div id="messageBox1"></div>
					
				</form>
			
			</div>
				
		</div>
	
	</div>

	<?php include('inc/footer.php'); ?>
	<?php include('js/js.php'); ?>

</body>
</html>
