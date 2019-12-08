<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //
    public function index(Request $request){



        $option = strval(request('options'));
        $quantity = strval(request('quantity'));
        $sku = strval(request('sku'));

        $option = $sku.','.$option.','.$quantity;
        $count = count(session()->all());
        session([$count => $option]);

        return Redirect::back();
    }

    public function show(){
        $i=0;

        $cart = array();
        $cartList = array();

        foreach(session()->all() as $key => $obj) {
            if ($i > 2) {
                //push session item onto array - item is a string
                array_push($cart, $obj);

                //split string to get items
                $temp = explode(',', $cart[$i - 3]);

                //create object with id, option, and quantity
                $myObj = new \stdClass();
                $myObj->id = $temp[0];
                $myObj->option = $temp[1];
                $myObj->quantity = $temp[2];
                $myObj->name = getProductName($myObj);
                $myObj->image = getProductImage($myObj);
                $myObj->cost = getProductCost($myObj);

                //create object list
                array_push($cartList, $myObj);

                //get productname

            }
            $i++;
        }
        $total = getTotalCost($cartList);
        return view('cart')->with('cartList',$cartList)->with('total',$total);
        }
}


function getProductName(\stdClass $myObj) {

    $name=DB::table('products')->where('sku', $myObj->id)->value('name');
    return $name;

}

function getProductImage(\stdClass $myObj) {

    $image=DB::table('products')->where('sku', $myObj->id)->value('image');
    return $image;

}
function getProductCost(\stdClass $myObj) {

    $cost=DB::table('products')->where('sku', $myObj->id)->value('retail_price');
    return $cost;

}

function getTotalCost(array $cartList) {
    $total = 0;

    foreach ($cartList as $item){
        $total+= ($item->quantity * $item->cost);
    }

    return $total;
}
