<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;

class MenuController extends Controller
{

    public function ManagementMenu() {

        return view('management.menu');
    }

    public function MenuCreate() {

        $categories = Category::all();
        return view('management.create_menu', compact('categories'));
    }


}
