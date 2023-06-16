<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::All();
        $menu = config('menulinks.menuLinks');
        $footermenu = config('footerLinks.aboutList');
        $menushop = config('menuShop.menuShop');

        return view( 'pages.comics.index' , compact('comics' , 'menu' , 'footermenu' , 'menushop') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = config('menulinks.menuLinks');
        $footermenu = config('footerLinks.aboutList');
        $menushop = config('menuShop.menuShop');
        return view( 'pages.comics.create' , compact( 'menu' , 'footermenu' , 'menushop') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:50|unique:comics',
                'description' => 'required',
                'price' => 'required',
                'type' => 'required',
                'sale_date' => 'required',
                'thumb' => 'required'
            ],
            [
                'title.required' => 'Il campo Title è obbligatorio',
                'title.max' => 'Il campo Title non deve superare i 50 caratteri',
                'title.unique' => 'Il Title scelto deve essere unico',
                'description' => 'Il campo Description è obbligatorio',
                'price' => 'Il campo Price è obbligatorio',
                'type' => 'Il campo Type è obbligatorio',
                'sale_date' => 'Il campo Sale Date è obbligatorio',
                'thumb' => 'Il campo Thumb è obbligatorio'
            ]
        );


        $form_data = $request->all();
        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();

        return redirect()->route('comics.index')->with('success-create', 'Complimenti hai creato un fumetto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singoloComic = Comic::findOrFail($id);
        $menu = config('menulinks.menuLinks');
        $footermenu = config('footerLinks.aboutList');
        $menushop = config('menuShop.menuShop');

        return view('pages.comics.show', compact ('singoloComic' , 'menu' , 'footermenu' , 'menushop') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {

        

        $menu = config('menulinks.menuLinks');
        $footermenu = config('footerLinks.aboutList');
        $menushop = config('menuShop.menuShop');
        return view('pages.comics.edit', compact('comic' , 'menu' , 'footermenu' , 'menushop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate(
            [
                'title' => 'required|max:50|unique:comics',
                'description' => 'required',
                'price' => 'required',
                'type' => 'required',
                'sale_date' => 'required',
                'thumb' => 'required'
            ],
            [
                'title.required' => 'Il campo Title è obbligatorio',
                'title.max' => 'Il campo Title non deve superare i 50 caratteri',
                'title.unique' => 'Il Title scelto deve essere unico',
                'description' => 'Il campo Description è obbligatorio',
                'price' => 'Il campo Price è obbligatorio',
                'type' => 'Il campo Type è obbligatorio',
                'sale_date' => 'Il campo Sale Date è obbligatorio',
                'thumb' => 'Il campo Thumb è obbligatorio'
            ]
        );

        $form_data = $request->all();
        $comic->update($form_data);
        return redirect()->route('comics.index')->with('success-edit', 'Complimenti hai modificato un fumetto');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('success-delete', 'Complimenti hai cancellato un fumetto');;
    }
}
