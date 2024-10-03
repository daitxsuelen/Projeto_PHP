<?php

namespace App\Http\Controllers;

use App\Responses\ApiResponse;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function salvar(){

    }

    public function editar(int $id): void{

    }

    public function listar(){
        return ApiResponse:: success(data: ["nome" =>"Suelen"]);
    }

    public function excluir(int $id){

    }
}



//um framework organiza o código e entrega requisitos básicos prontos