<div class="row">
	<ol class="breadcrumb">
		<li><?php echo $this->Html->link('Home', array('controller' => 'pages')); ?></li>
		<li><?php echo $this->Html->link('Artigos', array('controller' => 'articles', 'action' => 'articlecategories')); ?></li>
		<li><?php echo $this->Html->link('Nova Categoria', array('controller' => 'articles', 'action' => 'newarticlecategory')); ?></li>
	</ol>
	<div class="row">
		<?php echo $this->element('internalbar', array('active' => 'articles', 'action' => 'newarticlecategory')); ?>
		<div class="col-md-10">
			<div class="framed">
				<?php echo $this->Form->create('ArticleCategory'); ?>
				<fieldset>
					<legend>Nova Categoria</legend>
					<div class="row">
						<div class="form-group col-md-5">
							<?php echo $this->Form->input('name', array('label' => 'Nome', 'class' => 'form-control', 'type' => 'text')); ?>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<?php echo $this->Form->input('description', array('label' => 'Descrição', 'class' => 'form-control'));?>
						</div>
					</div>
					<?php echo $this->Form->button('Salvar', array('type' => 'submit', 'class' => 'btn btn-primary pull-right'));?>
					<?php echo $this->Form->end(); ?>
				</fieldset>
			</div>
		</div>
	</div>
</div>