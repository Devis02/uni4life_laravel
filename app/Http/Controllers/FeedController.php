<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = [
            ['content' => 'texto genérico', 'publish_date' => '2025/03/21', 'name' => 'Guilherme'],
            ['content' => 'mais texto genérico', 'publish_date' => '2025/03/21', 'name' => 'Diego'],
            ['content' => 'mais texto genérico', 'publish_date' => '2025/03/21', 'name' => 'Lohana'],
            ['content' => 'mais texto genérico', 'publish_date' => '2025/03/21', 'name' => 'Sheila'],
            ['content' => 'mais texto genérico', 'publish_date' => '2025/03/21', 'name' => 'Thomaz'],

        ];
        return view('feed', [
            'posts' =>$posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return dd('entrou aqui');
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
