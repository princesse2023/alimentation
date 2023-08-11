<?php

namespace App\Http\Controllers;

use App\Models\Categorie;

use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;




class adminController extends Controller
{
    public function  cueillle()
    {
        $produits = Produit::all();
        return view('pageaccueil', compact('produits'));
    }

    public function  formcat()
    {
        return view('formcategorie');
    }
    public function login()
    {
        return view('connexion');
    }
    public function retour()
    {

        return redirect('accueil');
    }
    public function ajoutgerant()
    {
        return view('ajoutergerant');
    }

    public function imagedetails($produit)
    {
        $produit = Produit::find($produit);

        return view('detailspage', compact('produit'));
    }

    public function bord()
    {
        $produits = Produit::all();
        return view('dashboardadmin', compact('produits'));
    }

    public function bord2()
    {
        $produits = Produit::all();
        return view('dashboardgerant', compact('produits'));
    }

    public function form()
    {
        $categories = Categorie::all();
        return view('ajoutproduit', compact('categories'));
    }
    public function modform()
    {
        $categories = Categorie::all();
        return view('modifierproduit', compact('categories'));
    }


    //pour renseigner le formulaire et afficher sur la liste avec entrer en base de donnes

    public function traitement(Request $request)
    {

        $util = new Produit();
        $util->nom = $request->input('nom');
        $util->prix = $request->input('prix');
        $util->date_production = $request->input('date_production');
        $util->date_peremtion = $request->input('date_peremtion');
        $util->category_id = $request->input('category_id');

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('photo/', $filename);
            $util->photo = $filename;
        }
        $util->save();
        // return ('enregistré avec succes.');
        return redirect('liste');
    }

    public function delete($id)
    {
        $produit = Produit::find($id);
        $produit->delete();
        // $nom_complet = $user->name." ".$user->prenom;
        // utili::find($user)->delete();
        // return back()->with("successDelete", "L'utilisateur nom_complet supprimé avec succès");
        return redirect('liste');
    }
    public function categorie_affiche()
    {
        $categories = Categorie::all();
        return view('categorie', compact('categories'));
    }

    public function traitement_modf($id)
    {
        $categories = Categorie::all();
        $produit = produit::find($id);
        return view('modifierproduit', compact('produit', 'categories'));
    }

    public function valid_modf(Request $request, $produit)
    {
        $util = produit::find($produit);
        $util->nom = $request->input('nom');
        $util->prix = $request->input('prix');
        $util->date_production = $request->input('date_production');
        $util->date_peremtion = $request->input('date_peremtion');
        $util->category_id = $request->input('category_id');

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('photo/', $filename);
            $util->photo = $filename;
        }
        $util->update();
        // return ('enregistré avec succes.');
        return redirect('liste');
    }

    public function ajoutegerant(Request $request)
    {
        $util = new User();
        $util->nom = $request->input('nom');
        $util->prenom = $request->input('prenom');
        $util->email = $request->input('email');
        $util->telephone = $request->input('telephone');
        $util->role_id = 2;
        $util->password = bcrypt($request->input('password'));
        $util->save();
        return ('enregistré avec succes.');
        // return redirect('liste');
    }



    public function form_cat(Request $request)
    {

        $util = new Categorie();
        $util->nom = $request->input('nom');
        $util->save();
        return  redirect('category');
    }





    //     public function traitment_connexion(Request $request)
    //     {

    //         $credentials = $request->validate([
    //             'email' => 'required|email',
    //             'password' => 'required',
    //         ]);

    //         if (Auth::attempt($credentials)) {

    //           // L'authentification a réussi on connecte l'utilisateur.
    //             $request->session()->regenerate();

    //             return 'Auth::user()->email';


    //         // }
    //         Return ('$recuperation') ;
    //     }


    // }




    public function authenticate(Request $request)
    {

        $mail = $request->input('email');
        $pass = $request->input('password');
        $client = User::where('email', $mail)->first();

        if (password_verify($pass, $client->password)) {
            $request->session()->regenerate();
            if ($client->role_id == 1) {
                return redirect('liste'); 
            } else {
                return redirect('liste2');
            }
        } else {
            echo 'Le mot de passe est invalide.';
        }


        //    return back()->withErrors([
        //              'email' => 'The provided credentials do not match our records.',
        //       ]);
    }
}
