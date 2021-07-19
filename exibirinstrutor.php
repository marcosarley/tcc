<?php
include_once("conexao_sistema_fisio_health_sports.php")
?>
<!DOCTYPE html>
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css"/>
    <title>Body System tela exibição do usuário logado no banco</title>
</head>
<body> 
    <fieldset>Body System</fieldset>
    <!-- Aqui deverá exibir o usuário retornado do banco-->
    <div class id="index">
    <table>
      <?php
      $nome = $_POST['login'];
      $senha = $_POST['senha'];
      $sql="Select * from instrutores WHERE nome = '$nome' AND senha = '$senha'";
      $result = $conn->query($sql);
      if ($result->num_rows>0) {
        while($row = $result->fetch_assoc()) {
          echo "id: " . $row["ID"]. "<br>". "IDCREF: " . $row["ID_cref"]. "<br>". " Nome: " .$row["nome"]. "<br>". "Celular: " .$row["celular"]. "<br>". "CPF: " . $row["cpf"]. "<br>". "Email: " .$row["email"]. "<br>". " RG: ".  $row["rg"]. "<br>". "Telefone: " . $row["telefone"]. "<br>". "Sexo: " . $row["escolhasexo"].   "<br>";
          echo "Data de nascimento:", $row["datadenascimento"] = implode("/",array_reverse(explode("-",$row["datadenascimento"])));
        }
      }else {
        echo "0 results";
      }
      $conn->close();
      ?>
    </table>
    </div>
    <div>
    <a href="index.html"><button id="criarusuario">Voltar a página inicial</button><br><br></a>
    </div>
    <fieldset> Desenvolvido por João Vitor, Samuel Mazzucato e Marcos Arley.<br>
               Direitos reservados © 2021
    </fieldset>
</body>
</html>