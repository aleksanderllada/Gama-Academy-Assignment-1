<div class="row">
	<ol class="breadcrumb">
		<li><?php echo $this->Html->link('Home', array('controller' => 'pages')); ?></li>
		<li><?php echo $this->Html->link('Artigos', array('controller' => 'articles', 'action' => 'articlecategories')); ?></li>
		<li><?php echo $this->Html->link('Categorias', array('controller' => 'articles', 'action' => 'articlecategories')); ?></li>
	</ol>
	<div class="row">
		<?php echo $this->element('internalbar', array('active' => 'articles', 'action' => 'articlecategories')); ?>
		<div class="col-md-10">
			<div class="framed">
				<legend>Categorias</legend>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Descrição</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($articleCategories as $articleCategory): ?>
							<tr>
								<td><?php echo $articleCategory['ArticleCategory']['name']?></td>
								<td><?php echo $articleCategory['ArticleCategory']['description']; ?></td>
								<td><?php echo 
								$this->Html->link('Editar', array('controller' => 'articles', 'action' => 'editarticlecategory', $articleCategory['ArticleCategory']['id']), array('class' => 'button')).
								$this->Html->link('Remover', array('controller' => 'articles', 'action' => 'deletearticlecategory', $articleCategory['ArticleCategory']['id']), array('class' => 'button')); ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>