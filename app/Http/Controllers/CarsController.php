<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    //affichage des listes des voitures
    public function liste(){
        $car = Cars::All();

        return view('car.index', compact('car'));
    }

    //formulaire d ajout
    public function AfficheForm(){
        return view('car.form');
    }

    public function ajout(Request $request){
        Cars::create([
            'marque'=>$request->marque,
            'nom'=>$request->nom,
            'number'=>$request->number,
            'color'=>$request->color
        ]);

        return view('car.form');
    }

    //detail des voitures
    public function detail($id){
        $car = Cars::findOrFail($id);

        return view('car.detail',compact('car'));
    }

    //modifier les voitures
    public function AfficheFormUpdate($id){
        $car = Cars::findOrFail($id);

        return view('car.update', compact('car'));
    }
    public function update(Request $request,$id){
        $car = Cars::findOrFail($id);

        $car->update([
            'marque'=>$request->marque,
            'nom'=>$request->nom,
            'number'=>$request->number,
            'color'=>$request->color
        ]);

        return redirect()->route('car.detail',$car->id);
    }
}
