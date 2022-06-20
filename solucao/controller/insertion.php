<?php
include("../model/config.php");
session_start();

/**
 * @var array $dados armazena os dados do arquivo submetido.
 */
$userFile_temp = $_FILES['userFile']['tmp_name'];
$dados = file($userFile_temp);

/**
 * Para cada linha de dados do arquivo submetido, separa, normaliza
 * os atributos de uma transação e insere no banco de dados. 
 */
foreach ($dados as $linha) {
    $str_linha = trim($linha);

    $str_tipo = substr($str_linha, 0, 1);
    $tipo = intval($str_tipo);

    $str_ano = substr($str_linha, 1, 4);
    $str_mes = substr($str_linha, 5, 2);
    $str_dia = substr($str_linha, 7, 2);
    $data_t = $str_ano . "-" . $str_mes . "-" . $str_dia;

    $str_valor = substr($str_linha, 9, 10);
    $valor_temp = floatval($str_valor);
    $valor = $valor_temp / 100.00;

    $cpf = substr($str_linha, 19, 11);

    $cartao = substr($str_linha, 30, 12);

    $str_h = substr($str_linha, 42, 2);
    $str_m = substr($str_linha, 44, 2);
    $str_s = substr($str_linha, 46, 2);
    $hora = $str_h . ":" . $str_m . ":" . $str_s;

    $dono_da_loja = substr($str_linha, 48, 14);

    $nome_da_loja = substr($str_linha, 62);

    $str_query = "INSERT INTO transacoes (tipo, data_t, valor, cpf, cartao, hora, dono_da_loja, nome_da_loja)
        VALUES ('$tipo', '$data_t', '$valor', '$cpf', '$cartao', '$hora', '$dono_da_loja', '$nome_da_loja')";

    $query_build = mysqli_query($connection, $str_query);
}

/**
 * Envia mensagem de sucesso da carga de dados.
 */
$_SESSION['mensagem'] = "Carga de dados realizada com sucesso.";
header("Location: ../view/index.php");
