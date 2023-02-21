<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtrosControllers extends Controller
{



    public function __construct()
    {
        //middleware personalizado llamado SecurityAlex  !Importante ir a kernel.php para agregarlo  linea del fichero protected $routeMiddleware!
        //Todo lo que se agrega en la clase OtrosControllers   es privado
        $this->middleware('SecurityAlex');
    }



         //Ruta privada, despues de iniciar sesion
         public function login_table(){

            return view("adm.datos");


        }

}
