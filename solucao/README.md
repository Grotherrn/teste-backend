# Solução - Desafio de Programação Backend

    Este repositório foi desenvolvido como proposta de solução para o 
    [Desafio de Programação Backend](https://github.com/hudsonsza/teste-backend).
    Solução desenvolvida por Guilherme Rother Nantes, 
    no período de 17/06/2022 a 19/06/2022.
## Ambiente
    Para desenvolvimento desta solução, utilizei o ambiente provido pelo pacote XAMPP. 
    Mais especificamente, utilizei da integração com Apache e MySQL (MariaDB).

## Conteúdo dos Arquivos

### [model/config.php](https://github.com/Grotherrn/teste-backend/blob/master/solucao/model/transactions.php)
    Este arquivo contém as variáveis necessárias para conexão com o banco de dados. 
    Também é esponsável por realizar a conexão.

### [model/transactions.php](https://github.com/Grotherrn/teste-backend/blob/master/solucao/model/transactions.php)
    Este arquivo contém a descrição da relação de tipos de operações, 
    com suas respectivas características.

### [view/index.php](https://github.com/Grotherrn/teste-backend/blob/master/solucao/view/index.php)
    Este arquivo apresenta a página inicial da aplicação, contendo um formulário 
    para envio do arquivo de texto CNAB
    e um botão para visualização da lista resultado da inserção no banco de dados.

### [view/relatorio.php](https://github.com/Grotherrn/teste-backend/blob/master/solucao/view/relatorio.php)
    Este arquivo apresenta a página de relatório da aplicação, 
    contendo a lista de transações inseridas no banco de dados 
    organizada conforme solicitado, e um botão de retorno à página inicial.

### [controller/insertion.php](https://github.com/Grotherrn/teste-backend/blob/master/solucao/controller/insertion.php)
    Este arquivo contém as instruções para inserção no banco de dados 
    do conteúdo do arquivo de texto CNAB. 
    Também é responsável por normalizar os dados para inserção.