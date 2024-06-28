<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ElectronicComponentsController extends Controller
{
    // CONTROLADOR PARA COLECCION DE PRODUCTOS

    public function index() {
        $products = Product::All();
        return view('electronic-components.index', ['products' => $products]);
    }
}
