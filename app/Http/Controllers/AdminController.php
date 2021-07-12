<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\transaction;
use App\payment;
use Auth;
use App\Withdraw;

class AdminController extends Controller
{
    //admin home dasbboard


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        return view('admin.home');
    }


    //Admin all customers   


    public function customers(){
        $user=User::where('email','!=',Auth::user()->email)->orderBy('id', 'DESC')->paginate(20);
        return view('admin.customers',compact('user'));

        
    }

    //pay speicific customer

    public function paycustomer($id){
        $customer=User::find($id);

        return view('admin.pay',compact('customer'));
    }



    ///subaccount payment
    public function pay(Request $request){
        $url = "https://api.paystack.co/transaction/initialize";
  $fields = [
    'email' => $request->email,
    'amount' => $request->amount.'00',
    'subaccount' => $request->subaccount,
    'bearer' => "subaccount"
  ];
  $fields_string = http_build_query($fields);
  //open connection
  $ch = curl_init();
  
  //set the url, number of POST vars, POST data
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_POST, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer sk_test_bbb8b8270c67bbc733dbb077ae39e8b67f75a282",
    "Cache-Control: no-cache",
  ));
  
  //So that curl_exec returns the contents of the cURL; rather than echoing it
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
  
  //execute post
  $result = curl_exec($ch);
  $initialize_data=json_decode($result);
    $initialization_url=$initialize_data->data->authorization_url;
  
    if($result){
        return redirect($initialization_url);
    }

}





//Admin transactions




public function transaction(){
    $trans = transaction::orderBy('id', 'DESC')->paginate(20);
    return view('admin.transactions',compact('trans'));
}

//transaction cancle



public function transactioncancelled($id){
    $trans= transaction::find($id)->update(

        ['status'=>'cancel',]
    );

    return back()->with('msg','Transaction has been cancelled');
}


//transaction delete

public function transactiondelete(Request $request,$id){

    $image=transaction::where('id',$id)->value('screenshot');

        
    unlink('uploads/'.$image);

    $trans=transaction::find($id)->delete();

    return back()->with('msg','Transaction deleted Successfully');
}


//paystack 

public function paystack(Request $request){
    $curl = curl_init();
    //$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
    
    $reference=$request->reference;
    if(!$reference){
        // header("Location: https://incomeopportunitymarketplace.com/my-account");
      //die('No reference supplied');
    
      return redirect('/');
    }

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
          "accept: application/json",
          "authorization: Bearer sk_test_bbb8b8270c67bbc733dbb077ae39e8b67f75a282", //PUT YOUR OWN KEY
          "cache-control: no-cache"
        ],
      ));

      $response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response);

//dd($tranx);


if(!$tranx->status){
  // there was an error from the API
  die('API returned error: ' . $tranx->message);
}


if('success' == $tranx->data->status){
  //if everything checks

  $pay=new payment;
  $pay->status=$tranx->data->status;
  $pay->reference=$tranx->data->reference;
  $pay->amount=$tranx->data->amount;


  return redirect(route('admin.transaction'));


}




}


//completed 

public function transactioncomplete($id){
 
  $trans=transaction::find($id)->update([
    'status'=>'completed'
  ]);
/*
  $amount=transaction::where('id',$id)->value('settlements');
  $user=transaction::where('id',$id)->value('email');
$customeroldvalue=User::where('email',$user)->value('total');
$newvalue= $amount + $customeroldvalue;
  $customer=User::where('email',$user)->update([
    'total'=>$newvalue,
  ]);

  */

  $transcomplete=transaction::where('id',$id)->where('status','completed')->exists();

  if($transcomplete){
    $amount = transaction::where('id',$id)->value('wallet');
    $customer= transaction::where('id',$id)->value('email');

    $customertotal = User::where('email',$customer)->value('total');

    $newtotal = $amount + $customertotal ;

    $finaltotal = User::where('email',$customer)->update([
      'total'=>$newtotal
    ]);

  }


  

  return back()->with('msg','Transaction was marked completed');
}


public function withdrawrequest(){
  $with = Withdraw::where('status','pending')->get();
  $with2 = Withdraw::where('status','completed')->get();
  return view('admin.withdraw',compact('with','with2'));
}



// withdraw approval

public function approved($id){
  $withdraw = Withdraw::find($id)->update([
    'status'=>'completed',

    'is_completed'=>'true'
  ]);

  return back()->with('msg','You have approved a withdrawal request');
}
}