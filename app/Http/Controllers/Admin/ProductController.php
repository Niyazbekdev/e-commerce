<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return $this->response(ProductResource::collection(Product::all()));
    }

    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->toArray());

        return $this->success("jfkd", $product);
    }

    public function destroy(Product $product)
    {
        Gate::authorize('product:destroy');

        Storage::delete($product->images()->pluck('path')->toArray());
        $product->images()->delete();
        $product->delete();

        return $this->success('product deleted');
    }
}
