	<?php  
	include 'cabecalho_rodape.php';
	?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
	<!-- Definindo o tamanho da tela/ Respancividade/ Viewport >>> width= device-width = ajusta o tamanho da tela para o tamanho da tela do dispositivo que à está exibindo >>> initial-scale=1 = diz que o nível inicial do zoom é 1 -->
	<meta name="Viewport" content="width = device-width">
	<!--Codificação do arquivo HTML-->
	<meta charset="utf-8">
	<!--Título da Página-->
	<title>Atividades</title>
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

<?php
$m = new Metodos();
$m->cabecalho();
?>

<body>
		<br><br><br><br><br><br><br><br><br><br>
		<div class="titulopag">
		<br>
			<h1><b>Saiba um pouco mais sobre as atividades da ONG!</b></h1>
		</div>


<main class="servicos">
<article class="servico">
			<a href="#"><img src="assents/atividades/artes.jpg" alt="Artes"></a>
			<div class="inner">
				<a href="#">Aulas de Artes</a>
				<h4>Artesanatos dos mais diversos tipos</h4>
				<p>Os alunos podem ser inscritos nas aulas de artesanato, que possuem vagas limitadas. Nessas aulas, os alunos aprendem a fazer varios tipos de arte com materiais reciclados. Para se inscrever, basta deixar o nome do aluno na secretaria da instituição, e assim que possivel, o aluno será chamado.</p>
			</div>
		</article>


		<article class="servico">
			<a href="#"><img src="assents/atividades/violao.jpg" alt="Violão"></a>
			<div class="inner">
				<a href="#">Aulas de Violão</a>
				<h4>Ensinando do básico ao mais avançado</h4>
				<p>Os alunos podem ser inscritos nas aulas de violão, que vão desde as aulas básicas, até mais avançadas. As vagas são limitadas. Basta deixar o nome do aluno na secretaria da instituição e ele será chamado assim que surgir vaga.</p>
			</div>
		</article>

		<article class="servico">
			<a href="#"><img src="assents/atividades/karate.jpg" alt="Karatê"></a>
			<div class="inner">
				<a href="#">Aulas de Karatê</a>
				<h4>Atendendo a todas as faixas de idade.</h4>
				<p>A instituição oferece aulas de Karatê, graças a disposição do professor, que oferece as suas aulas voluntariamente. As vagas para Karatê possuem vagas "ilimitadas". Para realizar a inscrição, basta um responsavel pelo aluno ir até a secretaria da instituição e preencher a ficha de inscrição (ou o aluno pegar na instituição e trazer devidamente assinado).</p>
			</div>
		</article>

		<article class="servico">
			<a href="#"><img src="assents/atividades/informatica.jpg" alt="Informática"></a>
			<div class="inner">
				<a href="#">Aulas de Informática</a>
				<h4>Ensinando do básico ao mais avançado</h4>
				<p>Os alunos podem ser inscritos nas aulas de informática, que possuem vagas limitadas devido ao número de máquinas na instituição. Nas aulas, os alunos aprendem informática básica, cuidados, auxilio em pesquisa e formatação de trabalhos escolares, segurança e navegação na internet, entre outros temas tecnologicos. Para se inscrever, basta deixar o nome do aluno na secretaria da instituição, e assim que possivel, o aluno será chamado.</p>
			</div>
		</article>

		<article class="servico">
			<a href="#"><img src="assents/atividades/Complemento.jpg" alt="Complemento"></a>
			<div class="inner">
				<a href="#">Complemento Escolar</a>
				<h4>Atendendo a todas as faixas de idade.</h4>
				<p>Os alunos podem ser inscritos nas aulas de Complemento Escolar, que possuem vagas limitadas. Nessas aulas, os alunos recebem apoio escolar nas materias que possuem dificuldades, reforço de todas as matérias e atividades de fixação. Para se inscrever, basta deixar o nome do aluno na secretaria da instituição, e assim que possivel, o aluno será chamado.</p>
			</div>
		</article>

		<article class="servico">
			<a href="#"><img src="assents/atividades/futsal.jpg" alt="Futsal"></a>
			<div class="inner">
				<a href="#">Aulas de Futsal</a>
				<h4>Atendendo a todas as faixas de idade.</h4>
				<p>Os alunos podem ser inscritos nas aulas de futsal, para meninos e meninas (turmas separadas por sexo e faixa de idade). As vagas são "ilimitadas". Para se inscrever, basta um responsavel pelo aluno ir até a secretaria da instituição e preencher a ficha de inscrição (ou o aluno pegar na instituição e trazer devidamente assinado).</p>
			</div>
		</article>

	</main>
	

</body>

<?php
$m->rodape();
?>

</html>