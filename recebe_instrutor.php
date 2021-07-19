<!DOCTYPE html>
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo2.css"/>
    <title>Body System - Tela de login</title> <!-- Aqui é exibido as informações da aba do navegador-->
</head>
<body> 
    <fieldset>Body System</fieldset> 
   <?php
	include_once("conexao_sistema_fisio_health_sports.php");
	$nome = $_POST["nome"];
	$idcref = $_POST["id"];
	$celular = $_POST["celular"];
	$cpf = $_POST["cpf"];
	$email = $_POST["email"];
	$rg = $_POST["login"];
	$telefone = $_POST["telefone"];
	$data = $_POST["date"];
	$escolhasexo = $_POST["escolhasexo"];
	$senha1 = $_POST["senha"];
	$senha2 = $_POST["senha"];
	$sql = "INSERT INTO instrutores (nome, ID_cref, celular, cpf, email, rg, telefone, datadenascimento, escolhasexo, senha, redigitesenha)
VALUES ('$nome','$idcref', '$celular', '$cpf', '$email', '$rg','$telefone', '$data', '$escolhasexo', '$senha1', '$senha2')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>	
<br><a href="index.html"><button id="criarusuario">Voltar a página inicial</button><br><br></a>
    <fieldset> Desenvolvido por João Vitor, Samuel Mazzucato e Marcos Arley.<br>
               Direitos reservados © 2021
    </fieldset>
</body>
</html>