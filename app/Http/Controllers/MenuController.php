<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $menu = MenuModel::all();
        return view('pages.menu',[
            "menu" => $menu
        ]);
    }
}
