<?php

namespace App\Http\Controllers;

use App\Models\Fuel;
use App\Http\Requests\FuelRequest;

/**
 * Class FuelController
 * @package App\Http\Controllers
 */
class FuelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fuels = Fuel::paginate();

        return view('fuel.index', compact('fuels'))
            ->with('i', (request()->input('page', 1) - 1) * $fuels->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fuel = new Fuel();
        return view('fuel.create', compact('fuel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FuelRequest $request)
    {
        Fuel::create($request->validated());

        return redirect()->route('fuels.index')
            ->with('success', 'Fuel created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $fuel = Fuel::find($id);

        return view('fuel.show', compact('fuel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fuel = Fuel::find($id);

        return view('fuel.edit', compact('fuel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FuelRequest $request, Fuel $fuel)
    {
        $fuel->update($request->validated());

        return redirect()->route('fuels.index')
            ->with('success', 'Fuel updated successfully');
    }

    public function destroy($id)
    {
        Fuel::find($id)->delete();

        return redirect()->route('fuels.index')
            ->with('success', 'Fuel deleted successfully');
    }
}
