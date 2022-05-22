<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as RequestForInertia;
use Inertia\Inertia;

use App\Models\Vocabular;

class VocabularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vocabular = Vocabular::all();

        return Inertia::render('Vocabulary/Index', [
            'vocabular' => $vocabular
        ]);
    }

    public function trening()
    {
        $vocabular = Vocabular::all();

        return Inertia::render('Vocabulary/Trening', [
            'vocabular' => $vocabular
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Vocabulary/Create', [
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = RequestForInertia::validate([
            'eng_word' => 'required|string',
            'ru_word' => 'required|string',
            'eng_description' => 'required|string',
            'ru_description' => 'nullable|string',
        ]);

        Vocabular::create([
            'eng_word' => $validated['eng_word'],
            'ru_word' => $validated['ru_word'],
            'eng_description' => $validated['eng_description'],
            'ru_description' => $validated['ru_description'],
        ]);

        return back();
    }

    public function check_word($id)
    {
        $validated = request()->validate([
            'ru_translation' => 'required|string',
        ]);

        $current_word = Vocabular::find($id)->ru_word;

        if ($validated['ru_translation'] === $current_word) {
            return back()->with('message', 'IT WORKS!');
        } 

        return back()->withErrors('Try again');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
