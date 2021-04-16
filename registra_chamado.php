<?php 

	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

	//formatar o array em uma estrutura de texto
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	//implode('#', $_POST) implode transforma um array em uma string

	$texto = $titulo. '#' . $categoria. '#' . $descricao . PHP_EOL;


	//a extensão pode ser txt pq é texto puro, o parametro 'a' abre o arquivo para escrita
	//abrindo arquivo
	$arquivo = fopen('arquivo.hd', 'a');

	//escrevendo o texto
	fwrite($arquivo, $texto);

	//fechando arquivo
	fclose($arquivo); 
	//echo $texto;

	header('Location: abrir_chamado.php');
?>