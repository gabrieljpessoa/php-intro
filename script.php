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
if (empty($nome)){
    echo "O nome não pode ser vazio";
    return;
}
if(strlen($nome) < 3){
    echo "o nome de conter mais de 3 caracteres";
    return;
}
if (strlen($nome)> 40){
    echo "o Nome é muito extenso";
    return;
}
if(!is_numeric($idade)){
    echo "Informe uma idade valida";
    return;
}

if($idade >= 6 && $idade <=12){
    for($i = 0; $i <sizeof($categorias); $i++){
        if($categorias[$i] == 'infantil')
            echo "O nadador ", $nome, " compete na categoia ", $categorias[$i];
    }
}else if($idade >= 13 && $idade <=16){
    for($i = 0; $i <sizeof($categorias); $i++){
        if($categorias[$i] == 'adolescente')
            echo "O nadador ", $nome, " compete na categoia ", $categorias[$i];
    }
}else{
    for($i = 0; $i <sizeof($categorias); $i++){
        if($categorias[$i] == 'adulto')
            echo "O nadador ", $nome, " compete na categoia ", $categorias[$i];
    }
}

?>
<html>
</br>
    <form method="get" action="index.php">
        <button type="submit">Voltar ao cadastro</button>
    </form>
</html>