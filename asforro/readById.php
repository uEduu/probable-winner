<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;

        }
        p{
            font-size: large;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width:50%; 
            margin: 8px 0; 
            display: inline-block;
        }
        label{
            font-weight: bold;
            width:20%;
            padding-right:50%;
        }
        </style>
</head>
<body>
    <h3>Informações sobre membro
    <a href="index.php"><input type="button" value="Menu Principal"></a>
    </h3>
    <?php
    $conn=mysqli_connect('localhost','root','');
    if($conn->connect_error){
        die('Falha ao conectar'. $conn->connect_error);
    }
    $cpf=$_GET["cpf"];
    $sql= "select * from db_asforro.membro where cpf='$cpf'";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo '<div><label>Nome:</label><p>'.$row['nome'].'</p></br>';
            echo '<label>CPF:</label><p>'.$row['cpf'].'</p></br>';
            echo '<label>Contato:</label><p>'.$row['contato'].'</p></br>';
            echo '<label>Nome Artistico:</label><p>'.$row['nome_artista'].'</p></br>';
            echo '<label>E-mail:</label><p>'.$row['email'].'</p></br>';
            echo '<label>Categoria:</label><p>'.$row['categoria'].'</p></br>';
            echo '<label>Instrumentos:</label><p>'.$row['instrumentos'].'</p></br>';
            echo '<label>Banda:</label><p>'.$row['banda_trio'].'</p></br>';
            echo '<label>Endereço:</label><p>'.$row['endereco'].'</p></br>';
            echo '<label>RG:</label><p>'.$row['rg'].'</p></br>';
            echo '<label>CNPJ:</label><p>'.$row['cnpj'].'</p></br>';
            echo '<label>Data de Nascimento:</label><p>'.$row['data_nascimento'].'</p></br>';
            echo '<a href=update.php?cpf='.$row['cpf'].'><input type="button" value="Modificar"></a><a href="delete.php"><input type="button" class="vermelho" value="Deletar"></a></div>';
        }
    }
    ?>
    </body>
    </html>