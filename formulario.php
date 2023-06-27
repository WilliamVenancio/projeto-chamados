<?php

session_start();
include("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_UNSAFE_RAW);
$depart = filter_input(INPUT_POST, 'departamento', FILTER_UNSAFE_RAW);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_FLOAT);
$numquip = filter_input(INPUT_POST, 'numequip', FILTER_SANITIZE_NUMBER_INT);
$nomequip = filter_input(INPUT_POST, 'nomeequip', FILTER_UNSAFE_RAW);
$descproblem = filter_input(INPUT_POST, 'descproblema', FILTER_UNSAFE_RAW);


$result_chamado = "INSERT INTO chamados (nome, departamento, email, telefone, numequip, nomeequip, descproblema) VALUES ('$nome', '$depart', '$email', '$telefone', '$numquip', '$nomequip', '$descproblem')";
$resultado_chamado = mysqli_query($conexao, $result_chamado);


?>