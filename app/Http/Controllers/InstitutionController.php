<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institutions = Institution::all();
        return view('pages.institution.index', compact('institutions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.institution.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:128',
        ], [
            'name.required' => 'Nama harus diisi',
        ]);
            $institutions = Institution::create($request->all());
            return redirect()->route('admin.institution.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $institutions = Institution::find($id);
        return view('pages.institution.show', compact('institutions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $institutions = Institution::find($id);
        return view('pages.institution.edit', compact('institutions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:128,'. $id,
     ]);
         $institutions = Institution::find($id);
         $institutions->update($request->all());
         return redirect()->route('admin.institution.index', compact('institutions'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $institutions = Institution::find($id);
        $institutions->delete();
        return redirect()->route('admin.institution.index');
    }
}
