<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Cookie as HttpFoundationCookie;

class CartController extends Controller
{
    public function addtocart(Request $req){

        $validate = Validator::make($req->all('id','size','colo','price','quantity','available'),[
         'id'=>'required|integer',
         'size'=>'required|string',
         'colo'=>'required|string',
         'price'=>'required|integer',
         'quantity'=>'required|integer',
         'available'=>'required|integer'
        ]);

        if($validate->fails()){
             return response()->json([
                 'status'=>400,
                 'message'=>$validate->errors()
             ]);
        }else{

            $item = array();
            $item[] = array(
                'productid'=>$req->id,
                'size'=>$req->size,
                'colour'=>$req->colo,
                'price'=>$req->price,
                'quantity'=>$req->quantity,
                'available'=>$req->available,
            );
            //dd()

         if(Cookie::get('cart')){
              $cartid = Cookie::get('cart');
            $incart = Cart::findorfail($cartid);
            $previousitem = json_decode($incart->items,true);
            //$arr = Arr::exists($previousitem,  $item[0]);
            $item_match = 0;
            $new_item = array();

            foreach( $previousitem as $ptiem){
                if($item[0]['productid'] == $ptiem['productid'] && $item[0]['size'] == $ptiem['size'] && $item[0]['colour'] == $ptiem['colour'] && $item[0]['price'] == $ptiem['price']){

                    $ptiem['quantity'] = $ptiem['quantity'] + $item[0]['quantity'];

                    if($ptiem['quantity'] >= $item[0]['available']){
                        $ptiem['quantity'] = $item[0]['available'];
                        return response()->json([
                            'status'=>201,
                            'identify'=>$item[0]['size'].$item[0]['colour'],
                            'message'=> 'Maximum Quantity of '.$item[0]['available'].' reached!'
                        ]);
                    }

                    $item_match = 1;
                }

                $new_item[] = $ptiem;
            }

            if( $item_match == 0){
                $new_item = array_merge($item,$previousitem);
            }

            $item_json = json_encode($new_item);
            $addp = DB::table('carts')->where('id',$cartid)->update(['items'=>$item_json]);

            if($addp){
                $da = Carbon::now()->addMonth();
                $cartexpire = $da->diffInMinutes();
                Cookie::queue('cart', '', 1);

                Cookie::queue('cart', $cartid, $cartexpire);
                
    
                return response()->json([
                    'status'=>200,
                    'message'=> 'Product'
                ]);
            }
          
            

         }else{
            $da = Carbon::now()->addMonth();
            $cartexpire = $da->diffInMinutes();

            $cart = new Cart;
            $cart->items = json_encode($item);
            $cart->cart_expiry = $cartexpire;
            $cart->save();

            Cookie::queue('cart', $cart->id, $cartexpire);

            return response()->json([
                'status'=>200,
                'message'=> 'Product added to cart '
            ]);


         }

        }

    }







}
