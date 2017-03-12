<?php
$articles = 'list-group-item';
if($active == 'articles') {
	$articles .= ' active';
}

$newarticle = 'list-group-item';
$articlecategories = 'list-group-item';
$newarticlecategory = 'list-group-item';
if($action == 'addarticle') {
	$newarticle .= ' active';
} else if($action == 'articlecategories') {
	$articlecategories .= ' active';
} else if($action == 'newarticlecategory') {
	$newarticlecategory .= ' active';
}
?>

<div class="col-xs-2 col-sm-2 sidebar-offcanvas" id="sidebar">
	<div class="framed">

		<legend>Administração</legend>
		<div class="list-group">
			<?php echo $this->Html->link('Blog', array('controller' => 'articles', 'action' => 'articlecategories'), array('class' => $articles))?>
			<?php echo $this->Html->link('Usuários', array('controller' => 'users', 'action' => 'index'), array('class' => 'list-group-item'));?>
		</div>
		
		<?php if($active == 'articles'): ?>
			<legend>Ações</legend>
			<div class="sidebar-offcanvas" id="sidebar">
				<div class="list-group">
					<?php echo $this->Html->link('Listar Categorias', array('controller' => 'articles', 'action' => 'articlecategories'), array('class' => $articlecategories))?>
					<?php echo $this->Html->link('Nova Categoria', array('controller' => 'articles', 'action' => 'newarticlecategory'), array('class' => $newarticlecategory))?>
					<?php echo $this->Html->link('Novo Artigo', array('controller' => 'articles', 'action' => 'addarticle'), array('class' => $newarticle))?>
				</div>
			</div>
		<?php endif; ?>
		
	</div>
</div>
