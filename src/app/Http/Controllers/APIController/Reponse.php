<?php


namespace App\Http\Controllers\APIController;


class Reponse
{
    public static $errors = array(
        'code' => 400,
        'status' => 'Errors',
        'message' =>'loi he thong'
    );
    public static $succes = array(
        'code' => 200 ,
        'status' => 'success',
    );
}
