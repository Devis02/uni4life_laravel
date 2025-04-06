<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cadastro');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //dd('entrou aqui',$request);
        $request->validate([
            'Nome' => 'required',
            'Email' => 'required|email|unique:students',
            'Senha' => 'required|min:8',
        ]);

        $student = Student::create([
            'name' => $request->Nome,
            'password' => $request->Senha,
            'email' => $request->Email,
            'birth_date' => $request->dataNascimento
        ]);
        return view('login');
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
