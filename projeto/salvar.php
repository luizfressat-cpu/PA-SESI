<?php

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$pai = $_POST["pai"];
$mae = $_POST["mae"];
$turma = $_POST["turma"];
$serie = $_POST["serie"];
$cpf = $_POST["cpf"];

echo "<h2>Aluno cadastrado!</h2>";

echo "Nome: $nome <br>";
echo "Sobrenome: $sobrenome <br>";
echo "Pai: $pai <br>";
echo "Mãe: $mae <br>";
echo "Turma: $turma <br>";
echo "Série: $serie <br>";
echo "CPF: $cpf <br>";

?>