<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function store (StoreProductRequest $request){

Product::query()->create($request->validated());



    }
    public function showDetails (int $id){
       return Product::query()->where('id',$id)->with('category')->get();
    }

}
