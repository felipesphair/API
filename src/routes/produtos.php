<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Produto;

$app->group('/api/v1', function(){
    $this->get('/produtos/lista', function(Request $request, Response $response){

        $produto = Produto::get();
        return $response->withJson($produto);
    });

    $this->post('/produtos/adiciona', function(Request $request, Response $response){

        $dados = $request->getParsedBody();
        $produto = Produto::create($dados);
        return $response->withJson($produto);
    });

    $this->get('/produtos/lista/{id}', function(Request $request, Response $response, $args){

        $id = $args['id'];
        $produto = Produto::findOrFail($id);
        return $response->withJson($produto);
    });

    $this->put('/produtos/atualiza/{id}', function(Request $request, Response $response, $args){

        $dados = $request->getParsedBody();
        $id = $args['id'];
        $produto = Produto::findOrFail($id);
        $produto->update($dados);
        return $response->withJson($produto);
    });

    
    $this->get('/produtos/remove/{id}', function(Request $request, Response $response, $args){

        $id = $args['id'];
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return $response->withJson($produto);
    });


        
});