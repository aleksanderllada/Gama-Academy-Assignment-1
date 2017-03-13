<!DOCTYPE html>
<html>
	<ol class="breadcrumb">
		<li><?php echo $this->Html->link('Home', array('controller' => 'pages')); ?></li>
		<li><?php echo $this->Html->link('Artigos', array('controller' => 'articles')); ?></li>
	</ol>
	
	<div class="row">
		<div class="col-md-2">
			<div class="framed">
				<legend>Filtrar por</legend>
				<div class="btn-group">
					<button type="button" onclick="showCategories()" class="btn btn-default">Categoria</button>
					<button type="button" onclick="showTime()" class="btn btn-default">Data</button>
				</div>
				
				<div class="row" id="CategorySelect" style="display: none;">
					<div class="col-md-12">
						<br>
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown">
								Escolha...
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
								<?php foreach($articleCategories as $id => $title): ?>
								<li><?php echo $this->Html->link($title, array('controller' => 'articles', 'action' => 'index', $id)); ?></li>
								<?php endforeach;?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row" id="TimeSelect" style="display: none;">
				<div class="col-md-12">
					<br>
					<?php echo $this->Form->create('Filter'); ?>
					<div class="form-group">
				    	<?php echo $this->Form->input('fromDate', array('id' => 'fromDate', 'type' => 'text', 'label' => 'De', 'class' => 'form-control'));?>
					</div>
					<div class="form-group">
				    	<?php echo $this->Form->input('toDate', array('id' => 'toDate', 'type' => 'text', 'label' => 'Até', 'class' => 'form-control'));?>
					</div>
					<div class="form-group">
						<?php echo $this->Form->button('Filtrar', array('type' => 'submit', 'class' => 'btn btn-primary pull-right'));?>
					</div>
					<?php echo $this->Form->end(); ?>
				</div>
			</div>
		</div>
		
		<div class="col-md-10">
			<div class="framed">
				<?php if($isMaster): ?>
				<legend>
					Artigos
					<?php  echo $this->Html->link(
					    '<span class="glyphicon glyphicon-plus pull-right"></span>',
					    array('controller' => 'articles', 'action' => 'addarticle'),
					    array('escape' => FALSE)
					); ?>
				</legend>
				<?php endif; ?>
				
				<?php if(empty($articles)):?>
				<p> No momento não possuímos nenhum conteúdo! :-( </p>
				<?php endif; ?>
				
				<?php foreach($articles as $article):?>
				<legend><?php echo $article['Article']['title']?>
				<?php if($isMaster): ?>
				<div class="pull-right">
					<?php echo $this->Html->link(
					    '<span class="glyphicon glyphicon-remove"></span>',
					    array('controller' => 'articles', 'action' => 'deletearticle', $article['Article']['id']),
					    array('escape' => FALSE, 'confirm' => 'Tem certeza que deseja deletar este artigo? Esta ação é IRREVERSÍVEL!')
					); ?>
					<?php  echo $this->Html->link(
					    '<span class="glyphicon glyphicon-pencil"></span>',
					    array('controller' => 'articles', 'action' => 'editarticle', $article['Article']['id']),
					    array('escape' => FALSE)
					); ?>
				</div>
				<?php endif; ?>
				</legend>
				<?php echo nl2br($article['Article']['text']); ?>
				
				<br><br>
				<h6>
					<?php echo 'Escrito por ' . $article['User']['name'] . ' em ' . date('d/m/Y \à\s H:i:s', strtotime($article['Article']['created'])); ?>.
					<?php echo 'Última modificação em ' . date('d/m/Y \à\s H:i:s', strtotime($article['Article']['modified'])); ?>.
					<?php echo 'Categoria: '; ?>
					<?php echo $this->Html->link(
					    $article['ArticleCategory']['name'],
					    array('controller' => 'articles', 'action' => 'index', $article['Article']['article_category_id'])
					); ?>.
				</h6>
				<br>
				<?php endforeach;?>
			</div>
		</div>
	</div>
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  
	  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<style type="text/css">
	::-webkit-datetime-edit-year-field:not([aria-valuenow]),
	::-webkit-datetime-edit-month-field:not([aria-valuenow]),
	::-webkit-datetime-edit-day-field:not([aria-valuenow]),
	::-webkit-datetime-edit-text {
	  color: transparent;
	}
	</style>
	
	<script>
		$(document).ready(function() {
			$("#CategorySelect").hide();
			$("#TimeSelect").hide();
			//$("#fromDate").attr('type', 'date');

			$("#fromDate").datepicker({
			    dateFormat: 'dd/mm/yy',
			    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
			    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
			    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
			    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
			    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
			    nextText: 'Próximo',
			    prevText: 'Anterior'
			});
			//$("#toDate").attr('type', 'date');

			$("#toDate").datepicker({
			    dateFormat: 'dd/mm/yy',
			    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
			    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
			    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
			    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
			    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
			    nextText: 'Próximo',
			    prevText: 'Anterior'
			});
		});
	
		function showCategories() {
			$("#TimeSelect").hide("slow");
			$("#CategorySelect").show("slow");
		}
	
		function showTime() {
			$("#CategorySelect").hide("slow");
			$("#TimeSelect").show("slow");
		}

		function onSelectCategory(id) {
		}
	</script>
	
</html>


