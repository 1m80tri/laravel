<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    function show(){
        return view("cart.show");
    }

    function add(Request $request, $id){

        // Cart::destroy();

        $product = Product::find($id);
        Cart::add(
            [
                'id' => $product->id,
                'name' => $product->title,
                'qty' => 1, 
                'price' =>  $product->price,
                'options' => ['image' => $product->image]
            ]
        );       
        return redirect("cart/show");
    }

    function delete($rowId){
        Cart::remove($rowId);
        return redirect("cart/show");
    }

    function destroy(){
        Cart::destroy();
        return redirect("cart/show");
    }

    function update(Request $request){
        // dd($request->all());
        $data = $request->get('qty');
        // return $data;

        foreach($data as $k=>$v){
            Cart::update($k, $v);
        }
        return redirect("cart/show");
    }
}
