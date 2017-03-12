<div class="row">
	<ol class="breadcrumb">
		<li><?php echo $this->Html->link('Home', array('controller' => 'pages')); ?></li>
		<li><?php echo $this->Html->link('Blog', array('controller' => 'articles', 'action' => 'articlecategories')); ?></li>
		<li><?php echo $this->Html->link('Novo Artigo', array('controller' => 'articles', 'action' => 'addarticle')); ?></li>
	</ol>
	<div class="row">
		<div class="col-md-12">
			<div class="framed">
				<?php echo $this->Form->create('Article'); ?>
				<fieldset>
					<legend>Novo Artigo</legend>
					<div class="row">
						<div class="form-group col-md-3">
							<?php echo $this->Form->input('article_category_id', array('label' => 'Categoria', 'class' => 'form-control', 'value' => $articleCategories));?>
						</div>
						<div class="form-group col-md-5">
							<?php echo $this->Form->input('title', array('label' => 'Título', 'class' => 'form-control', 'type' => 'text')); ?>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<?php echo $this->Form->input('text', array('label' => 'Texto', 'class' => 'form-control'));?>
						</div>
					</div>
					<?php echo $this->Form->button('Publicar', array('type' => 'submit', 'class' => 'btn btn-primary pull-right'));?>
					<?php echo $this->Form->end(); ?>
				</fieldset>
			</div>
		</div>
	</div>
</div>