<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Supplier;
use App\Models\Stock;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;

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
        $products = Product::paginate(5);
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
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

        $stock = Stock::create([
            'product_id' => $product->id,
            'supplier_id' => $request->supplier_id,
            'quality' => $request->quality,
            'payment' => $request->unit_price*$request->quality,
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $name =time() . "-" . $file->getClientOriginalName();
            $path = public_path('/images/product');
            $file->move($path,$name);
            $image = Image::create([
                'product_id' => $product->id,
                'image' => $name
            ]);
        }
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
    public function update(ProductRequest $request, $id)
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
    public function deleteForm(Request $request){
        $product = Product::find($request->id);
        $product->delete();
    }
    // lay chi tiet comment va hinh anh
    public function getCommentImage($id){
        $product = Product::find($id);
        $comments = $product->comments;
        $images = $product->images;
        return view('admin.product.ajax_get_comment_image', compact('comments', 'images'));
    }
}
