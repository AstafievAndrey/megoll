<!DOCTYPE html>
<html lang="ru">
    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?php echo $title;?></title>
	<meta name="description" content="<?php echo $desc;?>" />
	<!-- Bootstrap -->
	<link href="<?php echo BOOTSTRAP;?>css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo IMG;?>favicon.png" type="image/png">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo BOOTSTRAP;?>js/bootstrap.min.js"></script>    
	<link href="<?php echo CSS;?>style.css" rel="stylesheet">
	<?php
	    if(isset($desc)&&($desc!="")){
		echo '<meta name="description" content="'.$desc.'" />';
	    }
	    if(isset($css)&&($css!="")){
		for($i=0;$i<count($css);$i++){
		    echo '<link href="'.CSS.$css[$i].'" rel="stylesheet">';
		}
	    }
	    if(isset($load_js)&&($load_js!="")){
		for($i=0;$i<count($load_js);$i++){
		    echo '<script type="text/javascript" src="'.$load_js[$i].'"></script>';
		}
	    }
	?>
	
    </head>