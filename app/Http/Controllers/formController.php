<?php

namespace App\Http\Controllers;

use App\Models\tipo_respuestas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class formController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preguntas = DB::select('select * from preguntas where activo_pregunta = 1');
        $tipo_respuesta = DB::select('select * from tipo_respuestas');
        return view('formulario', ['preguntas' => $preguntas], ['tipo_respuestas' => $tipo_respuesta]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
