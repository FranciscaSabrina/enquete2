<?php  
	if (isset($_POST['filmes'])) {
		setcookie('filmes', $_POST['filmes']);
	}

	if (isset($_COOKIE['filmes']) {
		echo "Você já enviou sua resposta.";
	}else{
		include 'enquete.html';
		
	}

?>
