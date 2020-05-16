<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\shared\CategoriesMasterController;
use Illuminate\Http\Request;
use App\Resources\CategoriesResource;


class CategoyApiController extends Controller
{
    public $masterController;

    public function __construct(){
        $this->masterController = new CategoriesMasterController();
    }
    //get all
    public function index(){
        
        return new CategoriesResource($this->masterController->index());
    }

     //get one
     public function show($id){
        
    }

    
}
