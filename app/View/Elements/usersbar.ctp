<?php 
$add = 'list-group-item';
$list = 'list-group-item';
if($active == 'add') {
	$add .= ' active';
} else if($active == 'list') {
	$list .= ' active';
}
?>

<div class="col-xs-2 col-sm-2 sidebar-offcanvas" id="sidebar">
	<legend>Administração</legend>
	<div class="list-group">
		<?php echo $this->Html->link('Blog', array('controller' => 'articles', 'action' => 'articlecategories'), array('class' => 'list-group-item'))?>
		<?php echo $this->Html->link('Usuários', array('controller' => 'users', 'action' => 'index'), array('class' => 'list-group-item active'));?>
	</div>

	<legend>Ações</legend>
	<div class="list-group">
	<?php echo $this->Html->link('Listar Usuários', array('controller' => 'users', 'action' => 'index'), array('class' => $list))?>
	<?php echo $this->Html->link('Novo Usuário', array('controller' => 'users', 'action' => 'add'), array('class' => $add))?>
	</div>
</div>