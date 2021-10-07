<meta charset="UTF-8">
<script>
    alert("Arquivos estão sendo gravados.");
</script>

<?php

$L1 = $_POST["L1"];
$L2 = $_POST["L2"];
$L3 = $_POST["L3"];
 

if ($L1<$L2+$L3 && $L2<$L1+$L3 && $L3<$L1+$L2) {
	
    if ($L1==$L2 && $L2==$L3) {
        $f = fopen("QUALOSEUTRIANGULO.txt", "w");  
        $conteudo = "Seu triângulo é equilátero, pois possui todos os lados iguais.";
        fwrite($f, $conteudo);  
      fclose($f);  
         $f = fopen("QUALOSEUTRIANGULO.txt", "r");  
          while(!feof($f)) {  
            $linha = fgets($f)."<br />";    
            echo $linha; }   
                  fclose($f);
    }
    else if ( $L1!=$L2 && $L2!=$L3) {
        $f = fopen("QUALOSEUTRIANGULO.txt", "w");  
        $conteudo = "Seu triângulo é escaleno, pois possui todos os lados diferentes.";
        fwrite($f, $conteudo);  
           fclose($f);  
              $f = fopen("QUALOSEUTRIANGULO.txt", "r");  
               while(!feof($f)) {  
                 $linha = fgets($f)."<br />";    
                 echo $linha; }   
                       fclose($f);
    }
    
    else if($L1==$L2 || $L1==$L3 || $L2==$L3){
        $f = fopen("QUALOSEUTRIANGULO.txt", "w");  
        $conteudo = "Seu triângulo é isóceles, pois possui dois lados iguais e um diferente.";
        fwrite($f, $conteudo);  
           fclose($f);  
              $f = fopen("QUALOSEUTRIANGULO.txt", "r");  
               while(!feof($f)) {  
                 $linha = fgets($f)."<br />";    
                 echo $linha; }   
                       fclose($f);
    }
    
    }
    else {
        $f = fopen("QUALOSEUTRIANGULO.txt", "w");  
        $conteudo = "NÃO É TRIÂNGULO!";
        fwrite($f, $conteudo);  
           fclose($f);  
              $f = fopen("QUALOSEUTRIANGULO.txt", "r");  
               while(!feof($f)) {  
                 $linha = fgets($f)."<br />";    
                 echo $linha; }   
                       fclose($f);
    }
?>

<a href="TriangulosPHP-GeovanaBeatriz.html">Voltar para a tela principal.</a>