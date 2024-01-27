<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductImageRequest;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index(Product $product)
    {
        return $this->response($product->images);
    }

    public function store(StoreProductImageRequest $request, Product $product)
    {
        $photo = [];
        foreach ($request->images as  $image){
            $path = $image->store('products/' . $product->id, 'public');
            $fullName = $image->getClientOriginalName();

            $photo = $product->images()->create([
                'file_name' => $fullName,
                'path' => $path
            ]);
        }

        return $this->success('photo uploaded', $photo);
    }

    public function destroy(Product $product, Image $image)
    {
        Storage::delete($image->path);
        $image->delete();

        return $this->success('image deleted');
    }
}
