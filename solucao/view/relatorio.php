<?php
include("../model/config.php");
include("../model/transactions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /**
     * Query para verificação da existência de carga no banco de dados
     */
    $query_teste = "SELECT * FROM transacoes";
    $query_result = mysqli_query($connection, $query_teste);

    /**
     * Se há dados carregados, exibe uma lista das operações importadas por lojas
     * e o respectivo saldo em conta.
     * @var \mysqli_result|bool $query_nome_lojas armazena uma lista com 
     * o nome das lojas presentes no banco de dados;
     * @var \mysqli_result|bool $query_transacoes_loja armazena uma lista com
     * as informações das transações realizadas por uma loja.
     * @var float $saldo_loja armazena o somatório do saldo em conta com as transações realizadas
     * já observadas.
     */
    if ($query_result->num_rows > 0) {
        $str_q_nome_lojas = "SELECT DISTINCT nome_da_loja FROM transacoes";
        $query_nome_lojas = mysqli_query($connection, $str_q_nome_lojas);
        
        while ($row = $query_nome_lojas->fetch_assoc()) {
            echo "Operações importadas por " . $row['nome_da_loja'] . "<br>";

            $str_q_transacoes_loja = "SELECT tipo, data_t, valor, cpf, cartao, hora, dono_da_loja, nome_da_loja 
        FROM transacoes WHERE nome_da_loja = '" . $row['nome_da_loja'] . "'";
            $query_transacoes_loja = mysqli_query($connection, $str_q_transacoes_loja);

            $saldo_loja = 0.00;
            while ($sub_row = $query_transacoes_loja->fetch_assoc()) {
                echo "Tipo: " . $tiposTransacoes[$sub_row['tipo']][0] .
                    " | Data: " . $sub_row['data_t'] . " | hora: " . $sub_row['hora'] .
                    " | Valor: " . strval(number_format($sub_row['valor'], 2, ',', '.')) . "<br>";

                $saldo_loja += $tiposTransacoes[$sub_row['tipo']][1] * $sub_row['valor'];
            }
            echo "<br> Saldo da Loja" . $row['nome_da_loja'] . ": " . strval(number_format($saldo_loja, 2, ',', '.')) . "<hr><br>";
        }
    } else {
        echo "Não há transações a exibir.";
    }
    ?>

    <form action="../view/index.php" method="$_REQUEST">
        <input type="submit" value="Voltar">
    </form>
</body>

</html>