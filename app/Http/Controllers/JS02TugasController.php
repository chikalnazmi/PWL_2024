<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JS02TugasController extends Controller
{
    public function home()
    {
        return view('JS02Tugas.home');
    }

    public function category()
    {
        return view('JS02Tugas.category');
    }
    public function foodBeverage()
    {
        return view('JS02Tugas.foodBeverage');
    }
    public function beautyHealth()
    {
        return view('JS02Tugas.beautyHealth');
    }
    public function homeCare()
    {
        return view('JS02Tugas.homeCare');
    }
    public function babyKid()
    {
        return view('JS02Tugas.babyKid');
    }

    public function user($id, $name)
    {
        return view('JS02Tugas.user', ['id' => $id, 'name' => $name]);
    }

    public function sales()
    {
        return view('JS02Tugas.sales');
    }
}

