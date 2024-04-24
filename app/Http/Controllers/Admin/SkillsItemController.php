<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SkillsItemDataTable;
use App\Http\Controllers\Controller;
use App\Models\SkillsItemSetting;
use Illuminate\Http\Request;

class SkillsItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SkillsItemDataTable $datatable)
    {
        return $datatable->render('admin.skill-item.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill-item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'icon' => ['max:500']
        ]);

        $skill = new SkillsItemSetting();
        $skill->name = $request->name;
        $skill->icon = $request->icon;
        $skill->save();

        toastr()->success('Sikeresen feltölve!', 'Gratulálok!');

        return redirect()->route('admin.skills-item.index');
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
        $skill = SkillsItemSetting::findOrFail($id);
        return view('admin.skill-item.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'icon' => ['max:500']
        ]);

        $skill = SkillsItemSetting::findOrFail($id);
        $skill->name = $request->name;
        $skill->icon = $request->icon;
        $skill->save();

        toastr()->success('Sikeresen módosítva!', 'Gratulálok!');

        return redirect()->route('admin.skills-item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill = SkillsItemSetting::findOrFail($id);
        $skill->delete();
    
        return response()->json(['status' => 'success', 'message' => 'Sikeres törlés!']);
    }
}
