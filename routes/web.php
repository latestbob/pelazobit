<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

*/

Auth::routes(['verify' => true]);
//pagescontroller

//index page

Route::get('/','pagesController@index')->name('index');
Route::get('/realindex','pagesController@realindex')->name('realindex');
Route::get('/about','pagesController@about')->name('about');
Route::get('/auth','pagesController@authen')->name('authen');
Auth::routes();

////////////////////FOR USERS////////////////////////////

Route::get('/home', 'HomeController@index')->name('home')->middleware('customer');
Route::get('/buybtn','HomeController@buybtn')->name('buybtc')->middleware('customer');

Route::get('btc','HomeController@btc')->name('btc')->middleware('customer');
Route::get('eth','HomeController@eth')->name('eth')->middleware('customer');

Route::get('/bankdetails','pagesController@getbankdetails')->name('getbankdetails');


Route::get('giftcard','HomeController@card')->name('card')->middleware('customer');


Route::post('btc/trans','HomeController@btctrans')->name('btctrans')->middleware('customer');

/////////////////////END FOR USERS///////////////////////

///auth register post route///
Route::get('/register','Auth\RegisterController@registerpage')->name('registerpage');
Route::post('/register','Auth\RegisterController@register')->name('register');
Route::get('/rates','pagesController@rates')->name('rates');

Route::get('/account','HomeController@bankaccount')->name('bankaccount')->middleware('customer');
Route::put('/account','HomeController@bankaccountpost')->name('bankaccountpost')->middleware('customer');

Route::get('sellgiftcards','HomeController@sellgiftcards')->name('sellgiftcards')->middleware('customer');



/////////////////////ADMIN ROUTE/////////////////////////
Route::get('admin','AdminController@home')->name('admin.home')->middleware('admin');


Route::get('customers','AdminController@customers')->name('admin.customers')->middleware('admin');

Route::get('customer/{id}','AdminController@paycustomer')->name('admin.pay')->middleware('admin');

Route::post('/pay','AdminController@pay')->name('admin.pay.paystack')->middleware('admin');

//paystack route
Route::get('/pay','AdminController@paystack')->name('admin.paystack')->middleware('admin');

//Route::get('/transactions','AdminController@transactions')->name('admin.transactions')->middleware('admin');

Route::get('/transaction','AdminController@transaction')->name('admin.transaction')->middleware('admin');

Route::get('/withdrawrequest','AdminController@withdrawrequest')->name('admin.withdrawrequest')->middleware('admin');

Route::get('/approve/{id}','AdminController@approved')->name('withdrawapprove')->middleware('admin');
Route::post('/withdrawal','HomeController@withdrawal')->name('withdrawal')->middleware('customer');

Route::get('/withdrawals','HomeController@withdrawalspage')->name('withdrawalspage')->middleware('customer');
Route::get('transaction/{id}','AdminController@transactioncancelled')->name('admin.transaction.cancel')->middleware('admin');

Route::get('completed/{id}','AdminController@transactioncomplete')->name('admin.transaction.complete')->middleware('admin');

Route::post('delete/{id}','AdminController@transactiondelete')->name('admin.transaction.delete')->middleware('admin');

Route::get('/mybank','pagesController@mybank')->name('mybank')->middleware('auth');


Route::put('/mybank','pagesController@mybankupdate')->name('updatebank')->middleware('auth');

Route::get('/giftcardamount','pagesController@giftcardamount')->name('giftcardamount')->middleware('auth');


Route::get('livebtc','pagesController@livebtc')->name('livebtc');

Route::get('liveeth','pagesController@liveeth')->name('liveeth');



Route::get('/giftcard/{name}','HomeController@giftcardname')->name('uniquecard')->middleware('customer');