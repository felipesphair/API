<?php

use Slim\Http\Request;
use Slim\Http\Response;


$app->options('/{routes:.+}', function(Request $request, Response $response, $args){
    return $response;
});
// Routes

require __DIR__ .'/routes/autenticacao.php';
require __DIR__ .'/routes/produtos.php';


$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function($req, $res) {
    $handler = $this->notFoundHandler; // handle using the default Slim page not found handler
    return $handler($req, $res);
});