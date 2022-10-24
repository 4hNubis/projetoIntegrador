
<?php

//Inicia a conexão com o BD Dekas
require_once 'connecDekasBD.php';
	
//se existir o indice btn_entrar , é porque alguem clicou no botão
if (isset($_POST['btEntrar'])):

	$erros = array();
	//mysqli_escape_string - função que limpa os dados e evita sqlinjection e outros caracteres indevidos.
	$email = filter_var(mysqli_escape_string($connect, $_POST['email']),FILTER_SANITIZE_EMAIL);
	$senha = filter_var(mysqli_escape_string($connect, $_POST['senha']),FILTER_SANITIZE_SPECIAL_CHARS);
	

	if(empty($email) or empty($senha)):
		// header('Location: login.php');	
		$erros[] = "<p> O campo login e/ou senha precisa preenchido </p>";
	else:
		//criptografando a senha no mode BCrypt
		$senha=$senha;
		// Faz a busca e comparação via codigo SQL
		$sql= "SELECT idUsuario,nomeUsuario FROM usuario WHERE email= '$email' AND senha='$senha'";
		// Executa o comando SQL, resultando na busca do usuario desejado
		$resultado = mysqli_query($connect,$sql);
		//fechando a conexão depois de armazenar os dados
		mysqli_close($connect);
		
		//numeros de linhas do resultado da query maior que 0 ou Se houver algum registro na tabela
		if (mysqli_num_rows($resultado) > 0):
			$dados=mysqli_fetch_array($resultado);
			$_SESSION['logado']= true;
			$_SESSION['id_usuario']= $dados['idUsuario'];
			$_SESSION['nome_usuario'] = $dados['nomeUsuario'];
			//comenado que redireciona para página dekasConfeitaria.php
			header('Location: index.php');		
		
		else:
			$erros[]="<p>Usuário e senha não conferem.</p>";
			
		endif;
		
	endif;	
endif;	
?>