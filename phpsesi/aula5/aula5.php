<?php
$nome = ["João", "Maria", "José", "Ana", "Pedro", "Lucas"];
$nomePesquisado = "";
$foiEncontrado = false;
$nomePesquisado = "Solange";

do{
if(empty($nomePesquisado)){
    print"Nome invalido! Digite novamente!";
}
}while(empty($nomePesquisado));

if (!empty($nomePesquisado)){
    echo"<h2> Pesquisa de $nomePesquisado </h2>";
    for($i=0; $i<count($nome); $i++){
        if($nome[$i] == $nomePesquisado){
            $foiEncontrado = true;
            break;
        }
}
}
if($foiEncontrado == true){
    echo"<h3> Nome encontrado! </h3>";
}else{
    echo"<h3> Nome não encontrado! </h3>";
}
?>