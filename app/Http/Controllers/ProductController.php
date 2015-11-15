<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;

use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product/index', [
            'products'      => Product::latest()->paginate(16),
            'recommended'   => Product::take(8)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        // $request->set('image')

        $p = Product::create($request->all());

        if ($request->hasFile('image')) {
            // $request->file('image')->move('uploads', time().'.png');
        }

        return redirect('product/manage');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product/show', [
            'product'       => $product,
            'related'       => Product::take(16)->get(),
            'menjual'       => Product::take(4)->get(),
            'recommended'   => Product::take(8)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product/edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());

        return redirect('product/manage');
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

        return redirect('product/manage');
    }

    public function manage()
    {
        return view('product/manage', [
            'products' => Product::paginate(10)
        ]);
    }
}
