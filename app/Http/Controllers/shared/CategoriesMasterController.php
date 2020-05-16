<?php


    namespace App\Http\Controllers\shared;
    
    use Illuminate\Http\Request;
    use App\Category;
    use App\Resources\CategoriesResource;


    class CategoriesMasterController{
        

                            //get all
                    public function index(){
                        
                        return new CategoriesResource(Category::paginate());
                    }

                    //get one
                    public function show($id){
                        
                    }

                    //gnew
                    public function post(Request $request){
                        
                    }
    }