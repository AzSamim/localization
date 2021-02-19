<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' =>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
            'description' => ['required','max:255'],
            'price'       =>['required'],
        ])->validate();
        Product::create([
            'name' => $request->name,
            'description' =>$request->description,
            'price'  =>$request->price
        ]);
        return redirect()->route('products.index')
            ->with('success', trans('lang_file.add_product_message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' =>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        Validator::make($request->all(), [
            'name'  =>['required', 'max:255'],
            'description' =>['required', 'max:255'],
            'price'       =>['required'],
        ])->validate();
        $product->update([
            'name' => $request->name,
            'description' =>$request->description,
            'price'  =>$request->price
        ]);
        return redirect()->route('products.index')
            ->with('success', trans('lang_file.edit_product_message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
            ->with('success', trans('lang_file.delete_product_message'));
    }

}
