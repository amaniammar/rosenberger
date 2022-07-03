
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<div class="body-wrap">
	 <nav class="nav-menu mobile-menu">
	          <li><a class="active" href="{{url('accueil')}}">Accueil</a></li>
              <li><a class="active" href="{{url('general')}}">General</a></li>
     </nav>
     <div class="container">
    
    

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
<p>PRODUCTION STATMONITOR</p>
</head>

	<body>
	@section('content')
<div class="container">
    

    <form action="{{url('productions')}}" method="post">
            {{ csrf_field() }}
		<div class="row">
			<div class="col-6">
				<div class="row input-group">
				<label class="col-4" for="date">{{ __('Date')}}</label>
				<input class="col-8" type="date" name="date" class="form-control"/>
				</div>
		        <br>
			
				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Article') }}</label>   
                <select class="col-8" name="article" id="article"  class="form-control">
								<option value="famille1A">famille1A</option>
								<option value="famille1B">famille1B</option>
								<option value="famille1C">famille1C</option>
								<option value="famille1D">famille1D</option>
								<option value="famille1E">famille1E</option>
								<option value="famille1F">famille1F</option>
								<option value="famille1G">famille1G</option>
                                <option value="famille3A">famille3A</option>
								<option value="famille3B">famille3B</option>
								<option value="famille3C">famille3C</option>
								<option value="famille1D">famille3D</option>
								<option value="famille3E">famille3E</option>
								<option value="famille3F">famille3F</option>
								<option value="famille3G">famille3G</option>
								<option value="famille5A">famille5A</option>
								<option value="famille5B">famille5B</option>
								<option value="famille5C">famille5C</option>
								<option value="famille5D">famille5D</option>
								<option value="famille5E">famille5E</option>
								<option value="famille5F">famille5F</option>
								<option value="famille5G">famille5G</option>
								<option value="" disabled selected>Select Article</option>

							</select>

							<script>
								$(document).ready(function(){
									$("#dropdownlist").kendoDropDownList();
								});
							</script>

							</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Description') }}</label>
				 <select class="col-8" name="description" id="description"  class="form-control">
								<option value="Descriptionfamille1A">Description famille1A</option>
								<option value="Descriptionfamille1B">Description famille1B</option>
								<option value="Descriptionfamille1C">Description famille1C</option>
								<option value="Descriptionfamille1D">Description famille1D</option>
								<option value="Descriptionfamille1E">Description famille1E</option>
								<option value="Descriptionfamille1F">Description famille1F</option>
								<option value="Descriptionfamille1G">Description famille1G</option>
                                <option value="Descriptionfamille3A">Description famille3A</option>
								<option value="Descriptionfamille3B">Description famille3B</option>
								<option value="Descriptionfamille3C">Description famille3C</option>
								<option value="Descriptionfamille3D">Description famille3D</option>
								<option value="Descriptionfamille3E">Description famille3E</option>
								<option value="Descriptionfamille3F">Description famille3F</option>
								<option value="Descriptionfamille3G">Description famille3G</option>
								<option value="Descriptionfamille5A">Description famille5A</option>
								<option value="Descriptionfamille5B">Description famille5B</option>
								<option value="Descriptionfamille5C">Description famille5C</option>
								<option value="Descriptionfamille5D">Description famille5D</option>
								<option value="Descriptionfamille5E">Description famille5E</option>
								<option value="Descriptionfamille5F">Description famille5F</option>
								<option value="Descriptionfamille5G">Description famille5G</option>
								<option value="" disabled selected>Select Description Article</option>


							</select>
							<script>
								$(document).ready(function(){
									$("#dropdownlist").kendoDropDownList();
								});
							</script>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Ref_pa') }}</label>
				<select class="col-8" name="ref_pa" id="refpa"  class="form-control">
								<option value="pA123">pA123</option>
								<option value="pA234">pA234</option>
								<option value="pA345">pA345</option>
								<option value="pA456">pA456</option>
								<option value="pA567">pA567</option>
								<option value="pA678">pA678</option>
								<option value="pA789">pA789</option>
                                <option value="pA890">pA890</option>
								<option value="pA901">pA901</option>
								<option value="pA012">pA012</option>
								<option value="pA023">pA023</option>
								<option value="pA034">pA034</option>
								<option value="pA045">pA045</option>
								<option value="pA056">pA056</option>
								<option value="pA078">pA078 </option>
								<option value="pA089">pA089</option>
								<option value="pA912">pA912</option>
								<option value="pA923">pA923</option>
								<option value="pA934">pA934</option>
								<option value="pA945">pA945</option>
								<option value="pA956">pA956</option>
								<option value="" disabled selected>Select Ref_Pa</option>

							</select>

							<script>
								$(document).ready(function(){
									$("#dropdownlist").kendoDropDownList();
								});
							</script>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Etape_de_travail')}}</label>
				<input class="col-8" name="etape_de_travail" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Operateur')}}</label>
				<input class="col-8" name="operateur" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Ope_prenom')}}</label>
				<input class="col-8" name="ope_prenom" class="form-control"/>
				</div>

				
				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Ope_nom')}}</label>
				<input class="col-8" name="ope_nom" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Heure_de_traval')}}</label>
				<input class="col-8" name="heure_de_traval" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Machine')}}</label>
				<select class="col-8" name="machine" id="machine"  class="form-control">
								<option value="G20">G20</option>
								<option value="G21">G21</option>
								<option value="G23">G23</option>
								<option value="G24">G24</option>
								<option value="G33">G33</option>
								<option value="G43">G43</option>
								<option value="G23">R23</option>
								<option value="KameraG4.1">Kamera G4.1</option>
								<option value="KameraG3.1">Kamera G3.1</option>
								<option value="KameraG2.1">Kamera G2.1</option>
								<option value="" disabled selected>Select Machine</option>
							</select>
							<script>
								$(document).ready(function(){
									$("#dropdownlist").kendoDropDownList();
								});
							</script>
				</div>

                <div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Panne(min)')}}</label>
				<input class="col-8" name="panne" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Description_machine')}}</label>
				<select class="col-8" name="description_machine" id="description_machine"  class="form-control">
								<option value="Presse_Kistler1" >Presse Kistler 1</option>
								<option value="Presse_Kistler2">Presse Kistler 2</option>
								<option value="Presse_Kistler3">Presse Kistler 3</option>
								<option value="Presse_Kistler4">Presse Kistler 4</option>
								<option value="Presse1">Presse 1</option>
								<option value="Presse2">Presse 2</option>
								<option value="Presse_Force_master">Presse Force master</option>
								<option value="KameraG4.1">Kamera G4.1</option>
								<option value="KameraG3.1">Kamera G3.1</option>
								<option value="KameraG2.1">Kamera G2.1</option>
								<option value="" disabled selected>Select Description Machine</option> 
							</select>

							<script>
								$(document).ready(function(){
									$("#dropdownlist").kendoDropDownList();
								});
							</script>
				</div>
				

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Retard_alimentation_logique')}}</label>
				<input class="col-8" name="retard_alimentation_logique" class="form-control"/>
				</div>
         </div>
				
            <div class="col-6">

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Performance_sol')}}</label>
				<input class="col-8" name="performance_sol" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Quantité_produit')}}</label>
				<input class="col-8" name="quantité_produit" class="form-control"/>
				</div>
				

                <div class="row input-group ig-b" >
				<label class="col-4" for="faute1">{{ __('Faute 1')}}</label>
				<input type="radio" id="faute1"name="faute1" >
				<label for="faute1">Interne</label>
				<input type="radio" id="faute1"name="faute1">
				<label for="faute1">Fournisseur</label>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="non_conforme1">{{ __('Non_conforme 1')}}</label>
				<input class="col-8" name="non_conforme1" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Code de faute 1')}}</label>
				<input class="col-8" name="code_de_faute1" class="form-control"/>
				</div>
				 
				<div class="row input-group ig-b" >
				<label class="col-4" for="faute2">{{ __('Faute 2')}}</label>
				<input type="radio" id="faute2" name="faute2" >
				<label for="faute2">Interne</label>
				<input type="radio" id="faute2" name="faute2" >
				<label for="faute2">Fournisseur</label>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Non_conforme 2')}}</label>
				<input class="col-8" name="non_conforme2" class="form-control"/>
				</div>
				 
				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Code de faute 2')}}</label>
				<input class="col-8" name="code_de_faute2" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="faute3">{{ __('Faute 3')}}</label>
				<input type="radio" id="faute3" name="faute3">
				<label for="faute3">Interne</label>
				<input type="radio" id="faute3"name="faute3">
				<label for="faute3">Fournisseur</label>
				</div> 

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Non_conforme 3</label>
				<input class="col-8" name="non_conforme3" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Code de faute 3')}}</label>
				<input class="col-8" name="code_de_faute3" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Taux_rebut')}}</label>
				<input class="col-8" name="taux_rebut" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Productivité')}}</label>
				<input class="col-8" name="productivité" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">{{ __('Disponibilité_machine')}}</label>
				<input class="col-8" name="disponibilité_machine" class="form-control"/>
				</div>
				
			</div>

            <div class="row col-3  " >
          
		           <input type="submit" class="form-control btn btn-primary" value="enregistrer">
		</div>
		   
		</div>
    </form>  
       


@section('content')
</div>
</body>
</html>


















