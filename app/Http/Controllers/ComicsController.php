<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comic;
use App\Functions\Helper;


class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = comic::all();

        return view('comics.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
        $new_comic = new comic();
        $new_comic->title = $form_data['title'];
        $new_comic->slug = Helper::generateSlug($new_comic->title, new comic());
        $new_comic->description = $form_data['description'];
        $new_comic->thumb = $form_data['thumb'];
        $new_comic->price = $form_data['price'];
        $new_comic->series = $form_data['series'];
        $new_comic->sale_date = $form_data['sale_date'];
        $new_comic->type = $form_data['type'];
        $new_comic->artists = json_encode($form_data['artists']);
        $new_comic->writers = json_encode($form_data['writers']);

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
