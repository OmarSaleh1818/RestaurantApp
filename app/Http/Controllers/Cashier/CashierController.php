<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\Category;
use App\Models\Menu;

class CashierController extends Controller
{
    public function Index() {

        $categories = Category::all();
        return view('cashier.index', compact('categories'));
    }

    public function GetTables() {

        $tables = Table::all();
        $html = '';
        foreach ($tables as $table) {
            $html .= '<div class="col-md-3 mb-4">';
            $html .= '
                <button class="btn btn-primary btn-table" data-id="'.$table->id .'"
                 data-name="'. $table->table_name.'">
                    <img src="'.url('v2/assets/images/table.jpg').'" class="img-fluid"/>
                    <span class="badge badge-success">'.$table->table_name.'</span>
                </button>';
            $html .= '</div>';
        }

        return $html;
    }

    public function GetMenuByCategory($id) {

        $menus = Menu::where('category_id', $id)->get();
        $html = '';
        foreach ($menus as $menu) {
            $html .= '
                <div class="col-md-3 text-center">
                    <a class="btn btn-outline-secondary btn-menu" data-id="'.$menu->id.'">
                        <img class="img-fluid" src="'.url('/menu_image/'.$menu->menu_image).'">
                        <br>
                        '.$menu->menu_name.'
                        <br>
                        '.number_format($menu->menu_price).'
                    </a>
                </div>
            ';
        }

        return $html;

    }

    public function OrderFood(Request $request) {

        return 'this is information about menu';

    }




}
