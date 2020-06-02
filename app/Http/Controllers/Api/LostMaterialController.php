<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Material;

class LostMaterialController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'string|required',
            'description' => 'string|required',
            'returner_registration_mark' => 'string|required|max:60'
        ]);

        $material = Material::create($validatedData);

        return response()->json($material, 201);
    }
}
