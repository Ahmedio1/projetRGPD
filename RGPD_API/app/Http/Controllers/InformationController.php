<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    public function createForm(Request $request) {
        return view('form');
    }
    public function store(Request $request) {
        error_log($request);
        error_log("ewiiiii");
        $info = new Information();

        // Form validation
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'dteNaissance'=>'required',
            'email' => 'required|email',
            'telephone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'adresse' => 'required'
        ]);
        //  Store data in database
        $info->nom = $request->nom;
        $info->prenom = $request->prenom;
        $info->dteNaissance = $request->dteNaissance;
        $info->email = $request->email;
        $info->tel = $request->telephone;
        $info->adresse = $request->adresse;
        $info->save();
        //
        return back()->with('success', 'Information has been added');




    }
}

