<style type="text/css">
    .ft-nav menu li{
	list-style: none;
	display: inline-block;
    }
    .ft-nav figcaption{
	display: inline-block;
    }
    .ft-nav a{
	color:white;
    }
    .ft-nav a:hover{
	color:whitesmoke;
	text-decoration: none;
    }
</style>
<footer id="footer"> 
    <div class="container-fluid">
	<div class="container">
	    <div class="row" style="margin-top: 20px;margin-bottom: 40px;">
		<div class="col-sm-3">
		    <div style="font-size: 16px;margin-top: 30px;">© Megoll</div>
		    <div style="font-size: 14px;margin-top: 10px;color:#9f9473;">г. Казань</div>
		    <div style="font-size: 14px;margin-top: 10px;color:#9f9473;"></div>
		</div>
		<div class="col-sm-9">
		    <nav class="ft-nav" style="margin-top: 30px;">
		    	<menu>
			    <li>
				<figure>
				    <a href="/">
					<img src="<?php echo IMG;?>footer/svg/books.svg" height="32" alt="">
					<figcaption>О компании</figcaption>
				    </a>
				</figure>
			    </li>
			    <li>
				<figure>
				    <a href="#">
					<img src="<?php echo IMG;?>footer/svg/car.svg" height="32" alt="">
					<figcaption>Наши условия</figcaption>
				    </a>
				</figure>
			    </li>
			    <li>
				<figure>
				    <a href="#">
					<img src="<?php echo IMG;?>footer/svg/architect.svg" height="32" alt="">
					<figcaption>Проекты</figcaption>
				    </a>
				</figure>
			    </li>
			    <li>
				<figure>
				    <a href="#">
					<img src="<?php echo IMG;?>footer/svg/clipboard.svg" height="32" alt="">
					<figcaption>Договора</figcaption>
				    </a>
				</figure>
			    </li>
			    <li>
				<figure>
				    <a href="#">
					<img src="<?php echo IMG;?>footer/svg/gymnast.svg" height="32" alt="">
					<figcaption>Полезное</figcaption>
				    </a>
				</figure>
			    </li>
		    	</menu>
		    </nav>
		</div>
	    </div>
	</div>
    </div>
</footer>
<link href="<?php echo BOOTSTRAP;?>css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo BOOTSTRAP;?>js/bootstrap.min.js"></script>
<?php
    if(isset($css)&&($css!="")){
	for($i=0;$i<count($css);$i++){
	    echo '<link href="'.$css[$i].'" rel="stylesheet">';
	}
    }
    if(isset($load_js)&&($load_js!="")){
	for($i=0;$i<count($load_js);$i++){
	    echo '<script type="text/javascript" src="'.$load_js[$i].'"></script>';
	}
    }
?>
</body>
</html>