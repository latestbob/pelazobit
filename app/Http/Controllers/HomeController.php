<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\transaction;
use App\Jobs\transactionJob;
use App\bank;
use App\Card;
use App\Giftcard;
use App\Withdraw;
use DB;
class HomeController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bank=bank::all();
        return view('home',compact('bank'));
    }

    public function buybtn(){
        return view('buybtc');
    }

    public function btc(){
        return view('btc');
    }

    public function eth(){
        return view('eth');
    }

    public function card(){
        return view('card');
    }


    ///customer bank setting

    public function bankaccount(){
        return view('bank');
    }

    //BANK ACCOUNT Update

    public function bankaccountpost(Request $request){
        $this->validate($request,[
            'bank'=>'required',
            'accountname'=>'required',
            'accountnumber'=>'required'
        ]);

        $user=User::where('email',Auth::user()->email)->update([
            'bank'=>$request->bank,
            'accountname'=>$request->accountname,
            'accountnumber'=>$request->accountnumber
        ]);

        return back()->with('msg','Bank Account details was updated successfully');
    }

    // btc transactions

    public function btctrans(Request $request){
   $this->validate($request,[
    'screenshots'=>'required|image|mimes:PNG,JPEG,JPG,png,jpeg,jpg,svg',
   ]);

    if(Auth::user()->bank == NULL){
        return back()->with('error','Update your Bank Account details to make transactions');
    }




   $min = 10000000;
   $max =  900000000;
   $transid=rand($min,$max);

   
   $image=$request->screenshots->getClientOriginalName();
   $request->screenshots->move('uploads',$image);


    $trans= new transaction;
    $trans->email=Auth::user()->email;
    $trans->name=Auth::user()->name;
    $trans->type=$request->type;
    $trans->value=$request->value;
    $trans->status='pending';
    $trans->screenshot=$image;
    $trans->transactionid=$transid;
    $trans->wallet=$request->amount;
    
    $trans->save();

    




    ////sending email notification to pelazobit here
   // dispatch(new  transactionJob());

    return back()->with('msg','Transaction has been delivered,and awaiting confirmation, We would respond to you shortly');


    }


    //withdrawal

    public function withdrawal(Request $request){
        $this->validate($request,[
            'amount'=>'required'
        ]);
        
        $total = User::where('email',Auth::user()->email)->value('total');
        if($request->amount > $total){
            return back()->with('error','Insufficient Wallet Funds');
        }
        
        $remainder= $total - $request->amount;

        $withdraw= new Withdraw;

        $withdraw->customer=Auth::user()->name;
        $withdraw->email=Auth::user()->email;
        $withdraw->withdraw_amount=$request->amount;
        $withdraw->status='pending';
        $withdraw->is_completed='false';
        $withdraw->remainder=$remainder;


        $withdraw->save();


        $newtotal= User::where('email',Auth::user()->email)->update([
            'total'=>$remainder
        ]);

        return back()->with('msg','Withdrawal request sent, awaiting admin approval, Your money will be sent to the registered bank account upon approval');
        

    }

    public function withdrawalspage(){

        $with = Withdraw::where('email',Auth::user()->email)->get();
        return view('withdrawals',compact('with'));
    }



    //REAL GIFTC ARD

    public function sellgiftcards(){
/*
        $card = DB::table('giftcards')
        ->select('country')
        ->groupBy('country')->where('name','Amazon Gift Card')
        ->get();
        
        */
        $cards=Card::all();
        return view('realgiftcard',compact('cards'));

        
    }

    //UNIQUE GIFT CARD
    public function giftcardname($name){

        $card=Giftcard::where('name',$name)->firstOrFail();
        $image=Card::where('name',$name)->value('image');

        $variant = DB::table('giftcards')
        ->select('variant')
        ->groupBy('variant')->where('name',$name)
        ->get();

        $country = DB::table('giftcards')
        ->select('country')
        ->groupBy('country')->where('name',$name)
        ->get();


        $domination = DB::table('giftcards')
        ->select('domination')
        ->groupBy('domination')->where('name',$name)
        ->get();
        

      //dd($variant);
        return view('uniquecard',compact('card','image','variant','country','domination'));
    }
}
