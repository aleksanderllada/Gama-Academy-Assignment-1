<div class="row">
	<ol class="breadcrumb">
		<li><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'index'))?></li>
		<li><?php echo $this->Html->link('Interno', array('controller' => 'internal', 'action' => 'index'))?></li>
		<li><?php echo $this->Html->link('Leads', array('controller' => 'register', 'action' => 'index'))?></li>
	</ol>
	
	<div class="row">
		<?php echo $this->element('internalbar', array('active' => 'leads')); ?>
		<div class="col-md-10">
			<div class="framed">
				<legend>Leads</legend>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nome</th>
							<th>E-mail</th>
							<th>IP</th>
							<th>Tipo</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($leads as $lead): ?>
							<tr>
								<td><?php echo $lead['Lead']['name']; ?></td>
								<td><?php echo $lead['Lead']['email']; ?></td>
								<td><?php echo $lead['Lead']['ip']; ?></td>
								<td>B2B</td>
								<td><?php echo $this->Html->link('Remover', 
										array('controller' => 'register', 'action' => 'delete', $lead['Lead']['id']), 
										array('class' => 'button', 'escape' => FALSE, 'confirm' => 'Tem certeza que deseja deletar este lead? Esta ação é irreversível!')); ?></td>
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