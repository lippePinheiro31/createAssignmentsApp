<?php

session_start();

//abrindo o arquivo;
$arquivo = fopen('arquivo.as','a');

$titulo = str_replace('#', '-', $_POST['titulo']);
$disciplina = str_replace('#', '-', $_POST['disciplina']);
$data = str_replace('#','-',  $_POST['data']);
$descricao = str_replace('#','-',  $_POST['descricao']);

$texto = $_SESSION['id'] . '#' . $titulo .'#'. $disciplina . '#'. $data . '#'. $descricao . PHP_EOL;

//escrevendo o texto;
fwrite($arquivo, $texto);

//fechando o arquivo
fclose($arquivo);

header('location:criar_tarefa.php');


?>