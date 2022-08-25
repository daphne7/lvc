<?php

namespace App\Http\Controllers;

use App\Models\Notas;
use App\Models\Cursos;
use App\Models\Profesores;
use App\Models\Alumnos;
use App\Http\Requests\StoreNotasRequest;
use App\Http\Requests\UpdateNotasRequest;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semestre = Semestre::all();
        return view("welcome", compact("semestre"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $update = 0;
        $cursos = Cursos::get();
        $Alumnos= Alumnos::get();
        $Profesores=Profesores::get();

        $notass = Notas::orderBy('id', 'DESC')->paginate(6);

        return view('notas.add', compact('notass','cursos','update'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNotasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function show(Notas $notas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function edit(Notas $notas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNotasRequest  $request
     * @param  \App\Models\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotasRequest $request, Notas $notas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notas $notas)
    {
        //
    }
}
