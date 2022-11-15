<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function home (){
        $commentaires = Commentaire::all();
        $all= Commentaire::all()->count();

        return view('home', compact('commentaires', 'all'));
    }
    public function store (Request $request){
        $request->validate([
            "nom" =>['required', 'min:3'],
            "texte" =>['required', 'min:10', 'max:300'],
            "note" =>['required', 'integer', 'min:1', 'max:5'],
        ]);

        $store= new Commentaire();
        $store->nom = $request->nom;
        $store->texte = $request-> texte;
        $store->note = $request-> note;
        $store->save();
        return redirect ()->back()->with('success', 'Le commentaire a bien été ajouté');
    }
    public function create(){
        return view('pages.create');
    }
    public function delete ($id){
        $commentaire= Commentaire::find($id);
        $commentaire->delete();
        return redirect()->back()->with('success', 'Le commentaire a bien été supprimé');
        
    }
    public function edit ($id){
        $commentaire= Commentaire::find($id);
        return view('pages.edit', compact('commentaire'));
    }
    public function update (Request $request, $id){
        $request->validate([
            "nom" =>['required', 'min:3'],
            "texte" =>['required', 'min:10', 'max:300'],
            "note" =>['required', 'integer', 'min:1', 'max:5'],
        ]);
        $update = Commentaire::find($id);
        $update->nom = $request->nom;
        $update->texte = $request->texte;
        $update->note = $request->note;
        $update->save();
        return redirect()->back()->with('success', 'Le commenatire a bien été modifié');
    }
}
