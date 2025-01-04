<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJurusanRequest;
use App\Http\Requests\UpdateJurusanRequest;
use App\Models\Jurusan;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Get all data informasi success!',
            'data' => Jurusan::latest()->get()
        ], 200);
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
        $validated = $request->validated([
            'nama' => 'required|string',
        ]);

        return response()->json([
            'status' => 'suStoreJurusanRequestccess',
            'message' => 'Data informasi created successfully!',
            'data' => Jurusan::create($validated)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Get data informasi success!',
            'data' => $jurusan->with('mahasiswa')->where('id', $jurusan->id)->get()
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $jurusan)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        $validated = $request->validated([
            'nama' => 'required|string',
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Data informasi updated successfully!',
            'data' => $jurusan->update($validated)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data informasi deleted successfully!',
            'data' => $jurusan
        ], 200);
    }
}
