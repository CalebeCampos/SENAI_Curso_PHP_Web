<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa Fisica</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="nome"><b>Nome: </b></label></br>
        <input type="text" name="nome" placeholder="" required>
        <br><br>
        <label for="cpf"><b>CPF: </b></label></br>
        <input type="text" name="cpf" placeholder="" required>
        <br><br>
        <label for="dataNascimento"><b>Data de Nascimento: </b></label></br>
        <input type="text" name="dataNascimento" placeholder="" required>
        <br><br>
        <label for="email"><b>Email: </b></label></br>
        <input type="text" name="email" placeholder="" required>
        <br><br>
        <label for="telefone"><b>Telefone: </b></label></br>
        <input type="text" name="telefone" placeholder="" required>
        <br><br>
        <label for="profissao"><b>Profissao: </b></label></br>
        <input type="text" name="profissao" placeholder="" required>
        <br><br>
        <label for="genero"><b>Genero: </b></label></br>
        <input type="text" name="genero" placeholder="" required>
        <br><br>
        <label for="endereco"><b>Endereco: </b></label></br>
        <input type="text" name="endereco" placeholder="" required>
        <br><br>
        <button type="submit">ENVIAR</button>
    </form>
    
    <?php

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
            include "Pessoa.class.php";
            include "PessoaFisica.class.php";
        
            $objetoPessoaFisica = new PessoaFisica();
        
            //metodos da classe pai "Pessoa"
            $objetoPessoaFisica->setEmail($_POST["email"]);
            $objetoPessoaFisica->setTelefone($_POST["telefone"]);
            $objetoPessoaFisica->setEndereco($_POST["endereco"]);

            //metodos da classe "PessoaFisica"
            $objetoPessoaFisica->setNome($_POST["nome"]);
            $objetoPessoaFisica->setCPF($_POST["cpf"]);
            $objetoPessoaFisica->setDataNascimento($_POST["dataNascimento"]);
            $objetoPessoaFisica->setProfissao($_POST["profissao"]);
            $objetoPessoaFisica->setGenero($_POST["genero"]);

            echo "<h3>Atributos da classe PESSOA</h3>";
            echo "<b>Email: </b>" . $objetoPessoaFisica->getEmail() . "<br>";
            echo "<b>Telefone: </b>" . $objetoPessoaFisica->getTelefone() . "<br>";
            echo "<b>Endereco: </b>" . $objetoPessoaFisica->getEndereco() . "<br>";
            echo "<h3>Atributos da classe PESSOAFISICA</h3>";
            echo "<b>Nome: </b>" . $objetoPessoaFisica->getNome() . "<br>";
            echo "<b>CPF: </b>" . $objetoPessoaFisica->getCPF() . "<br>";
            echo "<b>Data de Nascimento: </b>" . $objetoPessoaFisica->getDataNascimento() . "<br>";
            echo "<b>Profissao: </b>" . $objetoPessoaFisica->getProfissao() . "<br>";
            echo "<b>Genero: </b>" . $objetoPessoaFisica->getGenero() . "<br>";

            echo "<br><br>";
            echo "<a href='index.php'>VOLTAR</a>";

        }

    ?>

</body>
</html>