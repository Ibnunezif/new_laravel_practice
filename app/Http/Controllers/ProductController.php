<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\SaveProductRequest;

class ProductController extends Controller
{
    //
    public function index(){
        $product = Product::orderBy("created_at")->paginate(3);
        return view("products.index" , ["products"=>$product]);
    }
    public function create (){
        return view("products.create");
    }
    public function store (SaveProductRequest $request) {
        //the fillable property inside the model must be set to use the mass assignment like below
        Product::create($request->validated());// mass assignment with validation inside HTTP=>Request=>SaveProductRequest
        return redirect (route("products.index"))->with("status","product added");
    }
    public function show (Product $product){
        return view("products.show",compact("product"));
    }
    public function edit (Product $product){
        return view("products.edit",compact("product"));
    }
    public function update (Product $product , SaveProductRequest $request){
        $product->update($request->validated());
        return redirect(route("products.show",compact("product")))->with("status","product updated");
    }
    public function destroy (Product $product){
        $product->delete();
        return redirect()->route("products.index")->with("status","Product deleted!");
    }
}
