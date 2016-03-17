<?php
$cabecalho_title = "título da pagina";
include("../include/cabecalho.php"); 
?>

	<h1>Cadastrar Evento</h1>
	<form>
		<label for="nome">Nome</label>
		<input type="text" id="nome" name="nome" required>
		<label for="dataInicio">Data de Ínicio</label>
		<input type="date" id="dataInicio" name="dataInicio" required>
		<label for="dataFim">Data de Fim</label>
		<input type="date" id="dataFim" name="dataFim" required>
		<label for="qntIngressos">Quantidade de Ingressos</label>
		<input type="number" id="qntIngressos" name="qntIngressos" required>
	</form>


<?php include("../include/rodape.php"); ?>