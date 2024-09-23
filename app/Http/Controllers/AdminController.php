<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category()
    {
        $categories = category::all();
        return view('admin-profile.category',[
            'categories' => $categories
        ]);
    }

    public function add_category(Request $request)
    {
        $category = new category();
        $request->validate([
            'category_name' => 'required'
        ]);
        category::create(
            [
                'category_name' => $request->category_name,
            ]
        );
        toastr()->closeButton()->addSuccess('Category added successfully');
        return redirect('/view_category');
    }

    public function edit_category($id)
    {
        $category = category::findOrFail($id);
        return view('admin-profile.editCategory',[
            'category' => $category
        ]);
    }

    public function delete_category($id)
    {
        $category = category::findOrFail($id)->delete();
        toastr()->closeButton()->deleted('category');
        return redirect('/view_category');
    }

    public function add_product()
    {
        $category = category::all();
        return view('admin-profile.add_product',['categories' => $category]);
    }

    public function insert_product(Request $request) {
        $image = $request->file('image');
        Product::create(
            [
                'title' => $request->title,
                'description' => $request->description,
                'category' => $request->category,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'image' => time(). '.' . $image->extension()
            ]
        );
        $image->move('products',time(). '.' . $image->extension());
        return redirect(route('add_product'));
    }

    public function view_products()
    {
        $products = Product::simplePaginate(6);
        return view('admin-profile.view-products',['products' => $products]);
    }
}
