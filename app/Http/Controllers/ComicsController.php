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

        $request->validate([
            'title' => 'required|min:3|max:50',
            'thumb' => 'max:255',
            'price' => 'required|min:2|max:255',
            'series' => 'required|min:1|max:255',
            'sale_date' => 'required|min:3|max:20',
            'type' => 'required|min:2|max:20',
        ], [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'title.max' => 'Il titolo deve contenere non più di :max caratteri',
            'thumb.max' => 'Il campo thumb deve contenere non più di  :max caratteri',
            'price.required' => 'Il campo price è un campo obbligatorio',
            'price.min' => 'Il campo price deve contenere almeno :min caratteri',
            'price.max' => 'Il campo price deve contenere non più di :max caratteri',
            'series.required' => 'Il campo series è un campo obbligatorio',
            'series.min' => 'Il campo series deve contenere almeno :min caratteri',
            'series.max' => 'Il campo series deve contenere non più di :max caratteri',
            'sale_date.required' => 'Il campo sale_date è un campo obbligatorio',
            'sale_date.min' => 'Il campo sale_date deve contenere almeno :min caratteri',
            'sale_date.max' => 'Il campo sale_date deve contenere non più di :max caratteri',
            'type.required' => 'Il campo type è un campo obbligatorio',
            'type.min' => 'Il campo type deve contenere almeno :min caratteri',
            'type.max' => 'Il campo type deve contenere non più di :max caratteri',
        ]);


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

        // $new_comic->save();

        $form_data['slug'] = Helper::generateSlug($form_data['title'], new comic());
        $new_comic->fill($form_data);
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
    public function edit(comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comic $comic)
    {
        $form_data = $request->all();
        if ($form_data['title'] === $comic->title) {
            $form_data['slug'] = $comic->slug;
        } else {
            $form_data['slug'] = Helper::generateSlug($form_data['title'], new comic());
        }
        $comic->update($form_data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('deleted', 'Il prodotto' . $comic->title . 'è stato eliminato');
    }
}
