<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{

    public function ManagementCategory() {

        $categories = Category::paginate(5);
        return view('management.category', compact('categories'));
    }

    public function CategoryStore(Request $request) {

        $request->validate([
           'category_name' => 'required|unique:categories|max:255'
        ],[
            'category_name.required' => 'Category Name Is Required'
        ]);

        Category::insert([
           'category_name' => $request->category_name,
            'created_at' => Carbon::now(),
        ]);

        $request->session()->flash('status', $request->category_name. ' is Save Successfully');
        return redirect('/management/category');
    }

    public function EditCategory($id) {

        $category = Category::findOrFail($id);
        return view('management.edit_category', compact('category'));
    }

    public function CategoryUpdate(Request $request, $id) {

        $request->validate([
            'category_name' => 'required|unique:categories|max:255'
        ]);

        Category::findOrFail($id)->update([
            'category_name' => $request->category_name,
            'created_at' => Carbon::now(),
        ]);

        $request->session()->flash('status', $request->category_name. ' is Updated Successfully');
        return redirect('/management/category');

    }

    public function DeleteCategory($id) {

        Category::findOrFail($id)->delete();
        Session()->flash('status', 'The Category is Deleted Successfully');
        return redirect('/management/category');

    }

}
