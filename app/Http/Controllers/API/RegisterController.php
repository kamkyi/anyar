<?php

namespace App\Http\Controllers\API;

use App\User;
use App\Packs;
use Validator;
use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\API\BaseController;
use App\Promocode;

class RegisterController extends BaseController
{
    //
     /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;


        return $this->sendResponse($success, 'User register successfully.');
    }

    /*
    Promo code checker
    */

    public function checkPromoCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'promocode' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Promocode Not Found .', $validator->errors());       
        }
        // check user inputted promocode here to decide to 
        // discount
        if($promo_real = Promocode::find(Auth::user()->id))
        {
             $checker =($promo_real['promocode'] === $request->promocode)?true:false;        
        }

        if($checker)
        {
            return response()->json(['promo_code'=> 'valid','status'=>true]);
        }else{
            return response()->json(['promo_code'=>'invalid','status'=>false]);
        }
    }

    // apply Promocode
    public function applyPromo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'promocode_status' => 'required',
            'pack_id' => 'required'
        ]);


        if($validator->fails()){
            return $this->sendError('Promocode Status Required .', $validator->errors());       
        }
        
        $pack = Packs::find($request->pack_id)->toArray();

        // 7 % of pack price will be GST and DISCOUNT
        $GST = ($pack['pack_price'] * 0.07);
        
        if($request->promocode_status)
        {
             $DISCOUNT = ($pack['pack_price'] * 0.07); 
        }

        $response = [
            'pack_price' => $pack['pack_price'],
            'sub_total' => ($pack['pack_price'] - $DISCOUNT),
            'discount' => "- ".$DISCOUNT,
            'grand_total' => ($pack['pack_price'] - $DISCOUNT) + $GST
        ];

        return response()->json($response);
    }

}
