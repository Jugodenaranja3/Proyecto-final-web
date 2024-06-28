<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // CONTROLADOR PARA PRODUCTOS

    public function index() {
        $products = Product::All();
        return view('products.index', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->unitPrice = $request->price;
        $product->availability = $request->availability;
        //$product->id_categories = $request->id_categories;
        $product->save();
        return redirect('./products');
    }

    public function show($products)
    {
        $products = Product::find($products);
        return view('products.show', compact('products'));
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('products.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products->name = $request->name;
        $products->quantity = $request->quantity;
        $products->unitPrice = $request->price;
        $products->availability = $request->availability;

        $products->save();
        //return redirect("/products/{$products->id}");
        return redirect("/products");
    }

    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect('/products');
    }
    //
}
