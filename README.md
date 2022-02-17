Foi criado conforme solicitado ao teste, o crud de produto, e tag, tela de login simples... 
Não foi utilizado framework para construção, é necessário instalar o xampp na sua versão mais recente e não utilizei a arquitetura mvc.
essa tela não tem como a pessoa se cadastrar apenas loga com usuario criado no banco.
Para testar é necessário restaurar o banco junto com os arquivos o nome é "desafio", projeto feito com as tecs propostas. 

A pagina de relatório nao ficou pronta. 

Para logar no sistema:
usuario: gust@hotmail.com
senha:  123

SQL para fazer a consulta   listagem de Tags mais um sumarizador de Produtos atrelado a cada Tag:

SELECT produtos.nome AS produto, 
tags.nome AS tag,
 COUNT(produtos.nome) AS quantidade 
FROM produtos
 LEFT JOIN tags ON tags.id=produtos.tag 
GROUP BY tags.nome


QUERY PARA TRAZER PRODUTOS E QUANTIDADE: 

SELECT produtos.nome AS produto,
 COUNT(produtos.nome) AS quantidade 
from produtos 
LEFT JOIN tags ON tags.id=produtos.tag 
GROUP BY tags.nome
