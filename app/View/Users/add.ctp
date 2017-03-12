<div class="row">
	<ol class="breadcrumb">
		<li><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'index'))?></li>
		<li><?php echo $this->Html->link('Interno', array('controller' => 'internal', 'action' => 'index'))?></li>
		<li><?php echo $this->Html->link('Usuários', array('controller' => 'users', 'action' => 'index'))?></li>
		<li><?php echo $this->Html->link('Novo Usuário', array('controller' => 'users', 'action' => 'add'))?></li>
	</ol>
	
	<div class="row">
		<?php echo $this->element('usersbar', array('active' => 'add')); ?>
		<div class="col-md-10">
			<div class="framed">
				<?php echo $this->Form->create('User');?>
				<legend>Criar Usuário</legend>
				<fieldset>
					<div class="row">
						<div class="form-group col-md-6">
							<?php echo $this->Form->input('name', array('id' => 'inputName', 'type' => 'text', 'label' => 'Nome', 'class' => 'form-control', 'placeholder' => 'Insira o nome do usuário.'));?>
						</div>
						<div class="form-group col-md-6">
							<?php echo $this->Form->input('email', array('id' => 'inputEmail', 'type' => 'text', 'label' => 'E-mail', 'class' => 'form-control', 'placeholder' => 'Insira o e-mail do usuário.'));?>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<?php echo $this->Form->input('username', array('id' => 'inputUser', 'type' => 'text', 'label' => 'Login', 'class' => 'form-control', 'placeholder' => 'Insira o login do usuário.'));?>
						</div>
						<div class="form-group col-md-6">
							<?php echo $this->Form->input('password', array('id' => 'inputPassword', 'type' => 'password', 'label' => 'Senha', 'class' => 'form-control', 'placeholder' => 'Insira uma senha.'));?>
						</div>
					</div>
					<?php echo $this->Form->button('Criar', array('type' => 'submit', 'class' => 'btn btn-primary pull-right'));?>
	    		</fieldset>
	    	</div>
		</div>
	</div>
</div>
