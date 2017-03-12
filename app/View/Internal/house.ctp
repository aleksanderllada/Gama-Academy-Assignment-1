<div class="row">
	<ol class="breadcrumb">
		<li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages')); ?></li>
		<li><?php echo $this->Html->link(__('Internal'), array('controller' => 'internal', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('House'), array('controller' => 'internal', 'action' => 'house')); ?></li>
	</ol>
	<div class="row">
		<?php echo $this->element('internalbar', array('active' => 'house', 'action' => '')); ?>
		<div class="col-md-10">
			
		</div>
	</div>
</div>