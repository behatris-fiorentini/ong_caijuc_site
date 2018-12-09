<?php
class Metodos{
	//CABEÇALHO PADRÃO DAS PÁGINAS
	function cabecalho(){

			echo '

	<!-- Definindo o tamanho da tela/ Respancividade/ Viewport >>> width= device-width = ajusta o tamanho da tela para o tamanho da tela do dispositivo que à está exibindo >>> initial-scale=1 = diz que o nível inicial do zoom é 1 -->
	<meta name="Viewport" content="width = device-width">
	<!--Codificação do arquivo HTML-->
	<meta charset="utf-8">
	<!--Título da Página-->
	<title>ONG CAIJUC</title>
	<!--Descrição da Página-->
	<meta name="descreption" content="ONG Centro de Apoio Infânto-Juvenil Canaã">
	<!--Pálavras chaves de pesquisa da página-->
	<meta name="keywords" content="ONG, Educação, Inclusão Social">
	<!--Moteres de Busca-->
	<meta name="robots" content="index, follow"> <!--O Follow inclui todos os links da index para a busca-->
	<!--Autores da página-->
	<meta name="author" content="Behatris Fiorentini, Jonas Rodrigues Ramires">
	<!--Importando o arquivo CSS para dar designa página index -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Importando fonte "Font Awesome 4.7.0" para letra do site-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Imporando a familia Lato e alguns de seus estilos do google fontes-->
	<link href="http://fonts.googleapis.com/css?family=Lato:400,700,300,700" rel="stylesheet" type="text/css">
	<!--Importando o JQuery para página-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!--Coloca o icone na aba do navegador-->
	<link rel="icon" type="text/css" href="assents/home/cabecalho/logomarca.png">



	<header class="cabecalho">
	<div class="fundo">
	<!--Logomarca do cabeçalho-->
		<a href="index.html"><h1 class="logo">ONG Centro de Apoio Infanto-Juvenil "Canaã"</h1></a>
	<!--Botão do Menu-->
		<button class="btn-menu"> <i class="fa fa-bars fa-lg"></i> </button>

	<!--CRIANDO O MENU DO SITE-->
	<nav class="menu">
		<a class="btn-close"><i class="fa fa-times"></i></a>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="como_ajudar.php">Como Ajudar?</a></li>
			<li><a href="atividades.php">Atividades</a></li>
			<li><a href="quem_somos.php">Quem Somos?</a></li>
			<li><a href="fale_conosco.php">Fale Conosco</a></li>
			<li><a href="matriculas.php">Matriculas</a></li>
			<li><a href="equipe.php">Equipe</a></li>
			<li><a href="fotos.php">Fotos</a></li>
		</ul>
	</nav>
	</header>

		<script type="text/javascript">
		//Abre o menu ao clicar no icone
		$(".btn-menu").click(function(){
				$(".menu").show();
		});

		//fecha o menu quando clica no x (btn-close)
		$(".btn-close").click(function(){
				$(".menu").hide();
		});
	</script>

		';//fim do echo
	}


	//RODAPÉ PADRÃO DAS PÁGINAS
	function rodape(){

		echo'

			<!--NEWLETTER-->
	<section class="newsletter">
	<h2>Quer Inscrever seu Filho?</h2>
	<h3>Entre em contato conosco e tire suas dúvidas</h3>
	</section>


	<footer class="rodape">
		<div class="social-icons">
			<a href="https://www.facebook.com/Caijuc/?ref=br_rs&hc_ref=SEARCH"><i class="fa fa-facebook"></i></a>
			<a href="https://ongcaijuc.wordpress.com/"><i class="fa fa-wordpress"></i></a>
			<a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fa fa-envelope"></i></a>
		</div>

		<p class="copyright"> Copyright &copy; Behatris&Jonas 2017</p>
	</footer>

		';//fim do echo rodapé

	}
}
?>