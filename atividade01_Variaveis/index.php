<?php

	$nome = "Calebe";
	$sobrenome = "Campos";
	$idade = 35;
	$peso = 95.623;
	$altura = 1.84;
	$profissao = "Administrador de Bando de Dados (DBA)";
	$tipoSanguineo = "AB+";
	$imc = number_format(($peso / ($altura * $altura)),2);

	
	echo 
		"<center>"
		."<h1>INFORMAÇÕES PESSOAIS</h1>"
		."<hr>"
		."Nome: ".$nome." ".$sobrenome.".<br/>"
		."Idade: ".$idade." anos".".<br/>"
		."Altura: ".$altura." m".".<br/>"
		."Peso: ".$peso." Kg".".<br/>"
		."IMC: ".$imc." Kg/m²".".<br/>"
		."Profissao: ".$profissao.".<br/>"
		."Tipo Sanguineo: ".$tipoSanguineo.".<br/>"
		."</center>";
	
?>