<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;
use Carbon\Carbon;

class TableController extends Controller
{

    public function ManagementTable() {

        $tables = Table::all();
        return view('management.table', compact('tables'));
    }

    public function TableStore(Request $request) {

        $request->validate([
            'table_name' => 'required|unique:tables'
        ]);

        Table::insert([
            'table_name' => $request->table_name,
            'created_at' => Carbon::now(),
        ]);

        $request->session()->flash('status', $request->table_name. ' is Save Successfully');

        return redirect('/management/table');
    }

    public function EditTable($id) {

        $table = Table::findOrFail($id);
        return view('management.edit_table', compact('table'));
    }

    public function TableUpdate(Request $request, $id) {

        $request->validate([
            'table_name' => 'required'
        ]);

        Table::findOrFail($id)->update([
            'table_name' => $request->table_name,
            'created_at' => Carbon::now(),
        ]);
        $request->session()->flash('status', $request->table_name. ' is Updated Successfully');

        return redirect('/management/table');

    }

    public function DeleteTable($id) {

        Table::findOrFail($id)->delete();
        Session()->flash('status', 'The Table is Deleted Successfully');
        return redirect('/management/table');
    }


}
