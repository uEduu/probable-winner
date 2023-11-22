<?php
$conexao = mysqli_connect("localhost","root","","db_asforro");
$dados = mysqli_query($conexao,"select * from membro");
while($tabela=mysqli_fetch_array($dados)){
    echo $tabela['cpf'].'<br/>'.$tabela['nome'].'<br/>'.$tabela['contato'];
}
?>