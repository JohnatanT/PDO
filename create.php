<?php

require_once 'conection.php';

$conn = getConection();

$sql = 'INSERT INTO produto (descricao,qtd,valor) VALUES (:desc,:qtd,:val)';

$stmt = $conn->prepare($sql);

$descricao = "";
$qtd = 10;
$valor = 4.50;

$stmt->bindParam(':desc',$descricao);
$stmt->bindParam(':qtd',$qtd);
$stmt->bindParam(':val',$valor);

if($stmt->execute()){
    echo "Salvo com sucesso";
}else{
    echo "Erro!";
}


