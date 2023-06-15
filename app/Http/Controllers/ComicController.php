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
        $form_data = $request->all();

        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();

        return redirect()->route('comics.index');
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
        $form_data = $request->all();
        $comic->update($form_data);
        return redirect()->route('comics.index');
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
        return redirect()->route('comics.index');
    }
}
