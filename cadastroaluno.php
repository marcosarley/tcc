<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css"/>
    <title>Body System - Tela criação cadastro Aluno</title>
</head>
<body>
        <fieldset>Body System</fieldset><br>
        <!-- Aqui são cadastrados os dados do aluno e enviados ao banco -->
        <form action="recebe_aluno.php" method="POST">
        
        <label for="nome">Nome do aluno*:</label><input type="text" name="nome" size="100" maxlength="60" required><br>
        <br>
        <label for="celular">Telefone celular:*</label><input type="text" name="celular" size="11" maxlength="11" required><br>
        <br>
        <label for="cpf">CPF:</label><input type="text" name="cpf" size="11" maxlength="11" required><br>
        <br>
        <label for="rg">RG:</label><input type="text" name="login" size="10" maxlength="8"><br>
        <br>
        <label for="telefone">Telefone adicional:</label><input type="text" name="telefone" size="11" maxlength="11"><br>
        <br>
        <label for="date">Data de nascimento*:</label><input type="date" name="date" required><br><br>
        <a>Qual o sexo do aluno?</a>
        <label for="escolhasexo"></label><input type="text" name="escolhasexo" size="20" maxlength="20"><br><br>
        <a>O aluno possui alguma necessidade especial? Se sim, qual a sua necessidade?</a>
        <label for="necessidadeespecial"></label><input type="text" name="necessidadeespecial" size="100" maxlength="60"><br><br>    
        <label for="senha">Coloque a Senha*:</label><input type="password" name="senha" size="10" maxlength="8" required><br>
        <br>
        <label for="senha">Repita a Senha*:</label><input type="password" name="senha" size="10" maxlength="8" required><br><br>
        <br>    
        <input type="submit" value="Enviar"/>
        </form>
        <div>
        <a href="criarusuario.html"><button id="criarusuario">Voltar</button><br><br></a>
        </div>
    <fieldset> Desenvolvido por João Vitor, Samuel Mazzucato e Marcos Arley.<br>
            Direitos reservados 2021
    </fieldset>   
</body>
</html>