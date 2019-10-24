<?php


namespace App\Http\Controllers\API;

use Auth;
use App\User;
use App\Promocode;
use App\Http\Controllers\Controller as Controller;


class BaseController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, $message = 'Success')
    {
        $response = [
           'errorCode' => 0,
           'message' => $message,
           'data'    => array(
                'total_item' => count($result), // real data
                "total_page" => 1, // fake dummy data
                "mem_tier" => "newbie", // fake dummy data
                "total_expired_class" =>  0, // fake dummy data
                'pack_list' => $result, // real result
           )
        ];


        return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
    	$response = [
            'success' => false,
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }

   /*
   promocode generator
   // each user might have only one promocode
   later , we can improve promocode expires date
   */
    
    public function getPromoCode($length = 10 ,$code = 200)
    {

        if(!Promocode::find(Auth::user()->id))
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            // save promo code to promo code table
            // if user don't have promo code , create one
            $promocode = new Promocode();
            $promocode->user_id = Auth::user()->id;
            $promocode->promocode = $randomString;
            $promocode->save();

        }else{
            $promo = Promocode::find(Auth::user()->id)->toArray();
            $randomString = $promo['promocode'];
            
        }
        $response = [
             'promocode' => $randomString
        ];
        return response()->json($response, $code);
    }

}