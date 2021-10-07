<meta charset="UTF-8">
<?php
//Atribuindo os valores passados na URL a variáveis
$valor = $_GET["valor"];

echo "O valor digitado foi: ". $valor."<br><br>";


//Números até o valor digitado
if($valor>1){
echo "Números até o valor digitado: ";
for($x = 1; $x<= $valor; $x++){
    echo $x." ,";
}
}

//Soma do intervalo do valor digitado
if($valor > 1){
$contador = 0;
for($y = 1; $y<= $valor; $y++){
    $contador = $contador + $y;
   
}
echo "<br><br> A soma dos valores é: $contador<br><br>";
}

if($valor > 1){
    $contador = 0;
    for($y = 1; $y<= $valor; $y++){
        $contador = $contador + $y;
        $media = $contador/$valor;
       
    }
    echo "A média é: $media <br><br>";
    }

if($valor % 2 == 0){

    $contador = 0;
    echo "Os números pares são: ";
    for($y = 2; $y<= $valor; $y= $y + 2){
        $contador = $contador + 1;
        echo $y.",";

    }
    echo "<br>Quantidade de números pares: $contador";
    }
else{
    $contador = 0;
    echo "Os números impares são: ";
    for($y = 1; $y<= $valor; $y= $y + 2){
        $contador = $contador + 1;
        echo $y.",";
    }
    echo "<br>Quantidade de números impares: $contador";
}


?>