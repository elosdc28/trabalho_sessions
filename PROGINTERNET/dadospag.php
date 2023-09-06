<?php
session_start();

$_SESSION['dadospag'] = "";

$usuario = (isset($_SESSION['usuario']['usuario'])? $_SESSION['usuario']['usuario']: "");
$nome = (isset($_SESSION['usuario']['nome'])? $_SESSION['usuario']['nome']: "");
$endereco = (isset($_SESSION['usuario']['endereco'])? $_SESSION['usuario']['endereco']: "");
$valorTotal = (isset($_SESSION['valortotal'])? $_SESSION['valortotal']: "");



if(isset($_POST['pagar'])){
    echo "OK";
    if(isset($_POST['metpag'])){
        $metpag = $_POST['metpag'];
        $numcartao_avista = (isset($_POST['numcartao_avista']) ? $_POST['numcartao_avista'] : "");
        $numcartao_credito = (isset($_POST['numcartao_credito']) ? $_POST['numcartao_credito'] : "");

        $_SESSION['dadospag'] = array('metpag' => $metpag,
                                        'numcartao_avista' => $numcartao_avista,
                                        'numcartao_credito' => $numcartao_credito);
        
        header('Location: resumocompra.php', true, 303);
    }
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
<table>
            <tr>
                <th colspan="2">Dados do Usuário</th>
            </tr>
            <tr>
                <td>Usuário</td>
                <td><?php echo $usuario; ?></td>
            </tr>
            <tr>
                <td>Nome Completo:</td>
                <td><?php echo $nome; ?></td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td><?php echo $endereco; ?></td>
            </tr>
        </table>
        <br>

<form action="dadospag.php" method="post">
    <table>
        <tr>
            <th colspan="4">Dados do Pagamento</th>
        </tr>
        <tr>
            <th>#</th>
            <th>Método de Pagamento</th>
            <th colspan="2">Dados da Cobrança</th>
        </tr>
        <tr>
            <td><input type="radio" name="metpag" value="deb-avista"></td>
            <td>Débito à vista </td>
            <td>Número do cartão</td>
            
        </tr>
        <tr>
            <td><input type="radio" name="metpag" value="credito"></td>
            <td>Crédito à vista </td>
            <td>Número do cartão</td>
            <td><input type="text" name="numcartao-credito"></td>
        </tr>
        <tr>
            <td><input type="radio" name="metpag" value="pix"></td>
            <td>PIX</td>
            <td>Número do PIX</td>
            <td><input type="text" name="numpix"></td>
        </tr>
        <tr>
            <th colspan="2"></th>
            <th>Valor Total</th>
            <th> <?php echo $valorTotal; ?></th>
        </tr>
        <tr>
            <td colspan="4"><input type ="submit" name="pagar" value="pagar"></td>
        </tr>

    </table>
</form>
</body>
</html