<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Supplier;
class SupplierController extends Controller
{
    public function __construct()
    {
        $products = Product::paginate(5);
        view()->share('products',$products);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $suppliers = Supplier::paginate(5);
        return view('admin.supplier.list', compact('suppliers'));
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
    public function store(Request $request)
    {
        //
        Supplier::Create($request->all());
        return redirect()->back()->with('messenger_success', 'Bạn đã thêm nhà cung cấp thành công');
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
        $supplier = Supplier::find($id);
        return view('admin.supplier.ajax_edit_supplier',compact('supplier'));
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
        try {
            $check = Supplier::find($id)->update($request->all());

            return redirect()->back()->with('messenger_success', 'Bạn đã sửa nhà cung cấp thành công');

        }catch (\Exception $err){
            return redirect()->back()->with('messenger_errors', ' Hệ thống đang gặp vấn đề, mời bạn liên lạc qua : ');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function test(){
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_URL,"https://pianohanoi.com/");
        $resul = curl_exec($curl);
        dd(html_entity_decode($resul));
        curl_close($curl);
    }

}
