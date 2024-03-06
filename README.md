# API RESTful com Slim Framework
Esta é uma API RESTful implementada em PHP usando o Slim Framework. O objetivo deste projeto é fornecer uma estrutura sólida, seguindo boas práticas de arquitetura e ORM usando Illuminate do Laravel para interagir com o banco de dados de forma automática.

Além disso, o projeto inclui configurações para lidar com CORS, permitindo que outros sites façam requisições à API, bem como a implementação de token de autenticação para garantir que apenas usuários autorizados possam utilizar as funções da API. O JWT é usado para gerar e autenticar tokens de usuário.

# Configurações Necessárias
- Execute o cadastro manual de um usuário na tabela de usuários:

- Abra o terminal na pasta do projeto e execute o comando composer install para garantir que todas as dependências sejam instaladas com as versões corretas:

- Utilize o Postman para fazer requisições e receber respostas do projeto:

# Exemplos de Uso da API
Login para obter o token:

URL: http://localhost/slim-api/public/api/token

Configuração do Header Authorization: (token gerado)

Listar Produtos:

URL: http://localhost/slim-api/public/api/V1/produtos/lista

URL com ID específico: http://localhost/slim-api/public/api/V1/produtos/lista/{id}

Adicionar Produto:

URL: http://localhost/slim-api/public/api/V1/produtos/adiciona

Atualizar Produto:

URL: http://localhost/slim-api/public/api/V1/produtos/atualiza/{id}

Remover Produto:

URL: http://localhost/slim-api/public/api/V1/produtos/remove/{id}

