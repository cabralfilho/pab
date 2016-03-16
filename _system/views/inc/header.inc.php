<div class="container-fluid">
		<div class="row">
			<!-- // MENU INICIO //-->
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="<?= BASE; ?>"><b>DASHBOARD</b></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Posts <span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				            <li><a href="<?= BASE; ?>/posts/publicar">cadastrar post</a></li>
				            <li><a href="<?= BASE; ?>/posts/index">ver posts</a></li>
					</ul>
			        </li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				            <li><a href="<?= BASE; ?>/categorias/publicar">cadastrar categoria</a></li>
				            <li><a href="<?= BASE; ?>/categorias/index">ver categorias</a></li>
				        </ul>
			        </li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Úsuarios <span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				            <li><a href="<?= BASE; ?>/usuarios/cadastrar">Criar úsuario</a></li>
				            <li><a href="<?= BASE; ?>/usuarios/index">ver úsuarios</a></li>
				            
				        </ul>
			        </li>
			      </ul>
			      
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
			<!-- // MENU FIM //-->

			<div class="sidebar-left col-sm-3 column">
				<div class="widget">
					<div class="clearfix"></div>
					<div class="thumb-user admin radius-rounded">
						<img class="radius-rounded" src="http://karencivil.com/wp-content/uploads/2015/10/wiz-khalifa-350x350.jpg">
					</div>
					<div class="user-info">
						<span class="name">Rafael S. Paz</span>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="widget">
					<h2><i class="glyphicon glyphicon-book"></i> posts</h2>
					<ul>
						<li><a href="<?= BASE; ?>/posts/publicar">cadastrar post</a></li>
				        <li><a href="<?= BASE; ?>/posts/index">ver posts</a></li>
					</ul>
				</div>

				<div class="widget">
					<h2><i class="glyphicon glyphicon-user"></i> categorias</h2>
					<ul>
						<li><a href="<?= BASE; ?>/categorias/publicar">cadastrar categoria</a></li>
				        <li><a href="<?= BASE; ?>/categorias/index">ver categorias</a></li>					
				    </ul>
				</div>
					

				<div class="widget">
					<h2><i class="glyphicon glyphicon-tags"></i> Úsuarios</h2>
					<ul>
						<li><a href="<?= BASE; ?>/usuarios/cadastrar">Criar úsuario</a></li>
						<li><a href="<?= BASE; ?>/usuarios/index">ver úsuarios</a></li>      
					</ul>
				</div>

			</div><!--sidebar fim-->
			
			<div class="dashboard col-sm-9 column">
				<header>
					<h2>Publicar postagem</h2>
				</header>