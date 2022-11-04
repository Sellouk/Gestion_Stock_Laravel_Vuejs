<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use Inertia\Inertia;


class ArticleController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Articles/Index', [
            'articles' => Article::all(),
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia::render('Articles/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        Article::create([
                'nom' => $request->nom,
                'reference' =>$request->reference,
                'marque' => $request->marque,
                'prixAchat' => $request->prixAchat,
                'prixVente' => $request->prixVente,
                'total' => $request->total,
                'totalHtva' => $request->totalHtva,
                'emplacement' => $request->emplacement,
                'type' => $request->type,
                'unite' => $request->unite,
                'designation' => $request->designation,
                'stockMin' => $request->stockMin,
                'stockInit' => $request->stockInit,
                'niveauStock' => $request->niveauStock,
                
 
        ]);
    

        return redirect()->route('articles.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return Inertia::render('Articles/Show', [
            'article' => $article,
          ]);

          

          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        
        return Inertia::render('Articles/Edit', [
            'article' => $article,
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Article $article,Request $request)
    {
        $article->update([
            'nom' => $request->nom,
            'reference' =>$request->reference,
            'marque' => $request->marque,
            'prixAchat' => $request->prixAchat,
            'prixVente' => $request->prixVente,
            'total' => $request->total,
            'totalHtva' => $request->totalHtva,
            'emplacement' => $request->emplacement,
            'type' => $request->type,
            'unite' => $request->unite,
            'designation' => $request->designation,
            'stockMin' => $request->stockMin,
            'stockInit' => $request->stockInit,
            'niveauStock' => $request->niveauStock,
  
        ]);

    
       return redirect()->route('articles.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        sleep(1);
    
       return redirect()->route('articles.index')->with('message','Article Deleted Successfully');
    }
}
