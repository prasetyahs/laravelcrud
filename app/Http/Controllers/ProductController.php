<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'amount' => 'required'
        ]);
        product::create($request->all());
        return redirect()->route('product.index')
            ->with('success', 'Product created successfully.');
    }


    public function show(product $product)
    {
        return view('product.show', compact('product'));
    }


    public function edit(product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, product $product)
    {
        $request->validate([
            'product_name' => 'required',
            'price' => 'required',
        ]);
        $product->update($request->all());
        return redirect()->route('product.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('product.index')
            ->with('success', 'Product deleted successfully');
    }
    public function all()
    {
        $product = product::all();
        return view('data_table', ['products' => $product]);
    }
}
