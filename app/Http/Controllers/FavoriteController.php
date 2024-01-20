<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return auth()->user()->favorites()->paginate(10);
    }

    public function store(Request $request)
    {
        auth()->user()->favorites()->attach($request->product_id);

        return response()->json([
            'success' => true,
        ]);
    }

    public function destroy(string $favorite)
    {
        if(auth()->user()->hasFavorite($favorite)){
            auth()->user()->favorites()->detach($favorite);

            return response()->json([
                'success' => true
            ]);
        }

        return  response()->json([
            'success' => false,
            'message' => 'favorite does not exist in this user'
        ]);
    }
}
