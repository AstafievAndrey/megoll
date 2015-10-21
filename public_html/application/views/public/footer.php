<footer style=""> 
    <div class="container-fluid">
	<div class="container">
	    <div class="row" style="margin-top: 20px;margin-bottom: 40px;">
		<div class="col-sm-3">
		    <div style="font-size: 16px;margin-top: 30px;">© Мебельный базар</div>
		    <div style="font-size: 14px;margin-top: 10px;color:#9f9473;">г. Казань ул. Галиаскара Камала 37</div>
		    <div style="font-size: 14px;margin-top: 10px;color:#9f9473;">09:00-21:00</div>
		</div>
		<div class="col-sm-9">
		    <nav class="ft-nav" style="margin-top: 30px;">
		    	<menu>
			    <li>
				<figure>
				    <a href="/">
					<img src="<?php echo IMG;?>icons-nav/1.png" alt="">
					<figcaption>О компании</figcaption>
				    </a>
				</figure>
			    </li>
			    <li>
				<figure>
				    <a href="#">
					<img src="<?php echo IMG;?>icons-nav/2.png" alt="">
					<figcaption>Доставка</figcaption>
				    </a>
				</figure>
			    </li>
			    <li>
				<figure>
				    <a href="#">
					<img src="<?php echo IMG;?>icons-nav/3.png" alt="">
					<figcaption>Кредит</figcaption>
				    </a>
				</figure>
			    </li>
			    <li>
				<figure>
				    <a href="#">
					<img src="<?php echo IMG;?>icons-nav/1.png" alt="">
					<figcaption>Арендаторам</figcaption>
				    </a>
				</figure>
			    </li>
			    <li>
				<figure>
				    <a href="/akcii_mebelnogo_bazara">
					<img src="<?php echo IMG;?>icons-nav/2.png" alt="">
					<figcaption>Акции</figcaption>
				    </a>
				</figure>
			    </li>
			    <li>
				<figure>
				    <a href="#">
					<img src="<?php echo IMG;?>icons-nav/3.png" alt="">
					<figcaption>Контакты</figcaption>
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
<link href="<?php echo CSS;?>style.css" rel="stylesheet">
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