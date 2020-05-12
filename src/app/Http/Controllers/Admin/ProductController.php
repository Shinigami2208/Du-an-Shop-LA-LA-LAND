<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Supplier;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view(
            'admin.product.list',
            [
                'products' => Product::all(),
                'categories' => Category::all(),
                'brands' => Brand::all(),
                'suppliers' => Supplier::all(),
            ]
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view(
            'admin.product.create',
            ['categories' => Category::all()]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = Product::Create($request->all());
        $product -> categories() -> attach($request->category_id);
        return redirect()->route('adminProduct.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view (
            'admin.product.edit',
            [ 
                'product' => Product::findOrFail($id),
                'categories' => Category::all(),
            ]
            );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Product::find($id)->update($request->all());
        // CategoryProduct::find();

        return redirect()->route('adminProduct.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        // $product -> categories() -> detach(3);
        print_r($product->categories()->get());
        // return redirect()->route('adminProduct.index');
    }

    public function deleteForm(Request $request, $id){
        return view
        (
            'admin.product.delete', 
            [
                'product' => Product::find($id),
                'id' => $id
            ]
        );
    }
}
