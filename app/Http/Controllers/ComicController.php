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
        //recupero dati dal DB
        $comics = Comic::All();

        return view( 'pages.comics.index', compact('comics') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validazione
        $request->validate(
            [
                'title'=> ['required', 'max:50'],
                'description'=> ['required'],
                'thumb'=> ['required'],
                'price'=> ['required'],
                'series'=> ['required', 'max:30'],
                'sale_date'=> ['required','date'],
                'type'=> ['required', 'max:30'],
            ],
            [
                'title.required'=>'Il campo è obbligatorio',
                'title.max'=>'Il titolo è troppo lungo',
                'description.required'=>'Il campo è obbligatorio',
                'thumb.required'=>'Il campo è obbligatorio',
                'price.required'=>'Il campo è obbligatorio',
                'series.required'=>'Il campo è obbligatorio',
                'sale_date.required'=>'Il campo è obbligatorio',
                'type.required'=>'Il campo è obbligatorio'
            ]);




        //logica per salvare il nuovo dato nel DB
        $form_data = $request->all();

        $new_comic = new Comic();

        // $new_comic->title = $form_data['title'];
        // $new_comic->description = $form_data['description'];
        // $new_comic->thumb = $form_data['thumb'];
        // $new_comic->price = $form_data['price'];
        // $new_comic->series = $form_data['series'];
        // $new_comic->sale_date = $form_data['sale_date'];
        // $new_comic->type = $form_data['type'];

        //Solo grazie al model con protected $fillable
        $new_comic->fill( $form_data );

        $new_comic->save();

        return redirect()->route( 'comics.index' )->with('success', 'Fumetto aggiunto correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //logica per ottenere i dati del singolo record
        $comic = Comic::findOrFail($id);


        return view('pages.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view( 'pages.comics.edit', compact('comic'));
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
        //validazione
        $request->validate(
            [
                'title'=> ['required', 'max:50'],
                'description'=> ['required'],
                'thumb'=> ['required'],
                'price'=> ['required'],
                'series'=> ['required', 'max:30'],
                'sale_date'=> ['required','date'],
                'type'=> ['required', 'max:30'],
            ],
            [
                'title.required'=>'Il campo è obbligatorio',
                'title.max'=>'Il titolo è troppo lungo',
                'description.required'=>'Il campo è obbligatorio',
                'thumb.required'=>'Il campo è obbligatorio',
                'price.required'=>'Il campo è obbligatorio',
                'series.required'=>'Il campo è obbligatorio',
                'sale_date.required'=>'Il campo è obbligatorio',
                'type.required'=>'Il campo è obbligatorio'
            ]);


        $form_data = $request->all();
        $comic->update($form_data);

        return redirect()->route('comics.index')->with('success', 'Fumetto modificato correttamente');
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
