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
	<title>Quem Somos?</title>
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
		
		<article class="sobreinf">
			<div class="imginf">
			<img style="text-align: center; float: center;" src="assents/quemsomos/sobre.jpg" alt="Informação">
			</div>
			<br>
			<div class="titulopag">
			<h2><b>Quem Somos?</b></h2>
			<br><br>
			</div>

			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No dia 18 de fevereiro de 1998 foi criado em São Roque do Canaã o Centro de Apoio Infanto-Juvenil “Canaã”. Surgiu da necessidade de se ter um espaço para que fosse realizado um trabalho que promovesse o desenvolvimento socioeducativo de crianças e adolescentes que eram assistidos pela Guarda Mirim “Os Colibris”. Em maio de 2011 o Ministério da Justiça reconheceu-o como Organização Não-Governamental (ONG).</p>
				<br>
 			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp O projeto acolhe crianças e adolescentes de ambos os sexos e os incentiva à prática do bem, da moral e dos bons costumes, despertando-os para o companheirismo, para o bom relacionamento familiar, zelo pelo patrimônio público e privado e prepara-os para o melhor convívio com a sociedade. Sabendo da importância do Centro de Apoio Apoio Infanto-Juvenil “Canaã” para o município, algumas empresas da região contribuem financeiramente com a Entidade, assim como a Prefeitura Municipal.</p>
 				<br>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp O projeto social atende hoje mais de 200 crianças e adolescentes com idade entre 7 e 17 anos. No local são realizadas atividades como práticas esportivas, artes (pintura em tecido, trabalhos com materiais recicláveis), aulas de violão, karatê, complemento educacional e aulas de informática. As aulas acontecem no contra turno escolar, o que possibilita que os pais trabalhem enquanto os filhos participam das atividades do projeto. </p>
				<br>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Com o auxílio do projeto Programação de Aquisição de Alimentos (PAA), o Centro de Apoio oferece, sempre que possivel, sucos e frutas como lanche, possibilitando também que os alunos levem para as suas casas frutas e verduras.</p>
				<br>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Quem quiser inscrever o filho nas atividades do Centro de Apoio, estão abertas inscrições para o Futsal e a Karatê. Basta pegar a ficha de inscrição na secretaria da Entidade, que funciona nas dependências do Ginásio Poliesportivo “José Reggattieri”, das 7h Às 11h e das 12:30h às 16:30h, de segunda a sexta-feira. Para matricula nas outras atividades, basta deixar as informações do aluno, e assim que surgir a vaga, a instituição entra em contato.</p>
		</article>
				<br><br><br><br><br><br>

</body>

<?php
$m->rodape();
?>

</html>