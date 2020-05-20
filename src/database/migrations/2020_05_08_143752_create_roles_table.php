<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('roles');
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        $data = [
            ["id"=>1, 'name'=>'admin','created_at'=>new DateTime(),'updated_at'=>new DateTime()],
            ["id"=>2, 'name' => 'Nhan vien','created_at'=>new DateTime(),'updated_at'=>new DateTime()]
        ];
        DB::table('roles')->insert($data);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
