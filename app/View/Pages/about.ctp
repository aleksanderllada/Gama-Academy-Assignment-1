<!DOCTYPE html>
<html>
	<ol class="breadcrumb">
		<li><?php echo $this->Html->link('Home', array('controller' => 'pages')); ?></li>
		<li><?php echo $this->Html->link('Sobre', array('controller' => 'pages', 'action' => 'about')); ?></li>
	</ol>
	<div class="row">
		<div class="col-md-12">
			<div class="framed">
				<legend>Sobre</legend>
				<p>
				Escreveremos aqui sobre nós!
				</p>
			</div>
		</div>
	</div>
</html>