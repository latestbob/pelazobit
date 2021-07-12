<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\bank;
use App\Giftcard;
class pagesController extends Controller
{
    //index page

    public function index(){
        return view('index');
    }



    //real index page

    public function realindex(){
        return view('realindex');
    }
    ///our rates page


    //about page

    public function about(){
        return view('about');
    }

    public function rates(){


      


        return view('rates');
    }

    public function authen(){
        $banks=bank::all();
        return view('authen',compact('banks'));
    }


    //get bank details

    public function getbankdetails(){
        
        $curl = curl_init();
          
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.paystack.co/bank/resolve?account_number=2085295676&bank_code=033",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer sk_test_bbb8b8270c67bbc733dbb077ae39e8b67f75a282",
            "Cache-Control: no-cache",
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          echo $response;
        }
     
    }


    public function mybank(Request $request){

   
      $curl = curl_init();
          
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/bank/resolve?account_number=$request->banknumber&bank_code=$request->bank",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "Authorization: Bearer sk_test_bbb8b8270c67bbc733dbb077ae39e8b67f75a282",
          "Cache-Control: no-cache",
        ),
      ));
      
      $response = curl_exec($curl);
      $err = curl_error($curl);
      
      curl_close($curl);
      
      if ($err) {
        echo "cURL Error #:" . $err;
      } else {
        echo $response;
      }
    }


//update bank details
public function mybankupdate(Request $request){

  $bank=bank::where('code',$request->bank)->value('name');
  $user= User::where('email', $request->email)->update([
    'bank'=>$bank,
    'accountnumber'=>$request->accountnumber,
    'accountname'=>$request->accountname
  ]);

  return back()->with('msg','Bank Account Details added successfully');
 
}


//giftcard amount

public function giftcardamount(Request $request){

  $existed=Giftcard::where('name',$request->name)->where('country',$request->country)->where('variant',$request->variant)->where('domination',$request->domination)->exists();


  if($existed){
    $card=Giftcard::where('name',$request->name)->where('country',$request->country)->where('variant',$request->variant)->where('domination',$request->domination)->value('price');

    $total= $request->cardvalue * $card;

    return response()->json(['status'=>'true','amount'=>$total]);
  
  }

  return response()->json(['status'=>'false','message'=>'Such Giftcard not found']);
 
  
}


public function livebtc(Request $request){
  

  $curl = curl_init();
          
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.coindesk.com/v1/bpi/currentprice.json",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
   
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  
  curl_close($curl);
  
 $real = json_decode($response);





 //dd($real->bpi->USD->rate);

  $onebtc= $real->bpi->USD->rate ;
  $check = str_replace(',', '', $onebtc);
 
$valueofbtcneeded = $request->mainusd / $check ;

$valueinnaira = $request->mainusd * 480 ;




 

 return response()->json([
   'status'=>'true',
   'btc'=>$valueofbtcneeded,
   'naira'=>$valueinnaira
 ]);
}




//live eth

public function liveeth(Request $request){

  $curl = curl_init();
          
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=BTC,USD,EUR",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
   
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  
  curl_close($curl);
  
 $real = json_decode($response);
 //dd($real->USD);



 $check= $real->USD ;
  
 
$valueofbtcneeded = $request->mainusd / $check ;

$valueinnaira = $request->mainusd * 460 ;




 

 return response()->json([
   'status'=>'true',
   'eth'=>$valueofbtcneeded,
   'naira'=>$valueinnaira
 ]);


}

}
