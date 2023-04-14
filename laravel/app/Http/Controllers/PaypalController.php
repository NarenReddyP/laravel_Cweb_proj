<?php

namespace App\Http\Controllers;
// use PayPal\Api\Payment;
use Illuminate\Http\Request\Api;

use App\Course;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
// use Illuminate\Http\Session;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Input;

// use Illuminate\Support\Facades\Session;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\ExecutePayment;
use Session;
use Config;

// use PayPal\Api\Session;
// use PayPal\Api\Redirect;

class PaypalController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $_api_context;

    public function __construct()
    {
        //$paypal_Configuration = \Config::get('paypal');
        $paypal_Configuration = \Config::get('paypal');
    
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_Configuration['client_id'], $paypal_Configuration['secret']));
        $this->_api_context->setConfig($paypal_Configuration['settings']);
    }
    
public function getpaywithpaypal(){
      return view('paywithpaypal');

}

public function postpaymentwithpaypal(Request $request)
{    
   $payer = new Payer();
   $payer->setPaymentMethod('paypal');
   
   $item_1 = new Item();
   $item_1->setName('Watch')
          ->setCurrency('USD')
          ->setQuantity(1)
          ->setPrice($request->get('amount'));

          $item_list = new ItemList();
          $item_list->setItems([$item_1]);

          $amount = new Amount();
          $amount->setCurrency('USD')
                 ->setTotal($request->get('amount'));

          $transaction = new Transaction();
          $transaction->setAmount($amount)
                       ->setItemList($item_list)
                      ->setDescription('Test');

          $redirect_urls = new RedirectUrls();
          $redirect_urls->setReturnUrl(URL::route('status'))
                        ->setCancelUrl(URL::route('status'));
                        
          $payment = new Payment();
          $payment->setIntent('Sale')
                  ->setPayer($payer)
                  ->setRedirectUrls($redirect_urls)
                  ->setTransactions(array($transaction));
                  
                  try{
                 
                     $payment->create($this->_api_context);
                    //  dd('hello');
                     }
                        catch(\PayPal\Exception\PayPalConnectionException $ex){
                    
                        // \PayPal\Exception\PPConnectionException
                        if(\Config::get('app.debug')){
                        \Session::put('error', 'Connection Timeout');
                        return Redirect::route('paywithpaypal');
                        }else{
                        \Session::put('error', 'Some error occur, Sorry for your inconvenience');
                        return Redirect::route('paywithpaypal');
                             }

                  }
               foreach($payment->getLinks() as $link){
                    if($link->getRel() == 'approval_url'){
                    $redirect_url = $link->getHref();
                    break;
                    }
               }
                
               \Session::put('paypal_payment_id', $payment->getId());
               if(isset($redirect_url)){
                return Redirect::away($redirect_url);
               }
               \Session::put('error','Unkown error occurred');
               return Redirect::route('paywithpaypal');
}

public function getpaymentstatus(Request $request){
//   dd($request->all());
   $payment_id = \Session::get('paypal_payment_id');
   \Session::forget('paypal_payment_id');

   if(empty($request->input('PayerID')) || empty($request->input('token'))){
        \Session::put('error', 'Payment failed');
        return Redirect::route('paywithpaypal');
   }
     $payment = Payment::get($payment_id,$this->_api_context);
     $execution = new PaymentExecution();
     $execution->setPayerId($request->input('PayerID'));
     $result = $payment->execute($execution,$this->_api_context);
     
    //  dd($result);  
     if($result->getState() == 'approved'){
        \Session::put('success', 'Payment success !!');
        return Redirect::route('paywithpaypal');
     }
     else{
     \Session::put('error', 'Payment failed!!');
     return Redirect::route('paywithpaypal');
         }
}










}



