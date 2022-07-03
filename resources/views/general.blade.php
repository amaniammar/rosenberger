<head>
<style >

#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
</style>


</head>



<div class="container">
    <div class="row">
     <div class="col-md-12">
        <h1>La liste d'enregistrement</h1>
        <div class="pull-right">
        <a href="{{url('production')}}"class="btn btn-success">nouveau production</a>
        </div>


<i class="fas fa-search"></i>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

<table border="1" cellpadding="0" id="myTable" style="margin: auto">
  <tr class="header">
    <th style="width:30%;">id</th>
    <th style="width:30%;">date</th>
    <th style="width:30%;">article</th>
    <th style="width:30%;">description</th>
    <th style="width:30%;">ref pa</th>
    <th style="width:30%;">etape de travail</th>
    <th style="width:30%;">operateur</th>
    <th style="width:30%;">ope prenom</th>
    <th style="width:30%;">ope nom</th>
    <th style="width:30%;">heure de traval</th>
    <th style="width:30%;">machine</th>
    <th style="width:30%;">panne</th>
    <th style="width:30%;">description machine</th>
    <th style="width:30%;">retard alimentation logique</th>
    <th style="width:30%;">performance sol</th>
    <th style="width:30%;">quantité produit</th>
    <th style="width:30%;">faute1</th>
    <th style="width:30%;">non conforme1</th>
    <th style="width:30%;">code de faute1</th>
    <th style="width:30%;">faute2</th>
    <th style="width:30%;">non conforme2</th>
    <th style="width:30%;">code de faute2</th>
    <th style="width:30%;">faute3</th>
    <th style="width:30%;">non conforme3</th>
    <th style="width:30%;">code de faute3</th>
    <th style="width:30%;">taux rebut</th>
    <th style="width:30%;">productivité</th>
    <th style="width:30%;">disponibilité machine</th>
    <th style="width:30%;">Action</th>
   
  </tr>
  @foreach($productions as $p )
  <tr>
  
    <td>{{$p->id}}</td>
    <td>{{$p->date}}</td>
    <td>{{$p->article}}</td>
    <td>{{$p->description}}</td>
    <td>{{$p->ref_pa}}</td>
    <td>{{$p->etape_de_travail}}</td>
    <td>{{$p->operateur}}</td>
    <td>{{$p->ope_prenom}}</td>
    <td>{{$p->ope_nom}}</td>
    <td>{{$p->heure_de_traval}}</td>
    <td>{{$p->machine}}</td>
    <td>{{$p->panne}}</td>
    <td>{{$p->description_machine}}</td>
    <td>{{$p->retard_alimentation_logique}}</td>
    <td>{{$p->performance_sol}}</td>
    <td>{{$p->quantité_produit}}</td>
    <td>{{$p->faute1}}</td>
    <td>{{$p->non_conforme1}}</td>
    <td>{{$p->code_de_faute1}}</td>
    <td>{{$p->faute2}}</td>
    <td>{{$p->non_conforme2}}</td>
    <td>{{$p->code_de_faute2}}</td>
    <td>{{$p->faute3}}</td>
    <td>{{$p->non_conforme3}}</td>
    <td>{{$p->code_de_faute3}}</td>
    <td>{{$p->taux_rebut}}</td>
    <td>{{$p->productivité}}</td>
    <td>{{$p->disponibilité_machine}}</td>
     <td>
      <form action="{{url('productions/'.$p->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                
                <a href="{{url('productions/'.$p->id.'/edit')}}" class="btn btn-default" >editer</a>
                
                <button type="submit" class="btn btn-danger" >suprimer</button>
                </form>
                
     </td>
    

  </tr>
  @endforeach
  
  
  
</table>
</div>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>