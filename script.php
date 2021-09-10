<?php

$categorias = [];
$categorias[] = 'infantil'; 
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <=12){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'infantil')
            echo "O nadador ", $nome, " compete na categoia ", $categorias[$i];
    }
}else if($idade >= 13 && $idade <=16){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
            echo "O nadador ", $nome, " compete na categoia ", $categorias[$i];
    }
}else{
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
            echo "O nadador ", $nome, " compete na categoia ", $categorias[$i];
    }
}



?>