<style>
	.navbar-brand {
		padding: 0;
	}
	
	.navbar-brand img {
		transform: rotate(25deg);
	}
	
	.navbar-custom .navbar-nav>li>a:hover {
		background-color: #cc0000;
	}
</style>
<div class="navbar navbar-custom navbar-fixed-top">
	<!-- style="position: fixed; top: 1px; left: 1px; right: 1px; z-index:1030; -->
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="/">
				<?php echo $this->Html->image('logo_club_4.png', array('height' => '60px', 'max-width'=> '150px')); ?>
			</a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- <div class="collapse navbar-collapse" style="padding-top: 10px; float: left; margin-left: 10%; width: 40%">
			<div><i class=""></i><input type="text" class="form-control" placeholder="Quer desconto de verdade?" style="width:100%;" /></div>

		</div> -->
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li <?php echo (!empty($this->params['pass'][0]) && $this->params['pass'][0] == 'home') ? 'class="active"' : '' ?>>
					<?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'index'))?>
				</li>
				<li <?php echo ($this->params['controller'] == 'articles') ? 'class="active"' : '' ?>>
					<?php echo $this->Html->link('Blog', array('controller' => 'articles', 'action' => 'index'))?>
				</li>
				<li <?php echo (!empty($this->params['pass'][0]) && $this->params['pass'][0] == 'about') ? 'class="active"' : '' ?>>
					<?php echo $this->Html->link(__('About'), array('controller' => 'pages', 'action' => 'about'))?>
				</li>
				<?php //if($isMaster): ?>
				<li <?php echo ($this->params['controller'] == 'internal' || $this->params['controller'] == 'users') ? 'class="active"' : '' ?>>
					<?php echo $this->Html->link('Interno', array('controller' => 'internal', 'action' => 'index'))?>
				</li>
				<?php //endif;?>
			</ul>
			<?php if(!empty($user)): ?>
			<?php $button = $this->Form->button('Logout', array('type' => 'submit', 'class' => 'btn btn-primary pull-right', 'style' => 'margin-top: 8px;')); ?>
			<?php echo $this->Html->link($button, array('controller' => 'users', 'action' => 'logout'), array('escape' => false))?>
			<?php endif;?>
		</div>
		<!--/.nav-collapse -->
	</div>
</div>