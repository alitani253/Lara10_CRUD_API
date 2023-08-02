<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductsController extends Controller
{

    /**
    * Pour créer et enregistrer des nouvelles ressources.
    */

    public function store(Request $request)
    {
        $product = Products::create($request->all());

        return response()->json(['message'=> 'Creation Api reussi',
                                 'data' => $product],201);
    }

    /**
    * Pour récupérer et afficher une liste de ressources.
    */

    public function index()
    {
        $products = Products::all();
        return response()->json(['message'=> 'Creation API reussi'
                                ,'data' => $products]);

    }

    /**
    * Pour récupérer et afficher une ressource par son id.
    */

    public function show(Products $products, $id)
    {
        $product = Products::findOrFail($id);

        return response()->json(['message'=> 'Voici le produit',
                                'data' => $product]);
    }


    /**
     * utilisée pour mettre à jour les détails d'un produit spécifique à partir de son identifiant unique (ID).

     */
    public function update(Request $request, Products $products,$id)
    {
        $product = Products::findOrFail($id);
        $product->update($request->all());

        return response()->json([ 'message'=> 'Voici le produit modifier',
                                  'data' => $product]);
    }

    /**
     * utilisée pour supprimer un produit spécifique à partir de son identifiant unique (ID).
     */
    public function destroy(Products $products,$id)
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return response()->json(['message' => 'Product deleted successfully']);
    }
}
