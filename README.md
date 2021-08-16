# ProcessoSeletivo
Processo seletivo para vaga de desenvolvedor júnior na empresa kryptontech
foi usado o banco de dados MySql, localhost na porta padrão(3306).
Passo 1- Clonar o repositório.
Passo 2- Possuir o xampp ou outro apache para iniciar o banco de dados.
Passo 3- Iniciar o apache e o mysql.
Passo 4- Executa os comandos sql em tabelas.sql para preparar o banco.
Passo 5- Acessar  url http://localhost/kryptontech/ProcessoSeletivo/tarefa-1/view/, para inicicar a tarefa 1.
Passo 6- Acessar o Postman e enviar uma requisição com o method POST na url http://localhost/kryptontech/ProcessoSeletivo/tarefa-2/api/public_html/api/rotina/1
Passo 7- Em body no campo form-data, passar no valor key o valor page, e em value o numero da página que deseja o acesso.

tarefa 1
Foi criado uma tabela de carro para novas inserções e exclusão, a tabela se encontra em tabelas.sql.
o sistema traz os dados consumido da api disponibilizada, e para novos cadastrados, faz a consulta do banco interno, sendo possivel excluir somente os carros cadastrados.

para a tarefa 2
a tabela e os inserts para consumo da api no banco local estão no arquivo tabelas.sql
O link para o consumo da API é 
http://localhost/kryptontech/ProcessoSeletivo/tarefa-2/api/public_html/api/rotina
o method POST e as paginas conforme solicitada trazendo de 5 em 5 resultados, o parâmetro deverá ser passado no body em form-data, com os valores page e numero da página e a página começando da numero 1.