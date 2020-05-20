<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('categories');
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->integer('parent_category')->default(0);
            $table->string('description');
            $table->timestamps();
        });
        $data = [
            ["id"=>1,'name'=>"piano",'description'=>"dep",'created_at'=>new DateTime(),'updated_at'=>new DateTime()],
            ["id"=>2,'name'=>"guitar",'description'=>"dep",'created_at'=>new DateTime(),'updated_at'=>new DateTime()],
            ["id"=>3,'name'=>"sacsophon",'description'=>"dep",'created_at'=>new DateTime(),'updated_at'=>new DateTime()],
            ["id"=>4,'name'=>"ken",'description'=>"dep",'created_at'=>new DateTime(),'updated_at'=>new DateTime()],

        ];
        DB::table('categories')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
