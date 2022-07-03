<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Production;

class ProductionController extends Controller
{
    public function index(){
       $listproduction = Production::all();
       echo $listproduction ;
       return view('General', ['productions' => $listproduction]);
    }

    //affiche le formulaire de creation de production
    public function create(){

       return view ('General');
      

    }
    
    //enregisterement
    public function store(Request $request){
        $production = new Production() ;

       $production->date = $request->input('date');
       $production->article = $request->input('article');
       $production->description = $request->input('description');
       $production->ref_pa = $request->input('ref_pa');
       $production->etape_de_travail = $request->input('etape_de_travail');
       $production->operateur = $request->input('operateur');
       $production->ope_prenom = $request->input('ope_prenom');
       $production->ope_nom = $request->input('ope_nom');
       $production->heure_de_traval = $request->input('heure_de_traval');
       $production->machine = $request->input('machine'); 
       $production->panne = $request->input('panne'); 
       $production->description_machine = $request->input('description_machine'); 
       $production->retard_alimentation_logique = $request->input('retard_alimentation_logique'); 
       $production->performance_sol = $request->input('performance_sol'); 
       $production->quantité_produit = $request->input('quantité_produit'); 
       $production->faute1 = $request->input('faute1');  
       $production->non_conforme1 = $request->input('non_conforme1'); 
       $production->code_de_faute1 = $request->input('code_de_faute1');
       $production->faute2 = $request->input('faute2');  
       $production->non_conforme2 = $request->input('non_conforme2'); 
       $production->code_de_faute2 = $request->input('code_de_faute2');
       $production->faute3 = $request->input('faute3');  
       $production->non_conforme3 = $request->input('non_conforme3'); 
       $production->code_de_faute3 = $request->input('code_de_faute3');
       $production->taux_rebut = $request->input('taux_rebut'); 
       $production->productivité = $request->input('productivité');
       $production->disponibilité_machine = $request->input('disponibilité_machine'); 
      

       $production->save();
        
       return redirect('general');
    }

   //permet de recuperer puis de le mettre dans un le formulaire
    public function edit($id){
       $production = Production::find($id);
       return view ('production', ['production' => $production]);
    }

    //permet de mdifier la production 
    public function update(Request $request, $id){
        $production = Production::find($id);
        
       $production->date = $request->input('date');
       $production->article = $request->input('article');
       $production->description = $request->input('description');
       $production->ref_pa = $request->input('ref_pa');
       $production->etape_de_travail = $request->input('etape_de_travail');
       $production->operateur = $request->input('operateur');
       $production->ope_prenom = $request->input('ope_prenom');
       $production->ope_nom = $request->input('ope_nom');
       $production->heure_de_traval = $request->input('heure_de_traval');
       $production->machine = $request->input('machine'); 
       $production->description_machine = $request->input('description_machine'); 
       $production->retard_alimentation_logique = $request->input('retard_alimentation_logique'); 
       $production->performance_sol = $request->input('performance_sol'); 
       $production->quantite_produit = $request->input('quantite_produit');
       $production->faute1 = $request->input('faute1');  
       $production->non_conforme1 = $request->input('non_conforme1'); 
       $production->code_de_faute1 = $request->input('code_de_faute1');
       $production->faute2 = $request->input('faute2');  
       $production->non_conforme2 = $request->input('non_conforme2'); 
       $production->code_de_faute2 = $request->input('code_de_faute2');
       $production->faute3 = $request->input('faute3');  
       $production->non_conforme3 = $request->input('non_conforme3'); 
       $production->code_de_faute3 = $request->input('code_de_faute3'); 
       $production->taux_rebut = $request->input('taux_rebut'); 
       $production->productivité = $request->input('productivité'); 
       $production->disponibilité_machine = $request->input('disponibilité_machine'); 
         
        $production->save();

        return redirect('productions');
    }

    
    public function destroy(Request $request , $id){
       $production = Production::find($id);
       
       $production->delete();

       return redirect('productions');


    }
    

    

}
