<?php

namespace App\Http\Controllers;

use App\Models\Guard;
use Illuminate\Http\Request;

class GuardController extends Controller
{
    public function index()
    {
        return response()->json(
            Guard::orderBy('id', 'desc')->get()
        );
    }

    public function show($id)
    {
        return response()->json(
            Guard::findOrFail($id)
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'guard_code' => 'required|unique:guards,guard_code',
            'first_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
        ]);

        $guard = Guard::create($validated);

        return response()->json($guard, 201);
    }
}