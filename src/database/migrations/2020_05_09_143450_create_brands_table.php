<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('brands');
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('logo');
            $table->timestamps();
        });
        $data = [
            ["id"=>1,'name'=>"casio",'logo'=>"https://shopguitarcaugiay.com/components/com_jshopping/files/img_products/thumb_67403642_404654263506925_2461381302763388928_n.jpg",'created_at'=>new DateTime(),'updated_at'=>new DateTime()],
            ["id"=>2,'name'=>"kawasaki",'logo'=>"https://shopguitarcaugiay.com/components/com_jshopping/files/img_products/thumb_67403642_404654263506925_2461381302763388928_n.jpg",'created_at'=>new DateTime(),'updated_at'=>new DateTime()],
            ["id"=>3,'name'=>"nextgend",'logo'=>"https://shopguitarcaugiay.com/components/com_jshopping/files/img_products/thumb_67403642_404654263506925_2461381302763388928_n.jpg",'created_at'=>new DateTime(),'updated_at'=>new DateTime()],
            ["id"=>4,'name'=>"asasin",'logo'=>"https://shopguitarcaugiay.com/components/com_jshopping/files/img_products/thumb_67403642_404654263506925_2461381302763388928_n.jpg",'created_at'=>new DateTime(),'updated_at'=>new DateTime()],
            ["id"=>5,'name'=>"casios",'logo'=>"https://shopguitarcaugiay.com/components/com_jshopping/files/img_products/thumb_67403642_404654263506925_2461381302763388928_n.jpg",'created_at'=>new DateTime(),'updated_at'=>new DateTime()],
            ["id"=>6,'name'=>"pilot",'logo'=>"https://shopguitarcaugiay.com/components/com_jshopping/files/img_products/thumb_67403642_404654263506925_2461381302763388928_n.jpg",'created_at'=>new DateTime(),'updated_at'=>new DateTime()],

        ];
        DB::table('brands')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
