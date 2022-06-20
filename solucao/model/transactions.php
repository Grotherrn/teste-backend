<?php
/**
 * @var array $tiposTransacoes Relaciona estaticamente os identificadores de tipo de transação
 * a seus respectivos nome e multiplicador indicativo da natureza (entrada/ saída) da operação.
 */
    $tiposTransacoes = array(
        1 => array ("Débito", 1),
        2 => array ("Boleto", -1),
        3 => array ("Financiamento", -1),
        4 => array ("Crédito", 1),
        5 => array ("Recebimento Empréstimo", 1),
        6 => array ("Vendas", 1),
        7 => array ("Recebimento TED", 1),
        8 => array ("Recebimento DOC", 1),
        9 => array ("Aluguel", -1)
    );
?>