<!DOCTYPE html>
<html>
	
	<style type="text/css">

		.btn_custom{
			background: #808080;
			color: #ffffff; 
			max-height: 35px; 
			max-width: 140px;
			margin-top: 0.2%;
		}
		.p_custom{
			color: #808080;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 0px;
			margin-left: 0px;
		}

		.first-image{
			position: relative;
			width: 100%;
			max-height: 100px;
		}
		.child-first-image{
			position: absolute; 
			width: 30%;
			top: 2.5%;
			left: 32.5%;
		}
		.second-image{
			position: relative;
			width: 100%; 
			max-height: 100px;
		}
		.text-img-foot{
			position: absolute;
			margin-top: -5.5%;
			margin-left: 35%;
			color: #ffffff;
		}


	</style>
	<br />

	<div class="row">
		
		<div class="col-md-3" style="margin-left:14%"><span style="color:#808080">Bem vindo ao <i><strong>Clube do desconto!</strong></i></span></div>
	
		<div class="col-md-2 col-md-offset-5" style="margin-left:14%">
			<p class="p_custom">Cadastre-se e fique por dentro</p>
			<p class="p_custom" style="padding-top: -5%">dos descontos que você pode ter!</p>
		</div>
	
		<div classs="col-md-2 col-md-offset-2" style="margin-left:17%">
			<input id="" type="submit" class="btn btn-primary btn_custom" value="Cadastre-se!" />
		</div>

	</div>

	<br />

	<div class="row">

		<div class="first-image">

				<?php echo $this->Html->image('slide_fundo.png', array('height' => '100px', 'max-width'=> '100%', 'display' => 'block', 'class' => 'img-responsive')); ?>
			<div class="child-first-image">
				<?php echo $this->Html->image('craques_economia.png', array('height' => 'auto', 'max-width'=> '100%', 'display' => 'block', 'class' => 'img-responsive')); ?>

					<div class="col-xs-12 col-md-12" style="position: absolute;">
						<p class="p_custom" style="margin: 2% 0% 0% 3%">Inscreva-se para receber nossas informações sobre os<strong> melhores </p>
						<p class="p_custom" style="padding-top: -5%; margin: 2% 0% 0% 3%">benefícios</strong> que você pode ter como <strong>sócio torcedor</strong> do seu
						<p class="p_custom" style="padding-top: -5%; margin: 2% 0% 0% 3%">time do coração!</p>
					</div>	

			</div>

			<div class="second-image">
				<?php echo $this->Html->image('slide2_fundo.png', array('height' => 'auto', 'max-width'=> '100%', 'display' => 'block', 'class' => 'img-responsive')); ?>

					<div class="col-xs-12 col-md-8 text-img-foot">
						<p>Cadastre-se e fique por dentro</p>
						<p>dos descontos que você pode ter!</p>
					</div>

			</div>
		
		</div>
	
	</div>
	
	

	<!-- <div style="color:#414042; float:left;  width: 20%"></div>
	<div style="float:right"> -->
	

	<!-- <ol class="breadcrumb">
		<li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages')); ?></li>
	</ol> -->
	
	<!-- <div class="row">
		<div class="col-md-12">
			<div class="framed">
				<legend> Bem vindo ao nosso site, equipe Let's Rock! </legend>
				<p> Aqui no home teremos uma landing page, ou os artigos do próprio Blog. </p>
				<p> Acesse <b>Blog</b> para ver nosso conteúdo. Acesse <b>Interno</b> para editar nosso conteúdo. </p>
				<p> Ao realizar login, botões para adicionar, editar e deletar artigos irão aparecer na página <b>Blog.</b> </p>
				<p> Pensem no conteúdo para esta página principal e para a página <b>Sobre</b> </p>
				<p> Sintam-se livres para dar opiniões no design. Ainda precisamos de uma logo! </p>
				<p> O <b>login</b> é o primeiro nome de cada um <b>sem acentos</b> e a senha é <b>abcdef</b>.</p>
				<p> Tanto o design quanto as funcionalidades <b>estão em aberto</b>, mas já é possível fazer o importante: publicar conteúdo. </p>
				<p> Este site encontra-se hospedado na DigitalOcean. Para instalar o Analytics, <b>precisamos de um domínio.</b> Pensem em um!</p>
			</div>
		</div>
	</div> -->
</html>