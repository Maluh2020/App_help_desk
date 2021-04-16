<?php 

	session_start();
	
	//variavel que identifica se a autenticação foi realizada
	$usuario_autenticado = false;

	//usuários do sistema
	$usuarios_app = array(
		array('email' => 'admin@teste.com.br', 'senha' => 1234),
		array('email' => 'user@teste.com.br', 'senha' => 'abcd')
		);

	/* echo "<pre>";
	print_r($usuarios_app);
	echo "</pre>"; */

	foreach ($usuarios_app as $user) {

		/* echo "Usuário app: ".$user['email']. ' / ' . 
			$user['senha'];
		echo "<br/>";

		echo "Usuário form: ".$_POST['email']. ' / ' . 
			$_POST['senha']; */

		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
			
		}

	/*	$user['email'];
		$user['senha'];

		echo $_POST["email"];
		echo "<br/>";
		echo $_POST["senha"];
		echo "<hr/>"; */
	} 

		if ($usuario_autenticado) {
			echo "usuario autenticado";
			$_SESSION['autenticado'] = 'SIM';
			$_SESSION['x'] = 'um valor';
			$_SESSION['y'] = 'outro valor';

			header('Location: home.php?login=erro');
			
		}else {
			$_SESSION['autenticado'] = 'NÃO';
			//header funciona como desvio qdo der erro
			header('Location: index.php?login=erro');
		}

	//super global GET
	/*
	print_r($_GET);

	echo "<br/>";

	echo $_GET['email'];
	echo "<br/>";

	echo $_GET['senha']; */

	//super global POST
	print_r($_POST);
	echo "<br/>";

	echo $_POST["email"];
	echo "<br/>";

	echo $_POST["senha"];

?>