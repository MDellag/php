<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Models\Empleado;

class EmpleadoController {

    public function getAll (Request $request, Response $response, $args) {
        $rta = Empleado::get();

        // $response->getBody()->write("String");
        $response->getBody()->write(json_encode($rta));
        return $response;
    }

    public function getOne(Request $request, Response $response, $args)
    {
        $rta = Empleado::find($args['id']);;
        //$rta = Usuario::where('id',1)->first();

        $response->getBody()->write(json_encode($rta));
        return $response;
    }

    public function addOne(Request $request, Response $response, $args)
    {   
        $req = $request->getParsedBody();
        $date =  date('Y-m-d');
        $empleado = new Empleado;
        
        $empleado->name = $req['name'];
        $empleado->lastname = $req['lastname'];
        $empleado->dni = $req['dni'];
        $empleado->creationDate = $date;

        $rta = $empleado->save();

        
        $response->getBody()->write(json_encode($rta));
        return $response;
    }

    public function updateOne(Request $request, Response $response, $args)
    {
        $user = Empleado::find(10);

        $user->usuario = "Pepe Grillo!!";

        $rta = $user->save();

        $response->getBody()->write(json_encode($rta));
        return $response;
    }

    public function deleteOne(Request $request, Response $response, $args)
    {
        $user = Empleado::find(10);

        $rta = $user->delete();

        $response->getBody()->write(json_encode($rta));
        return $response;
    }

}

