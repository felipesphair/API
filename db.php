<?php
if (PHP_SAPI != 'cli') {
   exit('Rodar via CLI');
}

require __DIR__ . '/vendor/autoload.php';

// Instantiate the app
$settings = require __DIR__ . '/src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/src/dependencies.php';

$db = $container->get('db');

$schema = $db->schema();

$tabela = 'produtos';

$tabelaUsuario = 'usuarios';

$schema->dropIfExists($tabela);
$schema->dropIfExists($tabelaUsuario);

$schema->create($tabela, function($table){
    $table->increments('id');
    $table->string('titulo', 100);
    $table->text('descricao');
    $table->decimal('preco',11,2);
    $table->string('fabricante',60);
    $table->timestamps();
    
    
});

$schema->create($tabelaUsuario, function($table){
    $table->increments('id');
    $table->string('nome', 100);
    $table->string('email', 150);
    $table->string('senha', 32);
});


$senhaCriptografada = md5("123456");

$db->table($tabelaUsuario)->insert([
    'id' => 1,
    'nome' => "Administrador",
    'email' => "admin@gmail.com",
    'senha' => $senhaCriptografada
]);



$db->table($tabela)->insert([
    'titulo' => 'Smartphone Motorola Moto G6 32GB Dual Chip',
    'descricao' => 'Android Oreo - 8.0 Tela 5.7 "Octa-core 1.8 GHz 4G Câmera 12 + 5MP (Dual Traseira) - Índigo',
    'preco' => 899.00,
    'fabricante' => 'Motorola',
    'created_at' => '2019-10-22',
    'updated_at' => '2019-10-22'

]);

$db->table($tabela)->insert([
    'titulo' => 'iPhone 11 64GB',
    'descricao' => 'iOS 13 - Tela 6.1" A13 Bionic 4G Câmera 12MP (Dual Traseira) - Preto',
    'preco' => 699.00,
    'fabricante' => 'Apple',
    'created_at' => '2019-10-22',
    'updated_at' => '2019-10-22'
]);

$db->table($tabela)->insert([
    'titulo' => 'Samsung Galaxy S20 Ultra 5G',
    'descricao' => 'Android 10 - Tela 6.9" Exynos 990 (Global) Snapdragon 865 (USA) 5G Câmera 108 + 48 + 12MP (Quad Traseira) - Cosmic Gray',
    'preco' => 1399.00,
    'fabricante' => 'Samsung',
    'created_at' => '2019-10-22',
    'updated_at' => '2019-10-22'
]);

