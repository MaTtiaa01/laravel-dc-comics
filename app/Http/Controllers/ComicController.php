<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderByDesc('id')->get();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {

        //validate data

        $val_data = $request->validate([
            'title' => 'required|unique:comics|max:255|min:10',
            'description' => 'nullable|max:255|min:15',
            'thumb' => 'nullable|max:255',
            'price' => 'required|decimal:2|max:255',
            'series' => 'nullable|max:255',
            'sale_date' => 'nullable|max:255',
            'type' => 'nullable|max:255',
        ]);

        // save all data

        // $comic = new Comic();
        // $comic->title = $request['title'];
        // $comic->description = $request['description'];
        // $comic->thumb = $request['thumb'];
        // $comic->price = $request['price'];
        // $comic->series = $request['series'];
        // $comic->sale_date = $request['sale_date'];
        // $comic->type = $request['type'];
        // $comic->save();

        Comic::create($val_data);

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $data = [
            'title' => $request['title'],
            'description' => $request['description'],
            'thumb' => $request['thumb'],
            'price' => $request['price'],
            'series' => $request['series'],
            'sale_date' => $request['sale_date'],
            'type' => $request['type'],
        ];

        $comic->update($data);
        return to_route('comics.index')->with('message', "$comic->name edit successfully");
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
        return to_route('comics.index')->with('message', "$comic->name deleted successfully ");
    }
}
