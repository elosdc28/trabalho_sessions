<?php
session_start();

$ni = 0;
$_SESSION['itens'] = array();
$_SESSION['valortotal'] = 0.0;
$valorTotal = 0.0;

if(isset($_POST["comprar"])){
    for($i = 0;$i < 8; $i++){
        if(isset($_POST['ch'.$i])){
            $c = $ni;
            $desc = $_POST['desc'.$i]; 
            $qtd = $_POST['qtd'.$i];
            $vl = $_POST['vl'.$i];

            $valorTotal += ( $vl * $qtd );

            //echo $i . " [x] " . $desc . "<br>";

            $_SESSION['itens'] = array_merge( $_SESSION['itens'],
                                        array( $c => array(
                                            'ni' => $i,
                                            'desc' => $desc,
                                            'qtd' => $qtd,
                                            'vl' => $vl 
                                        ) ) );
            //ni é a quantidade de elementos que foram selecionados
            $ni += 1;
        }
      
    }
    if($ni > 0){
      $_SESSION['valortotal'] = $valorTotal;

        header('Location: usuario.php', true, 303);

        /*for($i = 0;$i < $ni; $i++){
            echo $i . $_SESSION['itens'][$i]['desc'] . " - " . $_SESSION['itens'][$i]['vl'] . "<br>";
        }*/
    }

    //echo 'Valor Total' . $valorTotal;

   
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


    <style>
      </style>
</head>
<body>
    <form action="compras.php" method="post">
    <table>
      <tr>
        <th colspan ="5">Lista de compras</th>
      </tr>
      <tr>
        <th>Produtos</th>
        <th>[x]</th>
        <th>Descrição</th> 
        <th>Quantidade</th>
        <th>Valor</th>
      </tr>
      <tr>
        <td>1</td>
        <td><input type="checkbox" name="ch0"></td>
        <td><input type ="text" name="desc0" value="Caderno 20 matérias" readonly></td> 
        <td><input type ="number" name="qtd0" value="0" ></td>
        <td><input type ="text" name="vl0" value="29.99" readonly></td>
      </tr>
      <tr>
        <td>2</td>
        <td><input type="checkbox" name="ch1"></td>
        <td><input type ="text" name="desc1" value="Caderno 10 matérias" readonly></td> 
        <td><input type ="number" name="qtd1" value="0" ></td>
        <td><input type ="text" name="vl1" value="19.99" readonly></td>
      </tr>
      <tr>
        <td>3</td>
        <td><input type="checkbox" name="ch2"></td>
        <td><input type ="text" name="desc2" value="Caderno 25 matérias" readonly></td> 
        <td><input type ="number" name="qtd2" value="0" ></td>
        <td><input type ="text" name="vl2" value="34.99" readonly></td>
      </tr>
      <tr>
        <td>4</td>
        <td><input type="checkbox" name="ch3"></td>
        <td><input type ="text" name="desc3" value="Lápis grafit" readonly></td> 
        <td><input type ="number" name="qtd3" value="0" ></td>
        <td><input type ="text" name="vl3" value="1.99" readonly></td>
      </tr>
      <tr>
        <td>5</td>
        <td><input type="checkbox" name="ch4"></td>
        <td><input type ="text" name="desc4" value="Estojo" readonly></td> 
        <td><input type ="number" name="qtd4" value="0" ></td>
        <td><input type ="text" name="vl4" value="9.99" readonly></td>
      </tr>
      <tr>
        <td>6</td>
        <td><input type="checkbox" name="ch5"></td>
        <td><input type ="text" name="desc5" value="Caderno 20 matérias" readonly></td> 
        <td><input type ="number" name="qtd5" value="0" ></td>
        <td><input type ="text" name="vl5" value="29.99" readonly></td>
      </tr>
      <tr>
        <td>7</td>
        <td><input type="checkbox" name="ch6"></td>
        <td><input type ="text" name="desc6" value="Caderno 20 matérias" readonly></td> 
        <td><input type ="number" name="qtd6" value="0" ></td>
        <td><input type ="text" name="vl6" value="29.99" readonly></td>
      </tr>
      <tr>
        <td>8</td>
        <td><input type="checkbox" name="ch7"></td>
        <td><input type ="text" name="desc7" value="Caderno 20 matérias" readonly></td> 
        <td><input type ="number" name="qtd7" value="0" ></td>
        <td><input type ="text" name="vl7" value="29.99" readonly></td>
      </tr>
      <tr>
        <td>9</td>
        <td><input type="checkbox" name="ch8"></td>
        <td><input type ="text" name="desc8" value="Caderno 20 matérias" readonly></td> 
        <td><input type ="number" name="qtd8" value="0" ></td>
        <td><input type ="text" name="vl8" value="29.99" readonly></td>
      </tr>
      <td>
      <tr>
        <td colspan ="5">
          <input type ="submit" name="comprar" value="Comprar">
        </td>
      </tr>
</table>
    </form>
</body>
</html>