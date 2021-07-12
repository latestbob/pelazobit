<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\bank;
use Auth;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    public function registerpage(){
        $banks=bank::all();
        return view('auth.register',compact('banks'));
    }

    public function register(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed',
         
            
            
        ]);

        /*
        $bankcode=bank::where('name',$request->bank)->value('code');
        //paystack
        $url = "https://api.paystack.co/subaccount";
        $fields = [
          'business_name' => $request->name,
          'bank_code' => $bankcode,
          'account_number' => $request->accountnumber,
          'percentage_charge' => 0,



          'metadata'=>[
            //meta datas here //////////////////////////
            
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'phone'=>$request->phone,
            'bank'=>$request->bank,
            'accountname'=>$request->accountname,
            

          ],
     
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
        $final = json_decode($result);

        */

  





       

        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
    
        //$user->phone=$final->data->metadata->phone;

       // $user->bank=$final->data->metadata->bank;
       // $user->accountnumber=$final->data->account_number;
      //  $user->accountname=$final->data->metadata->accountname;
        $user->isadmin='false';
       // $user->subaccountcode=$final->data->subaccount_code;
        $user->save();

        //return back()->with('success','Your registration was successful, Login to get started...');

        Auth::login($user);

        //Auth::guard('shop')->loginUsingId($shop->id);
        return redirect()->route('home');


        
    }
}
