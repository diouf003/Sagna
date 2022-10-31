<?php

namespace App\Http\Controllers;
use App\Models\classe;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function accueil()
    {
        return view('/home');
    }

    public function cool()
    {
        $etudiants = Etudiant::orderBy("nom", "asc")->paginate(5);
        return view('etudiant', compact("etudiants"));
    }

    public function create()
    {
        $classes= classe::all();
        return view("createEtudiant", compact("classes"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "classe_id" => "required",
        ]);
        //si on a pas défini le fillable on use 1ere methode
        // Etudiant::create($request->all());

        //Et si on la définie on use 2ieme Methode comme suit:
        Etudiant::create([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "classe_id" => $request->classe_id
        ]);
        return back()->with("success", "Etudiant ajouté avec succès!");
    }
}
