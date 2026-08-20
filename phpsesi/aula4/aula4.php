<!DOCTYPE html>
<html>
<body>
<h2>Carnê do Seu Ari</h2>

Nome:
<input id="nome"><br>

Valor:
<input id="valor"><br>

Parcelas:
<input id="parcelas"><br>

<button onclick="calcular()">Calcular</button>

<p id="resultado"></p>

<script>
function calcular(){

nome=document.getElementById("nome").value;
valor=document.getElementById("valor").value*1;
parcelas=document.getElementById("parcelas").value*1;

juros=valor*0.02*parcelas;
total=valor+juros;
parcela=total/parcelas;

cupom=1;

if(valor>=100){
cupom=valor/100;
}

document.getElementById("resultado").innerHTML =
"Cliente: "+nome+
"<br>Total: R$ "+total+
"<br>Parcela: R$ "+parcela+
"<br>Cupons: "+cupom;

}
</script>

</body>
</html>