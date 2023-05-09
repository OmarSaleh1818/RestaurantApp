<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;


class MenuController extends Controller
{

    public function ManagementMenu() {

        $menus = Menu::all();
        return view('management.menu', compact('menus'));
    }

    public function MenuCreate() {

        $categories = Category::all();
        return view('management.create_menu', compact('categories'));
    }

    public function MenuStore(Request $request) {

        $request->validate([
            'category_id' => 'required',
            'menu_name' => 'required|unique:menus|max:255',
            'menu_price' => 'required' ,
            'menu_description' => 'required',
        ]);

        $imageName = 'no_image.jpg';
        if($request->menu_image) {
            $request->validate([
                'menu_image' => 'nullable|file'
            ]);
            $imageName = date('mdYHis').uniqid().'.'. $request->menu_image->extension();
            $request->menu_image->move(public_path('menu_image'), $imageName);
        }

        Menu::insert([
            'category_id' => $request->category_id,
            'menu_name' => $request->menu_name,
            'menu_price' => $request->menu_price,
            'menu_image' => $imageName,
            'menu_description' => $request->menu_description
        ]);

        $request->session()->flush('status', $request->name.' is save successfully');

        return redirect('/management/menu');

    }

    public function EditMenu($id) {

        $categories = Category::all();
        $menu = Menu::findOrFail($id);
        return view('management.edit_menu', compact('menu','categories'));
    }

    public function MenuUpdate(Request $request, $id) {

        $request->validate([
            'category_id' => 'required',
            'menu_name' => 'required|max:255',
            'menu_price' => 'required' ,
            'menu_description' => 'required',
        ]);

        $menu = Menu::find($id);
        if ($request->image) {
            $request->validate([
                'menu_image' => 'required|file',
            ]);
            if ($menu->menu_image =! 'no_image.jpg') {
                $imageName = $menu->menu_image;
                unlink(public_path('menu_image').'/'. $imageName);
            }
            $imageName = date('mdYHis').uniqid().'.'. $request->menu_image->extension();
            $request->menu_image->move(public_path('menu_image'), $imageName);
        }else {
            $imageName = $menu->menu_image;
        }
        Menu::findOrFail($id)->update([
            'category_id' => $request->category_id,
            'menu_name' => $request->menu_name,
            'menu_price' => $request->menu_price,
            'menu_image' => $imageName,
            'menu_description' => $request->menu_description,
        ]);

        $request->session()->flash('status', $request->menu_name.' is updated successfully');
        return redirect('/management/menu');
    }

    public function DeleteMenu($id) {

        $menu = Menu::find($id);
        if ($menu->menu_image != 'no_image_jpg') {
            unlink(public_path('menu_image').'/'. $menu->menu_image);
        }
        $menu->delete();
        Session()->flash('status', 'The Menu is Deleted Successfully');
        return redirect('/management/menu');
    }


}
