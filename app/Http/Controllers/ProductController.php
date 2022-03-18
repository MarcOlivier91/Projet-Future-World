<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Gate;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        

        
        return view('product.index', [
            'products' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /* Retoure la vue pour le formulaire de création de produit*/
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*Champs requis pour pouvoir ajouter un produit*/
        $validated = $request->validate([
            'categorie' => 'in:Processeur,Carte Graphique,Ordinateur de Bureau',
            'marque' => 'required|max:30',
            'nom' => 'required|max:70',
            'image' => 'required|image',
            'description' => 'required|max:1500',
            'prix' => 'required|max:6',
            'quantite' => 'required|max:1000',
        ]);

        $Product = Product::create($validated);
        $Product->save();
        return view('product.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::on()->find($id);
        return view('product.edit', ['product' => $product]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        
        $validated = $request->validate([
            'categorie' => 'in:Processeur,Carte Graphique,Ordinateur de Bureau',
            'marque' => 'required|max:30',
            'nom' => 'required|max:70',
            'image' => 'required|image',
            'description' => 'required|max:1500',
            'prix' => 'required|max:6',
            'quantite' => 'required|max:1000',
        ]);

            $product->categorie=$validated['categorie'];
            $product->marque=$validated['marque'];
            $product->nom=$validated['nom'];
            $product->description=$validated['description'];
            $product->prix=$validated['prix'];
            $product->quantite=$validated['quantite'];
            $product->save();
            return view('product.index', [
                'products' => $product
            ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product -> destroy($id);
        return redirect('product')->with('success', 'Product removed successfully');

    }
}

?>