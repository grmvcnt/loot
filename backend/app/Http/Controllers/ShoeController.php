<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Shoe::all();
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
    public function show(Shoe $shoe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shoe $shoe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shoe $shoe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shoe $shoe)
    {
        //
    }

    /**
     * Return a shoe from each collection, filtered by collection and color.
     */
    public function getShoeByCollections(Request $request): JsonResponse
    {
        $query = Shoe::query();

        if ($request->has('collection') && $request->input('collection') !== 'all') {
            $query->where('collection', $request->input('collection'));
        }

        if ($request->has('color') && $request->input('color') !== 'all') {
            $query->where('color', $request->input('color'));
        }

        $collections = $query->distinct('collection')->pluck('collection');
        $shoes = [];

        foreach ($collections as $collection) {
            $shoe = Shoe::where('collection', $collection)->first();
            if ($shoe) {
                $shoes[] = $shoe;
            }
        }

        return response()->json($shoes);
    }
}
