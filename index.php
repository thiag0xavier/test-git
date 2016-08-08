<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>PEASA | Programa de Estudos e Ações para o Semiárido</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<section class="top">
			<h1 class="logo">PEASA | UFCG</h1>
			<nav class="menu">
				<ul>
					<li> <a href="#">Início</a> </li>
					<li> <a href="#">Sobre</a></li>
					<li> <a href="#">Ações</a></li>
					<li> <a href="#">Editais</a></li>
					<li> <a href="#">Notícias</a></li>
					<li> <a href="#">Galeria</a></li>
					<li> <a href="#">Contatos</a></li>
				</ul>
			</nav>
		</section>
	</header> <!-- Fim da header -->
	
	<section class="banner">
		<img src="images/banner-peasa.png" alt="Banner PEASA">
	</section> <!-- Fim do banner -->

	<section class="acoes">
	<section class="margin-center">
		<h1>Ações do PEASA</h1>
		<p>O PEASA desenvolve ações de ensino, pesquisa e extensão relacionadas à temática do Semiárido com uma metodologia de trabalho multidisciplinar. Conheça mais sobre a atuação do PEASA.</p>
	<ul>
		<li><img src="images/misa.png" alt=""></li>
		<li><img src="images/iacoc.png"  alt=""></li>
		<li><img src="images/inac.png" alt=""></li>
		<li><img src="images/nedet.png" alt=""></li>
		<li><img src="images/balcom.png" alt=""></li>
		<li><img src="images/expedicao.png" alt=""></li>
		<li><img src="images/biblioteca.png"  alt=""></li>
		<li><img src="images/ledutech.png" alt=""></li>
		<li><img src="images/ceei.png" alt=""></li>
		<li><img src="images/mba.png" alt=""></li>
	</ul>
	</section>
	</section> <!-- fim das ações -->

	<section class="noticias">
	<section class="margin-center">
		<h1>Notícias</h1>
	<ul>
		<li><a href="#">Governo zera tarifa de importação do feijão para países de fora do Mercosul</a> <p class="date">Ter, 28 de Junho de 2016 16:11</p> </li>
		<li><a href="#">Governo zera tarifa de importação do feijão para países de fora do Mercosul</a> <p class="date">Ter, 28 de Junho de 2016 16:11</p> </li>
		<li><a href="#">Governo zera tarifa de importação do feijão para países de fora do Mercosul</a> <p class="date">Ter, 28 de Junho de 2016 16:11</p> </li>
		<li><a href="#">Governo zera tarifa de importação do feijão para países de fora do Mercosul</a> <p class="date">Ter, 28 de Junho de 2016 16:11</p> </li>
	</ul>
	<a href="#" class="mais-noticias">Leia todas as notícias</a>
	</section>
	<div class="clear"></div>
	</section> <!-- fim das notícias -->

	<section class="destaque">
		<section class="margin-center">
		
			<figure class="img-destaque">
				<img src="images/foto-destaque.png" alt="">
			</figure>
		<article class="not-destaque">
				<h3 class="titulo">PEASA lança edital para projetos de extensão tecnológica e cultural em agricultura familiar</h3>
				<p class="date">Ter, 28 de Junho de 2016 16:11</p>
				<p>Estão abertas até 20/05 às inscrições de Projetos de Extensão Tecnológica e Cultural para apoio à Agricultura Familiar no Seminário Paraibano. O edital é uma parceria entre a Universidade Federal de Campina Grande (UFCG), Programa de Estudos e Ações para o Semiárido (PEASA), Fundação Parque Tecnológico da Paraíba (PaqTcPB), e o Instituto Nacional do Semiárido (INSA). </p>
		
		<article class="leia-mais"><a href="#">Leia mais...</a></article>	
		</article>
				
		</section>

	</section> <!-- fim dos Destaques -->

	<ul class="links">
		<li><a href="#">Área restrita</a></li>
		<li><a href="#">WebMail</a></li>
		<li><button class="pes">Pesquisar</button></li>

	</ul>
	<section class="search">
		<form action="#"><input type="text"	placeholder="Pesquisar..."> <input type="submit" value="Buscar"></form>
	</section>
	<footer>
		<ul class="realizacao">
			<li><a href="#"><img src="images/peasa.png" alt=""></a></li>
			<li><a href="#"><img src="images/propex.png" alt=""></a></li>
			<li><a href="#"><img src="images/ufcg.png" alt=""></a></li>
		</ul>
		<h3>Parceiros</h3>
		<ul class="parceiros">
			<li> <a href="#"><img src="images/ilca.png" alt=""> </a></li>
			<li> <a href="#"><img src="images/paqtc.png" alt=""> </a></li>
			<li> <a href="#"><img src="images/sebrae.png" alt=""> </a></li>
			<li> <a href="#"><img src="images/bancodonordeste.png" alt=""> </a></li>
			<li> <a href="#"><img src="images/cnpq.png" alt=""> </a></li>
			<li> <a href="#"><img src="images/finep.png" alt=""> </a></li>
			<li> <a href="#"><img src="images/brasil.png" alt=""> </a></li>
		</ul>
		<p>Programa de Estudos e Ações para o Semiárido </p>
		<p>Av. Aprígio Veloso, 882 - Anexo do Museu do Semiárido, CEP 58109-970 - Campina Grande - PB</p>
		<p>tel: (83) 2101-1590 | 2101-1591</p>
		<article class="creditos">
			Copyright © <?php echo date ("Y") ?> | Todos os Direitos Reservados.
		</article>
	</footer>
<script src="jquery-3.1.0.min.js"></script>	
<script>
	$("button").click(function(){
    $(".search").toggle();
});
</script>	
</body>
</html>