<!DOCTYPE html>
<html>

<style type="text/css">
	.btn_custom {
		background: #808080;
		color: #ffffff;
		max-height: 35px;
		max-width: 140px;
		margin-top: 0.2%;
	}
	
	.p_custom {
		color: #808080;
		margin-top: 0px;
		margin-right: 0px;
		margin-bottom: 0px;
		margin-left: 0px;
	}
	
	.first-image {
		position: relative;
		width: 100%;
	}
	
	.child-first-image {
		position: absolute;
		width: 30%;
		top: 2.5%;
		left: 32.5%;
	}
	
	.text-img-foot {
		position: absolute;
		margin-top: -5.5%;
		margin-left: 35%;
		color: #ffffff;
	}
	
	.thumbnail-custom {
		text-align: center;
		margin-top: 20px;
	}
	
	.thumbnail-custom img {
		max-width: 140px;
	}
	
	.thumbnail-custom p {
		color: white;
		background-color: rgba(0, 0, 0, 0.5);
		padding: 10px;
		margin: 10px 0;
	}
	
	@media(max-width: 450px) {
		.thumbnail-custom p {
			min-height: 100px !important;
		}
	}
	
	@media(max-width: 768px) {
		.thumbnail-custom p {
			min-height: 60px;
		}
	}
	
	@media(min-width: 768px) {
		.thumbnail-custom p {
			min-height: 140px;
		}
	}
	
	@media(min-width: 815px) {
		.thumbnail-custom p {
			min-height: 120px;
		}
	}
	
	@media(min-width: 895px) {
		.thumbnail-custom p {
			min-height: 100px;
		}
	}
	
	@media(min-width: 992px) {
		.thumbnail-custom p {
			min-height: 100px;
		}
	}
	
	@media(min-width: 1200px) {
		.thumbnail-custom p {
			min-height: 80px;
		}
	}
	
	.thumbnail-custom .btn {
		border: 1px solid #2F4F4F;
		color: #2F4F4F;
	}
	
	.thumbnail-custom .btn:focus {
		outline-color: rgb(47, 79, 79);
	}
	
	.thumbnail-custom .btn:hover {
		-webkit-box-shadow: 0px 1px 5px 0px rgba(47, 79, 79, 0.8);
		-moz-box-shadow: 0px 1px 5px 0px rgba(47, 79, 79, 0.8);
		box-shadow: 0px 1px 5px 0px rgba(47, 79, 79, 0.8);
	}
	
	.thumbnail-img {
		position: absolute;
	}
	
	@media(min-width: 1200px) {
		.thumbnail-img {
			min-height: 440px;
		}
	}
	
	.thumbnail-footer {
		text-align: center;
		margin-top: 30px;
	}
	
	.thumbnail-footer span {
		color: white;
		display: inline-block;
		max-width: 220px;
		vertical-align: middle;
	}
	
	.thumbnail-footer .btn {
		color: white;
		border: 1px solid white;
		background-color: transparent;
		margin-left: 10px;
		background-color: rgba(56, 146, 69, 0.5)
	}
	
	.thumbnail-footer .btn:focus {
		outline-color: white;
	}
	
	.thumbnail-footer .btn:hover {
		-webkit-box-shadow: 0px 1px 5px 0px rgba(255, 255, 255, 0.8);
		-moz-box-shadow: 0px 1px 5px 0px rgba(255, 255, 255, 0.8);
		box-shadow: 0px 1px 5px 0px rgba(255, 255, 255, 0.8);
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
						<p class="p_custom" style="padding-top: -5%; margin: 2% 0% 0% 3%">benefícios</strong> que você pode ter como <strong>sócio torcedor</strong>					do seu
					<p class="p_custom" style="padding-top: -5%; margin: 2% 0% 0% 3%">time do coração!</p>
			</div>

		</div>
	</div>
</div>
<img src="img/slide2_fundo.png" alt="" class="thumbnail-img img-responsive">
<div class="row">
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 thumbnail-custom">
		<div>
			<img class="img-circle" src="img/texto1_360.png"></img>
		</div>
		<p>A maioria dos brasileiros já nascem apaixonados por Futebol. Ser <b>Sócio Torcedor</b> é uma das melhores formas de demonstrar
			amor e apoio ao clube.</p>
		<button class="btn">Leia mais</button>
	</div>
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 thumbnail-custom">
		<div>
			<img class="img-circle" src="img/texto2_360.png"></img>
		</div>
		<p>Baixe um <b>e-book grátis</b> com as táticas de jogo utilizadas por grandes técnicos, esta é do Barcelona</b>
		</p>
		<button class="btn">Baixe agora</button>
	</div>
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 thumbnail-custom">
		<div>
			<img class="img-circle" src="img/texto3_360.png"></img>
		</div>
		<p>O <b>Clubedodesconto.com</b> nasceu com intuito de divulgar descontos de verdade para quem é <b>sócio torcedor</b> de coração
		</p>
		<button class="btn">Saiba mais</button>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="thumbnail-footer">
			<span>Cadastre-se e fique por dentro dos descontos que você pode ter!</span>
			<button class="btn">Cadastre-se aqui!</button>
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