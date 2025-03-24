<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Log;

use App\Models\Potion;
use Illuminate\Http\Request;

class PotionController extends Controller
{
    public function index()
    {
        return Potion::with('ingredients', 'wizards')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'magical_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'curative' => 'required|boolean',
            'magic_level_required' => 'required|integer|min:1',
        ]);

        return Potion::create($request->all());
    }

    public function show(string $id)
    {
        return Potion::with('ingredients', 'wizards')->findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $potion = Potion::findOrFail($id);
        $potion->update($request->all());

        return $potion;
    }

    public function destroy(string $id)
    {
        Potion::destroy($id);
        return response()->json(['message' => 'Potion deleted']);
    }
}
