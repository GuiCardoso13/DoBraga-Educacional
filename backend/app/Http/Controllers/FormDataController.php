<?php

namespace App\Http\Controllers;

use App\Exports\FormDataExport;
use App\Models\FormData;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FormDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formularios = FormData::latest()->paginate(10);
        return view("formulario.dashboard", compact("formularios"));
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'gender' => 'required|string|max:50',
            'age' => 'required|integer|min:0',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:25',
            'interest' => 'required|string|max:255',
            'resp_name' => 'nullable|string|max:255',
            'resp_phone' => 'nullable|string|max:25',
        ]);

        // Create record using validated data
        FormData::create($validatedData);

        return response()->json(['message' => 'Dados enviados com sucesso!'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(FormData $formData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormData $formData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormData $formData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormData $formData)
    {
        //
    }

    public function export()
    {
        return Excel::download(new FormDataExport, 'dados_formulario.xlsx');
    }
}
