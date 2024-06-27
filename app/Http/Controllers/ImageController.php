<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\ImageRequest;

/**
 * Class ImageController
 * @package App\Http\Controllers
 */
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::paginate();

        return view('image.index', compact('images'))
            ->with('i', (request()->input('page', 1) - 1) * $images->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $image = new Image();
        return view('image.create', compact('image'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ImageRequest $request)
    {
        Image::create($request->validated());

        return redirect()->route('images.index')
            ->with('success', 'Image created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $image = Image::find($id);

        return view('image.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $image = Image::find($id);

        return view('image.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ImageRequest $request, Image $image)
    {
        $image->update($request->validated());

        return redirect()->route('images.index')
            ->with('success', 'Image updated successfully');
    }

    public function destroy($id)
    {
        Image::find($id)->delete();

        return redirect()->route('images.index')
            ->with('success', 'Image deleted successfully');
    }
}
