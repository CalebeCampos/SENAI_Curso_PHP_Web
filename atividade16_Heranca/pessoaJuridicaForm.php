<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa Juridica</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="nomeFantasia"><b>Nome Fantasia: </b></label></br>
        <input type="text" name="nomeFantasia" placeholder="" required>
        <br><br>
        <label for="razaoSocial"><b>Razao Social: </b></label></br>
        <input type="text" name="razaoSocial" placeholder="" required>
        <br><br>
        <label for="cnpj"><b>CNPJ: </b></label></br>
        <input type="text" name="cnpj" placeholder="" required>
        <br><br>
        <label for="email"><b>Email: </b></label></br>
        <input type="text" name="email" placeholder="" required>
        <br><br>
        <label for="telefone"><b>Telefone: </b></label></br>
        <input type="text" name="telefone" placeholder="" required>
        <br><br>
        <label for="endereco"><b>Endereco: </b></label></br>
        <input type="text" name="endereco" placeholder="" required>
        <br><br>
        <button type="submit">ENVIAR</button>
    </form>

    <?php

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
            include "Pessoa.class.php";
            include "PessoaJuridica.class.php";
        
            $objetoPessoaJuridica = new PessoaJuridica();
        
            //metodos da classe pai "Pessoa"
            $objetoPessoaJuridica->setEmail($_POST["email"]);
            $objetoPessoaJuridica->setTelefone($_POST["telefone"]);
            $objetoPessoaJuridica->setEndereco($_POST["endereco"]);
        
            //metodos da classe "PessoaJuridica"
            $objetoPessoaJuridica->setNomeFantasia($_POST["nomeFantasia"]);
            $objetoPessoaJuridica->setRazaoSocial($_POST["razaoSocial"]);
            $objetoPessoaJuridica->setCNPJ($_POST["cnpj"]);
        

            echo "<h3>Atributos da classe PESSOA</h3>";
            echo "<b>Email: </b>" . $objetoPessoaJuridica->getEmail() . "<br>";
            echo "<b>Telefone: </b>" . $objetoPessoaJuridica->getTelefone() . "<br>";
            echo "<b>Endereco: </b>" . $objetoPessoaJuridica->getEndereco() . "<br>";

            echo "<h3>Atributos da classe PESSOAJURIDICA</h3>";
            echo "<b>Nome Fantasia: </b>" . $objetoPessoaJuridica->getNomeFantasia() . "<br>";
            echo "<b>Razao Social: </b>" . $objetoPessoaJuridica->getRazaoSocial() . "<br>";
            echo "<b>CNPJ: </b>" . $objetoPessoaJuridica->getCNPJ() . "<br>";

            echo "<br><br>";
            echo "<a href='index.php'>VOLTAR</a>";

        }

    ?>
</body>
</html>