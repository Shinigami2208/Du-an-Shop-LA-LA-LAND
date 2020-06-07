<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::paginate(3);
        return view('admin.category.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Category.Create');
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
        Category::Create($request->all());
        return redirect()->back()->with('messenger_success', ' Tạo danh mục thành công');
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
        $category =  Category::find($id);
        return view('admin.category.ajax_Edit_Category', compact('category'));
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
        Category::find($id)->update($request->all());
        return redirect()->back()->with('messenger_success', 'Bạn đã sửa danh mục thành công ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $category = Category::find($id);
        $products = $category->products;
        try {
            DB::beginTransaction();
            if($request->category != null){
               foreach ($products as $product){
                   $product->category_id = $request->category;
                   $product->save();
               }
            }else{
               foreach ($products as $product){
                   $product->delete();
               }
            }
            Category::find($id)->delete();
            DB::commit();
            return redirect()->back()->with('messenger_success', 'xoa thanh cong');
        }
        catch( Throwable $e){
            DB::rollback();
        }
    }

    public function deleteForm($id){
        $name = Category::find($id)->name;
        $categories = Category::where('id', '!=' , $id)->get();
        return view('admin.category.ajax_delete_category', compact('categories', 'id','name'));
    }
    // ajax lay san pham cua danh muc
    public function detail($id){
        $products = Product::where('category_id',$id)->paginate(2);
        return view('admin.category.ajax_detail_category', compact('products'));
    }
}
