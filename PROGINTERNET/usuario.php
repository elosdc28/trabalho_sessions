<?php
session_start();
     $i = 0;
     foreach($_SESSION['itens'] as $item){
            echo $i . $item['desc'] . " - " . $item['vl'] . "<br>";
            $i++;
        }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main-css.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="usuario.php" method="post">
        <table>
            <tr>
                <th colspan="2">Dados do Usuário</th>
            </tr>
            <tr>
                <td>Usuário</td>
                <td><input type ="text" name="usuario"></td>
            </tr>
            <tr>
                <td>Nome Completo:</td>
                <td><input type ="text" name="nome"></td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td><input type ="text" name="endereco"></td>
            </tr>
            <tr>
                <td colspan ="2">
                     <input type ="submit" name="logar" value="Logar">
                </td>
            </tr>
        </table>
    </form>
    <table>
        <tr>
            <th colspan ="5">itens da compras</th>
        </tr>
        <tr>
            <th>#</th>
            <th>Núm. Item</th>
            <th>Descrição</th> 
            <th>Quantidade</th>
            <th>Valor</th>
        </tr>
        <?php
            $i = 0;
            if(isset($_SESSION['itens'])){
                foreach($_SESSION['itens'] as $item){
            
        ?>
      <tr>
        <td>1</td>
        <td><input type="checkbox" name="ch0"></td>
        <td><input type ="text" name="desc0" value="Caderno 20 matérias" readonly></td> 
        <td><input type ="number" name="qtd0" value="0" ></td>
        <td><input type ="text" name="vl0" value="29.99" readonly></td>
      </tr>
                
      <?php
                  }
                }
      ?>
    </table>
</body>
</html>