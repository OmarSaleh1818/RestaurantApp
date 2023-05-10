<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;

class CashierController extends Controller
{
    public function Index() {

        return view('cashier.index');
    }

    public function GetTables() {

        $tables = Table::all();
        $html = '';
        foreach ($tables as $table) {
            $html .= '<div class="col-md-3 mb-4">';
            $html .= '
                <button class="btn btn-primary">
                    <img src="'.url('v2/assets/images/table.jpg').'" class="img-fluid"/>
                    <span class="badge badge-success">'.$table->table_name.'</span>
                </button>';
            $html .= '</div>';
        }

        return $html;
    }



}
