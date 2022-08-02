<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class AdminController extends Controller
{
    //

     public function view_category(){

        $data = category::all();
        return view('admin.category', compact('data'));
    }

     public function add_category(Request $request){
        $data = new category;
        $data->category_name = $request->category_name;
        $data->save();
        return redirect()->back()->with('message', 'Category Added Successfully !!!');

    }

    public function delete_category($id){
        $data = category::find($id);
        $data -> delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully !!!');

    }

    public function view_product(){
        $data = category::all();
        return view('admin.product', compact('data'));
    }

    public function add_product(Request $request){
        $product = new product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount = $request->dis_price;
        $product->category = $request->category;



        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $product->image = $imagename;


        $product->save();
        return redirect()->back()->with('message', ' Product Added Successfully !!!');
    }

    
}