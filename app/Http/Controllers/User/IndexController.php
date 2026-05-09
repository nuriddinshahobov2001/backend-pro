<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentsList = [
            [ "id" => 1, "name" => "John Doe 1" ],
            [ "id" => 2, "name" => "John Doe 2" ],
            [ "id" => 3, "name" => "John Doe 3" ],
            [ "id" => 4, "name" => "John Doe 4" ],
        ];
        return view('web.index', [
            "title" => "Home",
            "name" => "Nuriddin",
            "studentsList" => $studentsList
        ]);
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
