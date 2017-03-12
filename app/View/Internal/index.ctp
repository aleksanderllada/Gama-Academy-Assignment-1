<div class="row">
	<ol class="breadcrumb">
		<li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages')); ?></li>
		<li><?php echo $this->Html->link(__('Internal'), array('controller' => 'internal')); ?></li>
	</ol>
	<div class="row">
		<?php echo $this->element('internalbar', array('active' => '', 'action' => '')); ?>
		<div class="col-md-10">
			
		</div>
	</div>
</div>

<!-- 
<div class="col-md-1">
		<?php echo $this->Html->link(
						    '<span class="glyphicon glyphicon-pencil"></span>',
						    array('controller' => 'books', 'action' => 'edit'),
						    array('escape' => FALSE)
						); ?>
	</div>
-->