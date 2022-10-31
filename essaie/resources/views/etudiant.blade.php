@extends('layouts.master')

@section('content')


  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des étudiants</h3>

    <div class="mt-4">

    <div class="d-flex justify-content-between mt-4">
    {{$etudiants->links()}}
    <div>  
    <a href="{{route('etudiant.create')}}" class="btn btn-info">Ajouter Etudiant</a>
    </div>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Classe</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($etudiants as $etudiant)
    <tr>
      <th scope="row">{{$loop->index +1 }} </th>
      <td>{{$etudiant->nom}}</td>
      <td>{{$etudiant->prenom}}</td>
      <td>{{$etudiant->classe->libelle}}</td>
      <td>
        <a href="#" class="btn btn-info">Editer</a>
        <a href="#" class="btn btn-danger">Supprimr</a>
      </td>
    </tr>
    
    @endforeach
  </tbody>
</table>
    </div>
    
    
  </div>

 

@endsection




