<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <h1>Informe os seguintes dados...</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

            <label for="dadosUsuarioNome">Nome: </label>
            <input type="text" name="nome">
            <br>
            <br>

            <label for="dadosUsuarioIdade">Idade: </label>
            <input type="text" name="idade">
            <br>
            <br>

            <label for="dadosUsuarioEmail">E-mail: </label>
            <input type="text" name="email">
            <br>
            <br>

            <label for="dadosUsuarioTelefone">Telefone: </label>
            <input type="text" name="telefone">
            <br>
            <br>

            <label for="dadosUsuarioCPF">CPF: </label>
            <input type="text" name="cpf">
            <br>
            <br>

            <label for="dadosUsuarioProfissao">Profissão: </label>
            <input type="text" name="profissao">
            <br>
            <br>            

            <label for="dadosUsuarioCEP">CEP: </label>
            <input type="text" name="cep">
            <br>
            <br>

            <label for="dadosUsuarioUF">UF: </label>
            <input type="text" name="uf">
            <br>
            <br>

            <label for="dadosUsuarioCidade">Cidade: </label>
            <input type="text" name="cidade">
            <br>
            <br>

            <label for="dadosUsuarioBairro">Bairro: </label>
            <input type="text" name="bairro">
            <br>
            <br>

            <label for="dadosUsuarioLogradouro">Logradouro: </label>
            <input type="text" name="logradouro">
            <br>
            <br>

            <label for="dadosUsuarioComplemento">Complemento: </label>
            <input type="text" name="complemento">
            <br>
            <br>

            <label for="dadosUsuarioNumero">Numero: </label>
            <input type="text" name="numero">
            <br>
            <br>

            <button type="submit">ENVIAR</button>
            
        </form>

        <hr>
            
        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {

                $nome = $_POST['nome'];
                $idade = $_POST['idade'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $cpf = $_POST['cpf'];
                $profissao = $_POST['profissao'];
                $cep = $_POST['cep'];
                $uf = $_POST['uf'];
                $cidade = $_POST['cidade'];
                $bairro = $_POST['bairro'];
                $logradouro = $_POST['logradouro'];
                $complemento = $_POST['complemento'];
                $numero = $_POST['numero'];

                $dadosUsuario = [
                    "Nome" => $nome,
                    "Idade" => $idade,
                    "Email" => $email,
                    "Telefone" => $telefone,
                    "CPF" => $cpf,
                    "Profissao" => $profissao,
                    "CEP" => $cep,
                    "UF" => $uf,
                    "Cidade" => $cidade,
                    "Bairro" => $bairro,
                    "Logradouro" => $logradouro,
                    "Complemento" => $complemento,
                    "Numero" => $numero
                ];

                echo "<h1>Dados do usuario...</h1>";

                foreach ($dadosUsuario as $chave => $valor) {
                    echo ("<b>" . $chave . ": </b>" . $valor . "<br>");
                }
            }
        ?>
            
        <hr>
        <br>
        <a href="index.php">LIMPAR</a>
    </body>
</html>

