<?php

namespace App\Http\Controllers;
use Itstructure\GridView\DataProviders\EloquentDataProvider;

use Illuminate\Http\Request;
use App\Production;
use DataTables;

class GeneralController extends Controller
{
     public function index(Request $request)
    {
   
            $listproduction = Production::all();
                
                return view('general', ['productions' => $listproduction]);
                
    }
     public function destroy(Request $request , $id){
       $production = Production::find($id);
       
       $production->delete();

       return redirect('general', ['productions' => $listproduction]);


    }
}
