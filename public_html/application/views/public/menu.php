<body>
    <header>
	<nav class="navbar navbar-default navbar-fixed-top">
	    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="/">Megoll</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav">
			<?php
			    if(stristr($str, "seo")){
				echo '<li class="active"><a href="/seo">Seo <span class="sr-only">(current)</span></a></li>';
			    }else{
				echo '<li><a href="/seo">Seo</a></li>';
			    }
			    if(stristr($str, "razrabotka-mobilnogo-prilozheniya")){
				echo '<li class="active"><a href="/razrabotka-mobilnogo-prilozheniya">Мобильные приложения <span class="sr-only">(current)</span></a></li>';
			    }else{
				echo '<li><a href="/razrabotka-mobilnogo-prilozheniya">Мобильные приложения</a></li>';
			    }
			?>
			<li><a href="#">Контекстная реклама</a></li>
			<li><a href="#">Сайты</a></li>
			<li><a href="#">Наши проекты</a></li>
		    </ul>
		</div><!-- /.navbar-collapse -->
	    </div><!-- /.container-fluid -->
	</nav>
    </header>

