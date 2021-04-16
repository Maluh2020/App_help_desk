<?php 

	session_start();

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	//remover indices do array de sessão,
	// função unset() remove indices de qualquer array
	unset($_SESSION['x']);//remove o indice x
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	//destruir a variavel de sessão removendo todos os eementos
	//função session_destroy() é específica da global SESSION e remove todos os indices contidos dentro da super globa SESSION
	session_destroy();//remove todos os indices mas so teremos acesso numa nova requisição

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	//forçar direcionamento para uma nova requisição http
	session_destroy();
	header('Location: index.php');

?>