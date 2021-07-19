<!DOCTYPE html>
<head><!-- Aqui contém os metadados e configurações como idioma exibido por padrão no navegador, tipo de caracteres, definição da folha de estilo.--> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo2.css"/>
    <title>Body System - Tela de login</title> <!-- Aqui é exibido as informações da aba do navegador-->
</head>
<body> <!-- Início do corpo do sistema --> 
    <fieldset>Body System</fieldset> 
    <div>
    <form action="exibiraluno.php" method="POST">
    <label for="nome">Digite o nome do usuário:</label><input type="text" name="login" size="60" maxlength="60"><br><br> 
    <label for="nome">Digite a senha:</label><input type="password" name="senha" size="20" maxlength="20"><br><br> 
    <input type="submit" value="Enviar"/>
    </form>
    <a href="index.html"><button id="criarusuario">Voltar a página inicial</button><br><br></a>
    </div>
    <fieldset> Desenvolvido por João Vitor, Samuel Mazzucato e Marcos Arley.<br>
               Direitos reservados © 2021
    </fieldset>
</body>
</html>