<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use GuzzleHttp\Client;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
   //Ruta creada
   $app->get('/listarUsuarios', function (Request $request, Response $response) {
    $client = new Client();

    try {
        //Consumo url de regres
        $res = $client->get('https://reqres.in/api/users');
        //Conversion a json
        $usuarios = json_decode($res->getBody()->getContents(), true);
        //Obtener especificamente los datos de los usuarios de la api
        $response->getBody()->write(json_encode($usuarios['data']));
    } catch (\Exception $e) {

        $response->getBody()->write(json_encode(["error" => "No se pudo obtener los usuarios"]));
    }
    //envia respuesta para ser consumida
    return $response->withHeader('Content-Type', 'application/json');
});
};
