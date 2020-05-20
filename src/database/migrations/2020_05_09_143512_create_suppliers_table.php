<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('suppliers');
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
        });
        $data = [
            ["id"=>1,'name'=>"khoan1",'address'=>'Bac Ninh','phone'=>'1234','email'=>'khoanld@gmail.com','created_at'=>new DateTime(),'updated_at'=>new DateTime()],
            ["id"=>2,'name'=>"khoan2",'address'=>'Bac Ninh','phone'=>'1234','email'=>'khoanld@gmail.com','created_at'=>new DateTime(),'updated_at'=>new DateTime()],
            ["id"=>3,'name'=>"khoan3",'address'=>'Bac Ninh','phone'=>'1234','email'=>'khoanld@gmail.com','created_at'=>new DateTime(),'updated_at'=>new DateTime()],
            ["id"=>4,'name'=>"khoan4",'address'=>'Bac Ninh','phone'=>'1234','email'=>'khoanld@gmail.com','created_at'=>new DateTime(),'updated_at'=>new DateTime()],
            ["id"=>5,'name'=>"khoan5",'address'=>'Bac Ninh','phone'=>'1234','email'=>'khoanld@gmail.com','created_at'=>new DateTime(),'updated_at'=>new DateTime()],
        ];
        DB::table('suppliers')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
