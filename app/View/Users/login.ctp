<!-- app/View/Users/add.ctp -->
<div class="users form">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="framed">
				<?php echo $this->Form->create('User');?>
				<fieldset>
					<legend><?php echo __('Login'); ?></legend>
					<div class="form-group">
						<?php echo $this->Form->input('username', array('id' => 'inputEmail', 'type' => 'text', 'label' => __('User'), 'class' => 'form-control', 'placeholder' => __('Insert your username.')));?>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('password', array('id' => 'inputPassword', 'type' => 'password', 'label' => __('Password'), 'class' => 'form-control', 'placeholder' => __('Insert your password.')));?>
					</div>
					<?php echo $this->Form->button(__('Enter'), array('type' => 'submit', 'class' => 'btn btn-primary btn-block'));?>
			    </fieldset>
			</div>
		</div>
	</div>
</div>