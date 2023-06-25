<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public static function index()
    {
        return "ini pertambahan";
    }

    public static function perkalian($angka1,$angka2)
    {
        $num1 = (int)$angka1;
        $num2 = (int)$angka2;
        $hasil = $num1 *$num2;
        return "hasil : {$hasil}";
    }
}
