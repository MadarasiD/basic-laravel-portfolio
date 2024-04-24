<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PortfolioItemDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\PortfolioItem;
use Illuminate\Http\Request;

class PortfolioItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PortfolioItemDataTable $datatable)
    {
        return $datatable->render('admin.portfolio-item.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.portfolio-item.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'max:5000', 'image'],
            'title' => ['required', 'max:200'],
            'description' => ['required'],
            'category_id' => ['required', 'numeric'],
            'client' => ['max:200'],
            'website' => ['url'],
        ]);

        $imagePath = handleUpload('image');

        $portfolioItem = new PortfolioItem();
        $portfolioItem->image = $imagePath;
        $portfolioItem->title = $request->title;
        $portfolioItem->description = $request->description;
        $portfolioItem->category_id = $request->category_id;
        $portfolioItem->client = $request->client;
        $portfolioItem->website = $request->website;
        $portfolioItem->save();

        toastr()->success('Sikeresen létrehozva!', 'Gratulálok');

        return redirect()->route('admin.portfolio-item.index');
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
        $categories = Category::all();
        $portfolioItem = PortfolioItem::findOrFail($id);
        return view('admin.portfolio-item.edit', compact('categories', 'portfolioItem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['image', 'max:5000'],
            'title' => ['required', 'max:200'],
            'description' => ['required'],
            'category_id' => ['required', 'numeric'],
            'client' => ['max:200'],
            'website' => ['url'],
        ]);

        $portfolioItem = PortfolioItem::findOrFail($id);

        $imagePath = handleUpload('image', $portfolioItem);

        $portfolioItem->image = (!empty($imagePath) ? $imagePath : $portfolioItem->image);
        $portfolioItem->title = $request->title;
        $portfolioItem->description = $request->description;
        $portfolioItem->category_id = $request->category_id;
        $portfolioItem->client = $request->client;
        $portfolioItem->website = $request->website;
        $portfolioItem->save();

        toastr()->success('Sikeresen módosítva!', 'Gratulálok');

        return redirect()->route('admin.portfolio-item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolioItem = PortfolioItem::findOrFail($id);
        $portfolioItem->delete();
    
        return response()->json(['status' => 'success', 'message' => 'Sikeres törlés!']);
    }
}
