<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Provider;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::get();
        return view('admin.product.index',compact('products'));
    }
    public function create(){
        $categories=Category::get();
        $products=Provider::get();
        return view('admin.product.create',compact('categories','products'));
    }
    
    public function store(StoreRequest $request){
        Product::create($request);
        return redirect()->route('products.index');
    }
    public function show(Product $product){
        return view('admin.product.show',compact('product'));
    }
    public function edit(Product $product){
        $categories=Category::get();
        $products=Provider::get();
        return view('admin.product.edit',compact('product','categories','products'));
    }
    public function update(UpdateRequest $request, Product $product){
        $product->update($request->all());
        return redirect()->route('products.index');
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('products.index');

    }
}
