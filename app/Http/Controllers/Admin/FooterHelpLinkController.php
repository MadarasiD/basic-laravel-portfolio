<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FooterHelpLinkDataTable;
use App\Http\Controllers\Controller;
use App\Models\FooterHelpLink;
use Illuminate\Http\Request;

use function Termwind\render;

class FooterHelpLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FooterHelpLinkDataTable $datatable)
    {
        return $datatable->render('admin.footer-help-link.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.footer-help-link.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'url' => ['required'],
            'name' => ['required', 'max:500']
        ]);

        $link = new FooterHelpLink();
        $link->url = $request->url;
        $link->name = $request->name;
        $link->save();

        toastr()->success('Sikeresen létrehozva!', 'Gratulálok');

        return redirect()->route('admin.footer-help-link.index');
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
        $link = FooterHelpLink::findOrFail($id);
        return view('admin.footer-help-link.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'url' => ['required'],
            'name' => ['required', 'max:500']
        ]);

        $link = FooterHelpLink::findOrFail($id);
        $link->url = $request->url;
        $link->name = $request->name;
        $link->save();

        toastr()->success('Sikeresen módosítva!', 'Gratulálok');

        return redirect()->route('admin.footer-help-link.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $link = FooterHelpLink::findOrFail($id);
        $link->delete();
    
        return response()->json(['status' => 'success', 'message' => 'Sikeres törlés!']);
    }
}
