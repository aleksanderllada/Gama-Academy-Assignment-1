<div class="row">
	<ol class="breadcrumb">
		<li><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'index'))?></li>
		<li><?php echo $this->Html->link('Interno', array('controller' => 'internal', 'action' => 'index'))?></li>
		<li><?php echo $this->Html->link('Usuários', array('controller' => 'users', 'action' => 'index'))?></li>
	</ol>
	
	<div class="row">
		<?php echo $this->element('usersbar', array('active' => 'list')); ?>
		<div class="col-md-10">
			<div class="framed">
				<legend>Usuários</legend>
				<p> Não preciso falar né? Não removam todos os usuários! </p>
				<p> A prevenção de cagadas ainda não está implementada. :-) </p>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nome</th>
							<th>E-mail</th>
							<th>Login</th>
							<th>Tipo</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($users as $user): ?>
							<tr>
								<td><?php echo $user['User']['name']; ?></td>
								<td><?php echo $user['User']['email']; ?></td>
								<td><?php echo $user['User']['username']; ?></td>
								<td><?php echo $user['User']['role']; ?></td>
								<td><?php echo $this->Html->link('Remover', 
										array('controller' => 'users', 'action' => 'delete', $user['User']['id']), 
										array('class' => 'button', 'escape' => FALSE, 'confirm' => 'Tem certeza que deseja deletar este usuário? Esta ação é irreversível!')); ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<?php
				echo $this->Paginator->numbers(array(
				    'before' => '<ul class="pagination">',
				    'separator' => '',
					'currentTag' => 'a',
				    'currentClass' => 'active',
				    'tag' => 'li',
				    'after' => '</ul>'
				));
				?>
			</div>
		</div>
	</div>
</div>