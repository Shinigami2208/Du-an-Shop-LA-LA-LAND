<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Supplier;
use App\Models\Stock;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;
use Illuminate\Validation\Rules\Exists;

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
//        for($i = 0; $i<10; $i++) {
            $product = Product::Create([
                'name' => $request->name,
                'brand_id' => $request->brand_id,
                'category_id' => $request->category_id,
                'unit_price' => $request->unit_price,
                'promotion_price' => $request->promotion_price,
                'description' => $request->description,
                'quality' => 0,
            ]);
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $name = time() . "-" . $file->getClientOriginalName();
                $path = public_path(config('image.imageProduct'));
                $file->move($path, $name);
                chmod($path . $name, 0777);
                $image = Image::create([
                    'product_id' => $product->id,
                    'image' => $name
                ]);
            }
       // }
        return redirect()->back()->with('messenger_success', 'Thêm sản phẩm thành công');
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
        return redirect()->back()->with('messenger_success', 'Thêm hình ảnh thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteForm(Request $request){
        $product = Product::find($request->id);
        $path =public_path(config('image.imageProduct'));
        if(count($product->images)){
            foreach ($product->images as $image){
                    @unlink($path . $image->image);
                    //  clearstatcache();
                    $image->delete();
            }
        }
        $product->delete();
    }

    // lay chi tiet comment va hinh anh

    public function getCommentImage($id){
        $product = Product::find($id);
        $comments = Comment::where('product_id', $id)->paginate(5);
        $images = Image::where('product_id', $id)->paginate(5);
        $configs = config('image.imageProduct');
        return view('admin.product.ajax_detail_product', compact('comments', 'images', 'product','configs'));
    }
    // them hinh anh cho san pham
    public function addImage(Request $request, $id){
        $validator =Validator::make($request->all(),[
            'imageadd' => 'mimes:jpg,jpeg,png,gif'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $file = $request->file('imageadd');
        $name =time() . "-" . $file->getClientOriginalName();
        $path = public_path(config('image.imageProduct'));
        $file->move($path,$name);
        chmod($path.$name,0777);
        $image = Image::create([
            'product_id' => $id,
            'image' => $name
        ]);
        return redirect()->back()->with(['messenger_success'=>'Thêm hình ảnh thành công','detail_id'=>$id]);
    }
    /* tim kiem san pham */
    public function searchProduct(Request $request){
        $products = Product::where('name',"LIKE","%$request->name%")->paginate(5);
        return view('admin.supplier.ajax_search_product', compact('products'));
    }
    /* tim kiem san pham chi tiet o muc san pham */
    public function searchProduct2(Request $request) {
        $products = Product::where('name',"LIKE","%$request->name%")->paginate(5);
        return view('admin.product.ajax_search_product', compact('products'));
    }

    public function test(){
        $product = Product::find(10);
        dd($product->images);
    }
}
