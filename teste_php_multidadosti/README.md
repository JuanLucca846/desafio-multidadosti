# DESAFIO

## Passos do Desafio:

1. **ATIVIDADE 1**: O cabeçalho, menu e rodapé serão comuns em várias páginas, portanto você
   deverá criar os arquivos cabeçalho.php, menu.php e rodapé.php e incluí-los
   no arquivo index.php, que deve ser a página principal.

2. **ATIVIDADE 2**: A lista de opções do menu deve ser construída dinamicamente.
   Crie um array com as opções que estão atualmente no menu estático e, após
   concluir o menu, adicione mais três itens:
   • Cadastro > Produtos.
   • Cadastro > Perfil de acesso.
   • Relatório > Produtos
   Por favor, deixe os itens em ordem alfabética.

3. **ATIVIDADE 3**: Existem três caixas coloridas na página Dashboards que são: Clientes,
   Usuários e Fornecedores.
   Ao carregar a página, os valores, que deverão ser apresentados em cada
   respectiva caixa, devem ser consultados no arquivo data_request.class.php.

4. **ATIVIDADE 4**: Ainda sobre as três caixas da página “Dashboards”, utilizando JavaScript, ao
   clicar no botão “Visualizar” de cada caixa, a tabela “Tabela Simples” deve
   pegar a cor da caixa clicada.
   Exemplo: clicou no botão Visualizar da caixa verde de usuários, a caixa Tabela
   Simples também fica verde.
   Esta ação deve utilizar apenas Javascript.

5. **ATIVIDADE 5**: O arquivo data_request.class.php contém uma classe e três funções que
   retornam seus respectivos dados em array.
   Estas funções são: dadosClientes, dadosFornecedores, dadosUsuarios.
   Ao clicar no botão Visualizar da caixa, além de trocar a cor conforme atividade
   anterior, o resultado da tabela deve ser apresentado com os dados retornados
   de cada uma das funções.
   As consultas devem ser realizadas via AJAX da biblioteca JQUERY.
