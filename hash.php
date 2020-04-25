<?php
$palavra = '263bce650e68ab4e23f28263760b9fa5'; //hash
echo "Hash md5 a descobrir: ".$palavra."<br>";
$wl = file('wordlist.txt'); //Lê arquivo

echo "Conteudo arquivo wordlist: ".count($wl)." Palavras<br>"; //conta linhas
foreach ($wl as $linha) { //loop
        //echo trim($linha)."<br>"; //imprime linhas sem espaços
        if ($palavra == md5(trim($linha))){ //condição de igualdade
            echo "O hash de ".$palavra." é: ".$linha;
        break; // para o loop se verdadeiro
        }
    }
?>

