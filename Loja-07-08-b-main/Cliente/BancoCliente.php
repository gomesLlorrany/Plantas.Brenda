<?php

$nome = $_POST['nome'];
$CPF = $_POST['CPF'];
$Email = $_POST['Email'];
$Telefone = $_POST['Telefone'];
$Endereco = $_POST['Endereco'];
$numero = $_POST['numero'];

echo "$nome;
$CPF;
$Email;
$Telefone;
$Endereco;
$numero";


// include '../Entre_outros/conexao.php';

// $insert_cliente = "INSERT INTO tb_cliente VALUES 
// (NULL, '$nome', '$CPF', '$Email', '$Telefone', '$Endereco', '$numero' )";

// $resultado = $conexao->query($insert_cliente);

// if ($resultado) {
//     echo "<script>alert('Inserido com sucesso'); history.back() </script>";
// }
