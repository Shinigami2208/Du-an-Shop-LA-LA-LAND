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
     *
     */
    public function __construct()
    {
        $products = Product::all();
        $categories = Category::all();
        $brands = Brand::all();
        $suppliers = Supplier::all();
        view()->share('products', $products);
        view()->share('categories', $categories);
        view()->share('brands', $brands);
        view()->share('suppliers', $suppliers);
    }

    public function index()
    {
        return view('admin.product.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.product.create', ['categories' => Category::all()] );
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
        $product = Product::Create([
            'name' => $request->name,
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'supplier_id' => $request->supplier_id,
            'unit_price' => $request->unit_price,
            'promotion_price' => $request->promotion_price,
            'description' => $request->description,
            'quality' => $request->quality,
        ]);
        return redirect()->back();
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
    public function showEdit($id){
        $product = Product::find($id);
        return view('admin.product.ajax_modal_editProduct', compact('product'));
    }
    public function edit($id)
    {
        $product = Product::findorFail($id);
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'categories'));
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
        Product::find($id)->update($request->all());

        return redirect()->back();
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
        return view('admin.product.delete', ['product' => Product::find($id), 'id' => $id]);
    }
}
