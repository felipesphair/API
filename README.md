# API RESTful com Slim Framework

Esta é uma API RESTful implementada em PHP usando o Slim Framework. O objetivo deste projeto é fornecer uma estrutura sólida, seguindo boas práticas de arquitetura e ORM usando Illuminate do Laravel para interagir com o banco de dados de forma automática.

Além disso, o projeto inclui configurações para lidar com CORS, permitindo que outros sites façam requisições à API, bem como a implementação de token de autenticação para garantir que apenas usuários autorizados possam utilizar as funções da API. O JWT é usado para gerar e autenticar tokens de usuário.

# Configurações Necessárias

- Tenha o Xampp instalado:
  
  <img width="492" alt="image" src="https://github.com/felipesphair/API/assets/107360437/c849e64a-07dd-4996-9c86-64f03493c375">

- Coloque a pasta que baixou no HTDOCS nos arquivos onde o Xampp foi instalado:

 <img width="960" alt="image" src="https://github.com/felipesphair/API/assets/107360437/b4cd7c12-55a3-401c-b402-0e406d4588be">

- Inicie o Apache e MYSQL:

  <img width="420" alt="image" src="https://github.com/felipesphair/API/assets/107360437/2f814491-883f-4581-b170-1f951d7e3217">


- Crie a database no MYSQL com o nome de slim:

  <img width="960" alt="image" src="https://github.com/felipesphair/API/assets/107360437/8154ef27-40df-4878-a075-955b125c9c3f">

- Abra o cmd pela pasta onde está o projeto e digite **php db.php**:

  <img width="960" alt="image" src="https://github.com/felipesphair/API/assets/107360437/24dd998e-66ef-4781-b4f2-d3e46ebf8255">
    
- Abra o terminal na pasta do projeto e execute o comando composer install para garantir que todas as dependências sejam instaladas com as versões corretas:

  <img width="960" alt="image" src="https://github.com/felipesphair/API/assets/107360437/b9c9046d-9bd5-4d72-9326-06b302c763dc">

- Utilize o Postman para fazer requisições e receber respostas do projeto:

  URL: https://www.postman.com/blue-shadow-28141/workspace/online/api/12f5df8f-7086-446c-94fa-f90a15183419
  
  <img width="959" alt="image" src="https://github.com/felipesphair/API/assets/107360437/a5b56005-c7a6-4d31-8a53-16f2becce124">

- Caso deseje adicionar mais um usuario no banco de dados coloque a opção de senha md5 sempre!

# Exemplos de Uso da API

- Login para obter o token:

      URL: http://localhost/slim-api/public/api/token

- Configuração do Header Authorization: (token gerado)

- Listar Produtos:

      URL: http://localhost/slim-api/public/api/V1/produtos/lista

      URL com ID específico: http://localhost/slim-api/public/api/V1/produtos/lista/{id}

- Adicionar Produto:

      URL: http://localhost/slim-api/public/api/V1/produtos/adiciona

- Atualizar Produto:

      URL: http://localhost/slim-api/public/api/V1/produtos/atualiza/{id}

- Remover Produto:

      URL: http://localhost/slim-api/public/api/V1/produtos/remove/{id}

